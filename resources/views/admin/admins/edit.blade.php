@extends('admin.layout.app')

@section('content')
    <div class="container my-5">
        <h1>Modifier un Admin</h1>

        <form method="POST" action="{{ route('admins.update', $admin->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $admin->name) }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $admin->email) }}" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>

            <div class="mb-3">
                <label>Role</label>
                <select class="form-control" name="role">
                    <option value="super_admin" {{ $admin->admin_type == 'super_admin' ? 'selected' : '' }}>Super admin</option>
                    @if ($roles->isNotEmpty())
                        @foreach ($roles as $role)
                            <option value="{{ $role->name }}" {{ $admin->hasRole($role->name) ? 'selected' : '' }}>{{ $role->name }}</option>
                        @endforeach
                    @endif
                </select>
                @error('role')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="can_login" class="form-label">Peut se connecter</label>
                <select class="form-select @error('can_login') is-invalid @enderror" id="can_login" name="can_login" required>
                    <option value="1" {{ old('can_login', $admin->can_login) == 1 ? 'selected' : '' }}>Oui</option>
                    <option value="0" {{ old('can_login', $admin->can_login) == 0 ? 'selected' : '' }}>Non</option>
                </select>
                @error('can_login')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Téléphone</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', $admin->phone) }}">
                @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>

    </div>
@endsection