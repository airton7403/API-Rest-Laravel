<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UserProfile;
use Faker\Generator as Faker;

$factory->define(UserProfile::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween(1,50),
        'phone' => $faker->phoneNumber,
        'mobile_phone' => $faker->phoneNumber,
        'individual_legal_registration' => "22.931.478/0001-78",
        'kind_person' => $faker->numberBetween(1, 2),
        'logo_photo' => $faker->imageUrl($width = 480, $height = 360),
        'facebook' => '',
        'twitter' => '',
        'instagram' => '',
        'address' => $faker->streetName,
        'address_number' => $faker->buildingNumber,
        'address_complement' => $faker->secondaryAddress,
        'state' => $faker->state,
        'city' => $faker->city,
        'neighborhood' => $faker->streetSuffix,
        'postcode' => $faker->postcode,
        'slug' => $faker->slug,
    ];
});
