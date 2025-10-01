@extends('client.layouts.app')

@section('styles')
    <style>
        /* Page Header */
        /* .page-header { background-color: var(--white); padding: 60px 0; text-align: center; border-bottom: 1px solid #eee; }
        .page-header h1 { font-size: 2.8rem; font-weight: 800; color: var(--primary-color); }
        .page-header p { font-size: 1.1rem; color: #6c757d; max-width: 600px; margin: 15px auto 0; } */
        
        /* Control Bar */
        .controls-bar {
            background-color: var(--white);
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            margin-bottom: 40px;
        }

        /* New Styles for Controls Bar */
        .controls-bar .form-control {
            padding-top: 12px;
            padding-bottom: 12px;
        }
        .controls-bar .form-control:focus {
            box-shadow: none;
            border-color: var(--primary-color) !important;
        }

        .controls-bar .btn-group .btn {
            font-weight: 500;
            padding: 10px 20px;
            border-color: #ddd;
            color: var(--text-color);
        }

        .controls-bar .btn-group .btn:hover {
            background-color: #e9ecef;
        }

        .controls-bar .btn-group .btn.active {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: var(--white);
            z-index: 2; /* Ensure active button is on top */
        }
        .filter-label {
            font-weight: 700;
            color: var(--text-color);
            margin-bottom: 10px;
        }

        /* Filter Buttons */
        .filter-buttons .btn {
            margin: 0 5px 10px;
            background-color: var(--light-bg);
            color: var(--text-color);
            border-color: #ddd;
            font-weight: 500;
            border-radius: 50px;
            padding: 8px 20px;
        }
        .filter-buttons .btn.active {
            background-color: var(--primary-color);
            color: var(--white);
            border-color: var(--primary-color);
        }

        /* Event Card */
        .event-card {
            background: var(--white);
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.06);
            transition: all 0.3s ease;
            display: flex; /* Use flexbox for layout */
            flex-direction: column;
            height: 100%;
        }
        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }
        .event-card .card-body {
            padding: 25px;
            display: flex;
            flex-direction: column;
            flex-grow: 1; /* Make body grow to fill space */
        }
        .event-card .card-title { font-weight: 700; color: var(--primary-color); }
        .event-card .event-meta { color: #6c757d; font-size: 0.9rem; }
        .event-card .event-meta i { margin-left: 8px; }
        .event-card .event-badge { font-size: 0.8rem; font-weight: 700; }
        .event-card .badge-in-person { background-color: var(--secondary-color); }
        .event-card .badge-digital { background-color: var(--primary-color); }
        .event-card .card-text { flex-grow: 1; /* Push button to the bottom */ }

        /* Modal Contact Links */
        .contact-modal-list .list-group-item {
            font-size: 1.1rem;
            font-weight: 500;
            padding: 15px 20px;
        }
        .contact-modal-list .list-group-item i {
            font-size: 1.3rem;
            margin-left: 15px;
            width: 25px;
        }
        .fa-whatsapp { color: #25D366; }
        .fa-facebook { color: #1877F2; }
        .fa-instagram { color: #E4405F; }
        .fa-phone { color: var(--primary-color); }
    </style>
@endsection

@section('content')
    <!-- PAGE HEADER -->
    <header class="page-header wow animate__fadeIn">
        <div class="container">
            <h1>البرامج والفعاليات المتاحة</h1>
            <p>اطلع على أحدث ورش العمل والجلسات الجماعية التي نقدمها في مركزنا أو عبر المنصة الرقمية.</p>
        </div>
    </header>

    <main class="container py-5">
       <!-- CONTROLS: SEARCH & FILTER (New Design) -->
        <div class="controls-bar wow animate__fadeInUp" dir="ltr">
            <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-between">
                <!-- Search Input -->
                <div class="search-container flex-grow-1 mb-3 mb-lg-0 me-lg-4">
                    <div class="input-group">
                        <span class="input-group-text bg-light border-0"><i class="fas fa-search"></i></span>
                        <input type="text" id="searchInput" class="form-control bg-light border-0" placeholder="ابحث عن ورشة عمل، جلسة...">
                    </div>
                </div>

                <!-- Filter Groups -->
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-end">
                    <!-- Type Filters -->
                    <div class="btn-group type-filters" role="group" aria-label="Filter by Type">
                        <button type="button" class="btn btn-outline-secondary active" data-filter="all">الكل</button>
                        <button type="button" class="btn btn-outline-secondary" data-filter="in-person">حضوري</button>
                        <button type="button" class="btn btn-outline-secondary" data-filter="digital">رقمي</button>
                    </div>
                    
                    <!-- Vertical Divider -->
                    <div class="vr mx-3 d-none d-lg-block"></div>

                    <!-- Category Filters -->
                    <div class="btn-group category-filters mt-2 mt-lg-0" role="group" aria-label="Filter by Category">
                        <button type="button" class="btn btn-outline-secondary active" data-filter="all">الكل</button>
                        <button type="button" class="btn btn-outline-secondary" data-filter="psychologist">نفسي</button>
                        <button type="button" class="btn btn-outline-secondary" data-filter="social">اجتماعي</button>
                        <button type="button" class="btn btn-outline-secondary" data-filter="vocational">مهني</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- EVENTS GRID -->
        <div class="row g-4" id="eventsContainer">
            <!-- Event 1 -->
            <div class="col-lg-6 event-item wow animate__fadeInUp" data-wow-delay="0.1s" data-category="vocational in-person">
                <div class="card event-card">
                    <div class="card-body">
                        <div>
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title">ورشة عمل: بناء السيرة الذاتية الاحترافية</h5>
                                <span class="badge rounded-pill event-badge badge-in-person">حضوري</span>
                            </div>
                            <p class="card-text text-muted">تعلم معنا خطوة بخطوة كيفية إنشاء سيرة ذاتية قوية تبرز مهاراتك وتفتح لك أبواب الفرص.</p>
                        </div>
                        <div>
                            <hr>
                            <div class="d-flex justify-content-between event-meta mb-3">
                                <span><i class="fas fa-calendar-alt"></i> 25 أكتوبر 2023 - 06:00 مساءً</span>
                                <span><i class="fas fa-user-tie"></i> أ. ليلى كريم</span>
                            </div>
                            <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#reserveModal">احجز الآن</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event 2 -->
            <div class="col-lg-6 event-item wow animate__fadeInUp" data-wow-delay="0.2s" data-category="social digital">
                <div class="card event-card">
                    <div class="card-body">
                        <div>
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title">جلسة حوار: التعامل مع ضغوط المجتمع</h5>
                                <span class="badge rounded-pill event-badge badge-digital">رقمي</span>
                            </div>
                            <p class="card-text text-muted">مساحة آمنة لمناقشة التحديات الاجتماعية وكيفية التعامل معها بمرونة وثقة تحت إشراف مختص.</p>
                        </div>
                        <div>
                            <hr>
                            <div class="d-flex justify-content-between event-meta mb-3">
                                <span><i class="fas fa-calendar-alt"></i> 27 أكتوبر 2023 - 07:00 مساءً</span>
                                <span><i class="fas fa-user-tie"></i> أ. فاطمة علي</span>
                            </div>
                            <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#reserveModal">احجز الآن</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event 3 -->
            <div class="col-lg-6 event-item wow animate__fadeInUp" data-wow-delay="0.3s" data-category="psychologist in-person">
                <div class="card event-card">
                    <div class="card-body">
                        <div>
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title">مجموعة دعم: إدارة القلق والتوتر</h5>
                                <span class="badge rounded-pill event-badge badge-in-person">حضوري</span>
                            </div>
                            <p class="card-text text-muted">انضم لمجموعة دعم لتعلم تقنيات عملية للتخفيف من القلق والتوتر في بيئة داعمة ومحفزة.</p>
                        </div>
                        <div>
                            <hr>
                            <div class="d-flex justify-content-between event-meta mb-3">
                                <span><i class="fas fa-calendar-alt"></i> 29 أكتوبر 2023 - 05:00 مساءً</span>
                                <span><i class="fas fa-user-tie"></i> د. أحمد محمود</span>
                            </div>
                            <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#reserveModal">احجز الآن</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Event 4 -->
            <div class="col-lg-6 event-item wow animate__fadeInUp" data-wow-delay="0.4s" data-category="vocational digital">
                <div class="card event-card">
                    <div class="card-body">
                        <div>
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title">ندوة: أساسيات الاستقلال المالي</h5>
                                <span class="badge rounded-pill event-badge badge-digital">رقمي</span>
                            </div>
                            <p class="card-text text-muted">اكتشف المفاهيم الأساسية لإدارة أموالك، ووضع الميزانية، والادخار من أجل مستقبلك.</p>
                        </div>
                        <div>
                            <hr>
                            <div class="d-flex justify-content-between event-meta mb-3">
                                <span><i class="fas fa-calendar-alt"></i> 02 نوفمبر 2023 - 08:00 مساءً</span>
                                <span><i class="fas fa-user-tie"></i> أ. كريم بن علي</span>
                            </div>
                            <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#reserveModal">احجز الآن</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PAGINATION -->
        <nav aria-label="Page navigation" class="mt-5 wow animate__fadeInUp" dir="ltr">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#">السابق</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">التالي</a></li>
            </ul>
        </nav>
    </main>

    <!-- RESERVATION MODAL -->
    <div class="modal fade" id="reserveModal" tabindex="-1" aria-labelledby="reserveModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reserveModalLabel">طرق الحجز والتواصل</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-center text-muted">للحجز أو الاستفسار، يرجى التواصل معنا عبر إحدى القنوات التالية:</p>
                    <div class="list-group contact-modal-list text-center">
                        <a href="tel:+213551234567" class="list-group-item list-group-item-action">
                            <i class="fas fa-phone"></i> اتصال هاتفي مباشر
                        </a>
                        <a href="https://wa.me/213551234567" target="_blank" class="list-group-item list-group-item-action">
                            <i class="fab fa-whatsapp"></i> محادثة عبر واتساب
                        </a>
                        <a href="https://facebook.com/SanadCenter" target="_blank" class="list-group-item list-group-item-action">
                            <i class="fab fa-facebook"></i> صفحتنا على فيسبوك
                        </a>
                        <a href="https://instagram.com/SanadCenter" target="_blank" class="list-group-item list-group-item-action">
                            <i class="fab fa-instagram"></i> حسابنا على انستغرام
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius: 8px;">إغلاق</button>
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
            const eventItems = document.querySelectorAll('.event-item');
            
            function updateView() {
                const activeType = document.querySelector('.type-filters .btn.active').getAttribute('data-filter');
                const activeCategory = document.querySelector('.category-filters .btn.active').getAttribute('data-filter');
                const searchTerm = searchInput.value.toLowerCase().trim();

                eventItems.forEach(item => {
                    const itemCategories = item.getAttribute('data-category').split(' ');
                    const itemText = item.textContent.toLowerCase();

                    // Filter checks
                    const typeMatch = activeType === 'all' || itemCategories.includes(activeType);
                    const categoryMatch = activeCategory === 'all' || itemCategories.includes(activeCategory);

                    // Search check
                    const searchMatch = itemText.includes(searchTerm);

                    if (typeMatch && categoryMatch && searchMatch) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            }

            // Type filter event listeners
            typeFilters.forEach(button => {
                button.addEventListener('click', function() {
                    typeFilters.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    updateView();
                });
            });

            // Category filter event listeners
            categoryFilters.forEach(button => {
                button.addEventListener('click', function() {
                    categoryFilters.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    updateView();
                });
            });

            // Search input event listener
            searchInput.addEventListener('input', updateView);
        });
    </script>

@endsection