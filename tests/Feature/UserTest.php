<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;



describe('user crud', function () {

    it('can create, update, and delete an user', function () {
        $faker = Faker\Factory::create();



        Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/authentication/guest_session/new');
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.themoviedb.org/3/authentication/guest_session/new', [
            'headers' => [
                'Authorization' => 'Bearer ' . config('services.tmdb.token'),
                'accept' => 'application/json',
            ],
        ]);
        $guest_api_key = json_decode($response->getBody(), true);

        dump($guest_api_key['guest_session_id']);

        $created = DB::insert('insert into users (name, email, username, description, password, guest_session_api_key) values (? , ? , ? , ? , ? ,?)', [
            $faker->name(),
            (string) $faker->unique()->email(),
            (string) $faker->userName(),
            (string) $faker->sentence(),
            bcrypt('password123'),
            (string)$guest_api_key['guest_session_id']
        ]);


        expect($created)->toBe(true);


        $user = DB::table('users')->select('id', 'name', 'guest_session_api_key')->first();

        dump($user->id);
        $fetchedUser = User::where('name', $user->name)->first();




        expect($fetchedUser)->not()->toBeNull();


        $updatedUser = DB::table('users')
            ->where('id', $user->id)
            ->update(['name' => 'Jhon']);

        dump($updatedUser);

        $deletedUser = DB::table('users')->where('id', $user->id)->delete();
    });
});
