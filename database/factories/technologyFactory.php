<?php

use Faker\Generator as Faker;

$factory->define(App\technologies::class, function (Faker $faker) {
    return [
        'listing_id' => random_int(0, 200)
    ];
});
