@extends('layouts.main')


@section('content')
<div class="min-h-screen bg-gray-900 p-6">
    <h2 class="text-3xl font-bold text-center text-orange-500 mb-8">ABOUT ME</h2>
    <div class="container mx-auto my-5 p-5 bg-gray-800 rounded-lg shadow-lg">
        <div class="md:flex md:space-x-6">
            <!-- Perfil do Usuário -->
            <div class="w-full md:w-3/12 bg-gray-700 p-4 rounded-lg">
                <div class="image overflow-hidden rounded-lg">
                    <img
                        class="h-auto w-full mx-auto rounded-lg"
                        src="https://via.placeholder.com/200"
                        alt="User Profile">
                </div>
                <h1 class="text-white font-bold text-xl leading-8 my-4 text-center">{{$profileData['name']}}</h1>
                <p class="text-sm text-gray-300 leading-6 text-center">
                    {{$profileData[
                        'desc'
                    ]}}
                </p>
            </div>

            <!-- Conteúdo Principal -->
            <div class="w-full md:w-9/12 bg-gray-700 p-6 rounded-lg">
                <!-- Filmes Favoritos -->
                <div class="mb-6">
                    <div class="flex items-center space-x-2 font-semibold text-white mb-4">
                        <span class="text-xl tracking-wide border-b-2 border-orange-500">FAVORITE MOVIES</span>
                    </div>

                    @if ($favoriteMovies->isEmpty())
                    <a href="/create-list" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold text-sm rounded-lg hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Adicionar um novo filme
                    </a>
                    @else
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                            @foreach ($favoriteMovies as $movie)
                                <div>
                                    <!-- Imagem do filme -->
                                    <img
                                        class="w-full h-48 object-contain rounded-lg shadow-lg"
                                        src="{{ $movie->poster_url ?? 'https://via.placeholder.com/150' }}"
                                        alt="{{ $movie->title ?? 'Movie Poster' }}"
                                    >
                                    <!-- Título do filme -->
                                    <h3 class="text-white text-sm font-semibold mt-2">{{ $movie->title }}</h3>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>

                <!-- Minhas Listas -->
                <div class="flex items-center justify-between mt-8">
                    <div class="flex items-center space-x-2 font-semibold text-white leading-8">
                        <span class="text-xl tracking-wide border-b-2 border-orange-500">MY LISTS</span>
                    </div>

                    <!-- Botão para Criar Nova Lista -->
                    <a href="/create-list" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold text-sm rounded-lg hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Criar Nova Lista
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
