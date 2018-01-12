<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'last_login' => $faker->dateTime($max = 'now', $timezone = null),
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'sex' => 'Male',
        'age' => random_int(18, 66),
        'profile_picture' => $faker->url,
        'description' => $faker->paragraph(random_int(1, 3)),
        'stripe_id' => 1,
        'card_brand' => $faker->creditCardType,
        'card_last_four' => random_int(1000, 9999),
        'last_login' => $faker->dateTime($max = 'now', $timezone = null),
        'trial_ends_at' => $faker->dateTime($max = 'now', $timezone = null),
        'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
    ];
});
