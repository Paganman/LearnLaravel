<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Office;
use Faker\Generator as Faker;

$factory->define(Office::class, function (Faker $faker) {
    return [
        'officeCode' => $faker->isbn13(),
        'city' => $faker->city(40),
        'phone' => $faker->tollFreePhoneNumber(),
        'addressLine1' => $faker->streetAddress(),
        'addressLine2' => $faker->streetAddress(),
        'state' => $faker->numberBetween($min = 0, $max = 50),
        'country' => $faker->country(40),
        'postCode' => $faker->postcode(),
        'temitory' => $faker->stateAbbr(),
    ];
});
