@extends('client.layouts.app')

@section('title', 'خدماتنا - سند') {{-- Optional: Set the page title --}}

@section('styles')
    <style>
        /* Service Section Styling */
        .service-section {
            overflow-x: hidden; /* Prevent horizontal scrollbars from slide animations */
        }
        .service-section .service-image {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .service-section .service-title {
            font-weight: 800;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        .service-features-list {
            list-style: none;
            padding: 0;
            margin-top: 25px;
        }
        .service-features-list li {
            font-size: 1.1rem;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        .service-features-list i {
            color: var(--secondary-color);
            font-size: 1.3rem;
            margin-left: 15px;
        }
        
        /* CTA Section Styling */
        .cta-section {
            background-color: var(--primary-color);
            color: var(--white);
            border-radius: 20px;
        }
        .cta-section h2 { font-weight: 800; }
        .btn-light {
             border-radius: 50px; padding: 10px 30px; font-weight: 700; color: var(--primary-color);
        }
        .btn-outline-light {
             border-radius: 50px; padding: 10px 30px; font-weight: 700;
        }
    </style>
@endsection

@section('content')
    <!-- PAGE HEADER -->
    <header class="page-header wow animate__fadeIn">
        <div class="container">
            <h1>ماذا نقدم؟</h1>
            <p>نقدم مجموعة متكاملة من الخدمات المصممة خصيصًا لدعم الشباب في رحلتهم نحو الاستقلالية والنجاح.</p>
        </div>
    </header>

    <main>
        <!-- SERVICE 1: PSYCHOLOGICAL & SOCIAL REHABILITATION -->
        <section class="service-section">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow animate__slideInRight">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070&auto=format&fit=crop" alt="التأهيل النفسي والاجتماعي" class="img-fluid service-image">
                    </div>
                    <div class="col-lg-6 wow animate__slideInLeft">
                        <h3 class="service-title">التأهيل النفسي والاجتماعي</h3>
                        <p class="text-muted">
                            نوفر بيئة آمنة وداعمة لمعالجة التحديات النفسية والاجتماعية التي يواجهها الشباب. يهدف برنامجنا إلى تعزيز الصحة النفسية، بناء الثقة بالنفس، وتطوير مهارات التواصل الفعال.
                        </p>
                        <ul class="service-features-list">
                            <li><i class="fas fa-check-circle"></i> جلسات استشارية فردية مع أخصائيين مؤهلين.</li>
                            <li><i class="fas fa-check-circle"></i> مجموعات دعم وجلسات حوار جماعية.</li>
                            <li><i class="fas fa-check-circle"></i> برامج لإدارة القلق والتوتر وتعزيز المرونة النفسية.</li>
                            <li><i class="fas fa-check-circle"></i> إرشاد أسري لتحسين العلاقات الأسرية.</li>
                        </ul>
                        <a href="{{ route('programs') }}" class="btn btn-primary mt-3">اكتشف البرامج المتاحة</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICE 2: VOCATIONAL REHABILITATION -->
        <section class="service-section bg-light">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 order-lg-2 wow animate__slideInLeft">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070&auto=format&fit=crop" alt="التأهيل المهني والتدريب" class="img-fluid service-image">
                    </div>
                    <div class="col-lg-6 order-lg-1 wow animate__slideInRight">
                        <h3 class="service-title">التأهيل المهني والتدريب</h3>
                        <p class="text-muted">
                            نؤمن بأن الاستقلال المالي هو ركيزة أساسية للاندماج الناجح. لذلك، نقدم برامج متخصصة تهدف إلى تزويد الشباب بالمهارات اللازمة لدخول سوق العمل بثقة وكفاءة.
                        </p>
                        <ul class="service-features-list">
                            <li><i class="fas fa-check-circle"></i> ورش عمل لبناء السيرة الذاتية واجتياز المقابلات.</li>
                            <li><i class="fas fa-check-circle"></i> دورات تدريبية في مهارات الحاسوب واللغات.</li>
                            <li><i class="fas fa-check-circle"></i> توجيه مهني لاكتشاف الميول والقدرات.</li>
                            <li><i class="fas fa-check-circle"></i> ربط المتدربين بفرص عمل وتدريب ميداني.</li>
                        </ul>
                        <a href="{{ route('programs') }}" class="btn btn-primary mt-3">اطلع على ورش العمل</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICE 3: SOCIAL & CULTURAL ACTIVITIES -->
        <section class="service-section">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow animate__slideInRight">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=2070&auto=format&fit=crop" alt="الأنشطة الاجتماعية والثقافية" class="img-fluid service-image">
                    </div>
                    <div class="col-lg-6 wow animate__slideInLeft">
                        <h3 class="service-title">الأنشطة الاجتماعية والثقافية</h3>
                        <p class="text-muted">
                            لتعزيز الاندماج المجتمعي وبناء شبكة علاقات إيجابية، ننظم مجموعة متنوعة من الأنشطة التي تشجع على العمل الجماعي، اكتشاف المواهب، والمشاركة الفعالة في المجتمع.
                        </p>
                        <ul class="service-features-list">
                            <li><i class="fas fa-check-circle"></i> فعاليات رياضية وترفيهية.</li>
                            <li><i class="fas fa-check-circle"></i> مبادرات تطوعية وخدمة مجتمعية.</li>
                            <li><i class="fas fa-check-circle"></i> رحلات ثقافية وزيارات ميدانية.</li>
                            <li><i class="fas fa-check-circle"></i> نوادي للقراءة والفنون والموسيقى.</li>
                        </ul>
                        <a href="{{ route('contactus') }}" class="btn btn-primary mt-3">استفسر عن الأنشطة</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section>
            <div class="container">
                <div class="cta-section p-5 text-center wow animate__zoomIn">
                    <h2 class="mb-4">هل لديك أي استفسار عن خدماتنا؟</h2>
                    <p class="lead mb-4">فريقنا مستعد للإجابة على جميع أسئلتك ومساعدتك في اختيار الخدمة الأنسب لك.</p>
                    <a href="{{ route('contactus') }}" class="btn btn-light">تواصل معنا الآن</a>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    {{-- No page-specific scripts needed for this page as WOW.js is initialized globally --}}
@endsection