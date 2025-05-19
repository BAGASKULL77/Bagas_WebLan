<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\AdminController;
Route::get('/', [ProductController::class, 'index'])->name('home');;
// Route untuk menampilkan daftar produk
Route::get('/', [ProductController::class, 'index'])->name('products.index');
// Route untuk menampilkan detail produk
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/admin', [AdminController::class, 'create']);
Route::post('/admin', [AdminController::class, 'store']);
Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/gallery', function () {
    return view('gallery');
});