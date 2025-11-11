 <!-- Footer -->
 <footer class="bg-dark text-white py-5">
    <div class="container-xxl">
        <div class="row g-4 mb-4">
            <div class="col-lg-3 col-md-6">
                <img src="/logo.png" alt="سند" class="mb-3" style="height: 4rem;">
                <p class="text-white-50">يد تمسك بك وقلب يحتويك</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold mb-3">روابط سريعة</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="/" class="text-white-50 text-decoration-none">الرئيسية</a></li>
                    <li class="mb-2"><a href="{{ route('aboutus') }}" class="text-white-50 text-decoration-none">من نحن</a></li>
                    <li class="mb-2"><a href="{{ route('services') }}" class="text-white-50 text-decoration-none">خدماتنا</a></li>
                    <li><a href="{{ route('programs') }}" class="text-white-50 text-decoration-none">البرامج</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold mb-3">الخدمات</h5>
                <ul class="list-unstyled text-white-50">
                    <li class="mb-2">التأهيل النفسي</li>
                    <li class="mb-2">التأهيل الاجتماعي</li>
                    <li class="mb-2">التمكين الاقتصادي</li>
                    <li>الاستشارات</li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold mb-3">تابعنا</h5>
                <div class="d-flex gap-3">
                    <a href="#" class="btn btn-secondary rounded-circle" style="width: 40px; height: 40px;">F</a>
                    <a href="#" class="btn btn-secondary rounded-circle" style="width: 40px; height: 40px;">T</a>
                    <a href="#" class="btn btn-secondary rounded-circle" style="width: 40px; height: 40px;">I</a>
                </div>
            </div>
        </div>
        <div class="border-top border-secondary-subtle pt-4 mt-4 text-center text-white-50">
            <p>&copy; {{ date('Y') }} مركز سند. جميع الحقوق محفوظة.</p>
        </div>
    </div>
</footer>