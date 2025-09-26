

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سند | @yield('title')</title>

    @include('client.includes.styles')
</head>
<body>

    @include('client.includes.navbar')

        <!-- 1. HERO SECTION -->
        <header class="hero-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <h1 class="wow animate__animated animate__fadeInDown">سند+: دعم متكامل، رقمياً وحضورياً، نحو مستقبل أفضل</h1>
                        <p class="lead wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                            منصتنا ومركزنا الفيزيائي يقدمان معاً برامج متخصصة للتأهيل النفسي والاجتماعي والمهني للمراهقين، لنبني معاً رحلة نجاح متكاملة.
                        </p>
                        <a href="#register" class="btn btn-primary btn-lg wow animate__animated animate__pulse" data-wow-delay="0.4s">سجّل مجاناً</a>
                    </div>
                </div>
            </div>
        </header>
    
        <main>
    
            <!-- 2. ABOUT THE PROJECT -->
            <section id="about">
                <div class="container">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 wow animate__animated animate__fadeInRight">
                            <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=2069&auto=format&fit=crop" alt="دعم وتعاون" class="img-fluid rounded-3 shadow-lg">
                        </div>
                        <div class="col-lg-6 wow animate__animated animate__fadeInLeft">
                            <h2 class="section-title text-center mb-4">من نحن؟</h2>
                            <p class="lead">تأسست منصة ومركز <strong>سند+</strong> إيماناً بأهمية الدعم الشامل للشباب في أهم مراحل حياتهم. ندرك التحديات التي يواجهها المراهقون عند العودة للمجتمع.</p>
                            <p>مهمتنا هي توفير مساحة آمنة ومحترفة، سواء <strong>عبر منصتنا الرقمية</strong> أو <strong>في مركزنا الفيزيائي</strong>، لتمنحهم الأدوات اللازمة للتعافي والنمو، والاندماج في المجتمع بثقة وإيجابية، ليكونوا أفراداً فاعلين ومستقلين.</p>
                        </div>
                    </div>
                </div>
            </section>
    
            <!-- 3. WHY SANAD+ -->
            <section id="why" class="bg-light">
                <div class="container text-center">
                     <h2 class="section-title">لماذا سند+؟</h2>
                     <div class="row justify-content-center">
                         <div class="col-lg-8 wow animate__animated animate__fadeInUp">
                            <p class="lead">غالباً ما يجد الشباب أنفسهم وحيدين بعد مغادرة مؤسسات الرعاية، مع نقص حاد في الدعم النفسي المتخصص الذي يساعدهم على معالجة الماضي والتخطيط للمستقبل.</p>
                            <p><strong>سند+</strong> يسد هذه الفجوة عبر ربطهم مباشرة مع نخبة من الأخصائيين النفسيين والاجتماعيين والمرشدين المهنيين، سواء من خلال <strong>الجلسات عن بعد</strong> المرنة، أو <strong>الزيارات الحضورية</strong> في مركزنا، في بيئة آمنة وسرية بالكامل تضمن لهم الحصول على الدعم الذي يستحقونه دون أي حواجز.</p>
                         </div>
                     </div>
                </div>
            </section>
    
            <!-- 4. MAIN SERVICES -->
            <section id="services">
                <div class="container text-center">
                    <h2 class="section-title">الخدمات الرئيسية</h2>
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.1s">
                            <div class="feature-box h-100">
                                <div class="icon"><i class="fas fa-desktop"></i></div>
                                <h4>جلسات نفسية عن بعد</h4>
                                <p>تواصل مع مختصين مؤهلين من أي مكان وفي أي وقت.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.2s">
                            <div class="feature-box h-100">
                                <div class="icon"><i class="fas fa-handshake"></i></div>
                                <h4>جلسات حضورية وورش عمل</h4>
                                <p>لقاءات شخصية وبرامج تدريبية تفاعلية في مركزنا.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.3s">
                            <div class="feature-box h-100">
                                <div class="icon"><i class="fas fa-tools"></i></div>
                                <h4>تأهيل وتدريب مهني</h4>
                                <p>برامج لتطوير مهاراتك واكتشاف مسارك المهني المناسب.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.4s">
                            <div class="feature-box h-100">
                                <div class="icon"><i class="fas fa-book-open-reader"></i></div>
                                <h4>موارد توعوية رقمية</h4>
                                <p>مكتبة غنية بالمواد التعليمية لدعم صحتك النفسية وتطورك.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
            <!-- 5. SPECIALISTS -->
            <section id="specialists" class="bg-light">
                <div class="container">
                    <h2 class="section-title text-center">الأخصائيون</h2>
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-lg-4 wow animate__animated animate__fadeInUp">
                            <div class="card specialist-card">
                                <img src="https://images.unsplash.com/photo-1557862921-37829c790f19?q=80&w=2071&auto=format&fit=crop" class="card-img-top" alt="د. أحمد محمود">
                                <div class="card-body p-4">
                                    <h5 class="card-title">د. أحمد محمود</h5>
                                    <p class="specialization">أخصائي نفسي إكلينيكي</p>
                                    <p class="card-text">متخصص في علاج الصدمات النفسية وبناء الثقة بالنفس.</p>
                                    <a href="#" class="btn btn-outline-primary mt-2">احجز جلسة</a>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-6 col-lg-4 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                            <div class="card specialist-card">
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=1964&auto=format&fit=crop" class="card-img-top" alt="أ. فاطمة علي">
                                <div class="card-body p-4">
                                    <h5 class="card-title">أ. فاطمة علي</h5>
                                    <p class="specialization">مرشدة اجتماعية ومهنية</p>
                                    <p class="card-text">تساعد الشباب على تطوير المهارات الحياتية والاندماج في سوق العمل.</p>
                                    <a href="#" class="btn btn-outline-primary mt-2">احجز جلسة</a>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-6 col-lg-4 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                            <div class="card specialist-card">
                                <img src="https://images.unsplash.com/photo-1557862921-37829c790f19?q=80&w=2071&auto=format&fit=crop" class="card-img-top" alt="د. يوسف إبراهيم">
                                <div class="card-body p-4">
                                    <h5 class="card-title">د. يوسف إبراهيم</h5>
                                    <p class="specialization">طبيب نفسي</p>
                                    <p class="card-text">خبير في إدارة القلق والضغوطات وتقديم الدعم النفسي اللازم.</p>
                                    <a href="#" class="btn btn-outline-primary mt-2">احجز جلسة</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
            <!-- 6. EVENTS -->
            <section id="events">
                <div class="container">
                    <h2 class="section-title text-center">جلسات وفعاليات هذا الأسبوع</h2>
                    <div class="list-group list-group-flush col-lg-8 mx-auto">
                        <div class="list-group-item p-4 mb-3 event-item wow animate__animated animate__fadeInRight">
                            <div class="d-flex w-100 justify-content-between align-items-center">
                                <div>
                                    <h5><i class="fas fa-chalkboard-teacher text-primary me-2"></i> ورشة عمل: كيف تبني سيرتك الذاتية؟ (حضوري/أونلاين)</h5>
                                    <p class="mb-1 text-muted"><i class="fas fa-calendar-alt me-2"></i>الثلاثاء، 25 أكتوبر <i class="fas fa-clock ms-3 me-2"></i>06:00 مساءً</p>
                                </div>
                                <a href="#" class="btn btn-secondary">انضم الآن</a>
                            </div>
                        </div>
                         <div class="list-group-item p-4 mb-3 event-item wow animate__animated animate__fadeInRight" data-wow-delay="0.2s">
                            <div class="d-flex w-100 justify-content-between align-items-center">
                                <div>
                                    <h5><i class="fas fa-users text-success me-2"></i> جلسة حوار جماعية: التعامل مع ضغوط المجتمع (حضوري)</h5>
                                    <p class="mb-1 text-muted"><i class="fas fa-calendar-alt me-2"></i>الخميس، 27 أكتوبر <i class="fas fa-clock ms-3 me-2"></i>07:00 مساءً</p>
                                </div>
                                <a href="#" class="btn btn-secondary">انضم الآن</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
            <!-- 7. ADVANTAGES -->
            <section id="advantages" class="bg-light">
                 <div class="container text-center">
                    <h2 class="section-title">مميزات سند+</h2>
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn">
                            <div class="feature-box h-100">
                                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                <h4>دعم حضوري ومركزي</h4>
                                <p>جلسات وورش عمل مباشرة في مركزنا المتخصص.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.2s">
                            <div class="feature-box h-100">
                                <div class="icon"><i class="fas fa-mobile-alt"></i></div>
                                <h4>مرونة رقمية</h4>
                                <p>تواصل مع الأخصائيين من أي مكان وفي أي وقت.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.4s">
                            <div class="feature-box h-100">
                                <div class="icon"><i class="fas fa-shield-alt"></i></div>
                                <h4>سرية وأمان تام</h4>
                                <p>خصوصيتك أولوية قصوى لدينا في كلتا الخدمتين.</p>
                            </div>
                        </div>
                         <div class="col-md-6 col-lg-3 wow animate__animated animate__zoomIn" data-wow-delay="0.6s">
                            <div class="feature-box h-100">
                                <div class="icon"><i class="fas fa-hand-holding-heart"></i></div>
                                <h4>دعم احترافي ومستمر</h4>
                                <p>فريق من الخبراء يرافقك خطوة بخطوة.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
            <!-- 8. HOW IT WORKS -->
            <section id="how-it-works">
                <div class="container text-center">
                    <h2 class="section-title">كيف تعمل المنصة؟</h2>
                     <div class="row g-5 timeline">
                        <div class="col-md-3 wow animate__animated animate__fadeInUp">
                            <div class="how-it-works-step">
                                <div class="step-number">1</div>
                                <h5>التسجيل</h5>
                                <p>أنشئ ملفك الشخصي في أقل من دقيقتين.</p>
                            </div>
                        </div>
                        <div class="col-md-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                            <div class="how-it-works-step">
                                <div class="step-number">2</div>
                                <h5>اختيار الخدمة</h5>
                                <p>اختر نوع الدعم الذي تحتاجه (رقمي أو حضوري).</p>
                            </div>
                        </div>
                        <div class="col-md-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                            <div class="how-it-works-step">
                                <div class="step-number">3</div>
                                <h5>التواصل مع المختص</h5>
                                <p>احجز جلستك الأولى في الموعد الذي يناسبك.</p>
                            </div>
                        </div>
                        <div class="col-md-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                            <div class="how-it-works-step">
                                <div class="step-number">4</div>
                                <h5>بدء برنامج الدعم</h5>
                                <p>انضم للبرامج والجلسات وابدأ رحلة التغيير.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
            <!-- 9. TESTIMONIALS -->
            <section id="testimonials" class="bg-light">
                <div class="container">
                    <h2 class="section-title text-center">قصص نجاح</h2>
                    <div class="row g-4">
                        <div class="col-lg-6 wow animate__animated animate__fadeInRight">
                            <div class="testimonial-card text-center h-100 shadow-sm">
                                <i class="fas fa-quote-left quote-icon"></i>
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1887&auto=format&fit=crop" alt="Avatar">
                                <p>"لم أكن أعرف من أين أبدأ. سند+ أعطاني الأمل والأدوات لأبني حياتي من جديد. جلساتي في المركز كانت نقطة تحول."</p>
                                <div class="name">- خالد، 19 عاماً</div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow animate__animated animate__fadeInLeft" data-wow-delay="0.2s">
                             <div class="testimonial-card text-center h-100 shadow-sm">
                                <i class="fas fa-quote-left quote-icon"></i>
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=1887&auto=format&fit=crop" alt="Avatar">
                                <p>"الجلسات الجماعية أونلاين كانت رائعة، ولكن الزيارات للمركز أضافت بُعداً آخر من الدعم والمجتمع الذي كنت أحتاجه."</p>
                                <div class="name">- نورة، 18 عاماً</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
            <!-- 10. CONTACT & LOCATION -->
            <section id="contact-location">
                <div class="container">
                    <h2 class="section-title text-center">الموقع والتواصل</h2>
                    <div class="row g-4 align-items-stretch">
                        <div class="col-lg-7 wow animate__animated animate__fadeInLeft">
                            <div class="map-container h-100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.015794829778!2d46.721850715!3d24.693457181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03f3f3f3f3f3%3A0x3f3f3f3f3f3f3f3f!2sRiyadh%2C%20Saudi%20Arabia!5e0!3m2!1sen!2sus!4v1678888888888!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-5 wow animate__animated animate__fadeInRight">
                            <div class="info-card h-100">
                                <h5>تواصل معنا أو زر مركزنا</h5>
                                <ul>
                                    <li><i class="fas fa-map-marker-alt"></i> <strong>العنوان:</strong> شارع ديدوش مراد، الجزائر العاصمة، الجزائر</li>
                                    <li><i class="fas fa-phone-alt"></i> <strong>الهاتف:</strong> +213 21 123 456</li>
                                    <li><i class="fas fa-envelope"></i> <strong>البريد الإلكتروني:</strong> info@sanad.dz</li>
                                    <li><i class="fas fa-clock"></i> <strong>ساعات العمل:</strong> الأحد - الخميس: 8:30 صباحاً - 4:30 مساءً</li>
                                </ul>
                                
                                <a href="#register" class="btn btn-primary mt-3 w-100">احجز جلستك الآن</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
            <!-- 11. FINAL CTA -->
            <section id="register" class="bg-light">
                <div class="container">
                    <div class="final-cta text-center wow animate__animated animate__zoomIn">
                        <h2>ابدأ رحلتك نحو التغيير الإيجابي</h2>
                        <p class="lead my-4">سواء كنت تفضل الدعم الرقمي أو التجربة الحضورية في مركزنا، سند+ هنا ليكون رفيقك في كل خطوة. لا تتردد.</p>
                        <a href="#" class="btn btn-secondary btn-lg">انضم إلى Sanad+ الآن</a>
                    </div>
                </div>
            </section>
    
        </main>
    

    <!-- 12. FOOTER -->
    @include('client.includes.footer')

    @include('client.includes.scripts')
    
</body>
</html>