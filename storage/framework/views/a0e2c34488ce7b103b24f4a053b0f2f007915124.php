<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('site/css/home.css')); ?>">
</head>



<?php $__env->startSection('title', $usuarios->title); ?>

<?php $__env->startSection('content'); ?>

<div id="usuarios-container" class="col-md-12">
    <h4 class="subtitle">Voluntários Cadastrados</h4>
    <div id="cards-container" class="row">
        <div class="card col-md-3">
            <img src="<?php echo e(asset('site/img/destaque4.svg')); ?>" alt="<?php echo e($usuarios->nome); ?>">
            <div class="card-body">
                <p class="usuario-nome">Nome:<?php echo e($usuarios->nome); ?></p>
                <p class="usuario-sobrenome">Sobrenome:<?php echo e($usuarios->sobrenome); ?></p>
                <p class="usuario-email">E-mail:<?php echo e($usuarios->email); ?></p>
                <p class="usuario-datanasc">Data de nascimento:<?php echo e($usuarios->datanasc); ?></p>
                <p class="usuario-cpf">CPF:<?php echo e($usuarios->cpf); ?></p>
                <p class="ong-volunteers"><?php echo e(count($usuarios->ongs)); ?> Ong(s) que participa</p>
                <a href="/usuario/join/<?php echo e($usuarios->id); ?>" 
                class="btn btn-primary" 
                id="ong-submit">Convidar voluntário</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
</html>
<?php echo $__env->make('layouts.loggedOng_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\salda\OneDrive - ifsp.edu.br\Área de Trabalho\FastSolutions\Desenvolvimento\resources\views/site/usuarios/showUsuario.blade.php ENDPATH**/ ?>