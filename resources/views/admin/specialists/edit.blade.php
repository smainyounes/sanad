@extends('admin.layout.app')

@section('content')
<div class="container mt-4">
    <h4>Modifier le spécialiste</h4>
    <form action="{{ route('admin.specialists.update', $specialist->id) }}" method="POST" enctype="multipart/form-data" class="mt-3">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Nom complet</label>
                <input type="text" name="name" class="form-control" value="{{ $specialist->name }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $specialist->email }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Spécialité</label>
                <select name="speciality_id" class="form-select" required>
                    @foreach ($specialities as $s)
                        <option value="{{ $s->id }}" {{ $specialist->speciality_id == $s->id ? 'selected' : '' }}>
                            {{ $s->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">Image</label>
                <input type="file" name="image" class="form-control" accept="image/*">
                @if($specialist->image)
                    <img src="{{ asset($specialist->image) }}" alt="image" class="mt-2 rounded" width="100">
                @endif
            </div>
            <div class="col-12">
                <label class="form-label">Bio</label>
                <textarea name="bio" class="form-control" rows="3">{{ $specialist->bio }}</textarea>
            </div>
        </div>
        <div class="mt-4">
            <a href="{{ route('admin.specialists.index') }}" class="btn btn-secondary">Annuler</a>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </div>
    </form>
</div>
@endsection
