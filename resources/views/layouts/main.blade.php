<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movie App</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="icon" href="{{ asset('claquete.png') }}" type="image/png">

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        @endif
    </head>
    <body class="font-sans text-white bg-gray-900">
        <nav class="border-b border-gray-800">
            <div class="container flex flex-col items-center justify-between px-4 py-6 mx-auto md:flex-row">
                <ul class="flex items-center">
                    <li><a href="{{ route('movies.index') }}">Movie App</a></li>
                    <li class="ml-16 "><a href="{{ route('movies.index') }}">Movies</a></li>
                </ul>
                <div class="flex flex-col items-center md:flex-row">
                    <div class="relative">
                        <form action="{{route("movies.searchByName")}}" method="GET">
                            @csrf
                            <input type="text" name="movie" class="w-64 px-4 py-1 bg-gray-800 rounded-full" placeholder="">
                            <button type="submit" class="absolute top-0 right-0 mt-1 mr-2 text-white">Search</button>
                        </form>
                    </div>
                    @if (auth()->check())
                        <?php
                             $userData = Auth::user();
                        ?>
                        <a href="{{ route('profile', ['profileData' => ['name' => Auth::user()->name, 'user_id' => Auth::user()->id]]) }}" class="px-6 py-3 ml-6 mr-3 font-sans text-xs font-bold text-pink-500 uppercase transition-all border border-pink-500 rounded-lg middle none center hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                            {{$userData[
                                'name'
                            ]}}
                        </a>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="px-6 py-3 ml-6 mr-3 font-sans text-xs font-bold text-red-500 uppercase transition-all border border-red-500 rounded-lg middle none center hover:bg-red-500/10 active:bg-red-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                            LOGOUT
                        </a>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>

                    @else
                    <div class="mt-3 md:ml-4 md:mt-0">
                        <a href="{{ route('user.create') }}" class="px-6 py-3 ml-6 mr-3 font-sans text-xs font-bold text-pink-500 uppercase transition-all border border-pink-500 rounded-lg middle none center hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                            Sign In
                        </a>
                        <a href="{{ route('user.login') }}" class="px-6 py-3 ml-6 mr-3 font-sans text-xs font-bold text-pink-500 uppercase transition-all border border-pink-500 rounded-lg middle none center hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                            Login
                        </a>
                    </div>
                    @endif

                </div>
            </div>
        </nav>
        @yield('content')
    </body>
</html>
