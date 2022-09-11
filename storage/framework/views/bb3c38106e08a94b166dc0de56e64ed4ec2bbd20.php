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
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Meu perfil')); ?></div>

                <?php if(!empty($ong_updmsg)): ?>
                    <div class="alert alert-success"> <?php echo e($ong_updmsg); ?></div>
                <?php endif; ?>

                <div class="card-body">
                <p class="ong-name">Ong:  <?php echo e($ong->ong_name); ?></p>
                
                        <p class="ong-owner">Proprietário:  <?php echo e($ong->owner); ?> </p>
                        <p class="ong-city">Cidade:  <?php echo e($ong->ong_city); ?> </p>
                        <p class="ong-state">Estado:  <?php echo e($ong->ong_state); ?> </p>

                        <p class="ong-volunteers"><?php echo e(count($ong->usuarios)); ?> Voluntário(s)</p>
                

                    <a href="<?php echo e(route('editarOng'
                    , ['id'=>$ong->id])); ?>"
                        title="Editar Ong <?php echo e($ong->ong_name); ?>" style="text-decoration:none;">Editar</a>

                    <a href="<?php echo e(route('excluirOng', 
                            ['id'=>$ong->id])); ?>" 
                        title="Excluir Ong <?php echo e($ong->ong_name); ?>" style="text-decoration:none;">Excluir</a>



                    <br>

                    <br>

                        <a href="<?php echo e(route('listaUsuarios')); ?>" style="text-decoration:none;">Lista dos Usuários</a>
                        <a href="/myVolunteers" style="text-decoration:none;">Voluntários participantes</a>
                    </div>
                        </div>
                            </div>
                                </div>                                 
                                   </div>
<?php $__env->stopSection(); ?>
</html>
<?php echo $__env->make('layouts.LoggedOng_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Desktop\Nova Pasta\FastSolutions\Desenvolvimento\resources\views/site/usuarios/dashboard.blade.php ENDPATH**/ ?>