<?php use Illuminate\Support\Facades\DB; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    
    <link rel="stylesheet" href="{{ asset('site/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
</head>



@extends('layouts.loggedOng_header')

@section('content')

<div class="container">
    
        @if(session()->has('delRequest'))
            <p class="alert alert-danger">
                {{session()->get('delRequest')}}
            </p>
        @endif

     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Meus convites de voluntários') }}</div>

                <div class="card-body">
                @if($show->count()> 0)    
                @foreach($show as $show)
                        <?php
                        
                        $check = DB::table('entidades')
                        ->where('status',1)->get();
                        if($check == true){

                        

                        ?>
                        <div class="card-body">
                        
                        <img src="{{ asset('site/img/destaque4.svg') }}" alt="{{ $show->nome }}">
                            <div class="card-body">
                                <p class="usuario-nome">Nome:{{$show->nome}}</p>
                            
                                    <a href="/confirm/{{$show->id}}/" 
                                    class="btn btn-primary">Aceitar pedido</a>

                                    <a href="/delrequest/{{$show->id}}/" 
                                    class="btn btn-danger">Recusar pedido</a>
                         <?php } ?>   
                    @endforeach
                    @else
                    <h5>Nenhum pedido pendente!</h5>
                    @endif

                </div>
                    </div>
                        </div>
                            </div>
                                </div>
                                    </div>
                                        </div>

@endsection
</html>