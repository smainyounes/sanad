
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سند | روڨل أمورك</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Google Fonts (Knewave for headings, Patrick Hand & Tajawal for body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Knewave&family=Patrick+Hand&family=Tajawal:wght@400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome (for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

<style>
    /* 
    ==============================================
    SKATER ZINE / DOODLE NOTEBOOK AESTHETIC
    ==============================================
    */

    :root {
        --paper-bg: #F4F1EA;
        --ink-black: #1E1E1E;
        --highlighter-yellow: #FFD600;
        --accent-blue: #4A90E2;
    }

    body {
        font-family: 'Patrick Hand', 'Tajawal', cursive;
        font-size: 1.2rem;
        color: var(--ink-black);
        background-color: var(--paper-bg);
        background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAAUVBMVEWFhYWDg4N3d3dtbW17e3t1dXVpaWl7e3t4eHhnZ2dzc3Nvb29sbGxra2uBgYF4eHhtbGxsbGxvb293d3d5eXmBgYGHh4eLi4uKioqSkpKTk5MLfVEYAAAAF3RSTlNAYGVub29uc3l5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXk8a7d5AAAAYNJREFUSMdjYGBgYGRAwVPAxM7OgGykGAAouGDIyYks2Vk5OTk5A2B5RM2PApGZmZl5VgAUPAVM3DygidHVg3wUfMAMzM3smBGZmAEwB82yAfgAFsdqWgHwArABs3Az1wxwAn382M3s2DzA7MwAjc3Njd2WAeC5ARoW1g1wA1zd2Njb2d2DkBNgwYKYsEOwD88Awc3NwRMEgSkGBoYIBgP4lo2dHR0dHX09PX09PX39/T29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT2s2CAAwAAD4V3fGAAAAAElFTkSuQmCC');
        overflow-x: hidden;
    }

    /* TYPOGRAPHY */
    h1, h2, h3, h4, .navbar-brand, .btn {
        font-family: 'Knewave', 'Tajawal', cursive;
        letter-spacing: 1px;
    }
    
    /* Navbar */
    .navbar {
        background-color: var(--paper-bg) !important;
        border-bottom: 3px solid var(--ink-black);
    }
    .navbar-brand {
        font-size: 2.5rem;
        color: var(--ink-black) !important;
    }
    .navbar .nav-link {
        font-family: 'Knewave', cursive;
        font-size: 1.1rem;
        color: var(--ink-black) !important;
        opacity: 0.7;
        transition: all 0.2s ease;
    }
    .navbar .nav-link:hover, .navbar .nav-link.active {
        opacity: 1;
        transform: translateY(-2px);
        color: var(--accent-blue) !important;
    }
    
    /* Hero Section */
    .hero-section {
        min-height: 90vh;
        display: flex;
        align-items: center;
        text-align: center;
        padding-top: 80px;
    }
    .hero-section h1 {
        font-size: 5rem;
        line-height: 1.2;
        color: var(--ink-black);
    }
    .hero-section .highlight {
        background-color: var(--highlighter-yellow);
        padding: 0 15px;
        display: inline;
        line-height: 1.5;
        box-decoration-break: clone;
        -webkit-box-decoration-break: clone;
    }
    .hero-section p {
        font-size: 1.5rem;
        max-width: 700px;
        margin: 25px auto 35px;
    }

    /* Buttons */
    .btn {
        border: 3px solid var(--ink-black);
        border-radius: 8px;
        padding: 10px 28px;
        transition: all 0.2s ease-in-out;
        box-shadow: 4px 4px 0 var(--ink-black);
    }
    .btn:hover {
        box-shadow: none;
        transform: translate(4px, 4px);
    }
    .btn-primary {
        background-color: var(--highlighter-yellow);
        color: var(--ink-black);
    }
    .btn-secondary {
        background-color: var(--accent-blue);
        color: var(--paper-bg);
    }

    /* General Section Styling */
    section {
        padding: 90px 0;
        position: relative;
    }
    .bg-alt {
        background-color: #e9e6df;
    }
    .section-title {
        font-size: 4rem;
        margin-bottom: 60px;
        position: relative;
        display: inline-block;
    }
    /* Scribble underline */
    .section-title::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: -10px;
        right: -10px;
        height: 10px;
        background-image: url('data:image/svg+xml;utf8,<svg width="100" height="12" viewBox="0 0 100 12" xmlns="http://www.w3.org/2000/svg"><path d="M0 6 Q 25 0, 50 6 T 100 6" stroke="%23FFD600" stroke-width="4" fill="none" /></svg>');
        background-repeat: round;
    }
    
    /* Doodle Card */
    .doodle-card {
        background: var(--paper-bg);
        border: 3px solid var(--ink-black);
        padding: 25px;
        height: 100%;
        transition: all 0.2s ease;
    }
    .doodle-card.rotate-left { transform: rotate(-2deg); }
    .doodle-card.rotate-right { transform: rotate(2deg); }

    .doodle-card:hover {
        transform: rotate(0) translateY(-10px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .doodle-card .icon {
        font-size: 3.5rem;
        color: var(--ink-black);
        margin-bottom: 1rem;
    }

    /* Specialist Card */
    .specialist-card {
        border: 3px solid var(--ink-black);
        background-color: #fff;
        overflow: hidden;
        position: relative;
    }
    .specialist-card img {
        height: 350px;
        object-fit: cover;
        filter: grayscale(80%) contrast(1.1);
        transition: all 0.4s ease;
    }
    .specialist-card:hover img {
        filter: grayscale(0) contrast(1);
        transform: scale(1.05);
    }
    .specialist-card .specialization {
        background: var(--highlighter-yellow);
        font-family: 'Knewave', cursive;
        color: var(--ink-black);
        padding: 2px 10px;
        display: inline-block;
        margin-top: 5px;
    }
    /* Washi tape effect */
    .specialist-card::before {
        content: '';
        position: absolute;
        top: -15px;
        left: 50%;
        transform: translateX(-50%) rotate(-3deg);
        width: 100px;
        height: 30px;
        background: rgba(74, 144, 226, 0.6);
        box-shadow: 0 1px 3px rgba(0,0,0,0.2);
    }

    /* Testimonial Card */
    .testimonial-card {
        background: #fff;
        border: 3px solid var(--ink-black);
        padding: 30px;
    }
    .testimonial-card img {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 20px;
        border: 3px solid var(--ink-black);
    }
    .testimonial-card .name {
        font-family: 'Knewave', cursive;
    }

    /* Footer */
    footer {
        background-color: var(--highlighter-yellow);
        color: var(--ink-black);
        padding-top: 60px;
        border-top: 3px solid var(--ink-black);
    }
    .footer-bottom {
        background-color: var(--ink-black);
        color: var(--paper-bg);
        padding: 15px 0;
        margin-top: 40px;
        font-family: 'Patrick Hand', cursive;
    }

    @media (max-width: 767px) {
        .hero-section h1 { font-size: 3.5rem; }
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
                    <li class="nav-item"><a class="nav-link" href="#about">شكون حنا؟</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">واش نديرو؟</a></li>
                    <li class="nav-item"><a class="nav-link" href="#specialists">ليكيب</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonials">هدرة الجماعة</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">وين تلقانا؟</a></li>
                </ul>
                <a href="#" class="btn btn-primary btn-sm">يالله نبداو</a>
            </div>
        </div>
    </nav>

    <!-- 1. HERO SECTION -->
    <header class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="wow animate__animated animate__fadeInDown">
                        كي تكون الحياة واعرة، <span class="highlight">روڨل أمورك معانا</span>
                    </h1>
                    <p class="lead wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        ساعات الدنيا تدور بيك، بصح حنا هنا باش نعاونوك توقف على رجليك. سند هو ليكيب ديالك اللي تلقاها وقت الصح.
                    </p>
                    <a href="#" class="btn btn-primary btn-lg wow animate__animated animate__bounceIn" data-wow-delay="0.4s">أرواح معانا</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- 2. ABOUT THE PROJECT -->
        <section id="about" class="bg-alt">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 wow animate__animated animate__fadeInLeft">
                        <div class="doodle-card rotate-right">
                           <img src="https://images.unsplash.com/photo-1531304530991-23214a6e0451?q=80&w=1887&auto=format&fit=crop" alt="Group of friends" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 wow animate__animated animate__fadeInRight">
                        <h2 class="section-title text-center mb-4">شكون حنا؟</h2>
                        <p class="lead"><strong>سند</strong> هو بلاصة للشّباب، مخدومة بالشّباب. ماشي شركة كبيرة ولا مركز رسمي. حنا ليكيب، هدفنا نعاونو بعضنا.</p>
                        <p>الفكرة ديالنا ساهلة: نكرييو بلاصة آمنة وحقيقية، سواء على <strong>الأنترنت</strong> ولا في <strong>المقر تاعنا</strong>، باش كل واحد يقدر يفرغ قلبو، يتعلم حاجة جديدة، ويلقى ناس تفهمو صح.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. SERVICES -->
        <section id="services">
            <div class="container text-center">
                <h2 class="section-title">واش عندنا؟</h2>
                <div class="row g-4 mt-5">
                    <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.1s">
                        <div class="doodle-card rotate-left">
                            <div class="icon"><i class="fas fa-comment-dots"></i></div>
                            <h4>فرّغ قلبك أونلاين</h4>
                            <p>اهدر مع ناس خبرة يعاونوك تفهم واش كاين في راسك. كلش سري.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.2s">
                        <div class="doodle-card rotate-right">
                            <div class="icon"><i class="fas fa-campground"></i></div>
                            <h4>قعدات وورشات</h4>
                            <p>أرواح للمقر، عندنا ورشات وقعدات وين تتعلم وتجوّز وقت شباب.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.3s">
                        <div class="doodle-card rotate-left">
                            <div class="icon"><i class="fas fa-wrench"></i></div>
                            <h4>ورشات تخدم بيهم</h4>
                            <p>نعاونوك تكتشف المواهب تاعك وتلقى طريقك في الخدمة.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.4s">
                        <div class="doodle-card rotate-right">
                            <div class="icon"><i class="fas fa-book-reader"></i></div>
                            <h4>دليل البقاء</h4>
                            <p>فيدوهات ومحتوى خفيف ومفيد باش تطوّر من روحك.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. SPECIALISTS -->
        <section id="specialists" class="bg-alt">
            <div class="container">
                <h2 class="section-title text-center">تعرّف على ليكيب</h2>
                <div class="row g-5 justify-content-center mt-4">
                    <div class="col-md-6 col-lg-4 wow animate__animated animate__fadeInUp">
                        <div class="specialist-card rotate-left">
                            <img src="https://images.unsplash.com/photo-1595433705359-2f12c1a0b36b?q=80&w=1887&auto=format&fit=crop" class="card-img-top" alt="Specialist 1">
                            <div class="card-body p-4 text-center">
                                <h4 class="card-title">أحمد</h4>
                                <p class="specialization">الكابيتان</p>
                                <p class="card-text">يسمعلك ويعاونك ترتب أفكارك وتولي فور.</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-6 col-lg-4 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        <div class="specialist-card">
                            <img src="https://images.unsplash.com/photo-1542345821-bf43699a22f7?q=80&w=1887&auto=format&fit=crop" class="card-img-top" alt="Specialist 2">
                            <div class="card-body p-4 text-center">
                                <h4 class="card-title">فاطمة</h4>
                                <p class="specialization">الـ Guide</p>
                                <p class="card-text">تعرف كامل الطرقات باش تلقى واش تحب تخدم.</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-6 col-lg-4 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                        <div class="specialist-card rotate-right">
                            <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?q=80&w=1887&auto=format&fit=crop" class="card-img-top" alt="Specialist 3">
                            <div class="card-body p-4 text-center">
                                <h4 class="card-title">يوسف</h4>
                                <p class="specialization">الهادي</p>
                                <p class="card-text">يعاونك تكالمي اللعب وتتهنى من الستراس والقلقة.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. TESTIMONIALS -->
        <section id="testimonials">
            <div class="container">
                <h2 class="section-title text-center">هدرة الجماعة</h2>
                <div class="row g-4 mt-5">
                    <div class="col-lg-6 wow animate__animated animate__fadeInUp">
                        <div class="testimonial-card text-center h-100 rotate-left">
                            <img src="https://images.unsplash.com/photo-1521119989659-a83eee488004?q=80&w=1923&auto=format&fit=crop" alt="Avatar">
                            <p>"كنت حاس روحي وحدي في هاد الدنيا. في سند، لقيت ناس كيما أنا، صح غيّروا فيا بزاف عفايس."</p>
                            <div class="name">- خالد</div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                         <div class="testimonial-card text-center h-100 rotate-right">
                            <img src="https://images.unsplash.com/photo-1524250502761-1ac6f2e30d43?q=80&w=1888&auto=format&fit=crop" alt="Avatar">
                            <p>"أحسن حاجة هي كي تكون على طبيعتك، واحد ما يحاسبك. القعدات في المقر تاعهم فور بزاف!"</p>
                            <div class="name">- نورة</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 6. FINAL CTA -->
        <section id="contact" class="bg-alt">
            <div class="container text-center">
                <h2 class="section-title">راك واجد؟</h2>
                <p class="lead my-4 mx-auto" style="max-width: 600px;">ما تخمّمش بزاف. بلاصتك كاينة معانا. الخطوة الأولى عليك والباقي علينا.</p>
                <a href="#" class="btn btn-secondary btn-lg">سجّل معانا</a>
            </div>
        </section>
    </main>
    
    <!-- 7. FOOTER -->
    <footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h3 style="font-size: 2.5rem;">سند</h3>
                <p>البلاصة اللي تريح فيها.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <h5>الخريطة</h5>
                <ul class="list-unstyled p-0">
                    <li><a href="#about">شكون حنا</a></li>
                    <li><a href="#services">واش نديرو</a></li>
                    <li><a href="#specialists">ليكيب</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5>كونتاكتينا</h5>
                <ul class="list-unstyled p-0">
                    <li><i class="fas fa-envelope ms-2"></i> salam@sanad.dz</li>
                    <li><i class="fas fa-map-marker-alt ms-2"></i> حذاكم برك، في العاصمة</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <p class="mb-0">مخدوم بالحب من ليكيب تاع سند © 2025</p>
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