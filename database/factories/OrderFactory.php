<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, config('factories.users_total')),
        'total' => round($faker->randomFloat(2, 10, 9999), 2),
    ];
});
