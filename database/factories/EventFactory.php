<?php

use Faker\Generator as Faker;

$factory->define(CalendarApp\Evento::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'start' => $faker->dateTimeThisMonth(),
        'end' => $faker->dateTimeThisMonth(),
        'color' => $faker->hexColor,
        'user_id' => 3,
    ];
});