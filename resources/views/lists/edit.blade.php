@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 pt-16">
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold text-white">Edit List: {{ $list['name'] }}</h1>

        <form action="{{ route('lists.update', $list['id']) }}" method="POST" class="mt-6">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-300">Name</label>
                <input type="text" id="name" name="name" value="{{ $list['name'] }}" class="w-full mt-1 p-2 bg-gray-800 text-white rounded-lg">
            </div>

            <div class="mb-4">
                <label for="desc" class="block text-gray-300">Description</label>
                <textarea id="desc" name="desc" class="w-full mt-1 p-2 bg-gray-800 text-white rounded-lg">{{ $list['description'] }}</textarea>
            </div>

            <button type="submit" class="bg-blue-600 px-4 py-2 text-white font-semibold rounded-lg hover:bg-blue-500">
                Save Changes
            </button>
        </form>
    </div>
</div>
@endsection
