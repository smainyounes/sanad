<?php

namespace Database\Seeders;

use App\Models\Speciality;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $i = 0;
        $data = [
            [
                'id' => ++$i,
                'name' => 'أخصائي نفساني',
            ],
            [
                'id' => ++$i,
                'name' => 'أخصائي إجتماعي',
            ],
            [
                'id' => ++$i,
                'name' => 'مستشار أسري',
            ],
        ];

        Speciality::upsert($data, ['id']);
    }
}
