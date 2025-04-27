<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Livewire\Volt\Volt;

// Route untuk menampilkan daftar produk
Route::get('/', [ProductController::class, 'index'])->name('products.index');

// Route untuk menampilkan detail produk
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');