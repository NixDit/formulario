@extends('index2')
@section('title','Impresión - IMAQ | Industrial Maquiladora OSC')
@section('content')
<div role="main" class="main">
    <div class="container my-5 pt-md-4 pt-xl-0">
        <div class="row align-items-center justify-content-center pb-4 mb-5">
            <div class="col-lg-6 pb-sm-4 pb-lg-0 mb-5 mb-lg-0">
                <div class="overflow-hidden">
                    <h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="300" style="animation-delay: 300ms;">Laboratorio de desarrollo</h2>
                </div>
                <div class="custom-divider divider divider-primary divider-small my-3">
                    <hr class="my-0 appear-animation animated customLineProgressAnim appear-animation-visible" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="700" style="animation-delay: 700ms;">
                </div>
                <p class="text-color-dark text-3-5 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450" style="animation-delay: 450ms;">Contamos con personas especializadas, con alto conocimiento en el ramo de la industria cosmética haciendo desarrollos para poder cumplir las características que nuestros clientes necesitan.</p>
                <p class="text-color-dark text-3-5 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" style="animation-delay: 700ms;">Tenemos una amplia gama de formulaciones en productos de belleza, ya sean maquillajes, shampoos, labiales, geles o serums para el cuidado de la piel facial y corporal, asi como productos para el cabello.</p>
                <p class="text-color-dark text-3-5 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" style="animation-delay: 900ms;">Si buscas algo especial, nosotros lo desarrollamos, para que logres tener productos con tu propia marca. Constantemente estamos actualizando nuestras formulaciones con las ultimas tendencias del mercado.</p>
                <div class="d-flex align-items-start align-items-sm-center flex-column flex-sm-row">
                    <a href="tel:5571592358" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 px-5 btn-py-3 me-sm-2 mb-3 mb-sm-0 appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="950" style="animation-delay: 950ms;">CONTACTAR</a>
                    <div class="feature-box align-items-center border border-top-0 border-end-0 border-bottom-0 custom-remove-mobile-xs-border-left ms-sm-4 ps-sm-4 appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1200" style="animation-delay: 1200ms;">
                        <div class="feature-box-icon bg-transparent">
                            <i class="icons icon-phone text-6 text-color-dark"></i>
                        </div>
                        <div class="feature-box-info line-height-2 ps-1">
                            <span class="d-block text-1 font-weight-semibold text-color-default">MARCAR AHORA</span>
                            <strong class="text-4-5"><a href="tel:5571592358" class="text-color-dark text-color-hover-primary text-decoration-none">55 7159 2358</a></strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10 col-md-9 col-lg-6 ps-lg-5 pe-5 appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1450" data-plugin-options="{'accY': -200}" style="animation-delay: 1450ms;">
                <div class="position-relative">
                    <div data-plugin-float-element="" data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}" style="top: 0px; transition: transform 1000ms ease-out 0ms; transform: translate3d(0px, 9.07284%, 0px);">
                        <img src="img/landing/services/desarrollo.jpg" class="img-fluid" alt="">
                    </div>
                    {{-- <div class="position-absolute transform3dxy-n50" style="top: 25%; left: 7%;">
                        <div data-plugin-float-element="" data-plugin-options="{'startPos': 'top', 'speed': 0.5, 'transition': true, 'transitionDuration': 2000, 'isInsideSVG': false}" style="top: 0px; transition: transform 2000ms ease-out 0ms; transform: translate3d(0px, 199.509%, 0px);">
                            <img src="img/demos/auto-services/generic-1-2.png" class="appear-animation animated fadeInUpShorterPlus appear-animation-visible" alt="" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1700" style="animation-delay: 1700ms;">
                        </div>
                    </div>
                    <div class="position-absolute transform3dxy-n50 ms-5 pb-5 ms-xl-0" style="top: 32%; left: 85%;">
                        <div data-plugin-float-element="" data-plugin-options="{'startPos': 'top', 'speed': 1, 'transition': true, 'transitionDuration': 1500, 'isInsideSVG': false}" style="top: 0px; transition: transform 1500ms ease-out 0ms; transform: translate3d(0px, 98.4755%, 0px);">
                            <img src="img/demos/auto-services/generic-1-2.png" class="appear-animation animated fadeInRightShorterPlus appear-animation-visible" alt="" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1900" style="animation-delay: 1900ms;">
                        </div>
                    </div>
                    <div class="position-absolute transform3dxy-n50" style="top: 90%; left: 19%;">
                        <div data-plugin-float-element="" data-plugin-options="{'startPos': 'top', 'speed': 2, 'transition': true, 'transitionDuration': 2500, 'isInsideSVG': false}" style="top: 0px; transition: transform 2500ms ease-out 0ms; transform: translate3d(0px, 49.7939%, 0px);">
                            <img src="img/demos/auto-services/generic-1-3.png" class="appear-animation animated fadeInDownShorterPlus appear-animation-visible" alt="" data-appear-animation="fadeInDownShorterPlus" data-appear-animation-delay="2100" style="animation-delay: 2100ms;">
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="row pb-2">
            <div class="col-lg-4 text-center px-lg-5 mb-5 mb-lg-0">
                <a href="" class="text-decoration-none">
                    <div class="custom-icon-box-style-1 appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="250" data-plugin-options="{'accY': -200}" style="animation-delay: 250ms;">
                        <div class="custom-icon-style-1 mb-4">
                            <div class="animated-icon animated fadeIn svg-fill-color-primary"><!--?xml version="1.0" encoding="utf-8"?-->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                        <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                        <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                        <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                                    </svg>
                            </div>
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-color-dark line-height-3 text-4-5 px-3 px-xl-5 my-2">Rentabilidad</h3>
                        <p>Trabajo en equipo, procesos controlados y mano de obra de primera calidad</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 text-center px-lg-5 mb-5 mb-lg-0">
                <a href="" class="text-decoration-none">
                    <div class="custom-icon-box-style-1 appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="500" data-plugin-options="{'accY': -200}" style="animation-delay: 500ms;">
                        <div class="custom-icon-style-1 mb-4">
                            <div class="animated-icon animated fadeIn svg-fill-color-primary"><!--?xml version="1.0" encoding="utf-8"?-->
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" style="enable-background:new 0 0 469.3 469.3;"  width="50" height="50" fill="currentColor" class="bi bi-stopwatch" viewBox="0 0 16 16">
                                        <path d="M8.5 5.6a.5.5 0 1 0-1 0v2.9h-3a.5.5 0 0 0 0 1H8a.5.5 0 0 0 .5-.5V5.6z"/>
                                        <path d="M6.5 1A.5.5 0 0 1 7 .5h2a.5.5 0 0 1 0 1v.57c1.36.196 2.594.78 3.584 1.64a.715.715 0 0 1 .012-.013l.354-.354-.354-.353a.5.5 0 0 1 .707-.708l1.414 1.415a.5.5 0 1 1-.707.707l-.353-.354-.354.354a.512.512 0 0 1-.013.012A7 7 0 1 1 7 2.071V1.5a.5.5 0 0 1-.5-.5zM8 3a6 6 0 1 0 .001 12A6 6 0 0 0 8 3z"/>
                                    </svg>
                            </div>
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-color-dark line-height-3 text-4-5 px-xl-5 my-2 mx-4">Calidad</h3>
                        <p>Nuestra mayor prioridad es mantener servicios de óptima satisfacción en cualquiera que sea el rubro</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 text-center px-lg-5">
                <a href="" class="text-decoration-none">
                    <div class="custom-icon-box-style-1 appear-animation animated fadeInRightShorterPlus appear-animation-visible" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="750" data-plugin-options="{'accY': -200}" style="animation-delay: 750ms;">
                        <div class="custom-icon-style-1 mb-4">
                            <div class="animated-icon animated fadeIn svg-fill-color-primary"><!--?xml version="1.0" encoding="utf-8"?-->
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bookmark-star" style="enable-background:new 0 0 436 436;" viewBox="0 0 16 16">
                                    <path d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.178.178 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.178.178 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.178.178 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.178.178 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.178.178 0 0 0 .134-.098L7.84 4.1z"/>
                                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-color-dark line-height-3 text-4-5 px-4 px-xl-5 my-2">Tiempos</h3>
                        <p>Estimamos tiempo de entrega</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
