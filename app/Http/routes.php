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

Route::get('/', 'ClientController@index');

Route::get('home', 'HomeController@index');

Route:get('/client/create', 'ClientController@create');
Route::post('/client/create', 'ClientController@store');

// edit / update client data
Route::get('/client/{id}/edit', 'ClientController@edit');
Route::post('/client/{id}/edit', 'ClientController@update');

Route::get('client/{id}', 'ClientController@show');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
