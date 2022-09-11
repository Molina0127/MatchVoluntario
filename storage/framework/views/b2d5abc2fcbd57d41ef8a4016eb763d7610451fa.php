<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('site/css/home.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('site/css/main.css')); ?>">
</head>



<?php $__env->startSection('title', $ongs->title); ?>

<!-- <?php $__env->startSection('content'); ?>

<div id="ongs-container" class="col-md-12">
        
        <?php if(session()->has('addent')): ?>
            <p class="alert alert-sucess">
                <?php echo e(session()->get('addent')); ?>

            </p>
        <?php endif; ?>

        <?php if(session()->has('delent')): ?>
            <p class="alert alert-danger">
                <?php echo e(session()->get('delent')); ?>

            </p>
        <?php endif; ?>
        
    <h4 class="subtitle">Ongs Cadastradas</h4>
    <div id="cards-container" class="row">
        <div class="card col-md-3">
            <img src="<?php echo e(asset('site/img/destaque4.svg')); ?>" alt="<?php echo e($ongs->ong_name); ?>">
            <div class="card-body"> 


                <p class="ong-name">Ong:<?php echo e($ongs->ong_name); ?></p>
                <p class="ong-description">Descrição:<?php echo e($ongs->description); ?></p>
                <p class="ong-city">Cidade:<?php echo e($ongs->ong_city); ?></p>
                <p class="ong-statue">UF:<?php echo e($ongs->ong_state); ?></p>
                <p class="category">Categoria:<?php echo e($ong_categorias); ?></p>
                <p class="ong-volunteers"><?php echo e(count($ongs->usuarios)); ?> Voluntários</p>
                
                <?php if(!$hasUserJoined): ?>
                <a href="/entidade/<?php echo e($ongs->id); ?>/" 
                class="btn btn-primary">Enviar pedido</a>

                <?php else: ?>
                    <p>Você já está participando desta Ong</p>

                    <form action="/ong/leave/<?php echo e($ongs->id); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("DELETE"); ?>
                    <button type="submit" class="btn btn-danger delete-btn">
                        <ion-icon name="trash-outline"></ion-icon>Remover participação da Ong
                    </button>
                </form>

                <?php endif; ?>

                      
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?> -->


</html>
<?php echo $__env->make('layouts.user_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Desktop\Nova Pasta\FastSolutions\Desenvolvimento\resources\views/site/ongs/showOng.blade.php ENDPATH**/ ?>