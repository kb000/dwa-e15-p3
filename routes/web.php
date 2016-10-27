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

Route::get('/', 'FrontendToolController@index')->name('FrontendTools.index');

Route::post('/user/generate', 'UserToolController@generate')->name('UserTools.generate');

Route::post('/ipsum/generate', 'IpsumToolController@generate')->name('IpsumTools.generate');
