<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Therapy;
use Faker\Generator as Faker;

$factory->define(Therapy::class, function (Faker $faker) {
    return [
        'name' => $faker->domainName,
        'description' => $faker->text,
    ];
});
