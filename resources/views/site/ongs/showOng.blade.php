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

@section('title', $ongs->title)

<!-- @section('content')

<div id="ongs-container" class="col-md-12">
        
        @if(session()->has('addent'))
            <p class="alert alert-sucess">
                {{session()->get('addent')}}
            </p>
        @endif

        @if(session()->has('delent'))
            <p class="alert alert-danger">
                {{session()->get('delent')}}
            </p>
        @endif
        
    <h4 class="subtitle">Ongs Cadastradas</h4>
    <div id="cards-container" class="row">
        <div class="card col-md-3">
            <img src="{{ asset('site/img/destaque4.svg') }}" alt="{{ $ongs->ong_name }}">
            <div class="card-body"> 


                <p class="ong-name">Ong:{{$ongs->ong_name}}</p>
                <p class="ong-description">Descrição:{{$ongs->description}}</p>
                <p class="ong-city">Cidade:{{$ongs->ong_city}}</p>
                <p class="ong-statue">UF:{{$ongs->ong_state}}</p>
                <p class="category">Categoria:{{$ong_categorias}}</p>
                <p class="ong-volunteers">{{ count($ongs->usuarios) }} Voluntários</p>
                
                @if(!$hasUserJoined)
                <a href="/entidade/{{$ongs->id}}/" 
                class="btn btn-primary">Enviar pedido</a>

                @else
                    <p>Você já está participando desta Ong</p>

                    <form action="/ong/leave/{{$ongs->id}}">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger delete-btn">
                        <ion-icon name="trash-outline"></ion-icon>Remover participação da Ong
                    </button>
                </form>

                @endif

                      
            </div>
        </div>
    </div>
</div>
@endsection -->


</html>