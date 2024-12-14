<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;



Route::view('/view', 'index')->name('index');

Route::view('/create', 'create')->name('create');

Route::view('/login', 'login')->name('login');

Route::view('/profile', 'profile');

//Controllers

Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/show/{movie}', [MoviesController::class, 'show'])->name('movies.show');
Route::get('/search/{movie}', [MoviesController::class, 'searchByName'])->name('movies.searchByName');
// Route::get('/show/{movie}', 'MoviesController@show')->name('movies.show');
