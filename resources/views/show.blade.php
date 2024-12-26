@extends('layouts.main')


@section('content')
    <br>
    <div class="movie-info max-w-6xl mx-auto border-gray-800 rounded-lg shadow-lg overflow-hidden flex flex-col md:flex-row pt-16">

        <img class="w-full md:w-96 h-auto object-cover" src="https://image.tmdb.org/t/p/w500/{{$movie['poster_path']}}" alt="Movie Poster">

        <div class="p-4 md:p-6 flex-1">
            <h1 class="text-2xl md:text-3xl font-bold text-white">{{$movie['original_title']}}</h1>

            <div class="flex flex-wrap items-center text-gray-400 text-sm md:text-lg mt-2">
                <span class="mr-4 flex items-center">⭐ {{sprintf("%.2f",$movie['vote_average'])}}</span>
                <span class="mr-4 flex items-center">📅 {{\Carbon\Carbon::parse($movie['release_date'])->format('Y')}}</span>
                @php
                    $hours = floor($movie['runtime'] / 60);
                    $minutes = $movie['runtime'] % 60;
                @endphp
                <span class="flex items-center">⏱ {{ $hours }}h {{ $minutes }}min</span>
            </div>

            <p class="text-gray-300 text-sm md:text-lg mt-4 leading-relaxed">
                {{$movie['overview']}}
            </p>
            <a href="{{$movie['homepage']}}" class="text-blue-400 hover:text-blue-300 font-semibold text-sm md:text-lg mt-6 inline-block">
                💻 Go To Website
            </a>
        </div>
    </div>


@endsection
