<?php

use App\Http\Controllers\Cart;
use App\Http\Controllers\Product;
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
    return view('home');
})->name('home');

Route::get('/products', [Product::class, 'all'])
    ->middleware('web')
    ->name('products');

Route::get('/product/{slug}', [Product::class, 'prod'])
    ->middleware('web')
    ->name('product');

Route::get('/cart', [Cart::class, 'view'])
    ->middleware('auth')
    ->name('cart');

Route::get('/education', function () {
    return view('education');
})->name('education');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
