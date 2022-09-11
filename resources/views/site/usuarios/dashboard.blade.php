<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    
    <link rel="stylesheet" href="{{ asset('site/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
</head>



@extends('layouts.LoggedOng_header')

@section('content')

<div class="container">
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Meu perfil') }}</div>

                @if(!empty($ong_updmsg))
                    <div class="alert alert-success"> {{ $ong_updmsg }}</div>
                @endif

                <div class="card-body">
                <p class="ong-name">Ong:  {{$ong->ong_name}}</p>
                
                        <p class="ong-owner">Proprietário:  {{$ong->owner}} </p>
                        <p class="ong-city">Cidade:  {{$ong->ong_city}} </p>
                        <p class="ong-state">Estado:  {{$ong->ong_state}} </p>

                        <p class="ong-volunteers">{{ count($ong->usuarios) }} Voluntário(s)</p>
                

                    <a href="{{ route('editarOng'
                    , ['id'=>$ong->id])}}"
                        title="Editar Ong {{ $ong->ong_name }}" style="text-decoration:none;">Editar</a>

                    <a href="{{ route('excluirOng', 
                            ['id'=>$ong->id])}}" 
                        title="Excluir Ong {{ $ong->ong_name }}" style="text-decoration:none;">Excluir</a>



                    <br>

                    <br>

                        <a href="{{ route('listaUsuarios') }}" style="text-decoration:none;">Lista dos Usuários</a>
                        <a href="/myVolunteers" style="text-decoration:none;">Voluntários participantes</a>
                    </div>
                        </div>
                            </div>
                                </div>                                 
                                   </div>
@endsection
</html>