<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => 'Іванов Іван',
            'course' => 3,
            'specialty' => 'ІТ',
        ]);

        // Add more students as needed
        DB::table('students')->insert([
            'name' => 'Петров Петро',
            'course' => 2,
            'specialty' => 'Математика',
        ]);

        DB::table('students')->insert([
            'name' => 'Марія Іванівна',
            'course' => 4,
            'specialty' => 'Фізика',
        ]);
    }
}
