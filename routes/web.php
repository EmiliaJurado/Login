<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products', [ProductsController::class, 'products'])->name('products');
Route::get('product-detail/{id}', [ProductsController::class, 'detail']);
Route::get('cart', [ProductsController::class, 'cart']);
Route::get('add-to-cart/{id}', [ProductsController::class, 'addToCart']);
