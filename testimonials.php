<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/progressbar.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/master-web-agency.css">
</head>

<body>
    <section class="testimonial-area">
        <div class="container">
            <div class="testimonial-area-inner section-spacing">
                <div class="section-content">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title has_text_move_anim">Testimonios de Nuestros Clientes</h2>
                        </div>
                    </div>
                    <div class="text-wrapper">
                        <p class="text has_fade_anim">Nuestro compromiso con la excelencia se refleja en las palabras de quienes han confiado en nosotros.</p>
                    </div>
                    <div class="btn-wrapper has_fade_anim" data-fade-from="top" data-ease="bounce" data-fade-offset="50">
                        <div class="btn-wrapper btn-move">
                            <a href="about-bold.html" class="wc-btn wc-btn-circle btn-hover-bgchange btn-item">Explora<br>
                                Más</a>
                        </div>
                    </div>
                </div>
                <div class="testimonial-wrapper-box">
                    <div class="testimonial-wrapper">
                        <div class="swiper testimonial-slider-active has_fade_anim" data-fade-from="right"
                            data-delay="0.45">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-box">
                                        <div class="content">
                                            <span class="rating">4.9<img src="assets/imgs/icon/star-5.webp" alt="icon"></span>
                                            <p class="rating-label">(de 5 estrellas)</p>
                                            <p class="text">IDEAMIA - Tech entendió perfectamente nuestras necesidades y nos entregó una solución tecnológica a la medida. Su equipo mostró profesionalismo y compromiso en todo momento. ¡Altamente recomendados!</p>
                                            <div class="icon"><img src="assets/imgs/icon/quote-9.webp" alt="icon"></div>
                                        </div>
                                        <div class="author">
                                            <div class="avatar"><img src="assets/imgs/client/img-s-1.webp" alt="image"></div>
                                            <div class="">
                                                <h2 class="name">María López</h2>
                                                <span class="meta-title">Directora de innovación en Retail Solutions</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-box">
                                        <div class="content">
                                            <span class="rating">4.8<img src="assets/imgs/icon/star-5.webp" alt="icon"></span>
                                            <p class="rating-label">(de 5 estrellas)</p>
                                            <p class="text">Gracias a IDEAMIA - Tech, logramos optimizar nuestra presencia digital y aumentar significativamente el tráfico a nuestra plataforma. Su enfoque estratégico en marketing digital marcó la diferencia.</p>
                                            <div class="icon"><img src="assets/imgs/icon/quote-9.webp" alt="icon"></div>
                                        </div>
                                        <div class="author">
                                            <div class="avatar"><img src="assets/imgs/client/img-s-1.webp" alt="image"></div>
                                            <div class="">
                                                <h2 class="name">Carlos Gómez</h2>
                                                <span class="meta-title">CEO de EducaTech</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-box">
                                        <div class="content">
                                            <span class="rating">4.6<img src="assets/imgs/icon/star-5.webp" alt="icon"></span>
                                            <p class="rating-label">(de 5 estrellas)</p>
                                            <p class="text">Trabajar con IDEAMIA fue una experiencia increíble. Su equipo técnico es altamente capacitado y entregaron el proyecto antes de lo previsto, superando nuestras expectativas.</p>
                                            <div class="icon"><img src="assets/imgs/icon/quote-9.webp" alt="icon"></div>
                                        </div>
                                        <div class="author">
                                            <div class="avatar"><img src="assets/imgs/client/img-s-1.webp" alt="image"></div>
                                            <div class="">
                                                <h2 class="name">Ana Torres</h2>
                                                <span class="meta-title">Gerente de Operaciones en MedSalud</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-nav">
                            <div class="testimonial-button-prev nav-icon">
                                <i class="fa-solid fa-arrow-left"></i>
                            </div>
                            <div class="testimonial-button-next nav-icon">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/counter.js"></script>
<script src="assets/js/progressbar.js"></script>
<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/ScrollSmoother.min.js"></script>
<script src="assets/js/ScrollToPlugin.min.js"></script>
<script src="assets/js/ScrollTrigger.min.js"></script>
<script src="assets/js/SplitText.min.js"></script>
<script src="assets/js/jquery.meanmenu.min.js"></script>
<script src="assets/js/backToTop.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/error-handling.js"></script>
<script src="assets/js/offcanvas.js"></script>
<script>
    // client slider 
    if ('.client-slider-active') {
        var client_slider_active = new Swiper(".client-slider-active", {
            slidesPerView: 'auto',
            loop: true,
            autoplay: true,
            spaceBetween: 130,
            speed: 3000,
            autoplay: {
                delay: 1,
            },
        });
    }
    // work slider 
    if ('.work-slider-active') {
        var work_slider_active = new Swiper(".work-slider-active", {
            slidesPerView: 'auto',
            loop: true,
            autoplay: true,
            spaceBetween: 10,
            speed: 3000,
            autoplay: {
                delay: 0,
            },
        });
    }
    // testimonial slider 
    if ('.testimonial-slider-active') {
        var testimonial_slider_active = new Swiper(".testimonial-slider-active", {
            effect: "cards",
            grabCursor: true,
            perSlideOffset: 50,
            rotate: false,
            perSlideRotate: 10,
            navigation: {
                prevEl: ".testimonial-button-prev",
                nextEl: ".testimonial-button-next",
            },
        });
    }
</script>

</html>