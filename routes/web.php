<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\UserController;


Route::view('/view', 'index')->name('index');




Route::view('/login', 'user.login')->name('user.login');

Route::view('/profile', 'profile');

//Controllers

Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/show/{movie}', [MoviesController::class, 'show'])->name('movies.show');
Route::get('/search/{movie}', [MoviesController::class, 'searchByName'])->name('movies.searchByName');
Route::resource('user', UserController::class);
