@extends('admin.layout.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Liste des programmes</h4>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createProgramModal">+ Ajouter</button>
    </div>

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Catégorie</th>
                <th>Spécialiste</th>
                <th>Date</th>
                <th>En ligne</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($programs as $program)
                <tr>
                    <td>{{ $program->id }}</td>
                    <td>{{ $program->title }}</td>
                    <td>{{ $program->category?->name }}</td>
                    <td>{{ $program->specialist?->first_name }} {{ $program->specialist?->last_name }}</td>
                    <td>{{ $program->date }}</td>
                    <td>
                        <span class="badge {{ $program->is_online ? 'bg-success' : 'bg-secondary' }}">
                            {{ $program->is_online ? 'Oui' : 'Non' }}
                        </span>
                    </td>
                    <td>
                        <span class="badge {{ $program->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                            {{ ucfirst($program->status) }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('admin.programs.edit', $program->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                        <form action="{{ route('admin.programs.destroy', $program->id) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Supprimer ce programme ?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="8" class="text-center text-muted">Aucun programme trouvé.</td></tr>
            @endforelse
        </tbody>
    </table>

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
                <h5 class="modal-title" id="createProgramModalLabel">Ajouter un programme</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Titre</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Catégorie</label>
                        <select name="category_id" class="form-select" required>
                            <option value="">-- Sélectionner --</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Spécialiste</label>
                        <select name="specialist_id" class="form-select" required>
                            <option value="">-- Sélectionner --</option>
                            @foreach ($specialists as $spec)
                                <option value="{{ $spec->id }}">{{ $spec->first_name }} {{ $spec->last_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Date</label>
                        <input type="date" name="date" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">En ligne</label>
                        <select name="is_online" class="form-select" required>
                            <option value="1">Oui</option>
                            <option value="0">Non</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Statut</label>
                        <select name="status" class="form-select" required>
                            <option value="active">Actif</option>
                            <option value="desactive">Désactivé</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
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
