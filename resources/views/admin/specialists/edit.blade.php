@extends('admin.layout.app')

@section('content')
<div class="container mt-4">
    <h4>تعديل الأخصائي</h4>
    <form action="{{ route('admin.specialists.update', $specialist->id) }}" method="POST" enctype="multipart/form-data" class="mt-3">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">الاسم الكامل</label>
                <input type="text" name="name" class="form-control" value="{{ $specialist->name }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">البريد الإلكتروني</label>
                <input type="email" name="email" class="form-control" value="{{ $specialist->email }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">التخصص</label>
                <select name="speciality_id" class="form-select" required>
                    @foreach ($specialities as $s)
                        <option value="{{ $s->id }}" {{ $specialist->speciality_id == $s->id ? 'selected' : '' }}>
                            {{ $s->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">الصورة</label>
                <input type="file" name="image" class="form-control" accept="image/*">
                @if($specialist->image)
                    <img src="{{ asset($specialist->image) }}" alt="الصورة" class="mt-2 rounded" width="100">
                @endif
            </div>
            <div class="col-12">
                <label class="form-label">نبذة</label>
                <textarea name="bio" class="form-control" rows="3">{{ $specialist->bio }}</textarea>
            </div>
        </div>
        <div class="mt-4">
            <a href="{{ route('admin.specialists.index') }}" class="btn btn-secondary">إلغاء</a>
            <button type="submit" class="btn btn-primary">تحديث</button>
        </div>
    </form>
</div>
@endsection
