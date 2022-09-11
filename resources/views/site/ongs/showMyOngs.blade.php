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
           
            @if(session()->has('leaveong'))
                    <p class="alert alert-danger">
                        {{session()->get('leaveong')}}
                    </p>
                @endif

                <div class="card-header">{{ __('Ongs que participo') }}</div>
                
                <div class="card-body">
                    
                @foreach($ongs as $ong)
                
                <p class="ong-ong_name">ONG: {{$ong->ong_name}} </p>
                <p class="ong-ong_name">Proprietário: {{$ong->owner}}</p>

                <form action="/ong/leave/{{$ong->id}}">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger delete-btn">
                        <ion-icon name="trash-outline"></ion-icon>Remover participação da Ong
                    </button>
                </form>
                    
                @endforeach

                <a href="{{ route('listaOngs') }}">Lista das ONGs</a>
                </div>
            </div>
        </div>
    </div> 
</div>
    @endsection
    </html>