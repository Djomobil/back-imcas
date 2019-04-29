<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,25) as $index) {
            DB::table('products')->insert([
                'name' => $faker->word,
                'type' => $faker->text(20),
                'price' => $faker->numberBetween(50,1000),
                'barcode' => $faker->numberBetween(10000000, 99999999),
            ]);
        }
    }
}
