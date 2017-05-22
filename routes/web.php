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

Route::get('/', function () {
	return view('home');
});

// Route::get('/index', 'HomepageController@index');
Route::get('/index', function () {
	return view('layouts.master');
});

Route::get('/register', 'RegistrationController@register');
Route::post('/register', 'RegistrationController@store');

Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');
Route::get('/logout','SessionsController@destroy');


Route::get('/dashboard/profile', 'ProfileController@show');
Route::post('/dashboard/profile', 'ProfileController@update');

Route::get('/dashboard', 'AdminController@index');
Route::get('/dashboard/users', 'AdminController@users');
Route::post('/dashboard/users', 'AdminController@destroyUser');
Route::get('/dashboard/adverification', 'AdminController@adverif');



// Route::get('/protected', ['middleware' => ['auth', 'admin'], function() {
//     return "this page requires that you be logged in and an Admin";
// }]);
