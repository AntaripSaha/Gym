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
                            <h2 class="title text-white">Course Gird</h2>
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

        <!-- Section: Course gird -->
        <section>
            <div class="container pb-20">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="mt-0">Latest <span class="text-theme-colored">Courses</span></h2>
                            <div class="title-icon">
                                <img class="mb-10" src="{{asset('frontend/images/title-icon.png')}}" alt="">
                            </div>
                            <p>Full-body workout routines hit every major muscle group this list of full-body exercises can help you maximize your training <br> time and reach your fitness goals faster.</p>
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
                                <p>Indoor Cycling is an intense workout with which you can burn a lot of calories if you do it right.</p>
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
                                <p>Gaining strength allows you to perform daily tasks much easier, such as carrying heavy groceries.
                                </p>
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
                                <p>Yoga is as good as basic stretching for easing pain and improving mobility in people with lower back pain.</p>
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
                                <p>Aerobic exercise gets your heart pumping and helps lower the risk of high blood pressure
                                </p>
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
                                <p>Aqua fitness covers a range of exercises you can do in the pool aqua aerobics, aqua jogging
                                </p>
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
                                <p>Gaining strength allows you to perform daily tasks much easier, such as carrying heavy groceries.
                                </p>
                                <a href="#" class="btn btn-dark btn-theme-colored">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
