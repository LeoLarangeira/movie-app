<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isNull;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $account_id = 21686149;
        $profileData = $request->query('profileData');
        $lists = Http::withToken(config('services.tmdb.token'))
        ->get(sprintf("https://api.themoviedb.org/3/account/%s/lists", $account_id))
        ->json()["results"];

        if(empty($lists)){
            return view('profile', ['profileData' => $profileData, 'lists' => collect()]);
        }else{
            return view('profile', ['profileData' => $profileData, 'lists' => collect($lists)]);
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
