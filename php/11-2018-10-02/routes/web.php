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

Route::get('/users', 'UserController@index')->name('users.index'); // get all users from db

Route::get('/users/create', 'UserController@create')->name('users.create');

Route::get('/users/{id}', 'UserController@show')->name('users.show');

Route::delete('/users/{id}', 'UserController@destroy')->name('users.destroy');

Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');

Route::put('/users/{id}', 'UserController@update')->name('users.update');

Route::post('users/store', 'UserController@store')->name('users.store');

// Route::get('/users/create','User')
// Route::resource('/users', 'UserController');

// php artisan route:list
Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::get('posts/{id}', 'PostController@show')->name('posts.show');
Route::post('posts/store', 'PostController@store')->name('posts.store');
