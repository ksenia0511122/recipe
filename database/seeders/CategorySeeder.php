<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // database/seeders/CategorySeeder.php

public function run()
{
    DB::table('categories')->insert([
        ['name' => 'Десерты'],
        ['name' => 'Пицца'],
        ['name' => 'Роллы'],
    ]);
}

}
