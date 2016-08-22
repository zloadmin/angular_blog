<?php


Route::get('/', 'PostController@index');

Route::get('/post/{id}', 'PostController@show');

