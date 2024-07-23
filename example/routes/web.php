<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/input', function(){
    return view('input');
});

Route::get('/user', function(){
    return view('users.index');
});