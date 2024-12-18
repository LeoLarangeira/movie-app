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
            class="border rounded px-4 py-2 w-full md:w-1/2"
            required
        >
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
           Search Movie
        </button>
    </form>


    @if(isset($movies) && count($movies) > 0)
        <div class="mt-6 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($movies as $movie)
                <div class="bg-gray-800 text-white p-4 rounded shadow">
                    <img
                        src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] ?? '' }}"
                        alt="{{ $movie['title'] }}"
                        class="w-full h-64 object-cover rounded"
                    >
                    <h2 class="text-lg font-semibold mt-2">{{ $movie['title'] }}</h2>
                    <p class="text-sm mt-2">
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
        <p class="text-red-500 mt-4">No movies found with the searched name.</p>
    @endif
</div>

@endsection
