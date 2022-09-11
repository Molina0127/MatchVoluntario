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

        <form action="{{route('atualizarOng', ['id'=>$ong->id])}}" method="post">
        @csrf
        @method('PUT')


        @if(session()->has('notfound_ong'))
                    <p class="alert alert-danger">
                        {{session()->get('notfound_ong')}}
                    </p>
        @endif

        
        <div class="textfield">
                            <label for="ong_name">{{ __('ONG') }}</label>

                            <div class="textfield">
                                <input id="ong_name" type="text" class="form-control @error('ong_name') is-invalid @enderror" name="ong_name" value="{{ $ong->ong_name }}" required autocomplete="ong_name" autofocus>

                                @error('ong_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                
    
                        <div class="textfield">
                            <label for="owner">{{ __('Proprietário') }}</label>

                            <div class="textfield">
                                <input id="owner" type="text" class="form-control @error('owner') is-invalid @enderror" name="owner" value="{{ $ong->owner }}">

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
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $ong->description }}">

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
                                <input id="ong_cep" type="text" class="form-control @error('ong_cep') is-invalid @enderror" name="ong_cep" placeholder="00000-000" onblur="pesquisacep(this.value);" value="{{ $ong->ong_cep }}">

                                @error('ong_cep')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="textfield">
                            <label for="ong_city">{{ __('Cidade') }}</label>

                            <div class="textfield">
                                <input id="ong_city" type="text" class="form-control @error('ong_city') is-invalid @enderror" name="ong_city" readonly value="{{ $ong->ong_city }}">

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
                                <input id="ong_state" type="text" class="form-control @error('ong_state') is-invalid @enderror" name="ong_state" readonly value="{{ $ong->ong_state }}">

                                @error('ong_state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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