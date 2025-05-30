@extends('layouts.app')

@section('title', 'GeekVerso - Recuperação de Conta')

@section('content')
        <x-guest-layout>
            <div class="mb-4 text-sm text-gray-600">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="bg-gray-600 text-gray-50 mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-center mt-4">
                    <x-primary-button class="ms-3 bg-orange-600 hover:bg-orange-500">
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>

                <div class="flex items-center justify-left mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('dashboard') }}">
                        Voltar
                    </a>
                </div>
            </form>
        </x-guest-layout>
@endsection