<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/about', [HomeController::class, 'about'])->name('home.about');

Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::get('/products', [ProductController::class, 'index'])->name('product.index');

Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');

Route::get('/products/save', [ProductController::class, 'save'])->name('product.save');

Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');
