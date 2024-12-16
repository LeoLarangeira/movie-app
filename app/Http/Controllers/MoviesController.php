<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    public function index(){
        $popularMovies = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/popular')
            ->json()['results'];
        return view('index',['popularMovies' => $popularMovies]);
    }
    public function show(string $id)
    {
        $showMovie = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/movie/'. $id)->json();
        return view('show', [
            "movie" => $showMovie
        ]);
    }

    public function searchByName(Request $request){
        $movieName = $request->query('movie');
        $showMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/search/movie', [
                'query' => $movieName,
            ])
            ->json()['results'];
        return view('search',['popularMovies' => $showMovies]);
    }
    public function filterByYear(Request $request){
        $year = $request->query('year');

        $movies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/discover/movie', [
                'primary_release_year' => $year,
            ])
            ->json()['results'] ?? [];

        return view('search', ['popularMovies' => $movies]);
    }

    public function filterBySort(Request $request){
        $sortBy = $request->query('sort_by', 'popularity.desc');

        $movies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/discover/movie', [
                'sort_by' => $sortBy,
            ])
            ->json()['results'] ?? [];

        return view('search', ['popularMovies' => $movies]);
    }
    public function filterByGenre(Request $request){
        $genreName = $request->query('genre');
        $listGenre = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/genre/movie/list')
        ->json()['genres'];
        $genreId = null;
        foreach ($listGenre as $genre) {
            if (strtolower($genre['name']) == strtolower($genreName)) {
                $genreId = $genre['id'];
                break;
            }
        }
        $movies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/discover/movie', [
                'with_genres' => $genreId,
            ])
            ->json()['results'] ?? [];
        return view('search', ['popularMovies' => $movies]);
    }


    public function filterByKeyword(Request $request){
        $keyword = $request->query('keyword');

        $movies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/search/movie', [
                'query' => $keyword,
            ])
            ->json()['results'] ?? [];

        return view('search', ['popularMovies' => $movies]);
    }

}
