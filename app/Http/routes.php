<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/test-command', 'Controller@testCommand');

Route::group(['as' => 'post', 'prefix' => 'post'], function () {
    Route::get('create', 'PostController@create');
    Route::get('store', 'PostController@store');
});

Route::get('/', function () {
    return view('welcome');
});
