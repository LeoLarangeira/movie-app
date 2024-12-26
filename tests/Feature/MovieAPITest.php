<?php

use Illuminate\Support\Facades\Http;

test('Api Connection', function () {
    $popularMovies = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/popular')
        ->json()['results'];

    expect($popularMovies)->toBeArray();
});
