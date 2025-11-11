@extends('client_new.layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="hero-gradient text-white py-5">
        <div class="container-xxl py-5">
          <div class="row align-items-center g-4">
            <div class="col-lg-6">
              <div class="d-flex align-items-center gap-4 mb-5 animate-bounce-slow">
                <img alt="سند" class="animate-pulse-slow" src="/logo.png" style="height: auto; width: 6rem;">
                <h1 class="display-1 fw-bolder animate-float" style="letter-spacing: 0.05em;">سند</h1>
              </div>
              <h2 class="display-4 fw-bold">يد تمسك بك<br>وقلب يحتويك</h2>
              <p class="lead fw-semibold my-4" style="color: #d8b4fe;">مركز سند للتأهيل النفسي والاجتماعي والتمكين الاقتصادي للشباب</p>
              <p class="text-white-50 fs-5 mb-4">نحن هنا لندعمك في رحلتك نحو حياة أفضل. نقدم برامج متخصصة في التأهيل النفسي والاجتماعي، مع التركيز على تمكين الشباب اقتصاديًا لبناء مستقبل مشرق.</p>
              <div class="d-flex gap-3 flex-wrap">
                <a href="{{ route('programs') }}" class="btn btn-light rounded-pill px-4 py-3 fs-5" style="color: var(--sanad-purple-dark);">احجز جلسة الآن</a>
                <a href="{{ route('aboutus') }}" class="btn btn-outline-light rounded-pill px-4 py-3 fs-5">تعرف علينا</a>
              </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block animate-float">
              <div class="row g-4">
                <div class="col-6">
                  <img alt="دعم نفسي" class="img-fluid rounded-4 shadow-lg" src="/assets/hero-1.jpg">
                </div>
                <div class="col-6 mt-5">
                  <img alt="تأهيل اجتماعي" class="img-fluid rounded-4 shadow-lg" src="/assets/hero-2.jpg">
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  
    <!-- About Section -->
    <section id="about" class="py-5 bg-white">
        <div class="container-xxl py-md-5">
          <div class="text-center mb-5">
            <h2 class="display-4 section-title">من نحن</h2>
            <p class="lead text-secondary-emphasis mx-auto" style="max-width: 50rem;">
              مركز سند هو مؤسسة متخصصة في تقديم الدعم النفسي والاجتماعي للشباب، مع التركيز على تمكينهم اقتصاديًا لبناء مستقبل أفضل.
            </p>
          </div>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Card 1: Vision -->
            <div class="col">
              <div class="card h-100 border-0 shadow-sm card-hover card-border-top-pink">
                <div class="card-body p-4 p-lg-5">
                  <div class="mb-4 animate-bounce-slow">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 4rem; height: 4rem; background-color: #fdf2f8;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #ec4899;"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg>
                    </div>
                  </div>
                  <h3 class="card-title fs-2 mb-3">رؤيتنا</h3>
                  <p class="card-text text-secondary-emphasis">أن نكون المركز الرائد في المنطقة لتقديم خدمات التأهيل النفسي والاجتماعي المتكاملة، ونساهم في بناء جيل من الشباب الواعي والمتمكن.</p>
                </div>
              </div>
            </div>
            <!-- Card 2: Mission -->
            <div class="col">
              <div class="card h-100 border-0 shadow-sm card-hover card-border-top-blue">
                <div class="card-body p-4 p-lg-5">
                   <div class="mb-4 animate-bounce-slow">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 4rem; height: 4rem; background-color: #eff6ff;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #3b82f6;"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><path d="M16 3.128a4 4 0 0 1 0 7.744"></path><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><circle cx="9" cy="7" r="4"></circle></svg>
                    </div>
                  </div>
                  <h3 class="card-title fs-2 mb-3">رسالتنا</h3>
                  <p class="card-text text-secondary-emphasis">تقديم خدمات نوعية في التأهيل النفسي والاجتماعي، وتمكين الشباب اقتصاديًا من خلال برامج تدريبية وإرشادية متخصصة.</p>
                </div>
              </div>
            </div>
            <!-- Card 3: Values -->
            <div class="col">
              <div class="card h-100 border-0 shadow-sm card-hover card-border-top-green">
                <div class="card-body p-4 p-lg-5">
                  <div class="mb-4 animate-bounce-slow">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 4rem; height: 4rem; background-color: #f0fdf4;">
                     <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #10b981;"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline></svg>
                    </div>
                  </div>
                  <h3 class="card-title fs-2 mb-3">قيمنا</h3>
                  <p class="card-text text-secondary-emphasis">الاحترافية، السرية، التعاطف، التمكين، والالتزام بأعلى معايير الجودة في تقديم الخدمات.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
      
    <!-- How it works -->
    <section class="py-5 soft-gradient">
        <div class="container-xxl py-md-5">
          <div class="text-center mb-5">
            <h2 class="display-4 section-title">آلية عمل المنصة</h2>
            <p class="lead text-secondary-emphasis mx-auto" style="max-width: 50rem;">
              خطوات بسيطة للبدء في رحلتك مع مركز سند
            </p>
          </div>
          <div class="row row-cols-1 row-cols-md-4 g-4">
              <!-- Step 1 -->
              <div class="col text-center how-it-works-step">
                  <div class="step-circle d-flex align-items-center justify-content-center mx-auto rounded-circle shadow-lg mb-4 animate-bounce-slow" style="background: linear-gradient(to bottom right, #8b5cf6, #ec4899);">
                      <span class="display-4 fw-bold text-white">1</span>
                  </div>
                  <h3 class="fs-4 fw-bold mb-2">إنشاء حساب</h3>
                  <p class="text-secondary-emphasis">سجل حسابك في دقائق وابدأ رحلتك معنا</p>
              </div>
              <!-- Step 2 -->
              <div class="col text-center how-it-works-step">
                  <div class="step-circle d-flex align-items-center justify-content-center mx-auto rounded-circle shadow-lg mb-4 animate-bounce-slow" style="background: linear-gradient(to bottom right, #3b82f6, #14b8a6);">
                      <span class="display-4 fw-bold text-white" style="">2</span>
                  </div>
                  <h3 class="fs-4 fw-bold mb-2">اختر الخدمة</h3>
                  <p class="text-secondary-emphasis">تصفح الخدمات واختر ما يناسبك</p>
              </div>
              <!-- Step 3 -->
              <div class="col text-center how-it-works-step">
                  <div class="step-circle d-flex align-items-center justify-content-center mx-auto rounded-circle shadow-lg mb-4 animate-bounce-slow" style="background: linear-gradient(to bottom right, #22c55e, #84cc16);">
                      <span class="display-4 fw-bold text-white" >3</span>
                  </div>
                  <h3 class="fs-4 fw-bold mb-2">احجز جلسة</h3>
                  <p class="text-secondary-emphasis">احجز موعدك مع الأخصائي المناسب</p>
              </div>
              <!-- Step 4 -->
              <div class="col text-center how-it-works-step">
                  <div class="step-circle d-flex align-items-center justify-content-center mx-auto rounded-circle shadow-lg mb-4 animate-bounce-slow" style="background: linear-gradient(to bottom right, #f59e0b, #ef4444);">
                      <span class="display-4 fw-bold text-white" >4</span>
                  </div>
                  <h3 class="fs-4 fw-bold mb-2">ابدأ رحلتك</h3>
                  <p class="text-secondary-emphasis">ابدأ في تحسين حياتك مع مركز سند</p>
              </div>
          </div>
        </div>
    </section>
  
    <!-- Services Section -->
    <section id="services" class="py-5 soft-gradient-alt">
        <div class="container-xxl py-md-5">
          <div class="text-center mb-5">
            <h2 class="display-4 section-title">خدماتنا</h2>
            <p class="lead text-secondary-emphasis mx-auto" style="max-width: 50rem;">
              نقدم مجموعة شاملة من الخدمات المتخصصة لدعم الشباب في مختلف جوانب حياتهم
            </p>
          </div>
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
            <!-- Service Card 1 -->
            <div class="col">
              <div class="card h-100 shadow-sm border-0 card-hover overflow-hidden">
                <div class="overflow-hidden img-zoom-hover" style="height: 200px;">
                  <img src="/assets/psychological-rehab-YrJI1qdw.jpg" class="card-img-top h-100 w-100 object-fit-cover" alt="التأهيل النفسي">
                </div>
                <div class="card-body p-4">
                  <h3 class="card-title fs-2">
                      <div class="step-circle d-flex align-items-center justify-content-center rounded-circle shadow-lg mb-4 animate-bounce-slow" style="background: linear-gradient(135deg, #f472b6, #d946ef); width: 4rem; height: 4rem;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart text-white" aria-hidden="true"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg>
                      </div>
                      التأهيل النفسي
                  </h3>
                  <ul class="list-unstyled mt-3">
                    <li class="d-flex align-items-start gap-2 mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success mt-1 flex-shrink-0"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>
                      <span>جلسات فردية وجماعية</span>
                    </li>
                    <li class="d-flex align-items-start gap-2 mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success mt-1 flex-shrink-0"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>
                      <span>برامج إدارة القلق والتوتر</span>
                    </li>
                     <li class="d-flex align-items-start gap-2 mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success mt-1 flex-shrink-0"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>
                      <span>الإرشاد الأسري والزوجي</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Service Card 2 -->
            <div class="col">
              <div class="card h-100 shadow-sm border-0 card-hover overflow-hidden">
                <div class="overflow-hidden img-zoom-hover" style="height: 200px;">
                  <img src="/assets/social-rehab-BbV68AvW.jpg" class="card-img-top h-100 w-100 object-fit-cover" alt="التأهيل الاجتماعي">
                </div>
                <div class="card-body p-4">
                  <h3 class="card-title fs-2">
                      <div class="step-circle d-flex align-items-center justify-content-center rounded-circle shadow-lg mb-4 animate-bounce-slow" style="background: linear-gradient(to bottom right, #3b82f6, #14b8a6); width: 4rem; height: 4rem;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users text-white" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><path d="M16 3.128a4 4 0 0 1 0 7.744"></path><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><circle cx="9" cy="7" r="4"></circle></svg>
                      </div>
                      التأهيل الاجتماعي
                  </h3>
                  <ul class="list-unstyled mt-3">
                    <li class="d-flex align-items-start gap-2 mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary mt-1 flex-shrink-0"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>
                      <span>تطوير مهارات التواصل الفعال</span>
                    </li>
                    <li class="d-flex align-items-start gap-2 mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary mt-1 flex-shrink-0"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>
                      <span>بناء العلاقات الاجتماعية الصحية</span>
                    </li>
                    <li class="d-flex align-items-start gap-2 mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary mt-1 flex-shrink-0"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>
                      <span>ورش عمل جماعية للتفاعل</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Service Card 3 -->
            <div class="col">
              <div class="card h-100 shadow-sm border-0 card-hover overflow-hidden">
                <div class="overflow-hidden img-zoom-hover" style="height: 200px;">
                  <img src="/assets/economic-empowerment-DzzOiwP3.jpg" class="card-img-top h-100 w-100 object-fit-cover" alt="التمكين الاقتصادي">
                </div>
                <div class="card-body p-4">
                  <h3 class="card-title fs-2">
                      <div class="step-circle d-flex align-items-center justify-content-center rounded-circle shadow-lg mb-4 animate-bounce-slow" style="background: linear-gradient(135deg, #4ade80, #16a34a); width: 4rem; height: 4rem;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up text-white" aria-hidden="true"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline></svg>
                      </div>
                      التمكين الاقتصادي
                  </h3>
                  <ul class="list-unstyled mt-3">
                    <li class="d-flex align-items-start gap-2 mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-info mt-1 flex-shrink-0"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>
                      <span>برامج ريادة الأعمال للشباب</span>
                    </li>
                    <li class="d-flex align-items-start gap-2 mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-info mt-1 flex-shrink-0"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>
                      <span>تطوير المهارات المهنية</span>
                    </li>
                    <li class="d-flex align-items-start gap-2 mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-info mt-1 flex-shrink-0"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>
                      <span>التوجيه المهني والإرشاد الوظيفي</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  
    <!-- Specialists Section -->
    <section id="specialists" class="py-5 bg-white">
        <div class="container-xxl py-md-5">
          <div class="text-center mb-5">
            <h2 class="display-4 section-title">أخصائيونا</h2>
            <p class="lead text-secondary-emphasis mx-auto" style="max-width: 50rem;">
              فريق من الأخصائيين المؤهلين وذوي الخبرة في مجالات التأهيل النفسي والاجتماعي
            </p>
          </div>
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @forelse ($specialists as $index => $specialist)
              <div class="col">
                <div class="card h-100 shadow-sm border-0 card-hover overflow-hidden">
                    <div class="overflow-hidden img-zoom-hover" style="height: 300px;">
                        <img src="{{ $specialist->image ? asset($specialist->image) : 'https://images.unsplash.com/photo-1557862921-37829c790f19?q=80&w=2071&auto=format&fit=crop' }}" class="card-img-top h-100 w-100 object-fit-cover" alt="{{ $specialist->name }}">
                    </div>
                    <div class="card-body text-center p-4">
                        <h3 class="card-title fs-3">{{ $specialist->name }}</h3>
                        <p class="card-text text-secondary-emphasis fs-5">{{ $specialist->speciality?->name }}</p>
                        {{-- <p class="text-muted">10 سنوات خبرة</p> --}}
                        @auth
                            <button type="button"
                                    class="btn btn-brand-primary rounded-pill px-5 py-2 mt-2"
                                    onclick="openReservationModal({{ $specialist->id }})">
                                حجز موعد
                            </button>
                        @else
                            <button type="button"
                                    class="btn btn-brand-primary rounded-pill px-5 py-2 mt-2"
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
        </div>
    </section>
  
    <section id="programs" class="py-5 bg-soft-gradient">
        <div class="container">
            <!-- Section Title and Description -->
            <div class="text-center mb-16">
              <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4 section-title">البرامج والفعاليات المتاحة</h2>
              <p class="text-xl text-gray-600 max-w-3xl mx-auto">اطلع على أحدث ورش العمل والجلسات الجماعية التي نقدمها في مركزنا أو عبر المنصة الرقمية</p>
            </div>
        
            <!-- Filter Buttons -->
            {{-- <div class="d-flex justify-content-center mb-4 gap-3">
              <button class="btn btn-brand-primary rounded-pill px-6 py-2">الكل</button>
              <button class="btn btn-brand-outline rounded-pill px-6 py-2">حضوري</button>
              <button class="btn btn-brand-outline rounded-pill px-6 py-2">رقمي</button>
              <button class="btn btn-brand-outline rounded-pill px-6 py-2">نفسي</button>
              <button class="btn btn-brand-outline rounded-pill px-6 py-2">اجتماعي</button>
              <button class="btn btn-brand-outline rounded-pill px-6 py-2">مهني</button>
            </div> --}}
        
            <!-- Program Cards -->
            <div class="row justify-content-center g-4">
              @forelse ($programs as $i => $program)
                <div class="col-md-6 col-lg-4">
                  <div class="card card-hover border shadow-sm animate-scale-in" style="animation-delay: 0s;">
                  <img src="/assets/hero-1-AzJwdMrZ.jpg" class="card-img-top" alt="برنامج إدارة القلق">
                  <div class="card-body">
                      <div class=" mb-4">
                      <!-- Bouncing SVG Circle -->
                      <div class="d-flex justify-content-between align-items-center">
                          <div class="step-circle d-flex align-items-center justify-content-center rounded-circle shadow-lg mb-4 animate-bounce-slow" 
                              style="background: linear-gradient(135deg, #f472b6, #d946ef); width: 4rem; height: 4rem;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart text-white" aria-hidden="true">
                              <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
                              </svg>
                          </div>
                          <div>
                              <span class="custom-badge custom-success">رقمي</span>
                          </div>
                      </div>
                      </div>
                      <h5 class="card-title font-semibold text-2xl mb-2">برنامج إدارة القلق</h5>
                      <p class="card-text text-muted">جلسات عملية لفهم القلق وتعلم مهارات التعامل معه بفعالية.</p>
                      <div class="mb-3">
                      <div class="d-flex align-items-center gap-2 text-gray-600">
                          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar">
                          <path d="M8 2v4"></path>
                          <path d="M16 2v4"></path>
                          <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                          <path d="M3 10h18"></path>
                          </svg>
                          <span>07 أكتوبر 2025</span>
                      </div>
                      <div class="d-flex align-items-center gap-2 text-gray-600">
                          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users">
                          <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                          <path d="M16 3.128a4 4 0 0 1 0 7.744"></path>
                          <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                          <circle cx="9" cy="7" r="4"></circle>
                          </svg>
                          <span>د. أحمد العبدالله</span>
                      </div>
                      </div>
                      @auth
                            <button type="button"
                                    class="btn btn-brand-primary w-100 rounded-pill "
                                    onclick="openProgramReservationModal({{ $program->id }})">
                                حجز البرنامج
                            </button>
                      @else
                        <button type="button"
                                class="btn btn-brand-primary w-100 rounded-pill "
                                data-bs-toggle="modal"
                                data-bs-target="#loginModal">
                            تسجيل الدخول للحجز
                        </button>
                      @endauth
                      {{-- <button class="btn btn-brand-primary w-100 rounded-pill">احجز الآن</button> --}}
                  </div>
                  </div>
                </div>
              @empty
                <div class="text-center text-muted">لا توجد فعاليات حالياً.</div>
              @endforelse

              @if ($programs->isNotEmpty())
                <div class="text-center mt-4">
                  <a href="/programs" class="btn btn-brand-primary rounded-pill px-5 py-2 mt-2" style="font-size: 1.3rem">عرض المزيد من الجلسات والفعاليات</a>
                </div>
              @endif
            </div> <!-- .row -->
        </div> <!-- .container -->
    </section>
        
    <section class="py-5 bg-white">
        <div class="container px-4">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold text-dark mb-4 section-title">قصص النجاح</h2>
                <p class="fs-5 text-muted mx-auto" style="max-width: 45rem;">استمع إلى تجارب من استفادوا من خدماتنا</p>
            </div>
    
            <div class="row justify-content-center g-4">
                <!-- Success Story 1 (Green) -->
                <div class="col-md-6 col-lg-5">
                    <div class="card h-100 shadow-sm border-0 bg-success-subtle text-success-emphasis card-hover" style="animation-delay: 0s;">
                        <div class="img-zoom-hover overflow-hidden">
                            <img alt="علي محمد" class="card-img-top" src="https://i.imgur.com/kPcbY1P.png">
                        </div>
                        <div class="card-body p-4 d-flex flex-column">
                            <div class="mb-3 animate-pulse-slow">
                                <!-- Star Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg>
                                <!-- Repeat for 5 stars if needed -->
                            </div>
                            <blockquote class="blockquote mb-4 flex-grow-1">
                                <p class="mb-0 fst-italic">"مركز سند غير حياتي بالكامل. الدعم النفسي والاجتماعي الذي حصلت عليه ساعدني على تجاوز أصعب المراحل."</p>
                            </blockquote>
                            <footer class="blockquote-footer text-dark fw-semibold fs-5 mt-auto bg-transparent border-0 p-0">
                                <cite title="علي محمد">علي محمد</cite>
                            </footer>
                        </div>
                    </div>
                </div>
        
                <!-- Success Story 2 (Yellow) -->
                <div class="col-md-6 col-lg-5">
                    <div class="card h-100 shadow-sm border-0 bg-warning-subtle text-warning-emphasis card-hover" style="animation-delay: 0.15s;">
                        <div class="img-zoom-hover overflow-hidden">
                            <img alt="نور أحمد" class="card-img-top" src="https://i.imgur.com/bIweZ5p.jpeg">
                        </div>
                        <div class="card-body p-4 d-flex flex-column">
                            <div class="mb-3 animate-pulse-slow">
                                <!-- Star Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-warning"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg>
                            </div>
                            <blockquote class="blockquote mb-4 flex-grow-1">
                                <p class="mb-0 fst-italic">"البرامج المهنية في المركز أعطتني الثقة والمهارات اللازمة لبدء مشروعي الخاص."</p>
                            </blockquote>
                            <footer class="blockquote-footer text-dark fw-semibold fs-5 mt-auto bg-transparent border-0 p-0">
                                <cite title="نور أحمد">نور أحمد</cite>
                            </footer>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>   
  
      <!-- FAQ Section -->
    <section class="py-5 soft-gradient">
        <div class="container-xxl py-md-5">
          <div class="text-center mb-5">
            <h2 class="display-4 section-title">الأسئلة الشائعة</h2>
            <p class="lead text-secondary-emphasis mx-auto" style="max-width: 50rem;">
              إجابات على أكثر الأسئلة شيوعًا حول خدماتنا
            </p>
          </div>
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="accordion" id="faqAccordion">
                      <!-- FAQ Item 1 -->
                      <div class="accordion-item mb-3 border-0 shadow-sm rounded-3">
                          <h2 class="accordion-header">
                              <button class="accordion-button fs-5 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-1" aria-expanded="false" aria-controls="faq-1">
                                  ما هي الخدمات التي يقدمها مركز سند؟
                              </button>
                          </h2>
                          <div id="faq-1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                              <div class="accordion-body text-secondary-emphasis">
                                  نقدم خدمات التأهيل النفسي والاجتماعي، بالإضافة إلى برامج التمكين الاقتصادي للشباب. تشمل خدماتنا جلسات فردية وجماعية، ورش عمل، وبرامج تدريبية متخصصة.
                              </div>
                          </div>
                      </div>
                      <!-- FAQ Item 2 -->
                      <div class="accordion-item mb-3 border-0 shadow-sm rounded-3">
                          <h2 class="accordion-header">
                              <button class="accordion-button fs-5 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-2" aria-expanded="false" aria-controls="faq-2">
                                  كيف يمكنني حجز جلسة؟
                              </button>
                          </h2>
                          <div id="faq-2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                              <div class="accordion-body text-secondary-emphasis">
                                  يمكنك حجز جلسة من خلال إنشاء حساب على منصتنا، ثم اختيار الخدمة المناسبة والأخصائي الذي ترغب في التواصل معه. ستتلقى تأكيدًا على بريدك الإلكتروني.
                              </div>
                          </div>
                      </div>
                      <!-- FAQ Item 3 -->
                      <div class="accordion-item mb-3 border-0 shadow-sm rounded-3">
                          <h2 class="accordion-header">
                              <button class="accordion-button fs-5 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-3" aria-expanded="false" aria-controls="faq-3">
                                  هل الجلسات متاحة عبر الإنترنت؟
                              </button>
                          </h2>
                          <div id="faq-3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                              <div class="accordion-body text-secondary-emphasis">
                                  نعم، نقدم جلسات رقمية عبر الإنترنت بالإضافة إلى الجلسات الحضورية في مقر المركز. يمكنك اختيار الطريقة التي تناسبك.
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </section>
  
    <!-- Contact Section -->
    <section id="contact" class="py-5 hero-gradient text-white">
        <div class="container-xxl py-md-5">
          <div class="text-center mb-5">
            <h2 class="display-4">تواصل معنا</h2>
            <p class="lead" style="color: #d8b4fe;">نحن هنا للإجابة على استفساراتك ومساعدتك في بدء رحلتك معنا</p>
          </div>
          <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
              <div class="col text-center">
                  <div class="p-4 rounded-4 contact-card">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3" style="width: 4rem; height: 4rem; background: rgba(255,255,255,0.2);">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path></svg>
                    </div>
                    <h3 class="fs-4">الهاتف</h3>
                    <p class="fs-5" dir="ltr" style="color: #d8b4fe;">+966 XX XXX XXXX</p>
                  </div>
              </div>
               <div class="col text-center">
                  <div class="p-4 rounded-4 contact-card">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3" style="width: 4rem; height: 4rem; background: rgba(255,255,255,0.2);">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path><rect x="2" y="4" width="20" height="16" rx="2"></rect></svg>
                    </div>
                    <h3 class="fs-4">البريد الإلكتروني</h3>
                    <p class="fs-5" style="color: #d8b4fe;">info@sanadcenter.com</p>
                  </div>
              </div>
              <div class="col text-center">
                  <div class="p-4 rounded-4 contact-card">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3" style="width: 4rem; height: 4rem; background: rgba(255,255,255,0.2);">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <h3 class="fs-4">الموقع</h3>
                    <p class="fs-5" style="color: #d8b4fe;">المملكة العربية السعودية</p>
                  </div>
              </div>
          </div>
          <div class="text-center">
              <button class="btn btn-light rounded-pill px-5 py-3 fs-5" style="color: var(--sanad-purple-dark);">ابدأ رحلتك معنا الآن</button>
          </div>
        </div>
    </section>
@endsection