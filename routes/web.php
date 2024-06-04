<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// routes/web.php
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index'])->name('index');
Route::post('/cart/add', [ProductController::class, 'addToCart'])->name('cart.add');
Route::post('/order/checkout', [ProductController::class, 'checkout'])->name('order.checkout');
