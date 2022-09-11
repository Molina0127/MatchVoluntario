<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('site/css/register.css') }}">

        <title>Cadastrar Nova Ong</title>
        
        <style>
            label{
                float: left;
                display: block;
                width: 90px;
            }
        </style>
        
    </head>

    <body>
    
    @extends('layouts.ong_header')

    @section('content')

        <div class="main-login">
                <div class="left-login">
                    <h1>Cadastre sua Ong aqui<h1>
                </div>

                <div class="right-login">
                    <div class="card-login">
                        <h1>Cadastro</h1>

                        
                    @if(session()->has('ong_savemsg'))
                        <p class="alert alert-sucess">
                            {{session()->get('ong_savemsg')}}
                        </p>
                    @endif

                    @if(session()->has('failcnpj_msg'))
                        <p class="alert alert-danger">
                            {{session()->get('failcnpj_msg')}}
                        </p>
                    @endif
                        <form action="{{route('saveOng')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="textfield">
                            <label for="ong_name">{{ __('ONG') }}</label>

                            <div class="textfield">
                                <input id="ong_name" type="text" class="form-control @error('ong_name') is-invalid @enderror" name="ong_name" value="{{ old('ong_name') }}" required autocomplete="ong_name" autofocus>

                                @error('ong_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <br>

                        <div class="form-group">
                            <label for="ong_image">Buscar Foto</label>
                            <input type="file" id="ong_image" name="ong_image" class="form-control-file">
                        </div>
                    
                        <div class="textfield">
                            <label for="cnpj">{{ __('CNPJ') }}</label>

                            <div class="textfield">
                                <input id="cnpj" type="text" class="form-control @error('cnpj') is-invalid @enderror" name="cnpj" placeholder="00.000.000/0000-00" value="{{ old('cnpj') }}" required autocomplete="cnpj" autofocus>

                                @error('cnpj')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                        <div class="textfield">
                            <label for="owner">{{ __('Proprietário') }}</label>

                            <div class="textfield">
                                <input id="owner" type="text" class="form-control @error('owner') is-invalid @enderror" name="owner" value="{{ old('owner') }}" required autocomplete="owner" autofocus>

                                @error('owner')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="textfield">
                            <label for="description">{{ __('Descrição') }}</label>

                            <div class="textfield">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="textfield">
                            <label for="ong_cep">{{ __('CEP') }}</label>

                            <div class="textfield">
                                <input id="ong_cep" type="text" class="form-control @error('ong_cep') is-invalid @enderror" name="ong_cep" placeholder="00000-000" value="{{ old('ong_cep') }}" onblur="pesquisacep(this.value);" required autocomplete="ong_cep" autofocus>
                            </div>
                        </div>

                        <div class="textfield">
                            <label for="ong_city">{{ __('Cidade') }}</label>

                            <div class="textfield">
                                <input id="ong_city" type="text" class="form-control @error('ong_city') is-invalid @enderror" name="ong_city" value="{{ old('ong_city') }}" readonly required autocomplete="ong_city" autofocus>
                            </div>
                        </div>

                        <div class="textfield">
                            <label for="ong_state">{{ __('Estado') }}</label>

                            <div class="textfield">
                                <input id="ong_state" type="text" class="form-control @error('ong_state') is-invalid @enderror" name="ong_state" value="{{ old('ong_state') }}" readonly required autocomplete="ong_state" autofocus>
                            </div>
                        </div>            
                        
                        <br>
                        
                        <div class="form-group @if($errors->has('categoria_id')) has-error @endif">
                        {!! Form::label('Categoria') !!}
                       {!! Form::select ('categoria_id[]', $categorias, null, ['class' => 'form-control', 'required', 'id' => 'categoria_id', 'multiple' => 'max:2']) !!}
                        @if($errors->has('categoria_id'))
                            <span class="help-block">{!! $errors->first('categoria_id') !!}</span>
                        @endif
                    </div>

                    <br>
                                                

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

                        <div>
                            {!! Form::submit('Salvar', ['class' => 'btn-login']) !!}
                            {!! Form::close() !!}
                        </div>
                    </form>                        
                </div>

            </form>
        </div>
            
    @endsection

        <script>

            function limpa_formulário_cep() {
                    //Limpa valores do formulário de cep.
                    document.getElementById('ong_city').value("");
                    document.getElementById('ong_state').value=("");
            }

            function meu_callback(conteudo) {
                if (!("erro" in conteudo)) {
                    //Atualiza os campos com os valores.
                    document.getElementById('ong_city').value=(conteudo.localidade);
                    document.getElementById('ong_state').value=(conteudo.uf);
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
                        document.getElementById('ong_city').value="...";
                        document.getElementById('ong_state').value="...";

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

    </body>    
</html>


