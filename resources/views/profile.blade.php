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
                <h1 class="text-white font-bold text-xl leading-8 my-4 text-center">UserName</h1>
                <p class="text-sm text-gray-300 leading-6 text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Reprehenderit, eligendi dolorum sequi illum qui unde aspernatur non deserunt.
                </p>
            </div>

            <!-- Conteúdo Principal -->
            <div class="w-full md:w-9/12 bg-gray-700 p-6 rounded-lg">
                <!-- Filmes Favoritos -->
                <div class="mb-6">
                    <div class="flex items-center space-x-2 font-semibold text-white mb-4">
                        <span class="text-xl tracking-wide border-b-2 border-orange-500">FAVORITE MOVIES</span>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                        <!-- Imagens dos filmes -->
                        <img class="w-full h-48 object-contain rounded-lg shadow-lg" src="https://m.media-amazon.com/images/I/818oxnoHqoL._AC_UF894,1000_QL80_.jpg" alt="Movie Poster">
                        <img class="w-full h-48  object-contain rounded-lg shadow-lg" src="https://m.media-amazon.com/images/I/818oxnoHqoL._AC_UF894,1000_QL80_.jpg" alt="Movie Poster">
                        <img class="w-full h-48  object-contain rounded-lg shadow-lg" src="https://m.media-amazon.com/images/I/818oxnoHqoL._AC_UF894,1000_QL80_.jpg" alt="Movie Poster">
                        <img class="w-full h-48  object-contain rounded-lg shadow-lg" src="https://m.media-amazon.com/images/I/818oxnoHqoL._AC_UF894,1000_QL80_.jpg" alt="Movie Poster">
                        <img class="w-full h-48  object-contain rounded-lg shadow-lg" src="https://m.media-amazon.com/images/I/818oxnoHqoL._AC_UF894,1000_QL80_.jpg" alt="Movie Poster">
                    </div>
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
