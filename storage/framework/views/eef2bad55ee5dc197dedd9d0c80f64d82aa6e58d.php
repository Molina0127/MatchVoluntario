<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('site/css/register.css')); ?>">
    <title>Cadastro</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Cadastre-se aqui!</h1>
            <img src="<?php echo e(asset('site/img/img_register.svg')); ?>" class="image" alt="animação">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>Cadastro</h1>

                <form action="<?php echo e(route('saveUser')); ?>" method="post">
                    <?php if(Session::get('sucess')): ?>
                    <div class="alert alert-sucess">
                        <?php echo e(Session::get ('sucess')); ?>

                    </div>
                    <?php endif; ?>
                    
                    <?php if(Session::get('fail')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(Session::get ('fail')); ?>

                    </div>
                    <?php endif; ?>
                <?php echo csrf_field(); ?>
                    <div class="textfield">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" placeholder="Digite aqui" value="<?php echo e(old('name')); ?>">
                        <span class="text-danger"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </div>
                    <div class="textfield">
                        <label for="snome">Sobrenome</label>
                        <input type="text" name="sobrenome" placeholder="Digite aqui" value="<?php echo e(old('sobrenome')); ?>">
                        <span class="text-danger"><?php $__errorArgs = ['sobrenome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </div>
                    <div class="textfield">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="nome@exemplo.com" value="<?php echo e(old('email')); ?>">
                            <span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </div>
                    <div class="juntos">
                        <div class="textfield" id="dn">
                            <label for="nasc">Data de nascimeto</label>
                            <input type="date" name="datanasc" placeholder="DD/MM/AAAA" value="<?php echo e(old('datanasc')); ?>">
                            <span class="text-danger"><?php $__errorArgs = ['datanasc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                        </div>
                        <div class="textfield">
                            <label for="cpf">CPF</label>
                            <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00" value="<?php echo e(old('cpf')); ?>">
                            <span class="text-danger"><?php $__errorArgs = ['cpf'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                        </div>
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Digite aqui">
                        <span class="text-danger"><?php $__errorArgs = ['senha'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </div>
                    <button class="btn-login">Cadastrar</button>
                    </div>
                </form>
                
        </div>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('site/js/data.js')); ?>"></script>

</body>
</html><?php /**PATH C:\FastSolutions\Desenvolvimento\resources\views/site/usuarios/register.blade.php ENDPATH**/ ?>