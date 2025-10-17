@extends('client.layouts.app')

@section('title', 'خدماتنا - سند')

@section('styles')
<style>
    /* 
    ==============================================
    STYLES FOR THE SERVICES PAGE
    (Based on the landing page design system)
    ==============================================
    */

    /* Page Header for inner pages */
    .page-header {
        background: linear-gradient(rgba(248, 249, 250, 0.95), rgba(248, 249, 250, 0.95)), url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=2084&auto-format&fit=crop') no-repeat center center;
        background-size: cover;
        padding: 100px 0 80px;
        text-align: center;
        border-bottom: 1px solid #dee2e6;
    }
    .page-header h1 {
        font-size: 3.2rem;
        font-weight: 800;
        color: var(--primary-color);
    }
    .page-header p {
        font-size: 1.2rem;
        max-width: 700px;
        margin: 15px auto 0;
        color: #555;
    }

    /* Service Section Styling */
    .service-section {
        overflow: hidden; /* Prevent horizontal scrollbars */
    }
    .service-section .service-image {
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        object-fit: cover;
        height: 100%;
        min-height: 400px;
    }
    .service-section .service-title {
        font-weight: 800;
        color: var(--primary-color);
        margin-bottom: 20px;
        font-size: 2.5rem;
        position: relative;
        padding-bottom: 15px;
    }
    .service-section .service-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        right: 0;
        width: 60px;
        height: 4px;
        background-color: var(--accent-color);
        border-radius: 2px;
    }
    .service-section p {
        font-size: 1.1rem;
        color: #555;
        line-height: 1.8;
    }

    .service-features-list {
        list-style: none;
        padding: 0;
        margin-top: 25px;
    }
    .service-features-list li {
        font-size: 1.1rem;
        margin-bottom: 18px;
        display: flex;
        align-items: center;
        color: var(--text-color);
    }
    .service-features-list i {
        color: var(--accent-color); /* Use the correct accent color variable */
        font-size: 1.4rem;
        margin-left: 15px;
        width: 25px;
    }
    
    /* Reusing .final-cta from landing page */
    .final-cta {
        background: var(--primary-color);
        color: var(--white);
        border-radius: 20px;
        padding: 70px 40px;
    }
    .final-cta h2 { font-weight: 800; }

</style>
@endsection

@section('content')
    <!-- PAGE HEADER -->
    <header class="page-header wow animate__animated animate__fadeIn">
        <div class="container">
            <h1>خدماتنا المتكاملة</h1>
            <p>نقدم مجموعة من الحلول المصممة بعناية لتلبية الاحتياجات المتنوعة للشباب في مسيرتهم نحو التعافي والنمو.</p>
        </div>
    </header>

    <main>
        <!-- SERVICE 1: PSYCHOLOGICAL & SOCIAL REHABILITATION -->
        <section class="service-section">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow animate__animated animate__fadeInRight">
                        <img src="/images/shutterstock_674004631-2048x1365.jpeg" alt="التأهيل النفسي والاجتماعي" class="img-fluid service-image">
                    </div>
                    <div class="col-lg-6 wow animate__animated animate__fadeInLeft">
                        <h2 class="service-title">الدعم النفسي والاجتماعي</h2>
                        <p>
                            نوفر بيئة آمنة وداعمة لمعالجة التحديات النفسية والاجتماعية التي يواجهها الشباب. يهدف برنامجنا إلى تعزيز الصحة النفسية، بناء الثقة بالنفس، وتطوير مهارات التواصل الفعال.
                        </p>
                        <ul class="service-features-list">
                            <li><i class="fas fa-check-circle"></i> جلسات استشارية فردية بخصوصية تامة.</li>
                            <li><i class="fas fa-check-circle"></i> مجموعات دعم وجلسات حوار جماعية.</li>
                            <li><i class="fas fa-check-circle"></i> برامج لإدارة القلق والتوتر وتعزيز المرونة النفسية.</li>
                            <li><i class="fas fa-check-circle"></i> إرشاد أسري لتحسين العلاقات الأسرية.</li>
                        </ul>
                        <a href="/specialists" class="btn btn-primary mt-3">احجز جلستك الآن</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICE 2: VOCATIONAL REHABILITATION -->
        <section class="service-section bg-light">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 order-lg-2 wow animate__animated animate__fadeInLeft">
                        <img src="/images/freepik__a-dualthemed-image-on-one-side-students-attending-__69957.webp" alt="التأهيل المهني والتدريب" class="img-fluid service-image">
                    </div>
                    <div class="col-lg-6 order-lg-1 wow animate__animated animate__fadeInRight">
                        <h2 class="service-title">التأهيل والتوجيه المهني</h2>
                        <p>
                            نؤمن بأن الاستقلال المالي ركيزة أساسية للاندماج الناجح. لذلك، نقدم برامج متخصصة تهدف إلى تزويد الشباب بالمهارات اللازمة لدخول سوق العمل بثقة وكفاءة.
                        </p>
                        <ul class="service-features-list">
                            <li><i class="fas fa-check-circle"></i> ورش عمل لبناء السيرة الذاتية واجتياز المقابلات.</li>
                            <li><i class="fas fa-check-circle"></i> دورات تدريبية في المهارات الرقمية واللغات.</li>
                            <li><i class="fas fa-check-circle"></i> توجيه مهني لاكتشاف الميول والقدرات.</li>
                            <li><i class="fas fa-check-circle"></i> ربط المتدربين بفرص عمل وتدريب ميداني.</li>
                        </ul>
                        <a href="#events" class="btn btn-primary mt-3">اطلع على ورش العمل</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICE 3: SOCIAL & CULTURAL ACTIVITIES -->
        <section class="service-section">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow animate__animated animate__fadeInRight">
                        <img src="/images/iStock-1278978403-1536x1024.webp" alt="الأنشطة الاجتماعية والثقافية" class="img-fluid service-image">
                    </div>
                    <div class="col-lg-6 wow animate__animated animate__fadeInLeft">
                        <h2 class="service-title">الأنشطة الاجتماعية والثقافية</h2>
                        <p>
                            لتعزيز الاندماج المجتمعي وبناء شبكة علاقات إيجابية، ننظم مجموعة متنوعة من الأنشطة التي تشجع على العمل الجماعي، اكتشاف المواهب، والمشاركة الفعالة في المجتمع.
                        </p>
                        <ul class="service-features-list">
                            <li><i class="fas fa-check-circle"></i> فعاليات رياضية وترفيهية دورية.</li>
                            <li><i class="fas fa-check-circle"></i> مبادرات تطوعية وخدمة مجتمعية.</li>
                            <li><i class="fas fa-check-circle"></i> رحلات ثقافية وزيارات ميدانية هادفة.</li>
                            <li><i class="fas fa-check-circle"></i> نوادي للقراءة والفنون والموسيقى.</li>
                        </ul>
                        <a href="/contactus" class="btn btn-primary mt-3">استفسر عن الأنشطة</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="pt-0">
            <div class="container">
                <div class="final-cta text-center wow animate__animated animate__zoomIn">
                    <h2 class="mb-4">هل لديك استفسار عن خدماتنا؟</h2>
                    <p class="lead my-4">فريقنا مستعد للإجابة على جميع أسئلتك ومساعدتك في اختيار الخدمة الأنسب لك.</p>
                    {{-- Using the consistent .btn-secondary from landing page --}}
                    <a href="/contactus" class="btn btn-secondary btn-lg">تواصل معنا الآن</a>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    {{-- No page-specific scripts needed for this page. --}}
@endsection