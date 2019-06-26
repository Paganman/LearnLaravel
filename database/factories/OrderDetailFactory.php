<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\OrderDetail;
use Faker\Generator as Faker;

$factory->define(OrderDetail::class, function (Faker $faker) {
    $orders = DB::table('orders')->pluck('orderNumber');
    $products = DB::table('products')->pluck('productCode');

    return [
    	'orderNumber' => $faker->randomElement($orders),
        'productCode' => $faker->randomElement($products),
        'quantityOrdered' => $faker->numberBetween($min = 1, $max = 10),
        'priceEach' => $faker->numberBetween($min = 20, $max = 200),
        'orderLineNumber' => $faker->text(10),
    ];
});
