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

Auth::routes();

Route::get('/', 'App\Http\Controllers\FrontendController@home')->name('home');

Route::get('/over', 'App\Http\Controllers\FrontendController@over')->name('over');

Route::get('/cart', 'App\Http\Controllers\FrontendController@cart')->name('cart');

Route::get('/profile', 'App\Http\Controllers\FrontendController@profile')->name('profile');

Route::get('/product', 'App\Http\Controllers\FrontendController@product')->name('product');

Route::get('/products', 'App\Http\Controllers\FrontendController@products')->name('products');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');