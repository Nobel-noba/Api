<?php

namespace Database\Seeders;

use App\Models\models;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\User::factory(10)->create();
         models\product::factory(50)->create();
         models\Review::factory(300)->create();

    }
}
