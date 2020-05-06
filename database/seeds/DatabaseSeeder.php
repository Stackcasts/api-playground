<?php

use App\Order;
use App\Product;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User', config('factories.users_total'))->create();
        factory('App\Product', config('factories.products_total'))->create();
        factory('App\Order', config('factories.orders_total'))->create();
        $this->attachProducts();
    }

    protected function attachProducts() {
        $faker = Faker::create();

        $orders = Order::all();

        foreach ($orders as $order) {
            $products = Product::all()->random($faker->numberBetween(1, 3));
            $total = 0;

            foreach ($products as $product) {
                $quantity = $faker->numberBetween(1, 3);
                $price = $quantity * $product->price;
                $total+= $price;

                $order->products()->attach($product->id, [
                    'quantity' => $quantity,
                    'price' => $price,
                ]);
            }

            $order->total = $total;
            $order->save();
        }
    }
}
