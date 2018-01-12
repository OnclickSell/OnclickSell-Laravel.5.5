<?php

use Faker\Generator as Faker;

$factory->define(App\plans::class, function (Faker $faker) {
    return [
        'plan_name' => $faker->name,
        'summary' => $faker->paragraph(random_int(1, 3)),
        'description' => $faker->paragraph(random_int(2, 3)),
        'period' => random_int(20, 30),
        'colour_code' => $faker->safeColorName,
        'flate_rate' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1),
        'variable_charge' => random_int(10, 30),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 30, $max = 60),
        'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        'updated_at' => $faker->dateTime($max = 'now', $timezone = null) 
    ];
});
