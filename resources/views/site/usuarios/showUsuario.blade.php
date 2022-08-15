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
    <h4 class="subtitle">Voluntários Cadastrados</h4>
    <div id="cards-container" class="row">
        <div class="card col-md-3">
            <img src="{{ asset('site/img/destaque4.svg') }}" alt="{{ $usuarios->nome }}">
            <div class="card-body">
                <p class="usuario-nome">Nome:{{$usuarios->nome}}</p>
                <p class="usuario-sobrenome">Sobrenome:{{$usuarios->sobrenome}}</p>
                <p class="usuario-email">E-mail:{{$usuarios->email}}</p>
                <p class="usuario-datanasc">Data de nascimento:{{$usuarios->datanasc}}</p>
                <p class="usuario-cpf">CPF:{{$usuarios->cpf}}</p>
                <p class="ong-volunteers">{{ count($usuarios->ongs) }} Ong(s) que participa</p>
                <a href="/usuario/join/{{ $usuarios->id }}" 
                class="btn btn-primary" 
                id="ong-submit">Convidar voluntário</a>
            </div>
        </div>
    </div>
</div>
@endsection
</html>