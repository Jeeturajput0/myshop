<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('category', [CategoryController::class, 'index']);
Route::get('category/create', [CategoryController::class, 'create']);
Route::post('category/store', [CategoryController::class, 'store']);
