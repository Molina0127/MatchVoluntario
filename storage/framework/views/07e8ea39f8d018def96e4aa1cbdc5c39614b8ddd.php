<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Ongs</title>
    </head>
    <body>
        <table>
            <tr><th>Nome</th><th>Sobrenome</th><th>E-mail</th><th></th><th></th>
            <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($usuario->nome); ?></td>
                <td><?php echo e($usuario->sobrenome); ?></td>
                <td><?php echo e($usuario->email); ?></td>
                <td><a href="<?php echo e(route('editarUsuario', ['id'=>$usuario->id])); ?>" 
                        title="Editar Usuario <?php echo e($usuario->nome); ?>">Editar</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </body>
</html><?php /**PATH C:\FastSolutions\Desenvolvimento\resources\views/site/usuarios/perfil.blade.php ENDPATH**/ ?>