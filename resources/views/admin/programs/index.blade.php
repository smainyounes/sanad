@extends('admin.layout.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>قائمة البرامج</h4>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createProgramModal">+ إضافة</button>
    </div>
    
    <div class="table-responsive">
        <table class="table table-striped text-center align-middle">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>العنوان</th>
                    <th>الفئة</th>
                    <th>الأخصائي</th>
                    <th>التاريخ</th>
                    <th>أونلاين</th>
                    <th>الحالة</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($programs as $program)
                    <tr>
                        <td>{{ $program->id }}</td>
                        <td>{{ $program->title }}</td>
                        <td>{{ $program->category?->name }}</td>
                        <td>{{ $program->specialist?->name }}</td>
                        <td>{{ $program->date }}</td>
                        <td>
                            <span class="badge {{ $program->is_online ? 'bg-success' : 'bg-secondary' }}">
                                {{ $program->is_online ? 'نعم' : 'لا' }}
                            </span>
                        </td>
                        <td>
                            <span class="badge {{ $program->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                                {{ $program->status == 'active' ? 'نشط' : 'معطل' }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('admin.programs.edit', $program->id) }}" class="btn btn-sm btn-warning">تعديل</a>
                            <form action="{{ route('admin.programs.destroy', $program->id) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('حذف هذا البرنامج؟');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">حذف</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="8" class="text-center text-muted">لا توجد برامج.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-3">
        {{ $programs->links() }}
    </div>
</div>

<!-- Modal: Create Program -->
<div class="modal fade" id="createProgramModal" tabindex="-1" aria-labelledby="createProgramModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('admin.programs.store') }}" method="POST" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="createProgramModalLabel">إضافة برنامج</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">العنوان</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">الفئة</label>
                        <select name="category_id" class="form-select" required>
                            <option value="">-- اختر --</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">الأخصائي</label>
                        <select name="specialist_id" class="form-select" required>
                            <option value="">-- اختر --</option>
                            @foreach ($specialists as $spec)
                                <option value="{{ $spec->id }}">{{ $spec->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">التاريخ</label>
                        <input type="date" name="date" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">أونلاين</label>
                        <select name="is_online" class="form-select" required>
                            <option value="1">نعم</option>
                            <option value="0">لا</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">الحالة</label>
                        <select name="status" class="form-select" required>
                            <option value="active">نشط</option>
                            <option value="desactive">معطل</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label">الوصف</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                <button type="submit" class="btn btn-primary">حفظ</button>
            </div>
        </form>
    </div>
</div>
@endsection
