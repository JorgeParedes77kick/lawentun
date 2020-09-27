<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Schedule;
use App\User_schedule;
use App\User;
use Faker\Generator as Faker;

$factory->define(User_schedule::class, function (Faker $faker) {
    $id_user=User::all()->random()->id;
    $id_therapy=Schedule::all()->random()->id;
    return [
        'id_user'=>$id_therapy,
        'id_schedule'=>$id_user,
    ];
});
