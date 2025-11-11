<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول - سند</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Google Fonts (Cairo) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Custom CSS (The theme you provided) -->
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
        --bs-body-font-family: 'Cairo', sans-serif;
      }

      body {
        background-color: #f8fafc; /* slate-50 */
        font-family: var(--bs-body-font-family);
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
      
      /*--------------------------------------------------
      [2. Components]
      --------------------------------------------------*/
      .btn-brand-primary {
        background: linear-gradient(135deg, var(--sanad-purple-dark), var(--sanad-purple-light));
        color: white;
        transition: all 0.3s ease;
        border: none;
        font-weight: 600;
      }
      .btn-brand-primary:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        color: white;
      }

      /*--------------------------------------------------
      [3. Animations]
      --------------------------------------------------*/
      .animate-float {
        animation: float 4s ease-in-out infinite;
      }
      @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
      }

      /* Extra styles for this page */
      .auth-container {
        min-height: 100vh;
      }
      .auth-form-side {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem;
      }
      .auth-visual-side {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
      }
      .form-control:focus {
        border-color: var(--sanad-purple-dark);
        box-shadow: 0 0 0 0.25rem rgba(var(--bs-primary-rgb), 0.25);
      }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row auth-container g-0">

            <!-- Visual Side (Reversed order in HTML for RTL) -->
            <div class="col-lg-6 d-none d-lg-flex auth-visual-side hero-gradient">
                <div class="p-5 wow animate__animated animate__fadeIn" data-wow-delay="0.2s">
                    <img src="/images/logo-white.png" alt="Sanad Logo" class="animate-float mb-5" style="max-width: 150px;">
                    <h1 class="display-5 mb-3">مكانك الآمن للنمو والتطور</h1>
                    <p class="lead text-white-75">سعداء برؤيتك مرة أخرى. لنكمل معاً رحلة بناء مستقبلٍ واعد.</p>
                </div>
            </div>
            
            <!-- Form Side -->
            <div class="col-lg-6 auth-form-side bg-light">
                <div class="card shadow-lg border-0 p-2 p-md-4 wow animate__animated animate__fadeInUp" style="max-width: 450px; width: 100%; border-radius: 1rem;">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <a href="/"><img src="/logo.png" alt="Sanad Logo" style="height: 5rem;"></a>
                            <h2 class="mt-3">تسجيل الدخول</h2>
                            <p class="text-muted">أهلاً بعودتك! أدخل بياناتك للمتابعة.</p>
                        </div>
                        
                        <form method="POST" action="{{ route('login.post') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="loginEmail" class="form-label fw-bold">البريد الإلكتروني</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control p-3 @error('email') is-invalid @enderror" id="loginEmail" placeholder="example@email.com" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <label for="loginPassword" class="form-label fw-bold">كلمة المرور</label>
                                    {{-- <a href="#" class="form-text small text-decoration-none text-primary">نسيت كلمة المرور؟</a> --}}
                                </div>
                                <input type="password" name="password" class="form-control p-3 @error('password') is-invalid @enderror" id="loginPassword" required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-brand-primary btn-lg fs-5 py-2">دخول</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center bg-transparent border-0 pt-3">
                        <small class="text-muted">ليس لديك حساب؟ <a href="{{ route('register') }}" class="fw-bold text-decoration-none text-primary">أنشئ حساباً جديداً</a></small>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <!-- JS Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

</body>
</html>