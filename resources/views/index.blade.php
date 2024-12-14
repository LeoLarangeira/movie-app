@extends(
    'layouts.main'
)

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
                <!-- Date Filter -->
            <div class="grid sm:grid-cols-1 lg:grid-cols-4 gap-8 py-4">
                <div class="flex flex-col">
                    <label for="year" class="text-white text-sm mb-1">Year</label>
                    <input
                        type="text"
                        id="date"
                        placeholder="Filter by date..."
                        class="bg-transparent border border-pink-500 text-sm rounded px-2 py-1"
                />
                </div>
                    <!-- Order By -->
                <div class="flex flex-col">
                    <label for="sort" class="text-white text-sm mb-1">Sort By</label>
                    <select id="sort" class="bg-transparent border border-pink-500 text-sm rounded px-2 py-1 focus:outline-none">
                        <option value="popularity" class="bg-gray-900 text-white">Popularity Descent</option>
                        <option value="rating" class="bg-gray-900 text-white">Rating Descent</option>
                        <option value="release" class="bg-gray-900 text-white">Release Date</option>
                    </select>
                </div>
                <!-- Filter By Genre -->
                <div class="flex flex-col">
                    <label for="genre" class="text-white text-sm mb-1">Genre</label>
                    <input
                        type="text"
                        id="genre"
                        placeholder="Filter by genres..."
                        class="bg-transparent border border-pink-500 text-sm rounded px-2 py-1"
                    />
                </div>
                <!-- Filter By KeyWord -->
                <div class="flex flex-col">
                    <label for="keyword" class="text-white text-sm mb-1">Filter By Keyword</label>
                    <input
                        type="text"
                        id="keyword"
                        placeholder="Filter by keywords..."
                        class="bg-transparent border border-pink-500 text-sm rounded px-2 py-1"
                    />
                </div>
            </div>


            <div class="grid grid-cols-2 lg:grid-cols-2 gap-8 pt-16">
                    @foreach ($popularMovies as $popularMovie )
                    <x-movie-card :popularMovie="$popularMovie"/>
                    @endforeach
                </div>
            <!-- Grid -->
        </div>
    </div>
@endsection
