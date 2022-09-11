<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="{{ asset('site/css/newHome.css')}}">
</head>

<body>

<section class="first-section">
    <section>
        <div class="swiper mySwiper container">
            <div class="swiper-wrapper content">
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="{{ asset('site/img/Foto-de-perfil-linkedin-recortada.jpeg') }}" alt="">
                        </div>

                        <div class="media-icons">
                            <img src="{{('site/img/facebook.svg')}}" alt="Logo Facebook">
                            <img src="{{('site/img/twitter.svg')}}" alt="Logo Twitter">
                            <img src="{{('site/img/instagram.svg')}}" alt="Logo Instagram">
                        </div>

                        <div class="information">
                            <p class="card-title">Ong Bacana</p>
                            <p class="card-owner">Proprietário Bacana</p>
                            <p class="card-description">
                                Ong que ajuda pessoas a 
                                tornarem-se bacanas para um caramba
                            </p>
                            
                        </div>

                        <div class="button">
                            <button class="learnMore">Saiba mais</button>
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

</body>

</html>

