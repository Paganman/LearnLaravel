<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $productLine = DB::table('productlines')->pluck('productLine');
    
    return [
        'productCode' => $faker->isbn13(),
        'productName' => $faker->name(),
        'productLine' => $faker->randomElement($productLine),
        'productScale' => $faker->text($maxNbChars = 100),
        'productVendor' => $faker->catchPhrase(),
        'productDescription' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'quantityInStock' => $faker->numberBetween($min = 1000, $max = 9000),
        'buyPrice' => $faker->numberBetween($min = 10, $max = 200),
        'MSRP' => $faker->numberBetween($min = 40000, $max = 50000)
    ];
});
