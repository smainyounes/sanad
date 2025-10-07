<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specialists = [
            [
                'name' => 'د. أحمد العبدالله',
                'email' => 'ahmad.specialist@example.com',
                'bio' => 'أخصائي نفسي بخبرة 10 سنوات في العلاج السلوكي المعرفي.',
                'speciality_id' => 1,
            ],
            [
                'name' => 'أ. سارة القحطاني',
                'email' => 'sarah.specialist@example.com',
                'bio' => 'أخصائية اجتماعية تهتم بالدعم الأسري وتمكين الشباب.',
                'speciality_id' => 2,
            ],
            [
                'name' => 'م. خالد الزهراني',
                'email' => 'khaled.specialist@example.com',
                'bio' => 'مستشار أسري معتمد، مهتم بالإرشاد الأسري والزواجي.',
                'speciality_id' => 3,
            ],
        ];

        foreach ($specialists as $data) {
            User::updateOrCreate(
                ['email' => $data['email']],
                [
                    'name' => $data['name'],
                    'password' => Hash::make('password'),
                    'type' => 'specialist',
                    'bio' => $data['bio'],
                    'image' => null,
                    'speciality_id' => $data['speciality_id'],
                ]
            );
        }
    }
}


