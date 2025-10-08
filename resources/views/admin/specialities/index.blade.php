@extends('admin.layout.app')

@section('content')
<div class="container py-4" >
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>إدارة التخصصات</h3>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
            + إضافة تخصص
        </button>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped text-center align-middle">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>اسم التخصص</th>
                    <th>تاريخ الإنشاء</th>
                    <th width="180">الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @forelse($specialities as $speciality)
                    <tr>
                        <td>{{ $speciality->id }}</td>
                        <td>{{ $speciality->name }}</td>
                        <td>{{ $speciality->created_at->format('Y-m-d') }}</td>
                        <td>
                            <button 
                                class="btn btn-sm btn-warning edit-btn" 
                                data-id="{{ $speciality->id }}" 
                                data-name="{{ $speciality->name }}"
                                data-bs-toggle="modal"
                                data-bs-target="#editModal">
                                تعديل
                            </button>
    
                            <form action="{{ route('admin.specialities.destroy', $speciality->id) }}" 
                                  method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button 
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('هل أنت متأكد من حذف هذا التخصص؟')">
                                    حذف
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">لا توجد تخصصات حالياً</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{ $specialities->links() }}
</div>

{{-- نافذة إضافة تخصص --}}
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="{{ route('admin.specialities.store') }}" method="POST" class="modal-content">
        @csrf
        <div class="modal-header">
            <h5 class="modal-title" id="createModalLabel">إضافة تخصص جديد</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="name">اسم التخصص</label>
                <input type="text" name="name" class="form-control" placeholder="أدخل اسم التخصص" required>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
            <button type="submit" class="btn btn-success">حفظ</button>
        </div>
    </form>
  </div>
</div>

{{-- نافذة تعديل تخصص --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="editForm" method="POST" class="modal-content">
        @csrf
        @method('PUT')
        <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">تعديل التخصص</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="edit-name">اسم التخصص</label>
                <input type="text" name="name" id="edit-name" class="form-control" required>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
            <button type="submit" class="btn btn-primary">تحديث</button>
        </div>
    </form>
  </div>
</div>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.edit-btn');
    const editForm = document.getElementById('editForm');
    const editNameInput = document.getElementById('edit-name');

    editButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const id = btn.getAttribute('data-id');
            const name = btn.getAttribute('data-name');

            editNameInput.value = name;
            editForm.action = `/admin/specialities/${id}`;
        });
    });
});
</script>
@endpush
