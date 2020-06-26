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
