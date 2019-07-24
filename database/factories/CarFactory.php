<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [

        'Make' => $faker->randomElement($array = array ('ford','honda','toyota')),
        'Model' => $faker->jobTitle,
        'Year' => $faker->year($max = 'now'),

    ];
});

