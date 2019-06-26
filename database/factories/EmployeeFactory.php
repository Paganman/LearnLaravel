<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
	$office = DB::table('offices')->pluck('officeCode');

    return [
        'employeeNumber' => $faker->tollFreePhoneNumber(),
        'lastname' => $faker->lastName(),
        'firstName' => $faker->firstNameMale(),
        'extention' => $faker->word(5),
        'email' => $faker->email(),
        'officeCode' => $faker->randomElement($office),
        'reportTo' => $faker->lastName(),
        'jobTitle' => $faker->jobTitle(),
    ];
});
