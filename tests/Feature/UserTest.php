<?php

use Illuminate\Support\Facades\Hash;
use App\Models\User;



describe('user crud', function () {

    it('can create, update, and delete an user', function () {
        $user = User::factory()->create(
            [
                'password' => Hash::make('password123'),
            ]
        );

        $fetchedUser = User::where('name', $user->name)->first();
        expect($fetchedUser)->not()->toBeNull();
        expect($fetchedUser->email)->toBe($user->email);

        $user->update(['name' => 'John']);
        $updatedUser = User::find($user->id);

        expect($updatedUser->name)->toBe('John');

        $user->delete();

        $deletedUser = User::find($user->id);
        expect($deletedUser)->toBeNull();
    });
});
