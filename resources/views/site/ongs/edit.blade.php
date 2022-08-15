<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <form action="{{route('atualizarOng', ['id'=>$ong->id])}}" method="post">
        @csrf
        <div><label for="ong_name">Ong</label><input type="text" name="ong_name" id="ong_name" value="{{$ong->ong_name}}"></div>
            <div><label for="owner">Proprietario</label><input type="text" name="owner" id="owner" value="{{$ong->owner}}"></div>
            <div><label for="ong_city">Cidade</label><input type="text" name="ong_city" id="ong_city" value="{{$ong->ong_city}}"></div>
            <div><label for="ong_state">Estado</label><input type="text" name="ong_state" id="ong_state" value="{{$ong->ong_state}}"></div>
            <button type="submit">Salvar</button>
            
        </form>
    </body>
</html>