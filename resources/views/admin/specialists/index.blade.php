@extends('admin.layout.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Liste des spécialistes</h4>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createSpecialistModal">+ Ajouter</button>
    </div>

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Spécialité</th>
                <th>Bio</th>
                <th>Actions</th>
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
                            <span class="text-muted">Aucune</span>
                        @endif
                    </td>
                    <td>{{ $specialist->name }}</td>
                    <td>{{ $specialist->email }}</td>
                    <td>{{ $specialist->speciality?->name }}</td>
                    <td>{{ Str::limit($specialist->bio, 50) }}</td>
                    <td>
                        <a href="{{ route('admin.specialists.edit', $specialist->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                        <form action="{{ route('admin.specialists.destroy', $specialist->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer ce spécialiste ?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="7" class="text-center text-muted">Aucun spécialiste trouvé.</td></tr>
            @endforelse
        </tbody>
    </table>

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
                <h5 class="modal-title" id="createSpecialistModalLabel">Ajouter un spécialiste</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Nom complet</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Spécialité</label>
                        <select name="speciality_id" class="form-select" required>
                            <option value="">-- Sélectionner --</option>
                            @foreach ($specialities as $s)
                                <option value="{{ $s->id }}">{{ $s->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Bio</label>
                        <textarea name="bio" class="form-control" rows="3" placeholder="Brève description..."></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
</div>
@endsection
