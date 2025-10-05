@extends('client.layouts.app')

@section('styles')
<style>
    /* 
    ==============================================
    STYLES FOR THE CONTACT US PAGE
    (Based on the landing page design system)
    ==============================================
    */

    /* Page Header for inner pages */
    .page-header {
        background: linear-gradient(rgba(248, 249, 250, 0.95), rgba(248, 249, 250, 0.95)), url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=2084&auto=format&fit=crop') no-repeat center center;
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

    /* Reusing .info-card style from the landing page for contact details */
    .info-card {
        background-color: var(--white);
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        height: 100%;
    }
    .info-card h4 {
        font-weight: 700;
        color: var(--primary-color);
    }
    .info-card ul {
        list-style: none;
        padding: 0;
    }
    .info-card ul li {
        display: flex;
        align-items: flex-start;
        margin-bottom: 20px;
        font-size: 1.05rem;
    }
    .info-card ul li i {
        font-size: 1.2rem;
        color: var(--accent-color);
        margin-left: 15px;
        margin-top: 5px;
        width: 25px;
    }
    .info-card ul li strong {
        display: block;
        margin-bottom: 3px;
        color: var(--primary-color);
        font-weight: 600;
    }
    .info-card ul li span {
        color: #6c757d;
    }

    /* Form Wrapper Style */
    .form-wrapper {
        background-color: var(--white);
        border-radius: 15px;
        padding: 40px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.08);
        height: 100%;
    }
    .form-wrapper h4 {
        font-weight: 700;
        color: var(--primary-color);
    }
    .form-wrapper .form-control {
        border-radius: 8px;
        padding: 12px 15px;
        border: 1px solid #ced4da;
    }
    .form-wrapper .form-control:focus {
        border-color: var(--accent-color);
        box-shadow: 0 0 0 0.2rem rgba(212, 178, 131, 0.25);
    }

    /* Map Section */
    .map-container {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        height: 450px;
    }
    .map-container iframe {
        border: 0;
        height: 100%;
        width: 100%;
    }

    /* FAQ Accordion - Redesigned */
    .faq-accordion .accordion-item {
        margin-bottom: 15px;
        border-radius: 12px !important;
        border: 1px solid #e0e0e0;
        box-shadow: none;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    .faq-accordion .accordion-item:hover {
        border-color: var(--accent-color);
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    .faq-accordion .accordion-button {
        font-weight: 700;
        font-size: 1.1rem;
        color: var(--primary-color);
    }
    .faq-accordion .accordion-button:focus {
        box-shadow: 0 0 0 0.2rem rgba(212, 178, 131, 0.25);
    }
    .faq-accordion .accordion-button:not(.collapsed) {
        background-color: var(--light-bg);
        box-shadow: inset 0 -1px 0 rgba(0,0,0,.08);
    }
    .faq-accordion .accordion-body {
        background-color: var(--white);
        color: #555;
    }
</style>
@endsection

@section('content')
    <!-- PAGE HEADER -->
    <header class="page-header wow animate__animated animate__fadeIn">
        <div class="container">
            <h1>تواصل معنا</h1>
            <p>نحن هنا للاستماع إليك. سواء كان لديك سؤال، استفسار، أو ترغب في حجز موعد، فريقنا جاهز لمساعدتك.</p>
        </div>
    </header>

    <main>
        <!-- CONTACT FORM & INFO SECTION -->
        <section id="contact-details">
            <div class="container">
                <div class="row g-4 align-items-stretch">
                    <!-- Contact Info Card -->
                    <div class="col-lg-5 wow animate__animated animate__fadeInRight">
                        <div class="info-card">
                            <h4 class="mb-4">معلومات الاتصال المباشر</h4>
                            <p class="text-muted mb-4">يمكنك التواصل معنا مباشرة عبر المعلومات التالية خلال أوقات العمل الرسمية.</p>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div><strong>العنوان:</strong><span>حي ديدوش مراد، الجزائر العاصمة، الجزائر</span></div>
                                </li>
                                <li>
                                    <i class="fas fa-phone-alt"></i>
                                    <div><strong>الهاتف:</strong><span>+213 55 123 4567</span></div>
                                </li>
                                <li>
                                    <i class="fas fa-envelope"></i>
                                    <div><strong>البريد الإلكتروني:</strong><span>info@sanad.dz</span></div>
                                </li>
                                <li>
                                    <i class="fas fa-clock"></i>
                                    <div><strong>ساعات العمل:</strong><span>الأحد - الخميس: 9:00 صباحاً - 5:00 مساءً</span></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Contact Form Wrapper -->
                    <div class="col-lg-7 wow animate__animated animate__fadeInLeft">
                        <div class="form-wrapper">
                            <h4 class="mb-4">أرسل لنا رسالة</h4>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">الاسم الكامل</label>
                                        <input type="text" class="form-control" id="name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">البريد الإلكتروني</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="subject" class="form-label">الموضوع</label>
                                        <input type="text" class="form-control" id="subject" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label">رسالتك</label>
                                        <textarea class="form-control" id="message" rows="5" required></textarea>
                                    </div>
                                    <div class="col-12 mt-4">
                                        {{-- Using the consistent .btn-primary class from landing page --}}
                                        <button type="submit" class="btn btn-primary w-100">إرسال الرسالة</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MAP SECTION -->
        <section id="map-section" class="py-5 bg-light">
            <div class="container wow animate__animated animate__fadeInUp">
                 <h2 class="section-title text-center">موقعنا على الخريطة</h2>
                 <p class="section-subtitle text-center">تفضل بزيارتنا في مقرنا الرئيسي الموضح أدناه.</p>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102283.47311139417!2d3.003124840428543!3d36.75283401579735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fb21da3929e33%3A0x4c21a42211634591!2sAlgiers%2C%20Algeria!5e0!3m2!1sen!2sus!4v1680000000000!5m2!1sen!2sus"></iframe>
                </div>
            </div>
        </section>

        <!-- FAQ SECTION -->
        <section id="faq">
            <div class="container">
                <div class="text-center wow animate__animated animate__fadeInUp">
                    <h2 class="section-title">الأسئلة الشائعة</h2>
                    <p class="section-subtitle">إجابات على بعض الأسئلة الأكثر شيوعاً التي نتلقاها من عملائنا.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        <div class="accordion faq-accordion" id="faqAccordion">
                            <!-- Question 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        كيف يمكنني حجز موعد أو الانضمام لبرنامج؟
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        يمكنك الاطلاع على صفحة "الخدمات" واختيار البرنامج المناسب لك، ثم التواصل معنا مباشرة عبر الهاتف أو ملء نموذج التواصل في هذه الصفحة لتأكيد حجزك وتحديد موعدك الأول.
                                    </div>
                                </div>
                            </div>
                            <!-- Question 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        هل الخدمات المقدمة سرية؟
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        نعم، السرية والخصوصية هي من أهم قيمنا الأساسية. جميع معلوماتك وجلساتك، سواء كانت حضورية أو رقمية، تخضع لسرية تامة ومطلقة وفقًا لأخلاقيات المهنة.
                                    </div>
                                </div>
                            </div>
                            <!-- Question 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        ما هي تكلفة الخدمات؟
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        تختلف تكلفة الخدمات حسب نوع البرنامج أو الجلسة. نحن نسعى لتقديم أسعار مدعومة ومناسبة. للحصول على تفاصيل دقيقة حول التكاليف، يرجى التواصل معنا مباشرة.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    {{-- No custom scripts are needed for this page's functionality. --}}
@endsection