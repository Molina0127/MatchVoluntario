<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('site/css/login.css')}}">
</head>
        <body>
            <h4>Dashboard</h4>
          <table>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
            </tr>
               <tr>
                <td>{{$usuarios}}</td>
              </tr>
          </table>
        </body>
</html>