<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $user_id = session('user_id');
        $orders = Order::where('user_id', $user_id)->get();
        return view('orders', compact('orders'));
    }
}
