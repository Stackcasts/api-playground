<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    public function customer() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function products() {
        return $this->belongsToMany('App\Product', 'order_products')
            ->withPivot([
                'quantity',
                'price',
            ]);
    }
}
