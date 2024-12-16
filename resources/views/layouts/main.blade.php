<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movie App</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        @endif
    </head>
    <body class="font-sans bg-gray-900 text-white">
        <nav class="border-b border-gray-800">
            <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
                <ul class="flex items-center">
                    <li><a href="#">Movie App</a></li>
                    <li class="ml-16 "><a href="{{ route('movies.index') }}">Movies</a></li>
                </ul>
                <div class="flex flex-col md:flex-row items-center">
                    <div class="relative">
                        <form action="{{route("movies.searchByName")}}" method="GET">
                            @csrf
                            <input type="text" name="movie" class="bg-gray-800 rounded-full w-64 px-4 py-1" placeholder="">
                            <button type="submit" class="absolute right-0 top-0 mt-1 mr-2 text-white">Search</button>
                        </form>
                    </div>
                    @if (auth()->check())
                        <?php
                             $userData = Auth::user();
                        ?>
                        <a href="{{ route('profile', ['profileData' => ['name' => Auth::user()->name, 'user_id' => Auth::user()->id]]) }}" class="middle none center mr-3 rounded-lg border border-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-6">
                            {{$userData[
                                'name'
                            ]}}
                        </a>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="middle none center mr-3 rounded-lg border border-red-500 py-3 px-6 font-sans text-xs font-bold uppercase text-red-500 transition-all hover:bg-red-500/10 active:bg-red-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-6">
                            LOGOUT
                        </a>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>

                    @else
                    <div class="md:ml-4 mt-3 md:mt-0">
                        <a href="{{ route('user.create') }}" class="middle none center mr-3 rounded-lg border border-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-6">
                            Sign In
                        </a>
                        <a href="{{ route('user.login') }}" class="middle none center mr-3 rounded-lg border border-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-6">
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
