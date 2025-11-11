
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sanad</title>

  @include('client_new.includes.styles')
</head>
<body>

  @include('client_new.includes.navbar')

  <main>
    @yield('content')
  </main>

<!-- Global Modals for Home -->
<div class="modal fade" id="reserveModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">طرق الحجز والتواصل</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-center text-muted">للحجز أو الاستفسار، يرجى التواصل معنا عبر إحدى القنوات التالية:</p>
                <div class="list-group list-group-flush text-center contact-modal-list">
                    <a href="tel:+213551234567" class="list-group-item list-group-item-action"><i class="fas fa-phone"></i> اتصال هاتفي مباشر</a>
                    <a href="https://wa.me/213551234567" target="_blank" class="list-group-item list-group-item-action"><i class="fab fa-whatsapp" style="color:#25D366;"></i> محادثة عبر واتساب</a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">إغلاق</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="loginModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">الرجاء تسجيل الدخول</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p class="text-muted mb-4">للقيام بهذه العملية، يرجى تسجيل الدخول إلى حسابك.</p>
                <a href="{{ route('login') }}" class="btn btn-primary w-100 mb-2">تسجيل الدخول</a>
                <a href="{{ route('register') }}" class="btn btn-outline-primary w-100">إنشاء حساب جديد</a>
            </div>
        </div>
    </div>
</div>
  
    @include('client_new.includes.footer')

  @include('client_new.includes.scripts')
</body>
</html>