<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// routes/web.php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaymentController;

// Route::get('/payment/index',  function () {
//         return view('products.paypal');
//     });

// Route::get('/payment/process', [PaymentController::class, 'process'])->name('payment.process');

Route::get('/', [ProductController::class, 'index'])->name('index');
Route::get('/cart/get', [ProductController::class, 'getCart'])->name('cart.get');

Route::post('/cart/add', [ProductController::class, 'addToCart'])->name('cart.add');
// Route::post('/order/checkout', [ProductController::class, 'checkout'])->name('order.checkout');

// Route::get('/payment', [PaymentController::class, 'showPaymentForm'])->name('payment');
Route::post('/payment', [PaymentController::class, 'makePayment'])->name('payment.makePayment');
Route::get('/payment/success', [PaymentController::class, 'paymentSuccess'])->name('payment.success');
Route::get('/payment/failure', [PaymentController::class, 'paymentFailure'])->name('payment.failure');
