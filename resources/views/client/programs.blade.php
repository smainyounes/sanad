@extends('client.layouts.app')

@section('title', 'البرامج والفعاليات - سند')

@section('styles')
<style>
    /* 
    ==============================================
    STYLES FOR THE PROGRAMS PAGE
    (Based on the landing page design system)
    ==============================================
    */

    /* Page Header for inner pages */
    .page-header {
        background: linear-gradient(rgba(248, 249, 250, 0.95), rgba(248, 249, 250, 0.95)), url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=2084&auto-format&fit=crop') no-repeat center center;
        background-size: cover;
        padding: 100px 0 80px;
        text-align: center;
        border-bottom: 1px solid #dee2e6;
    }
    .page-header h1 {
        font-size: 3.2rem;
        font-weight: 800;
        color: var(--primary-color);
    }
    .page-header p {
        font-size: 1.2rem;
        max-width: 700px;
        margin: 15px auto 0;
        color: #555;
    }

    /* Controls Bar */
    .controls-bar {
        background-color: var(--white);
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.07);
        margin-bottom: 50px;
    }
    .controls-bar .form-control {
        border-radius: 8px;
        padding: 12px 15px;
        border: 1px solid #ced4da;
    }
    .controls-bar .form-control:focus {
        border-color: var(--accent-color);
        box-shadow: 0 0 0 0.2rem rgba(212, 178, 131, 0.25);
    }
    .controls-bar .input-group-text {
        border-radius: 8px 0 0 8px;
    }
    .controls-bar .btn-group .btn {
        font-weight: 600;
        padding: 10px 20px;
        border: 2px solid var(--primary-color);
        color: var(--primary-color);
        background-color: transparent;
    }
    .controls-bar .btn-group .btn:hover {
        background-color: rgba(13, 36, 79, 0.05);
    }
    .controls-bar .btn-group .btn.active {
        background-color: var(--primary-color);
        color: var(--white);
        z-index: 2;
    }

    /* Program Card */
    .program-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .program-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.12);
    }
    .program-card .card-body {
        padding: 25px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }
    .program-card .card-title {
        font-weight: 700;
        color: var(--primary-color);
    }
    .program-card .card-text {
        color: #555;
        flex-grow: 1; /* Pushes footer content down */
    }
    .program-card .program-meta {
        color: #6c757d;
        font-size: 0.9rem;
    }
    .program-card .program-meta i {
        margin-left: 8px;
        color: var(--accent-color);
    }
    .program-card .program-badge {
        font-size: 0.8rem;
        font-weight: 700;
        padding: 0.4em 0.8em;
    }
    .program-card .badge-in-person {
        background-color: var(--accent-color);
        color: var(--primary-color);
    }
    .program-card .badge-digital {
        background-color: var(--primary-color);
        color: var(--white);
    }

    /* Pagination */
    .pagination .page-item.active .page-link {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }
    .pagination .page-link {
        color: var(--primary-color);
    }

    /* Modal */
    .modal-content { border-radius: 15px; }
    .modal-header { border-bottom: 1px solid #eee; }
    .modal-footer { border-top: 1px solid #eee; }
    .contact-modal-list .list-group-item i {
        font-size: 1.3rem;
        margin-left: 15px;
        width: 25px;
    }
</style>
@endsection

@section('content')
    <!-- PAGE HEADER -->
    <header class="page-header wow animate__animated animate__fadeIn">
        <div class="container">
            <h1>البرامج والفعاليات المتاحة</h1>
            <p>اطلع على أحدث ورش العمل والجلسات الجماعية التي نقدمها في مركزنا أو عبر المنصة الرقمية.</p>
        </div>
    </header>

    <main class="bg-light">
        <section class="container py-5">
            <!-- CONTROLS: SEARCH & FILTER -->
            <div class="controls-bar wow animate__animated animate__fadeInUp" dir="ltr">
                <div class="row g-3 align-items-center">
                    <div class="col-lg-4">
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="fas fa-search"></i></span>
                            <input type="text" id="searchInput" class="form-control" placeholder="ابحث عن ورشة عمل، جلسة...">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="btn-group w-100 type-filters" role="group">
                            <button type="button" class="btn active" data-filter="all">الكل</button>
                            <button type="button" class="btn" data-filter="in-person">حضوري</button>
                            <button type="button" class="btn" data-filter="digital">رقمي</button>
                        </div>
                    </div>
                    <div class="col-lg-4">
                         <div class="btn-group w-100 category-filters" role="group">
                            <button type="button" class="btn active" data-filter="all">جميع الفئات</button>
                            <button type="button" class="btn" data-filter="psychologist">نفسي</button>
                            <button type="button" class="btn" data-filter="social">اجتماعي</button>
                            <button type="button" class="btn" data-filter="vocational">مهني</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROGRAMS GRID -->
            <div class="row g-4" id="programsContainer">
                @forelse($programs as $index => $program)
                    <div class="col-lg-6 program-item wow animate__animated animate__fadeInUp" @if($index % 2 == 1) data-wow-delay="0.1s" @endif data-category="{{ ($program->category?->id == 2 ? 'psychologist' : ($program->category?->id == 3 ? 'social' : ($program->category?->id == 4 ? 'vocational' : 'all'))) }} {{ $program->is_online ? 'digital' : 'in-person' }}">
                        <div class="card program-card">
                            <div class="card-body">
                                <div>
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="card-title">{{ $program->title }}</h5>
                                        <span class="badge rounded-pill program-badge {{ $program->is_online ? 'badge-digital' : 'badge-in-person' }}">{{ $program->is_online ? 'رقمي' : 'حضوري' }}</span>
                                    </div>
                                    <p class="card-text">{{ $program->description }}</p>
                                </div>
                                <div class="mt-auto">
                                    <hr>
                                    <div class="d-flex justify-content-between program-meta mb-3">
                                        <span><i class="fas fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($program->date)->translatedFormat('d F Y') }}</span>
                                        <span><i class="fas fa-user-tie"></i> {{ $program->specialist?->name }}</span>
                                    </div>
                                    @auth
                                        <button type="button"
                                                class="btn btn-secondary mt-2 w-100"
                                                onclick="openProgramReservationModal({{ $program->id }})">
                                            حجز البرنامج
                                        </button>
                                    @else
                                        <button type="button"
                                                class="btn btn-secondary mt-2 w-100"
                                                data-bs-toggle="modal"
                                                data-bs-target="#loginModal">
                                            تسجيل الدخول للحجز
                                        </button>
                                    @endauth

                                    {{-- <button class="btn btn-secondary w-100" data-bs-toggle="modal" @auth data-bs-target="#reserveModal" @else data-bs-target="#loginModal" @endauth>احجز الآن</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center text-muted">لا توجد برامج متاحة حالياً.</div>
                @endforelse
            </div>

            <!-- PAGINATION -->
            <div class="mt-5 wow animate__animated animate__fadeInUp">
                {{ $programs->links() }}
            </div>
        </section>
    </main>

    <!-- RESERVATION MODAL -->
    <div class="modal fade" id="reserveModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">طرق الحجز والتواصل</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-center text-muted">للحجز أو الاستفسار، يرجى التواصل معنا عبر إحدى القنوات التالية:</p>
                    <div class="list-group list-group-flush text-center contact-modal-list">
                        <a href="tel:+213551234567" class="list-group-item list-group-item-action"><i class="fas fa-phone"></i> اتصال هاتفي مباشر</a>
                        <a href="https://wa.me/213551234567" target="_blank" class="list-group-item list-group-item-action"><i class="fab fa-whatsapp" style="color:#25D366;"></i> محادثة عبر واتساب</a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN REQUIRED MODAL -->
    <div class="modal fade" id="loginModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">الرجاء تسجيل الدخول</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p class="text-muted mb-4">للانضمام إلى الفعالية، يرجى تسجيل الدخول إلى حسابك.</p>
                    <a href="{{ route('login') }}" class="btn btn-primary w-100 mb-2">تسجيل الدخول</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-primary w-100">إنشاء حساب جديد</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const typeFilters = document.querySelectorAll('.type-filters .btn');
            const categoryFilters = document.querySelectorAll('.category-filters .btn');
            const searchInput = document.getElementById('searchInput');
            const programItems = document.querySelectorAll('.program-item');
            
            function updateView() {
                const activeType = document.querySelector('.type-filters .btn.active').getAttribute('data-filter');
                const activeCategory = document.querySelector('.category-filters .btn.active').getAttribute('data-filter');
                const searchTerm = searchInput.value.toLowerCase().trim();

                programItems.forEach(item => {
                    const itemCategories = item.getAttribute('data-category').split(' ');
                    const itemText = item.textContent.toLowerCase();

                    const typeMatch = activeType === 'all' || itemCategories.includes(activeType);
                    const categoryMatch = activeCategory === 'all' || itemCategories.includes(activeCategory);
                    const searchMatch = itemText.includes(searchTerm);

                    if (typeMatch && categoryMatch && searchMatch) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            }

            typeFilters.forEach(button => {
                button.addEventListener('click', function() {
                    typeFilters.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    updateView();
                });
            });

            categoryFilters.forEach(button => {
                button.addEventListener('click', function() {
                    categoryFilters.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    updateView();
                });
            });

            searchInput.addEventListener('input', updateView);
        });
    </script>
@endsection