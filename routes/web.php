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
Auth::routes();
Route::get('/', function () {
	return view('main');
});

Route::get('/{user}', 'UsersController@profile');
Route::get('/{user}/feedback', 'UsersController@feedback');

Route::post('/feedback', 'ReviewsController@store');

Route::get('/searchuser', 'UsersController@search');
