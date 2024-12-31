@extends('layouts.main')


@section('content')
<div class="min-h-screen p-6 bg-gray-900">
    <h2 class="mb-8 text-3xl font-bold text-center text-orange-500">ABOUT ME</h2>
    <div class="container p-5 mx-auto my-5 bg-gray-800 rounded-lg shadow-lg">
        <div class="md:flex md:space-x-6">

            <div class="w-full p-4 bg-gray-700 rounded-lg md:w-3/12">
                <div class="overflow-hidden rounded-lg image">
                    <img
                        class="w-full h-auto mx-auto rounded-lg"
                        src="https://via.placeholder.com/200"
                        alt="User Profile">
                </div>
                <h1 class="my-4 text-xl font-bold leading-8 text-center text-white">{{Auth::user()->name}}</h1>
                <p class="text-sm leading-6 text-center text-gray-300">
                    {{Auth::user()->description}}
                </p>
            </div>

            <div class="w-full p-6 bg-gray-700 rounded-lg md:w-9/12">



                <div class="mt-8">
                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-semibold text-white border-b-2 border-orange-500">MY LISTS</h2>


                        <a href="{{ route('lists.create') }}" class="inline-flex items-center px-4 py-2 text-sm font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Create New List
                        </a>
                    </div>


                    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                        @forelse ($lists as $list)
                            <div class="flex flex-col justify-between p-4 text-white bg-gray-800 rounded-lg shadow-md">

                                <a href="{{ route('lists.show', $list['id']) }}" class="text-lg font-semibold hover:underline">
                                    {{ $list['name'] }}
                                </a>


                                <div class="flex items-center justify-between mt-4">
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
