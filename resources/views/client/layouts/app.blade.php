

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سند | @yield('title')</title>

    @include('client.includes.styles')
</head>
<body>

    @include('client.includes.navbar')

    
    @yield('content')
    

    <!-- 12. FOOTER -->
    @include('client.includes.footer')

    @include('client.includes.scripts')
    
</body>
</html>