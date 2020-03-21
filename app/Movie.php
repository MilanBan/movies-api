<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = ['id'];

    public static function search($title){
        return Movie::where('title', 'like', "%$title%")->skip($skipRequested)->take($takeRequested)->get();
    }
}
