<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('travel/search', 'TravelController@search');


Route::resource('travel', 'TravelController');

Route::post('travel/search', 'TravelController@results');
Route::group(['prefix' => 'api1'], function () {
    Route::get('travel/pages/{id}', 'Travel1Controller@pages');
    Route::resource('travel', 'Travel1Controller');
});

Route::group(['prefix' => 'api2'], function () {
    Route::get('travel/pages/{id}', 'Travel2Controller@pages');
    Route::resource('travel', 'Travel2Controller');
});
Route::resource('travel/page/{id}/{api}', 'TravelController@page');