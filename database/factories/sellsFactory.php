<?php

use Faker\Generator as Faker;

$factory->define(App\sells::class, function (Faker $faker) {
    return [
        'listing_id' => random_int(0, 199),
        'buyer_id' => random_int(0, 9),
        'amount_total' => $faker->randomFloat(2, 100, 500),
        'amount' => $faker->randomFloat(2, 100, 500),
        'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
    ];
});
