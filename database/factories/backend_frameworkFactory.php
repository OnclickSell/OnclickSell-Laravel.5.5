<?php

use Faker\Generator as Faker;

$factory->define(App\backend_frameworks::class, function (Faker $faker) {
    return [
        'backend_framework_id' => random_int(0, 19),
        'technology_id' => random_int(0, 199),
        'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
    ];
});
