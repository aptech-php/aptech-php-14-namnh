<?php

Route::get('/layTatCaNguoiDung', 'UserController@layTatCaNguoiDung');

Route::get('/layMotNguoiDung/{id}', 'UserController@layMotNguoiDung');

Route::post('/xoaNguoiDung/{id}', 'UserController@xoaNguoiDung');
