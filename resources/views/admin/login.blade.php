<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Connexion Admin</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            margin-top: 100px;
            max-width: 400px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }
        .logo {
            display: block;
            margin: 0 auto 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container mx-auto">
            <img src="/assets/images/logo-2.png" alt="Logo" class="logo" width="100">
            <h2 class="text-center mb-4">Connexion Admin</h2>
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse e-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre e-mail" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe" required>
                </div>
                <div class="mb-3">
                    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Se connecter</button>
            </form>
            {{-- <div class="text-center mt-3">
                <a href="#">Mot de passe oublié ?</a>
            </div> --}}
        </div>
    </div>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', {action: 'contact'}).then(function(token) {
            document.getElementById('g-recaptcha-response').value = token;
            });
        });
    </script>
    
</body>
</html>
