<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ListFilterController;



Route::view('/view', 'index')->name('index');

Route::view('/login', 'user.login')->name('user.login');


//Controllers

//movies
Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/show/{movie}', [MoviesController::class, 'show'])->name('movies.show');
Route::get('/search', [MoviesController::class, 'searchByName'])->name('movies.searchByName');
Route::get('/movies/filter/year', [MoviesController::class, 'filterByYear'])->name('movies.filterByYear');
Route::get('/movies/filter/sort', [MoviesController::class, 'filterBySort'])->name('movies.filterBySort');
Route::get('/movies/filter/genre', [MoviesController::class, 'filterByGenre'])->name('movies.filterByGenre');
Route::get('/movies/filter/keyword', [MoviesController::class, 'filterByKeyword'])->name('movies.filterByKeyword');

//user
Route::resource('user', UserController::class);

//lists
Route::middleware('auth')->group(function () {
    Route::get('/lists/create', [ListController::class, 'create'])->name('lists.create');
    Route::post('/lists/create', [ListController::class, 'create'])->name('lists.create');
    Route::post('/lists/store', [ListController::class, 'store'])->name('lists.store');
    Route::post('/lists/{listId}/add', [ListController::class, 'addMovie'])->name('lists.addMovie');
    Route::get('/lists/{list_id}/add', function ($list_id) {
        $list = Http::withToken(config('services.tmdb.token'))
                    ->get("https://api.themoviedb.org/3/list/{$list_id}")
                    ->json();

        return view('lists.add', ['list' => $list]);
    })->name('lists.add');
    Route::post('/lists/{listId}/add', [ListController::class, 'addMovie'])->name('lists.addMovie');
    Route::get('/lists/{list_name}/{list_id}/add-movie', [ListController::class, 'addMovieByName'])
    ->name('lists.addMovieByName');
    Route::post('/lists/{list_name}/{list_id}/add-movie', [ListController::class, 'addMovieByName'])
    ->name('lists.addMovieByName');
    Route::get('/lists/{id}/edit', [ListController::class, 'edit'])->name('lists.edit');
    Route::delete('/lists/{listId}/remove-movie', [ListController::class, 'removeMovie'])->name('lists.removeMovie');
    Route::delete('/lists/{listId}', [ListController::class, 'deleteList'])->name('lists.delete');
});


Route::middleware('auth')->group(function () {
    Route::get('/lists/{id}', [ListFilterController::class, 'show'])->name('lists.show');

    // Editar Lista
    Route::get('/edit-lists/{id}/edit', [ListFilterController::class, 'edit'])->name('lists.edit');
    Route::put('/edit-lists/{id}', [ListFilterController::class, 'update'])->name('lists.update');

    // Excluir Lista
    Route::delete('/delete-lists/{id}', [ListFilterController::class, 'deleteList'])->name('lists.delete');
    });



//profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

//login
Route::get('/login', [AuthController::class, 'index'])->name('user.login');
Route::post('/login', [AuthController::class, 'login']);
