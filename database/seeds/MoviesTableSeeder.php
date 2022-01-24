<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run(Faker $faker)
        {
            for ($i = 0; $i < 20; $i++) {
                $travel = new Movie();
                $travel->image_path = $faker->imageUrl;
                $travel->title = $faker->title;
                $travel->description = $faker->realText();
                $travel->date= $faker->date;
                $travel->duration =$faker->randomNumber(10);;
                $travel->rating = $faker->text();
                $travel->save();
        }
    }
}
