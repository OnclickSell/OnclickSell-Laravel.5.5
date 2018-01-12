<?php

use Faker\Generator as Faker;

$factory->define(App\reviews::class, function (Faker $faker) {
    return [
        'user_id' => random_int(0, 9),
        'listing_id' => random_int(0, 199),
        'review' => $faker->text(700),
        'rating' => random_int(0, 1000),
        'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
    ];
});
