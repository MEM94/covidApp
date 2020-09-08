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

//GET DATA FROM EXTERNAL API
Route::group(['namespace' => 'Api\V1'], function () {
    Route::get('fill_data', 'FillDataApiController@index')->name('getData');
});
