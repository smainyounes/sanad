<?php

namespace Database\Seeders;

use App\Models\Program;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $today = now()->toDateString();

        $emailToId = fn(string $email) => optional(User::where('type', 'specialist')->where('email', $email)->first())->id;

        $programs = [
            [
                'category_id' => 2,
                'specialist_email' => 'ahmad.specialist@example.com',
                'title' => 'برنامج إدارة القلق',
                'description' => 'جلسات عملية لفهم القلق وتعلم مهارات التعامل معه.',
                'date' => $today,
                'is_online' => true,
                'status' => 'active',
            ],
            [
                'category_id' => 3,
                'specialist_email' => 'sarah.specialist@example.com',
                'title' => 'مهارات التواصل الفعال',
                'description' => 'برنامج لتحسين مهارات التواصل والعلاقات الاجتماعية.',
                'date' => $today,
                'is_online' => false,
                'status' => 'active',
            ],
            [
                'category_id' => 4,
                'specialist_email' => 'khaled.specialist@example.com',
                'title' => 'الإرشاد الأسري المتقدم',
                'description' => 'محاور متقدمة في حل النزاعات الأسرية وبناء التفاهم.',
                'date' => $today,
                'is_online' => true,
                'status' => 'active',
            ],
        ];

        foreach ($programs as $data) {
            $specialistId = $emailToId($data['specialist_email']);
            if ($specialistId === null) {
                continue; // skip if specialist not found
            }

            Program::create([
                'category_id' => $data['category_id'],
                'specialist_id' => $specialistId,
                'title' => $data['title'],
                'description' => $data['description'],
                'date' => $data['date'],
                'is_online' => $data['is_online'],
                'status' => $data['status'],
            ]);
        }
    }
}


