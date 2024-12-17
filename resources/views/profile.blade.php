@extends('layouts.main')


@section('content')
<div class="min-h-screen bg-gray-900 p-6">
    <h2 class="text-3xl font-bold text-center text-orange-500 mb-8">ABOUT ME</h2>
    <div class="container mx-auto my-5 p-5 bg-gray-800 rounded-lg shadow-lg">
        <div class="md:flex md:space-x-6">

            <div class="w-full md:w-3/12 bg-gray-700 p-4 rounded-lg">
                <div class="image overflow-hidden rounded-lg">
                    <img
                        class="h-auto w-full mx-auto rounded-lg"
                        src="https://via.placeholder.com/200"
                        alt="User Profile">
                </div>
                <h1 class="text-white font-bold text-xl leading-8 my-4 text-center">{{Auth::user()->name}}</h1>
                <p class="text-sm text-gray-300 leading-6 text-center">
                    "Absolute Cinema"
                </p>
            </div>

            <div class="w-full md:w-9/12 bg-gray-700 p-6 rounded-lg">



                <div class="mt-8">
                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-semibold text-white border-b-2 border-orange-500">MY LISTS</h2>


                        <a href="{{ route('lists.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold text-sm rounded-lg hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Create New List
                        </a>
                    </div>


                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-6">
                        @forelse ($lists as $list)
                            <div class="bg-gray-800 p-4 rounded-lg shadow-md text-white flex flex-col justify-between">

                                <a href="{{ route('lists.show', $list['id']) }}" class="font-semibold text-lg hover:underline">
                                    {{ $list['name'] }}
                                </a>


                                <div class="flex justify-between items-center mt-4">
                                    <a href="{{ route('lists.edit', $list['id']) }}" class="text-blue-400 hover:text-blue-300">
                                        Edit
                                    </a>
                                    <form action="{{ route('lists.delete', $list['id']) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this list?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-400 hover:text-red-300">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @empty
                            <p class="text-gray-400 col-span-full">You don't have any lists yet. Create one above!</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
