<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'كيف يمكنني حجز موعد أو الانضمام لبرنامج؟',
                'answer' => 'يمكنك الاطلاع على صفحة "الخدمات" واختيار البرنامج المناسب لك، ثم التواصل معنا مباشرة عبر الهاتف أو ملء نموذج التواصل في هذه الصفحة لتأكيد حجزك وتحديد موعدك الأول.',
            ],
            [
                'question' => 'هل الخدمات المقدمة سرية؟',
                'answer' => 'نعم، السرية والخصوصية هي من أهم قيمنا الأساسية. جميع معلوماتك وجلساتك، سواء كانت حضورية أو رقمية، تخضع لسرية تامة ومطلقة وفقًا لأخلاقيات المهنة.',
            ],
            [
                'question' => 'ما هي تكلفة الخدمات؟',
                'answer' => 'تختلف تكلفة الخدمات حسب نوع البرنامج أو الجلسة. نحن نسعى لتقديم أسعار مدعومة ومناسبة. للحصول على تفاصيل دقيقة حول التكاليف، يرجى التواصل معنا مباشرة.',
            ],
        ];

        // Add an incremental id and use upsert
        $data = [];
        foreach ($faqs as $i => $faq) {
            $data[] = [
                'id' => $i + 1, // use $i+1 for IDs starting at 1
                'question' => $faq['question'],
                'answer' => $faq['answer'],
            ];
        }

        // Perform upsert (update if id exists, insert otherwise)
        Faq::upsert(
            $data,
            ['id'], // unique key(s) to check for existing records
            ['question', 'answer'] // columns to update if record exists
        );
    }
}
