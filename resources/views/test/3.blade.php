
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سند | بداية قصتك</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Google Fonts (Bangers for headings, Tajawal for body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Tajawal:wght@400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome (for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

<style>
    /* 
    ==============================================
    MANGA / ANIME AESTHETIC RE-DESIGN
    ==============================================
    */

    :root {
        --paper-white: #FFFFFF;
        --ink-black: #141414;
        --accent-red: #E60023;
        --screentone-bg: #EAEAEA;
    }

    body {
        font-family: 'Tajawal', sans-serif;
        font-size: 1.1rem;
        color: var(--ink-black);
        background-color: var(--screentone-bg);
        background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAJElEQVQoU2NkwA/0I4gboQDkRjIwMv7//3+E/zGbEaAGAF3dD/f0eTNwAAAAAElFTkSuQmCC'); /* Screentone pattern */
        overflow-x: hidden;
    }

    /* TYPOGRAPHY */
    h1, h2, h3, h4, .navbar-brand, .btn {
        font-family: 'Bangers', 'Tajawal', cursive;
        letter-spacing: 1.5px;
    }
    
    /* Navbar */
    .navbar {
        background-color: rgba(255, 255, 255, 0.85) !important;
        backdrop-filter: blur(8px);
        border-bottom: 3px solid var(--ink-black);
    }
    .navbar-brand {
        font-size: 2.5rem;
        color: var(--ink-black) !important;
    }
    .navbar .nav-link {
        font-family: 'Bangers', cursive;
        font-size: 1.1rem;
        color: var(--ink-black) !important;
        opacity: 0.6;
        transition: all 0.2s ease;
    }
    .navbar .nav-link:hover, .navbar .nav-link.active {
        opacity: 1;
        color: var(--accent-red) !important;
    }
    
    /* Hero Section */
    .hero-section {
        background: linear-gradient(rgba(255,255,255,0.7), rgba(255,255,255,0.9)), url('https://images.unsplash.com/photo-1542444582-386bf280db28?q=80&w=1887&auto=format&fit=crop') no-repeat center center;
        background-size: cover;
        min-height: 90vh;
        display: flex;
        align-items: center;
        text-align: center;
        padding-top: 80px;
    }
    .hero-section h1 {
        font-size: 5.5rem;
        line-height: 1.1;
        color: var(--ink-black);
        text-shadow: 3px 3px 0 var(--paper-white), -3px -3px 0 var(--paper-white), 3px -3px 0 var(--paper-white), -3px 3px 0 var(--paper-white);
    }
    .hero-section .highlight-red {
        color: var(--accent-red);
    }
    .hero-section p {
        font-size: 1.4rem;
        font-weight: 700;
        max-width: 700px;
        margin: 25px auto 35px;
    }

    /* Buttons */
    .btn {
        border: 3px solid var(--ink-black);
        border-radius: 0;
        padding: 10px 30px;
        transition: all 0.2s ease-in-out;
    }
    .btn:hover {
        transform: translate(-4px, -4px);
    }
    .btn-primary {
        background-color: var(--accent-red);
        color: var(--paper-white);
        box-shadow: 4px 4px 0 var(--ink-black);
    }
    .btn-primary:hover {
        box-shadow: 8px 8px 0 var(--ink-black);
    }
    .btn-secondary {
        background-color: var(--ink-black);
        color: var(--paper-white);
        box-shadow: 4px 4px 0 var(--accent-red);
    }
     .btn-secondary:hover {
        box-shadow: 8px 8px 0 var(--accent-red);
    }

    /* General Section Styling */
    section {
        padding: 90px 0;
        position: relative;
    }
    .section-dark {
        background-color: var(--ink-black);
        color: var(--paper-white);
    }
    .section-dark .section-title, .section-dark p {
        color: var(--paper-white);
    }
    .section-title {
        font-size: 4rem;
        margin-bottom: 60px;
        color: var(--ink-black);
    }
    
    /* Angled Dividers */
    .angled-divider {
        position: relative;
        background-color: var(--paper-white); /* Match section bg */
    }
    .angled-divider::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100px;
        background: var(--ink-black); /* Match next section bg */
        clip-path: polygon(0 100%, 100% 0, 100% 100%);
    }

    /* Manga Panel Card */
    .manga-panel {
        background: var(--paper-white);
        border: 4px solid var(--ink-black);
        padding: 25px;
        height: 100%;
        transition: all 0.2s ease;
        box-shadow: 8px 8px 0 var(--ink-black);
    }
    .manga-panel:hover {
        transform: translate(-4px, -4px);
        box-shadow: 12px 12px 0 var(--accent-red);
    }
    .manga-panel .icon {
        font-size: 3.5rem;
        margin-bottom: 1rem;
        color: var(--ink-black);
    }
    .manga-panel h4 {
        color: var(--accent-red);
    }

    /* Ally Card (Specialist) */
    .ally-card {
        border: 4px solid var(--ink-black);
        background-color: var(--paper-white);
        overflow: hidden;
        position: relative;
        text-align: center;
    }
    .ally-card img {
        height: 350px;
        object-fit: cover;
        filter: grayscale(100%);
        transition: all 0.4s ease;
    }
    .ally-card:hover img {
        filter: grayscale(0);
    }
    .ally-card .card-body {
        padding: 20px;
    }
    .ally-card .specialization {
        background: var(--ink-black);
        color: var(--paper-white);
        padding: 2px 10px;
        display: inline-block;
        margin-top: 5px;
    }

    /* Testimonial Card */
    .testimonial-card {
        background: var(--ink-black);
        border: 4px solid var(--paper-white);
        color: var(--paper-white);
        padding: 30px;
        box-shadow: 8px 8px 0 var(--paper-white);
    }
    .testimonial-card img {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 20px;
        border: 3px solid var(--accent-red);
    }
    .testimonial-card .name {
        color: var(--accent-red);
    }

    /* Footer */
    footer {
        background-color: var(--ink-black);
        color: var(--paper-white);
        padding-top: 60px;
    }
    .footer-bottom {
        background-color: var(--accent-red);
        color: var(--paper-white);
        padding: 15px 0;
        margin-top: 40px;
        font-family: 'Bangers', cursive;
        letter-spacing: 2px;
    }

    @media (max-width: 767px) {
        .hero-section h1 { font-size: 3.5rem; }
        .angled-divider::after { height: 50px; }
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
                    <li class="nav-item"><a class="nav-link" href="#prologue">القصة</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">المهارات</a></li>
                    <li class="nav-item"><a class="nav-link" href="#allies">الحلفاء</a></li>
                    <li class="nav-item"><a class="nav-link" href="#voices">أصوات</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">المقر</a></li>
                </ul>
                <a href="#" class="btn btn-primary btn-sm">ابدأ القصة</a>
            </div>
        </div>
    </nav>

    <!-- 1. HERO SECTION -->
    <header class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="wow animate__animated animate__fadeInDown">
                        كل بطل يحتاج <span class="highlight-red">بداية</span>.
                    </h1>
                    <p class="lead wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        الحياة ليست سهلة، والجميع يواجه تحدياته الخاصة. سند هو المكان الذي تبدأ فيه قصتك الجديدة. هذا هو فصلك الأول.
                    </p>
                    <a href="#" class="btn btn-primary btn-lg wow animate__animated animate__zoomIn" data-wow-delay="0.4s">ابدأ الآرك الجديد</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- 2. PROLOGUE -->
        <section id="prologue" class="angled-divider">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 wow animate__animated animate__fadeInLeft">
                        <div class="manga-panel" style="transform: rotate(-2deg);">
                           <img src="https://images.unsplash.com/photo-1549402949-c48b11a43411?q=80&w=1887&auto=format&fit=crop" alt="A quiet, thoughtful moment" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 wow animate__animated animate__fadeInRight">
                        <h2 class="section-title text-center mb-4">القصة حتى الآن...</h2>
                        <p class="lead">وُلد <strong>سند</strong> من فكرة بسيطة: لا يجب على أي شخص أن يقاتل وحيداً. نحن مجتمع من الشباب الذين مروا بنفس التحديات.</p>
                        <p>مهمتنا هي أن نكون الحليف الذي تحتاجه. نوفر لك مساحة آمنة، سواء <strong>أونلاين</strong> أو في <strong>مقرنا</strong>، لتكتشف قوتك، تتعلم مهارات جديدة، وتستعد للفصل القادم من حياتك.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. SKILLS LIST -->
        <section id="skills" class="section-dark">
            <div class="container text-center">
                <h2 class="section-title">قائمة المهارات</h2>
                <div class="row g-4 mt-5">
                    <div class="col-md-6 col-lg-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                        <div class="manga-panel">
                            <div class="icon"><i class="fas fa-comment-medical"></i></div>
                            <h4>حوار داخلي</h4>
                            <p>تحدث بسرية مع خبراء يساعدونك على فهم نفسك والتغلب على العقبات.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        <div class="manga-panel">
                            <div class="icon"><i class="fas fa-users-cog"></i></div>
                            <h4>تدريب جماعي</h4>
                            <p>انضم إلى ورش عمل ولقاءات في مقرنا لتطوير مهاراتك الاجتماعية.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                        <div class="manga-panel">
                            <div class="icon"><i class="fas fa-fist-raised"></i></div>
                            <h4>تطوير القوة</h4>
                            <p>برامج لمساعدتك على اكتشاف شغفك وتحويله إلى مسار مهني ناجح.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                        <div class="manga-panel">
                            <div class="icon"><i class="fas fa-scroll"></i></div>
                            <h4>مخطوطات المعرفة</h4>
                            <p>مكتبة من الموارد الرقمية لمساعدتك على فهم تحدياتك والتغلب عليها.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. ALLIES -->
        <section id="allies">
            <div class="container">
                <h2 class="section-title text-center">تعرف على الحلفاء</h2>
                <div class="row g-5 justify-content-center mt-4">
                    <div class="col-md-6 col-lg-4 wow animate__animated animate__zoomIn">
                        <div class="ally-card">
                            <img src="https://images.unsplash.com/photo-1600862719275-6b5f63567157?q=80&w=1887&auto=format&fit=crop" class="card-img-top" alt="Ally 1">
                            <div class="card-body">
                                <h4 class="card-title">أحمد</h4>
                                <p class="specialization">الاستراتيجي</p>
                                <p class="card-text">يساعدك على وضع خطة لمواجهة تحدياتك النفسية وبناء ثقتك بنفسك.</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-6 col-lg-4 wow animate__animated animate__zoomIn" data-wow-delay="0.2s">
                        <div class="ally-card">
                            <img src="https://images.unsplash.com/photo-1542345821-bf43699a22f7?q=80&w=1887&auto=format&fit=crop" class="card-img-top" alt="Ally 2">
                            <div class="card-body">
                                <h4 class="card-title">فاطمة</h4>
                                <p class="specialization">المرشدة</p>
                                <p class="card-text">ترسم معك خريطة الطريق لمستقبلك المهني وتساعدك على اكتشاف شغفك.</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-6 col-lg-4 wow animate__animated animate__zoomIn" data-wow-delay="0.4s">
                        <div class="ally-card">
                            <img src="https://images.unsplash.com/photo-1534008757035-24c4c23b2021?q=80&w=1887&auto=format&fit=crop" class="card-img-top" alt="Ally 3">
                            <div class="card-body">
                                <h4 class="card-title">يوسف</h4>
                                <p class="specialization">المعالج</p>
                                <p class="card-text">خبير في مساعدتك على استعادة هدوئك والسيطرة على القلق والضغوط.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. TESTIMONIALS -->
        <section id="voices" class="section-dark">
            <div class="container">
                <h2 class="section-title text-center">أصوات الأبطال الآخرين</h2>
                <div class="row g-4 mt-5">
                    <div class="col-lg-6 wow animate__animated animate__fadeInUp">
                        <div class="testimonial-card text-center h-100">
                            <img src="https://images.unsplash.com/photo-1521119989659-a83eee488004?q=80&w=1923&auto=format&fit=crop" alt="Avatar">
                            <p>"كنت أظن أن قصتي قد انتهت. سند أثبت لي أنها كانت مجرد بداية. الدعم الذي وجدته هنا لا يقدر بثمن."</p>
                            <div class="name">- خالد، بطل في قصته</div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                         <div class="testimonial-card text-center h-100">
                            <img src="https://images.unsplash.com/photo-1524250502761-1ac6f2e30d43?q=80&w=1888&auto=format&fit=crop" alt="Avatar">
                            <p>"في اللقاءات الجماعية، أدركت أنني لست وحدي في هذه المعركة. وجدنا القوة في بعضنا البعض، وهذا ما يفعله الأبطال."</p>
                            <div class="name">- نورة، بطلة في قصتها</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 6. FINAL CTA -->
        <section id="contact">
            <div class="container text-center">
                <h2 class="section-title">هل أنت مستعد؟</h2>
                <p class="lead my-4 mx-auto" style="max-width: 600px;">قصتك تنتظرك. لا تدع التحديات تكتب نهايتك. أمسك القلم واكتبها بنفسك. فريق سند سيكون في صفك.</p>
                <a href="#" class="btn btn-secondary btn-lg">انضم إلى القصة</a>
            </div>
        </section>
    </main>
    
    <!-- 7. FOOTER -->
    <footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h3 style="font-family: 'Bangers', cursive; font-size: 2.5rem;">سند</h3>
                <p>حيث تبدأ قصص الأبطال.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <h5>الفهرس</h5>
                <ul class="list-unstyled p-0">
                    <li><a href="#prologue">القصة</a></li>
                    <li><a href="#skills">المهارات</a></li>
                    <li><a href="#allies">الحلفاء</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5>المقر</h5>
                <ul class="list-unstyled p-0">
                    <li><i class="fas fa-envelope ms-2"></i> contact@sanad-saga.com</li>
                    <li><i class="fas fa-map-marker-alt ms-2"></i> الجزائر العاصمة</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <p class="mb-0">سند © 2025 - To Be Continued...</p>
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