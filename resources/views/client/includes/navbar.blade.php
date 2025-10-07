<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/logo.png" width="60px" alt="">
            سند
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('aboutus') }}">عن المنصة</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">خدماتنا</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('specialists') }}">الأخصائيون</a></li>
                {{-- <li class="nav-item"><a class="nav-link" href="/#how-it-works">آلية العمل</a></li>
                <li class="nav-item"><a class="nav-link" href="/#testimonials">قصص نجاح</a></li> --}}
                <li class="nav-item"><a class="nav-link" href="{{ route('contactus') }}">التواصل والمقر</a></li>
            </ul>
            @auth
                <div class="dropdown">
                    <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ route('profile') }}">صفحتي</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" class="px-3 py-1">
                                @csrf
                                <button type="submit" class="btn btn-link p-0 text-danger">تسجيل الخروج</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <a href="{{ route('register') }}" class="btn btn-primary btn-sm px-4">ابدأ الآن</a>
            @endauth
        </div>
    </div>
</nav>