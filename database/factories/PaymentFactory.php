<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    $custommers = DB::table('customers')->pluck('customerNumber');

    return [
        'customerNumber' => $faker->unique()->randomElement($custommers),
        'checkNumber' => $faker->e164PhoneNumber(),
        'paymentDate' => $faker->DateTime(),
        'amount' => $faker->numberBetween($min = 20, $max = 200),
    ];
});
