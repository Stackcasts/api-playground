<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', 'UsersController@index');
