@extends('layouts.master')
@section('content')
    @include('layouts.navbar.nav')

    <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-7" data-bg-img="{{asset('frontend/images/bg/bg8.jpg')}}">
        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title text-white">About</h2>
                        <ol class="breadcrumb text-center mt-10">
                            <li><a class="text-white" href="#">Home</a></li>
                            <li><a class="text-white" href="#">Pages</a></li>
                            <li class="active text-gray">Page Title</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: About -->
    <section>
        <div class="container">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h2 class="text-uppercase line-bottom-double-line-centered mt-0">Welcome to <span class="text-theme-colored">Yoga</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati! <br>ipsum dolor sit Rem autem voluptatem obcaecati</p>
                    </div>
                </div>
            </div>
            <div class="section-content text-center">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-sm-40 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <img class="img-circle img-thumbnail mb-15" src="{{asset('frontend/images/about/sq1.jpg')}}" alt="">
                        <h3 class="mb-5">Power Vinyasa</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero omnis unde nesciunt?</p>
                        <a href="#" class="btn btn-theme-colored">Read more</a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-sm-40 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                        <img class="img-circle img-thumbnail mb-15" src="{{asset('frontend/images/about/sq2.jpg')}}" alt="">
                        <h3 class="mb-5">Community Class</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero omnis unde nesciunt?</p>
                        <a href="#" class="btn btn-theme-colored">Read more</a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-sm-40 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img class="img-circle img-thumbnail mb-15" src="{{asset('frontend/images/about/sq3.jpg')}}" alt="">
                        <h3 class="mb-5">Foundation Yoga</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero omnis unde nesciunt?</p>
                        <a href="#" class="btn btn-theme-colored">Read more</a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-sm-0 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.6s">
                        <img class="img-circle img-thumbnail mb-15" src="{{asset('frontend/images/about/sq4.jpg')}}" alt="">
                        <h3 class="mb-5">Prenatal Yoga</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero omnis unde nesciunt?</p>
                        <a href="#" class="btn btn-theme-colored">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start funfact Section-->
    <section class="divider parallax layer-overlay overlay-theme-colored2-9" data-bg-img="{{asset('frontend/images/bg/bg13.jpg')}}">
        <div class="container pt-90 pb-90">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="mt-0 text-white">Some Funfacts</h2>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="flaticon-yoga-symbol-om text-white"></i>
                            <h2 data-animation-duration="2000" data-value="35" class="animate-number text-white font-38">0</h2>
                            <h5 class="text-white text-uppercase mb-0">Prosessional Trainers</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="flaticon-yoga-symbol-lotus text-white"></i>
                            <h2 data-animation-duration="2000" data-value="1250" class="animate-number text-white font-38">0</h2>
                            <h5 class="text-white text-uppercase mb-0">Happy Clients</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="flaticon-yoga-symbol-chakra text-white"></i>
                            <h2 data-animation-duration="2000" data-value="27" class="animate-number text-white font-38">0</h2>
                            <h5 class="text-white text-uppercase mb-0">Years of experience</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
                        <div class="funfact text-center">
                            <i class="flaticon-yoga-symbol-yoga-1 text-white"></i>
                            <h2 data-animation-duration="2000" data-value="104" class="animate-number text-white font-38">0</h2>
                            <h5 class="text-white text-uppercase mb-0">Monthly classes</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Courses -->
    <section>
            <div class="container pb-20">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="mt-0">Latest <span class="text-theme-colored">Courses</span></h2>
                            <div class="title-icon">
                                <img class="mb-10" src="{{asset('frontend/images/title-icon.png')}}" alt="">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
                            <div class="box-hover-effect thumb-cross-effect">
                                <div class="effect-wrapper">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{asset('frontend/images/courses/1.jpg')}}" alt="project">
                                    </div>
                                    {{--                                <div class="text-holder text-holder-top-left">--}}
                                    {{--                                    <div class="title text-theme-colored2 font-22">--}}
                                    {{--                                        $25--}}
                                    {{--                                    </div>--}}
                                    {{--                                </div>--}}
                                    <div class="text-holder text-holder-top-right">
                                        <div class="title text-theme-colored font-22">
                                            <i class="fa fa-clock-o mr-5"></i> 9:00 AM - 5:00 PM
                                        </div>
                                    </div>
                                    <a class="hover-link" data-lightbox-gallery="gallery1-link" href="#">View more</a>
                                </div>
                                <h3><a href="#">Astanga Yoga</a></h3>
                                <ul class="list-inline mb-10">
                                    <li>25 Days</li>
                                    <li>|</li>
                                    <li>20 Classes</li>
                                    <li>|</li>
                                    <li>June 26, 2016</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit voluptatem obcaecati</p>
                                <ul class="mb-5 font-16">
                                    <li></li>
                                </ul>
                                <a href="#" class="btn btn-dark btn-theme-colored">Register Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
                            <div class="box-hover-effect thumb-cross-effect">
                                <div class="effect-wrapper">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{asset('frontend/images/courses/2.jpg')}}" alt="project">
                                    </div>
                                    {{--                                <div class="text-holder text-holder-top-left">--}}
                                    {{--                                    <div class="title text-theme-colored2 font-22">--}}
                                    {{--                                        $28--}}
                                    {{--                                    </div>--}}
                                    {{--                                </div>--}}
                                    <div class="text-holder text-holder-top-right">
                                        <div class="title text-theme-colored font-22">
                                            <i class="fa fa-clock-o mr-5"></i> 9:00 AM - 5:00 PM
                                        </div>
                                    </div>
                                    <a class="hover-link" data-lightbox-gallery="gallery1-link" href="#">View more</a>
                                </div>
                                <h3><a href="#">YogaFit For Pregnant</a></h3>
                                <ul class="list-inline mb-10">
                                    <li>25 Days</li>
                                    <li>|</li>
                                    <li>20 Classes</li>
                                    <li>|</li>
                                    <li>June 26, 2016</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit voluptatem obcaecati</p>
                                <a href="#" class="btn btn-dark btn-theme-colored">Register Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
                            <div class="box-hover-effect thumb-cross-effect">
                                <div class="effect-wrapper">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{asset('frontend/images/courses/3.jpg')}}" alt="project">
                                    </div>
                                    {{--                                <div class="text-holder text-holder-top-left">--}}
                                    {{--                                    <div class="title text-theme-colored2 font-22">--}}
                                    {{--                                        <i class="fa fa-dolar-o mr-10">$35</i>--}}
                                    {{--                                    </div>--}}
                                    {{--                                </div>--}}
                                    <div class="text-holder text-holder-top-right">
                                        <div class="title text-theme-colored font-22">
                                            <i class="fa fa-clock-o mr-5"></i> 9:00 AM - 5:00 PM
                                        </div>
                                    </div>
                                    <a class="hover-link" data-lightbox-gallery="gallery1-link" href="#">View more</a>
                                </div>
                                <h3><a href="#">Hatha Yoga</a></h3>
                                <ul class="list-inline mb-10">
                                    <li>25 Days</li>
                                    <li>|</li>
                                    <li>20 Classes</li>
                                    <li>|</li>
                                    <li>June 26, 2016</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit voluptatem obcaecati</p>
                                <a href="#" class="btn btn-dark btn-theme-colored">Register Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
                            <div class="box-hover-effect thumb-cross-effect">
                                <div class="effect-wrapper">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{asset('frontend/images/courses/5.jpg')}}" alt="project">
                                    </div>
                                    {{--                                <div class="text-holder text-holder-top-left">--}}
                                    {{--                                    <div class="title text-theme-colored2 font-22">--}}
                                    {{--                                        <i class="fa fa-dolar-o mr-10">$45</i>--}}
                                    {{--                                    </div>--}}
                                    {{--                                </div>--}}
                                    <div class="text-holder text-holder-top-right">
                                        <div class="title text-theme-colored font-22">
                                            <i class="fa fa-clock-o mr-5"></i> 9:00 AM - 5:00 PM
                                        </div>
                                    </div>
                                    <a class="hover-link" data-lightbox-gallery="gallery1-link" href="#">View more</a>
                                </div>
                                <h3><a href="#">Kundalini Yoga</a></h3>
                                <ul class="list-inline mb-10">
                                    <li>25 Days</li>
                                    <li>|</li>
                                    <li>20 Classes</li>
                                    <li>|</li>
                                    <li>June 26, 2016</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit voluptatem obcaecati</p>
                                <a href="#" class="btn btn-dark btn-theme-colored">Register Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
                            <div class="box-hover-effect thumb-cross-effect">
                                <div class="effect-wrapper">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{asset('frontend/images/courses/6.jpg')}}" alt="project">
                                    </div>
                                    {{--                                <div class="text-holder text-holder-top-left">--}}
                                    {{--                                    <div class="title text-theme-colored2 font-22">--}}
                                    {{--                                        <i class="fa fa-dolar-o mr-10">$55</i>--}}
                                    {{--                                    </div>--}}
                                    {{--                                </div>--}}
                                    <div class="text-holder text-holder-top-right">
                                        <div class="title text-theme-colored font-22">
                                            <i class="fa fa-clock-o mr-5"></i> 9:00 AM - 5:00 PM
                                        </div>
                                    </div>
                                    <a class="hover-link" data-lightbox-gallery="gallery1-link" href="#">View more</a>
                                </div>
                                <h3><a href="#">Gentle Yoga</a></h3>
                                <ul class="list-inline mb-10">
                                    <li>25 Days</li>
                                    <li>|</li>
                                    <li>20 Classes</li>
                                    <li>|</li>
                                    <li>June 26, 2016</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit voluptatem obcaecati</p>
                                <a href="#" class="btn btn-dark btn-theme-colored">Register Now</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
                            <div class="box-hover-effect thumb-cross-effect">
                                <div class="effect-wrapper">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{asset('frontend/images/courses/4.jpg')}}" alt="project">
                                    </div>
                                    {{--                                <div class="text-holder text-holder-top-left">--}}
                                    {{--                                    <div class="title text-theme-colored2 font-22">--}}
                                    {{--                                        <i class="fa fa-dolar-o mr-10">$65</i>--}}
                                    {{--                                    </div>--}}
                                    {{--                                </div>--}}
                                    <div class="text-holder text-holder-top-right">
                                        <div class="title text-theme-colored font-22">
                                            <i class="fa fa-clock-o mr-5"></i> 9:00 AM - 5:00 PM
                                        </div>
                                    </div>
                                    <a class="hover-link" data-lightbox-gallery="gallery1-link" href="#">View more</a>
                                </div>
                                <h3><a href="#">Iyengar Yoga</a></h3>
                                <ul class="list-inline mb-10">
                                    <li>25 Days</li>
                                    <li>|</li>
                                    <li>20 Classes</li>
                                    <li>|</li>
                                    <li>June 26, 2016</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit voluptatem obcaecati</p>
                                <a href="#" class="btn btn-dark btn-theme-colored">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>

@endsection
