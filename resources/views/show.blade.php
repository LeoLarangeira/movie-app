@extends('layouts.main')


@section('content')
    <br>
    <div class="movie-info max-w-6xl mx-auto border-gray-800  rounded-lg shadow-lg overflow-hidden flex pt-16">

        <img class="w-96 h-auto object-cover" src="https://image.tmdb.org/t/p/w500/{{$movie['poster_path']}}" alt="Movie Poster">


        <div class="p-6 flex-1">

            <h1 class="text-3xl font-bold text-white">{{$movie['original_title']}}</h1>

            <div class="flex items-center text-gray-400 text-lg mt-2">
                <span class="mr-4">⭐ {{sprintf("%.2f",$movie['vote_average'])}}</span>
                <span class="mr-4">📅 {{\Carbon\Carbon::parse($movie['release_date'])->format('Y')}}</span>
                    @php
                        $hours = floor($movie['runtime'] / 60);
                        $minutes = $movie['runtime'] % 60;
                    @endphp
                <span>⏱ {{ $hours }}h {{ $minutes }}min</span>
            </div>

            <p class="text-gray-300 text-lg mt-4 leading-relaxed">
                {{$movie['overview']}}
            </p>
            <a href="{{$movie['homepage']}}" class="text-blue-400 hover:text-blue-300 font-semibold text-lg mt-6 inline-block">
                💻 Go To WebSite
            </a>
        </div>
    </div>


@endsection
