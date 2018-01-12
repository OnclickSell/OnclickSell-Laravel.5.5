<?php

use Faker\Generator as Faker;

$factory->define(App\backend_plateform_list::class, function (Faker $faker) {
    return [
        'plateform' => $faker->firstNameFemale,
        'version' => random_int(1, 100000),
        'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        'updated_at' => $faker->dateTime($min = 'now', $timezone = null)
    ];
});
