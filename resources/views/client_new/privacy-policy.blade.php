@extends('client_new.layouts.app')

@section('title', 'سياسة الخصوصية - سند')

@section('styles')
    {{-- Add any extra, page-specific styles here --}}
    <style>
        .policy-content {
            background-color: white;
            border-radius: 1rem; /* 16px */
        }
        .policy-content h2 {
            font-weight: 700;
            color: var(--sanad-purple-light);
            padding-bottom: 0.75rem;
            margin-bottom: 1rem;
            margin-top: 2rem;
            border-bottom: 2px solid #e2e8f0; /* slate-200 */
        }
        .policy-content h3 {
            font-weight: 700;
            color: var(--sanad-purple-dark);
            margin-top: 1.75rem;
            margin-bottom: 0.75rem;
        }
        .policy-content p, 
        .policy-content li {
            line-height: 1.8;
            color: #475569; /* slate-600 */
        }
        .policy-content ul {
            padding-right: 2rem; /* Indent lists for readability */
        }
        .policy-content a {
            color: var(--sanad-purple-dark);
            font-weight: 600;
            text-decoration: none;
            border-bottom: 2px solid transparent;
            transition: border-color 0.3s ease;
        }
        .policy-content a:hover {
            border-color: var(--sanad-pink);
        }
    </style>
@endsection

@section('content')
    <!-- PAGE HEADER -->
    <header class="hero-gradient text-white text-center py-5">
        <div class="container py-md-5 wow animate__animated animate__fadeIn">
            <h1 class="display-4">سياسة الخصوصية</h1>
            <p class="lead text-white-75 mt-3" style="max-width: 700px; margin: auto;">
                خصوصيتكم وأمان معلوماتكم هي أولويتنا القصوى. توضح هذه الصفحة كيف نجمع، نستخدم، ونحمي بياناتكم.
            </p>
        </div>
    </header>

    <main>
        <section id="privacy-policy-section" class="py-5 soft-gradient">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 wow animate__animated animate__fadeInUp">
                        <div class="card border-0 shadow-sm p-4 p-md-5 policy-content">
                            <p class="text-muted border-bottom pb-3 mb-4">آخر تحديث: 4 أكتوبر 2025</p>

                            <h2>1. مقدمة</h2>
                            <p>
                                نحن في مركز ومنصة "سند" نلتزم التزامًا كاملاً بحماية خصوصية زوارنا ومستخدمينا. توضح سياسة الخصوصية هذه أنواع المعلومات الشخصية التي نجمعها، وكيفية استخدامها وحمايتها، والحقوق التي تتمتعون بها فيما يتعلق ببياناتكم الشخصية.
                            </p>

                            <h2>2. المعلومات التي نجمعها</h2>
                            <p>نقوم بجمع أنواع مختلفة من المعلومات لتقديم وتحسين خدماتنا لكم، وتشمل:</p>
                            <ul>
                                <li><strong>معلومات التعريف الشخصية:</strong> مثل الاسم، البريد الإلكتروني، ورقم الهاتف عند التواصل معنا.</li>
                                <li><strong>المعلومات التقنية:</strong> مثل عنوان IP، نوع المتصفح، وملفات تعريف الارتباط (Cookies) لتحسين تجربة المستخدم.</li>
                            </ul>

                            <h2>3. كيف نستخدم معلوماتكم؟</h2>
                            <p>نستخدم المعلومات التي نجمعها للأغراض التالية:</p>
                            <ul>
                                <li>للرد على استفساراتكم وطلباتكم.</li>
                                <li>لإرسال إشعارات هامة تتعلق بخدماتنا (بعد الحصول على موافقتكم).</li>
                                <li>لتحليل استخدام الموقع وتحسين محتواه ووظائفه.</li>
                                <li>للحفاظ على أمن وسلامة منصتنا.</li>
                            </ul>

                            <h2>4. مشاركة وأمن البيانات</h2>
                            <h3>مشاركة البيانات</h3>
                            <p>
                                <strong>نحن لا نبيع أو نؤجر بياناتكم الشخصية مع أي طرف ثالث.</strong>
                                تتم مشاركة المعلومات فقط في حالات محدودة جدًا، مثل مع الأخصائيين لتقديم الدعم المطلوب، أو إذا طُلب منا ذلك بموجب القانون.
                            </p>
                            <h3>أمن البيانات</h3>
                            <p>
                                نتخذ كافة الإجراءات الأمنية والتقنية اللازمة لحماية بياناتكم من الوصول غير المصرح به، بما في ذلك استخدام تشفير SSL وتطبيق سياسات وصول صارمة.
                            </p>

                            <h2>5. حقوقك تجاه بياناتك</h2>
                            <p>نحن نحترم حقوقكم الكاملة تجاه بياناتكم. يحق لكم طلب الوصول إلى بياناتكم، تصحيحها، أو حذفها. لممارسة هذه الحقوق، يرجى التواصل معنا.</p>
                            
                            <h2>6. التغييرات على سياسة الخصوصية</h2>
                            <p>
                                قد نقوم بتحديث سياسة الخصوصية هذه من وقت لآخر. سنقوم بنشر أي تغييرات على هذه الصفحة مع تحديث تاريخ "آخر تحديث" في الأعلى.
                            </p>
                            
                            <h2>7. الاتصال بنا</h2>
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