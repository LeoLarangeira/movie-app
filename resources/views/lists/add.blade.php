@extends('layouts.main')

@section('content')

<div class="container mx-auto mt-6">

    <h1 class="text-2xl font-bold text-white">
        Add Movies To List{{ $list['name'] }}
    </h1>


    <form
        action="{{ route('lists.addMovieByName', ['list_name' => $list['name'], 'list_id' => $list['id']]) }}"
        method="GET"
        class="mt-4"
    >
        @csrf
        <input
            type="text"
            name="movie_name"
            placeholder="Insert the Movie Name"
            class="w-full px-4 py-2 bg-gray-800 border rounded md:w-1/2"
            required
        >
        <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">
           Search Movie
        </button>
    </form>


    @if(isset($movies) && count($movies) > 0)
        <div class="grid grid-cols-1 gap-6 mt-6 md:grid-cols-3 lg:grid-cols-4">
            @foreach($movies as $movie)
                <div class="p-4 text-white bg-gray-800 rounded shadow">
                    <img
                        src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] ?? '' }}"
                        alt="{{ $movie['title'] }}"
                        class="object-cover w-full h-64 rounded"
                    >
                    <h2 class="mt-2 text-lg font-semibold">{{ $movie['title'] }}</h2>
                    <p class="mt-2 text-sm">
                        {{ Str::limit($movie['overview'], 100) }}
                    </p>
                    <div class="mt-2">
                        <a
                            href="{{ route('movies.show', $movie['id']) }}"
                            class="text-blue-400 hover:underline"
                        >
                            Ver detalhes
                        </a>

                        <form
                            action="{{ route('lists.addMovie', ['listId' => $list['id']]) }}"
                            method="POST"
                            class="inline-block ml-4"
                        >
                            @csrf
                            <input type="hidden" name="media_id" value="{{ $movie['id'] }}">
                            <button type="submit" class="text-green-400 hover:underline">
                               Add to the list
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @elseif(isset($movies))
        <p class="mt-4 text-red-500">No movies found with the searched name.</p>
    @endif
</div>

@endsection
