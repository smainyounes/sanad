@extends('client_new.layouts.app')

@section('title', 'خدماتنا - سند')

@section('styles')
    {{-- Add any extra, page-specific styles here --}}
    <style>
        .service-features {
            list-style: none;
            padding: 0;
        }
        .service-features li {
            font-size: 1.05rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }
        .service-features i {
            color: var(--sanad-purple-dark);
            font-size: 1.5rem;
            margin-inline-end: 0.75rem; /* For RTL/LTR support */
            width: 30px;
        }
    </style>
@endsection

@section('content')
    <!-- PAGE HEADER -->
    <header class="hero-gradient text-white text-center py-5">
        <div class="container py-md-4 wow animate__animated animate__fadeIn">
            <h1 class="display-4">خدماتنا المتكاملة</h1>
            <p class="lead text-white-75 mt-3" style="max-width: 700px; margin: auto;">
                نقدم مجموعة من الحلول المصممة بعناية لتلبية الاحتياجات المتنوعة للشباب في مسيرتهم نحو التعافي والنمو.
            </p>
        </div>
    </header>

    <main>
        <!-- SERVICE 1: PSYCHOLOGICAL & SOCIAL REHABILITATION -->
        <section class="py-5 my-4">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow animate__animated animate__fadeInRight">
                        <div class="img-zoom-hover rounded-4 shadow-lg">
                            <img src="/images/shutterstock_674004631-2048x1365.jpeg" alt="التأهيل النفسي والاجتماعي" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 wow animate__animated animate__fadeInLeft">
                        <h2 class="section-title mb-4">الدعم النفسي والاجتماعي</h2>
                        <p class="lead text-muted">
                            نوفر بيئة آمنة وداعمة لمعالجة التحديات النفسية والاجتماعية. يهدف برنامجنا إلى تعزيز الصحة النفسية، بناء الثقة بالنفس، وتطوير مهارات التواصل الفعال.
                        </p>
                        <ul class="service-features mt-4">
                            <li><i class="fas fa-check-circle"></i> جلسات استشارية فردية بخصوصية تامة.</li>
                            <li><i class="fas fa-check-circle"></i> مجموعات دعم وجلسات حوار جماعية.</li>
                            <li><i class="fas fa-check-circle"></i> برامج لإدارة القلق وتعزيز المرونة النفسية.</li>
                        </ul>
                        <a href="/specialists" class="btn btn-brand-primary mt-3 px-4 py-2">احجز جلستك الآن</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICE 2: VOCATIONAL REHABILITATION -->
        <section class="py-5 my-4 soft-gradient">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 order-lg-2 wow animate__animated animate__fadeInLeft">
                         <div class="img-zoom-hover rounded-4 shadow-lg">
                            <img src="/images/freepik__a-dualthemed-image-on-one-side-students-attending-__69957.webp" alt="التأهيل المهني والتدريب" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1 wow animate__animated animate__fadeInRight">
                        <h2 class="section-title mb-4">التأهيل والتوجيه المهني</h2>
                        <p class="lead text-muted">
                            نؤمن بأن الاستقلال المالي ركيزة أساسية للاندماج. لذلك، نقدم برامج متخصصة لتزويد الشباب بالمهارات اللازمة لدخول سوق العمل بثقة وكفاءة.
                        </p>
                        <ul class="service-features mt-4">
                            <li><i class="fas fa-check-circle"></i> ورش عمل لبناء السيرة الذاتية واجتياز المقابلات.</li>
                            <li><i class="fas fa-check-circle"></i> دورات تدريبية في المهارات الرقمية واللغات.</li>
                            <li><i class="fas fa-check-circle"></i> ربط المتدربين بفرص عمل وتدريب ميداني.</li>
                        </ul>
                        <a href="/programs" class="btn btn-brand-primary mt-3 px-4 py-2">اطلع على ورش العمل</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICE 3: SOCIAL & CULTURAL ACTIVITIES -->
        <section class="py-5 my-4">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow animate__animated animate__fadeInRight">
                        <div class="img-zoom-hover rounded-4 shadow-lg">
                            <img src="/images/iStock-1278978403-1536x1024.webp" alt="الأنشطة الاجتماعية والثقافية" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 wow animate__animated animate__fadeInLeft">
                        <h2 class="section-title mb-4">الأنشطة الاجتماعية والثقافية</h2>
                        <p class="lead text-muted">
                           لتعزيز الاندماج وبناء شبكة علاقات إيجابية، ننظم مجموعة متنوعة من الأنشطة التي تشجع على العمل الجماعي، اكتشاف المواهب، والمشاركة الفعالة في المجتمع.
                        </p>
                        <ul class="service-features mt-4">
                            <li><i class="fas fa-check-circle"></i> فعاليات رياضية وترفيهية دورية.</li>
                            <li><i class="fas fa-check-circle"></i> مبادرات تطوعية وخدمة مجتمعية.</li>
                            <li><i class="fas fa-check-circle"></i> رحلات ثقافية وزيارات ميدانية هادفة.</li>
                        </ul>
                        <a href="/contactus" class="btn btn-brand-primary mt-3 px-4 py-2">استفسر عن الأنشطة</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-5">
            <div class="container">
                <div class="hero-gradient text-white text-center p-5 rounded-4 shadow-lg animate-float wow animate__animated animate__zoomIn">
                    <h2 class="display-5 mb-3">هل لديك استفسار عن خدماتنا؟</h2>
                    <p class="lead my-4 text-white-75">فريقنا مستعد للإجابة على جميع أسئلتك ومساعدتك في اختيار الخدمة الأنسب لك.</p>
                    <a href="/contactus" class="btn btn-lg btn-light text-primary fw-bold">تواصل معنا الآن</a>
                </div>
            </div>
        </section>
    </main>
@endsection