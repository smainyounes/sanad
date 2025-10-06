<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::updateOrCreate(
            ['id' => 1], // condition to check if this record exists
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'admin_type' => 'super_admin',
            ]
        );
    }
}
