<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(2),
        'director' => $faker->name(),
        'imageUrl' => $faker->url(),
        'duration' => $faker->randomNumber(),
        'releaseDate' => $faker->date(),
        'genre' => $faker->sentence(1)
    ];
});
