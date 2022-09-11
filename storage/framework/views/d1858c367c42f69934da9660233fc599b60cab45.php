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

                <div class="card-body">
                    <p class="usuario-nome">Usuário:  <?php echo e($usuario->nome); ?> <?php echo e($usuario->sobrenome); ?> </p>
                    <p class="usuario-cep">CEP:<?php echo e($usuario->cep); ?></p>
                    <p class="usuario-city">Cidade:<?php echo e($usuario->cidade); ?></p>
                    <p class="usuario-estado">Estado:<?php echo e($usuario->estado); ?></p>

                    <p class="usuario-email">E-mail:  <?php echo e($usuario->email); ?> </p>

                    <a href="<?php echo e(route('editarUsuario'
                        , ['id'=>$usuario->id])); ?>"
                            title="Editar Usuario <?php echo e($usuario->nome); ?>" style="text-decoration:none;">Editar</a>

                        <a href="<?php echo e(route('excluirUsuario', 
                                    ['id'=>$usuario->id])); ?>" 
                                title="Excluir Usuario <?php echo e($usuario->nome); ?>" style="text-decoration:none;">Excluir perfil</a>


                        <br>
                        
                        <br>

                        <a href="<?php echo e(route('listaOngs')); ?>" style="text-decoration:none;">Lista das ONGs</a>
                        <a href="/myongs" style="text-decoration:none;">Ongs que participo</a>

                    </div>
                        </div>
                            </div>
                                </div>
                                    </div>
<?php $__env->stopSection(); ?>
</html>

<?php echo $__env->make('layouts.user_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Desktop\Nova Pasta\FastSolutions\Desenvolvimento\resources\views/site/ongs/dashboard.blade.php ENDPATH**/ ?>