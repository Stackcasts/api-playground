<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index() {
        $orders = Order::with('customer')
            ->with('products')
            ->paginate(20);

        return response()->json($orders);
    }
}
