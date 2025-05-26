@extends('layouts.app')

@section('title', 'GeekVerso - Sobre Nós')

@section('head')

@section('content')
    <div class="content flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="about-container sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="text">
                <h1>Sobre nós</h1>
                <p>
                    Este sistema foi desenvolvido como parte do Trabalho Final da disciplina de Laboratório de Software, com o
                    objetivo de aplicar os conhecimentos adquiridos ao longo do curso em um projeto completo e funcional.
                    Além disso, conta com o framework Laravel 11 junto do Breeze para autenticação de usuários, operações completas de
                    CRUD (Create, Read, Update, Delete), upload de imagens e integração com o template AdminLTE, proporcionando uma
                    interface administrativa moderna e responsiva.

                    A proposta pode ser facilmente adaptada para diferentes tipos de sistemas, como gerenciamento de produtos,
                    eventos ou qualquer outro domínio que necessite controle de dados com segurança e eficiência.

                    Este trabalho representa o esforço de aplicar teoria e prática em um contexto real de desenvolvimento web.
                </p>
            </div>
            <div>
                <img src="{{ asset('gv_logo.png') }}" alt="GV_logo" class="logo">
            </div>
        </div>
    </div>
    
@endsection
