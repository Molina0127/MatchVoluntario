<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('site/css/newLogin.css') }}">
</head>
<body>

    <main class="card">
        <section class="esquerda">
            <img src="{{ asset('site/img/LogoMatch.svg')}}" alt="Imagem Logo" srcset="" class="imagem_logo">
            <h3 class="titulo_login">Login</h3>
            <span class="subtitulo">Acesse a plataforma</span>
            <form action="">
                <section class="caixa_input">
                    <label for="">Email</label>
                    <input type="text" name="" id="" placeholder="Email">
                </section>
                <section class="caixa_input">
                    <label for="">Senha</label>
                    <input type="password" name="" id="" placeholder="Senha">
                </section>
            </form>
            <section class="controle_salvamento">
                <span class="esqueceu_senha">
                    Esqueceu sua senha?
                </span>
            </section>
            <section class="controle_acesso">
                <button type="submit" class="login">Login</button>
                <button type="submit" class="botao_registrar">
                    <span class="botao_registrar--texto">Registrar</span>
                </button>
            </section>

            <section class="separador">
                <span></span>
                <span>ou faça login social</span>
                <span></span>
            </section>

            <section class="controle_login-social">
                <a href="#">
                    <img src="{{ asset('site/img/logo-google.png') }}" alt="Logo Google">
                    Login com Google
                </a>
                <a href="#">
                    <img src="{{ asset('site/img/logo-facebook.png') }}" alt="Logo Google">
                    Login com Facebook
                </a>
            </section>
        </section>

        <section class="direita">
            <div class="background_imagem">
                <div class="detalhe_vidro">
                    <div class="detalhe_vidro--interno">
                        <span>Encontre Pessoas e Projetos que vão impactar a sua vida</span>
                    </div>
                </div>
                <img src="{{ asset('site/img/LoginTest.svg') }}" alt="Imagem Fundo">
            </div>
        </section>

    </main>


    
</body>
</html>
