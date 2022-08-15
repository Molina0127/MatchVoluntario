<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('site/css/home.css') }}">
</head>



@extends('layouts.LoggedOng_header')

@section('content')

<div class="container">
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Meu perfil') }}</div>

                <div class="card-body">
                <p class="usuario-nome">Ong:  {{$ong->ong_name}}<a href="{{ route('editarOng'
                    , ['id'=>$ong->id])}}"
                        title="Editar Ong {{ $ong->ong_name }}">Editar</a> <a href="{{ route('excluirOng', 
                            ['id'=>$ong->id])}}" 
                        title="Excluir Ong {{ $ong->ong_name }}">Excluir</a></p>
                
                        <p class="ong-owner">Proprietário:  {{$ong->owner}} </p>
                        <p class="ong-city">Cidade:  {{$ong->ong_city}} </p>
                        <p class="ong-state">Estado:  {{$ong->ong_state}} </p>

                        <p class="ong-volunteers">{{ count($ong->usuarios) }} Voluntário(s)</p>
                        
                        

                </div>
                
               

                <a href="{{ route('listaUsuarios') }}">Lista dos Usuários</a>
                </div>
            </div>
        </div>
    </div> 
</div>
    @endsection
    </html>