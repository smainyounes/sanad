@extends('client_new.layouts.app')

@section('styles')
    {{-- Add any extra, page-specific styles here --}}
    <style>
        /* Styling for the contact info list items */
        .contact-info-list li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.5rem;
        }
        .contact-info-list li i {
            font-size: 1.25rem;
            margin-top: 5px;
            width: 30px;
            color: var(--sanad-pink);
        }

        /* Map container styling */
        .map-container {
            border-radius: 1rem; /* 16px */
            overflow: hidden;
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
            height: 450px;
            border: 1px solid rgba(0,0,0,0.1);
        }
        .map-container iframe {
            border: 0;
            height: 100%;
            width: 100%;
        }

        /* FAQ Accordion Styling for a cleaner look */
        .faq-accordion .accordion-item {
            border: 0;
            border-radius: 0.75rem; /* 12px */
            margin-bottom: 1rem;
            box-shadow: 0 0.5rem 1.5rem rgba(0,0,0,0.07);
            overflow: hidden; /* For rounded corners */
        }
        .faq-accordion .accordion-button {
            font-weight: 700;
        }
        .faq-accordion .accordion-button:not(.collapsed) {
            background-color: #f3e8ff; /* purple-50 */
            color: var(--sanad-purple-light);
            box-shadow: none;
        }
        .faq-accordion .accordion-button:focus {
            box-shadow: 0 0 0 0.25rem rgba(var(--bs-primary-rgb), 0.25);
        }
    </style>
@endsection

@section('content')
    <!-- PAGE HEADER -->
    <header class="hero-gradient text-white text-center py-5">
        <div class="container py-md-5 wow animate__animated animate__fadeIn">
            <h1 class="display-4">تواصل معنا</h1>
            <p class="lead text-white-75 mt-3" style="max-width: 700px; margin: auto;">
                نحن هنا للاستماع إليك. سواء كان لديك سؤال، استفسار، أو ترغب في حجز موعد، فريقنا جاهز لمساعدتك.
            </p>
        </div>
    </header>

    <main>
         <!-- MAP SECTION -->
         <section id="map-section" class="py-5 soft-gradient">
            <div class="container text-center wow animate__animated animate__fadeInUp">
                 <h2 class="section-title">موقعنا على الخريطة</h2>
                 <p class="text-muted mb-5">تفضل بزيارتنا في مقرنا الرئيسي الموضح أدناه.</p>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102283.47311139417!2d3.003124840428543!3d36.75283401579735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fb21da3929e33%3A0x4c21a42211634591!2sAlgiers%2C%20Algeria!5e0!3m2!1sen!2sus!4v1680000000000!5m2!1sen!2sus" loading="lazy"></iframe>
                </div>
            </div>
        </section>

        <!-- CONTACT FORM & INFO SECTION (Glassmorphism Effect) -->
        <section id="contact-us" class="hero-gradient py-5" style="margin-top: -1px;">
            <div class="container">
                <div class="row g-4 g-lg-5 align-items-stretch">
                    <!-- Contact Info Card -->
                    <div class="col-lg-5 wow animate__animated animate__fadeInRight">
                        <div class="contact-card p-4 p-lg-5 rounded-4 h-100 text-white">
                            <h3 class="mb-4">معلومات الاتصال</h3>
                            <p class="text-white-75 mb-4">
                                يمكنك التواصل معنا مباشرة عبر المعلومات التالية خلال أوقات العمل الرسمية.
                            </p>
                            <ul class="list-unstyled contact-info-list">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div><strong>العنوان:</strong><br><span class="text-white-75">حي ديدوش مراد، الجزائر العاصمة</span></div>
                                </li>
                                <li>
                                    <i class="fas fa-phone-alt"></i>
                                    <div><strong>الهاتف:</strong><br><span class="text-white-75">+213 55 123 4567</span></div>
                                </li>
                                <li>
                                    <i class="fas fa-envelope"></i>
                                    <div><strong>البريد الإلكتروني:</strong><br><span class="text-white-75">info@sanad.dz</span></div>
                                </li>
                                <li>
                                    <i class="fas fa-clock"></i>
                                    <div><strong>ساعات العمل:</strong><br><span class="text-white-75">الأحد - الخميس: 9ص - 5م</span></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Contact Form Wrapper -->
                    <div class="col-lg-7 wow animate__animated animate__fadeInLeft">
                        <div class="contact-card p-4 p-lg-5 rounded-4 h-100">
                            <h3 class="mb-4 text-white">أرسل لنا رسالة</h3>
                            <form action="" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6"><input type="text" class="form-control form-control-glass" placeholder="الاسم الكامل" required></div>
                                    <div class="col-md-6"><input type="email" class="form-control form-control-glass" placeholder="البريد الإلكتروني" required></div>
                                    <div class="col-md-6"><input type="text" class="form-control form-control-glass" placeholder="رقم الهاتف (اختياري)"></div>
                                    <div class="col-md-6"><input type="text" class="form-control form-control-glass" placeholder="الموضوع" required></div>
                                    <div class="col-12">
                                        <textarea class="form-control form-control-glass" rows="5" placeholder="اكتب رسالتك هنا..." required></textarea>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-brand-primary w-100 py-3">إرسال الرسالة</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ SECTION -->
        <section id="faq" class="py-5">
            <div class="container">
                <div class="text-center wow animate__animated animate__fadeInUp">
                    <h2 class="section-title">الأسئلة الشائعة</h2>
                    <p class="text-muted mb-5">إجابات على بعض الأسئلة الأكثر شيوعاً التي نتلقاها.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        <div class="accordion faq-accordion" id="faqAccordion">
                            <!-- Question 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#q1">كيف يمكنني حجز موعد؟</button></h2>
                                <div id="q1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">يمكنك التواصل معنا مباشرة عبر الهاتف أو ملء نموذج التواصل في هذه الصفحة لتحديد موعدك الأول.</div>
                                </div>
                            </div>
                            <!-- Question 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q2">هل الخدمات المقدمة سرية؟</button></h2>
                                <div id="q2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">نعم، السرية والخصوصية هي من أهم قيمنا. جميع معلوماتك وجلساتك تخضع لسرية تامة ومطلقة.</div>
                                </div>
                            </div>
                            <!-- Question 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q3">ما هي تكلفة الخدمات؟</button></h2>
                                <div id="q3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">تختلف التكلفة حسب نوع البرنامج أو الجلسة. للحصول على تفاصيل دقيقة، يرجى التواصل معنا مباشرة.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection