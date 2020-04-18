<?php

use Illuminate\Support\Facades\Route;

Route::get('/users', 'UsersController@index');
Route::get('/users/{id}', 'UsersController@show');
