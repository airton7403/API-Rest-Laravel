<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Immobile;
use Faker\Generator as Faker;

$factory->define(Immobile::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 50),
        'title' => $faker->randomElement(['Casa', 'Chacara', 'Apartamento', 'Casa de condominio', 'Sobrado']),
        'description' => $faker->word,
        'immobile_billing' => $faker->randomFloat(2,420.15, 7000)
    ];
});
