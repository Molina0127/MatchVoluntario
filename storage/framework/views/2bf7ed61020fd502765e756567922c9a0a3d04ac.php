
<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('site/css/login.css')); ?>">
    <title>Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Faça login e dê match!</h1>
            <img src="<?php echo e(asset('site/img/img_login.svg')); ?>" class="image" alt="animação">
        </div>
        <div class="right-login">
            <div class="card-login">
            <form action="<?php echo e(route('authOng')); ?>" method="post">
                    <?php if(Session::get('fail')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(Session::get('fail')); ?>

                    </div>
                    <?php endif; ?>

                    <?php echo csrf_field(); ?>
                <div class="textfield">
                    <label for="ong_name">ONG</label>
                    <input type="text" name="ong_name" placeholder="Digite aqui" value="<?php echo e(old ('ong_name')); ?>">
                    <span class="text-danger"><?php $__errorArgs = ['ong_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                </div>
                <div class="textfield">
                    <label for="cnpj">CNPJ</label>
                    <input type="password" name="cnpj" placeholder="Digite aqui" value="<?php echo e(old ('cnpj')); ?>">
                    <span class="text-danger"><?php $__errorArgs = ['cnpj'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                </div>
                <button class="btn-login">Logar</button>
            </div>
        </div>
    </div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.ong_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\salda\OneDrive - ifsp.edu.br\Área de Trabalho\GOURCE\FastSolutions\Desenvolvimento\resources\views/site/ongs/login.blade.php ENDPATH**/ ?>