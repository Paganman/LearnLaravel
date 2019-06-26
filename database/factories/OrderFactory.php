<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    $custommers = DB::table('customers')->pluck('customerNumber');
    return [
        'orderNumber' => $faker->ean8(),
        'orderDate' => $faker->DateTime(),
        'requiredDate' => $faker->DateTime(),
        'shippedDate' => $faker->DateTime(),
        'status' => $faker->numberBetween($min = 10, $max = 20),
        'comment' => $faker->text(50),
        'customerNumber' => $faker->randomElement($custommers)
    ];
});
