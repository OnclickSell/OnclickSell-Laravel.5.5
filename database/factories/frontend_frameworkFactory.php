<?php

use Faker\Generator as Faker;

$factory->define(App\frontend_frameworks::class, function (Faker $faker) {
    return [
        'frontend_framework_id' => random_int(0, 19),
        'technology_id' => random_int(0, 199),
        'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
    ];
});
