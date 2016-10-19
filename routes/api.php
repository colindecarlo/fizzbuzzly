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

Route::group(['prefix' => '/fizzbuzz'], function () {
    Route::get('/', ['as' => 'fizzbuzz.index', 'uses' => 'FizzBuzzController@index']);
    Route::get('{id}', ['as' => 'fizzbuzz.show', 'uses' => 'FizzBuzzController@show']);
});
