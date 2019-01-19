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

Route::get('/', 'controller@traLaiViewWelcome');
Route::get('/thanh', function () {
    return view('thanhtnq');
});
Route::get('/users', 'UserController@index');
Route::get('/users/create', 'UserController@create');
Route::get('/users/{id}', 'UserController@show');
Route::get('/users/{id}/edit', 'UserController@edit');
Route::get('/users/{id}/delete', 'UserController@destroy');

