<?php
Route::get('/', function () {
    return view('welcome');
});



Route::get('/users', 'UserController@index')->name('users.index');

Route::get('/users/create', 'UserController@create')->name('users.create');

Route::get('/users/{id}', 'UserController@show')->name('users.show');

Route::delete('/users/{id}', 'UserController@destroy')->name('users.destroy');

Route::post('/users', 'UserController@store')->name('users.store');

Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');

Route::put('users/{id}', 'UserController@update')->name('users.update');
