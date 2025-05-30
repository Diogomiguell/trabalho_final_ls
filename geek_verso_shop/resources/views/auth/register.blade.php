@extends('layouts.app')

@section('title', 'GeekVerso - Página de Cadastro')

@section('adminlte_head')
    @section('head_extra')
        <meta name="description" content="Painel de login da Geek Verso">
        <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    @endsection
@endsection
    
@section('content')
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h2 class="text-center text-xl font-bold mb-10">Criar Conta</h2>
        
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input class="bg-gray-600 text-gray-50 mt-1 w-full" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red" /> 
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="bg-gray-600 text-gray-50 mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />

            <x-text-input id="password" class="bg-gray-600 text-gray-50 mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4 ">
            <x-input-label for="password_confirmation" :value="__('Confirmar Senha')" />

            <x-text-input id="password_confirmation" class="bg-gray-600 text-gray-50 mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Já tem uma conta?') }}
            </a>

            <x-primary-button class="ms-3 bg-orange-600 hover:bg-orange-500">
                {{ __('Cadastrar-se') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
@endsection