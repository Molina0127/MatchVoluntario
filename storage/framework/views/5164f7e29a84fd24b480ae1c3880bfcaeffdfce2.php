<!DOCTYPE html>
<html lang="en">
<head>



<meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>


    <!-- Styles -->
    
    <link rel="stylesheet" href="<?php echo e(asset('site/css/home.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('site/css/main.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('site/css/newHome.css')); ?>">

</head>



 

<!-- <?php $__env->startSection('content'); ?> -->

<!-- <div class="container"> -->
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
    </div> 
</div> -->

<?php $__env->startSection('content'); ?>

<div id="search-container" class="col-md-12">
    <h3>Busque uma ong</h3>
    <form action="/home" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form>
</div>

    <!-- <div id="ongs-container" class="col-md-12">
        <h4 class="subtitle">Ongs Cadastradas</h4>
    </div> -->


    <!-- <div id="cards-container" class="row">
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
    </div> -->



<?php $__env->stopSection(); ?>


    <!-- <section>
        <div class="container">
            <div class="content">
                <div class="card">
                    <div class="card-content">
                        <div class="image">
                            <img src="<?php echo e(asset('site/css/Foto-de-perfil-linkedin-recortada.jpeg')); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<?php $__env->startSection('card'); ?>
<section class="first-section">
    <section>
        <div class="swiper mySwiper container">
            <div class="swiper-wrapper content">
                <?php $__currentLoopData = $ongs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="/img/ongs/<?php echo e($ong->ong_image); ?>" alt="<?php echo e($ong->ong_image); ?>">
                        </div>

                        <div class="media-icons">
                            <img src="<?php echo e(asset('site/img/facebook.svg')); ?>" alt="Logo Facebook">
                            <img src="<?php echo e(asset('site/img/twitter.svg')); ?>" alt="Logo Twitter">
                            <img src="<?php echo e(asset('site/img/instagram.svg')); ?>" alt="Logo Instagram">
                        </div>

                        <div class="information">
                            <p class="card-title"><?php echo e($ong->ong_name); ?></p>
                            <p class="card-owner"><?php echo e($ong->owner); ?></p>
                            <p class="card-description">
                                <?php echo e($ong->description); ?>

                            </p>
                            
                        </div>

                        <div class="button">
                            <button class="learnMore">
                            
                            
                            <a href="/ong/<?php echo e($ong->id); ?>">
                            Saiba mais    
                            </a>
                            
                            </button>
                        </div>

                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="<?php echo e(asset('site/img/Foto-de-perfil-linkedin-recortada.jpeg')); ?>" alt="">
                        </div>

                        <div class="media-icons">
                            <img src="<?php echo e(asset('site/img/facebook.svg')); ?>" alt="Logo Facebook">
                            <img src="<?php echo e(asset('site/img/twitter.svg')); ?>" alt="Logo Twitter">
                            <img src="<?php echo e(asset('site/img/instagram.svg')); ?>" alt="Logo Instagram">
                        </div>

                        <div class="information">
                            <p class="card-title">Ong de Estudos Importantes</p>
                            <p class="card-owner">João Oliveira</p>
                            <p class="card-description">
                                Nós focamos em estudar ciência que impacta positivamente a
                                vida de milhões de brasileiros
                            </p>
                            
                        </div>

                        <div class="button">
                            
                            <button class="learnMore">
                                <a href="">Saiba mais</a>
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    
    
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
        

    </section>  
    

</section>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    });
</script> 

<?php $__env->stopSection(); ?>

</html>
<?php echo $__env->make('layouts.user_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Desktop\Nova Pasta\FastSolutions\Desenvolvimento\resources\views/home.blade.php ENDPATH**/ ?>