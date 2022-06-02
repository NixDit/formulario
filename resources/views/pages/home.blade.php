@extends('index')
@section('title','IMAQ | Industrial Maquiladora OSC - Fabricante de cosméticos')
@section('content')
<div role="main" class="main">
    <section class="section section-concept section-no-border section-dark section-angled section-angled-reverse pt-5 m-0" id="section-concept" style="background-image: url(img/landing/header_bg_4.jpg); background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;">
        <div class="section-angled-layer-bottom bg-light" style="padding: 8rem 0;"></div>
        <div class="container pt-5 mt-5">
            <div class="row align-items-center pt-3">
                <div class="col-lg-5 mb-5">
                    {{-- <h5 class="text-primary font-weight-bold mb-1">PORTO HTML5 TEMPLATE</h5> --}}
                    <h1 class="font-weight-bold text-12 line-height-2 mb-3">IMAQ Industrial Maquiladora<span><span class="d-inline-block text-primary highlighted-word highlighted-word-rotate highlighted-word-animation-1 highlighted-word-animation-1-no-animate alternative-font-3 font-weight-bold text-1 ms-2">IMAQ</span></span></h1>
                    <p class="custom-font-size-1">Somos líderes en la industria cosmética. <a href="#intro" data-hash data-hash-offset="120" class="text-color-light font-weight-semibold text-1 d-block text-decoration-none">Ver más <i class="fa fa-long-arrow-alt-right ms-1"></i></a></p>

                    {{-- <p>
                        <a href="https://getbootstrap.com/" target="_blank">
                            <img src="img/bs5-updated.png" class="img-fluid mt-2" alt="Bootstrap 5" width="200">
                        </a>
                    </p> --}}

                    <a class="d-none video-open lightbox d-block text-color-light text-decoration-none" href="#popup-content-1" data-trigger-play-video="#popupPresentation"><div class="video-open-icon"></div>See How It Works</a>

                    <div id="popup-content-1" class="dialog dialog-lg zoom-anim-dialog rounded p-3 mfp-hide mfp-close-out">
                        <div class="ratio ratio-4x3">
                            <video id="popupPresentation" class="float-start" width="100%" height="100%" muted playsinline loop preload="metadata" poster="video/presentation.jpg">
                                    <source src="video/presentation.webm" type="video/webm">
                                    <source src="img/video/baul.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 mb-5">
                    <div class="position-relative border-width-10 border-color-light clearfix border border-radius" data-remove-min-height style="min-height: 446px;">
                        <video id="presentation" class="float-start" width="100%" height="100%" muted playsinline loop preload="metadata" poster="video/presentation.jpg" data-auto-play="true">
                                <source src="video/presentation.webm" type="video/webm">
                                <source src="img/video/baul.mp4" type="video/mp4">
                        </video>
                        <a href="#" class="position-absolute top-50pct left-50pct transform3dxy-n50 bg-light rounded-circle d-flex align-items-center justify-content-center text-decoration-none bg-color-hover-primary text-color-hover-light play-button-lg pulseAnim pulseAnimAnimated" data-trigger-play-video="#presentation" data-trigger-play-video-remove="yes">
                            <i class="fas fa-play text-5"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-lg-6 col-xl-5 custom-header-bar position-relative py-4 pe-5 z-index-2" >
                    <div>
                        <div class="star-rating-wrap d-flex align-items-center justify-content-center position-relative text-warning text-5 py-2 mb-2">
                            <i class="fas fa-star"></i><i class="fas fa-star ms-1"></i><i class="fas fa-star ms-1"></i><i class="fas fa-star ms-1"></i><i class="fas fa-star ms-1"></i>
                        </div>

                        <h4 class="position-relative text-center font-weight-bold text-7 line-height-2 mb-0">Inspirados en las marcas más reconocidas a nivel mundial</h4>

                        <p class="position-relative text-center font-weight-normal mb-1">* Tu marca, tu negocio, tu éxito</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="intro" class="section section-no-border section-angled bg-light pt-0 pb-5 m-0">
        <div class="section-angled-layer-bottom section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 21rem 0;"></div>
        <div class="container pb-5" style="min-height: 1000px;">
            <div class="row mb-5 pb-lg-3 counters">
                <div class="col-lg-10 text-center offset-lg-1">
                    <img xsrc="img/lazy.png" data-src="img/landing/logomarcaimaq.png" class="lazyload ximg-fluid xborder xborder-width-10 xborder-color-light xbox-shadow-3 xrounded" xalt="Screenshot 3">
                    <h2 class="font-weight-bold text-9 mb-0">IMAQ<br>Industrial Maquiladora</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4">Manufacturamos <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">productos de gran calidad</span></p>
                    <p class="text-1rem text-color-dark negative-ls-05 pt-3 pb-4 mb-5">Somos una empresa orgullosamente mexicana con más de 60 años de experiencia en el ramo cosmético. Nuestra misión es fabricar cosméticos ofreciendo un servicio completo e inmediato con las mas altas estándares de calidad.</p>
                </div>
                <div class="col-sm-6 col-lg-4 offset-lg-2 counter mb-5 mb-md-0">
                    <div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="750" data-appear-animation-duration="750">
                        <h3 class="font-weight-extra-bold text-14 line-height-1 mb-2" data-to="80" data-append="+" data-plugin-options="{'accY': 50}">0</h3>
                        <label class="font-weight-semibold negative-ls-1 text-color-dark mb-0">Diseños</label>
                        <p class="text-color-grey font-weight-semibold pb-1 mb-2">600+ Diseños</p>
                        <p class="mb-0"><a href="#demos" data-hash data-hash-offset="120" class="text-color-primary d-flex align-items-center justify-content-center text-4 font-weight-semibold text-decoration-none">Ver Diseños <i class="fas fa-long-arrow-alt-right ms-2 text-4 mb-0"></i></a></p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 counter divider-left-border">
                    <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750" data-appear-animation-duration="750">
                        <h3 class="font-weight-extra-bold text-14 line-height-1 mb-2" data-to="2" data-append="K+" data-plugin-options="{'accY': 50}">0</h3>
                        <label class="font-weight-semibold negative-ls-1 text-color-dark mb-0">Productos</label>
                        <p class="text-color-grey font-weight-semibold pb-1 mb-2">2k+ Diseños</p>
                        <p class="mb-0"><a href="#" class="text-color-primary d-flex align-items-center justify-content-center text-4 font-weight-semibold text-decoration-none" target="_blank">VER DISEÑO <i class="fas fa-long-arrow-alt-right ms-2 text-4 mb-0"></i></a></p>
                    </div>
                </div>
            </div>
            <div class="intro row align-items-center justify-content-center justify-content-md-start">
                <div class="col-3 pe-0 ps-3 position-relative z-index-2">
                    <img src="img/lazy.png" data-src="img/landing/labial.jpg" class="lazyload img-fluid border border-width-10 border-color-light box-shadow-3 rounded d-none d-md-block appear-animation" alt="Screenshot 2" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
                    <div class="position-absolute d-none d-md-flex align-items-end appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="900" style="bottom: -60px; right: -90px;">
                        <span class="arrow hlt" style="margin-right: -70px;"></span>
                        <strong class="text-color-dark mb-4 pb-3">Diseños</strong>
                    </div>
                </div>
                <div class="col-11 col-md-9 position-relative ps-0 pe-5 pb-5 pb-md-0 mb-5 mb-md-0">
                    <div class="intro2 pt-5 pt-md-0 mt-5 mt-lg-0 appear-animation pe-5" data-appear-animation="fadeInUp" data-appear-animation-delay="400"><img src="img/lazy.png" data-src="img/landing/intro_2x.jpg" class="lazyload img-fluid box-shadow-3 position-relative z-index-1 rounded" alt="Screenshot 1" style="left: -110px;"></div>
                    <div class="intro3 z-index-3 position-absolute appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="800" style="top: 20%; right: 4%;">
                        <img src="img/lazy.png" data-src="img/landing/intro_3x.jpg" class="lazyload img-fluid border border-width-10 border-color-light box-shadow-3 rounded" alt="Screenshot 3">
                        <div class="position-absolute d-none d-md-flex align-items-end appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100" style="bottom: -135px; right: -20px;">
                            <strong class="text-color-dark mb-3">Demostraciones!</strong>
                            <span class="arrow hru"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-no-border pb-0 m-0">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-4">
                    <h2 class="text-7 font-weight-semibold line-height-2 mb-2">Ventajas competitivas.</h2>
                    <p class="text-color-dark">Integramos la idea proporcionada por el cliente brindando tecnología de vanguardia.</p>
                </div>
                <div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
                    <i class="icon-bg icon-1"></i>
                    <h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">Eficaz<br>y eficiencia</h4>
                </div>
                <div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
                    <i class="icon-bg icon-2"></i>
                    <h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">Hot stamping<br>Serigrafía</h4>
                </div>
                <div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
                    <i class="icon-bg icon-3"></i>
                    <h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">Tecnología<br>Calidad</h4>
                </div>
                <div class="col-sm-12">
                    <hr class="my-5">
                    <h2 class="font-weight-bold text-center text-10 pt-3 mb-4">Ya puedes tener tu propia marca de cosméticos</h2>
                </div>
                <div class="col-lg-8 offset-lg-2 px-lg-0 text-center">
                    <p class="text-color-dark text-4">Si sueñas con lanzar tu propio negocio y comenzar tu linea de cosméticos o crear tu marca de productos de belleza, en IMAQ trabajamos con una amplia gama de productos de calidad a precios accesibles.</p>
                </div>
            </div>
            <div class="image-wrapper position-relative z-index-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750" style="height: 0; padding-bottom: 16%;">
                <img src="img/lazy.png" data-src="img/landing/tumarca.jpg" class="lazyload img-fluid" alt="The Most Customizable Template">
            </div>
        </div>
    </section>

    {{-- <section class="section section-no-border section-angled section-dark pb-0 m-0" style="background-repeat: no-repeat; background-color: #0169fe !important;" data-src="img/landing/reason_bg.png"> --}}
    <section class="section section-no-border section-angled section-dark pb-0 m-0" style="background-repeat: no-repeat; background-color: #ffffff !important;" data-src="img/landing/reason_bg.png">
        <div class="section-angled-layer-top section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 4rem 0;"></div>
        <div class="spacer py-md-4 my-md-5"></div>
        <div class="container pt-5 mt-5">
            <div class="row align-items-center pt-md-5 mt-5">
                <div class="col-lg-6 offset-lg-1 position-relative mb-5">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
                        <img src="img/lazy.png" data-src="img/landing/porto_dots.png" width="154" height="146" class="lazyload position-absolute top-auto" alt="6 reasons" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 3, 'transition': true}" style="bottom: 184px; left: 70px;">
                    </div>
                    <div class="text-reasons">
                        <label class="text-color-secondary appear-animation z-index-1"  data-appear-animation="blurIn" data-appear-animation-delay="250" data-appear-animation-duration="750">6</label>
                        <h3 class="text-4 text-md-6 appear-animation" style="background-repeat: no-repeat; background-color: #2c4a9a !important;" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="450" data-appear-animation-duration="750">Razones</h3>
                        <h3 class="text-4 text-md-6 appear-animation" style="background-repeat: no-repeat; background-color: #2c4a9a !important;" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750" data-appear-animation-duration="750">Para trabajar con</h3>
                        <h3 class="text-4 text-md-6 appear-animation" style="background-repeat: no-repeat; background-color: #2c4a9a !important;" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="950" data-appear-animation-duration="750"><span class="highlight-word light">IMAQ</span></h3>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 ps-lg-4 ps-xl-5 mb-5">
                    <h2 class="text-6 font-weight-semibold line-height-2 mb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1150" data-appear-animation-duration="750">Es fácil contruir tu marca con IMAQ.</h2>
                    <p class="custom-text-color-1 line-height-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1350" data-appear-animation-duration="750">Hemos seleccionado las 6 razones principales para elegir IMAQ. Verifique a continuación:</p>
                </div>
            </div>
            <div class="row justify-content-center mt-md-5 mb-4 pt-lg-4">
                <div class="col-lg-11">
                    <div class="row justify-content-center">
                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">
                            <img class="lazyload img-fluid" alt="Speed Performance" src="img/lazy.png" data-src="img/landing/bases1.jpg">
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-color-secondary font-weight-extra-bold text-12 me-2 line-height-1">1</span>
                                <h4 class="text-color-dark d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">Experiencia</small>por más de 60 años</h4>
                            </div>
                            <p class="text-color-primary pe-5 custom-text-color-1">Durante más de 60 años sabemos por experiencia lo que significa crear y lanzar marcas en el sector de la cosmética</p>
                        </div>
                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">
                            <img class="lazyload img-fluid" alt="Solid and tested base" src="img/lazy.png" data-src="img/landing/bases2.jpg">
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-color-secondary font-weight-extra-bold text-12 me-2 line-height-1">2</span>
                                <h4 class="text-color-dark d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">Contamos</small>con maquila</h4>
                            </div>
                            <p class="text-color-primary pe-5 custom-text-color-1">Contamos con instalaciones propias para hacer pruebas de resultados y control.</p>
                        </div>
                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-appear-animation-duration="750">
                            <img class="lazyload img-fluid" alt="Top designs created by usability specialists" src="img/lazy.png" data-src="img/landing/bases3.jpg">
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-color-secondary font-weight-extra-bold text-12 me-2 line-height-1">3</span>
                                <h4 class=" text-color-dark d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">Asesor</small>asignado para ti</h4>
                            </div>
                            <p class="text-color-primary pe-5 custom-text-color-1">Contarás con un asesor que te estará atendiendo en todo el proceso de fabricación.</p>
                        </div>
                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" data-appear-animation-duration="750">
                            <img class="lazyload img-fluid" alt="The best customer experience" src="img/lazy.png" data-src="img/landing/bases4.jpg">
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-color-secondary font-weight-extra-bold text-12 me-2 line-height-1">4</span>
                                <h4 class="text-color-dark d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">Departamento</small>de diseño</h4>
                            </div>
                            <p class="text-color-primary pe-5 custom-text-color-1">Contamos con un departamento de diseño gráfico para brindar apoyo y asesoramiento.</p>
                        </div>
                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                            <img class="lazyload img-fluid" alt="Works perfectly with Porto Admin Template" src="img/lazy.png" data-src="img/landing/bases5.jpg">
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-color-secondary font-weight-extra-bold text-12 me-2 line-height-1">5</span>
                                <h4 class="text-color-dark d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">Contamos</small>con Químicos</h4>
                            </div>
                            <p class="text-color-primary pe-5 custom-text-color-1">Nuestros químicos están a disposición para hacer las recomendaciones durante la fabricación de tu producto.</p>
                        </div>
                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" data-appear-animation-duration="750">
                            <img class="lazyload img-fluid" alt="Always keep template updates" src="img/lazy.png" data-src="img/landing/sin-expe.jpg">
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-color-secondary font-weight-extra-bold text-12 me-2 line-height-1">6</span>
                                <h4 class="text-color-dark d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">No testeo</small>en animales</h4>
                            </div>
                            <p class="text-color-primary pe-5 custom-text-color-1">Nuestros productos o ingredientes no son testeados de ninguna forma en animales.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="https://wa.me/message/V64WQZ2OHK4LP1" class="btn btn-dark btn-rounded btn-modern btn-px-5 text-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" target="_blank">CONTACTAR AHORA!</a>
            </div>
            <br>
        </div>
    </section>

    {{-- <section class="section section-no-border section-angled bg-color-light-scale-1 m-0">
        <div class="section-angled-layer-top section-angled-layer-increase-angle" style="padding: 5rem 0; background-color: #0169fe;"></div>
        <div class="container py-5 my-5">
            <div class="row align-items-center text-center my-5">
                <div class="col-md-6">
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">Introducing Porto Admin</h2>
                    <p class="font-weight-semibold text-primary text-4 fonts-weight-semibold positive-ls-2 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">ADMIN WITH SAME LOOK FEEL AS THE FRONT-END</p>
                    <p class="pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">Porto Admin integration give you a package of new features to add in the front-end template, such as advanced tables, advanced forms, etc... Also allows you to create the back-end of your site using the same design.</p>
                    <a href="https://themeforest.net/item/porto-admin-responsive-html5-template/8539472" class="btn btn-modern btn-gradient btn-rounded btn-px-5 py-3 text-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-appear-animation-duration="750" target="_blank">VIEW PORTO ADMIN</a>
                    <p class="appear-animation text-3" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">* Porto Admin <strong class="text-dark">is not included</strong> in the front-end and is available for $16.</p>
                </div>
                <div class="col-md-6 position-relative py-5">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
                        <img class="lazyload"src="img/lazy.png" data-src="img/landing/porto_dots2.png" alt="" width="149" height="142" style="position: absolute; top: -60px; right: -8%;">
                    </div>
                    <div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="0" data-appear-animation-duration="750">
                        <div class="strong-shadow rounded strong-shadow-top-right">
                            <img src="img/lazy.png" data-src="img/landing/mokup1.jpg" class="lazyload img-fluid border border-width-10 border-color-light rounded box-shadow-3" alt="Porto Admin" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="section border-0 section-dark section-angled section-angled-reverse section-funnel m-0 position-relative overflow-visible lazyload" style="background-image: url(img/lazy.png); background-size: 100%; background-position: top; background-repeat: no-repeat;" data-bg-src="img/landing/porto_performance_bg.png">
        <div class="section-angled-layer-top section-angled-layer-increase-angle" style="padding: 5rem 0; background-color: #22252a;"></div>
        <svg version="1.1" viewBox="500 200 600 900" width="1920" height="100%" xmlns="http://www.w3.org/2000/svg" class="background-svg-style-1" style="top: 120px;" data-appear-animation-svg="true">
            <defs>
                <filter id="shadow" x="-300%" y="-300%" width="600%" height="600%">
                <feDropShadow dx="0" dy="0" stdDeviation="10 10" flood-color="#08c" radius="10" flood-opacity="1" />
                </filter>
            </defs>
            <path id="svg_17" d="m1644.875212,897.875106l-1684.875221,-0.374889l1.25,-446.250108c-1.25,0.372765 496.124925,24.124892 496.124925,24.124892c0,0 255.000064,-106.250026 253.875257,-106.624912c1.124807,0.374885 129.874839,-2.125116 128.750031,-2.500001c1.124808,0.374885 112.374836,-32.125123 111.250027,-32.500008c1.124809,0.374885 144.874844,21.62489 144.874844,21.62489c0,0 128.750032,-73.750018 127.625222,-74.124903c1.124811,0.374884 133.624844,9.124887 133.624844,9.124887c0,0 108.750027,35.000009 108.750027,35.000009c0,0 178.750045,-125.000031 177.625231,-125.374915" opacity="0.5" stroke-opacity="null" stroke-width="0" stroke="#191b1e" fill="#191b1e" fill-opacity="0.4"/>
            <path id="svg_6" d="m1663.83437,909.61168l-1704.94553,-0.72172l1.11111,-486.66724l648.88966,30.00004l105.55568,-41.11116l126.66682,1.11111l122.22236,-34.44449l126.66682,14.44447c0.49906,0.72171 126.05477,-64.83392 126.05477,-64.83392c0,0 128.88904,4.44445 128.38998,3.72273c0.49906,0.72172 118.27698,28.49953 118.27698,28.49953c0,0 173.33353,-108.88902 172.83447,-109.61073" stroke-opacity="null" stroke-width="0" stroke="#1a1b1f" fill="#1a1b1f" fill-opacity="0.4"/>
            <ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="250" stroke="#000" ry="3.5" rx="3.5" id="svg_9" cy="453.023736" cx="609.150561" stroke-opacity="null" stroke-width="0" fill="#fff"/>
            <circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="2000" stroke="#FFF" r="20" id="svg_9" cy="453.023736" cx="609.150561" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 101.5% 50.4%;" />

            <ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500" stroke="#000" ry="3.5" rx="3.5" id="svg_10" cy="411.595173" cx="715.341014" stroke-opacity="null" stroke-width="0" fill="#fff"/>
            <circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="250" stroke="#FFF" r="20" id="svg_9" cy="411.595173" cx="715.341014" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 119.2% 45.7%;" />

            <ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="750" stroke="#000" ry="3.5" rx="3.5" id="svg_11" cy="412.071364" cx="841.05527" stroke-opacity="null" stroke-width="0" fill="#fff"/>
            <circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="2000" stroke="#FFF" r="20" id="svg_9" cy="412.071364" cx="841.05527" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 140.1% 45.7%;" />

            <ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1000" stroke="#000" ry="3.5" rx="3.5" id="svg_12" cy="378.261847" cx="964.388575" stroke-opacity="null" stroke-width="0" fill="#fff"/>
            <circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="250" stroke="#FFF" r="20" id="svg_9" cy="378.261847" cx="964.388575" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 160.7% 42%;" />

            <ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1250" stroke="#000" ry="3.5" rx="3.5" id="svg_13" cy="391.595177" cx="1090.102832" stroke-opacity="null" stroke-width="0" fill="#fff"/>
            <circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="2000" stroke="#FFF" r="20" id="svg_9" cy="391.595177" cx="1090.102832" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 181.6% 43.5%;" />

            <ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1500" stroke="#000" ry="3.5" rx="3.5" id="svg_14" cy="327.706436" cx="1216.769206" stroke-opacity="null" stroke-width="0" fill="#fff"/>
            <circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="250" stroke="#FFF" r="20" id="svg_9" cy="327.706436" cx="1216.769206" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 202.8% 36.4%;" />

            <ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1750" stroke="#000" ry="3.5" rx="3.5" id="svg_15" cy="332.150871" cx="1346.213343" stroke-opacity="null" stroke-width="0" fill="#fff"/>
            <circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="2000" stroke="#FFF" r="20" id="svg_9" cy="332.150871" cx="1346.213343" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 224.3% 36.9%;" />

            <ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="2000" stroke="#000" ry="3.5" rx="3.5" id="svg_16" cy="358.26192" cx="1463.43529" stroke-opacity="null" stroke-width="0" fill="#fff"/>
            <circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="250" stroke="#FFF" r="20" id="svg_9" cy="358.26192" cx="1463.43529" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 243.8% 39.8%;" />

            <ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="2250" stroke="#000" ry="3.5" rx="3.5" id="svg_7" cy="278.817661" cx="1589.546107" stroke-opacity="null" stroke-width="0" fill="#fff"/>
            <circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="2000" stroke="#FFF" r="20" id="svg_9" cy="278.817661" cx="1589.546107" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 264.6% 30.9%;" />

            </g>
        </svg>
        <img class="img-fluid position-absolute d-none d-lg-block lazyload appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" data-appear-animation-duration="750" src="img/lazy.png" data-src="img/landing/mokup2.jpg" alt="Performance on Laptop" style="display: block; top: -170px; left: 90px;">
        <div class="container text-center py-5 mb-5">
            <div class="row justify-content-center pb-md-5 mb-md-5">
                <div class="col-md-7 offset-lg-5 pb-md-5 mb-md-5">
                    <h2 class="font-weight-bold text-9 appear-animation mb-3" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">Top Performance</h2>
                    <p class="custom-text-color-1 color-inherit mb-4 pb-lg-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">Porto has high performance base, all structure are focusing on performance as main point. Porto speed optimization is super fast compared to other templates.</p>
                </div>
            </div>
            <div class="row align-items-center pb-md-5 mb-md-5">
                <div class="col-12 col-md-7 text-center mt-5">
                    <h2 class="font-weight-bold text-7 text-md-6 text-lg-9 pt-5 pt-md-4 mt-5 mb-lg-3 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">Works Perfectly on <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-bold"> Any </span> Device!</h2>
                    <p class="custom-text-color-1 color-inherit appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">We believe you will face lots of traffic from mobile device users not only from desktop or laptop users. Porto is the best solution for you, works fine on any screen resolutions and mobile devices. Try Porto and see how it works!</p>
                </div>
                <div class="col-5 d-none d-md-block">
                    <div class="text-end me-3 me-lg-5 ms-auto mb-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600" data-appear-animation-duration="750" style="max-width: 244px;" data-plugin-options="{'accY': -100}">
                        <img class="img-fluid lazyload" src="img/lazy.png" data-src="img/landing/mokup3.jpg" width="244" height="228" alt="Performance on Mobile">
                    </div>
                    <img class="img-fluid appear-animation z-index-1 position-relative lazyload" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800" data-appear-animation-duration="750" src="img/lazy.png" data-src="img/landing/mokup4.jpg" width="437" height="241" alt="Performance on Tablet" style="margin-bottom: -10%">
                </div>
            </div>
        </div>
        <div class="section-funnel-layer-bottom">
            <div class="section-funnel-layer bg-light"></div>
            <div class="section-funnel-layer bg-light"></div>
        </div>
    </section> --}}

    <section class="section section-funnel border-0 bg-light lazyload m-0" xstyle="background-size: 100%; background-repeat: no-repeat; background-position: top;" xdata-bg-src="img/landing/half_circle.png">
        <div class="container text-center pb-5 mt-3 mb-5">
            <h2 class="font-weight-bold text-9 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">Inicia tu negocio</h2>
            <h5 class="text-primary font-weight-semibold positive-ls-2 text-4 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">En tan sólo 5 pasos</h5>
        </div>
        <div class="row text-center center">

                <div class="row mt-2 text-center center">
                    <div class="col text-center center">
                        <div class="row process process-shapes process-shapes-always-animate my-5">
                            <div class="process-step col-lg-3 mb-5 mb-lg-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                                <div class="process-step-circle">
                                    <strong class="process-step-circle-content">01</strong>
                                </div>
                                <div class="process-step-content">
                                    <h4 class="mb-1 text-5 font-weight-bold">Contáctanos</h4>
                                    <p class="text-color-dark mb-0">Envíanos un <a href="mailto:contacto@industrialmaquiladora.com">correo electrónico</a> o un mensaje vía WhatsApp al siguiente número <a href="https://wa.me/message/V64WQZ2OHK4LP1">5620949468</a></p>
                                </div>
                            </div>
                            <div class="process-step col-lg-2 mb-5 mb-lg-2 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                                <div class="process-step-circle process-shapes-always-animate-delay">
                                    <strong class="process-step-circle-content">02</strong>
                                </div>
                                <div class="process-step-content">
                                    <h4 class="mb-1 text-5 font-weight-bold">Elige tus productos</h4>
                                    <p class="text-color-dark mb-0">Elige productos y tonos.</p>
                                </div>
                            </div>
                            <div class="process-step col-lg-3 mb-5 mb-lg-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" style="animation-delay: 600ms;">
                                <div class="process-step-circle">
                                    <strong class="process-step-circle-content">03</strong>
                                </div>
                                <div class="process-step-content">
                                    <h4 class="mb-1 text-5 font-weight-bold">Cotización</h4>
                                    <p class="text-color-dark mb-0">Una vez seleccionado los productos que requieres, selecciona la cantidad y modelo que necesitas</p>
                                </div>
                            </div>
                            {{-- <div class="process-step col-lg-2 mb-5 mb-lg-2 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" style="animation-delay: 600ms;">
                                <div class="process-step-circle">
                                    <strong class="process-step-circle-content">04</strong>
                                </div>
                                <div class="process-step-content">
                                    <h4 class="mb-1 text-5 font-weight-bold">Proporciona información</h4>
                                    <p class="text-color-dark mb-0">Proporciónanos el medio por el que tus clientes te contactarán: redes sociales, página Web, etc. Mándanos tu logo en formato .ai.</p>
                                </div>
                            </div> --}}
                            <div class="process-step col-lg-2 mb-5 mb-lg-2 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" style="animation-delay: 600ms;">
                                <div class="process-step-circle">
                                    <strong class="process-step-circle-content">04</strong>
                                </div>
                                <div class="process-step-content">
                                    <h4 class="mb-1 text-5 font-weight-bold">Recibe tus productos</h4>
                                    <p class="text-color-dark mb-0">Recibe tus productos personalizados</p>
                                </div>
                            </div>
                            <div class="process-step col-lg-2 mb-5 mb-lg-2 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200" style="animation-delay: 600ms;">
                                <div class="process-step-circle">
                                    <strong class="process-step-circle-content">05</strong>
                                </div>
                                <div class="process-step-content">
                                    <h4 class="mb-1 text-5 font-weight-bold">Comienza tu negocio</h4>
                                    <p class="text-color-dark mb-0">Felicidades!.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
    </section>



    <section id="demos" class="section section-no-border section-light position-relative z-index-3 pt-0 m-0">
        <div class="container">
            <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" data-appear-animation-duration="750">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <p class="text-color-dark text-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">IMAQ Industrial Maquiladora es una empresa que se compromete con los clientes y entregar sus pedidos de manera eficaz y eficiente.</p>
                    <p class="d-flex align-items-center justify-content-center font-weight-bold text-color-dark text-8 negative-ls-1 pb-3 mb-4 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="600"><span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1-2-dark highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-extra-bold line-height-1 text-9 me-3">80+</span> Clientes satisfechos</p>
                </div>
            </div>
        </div>
        <div class="container-fluid position-relative">
            <div class="py-4 bg-light left-0 z-index-3 w-100" xdata-plugin-sticky data-plugin-options="{'minWidth': 991, 'padding': {'top': 70}}">
                <div class="text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400" data-appear-animation-duration="750">
                    <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center mb-0" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*', 'useHash': false}">
                        <li class="nav-item active" data-option-value="*"><a class="nav-link custom-nav-link active" href="#demos" data-hash data-hash-offset="-200">Ver todos</a></li>
                        <li class="nav-item" data-option-value=".new"><a class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="-200">Más vendidos</a></li>
                        <li class="nav-item" data-option-value=".classic"><a class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="-200">Cremas</a></li>
                        <li class="nav-item" data-option-value=".shop"><a class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="-200">Labios</a></li>
                        <li class="nav-item" data-option-value=".onepage"><a class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="-200">Tónicos</a></li>
                        <li class="nav-item" data-option-value=".business"><a class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="-200">Palettes</a></li>
                        <li class="nav-item" data-option-value=".blog"><a class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="-200">Cabello</a></li>
                        <li class="nav-item" data-option-value=".portfolio"><a class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="-200">Skincare</a></li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-list sort-destination sort-destination-margin sort-destination-items-hardware-acc overflow-visible mt-4" data-sort-id="portfolio">


                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item classic">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/categoria/crema1.jpg">
                                        <a href="index-classic.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Crema 1</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item classic">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/categoria/crema1.jpg">
                                        <a href="index-classic.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Crema 1</h5>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item onepage">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/categoria/tonico1.jpg">
                                        <a href="index-one-page.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Tónico purificante</h5>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/categoria/paletas1.jpg">
                                        <a href="index-corporate.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Paleta</h5>
                            </div>
                        </div>
                    </div>




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-2.jpg">
                                        <a href="index-corporate-2.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Corporate 2</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-3.jpg">
                                        <a href="index-corporate-3.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Corporate 3</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-4.jpg">
                                        <a href="index-corporate-4.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Corporate 4</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-5.jpg">
                                        <a href="index-corporate-5.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Corporate 5</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-6.jpg">
                                        <a href="index-corporate-6.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Corporate 6</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-7.jpg">
                                        <a href="index-corporate-7.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Corporate 7</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-8.jpg">
                                        <a href="index-corporate-8.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Corporate 8</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-9.jpg">
                                        <a href="index-corporate-9.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Corporate 9</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-10.jpg">
                                        <a href="index-corporate-10.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Corporate 10</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-11.jpg">
                                        <a href="index-corporate-11.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Corporate 11</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-12.jpg">
                                        <a href="index-corporate-12.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Corporate 12</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-13.jpg">
                                        <a href="index-corporate-13.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Corporate 13</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-14.jpg">
                                        <a href="index-corporate-14.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Corporate 14</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-15.jpg">
                                        <a href="index-corporate-15.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Corporate 15</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-16.jpg">
                                        <a href="index-corporate-16.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Corporate 16</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-17.jpg">
                                        <a href="index-corporate-17.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Corporate 17</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-18.jpg">
                                        <a href="index-corporate-18.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Corporate 18</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-19.jpg">
                                        <a href="index-corporate-19.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Corporate 19</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-20.jpg">
                                        <a href="index-corporate-20.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Corporate 20</h5>
                            </div>
                        </div>
                    </div> --}}




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item new">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center portfolio-item-new">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/categoria/venta1.jpg">
                                        <a href="index-corporate-21.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Kit Cremas</h5>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/categoria/skincare1.jpg">
                                        <a href="index-portfolio.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">SkinCare</h5>
                            </div>
                        </div>
                    </div>




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-portfolio-2.jpg">
                                        <a href="index-portfolio-2.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Portfolio 2</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-portfolio-3.jpg">
                                        <a href="index-portfolio-3.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Portfolio 3</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-portfolio-4.jpg">
                                        <a href="index-portfolio-4.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Portfolio 4</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-portfolio-5.jpg">
                                        <a href="index-portfolio-5.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Portfolio 5</h5>
                            </div>
                        </div>
                    </div> --}}




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item blog">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/categoria/cabello1.jpg">
                                        <a href="index-blog.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Shampoo</h5>
                            </div>
                        </div>
                    </div>




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item blog">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-blog-2.jpg">
                                        <a href="index-blog-2.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Blog 2</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item blog">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-blog-3.jpg">
                                        <a href="index-blog-3.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Blog 3</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item blog">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-blog-4.jpg">
                                        <a href="index-blog-4.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Blog 4</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item blog">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-blog-5.jpg">
                                        <a href="index-blog-5.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Blog 5</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-hosting.jpg">
                                        <a href="index-corporate-hosting.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Hosting</h5>
                            </div>
                        </div>
                    </div> --}}




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item classic">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/categoria/crema2.jpg">
                                        <a href="index-classic-color.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Crema 2</h5>
                            </div>
                        </div>
                    </div>




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item classic">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-classic-light.jpg">
                                        <a href="index-classic-light.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Classic Light</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item classic">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-classic-video.jpg">
                                        <a href="index-classic-video.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Classic Video</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item classic">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-classic-video-light.jpg">
                                        <a href="index-classic-video-light.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Classic Video Light</h5>
                            </div>
                        </div>
                    </div> --}}




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item classic new">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center portfolio-item-updated">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/categoria/venta2.jpg">
                                        <a href="demo-construction.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Kit 2</h5>
                            </div>
                        </div>
                    </div>




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-construction-2.jpg">
                                        <a href="demo-construction-2.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Construction 2</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-business-consulting.jpg">
                                        <a href="demo-business-consulting.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Business Consulting</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-business-consulting-2.jpg">
                                        <a href="demo-business-consulting-2.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Business Consulting 2</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-business-consulting-3.jpg">
                                        <a href="demo-business-consulting-3.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Business Consulting 3</h5>
                            </div>
                        </div>
                    </div> --}}



{{--
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-medical.jpg">
                                        <a href="demo-medical.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Medical</h5>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-medical-2.jpg">
                                        <a href="demo-medical-2.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Medical 2</h5>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-auto-services.jpg">
                                        <a href="demo-auto-services.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Auto Services</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business new">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center portfolio-item-updated">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-finance.jpg">
                                        <a href="demo-finance.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Finance</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-industry-factory.jpg">
                                        <a href="demo-industry-factory.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Industry Factory</h5>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-insurance.jpg">
                                        <a href="demo-insurance.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Insurance</h5>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-seo.jpg">
                                        <a href="demo-seo.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">SEO</h5>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-seo-2.jpg">
                                        <a href="demo-seo-2.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">SEO 2</h5>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-it-services.jpg">
                                        <a href="demo-it-services.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">IT Services</h5>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-cleaning-services.jpg">
                                        <a href="demo-cleaning-services.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Cleaning Services</h5>
                            </div>
                        </div>
                    </div> --}}




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item shop">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/categoria/labios1.jpg">
                                        <a href="demo-product-landing.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Labios</h5>
                            </div>
                        </div>
                    </div>




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-coffee.jpg">
                                        <a href="demo-coffee.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Coffee Shop</h5>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-sass.jpg">
                                        <a href="demo-sass.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">SASS</h5>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-architecture-interior.jpg">
                                        <a href="demo-architecture-interior.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Architecture &amp; Interior Design</h5>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-architecture-2.jpg">
                                        <a href="demo-architecture-2.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Architecture 2</h5>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-barber.jpg">
                                        <a href="demo-barber.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Barber Shop</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-education.jpg">
                                        <a href="demo-education.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Education</h5>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-startup-agency.jpg">
                                        <a href="demo-startup-agency.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Startup Agency</h5>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-digital-agency.jpg">
                                        <a href="demo-digital-agency.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Digital Agency</h5>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-digital-agency-2.jpg">
                                        <a href="demo-digital-agency-2.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Digital Agency 2 (Light)</h5>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-digital-agency-2-dark.jpg">
                                        <a href="demo-digital-agency-2-dark.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Digital Agency 2 (Dark)</h5>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-law-firm.jpg">
                                        <a href="demo-law-firm.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Law Firm</h5>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-law-firm-2.jpg">
                                        <a href="demo-law-firm-2.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Law Firm 2</h5>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item onepage">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-app-landing.jpg">
                                        <a href="demo-app-landing.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">App Landing</h5>
                            </div>
                        </div>
                    </div>--}}





                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio creative">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">

                                <div class="owl-carousel nav-dark show-nav-hover" data-plugin-options="{'items': 1, 'loop': true, 'nav': true, 'dots': false, 'autoplay': true, 'autoplayTimeout': 3000, 'autoplayHoverPause': true}">
                                    <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                        <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/categoria/crema1.jpg">
                                            <a href="demo-resume.html"></a>
                                        </span>
                                    </span>

                                    <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                        <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/categoria/crema2.jpg">
                                            <a href="demo-resume-blue.html"></a>
                                        </span>
                                    </span>

                                    <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                        <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/categoria/venta2.jpg">
                                            <a href="demo-resume-red.html"></a>
                                        </span>
                                    </span>

                                    <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                        <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="iimg/categoria/skincare1.jpg">
                                            <a href="demo-resume-green.html"></a>
                                        </span>
                                    </span>

                                    <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                        <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/categoria/cabello1.jpg">
                                            <a href="demo-resume-dark.html"></a>
                                        </span>
                                    </span>

                                </div>

                                <h5 class="text-color-dark text-capitalize mt-3">Varios</h5>
                            </div>
                        </div>
                    </div>



                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-hotel.jpg">
                                        <a href="demo-hotel.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Hotel</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-real-estate.jpg">
                                        <a href="demo-real-estate.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Real Estate</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item creative business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-event.jpg">
                                        <a href="demo-event.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Event</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business new">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center portfolio-item-updated">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-restaurant.jpg">
                                        <a href="demo-restaurant.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Restaurant</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-gym.jpg">
                                        <a href="demo-gym.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Gym</h5>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item onepage creative business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-band.jpg">
                                        <a href="demo-band.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Band</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item onepage creative new">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center portfolio-item-updated">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-one-page-agency.jpg">
                                        <a href="demo-one-page-agency.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">One Page Agency</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-photography.jpg">
                                        <a href="demo-photography.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Photography</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-photography-2.jpg">
                                        <a href="demo-photography-2.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Photography 2</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-photography-3.jpg">
                                        <a href="demo-photography-3.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Photography 3</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-church.jpg">
                                        <a href="demo-church.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Church</h5>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-wedding.jpg">
                                        <a href="demo-wedding.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Wedding</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item classic">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-boxed.jpg">
                                        <a href="feature-layout-boxed.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Boxed</h5>
                            </div>
                        </div>
                    </div> --}}




                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item classic">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-rtl.jpg">
                                        <a href="feature-layout-rtl.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">RTL</h5>
                            </div>
                        </div>
                    </div> --}}



            </div>
        </div>
    </section>

    <section class="section section-angled section-angled-reverse border-0 m-0 bg-dark section-dark" style="background-size: 100%; background-position: top;" data-bg-src="img/landing/header_builder_bg.jpg">
        <div class="section-angled-layer-top section-angled-layer-increase-angle bg-light" style="padding: 4rem 0;"></div>
        <div class="container py-5 mt-5">
            <div class="row align-items-center mt-4 pt-2">
                <div class="col-lg-6 pe-lg-5 position-relative text-center mb-5 mb-lg-0">
                    {{-- <img alt="Porto Headers" src="img/lazy.png" data-src="img/landing/porto_headers.png" class="img-fluid lazyload appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300" /> --}}
                    <img alt="Porto Headers" src="img/lazy.png" data-src="img/landing/Mockupx.jpg" class="img-fluid lazyload appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300" />
                </div>
                <div class="col-lg-5 text-center px-lg-0">
                    {{-- <h5 class="text-primary font-weight-semibold positive-ls-2 text-4 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" data-appear-animation-duration="750">ADVANCED USABILITY-FOCUSED </h5> --}}
                    <h2 class="font-weight-bold text-9 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">Servicios personalizados</h2>
                    <p class="text-color-white appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">En IMAQ Industrial Maquiladora ofrecemos servicios profesionales personalizados, que incluyen la fabricación de productos cosméticos, la selección de envases y empaque, la serigrafía o la adquisición de etiquetas.</p>
                    <p class="text-color-white pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-appear-animation-duration="750">Nuestros conocimientos y experiencias en la Industria Cosmética te ayudarán y respaldarán para tomar las mejores decisiones</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="fa fa-check text-color-primary bg-light rounded-circle p-2 me-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1600" data-appear-animation-duration="750"></i>
                        <p class="mb-0 line-height-5 ls-0 text-color-light font-weight-semibold appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1300" data-appear-animation-duration="750">Nuestro grupo de profesionales trabajara contigo lado a lado para convertir tus sueños, el estilo y las ideas de tus productos en realidad<br></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>

    {{-- <section class="section section-funnel border-0 bg-light lazyload m-0" style="background-size: 100%; background-repeat: no-repeat; background-position: top;" data-bg-src="img/landing/half_circle.png">
        <div class="container text-center pb-5 mt-3 mb-5">
            <h2 class="font-weight-bold text-9 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">Layouts</h2>
            <h5 class="text-primary font-weight-semibold positive-ls-2 text-4 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">GIANT LIBRARY OF VARIATIONS</h5>
            <p class="text-4 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="550">Giant variety of layouts to create your site with unlimited possibilities.</p>
            <div class="row flex-column flex-lg-row justify-content-center align-items-center my-5">
                <div class="col-8 col-md-5 col-lg-3 image-box mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">
                    <div class="image mb-3">
                        <img alt="Layouts" width="195" height="161" src="img/lazy.png" data-src="img/landing/porto_layouts1.png" class="position-relative z-index-3 lazyload me-auto" style="width: 67.47%; left: -51px;">
                        <img alt="Layouts" width="174" height="161" src="img/lazy.png" data-src="img/landing/porto_layouts3.png" class="position-relative z-index-1 lazyload ms-auto" style="width: 60.2%; margin-top: -32%; right: -50px;">
                        <img alt="Layouts" width="174" height="161" src="img/lazy.png" data-src="img/landing/porto_layouts3.png" class="position-relative z-index-2 lazyload mx-auto" style="width: 60.2%; margin-top: -13%;">
                    </div>
                    <h4 class="text-dark font-weight-bold pt-2 mb-1">Layouts</h4>
                    <p class="fs-md text-3 px-lg-4">Max Width 1200px, 1170px, 1024px,<br> full width, etc...</p>
                </div>
                <div class="col-8 col-md-5 col-lg-3 image-box mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">
                    <div class="image mb-3">
                        <img alt="Sidebars" width="172" height="161" src="img/lazy.png" data-src="img/landing/porto_sidebars1.png" class="position-relative z-index-1 lazyload ms-auto" style="right: -33px;">
                        <img alt="Sidebars" width="172" height="161" src="img/lazy.png" data-src="img/landing/porto_sidebars2.png" class="position-relative z-index-2 lazyload" style="left: -19px; margin-top: -32%;">
                        <img alt="Sidebars" width="172" height="161" src="img/lazy.png" data-src="img/landing/porto_sidebars3.png" class="position-relative z-index-3 lazyload ms-auto" style="right: -20px; margin-top: -13%;">
                    </div>
                    <h4 class="text-dark font-weight-bold pt-2 mb-1">Sidebars</h4>
                    <p class="fs-md text-3 px-lg-4">Sidebar can be set to be on left, right, both or even disabled.</p>
                </div>
                <div class="col-8 col-md-5 col-lg-3 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-appear-animation-duration="750">
                    <div class="image mb-3">
                        <img alt="Sliders" width="142" height="161" src="img/lazy.png" data-src="img/landing/porto_sliders1.png" class="position-relative z-index-1 lazyload" style="left: -31px;">
                        <img alt="Sliders" width="142" height="161" src="img/lazy.png" data-src="img/landing/porto_sliders2.png" class="position-relative z-index-2 lazyload ms-auto" style="right: -60px; margin-top: -31%">
                        <img alt="Sliders" width="142" height="161" src="img/lazy.png" data-src="img/landing/porto_sliders3.png" class="position-relative z-index-3 lazyload ms-auto" style="margin-right: 15%; margin-top: -41%;">
                        <img alt="Sliders" width="142" height="161" src="img/lazy.png" data-src="img/landing/porto_sliders4.png" class="position-relative z-index-4 lazyload" style="left: -50px; margin-top: -35.67%;">
                    </div>
                    <h4 class="text-dark font-weight-bold pt-2 mb-1">Sliders</h4>
                    <p class="fs-md text-3 px-lg-4">You can set several different types of sliders, boxed, full, grid, etc..</p>
                </div>
            </div>
        </div>
        <div class="section-funnel-layer-bottom">
            <div class="section-funnel-layer bg-color-light-scale-1"></div>
            <div class="section-funnel-layer bg-color-light-scale-1"></div>
        </div>
    </section> --}}

    {{-- <section class="section section-funnel position-relative border-0 pt-0 m-0">
        <div class="container pb-5 mb-5">
            <h2 class="fotn-weight-extra-bold mb-1 text-center">
                <b class="text-13 d-block line-height-1 font-weight-extra-bold appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="250" data-appear-animation-duration="750">80+</b>
                <span class="font-weight-bold text-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">Testimonios de nuestros clientes</span>
            </h2>
            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="850" data-appear-animation-duration="850">
                <h5 class="font-weight-semibold positive-ls-2 text-4 text-primary text-center mb-0">LÍDERES EN LA INDUSTRIA COSMÉTICA</h5>
                <p class="text-color-dark text-center mb-4">Personas reales, historias reales. Escuche de nuestra comunidad..</p>

                <div class="owl-carousel carousel-center-active-item-2 nav-style-4 mb-4 pb-3" data-plugin-options="{'items': 1, 'loop': true, 'nav': true, 'dots': false}">
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                            <div class="author">
                                <h4 class="text-5 mb-0">onealbs</h4>
                                <span class="opacity-7">Themeforest User</span>
                            </div>
                            <span class="star-rating">
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                            </span>
                        </div>
                        <p class="mb-0">"I have purchased this template four times for different projects and will soon be purchasing my fifth. This options for this template are limitless and customer service is amazing!"</p>
                    </div>
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                            <div class="author">
                                <h4 class="text-5 mb-0">mrmelton</h4>
                                <span class="opacity-7">Themeforest User</span>
                            </div>
                            <span class="star-rating">
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                            </span>
                        </div>
                        <p class="mb-0">"This template is pure joy to work with and customize. Everything is designed so clearly and it just makes your life easier to design a site. Highly recommend."</p>
                    </div>
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                            <div class="author">
                                <h4 class="text-5 mb-0">daniyal1997</h4>
                                <span class="opacity-7">Themeforest User</span>
                            </div>
                            <span class="star-rating">
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                            </span>
                        </div>
                        <p class="mb-0">"This theme continues to blow my mind! I can't believe how many features and layouts that are included and yet how elegantly it's all executed underneath."</p>
                    </div>
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                            <div class="author">
                                <h4 class="text-5 mb-0">alfvlx</h4>
                                <span class="opacity-7">Themeforest User</span>
                            </div>
                            <span class="star-rating">
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                            </span>
                        </div>
                        <p class="mb-0">"The best template i had work on!!!!!"</p>
                    </div>
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                            <div class="author">
                                <h4 class="text-5 mb-0">marcoss2009</h4>
                                <span class="opacity-7">Themeforest User</span>
                            </div>
                            <span class="star-rating">
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                            </span>
                        </div>
                        <p class="mb-0">"The best theme in Themeforest. I like it because I can customize it without problems."</p>
                    </div>
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                            <div class="author">
                                <h4 class="text-5 mb-0">moirajanetallen</h4>
                                <span class="opacity-7">Themeforest User</span>
                            </div>
                            <span class="star-rating">
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                            </span>
                        </div>
                        <p class="mb-0">"Very impressed with the great customer support."</p>
                    </div>

                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                            <div class="author">
                                <h4 class="text-5 mb-0">majstro7</h4>
                                <span class="opacity-7">Themeforest User</span>
                            </div>
                            <span class="star-rating">
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                                <i class="fas fa-star text-color-dark"></i>
                            </span>
                        </div>
                        <p class="mb-0">"Good code quality ! Very fast and good support ! I recommended it in 100% !"</p>
                    </div>
                </div>
            </div>
            <p class="text-center mb-5"><a class="btn btn-dark btn-modern btn-rounded btn-px-5 btn-py-3 text-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="250" data-appear-animation-duration="600" href="https://themeforest.net/checkout/from_item/4106987?license=regular&support=bundle_6month&ref=Okler" target="_blank">BUY PORTO NOW</a></p>
        </div>
        <div class="section-funnel-layer-bottom">
            <div class="section-funnel-layer bg-light"></div>
            <div class="section-funnel-layer bg-light"></div>
        </div>
    </section> --}}

    <section id="support" class="section section-angled bg-light border-0 m-0 position-relative pt-0">
        <div class="container pb-5 mb-5">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 pe-xl-5 mb-5 mb-lg-0">
                    <h2 class="font-weight-bold text-9 mb-1">Los mejores servicios</h2>
                    <h5 class="font-weight-semibold positive-ls-2 text-4 text-primary mb-3">TRAE TUS SUEÑOS Y LOS CONVERTIMOS EN REALIDAD</h5>
                    {{-- <p class="ls-0 text-default fw-400 mb-5">Any problem while using Porto? We're here to help you.</p> --}}
                    <div class="d-flex align-items-center border border-top-0 border-end-0 border-start-0 pb-4 mb-4">
                        <i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 me-3"></i>
                        <p class="mb-0"><b class="text-color-dark">Envasado -</b> Fabricación de envases Nacionales inyectados y soplados, así como importados.</p>
                    </div>
                    <div class="d-flex align-items-center border border-top-0 border-end-0 border-start-0 pb-4 mb-4">
                        <i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 me-3"></i>
                        <p class="mb-0"><b class="text-color-dark">Decorado -</b> Contamos con distintos sistemas de impresión: Hot Stamping, Serigrafía, Tampografía.</p>
                    </div>
                    <div class="d-flex align-items-center pb-4 mb-4">
                        <i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 me-3"></i>
                        <p class="mb-0"><b class="text-color-dark">Flexografía -</b> Fabricamos nuestras propias etiquetas que complementan el producto (Hasta 3,4 y 8 colores).</p>
                    </div>
                    <div class="d-flex align-items-center pb-4 mb-4">
                        <i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 me-3"></i>
                        <p class="mb-0"><b class="text-color-dark">Producto -</b> Importación de envases y accesorios. Desarrollo del producto, manufactura y producto terminado.</p>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-2 position-relative">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
                        <img class="img-fluid lazyload" src="img/lazy.png" data-src="img/landing/porto_dots2.png" alt="" style="position: absolute; bottom: -2%; left: -43%; transform: rotate(90deg)">
                    </div>
                    {{-- <img alt="Porto Support" src="img/lazy.png" data-src="img/landing/support_login.jpg" class="img-fluid border border-width-10 border-color-light rounded box-shadow-3 lazyload ms-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200" style="width: 590px; max-width: none;"> --}}
                    <img alt="Porto Support" src="img/lazy.png" data-src="img/landing/servicio2.jpg" class="img-fluid border border-width-10 border-color-light rounded box-shadow-3 lazyload ms-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200" style="width: 590px; max-width: none;">
                    {{-- <img alt="Porto Documentation" src="img/lazy.png" data-src="img/landing/porto_docs.jpg" class="img-fluid lazyload rounded box-shadow-3 position-absolute appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="700" style="left: -100px; bottom: 50px;"> --}}
                    <img alt="Porto Documentation" src="img/lazy.png" data-src="img/landing/servicio1.jpg" class="img-fluid lazyload rounded box-shadow-3 position-absolute appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="700" style="left: -100px; bottom: 50px;">
                </div>
            </div>
        </div>
        {{-- <div class="section-angled-layer-bottom section-angled-layer-increase-angle" style="padding: 4rem 0; background: #222529;"></div> --}}
    </section>


        <div class="container col-lg-12">

            <div class="row mb-12">
                <div class="col-lg-7">

                    <h2 class="font-weight-bold text-7 mt-2 mb-0">Contáctanos</h2>
                    <p class="text-color-dark mb-4">Siéntase libre de pedir detalles!</p>

                    <form class="contact-form-recaptcha-v3" action="{{  route('contact-us')  }}" method="POST" novalidate="novalidate">
                        @csrf

                        @if(session()->has('success'))
                            <div class="contact-form-success alert alert-success mt-4">
                                <strong>Enviado!</strong> Su mensaje ha sido enviado, le atenderemos lo más pronto posible.
                            </div>
                        @elseif(session()->has('error'))
                            <div class="contact-form-error alert alert-danger mt-4">
                                <strong>Error!</strong> Hubo un problema al enviar el mensaje, por favor intente nuevamente.
                                <span class="mail-error-message text-1 d-block"></span>
                            </div>
                        @endif

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="text-color-dark form-label mb-1 text-2">Nombre completo:</label>
                                <input type="text" data-msg-required="Por favor escriba su nombre completo." maxlength="100" class="form-control text-3 h-auto py-2 " name="name" value="{{ old('name') }}"  required="">
                                {{-- @error('name')
                                    <small class="text-danger">{{  $message  }}</small>
                                @enderror --}}
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="text-color-dark form-label mb-1 text-2">Correo electrónico:</label>
                                <input type="email" value="{{ old('email') }}" data-msg-required="Por favor escriba su correo electrónico" data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2 " name="email" required="">
                                {{-- @error('email')
                                    <small class="text-danger">{{  $message  }}</small>
                                @enderror --}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="text-color-dark form-label mb-1 text-2">Asunto:</label>
                                <input type="text" value="{{ old('subject') }}" data-msg-required="Escriba el asunto" maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="text-color-dark form-label mb-1 text-2">Mensaje:</label>
                                <textarea maxlength="5000" data-msg-required="Por favor escriba su mensaje" rows="5" class="form-control text-3 h-auto py-2" name="message" required="">{{ old('message') }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <input type="submit" value="Enviar mensaje" class="btn btn-primary btn-modern" data-loading-text="Cargando...">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="col-lg-12 offset-lg-1 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="800" data-plugin-options="{'accY': -200}" style="animation-delay: 800ms;">
    
                        <h4 class="pt-5">Nuestra <strong>Oficina</strong></h4>
                        <ul class="list list-icons list-icons-style-3 mt-2">
                            <li class="text-color-dark"><i class="fas fa-map-marker-alt top-6"></i> <strong>Dirección:</strong> Calle 3, Nº 47, Int. 103, Industrial Alce Blanco, Naucalpan de Juárez, Estado de México</li>
                            <li class="text-color-dark"><i class="fas fa-map-location-dot top-6"></i> <strong><a href="https://g.page/imaq-industrial-maquiladora?share" class="text-decoration-none" target="_blanck">Ir a Google Maps:</a></strong> <a href="https://g.page/imaq-industrial-maquiladora?share" target="_blanck">Clic Aquí</a></li>
                            <li class="text-color-dark"><i class="fas fa-phone top-6"></i> <strong>Teléfono:</strong> <a class="text-color-dark text-color-hover-primary text-decoration-none" href="tel:5571592358">55 7159 2358</a></li>
                            <li class="text-color-dark"><i class="fas fa-envelope top-6"></i> <strong>Correo:</strong> <a class="text-color-dark text-color-hover-primary text-decoration-none" href="mailto:ventas@industrialmaquiladora.com">ventas@industrialmaquiladora.com</a></li>
                        </ul>
                        
                    </div>
                </div>
            </div>

        </div>



    {{-- CLIENTES --}}
    {{-- <section class="section section-funnel border-0 bg-light lazyload m-0" xstyle="background-size: 100%; background-repeat: no-repeat; background-position: top;" xdata-bg-src="img/landing/half_circle.png">
        <div class="container text-center pb-5 mt-3 mb-5">
            <h2 class="font-weight-bold text-9 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">Clientes</h2>
            <h5 class="text-primary font-weight-semibold positive-ls-2 text-4 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">CLIENTES SATISFECHOS</h5>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme carousel-center-active-item owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}" style="height: auto;">
                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2340px, 0px, 0px); transition: all 0.25s ease 0s; width: 6240px;"><div class="owl-item cloned" style="width: 390px;"><div>
                        <img class="img-fluid" src="img/logos/logo-5.png" alt="">
                    </div></div><div class="owl-item cloned" style="width: 390px;"><div>
                        <img class="img-fluid" src="img/logos/logo-6.png" alt="">
                    </div></div><div class="owl-item cloned" style="width: 390px;"><div>
                        <img class="img-fluid" src="img/logos/logo-4.png" alt="">
                    </div></div><div class="owl-item cloned" style="width: 390px;"><div>
                        <img class="img-fluid" src="img/logos/logo-2.png" alt="">
                    </div></div><div class="owl-item" style="width: 390px;"><div>
                        <img class="img-fluid" src="img/logos/logo-1.png" alt="">
                    </div></div><div class="owl-item" style="width: 390px;"><div>
                        <img class="img-fluid" src="img/logos/logo-2.png" alt="">
                    </div></div><div class="owl-item active current" style="width: 390px;"><div>
                        <img class="img-fluid" src="img/logos/logo-3.png" alt="">
                    </div></div><div class="owl-item" style="width: 390px;"><div>
                        <img class="img-fluid" src="img/logos/logo-4.png" alt="">
                    </div></div><div class="owl-item" style="width: 390px;"><div>
                        <img class="img-fluid" src="img/logos/logo-5.png" alt="">
                    </div></div><div class="owl-item" style="width: 390px;"><div>
                        <img class="img-fluid" src="img/logos/logo-6.png" alt="">
                    </div></div><div class="owl-item" style="width: 390px;"><div>
                        <img class="img-fluid" src="img/logos/logo-4.png" alt="">
                    </div></div><div class="owl-item" style="width: 390px;"><div>
                        <img class="img-fluid" src="img/logos/logo-2.png" alt="">
                    </div></div><div class="owl-item cloned" style="width: 390px;"><div>
                        <img class="img-fluid" src="img/logos/logo-1.png" alt="">
                    </div></div><div class="owl-item cloned" style="width: 390px;"><div>
                        <img class="img-fluid" src="img/logos/logo-2.png" alt="">
                    </div></div><div class="owl-item cloned" style="width: 390px;"><div>
                        <img class="img-fluid" src="img/logos/logo-3.png" alt="">
                    </div></div><div class="owl-item cloned" style="width: 390px;"><div>
                        <img class="img-fluid" src="img/logos/logo-4.png" alt="">
                    </div></div></div>
                </div>
                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"></button>
                </div>
                <div class="owl-dots disabled"></div>
            </div>

        </div>
    </section> --}}
    {{-- FIN CLIENTES --}}



    {{-- <section class="section bg-dark section-dark border-0 m-0">
        <div class="container">
            <div class="text-center mb-5">
                <h5 class="font-weight-semibold positive-ls-2 text-4 text-primary mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" data-appear-animation-duration="750">POWERFUL AND COMPLETE</h5>
                <h2 class="font-weight-bold text-9 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">Premium Plugins and Features</h2>
                <p class="custom-text-color-1 color-inherit appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="850" data-appear-animation-duration="750">Create your website using premium included plugins and Porto's exclusive features.<br>It’s incredibly easy and fun to build and mantain your website design and content.</p>
            </div>
            <div class="row pb-5">
                <div class="col-12 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" data-appear-animation-duration="750">
                    <div class="bg-color-dark-scale-2 rounded p-5">
                        <i class="icon-bg icon-plugin-2 mb-3"></i>
                        <h4 class="text-4 mb-2 font-weight-bold">Slider Revolution</h4>
                        <p class="custom-text-color-1 text-3 color-inherit mb-0">Slider Revolution is truely #1 popular slider plugin that has 'no competitor'. This plugin is being sold on codecanyon.net store exclusively. You can get the plugin for free once you purchase Porto. Porto offers many beautiful slider sample contents that you can choose and apply on your website.  You can alse create new sliders easily.</p>
                    </div>
                </div>
                <div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                    <div class="bg-color-dark-scale-2 rounded p-5">
                        <i class="icon-bg icon-feature-1 mt-4"></i>
                        <h4 class="text-4 mb-2">Top Level Support</h4>
                        <p class="custom-text-color-1 text-3 color-inherit mb-0">You can expect high technical reply within 24 hrs, average response time is 14 hrs. Customer satisfication is our main focus. You won't be alone using Porto.</p>
                    </div>
                </div>
                <div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">
                    <div class="bg-color-dark-scale-2 rounded p-5">
                        <i class="icon-bg icon-feature-2 mt-4"></i>
                        <h4 class="text-4 mb-2">100% Fully Responsive</h4>
                        <p class="custom-text-color-1 text-3 color-inherit mb-0">Not only working fine on any screen resolutions, Porto offers very beautiful layouts and avoid any heaviness for small resolutions.</p>
                    </div>
                </div>
                <div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">
                    <div class="bg-color-dark-scale-2 rounded p-5">
                        <i class="icon-bg icon-feature-3 mt-4"></i>
                        <h4 class="text-4 mb-2">Easy To Customize</h4>
                        <p class="custom-text-color-1 text-3 color-inherit mb-0">Porto was created to be very easy to edit and customize. The source code is organized to help any pro or beginner developer.</p>
                    </div>
                </div>
                <div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">
                    <div class="bg-color-dark-scale-2 rounded p-5">
                        <i class="icon-bg icon-feature-17 mt-4"></i>
                        <h4 class="text-4 mb-2">Functional Forms</h4>
                        <p class="custom-text-color-1 text-3 color-inherit mb-0">Porto comes with several functional contact forms, it's very easy to customize and set your email and fields in any page.</p>
                    </div>
                </div>
                <div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                    <div class="bg-color-dark-scale-2 rounded p-5">
                        <i class="icon-bg icon-feature-5 mt-4"></i>
                        <h4 class="text-4 mb-2">Retina Ready</h4>
                        <p class="custom-text-color-1 text-3 color-inherit mb-0">Porto works fine with any retina devices, we've fully tested Porto on all retina resolutions including laptops and mobile devices.</p>
                    </div>
                </div>
                <div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">
                    <div class="bg-color-dark-scale-2 rounded p-5">
                        <i class="icon-bg icon-feature-6 mt-4"></i>
                        <h4 class="text-4 mb-2">Bootstrap Based</h4>
                        <p class="custom-text-color-1 text-3 color-inherit mb-0">Porto is based on Bootstrap, the most popular CSS Framework for developing responsive and mobile-first websites.</p>
                    </div>
                </div>
                <div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">
                    <div class="bg-color-dark-scale-2 rounded p-5">
                        <i class="icon-bg icon-feature-7 mt-4"></i>
                        <h4 class="text-4 mb-2">One and Multi Pages</h4>
                        <p class="custom-text-color-1 text-3 color-inherit mb-0">Porto has a bunch of demos with the possibility to create one and multi pages websites.</p>
                    </div>
                </div>
                <div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">
                    <div class="bg-color-dark-scale-2 rounded p-5">
                        <i class="icon-bg icon-feature-8 mt-4"></i>
                        <h4 class="text-4 mb-2">Headers and Menus</h4>
                        <p class="custom-text-color-1 text-3 color-inherit mb-0">Porto comes with several headers and menus options for you to use on your website.</p>
                    </div>
                </div>
                <div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                    <div class="bg-color-dark-scale-2 rounded p-5">
                        <i class="icon-bg icon-feature-9 mt-4"></i>
                        <h4 class="text-4 mb-2">eCommerce Templates</h4>
                        <p class="custom-text-color-1 text-3 color-inherit mb-0">Exclusive layouts and features makes you to create your online store and sell online.</p>
                    </div>
                </div>
                <div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">
                    <div class="bg-color-dark-scale-2 rounded p-5">
                        <i class="icon-bg icon-feature-10 mt-4"></i>
                        <h4 class="text-4 mb-2">CSS3 Animations</h4>
                        <p class="custom-text-color-1 text-3 color-inherit mb-0">Porto is always keen to update latest css 3 technologies, you can see nice and exclusive css3 animation effects through demos.</p>
                    </div>
                </div>
                <div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">
                    <div class="bg-color-dark-scale-2 rounded p-5">
                        <i class="icon-bg icon-feature-11 mt-4"></i>
                        <h4 class="text-4 mb-2">Unlimited Colors &amp; Skins</h4>
                        <p class="custom-text-color-1 text-3 color-inherit mb-0">You can configure any color you want, for entire site or certain sections using our exclusive style switcher.</p>
                    </div>
                </div>
                <div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">
                    <div class="bg-color-dark-scale-2 rounded p-5">
                        <i class="icon-bg icon-feature-12 mt-4"></i>
                        <h4 class="text-4 mb-2">SEO Friendly</h4>
                        <p class="custom-text-color-1 text-3 color-inherit mb-0">SEO Friendly is one of our top priorities while working on Porto improvements, you can expect high seo performance while using Porto.</p>
                    </div>
                </div>
                <div class="d-flex col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                    <div class="bg-color-dark-scale-2 rounded p-5">
                        <i class="icon-bg icon-feature-13 mt-4"></i>
                        <h4 class="text-4 mb-2">Optimized for Speed</h4>
                        <p class="custom-text-color-1 text-3 color-inherit mb-0">Everything is oriented for high speed performance based in the best code standards.</p>
                    </div>
                </div>
                <div class="d-flex col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">
                    <div class="bg-color-dark-scale-2 rounded p-5">
                        <i class="icon-bg icon-feature-18 mt-4"></i>
                        <h4 class="text-4 mb-2">Ajax Ready + Lazy Load</h4>
                        <p class="custom-text-color-1 text-3 color-inherit mb-0">Porto works perfectly with ajax laoding and also lazy load for a better performance.</p>
                    </div>
                </div>
                <div class="d-flex col-sm-6 col-lg-3 mb-4 mb-sm-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">
                    <div class="bg-color-dark-scale-2 rounded p-5">
                        <i class="icon-bg icon-feature-15 mt-4"></i>
                        <h4 class="text-4 mb-2">RTL Support</h4>
                        <p class="custom-text-color-1 text-3 color-inherit mb-0">Fully compatible with Right to Left languages, always check this feature before our version update.</p>
                    </div>
                </div>
                <div class="d-flex col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">
                    <div class="bg-color-dark-scale-2 rounded p-5">
                        <i class="icon-bg icon-feature-19 mt-4"></i>
                        <h4 class="text-4 mb-2">Social Integration</h4>
                        <p class="custom-text-color-1 text-3 color-inherit mb-0">Social media integration is easy with Porto. You can also configure Twitter and Instagram feeds.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="section section-elements m-0 section-no-border bg-bottom-slash position-relative z-index-1">
        <div class="container text-center mt-4">
            <h2 class="font-weight-bold text-9 mb-2">Porto Elements</h2>
            <p class="text-4 mb-5">Porto is simply a better choice for your new website design.</p>

            <div class="row justify-content-center">

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-accordions.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-bars"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-bars"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Accordions</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-toggles.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-indent"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-indent"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Toggles</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-tabs.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-columns"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-columns"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Tabs</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-icons.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-check"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-check"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Icons</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-icon-boxes.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-check-circle"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="far fa-check-circle"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Icon Boxes</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-carousels.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-ellipsis-h"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-ellipsis-h"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Carousels</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-modals.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-expand"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-expand"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Modals</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-lightboxes.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-clone"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="far fa-clone"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Lightboxes</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-buttons.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-minus"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-minus"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Buttons</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-badges.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-stream"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-stream"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Badges</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-lists.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-list-ul"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-list-ul"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Lists</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-cards.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fab fa-buffer"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fab fa-buffer"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Cards</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-image-gallery.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-file-image"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="far fa-file-image"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Image Gallery</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-image-frames.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-image"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="far fa-image"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Image Frames</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-image-hotspots.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-hand-point-up"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="far fa-hand-point-up"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Image Hotspots</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-testimonials.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-comments"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="far fa-comments"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Testimonials</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-blockquotes.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-quote-left"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-quote-left"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Blockquotes</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-word-rotator.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fab fa-autoprefixer"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fab fa-autoprefixer"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Word Rotator</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-before-after.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-arrows-alt-h"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-arrows-alt-h"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Before / After</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-typography.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-font"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-font"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Typography</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-call-to-action.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-external-link-alt"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-external-link-alt"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Call to Action</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-pricing-tables.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-dollar-sign"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-dollar-sign"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Pricing Tables</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-tables.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-table"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-table"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Tables</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-progressbars.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-chart-bar"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-chart-bar"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Progress Bars</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-process.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-bullseye"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-bullseye"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Process</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-counters.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-sort-numeric-down"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-sort-numeric-down"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Counters</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-countdowns.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-clock"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="far fa-clock"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Countdowns</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-sections-parallax.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-images"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-images"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Sections &amp; Parallax</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-tooltips-popovers.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-comment-alt"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="far fa-comment-alt"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Tooltips &amp; Popovers</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-sticky-elements.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-compress"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-compress"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Sticky Elements</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-headings.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-text-height"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-text-height"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Headings</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-dividers.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-align-center"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-align-center"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Dividers</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-animations.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-asterisk"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-asterisk"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Animations</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-medias.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-play-circle"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="far fa-play-circle"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Medias</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-maps.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-map"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="far fa-map"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Maps</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-arrows.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-arrow-alt-circle-right"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="far fa-arrow-alt-circle-right"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Arrows</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-star-ratings.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-star"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="far fa-star"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Star Ratings</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-alerts.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-exclamation-triangle"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-exclamation-triangle"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Alerts</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-posts.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-calendar-alt"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="far fa-calendar-alt"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Posts</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-forms.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-file-alt"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="far fa-file-alt"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Forms</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-360-image-viewer.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-sync-alt"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-sync-alt"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">360º Image Viewer</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-shape-dividers.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-divide"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-divide"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Shape Dividers</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-read-more.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-plus-square"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="far fa-plus-square"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Read More</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-cascading-images.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-images"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="far fa-images"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Cascading Images</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                        <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                            <a href="elements-random-images.html" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-random"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="fas fa-random"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Random Images</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}

    {{-- <section class="section section-dark section-angled border-0 lazyload pb-0 m-0" style="background-size: 100%; background-position: top;" data-bg-src="img/landing/build_bg.jpg">
        <div class="section-angled-layer-top section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 4rem 0;"></div>
        <div class="container text-center my-5 py-5">
            <h2 class="font-weight-bold line-height-3 text-12 mt-5 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" data-appear-animation-duration="750">Build your website with Porto</h2>
            <h4 class="font-weight-bold text-9 mb-4 pb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">Purchase now. Only <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-no-rotate highlighted-word-animation-1 highlighted-word-animation-1-light alternative-font-4 font-weight-extra-bold text-4 light appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="800" data-appear-animation-duration="750">$16!</span></h4>
            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900" data-appear-animation-duration="750">
                <h4 class="font-weight-light text-4 col-lg-6 px-0 offset-lg-3 fw-400 mb-5 opacity-8">Porto Template has been available on ThemeForest since 2013 and is one of the top sellers with more than 40K+ sales.</h4>
            </div>
            <div class="col-12 px-0 pb-2 mb-4">
                <div class="row flex-column flex-lg-row justify-content-center">
                    <div class="col-auto">
                        <h5 class="font-weight-semibold text-4 positive-ls-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100" data-appear-animation-duration="750"><i class="fa fa-check"></i> SUPER HIGH PERFORMANCE</h5>
                    </div>
                    <div class="col-auto mx-5 my-2 my-lg-0">
                        <h5 class="font-weight-semibold text-4 positive-ls-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1400" data-appear-animation-duration="750"><i class="fa fa-check"></i> STRICT CODING STANDARDS</h5>
                    </div>
                    <div class="col-auto">
                        <h5 class="font-weight-semibold text-4 positive-ls-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1600" data-appear-animation-duration="750"><i class="fa fa-check"></i> FREE LIFETIME UPDATES</h5>
                    </div>
                </div>
            </div>
            <a href="https://themeforest.net/checkout/from_item/4106987?license=regular&support=bundle_6month&ref=Okler" class="btn btn-dark btn-modern btn-rounded px-5 btn-py-3 text-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1800" data-appear-animation-duration="750" target="_blank">BUY PORTO NOW</a>
        </div>
        <div class="row border border-start-0 border-bottom-0 border-end-0 border-color-light-2">
            <div class="col-6 col-md-3 text-center d-flex align-items-center justify-content-center py-4">
                <a href="http://www.okler.net/" class="text-decoration-none" target="_blank">
                    <div class="icon-box">
                        <i class="icon-bg icon-menu-1"></i>
                        <h4 class="text-4 mb-0">Customer Showcase<small class="d-block p-relative bottom-4 opacity-6 ls-0">(SAMPLE SITES)</small></h4>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 text-center divider-left-border border-color-light-2 d-flex align-items-center justify-content-center py-4">
                <a href="http://www.okler.net/open-a-ticket/" class="text-decoration-none" target="_blank">
                    <div class="icon-box">
                        <i class="icon-bg icon-menu-2"></i>
                        <h4 class="text-4 mb-0">Support Center</h4>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 text-center divider-left-border border-color-light-2 d-flex align-items-center justify-content-center py-4">
                <a href="http://www.okler.net/" class="text-decoration-none" target="_blank">
                    <div class="icon-box">
                        <i class="icon-bg icon-menu-3"></i>
                        <h4 class="text-4 mb-0">Online Documentation</h4>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 text-center divider-left-border border-color-light-2 d-flex align-items-center justify-content-center py-4 opacity-5">
                <a href="http://www.okler.net/" class="text-decoration-none" target="_blank">
                    <div class="icon-box">
                        <i class="icon-bg icon-menu-4"></i>
                        <h4 class="font-weight-500 text-color-light line-height-1 text-4 mt-0 mb-2">Video Tutorials<br><span class="text-2 d-block pt-1">(coming soon)</span></h4>
                    </div>
                </a>
            </div>
        </div>
    </section> --}}

    <section class="section bg-color-dark-scale-2 border-0 m-0 py-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="list list-unstyled list-inline d-flex align-items-center justify-content-center flex-column flex-lg-row mb-0">
                        <li class="text-color-white list-inline-item Xcustom-text-color-1 Xcolor-inherit mb-lg-0 text-2 pe-2">Tu propia marca:</li>
                        <li class="list-inline-item mb-lg-0"><a xhref="https://themeforest.net/item/porto-admin-responsive-html5-template/8539472" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">MAQUILLAJES</a></li>
                        <li class="list-inline-item mb-lg-0"><a xhref="https://themeforest.net/item/porto-ecommerce-shop-template/22685562" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">LABIALES</a></li>
                        <li class="list-inline-item mb-lg-0"><a xhref="https://themeforest.net/item/porto-responsive-wordpress-ecommerce-theme/9207399" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">SKICARE</a></li>
                        <li class="list-inline-item mb-lg-0"><a xhref="https://themeforest.net/item/porto-ultimate-responsive-magento-theme/9725864" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">DELINEADORES</a></li>
                        <li class="list-inline-item mb-lg-0"><a xhref="https://themeforest.net/item/porto-ultimate-responsive-shopify-theme/19162959" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">SOMBRAS</a></li>
                        <li class="list-inline-item mb-lg-0"><a xhref="https://themeforest.net/item/porto-responsive-drupal-7-theme/5219986" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">PIGMENTOS</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
