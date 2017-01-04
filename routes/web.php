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

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

//Route::get('/login','LoginController@showLoginForm')->middleware('guest');
Auth::routes();


Route::get('/{username}/dashboard', 'DashboardController@index');
Route::get('/{username}/addchild','ChildController@create');	
Route::resource('child','ChildController');
