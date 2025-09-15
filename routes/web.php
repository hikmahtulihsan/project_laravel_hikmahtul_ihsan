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
