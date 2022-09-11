<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('site/css/home.css') }}">
</head>



@extends('layouts.loggedOng_header')

@section('content')

<div class="container">
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
            @if(session()->has('removeVol'))
                    <p class="alert alert-danger">
                        {{session()->get('removeVol')}}
                    </p>
                @endif

                <div class="card-header">{{ __('Meus Voluntários') }}</div>

            <div class="card-body">

            @foreach($usuarios as $usuario)
                
                <p class="usuario-nome">Voluntário:  {{$usuario->nome}} {{ $usuario->sobrenome }}
                <p class="usuario-email">E-mail:  {{$usuario->email}} </p>
                
                <form action="/usuario/leave/{{$usuario->id}}">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger delete-btn">
                        <ion-icon name="trash-outline"></ion-icon>Remover Voluntário
                    </button>
                </form>
           @endforeach   
           
           <a href="{{ route('listaUsuarios') }}">Lista dos Usuários</a>
            </div>
                </div>
            </div>
        </div>
    </div> 
    @endsection
    </html>