@extends('admin.layout.app')

@section('content')
    <div class="container my-5" dir="rtl">
        <h1 class="text-end mb-4">تعديل مشرف</h1>

        <form method="POST" action="{{ route('admins.update', $admin->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3 text-end">
                <label for="name" class="form-label">الاسم</label>
                <input 
                    type="text" 
                    class="form-control @error('name') is-invalid @enderror" 
                    id="name" 
                    name="name" 
                    value="{{ old('name', $admin->name) }}" 
                    required
                >
                @error('name')
                    <div class="invalid-feedback text-start">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 text-end">
                <label for="email" class="form-label">البريد الإلكتروني</label>
                <input 
                    type="email" 
                    class="form-control @error('email') is-invalid @enderror" 
                    id="email" 
                    name="email" 
                    value="{{ old('email', $admin->email) }}" 
                    required
                >
                @error('email')
                    <div class="invalid-feedback text-start">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 text-end">
                <label for="password" class="form-label">كلمة المرور</label>
                <input 
                    type="password" 
                    class="form-control @error('password') is-invalid @enderror" 
                    id="password" 
                    name="password"
                >
                @error('password')
                    <div class="invalid-feedback text-start">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 text-end">
                <label for="password_confirmation" class="form-label">تأكيد كلمة المرور</label>
                <input 
                    type="password" 
                    class="form-control" 
                    id="password_confirmation" 
                    name="password_confirmation"
                >
            </div>

            <!--
            <div class="mb-3 text-end">
                <label class="form-label">الدور</label>
                <select class="form-control" name="role">
                    <option value="super_admin" {{ $admin->admin_type == 'super_admin' ? 'selected' : '' }}>مشرف عام</option>
                    @if ($roles->isNotEmpty())
                        @foreach ($roles as $role)
                            <option value="{{ $role->name }}" {{ $admin->hasRole($role->name) ? 'selected' : '' }}>{{ $role->name }}</option>
                        @endforeach
                    @endif
                </select>
                @error('role')
                    <div class="invalid-feedback text-start">{{ $message }}</div>
                @enderror
            </div>
            -->

            <div class="mb-3 text-end">
                <label for="can_login" class="form-label">يمكنه تسجيل الدخول</label>
                <select 
                    class="form-select @error('can_login') is-invalid @enderror" 
                    id="can_login" 
                    name="can_login" 
                    required
                >
                    <option value="1" {{ old('can_login', $admin->can_login) == 1 ? 'selected' : '' }}>نعم</option>
                    <option value="0" {{ old('can_login', $admin->can_login) == 0 ? 'selected' : '' }}>لا</option>
                </select>
                @error('can_login')
                    <div class="invalid-feedback text-start">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 text-end">
                <label for="phone" class="form-label">رقم الهاتف</label>
                <input 
                    type="text" 
                    class="form-control @error('phone') is-invalid @enderror" 
                    id="phone" 
                    name="phone" 
                    value="{{ old('phone', $admin->phone) }}"
                >
                @error('phone')
                    <div class="invalid-feedback text-start">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100">تحديث</button>
        </form>
    </div>
@endsection
