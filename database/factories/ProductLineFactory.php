<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ProductLine;
use Faker\Generator as Faker;

$factory->define(ProductLine::class, function (Faker $faker) {
    return [
        'productLine' => $faker->ean8(),
        'textDescription' => $faker->text(20),
        'htmlDescription' => $faker->randomHtml(2,3),
        'images' => $faker->imageUrl($width = 640, $height = 480),
    ];
});
