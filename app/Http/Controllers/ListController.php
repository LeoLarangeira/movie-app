<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ListController extends Controller
{

    public function create(){
        return view('lists.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'public' => 'required|boolean',
        ]);



        $response = Http::withToken(config('services.tmdb.token'))
        ->post('https://api.themoviedb.org/3/list', [
            'name' => $validated['name'],
            'description' => $request->input('description', ''),
            'language' => 'en',
            'public' => $validated['public'],
        ]);



        $account_id = 21686149;

        $accountLists = Http::withToken(config('services.tmdb.token'))
        ->get(sprintf("https://api.themoviedb.org/3/account/%s/lists", $account_id))
        ->json()["results"];



        return view('profile', [ 'lists' => $accountLists ]);

    }

    public function addMovie(Request $request, $listId){
        $account_id = 21686149;

        $accountLists = Http::withToken(config('services.tmdb.token'))
        ->get(sprintf("https://api.themoviedb.org/3/account/%s/lists", $account_id))
        ->json()["results"];

        $response = Http::withToken(config('services.tmdb.token'))->post("https://api.themoviedb.org/3/list/{$listId}/add_item", [
            'media_id' => $request->input('media_id'),
        ]);

        if ($response->successful()) {
            return view('profile', ['lists' => $accountLists]);
        }

        return view('profile', ['lists' => $accountLists]);
    }

    public function addMovieByName($listName, $listId, Request $request){
            $movieName = $request->query('movie_name');

            $response = Http::withToken(config('services.tmdb.token'))
                ->get('https://api.themoviedb.org/3/search/movie', [
                    'query' => $movieName,
                    'language' => 'en',
                ]);


            $movies = $response->successful() ? $response->json()['results'] : [];


            return view('lists.add', [
                'movies' => $movies,
                'list' => ['id' => $listId, 'name' => $listName],
            ]);
    }


    public function removeMovie(Request $request, $listId){
        $account_id = 21686149;

        $accountLists = Http::withToken(config('services.tmdb.token'))
        ->get(sprintf("https://api.themoviedb.org/3/account/%s/lists", $account_id))
        ->json()["results"];

        $response = Http::withToken(config('services.tmdb.token'))->post("https://api.themoviedb.org/3/list/{$listId}/remove_item", [
            'media_id' => $request->input('media_id'),]);

        dd($response);
        if ($response->successful()) {
            return view('profile', ['lists' => $accountLists]);
        }

        return view('profile', ['lists' => $accountLists]);
    }

    public function deleteList($listId){
        $response = Http::withToken(config('services.tmdb.token'))->delete("https://api.themoviedb.org/3/list/{$listId}");

        if ($response->successful()) {
            return response()->json(['success' => 'Lista deletada com sucesso!']);
        }

        return response()->json(['error' => $response->json()], $response->status());
    }


}
