<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('site/css/home.css') }}">
</head>



@extends('layouts.user_header')

@section('content')

<div class="container">
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Meu perfil') }}</div>

                <div class="card-body">
                <p class="usuario-nome">Usuário:  {{$usuario->nome}} {{ $usuario->sobrenome }} <a href="{{ route('editarUsuario'
                    , ['id'=>$usuario->id])}}"
                        title="Editar Usuario {{ $usuario->nome }}">Editar</a> <a href="{{ route('excluirUsuario', 
                            ['id'=>$usuario->id])}}" 
                        title="Excluir Usuario {{ $usuario->nome }}">Excluir</a></p>
                
                        <p class="usuario-email">E-mail:  {{$usuario->email}} </p>

                </div>
                
                <div class="card-body">
                    @foreach($ongs as $ong)
                <p class="ong-ong_name">ONG: {{$ong->ong_name}} </p>
                <p class="ong-ong_name">Proprietário: {{$ong->owner}}</p>
                     @endforeach

                <a href="{{ route('listaOngs') }}">Lista das ONGs</a>
                </div>
            </div>
        </div>
    </div> 
</div>
    @endsection
    </html>
