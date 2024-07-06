<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 10; $i++) {
            //Creo un array composto da elementi fittizzi
            $newRecord = new Comic();
            $newRecord->title = $faker->sentence(2);
            $newRecord->description = $faker->paragraph(3);
            $newRecord->thumb = "https://picsum.photos/id/" . $faker->numberBetween(1, 700) . "/1920/1080";
            $newRecord->price = $faker->randomFloat(2, 0.99, 69.99);
            $newRecord->sale_date = $faker->numberBetween(1981, 2024);
            $newRecord->vote = $faker->numberBetween(0, 9);
            $newRecord->save();
        }
    }
}
