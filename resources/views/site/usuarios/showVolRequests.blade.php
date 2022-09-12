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



@extends('layouts.user_header')

@section('content')

<div class="container">

        @if(session()->has('delVolRequest'))
                    <p class="alert alert-danger">
                        {{session()->get('delVolRequest')}}
                    </p>
                @endif
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Meus convites de Ongs') }}</div>

                <div class="card-body">
                @if($showVol->count()> 0)    
                @foreach($showVol as $showVol)
                        <?php
                        
                        $check = DB::table('entidade_volunteers')
                        ->where('reqstatus',1)->get();
                        if($check == true){

                        

                        ?>
                        <div class="card-body">
                        
                        <div class="image">
                            @if($showVol->ong_image == null)
                            <img src="{{ asset('site/img/destaque4.svg') }}" alt="{{ $showVol->ong_name }}">
                            @else
                            <img src="/img/ongs/{{$showVol->ong_image}}" alt="{{$showVol->ong_image}}">
                            @endif
                        </div>

                            <div class="card-body">
                                <p class="ong-name">Ong:{{$showVol->ong_name}}</p>
                            
                                    <a href="/confirmVol/{{$showVol->id}}/" 
                                    class="btn btn-primary">Aceitar pedido</a>

                                    <a href="/delVolrequest/{{$showVol->id}}/" 
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