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

@yield('styles')