@extends('client.layouts.app')

@section('styles')
    <style>
        /* Page Header for inner pages */
        .page-header {
            background: linear-gradient(rgba(248, 249, 250, 0.95), rgba(248, 249, 250, 0.95)), url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=2084&auto=format&fit=crop') no-repeat center center;
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

        /* Filter Buttons */
        .filter-buttons {
            margin-bottom: 50px;
        }
        .filter-buttons .btn {
            margin: 5px;
            background-color: var(--white);
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            font-weight: 600;
            padding: 8px 25px;
        }
        .filter-buttons .btn:hover {
            background-color: #0a1c3e;
            border-color: #0a1c3e;
            color: var(--white);
            transform: none; /* Disable vertical hover on filter buttons */
        }
        .filter-buttons .btn.active {
            background-color: var(--primary-color);
            color: var(--white);
            border-color: var(--primary-color);
        }

    </style>
@endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const buttons = document.querySelectorAll('.filter-buttons .btn');
            const items = document.querySelectorAll('.specialist-item');

            function updateView() {
                const activeBtn = document.querySelector('.filter-buttons .btn.active');
                const filter = activeBtn ? activeBtn.getAttribute('data-filter') : 'all';

                items.forEach((item) => {
                    const category = item.getAttribute('data-category');
                    const matches = filter === 'all' || category === filter;
                    item.style.display = matches ? 'block' : 'none';
                });
            }

            buttons.forEach((btn) => {
                btn.addEventListener('click', function () {
                    buttons.forEach((b) => b.classList.remove('active'));
                    this.classList.add('active');
                    updateView();
                });
            });
        });
    </script>
@endsection

@section('content')
     <!-- PAGE HEADER -->
     <header class="page-header wow animate__animated animate__fadeIn">
        <div class="container">
            <h1>فريق الأخصائيين</h1>
            <p>تعرّف على نخبة من الخبراء المؤهلين لمرافقتك في رحلتك نحو التعافي والنمو.</p>
        </div>
    </header>

    <main>
        <!-- SPECIALISTS GRID SECTION -->
        <section id="specialists-grid">
            <div class="container">
                <!-- FILTER BUTTONS -->
                <div class="row">
                    <div class="col-12 text-center filter-buttons wow animate__animated animate__fadeInUp">
                        <button class="btn active" data-filter="all">الكل</button>
                        @foreach($specialities as $sp)
                            <button class="btn" data-filter="speciality-{{ $sp->id }}">{{ $sp->name }}</button>
                        @endforeach
                    </div>
                </div>

                <div class="row g-4 justify-content-center">
                    @forelse($specialists as $index => $specialist)
                        <div class="col-md-6 col-lg-4 specialist-item wow animate__animated animate__fadeInUp"
                            @if($index % 3 == 1) data-wow-delay="0.1s"
                            @elseif($index % 3 == 2) data-wow-delay="0.2s"
                            @endif
                            data-category="speciality-{{ $specialist->speciality?->id ?? 'all' }}">
                            
                            <div class="card specialist-card h-100">
                                <img src="{{ $specialist->image ? asset($specialist->image) : 'https://images.unsplash.com/photo-1557862921-37829c790f19?q=80&w=2071&auto-format&fit=crop' }}"
                                    class="card-img-top"
                                    alt="{{ $specialist->name }}">

                                <div class="card-body p-4 d-flex flex-column text-end">
                                    <h5 class="card-title">{{ $specialist->name }}</h5>
                                    <p class="specialization text-muted mb-1">{{ $specialist->speciality?->name }}</p>
                                    <p class="card-text text-muted">{{ Str::limit($specialist->bio ?? '—', 160) }}</p>

                                    @auth
                                        <button type="button"
                                                class="btn btn-secondary mt-3 mt-auto w-100"
                                                onclick="openReservationModal({{ $specialist->id }})">
                                            حجز موعد
                                        </button>
                                    @else
                                        <button type="button"
                                                class="btn btn-secondary mt-3 mt-auto w-100"
                                                data-bs-toggle="modal"
                                                data-bs-target="#loginModal">
                                            تسجيل الدخول للحجز
                                        </button>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center text-muted">لا يوجد أخصائيون متاحون حالياً.</div>
                    @endforelse
                </div>
                <div class="mt-5 wow animate__animated animate__fadeInUp">
                    {{ $specialists->links() }}
                </div>
            </div>
        </section>
    </main>
    <!-- RESERVATION MODAL (same as programs page) -->
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
                    <p class="text-muted mb-4">لتتمكن من الحجز، يرجى تسجيل الدخول إلى حسابك.</p>
                    <a href="{{ route('login') }}" class="btn btn-primary w-100 mb-2">تسجيل الدخول</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-primary w-100">إنشاء حساب جديد</a>
                </div>
            </div>
        </div>
    </div>
@endsection