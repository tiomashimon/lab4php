<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('news')->insert([
            'title' => 'Python випередив C++ в тесті на швидкість',
            'short_description' => 'Порівняння продуктивності двох популярних мов програмування',
            'content' => 'На останньому тесті продуктивності Python продемонстрував вражаючу швидкість, випередивши C++. Це відкриття шокувало всю спільноту програмістів.',
            'publication_date' => now(),
            'views' => 0,
        ]);

        DB::table('news')->insert([
            'title' => 'Україна страждає від нестачі кандидатів на вакансії',
            'short_description' => 'Проблема з пошуком кваліфікованих кандидатів на вакансії українських компаній',
            'content' => 'Українські компанії стикаються з серйозною проблемою - нестаче кандидатів на вакансії. В деяких випадках один кандидат розглядає пропозиції від трьох різних компаній, а їх мінімальна зарплата складає 3000 доларів США.',
            'publication_date' => now(),
            'views' => 0,
        ]);
    }
}
