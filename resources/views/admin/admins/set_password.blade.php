<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعيين كلمة المرور</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: "Tajawal", sans-serif;
        }
        .btn-primary {
            background-color: #E3A928 !important;
            border-color: #E3A928 !important;
        }
        .card {
            direction: rtl;
            text-align: right;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="card shadow-sm w-100" style="max-width: 400px;">
            <div class="card-body p-4">
                <h4 class="card-title text-center mb-4">تعيين كلمة المرور الخاصة بك</h4>
                <form method="POST" action="{{ route('admin.setPassword', $token) }}">
                    @csrf
                    <div class="mb-3 text-end">
                        <label for="password" class="form-label">كلمة المرور الجديدة</label>
                        <input 
                            type="password" 
                            class="form-control @error('password') is-invalid @enderror" 
                            id="password" 
                            name="password" 
                            required
                        >
                        @error('password')
                            <div class="invalid-feedback text-start">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 text-end">
                        <label for="password_confirmation" class="form-label">تأكيد كلمة المرور</label>
                        <input 
                            type="password" 
                            class="form-control @error('password_confirmation') is-invalid @enderror" 
                            id="password_confirmation" 
                            name="password_confirmation" 
                            required
                        >
                        @error('password_confirmation')
                            <div class="invalid-feedback text-start">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100">تعيين كلمة المرور</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
