<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::view('/' , 'home');


Route::get('/products{filter?}' , [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}' , [ProductController::class, 'show'])->name('products.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
