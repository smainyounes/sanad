@extends('client.layouts.app')

@section('styles')
    <style>
        /* Contact Info & Form */
        .contact-info-list {
            list-style: none;
            padding: 0;
        }
        .contact-info-list li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
            font-size: 1.1rem;
        }
        .contact-info-list .icon {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-left: 20px;
            margin-top: 5px;
            min-width: 30px;
            text-align: center;
        }
        .contact-info-list strong {
            display: block;
            margin-bottom: 5px;
            color: var(--text-color);
        }
        .contact-info-list span {
            color: #6c757d;
        }

        .contact-form .form-control {
            border-radius: 8px;
            padding: 12px 15px;
        }
        .contact-form .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(74, 144, 226, 0.25);
        }
        .contact-form .btn {
            padding: 12px 30px;
            font-weight: 700;
            border-radius: 8px;
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

        /* FAQ Section */
        .faq-accordion .accordion-item {
            margin-bottom: 15px;
            border-radius: 10px !important;
            border: 1px solid #dee2e6;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .faq-accordion .accordion-button {
            font-weight: 700;
            font-size: 1.1rem;
        }
        .faq-accordion .accordion-button:not(.collapsed) {
            color: var(--primary-color);
            background-color: #f0f7ff;
            box-shadow: inset 0 -1px 0 rgba(0,0,0,.125);
        }
    </style>
@endsection

@section('content')
        <!-- PAGE HEADER -->
    <header class="page-header wow animate__fadeIn">
        <div class="container">
            <h1>تواصل معنا</h1>
            <p>نحن هنا للاستماع إليك. سواء كان لديك سؤال، استفسار، أو ترغب في حجز موعد، فريقنا جاهز لمساعدتك.</p>
        </div>
    </header>

    <main>
        <!-- CONTACT FORM & INFO SECTION -->
        <section id="contact-form-section">
            <div class="container">
                <div class="row g-5">
                    <!-- Contact Info -->
                    <div class="col-lg-5 wow animate__slideInRight">
                        <h3 class="mb-4">معلومات الاتصال المباشر</h3>
                        <p class="text-muted mb-4">يمكنك التواصل معنا مباشرة عبر المعلومات التالية خلال أوقات العمل الرسمية.</p>
                        <ul class="contact-info-list">
                            <li>
                                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                <div><strong>العنوان:</strong><span>حي ديدوش مراد، الجزائر العاصمة، الجزائر</span></div>
                            </li>
                            <li>
                                <div class="icon"><i class="fas fa-phone-alt"></i></div>
                                <div><strong>الهاتف:</strong><span>+213 55 123 4567</span></div>
                            </li>
                            <li>
                                <div class="icon"><i class="fas fa-envelope"></i></div>
                                <div><strong>البريد الإلكتروني:</strong><span>info@sanad.dz</span></div>
                            </li>
                             <li>
                                <div class="icon"><i class="fas fa-clock"></i></div>
                                <div><strong>ساعات العمل:</strong><span>الأحد - الخميس: 9:00 صباحاً - 5:00 مساءً</span></div>
                            </li>
                        </ul>
                    </div>
                    <!-- Contact Form -->
                    <div class="col-lg-7 wow animate__slideInLeft">
                        <div class="contact-form bg-light p-4 p-md-5 border rounded-3">
                            <h3 class="mb-4">أرسل لنا رسالة</h3>
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
                                    <div class="col-12">
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
        <section id="map-section" class="py-0">
            <div class="container-fluid p-0 wow animate__fadeIn">
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102283.47311139417!2d3.003124840428543!3d36.75283401579735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fb21da3929e33%3A0x4c21a42211634591!2sAlgiers%2C%20Algeria!5e0!3m2!1sen!2sus!4v1680000000000!5m2!1sen!2sus"></iframe>
                </div>
            </div>
        </section>

        <!-- FAQ SECTION -->
        <section id="faq" class="bg-light">
            <div class="container">
                <div class="text-center wow animate__fadeInUp">
                    <h2 class="section-title">الأسئلة الشائعة</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 wow animate__fadeInUp" data-wow-delay="0.2s">
                        <div class="accordion faq-accordion" id="faqAccordion">
                            <!-- Question 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        كيف يمكنني حجز موعد أو الانضمام لبرنامج؟
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        يمكنك الاطلاع على صفحة "البرامج والفعاليات" واختيار البرنامج المناسب لك، ثم النقر على زر "احجز الآن" للتواصل معنا مباشرة عبر الهاتف أو واتساب لتأكيد حجزك.
                                    </div>
                                </div>
                            </div>
                            <!-- Question 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
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
                                <h2 class="accordion-header" id="headingThree">
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
    <script>
        
    </script>
@endsection