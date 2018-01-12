<?php

use Faker\Generator as Faker;

$factory->define(App\comments::class, function (Faker $faker) {
    return [
        'comment' => $faker->text(200),
        'user_id' => random_int(0, 19),
        'listing_id' => random_int(0, 199),
        'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
    ];
});
