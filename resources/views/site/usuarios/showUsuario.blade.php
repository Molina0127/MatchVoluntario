<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('site/css/home.css') }}">
</head>

@extends('layouts.loggedOng_header')

@section('title', $usuarios->title)

@section('content')

<div id="usuarios-container" class="col-md-12">
    
        @if(session()->has('addVol'))
                        <p class="alert alert-sucess">
                            {{session()->get('addVol')}}
                        </p>
        @endif

        @if(session()->has('delVol'))
                        <p class="alert alert-danger">
                            {{session()->get('delVol')}}
                        </p>
        @endif

    <h4 class="subtitle">Voluntários Cadastrados</h4>
    <div id="cards-container" class="row">
        <div class="card col-md-3">
            <img src="{{ asset('site/img/destaque4.svg') }}" alt="{{ $usuarios->nome }}">
            <div class="card-body">
                <p class="usuario-nome">Nome:{{$usuarios->nome}}</p>
                <p class="usuario-sobrenome">Sobrenome:{{$usuarios->sobrenome}}</p>
                <p class="usuario-email">E-mail:{{$usuarios->email}}</p>
                <p class="usuario-city">Cidade:{{$usuarios->cidade}}</p>
                <p class="usuario-estado">Estado:{{$usuarios->estado}}</p>
                <p class="usuario-categoria">Categoria:{{$usuario_categorias}}</p>
                <p class="usuario-datanasc">Data de nascimento:{{$usuarios->datanasc}}</p>
                <p class="usuario-cpf">CPF:{{$usuarios->cpf}}</p>
                <p class="ong-volunteers">{{ count($usuarios->ongs) }} Ong(s) que participa</p>

                @if(!$hasOngJoined)
                
                <a href="/entidadeVol/{{$usuarios->id}}"
                class="btn btn-primary">Enviar pedido</a>

                @else

                <p>Este voluntário já faz parte da sua Ong</p>
                
                <form action="/usuario/leave/{{$usuarios->id}}">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger delete-btn">
                        <ion-icon name="trash-outline"></ion-icon>Remover Voluntário
                    </button>
                </form>

                @endif

            

        </div>
    </div>
</div>
@endsection
</html>