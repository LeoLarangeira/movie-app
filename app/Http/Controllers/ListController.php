<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ListController extends Controller
{

    public function create()
    {
        return view('lists.create');
    }

    public function store(Request $request){
        $response = Http::withToken(config('services.tmdb.token'))->post('https://api.themoviedb.org/3/list', [
            'name' => $request->input('name'),
            'description' => $request->input('desc', 'Uma lista personalizada de filmes'),
            'language' => 'pt-BR',
        ]);

        $account_id = 21686149;

        $accountLists = Http::withToken(config('services.tmdb.token'))
        ->get(sprintf("https://api.themoviedb.org/3/account/%s/lists", $account_id))
        ->json()["results"];

        // dd($accountLists);


        return view('profile', [ 'lists' => $accountLists ]);

    }

    public function addMovie(Request $request, $listId){
        $response = Http::withToken(config('services.tmdb.token'))->post("https://api.themoviedb.org/3/list/{$listId}/add_item", [
            'media_id' => $request->input('media_id'),
        ]);

        if ($response->successful()) {
            return response()->json(['success' => 'Filme adicionado com sucesso!', 'response' => $response->json()]);
        }

        return response()->json(['error' => $response->json()], $response->status());
    }

    public function addMovieByName($listName, $listId, Request $request){
            $movieName = $request->query('movie_name');

            // Busca os filmes no TMDB
            $response = Http::withToken(config('services.tmdb.token'))
                ->get('https://api.themoviedb.org/3/search/movie', [
                    'query' => $movieName,
                    'language' => 'en',
                ]);

            // Extrai os resultados
            $movies = $response->successful() ? $response->json()['results'] : [];

            // Retorna os filmes para a mesma view
            return view('lists.add', [
                'movies' => $movies,
                'list' => ['id' => $listId, 'name' => $listName],
            ]);
    }


    public function removeMovie(Request $request, $listId){
        $response = Http::withToken(config('services.tmdb.token'))->post("https://api.themoviedb.org/3/list/{$listId}/remove_item", [
            'media_id' => $request->input('media_id'),]);

        if ($response->successful()) {
            return response()->json(['success' => 'Filme removido com sucesso!', 'response' => $response->json()]);
        }

        return response()->json(['error' => $response->json()], $response->status());
    }

    public function deleteList($listId){
        $response = Http::withToken(config('services.tmdb.token'))->delete("https://api.themoviedb.org/3/list/{$listId}");

        if ($response->successful()) {
            return response()->json(['success' => 'Lista deletada com sucesso!']);
        }

        return response()->json(['error' => $response->json()], $response->status());
    }


}
