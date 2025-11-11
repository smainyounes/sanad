@extends('client_new.layouts.app')

@section('title', 'البرامج والفعاليات - سند')

@section('styles')
    {{-- Add any extra, page-specific styles here --}}
    <style>
        .controls-bar .btn {
            font-weight: 600;
        }
        .program-card .program-meta {
            font-size: 0.9rem;
            color: #64748b; /* slate-500 */
        }
        .program-card .program-meta i {
            color: var(--sanad-purple-dark);
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
            <h1 class="display-4">البرامج والفعاليات</h1>
            <p class="lead text-white-75 mt-3" style="max-width: 700px; margin: auto;">
                اطلع على أحدث ورش العمل والجلسات التي نقدمها في مركزنا أو عبر المنصة الرقمية.
            </p>
        </div>
    </header>

    <main class="soft-gradient">
        <section class="container py-5">
            <!-- CONTROLS: SEARCH & FILTER -->
            <div class="card shadow-sm border-0 rounded-4 p-3 p-md-4 mb-5 wow animate__animated animate__fadeInUp">
                <div class="row g-3 align-items-center">
                    <div class="col-lg-4">
                        <input type="text" id="searchInput" class="form-control form-control-lg" placeholder="ابحث عن برنامج...">
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="btn-group w-100 filter-group" id="type-filters" role="group">
                            <button type="button" class="btn btn-primary" data-filter="all">الكل</button>
                            <button type="button" class="btn btn-outline-primary" data-filter="in-person">حضوري</button>
                            <button type="button" class="btn btn-outline-primary" data-filter="digital">رقمي</button>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                         <div class="btn-group w-100 filter-group" id="category-filters" role="group">
                            <button type="button" class="btn btn-primary" data-filter="all">جميع الفئات</button>
                            <button type="button" class="btn btn-outline-primary" data-filter="psychologist">نفسي</button>
                            <button type="button" class="btn btn-outline-primary" data-filter="social">اجتماعي</button>
                            <button type="button" class="btn btn-outline-primary" data-filter="vocational">مهني</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROGRAMS GRID -->
            <div class="row g-4" id="programsContainer">
                @forelse($programs as $program)
                    <div class="col-lg-6 program-item wow animate__animated animate__fadeInUp" data-category="{{ ($program->category?->id == 2 ? 'psychologist' : ($program->category?->id == 3 ? 'social' : ($program->category?->id == 4 ? 'vocational' : 'all'))) }} {{ $program->is_online ? 'digital' : 'in-person' }}">
                        <div class="card card-hover border-0 shadow-sm h-100 rounded-4">
                            <div class="card-body p-4 d-flex flex-column">
                                <div>
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <h5 class="card-title fw-bold mb-0">{{ $program->title }}</h5>
                                        <span class="custom-badge {{ $program->is_online ? 'custom-warning' : 'custom-success' }}">{{ $program->is_online ? 'رقمي' : 'حضوري' }}</span>
                                    </div>
                                    <p class="card-text text-muted small">{{ Str::limit($program->description, 150) }}</p>
                                </div>
                                <div class="mt-auto pt-3">
                                    <hr class="my-3">
                                    <div class="d-flex justify-content-between program-meta">
                                        <span><i class="fas fa-calendar-alt me-2"></i>{{ \Carbon\Carbon::parse($program->date)->translatedFormat('d F Y') }}</span>
                                        <span><i class="fas fa-user-tie me-2"></i>{{ $program->specialist?->name }}</span>
                                    </div>
                                    <div class="d-grid mt-4">
                                        @auth
                                            <button type="button" class="btn btn-brand-primary" onclick="openProgramReservationModal({{ $program->id }})">
                                                حجز البرنامج
                                            </button>
                                        @else
                                            <button type="button" class="btn btn-brand-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                                                تسجيل الدخول للحجز
                                            </button>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="text-center bg-white p-5 rounded-4 shadow-sm">
                            <h4 class="text-muted">لا توجد برامج متاحة حالياً.</h4>
                            <p>يرجى التحقق مرة أخرى قريباً.</p>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- PAGINATION -->
            <div class="mt-5 d-flex justify-content-center wow animate__animated animate__fadeInUp">
                {{ $programs->links() }}
            </div>
        </section>
    </main>

@endsection

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const filterGroups = document.querySelectorAll('.filter-group');
            const searchInput = document.getElementById('searchInput');
            const programItems = document.querySelectorAll('.program-item');

            function updateView() {
                const activeType = document.querySelector('#type-filters .btn-primary').getAttribute('data-filter');
                const activeCategory = document.querySelector('#category-filters .btn-primary').getAttribute('data-filter');
                const searchTerm = searchInput.value.toLowerCase().trim();

                let visibleCount = 0;
                programItems.forEach(item => {
                    const itemCategories = item.getAttribute('data-category').split(' ');
                    const itemText = item.textContent.toLowerCase();

                    const typeMatch = activeType === 'all' || itemCategories.includes(activeType);
                    const categoryMatch = activeCategory === 'all' || itemCategories.includes(activeCategory);
                    const searchMatch = searchTerm === '' || itemText.includes(searchTerm);

                    if (typeMatch && categoryMatch && searchMatch) {
                        item.style.display = 'block';
                        visibleCount++;
                    } else {
                        item.style.display = 'none';
                    }
                });
            }

            filterGroups.forEach(group => {
                const buttons = group.querySelectorAll('.btn');
                buttons.forEach(button => {
                    button.addEventListener('click', function() {
                        buttons.forEach(btn => {
                            btn.classList.remove('btn-primary');
                            btn.classList.add('btn-outline-primary');
                        });
                        this.classList.add('btn-primary');
                        this.classList.remove('btn-outline-primary');
                        updateView();
                    });
                });
            });

            searchInput.addEventListener('input', updateView);
        });
    </script>
@endsection