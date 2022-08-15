<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('site/css/home.css')); ?>">
</head>





<?php $__env->startSection('content'); ?>

<div class="container">
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Meu perfil')); ?></div>

                <div class="card-body">
                <p class="usuario-nome">Usuário:  <?php echo e($usuario->nome); ?> <?php echo e($usuario->sobrenome); ?> <a href="<?php echo e(route('editarUsuario'
                    , ['id'=>$usuario->id])); ?>"
                        title="Editar Usuario <?php echo e($usuario->nome); ?>">Editar</a> <a href="<?php echo e(route('excluirUsuario', 
                            ['id'=>$usuario->id])); ?>" 
                        title="Excluir Usuario <?php echo e($usuario->nome); ?>">Excluir</a></p>
                
                        <p class="usuario-email">E-mail:  <?php echo e($usuario->email); ?> </p>

                </div>
                
                <div class="card-body">
                    <?php $__currentLoopData = $ongs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p class="ong-ong_name">ONG: <?php echo e($ong->ong_name); ?> </p>
                <p class="ong-ong_name">Proprietário: <?php echo e($ong->owner); ?></p>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <a href="<?php echo e(route('listaOngs')); ?>">Lista das ONGs</a>
                </div>
            </div>
        </div>
    </div> 
</div>
    <?php $__env->stopSection(); ?>
    </html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\salda\OneDrive - ifsp.edu.br\Área de Trabalho\GOURCE\FastSolutions\Desenvolvimento\resources\views/site/ongs/dashboard.blade.php ENDPATH**/ ?>