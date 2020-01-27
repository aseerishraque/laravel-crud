<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $categories = App\Category::pluck('id')->toArray();
    return [
        'name' => $faker->name,
        'categoryId' => $faker->randomElement($categories),
        'price' => $faker->numberBetween($min = 100, $max = 1000),
    ];
});
