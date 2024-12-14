@extends(
    'layouts.main'
)

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
            <div class="grid sm:grid-cols-1 lg:grid-cols-4 gap-8 py-4">
                <div class="flex flex-col">
                    <label for="year" class="text-white text-sm mb-1">Year</label>
                    <select id="year" class="bg-transparent border border-pink-500 text-sm rounded px-2 py-1">
                        <option value="none" class="bg-gray-900 text-white">None</option>
                        <option value="2023" class="bg-gray-900 text-white">2023</option>
                        <option value="2022" class="bg-gray-900 text-white">2022</option>
                        <option value="2021" class="bg-gray-900 text-white">2021</option>
                    </select>
                </div>
                <!-- Ordenar por -->
                <div class="flex flex-col">
                    <label for="sort" class="text-white text-sm mb-1">Sort By</label>
                    <select id="sort" class="bg-transparent border border-pink-500 text-sm rounded px-2 py-1 focus:outline-none">
                        <option value="popularity" class="bg-gray-900 text-white">Popularity Descent</option>
                        <option value="rating" class="bg-gray-900 text-white">Rating Descent</option>
                        <option value="release" class="bg-gray-900 text-white">Release Date</option>
                    </select>
                </div>
                <!-- Filtro por gênero -->
                <div class="flex flex-col">
                    <label for="genre" class="text-white text-sm mb-1">Genre</label>
                    <input
                        type="text"
                        id="genre"
                        placeholder="Filter by genres..."
                        class="bg-transparent border border-pink-500 text-sm rounded px-2 py-1"
                    />
                </div>
                <!-- Filtro por palavra-chave -->
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
            <!-- Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 pt-16">

                <div class="max-w-4xl mx-auto bg-gray-800 rounded-lg shadow-lg overflow-hidden flex">
                    <!-- Imagem do poster -->
                    <img class="w-48 h-auto object-cover" src="https://example.com/poster.jpg" alt="Movie Poster">

                    <!-- Conteúdo do card -->
                    <div class="p-4 flex-1">
                        <h2 class="text-xl font-semibold text-white">Harry Potter</h2>
                        <div class="flex items-center text-gray-400 text-sm">
                            <span class="mr-2">9,9⭐</span>
                            <span class="mr-2">2019</span>
                            <span>2H</span>
                        </div>
                        <p class="text-gray-300 text-sm mt-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras cursus bibendum elit, non congue dui placerat eget. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        </p>
                        <a href="#" class="text-blue-500 hover:underline mt-4 inline-block">See more...</a>
                    </div>
                </div>

                <div class="max-w-4xl mx-auto bg-gray-800 rounded-lg shadow-lg overflow-hidden flex">
                    <!-- Imagem do poster -->
                    <img class="w-48 h-auto object-cover" src="https://example.com/poster.jpg" alt="Movie Poster">

                    <!-- Conteúdo do card -->
                    <div class="p-4 flex-1">
                        <h2 class="text-xl font-semibold text-white">Harry Potter</h2>
                        <div class="flex items-center text-gray-400 text-sm">
                            <span class="mr-2">9,9⭐</span>
                            <span class="mr-2">2019</span>
                            <span>2H</span>
                        </div>
                        <p class="text-gray-300 text-sm mt-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras cursus bibendum elit, non congue dui placerat eget. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        </p>
                        <a href="#" class="text-blue-500 hover:underline mt-4 inline-block">See more...</a>
                    </div>
                </div>



                <div class="max-w-4xl mx-auto bg-gray-800 rounded-lg shadow-lg overflow-hidden flex">
                    <!-- Imagem do poster -->
                    <img class="w-48 h-auto object-cover" src="https://example.com/poster.jpg" alt="Movie Poster">

                    <!-- Conteúdo do card -->
                    <div class="p-4 flex-1">
                        <h2 class="text-xl font-semibold text-white">Harry Potter</h2>
                        <div class="flex items-center text-gray-400 text-sm">
                            <span class="mr-2">9,9⭐</span>
                            <span class="mr-2">2019</span>
                            <span>2H</span>
                        </div>
                        <p class="text-gray-300 text-sm mt-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras cursus bibendum elit, non congue dui placerat eget. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        </p>
                        <a href="#" class="text-blue-500 hover:underline mt-4 inline-block">See more...</a>
                    </div>
                </div>

                <div class="max-w-4xl mx-auto bg-gray-800 rounded-lg shadow-lg overflow-hidden flex">
                    <!-- Imagem do poster -->
                    <img class="w-48 h-auto object-cover" src="https://example.com/poster.jpg" alt="Movie Poster">

                    <!-- Conteúdo do card -->
                    <div class="p-4 flex-1">
                        <h2 class="text-xl font-semibold text-white">Harry Potter</h2>
                        <div class="flex items-center text-gray-400 text-sm">
                            <span class="mr-2">9,9⭐</span>
                            <span class="mr-2">2019</span>
                            <span>2H</span>
                        </div>
                        <p class="text-gray-300 text-sm mt-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras cursus bibendum elit, non congue dui placerat eget. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        </p>
                        <a href="#" class="text-blue-500 hover:underline mt-4 inline-block">See more...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
