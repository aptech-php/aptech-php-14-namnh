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
    return view('welcome');
});
Route::get('/users/admin/login', 'UserController@login')->name('users.login');
Route::get('/users/create', 'UserController@create')->name('users.create');
Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/users/{id}', 'UserController@show')->name('users.show');
Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');
Route::put('users/{id}', 'UserController@update')->name('users.update');
//Route::get('/user', 'UserController@run');
// Route::get('/user', 'UserController');
//Route::get('/users', 'UserController@run');
Route::post('/users', 'UserController@store')->name('users.store');
Route::get('/user/{id}', 'UserController@user');
//Route::post('/xoanguoidung/{id}', 'UserController@xoanguoidung');
Route::delete('/users/{id}', 'UserController@destroy')->name('user.destroy');



Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/{id}', 'PostController@show')->name('posts.show');
Route::post('/posts', 'PostController@store')->name('posts.store');
Route::delete('/posts/{id}', 'PostController@destroy')->name('posts.destroy');
//posts.create