<?php

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

Route::get('/home', 'HomeController@index')->name('home');

// Product routing
Route::get('/product', 'ProductController@index')->name('product.home');
Route::get('/product/create', 'ProductController@create')->name('product.create');
Route::post('/product/', 'ProductController@store')->name('product.store');
Route::get('/product/{product}/edit', 'ProductController@edit')->name('product.edit');
Route::post('/product/{product}/update', 'ProductController@update')->name('product.update');
Route::post('/product/{product}/delete', 'ProductController@destroy')->name('product.destroy');
