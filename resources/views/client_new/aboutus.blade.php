@extends('client_new.layouts.app')

@section('styles')
    {{-- Add any extra, page-specific styles here --}}
    <style>
        /* Style for the icon circles in the values section */
        .icon-circle { 
            width: 80px; 
            height: 80px; 
            display: inline-flex; 
            align-items: center; 
            justify-content: center; 
            border-radius: 50%; 
        }

        /* Consistent height for team member images */
        #team .card-img-top {
            height: 250px;
            object-fit: cover;
        }

        /* Minor adjustment for the hero paragraph */
        .hero-gradient .lead {
            max-width: 700px; 
            margin-left: auto;
            margin-right: auto;
        }

        /* Ensure section title alignment on different screen sizes */
        @media (max-width: 991.98px) {
            .section-title.text-lg-start {
                text-align: center !important;
            }
            .section-title.text-lg-start::after {
                right: 50%;
                transform: translateX(50%);
            }
        }
    </style>
@endsection

@section('content')
    <!-- PAGE HEADER -->
    <header class="hero-gradient text-white text-center py-5">
        <div class="container py-md-5 wow animate__animated animate__fadeIn">
            <h1 class="display-3">معكم في كل خطوة نحو غدٍ أفضل</h1>
            <p class="lead text-white-75 mt-3">
                تعرفوا على قصة سند، رسالتنا، والقيم التي تدفعنا لتقديم أفضل دعم ممكن لشبابنا.
            </p>
        </div>
    </header>

    <main>
        <!-- OUR STORY SECTION -->
        <section id="our-story" class="py-5 my-4">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 wow animate__animated animate__fadeInRight">
                        <div class="img-zoom-hover rounded-4 shadow-lg">
                           <img src="/images/488681785_2666456956897469_4886976599475886734_n.jpg" alt="فريق عمل سند" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 wow animate__animated animate__fadeInLeft">
                        <h2 class="section-title text-lg-start mb-4">من نحن؟</h2>
                        <p class="lead">مركز <strong>سند</strong> ليس مجرد مكان، بل هو مساحة آمنة وبيئة داعمة تأسست على أيدي خبراء متخصصين، إيمانًا منهم بأن كل شاب يستحق فرصة ثانية لبناء مستقبل مشرق.</p>
                        <p class="text-muted">هذه المنصة هي بوابتكم الرقمية ونافذتكم على مركزنا. من خلالها، نسعى لتقديم المساعدة والمعلومات اللازمة لكم بكل سهولة.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- VISION & VALUES SECTION -->
        <section id="values" class="py-5 soft-gradient">
            <div class="container text-center">
                <h2 class="section-title">رؤيتنا وقيمنا الأساسية</h2>
                <p class="text-muted mb-5">نحن ملتزمون بمجموعة من المبادئ التي توجه كل جانب من جوانب عملنا.</p>
                <div class="row g-4">
                    <!-- Value 1 -->
                    <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn">
                        <div class="card card-hover h-100 border-0 shadow-sm card-border-top-purple p-4">
                            <div class="icon-circle bg-primary-subtle text-primary mb-4 mx-auto">
                                <i class="fas fa-lock fa-2x"></i>
                            </div>
                            <h4 class="mb-3">السرية والخصوصية</h4>
                            <p class="text-muted small">نلتزم بحماية خصوصية جميع المستفيدين وسرية معلوماتهم كأولوية قصوى.</p>
                        </div>
                    </div>
                    <!-- Value 2 -->
                    <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.1s">
                        <div class="card card-hover h-100 border-0 shadow-sm card-border-top-pink p-4">
                            <div class="icon-circle bg-secondary-subtle text-secondary mb-4 mx-auto">
                                <i class="fas fa-hand-holding-heart fa-2x"></i>
                            </div>
                            <h4 class="mb-3">التعاطف والاحترام</h4>
                            <p class="text-muted small">نتعامل مع كل فرد بتعاطف كامل واحترام متبادل، في بيئة خالية من الأحكام.</p>
                        </div>
                    </div>
                    <!-- Value 3 -->
                    <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.2s">
                        <div class="card card-hover h-100 border-0 shadow-sm card-border-top-green p-4">
                            <div class="icon-circle bg-success-subtle text-success mb-4 mx-auto">
                                <i class="fas fa-rocket fa-2x"></i>
                            </div>
                            <h4 class="mb-3">التمكين والاستقلالية</h4>
                            <p class="text-muted small">هدفنا هو تمكين الشباب بالأدوات والمهارات اللازمة لتحقيق استقلاليتهم.</p>
                        </div>
                    </div>
                    <!-- Value 4 -->
                    <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.3s">
                        <div class="card card-hover h-100 border-0 shadow-sm card-border-top-purple p-4">
                           <div class="icon-circle bg-primary-subtle text-primary mb-4 mx-auto">
                                <i class="fas fa-user-tie fa-2x"></i>
                            </div>
                            <h4 class="mb-3">الاحترافية والخبرة</h4>
                            <p class="text-muted small">يعتمد عملنا على أسس علمية وخبرات عملية يقدمها فريق من المتخصصين.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- OUR TEAM SECTION -->
        <section id="team" class="py-5 my-4">
            <div class="container text-center">
                <h2 class="section-title">تعرف على قادة الفريق</h2>
                <p class="text-muted mb-5">يقف خلف نجاح سند فريق من الخبراء المتفانين في مجالاتهم.</p>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-4 col-lg-3 wow animate__animated animate__fadeInUp">
                        <div class="card card-hover border-0 shadow-sm h-100 text-center">
                             <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1887&auto=format&fit=crop" class="card-img-top" alt="مدير المركز">
                            <div class="card-body p-4">
                                <h5 class="card-title mb-1">أ. كريم بوعلام</h5>
                                <p class="text-primary fw-bold">مؤسس ومدير المركز</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                        <div class="card card-hover border-0 shadow-sm h-100 text-center">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=1888&auto=format&fit=crop" class="card-img-top" alt="رئيسة قسم الإرشاد">
                            <div class="card-body p-4">
                                <h5 class="card-title mb-1">د. أمينة حداد</h5>
                                <p class="text-primary fw-bold">رئيسة قسم الإرشاد النفسي</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="/specialists" class="btn btn-brand-primary mt-5">عرض كل الأخصائيين</a>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-5">
            <div class="container">
                <div class="hero-gradient text-white text-center p-5 rounded-4 shadow-lg animate-float wow animate__animated animate__zoomIn">
                    <h2 class="display-5 mb-3">هل أنت مستعد لبدء رحلتك؟</h2>
                    <p class="lead my-4 text-white-75">نحن هنا للاستماع إليك ومساعدتك. الخطوة الأولى تبدأ منك. تواصل معنا أو اكتشف البرامج التي نقدمها.</p>
                    <a href="/services" class="btn btn-lg btn-light text-primary fw-bold">اكتشف خدماتنا الآن</a>
                </div>
            </div>
        </section>
    </main>
@endsection