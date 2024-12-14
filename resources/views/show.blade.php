@extends('layouts.main')


@section('content')
    {{-- <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex-none">
            <img src="https://example.com/poster.jpg" alt="Movie Poster" class="w-96" style="width: 24rem">
            <div class="ml-24">
                <h2 class="text-4xl font-semibold">Harry Potter</h2>
            </div>
        </div>
    </div> --}}
    <br>
    <div class="movie-info max-w-6xl mx-auto border-gray-800  rounded-lg shadow-lg overflow-hidden flex pt-16">
        <!-- Imagem do poster -->
        <img class="w-96 h-auto object-cover" src="https://example.com/poster.jpg" alt="Movie Poster">

        <!-- Conteúdo do card -->
        <div class="p-6 flex-1">
            <!-- Título -->
            <h1 class="text-3xl font-bold text-white">Harry Potter</h1>

            <!-- Informações do filme -->
            <div class="flex items-center text-gray-400 text-lg mt-2">
                <span class="mr-4">⭐ 9,9</span>
                <span class="mr-4">📅 2019</span>
                <span>⏱ 2H</span>
            </div>

            <!-- Descrição -->
            <p class="text-gray-300 text-lg mt-4 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras cursus bibendum elit, non congue dui placerat eget. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus malesuada massa sit amet facilisis vehicula. Praesent aliquam, velit eu hendrerit fermentum, sem augue sollicitudin neque, in sodales urna odio vel arcu.
            </p>

            <!-- Botoes -->
            <div class="flex flex-col md:flex-row items-center pt-6">
                <div class="md:ml-4 mt-3 md:mt-0">
                    <button class="middle none center mr-3 rounded-lg border border-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-6"> ❤️ Favoritar</button>
                    <button  class="middle none center mr-3 rounded-lg border border-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-6">📁 Salvar na Lista</button>
                </div>
            </div>

            <!-- Link para o trailer -->
            <a href="#" class="text-blue-400 hover:text-blue-300 font-semibold text-lg mt-6 inline-block">
                🎥 See Trailer
            </a>
        </div>
    </div>


@endsection
