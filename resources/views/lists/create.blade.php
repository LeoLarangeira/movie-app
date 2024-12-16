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

        <!-- Exibe erros de validação -->
        @if ($errors->any())
            <div class="mb-4 text-red-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulário de Criação -->
        <form action="{{ route('lists.store') }}" method="POST">
            @csrf

            <!-- Campo de Nome da Lista -->
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

            <!-- Campo de Nome da Lista -->
            <div class="mb-4">
                <label for="desc" class="block text-gray-300 text-sm mb-2">Description:</label>
                <input
                    type="text"
                    id="desc"
                    name="name"
                    placeholder="Tell us more about the list"
                    class="w-full px-4 py-2 rounded-lg bg-gray-700 text-gray-200 focus:outline-none focus:ring-2 focus:ring-orange-500"
                    required>
            </div>

            <!-- Campo de Opção Pública/Privada -->
            <div class="mb-4 flex items-center">
                <input
                    type="checkbox"
                    id="is_public"
                    name="is_public"
                    class="form-checkbox h-5 w-5 text-orange-500"
                    {{ old('is_public') ? 'checked' : '' }}>
                <label for="is_public" class="text-gray-300 text-sm ml-2">Lista Pública</label>
            </div>

            <!-- Botão de Criar Lista -->
            <button
                type="submit"
                class="w-full bg-orange-500 text-white font-bold py-2 px-4 rounded-lg transition-all hover:bg-orange-600">
                Criar Lista
            </button>
        </form>
    </div>
</div>
@endsection
