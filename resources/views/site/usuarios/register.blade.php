<!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
            <link rel="stylesheet" href="{{ asset('site/css/register.css') }}">
            <title>Cadastro</title>
        </head>
        
        <body>
    
@extends('layouts.user_header')

@section('content')

@endsection

            @section('register')
            <div class="main-login">
                <div class="left-login">
                    <h1>Cadastre-se aqui!</h1>
                    <img src="{{ asset('site/img/img_register.svg')}}" class="image" alt="animação">
                </div>
                <div class="right-login">
                    <div class="card-login">
                        <h1>Cadastro</h1>
                    
                    @if(session()->has('user_savemsg'))
                        <p class="alert alert-sucess">
                            {{session()->get('user_savemsg')}}
                        </p>
                    @endif

                        {!! Form::open(['route' => 'saveUsuario']) !!}
                        @csrf

                        <div class="textfield">
                            <label for="nome">{{ __('Nome') }}</label>

                            <div class="textfield">
                                <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" placeholder="Digite aqui" name="nome" value="{{ old('nome') }}" required autocomplete="nome" autofocus>

                                @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="textfield">
                            <label for="sobrenome">{{ __('Sobrenome') }}</label>

                            <div class="textfield">
                                <input id="sobrenome" type="text" class="form-control @error('sobrenome') is-invalid @enderror" name="sobrenome" value="{{ old('sobrenome') }}" required autocomplete="sobrenome" autofocus>

                                @error('sobrenome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="textfield">
                            <label for="email">{{ __('Email') }}</label>

                            <div class="textfield">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="nome@email.com" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="textfield">
                            <label for="cep">{{ __('CEP') }}</label>

                            <div class="textfield">
                                <input id="cep" type="text" class="form-control @error('cep') is-invalid @enderror" name="cep" placeholder="00000-000" value="{{ old('cep') }}" onblur="pesquisacep(this.value);" required autocomplete="cep" autofocus>
                            </div>
                        </div>

                        <div class="textfield">
                            <label for="cidade">{{ __('Cidade') }}</label>

                            <div class="textfield">
                                <input id="cidade" type="text" class="form-control @error('cidade') is-invalid @enderror" name="cidade" value="{{ old('cidade') }}" readonly required autocomplete="cidade" autofocus>
                            </div>
                        </div>

                        <div class="textfield">
                            <label for="estado">{{ __('Estado') }}</label>

                            <div class="textfield">
                                <input id="estado" type="text" class="form-control @error('estado') is-invalid @enderror" name="estado" value="{{ old('estado') }}" readonly required autocomplete="estado" autofocus>
                            </div>
                        </div>  

                        <div class="textfield">
                            <label for="nasc">{{ __('Data de nascimeto') }}</label>

                            <div class="textfield">
                                <input id="dn" type="date" class="form-control @error('datanasc') is-invalid @enderror" name="datanasc" placeholder="DD/MM/AAAA" value="{{ old('datanasc') }}" required autocomplete="datanasc" autofocus>

                                @error('datanasc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group @if($errors->has('categoria_id')) has-error @endif">
                        {!! Form::label('Categoria de preferência') !!}
                       {!! Form::select ('categoria_id[]', $categorias, null, ['class' => 'form-control', 'required', 'id' => 'categoria_id', 'multiple']) !!}
                        @if($errors->has('categoria_id'))
                            <span class="help-block">{!! $errors->first('categoria_id') !!}</span>
                        @endif
                    </div>


                        <div class="textfield">
                            <label for="cpf">{{ __('CPF') }}</label>

                            <div class="textfield">
                                <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf"  placeholder="123.456.789-10" value="{{ old('cpf') }}" required autocomplete="cpf" autofocus maxlength="14">

                                @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="textfield">
                            <label for="password">{{ __('Senha') }}</label>

                            <div class="textfield">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <button class="btn-login">Cadastrar</button>
                    </form>
                </div>
        </div>

    <!-- Scripts -->
    <script src="{{ asset('site/js/data.js')}}"></script>

    <script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('cidade').value=("");
            document.getElementById('estado').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('estado').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('cidade').value="...";
                document.getElementById('estado').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
    @endsection



</body>


</html>
