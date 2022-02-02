<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'description', 'coverImg', 'date', 'duration', 'rating'];

    public function categories(){
        return $this->belongsToMany('App\Category', "movie_category");
    }
}
