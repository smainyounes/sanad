@extends('admin.layout.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row g-4">
        <div class="col-md-3 col-sm-6">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="fas fa-stethoscope fa-2x text-primary mb-2"></i>
                    <h5 class="fw-bold mb-0">{{ $specialitiesCount }}</h5>
                    <small class="text-muted">Spécialités</small>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="fas fa-layer-group fa-2x text-success mb-2"></i>
                    <h5 class="fw-bold mb-0">{{ $categoriesCount }}</h5>
                    <small class="text-muted">Catégories</small>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="fas fa-user-md fa-2x text-info mb-2"></i>
                    <h5 class="fw-bold mb-0">{{ $specialistsCount }}</h5>
                    <small class="text-muted">Spécialistes</small>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="fas fa-user-shield fa-2x text-danger mb-2"></i>
                    <h5 class="fw-bold mb-0">{{ $adminsCount }}</h5>
                    <small class="text-muted">Admins</small>
                </div>
            </div>
        </div>
    </div>

    {{-- Quick welcome section --}}
    <div class="card mt-4 shadow-sm border-0">
        <div class="card-body">
            <h4 class="fw-bold mb-2">Bienvenue dans votre tableau de bord 👋</h4>
            <p class="text-muted mb-0">Utilisez le menu latéral pour gérer les spécialistes, les spécialités, les catégories, et plus encore.</p>
        </div>
    </div>
</div>
@endsection
