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
            <div><label for="nome">Nome</label><input type="text" name="nome" id="nome" value="<?php echo e($usuario->nome); ?>"></div>
            <div><label for="sobrenome">Sobrenome</label><input type="text" name="sobrenome" id="sobrenome" value="<?php echo e($usuario->sobrenome); ?>"></div>
            <div><label for="email">E-mail</label><input type="text" name="email" id="email" value="<?php echo e($usuario->email); ?>"></div>
            <div><label for="datanasc">Data de nascimento</label><input type="date" name="datanasc" id="datanasc" value="<?php echo e($usuario->datanasc); ?>"></div>
            <button type="submit">Salvar</button>
            
        </form>
    </body>
</html><?php /**PATH C:\FastSolutions\Desenvolvimento\resources\views/site\usuarios\edit.blade.php ENDPATH**/ ?>