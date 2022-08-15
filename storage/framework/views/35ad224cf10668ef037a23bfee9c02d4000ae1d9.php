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
            <h1>Mudar Senha!</h1>
            <img src="<?php echo e(asset('site/img/img_login.svg')); ?>" class="image" alt="animação">
        </div>
        <div class="right-login">
            <div class="card-login">
            <form action="<?php echo e(route('password.action')); ?>" method="post">
                    <?php if(session('status')): ?>
                    <div class="alert alert-sucess" role="alert">
                        <?php echo e(session('status')); ?>

                    </div>
                    <?php elseif(session('error')): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo e(session('error')); ?>

                                </div>
                    <?php endif; ?>
                    
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                                <label for="oldPasswordInput" class="form-label">Senha antiga</label>
                                <input name="antiga_senha" type="password" class="form-control <?php $__errorArgs = ['antiga_senha'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="oldPasswordInput"
                                    placeholder="Antiga senha">
                                <?php $__errorArgs = ['senha_antiga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3">
                                <label for="newPasswordInput" class="form-label">Senha nova</label>
                                <input name="nova_senha" type="password" class="form-control <?php $__errorArgs = ['nova_senha'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="newPasswordInput"
                                    placeholder="Nova senha">
                                <?php $__errorArgs = ['nova_senha'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3">
                                <label for="confirmNewPasswordInput" class="form-label">Confime a nova senha</label>
                                <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                                    placeholder="Confirme a nova senha">
                            </div>

                        </div>

                        <div class="card-footer">
                            <button class="btn btn-success">Submit</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html><?php /**PATH C:\FastSolutions\Desenvolvimento\resources\views/site/usuarios/password.blade.php ENDPATH**/ ?>