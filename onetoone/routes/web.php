<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

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


Route::get('/','ProductController@index')->name('productIndex');

Route::get('/create','ProductController@create')->name('productCreate');

Route::post('/store','ProductController@store')->name('productStore');

Route::get('/edit{product_id}','ProductController@edit')->name('productEdit');

Route::post('/update{product_id}','ProductController@update')->name('productUpdate');

Route::get('/destroy{product_id}','ProductController@delete')->name('productDelete');

Route::get('/show{product_id}','ProductController@show')->name('productShow');
