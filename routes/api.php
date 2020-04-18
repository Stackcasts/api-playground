<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return abort(403, 'View https://api-playground.stackcasts.com for usage details');
});

Route::get('/users', 'UsersController@index');
Route::get('/users/{id}', 'UsersController@show');
Route::post('/users', 'UsersController@store');
Route::delete('/users/{id}', 'UsersController@delete');
