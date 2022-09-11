

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset ('site/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/login.css')}}">
    <title>Login</title>
</head>

<body>
@extends('layouts.ong_header')
@section('content') 

    <div class="main-login">
        <div class="left-login">
            <h1>Faça login e dê match!</h1>
            <img src="{{ asset('site/img/img_login.svg') }}" class="image" alt="animação">
        </div>
        <div class="right-login">
            <div class="card-login">
            <form action="{{ route('authOng') }}" method="post">
                    @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif

                    @csrf
                <div class="textfield">
                    <label for="ong_name">ONG</label>
                    <input type="text" name="ong_name" placeholder="Digite aqui" value="{{ old ('ong_name') }}">
                    <span class="text-danger">@error ('ong_name') {{$message}} @enderror</span>
                </div>
                <div class="textfield">
                    <label for="password">Senha</label>
                    <input type="password" name="password" placeholder="Digite aqui" value="{{ old ('password') }}">
                    <span class="text-danger">@error ('password') {{$message}} @enderror</span>
                </div>
                <button class="btn-login">Logar</button>
            </div>
        </div>
    </div>
</body>
</html>
@endsection