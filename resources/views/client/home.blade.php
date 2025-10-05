@extends('client.layouts.app')

@section('title', 'دعم نفسي واجتماعي رقمي وحضوري')

@section('styles')
    <style>
        /* Event List */
        .event-item {
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
            transition: all 0.3s ease;
        }
        .event-item:hover {
            transform: translateX(-5px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }
    </style>
@endsection

@section('content')
   <!-- 1. HERO SECTION -->
   <header class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="wow animate__animated animate__fadeInDown">سند: نحو تمكين الشباب وبناء مستقبلٍ واعد</h1>
                    <p class="lead wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        نوفر بيئة دعم متكاملة، تجمع بين الإرشاد الرقمي المتطور والرعاية الحضورية المباشرة، لمرافقة الشباب في رحلتهم نحو تحقيق ذواتهم والاندماج الإيجابي في المجتمع.
                    </p>
                    <a href="#" class="btn btn-primary btn-lg wow animate__animated animate__pulse" data-wow-delay="0.4s">اكتشف خدماتنا</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- 2. ABOUT THE PROJECT -->
        <section id="about">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 ">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070&auto=format&fit=crop" alt="فريق عمل متعاون" class="img-fluid rounded-3 shadow-lg">
                    </div>
                    <div class="col-lg-6 ">
                        <h2 class="section-title text-center mb-4">رسالتنا ورؤيتنا</h2>
                        <p class="lead">تأسست منصة ومركز <strong>سند</strong> انطلاقاً من إيماننا العميق بأهمية توفير الدعم الممنهج للشباب خلال المراحل التكوينية الحاسمة في حياتهم.</p>
                        <p>تتمثل مهمتنا في تقديم منظومة دعم احترافية وآمنة، تدمج بين <strong>الاستشارات الرقمية</strong> الميسرة و<strong>البرامج الحضورية</strong> التفاعلية في مركزنا، بهدف تزويد الشباب بالمهارات النفسية والاجتماعية والمهنية اللازمة لتحقيق استقلاليتهم، وليصبحوا أعضاء فاعلين ومؤثرين في مجتمعهم.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. MAIN SERVICES -->
        <section id="services" class="bg-light">
            <div class="container text-center">
                <h2 class="section-title">خدماتنا المتكاملة</h2>
                <p class="section-subtitle">نقدم حزمة من الحلول المصممة بعناية لتلبية الاحتياجات المتنوعة للشباب في مسيرتهم نحو التعافي والنمو.</p>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.1s">
                        <div class="feature-box h-100">
                            <div class="icon"><i class="fas fa-laptop-medical"></i></div>
                            <h4>استشارات نفسية رقمية</h4>
                            <p>جلسات فردية عبر الإنترنت مع نخبة من الأخصائيين المؤهلين بخصوصية تامة.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.2s">
                        <div class="feature-box h-100">
                            <div class="icon"><i class="fas fa-users"></i></div>
                            <h4>برامج دعم حضورية</h4>
                            <p>ورش عمل وجلسات جماعية في مقرنا لتعزيز المهارات الاجتماعية والتفاعلية.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.3s">
                        <div class="feature-box h-100">
                            <div class="icon"><i class="fas fa-chart-line"></i></div>
                            <h4>تأهيل وتوجيه مهني</h4>
                            <p>برامج متخصصة لتطوير الكفاءات المهنية وتحديد المسارات الوظيفية الملائمة.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.4s">
                        <div class="feature-box h-100">
                            <div class="icon"><i class="fas fa-book-open"></i></div>
                            <h4>مكتبة موارد معرفية</h4>
                            <p>محتوى علمي وتوعوي ثري لدعم التطور الشخصي والصحة النفسية.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. SPECIALISTS -->
        <section id="specialists">
            <div class="container">
                <h2 class="section-title text-center">فريق الأخصائيين</h2>
                <p class="section-subtitle text-center">نفخر بفريقنا من الخبراء والمستشارين المتخصصين في مختلف مجالات الدعم النفسي والاجتماعي.</p>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4 wow animate__animated animate__fadeInUp">
                        <div class="card specialist-card">
                            <img src="https://images.unsplash.com/photo-1557862921-37829c790f19?q=80&w=2071&auto=format&fit=crop" class="card-img-top" alt="د. أحمد محمود">
                            <div class="card-body p-4">
                                <h5 class="card-title">د. أحمد محمود</h5>
                                <p class="specialization">أخصائي نفسي إكلينيكي</p>
                                <p class="card-text">متخصص في العلاج المعرفي السلوكي ومعالجة الصدمات النفسية.</p>
                                <a href="#" class="btn btn-secondary mt-2">حجز موعد</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        <div class="card specialist-card">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="أ. فاطمة علي">
                            <div class="card-body p-4">
                                <h5 class="card-title">أ. فاطمة علي</h5>
                                <p class="specialization">مرشدة اجتماعية ومهنية</p>
                                <p class="card-text">خبيرة في تطوير المهارات الحياتية وتصميم المسارات المهنية للشباب.</p>
                                <a href="#" class="btn btn-secondary mt-2">حجز موعد</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                        <div class="card specialist-card">
                            <img src="https://plus.unsplash.com/premium_photo-1661764907034-7a3b3127a555?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="د. يوسف إبراهيم">
                            <div class="card-body p-4">
                                <h5 class="card-title">د. يوسف إبراهيم</h5>
                                <p class="specialization">طبيب نفسي</p>
                                <p class="card-text">متخصص في إدارة الضغوط النفسية والقلق وتقديم الاستشارات الدوائية.</p>
                                <a href="#" class="btn btn-secondary mt-2">حجز موعد</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="events">
            <div class="container">
                <h2 class="section-title text-center">جلسات وفعاليات هذا الأسبوع</h2>
                <div class="list-group list-group-flush col-lg-8 mx-auto">
                    <div class="list-group-item p-4 mb-3 event-item wow animate__animated animate__fadeInRight">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <div>
                                <h5><i class="fas fa-chalkboard-teacher text-primary me-2"></i> ورشة عمل: كيف تبني سيرتك الذاتية؟ (حضوري/أونلاين)</h5>
                                <p class="mb-1 text-muted"><i class="fas fa-calendar-alt me-2"></i>الثلاثاء، 25 أكتوبر <i class="fas fa-clock ms-3 me-2"></i>06:00 مساءً</p>
                            </div>
                            <a href="#" class="btn btn-secondary">انضم الآن</a>
                        </div>
                    </div>
                    <div class="list-group-item p-4 mb-3 event-item wow animate__animated animate__fadeInRight" data-wow-delay="0.2s">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <div>
                                <h5><i class="fas fa-users text-success me-2"></i> جلسة حوار جماعية: التعامل مع ضغوط المجتمع (حضوري)</h5>
                                <p class="mb-1 text-muted"><i class="fas fa-calendar-alt me-2"></i>الخميس، 27 أكتوبر <i class="fas fa-clock ms-3 me-2"></i>07:00 مساءً</p>
                            </div>
                            <a href="#" class="btn btn-secondary">انضم الآن</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. HOW IT WORKS -->
        <section id="how-it-works" class="bg-light">
            <div class="container text-center">
                <h2 class="section-title">آلية العمل في 4 خطوات</h2>
                <p class="section-subtitle">نظامنا مصمم ليكون سلساً ومباشراً، لتسهيل وصولكم إلى الدعم المطلوب في أسرع وقت.</p>
                <div class="row g-5 timeline">
                    <div class="col-md-3 wow animate__animated animate__fadeInUp">
                        <div class="how-it-works-step">
                            <div class="step-number">1</div>
                            <h5>إنشاء حساب</h5>
                            <p>سجل بياناتك بسهولة وأمان لإنشاء ملفك الشخصي.</p>
                        </div>
                    </div>
                    <div class="col-md-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        <div class="how-it-works-step">
                            <div class="step-number">2</div>
                            <h5>تحديد الخدمة</h5>
                            <p>اختر نوع الدعم المناسب لك، سواء كان رقمياً أو حضورياً.</p>
                        </div>
                    </div>
                    <div class="col-md-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                        <div class="how-it-works-step">
                            <div class="step-number">3</div>
                            <h5>حجز الموعد</h5>
                            <p>تصفح قائمة الأخصائيين وحدد الموعد الملائم لجلستك الأولى.</p>
                        </div>
                    </div>
                    <div class="col-md-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                        <div class="how-it-works-step">
                            <div class="step-number">4</div>
                            <h5>بدء المسار</h5>
                            <p>انضم إلى برنامج الدعم الخاص بك وابدأ رحلة التطور والنمو.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 6. TESTIMONIALS -->
        <section id="testimonials">
            <div class="container">
                <h2 class="section-title text-center">شهادات وقصص نجاح</h2>
                <p class="section-subtitle text-center">نستلهم من قصص نجاح شبابنا، ونفخر بكوننا جزءاً من رحلتهم نحو مستقبل أفضل.</p>
                <div class="row g-4">
                    <div class="col-lg-6 wow animate__animated animate__fadeInUp">
                        <div class="testimonial-card text-center h-100 shadow-sm">
                            <i class="fas fa-quote-left quote-icon"></i>
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1887&auto=format&fit=crop" alt="Avatar">
                            <p>"منصة سند كانت بمثابة نقطة تحول في حياتي. الدعم الاحترافي الذي تلقيته في المركز منحني الثقة والأدوات اللازمة لإعادة بناء مستقبلي."</p>
                            <div class="name">- خالد، 19 عاماً</div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        <div class="testimonial-card text-center h-100 shadow-sm">
                            <i class="fas fa-quote-left quote-icon"></i>
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=1887&auto=format&fit=crop" alt="Avatar">
                            <p>"الجمع بين مرونة الجلسات الرقمية وعمق التفاعل في الورش الحضورية كان تجربة فريدة. شعرت بالانتماء والدعم الحقيقي الذي كنت أبحث عنه."</p>
                            <div class="name">- نورة، 18 عاماً</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 7. CONTACT & LOCATION -->
        <section id="contact-location" class="bg-light">
            <div class="container">
                <h2 class="section-title text-center">المقر الرئيسي ووسائل التواصل</h2>
                <p class="section-subtitle text-center">يسعدنا استقبالكم في مركزنا أو الرد على استفساراتكم عبر قنوات التواصل المتاحة.</p>
                <div class="row g-4 align-items-stretch">
                    <div class="col-lg-7 ">
                        <div class="map-container h-100">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.015794829778!2d46.721850715!3d24.693457181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03f3f3f3f3f3%3A0x3f3f3f3f3f3f3f3f!2sRiyadh%2C%20Saudi%20Arabia!5e0!3m2!1sen!2sus!4v1678888888888!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-5 ">
                        <div class="info-card h-100">
                            <h5>معلومات التواصل</h5>
                            <ul class="list-unstyled p-0">
                                <li class="mb-3"><i class="fas fa-map-marker-alt"></i> <strong>العنوان:</strong> شارع ديدوش مراد، الجزائر العاصمة، الجزائر</li>
                                <li class="mb-3"><i class="fas fa-phone-alt"></i> <strong>الهاتف:</strong> +213 21 123 456</li>
                                <li class="mb-3"><i class="fas fa-envelope"></i> <strong>البريد الإلكتروني:</strong> info@sanad.dz</li>
                                <li><i class="fas fa-clock"></i> <strong>ساعات العمل:</strong> الأحد - الخميس: 8:30 صباحاً - 4:30 مساءً</li>
                            </ul>
                            <a href="#" class="btn btn-primary mt-4 w-100">احجز جلستك الآن</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 8. FINAL CTA -->
        <section id="register">
            <div class="container">
                <div class="final-cta text-center wow animate__animated animate__zoomIn">
                    <h2>هل أنت مستعد لبدء رحلة التغيير؟</h2>
                    <p class="lead my-4">اتخذ الخطوة الأولى نحو مستقبل أكثر إشراقاً. فريقنا مستعد لتقديم الدعم والإرشاد في كل مرحلة من مراحل طريقك. لا تتردد بالانضمام إلينا.</p>
                    <a href="#" class="btn btn-secondary btn-lg">سجل في منصة سند الآن</a>
                </div>
            </div>
        </section>
    </main>
@endsection