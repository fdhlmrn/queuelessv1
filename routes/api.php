<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/product', 'ProductController@index');
Route::get('/product/{product}/edit', 'ProductController@edit');
Route::post('/product/', 'ProductController@store');
Route::put('/product/{product}/update', 'ProductController@update');
Route::post('/product/{product}/delete', 'ProductController@destroy');
