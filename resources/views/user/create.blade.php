@extends('layouts.main')

@section('content')

<div class="flex items-center justify-center min-h-screen p-6 bg-gray-900">

    <div class="w-full max-w-lg p-8 bg-gray-800 rounded-lg shadow-lg">
        <h2 class="mb-6 text-3xl font-semibold text-center text-orange-500">Let’s be one!</h2>


        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="name" class="block mb-2 text-sm text-gray-300">Name:</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Enter your name"
                    class="w-full px-4 py-2 text-gray-200 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                    required>
            </div>


            <div class="mb-4">
                <label for="username" class="block mb-2 text-sm text-gray-300">Username:</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Enter your username"
                    class="w-full px-4 py-2 text-gray-200 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                    required>
            </div>


            <div class="mb-4">
                <label for="email" class="block mb-2 text-sm text-gray-300">Email:</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    class="w-full px-4 py-2 text-gray-200 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                    required>
            </div>

            <div class="mb-4">
                <label for="password" class="block mb-2 text-sm text-gray-300">Password:</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter your password"
                    class="w-full px-4 py-2 text-gray-200 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                    required>
            </div>


            <div class="mb-4">
                <label for="password_confirmation" class="block mb-2 text-sm text-gray-300">Confirm Password:</label>
                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    placeholder="Re-enter your password"
                    class="w-full px-4 py-2 text-gray-200 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                    required>
            </div>

            <div class="mb-4">
                <label for="name" class="block mb-2 text-sm text-gray-300">Tell us more about you:</label>
                <input
                    type="text"
                    id="description"
                    name="description"
                    placeholder="Enter your desc"
                    class="w-full px-4 py-2 text-gray-200 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                    required>
            </div>


            <button
                type="submit"
                class="w-full px-4 py-2 font-bold text-white transition-all bg-orange-500 rounded-lg hover:bg-orange-600">
                Create User
            </button>

            <p class="mt-6 text-sm text-center text-gray-300">
                "GRRRRRRRRAaaaawhhh whhhr!, Chewbacca" <br>
            </p>
        </form>
    </div>
</div>

@endsection
