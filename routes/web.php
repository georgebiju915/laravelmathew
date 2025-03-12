<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/orders', [AdminController::class, 'orders'])->name('orders');
    Route::post('/orders/update', [AdminController::class, 'updateOrder'])->name('orders.update');
    Route::get('/orders/delete/{id}', [AdminController::class, 'deleteOrder'])->name('orders.delete');
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::get('/users/delete/{id}', [AdminController::class, 'deleteUser'])->name('users.delete');
    Route::get('/products', [AdminController::class, 'products'])->name('products');
    Route::post('/products/store', [AdminController::class, 'storeProduct'])->name('products.store');
    Route::post('/products/update/{id}', [AdminController::class, 'updateProduct'])->name('products.update');
    Route::get('/products/delete/{id}', [AdminController::class, 'deleteProduct'])->name('products.delete');
    Route::get('/contacts', [AdminController::class, 'contacts'])->name('contacts');
    Route::get('/contacts/delete/{id}', [AdminController::class, 'deleteContact'])->name('contacts.delete');
});
Route::get('shop', [ShopController::class, 'index']);
Route::post('add_to_cart', [ShopController::class, 'addToCart']);

Route::get('search_page', [SearchController::class, 'index']);
Route::post('search_page', [SearchController::class, 'index']);
Route::post('add_to_cart', [SearchController::class, 'addToCart']);

Route::get('orders', [OrderController::class, 'index']);

Route::get('logout', [LogoutController::class, 'logout']);
Route::get('/', function () {
    return view('home');
})->name('home');

// User routes
Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

// Product routes
Route::get('/shop', [ProductController::class, 'index'])->name('shop');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

// Cart routes
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart/delete/{id}', [CartController::class, 'delete'])->name('cart.delete');
Route::get('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');

// Order routes
Route::get('/orders', [OrderController::class, 'index'])->name('orders');
Route::post('/order/place', [OrderController::class, 'place'])->name('order.place');
Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');

// Message routes
Route::get('/contact', [MessageController::class, 'showContactForm'])->name('contact');
Route::post('/contact', [MessageController::class, 'send'])->name('contact.send');