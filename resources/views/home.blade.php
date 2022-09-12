<!DOCTYPE html>
<html lang="en">
<head>



<meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>


    <!-- Styles -->
    
    <link rel="stylesheet" href="{{ asset('site/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
    
    <link rel="stylesheet" href="{{ asset('site/css/newHome.css')}}">

</head>



@extends('layouts.user_header') 

<!-- @section('content') -->

<!-- <div class="container"> -->
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Você está logado!') }}
                    <a href="{{ route('listaOngs') }}">Lista das ONGs</a>
                    <a href="{{ route('listaUsuarios') }}">Lista dos Usuários </a>
                </div>
            </div>
        </div>
    </div> 
</div> -->

@section('content')

<div id="search-container" class="col-md-12">
    <h3>Busque uma ong</h3>
    <form action="/home" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form>
</div>

    <!-- <div id="ongs-container" class="col-md-12">
        <h4 class="subtitle">Ongs Cadastradas</h4>
    </div> -->


    <!-- <div id="cards-container" class="row">
        @foreach($ongs as $ong)
        <div class="card col-md-3">
            <img src="{{ asset('site/img/destaque4.svg') }}" alt="{{ $ong->ong_name }}">
            <div class="card-body">
                <p class="card-tittle">{{$ong->ong_name}}</p>
                <p class="card-owner">{{$ong->owner}}</p>
                <p class="card-owner">{{$ong->description}}</p>
                <a href="/ong/{{ $ong->id }}" class="btn btn-primary">Saiba mais</a>
            </div>
        </div>

        @endforeach
    </div> -->



@endsection


    <!-- <section>
        <div class="container">
            <div class="content">
                <div class="card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('site/css/Foto-de-perfil-linkedin-recortada.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

@section('card')
<section class="first-section">
    <section>
        <div class="swiper mySwiper container">
            <div class="swiper-wrapper content">
                @foreach($ongs as $ong)
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            @if($ong->ong_image == null)
                            <img src="{{ asset('site/img/destaque4.svg') }}" alt="{{ $ong->ong_name }}">
                            @else
                            <img src="/img/ongs/{{$ong->ong_image}}" alt="{{$ong->ong_image}}">
                            @endif
                        </div>

                        <div class="media-icons">
                            <img src="{{ asset('site/img/facebook.svg')}}" alt="Logo Facebook">
                            <img src="{{ asset('site/img/twitter.svg')}}" alt="Logo Twitter">
                            <img src="{{ asset('site/img/instagram.svg')}}" alt="Logo Instagram">
                        </div>

                        <div class="information">
                            <p class="card-title">{{$ong->ong_name}}</p>
                            <p class="card-owner">{{$ong->owner}}</p>
                            <p class="card-description">
                                {{$ong->description}}
                            </p>
                            
                        </div>

                        <div class="button">
                            <button class="learnMore">
                            
                            
                            <a href="/ong/{{ $ong->id }}">
                            Saiba mais    
                            </a>
                            
                            </button>
                        </div>

                    </div>
                </div>
                @endforeach

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('site/img/Foto-de-perfil-linkedin-recortada.jpeg') }}" alt="">
                        </div>

                        <div class="media-icons">
                            <img src="{{ asset('site/img/facebook.svg')}}" alt="Logo Facebook">
                            <img src="{{ asset('site/img/twitter.svg')}}" alt="Logo Twitter">
                            <img src="{{ asset('site/img/instagram.svg')}}" alt="Logo Instagram">
                        </div>

                        <div class="information">
                            <p class="card-title">Ong de Estudos Importantes</p>
                            <p class="card-owner">João Oliveira</p>
                            <p class="card-description">
                                Nós focamos em estudar ciência que impacta positivamente a
                                vida de milhões de brasileiros
                            </p>
                            
                        </div>

                        <div class="button">
                            
                            <button class="learnMore">
                                <a href="">Saiba mais</a>
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    
    
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
        

    </section>  
    

</section>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    });
</script> 

@endsection

</html>