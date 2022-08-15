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
        <form action="{{route('atualizarUsuario', ['id'=>$usuario->id])}}" method="post">
        @csrf
        @method('PUT')
            <div><label for="email">E-mail</label>
            <input type="text" name="email" id="email" value="{{$usuario->email}}">
        </div>
            <button type="submit">Salvar</button>
            
        </form>
    </body>
</html>