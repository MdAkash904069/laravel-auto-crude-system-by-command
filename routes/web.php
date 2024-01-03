<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('products', \App\Http\Controllers\ProductController::class);
Route::resource('categorys', \App\Http\Controllers\CategoryController::class);
Route::resource('brands', \App\Http\Controllers\BrandController::class);