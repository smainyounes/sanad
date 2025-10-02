
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سند | بدّل اللعبة</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Google Fonts (Bangers for headings, Roboto Mono for body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Roboto+Mono:wght@400;700&family=Tajawal:wght@400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome (for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

<style>
    /* 
    ==============================================
    DELINQUENT TEENAGER AESTHETIC RE-DESIGN
    ==============================================
    */

    :root {
        --dark-bg: #121212;
        --primary-accent: #FF00E5; /* Hot Pink/Magenta */
        --secondary-accent: #00FFFF; /* Cyan */
        --tertiary-accent: #FFFF00; /* Yellow */
        --text-color: #EAEAEA;
        --border-color: rgba(255, 255, 255, 0.2);
    }

    body {
        font-family: 'Tajawal', sans-serif; /* Fallback for Arabic */
        color: var(--text-color);
        background-color: var(--dark-bg);
        overflow-x: hidden;
        scroll-behavior: smooth;
        background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAAUVBMVEWFhYWDg4N3d3dtbW17e3t1dXVpaWl7e3t4eHhnZ2dzc3Nvb29sbGxra2uBgYF4eHhtbGxsbGxvb293d3d5eXmBgYGHh4eLi4uKioqSkpKTk5MLfVEYAAAAF3RSTlNAYGVub29uc3l5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXk8a7d5AAAAYNJREFUSMdjYGBgYGRAwVPAxM7OgGykGAAouGDIyYks2Vk5OTk5A2B5RM2PApGZmZl5VgAUPAVM3DygidHVg3wUfMAMzM3smBGZmAEwB82yAfgAFsdqWgHwArABs3Az1wxwAn382M3s2DzA7MwAjc3Njd2WAeC5ARoW1g1wA1zd2Njb2d2DkBNgwYKYsEOwD88Awc3NwRMEgSkGBoYIBgP4lo2dHR0dHX09PX09PX39/T29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT29vT2s2CAAwAAD4V3fGAAAAAElFTkSuQmCC');
    }

    /* TYPOGRAPHY */
    h1, h2, h3, h4, h5, .navbar-brand, .btn {
        font-family: 'Bangers', 'Tajawal', cursive;
        text-transform: uppercase;
        letter-spacing: 2px;
    }
    
    /* Navbar */
    .navbar {
        background-color: rgba(18, 18, 18, 0.8) !important;
        backdrop-filter: blur(10px);
        border-bottom: 1px solid var(--border-color);
    }
    .navbar-brand {
        font-size: 2.5rem;
        color: var(--primary-accent) !important;
        text-shadow: 0 0 5px var(--primary-accent);
    }
    .navbar .nav-link {
        font-family: 'Roboto Mono', monospace;
        color: var(--text-color) !important;
        transition: all 0.2s ease;
    }
    .navbar .nav-link:hover, .navbar .nav-link.active {
        color: var(--secondary-accent) !important;
        text-shadow: 0 0 8px var(--secondary-accent);
    }
    
    /* Hero Section */
    .hero-section {
        background: linear-gradient(rgba(18, 18, 18, 0.7), rgba(18, 18, 18, 0.9)), url('https://images.unsplash.com/photo-1534951039863-1de79a253b75?q=80&w=2070&auto=format&fit=crop') no-repeat center center;
        background-size: cover;
        min-height: 90vh;
        display: flex;
        align-items: center;
        text-align: center;
        padding-top: 80px;
    }
    .hero-section h1 {
        font-size: 5rem;
        font-weight: 800;
        color: var(--text-color);
        line-height: 1.2;
        text-shadow: 0 0 10px var(--primary-accent), 0 0 20px var(--primary-accent), 0 0 2px #000;
    }
    .hero-section p {
        font-family: 'Roboto Mono', 'Tajawal', monospace;
        font-size: 1.25rem;
        max-width: 750px;
        margin: 20px auto 30px;
        color: #ccc;
    }
     
    /* GLITCH EFFECT */
    .glitch {
        position: relative;
    }
    .glitch::before, .glitch::after {
        content: attr(data-text);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: var(--dark-bg);
        overflow: hidden;
    }
    .glitch::before {
        left: 2px;
        text-shadow: -2px 0 var(--primary-accent);
        animation: glitch-anim-1 2s infinite linear alternate-reverse;
    }
    .glitch::after {
        left: -2px;
        text-shadow: -2px 0 var(--secondary-accent);
        animation: glitch-anim-2 2s infinite linear alternate-reverse;
    }
    @keyframes glitch-anim-1 { 0% { clip-path: inset(5% 0 90% 0); } 100% { clip-path: inset(80% 0 5% 0); } }
    @keyframes glitch-anim-2 { 0% { clip-path: inset(95% 0 2% 0); } 100% { clip-path: inset(10% 0 85% 0); } }

    /* Buttons */
    .btn {
        border-radius: 0;
        padding: 10px 30px;
        transition: all 0.3s ease;
        border: 2px solid;
    }
    .btn-primary {
        background-color: var(--primary-accent);
        border-color: var(--primary-accent);
        color: var(--dark-bg);
        font-weight: 700;
        box-shadow: 0 0 10px var(--primary-accent);
    }
    .btn-primary:hover {
        background-color: transparent;
        border-color: var(--primary-accent);
        color: var(--primary-accent);
        transform: scale(1.05);
        box-shadow: 0 0 20px var(--primary-accent);
    }
    .btn-secondary {
        background-color: var(--secondary-accent);
        border-color: var(--secondary-accent);
        color: var(--dark-bg);
        font-weight: 700;
        box-shadow: 0 0 10px var(--secondary-accent);
    }
    .btn-secondary:hover {
        background-color: transparent;
        border-color: var(--secondary-accent);
        color: var(--secondary-accent);
        transform: scale(1.05);
        box-shadow: 0 0 20px var(--secondary-accent);
    }
     .btn-outline-primary {
        border-color: var(--primary-accent);
        color: var(--primary-accent);
     }
    .btn-outline-primary:hover {
        background-color: var(--primary-accent);
        border-color: var(--primary-accent);
        color: var(--dark-bg);
        box-shadow: 0 0 15px var(--primary-accent);
    }

    /* General Section Styling */
    section {
        padding: 90px 0;
        border-bottom: 1px dashed var(--border-color);
    }
    .section-title {
        font-size: 4rem;
        margin-bottom: 60px;
        position: relative;
        padding-bottom: 20px;
        color: var(--text-color);
        text-shadow: 2px 2px var(--secondary-accent), 4px 4px var(--primary-accent);
    }
    .section-title::after {
        content: '///';
        position: absolute;
        bottom: 0;
        right: 50%;
        transform: translateX(50%);
        font-family: 'Roboto Mono', monospace;
        font-size: 1.5rem;
        color: var(--tertiary-accent);
    }
    .bg-darker {
        background-color: #0A0A0A !important;
    }

    /* Services & Advantages Section */
    .feature-box {
        text-align: center;
        padding: 30px;
        background: rgba(255, 255, 255, 0.03);
        border: 2px solid var(--border-color);
        transition: all 0.3s ease;
    }
    .feature-box:hover {
        transform: translateY(-8px);
        border-color: var(--primary-accent);
        box-shadow: 0 0 20px rgba(255, 0, 229, 0.3);
    }
    .feature-box .icon {
        font-size: 3.5rem;
        color: var(--primary-accent);
        margin-bottom: 20px;
        line-height: 1;
        text-shadow: 0 0 10px var(--primary-accent);
    }

    /* Specialists Section */
    .specialist-card {
        border: 2px solid var(--border-color);
        background-color: #1a1a1a;
        transition: all 0.3s ease;
        overflow: hidden;
        border-radius: 0;
    }
    .specialist-card:hover {
        transform: scale(1.03);
        border-color: var(--secondary-accent);
        box-shadow: 0 0 25px rgba(0, 255, 255, 0.4);
    }
    .specialist-card img {
        height: 350px;
        object-fit: cover;
        filter: grayscale(100%);
        transition: all 0.4s ease;
    }
    .specialist-card:hover img {
        filter: grayscale(0%);
    }
    .specialist-card .card-body {
        text-align: center;
    }
    .specialist-card .specialization {
        color: var(--secondary-accent);
        font-family: 'Roboto Mono', monospace;
        font-weight: 700;
    }

    /* How it Works Section */
    .how-it-works-step .step-number {
        width: 70px;
        height: 70px;
        background-color: transparent;
        border: 3px solid var(--tertiary-accent);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 2.5rem;
        font-family: 'Bangers', cursive;
        color: var(--tertiary-accent);
        text-shadow: 0 0 8px var(--tertiary-accent);
    }
    .how-it-works-step p { font-family: 'Roboto Mono', 'Tajawal', monospace;}
    
    /* Testimonials Section */
    .testimonial-card {
        background-color: transparent;
        border: 2px solid var(--border-color);
        padding: 30px;
        position: relative;
    }
    .testimonial-card .quote-icon {
        position: absolute;
        top: 20px;
        right: 25px;
        font-size: 4rem;
        color: var(--primary-accent);
        opacity: 0.2;
    }
    .testimonial-card img {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 20px;
        border: 3px solid var(--primary-accent);
        filter: saturate(1.2);
    }
    .testimonial-card p {
        font-style: italic;
        color: #ccc;
        font-size: 1.1rem;
    }
    .testimonial-card .name {
        color: var(--tertiary-accent);
        font-family: 'Roboto Mono', monospace;
        font-weight: 700;
        margin-top: 15px;
    }
    
    /* Location Section */
    .location-section .map-container {
        border: 2px solid var(--border-color);
        overflow: hidden;
    }
    .location-section iframe {
        filter: invert(90%) grayscale(80%);
    }
    .location-section .info-card {
        background-color: #1a1a1a;
        border: 2px solid var(--border-color);
        padding: 30px;
        height: 100%;
    }
    .location-section .info-card h5 {
        color: var(--primary-accent);
    }
    .location-section .info-card ul li i {
        color: var(--secondary-accent);
        margin-left: 15px;
    }

    /* Final CTA Section */
    .final-cta {
        border: 4px dashed var(--primary-accent);
        padding: 60px 30px;
        background-color: #1a1a1a;
    }
    .final-cta h2 {
        color: var(--primary-accent);
        text-shadow: 0 0 10px var(--primary-accent);
        font-size: 3.5rem;
    }

    /* Footer */
    footer {
        background-color: #000;
        color: #888;
        padding-top: 60px;
        border-top: 2px solid var(--primary-accent);
    }
    footer h5 {
        color: var(--text-color);
        border-bottom: 2px dotted var(--secondary-accent);
        padding-bottom: 10px;
    }
    footer a { color: #aaa; text-decoration: none; transition: color 0.3s ease; font-family: 'Roboto Mono', monospace; }
    footer a:hover { color: var(--primary-accent); }
    footer .social-icons a { font-size: 1.8rem; margin: 0 10px; color: #aaa; }
    .footer-bottom { background-color: #0a0a0a; padding: 20px 0; margin-top: 40px; color: #666; font-family: 'Roboto Mono', monospace;}

    @media (max-width: 767px) {
        .hero-section h1 { font-size: 3rem; }
        .section-title { font-size: 2.8rem; }
    }
</style>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">سند</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">شكون حنا؟</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">العدة تاعنا</a></li>
                    <li class="nav-item"><a class="nav-link" href="#specialists">الناس الواعرين</a></li>
                    <li class="nav-item"><a class="nav-link" href="#how-it-works">السيستام</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonials">هدرة الزنقة</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact-location">البلاصة</a></li>
                </ul>
                <a href="#" class="btn btn-primary btn-sm px-4">ابدأ دوكا</a>
            </div>
        </div>
    </nav>

    <!-- 1. HERO SECTION -->
    <header class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="wow animate__animated animate__fadeInDown glitch" data-text="بدّل اللعبة. اكتب حكايتك.">بدّل اللعبة. اكتب حكايتك.</h1>
                    <p class="lead wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        هنا البلاصة وين صوتك يتسمع. أونلاين ولاّ وجهاً لوجه، نمدولك السلاح اللي تحتاجه باش ترجع خير ملي كنت.
                    </p>
                    <a href="#" class="btn btn-primary btn-lg wow animate__animated animate__pulse" data-wow-delay="0.4s">أرواح مع ليكيب</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- 2. ABOUT THE PROJECT -->
        <section id="about">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <img src="https://images.unsplash.com/photo-1555531924-f2033c37c27d?q=80&w=1974&auto=format&fit=crop" alt="Street Art" class="img-fluid" style="border: 2px solid var(--border-color);">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="section-title text-center mb-4">شكون حنا؟</h2>
                        <p class="lead"><strong>سند</strong> ماشي مجرد سونطر. هادي هي البلاصة ديالك. تخلق من الزنقة باش يكون صوت للشّباب اللي يواجهو الدنيا وحدهم.</p>
                        <p>المهمة تاعنا باينة: نمدولك العدة باش تبني مستقبلك وحدك. سواء <strong>أونلاين</strong> وين ما كنت، ولاّ في <strong>السونطر تاعنا</strong> وسط ناس كيما نتا. هنا تقدر تكون على طبيعتك، وتلقى الدعم تاع الصح باش تولي للمجتمع وراسك مرفوع.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. MAIN SERVICES -->
        <section id="services" class="bg-darker">
            <div class="container text-center">
                <h2 class="section-title">العدة تاعنا</h2>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.1s">
                        <div class="feature-box h-100">
                            <div class="icon"><i class="fas fa-headset"></i></div>
                            <h4>هدرة أونلاين</h4>
                            <p>اهدر à l'aise مع ناس خبرة يفهموك. وين ما كنت، وكلش سري.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.2s">
                        <div class="feature-box h-100">
                            <div class="icon"><i class="fas fa-fist-raised"></i></div>
                            <h4>قعدات وورشات حية</h4>
                            <p>قعدات تاع الصح و فعاليات جماعية تخرج منها بطاقة جديدة.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.3s">
                        <div class="feature-box h-100">
                            <div class="icon"><i class="fas fa-briefcase"></i></div>
                            <h4>تدريب مهني</h4>
                            <p>اكتشف المواهب تاعك وحدد طريقك. الخدمة ماشي دراهم برك.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.4s">
                        <div class="feature-box h-100">
                            <div class="icon"><i class="fas fa-book-skull"></i></div>
                            <h4>محتوى بلا فيلتر</h4>
                            <p>مقالات وفيديوهات ديركت ومفيدين. هدرة تاع الصح.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. SPECIALISTS -->
        <section id="specialists">
            <div class="container">
                <h2 class="section-title text-center">الناس الواعرين</h2>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4 wow animate__animated animate__fadeInUp">
                        <div class="card specialist-card">
                            <img src="https://images.unsplash.com/photo-1618835249637-998888a3aa34?q=80&w=1887&auto=format&fit=crop" class="card-img-top" alt="Specialist 1">
                            <div class="card-body p-4">
                                <h5 class="card-title">أحمد "الواعر"</h5>
                                <p class="specialization">أخصائي نفسي</p>
                                <p class="card-text">يعاونك تواجه الماضي تاعك وتبني ثقة في روحك من الزيرو.</p>
                                <a href="#" class="btn btn-outline-primary mt-2">كونتاكتيه</a>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-6 col-lg-4 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        <div class="card specialist-card">
                            <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=1961&auto=format&fit=crop" class="card-img-top" alt="Specialist 2">
                            <div class="card-body p-4">
                                <h5 class="card-title">فاطمة "الـ Guide"</h5>
                                <p class="specialization">مرشدة مهنية</p>
                                <p class="card-text">توريلك كيفاش تلعبها في سوق الشغل وتلقى الحاجة اللي تحبها.</p>
                                <a href="#" class="btn btn-outline-primary mt-2">كونتاكتيها</a>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-6 col-lg-4 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                        <div class="card specialist-card">
                            <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="Specialist 3">
                            <div class="card-body p-4">
                                <h5 class="card-title">يوسف "المكالمي"</h5>
                                <p class="specialization">طبيب نفسي</p>
                                <p class="card-text">خبير في القلقة والستراس. يخليك تكونترولي كلش.</p>
                                <a href="#" class="btn btn-outline-primary mt-2">كونتاكتيه</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- 5. HOW IT WORKS -->
        <section id="how-it-works" class="bg-darker">
            <div class="container text-center">
                <h2 class="section-title">كيفاش تبدا؟ (ساهلة)</h2>
                 <div class="row g-5">
                    <div class="col-md-3 wow animate__animated animate__fadeInUp">
                        <div class="how-it-works-step">
                            <div class="step-number">1</div>
                            <h5>سجّل</h5>
                            <p>زوج دقايق وتكون معانا. بلا تعقيدات.</p>
                        </div>
                    </div>
                    <div class="col-md-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        <div class="how-it-works-step">
                            <div class="step-number">2</div>
                            <h5>خيّر</h5>
                            <p>شوف واش يساعدك: أونلاين ولا في السونطر.</p>
                        </div>
                    </div>
                    <div class="col-md-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                        <div class="how-it-works-step">
                            <div class="step-number">3</div>
                            <h5>ريزارﭬي</h5>
                            <p>خيّر الخبير والوقت اللي يخرج عليك.</p>
                        </div>
                    </div>
                    <div class="col-md-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                        <div class="how-it-works-step">
                            <div class="step-number">4</div>
                            <h5>انطلق</h5>
                            <p>ابدا الطريق تاعك. التغيير يبدا من هنا.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 6. TESTIMONIALS -->
        <section id="testimonials">
            <div class="container">
                <h2 class="section-title text-center">هدرة من الزنقة</h2>
                <div class="row g-4">
                    <div class="col-lg-6 wow animate__animated animate__fadeInUp">
                        <div class="testimonial-card text-center h-100">
                            <i class="fas fa-quote-left quote-icon"></i>
                            <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=1887&auto=format&fit=crop" alt="Avatar">
                            <p>"كنت ضايع وواحد مافهمني. في سند، لقيت جماعة يهدرو لغتي ومدولي العدة باش نوقف على رجليا."</p>
                            <div class="name">- خالد، 19 سنة</div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                         <div class="testimonial-card text-center h-100">
                            <i class="fas fa-quote-left quote-icon"></i>
                            <img src="https://images.unsplash.com/photo-1589156280159-276928395f13?q=80&w=1887&auto=format&fit=crop" alt="Avatar">
                            <p>"القعدات الجماعية هنا حاجة أخرى. حسيت لأول مرة بلي مانيش وحدي. السونطر ولاّ داري الدوزيام."</p>
                            <div class="name">- نورة، 18 سنة</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 7. CONTACT & LOCATION -->
        <section id="contact-location" class="bg-darker">
            <div class="container">
                <h2 class="section-title text-center">البلاصة والكونتاكت</h2>
                <div class="row g-4 align-items-stretch">
                    <div class="col-lg-7 wow animate__animated animate__fadeInLeft">
                        <div class="map-container h-100">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102241.09749591459!2d2.991211043359375!3d36.75280220000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fb21da3b2c215%3A0x274f35f29b289c89!2sAlgiers!5e0!3m2!1sen!2sdz!4v1716124706509!5m2!1sen!2sdz" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-5 wow animate__animated animate__fadeInRight">
                        <div class="info-card h-100">
                            <h5>كونتاكتينا ولا أرواح عندنا</h5>
                            <ul class="list-unstyled p-0">
                                <li class="mb-3"><i class="fas fa-map-marker-alt"></i> <strong>العنوان:</strong> شارع ديدوش مراد، دزاير سنتر</li>
                                <li class="mb-3"><i class="fas fa-phone-alt"></i> <strong>الهاتف:</strong> +213 21 123 456</li>
                                <li class="mb-3"><i class="fas fa-envelope"></i> <strong>الإيميل:</strong> info@sanad.dz</li>
                                <li><i class="fas fa-clock"></i> <strong>الأوقات:</strong> الأحد - الخميس: 9 صباحاً - 5 مساءً</li>
                            </ul>
                            <a href="#" class="btn btn-primary mt-4 w-100">ريزارﭬي بلاصتك</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 8. FINAL CTA -->
        <section id="register">
            <div class="container">
                <div class="final-cta text-center wow animate__animated animate__zoomIn">
                    <h2>خلاص، كرهت؟</h2>
                    <p class="lead my-4" style="font-family: 'Tajawal', sans-serif;">ما تسناش واحد يمدلك الإذن. حياتك ديالك، واحد ما يسالهالك. سند هو السلاح اللي في يدك، اعرف كيفاش تستعملو.</p>
                    <a href="#" class="btn btn-secondary btn-lg">ادخل معانا دوكا</a>
                </div>
            </div>
        </section>
    </main>
    
    <!-- 9. FOOTER -->
    <footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h5 class="navbar-brand m-0 p-0" style="color: var(--primary-accent) !important;">+سند</h5>
                <p class="mt-3">البلاصة ديالك. صوتك المسموع. قوتك الجديدة.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <h5>روابط بالخف</h5>
                <ul class="list-unstyled p-0">
                    <li><a href="#about">شكون حنا؟</a></li>
                    <li><a href="#services">العدة تاعنا</a></li>
                    <li><a href="#specialists">الناس الواعرين</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5>كونتاكتينا</h5>
                <ul class="list-unstyled p-0">
                    <li class=""><i class="fas fa-envelope ms-2"></i> info@sanad.dz</li>
                    <li class=""><i class="fas fa-phone ms-2"></i> <span dir="ltr">+213 21 123 456</span></li>
                    <li class=""><i class="fas fa-map-marker-alt ms-2"></i> دزاير سنتر، الجزائر</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <p class="mb-0">© 2025 SANAD. مخدوم من طرف الثوار.</p>
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