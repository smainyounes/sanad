@extends('admin.layout.app')

@section('content')
<div class="container mt-4">
    <h4>Modifier le programme</h4>
    <form action="{{ route('admin.programs.update', $program->id) }}" method="POST" class="mt-3">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Titre</label>
                <input type="text" name="title" class="form-control" value="{{ $program->title }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Catégorie</label>
                <select name="category_id" class="form-select" required>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}" {{ $program->category_id == $cat->id ? 'selected' : '' }}>
                            {{ $cat->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">Spécialiste</label>
                <select name="specialist_id" class="form-select" required>
                    @foreach ($specialists as $spec)
                        <option value="{{ $spec->id }}" {{ $program->specialist_id == $spec->id ? 'selected' : '' }}>
                            {{ $spec->first_name }} {{ $spec->last_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">Date</label>
                <input type="date" name="date" class="form-control" value="{{ $program->date }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">En ligne</label>
                <select name="is_online" class="form-select" required>
                    <option value="1" {{ $program->is_online ? 'selected' : '' }}>Oui</option>
                    <option value="0" {{ !$program->is_online ? 'selected' : '' }}>Non</option>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">Statut</label>
                <select name="status" class="form-select" required>
                    <option value="active" {{ $program->status == 'active' ? 'selected' : '' }}>Actif</option>
                    <option value="desactive" {{ $program->status == 'desactive' ? 'selected' : '' }}>Désactivé</option>
                </select>
            </div>
            <div class="col-12">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="3">{{ $program->description }}</textarea>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('admin.programs.index') }}" class="btn btn-secondary">Annuler</a>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </div>
    </form>
</div>
@endsection
