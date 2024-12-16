@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 pt-16">
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold text-white">{{ $list['name'] }}</h1>
    <p class="text-gray-400 mt-2">{{ $list['description'] }}</p>


    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-6">
        @forelse ($list['items'] as $movie)
            <div class="bg-gray-800 p-4 rounded-lg shadow-md text-white">
                <img src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] }}" alt="{{ $movie['title'] }}" class="rounded-lg w-full h-64 object-cover">
                <h3 class="font-semibold text-lg mt-4">{{ $movie['title'] }}</h3>
            </div>
        @empty
            <p class="text-gray-400">This list has no movies yet.</p>
        @endforelse
    </div>
        <a href="{{ route('lists.add', ['list_id' => $list['id']]) }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Add Movie
        </a>
</div>
</div>
@endsection
