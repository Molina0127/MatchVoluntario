<?php use Illuminate\Support\Facades\DB; ?>

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

        <?php if(session()->has('delVolRequest')): ?>
                    <p class="alert alert-danger">
                        <?php echo e(session()->get('delVolRequest')); ?>

                    </p>
                <?php endif; ?>
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Meus convites de Ongs')); ?></div>

                <div class="card-body">
                <?php if($showVol->count()> 0): ?>    
                <?php $__currentLoopData = $showVol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $showVol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        
                        $check = DB::table('entidade_volunteers')
                        ->where('reqstatus',1)->get();
                        if($check == true){

                        

                        ?>
                        <div class="card-body">
                        
                        <img src="/img/ongs/<?php echo e($showVol->ong_image); ?>" alt="<?php echo e($showVol->ong_image); ?>">
                            <div class="card-body">
                                <p class="ong-name">Ong:<?php echo e($showVol->ong_name); ?></p>
                            
                                    <a href="/confirmVol/<?php echo e($showVol->id); ?>/" 
                                    class="btn btn-primary">Aceitar pedido</a>

                                    <a href="/delVolrequest/<?php echo e($showVol->id); ?>/" 
                                    class="btn btn-danger">Recusar pedido</a>
                         <?php } ?>   
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <h5>Nenhum pedido pendente!</h5>
                    <?php endif; ?>

                </div>
                    </div>
                        </div>
                         </div>
                           </div>
                             </div>
                                </div>
<?php $__env->stopSection(); ?>
</html>
<?php echo $__env->make('layouts.user_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Desktop\Nova Pasta\FastSolutions\Desenvolvimento\resources\views/site/usuarios/showVolRequests.blade.php ENDPATH**/ ?>