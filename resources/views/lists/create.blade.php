@extends('layouts.main')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-900 p-6">
    <div class="w-full max-w-md bg-gray-800 rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold text-orange-500 mb-4 text-center">Create New List</h2>

        @if (session('success'))
            <div class="mb-4 text-green-500 font-semibold">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-4 text-red-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('lists.store') }}" method="POST">
            @csrf


            <div class="mb-4">
                <label for="name" class="block text-gray-300 text-sm mb-2">List Name:</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="What's the name of the list?"
                    class="w-full px-4 py-2 rounded-lg bg-gray-700 text-gray-200 focus:outline-none focus:ring-2 focus:ring-orange-500"
                    required>
            </div>


            <div class="mb-4">
                <label for="description" class="block text-gray-300 text-sm mb-2">Description:</label>
                <input
                    type="text"
                    id="description"
                    name="description"
                    placeholder="Tell us more about the list"
                    class="w-full px-4 py-2 rounded-lg bg-gray-700 text-gray-200 focus:outline-none focus:ring-2 focus:ring-orange-500"
                    required>
            </div>


            <div class="mb-4">
                <label for="public" class="block text-white font-bold">Visibility</label>
                <select name="public" id="public" class="bg-gray-800 rounded w-full px-4 py-2">
                    <option value="1" selected>Public</option>
                    <option value="0">Private</option>
                </select>
            </div>


            <button
                type="submit"
                class="w-full bg-orange-500 text-white font-bold py-2 px-4 rounded-lg transition-all hover:bg-orange-600">
                Create List
            </button>
        </form>
    </div>
</div>
@endsection
