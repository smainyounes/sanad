@extends('client_new.layouts.app')

@section('title', 'حجوزاتي')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <h3 class="mb-4 text-center">حجوزاتي</h3>

                    {{-- Tabs --}}
                    <ul class="nav nav-tabs mb-3" id="reservationTabs">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#programTab" type="button">
                                حجوزات البرامج
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#specialistTab" type="button">
                                الحجوزات المباشرة مع الأخصائيين
                            </button>
                        </li>
                    </ul>

                    {{-- Tab Content --}}
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="programTab">
                            @include('client_new.reservations.partials.programs')
                        </div>

                        <div class="tab-pane fade" id="specialistTab">
                            @include('client_new.reservations.partials.specialists')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script>
function updateProgramReservation(id, status) {
    Swal.fire({
        title: 'تأكيد العملية',
        text: 'هل أنت متأكد من تنفيذ هذا الإجراء؟',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'نعم',
        cancelButtonText: 'إلغاء'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "{{ route('client.programReservations.updateStatus') }}",
                method: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                    status: status
                },
                success: function (res) {
                    if (res.success) {
                        Swal.fire('تم بنجاح', res.message, 'success').then(() => location.reload());
                    } else {
                        Swal.fire('خطأ', res.message, 'error');
                    }
                },
                error: () => Swal.fire('خطأ', 'حدث خطأ أثناء تنفيذ العملية', 'error')
            });
        }
    });
}

function updateSpecialistReservation(id, status) {
    Swal.fire({
        title: 'تأكيد العملية',
        text: 'هل أنت متأكد من تنفيذ هذا الإجراء؟',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'نعم',
        cancelButtonText: 'إلغاء'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "{{ route('client.specialistReservations.updateStatus') }}",
                method: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                    status: status
                },
                success: function (res) {
                    if (res.success) {
                        Swal.fire('تم بنجاح', res.message, 'success').then(() => location.reload());
                    } else {
                        Swal.fire('خطأ', res.message, 'error');
                    }
                },
                error: () => Swal.fire('خطأ', 'حدث خطأ أثناء تنفيذ العملية', 'error')
            });
        }
    });
}
</script>
@endsection
