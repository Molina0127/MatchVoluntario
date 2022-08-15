<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    
    <link rel="stylesheet" href="{{ asset('site/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
</head>



@extends('layouts.loggedOng_header')

@section('content')

<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Você está logado!') }}
                    <a href="{{ route('listaOngs') }}">Lista das ONGs</a>
                    <a href="{{ route('listaUsuarios') }}">Lista dos Usuários </a>
                </div>
            </div>
        </div>
    </div> -->
</div>


    <div id="cards-container" class="row">
        @foreach($usuarios as $usuario)
        <div class="card col-md-3">
            <img src="{{ asset('site/img/destaque4.svg') }}" alt="{{ $usuario->nome }}">
            <div class="card-body">
                <p class="card-tittle">{{$usuario->nome}}</p>
                <p class="card-owner">{{$usuario->sobrenome}}</p>
                <p class="card-owner">{{$usuario->email}}</p>
                <a href="/usuario/{{ $usuario->id }}" class="btn btn-primary">Saiba mais</a>
                
            </div>
        </div>

        @endforeach
    </div>


</div>


@endsection
</html>