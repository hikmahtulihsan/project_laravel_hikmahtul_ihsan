<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// Route ke PageController
Route::get('/home', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
