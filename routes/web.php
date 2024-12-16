<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListController;


Route::view('/view', 'index')->name('index');

Route::view('/login', 'user.login')->name('user.login');

Route::view('/profile', 'profile');

//Controllers

//movies
Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/show/{movie}', [MoviesController::class, 'show'])->name('movies.show');
Route::get('/search/{movie}', [MoviesController::class, 'searchByName'])->name('movies.searchByName');

//user
Route::resource('user', UserController::class);

//lists
Route::get('/lists/create', [ListController::class, 'create'])->name('lists.create');
Route::post('/lists', [ListController::class, 'store'])->name('lists.store');

//login
// Route::middleware('auth')->group(function(){
//     Route::get('/login', 'user.login', function(){
//         return view('user.login');
//     });
// });
