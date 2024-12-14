@extends('layouts.main')


@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-900 p-6">
    <!-- Container principal -->
    <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden flex w-full max-w-4xl">
        <!-- Seção Esquerda -->
        <div class="w-1/2 p-8 flex flex-col justify-center">
            <h1 class="text-4xl font-bold text-orange-500 mb-4">Welcome Back!</h1>
            <p class="text-gray-400 text-sm leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis.
            </p>
        </div>

        <!-- Seção Direita (Formulário) -->
        <div class="w-1/2 p-8 bg-gray-700">
            <h2 class="text-2xl font-semibold text-orange-500 mb-6 text-center">Login</h2>
            <form action="#" method="POST">
                <!-- Campo de Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-300 text-sm mb-2">Email:</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter your email"
                        class="w-full px-4 py-2 rounded-lg bg-gray-600 text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500"
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
                        class="w-full px-4 py-2 rounded-lg bg-gray-600 text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>

                <!-- Remember Me e Forgot Password -->
                <div class="flex justify-between items-center mb-6">
                    <label class="flex items-center text-gray-300 text-sm">
                        <input
                            type="checkbox"
                            class="mr-2 w-4 h-4 text-blue-500 bg-gray-600 border-gray-500 focus:ring-blue-500">
                        Remember Me
                    </label>
                    <a href="#" class="text-blue-400 hover:text-blue-500 text-sm">Forgot Password?</a>
                </div>

                <!-- Botão de Login -->
                <button
                    type="submit"
                    class="w-full bg-transparent border border-pink-500 text-white font-bold py-2 px-4 rounded-lg transition-all hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    Log In
                </button>

                <!-- Don't Have an Account -->
                <p class="text-center text-gray-300 text-sm mt-4">
                    Don't have an account?
                    <a href="#" class="text-blue-400 hover:text-blue-500 font-semibold">Create one!</a>
                </p>
            </form>
        </div>
    </div>
</div>


@endsection
