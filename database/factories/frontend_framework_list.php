<?php

use Faker\Generator as Faker;

$factory->define(App\frontend_framework_list::class, function (Faker $faker) {
    return [
        'framework' => $faker->firstNameFemale,
        'version' => random_int(1, 100000),
        'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
    ];
});
