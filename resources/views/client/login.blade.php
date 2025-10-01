
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول - سند</title>

    <!-- Bootstrap 5 CSS (RTL) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Google Fonts (Tajawal) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #4A90E2;
            --secondary-color: #2ECC71;
            --text-color: #343a40;
            --light-bg: #f8f9fc;
        }

        body {
            font-family: 'Tajawal', sans-serif;
            background-color: var(--light-bg);
            /* overflow: hidden; */
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
            border: none;
            background: transparent;
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
            border: 1px solid #ddd;
        }
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(74, 144, 226, 0.25);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            border-radius: 8px;
            padding: 12px;
            font-weight: 700;
        }

        .auth-visual-side {
            background: linear-gradient(-45deg, #4a90e2, #2ecc71, #4a90e2, #2ecc71);
            background-size: 400% 400%;
            animation: gradient-animation 15s ease infinite;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        
        .auth-visual-side img {
            max-width: 80%;
            margin-bottom: 30px;
        }

        .auth-visual-side h3 {
            font-weight: 800;
        }
        
        @keyframes gradient-animation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
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
            <!-- Visual Side -->
            <div class="col-lg-6 auth-visual-side">
                <div class="p-5">
                    <img src="https://via.placeholder.com/400x300.png/FFFFFF/2ECC71?Text=Illustration" alt="Sanad Illustration" class="img-fluid wow animate__zoomIn" data-wow-delay="0.2s">
                    <h3 class="wow animate__fadeInDown" data-wow-delay="0.4s">أهلاً بعودتك</h3>
                    <p class="wow animate__fadeInUp" data-wow-delay="0.6s">سعداء برؤيتك مرة أخرى. لنكمل رحلة النجاح معاً.</p>
                </div>
            </div>
            <!-- Form Side -->
            <div class="col-lg-6 auth-form-side">
                <div class="card auth-card wow animate__fadeInRight">
                    <div class="auth-header">
                        <div class="auth-logo">
                            <a href="/">سند</a>
                        </div>
                        <h2>تسجيل الدخول</h2>
                        <p class="text-muted">أدخل بياناتك للمتابعة.</p>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="loginEmail" class="form-label">البريد الإلكتروني</label>
                                <input type="email" class="form-control" id="loginEmail" placeholder="example@email.com" required>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <label for="loginPassword" class="form-label">كلمة المرور</label>
                                    <a href="#" class="form-text small text-decoration-none fw-bold">نسيت كلمة المرور؟</a>
                                </div>
                                <input type="password" class="form-control" id="loginPassword" required>
                            </div>
                            <a href="/" class="btn btn-primary w-100 mt-3">دخول</a>
                        </form>
                    </div>
                    <div class="card-footer text-center bg-transparent border-0 pt-3">
                        <small class="text-muted">ليس لديك حساب؟ <a href="{{ route('register') }}" class="fw-bold">أنشئ حساباً جديداً</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- WOW.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

</body>
</html>