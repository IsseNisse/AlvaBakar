<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest()->get();
        return view('orders.index', ['orders' => $orders]);
    }

    public function show(Order $order) 
    {
        return view('orders.show', ['order' => $order]);
    }
}
