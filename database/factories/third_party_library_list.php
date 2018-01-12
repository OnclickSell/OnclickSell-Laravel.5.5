<?php

use Faker\Generator as Faker;

$factory->define(App\third_party_library_list::class, function (Faker $faker) {
    return [
        'library_name' => $faker->name,
        'version' => random_int(1, 1000),
        'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
    ];
});
