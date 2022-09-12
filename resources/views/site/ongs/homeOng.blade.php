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
@endsection

    <div id="search-container" class="col-md-12">
    <h3>Busque um Voluntário</h3>
    <form action="/usuarios/ver" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form>
    </div>

    <div id="ongs-container" class="col-md-12">
        <h4 class="subtitle">Voluntários Cadastrados</h4>
    </div>

    @section('card')
    <div id="cards-container" class="row">
        @foreach($usuarios as $usuario)
        <div class="card col-md-3">
        <div class="image">
                @if($usuario->user_image == null)
                    <img src="{{ asset('site/img/destaque4.svg') }}" alt="{{ $usuario->nome }}">
                @else
                    <img src="/img/usuarios/{{$usuario->user_image}}" alt="{{$usuario->nome}}">
                @endif
            </div>

            <div class="card-body">
                <p class="card-tittle">{{$usuario->nome}}</p>
                <p class="card-owner">{{$usuario->sobrenome}}</p>
                <p class="card-owner">{{$usuario->email}}</p>
                <a href="/usuario/{{ $usuario->id }}" class="btn btn-primary">Saiba mais</a>
                
            </div>
        </div>

        @endforeach
    </div>

    @endsection
</div>



</html>