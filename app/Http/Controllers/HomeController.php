<?php

namespace App\Http\Controllers;

use App\Category;
use App\Movie;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $filtered = $request->query();
        $filteredCategory = Movie::with('categories');
        foreach ($filtered as $key => $value) {
            if (!$value) {
                continue;
            }

            if ($key === "categories") {
                $filteredCategory = $filteredCategory->whereHas("categories", function (Builder $query) use ($value) {
                  $query->where('categories.id', $value);
                });
              } else {
                $filteredCategory = $filteredCategory->where($key, "like", "%$value%");
              }
        }

        $filteredCategory = $filteredCategory->get();

        $carouselList = Movie::limit(5)->get();
        $categories = Category::all();
        return view('guests.home', [
        "moviesCarousel" => $carouselList
        , "categories" => $categories, "filteredCategory" => $filteredCategory ]);
    }
}
