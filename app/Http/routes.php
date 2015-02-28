<?php

Route::get('/', 'ClientController@index');

Route::get('home', 'HomeController@index');

Route::get('/client/create', 'ClientController@create');
Route::post('/client/create', 'ClientController@store');

// edit / update client data
Route::get('/client/{id}/edit', 'ClientController@edit');
Route::post('/client/{id}/edit', 'ClientController@update');

Route::get('client/{id}', 'ClientController@show');

// client ytd form routes
Route::get('/client/ytd/data', 'YtdController@create');
Route::post('/client/{id}/ytd/data', 'ClientController@storeYtdData');

// completes data
Route::post('/client/{id}/completes/data', 'ClientController@storeCompletesData');

// surveys data
Route::post('/client/{id}/surveys/data', 'ClientController@storeSurveysData');

// support data
Route::post('/client/{id}/support/data', 'ClientController@storeSupportData');

// Email Campaign data
Route::post('/client/{id}/campaign/data', 'ClientController@storeEmailCampaignData');

// Email Sent Data
Route::post('/client/{id}/sent/data', 'ClientController@storeEmailSentData');

// Helpdesk data
Route::post('/client/{id}/helpdesk/data', 'ClientController@storeHelpdeskData');

//search
Route::get('/search', 'ClientController@search');

//Route::get('/spreadsheet', 'ClientController@spreadsheet');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
