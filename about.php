<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Arolax HTML5 Template">
  <title>IDEAMIA - Nosotros</title>
  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="assets/imgs/logo/favicon.png">
  <!-- All CSS files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/progressbar.css">
  <link rel="stylesheet" href="assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/master-web-agency.css">
  <link rel="stylesheet" href="assets/css/master-service-details.css">
</head>

<body class="font-heading-beatricetrial-regular-2">
  <!-- Preloader -->
  <!-- <div id="preloader">
    <div id="container" class="container-preloader">
      <div class="animation-preloader">
        <div class="spinner"></div>
        <div class="txt-loading">
          <span data-text="A" class="characters">A</span>
          <span data-text="R" class="characters">R</span>
          <span data-text="O" class="characters">O</span>
          <span data-text="L" class="characters">L</span>
          <span data-text="A" class="characters">A</span>
          <span data-text="X" class="characters">X</span>
        </div>
      </div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
  </div> -->
  <!-- Cursor Animation -->
  <div class="cursor1"></div>
  <div class="cursor2"></div>
  <!-- Sroll to top -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
  </div>
  <!-- Switcher Area Start -->
  <div class="switcher__area">
    <div class="switcher__icon">
      <button id="switcher_open"><i class="fa-solid fa-gear"></i></button>
      <button id="switcher_close"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="switcher__items">
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">mode</p>
        </div>
        <div class="switcher__btn mode-type wc-col-2">
          <button class="active" data-mode="light">light</button>
          <button data-mode="dark">dark</button>
        </div>
      </div>
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Language Support</p>
        </div>
        <div class="switcher__btn lang_dir wc-col-2">
          <button class="active" data-mode="ltr">LTR</button>
          <button data-mode="rtl">RTL</button>
        </div>
      </div>
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Layout</p>
        </div>
        <div class="switcher__btn layout-type wc-col-2">
          <button class="active" data-mode="full-width">Full Width</button>
          <button data-mode="box-layout">Box Layout</button>
        </div>
      </div>
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Cursor</p>
        </div>
        <div class="switcher__btn">
          <select name="cursor-style" id="cursor_style">
            <option value="1">default</option>
            <option selected value="2">animated</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <!-- Switcher Area End -->
  <!-- offcanvas start  -->
  <div class="offcanvas-3__area">
    <div class="offcanvas-3__inner">
      <div class="offcanvas-3__meta-wrapper">
        <div class="">
          <button id="close_offcanvas" class="close-button close-offcanvas" onclick="hideCanvas3()">
            <span></span>
            <span></span>
          </button>
        </div>
        <div class="">
          <div class="offcanvas-3__meta mb-145 d-none d-md-block">
            <ul>
              <li><a href="tel:+2-352698102" class="unnerline"><u>+2-352 698 102</u></a></li>
              <li><a href="mailto:contact@me.com">contact@me.com</a></li>
              <li><a href="">27 Division St, <br>
                  New York, NY 10002, USA</a></li>
            </ul>
          </div>
          <div class="offcanvas-3__social d-none d-md-block">
            <p class="title">Follow Me</p>
            <div class="offcanvas-3__social-links">
              <a href=""><i class="fa-brands fa-facebook-f"></i></a>
              <a href=""><i class="fa-brands fa-twitter"></i></a>
              <a href=""><i class="fa-brands fa-dribbble"></i></a>
              <a href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="offcanvas-3__menu-wrapper">
        <nav class="nav-menu offcanvas-3__menu">
          <ul>
            <li><a href="#">home</a></li>
            <li><a href="about.html">about</a></li>
            <li><a href="services.html">services</a></li>
            <li><a href="service-details.html">service details</a></li>
            <li><a href="works.html">projects</a></li>
            <li><a href="work-details.html">project details</a></li>
            <li><a href="team.html">team</a></li>
            <li><a href="team-details.html">team details</a></li>
            <li><a href="career.html">career</a></li>
            <li><a href="career-details.html">career details</a></li>
            <li><a href="faq.html">faq</a></li>
            <li><a href="404.html">404 page</a></li>
            <li><a href="blog.html">blog</a></li>
            <li><a href="blog-details.html">blog details</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <!-- offcanvas end  -->
  <!-- search modal start -->
  <div class="modal fade" id="search-template" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="search-template" aria-hidden="true">
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <form action="#" class="form-search">
            <input type="text" placeholder="Search">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- search modal end -->
  <!-- Header area start -->
  <?php
  include('header.php');
  ?>
  <!-- Header area end -->
  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <div class="body-wrapper body-corporate-agency">
        <!-- overlay switcher close  -->
        <div class="overlay-switcher-close"></div>
        <main>
          <!-- hero area start  -->
          <section class="hero-area">
            <div class="container large">
              <div class="hero-area-inner">
                <!-- <div class="section-content">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper">
                      <h1 class="section-title large has_fade_anim">We are ”Arolax” - product and
                        branding and creative agency
                        based in California</h1>
                    </div>
                  </div>
                  <div class="content-last">
                    <div class="subtitle-wrapper has_fade_anim" data-fade-from="right">
                      <span class="section-subtitle has-right-line">01. about us</span>
                    </div>
                    <div class="text-wrapper">
                      <p class="text has_fade_anim" data-fade-from="left">Unlocking creative horizons: the story behind
                        “Arolax” a global digital agency
                        crafting experiences, building dreams, and shaping success.</p>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </section>
          <?PHP
          include('somos.html');
          ?>
          <section class="faq-area">
            <div class="container">
              <div class="faq-area-inner section-spacing-top">
                <div class="section-content">
                  <div class="thumb">
                    <img src="assets/imgs/gallery/img-s-87.webp" class="has_fade_anim" data-fade-from="left"
                      alt="image">
                  </div>
                  <div class="content-last has_fade_anim">
                    <div class="section-title-wrapper">
                      <div class="title-wrapper">
                        <h2 class="section-title">¿Qué buscan nuestros clientes en IDEAMIA - Tech?</h2>
                      </div>
                    </div>
                    <div class="accordion-wrapper">
                      <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#flush-collapseOne" aria-expanded="false"
                              aria-controls="flush-collapseOne">Innovación tecnológica</button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">para optimizar sus operaciones y destacar en el mercado.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                              data-bs-target="#flush-collapseTwo" aria-expanded="false"
                              aria-controls="flush-collapseTwo">Estrategias digitales efectivas</button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse show"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">para fortalecer su presencia online y atraer a su público objetivo.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#flush-collapseThree" aria-expanded="false"
                              aria-controls="flush-collapseThree">Soluciones personalizadas</button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">que se alineen con sus objetivos de negocio y brinden resultados tangibles.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="process-area">
            <div class="container">
              <div class="process-area-inner section-spacing">
                <div class="section-header">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper">
                      <h2 class="section-title has_fade_anim">Sectores con los que trabajamos</h2>
                    </div>
                  </div>
                  <div class="text-wrapper">
                    <p class="text has_fade_anim">Cada cliente es único para nosotros, y nuestro enfoque personalizado garantiza que cada proyecto refleje su visión y fortalezca su marca. </p>
                  </div>
                </div>
                <div class="process-wrapper-box">
                  <div class="process-wrapper">
                    <div class="process-box has_fade_anim" data-delay="0.15">
                      <div class="thumb">
                        <img class="show-light" src="assets/imgs/icon/icon-s-42.webp" alt="process icon">
                        <img class="show-dark" src="assets/imgs/icon/icon-s-42-light.webp" alt="process icon">
                      </div>
                      <div class="content">
                        <h3 class="title">Tecnología</h3>
                      </div>
                    </div>
                    <div class="process-box has_fade_anim" data-delay="0.30">
                      <div class="thumb">
                        <img class="show-light" src="assets/imgs/icon/icon-s-43.webp" alt="process icon">
                        <img class="show-dark" src="assets/imgs/icon/icon-s-43-light.webp" alt="process icon">
                      </div>
                      <div class="content">
                        <h3 class="title">Retail y Comercio Electrónico</h3>
                      </div>
                    </div>
                    <div class="process-box has_fade_anim" data-delay="0.45">
                      <div class="thumb">
                        <img class="show-light" src="assets/imgs/icon/icon-s-44.webp" alt="process icon">
                        <img class="show-dark" src="assets/imgs/icon/icon-s-44-light.webp" alt="process icon">
                      </div>
                      <div class="content">
                        <h3 class="title">Educación</h3>
                      </div>
                    </div>
                    <div class="process-box has_fade_anim" data-delay="0.15">
                      <div class="thumb">
                        <img class="show-light" src="assets/imgs/icon/icon-s-45.webp" alt="process icon">
                        <img class="show-dark" src="assets/imgs/icon/icon-s-45-light.webp" alt="process icon">
                      </div>
                      <div class="content">
                        <h3 class="title">Salud</h3>
                      </div>
                    </div>
                    <div class="process-box has_fade_anim" data-delay="0.30">
                      <div class="thumb">
                        <img class="show-light" src="assets/imgs/icon/icon-s-46.webp" alt="process icon">
                        <img class="show-dark" src="assets/imgs/icon/icon-s-46-light.webp" alt="process icon">
                      </div>
                      <div class="content">
                        <h3 class="title">Logística y Transporte</h3>
                      </div>
                    </div>
                    <div class="process-box has_fade_anim" data-delay="0.45">
                      <div class="thumb">
                        <img class="show-light" src="assets/imgs/icon/icon-s-47.webp" alt="process icon">
                        <img class="show-dark" src="assets/imgs/icon/icon-s-47-light.webp" alt="process icon">
                      </div>
                      <div class="content">
                        <h3 class="title">Servicios Financieros</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- hero area end  -->
          <section class="service-area">
            <div class="container">
              <div class="service-area-inner section-spacing">
                <div class="section-header">
                  <div class="section-title-wrapper">
                    <!-- <div class="shape-1 has_fade_anim" data-fade-offset="0" data-delay="0.9">
                      <img src="assets/imgs/shape/img-s-68.webp" alt="image">
                    </div> -->
                    <div class="title-wrapper has_text_move_anim">
                      <h2 class="section-title">Nuestros <span>Valores</span></h2>
                    </div>
                  </div>
                  <div class="text-wrapper">
                    <p class="text has_fade_anim">En IDEAMIA - Tech, no solo creamos soluciones, construimos alianzas estratégicas para llevar a tu negocio al siguiente nivel. ¡Hablemos de cómo podemos trabajar juntos!
                    </p>
                  </div>
                </div>
                <div class="services-wrapper-box">
                  <div class="services-wrapper">
                    <div class="has_fade_anim">
                      <a href="service-details-bold.html">
                        <div class="service-box">
                          <span class="number">01.</span>
                          <div class="content">
                            <h3 class="title">Innovación</h3>
                            <div class="content-last">
                              <p class="text">Creemos en el poder de las ideas y en la importancia de estar a la vanguardia tecnológica.<br> Nos esforzamos por ofrecer soluciones creativas y efectivas para cada proyecto.</p>
                            </div>
                          </div>
                          <div class="icon">
                            <img class="show-light" src="assets/imgs/icon/icon-s-36.webp" alt="icon">
                            <img class="show-dark" src="assets/imgs/icon/icon-s-36-light.webp" alt="icon">
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="has_fade_anim">
                      <a href="service-details-bold.html">
                        <div class="service-box">
                          <span class="number">02.</span>
                          <div class="content">
                            <h3 class="title">Excelencia</h3>
                            <div class="content-last">
                              <p class="text">La calidad está en el centro de todo lo que hacemos. Nos comprometemos a entregar resultados sobresalientes que superen las expectativas de nuestros clientes.</p>
                            </div>
                          </div>
                          <div class="icon">
                            <img class="show-light" src="assets/imgs/icon/icon-s-37.webp" alt="icon">
                            <img class="show-dark" src="assets/imgs/icon/icon-s-37-light.webp" alt="icon">
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="has_fade_anim">
                      <a href="service-details-bold.html">
                        <div class="service-box">
                          <span class="number">03.</span>
                          <div class="content">
                            <h3 class="title">Compromiso</h3>
                            <div class="content-last">
                              <p class="text">Nos tomamos cada proyecto como un desafío personal. Trabajamos con dedicación y responsabilidad para alcanzar los objetivos de nuestros clientes.</p>
                            </div>
                          </div>
                          <div class="icon">
                            <img class="show-light" src="assets/imgs/icon/icon-s-38.webp" alt="icon">
                            <img class="show-dark" src="assets/imgs/icon/icon-s-38-light.webp" alt="icon">
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="has_fade_anim">
                      <a href="service-details-bold.html">
                        <div class="service-box">
                          <span class="number">04.</span>
                          <div class="content">
                            <h3 class="title">Colaboración</h3>
                            <div class="content-last">
                              <p class="text">Fomentamos el trabajo en equipo, tanto internamente como con nuestros clientes. Creemos que el éxito se logra uniendo fuerzas y compartiendo ideas.</p>
                            </div>
                          </div>
                          <div class="icon">
                            <img class="show-light" src="assets/imgs/icon/icon-s-39.webp" alt="icon">
                            <img class="show-dark" src="assets/imgs/icon/icon-s-39-light.webp" alt="icon">
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="has_fade_anim">
                      <a href="service-details-bold.html">
                        <div class="service-box">
                          <span class="number">05.</span>
                          <div class="content">
                            <h3 class="title">Adaptabilidad</h3>
                            <div class="content-last">
                              <p class="text">El cambio es constante en la tecnología y el mercado. Nos mantenemos flexibles y preparados para responder a nuevos retos y oportunidades.</p>
                            </div>
                          </div>
                          <div class="icon">
                            <img class="show-light" src="assets/imgs/icon/icon-s-39.webp" alt="icon">
                            <img class="show-dark" src="assets/imgs/icon/icon-s-39-light.webp" alt="icon">
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="has_fade_anim">
                      <a href="service-details-bold.html">
                        <div class="service-box">
                          <span class="number">06.</span>
                          <div class="content">
                            <h3 class="title">Talento y Desarrollo</h3>
                            <div class="content-last">
                              <p class="text">Apoyamos el crecimiento de nuestros colaboradores y apostamos por el talento joven, contribuyendo a su desarrollo profesional desde sus primeros pasos en la industria.</p>
                            </div>
                          </div>
                          <div class="icon">
                            <img class="show-light" src="assets/imgs/icon/icon-s-39.webp" alt="icon">
                            <img class="show-dark" src="assets/imgs/icon/icon-s-39-light.webp" alt="icon">
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="has_fade_anim">
                      <a href="service-details-bold.html">
                        <div class="service-box">
                          <span class="number">07.</span>
                          <div class="content">
                            <h3 class="title">Transparencia</h3>
                            <div class="content-last">
                              <p class="text">Valoramos la honestidad y la comunicación clara. Construimos relaciones basadas en la confianza y el respeto mutuo.</p>
                            </div>
                          </div>
                          <div class="icon">
                            <img class="show-light" src="assets/imgs/icon/icon-s-39.webp" alt="icon">
                            <img class="show-dark" src="assets/imgs/icon/icon-s-39-light.webp" alt="icon">
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- <section class="process-area">
            <div class="container">
              <div class="process-area-inner section-spacing">
                <div class="section-header">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper">
                      <h2 class="section-title has_fade_anim">Why you should attach our expert member!</h2>
                    </div>
                  </div>
                  <div class="text-wrapper">
                    <p class="text has_fade_anim">We bet on brands that shift categories and add value to people's
                      lives; and on
                      founders who are motivated to shape </p>
                  </div>
                </div>
                <div class="process-wrapper-box">
                  <div class="process-wrapper">
                    <div class="process-box has_fade_anim" data-delay="0.15">
                      <div class="thumb">
                        <img class="show-light" src="assets/imgs/icon/icon-s-42.webp" alt="process icon">
                        <img class="show-dark" src="assets/imgs/icon/icon-s-42-light.webp" alt="process icon">
                      </div>
                      <div class="content">
                        <h3 class="title">Innovation</h3>
                        <p class="text">We thrive on fresh ideas, driving us pioneer solutions that redefine norm and
                          position us as a trailblazing team!</p>
                      </div>
                    </div>
                    <div class="process-box has_fade_anim" data-delay="0.30">
                      <div class="thumb">
                        <img class="show-light" src="assets/imgs/icon/icon-s-43.webp" alt="process icon">
                        <img class="show-dark" src="assets/imgs/icon/icon-s-43-light.webp" alt="process icon">
                      </div>
                      <div class="content">
                        <h3 class="title">Collaboration</h3>
                        <p class="text">Diverse viewpoints unite in seamless collaboration, nurturing a rich on
                          ecosystem of creativity, ensuring we deliver excellence!</p>
                      </div>
                    </div>
                    <div class="process-box has_fade_anim" data-delay="0.45">
                      <div class="thumb">
                        <img class="show-light" src="assets/imgs/icon/icon-s-44.webp" alt="process icon">
                        <img class="show-dark" src="assets/imgs/icon/icon-s-44-light.webp" alt="process icon">
                      </div>
                      <div class="content">
                        <h3 class="title">Empathy</h3>
                        <p class="text">Our empathetic approach enables us to understand user needs deeply resulting
                          designs that truly resonate and set us apart.</p>
                      </div>
                    </div>
                    <div class="process-box has_fade_anim" data-delay="0.15">
                      <div class="thumb">
                        <img class="show-light" src="assets/imgs/icon/icon-s-45.webp" alt="process icon">
                        <img class="show-dark" src="assets/imgs/icon/icon-s-45-light.webp" alt="process icon">
                      </div>
                      <div class="content">
                        <h3 class="title">Excellence</h3>
                        <p class="text">Striving hallmark propelling us to craft extraordinary work that showcases our
                          team's exceptional dedicat competence.</p>
                      </div>
                    </div>
                    <div class="process-box has_fade_anim" data-delay="0.30">
                      <div class="thumb">
                        <img class="show-light" src="assets/imgs/icon/icon-s-46.webp" alt="process icon">
                        <img class="show-dark" src="assets/imgs/icon/icon-s-46-light.webp" alt="process icon">
                      </div>
                      <div class="content">
                        <h3 class="title">Adaptability</h3>
                        <p class="text">Thriving amidst change showcases to swiftly navigate challenges cementing our
                          status as a resilient and agile team.</p>
                      </div>
                    </div>
                    <div class="process-box has_fade_anim" data-delay="0.45">
                      <div class="thumb">
                        <img class="show-light" src="assets/imgs/icon/icon-s-47.webp" alt="process icon">
                        <img class="show-dark" src="assets/imgs/icon/icon-s-47-light.webp" alt="process icon">
                      </div>
                      <div class="content">
                        <h3 class="title">Accountability</h3>
                        <p class="text">Ownership breed trustor moment to meeting exceeding expected amplifies our
                          reputation as reliable accomplished team.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section> -->
          <?PHP
          include('testimonials.php');
          ?>
          <!-- counter area start  -->
          <!-- <div class="counter-area">
            <div class="counter-area-inner">
              <div class="thumb">
                <img src="assets/imgs/gallery/img-s-27.webp" alt="image">
              </div>
              <div class="counter-wrapper-box">
                <div class="counter-wrapper">
                  <div class="thumb overflow-hidden">
                    <img src="assets/imgs/gallery/img-s-28.webp" data-speed="0.9" alt="image">
                  </div>
                  <div class="counter-box">
                    <h2 class="text has_fade_anim">We have 100+ <br>
                      satisfied clients</h2>
                    <h2 class="number wc-counter has_fade_anim">100+</h2>
                  </div>
                  <div class="counter-box dark">
                    <h2 class="text has_fade_anim">We helped to get <br>
                      companies with $25M+ <br>
                      funding</h2>
                    <h2 class="number wc-counter has_fade_anim">25M+</h2>
                  </div>
                  <div class="thumb overflow-hidden">
                    <img src="assets/imgs/gallery/img-s-29.webp" data-speed="0.9" alt="image">
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- counter area end  -->
          <!-- awards area start  -->
          <!-- awards area end  -->
          <!-- about area start  -->
          <!-- <section class="about-area container-hd">
            <div class="about-area-inner">
              <div class="thumb">
                <img src="assets/imgs/gallery/img-s-30.webp" alt="gallery image">
              </div>
              <div class="section-content">
                <div class="bg">
                  <img src="assets/imgs/gallery/img-s-31.webp" alt="image">
                </div>
                <div class="section-title-wrapper">
                  <div class="title-wrapper">
                    <h2 class="section-title has_fade_anim">We’re simple
                      but pro-level
                      agency</h2>
                  </div>
                </div>
                <div class="text-wrapper">
                  <p class="text has_fade_anim" data-fade-from="left">Theme Builder, you have complete control over the
                    <span>static elements</span> of your
                    website
                  </p>
                </div>
                <div class="btn-wrapper has_fade_anim" data-ease="bounce">
                  <a href="contact.html" class="wc-btn wc-btn-primary btn-text-flip"> <span data-text="Learn More">Learn
                      More</span></a>
                </div>
              </div>
            </div>
          </section> -->
          <!-- about area end  -->
          <!-- testimonial area start  -->
          <!-- testimonial area end  -->
          <!-- faq area start  -->
          <!-- <section class="faq-area">
            <div class="container">
              <div class="faq-area-inner section-spacing-bottom">
                <div class="section-content">
                  <div class="thumb">
                    <img src="assets/imgs/gallery/img-s-85.webp" alt="image">
                    <a href="https://www.youtube.com/watch?v=AzwC6umvd1s"
                      class="wc-btn wc-btn-circle video-popup pos-center"><i class="fa-solid fa-play"></i></a>
                  </div>
                  <div class="content-last">
                    <div class="section-title-wrapper">
                      <div class="title-wrapper">
                        <h2 class="section-title has_fade_anim">Working in the
                          fields of UI/UX
                          design and art
                          direction.</h2>
                      </div>
                    </div>
                    <div class="accordion-wrapper has_fade_anim">
                      <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#flush-collapseOne" aria-expanded="false"
                              aria-controls="flush-collapseOne">Website & mobile design</button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">We deploy world-class creative design, team on demand. that can
                              design surest measure’s of success is when a client partner with more than once build ship
                              scale.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                              data-bs-target="#flush-collapseTwo" aria-expanded="false"
                              aria-controls="flush-collapseTwo">Motion graphic & animation</button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse show"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">We deploy world-class creative design, team on demand. that can
                              design surest measure’s of success is when a client partner with more than once build ship
                              scale.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#flush-collapseThree" aria-expanded="false"
                              aria-controls="flush-collapseThree">User experience</button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">We deploy world-class creative design, team on demand. that can
                              design surest measure’s of success is when a client partner with more than once build ship
                              scale.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section> -->
          <!-- faq area end  -->
          <!-- team area start  -->
          <!-- <section class="team-area">
            <div class="container">
              <div class="team-area-inner section-spacing">
                <div class="section-header">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper">
                      <h2 class="section-title has_fade_anim">Quality team</h2>
                    </div>
                  </div>
                  <div class="text-wrapper">
                    <p class="text has_fade_anim">We deploy world-class creative design, team on demand. that can design
                      surest
                      measure's of success is when a client partner with more than once
                      build, ship scale your vision most efficient.
                    </p>
                  </div>
                </div>
                <div class="team-wrapper-box">
                  <div class="team-wrapper">
                    <div class="team-box has_fade_anim" data-fade-from="left" data-delay="0.15">
                      <a href="team-details.html">
                        <div class="thumb">
                          <img src="assets/imgs/team/img-s-1.webp" alt="team icon">
                        </div>
                        <div class="content">
                          <h3 class="title">Kamal Abraham</h3>
                          <p class="text">CEO, Wealcoder</p>
                        </div>
                      </a>
                    </div>
                    <div class="team-box has_fade_anim" data-fade-from="left" data-delay="0.30">
                      <a href="team-details.html">
                        <div class="thumb">
                          <img src="assets/imgs/team/img-s-2.webp" alt="team icon">
                        </div>
                        <div class="content">
                          <h3 class="title">Selina Gomaze</h3>
                          <p class="text">Junior Executive</p>
                        </div>
                      </a>
                    </div>
                    <div class="team-box has_fade_anim" data-fade-from="left" data-delay="0.45">
                      <a href="team-details.html">
                        <div class="thumb">
                          <img src="assets/imgs/team/img-s-3.webp" alt="team icon">
                        </div>
                        <div class="content">
                          <h3 class="title">Pedrik Vadra</h3>
                          <p class="text">Sr. Developer</p>
                        </div>
                      </a>
                    </div>
                    <div class="team-box has_fade_anim" data-fade-from="left" data-delay="0.60">
                      <a href="team-details.html">
                        <div class="thumb">
                          <img src="assets/imgs/team/img-s-4.webp" alt="team icon">
                        </div>
                        <div class="content">
                          <h3 class="title">Thomas Ribbon</h3>
                          <p class="text">UX Designer</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section> -->
          <!-- team area end  -->
          <!-- pricing area start  -->
          <!-- <section class="pricing-area">
            <div class="container">
              <div class="pricing-area-inner section-spacing">
                <div class="section-header">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper">
                      <h2 class="section-title has_fade_anim">Special offer! choose
                        your pack today</h2>
                    </div>
                  </div>
                </div>
                <div class="pricing-wrapper-box">
                  <div class="pricing-wrapper">
                    <div class="pricing-box has_fade_anim" data-fade-from="left" data-delay="0.60">
                      <span class="tag">Basic</span>
                      <h3 class="price">$9.00</h3>
                      <div class="feature-list">
                        <ul>
                          <li>
                            <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                            <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                            Unlimited cards
                          </li>
                          <li>
                            <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                            <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                            Automated management
                          </li>
                          <li>
                            <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                            <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                            SOX compliance
                          </li>
                          <li>
                            <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                            <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                            Enterprise ERP integrations
                          </li>
                          <li>
                            <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                            <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                            Limited tools
                          </li>
                          <li>
                            <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                            <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                            Local video issuance
                          </li>
                        </ul>
                      </div>
                      <a href="contact.html" class="wc-btn wc-btn-primary btn-text-flip bordered"> <span
                          data-text="Learn More">Learn More</span></a>
                    </div>
                    <div class="pricing-box has_fade_anim" data-fade-from="left" data-delay="0.60">
                      <span class="tag">Standard</span>
                      <h3 class="price">$29.00</h3>
                      <div class="feature-list">
                        <ul>
                          <li>
                            <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                            <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                            Unlimited cards
                          </li>
                          <li>
                            <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                            <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                            Automated management
                          </li>
                          <li>
                            <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                            <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                            SOX compliance
                          </li>
                          <li>
                            <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                            <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                            Enterprise ERP integrations
                          </li>
                          <li>
                            <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                            <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                            Limited tools
                          </li>
                          <li>
                            <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                            <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                            Local video issuance
                          </li>
                        </ul>
                      </div>
                      <a href="contact.html" class="wc-btn wc-btn-primary btn-text-flip bordered"> <span
                          data-text="Learn More">Learn More</span></a>
                    </div>
                    <div class="pricing-box has_fade_anim" data-fade-from="left" data-delay="0.60">
                      <span class="tag">Premium</span>
                      <h3 class="price">$69.00</h3>
                      <div class="feature-list">
                        <ul>
                          <li>
                            <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                            <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                            Unlimited cards
                          </li>
                          <li>
                            <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                            <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                            Automated management
                          </li>
                          <li>
                            <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                            <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                            SOX compliance
                          </li>
                          <li>
                            <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                            <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                            Enterprise ERP integrations
                          </li>
                          <li>
                            <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                            <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                            Unlimited tools
                          </li>
                          <li>
                            <img class="show-light" src="assets/imgs/icon/check-2.webp" alt="icon image">
                            <img class="show-dark" src="assets/imgs/icon/check-2-light.webp" alt="icon image">
                            Local video issuance
                          </li>
                        </ul>
                      </div>
                      <a href="contact.html" class="wc-btn wc-btn-primary btn-text-flip bordered"> <span
                          data-text="Learn More">Learn More</span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section> -->
          <!-- pricing area end  -->
          <!-- contact area start  -->
          <!-- <section class="contact-area">
            <div class="container">
              <div class="contact-area-inner section-spacing">
                <div class="shape-1">
                  <img src="assets/imgs/shape/img-s-73.webp" alt="shape">
                </div>
                <div class="section-content">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper">
                      <h2 class="section-title has_fade_anim">Start your experience
                        with Arolax</h2>
                    </div>
                  </div>
                  <div class="btn-wrapper has_fade_anim">
                    <a href="contact.html" class="wc-btn wc-btn-underline btn-text-flip"> <span
                        data-text="Let’s get in touch">Let’s get in touch</span> <img
                        src="assets/imgs/icon/arrow-right-half-light.webp" alt="icon image"></a>
                  </div>
                </div>
              </div>
            </div>
          </section> -->
          <!-- contact area end  -->
          <!-- client area start  -->
          <!-- <div class="client-area">
            <div class="container">
              <div class="client-area-inner section-spacing">
                <div class="client-area-text">
                  <h2 class="text has_fade_anim">We worked with largest
                    global brands</h2>
                </div>
                <div class="clients-wrapper-box has_fade_anim">
                  <div class="clients-wrapper">
                    <div class="client-box">
                      <img class="show-light" src="assets/imgs/brand/img-s-1.webp" alt="client image">
                      <img class="show-dark" src="assets/imgs/brand/img-s-1-light.webp" alt="client image">
                    </div>
                    <div class="client-box">
                      <img class="show-light" src="assets/imgs/brand/img-s-2.webp" alt="client image">
                      <img class="show-dark" src="assets/imgs/brand/img-s-2-light.webp" alt="client image">
                    </div>
                    <div class="client-box">
                      <img class="show-light" src="assets/imgs/brand/img-s-3.webp" alt="client image">
                      <img class="show-dark" src="assets/imgs/brand/img-s-3-light.webp" alt="client image">
                    </div>
                    <div class="client-box">
                      <img class="show-light" src="assets/imgs/brand/img-s-4.webp" alt="client image">
                      <img class="show-dark" src="assets/imgs/brand/img-s-4-light.webp" alt="client image">
                    </div>
                    <div class="client-box">
                      <img class="show-light" src="assets/imgs/brand/img-s-5.webp" alt="client image">
                      <img class="show-dark" src="assets/imgs/brand/img-s-5-light.webp" alt="client image">
                    </div>
                    <div class="client-box">
                      <img class="show-light" src="assets/imgs/brand/img-s-6.webp" alt="client image">
                      <img class="show-dark" src="assets/imgs/brand/img-s-6-light.webp" alt="client image">
                    </div>
                    <div class="client-box">
                      <img class="show-light" src="assets/imgs/brand/img-s-7.webp" alt="client image">
                      <img class="show-dark" src="assets/imgs/brand/img-s-7-light.webp" alt="client image">
                    </div>
                    <div class="client-box">
                      <img class="show-light" src="assets/imgs/brand/img-s-8.webp" alt="client image">
                      <img class="show-dark" src="assets/imgs/brand/img-s-8-light.webp" alt="client image">
                    </div>
                    <div class="client-box">
                      <img class="show-light" src="assets/imgs/brand/img-s-9.webp" alt="client image">
                      <img class="show-dark" src="assets/imgs/brand/img-s-9-light.webp" alt="client image">
                    </div>
                    <div class="client-box">
                      <img class="show-light" src="assets/imgs/brand/img-s-10.webp" alt="client image">
                      <img class="show-dark" src="assets/imgs/brand/img-s-10-light.webp" alt="client image">
                    </div>
                    <div class="client-box">
                      <img class="show-light" src="assets/imgs/brand/img-s-11.webp" alt="client image">
                      <img class="show-dark" src="assets/imgs/brand/img-s-11-light.webp" alt="client image">
                    </div>
                    <div class="client-box">
                      <img class="show-light" src="assets/imgs/brand/img-s-12.webp" alt="client image">
                      <img class="show-dark" src="assets/imgs/brand/img-s-12-light.webp" alt="client image">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- client area end  -->
        </main>
        <!-- footer area start  -->
        <!-- <footer class="footer-area">
          <div class="container">
            <div class="footer-area-inner section-spacing-top">
              <div class="shape-1">
                <img class="show-light" src="assets/imgs/shape/img-s-33.webp" alt="shape">
                <img class="show-dark" src="assets/imgs/shape/img-s-33-light.webp" alt="shape">
              </div>
              <div class="section-header">
                <div class="section-title-wrapper">
                  <div class="title-wrapper">
                    <h2 class="section-title has_fade_anim"><span>Get started</span> <br>
                      now</h2>
                  </div>
                </div>
                <div class="text-wrapper">
                  <p class="text has_fade_anim">If you would like to work with us or
                    just want to get in touch, we’d love
                    to hear from you!</p>
                </div>
              </div>
              <div class="footer-cta">
                <div class="footer-widget-wrapper">
                  <h2 class="title">London</h2>
                  <ul class="footer-nav-list">
                    <li>Baltia Squar, Mark Street, <br>
                      London</li>
                  </ul>
                </div>
                <div class="footer-widget-wrapper">
                  <h2 class="title">New York</h2>
                  <ul class="footer-nav-list">
                    <li>Nenuya Centre, Elia Street <br>
                      New York, USA</li>
                  </ul>
                </div>
                <div class="footer-widget-wrapper newsletter">
                  <form action="#" class="subscribe-form">
                    <div class="input-field">
                      <input type="email" placeholder="Enter your email">
                      <button type="submit" class="subscribe-btn"><img src="assets/imgs/icon/arrow-light.webp"
                          alt="icon"></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div> -->
        <!-- <div class="copyright-area">
            <div class="container">
              <div class="copyright-area-inner">
                <div class="copyright-text">
                  <p class="text">© 2022 - 2025 | Alrights reserved <br>
                    by <a href="https://themeforest.net/user/crowdytheme" target="_blank">crowdyTheme</a></p>
                </div>
                <ul class="footer-nav-list">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Career</a></li>
                  <li><a href="#">Sitemap</a></li>
                </ul>
              </div>
            </div>
          </div> -->
        </footer>
        <!-- footer area end  -->
      </div>
    </div>
  </div>
  <!-- All JS files -->
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
  <!-- <script>
    // testimonial slider
    if (('.testimonial-slider').length) {
      var testimonial_slider = new Swiper(".testimonial-slider", {
        loop: false,
        slidesPerView: 1,
        spaceBetween: 60,
        speed: 1800,
        watchSlidesProgress: true,
        navigation: {
          prevEl: ".testimonial-button-prev",
          nextEl: ".testimonial-button-next",
        },
      });
    }
  </script> -->
</body>

</html>