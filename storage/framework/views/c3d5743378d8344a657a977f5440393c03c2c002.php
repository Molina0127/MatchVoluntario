<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(('Página Inicial')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(secure_asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(secure_asset('site/css/main.css')); ?>" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(('Página Inicial')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('loginUsuario')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('loginUsuario')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('createUsuario')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('createUsuario')); ?>"><?php echo e(__('Cadastro')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php else: ?>

                        <a href="<?php echo e(route('showVolRequets')); ?>" style="position:absolute; Left: 400px; margin-top: 20px; margin-left:20px; text-decoration:none;">Meus convites de Ongs
                            <?php echo e(App\Models\EntidadeVolunteer::where(['reqstatus'=>null],['vol_acceptor',Auth::user(

                            )->id])->count()); ?>

                        </a>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href=" <?php echo e(route('perfilUsuario')); ?> " role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->nome); ?>

                                </a>

                                <div class="" aria-labelledby="navbarDropdown">
                                    <div>
                                    <a class="" href="<?php echo e(url('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>
                                    </div>
                                    

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>

        <?php echo $__env->yieldContent('card'); ?>
        <?php echo $__env->yieldContent('register'); ?>
        
    </div>
</body>
</html>
<?php /**PATH D:\Desktop\Nova Pasta\FastSolutions\Desenvolvimento\resources\views/layouts/user_header.blade.php ENDPATH**/ ?>