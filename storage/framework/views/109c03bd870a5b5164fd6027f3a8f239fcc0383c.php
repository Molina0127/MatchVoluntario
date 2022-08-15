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
        <form action="<?php echo e(route('atualizarUsuario', ['id'=>$usuario->id])); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
            <div><label for="email">E-mail</label>
            <input type="text" name="email" id="email" value="<?php echo e($usuario->email); ?>">
        </div>
            <button type="submit">Salvar</button>
            
        </form>
    </body>
</html><?php /**PATH C:\Users\salda\OneDrive - ifsp.edu.br\Área de Trabalho\FastSolutions\Desenvolvimento\resources\views/site\usuarios\edit.blade.php ENDPATH**/ ?>