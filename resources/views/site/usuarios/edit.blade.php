<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atualizar Usuário</title>
        <style>
            label{
                float: left;
                display: block;
                width: 90px;
            }
        </style>
    </head>
    <body>
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


        <form action="{{route('atualizarUsuario', ['id'=>$usuario->id])}}" method="post">
        @csrf
        @method('PATCH')


        @if(session()->has('notfound_user'))
                    <p class="alert alert-danger">
                        {{session()->get('notfound_user')}}
                    </p>
        @endif
        
                    <div class="textfield">
                            <label for="email">{{ __('Email') }}</label>

                            <div class="textfield">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="nome@email.com" name="email" value="{{ $usuario->email }}" required autocomplete="email">

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
                                <input id="cep" type="text" class="form-control @error('cep') is-invalid @enderror" name="cep" placeholder="00000-000" value="{{ $usuario->cep }}" onblur="pesquisacep(this.value);" required autocomplete="cep" autofocus>
                            </div>
                        </div>

                        <div class="textfield">
                            <label for="cidade">{{ __('Cidade') }}</label>

                            <div class="textfield">
                                <input id="cidade" type="text" class="form-control @error('cidade') is-invalid @enderror" name="cidade" value="{{ $usuario->cidade }}" readonly required autocomplete="cidade" autofocus>
                            </div>
                        </div>

                        <div class="textfield">
                            <label for="estado">{{ __('Estado') }}</label>

                            <div class="textfield">
                                <input id="estado" type="text" class="form-control @error('estado') is-invalid @enderror" name="estado" value="{{ $usuario->estado }}" readonly required autocomplete="estado" autofocus>
                            </div>
                        </div> 

                        <div class="textfield">
                            <label for="password">{{ __('Nova Senha') }}</label>

                            <div class="textfield">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

            <button type="submit">Atualizar</button>
            
        </form>
    </body>
</html>