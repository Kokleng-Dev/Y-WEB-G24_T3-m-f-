<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
use App\Http\Controllers\Backends\HomeController;
use App\Http\Controllers\Backends\UserController;


Route::group(['namespace' => 'Backends\\'], function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/detail', 'HomeController@detail')->name('detail');
});

Route::fallback(function(){
   return redirect()->route('home');
});
    