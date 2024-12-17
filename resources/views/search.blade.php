@extends(
    'layouts.main'
)


@section('content')
<div class="container mx-auto px-4 pt-16">
<form method="GET">
    <div class="grid sm:grid-cols-1 lg:grid-cols-4 gap-8 py-4">

        <div class="flex flex-col">
            <label for="year" class="text-white text-sm mb-1">Year</label>
            <input
                type="text"
                id="year"
                name="year"
                placeholder="Filter by year..."
                class="bg-transparent border border-pink-500 text-sm rounded px-2 py-1"
                onchange="this.form.action='{{ route('movies.filterByYear') }}'; this.form.submit();"
            />
        </div>


        <div class="flex flex-col">
            <label for="sort" class="text-white text-sm mb-1">Sort By</label>
            <select
                id="sort"
                name="sort_by"
                class="bg-transparent border border-pink-500 text-sm rounded px-2 py-1 focus:outline-none"
                onchange="this.form.action='{{ route('movies.filterBySort') }}'; this.form.submit();"
            >
                <option class="bg-gray-900 text-white" value="popularity.desc">Popularity Descending</option>
                <option class="bg-gray-900 text-white"  value="popularity.asc">Popularity Ascending</option>
                <option class="bg-gray-900 text-white"  value="release_date.desc">Release Date Descending</option>
                <option class="bg-gray-900 text-white"  value="release_date.asc">Release Date Ascending</option>
                <option class="bg-gray-900 text-white"  value="vote_average.desc">Rating Descending</option>
                <option class="bg-gray-900 text-white"  value="vote_average.asc">Rating Ascending</option>
            </select>
        </div>


        <div class="flex flex-col">
            <label for="genre" class="text-white text-sm mb-1">Genre</label>
            <input
                type="text"
                id="genre"
                name="genre"
                placeholder="Filter by genre..."
                class="bg-transparent border border-pink-500 text-sm rounded px-2 py-1"
                onchange="this.form.action='{{ route('movies.filterByGenre') }}'; this.form.submit();"
            />
        </div>


        <div class="flex flex-col">
            <label for="keyword" class="text-white text-sm mb-1">Keyword</label>
            <input
                type="text"
                id="keyword"
                name="keyword"
                placeholder="Filter by keyword..."
                class="bg-transparent border border-pink-500 text-sm rounded px-2 py-1"
                onchange="this.form.action='{{ route('movies.filterByKeyword') }}'; this.form.submit();"
            />
        </div>

    </div>
</form>
<div class="grid grid-cols-2 lg:grid-cols-2 gap-8 pt-16">
    @foreach ($popularMovies as $popularMovie )
    <x-movie-card :popularMovie="$popularMovie"/>
    @endforeach
</div>
</div>

@endsection
