<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Guide;
use Faker\Generator as Faker;

$factory->define(Guide::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'socialmedia' => $faker->url,
        'phone' => $faker->phoneNumber,
    ];
});
