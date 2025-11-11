@extends('client_new.layouts.app')

@section('title', 'فريق الأخصائيين - سند')

@section('styles')
    {{-- Add any extra, page-specific styles here --}}
    <style>
        .specialist-card .card-img-top {
            height: 280px;
            object-fit: cover;
            object-position: center;
        }
        .modal-content {
            border-radius: 1rem;
            border: 0;
        }
    </style>
@endsection

@section('content')
     <!-- PAGE HEADER -->
     <header class="hero-gradient text-white text-center py-5">
        <div class="container py-md-4 wow animate__animated animate__fadeIn">
            <h1 class="display-4">فريق الأخصائيين</h1>
            <p class="lead text-white-75 mt-3" style="max-width: 700px; margin: auto;">
                تعرّف على نخبة من الخبراء المؤهلين لمرافقتك في رحلتك نحو التعافي والنمو.
            </p>
        </div>
    </header>

    <main class="soft-gradient">
        <section id="specialists-grid" class="py-5">
            <div class="container">
                <!-- FILTER BUTTONS -->
                <div class="row justify-content-center">
                    <div class="col-12 text-center filter-buttons mb-5 wow animate__animated animate__fadeInUp">
                        <div class="btn-group shadow-sm" role="group">
                            <button class="btn btn-primary px-4 py-2 fw-bold" data-filter="all">الكل</button>
                            @foreach($specialities as $sp)
                                <button class="btn btn-outline-primary px-4 py-2 fw-bold" data-filter="speciality-{{ $sp->id }}">{{ $sp->name }}</button>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- SPECIALISTS GRID -->
                <div class="row g-4 justify-content-center">
                    @forelse($specialists as $specialist)
                        <div class="col-md-6 col-lg-4 specialist-item wow animate__animated animate__fadeInUp" data-category="speciality-{{ $specialist->speciality?->id ?? 'all' }}">
                            <div class="card card-hover border-0 shadow-sm h-100 rounded-4 text-center">
                                <img src="{{ $specialist->image ? asset('storage/' . $specialist->image) : 'https://ui-avatars.com/api/?name=' . urlencode($specialist->name) . '&background=random&color=fff&size=280' }}"
                                     class="card-img-top"
                                     alt="{{ $specialist->name }}">

                                <div class="card-body p-4 d-flex flex-column">
                                    <div>
                                        <h5 class="card-title fw-bolder mb-1">{{ $specialist->name }}</h5>
                                        <p class="text-primary fw-bold">{{ $specialist->speciality?->name }}</p>
                                        <p class="card-text text-muted small mt-3">{{ Str::limit($specialist->bio ?? 'أخصائي مؤهل لمساعدتك في رحلتك.', 120) }}</p>
                                    </div>
                                    <div class="mt-auto pt-3">
                                        @auth
                                            <button type="button" class="btn btn-brand-primary w-100" data-bs-toggle="modal" data-bs-target="#reserveModal">
                                                حجز موعد
                                            </button>
                                        @else
                                            <button type="button" class="btn btn-brand-primary w-100" data-bs-toggle="modal" data-bs-target="#loginModal">
                                                تسجيل الدخول للحجز
                                            </button>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                         <div class="col-12">
                            <div class="text-center bg-white p-5 rounded-4 shadow-sm">
                                <h4 class="text-muted">لا يوجد أخصائيون متاحون حالياً.</h4>
                                <p>يرجى التحقق مرة أخرى قريباً.</p>
                            </div>
                        </div>
                    @endforelse
                </div>
                
                <!-- PAGINATION -->
                <div class="mt-5 d-flex justify-content-center wow animate__animated animate__fadeInUp">
                    {{ $specialists->links() }}
                </div>
            </div>
        </section>
    </main>

@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const filterContainer = document.querySelector('.filter-buttons');
            const items = document.querySelectorAll('.specialist-item');

            if (filterContainer) {
                const buttons = filterContainer.querySelectorAll('.btn');

                buttons.forEach((button) => {
                    button.addEventListener('click', function () {
                        // Update button styles
                        buttons.forEach((btn) => {
                            btn.classList.remove('btn-primary');
                            btn.classList.add('btn-outline-primary');
                        });
                        this.classList.add('btn-primary');
                        this.classList.remove('btn-outline-primary');

                        // Filter logic
                        const filter = this.getAttribute('data-filter');
                        items.forEach((item) => {
                            const category = item.getAttribute('data-category');
                            if (filter === 'all' || category === filter) {
                                item.style.display = 'block';
                            } else {
                                item.style.display = 'none';
                            }
                        });
                    });
                });
            }
        });
    </script>
@endsection