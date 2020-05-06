<?php

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
    }
}
