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

$factory->define(App\Bit::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigitNotNull,
        'bit_id' => $faker->randomDigitNotNull,
        'snippet' => $faker->paragraph,
    ];
});