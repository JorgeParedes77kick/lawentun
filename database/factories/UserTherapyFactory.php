<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Therapy;
use App\User;
use App\User_therapy;
use Faker\Generator as Faker;

$factory->define(User_therapy::class, function (Faker $faker) {
    $id_user=User::all()->random()->id;
    $id_therapy=Therapy::all()->random()->id;
    return [
        'id_user'=>$id_therapy,
        'id_therapy'=>$id_user,
    ];
});


