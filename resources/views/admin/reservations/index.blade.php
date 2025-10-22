@extends('admin.layout.app')

@section('content')
<div class="container mt-4" dir="rtl">
    <ul class="nav nav-tabs" id="reservationTabs" role="tablist">
        <li class="nav-item">
            <button class="nav-link active" id="specialists-tab" data-type="specialists">حجوزات الأخصائيين</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" id="programs-tab" data-type="programs">حجوزات البرامج</button>
        </li>
    </ul>

    <div class="search-box mt-3">
        <input type="text" id="searchInput" class="form-control" placeholder="ابحث باسم المستخدم أو الأخصائي أو البرنامج...">
    </div>

    <div id="reservationsContainer" class="mt-4 position-relative">
        <div id="loading" class="text-center text-muted mt-5">جارٍ التحميل...</div>
        <table class="table table-striped align-middle text-center d-none" id="reservationsTable">
            <thead>
                <tr>
                    <th>المستخدم</th>
                    <th class="type-column">الأخصائي</th>
                    <th>التاريخ</th>
                    <th>الوقت</th>
                    <th>الحالة</th>
                    <th>ملاحظات</th>
                    <th>إجراءات</th>
                </tr>
            </thead>
            <tbody id="reservationRows"></tbody>
        </table>
        <div id="noResults" class="text-center text-muted d-none mt-3">لا توجد نتائج مطابقة.</div>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    let currentType = 'specialists';
    let page = 1;
    let loading = false;
    let lastPage = false;
    let search = '';

    const rows = document.getElementById('reservationRows');
    const table = document.getElementById('reservationsTable');
    const loadingDiv = document.getElementById('loading');
    const noResults = document.getElementById('noResults');
    const searchInput = document.getElementById('searchInput');

    function getApiUrl() {
        return currentType === 'specialists'
            ? "{{ route('admin.reservations.specialists') }}"
            : "{{ route('admin.reservations.programs') }}";
    }

    function getEditUrl(id) {
        return currentType === 'specialists'
            ? `/admin/reservations/specialists/${id}/edit`
            : `/admin/reservations/programs/${id}/edit`;
    }

    function getDeleteUrl(id) {
        return currentType === 'specialists'
            ? `/admin/reservations/specialists/${id}`
            : `/admin/reservations/programs/${id}`;
    }

    function showNoData(message = 'لا توجد بيانات لعرضها حالياً.') {
        table.classList.add('d-none');
        loadingDiv.classList.add('d-none');
        noResults.textContent = message;
        noResults.classList.remove('d-none');
    }

    function loadReservations(reset = false) {
        if (loading || lastPage) return;
        loading = true;

        if (reset) {
            page = 1;
            rows.innerHTML = '';
            lastPage = false;
            table.classList.add('d-none');
            noResults.classList.add('d-none');
            loadingDiv.classList.remove('d-none');
        }

        fetch(`${getApiUrl()}?page=${page}&search=${encodeURIComponent(search)}`)
            .then(res => res.json())
            .then(data => {
                loading = false;
                loadingDiv.classList.add('d-none');

                if (!data.data || data.data.length === 0) {
                    if (page === 1) {
                        showNoData(search ? 'لا توجد نتائج مطابقة.' : 'لا توجد بيانات لعرضها حالياً.');
                    }
                    lastPage = true;
                    return;
                }

                table.classList.remove('d-none');
                noResults.classList.add('d-none');

                data.data.forEach(res => {
                    const tr = document.createElement('tr');
                    const related = currentType === 'specialists'
                        ? (res.specialist?.name ?? '—')
                        : (res.program?.title ?? '—');

                    tr.innerHTML = `
                        <td>${res.user?.name ?? '—'}</td>
                        <td>${related}</td>
                        <td>${res.date ?? '—'}</td>
                        <td>${res.time ?? '—'}</td>
                        <td><span class="badge bg-info">${res.status}</span></td>
                        <td>${res.note ?? '—'}</td>
                        <td>
                            <a href="${getEditUrl(res.id)}" class="btn btn-sm btn-primary me-1">تعديل</a>
                            <button class="btn btn-sm btn-danger delete-btn" data-id="${res.id}">حذف</button>
                        </td>
                    `;
                    rows.appendChild(tr);
                });

                lastPage = !data.next_page_url;
                page++;
            })
            .catch(() => {
                loading = false;
                showNoData('حدث خطأ أثناء تحميل البيانات.');
            });
    }

    // 🧭 Tab Switching
    document.querySelectorAll('#reservationTabs button').forEach(tab => {
        tab.addEventListener('click', (e) => {
            document.querySelectorAll('#reservationTabs button').forEach(btn => btn.classList.remove('active'));
            e.target.classList.add('active');
            currentType = e.target.getAttribute('data-type');
            document.querySelector('.type-column').textContent =
                currentType === 'specialists' ? 'الأخصائي' : 'البرنامج';
            lastPage = false;
            loadReservations(true);
        });
    });

    // 🔍 Live Search with debounce
    let searchTimeout = null;
    searchInput.addEventListener('input', e => {
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(() => {
            search = e.target.value.trim();
            loadReservations(true);
        }, 400);
    });

    // ♾️ Infinite Scroll
    window.addEventListener('scroll', () => {
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 100) {
            loadReservations();
        }
    });

    // 🗑️ Delete Logic
    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('delete-btn')) {
            const id = e.target.getAttribute('data-id');
            Swal.fire({
                title: 'هل أنت متأكد؟',
                text: 'سيتم حذف هذا الحجز نهائياً!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'نعم، احذف',
                cancelButtonText: 'إلغاء'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(getDeleteUrl(id), {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            Swal.fire('تم الحذف!', data.message, 'success');
                            loadReservations(true);
                        } else {
                            Swal.fire('خطأ!', 'تعذر حذف الحجز.', 'error');
                        }
                    })
                    .catch(() => Swal.fire('خطأ!', 'حدث خطأ أثناء الاتصال بالخادم.', 'error'));
                }
            });
        }
    });

    // 🚀 Initial load
    loadReservations(true);
});
</script>
@endsection
