<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bird;
use Faker\Generator as Faker;

$factory->define(Bird::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->word,
        'description' => $faker->sentence,
        'mediapath' => $faker->url,
    ];
});
