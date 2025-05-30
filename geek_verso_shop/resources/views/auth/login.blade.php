@extends('layouts.app')

@section('title', 'GeekVerso - Página de Login')

@section('adminlte_head') 
    @section('head_extra')
        <meta name="description" content="Painel de login da Geek Verso">
    @endsection
@endsection

@section('content')
    <x-guest-layout>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="text-center text-xl font-bold mb-10">Entrar</h2>

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="bg-gray-600 text-gray-50 mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="bg-gray-600 text-gray-50 block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="bg-gray-600 rounded border-gray-300 text-orange-500 shadow-sm focus:ring-gray-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Lembre de mim') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" 
                    href="{{ route('register') }}">
                        {{ __('Criar conta') }}
                </a>
                @if (Route::has('register'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" 
                        href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                @endif

                <x-primary-button class="ms-3 bg-orange-600 hover:bg-orange-500">
                    {{ __('Entrar') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>
@endsection