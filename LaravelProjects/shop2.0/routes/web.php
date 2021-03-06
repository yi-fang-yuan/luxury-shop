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
Route::get('/','mainController@index')->name('mainPage');

Route::get('/shop/gucci','gucciController@index')->name('shop.index');
Route::get('/shop/{product}','gucciController@show')->name('shop');

Route::get('/cart','CartController@index')->name('cart.index');
Route::post('/cart','CartController@store')->name('cart.store');
Route::put('/cart/{product}','CartController@update')->name('cart.update');
Route::delete('/cart/{delete}','CartController@delete')->name('cart.delete');

Route::get('/checkout','CheckOutController@index')->name('checkout.index');
Route::post('/checkout','CheckOutController@store')->name('checkout.store');
Route::get('/paid','paidController@index')->name('paid.index');
