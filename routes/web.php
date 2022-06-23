<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::view('/' , 'home');

Route::get('/products{filter?}' , [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}' , [ProductController::class, 'show'])->name('products.show');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove-item');
Route::patch('update-cart', [CartController::class, 'update'])->name('cart.update');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/orders', [OrderController::class , 'index'])->name('order.index');
    Route::post('/orders', [OrderController::class, 'store'])->name('order.store');
    Route::get('/orders/{order}', [OrderController::class , 'check'])->name('order.show');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
