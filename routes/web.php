<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show', function(){
    return view('show');
});

Route::view('/view', 'index');

Route::view('/create', 'create');

Route::view('/login', 'login');

Route::view('/profile', 'profile');


