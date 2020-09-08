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

Route::group(['namespace' => 'Country'], function () {

    // Countries
    Route::get('/', 'CountriesWithDataController@index')->name('countries.index');
    Route::post('country', 'CountriesWithDataController@store')->name('countries.store');
    Route::get('country/create', 'CountryController@create')->name('countries.create');
    Route::put('country/{id}', 'CountriesWithDataController@update')->name('countries.update');
    Route::get('country/edit/{id}', 'CountriesWithDataController@edit')->name('countries.edit');
    Route::get('country/{id}', 'CountriesWithDataController@show')->name('countries.show');
    Route::delete('country/delete/{id}', 'CountriesWithDataController@destroy')->name('countries.destroy');
});
