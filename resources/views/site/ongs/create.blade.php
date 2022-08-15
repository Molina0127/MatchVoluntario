<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        
        <div class="main-login">
            
            

                <div class="left-login">
                    <h1>Cadastre sua Ong aqui<h1>
                </div>

                <div class="right-login">
                    <div class="card-login">
                        <h1>Cadastro</h1>

                        {!! Form::open(['route' => 'saveOng']) !!}
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
                            <label for="ong_city">{{ __('Cidade') }}</label>

                            <div class="textfield">
                                <input id="ong_city" type="text" class="form-control @error('ong_city') is-invalid @enderror" name="ong_city" value="{{ old('ong_city') }}" required autocomplete="ong_city" autofocus>

                                @error('ong_city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="textfield">
                            <label for="ong_state">{{ __('Estado') }}</label>

                            <div class="textfield">
                                <input id="ong_state" type="text" class="form-control @error('ong_state') is-invalid @enderror" name="ong_state" placeholder="Digite a sigla" value="{{ old('ong_state') }}" required autocomplete="ong_state" autofocus>

                                @error('ong_state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>            
                        
                        <div class="form-group @if($errors->has('categoria_id')) has-error @endif">
                        {!! Form::label('Categoria') !!}
                       {!! Form::select ('categoria_id[]', $categorias, null, ['class' => 'form-control', 'id' => 'categoria_id', 'multiple']) !!}
                        @if($errors->has('categoria_id'))
                            <span class="help-block">{!! $errors->first('categoria_id') !!}</span>
                        @endif
                    </div>
                        
                        
                     <div class="textfield">
                            <label for="ong_cep">{{ __('CEP') }}</label>

                            <div class="textfield">
                                <input id="ong_cep" type="text" class="form-control @error('ong_cep') is-invalid @enderror" name="ong_cep" placeholder="00000-000" value="{{ old('ong_cep') }}" required autocomplete="ong_cep" autofocus>

                                @error('ong_cep')
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
                        
                        <div>
                            {!! Form::submit('Salvar', ['class' => 'btn-login']) !!}
                            {!! Form::close() !!}
                        </div>
                        
                    </div>



                
                
                
            </form>
        </div>
            

    </body>
</html>


