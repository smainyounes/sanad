@extends('admin.layout.app')

@section('content')
<div class="container mt-4">
    <h4>تعديل البرنامج</h4>
    <form action="{{ route('admin.programs.update', $program->id) }}" method="POST" class="mt-3">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">العنوان</label>
                <input type="text" name="title" class="form-control" value="{{ $program->title }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">الفئة</label>
                <select name="category_id" class="form-select" required>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}" {{ $program->category_id == $cat->id ? 'selected' : '' }}>
                            {{ $cat->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">الأخصائي</label>
                <select name="specialist_id" class="form-select" required>
                    @foreach ($specialists as $spec)
                        <option value="{{ $spec->id }}" {{ $program->specialist_id == $spec->id ? 'selected' : '' }}>
                            {{ $spec->name }} 
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">التاريخ</label>
                <input type="date" name="date" class="form-control" value="{{ $program->date }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">عبر الإنترنت</label>
                <select name="is_online" class="form-select" required>
                    <option value="1" {{ $program->is_online ? 'selected' : '' }}>نعم</option>
                    <option value="0" {{ !$program->is_online ? 'selected' : '' }}>لا</option>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">الحالة</label>
                <select name="status" class="form-select" required>
                    <option value="active" {{ $program->status == 'active' ? 'selected' : '' }}>نشط</option>
                    <option value="desactive" {{ $program->status == 'desactive' ? 'selected' : '' }}>غير نشط</option>
                </select>
            </div>
            <div class="col-12">
                <label class="form-label">الوصف</label>
                <textarea name="description" class="form-control" rows="3">{{ $program->description }}</textarea>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('admin.programs.index') }}" class="btn btn-secondary">إلغاء</a>
            <button type="submit" class="btn btn-primary">تحديث</button>
        </div>
    </form>
</div>
@endsection
