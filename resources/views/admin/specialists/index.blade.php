@extends('admin.layout.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>قائمة الأخصائيين</h4>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createSpecialistModal">+ إضافة</button>
    </div>

    <div class="table-responsive">
        <table class="table table-striped text-center align-middle">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>الصورة</th>
                    <th>الاسم</th>
                    <th>البريد الإلكتروني</th>
                    <th>التخصص</th>
                    <th>السيرة</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($specialists as $specialist)
                    <tr>
                        <td>{{ $specialist->id }}</td>
                        <td>
                            @if($specialist->image)
                                <img src="{{ asset($specialist->image) }}" alt="" width="60" height="60" class="rounded-circle object-fit-cover">
                            @else
                                <span class="text-muted">لا توجد</span>
                            @endif
                        </td>
                        <td>{{ $specialist->name }}</td>
                        <td>{{ $specialist->email }}</td>
                        <td>{{ $specialist->speciality?->name }}</td>
                        <td>{{ Str::limit($specialist->bio, 50) }}</td>
                        <td>
                            <a href="{{ route('admin.specialists.edit', $specialist->id) }}" class="btn btn-sm btn-warning">تعديل</a>
                            <form action="{{ route('admin.specialists.destroy', $specialist->id) }}" method="POST" class="d-inline" onsubmit="return confirm('حذف هذا الأخصائي؟');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">حذف</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="7" class="text-center text-muted">لا يوجد أخصائيون.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-3">
        {{ $specialists->links() }}
    </div>
</div>

<!-- Modal: Create Specialist -->
<div class="modal fade" id="createSpecialistModal" tabindex="-1" aria-labelledby="createSpecialistModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('admin.specialists.store') }}" method="POST" enctype="multipart/form-data" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="createSpecialistModalLabel">إضافة أخصائي</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
            </div>

            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">الاسم الكامل</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">البريد الإلكتروني</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">كلمة المرور</label>
                        <input type="password" name="password" class="form-control" required minlength="6" placeholder="أدخل كلمة المرور">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">تأكيد كلمة المرور</label>
                        <input type="password" name="password_confirmation" class="form-control" required minlength="6" placeholder="أعد إدخال كلمة المرور">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">التخصص</label>
                        <select name="speciality_id" class="form-select" required>
                            <option value="">-- اختر --</option>
                            @foreach ($specialities as $s)
                                <option value="{{ $s->id }}">{{ $s->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">الصورة</label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                    </div>

                    <div class="col-12">
                        <label class="form-label">السيرة</label>
                        <textarea name="bio" class="form-control" rows="3" placeholder="وصف مختصر..."></textarea>
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
