<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ListFilterController extends Controller
{

    public function show($id){
        $response = Http::withToken(config('services.tmdb.token'))
            ->get("https://api.themoviedb.org/3/list/{$id}");

        if ($response->successful()) {
            $list = $response->json();
            return view('lists.show', compact('list'));
        }

        return redirect()->route('profile')->with('error', 'Could not fetch list details.');
    }

    public function edit($id){
        $response = Http::withToken(config('services.tmdb.token'))
            ->get("https://api.themoviedb.org/3/list/{$id}");

        if ($response->successful()) {
            $list = $response->json();
            return view('lists.edit', compact('list'));
        }

        return redirect()->route('profile')->with('error', 'Could not fetch list details.');
    }

    public function update(Request $request, $id){
        $response = Http::withToken(config('services.tmdb.token'))->put("https://api.themoviedb.org/3/list/{$id}", [
            'name' => $request->input('name'),
            'description' => $request->input('desc'),
        ]);

        if ($response->successful()) {
            return redirect()->route('lists.show', $id)->with('success', 'List updated successfully.');
        }

        return redirect()->back()->with('error', 'Failed to update list.');
    }

    public function deleteList($id){
    $response = Http::withToken(config('services.tmdb.token'))
        ->delete("https://api.themoviedb.org/3/list/{$id}");

    if ($response->successful()) {
        return redirect()->route('profile')->with('success', 'List deleted successfully!');
    }

    return redirect()->back()->with('error', 'Failed to delete list.');
}
}
