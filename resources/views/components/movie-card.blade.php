<div class="flex flex-col max-w-4xl mx-auto overflow-hidden bg-gray-800 rounded-lg shadow-lg md:flex-row">
    <img class="object-cover w-full h-60 md:w-48 md:h-72" src="https://image.tmdb.org/t/p/w500/{{$popularMovie['poster_path']}}" alt="Movie Poster">
    <div class="flex-1 p-4">
        <h2 class="text-base font-semibold text-white truncate md:text-xl">{{$popularMovie['original_title']}}</h2>
        <div class="flex flex-wrap items-center mt-2 text-xs text-gray-400 md:text-sm">
            <span class="flex items-center mr-4">{{sprintf("%.2f",$popularMovie['vote_average'])}} ⭐</span>
            <span class="flex items-center mr-4">{{\Carbon\Carbon::parse($popularMovie['release_date'])->format('Y')}}</span>
            <span class="flex items-center">2H</span>
        </div>
        <p class="mt-2 text-xs text-gray-300 md:text-sm line-clamp-3">
            {{ $popularMovie['overview'] }}
        </p>
        <a href="{{route('movies.show', $popularMovie['id'])}}" class="inline-block mt-4 text-sm text-blue-500 hover:underline md:text-base">See more...</a>
    </div>
</div>
