<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/authentication/guest_session/new');

        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.themoviedb.org/3/authentication/guest_session/new', [
            'headers' => [
                'Authorization' => 'Bearer ' . config('services.tmdb.token'),
                'accept' => 'application/json',
            ],
        ]);

        $guest_api = json_decode($response->getBody(), true);

        $guest_api_key = $guest_api['guest_session_id'];


        $validated = $request->validate(
            [
                'name' => 'required|string|max:255',
                'username' => 'required|string|max:255',
                'email' => 'required|string|email|unique:users|max:255',
                'password' => 'required|string|min:8|confirmed',
                'description' => 'required|string|max:255',
            ]
        );


        if ($validated) {
            $userId = DB::table('users')->insertGetId([
                'name' => (string) $validated['name'],
                'email' => (string) $validated['email'],
                'username' => (string) $validated['username'],
                'description' => (string) $validated['description'],
                'password' => bcrypt($validated['password']),
                'guest_session_api_key' => (string) $guest_api_key,
            ]);



            Auth::loginUsingId($userId);


            return view('profile', ['profileData' => $validated, 'lists' => collect()]);
        } else {
            return view('index');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
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
        //verify id
        $getUser = DB::select(
            "select * from users where id = ?"[$id]
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
