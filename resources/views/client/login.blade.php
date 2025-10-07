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

    <style>
        :root {
            --primary-color: #0D244F; /* Deep Navy Blue */
            --primary-color-rgb: 13, 36, 79;
            --accent-color: #D4B283; /* Soft Gold/Beige */
            --text-color: #343a40;
            --light-bg: #F8F9FA;
            --white: #ffffff;
        }

        body {
            font-family: 'Cairo', sans-serif;
            background-color: var(--light-bg);
        }
        
        .auth-container {
            min-height: 100vh;
        }

        .auth-form-side {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }

        .auth-card {
            max-width: 450px;
            width: 100%;
            background: var(--white);
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            padding: 20px;
        }
        
        .auth-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .auth-logo a {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--primary-color);
            text-decoration: none;
        }
        
        .auth-card h2 {
            font-weight: 700;
            margin-top: 15px;
            color: var(--text-color);
        }

        .form-control {
            border-radius: 8px;
            padding: 12px 15px;
            border: 1px solid #ced4da;
        }
        .form-control:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 0.2rem rgba(212, 178, 131, 0.25);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            border-radius: 8px;
            padding: 12px;
            font-weight: 700;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0a1c3e;
            border-color: #0a1c3e;
        }

        .auth-visual-side {
            background: linear-gradient(rgba(var(--primary-color-rgb), 0.9), rgba(var(--primary-color-rgb), 0.9)), url('https://images.unsplash.com/photo-1522071820081-009f0129c7da?q=80&w=2070&auto=format&fit=crop') no-repeat center center;
            background-size: cover;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        
        .auth-visual-side h3 {
            font-weight: 800;
            font-size: 2.2rem;
        }
        .auth-visual-side p {
            font-size: 1.1rem;
            opacity: 0.8;
        }
        
        @media (max-width: 991px) {
            .auth-visual-side {
                display: none;
            }
            .auth-form-side {
                min-height: 100vh;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row auth-container">
            <!-- Form Side -->
            <div class="col-lg-6 auth-form-side">
                <div class="card auth-card wow animate__animated animate__fadeInUp">
                    <div class="auth-header">
                        <div class="auth-logo">
                            <a href="/">سند</a>
                        </div>
                        <h2>تسجيل الدخول</h2>
                        <p class="text-muted">أهلاً بعودتك! أدخل بياناتك للمتابعة.</p>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.post') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="loginEmail" class="form-label">البريد الإلكتروني</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="loginEmail" placeholder="example@email.com" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <label for="loginPassword" class="form-label">كلمة المرور</label>
                                    <a href="#" class="form-text small text-decoration-none" style="color: var(--primary-color);">نسيت كلمة المرور؟</a>
                                </div>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="loginPassword" required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary w-100">دخول</button>
                        </form>
                    </div>
                    <div class="card-footer text-center bg-transparent border-0 pt-3">
                        <small class="text-muted">ليس لديك حساب؟ <a href="{{ route('register') }}" class="fw-bold text-decoration-none" style="color: var(--primary-color);">أنشئ حساباً جديداً</a></small>
                    </div>
                </div>
            </div>

            <!-- Visual Side -->
            <div class="col-lg-6 auth-visual-side">
                <div class="p-5 wow animate__animated animate__fadeIn" data-wow-delay="0.2s">
                    <h3 class="mb-3">مكانك الآمن للنمو والتطور</h3>
                    <p>سعداء برؤيتك مرة أخرى. لنكمل معاً رحلة بناء مستقبلٍ واعد.</p>
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