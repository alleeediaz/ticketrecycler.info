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

Route::get('/', function () {
    // return view('welcome');
    return view('index');
});

Route::get('', function () {
    // return view('welcome');
    return view('index');
});


Route::get('holamundo', function () {
    return 'hola wero';
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Test mailgun.org
Route::get('test/mailgun', 'Test\TestController@testMailgun');

// Test mailgun.org
Route::get('test/database', 'Test\TestController@testDatabase');
Route::auth();

Route::get('/home', 'HomeController@index');
