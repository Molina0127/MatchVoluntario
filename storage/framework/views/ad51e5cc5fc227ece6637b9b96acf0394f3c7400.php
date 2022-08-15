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


<div id="search-container" class="col-md-12">
    <h3>Busque uma ong</h3>
    <form action="/home" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form>
</div>

    <div id="ongs-container" class="col-md-12">
        <?php if($search): ?>
        <h4 class="subtitle">Ongs relacionadas à <?php echo e($search); ?></h4>
        <?php else: ?> 
        <h4 class="subtitle">Ongs Cadastradas</h4>
        <?php endif; ?>
    </div>


    <div id="cards-container" class="row">
        <?php $__currentLoopData = $ongs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card col-md-3">
            <img src="<?php echo e(asset('site/img/destaque4.svg')); ?>" alt="<?php echo e($ong->ong_name); ?>">
            <div class="card-body">
                <p class="card-tittle"><?php echo e($ong->ong_name); ?></p>
                <p class="card-owner"><?php echo e($ong->owner); ?></p>
                <p class="card-owner"><?php echo e($ong->description); ?></p>
                <a href="/ong/<?php echo e($ong->id); ?>" class="btn btn-primary">Saiba mais</a>
            </div>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


</div>


<?php $__env->stopSection(); ?>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\salda\OneDrive - ifsp.edu.br\Área de Trabalho\MATCHVOLUNTARIO\FastSolutions\Desenvolvimento\resources\views/home.blade.php ENDPATH**/ ?>