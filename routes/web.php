<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::redirect('/', '/products');

Route::get('/products',[ProductController::class,'index'])->name('product.index');
Route::get('/products/create',[ProductController::class,'create'])->name('product.create');
Route::post('/products',[ProductController::class, 'store'])->name('product.store');
Route::get('/products/{product}/edit',[ProductController::class,'edit'])->name('product.edit');
Route::put('/products/{product}/update',[ProductController::class,'update'])->name('product.update');
Route::delete('/products/{product}/destroy',[ProductController::class,'destroy'])->name('product.destroy');
Route::get('/products/{product}', 'App\Http\Controllers\ProductController@show')->name('product.show');


// // web.php or api.php
// Route::get('/products/{product}/edit', 'ProductController@edit')->name('product.edit');
// Route::put('/products/{product}', 'ProductController@update')->name('product.update');
