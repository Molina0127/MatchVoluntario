<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap"
      rel="stylesheet"
    />

    <a href="https://storyset.com/social-media"></a>
    <link rel="stylesheet" href="{{ secure_asset('css/owl/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{ secure_asset('css/owl/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{ secure_asset('site/css/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{ secure_asset('site/css/main.css')}}" />
    
    <link rel="stylesheet" href="{{ secure_asset('site/css/style.css')}}"/>

    <title>Match Voluntário</title>
  </head>
  <body>
    <!--HEADER-->
    <div id="header">
      <div class="container">
        <nav
          class="navbar navbar-expand-lg navbar-light justify-content-between"
        >
          <a class="navbar-brand" href="#">
            <img src="{{ asset('site/img/LogoMatch.svg')}}" class="img-fluid" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('index')}}">Página Inicial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sobre">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Quem somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">cadastrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!--//HEADER-->
    <body>
<html>