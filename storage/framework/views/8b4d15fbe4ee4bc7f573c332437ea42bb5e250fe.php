<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    
    <link rel="stylesheet" href="<?php echo e(asset('site/css/home.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('site/css/main.css')); ?>">
</head>





<?php $__env->startSection('content'); ?>

<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('Você está logado!')); ?>

                    <a href="<?php echo e(route('listaOngs')); ?>">Lista das ONGs</a>
                    <a href="<?php echo e(route('listaUsuarios')); ?>">Lista dos Usuários </a>
                </div>
            </div>
        </div>
    </div> -->
</div>


    <div id="cards-container" class="row">
        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card col-md-3">
            <img src="<?php echo e(asset('site/img/destaque4.svg')); ?>" alt="<?php echo e($usuario->nome); ?>">
            <div class="card-body">
                <p class="card-tittle"><?php echo e($usuario->nome); ?></p>
                <p class="card-owner"><?php echo e($usuario->sobrenome); ?></p>
                <p class="card-owner"><?php echo e($usuario->email); ?></p>
                <a href="/usuario/<?php echo e($usuario->id); ?>" class="btn btn-primary">Saiba mais</a>
                
            </div>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


</div>


<?php $__env->stopSection(); ?>
</html>
<?php echo $__env->make('layouts.loggedOng_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\salda\OneDrive - ifsp.edu.br\Área de Trabalho\FastSolutions\Desenvolvimento\resources\views/site/ongs/HomeOng.blade.php ENDPATH**/ ?>