@extends('adminlte::page')

@section('title', 'Título Padrão') {{-- Nome da Section que as views vão definir o título da página --}}

@section('adminlte_head')
    <meta name="author" content="Diogo Miguel">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('gv_logo.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @yield('head_extra') {{-- Permite que views coloquem conteúdo extra no head --}}
@stop

@section('content_header')
    @yield('content_header') {{-- Nome da Section que as views vão definir --}}
@stop

@section('content')
    @yield('content') {{-- Nome da Section que as views vão definir --}}
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@stop

@section('js')
    <script src="{{ asset('js/form.js') }}"></script>
@stop