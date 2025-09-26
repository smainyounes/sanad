<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!-- Google Fonts (Tajawal) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;800&display=swap" rel="stylesheet">

<!-- Font Awesome (for icons) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    /* Custom CSS */
    :root {
        --primary-color: #4A90E2; /* Calm Blue */
        --secondary-color: #2ECC71; /* Hopeful Green */
        --text-color: #343a40;
        --light-bg: #f8f9fc;
        --white: #ffffff;
    }

    body {
        font-family: 'Tajawal', sans-serif;
        color: var(--text-color);
        overflow-x: hidden;
        scroll-behavior: smooth;
    }
    
    /* Animation Helper */
    .animated {
        visibility: hidden;
    }
    .animated.visible {
        visibility: visible;
    }

    /* Navbar */
    .navbar {
        transition: all 0.3s ease;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    .navbar-brand {
        font-weight: 800;
        font-size: 1.6rem;
        color: var(--primary-color) !important;
    }
    .navbar .nav-link {
        font-weight: 500;
        transition: color 0.3s ease;
    }
    .navbar .nav-link:hover, .navbar .nav-link.active {
        color: var(--primary-color) !important;
    }
    .navbar .btn-nav {
        padding: 8px 20px;
    }
    
    /* Hero Section */
    .hero-section {
        background: linear-gradient(rgba(255, 255, 255, 0.85), rgba(255, 255, 255, 0.85)), url('https://images.unsplash.com/photo-1579781390317-0683cb075d50?q=80&w=2070&auto=format&fit=crop') no-repeat center center; /* Image suggesting both digital connection and physical presence/community */
        background-size: cover;
        min-height: 90vh;
        display: flex;
        align-items: center;
        text-align: center;
        padding-top: 80px; /* Adjust for sticky nav */
    }
    .hero-section h1 {
        font-size: 3.5rem;
        font-weight: 800;
        color: var(--text-color);
        line-height: 1.4;
    }
    .hero-section p {
        font-size: 1.25rem;
        max-width: 750px;
        margin: 20px auto 30px;
        color: #555;
    }

     /* Buttons */
    .btn { transition: all 0.3s ease; border-radius: 50px; padding: 10px 25px;}
    .btn-primary { font-weight: 700; }
    .btn-primary:hover, .btn-secondary:hover { transform: scale(1.05) translateY(-2px); box-shadow: 0 4px 15px rgba(0,0,0,0.15); }
    
    /* Page Header */
    .page-header { background-color: var(--light-bg); padding: 80px 0; text-align: center; }
    .page-header h1 { font-size: 3rem; font-weight: 800; color: var(--primary-color); }
    .page-header p { font-size: 1.2rem; color: #6c757d; max-width: 600px; margin: 15px auto 0; }

    /* Filter Buttons */
    .filter-buttons {
        margin-bottom: 40px;
    }
    .filter-buttons .btn {
        margin: 5px;
        background-color: var(--light-bg);
        color: var(--text-color);
        border-color: #ddd;
        font-weight: 500;
    }
    .filter-buttons .btn.active {
        background-color: var(--primary-color);
        color: var(--white);
        border-color: var(--primary-color);
    }
    
    /* Buttons */
    .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        padding: 12px 30px;
        font-weight: 700;
        font-size: 1.1rem;
        border-radius: 50px;
        transition: all 0.3s ease;
    }
    .btn-primary:hover {
        background-color: #3a7bc8;
        border-color: #3a7bc8;
        transform: scale(1.05) translateY(-2px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.15);
    }
    .btn-secondary {
        background-color: var(--secondary-color);
        border-color: var(--secondary-color);
        padding: 12px 30px;
        font-weight: 700;
        font-size: 1.1rem;
        border-radius: 50px;
        transition: all 0.3s ease;
    }
    .btn-secondary:hover {
        background-color: #25a25a;
        border-color: #25a25a;
        transform: scale(1.05) translateY(-2px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.15);
    }

    /* General Section Styling */
    section {
        padding: 90px 0;
    }
    .section-title {
        font-size: 2.8rem;
        font-weight: 800;
        margin-bottom: 60px;
        position: relative;
        padding-bottom: 20px;
    }
    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        right: 50%;
        transform: translateX(50%);
        width: 80px;
        height: 4px;
        background-color: var(--primary-color);
        border-radius: 2px;
    }
    .bg-light {
        background-color: var(--light-bg) !important;
    }

    /* Services & Advantages Section */
    .feature-box {
        text-align: center;
        padding: 30px;
        background: var(--white);
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }
    .feature-box:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    .feature-box .icon {
        font-size: 3.5rem;
        color: var(--primary-color);
        margin-bottom: 20px;
        line-height: 1;
    }
    .feature-box h4 {
        font-weight: 700;
        font-size: 1.3rem;
        margin-bottom: 10px;
    }

    /* Specialists Section */
    .specialist-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
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
        color: var(--primary-color);
        font-weight: 500;
    }

    /* Filter Buttons */
    .filter-buttons {
        margin-bottom: 40px;
    }
    .filter-buttons .btn {
        margin: 5px;
        background-color: var(--light-bg);
        color: var(--text-color);
        border-color: #ddd;
        font-weight: 500;
    }
    .filter-buttons .btn.active {
        background-color: var(--primary-color);
        color: var(--white);
        border-color: var(--primary-color);
    }

    /* Specialists Section */
    #specialists-grid { padding: 90px 0; }
    .specialist-item {
        transition: transform 0.3s ease, opacity 0.3s ease; /* For smooth filtering */
    }
    
    .specialist-card:hover { transform: translateY(-8px); box-shadow: 0 10px 30px rgba(0,0,0,0.12); }
    .specialist-card img { height: 300px; object-fit: cover; }
    .specialist-card .card-body { text-align: center; }
    .specialist-card .specialization { color: var(--primary-color); font-weight: 500; }

    /* Modal Customization */
    .modal-header { background-color: var(--primary-color); color: white; }
    .modal-header .btn-close { filter: invert(1) grayscale(100%) brightness(200%); }
    .modal-footer .form-text a { text-decoration: none; font-weight: 700; color: var(--primary-color); }
    /* How it Works Section */
    .how-it-works-step {
        position: relative;
        text-align: center;
    }
    .how-it-works-step .step-number {
        width: 70px;
        height: 70px;
        background-color: var(--light-bg);
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
    }
    .timeline {
        position: relative;
    }
    .timeline > div:not(:last-child)::after {
        content: '';
        position: absolute;
        width: 50%;
        height: 2px;
        background-image: linear-gradient(to left, var(--primary-color), var(--light-bg));
        top: 35px;
        left: 75%;
    }

    /* Testimonials Section */
    .testimonial-card {
        background-color: var(--white);
        border-radius: 15px;
        padding: 30px;
        position: relative;
    }
    .testimonial-card .quote-icon {
        position: absolute;
        top: 20px;
        right: 25px;
        font-size: 2.5rem;
        color: var(--primary-color);
        opacity: 0.1;
    }
    .testimonial-card img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 20px;
    }
    .testimonial-card p {
        font-style: italic;
        color: #555;
        font-size: 1.1rem;
    }
    .testimonial-card .name {
        font-weight: 700;
        margin-top: 15px;
    }

    /* Final CTA Section */
    .final-cta {
        background: linear-gradient(135deg, var(--primary-color), #2c5b92);
        color: var(--white);
        border-radius: 20px;
        padding: 60px 30px;
    }
    .final-cta h2 {
        font-weight: 800;
    }
    
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
        margin-bottom: 20px;
    }
    .location-section .info-card ul {
        list-style: none;
        padding: 0;
    }
    .location-section .info-card ul li {
        margin-bottom: 15px;
        display: flex;
        align-items: center;
    }
    .location-section .info-card ul li i {
        font-size: 1.2rem;
        color: var(--secondary-color);
        margin-left: 15px;
        min-width: 25px; /* Ensures icon alignment */
    }


    /* Footer */
    footer {
        background-color: #2c3e50;
        color: #bdc3c7;
        padding-top: 60px;
    }
    footer h5 {
        color: var(--white);
        font-weight: 700;
        margin-bottom: 20px;
    }
    footer a {
        color: #bdc3c7;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    footer a:hover {
        color: var(--primary-color);
    }
    footer .social-icons a {
        font-size: 1.5rem;
        margin: 0 10px;
        color: #bdc3c7;
    }
    .footer-bottom {
        background-color: #233140;
        padding: 20px 0;
        margin-top: 40px;
        color: #95a5a6;
    }

    @media (max-width: 767px) {
        .hero-section h1 { font-size: 2.5rem; }
        .section-title { font-size: 2.2rem; }
        .timeline > div:not(:last-child)::after { display: none; }
    }
</style>

@yield('styles')