<?php

use App\Category;
use App\Movie;
use Illuminate\Database\Seeder;

class MovieCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = Movie::all();
        $categories = Category::pluck("id");
        foreach ($movies as $movie) {
            $randomCategoryNumber = rand(1, count($categories));
            $shuffleCategories=$categories->shuffle();
            $movieCategories= $shuffleCategories->slice(0, $randomCategoryNumber); 
            $movie->categories()->attach($movieCategories);
        }
    }         
}
