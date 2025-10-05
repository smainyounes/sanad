
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>منصة سند | للتمكين النفسي والمهني للشباب</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Google Fonts (Cairo) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome (for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

<style>
    /* 
    ==============================================
    ACADEMIC & PROFESSIONAL AESTHETIC RE-DESIGN
    ==============================================
    */

    :root {
        --primary-color: #0D244F; /* Deep Navy Blue */
        --accent-color: #D4B283; /* Soft Gold/Beige */
        --text-color: #343a40;
        --light-bg: #F8F9FA;
        --white: #ffffff;
    }

    body {
        font-family: 'Cairo', sans-serif;
        color: var(--text-color);
        background-color: var(--white);
        overflow-x: hidden;
        scroll-behavior: smooth;
    }
    
    /* Navbar */
    .navbar {
        transition: all 0.3s ease;
        background-color: var(--white) !important;
        box-shadow: 0 2px 15px rgba(0,0,0,0.06);
    }
    .navbar-brand {
        font-weight: 800;
        font-size: 1.8rem;
        color: var(--primary-color) !important;
    }
    .navbar .nav-link {
        font-weight: 600;
        color: var(--primary-color) !important;
        opacity: 0.7;
        transition: all 0.3s ease;
    }
    .navbar .nav-link:hover, .navbar .nav-link.active {
        opacity: 1;
        color: var(--accent-color) !important;
    }
    
    /* Hero Section */
    .hero-section {
        background: linear-gradient(rgba(248, 249, 250, 0.8), rgba(248, 249, 250, 0.8)), url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=2084&auto=format&fit=crop') no-repeat center center;
        background-size: cover;
        min-height: 90vh;
        display: flex;
        align-items: center;
        text-align: center;
        padding-top: 80px;
    }
    .hero-section h1 {
        font-size: 3.8rem;
        font-weight: 800;
        color: var(--primary-color);
        line-height: 1.4;
    }
    .hero-section p {
        font-size: 1.25rem;
        max-width: 800px;
        margin: 20px auto 30px;
        color: #555;
        font-weight: 400;
    }

    /* Buttons */
    .btn { 
        transition: all 0.3s ease; 
        border-radius: 8px; 
        padding: 12px 30px;
        font-weight: 700;
        font-size: 1rem;
        border: 2px solid transparent;
    }
    .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        color: var(--white);
    }
    .btn-primary:hover {
        background-color: #0a1c3e;
        border-color: #0a1c3e;
        transform: translateY(-3px);
    }
    .btn-secondary {
        background-color: var(--accent-color);
        border-color: var(--accent-color);
        color: var(--primary-color);
    }
    .btn-secondary:hover {
        background-color: #c5a271;
        border-color: #c5a271;
        transform: translateY(-3px);
    }
    .btn-outline-primary {
        color: var(--primary-color);
        border-color: var(--primary-color);
    }
    .btn-outline-primary:hover {
        background-color: var(--primary-color);
        color: var(--white);
    }

    /* General Section Styling */
    section {
        padding: 90px 0;
    }
    .section-title {
        font-size: 2.8rem;
        font-weight: 800;
        color: var(--primary-color);
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 20px;
    }
    .section-subtitle {
        font-size: 1.1rem;
        color: #6c757d;
        max-width: 700px;
        margin: 0 auto 60px;
    }
    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        right: 50%;
        transform: translateX(50%);
        width: 70px;
        height: 4px;
        background-color: var(--accent-color);
        border-radius: 2px;
    }
    .bg-light {
        background-color: var(--light-bg) !important;
    }

    /* Feature Box (Services, Advantages) */
    .feature-box {
        text-align: center;
        padding: 35px;
        background: var(--white);
        border-radius: 12px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.07);
        transition: all 0.3s ease;
        border: 1px solid #eee;
    }
    .feature-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 40px rgba(0,0,0,0.1);
    }
    .feature-box .icon {
        font-size: 3rem;
        color: var(--accent-color);
        margin-bottom: 20px;
        line-height: 1;
    }
    .feature-box h4 {
        font-weight: 700;
        color: var(--primary-color);
        font-size: 1.3rem;
        margin-bottom: 10px;
    }

    /* Specialist Card */
    .specialist-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        overflow: hidden;
    }
    .specialist-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.12);
    }
    .specialist-card img {
        height: 300px;
        object-fit: cover;
    }
    .specialist-card .card-body {
        text-align: center;
    }
    .specialist-card .specialization {
        color: var(--accent-color);
        font-weight: 600;
    }

    /* How it Works Section */
    .how-it-works-step {
        position: relative;
        text-align: center;
    }
    .how-it-works-step .step-number {
        width: 70px;
        height: 70px;
        background-color: var(--white);
        border: 2px solid var(--primary-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 2rem;
        font-weight: 800;
        color: var(--primary-color);
    }
    .how-it-works-step h5 {
        font-weight: 700;
        color: var(--primary-color);
    }
    .timeline { position: relative; }
    .timeline > div:not(:last-child)::after {
        content: '';
        position: absolute;
        width: 60%;
        height: 2px;
        background-image: linear-gradient(to left, var(--accent-color), transparent);
        top: 35px;
        left: 70%;
        opacity: 0.5;
    }

    /* Testimonials Section */
    .testimonial-card {
        background-color: var(--white);
        border-radius: 15px;
        padding: 30px;
        position: relative;
        border: 1px solid #ddd;
    }
    .testimonial-card .quote-icon {
        position: absolute;
        top: 20px;
        right: 25px;
        font-size: 2.5rem;
        color: var(--primary-color);
        opacity: 0.08;
    }
    .testimonial-card img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 20px;
        border: 3px solid var(--accent-color);
    }
    .testimonial-card p {
        font-style: italic;
        color: #555;
        font-size: 1.1rem;
    }
    .testimonial-card .name {
        font-weight: 700;
        margin-top: 15px;
        color: var(--primary-color);
    }

    /* Final CTA Section */
    .final-cta {
        background: var(--primary-color);
        color: var(--white);
        border-radius: 20px;
        padding: 70px 40px;
    }
    .final-cta h2 { font-weight: 800; }

    /* Location Section */
    .location-section .map-container {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    .location-section .info-card {
        background-color: var(--white);
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        height: 100%;
    }
    .location-section .info-card h5 {
        font-weight: 700;
        color: var(--primary-color);
    }
    .location-section .info-card ul li i {
        font-size: 1.2rem;
        color: var(--accent-color);
        margin-left: 15px;
    }

    /* Footer */
    footer {
        background-color: var(--primary-color);
        color: rgba(255, 255, 255, 0.7);
        padding-top: 60px;
    }
    footer h5 {
        color: var(--white);
        font-weight: 700;
        margin-bottom: 20px;
    }
    footer a {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        transition: all 0.3s ease;
    }
    footer a:hover {
        color: var(--accent-color);
        padding-right: 5px;
    }
    footer .social-icons a {
        font-size: 1.5rem;
        margin: 0 10px;
        color: rgba(255, 255, 255, 0.7);
    }
    .footer-bottom {
        background-color: #0a1c3e;
        padding: 20px 0;
        margin-top: 40px;
        color: rgba(255, 255, 255, 0.5);
    }

    @media (max-width: 767px) {
        .hero-section h1 { font-size: 2.8rem; }
        .section-title { font-size: 2.2rem; }
        .timeline > div:not(:last-child)::after { display: none; }
    }
</style>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">سند</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">عن المنصة</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">خدماتنا</a></li>
                    <li class="nav-item"><a class="nav-link" href="#specialists">الأخصائيون</a></li>
                    <li class="nav-item"><a class="nav-link" href="#how-it-works">آلية العمل</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonials">قصص نجاح</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact-location">التواصل والمقر</a></li>
                </ul>
                <a href="#" class="btn btn-primary btn-sm px-4">ابدأ الآن</a>
            </div>
        </div>
    </nav>
    
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
                    <div class="col-lg-6 wow animate__animated animate__fadeInRight">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070&auto=format&fit=crop" alt="فريق عمل متعاون" class="img-fluid rounded-3 shadow-lg">
                    </div>
                    <div class="col-lg-6 wow animate__animated animate__fadeInLeft">
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
                                <a href="#" class="btn btn-outline-primary mt-2">حجز موعد</a>
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
                                <a href="#" class="btn btn-outline-primary mt-2">حجز موعد</a>
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
                                <a href="#" class="btn btn-outline-primary mt-2">حجز موعد</a>
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
                    <div class="col-lg-7 wow animate__animated animate__fadeInLeft">
                        <div class="map-container h-100">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.015794829778!2d46.721850715!3d24.693457181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03f3f3f3f3f3%3A0x3f3f3f3f3f3f3f3f!2sRiyadh%2C%20Saudi%20Arabia!5e0!3m2!1sen!2sus!4v1678888888888!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-5 wow animate__animated animate__fadeInRight">
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
    
    <!-- 9. FOOTER -->
    <footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h5>منصة سند</h5>
                <p>منصة ومركز متخصصان في تقديم الدعم النفسي والاجتماعي والمهني للشباب بأساليب علمية حديثة.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <h5>روابط هامة</h5>
                <ul class="list-unstyled p-0">
                    <li><a href="#about">عن المنصة</a></li>
                    <li><a href="#services">الخدمات المقدمة</a></li>
                    <li><a href="#specialists">فريق الأخصائيين</a></li>
                    <li><a href="#">سياسة الخصوصية والشروط</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5>معلومات التواصل</h5>
                <ul class="list-unstyled p-0">
                    <li class="mb-2"><i class="fas fa-envelope ms-2"></i> info@sanad.dz</li>
                    <li class="mb-2"><i class="fas fa-phone ms-2"></i> <span dir="ltr">+213 21 123 456</span></li>
                    <li class="mb-2"><i class="fas fa-map-marker-alt ms-2"></i> الجزائر العاصمة، الجزائر</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <p class="mb-0">جميع الحقوق محفوظة © 2025 لمنصة سند</p>
    </div>
    </footer>

    <!-- JS Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>