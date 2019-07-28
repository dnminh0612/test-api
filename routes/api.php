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

Route::group(['middleware' => ['cors']], function () {
    Route::get('/minh/test', 'TestController@test')->name('minh.test');
    Route::get('/minh/test/{user}', 'TestController@show')->name('minh.test.show');
    Route::get('/products/list', 'ProductsController@index')->name('product.list');
    Route::get('/products/details/{id}', 'ProductsController@show')->name('product.show');
    Route::post('/products/create', 'ProductsController@store')->name('product.create');
});
