<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- Google Fonts (Cairo) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;900&display=swap" rel="stylesheet">
<!-- Font Awesome (for icons) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
<!-- Custom CSS -->
<style>
  /*--------------------------------------------------
  [0. General & Theme Styles]
  --------------------------------------------------*/
  :root {
    --sanad-purple-dark: #667eea;
    --sanad-purple-light: #764ba2;
    --sanad-pink: #ec4899;
    --sanad-text-light: #f1f5f9; /* slate-100 */
    --bs-primary: var(--sanad-purple-dark);
    --bs-secondary: var(--sanad-pink);
    --bs-primary-rgb: 102, 126, 234;
    /* --bs-body-font-family: 'Cairo', sans-serif; */
  }

  body {
    background-color: #f8fafc; /* slate-50 */
  }

  h1, h2, h3, h4, h5, h6 {
    font-weight: 700;
  }

  /*--------------------------------------------------
  [1. Gradient & Effects]
  --------------------------------------------------*/
  .hero-gradient {
    background: linear-gradient(135deg, var(--sanad-purple-dark), var(--sanad-purple-light));
    position: relative;
    overflow: hidden;
  }

  .soft-gradient {
      background-image: linear-gradient(to bottom right, #f1f5f9, #e2e8f0); /* slate-100 to slate-200 */
  }
  
  .soft-gradient-alt {
      background-image: linear-gradient(to bottom right, #f3e8ff, #fce7f3); /* purple-50 to pink-50 */
  }

  /*--------------------------------------------------
  [2. Components]
  --------------------------------------------------*/
  .section-title {
    display: inline-block;
    position: relative;
    margin-bottom: 1.5rem; /* For spacing */
  }

  .section-title::after {
    content: "";
    position: absolute;
    bottom: -10px;
    right: 0;
    width: 60%;
    height: 4px;
    border-radius: 2px;
    background: linear-gradient(90deg, var(--sanad-purple-dark), var(--sanad-purple-light));
  }
  
  .btn-brand-primary {
    background: linear-gradient(135deg, var(--sanad-purple-dark), var(--sanad-purple-light));
    color: white;
    transition: all 0.3s ease;
    border: none;
  }
  .btn-brand-primary:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
    color: white;
  }
  
  .btn-brand-outline {
    border-color: var(--sanad-purple-dark);
    color: var(--sanad-purple-dark);
  }
  .btn-brand-outline:hover {
    background-color: var(--sanad-purple-dark);
    color: white;
  }

  .card-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .card-hover:hover {
    transform: translateY(-10px);
    box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.1) !important;
  }

  .card-border-top-pink { border-top: 4px solid #ec4899 !important; }
  .card-border-top-blue { border-top: 4px solid #3b82f6 !important; }
  .card-border-top-green { border-top: 4px solid #10b981 !important; }

  .how-it-works-step {
    position: relative;
  }
  
  @media (min-width: 768px) {
    .how-it-works-step:not(:last-child)::after {
      content: '';
      position: absolute;
      top: 3rem; /* Vertically center with the circle */
      left: 50%;
      width: 100%;
      height: 2px;
      background-image: linear-gradient(to left, #d8b4fe, transparent); /* light purple */
      z-index: 0;
    }
  }
  .step-circle {
    width: 6rem;
    height: 6rem;
    position: relative;
    z-index: 1;
  }

  .img-zoom-hover img {
      transition: transform 0.4s ease;
  }
  .img-zoom-hover:hover img {
      transform: scale(1.1);
  }
  
  .contact-card {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
  }
  
  .form-control-glass {
      background-color: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.3);
      color: white;
  }
  .form-control-glass::placeholder {
      color: #d8b4fe; /* purple-200 */
  }
  .form-control-glass:focus {
      background-color: rgba(255, 255, 255, 0.15);
      border-color: rgba(255, 255, 255, 0.5);
      color: white;
      box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.25);
  }

  /*--------------------------------------------------
  [3. Animations]
  --------------------------------------------------*/
  .animate-float {
    animation: float 3s ease-in-out infinite;
  }
  @keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
  }

  .animate-pulse-slow {
    animation: pulse-slow 3s ease-in-out infinite;
  }
  @keyframes pulse-slow {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.7; }
  }

  .animate-bounce-slow {
    animation: bounce-slow 2s ease-in-out infinite;
  }
  @keyframes bounce-slow {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
  }
  
  .navbar-brand img {
      height: 4rem; /* 64px */
  }
  .navbar {
      min-height: 5rem; /* 80px */
  }

  .custom-badge {
      padding-left: 1rem;
      padding-right: 1rem;
      padding-top: 0.25rem;
      padding-bottom: 0.25rem;
      border-radius: 9999px; /* Fully rounded */
      font-size: 0.875rem; /* text-sm */
      font-weight: 600; /* font-semibold */
      display: inline-block;
  }

  .custom-success {
      background-color: #d1fae5; /* bg-green-100 */
      color: #10b981; /* text-green-700 */
  }

  .custom-warning {
      background-color: #fef08a; /* bg-yellow-100 */
      color: #eab308; /* text-yellow-700 */
  }

</style>

@yield('styles')