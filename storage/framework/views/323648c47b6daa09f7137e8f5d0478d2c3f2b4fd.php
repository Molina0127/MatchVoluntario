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
            <tr><th>CNPJ</th><th>Nome</th><th>Proprietario</th><th></th><th></th>
            <?php $__currentLoopData = $ongs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($ong->cnpj); ?></td>
                <td><?php echo e($ong->nome); ?></td>
                <td><?php echo e($ong->proprietario); ?></td>
                <td><a href="<?php echo e(route('editarOng', ['id'=>$ong->id])); ?>" 
                        title="Editar Ong <?php echo e($ong->nome); ?>">Editar</a></td>
                <td><a href="<?php echo e(route('excluirOng', ['id'=>$ong->id])); ?>" 
                        title="Excluir Ong <?php echo e($ong->nome); ?>">Excluir</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </body>
</html>
<?php /**PATH C:\Users\salda\OneDrive - ifsp.edu.br\Área de Trabalho\FastSolutions\Desenvolvimento\resources\views/site/ongs/show.blade.php ENDPATH**/ ?>