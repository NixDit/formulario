@extends('index2')
@section('title','Blog - IMAQ | Industrial Maquiladora OSC')
@section('content')


<div role="main" class="main">

    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-dark font-weight-bold text-8">Blog - IMAQ Industrial Maquiladora</h1>
                    {{-- <span class="sub-title text-dark">Check out our Latest News!</span> --}}
                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">

        <div class="row">
            <div class="col">
                <div class="blog-posts">

                    <div class="row">

                        <div class="col-md-4">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="{{ route('blogone') }}">
                                        <img src="{{ asset('img/blog/inicio/imaq-industrial-maquiladora-industria-cosmetica.jpg') }}" class="img-fluid border border-width-10 border-color-light rounded box-shadow-3 lazyload xms-5 appear-animation" data-appear-animation="fadeInUp" alt="Imaq Industrial Maquiladora" title="Imaq Industrial Maquiladora Industria Cosmetica">
                                    </a>
                                </div>
                                <div class="post-content appear-animation animated fadeInUpShorter appear-animation-visible" style="animation-delay: 650ms;">
                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a style="text-decoration:none" href="{{ route('blogone') }}">Industria Cosmética en México - IMAQ Industrial Maquiladora</a></h2>
                                    <p class="text-color-dark">La industria cosmética en México también está en constante evolución en cuanto a las tendencias y demandas del mercado. </p>

                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> Por <a href="javascript:;">IMAQ</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="javascript:;">Nuevo</a></span>
                                        <span class="d-block mt-2"><a href="{{ route('blogone') }}" class="btn btn-xs btn-dark text-1 text-uppercase">Leer más</a></span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="{{ route('blogone') }}">
                                        <img src="{{ asset('img/blog/inicio/imaq-industrial-maquiladora-industria-cosmetica.jpg') }}" class="img-fluid border border-width-10 border-color-light rounded box-shadow-3 lazyload xms-5 appear-animation" data-appear-animation="fadeInUp" alt="Imaq Industrial Maquiladora" title="Imaq Industrial Maquiladora Industria Cosmetica">
                                    </a>
                                </div>
                                <div class="post-content appear-animation animated fadeInUpShorter appear-animation-visible" style="animation-delay: 650ms;">
                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a style="text-decoration:none" href="{{ route('blogone') }}">Industria Cosmética en México - IMAQ Industrial Maquiladora</a></h2>
                                    <p class="text-color-dark">La industria cosmética en México también está en constante evolución en cuanto a las tendencias y demandas del mercado. </p>

                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> Por <a href="javascript:;">IMAQ</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="javascript:;">Nuevo</a></span>
                                        <span class="d-block mt-2"><a href="{{ route('blogone') }}" class="btn btn-xs btn-dark text-1 text-uppercase">Leer más</a></span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="{{ route('blogone') }}">
                                        <img src="{{ asset('img/blog/inicio/imaq-industrial-maquiladora-industria-cosmetica.jpg') }}" class="img-fluid border border-width-10 border-color-light rounded box-shadow-3 lazyload xms-5 appear-animation" data-appear-animation="fadeInUp" alt="Imaq Industrial Maquiladora" title="Imaq Industrial Maquiladora Industria Cosmetica">
                                    </a>
                                </div>
                                <div class="post-content appear-animation animated fadeInUpShorter appear-animation-visible" style="animation-delay: 650ms;">
                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a style="text-decoration:none" href="{{ route('blogone') }}">Industria Cosmética en México - IMAQ Industrial Maquiladora</a></h2>
                                    <p class="text-color-dark">La industria cosmética en México también está en constante evolución en cuanto a las tendencias y demandas del mercado. </p>

                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> Por <a href="javascript:;">IMAQ</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="javascript:;">Nuevo</a></span>
                                        <span class="d-block mt-2"><a href="{{ route('blogone') }}" class="btn btn-xs btn-dark text-1 text-uppercase">Leer más</a></span>
                                    </div>
                                </div>
                            </article>
                        </div>



                        

                        {{-- <div class="col-md-4">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="blog-post.html">
                                        <img src="img/blog/medium/blog-4.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                    </a>
                                </div>

                                <div class="post-content">

                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">Developer Life</a></h2>
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> By <a href="#">Jessica Doe</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                        <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                        <span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>

                                </div>
                            </article>
                        </div> --}}

                        {{-- <div class="col-md-4">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="blog-post.html">
                                        <img src="img/blog/medium/blog-5.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                    </a>
                                </div>

                                <div class="post-content">

                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">The Blue Sky</a></h2>
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> By <a href="#">Robert Doe</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                        <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                        <span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>

                                </div>
                            </article>
                        </div> --}}

                        {{-- <div class="col-md-4">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="blog-post.html">
                                        <img src="img/blog/medium/blog-6.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                    </a>
                                </div>

                                <div class="post-content">

                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">Night Life</a></h2>
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> By <a href="#">Robert Doe</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                        <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                        <span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>

                                </div>
                            </article>
                        </div> --}}

                        {{-- <div class="col-md-4">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="blog-post.html">
                                        <img src="img/blog/medium/blog-7.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                    </a>
                                </div>

                                <div class="post-content">

                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">Another World Perspective</a></h2>
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                        <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                        <span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>

                                </div>
                            </article>
                        </div> --}}

                        {{-- <div class="col-md-4">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="blog-post.html">
                                        <img src="img/blog/medium/blog-8.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                    </a>
                                </div>

                                <div class="post-content">

                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">The Creative Team</a></h2>
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> By <a href="#">Robert Doe</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                        <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                        <span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>

                                </div>
                            </article>
                        </div> --}}

                        {{-- <div class="col-md-4">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="blog-post.html">
                                        <img src="img/blog/medium/blog-9.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                    </a>
                                </div>

                                <div class="post-content">

                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">Alone on the Forest</a></h2>
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                        <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                        <span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>

                                </div>
                            </article>
                        </div> --}}

                    </div>

                    {{-- <div class="row">
                        <div class="col">
                            <ul class="pagination float-end">
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div> --}}

                </div>
            </div>

        </div>

    </div>

</div>
@endsection
