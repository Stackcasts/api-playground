<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return abort(403, 'View https://api-playground.stackcasts.com for usage details');
});

Route::get('/users', 'UsersController@index');
Route::get('/users/{id}', 'UsersController@show');
Route::post('/users', 'UsersController@store');
Route::put('/users/{id}', 'UsersController@update');
Route::delete('/users/{id}', 'UsersController@delete');

Route::get('/products', 'ProductsController@index');

Route::get('/orders', 'OrdersController@index');
