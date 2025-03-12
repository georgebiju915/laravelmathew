<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $total_pendings = Order::where('payment_status', 'pending')->sum('total_price');
        $total_completed = Order::where('payment_status', 'completed')->sum('total_price');
        $number_of_orders = Order::count();
        $number_of_products = Product::count();
        $number_of_users = User::where('user_type', 'user')->count();
        $number_of_admins = User::where('user_type', 'admin')->count();
        $number_of_account = User::count();
        $number_of_messages = Message::count();

        return view('admin_page', compact(
            'total_pendings', 
            'total_completed', 
            'number_of_orders', 
            'number_of_products', 
            'number_of_users', 
            'number_of_admins', 
            'number_of_account', 
            'number_of_messages'
        ));
    }

    public function orders()
    {
        $orders = Order::all();
        return view('admin_orders', compact('orders'));
    }

    public function updateOrder(Request $request)
    {
        $order = Order::findOrFail($request->order_id);
        $order->payment_status = $request->update_payment;
        $order->save();

        return redirect()->back()->with('message', 'Payment status has been updated!');
    }

    public function deleteOrder($id)
    {
        Order::destroy($id);
        return redirect()->back();
    }

    public function users()
    {
        $users = User::all();
        return view('admin_users', compact('users'));
    }

    public function deleteUser($id)
    {
        User::destroy($id);
        return redirect()->back();
    }

    public function products()
    {
        $products = Product::all();
        return view('admin_products', compact('products'));
    }

    public function storeProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image|max:2048',
        ]);

        $image = $request->file('image')->store('uploaded_img', 'public');

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $image
        ]);

        return redirect()->back()->with('message', 'Product added successfully!');
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('uploaded_img', 'public');
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'image' => $image
            ]);
        } else {
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
            ]);
        }

        return redirect()->back()->with('message', 'Product updated successfully!');
    }

    public function deleteProduct($id)
    {
        Product::destroy($id);
        return redirect()->back();
    }

    public function contacts()
    {
        $messages = Message::all();
        return view('admin_contacts', compact('messages'));
    }

    public function deleteContact($id)
    {
        Message::destroy($id);
        return redirect()->back();
    }
}
