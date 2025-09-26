@extends('client.layouts.app')

@section('content')
    <!-- PAGE HEADER -->
    <header class="page-header wow animate__fadeIn">
        <div class="container">
            <h1>فريق الأخصائيين</h1>
            <p>تعرّف على نخبة من الخبراء المؤهلين لمرافقتك في رحلتك نحو التعافي والنمو.</p>
        </div>
    </header>

    <main>
        <!-- SPECIALISTS GRID SECTION -->
        <section id="specialists-grid">
            <div class="container">
                <!-- FILTER BUTTONS -->
                <div class="row">
                    <div class="col-12 text-center filter-buttons wow animate__fadeInUp">
                        <button class="btn active" data-filter="all">الكل</button>
                        <button class="btn" data-filter="psychologist">أخصائي نفسي</button>
                        <button class="btn" data-filter="social">مرشد اجتماعي</button>
                        <button class="btn" data-filter="vocational">مدرب مهني</button>
                    </div>
                </div>

                <div class="row g-4 justify-content-center">
                    <!-- Specialist Card 1 -->
                    <div class="col-md-6 col-lg-4 specialist-item wow animate__fadeInUp" data-wow-delay="0.1s" data-category="psychologist">
                        <div class="card specialist-card">
                            <img src="https://images.unsplash.com/photo-1557862921-37829c790f19?q=80&w=2071&auto-format&fit=crop" class="card-img-top" alt="د. أحمد محمود">
                            <div class="card-body p-4">
                                <h5 class="card-title">د. أحمد محمود</h5>
                                <p class="specialization">أخصائي نفسي إكلينيكي</p>
                                <p class="card-text small text-muted">متخصص في علاج الصدمات النفسية وبناء الثقة بالنفس لدى المراهقين.</p>
                                <a href="#" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#registerModal">اطلب جلسة</a>
                            </div>
                        </div>
                    </div>
                    <!-- Specialist Card 2 -->
                        <div class="col-md-6 col-lg-4 specialist-item wow animate__fadeInUp" data-wow-delay="0.2s" data-category="social">
                        <div class="card specialist-card">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=1964&auto-format&fit=crop" class="card-img-top" alt="أ. فاطمة علي">
                            <div class="card-body p-4">
                                <h5 class="card-title">أ. فاطمة علي</h5>
                                <p class="specialization">مرشدة اجتماعية</p>
                                <p class="card-text small text-muted">تساعد الشباب على تطوير المهارات الحياتية واكتشاف مسارهم المهني.</p>
                                <a href="#" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#registerModal">اطلب جلسة</a>
                            </div>
                        </div>
                    </div>
                    <!-- Specialist Card 3 -->
                        <div class="col-md-6 col-lg-4 specialist-item wow animate__fadeInUp" data-wow-delay="0.3s" data-category="psychologist">
                        <div class="card specialist-card">
                            <img src="https://images.unsplash.com/photo-1542385152-d262c07074e2?q=80&w=1887&auto=format&fit=crop" class="card-img-top" alt="د. يوسف إبراهيم">
                            <div class="card-body p-4">
                                <h5 class="card-title">د. يوسف إبراهيم</h5>
                                <p class="specialization">طبيب نفسي</p>
                                <p class="card-text small text-muted">خبير في إدارة القلق والضغوطات النفسية وتقديم الدعم الدوائي اللازم.</p>
                                <a href="#" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#registerModal">اطلب جلسة</a>
                            </div>
                        </div>
                    </div>
                    <!-- Specialist Card 4 -->
                    <div class="col-md-6 col-lg-4 specialist-item wow animate__fadeInUp" data-wow-delay="0.1s" data-category="vocational">
                        <div class="card specialist-card">
                            <img src="https://images.unsplash.com/photo-1580894908361-967195033215?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="أ. ليلى كريم">
                            <div class="card-body p-4">
                                <h5 class="card-title">أ. ليلى كريم</h5>
                                <p class="specialization">مدربة مهارات مهنية</p>
                                <p class="card-text small text-muted">متخصصة في ورش عمل السيرة الذاتية والمقابلات الشخصية والتوجيه المهني.</p>
                                <a href="#" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#registerModal">اطلب جلسة</a>
                            </div>
                        </div>
                    </div>
                        <!-- Specialist Card 5 -->
                        <div class="col-md-6 col-lg-4 specialist-item wow animate__fadeInUp" data-wow-delay="0.2s" data-category="social">
                        <div class="card specialist-card">
                            <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="أ. كريم بن علي">
                            <div class="card-body p-4">
                                <h5 class="card-title">أ. كريم بن علي</h5>
                                <p class="specialization">مرشد اجتماعي</p>
                                <p class="card-text small text-muted">يعمل على تسهيل الاندماج الأسري والمجتمعي وحل النزاعات.</p>
                                <a href="#" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#registerModal">اطلب جلسة</a>
                            </div>
                        </div>
                    </div>
                        <!-- Specialist Card 6 -->
                        <div class="col-md-6 col-lg-4 specialist-item wow animate__fadeInUp" data-wow-delay="0.3s" data-category="psychologist">
                        <div class="card specialist-card">
                            <img src="https://images.unsplash.com/photo-1622253692010-33352da69e0d?q=80&w=1887&auto=format&fit=crop" class="card-img-top" alt="د. أمينة حداد">
                            <div class="card-body p-4">
                                <h5 class="card-title">د. أمينة حداد</h5>
                                <p class="specialization">أخصائية نفسية</p>
                                <p class="card-text small text-muted">خبيرة في العلاج السلوكي المعرفي (CBT) للشباب والمراهقين.</p>
                                <a href="#" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#registerModal">اطلب جلسة</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection