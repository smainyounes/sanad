@extends('client.layouts.app')

@section('title', 'سياسة الخصوصية - سند')

@section('styles')
<style>
    /* 
    ==============================================
    STYLES FOR THE PRIVACY POLICY PAGE
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

    /* Privacy Policy Content Styling */
    .privacy-policy-content {
        background-color: var(--white);
        border-radius: 15px;
        padding: 40px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.07);
    }
    .privacy-policy-content h2 {
        font-weight: 800;
        color: var(--primary-color);
        margin-top: 40px;
        margin-bottom: 20px;
        font-size: 2.2rem;
        position: relative;
        padding-bottom: 10px;
    }
    .privacy-policy-content h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        right: 0;
        width: 60px;
        height: 4px;
        background-color: var(--accent-color);
        border-radius: 2px;
    }
    .privacy-policy-content h3 {
        font-weight: 700;
        color: var(--primary-color);
        margin-top: 25px;
        margin-bottom: 15px;
        font-size: 1.6rem;
    }
    .privacy-policy-content p, 
    .privacy-policy-content li {
        font-size: 1.1rem;
        line-height: 1.9;
        color: #555;
    }
    .privacy-policy-content ul {
        padding-right: 30px; /* More padding to match the style */
        margin-bottom: 25px;
    }
    .privacy-policy-content li {
        margin-bottom: 15px;
    }
    .privacy-policy-content strong {
        color: var(--text-color); /* Bold text should remain dark */
    }
    .last-updated {
        font-weight: 500;
        color: #777;
        border-bottom: 1px solid #eee;
        padding-bottom: 20px;
        margin-bottom: 30px;
        font-size: 1.05rem;
    }
    
    /* Links within policy */
    .privacy-policy-content a {
        color: var(--primary-color);
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    .privacy-policy-content a:hover {
        color: var(--accent-color);
        padding-right: 5px;
    }
</style>
@endsection

@section('content')
    <!-- PAGE HEADER -->
    <header class="page-header wow animate__animated animate__fadeIn">
        <div class="container">
            <h1>سياسة الخصوصية</h1>
            <p>خصوصيتكم وأمان معلوماتكم هي أولويتنا القصوى. توضح هذه الصفحة كيف نجمع، نستخدم، ونحمي بياناتكم.</p>
        </div>
    </header>

    <main>
        <section id="privacy-policy-section" class="py-5 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 wow animate__animated animate__fadeInUp">
                        <div class="privacy-policy-content">
                            <p class="last-updated">آخر تحديث: 4 أكتوبر 2025</p>

                            <h2>1. مقدمة</h2>
                            <p>
                                نحن في مركز ومنصة "سند" نلتزم التزامًا كاملاً بحماية خصوصية زوارنا ومستخدمينا. توضح سياسة الخصوصية هذه أنواع المعلومات الشخصية التي نجمعها، وكيفية استخدامها وحمايتها، والحقوق التي تتمتعون بها فيما يتعلق ببياناتكم الشخصية عند استخدامكم لموقعنا الإلكتروني وخدماتنا.
                            </p>

                            <h2>2. المعلومات التي نجمعها</h2>
                            <p>نقوم بجمع أنواع مختلفة من المعلومات لتقديم وتحسين خدماتنا لكم، وتشمل:</p>
                            <ul>
                                <li><strong>معلومات التعريف الشخصية:</strong> مثل الاسم الكامل، البريد الإلكتروني، ورقم الهاتف عند إنشاء حساب أو التواصل معنا عبر نماذج الاتصال.</li>
                                <li><strong>المعلومات التقنية:</strong> مثل عنوان بروتوكول الإنترنت (IP)، نوع المتصفح، نظام التشغيل، وملفات تعريف الارتباط (Cookies) التي تساعدنا على تحسين تجربة المستخدم وضمان عمل الموقع بشكل سليم.</li>
                            </ul>

                            <h2>3. كيف نستخدم معلوماتكم؟</h2>
                            <p>نستخدم المعلومات التي نجمعها للأغراض التالية:</p>
                            <ul>
                                <li>لإنشاء وإدارة حسابكم على المنصة.</li>
                                <li>للرد على استفساراتكم وطلباتكم التي ترسلونها عبر نماذج الاتصال.</li>
                                <li>لإرسال إشعارات هامة تتعلق بالبرامج التي تهتمون بها أو أي تحديثات على خدماتنا (بعد الحصول على موافقتكم).</li>
                                <li>لتحليل استخدام الموقع وتحسين محتواه ووظائفه.</li>
                                <li>للحفاظ على أمن وسلامة منصتنا ومنع أي أنشطة احتيالية.</li>
                            </ul>

                            <h2>4. مشاركة وأمن البيانات</h2>
                            <h3>مشاركة البيانات</h3>
                            <p>
                                <strong>نحن لا نبيع أو نؤجر أو نتاجر ببياناتكم الشخصية مع أي طرف ثالث.</strong>
                                تتم مشاركة المعلومات فقط في حالات محدودة جدًا وضرورية، مثل:
                            </p>
                            <ul>
                                <li>مع الأخصائيين العاملين في مركزنا لغرض تقديم الدعم والإرشاد المطلوب.</li>
                                <li>إذا طُلب منا ذلك بموجب القانون أو أمر قضائي.</li>
                            </ul>
                            <h3>أمن البيانات</h3>
                            <p>
                                نتخذ كافة الإجراءات الأمنية والتقنية والتنظيمية اللازمة لحماية بياناتكم من الوصول غير المصرح به أو التعديل أو الكشف أو الإتلاف. يشمل ذلك استخدام تشفير SSL لتأمين الاتصال بين متصفحكم وخوادمنا، وتطبيق سياسات وصول صارمة لموظفينا.
                            </p>

                            <h2>5. حقوقك تجاه بياناتك</h2>
                            <p>نحن نحترم حقوقكم الكاملة فيما يتعلق ببياناتكم الشخصية. يحق لكم:</p>
                            <ul>
                                <li><strong>الوصول إلى بياناتكم:</strong> طلب نسخة من المعلومات الشخصية التي نحتفظ بها عنكم.</li>
                                <li><strong>تصحيح البيانات:</strong> طلب تعديل أي معلومات غير دقيقة أو غير مكتملة.</li>
                                <li><strong>حذف البيانات:</strong> طلب حذف حسابكم ومعلوماتكم الشخصية من سجلاتنا، مع مراعاة أي التزامات قانونية قد تتطلب الاحتفاظ بالبيانات لفترة معينة.</li>
                            </ul>
                            <p>لممارسة أي من هذه الحقوق، يرجى التواصل معنا عبر المعلومات المتاحة في صفحة "تواصل معنا".</p>

                            <h2>6. خصوصية الأطفال</h2>
                            <p>
                                خدماتنا موجهة بشكل أساسي للمراهقين والشباب. نحن لا نجمع عن قصد أي معلومات شخصية من أي شخص دون سن 18 عامًا دون الحصول على موافقة صريحة من ولي الأمر. إذا كنت ولي أمر وتعتقد أن طفلك قد زودنا ببيانات شخصية دون موافقتك، فيرجى الاتصال بنا على الفور لإزالتها.
                            </p>
                            
                            <h2>7. التغييرات على سياسة الخصوصية</h2>
                            <p>
                                قد نقوم بتحديث سياسة الخصوصية هذه من وقت لآخر. سنقوم بنشر أي تغييرات على هذه الصفحة مع تحديث تاريخ "آخر تحديث" في الأعلى. نوصي بمراجعة هذه الصفحة بشكل دوري للاطلاع على أي مستجدات.
                            </p>
                            
                            <h2>8. الاتصال بنا</h2>
                            <p>
                                إذا كان لديكم أي أسئلة أو استفسارات حول سياسة الخصوصية هذه، فلا تترددوا في <a href="/contactus">التواصل معنا</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    {{-- No page-specific scripts needed for this page --}}
@endsection