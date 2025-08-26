<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/about', [HomeController::class, 'about'])->name('home.about');

Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::get('/products', [ProductController::class, 'index'])->name('product.index');

Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');

Route::post('/products/save', [ProductController::class, 'save'])->name('product.save');

Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/cart', 'App\Http\Controllers\CartController@index')->name("cart.index");

Route::get('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name("cart.add");

Route::get('/cart/removeAll/', 'App\Http\Controllers\CartController@removeAll')->name("cart.removeAll");
Auth::routes();

Route::get('/image', 'App\Http\Controllers\ImageController@index')->name("image.index");

Route::post('/image/save', 'App\Http\Controllers\ImageController@save')->name("image.save");

Route::get('/image-not-di', 'App\Http\Controllers\ImageNotDIController@index')->name("imagenotdi.index");

Route::post('/image-not-di/save', 'App\Http\Controllers\ImageNotDIController@save')->name("imagenotdi.save");
