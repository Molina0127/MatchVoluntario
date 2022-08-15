<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Usuários</title>
    </head>
    <body>
        <table>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
                <th>datanasc</th>
                <th>cpf</th>
                <th>Editar</th>
            <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($usuario->nome); ?></td>
                <td><?php echo e($usuario->sobrenome); ?></td>
                <td><?php echo e($usuario->email); ?></td>
                <td><?php echo e($usuario->datanasc); ?></td>
                <td><?php echo e($usuario->cpf); ?></td>
                
                <td><a href="<?php echo e(route('editarUsuario', ['id'=>$usuario->id])); ?>" 
                        title="Editar Usuario <?php echo e($usuario->nome); ?>">Editar</a></td>
                        <td><a href="<?php echo e(route('excluirUsuario', ['id'=>$usuario->id])); ?>" 
                        title="Excluir Usuario <?php echo e($usuario->nome); ?>">Excluir</a></td>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </body>
</html><?php /**PATH D:\Downloads\FastSolutions\Desenvolvimento\resources\views/site/usuarios/show.blade.php ENDPATH**/ ?>