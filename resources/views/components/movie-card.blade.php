<div class="max-w-4xl mx-auto bg-gray-800 rounded-lg shadow-lg overflow-hidden flex">
    <img class="w-48 h-auto object-cover" src="https://image.tmdb.org/t/p/w500/{{$popularMovie['poster_path']}}" alt="Movie Poster">
    <div class="p-4 flex-1">
        <h2 class="text-xl font-semibold text-white">{{$popularMovie['original_title']}}</h2>
        <div class="flex items-center text-gray-400 text-sm">
            <span class="mr-2">{{sprintf("%.2f",$popularMovie['vote_average'])}} ⭐</span>
            <span class="mr-2">{{\Carbon\Carbon::parse($popularMovie['release_date'])->format('Y')}}</span>
            <span>2H</span>
        </div>
        <p class="text-gray-300 text-sm mt-2">
           {{ $popularMovie['overview']}}
        </p>
        <a href="{{route('movies.show', $popularMovie['id'])}}" class="text-blue-500 hover:underline mt-4 inline-block">See more...</a>
    </div>
</div>
