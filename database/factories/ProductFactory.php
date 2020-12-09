<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'detail' => $faker->paragraph,
        'price'  => $faker->numberBetween(100,500),
        'stock'  => $faker->numberBetween(30,100),
        'discount' => $faker->numberBetween(10,15)
    ];
});
