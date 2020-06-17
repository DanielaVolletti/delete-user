<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UtentiModel;
use Faker\Generator as Faker;

$factory->define(UtentiModel::class, function (Faker $faker) {
    return [
        'name' => $faker -> name(),
        'email' => $faker -> email(),
        'address' => $faker -> streetAddress(),
        'phone' => $faker -> phoneNumber(),
        'dateOfBirth' => $faker -> date()
    ];
});
