@extends('admin.layout.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row g-4">
        <div class="col-md-3 col-sm-6">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="fas fa-stethoscope fa-2x text-primary mb-2"></i>
                    <h5 class="fw-bold mb-0">{{ $specialitiesCount }}</h5>
                    <small class="text-muted">التخصصات</small>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="fas fa-layer-group fa-2x text-success mb-2"></i>
                    <h5 class="fw-bold mb-0">{{ $categoriesCount }}</h5>
                    <small class="text-muted">الفئات</small>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="fas fa-user-md fa-2x text-info mb-2"></i>
                    <h5 class="fw-bold mb-0">{{ $specialistsCount }}</h5>
                    <small class="text-muted">الأخصائيون</small>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="fas fa-user-shield fa-2x text-danger mb-2"></i>
                    <h5 class="fw-bold mb-0">{{ $adminsCount }}</h5>
                    <small class="text-muted">المشرفون</small>
                </div>
            </div>
        </div>
    </div>

    {{-- قسم الترحيب السريع --}}
    <div class="card mt-4 shadow-sm border-0">
        <div class="card-body text-center">
            <h4 class="fw-bold mb-2">مرحبًا بك في لوحة التحكم 👋</h4>
            <p class="text-muted mb-0">استخدم القائمة الجانبية لإدارة الأخصائيين، التخصصات، الفئات، والمزيد.</p>
        </div>
    </div>
</div>
@endsection
