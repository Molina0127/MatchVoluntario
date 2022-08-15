<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    
    <link rel="stylesheet" href="{{ asset('site/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
</head>



@extends('layouts.user_header')

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


<div id="search-container" class="col-md-12">
    <h3>Busque uma ong</h3>
    <form action="/home" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form>
</div>

    <div id="ongs-container" class="col-md-12">
        <h4 class="subtitle">Ongs Cadastradas</h4>
    </div>


    <div id="cards-container" class="row">
        @foreach($ongs as $ong)
        <div class="card col-md-3">
            <img src="{{ asset('site/img/destaque4.svg') }}" alt="{{ $ong->ong_name }}">
            <div class="card-body">
                <p class="card-tittle">{{$ong->ong_name}}</p>
                <p class="card-owner">{{$ong->owner}}</p>
                <p class="card-owner">{{$ong->description}}</p>
                <a href="/ong/{{ $ong->id }}" class="btn btn-primary">Saiba mais</a>
            </div>
        </div>

        @endforeach
    </div>



@endsection
</html>