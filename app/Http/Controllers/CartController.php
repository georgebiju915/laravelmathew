<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();

        // Count the number of items in the cart for the logged-in user
        $cart_count = DB::table('cart')->where('user_id', $user_id)->count();

        // Retrieve cart items
        $cart_items = DB::table('cart')->where('user_id', $user_id)->get();

        return view('cart', ['cart_items' => $cart_items, 'cart_count' => $cart_count]);
    }
}
