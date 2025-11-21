@extends('client_new.layouts.app')

@section('title', 'ملفي الشخصي')

@section('styles')
    {{-- Add any extra, page-specific styles here --}}
    <style>
        .profile-avatar-wrapper {
            position: relative;
        }
        .profile-avatar {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 4px solid white;
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
        }
    </style>
@endsection

@section('content')
    <!-- PAGE HEADER -->
    <header class="hero-gradient text-white text-center py-5">
        <div class="container py-md-4 wow animate__animated animate__fadeIn">
            <h1 class="display-5">ملفي الشخصي</h1>
            <p class="lead text-white-75 mt-3">
                قم بتحديث معلوماتك الشخصية وصورتك الرمزية.
            </p>
        </div>
    </header>

    <main class="soft-gradient py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow-lg border-0 wow animate__animated animate__fadeInUp" style="border-radius: 1rem;">
                        <div class="card-body p-4 p-lg-5">
                            
                            <div class="row g-5">
                                <!-- Left Column: Profile Picture & Info -->
                                <div class="col-lg-4 text-center d-flex flex-column align-items-center">
                                    <div class="profile-avatar-wrapper mb-3">
                                        <img src="{{ $user->image ? asset($user->image) : 'https://ui-avatars.com/api/?name=' . urlencode($user->name) . '&background=667eea&color=fff&size=150' }}"
                                             alt="Profile Image"
                                             class="rounded-circle profile-avatar">
                                    </div>
                                    <h4 class="mb-1">{{ $user->name }}</h4>
                                    <p class="text-muted">{{ $user->email }}</p>
                                </div>

                                <!-- Right Column: Edit Form -->
                                <div class="col-lg-8">
                                    <h3 class="mb-4">تعديل المعلومات</h3>

                                    @if (session('success'))
                                        <div class="alert alert-success d-flex align-items-center" role="alert">
                                            <i class="fas fa-check-circle me-2"></i>
                                            <div>{{ session('success') }}</div>
                                        </div>
                                    @endif

                                    <form action="{{ route('client.profile.update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-4">
                                            <label for="name" class="form-label fw-bold">الاسم الكامل</label>
                                            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="form-control p-3 @error('name') is-invalid @enderror" required>
                                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="mb-4">
                                            <label for="email" class="form-label fw-bold">البريد الإلكتروني</label>
                                            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="form-control p-3 @error('email') is-invalid @enderror" required>
                                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="mb-4">
                                            <label for="bio" class="form-label fw-bold">نبذة عنك</label>
                                            <textarea id="bio" name="bio" class="form-control p-3 @error('bio') is-invalid @enderror" rows="4">{{ old('bio', $user->bio) }}</textarea>
                                            @error('bio') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="mb-4">
                                            <label for="image" class="form-label fw-bold">تغيير الصورة الشخصية</label>
                                            <input type="file" id="image" name="image" accept="image/*" class="form-control @error('image') is-invalid @enderror">
                                             @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="mt-4">
                                            <button type="submit" class="btn btn-brand-primary px-5 py-2">حفظ التغييرات</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection