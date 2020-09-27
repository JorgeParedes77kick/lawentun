<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'fecha' => $faker->dateTime->format('d/m/Y'),
        'tags' => [$faker->word, $faker->word, $faker->word],
        'text' => $faker->text,
        'author' => $faker->name
    ];
});
