@extends('client.layouts.app')

@section('styles')
    <style>
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

        /* Team Section - NEW DESIGN */
        .team-card {
            background: var(--white);
            border-radius: 15px;
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 5px 25px rgba(0,0,0,0.07);
            transition: all 0.3s ease;
        }
        .team-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.12);
        }
        .team-card img {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid var(--accent-color);
            margin-bottom: 20px;
        }
        .team-card h5 { 
            font-weight: 700;
            color: var(--primary-color); 
        }
        .team-card .role { 
            color: #6c757d; 
            font-weight: 600;
        }
    </style>
@endsection

@section('content')
    <!-- PAGE HEADER -->
    <header class="page-header wow animate__animated animate__fadeIn">
        <div class="container">
            <h1>معكم في كل خطوة نحو غدٍ أفضل</h1>
            <p>تعرفوا على قصة سند، رسالتنا، والقيم التي تدفعنا لتقديم أفضل دعم ممكن لشبابنا.</p>
        </div>
    </header>

    <main>
        <!-- OUR STORY SECTION -->
        <section id="our-story">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 wow animate__animated animate__fadeInRight">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop" alt="فريق عمل سند" class="img-fluid rounded-3 shadow-lg">
                    </div>
                    <div class="col-lg-6 wow animate__animated animate__fadeInLeft">
                        <h2 class="section-title text-center mb-4" style="">من نحن؟</h2>
                        <style>.section-title[style*="text-align: start"]::after { right: 0; transform: none; }</style>
                        <p class="lead">مركز <strong>سند</strong> ليس مجرد مكان، بل هو مساحة آمنة وبيئة داعمة تأسست على أيدي خبراء متخصصين في التأهيل النفسي والاجتماعي، إيمانًا منهم بأن كل شاب يستحق فرصة ثانية لبناء مستقبل مشرق.</p>
                        <p>هذه المنصة هي بوابتكم الرقمية ونافذتكم على مركزنا. من خلالها، نسعى لتقديم المساعدة والمعلومات اللازمة لكم بكل سهولة. هنا يمكنكم التعرف علينا أكثر، استكشاف برامجنا وفعالياتنا المجدولة، والاطلاع على خبرات فريق الأخصائيين المستعدين لمساندتكم.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- VISION & VALUES SECTION -->
        <section id="values" class="bg-light">
            <div class="container text-center">
                <h2 class="section-title">رؤيتنا وقيمنا الأساسية</h2>
                <p class="section-subtitle">نحن ملتزمون بمجموعة من المبادئ التي توجه كل جانب من جوانب عملنا وتضمن تقديم خدمة استثنائية.</p>
                <div class="row g-4">
                    <!-- Value 1 (Using .feature-box style) -->
                    <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn">
                        <div class="feature-box h-100">
                            <div class="icon"><i class="fas fa-lock"></i></div>
                            <h4>السرية والخصوصية</h4>
                            <p>نلتزم بحماية خصوصية جميع المستفيدين وسرية معلوماتهم كأولوية قصوى.</p>
                        </div>
                    </div>
                    <!-- Value 2 -->
                    <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.1s">
                        <div class="feature-box h-100">
                            <div class="icon"><i class="fas fa-hand-holding-heart"></i></div>
                            <h4>التعاطف والاحترام</h4>
                            <p>نتعامل مع كل فرد بتعاطف كامل واحترام متبادل، في بيئة خالية من الأحكام المسبقة.</p>
                        </div>
                    </div>
                    <!-- Value 3 -->
                    <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.2s">
                        <div class="feature-box h-100">
                            <div class="icon"><i class="fas fa-rocket"></i></div>
                            <h4>التمكين والاستقلالية</h4>
                            <p>هدفنا هو تمكين الشباب بالأدوات والمهارات اللازمة لتحقيق استقلاليتهم ونجاحهم.</p>
                        </div>
                    </div>
                    <!-- Value 4 -->
                    <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.3s">
                        <div class="feature-box h-100">
                            <div class="icon"><i class="fas fa-user-tie"></i></div>
                            <h4>الاحترافية والخبرة</h4>
                            <p>يعتمد عملنا على أسس علمية وخبرات عملية يقدمها فريق من المتخصصين المؤهلين.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- OUR TEAM SECTION -->
        <section id="team">
            <div class="container text-center">
                <h2 class="section-title">تعرف على قادة الفريق</h2>
                <p class="section-subtitle">يقف خلف نجاح سند فريق من الخبراء المتفانين في مجالاتهم، وهؤلاء هم قادة الأقسام الرئيسية.</p>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-4 col-lg-3 wow animate__animated animate__fadeInUp">
                        <div class="team-card">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1887&auto=format&fit=crop" alt="مدير المركز">
                            <h5>أ. كريم بوعلام</h5>
                            <p class="role">مؤسس ومدير المركز</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                        <div class="team-card">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=1888&auto=format&fit=crop" alt="رئيسة قسم الإرشاد">
                            <h5>د. أمينة حداد</h5>
                            <p class="role">رئيسة قسم الإرشاد النفسي</p>
                        </div>
                    </div>
                </div>
                <a href="/specialists" class="btn btn-primary mt-5">عرض كل الأخصائيين</a>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="pt-0">
            <div class="container">
                <div class="final-cta text-center wow animate__animated animate__zoomIn">
                    <h2 class="mb-4">هل أنت مستعد لبدء رحلتك؟</h2>
                    <p class="lead my-4">نحن هنا للاستماع إليك ومساعدتك. الخطوة الأولى تبدأ منك. تواصل معنا أو اكتشف البرامج التي نقدمها.</p>
                    <a href="/services" class="btn btn-secondary btn-lg">اكتشف خدماتنا الآن</a>
                </div>
            </div>
        </section>
    </main>

@endsection