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
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Meu perfil') }}</div>

                <div class="card-body">
                    <p class="usuario-nome">Usuário:  {{$usuario->nome}} {{ $usuario->sobrenome }} </p>
                    <p class="usuario-cep">CEP:{{$usuario->cep}}</p>
                    <p class="usuario-city">Cidade:{{$usuario->cidade}}</p>
                    <p class="usuario-estado">Estado:{{$usuario->estado}}</p>

                    <p class="usuario-email">E-mail:  {{$usuario->email}} </p>

                    <a href="{{ route('editarUsuario'
                        , ['id'=>$usuario->id])}}"
                            title="Editar Usuario {{ $usuario->nome }}" style="text-decoration:none;">Editar</a>

                        <a href="{{ route('excluirUsuario', 
                                    ['id'=>$usuario->id])}}" 
                                title="Excluir Usuario {{ $usuario->nome }}" style="text-decoration:none;">Excluir perfil</a>


                        <br>
                        
                        <br>

                        <a href="{{ route('listaOngs') }}" style="text-decoration:none;">Lista das ONGs</a>
                        <a href="/myongs" style="text-decoration:none;">Ongs que participo</a>

                    </div>
                        </div>
                            </div>
                                </div>
                                    </div>
@endsection
</html>
