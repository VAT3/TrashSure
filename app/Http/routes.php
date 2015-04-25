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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/TrashSure', 'MainController@index');
Route::get('/inventory', 'MainController@inventory');

Route::get('/addTPA', 'AddController@getAddTPA');
Route::post('/addTPA', 'AddController@postAddTPA');

Route::get('/addTPS', 'AddController@getAddTPS');
Route::post('/addTPS', 'AddController@postAddTPS');

Route::get('/addSarana', 'AddController@getAddSarana');
Route::post('/addSarana', 'AddController@postAddSarana');

Route::get('/addPetugas', 'AddController@getAddPetugas');
Route::post('/addPetugas', 'AddController@postAddPetugas');


Route::get('/delTPA/{id}', 'DelController@DelTPA');
Route::get('/delTPS/{id}', 'DelController@DelTPS');
Route::get('/delSarana/{id}', 'DelController@DelSarana');
Route::get('/delPetugas/{id}', 'DelController@DelPetugas');
// TPA
// Route::group(['prefix' => '/tpa'], function() {
// 	Route::get('/add','AddController@getAddTPA');
// });