<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\User;

// Route JSON (mentah)
Route::get('/products-json', function () {
    return Product::all();
});

Route::get('/users-json', function () {
    return User::all();
});

// Route pakai blade view
Route::get('/products', function () {
    $products = Product::all();
    return view('products.index', compact('products'));
});

Route::get('/users', function () {
    $users = User::all();
    return view('users.index', compact('users'));
});
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
