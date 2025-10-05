<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h5>منصة سند</h5>
                <p>منصة ومركز متخصصان في تقديم الدعم النفسي والاجتماعي والمهني للشباب بأساليب علمية حديثة.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <h5>روابط هامة</h5>
                <ul class="list-unstyled p-0">
                    <li><a href="{{ route('aboutus') }}">عن المنصة</a></li>
                    <li><a href="{{ route('services') }}">الخدمات المقدمة</a></li>
                    <li><a href="{{ route('specialists') }}">فريق الأخصائيين</a></li>
                    <li><a href="{{ route('privacy-policy') }}">سياسة الخصوصية والشروط</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5>معلومات التواصل</h5>
                <ul class="list-unstyled p-0">
                    <li class="mb-2"><i class="fas fa-envelope ms-2"></i> info@sanad.dz</li>
                    <li class="mb-2"><i class="fas fa-phone ms-2"></i> <span dir="ltr">+213 21 123 456</span></li>
                    <li class="mb-2"><i class="fas fa-map-marker-alt ms-2"></i> الجزائر العاصمة، الجزائر</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <p class="mb-0">جميع الحقوق محفوظة © {{ date('Y') }} لمنصة سند</p>
    </div>
    </footer>