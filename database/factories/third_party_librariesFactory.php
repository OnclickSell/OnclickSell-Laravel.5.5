<?php

use Faker\Generator as Faker;

$factory->define(App\third_party_libraries::class, function (Faker $faker) {
    return [
        'library_id' => random_int(0, 19),
        'technology_id' => random_int(0, 199)
    ];
});
