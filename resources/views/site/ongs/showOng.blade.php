<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('site/css/home.css') }}">
</head>

@extends('layouts.user_header')

@section('title', $ongs->title)

@section('content')

<div id="ongs-container" class="col-md-12">
    <h4 class="subtitle">Ongs Cadastradas</h4>
    <div id="cards-container" class="row">
        <div class="card col-md-3">
            <img src="{{ asset('site/img/destaque4.svg') }}" alt="{{ $ongs->ong_name }}">
            <div class="card-body">
                <p class="ong-name">Ong:{{$ongs->ong_name}}</p>
                <p class="ong-description">Descrição:{{$ongs->description}}</p>
                <p class="ong-city">Cidade:{{$ongs->ong_city}}</p>
                <p class="ong-statue">UF:{{$ongs->ong_state}}</p>
                <p class="category">Categoria:{{$categoria->categoria_name}}</p>
                <p class="ong-volunteers">{{ count($ongs->usuarios) }} Voluntários</p>
                <a href="/ong/join/{{ $ongs->id }}" 
                class="btn btn-primary" 
                id="ong-submit">Quero ser voluntário</a>
            </div>
        </div>
    </div>
</div>
@endsection
</html>