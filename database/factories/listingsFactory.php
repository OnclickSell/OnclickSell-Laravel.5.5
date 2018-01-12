<?php

use Faker\Generator as Faker;

$factory->define(App\listings::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'summary' => $faker->text($maxNbChars = 200) ,
        'description' => $faker->text($maxNbChars = 200),
        'user_id' => random_int(0, 10),
        'plan_id' => random_int(0, 2),
        'completed' => random_int(0, 1)
    ];
});
