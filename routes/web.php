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

Route::get('/', 'TeamsController@index');

Route::get('/teams/{id}', 'TeamsController@show');

Route::get('/players/{id}', 'PlayersController@show');

Route::get('/register', 'RegistrationController@index');
Route::post('/register', 'RegistrationController@register');

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

Route::post('/teams/{id}/comment', 'CommentsController@store');	

Route::post('/user/activate/{id}', 'UsersController@activate');

Route::get('/welcome', function() {
	return view('welcome');
});
