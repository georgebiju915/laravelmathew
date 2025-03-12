<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
            $search = $request->input('search');
            $products = Product::where('name', 'like', "%$search%")->get();
            return view('search_page', compact('products'));
    }

    public function addToCart(Request $request)
    {
        $user_id = session('user_id');
        
        $product_name = $request->product_name;
        $product_price = $request->product_price;
        $product_image = $request->product_image;
        $product_quantity = $request->product_quantity;

        $cartItem = Cart::where('name', $product_name)->where('user_id', $user_id)->first();

        if ($cartItem) {
            session()->flash('message', 'already added to cart!');
        } else {
            Cart::create([
                'user_id' => $user_id,
                'name' => $product_name,
                'price' => $product_price,
                'quantity' => $product_quantity,
                'image' => $product_image
            ]);
            session()->flash('message', 'product added to cart!');
        }

        return redirect()->back();
    }
}