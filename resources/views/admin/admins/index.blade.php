@extends('admin.layout.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Gestion des Administrateurs</h1>
        @include('admin.includes.alert')
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addAdminModal">Ajouter un Administrateur</button>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        {{-- <th>Role</th> --}}
                        <th>Peut se connecter</th>
                        <th>Téléphone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admins as $admin)
                        <tr>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->email }}</td>
                            {{-- <td>
                                @if ($admin->admin_type == 'super_admin')
                                    Super admin
                                @else
                                    @if ($admin->getRoleNames()->isNotEmpty())
                                        {{ $admin->getRoleNames()->first() }}
                                    @endif
                                @endif
                            </td> --}}
                            <td>
                                @if ($admin->admin_type != 'super_admin')
                                    {{ $admin->can_login ? 'Oui' : 'Non' }}
                                @endif
                            </td>
                            <td>{{ $admin->phone }}</td>
                            <td>
                                <a href="{{ route('admins.edit', $admin->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                                <form action="{{ route('admin.regenInviteToken', $admin->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-secondary btn-sm">Invite</button>
                                </form>
                                <form action="{{ route('admins.destroy', $admin->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet administrateur ? Cette action est irréversible.');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
    
            </table>
        </div>
    </div>

    <!-- Add Admin Modal -->
    <div class="modal fade" id="addAdminModal" tabindex="-1" aria-labelledby="addAdminModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAdminModalLabel">Ajouter un Administrateur</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admins.store') }}">
                        @csrf
            
                        <div class="mb-3">
                            <label for="name" class="form-label">Nom</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
            
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
            
                        {{-- <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
            
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div> --}}
                        {{-- <div class="mb-3">
                            <label>Role</label>
                            <select class="form-control" name="role">
                                <option value="super_admin">Super admin</option>
                                @if ($roles->isNotEmpty())
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('role')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div> --}}
            
                        <div class="mb-3">
                            <label for="can_login" class="form-label">Peut se connecter</label>
                            <select class="form-select @error('can_login') is-invalid @enderror" id="can_login" name="can_login" required>
                                <option value="1">Oui</option>
                                <option value="0">Non</option>
                            </select>
                            @error('can_login')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
            
                        <div class="mb-3">
                            <label for="phone" class="form-label">Téléphone <small class="text-muted">(Optionel)</small></label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
            
                        <button type="submit" class="btn btn-primary">Ajouter Admin</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection