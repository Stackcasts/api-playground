<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $price = round($faker->randomFloat(2, 10, 999), 2);
    $salePrice = round($price * .75, 2);
    $name = str_replace('.', '', $faker->sentence());
    $slug = strtolower(str_replace(' ', '-', $name));

    return [
        'name' => $name,
        'slug' => $slug,
        'description' => $faker->paragraph(10),
        'price' => $price,
        'sale_price' => $salePrice,
        'currency_symbol' => '$',
        'currency_code' => 'USD',
        'inventory_count' => $faker->numberBetween(0, 1000),
        'sku' => 'SKU_' . $faker->numberBetween(0, 10000),
        'barcode' => $faker->numberBetween(999999999, 999999999999),
        'tags' => $faker->word() . ', ' . $faker->word() . ', ' . $faker->word(),
        'taxable' => $faker->boolean(),
    ];
});
