@extends('layouts.main')

@section('content')

<div class="min-h-screen flex items-center justify-center bg-gray-900 p-6">
    <!-- Container principal -->
    <div class="w-full max-w-lg bg-gray-800 rounded-lg shadow-lg p-8">
        <h2 class="text-3xl font-semibold text-orange-500 mb-6 text-center">Let’s be one!</h2>

        <!-- Formulário para criar usuário -->
        <form action="{{ route('user.store') }}" method="POST">
            @csrf <!-- Token CSRF para segurança -->

            <!-- Campo de Nome -->
            <div class="mb-4">
                <label for="name" class="block text-gray-300 text-sm mb-2">Name:</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Enter your name"
                    class="w-full px-4 py-2 rounded-lg bg-gray-700 text-gray-200 focus:outline-none focus:ring-2 focus:ring-orange-500"
                    required>
            </div>

            <!-- Campo de Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-300 text-sm mb-2">Email:</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    class="w-full px-4 py-2 rounded-lg bg-gray-700 text-gray-200 focus:outline-none focus:ring-2 focus:ring-orange-500"
                    required>
            </div>

            <!-- Campo de Senha -->
            <div class="mb-4">
                <label for="password" class="block text-gray-300 text-sm mb-2">Password:</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter your password"
                    class="w-full px-4 py-2 rounded-lg bg-gray-700 text-gray-200 focus:outline-none focus:ring-2 focus:ring-orange-500"
                    required>
            </div>

            <!-- Campo de Confirmação de Senha -->
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-300 text-sm mb-2">Confirm Password:</label>
                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    placeholder="Re-enter your password"
                    class="w-full px-4 py-2 rounded-lg bg-gray-700 text-gray-200 focus:outline-none focus:ring-2 focus:ring-orange-500"
                    required>
            </div>
             <!-- Campo de Descricao -->
            <div class="mb-4">
                <label for="name" class="block text-gray-300 text-sm mb-2">Tell us more about you:</label>
                <input
                    type="text"
                    id="desc"
                    name="desc"
                    placeholder="Enter your desc"
                    class="w-full px-4 py-2 rounded-lg bg-gray-700 text-gray-200 focus:outline-none focus:ring-2 focus:ring-orange-500"
                    required>
            </div>

            <!-- Botão de Criar Usuário -->
            <button
                type="submit"
                class="w-full bg-orange-500 text-white font-bold py-2 px-4 rounded-lg transition-all hover:bg-orange-600">
                Create User
            </button>

            <!-- Mensagem Inspiradora -->
            <p class="text-center text-gray-300 text-sm mt-6">
                "GRRRRRRRRAaaaawhhh whhhr!, Chewbacca" <br>
            </p>
        </form>
    </div>
</div>

@endsection
