<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/index', [Productcontroller::class, 'index'])->name('products.index');
Route::get('/product/create', [Productcontroller::class, 'create'])->name('products.create');
Route::get('/product/delete/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/product/show/{id}', [ProductController::class, 'show'])->name('products.show');
Route::post('/product/store', [ProductController::class, 'store'])->name('products.store');

Route::get('/product/index', [Productcontroller::class, 'index'])->name('products.index');
Route::get('/product/create', [Productcontroller::class, 'create'])->name('products.create');
Route::get('/product/delete/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/product/show/{id}', [ProductController::class, 'show'])->name('products.show');
Route::post('/product/store', [ProductController::class, 'store'])->name('products.store');

