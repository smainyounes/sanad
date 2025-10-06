<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        $categories = [];
        $i = 1;

        $names = [
            'جميع الفئات',
            'نفسي',
            'اجتماعي',
            'مهني',
        ];

        foreach ($names as $name) {
            $categories[] = [
                'id' => $i,
                'name' => $name,
                'created_at' => $now,
                'updated_at' => $now,
            ];
            $i++;
        }

        DB::table('categories')->upsert(
            $categories,
            ['id'],              // use id as the unique key
            ['name', 'updated_at'] // columns to update if record exists
        );
        
    }
}
