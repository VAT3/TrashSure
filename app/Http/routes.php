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



Route::get('/', 'MainController@index');

Route::get('/index', 'MainController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::post('login','LoginController@login');
Route::get('logout','LoginController@logout');

// MENU
Route::get('/TrashSure', 'MainController@home');
Route::get('/inventoryTPA', 'MainController@inventoryTPA');
Route::get('/inventoryTPS', 'MainController@inventoryTPS');
Route::get('/inventorySarana', 'MainController@inventorySarana');
Route::get('/inventoryPetugas', 'MainController@inventoryPetugas');
Route::get('/schedule', 'MainController@schedule');
Route::post('/assignSchedule', 'MainController@postAssignSchedule');
Route::get('/viewSchedule', 'MainController@viewSchedule');
Route::get('/laporan', 'MainController@laporan');

//ADD
Route::get('/addTPA', 'AddController@getAddTPA');
Route::post('/addTPA', 'AddController@postAddTPA');

Route::get('/addTPS', 'AddController@getAddTPS');
Route::post('/addTPS', 'AddController@postAddTPS');

Route::get('/addSarana', 'AddController@getAddSarana');
Route::post('/addSarana', 'AddController@postAddSarana');

Route::get('/addPetugas', 'AddController@getAddPetugas');
Route::post('/addPetugas', 'AddController@postAddPetugas');

//UPD
Route::get('/updTPA/{id}', 'UpdController@getUpdTPA');
Route::post('/updTPA/{id}', 'UpdController@postUpdTPA');

Route::get('/updTPS/{id}', 'UpdController@getUpdTPS');
Route::post('/updTPS/{id}', 'UpdController@postUpdTPS');

Route::get('/updSarana/{id}', 'UpdController@getUpdSarana');
Route::post('/updSarana/{id}', 'UpdController@postUpdSarana');

Route::get('/updPetugas/{id}', 'UpdController@getUpdPetugas');
Route::post('/updPetugas/{id}', 'UpdController@postUpdPetugas');

//DEL
Route::get('/delTPA/{id}', 'DelController@DelTPA');
Route::get('/delTPS/{id}', 'DelController@DelTPS');
Route::get('/delSarana/{id}', 'DelController@DelSarana');
Route::get('/delPetugas/{id}', 'DelController@DelPetugas');


Route::get('laporan', 'LaporanController@createLaporan');

//ISI VOLUME
Route::get('/isiVolume', 'MainController@getIsiVolume');
Route::post('/isiVolume', 'MainController@postIsiVolume');

//ASSIGN SARANA
Route::get('/assignSarana', 'MainController@getPenjadwalanSarana');
Route::post('/assignSarana', 'MainController@postPenjadwalanSarana');