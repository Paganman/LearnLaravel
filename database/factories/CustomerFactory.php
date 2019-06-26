<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    $employees = DB::table('employees')->pluck('employeeNumber');

    return [
        'customerNumber' => $faker->isbn13(),
        'customerName' => $faker->name(),
        'customerLastName' => $faker->lastName(),
        'customerFirstName' => $faker->firstName(),
        'phone' => $faker->tollFreePhoneNumber(),
        'addressLine1' => $faker->streetAddress(),
        'addressLine2' => $faker->streetAddress(),
        'city' => $faker->city(),
        'state' => $faker->numberBetween($min = 10, $max = 30),
        'postCode' => $faker->postcode(),
        'country' => $faker->country(),
        'saleRepEmployeeNumber'=> $faker->randomElement($employees),
        'creditLimit' => $faker->numberBetween($min = 20, $max = 80),
    ];
});
