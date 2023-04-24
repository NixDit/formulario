@extends('index')
@section('title','IMAQ | Industrial Maquiladora OSC - Fabricante de cosméticos')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=5620949468&text=Hola!%20Me%20contacto%20desde%20el%20sitio%20web%20de%20IMAQ.%20Necesito%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20sus%20servicios." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
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
                            <video id="popupPresentation" class="float-start" width="100%" height="100%" muted playsinline loop preload="metadata" xposter="video/presentation.jpg">
                                    <source src="img/video/baul.mp4" type="video/mp4">
                                    <source src="img/video/baul.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 mb-5">
                    <div class="position-relative border-width-10 border-color-light clearfix border border-radius" data-remove-min-height style="min-height: 446px;">
                        <video id="presentation" class="float-start" width="100%" height="100%" muted playsinline loop preload="metadata" xposter="video/presentation.jpg" data-auto-play="true">
                                <source src="img/video/baul.mp4" type="video/mp4">
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
                    <img xsrc="img/lazy.png" data-src="img/landing/logomarcaimaq.png" class="lazyload ximg-fluid xborder xborder-width-10 xborder-color-light xbox-shadow-3 xrounded" alt="Logotipo de Imaq Industrial Maquiladora" title="Logotipo de Imaq Industrial maquiladora">
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
                    <img src="img/lazy.png" data-src="img/landing/diseno1-01.jpg" class="lazyload img-fluid border border-width-10 border-color-light box-shadow-3 rounded d-none d-md-block appear-animation" alt="Diseños de como crear una marca de cosmeticos" title="Diseño de como crear una marca de cosmeticos con IMAQ" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
                    <div class="position-absolute d-none d-md-flex align-items-end appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="900" style="bottom: -60px; right: -90px;">
                        <span class="arrow hlt" style="margin-right: -70px;"></span>
                        <strong class="text-color-dark mb-4 pb-3">Diseños</strong>
                    </div>
                </div>
                <div class="col-11 col-md-9 position-relative ps-0 pe-5 pb-5 pb-md-0 mb-5 mb-md-0">
                    <div class="intro2 pt-5 pt-md-0 mt-5 mt-lg-0 appear-animation pe-5" data-appear-animation="fadeInUp" data-appear-animation-delay="400"><img src="img/lazy.png" data-src="img/landing/muestra.jpg" class="lazyload img-fluid box-shadow-3 position-relative z-index-1 rounded" alt="Crear mi propia marca de cosmeticos hidrobase" title="Hidrobase crear una marca" style="left: -110px;"></div>
                    <div class="intro3 z-index-3 position-absolute appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="800" style="top: 20%; right: 4%;">
                        <img src="img/lazy.png" data-src="img/landing/demostracion.jpg" class="lazyload img-fluid border border-width-10 border-color-light box-shadow-3 rounded" alt="Mi propia marca de cosmeticos" title="Crear mi propia marca de cosmeticos">
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
                <img src="img/lazy.png" data-src="img/landing/tumarca.jpg" class="lazyload img-fluid" alt="Muestra de productos para crear tu propia marca de cosmeticos en Mexico" title="Productos para crear tu propia marca de cosmeticos">
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
                        <img src="img/lazy.png" data-src="img/landing/porto_dots.png" width="154" height="146" class="lazyload position-absolute top-auto" alt="6 razones para crear tu marca con Imaq Industrial Maquiladora" title="Razones para crear tu marca con Imaq Industrial Maquiladora" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 3, 'transition': true}" style="bottom: 184px; left: 70px;">
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
                <div class="col-lg-12">
                    <div class="row justify-content-center">

                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">
                            {{-- <img class="lazyload img-fluid" alt="Mujer planificando el trabajo para crear una marca de cosmeticos con Imaq" title="Planificando marca de cosmeticos con Imaq Industrial Maquiladora" src="img/lazy.png" data-src="img/landing/bases1x.jpg"> --}}
                                <div class="card border-0 border-radius-0 box-shadow-1 ">
                                    <div class="card-body p-3 z-index-1">
                                        <a href="javascript:;">
                                            <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                                                <span xclass="thumb-info-wrapper">
                                                    <img src="{{ asset('img/landing/bases1x.jpg') }}" class="img-fluid" alt="Mujer planificando el trabajo para crear una marca de cosmeticos con Imaq" title="Planificando marca de cosmeticos con Imaq Industrial Maquiladora">
                                                </span>
                                            </span>
                                        </a>
                                        <div class="card-body p-0 d-flex align-items-center mb-2">
                                            <span class="text-color-secondary font-weight-extra-bold text-12 me-2 line-height-1">1</span>
                                            <h4 class="text-color-dark d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">Experiencia</small>por más de 60 años</h4>
                                        </div>
                                        <p class="text-color-primary pe-5 custom-text-color-1">Durante más de 60 años sabemos por experiencia lo que significa crear y lanzar marcas cosméticas</p>
                                    </div>
                                </div> <br>
                        </div>

                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">
                            <div class="card border-0 border-radius-0 box-shadow-1 ">
                                <div class="card-body p-3 z-index-1">
                                    <a href="javascript:;">
                                        <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                                            <span xclass="thumb-info-wrapper">
                                                <img src="{{ asset('img/landing/base2.jpg') }}" class="img-fluid" alt="Maquila de Industria Cosmetica" title="Maquila de Industria Cosmetica Imaq">
                                            </span>
                                        </span>
                                    </a>
                                    <div class="card-body p-0 d-flex align-items-center mb-2">
                                        <span class="text-color-secondary font-weight-extra-bold text-12 me-2 line-height-1">2</span>
                                        <h4 class="text-color-dark d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">Contamos</small>con maquila</h4>
                                    </div>
                                    <p class="text-color-primary pe-5 custom-text-color-1">Contamos con instalaciones propias para hacer pruebas de resultados y control.</p>
                                </div>
                            </div> <br>
                        </div>

                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-appear-animation-duration="750">
                            <div class="card border-0 border-radius-0 box-shadow-1 ">
                                <div class="card-body p-3 z-index-1">
                                    <a href="javascript:;">
                                        <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                                            <span xclass="thumb-info-wrapper">
                                                <img src="{{ asset('img/landing/bases3.jpg') }}" class="img-fluid" alt="Asesor explicando la fabricacion de cosmeticos" title="Asesor explicando la fabricacion de cosmeticos">
                                            </span>
                                        </span>
                                    </a>
                                    <div class="card-body p-0 d-flex align-items-center mb-2">
                                        <span class="text-color-secondary font-weight-extra-bold text-12 me-2 line-height-1">3</span>
                                        <h4 class="text-color-dark d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">Asesor</small>asignado para tí</h4>
                                    </div>
                                    <p class="text-color-primary pe-5 custom-text-color-1">Contarás con un asesor que te estará atendiendo en todo el proceso de fabricación.</p>
                                </div>
                            </div> <br>
                        </div>

                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" data-appear-animation-duration="750">
                            <div class="card border-0 border-radius-0 box-shadow-1 ">
                                <div class="card-body p-3 z-index-1">
                                    <a href="javascript:;">
                                        <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                                            <span xclass="thumb-info-wrapper">
                                                <img src="{{ asset('img/landing/bases4.jpg') }}" class="img-fluid" alt="Departamento de Diseño Grafico para cosmeticos" title="Departamento de diseño grafico para cosmeticos en México">
                                            </span>
                                        </span>
                                    </a>
                                    <div class="card-body p-0 d-flex align-items-center mb-2">
                                        <span class="text-color-secondary font-weight-extra-bold text-12 me-2 line-height-1">4</span>
                                        <h4 class="text-color-dark d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">Departamento</small>de diseño</h4>
                                    </div>
                                    <p class="text-color-primary pe-5 custom-text-color-1">Contamos con un departamento de diseño gráfico para brindar apoyo y asesoramiento.</p>
                                </div>
                            </div> <br>
                        </div>

                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                            <div class="card border-0 border-radius-0 box-shadow-1 ">
                                <div class="card-body p-3 z-index-1">
                                    <a href="javascript:;">
                                        <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                                            <span xclass="thumb-info-wrapper">
                                                <img src="{{ asset('img/landing/bases5.jpg') }}" class="img-fluid" alt="Quimicos en la industria cosmetica" title="Quimicos en la industria cosmetica">
                                            </span>
                                        </span>
                                    </a>
                                    <div class="card-body p-0 d-flex align-items-center mb-2">
                                        <span class="text-color-secondary font-weight-extra-bold text-12 me-2 line-height-1">5</span>
                                        <h4 class="text-color-dark d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">Contamos</small>con Químicos</h4>
                                    </div>
                                    <p class="text-color-primary pe-5 custom-text-color-1 ">Nuestros químicos están a disposición dar recomendaciones durante la fabricación de tu producto.</p>
                                </div>
                            </div> <br>
                        </div>

                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" data-appear-animation-duration="750">
                            <div class="card border-0 border-radius-0 box-shadow-1 ">
                                <div class="card-body p-3 z-index-1">
                                    <a href="javascript:;">
                                        <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                                            <span xclass="thumb-info-wrapper">
                                                <img src="{{ asset('img/landing/sin-expe.jpg') }}" class="img-fluid" alt="Productos cosmeticos no testeado en animales" title="Productos cosmeticos no testeados en animales">
                                            </span>
                                        </span>
                                    </a>
                                    <div class="card-body p-0 d-flex align-items-center mb-2">
                                        <span class="text-color-secondary font-weight-extra-bold text-12 me-2 line-height-1">6</span>
                                        <h4 class="text-color-dark d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">No testeo</small>en animales</h4>
                                    </div>
                                    <p class="text-color-primary pe-5 custom-text-color-1">Nuestros productos o ingredientes no son testeados de ninguna forma en animales.</p>
                                </div>
                            </div> <br>
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
                                        <a href="https://api.whatsapp.com/send?phone=5620949468&text=Hola.%20Quisiera%20empezar%20con%20mi%20marca%20de%20cremas" target="_blanck"></a>
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
                                        <a href="https://api.whatsapp.com/send?phone=5620949468&text=Hola.%20Quiero%20empezar%20con%20mi%20propia%20marca%20de%20t%C3%B3nicos" target="_blanck"></a>
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
                                        <a href="https://api.whatsapp.com/send?phone=5620949468" target="_blanck"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Paleta</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item new">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center portfolio-item-new">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/categoria/venta1.jpg">
                                        <a href="https://api.whatsapp.com/send?phone=5620949468" target="_blanck"></a>
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
                                        <a href="https://api.whatsapp.com/send?phone=5620949468" target="_blanck"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">SkinCare</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item blog">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/categoria/cabello1.jpg">
                                        <a href="https://api.whatsapp.com/send?phone=5620949468" target="_blanck"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Shampoo</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item classic">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/categoria/crema2.jpg">
                                        <a href="https://api.whatsapp.com/send?phone=5620949468&text=Hola.%20Quisiera%20empezar%20con%20mi%20marca%20de%20cremas"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Crema 2</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item classic new">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center portfolio-item-updated">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/categoria/venta2.jpg">
                                        <a href="https://api.whatsapp.com/send?phone=5620949468" target="_blanck"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Kit 2</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item shop">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/categoria/labios1.jpg">
                                        <a href="https://api.whatsapp.com/send?phone=5620949468" target="_blanck"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Labios</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio creative">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">

                                <div class="owl-carousel nav-dark show-nav-hover" data-plugin-options="{'items': 1, 'loop': true, 'nav': true, 'dots': false, 'autoplay': true, 'autoplayTimeout': 3000, 'autoplayHoverPause': true}">
                                    <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                        <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/categoria/crema1.jpg">
                                            <a href="https://api.whatsapp.com/send?phone=5620949468" target="_blanck"></a>
                                        </span>
                                    </span>

                                    <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                        <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/categoria/crema2.jpg">
                                            <a href="https://api.whatsapp.com/send?phone=5620949468" target="_blanck"></a>
                                        </span>
                                    </span>

                                    <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                        <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/categoria/venta2.jpg">
                                            <a href="https://api.whatsapp.com/send?phone=5620949468" target="_blanck"></a>
                                        </span>
                                    </span>

                                    <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                        <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="iimg/categoria/skincare1.jpg">
                                            <a href="https://api.whatsapp.com/send?phone=5620949468" target="_blanck"></a>
                                        </span>
                                    </span>

                                    <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                        <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/categoria/cabello1.jpg">
                                            <a href="https://api.whatsapp.com/send?phone=5620949468" target="_blanck"></a>
                                        </span>
                                    </span>

                                </div>

                                <h5 class="text-color-dark text-capitalize mt-3">Varios</h5>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <section class="section section-angled section-angled-reverse border-0 m-0 bg-dark section-dark" style="background-size: 100%; background-position: top;" data-bg-src="img/landing/header_builder_bg.jpg">
        <div class="section-angled-layer-top section-angled-layer-increase-angle bg-light" style="padding: 4rem 0;"></div>
        <div class="container py-5 mt-5">
            <div class="row align-items-center mt-4 pt-2">
                <div class="col-lg-6 pe-lg-5 position-relative text-center mb-5 mb-lg-0">
                    <img alt="Crear mi propia marca personalizada" title="Crear mi propia marca personalizada" src="img/lazy.png" data-src="img/landing/Mockupx.jpg" class="img-fluid lazyload appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300" />
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

    <section class="section section-angled bg-light border-0 m-0 position-relative pt-0">
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
                    <div class="d-flex align-items-center border border-top-0 border-end-0 border-start-0 pb-4 mb-4">
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
                        <img class="img-fluid lazyload" src="img/lazy.png" title="Adorno de imagenes" alt="Adorno de imagenes" data-src="img/landing/porto_dots2.png" alt="" style="position: absolute; bottom: -2%; left: -43%; transform: rotate(90deg)">
                    </div>
                    <img alt="Fabricacion de productos cosmeticos" title="Fabricacion de productos cosmeticos" src="img/lazy.png" data-src="img/landing/servicio2.jpg" class="img-fluid border border-width-10 border-color-light rounded box-shadow-3 lazyload ms-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200" style="width: 590px; max-width: none;">
                    <img alt="Muestra de envase de producto cosmetico en imaq industrial maquiladora" title="Muestra de producto cosmetico" src="img/lazy.png" data-src="img/landing/servicio1.jpg" class="img-fluid lazyload rounded box-shadow-3 position-absolute appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="700" style="left: -100px; bottom: 50px;">
                </div>
            </div>
        </div>
        {{-- <div class="section-angled-layer-bottom section-angled-layer-increase-angle" style="padding: 4rem 0; background: #222529;"></div> --}}
    </section>


        <div class="container col-lg-12">

            <div class="row mb-12">
                {{-- <div class="col-lg-7">

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
                                @error('name')
                                    <small class="text-danger">{{  $message  }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="text-color-dark form-label mb-1 text-2">Correo electrónico:</label>
                                <input type="email" value="{{ old('email') }}" data-msg-required="Por favor escriba su correo electrónico" data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2 " name="email" required="">
                                @error('email')
                                    <small class="text-danger">{{  $message  }}</small>
                                @enderror
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
                </div> --}}
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


    <section id="support" class="section section-angled bg-light border-0 m-0 position-relative pt-0">
        <div class="container pb-5 mb-5">
            <div class="row align-items-center mb-5">
                <div id="mapa" style="height: 400px;" >
                </div>
            </div>
        </div>
        {{-- <div class="section-angled-layer-bottom section-angled-layer-increase-angle" style="padding: 4rem 0; background: #222529;"></div> --}}
    </section>


    <section class="section bg-color-dark-scale-2 border-0 m-0 py-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="list list-unstyled list-inline d-flex align-items-center justify-content-center flex-column flex-lg-row mb-0">
                        <li class="text-color-white list-inline-item Xcustom-text-color-1 Xcolor-inherit mb-lg-0 text-2 pe-2">Tu propia marca:</li>
                        <li class="list-inline-item mb-lg-0"><a href="{{ route('mimarca.index') }}" title="Mi propia marca de cosméticos" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0">MAQUILLAJES</a></li>
                        <li class="list-inline-item mb-lg-0"><a href="{{ route('mimarca.index') }}" title="Mi propia marca de cosméticos" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0">LABIALES</a></li>
                        <li class="list-inline-item mb-lg-0"><a href="{{ route('mimarca.index') }}" title="Mi propia marca de cosméticos" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0">SKICARE</a></li>
                        <li class="list-inline-item mb-lg-0"><a href="{{ route('mimarca.index') }}" title="Mi propia marca de cosméticos" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0">DELINEADORES</a></li>
                        <li class="list-inline-item mb-lg-0"><a href="{{ route('mimarca.index') }}" title="Mi propia marca de cosméticos" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0">SOMBRAS</a></li>
                        <li class="list-inline-item mb-lg-0"><a href="{{ route('mimarca.index') }}" title="Mi propia marca de cosméticos" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0">PIGMENTOS</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
