<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Testimony;
use Faker\Generator as Faker;

$factory->define(Testimony::class, function (Faker $faker) {
    return [
        'description' => $faker->text,
        'stars' => 5,
        'author' => $faker->name,
    ];
});
