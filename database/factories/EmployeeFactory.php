<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Employee;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        //

        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'birth_date' =>$faker->date($format = 'Y-m-d', $max = 'now'),
        'salary' => $faker->numberBetween($min = 1000, $max = 9000),
        'pass' => md5('123456'),
    ];
});
