<?php

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i=0; $i<50; $i++) {
          Item::create([
            'title' => $faker->sentence(3),
            'description' => $faker->paragraph(6),
          ]);
        }
    }
}
