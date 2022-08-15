<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('site/css/home.css')); ?>">
</head>



<?php $__env->startSection('title', $ongs->title); ?>

<?php $__env->startSection('content'); ?>

<div id="ongs-container" class="col-md-12">
    <h4 class="subtitle">Ongs Cadastradas</h4>
    <div id="cards-container" class="row">
        <div class="card col-md-3">
            <img src="<?php echo e(asset('site/img/destaque4.svg')); ?>" alt="<?php echo e($ongs->ong_name); ?>">
            <div class="card-body">
                <p class="ong-name"><?php echo e($ongs->ong_name); ?></p>
                <p class="ong-description"><?php echo e($ongs->description); ?></p>
                <p class="ong-city"><?php echo e($ongs->ong_city); ?></p>
                <p class="ong-statue"><?php echo e($ongs->ong_state); ?></p>
                <p class="ong-volunteers"><?php echo e(count($ongs->usuarios)); ?> Voluntários</p>
                <a href="/ong/join/<?php echo e($ongs->id); ?>" 
                class="btn btn-primary" 
                id="ong-submit">Quero ser voluntário</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\salda\OneDrive - ifsp.edu.br\Área de Trabalho\GOURCE\FastSolutions\Desenvolvimento\resources\views/site/ongs/showOng.blade.php ENDPATH**/ ?>