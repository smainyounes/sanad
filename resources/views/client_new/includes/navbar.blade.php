  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container-xxl">
      <a class="navbar-brand" href="#">
        <img class="" style="width: 60px; height: auto;" src="/logo.png" alt="سند">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
         <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h16"></path><path d="M4 18h16"></path><path d="M4 6h16"></path></svg>
      </button>
      <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-3">
          <li class="nav-item"><a class="nav-link fw-semibold" href="{{ route('home') }}">الرئيسية</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="{{ route('aboutus') }}">من نحن</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="{{ route('services') }}">خدماتنا</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="{{ route('specialists') }}">الأخصائيون</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="{{ route('programs') }}">البرامج</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="{{ route('contactus') }}">تواصل معنا</a></li>
        </ul>
        <div class="d-flex align-items-center gap-2 mt-3 mt-lg-0">
          @auth
              {{-- This will be shown if the user is logged in --}}
              <div class="dropdown">
                  <button class="btn btn-brand-outline rounded-pill dropdown-toggle px-4 d-flex align-items-center gap-2" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                      {{ auth()->user()->name }}
                  </button>
                  <ul class="dropdown-menu " aria-labelledby="userDropdown">
                      <li><a class="dropdown-item" href="{{ route('client.profile') }}">صفحتي</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                          <form method="POST" action="{{ route('logout') }}">
                              @csrf
                              <button type="submit" class="dropdown-item text-danger">تسجيل الخروج</button>
                          </form>
                      </li>
                  </ul>
              </div>
          @else
              {{-- This will be shown if the user is a guest (not logged in) --}}
              <a href="{{ route('login') }}" class="btn btn-brand-outline rounded-pill px-4 d-flex align-items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" x2="3" y1="12" y2="12"></line></svg>
                  تسجيل الدخول
              </a>
              <a href="{{ route('register') }}" class="btn btn-brand-primary rounded-pill px-4 d-flex align-items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><line x1="19" x2="19" y1="8" y2="14"></line><line x1="22" x2="16" y1="11" y2="11"></line></svg>
                  إنشاء حساب
              </a>
          @endauth
      </div>
      </div>
    </div>
</nav>