@extends('admin.layout.app')

@section('content')
    <div class="container mt-5" dir="rtl">
        <h3 class="mb-4">تعديل حجز البرنامج</h3>

        <form id="editProgramForm">
            @csrf
            <div class="mb-3">
                <label class="form-label">المستخدم</label>
                <input type="text" class="form-control" value="{{ $reservation->user->name }}" disabled>
            </div>

            <div class="mb-3">
                <label class="form-label">البرنامج</label>
                <input type="text" class="form-control" value="{{ $reservation->program->title }}" disabled>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">التاريخ</label>
                    <input type="date" name="date" class="form-control" value="{{ $reservation->date }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">الوقت</label>
                    <input type="time" name="time" class="form-control" value="{{ $reservation->time }}">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">الحالة</label>
                <select name="status" class="form-select">
                    <option value="pending" @selected($reservation->status === 'pending')>قيد المعالجة</option>
                    <option value="confirmed" @selected($reservation->status === 'confirmed')>مؤكد</option>
                    <option value="cancelled" @selected($reservation->status === 'cancelled')>ملغى</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">ملاحظات</label>
                <textarea name="note" class="form-control">{{ $reservation->note }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">تحديث</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
    document.getElementById('editProgramForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(this);

        fetch("{{ route('admin.reservations.programs.update', $reservation->id) }}", {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                Swal.fire('تم التحديث', data.message, 'success');
            } else {
                Swal.fire('خطأ', 'حدث خطأ أثناء التحديث', 'error');
            }
        })
        .catch(() => Swal.fire('خطأ', 'تعذر الاتصال بالخادم', 'error'));
    });
    </script>
@endsection
