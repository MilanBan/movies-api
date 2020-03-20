<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'director' => $faker->name(),
        'imageUrl' => $faker->imageUrl(),
        'duration' => $faker->numberBetween($min = 1, $max = 500),
        'releaseDate' => $faker->date(),
        'genre' => $faker->sentence(1)
    ];
});
