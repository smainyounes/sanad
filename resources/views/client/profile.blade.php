@extends('client.layouts.app')

@section('title', 'صفحتي')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <h3 class="mb-4 text-center">ملفي الشخصي</h3>

                    @if (session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('client.profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="text-center mb-4">
                            <img src="{{ $user->image ? asset($user->image) : asset('assets/images/default-user.png') }}"
                                 alt="Profile Image"
                                 class="rounded-circle mb-2"
                                 style="width: 120px; height: 120px; object-fit: cover;">

                            <div class="mt-2">
                                <label class="btn btn-outline-primary btn-sm">
                                    اختر صورة جديدة
                                    <input type="file" name="image" accept="image/*" hidden>
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">الاسم الكامل</label>
                            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" required>
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">البريد الإلكتروني</label>
                            <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required>
                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">نبذة عنك</label>
                            <textarea name="bio" class="form-control" rows="4">{{ old('bio', $user->bio) }}</textarea>
                            @error('bio') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success px-5">حفظ التغييرات</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
