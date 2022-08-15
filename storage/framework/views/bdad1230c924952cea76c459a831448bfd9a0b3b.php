<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo e(asset('site/css/login.css')); ?>">
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
                <td><?php echo e($LoggedUserinfo['nome']); ?></td>
                <td><?php echo e($LoggedUserinfo['sobrenome']); ?></td>
                <td><?php echo e($LoggedUserinfo['email']); ?></td>
                <td><a href="<?php echo e(route('logoutUser')); ?>">Sair</a>
              </tr>
          </table>
        </body>
</html><?php /**PATH C:\FastSolutions\Desenvolvimento\resources\views/site/usuarios/dashboard.blade.php ENDPATH**/ ?>