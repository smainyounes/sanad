@extends('client.layouts.app')

@section('styles')
    <style>
                /* Values Section */
                .value-box { text-align: center; padding: 20px; }
        .value-box .icon { font-size: 3rem; color: var(--primary-color); margin-bottom: 20px; line-height: 1; }
        .value-box h4 { font-weight: 700; font-size: 1.3rem; margin-bottom: 10px; }
        
        /* Team Section */
        .team-member { text-align: center; }
        .team-member img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid var(--white);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .team-member h5 { font-weight: 700; }
        .team-member p { color: #6c757d; }

        /* CTA Section */
        .cta-section {
            background-color: var(--primary-color);
            color: var(--white);
            border-radius: 20px;
        }
        .cta-section h2 { font-weight: 800; }
        .btn-outline-light {
             border-radius: 50px; padding: 10px 30px; font-weight: 700;
        }
        .btn-light {
             border-radius: 50px; padding: 10px 30px; font-weight: 700; color: var(--primary-color);
        }

    </style>
@endsection

@section('content')
        <!-- PAGE HEADER -->
    <header class="page-header wow animate__fadeIn">
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
                    <div class="col-lg-6 wow animate__slideInRight">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop" alt="فريق عمل سند" class="img-fluid rounded-3 shadow-lg">
                    </div>
                    <div class="col-lg-6 wow animate__slideInLeft">
                        <h2 class="section-title text-center mb-4">من نحن؟</h2>
                        <p class="lead">مركز <strong>سند</strong> ليس مجرد مكان، بل هو مساحة آمنة وبيئة داعمة تأسست على أيدي خبراء متخصصين في التأهيل النفسي والاجتماعي، إيمانًا منهم بأن كل شاب يستحق فرصة ثانية لبناء مستقبل مشرق.</p>
                        <p>أما هذا الموقع الإلكتروني، فهو بوابتكم الرقمية ونافذتكم على مركزنا. من خلاله، نسعى لتقديم المساعدة والمعلومات اللازمة لكم بكل سهولة. هنا يمكنكم التعرف علينا أكثر، استكشاف برامجنا وفعالياتنا المجدولة، والاطلاع على خبرات فريق الأخصائيين الذين هم على أتم الاستعداد لمساندتكم.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- VISION & VALUES SECTION -->
        <section id="values" class="bg-light">
            <div class="container text-center">
                <h2 class="section-title">رؤيتنا وقيمنا</h2>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 wow animate__zoomIn" data-wow-delay="0.1s">
                        <div class="value-box">
                            <div class="icon"><i class="fas fa-lock"></i></div>
                            <h4>السرية والخصوصية</h4>
                            <p>نلتزم بحماية خصوصية جميع المستفيدين وسرية معلوماتهم كأولوية قصوى.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow animate__zoomIn" data-wow-delay="0.2s">
                        <div class="value-box">
                            <div class="icon"><i class="fas fa-hand-holding-heart"></i></div>
                            <h4>التعاطف والاحترام</h4>
                            <p>نتعامل مع كل فرد بتعاطف كامل واحترام متبادل، في بيئة خالية من الأحكام المسبقة.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow animate__zoomIn" data-wow-delay="0.3s">
                        <div class="value-box">
                            <div class="icon"><i class="fas fa-rocket"></i></div>
                            <h4>التمكين والاستقلالية</h4>
                            <p>هدفنا هو تمكين الشباب بالأدوات والمهارات اللازمة لتحقيق استقلاليتهم ونجاحهم.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow animate__zoomIn" data-wow-delay="0.4s">
                        <div class="value-box">
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
                <h2 class="section-title">تعرف على فريقنا</h2>
                <p class="lead text-muted mb-5">يقف خلف نجاح سند فريق من الخبراء المتفانين في مجالاتهم.</p>
                <div class="row g-5 justify-content-center">
                    <div class="col-md-4 col-lg-3 wow animate__fadeInUp" data-wow-delay="0.1s">
                        <div class="team-member">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1887&auto=format&fit=crop" alt="مدير المركز">
                            <h5>أ. كريم بوعلام</h5>
                            <p>مؤسس ومدير المركز</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 wow animate__fadeInUp" data-wow-delay="0.2s">
                        <div class="team-member">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=1888&auto=format&fit=crop" alt="رئيسة قسم الإرشاد">
                            <h5>د. أمينة حداد</h5>
                            <p>رئيسة قسم الإرشاد النفسي</p>
                        </div>
                    </div>
                </div>
                <a href="specialists.html" class="btn btn-primary btn-lg mt-5">عرض كل الأخصائيين</a>
            </div>
        </section>

        <!-- CTA Section -->
        <section>
            <div class="container">
                <div class="cta-section p-5 text-center wow animate__zoomIn">
                    <h2 class="mb-4">هل أنت مستعد لبدء رحلتك؟</h2>
                    <p class="lead mb-4">نحن هنا للاستماع إليك ومساعدتك. الخطوة الأولى تبدأ منك.</p>
                    <a href="programs.html" class="btn btn-light me-2">اكتشف برامجنا</a>
                    <a href="index.html#contact-location" class="btn btn-outline-light">تواصل معنا</a>
                </div>
            </div>
        </section>
    </main>

@endsection