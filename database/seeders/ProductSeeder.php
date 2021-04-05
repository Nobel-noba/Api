<?php

namespace Database\Seeders;

use Database\Factories\models\productFactory;
use Database\Factories\models\ReviewFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            productFactory::class
        );
    }
}
