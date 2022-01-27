<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    function index(){
        $movies = Movie::all();

        return $movies;
    }

    function show(Movie $movie){
        $movie = $movie::where();

        return $movie;
    }
}
