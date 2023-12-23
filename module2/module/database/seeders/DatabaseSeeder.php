<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(StudentsAndGradesSeeder::class);

        \App\Models\User::factory(10)->create();
    }
}
