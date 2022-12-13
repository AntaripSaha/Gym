@extends('layouts.master')
@section('content')
    @include('layouts.navbar.home_nav')
    <div class="main-content">
        <!-- Section: home -->
        <section id="home" class="divider">
            <div class="container-fluid p-0">

                <!-- START REVOLUTION SLIDER 5.0.7 -->
                <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                     data-alias="news-gallery34"
                     style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                    <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
                    <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;"
                         data-version="5.0.7">
                        <ul>
                            <!-- SLIDE 1 -->
                            <li data-index="rs-1" data-transition="slingoverlayhorizontal" data-slotamount="default"
                                data-easein="deult" data-easeout="default" data-masterspeed="default"
                                data-umb="{{asset('frontend/images/gym/bg/bg1.jpg')}}" data-rotate="0"
                                data-fstransiti="fade" data-fsmasterspeed="1500" data-fsslotamount="7"
                                data-saveperformance="off" data-title="Make an Impact">
                                <!-- MAIN IMAGE -->

                                <video autoplay muted width="100%" height="auto" class="desktop">
                                    <source src="{{asset('frontend/images/gym/bg/tam.mp4')}}" type="video/mp4">
                                </video>
                                <video autoplay muted width="100%" height="auto" class="mobile">
                                    <source src="{{asset('frontend/images/gym/bg/tam-mobile.mp4')}}" type="video/mp4">
                                </video>
                                <!-- <img src="images/gym/bg/bg1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina> -->
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->

                            </li>

                            <!-- SLIDE 2 -->
                            <!--              <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/gym/bg/bg2.jpg" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">-->
                            <!--                &lt;!&ndash; MAIN IMAGE &ndash;&gt;-->
                            <!--                <img src="images/gym/bg/bg2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>-->
                            <!--                &lt;!&ndash; LAYERS &ndash;&gt;-->
                            <!--                &lt;!&ndash; LAYER NR. 1 &ndash;&gt;-->
                            <!--                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"-->
                            <!--                  id="slide-2-layer-1"-->
                            <!--                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"-->
                            <!--                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"-->
                            <!--                  data-width="full"-->
                            <!--                  data-height="full"-->
                            <!--                  data-whitespace="normal"-->
                            <!--                  data-transform_idle="o:1;"-->
                            <!--                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"-->
                            <!--                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"-->
                            <!--                  data-start="1000"-->
                            <!--                  data-basealign="slide"-->
                            <!--                  data-responsive_offset="on"-->
                            <!--                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 1.00);">-->
                            <!--                </div>-->
                            <!--                &lt;!&ndash; LAYER NR. 3 &ndash;&gt;-->
                            <!--                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"-->
                            <!--                  id="slide-2-layer-2"-->
                            <!--                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"-->
                            <!--                  data-y="['top','top','top','top']" data-voffset="['120','100','70','90']"-->
                            <!--                  data-fontsize="['28','24','24','24']"-->
                            <!--                  data-lineheight="['33','30','30','30']"-->
                            <!--                  data-fontweight="['600','600','600','600']"-->
                            <!--                  data-textalign="['center','center','center','center']"-->
                            <!--                  data-width="none"-->
                            <!--                  data-height="none"-->
                            <!--                  data-whitespace="nowrap"-->
                            <!--                  data-transform_idle="o:1;"-->
                            <!--                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"-->
                            <!--                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"-->
                            <!--                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"-->
                            <!--                  data-mask_out="x:0;y:0;s:inherit;e:inherit;"-->
                            <!--                  data-start="1000"-->
                            <!--                  data-splitin="none"-->
                            <!--                  data-splitout="none"-->
                            <!--                  data-responsive_offset="on"-->
                            <!--                  style="z-index: 7; white-space: nowrap;">-->
                            <!--                </div>-->
                            <!--                &lt;!&ndash; LAYER NR. 2 &ndash;&gt;-->
                            <!--                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"-->
                            <!--                  id="slide-2-layer-3"-->
                            <!--                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"-->
                            <!--                  data-y="['top','top','top','top']" data-voffset="['165','135','105','130']"-->
                            <!--                  data-fontsize="['56','46','40','36']"-->
                            <!--                  data-lineheight="['70','60','50','45']"-->
                            <!--                  data-fontweight="['800','700','700','700']"-->
                            <!--                  data-textalign="['center','center','center','center']"-->
                            <!--                  data-width="['700','650','600','420']"-->
                            <!--                  data-height="none"-->
                            <!--                  data-whitespace="normal"-->
                            <!--                  data-transform_idle="o:1;"-->
                            <!--                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"-->
                            <!--                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"-->
                            <!--                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"-->
                            <!--                  data-mask_out="x:0;y:0;s:inherit;e:inherit;"-->
                            <!--                  data-start="1000"-->
                            <!--                  data-splitin="none"-->
                            <!--                  data-splitout="none"-->
                            <!--                  data-responsive_offset="on"-->
                            <!--                  style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">Keep Your Body Fit &<br> <span class="text-theme-colored">Strong </span> To Live Longer-->
                            <!--                </div>-->
                            <!--                &lt;!&ndash; LAYER NR. 4 &ndash;&gt;-->
                            <!--                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"-->
                            <!--                  id="slide-2-layer-4"-->
                            <!--                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"-->
                            <!--                  data-y="['top','top','top','top']" data-voffset="['320','260','220','220']"-->
                            <!--                  data-fontsize="['18','18','16','13']"-->
                            <!--                  data-lineheight="['30','30','28','25']"-->
                            <!--                  data-fontweight="['600','600','600','600']"-->
                            <!--                  data-textalign="['center','center','center','center']"-->
                            <!--                  data-width="['700','650','600','420']"-->
                            <!--                  data-height="none"-->
                            <!--                  data-whitespace="nowrap"-->
                            <!--                  data-transform_idle="o:1;"-->
                            <!--                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"-->
                            <!--                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"-->
                            <!--                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"-->
                            <!--                  data-mask_out="x:0;y:0;s:inherit;e:inherit;"-->
                            <!--                  data-start="1000"-->
                            <!--                  data-splitin="none"-->
                            <!--                  data-splitout="none"-->
                            <!--                  data-responsive_offset="on"-->
                            <!--                  style="z-index: 7; white-space: nowrap;">We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.-->
                            <!--                </div>-->
                            <!--                &lt;!&ndash; LAYER NR. 5 &ndash;&gt;-->
                            <!--                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"-->
                            <!--                  id="slide-2-layer-5"-->
                            <!--                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"-->
                            <!--                  data-y="['top','top','top','top']" data-voffset="['400','340','300','300']"-->
                            <!--                  data-fontsize="['18','18','16','16']"-->
                            <!--                  data-lineheight="['30','30','30','30']"-->
                            <!--                  data-fontweight="['600','600','600','600']"-->
                            <!--                  data-width="none"-->
                            <!--                  data-height="none"-->
                            <!--                  data-whitespace="nowrap"-->
                            <!--                  data-transform_idle="o:1;"-->
                            <!--                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"-->
                            <!--                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"-->
                            <!--                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"-->
                            <!--                  data-mask_out="x:0;y:0;s:inherit;e:inherit;"-->
                            <!--                  data-start="1000"-->
                            <!--                  data-splitin="none"-->
                            <!--                  data-splitout="none"-->
                            <!--                  data-responsive_offset="on"-->
                            <!--                  style="z-index: 7; white-space: nowrap;"><a href="#" class="btn btn-dark btn-theme-colored btn-xl">Make An Appointment</a>-->
                            <!--                </div>-->
                            <!--              </li>-->

                            <!-- SLIDE 3 -->
                            <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                                data-easein="default" data-easeout="default" data-masterspeed="default"
                                data-thumb="{{asset('frontend/images/gym/bg/bg1.jpg')}}" data-rotate="0"
                                data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"
                                data-saveperformance="off" data-title="Make an Impact">
                                <!-- MAIN IMAGE -->
                                <img src="{{asset('frontend/images/gym/bg/bg1.jpg')}}" alt=""
                                     data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                     data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <!--                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"-->
                                <!--                  id="slide-3-layer-1"-->
                                <!--                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"-->
                                <!--                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"-->
                                <!--                  data-width="full"-->
                                <!--                  data-height="full"-->
                                <!--                  data-whitespace="normal"-->
                                <!--                  data-transform_idle="o:1;"-->
                                <!--                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"-->
                                <!--                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"-->
                                <!--                  data-start="1000"-->
                                <!--                  data-basealign="slide"-->
                                <!--                  data-responsive_offset="on"-->
                                <!--                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.4);border-color:rgba(0, 0, 0, 1.00);">-->
                                <!--                </div>-->
                                <!--                &lt;!&ndash; LAYER NR. 2 &ndash;&gt;-->
                                <!--                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"-->
                                <!--                  id="slide-3-layer-2"-->
                                <!--                  data-x="['center','center','center','center']" data-hoffset="['310','200','100','0']"-->
                                <!--                  data-y="['top','top','top','top']" data-voffset="['120','100','70','90']"-->
                                <!--                  data-fontsize="['56','46','40','36']"-->
                                <!--                  data-lineheight="['70','60','50','45']"-->
                                <!--                  data-fontweight="['800','700','700','700']"-->
                                <!--                  data-width="['700','650','500','420']"-->
                                <!--                  data-height="none"-->
                                <!--                  data-whitespace="normal"-->
                                <!--                  data-transform_idle="o:1;"-->
                                <!--                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"-->
                                <!--                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"-->
                                <!--                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"-->
                                <!--                  data-mask_out="x:0;y:0;s:inherit;e:inherit;"-->
                                <!--                  data-start="1000"-->
                                <!--                  data-splitin="none"-->
                                <!--                  data-splitout="none"-->
                                <!--                  data-responsive_offset="on"-->
                                <!--                  style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">Get In Shape & <span class="text-theme-colored2">Be</span> Healthy-->
                                <!--                </div>-->
                                <!--                &lt;!&ndash; LAYER NR. 3 &ndash;&gt;-->
                                <!--                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"-->
                                <!--                  id="slide-3-layer-3"-->
                                <!--                  data-x="['center','center','center','center']" data-hoffset="['310','200','100','0']"-->
                                <!--                  data-y="['top','top','top','top']" data-voffset="['280','220','180','180']"-->
                                <!--                  data-fontsize="['18','18','16','13']"-->
                                <!--                  data-lineheight="['30','30','28','25']"-->
                                <!--                  data-fontweight="['600','600','600','600']"-->
                                <!--                  data-width="['700','650','500','420']"-->
                                <!--                  data-height="none"-->
                                <!--                  data-whitespace="nowrap"-->
                                <!--                  data-transform_idle="o:1;"-->
                                <!--                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"-->
                                <!--                  data-transform_out="auto0:auto;s:1000;e:Power3.easeInOut;"-->
                                <!--                  data-mask_in="x:0px;y:0p0x;s:inherit;e:inherit;"-->
                                <!--                  data-mask_out="x:0;y:0;s0:inherit;e:inherit;"-->
                                <!--                  data-start="1000"-->
                                <!--                  data-splitin="none"-->
                                <!--                  data-splitout="none"-->
                                <!--                  data-responsive_offset="on"-->
                                <!--                  style="z-index: 7; white-space: nowrap;">We provides always our best services for our clients and  <br>always try to achieve our client's trust and satisfaction.-->
                                <!--                </div>-->
                                <!--                &lt;!&ndash; LAYER NR. 3 &ndash;&gt;-->
                                <!--                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"-->
                                <!--                  id="slide-3-layer-4"-->
                                <!--                  data-x="['center','center','center','center']" data-hoffset="['310','200','100','0']"-->
                                <!--                  data-y="['top','top','top','top']" data-voffset="['360','290','260','260']"-->
                                <!--                  data-fontsize="['18','18','16','16']"-->
                                <!--                  data-lineheight="['30','30','30','30']"-->
                                <!--                  data-fontweight="['600','600','600','600']"-->
                                <!--                  data-width="['700','650','500','420']"-->
                                <!--                  data-height="none"-->
                                <!--                  data-whitespace="nowrap"-->
                                <!--                  data-transform_idle="o:1;"-->
                                <!--                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"-->
                                <!--                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"-->
                                <!--                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"-->
                                <!--                  data-mask_out="x:0;y:0;s:inherit;e:inherit;"-->
                                <!--                  data-start="1000"-->
                                <!--                  data-splitin="none"-->
                                <!--                  data-splitout="none"-->
                                <!--                  data-responsive_offset="on"-->
                                <!--                  style="z-index: 7; white-space: nowrap;"><a href="#" class="btn btn-dark btn-theme-colored2 btn-xl">Read More</a>-->
                                <!--                </div>-->
                                <!--                &lt;!&ndash; LAYER NR. 4 &ndash;&gt;-->
                                <!--                <div class="tp-caption rs-parallaxlevel-0"-->
                                <!--                  id="slide-3-layer-5"-->
                                <!--                  data-x="['center','center','center','center']" data-hoffset="['310','33','0','0']"-->
                                <!--                  data-y="['top','top','top','top']" data-voffset="['360','290','260','260']"-->
                                <!--                  data-width="['700','650','600','420']"-->
                                <!--                  data-height="none"-->
                                <!--                  data-whitespace="nowrap"-->
                                <!--                  data-transform_idle="o:1;"-->
                                <!--                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"-->
                                <!--                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"-->
                                <!--                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"-->
                                <!--                  data-mask_in="x:0px;y:0px;"-->
                                <!--                  data-mask_out="x:0;y:0;"-->
                                <!--                  data-start="1000"-->
                                <!--                  data-splitin="none"-->
                                <!--                  data-splitout="none"-->
                                <!--                  data-responsive_offset="on"-->
                                <!--                  data-responsive="off"-->
                                <!--                  style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">-->
                                <!--                </div>-->
                            </li>
                        </ul>
                        <!-- <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(166, 216, 236, 1.00);"></div> -->
                    </div>
                </div>

                <!-- END REVOLUTION SLIDER -->
                <script type="text/javascript">
                    var tpj = jQuery;
                    var revapi34;
                    tpj(document).ready(function () {
                        if (tpj("#rev_slider_home").revolution == undefined) {
                            revslider_showDoubleJqueryError("#rev_slider_home");
                        } else {
                            revapi34 = tpj("#rev_slider_home").show().revolution({
                                sliderType: "standard",
                                jsFileLocation: "{{asset('frontend/js/revolution-slider/js/')}}",
                                sliderLayout: "fullscreen",
                                dottedOverlay: "none",
                                delay: 2100,
                                navigation: {
                                    keyboardNavigation: "on",
                                    keyboard_direction: "horizontal",
                                    mouseScrollNavigation: "off",
                                    onHoverStop: "on",
                                    touch: {
                                        touchenabled: "on",
                                        swipe_threshold: 75,
                                        swipe_min_touches: 1,
                                        swipe_direction: "horizontal",
                                        drag_block_vertical: false
                                    }
                                    ,
                                    arrows: {
                                        style: "zeus",
                                        enable: true,
                                        hide_onmobile: true,
                                        hide_under: 600,
                                        hide_onleave: true,
                                        hide_delay: 200,
                                        hide_delay_mobile: 1200,
                                        tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                        left: {
                                            h_align: "left",
                                            v_align: "center",
                                            h_offset: 30,
                                            v_offset: 0
                                        },
                                        right: {
                                            h_align: "right",
                                            v_align: "center",
                                            h_offset: 30,
                                            v_offset: 0
                                        }
                                    },
                                    bullets: {
                                        enable: true,
                                        hide_onmobile: true,
                                        hide_under: 600,
                                        style: "metis",
                                        hide_onleave: true,
                                        hide_delay: 200,
                                        hide_delay_mobile: 1200,
                                        direction: "horizontal",
                                        h_align: "center",
                                        v_align: "bottom",
                                        h_offset: 0,
                                        v_offset: 30,
                                        space: 5,
                                        tmp: '<span class="tp-bullet-img-wrap"><span class="tp-bullet-image"></span></span>'
                                    }
                                },
                                viewPort: {
                                    enable: true,
                                    outof: "pause",
                                    visible_area: "80%"
                                },
                                responsiveLevels: [1240, 1024, 778, 480],
                                gridwidth: [1240, 1024, 778, 480],
                                gridheight: [600, 550, 500, 450],
                                lazyType: "none",
                                parallax: {
                                    type: "scroll",
                                    origo: "enterpoint",
                                    speed: 400,
                                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
                                },
                                shadow: 0,
                                spinner: "off",
                                stopLoop: "off",
                                stopAfterLoops: -1,
                                stopAtSlide: -1,
                                shuffle: "off",
                                autoHeight: "off",
                                hideThumbsOnMobile: "off",
                                hideSliderAtLimit: 0,
                                hideCaptionAtLimit: 0,
                                hideAllCaptionAtLilmit: 0,
                                debugMode: false,
                                fallbacks: {
                                    simplifyAll: "off",
                                    nextSlideOnWindowFocus: "off",
                                    disableFocusListener: false,
                                }
                            });
                        }
                    }); /*ready*/
                </script>
                <!-- END REVOLUTION SLIDER -->
            </div>
        </section>

        <!-- Section: About -->
        <section>
            <div class="container">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h2 class=" line-bottom-double-line-centered mt-0">Welcome to <span
                                    class="text-theme-colored2">Fitness</span> Zone</h2>
                            <p>If you want to grow a certain muscle, you might be tempted to <br> train it every day but it's important to include rest days.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content text-center">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3 mb-sm-40 wow fadeInLeft" data-wow-duration="1s"
                             data-wow-delay="0.3s">
                            <img class="img-circle img-thumbnail mb-15"
                                 src="{{asset('frontend/images/gym/about/sq1.jpg')}}" alt="">
                            <h3 class="mb-5">Cardio Fitness</h3>
                            <p>Cardio fitness measures how well your body can perform a rhythmic, dynamic activity
                            </p>
                            <a href="#" class="btn btn-theme-colored2">Read more</a>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 mb-sm-40 wow fadeInLeft" data-wow-duration="1s"
                             data-wow-delay="0.4s">
                            <img class="img-circle img-thumbnail mb-15"
                                 src="{{asset('frontend/images/gym/about/sq2.jpg')}}" alt="">
                            <h3 class="mb-5">Aqua Fitness</h3>
                            <p>Aqua fitness covers a range of exercises you can do in the pool aqua aerobics, aqua jogging
                            </p>
                            <a href="#" class="btn btn-theme-colored2">Read more</a>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 mb-sm-40 wow fadeInLeft" data-wow-duration="1s"
                             data-wow-delay="0.5s">
                            <img class="img-circle img-thumbnail mb-15"
                                 src="{{asset('frontend/images/gym/about/sq3.jpg')}}" alt="">
                            <h3 class="mb-5">Boxing Fitness</h3>
                            <p>Aerobic exercise gets your heart pumping and helps lower the risk of high blood pressure
                            </p>
                            <a href="#" class="btn btn-theme-colored2">Read more</a>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 mb-sm-0 wow fadeInLeft" data-wow-duration="1s"
                             data-wow-delay="0.6s">
                            <img class="img-circle img-thumbnail mb-15"
                                 src="{{asset('frontend/images/gym/about/sq4.jpg')}}" alt="">
                            <h3 class="mb-5">Zumba Fitness</h3>
                            <p>Zumba targets lots of different muscle groups at once for total body toning - boosts your heart health</p>
                            <a href="#" class="btn btn-theme-colored2">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: events  -->
        <section class="divider parallax" data-bg-img="{{asset('frontend/images/bg/bg11.jpg')}}">
            <div class="container">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-3">
                            <h2 class="mt-0 text-white">Upcoming Event</h2>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-6">
                            <div class="upcoming-event p-30 mb-30 bg-theme-colored2-transparent-9">
                                <div class="event-thumb pull-right flip sm-pull-none"><img class="" alt=""
                                                                                           src="{{asset('frontend/images/gym/event/sq1.jpg')}}">
                                </div>
                                <div class="event-content text-white">
                                    <h3 class="mt-0"><a href="#" class="text-white">Strong Body
                                            Strong Mind</a></h3>
                                    <ul class="mb-5 text-white">
                                        <li><i class="fa fa-calendar-plus-o mr-10"></i>June 26, 2019</li>
                                        <li><i class="fa fa-clock-o mr-10"></i>9:00 AM - 5:00 PM</li>
                                        <li><i class="fa fa-globe mr-10"></i>New York</li>
                                    </ul>
                                    <p class="text-white">If your goal is to build bigger legs and glutes, your ideal workout split will look different build a broad back and shoulders.
                                    </p>
                                    <a class="text-white" href="#">Read More →</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="upcoming-event p-30 mb-30 bg-theme-colored-transparent-9">
                                <div class="event-thumb pull-right flip sm-pull-none"><img class="" alt=""
                                                                                           src="{{asset('frontend/images/gym/event/sq2.jpg')}}">
                                </div>
                                <div class="event-content text-white">
                                    <h3 class="mt-0 text-white"><a href="#" class="text-white">Group
                                            Classes For Everyone</a></h3>
                                    <ul class="mb-5 text-white">
                                        <li><i class="fa fa-calendar-plus-o mr-10"></i>June 26, 2019</li>
                                        <li><i class="fa fa-clock-o mr-10"></i>9:00 AM - 5:00 PM</li>
                                        <li><i class="fa fa-globe mr-10"></i>New York</li>
                                    </ul>
                                    <p class="text-white">Fitness training balances five elements of good health includes aerobic fitness, strength training, core exercises, balance training.</p>
                                    <a class="text-white" href="#">Read More →</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION: BENEFITS -->
        <section data-bg-color="#E3DAD3">
            <div class="container">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h2 class="text-uppercase line-bottom-double-line-centered mt-0"> Why <span
                                    class="text-black">Choose Us </span></h2>
                            <p>When TKMMAFIT was created, the motivation behind the essence of the brand was stronger and fit community is a happier and healthier one
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="icon-box icon-theme-colored benefit-icon tmedia text-right p-0 mb-sm-10 mt-30">
                                <a href="#"
                                   class="icon icon-circled icon-md border-1px border-theme-colored pull-right flip ml-30 pl-0">
                                    <i class="flaticon-gym-cardio-1 font-36 text-white"></i></a>
                                <div class="media-body">
                                    <h4 class="media-heading heading">Cardio Fitness</h4>
                                    <p>Getting your cardio in on the reg can improve heart health by lowering cholesterol levels and reducing your risk of heart disease.</p>
                                </div>
                            </div>
                            <div class="icon-box icon-theme-colored benefit-icon media text-right p-0 mb-sm-10 mt-30">
                                <a href="#"
                                   class="icon icon-circled icon-md border-1px border-theme-colored pull-right flip ml-30 pl-0">
                                    <i class="flaticon-gym-jump-rope font-36 text-white"></i></a>
                                <div class="media-body">
                                    <h4 class="media-heading heading">Aqua Fitness</h4>
                                    <p>It gives you a good cardiovascular workout, gently increasing your pulse and breathing rate, so it's great for helping to improve your heart health.</p>
                                </div>
                            </div>
                            <div class="icon-box icon-theme-colored benefit-icon media text-right p-0 mb-sm-10 mt-30">
                                <a href="#"
                                   class="icon icon-circled icon-md border-1px border-theme-colored pull-right flip ml-30 pl-0">
                                    <i class="flaticon-gym-dumbbell-1 font-36 text-white"></i></a>
                                <div class="media-body">
                                    <h4 class="media-heading heading">Zumba fitness</h4>
                                    <p>During a Zumba class,you'll follow choreography with footwork that works your leg muscles,arm movements that tone your arm</p>
                                </div>
                            </div>
                            <div class="icon-box icon-theme-colored benefit-icon media text-right p-0 mb-sm-10 mt-30">
                                <a href="#"
                                   class="icon icon-circled icon-md border-1px border-theme-colored pull-right flip ml-30 pl-0">
                                    <i class="flaticon-gym-jump-rope font-36 text-white"></i></a>
                                <div class="media-body">
                                    <h4 class="media-heading heading">Aerobic Fitness</h4>
                                    <p>With aerobic exercise, cells undergo cellular respiration, in which oxygen and other molecules are converted into adenosine triphosphate.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="{{asset('frontend/images/gym/benefits/1.png')}}" alt="">
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box icon-theme-colored benefit-icon left media p-0 mb-sm-10 mt-30">
                                <a href="#"
                                   class="icon icon-circled icon-md border-1px border-theme-colored pull-left flip">
                                    <i class="flaticon-gym-punching-bag font-36 text-white"></i></a>
                                <div class="media-body">
                                    <h4 class="media-heading heading">Boxing</h4>
                                    <p>High-intensity interval training has been associated with a decreased risk of heart disease - bouts of high-intensity activity
                                    </p>
                                </div>
                            </div>
                            <div class="icon-box icon-theme-colored benefit-icon left media p-0 mb-sm-10 mt-30">
                                <a href="#"
                                   class="icon icon-circled icon-md border-1px border-theme-colored pull-left flip">
                                    <i class="flaticon-gym-cardio font-36 text-white"></i></a>
                                <div class="media-body">
                                    <h4 class="media-heading heading">Indoor Cyciling</h4>
                                    <p>Indoor Cycling is an intense workout with which you can burn a lot of calories if you do it right.
                                    </p>
                                    <br>
                                </div>
                            </div>
                            <div class="icon-box icon-theme-colored benefit-icon left media p-0 mb-sm-10 mt-30">
                                <a href="#"
                                   class="icon icon-circled icon-md border-1px border-theme-colored pull-left flip">
                                    <i class="flaticon-gym-weights font-36 text-white"></i></a>
                                <div class="media-body">
                                    <h4 class="media-heading heading">Yoga Platies</h4>
                                    <p>Yoga is as good as basic stretching for easing pain and improving mobility in people with lower back pain.
                                    </p>
                                    <br>
                                </div>
                            </div>
                            <div class="icon-box icon-theme-colored benefit-icon left media p-0 mb-sm-10 mt-30">
                                <a href="#"
                                   class="icon icon-circled icon-md border-1px border-theme-colored pull-left flip">
                                    <i class="flaticon-gym-kettlebellsr font-46 text-white"></i></a>
                                <div class="media-body">
                                    <h4 class="media-heading heading">Strength Training</h4>
                                    <p>Gaining strength allows you to perform daily tasks much easier, such as carrying heavy groceries.
                                    </p>
                                </div>
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
                            <h2 class="mt-0">TKMMAFIT Popular <span class="text-theme-colored">Clases</span></h2>
                            <div class="title-icon">
                                <img class="mb-10" src="{{asset('frontend/images/title-icon.png')}}" alt="">
                            </div>
                            <p>Step up your fitness game with a membership plan that works for you sophisticated amenities help you get the most out of your workout experience</p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
                            <div class="box-hover-effect thumb-cross-effect">
                                <div class="effect-wrapper">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{asset('frontend/images/gym/services/1.jpg')}}"
                                             alt="project">
                                    </div>
                                    <!--                  <div class="text-holder text-holder-top-left">-->
                                    <!--                    <div class="title text-theme-colored2 font-22">-->
                                    <!--                      $70-->
                                    <!--                    </div>-->
                                    <!--                  </div>-->
                                    <div class="text-holder text-holder-top-right">
                                        <div class="title text-theme-colored font-22">
                                            <i class="fa fa-clock-o mr-5"></i> 9:00 AM - 5:00 PM
                                        </div>
                                    </div>
                                    <a class="hover-link" data-lightbox-gallery="gallery1-link" href="#">View more</a>
                                </div>
                                <h3><a href="page-department-details.html">Teens Class</a></h3>
                                <ul class="list-inline mb-10">
                                    <li>25 Days</li>
                                    <li>|</li>
                                    <li>20 Classes</li>
                                    <li>|</li>
                                    <li>June 26, 2016</li>
                                </ul>
                                <p>This is a complete guide for teens that includes workouts and nutritional advice to help you maximize progress.
                                </p>
                                <ul class="mb-5 font-16">
                                    <li></li>
                                </ul>
                                <a href="#" class="btn btn-dark btn-theme-colored">View Details</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
                            <div class="box-hover-effect thumb-cross-effect">
                                <div class="effect-wrapper">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{asset('frontend/images/gym/services/2.jpg')}}"
                                             alt="project">
                                    </div>
                                    <!--                  <div class="text-holder text-holder-top-left">-->
                                    <!--                    <div class="title text-theme-colored2 font-22">-->
                                    <!--                      $70-->
                                    <!--                    </div>-->
                                    <!--                  </div>-->
                                    <div class="text-holder text-holder-top-right">
                                        <div class="title text-theme-colored font-22">
                                            <i class="fa fa-clock-o mr-5"></i> 9:00 AM - 5:00 PM
                                        </div>
                                    </div>
                                    <a class="hover-link" data-lightbox-gallery="gallery1-link" href="#">View more</a>
                                </div>
                                <h3><a href="page-department-details.html">Boxing</a></h3>
                                <ul class="list-inline mb-10">
                                    <li>25 Days</li>
                                    <li>|</li>
                                    <li>20 Classes</li>
                                    <li>|</li>
                                    <li>June 26, 2016</li>
                                </ul>
                                <p>Make sure you do it properly with this beginner guide to boxing training. Your fitness goal may be boxing is a great way to get in shape.
</p>
                                <ul class="mb-5 font-16">
                                    <li></li>
                                </ul>
                                <a href="#" class="btn btn-dark btn-theme-colored">View Details</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
                            <div class="box-hover-effect thumb-cross-effect">
                                <div class="effect-wrapper">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{asset('frontend/images/gym/services/3.jpg')}}"
                                             alt="project">
                                    </div>
                                    <!--                  <div class="text-holder text-holder-top-left">-->
                                    <!--                    <div class="title text-theme-colored2 font-22">-->
                                    <!--                      $70-->
                                    <!--                    </div>-->
                                    <!--                  </div>-->
                                    <div class="text-holder text-holder-top-right">
                                        <div class="title text-theme-colored font-22">
                                            <i class="fa fa-clock-o mr-5"></i> 9:00 AM - 5:00 PM
                                        </div>
                                    </div>
                                    <a class="hover-link" data-lightbox-gallery="gallery1-link" href="#">View more</a>
                                </div>
                                <h3><a href="page-department-details.html">Muay Thai</a></h3>
                                <ul class="list-inline mb-10">
                                    <li>25 Days</li>
                                    <li>|</li>
                                    <li>20 Classes</li>
                                    <li>|</li>
                                    <li>June 26, 2016</li>
                                </ul>
                                <p>If the reason you want to learn Muay Thai is to lose weight and build a lean muscular body, it should take you around a year.</p>
                                <ul class="mb-5 font-16">
                                    <li></li>
                                </ul>
                                <a href="#" class="btn btn-dark btn-theme-colored">View Details</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
                            <div class="box-hover-effect thumb-cross-effect">
                                <div class="effect-wrapper">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{asset('frontend/images/gym/services/4.jpg')}}"
                                             alt="project">
                                    </div>
                                    <!--                  <div class="text-holder text-holder-top-left">-->
                                    <!--                    <div class="title text-theme-colored2 font-22">-->
                                    <!--                      <i class="fa fa-dolar-o mr-10">$85</i>-->
                                    <!--                    </div>-->
                                    <!--                  </div>-->
                                    <div class="text-holder text-holder-top-right">
                                        <div class="title text-theme-colored font-22">
                                            <i class="fa fa-clock-o mr-5"></i> 9:00 AM - 5:00 PM
                                        </div>
                                    </div>
                                    <a class="hover-link" data-lightbox-gallery="gallery1-link" href="#">View more</a>
                                </div>
                                <h3><a href="page-department-details.html">Kids Class</a></h3>
                                <ul class="list-inline mb-10">
                                    <li>25 Days</li>
                                    <li>|</li>
                                    <li>20 Classes</li>
                                    <li>|</li>
                                    <li>June 26, 2016</li>
                                </ul>
                                <p>Featuring music and moves for kids and teens, BORN TO MOVE™ combines fun and fitness in a way that children love.
                                </p>
                                <a href="#" class="btn btn-dark btn-theme-colored">View Details</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
                            <div class="box-hover-effect thumb-cross-effect">
                                <div class="effect-wrapper">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{asset('frontend/images/gym/services/5.jpg')}}"
                                             alt="project">
                                    </div>
                                    <!--                    <div class="text-holder text-holder-top-left">-->
                                    <!--                      <div class="title text-theme-colored2 font-22">-->
                                    <!--                        <i class="fa fa-dolar-o mr-10">$75</i>-->
                                    <!--                      </div>-->
                                    <!--                    </div>-->
                                    <div class="text-holder text-holder-top-right">
                                        <div class="title text-theme-colored font-22">
                                            <i class="fa fa-clock-o mr-5"></i> 9:00 AM - 5:00 PM
                                        </div>
                                    </div>
                                    <a class="hover-link" data-lightbox-gallery="gallery1-link" href="#">View more</a>
                                </div>
                                <h3><a href="page-department-details.html">MMA</a></h3>
                                <ul class="list-inline mb-10">
                                    <li>25 Days</li>
                                    <li>|</li>
                                    <li>20 Classes</li>
                                    <li>|</li>
                                    <li>June 26, 2016</li>
                                </ul>
                                <p>MMA is one of the best workouts when it comes to fat or weight loss. It's an intense cardiovascular activity, similar to a HIIT-style workout.
                                </p>
                                <a href="#" class="btn btn-dark btn-theme-colored">View Details</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
                            <div class="box-hover-effect thumb-cross-effect">
                                <div class="effect-wrapper">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{asset('frontend/images/gym/services/6.jpg')}}"
                                             alt="project">
                                    </div>
                                    <!--                  <div class="text-holder text-holder-top-left">-->
                                    <!--                    <div class="title text-theme-colored2 font-22">-->
                                    <!--                      <i class="fa fa-dolar-o mr-10">$85</i>-->
                                    <!--                    </div>-->
                                    <!--                  </div>-->
                                    <div class="text-holder text-holder-top-right">
                                        <div class="title text-theme-colored font-22">
                                            <i class="fa fa-clock-o mr-5"></i> 9:00 AM - 5:00 PM
                                        </div>
                                    </div>
                                    <a class="hover-link" data-lightbox-gallery="gallery1-link" href="#">View more</a>
                                </div>
                                <h3><a href="page-department-details.html">Brazilian Jiu Jitsu</a></h3>
                                <ul class="list-inline mb-10">
                                    <li>25 Days</li>
                                    <li>|</li>
                                    <li>20 Classes</li>
                                    <li>|</li>
                                    <li>June 26, 2016</li>
                                </ul>
                                <p>It's a well-publicized fact that Brazilian Jiu Jitsu takes a long time to get to your black belt. The average time it takes to achieve this is usually around 10 years.
                                </p>
                                <a href="#" class="btn btn-dark btn-theme-colored">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section:opening  -->
        <!--    <section class="divider parallax" data-bg-img="images/bg/bg15.jpg">-->
        <!--      <div class="container pt-0 pb-0">-->
        <!--        <div class="row">-->
        <!--          <div class="col-md-6 bg-theme-colored2-transparent-8">-->
        <!--            <div class="opening-hours pr-30 pl-30 pt-70 pb-70">-->
        <!--              <h3 class="text-uppercase text-white">Opening Hours</h3>-->
        <!--              <ul class="list-unstyled text-white font-15">-->
        <!--                <li class="clearfix"> <span> Monday – Friday</span>-->
        <!--                  <div class="value pull-right"> 9.00 - 20.00 </div>-->
        <!--                </li>-->
        <!--                <li class="clearfix"> <span> Saturday </span>-->
        <!--                  <div class="value pull-right"> 10.00 - 16.00 </div>-->
        <!--                </li>-->
        <!--                <li class="clearfix"> <span> Sunday </span>-->
        <!--                  <div class="value pull-right"> 9.30 - 18.00 </div>-->
        <!--                </li>-->
        <!--                <li class="clearfix"> <span>Emergency Services</span>-->
        <!--                  <div class="value pull-right">24 hours Open</div>-->
        <!--                </li>-->
        <!--              </ul>-->
        <!--              <a href="#" class="btn btn-theme-colored mt-30">Contact us</a> -->
        <!--            </div>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--    </section>-->

        <!-- Section:time table -->
        <section class="bg-light">
            <div class="container">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="mt-0">Class Time <span class="text-theme-colored">Table</span></h2>
                            <div class="title-icon">
                                <img class="mb-10" src="{{asset('frontend/images/title-icon.png')}}" alt="">
                            </div>
                            <p>Full-body workout routines hit every major muscle group this list of full-body exercises can help you maximize your training time and reach your fitness goals faster.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered bg-white text-center class-time mb-0">
                                    <thead>
                                    <tr class="bg-black text-white">
                                        <th>Monday</th>
                                        <th>Tuesday</th>
                                        <th>Wednesday</th>
                                        <th>Thursday</th>
                                        <th>Friday</th>
                                        <th>Saturday</th>
                                        <th>Sunday</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><i class="pe-7s-close font-30 mt-40"></i></td>
                                        <td><img class="img-circle pb-5"
                                                 src="{{asset('frontend/images/time-table/1.jpg')}}" alt=""><br>
                                            <a href="#"><strong>Yoga training</strong> <br>
                                                7 am-6 am</a></td>
                                        <td><i class="pe-7s-close font-30 mt-40"></i></td>
                                        <td><img class="img-circle pb-5"
                                                 src="{{asset('frontend/images/time-table/2.jpg')}}" alt=""><br>
                                            <a href="#"><strong>Yoga training</strong> <br>
                                                7 am-6 am</a></td>
                                        <td><i class="pe-7s-close font-30 mt-40"></i></td>
                                        <td><img class="img-circle pb-5"
                                                 src="{{asset('frontend/images/time-table/3.jpg')}}" alt=""><br>
                                            <a href="#"><strong>Yoga training</strong> <br>
                                                7 am-6 am</a></td>
                                        <td><i class="pe-7s-close font-30 mt-40"></i></td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-circle pb-5"
                                                 src="{{asset('frontend/images/time-table/4.jpg')}}" alt=""><br>
                                            <a href="#"><strong>Yoga training</strong> <br>
                                                7 am-6 am</a></td>
                                        <td><i class="pe-7s-close font-30 mt-40"></i></td>
                                        <td><img class="img-circle pb-5"
                                                 src="{{asset('frontend/images/time-table/5.jpg')}}" alt=""><br>
                                            <a href="#"><strong>Yoga training</strong> <br>
                                                7 am-6 am</a></td>
                                        <td><i class="pe-7s-close font-30 mt-40"></i></td>
                                        <td><img class="img-circle pb-5"
                                                 src="{{asset('frontend/images/time-table/6.jpg')}}" alt=""><br>
                                            <a href="#"><strong>Yoga training</strong> <br>
                                                7 am-6 am</a></td>
                                        <td><i class="pe-7s-close font-30 mt-40"></i></td>
                                        <td><img class="img-circle pb-5"
                                                 src="{{asset('frontend/images/time-table/1.jpg')}}" alt=""><br>
                                            <a href="#"><strong>Yoga training</strong> <br>
                                                7 am-6 am</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="pe-7s-close font-30 mt-40"></i></td>
                                        <td><img class="img-circle pb-5"
                                                 src="{{asset('frontend/images/time-table/2.jpg')}}" alt=""><br>
                                            <a href="#"><strong>Yoga training</strong> <br>
                                                7 am-6 am</a></td>
                                        <td><i class="pe-7s-close font-30 mt-40"></i></td>
                                        <td><img class="img-circle pb-5"
                                                 src="{{asset('frontend/images/time-table/3.jpg')}}" alt=""><br>
                                            <a href="#"><strong>Boxing</strong> <br>
                                                7 am-6 am</a></td>
                                        <td><i class="pe-7s-close font-30 mt-40"></i></td>
                                        <td><img class="img-circle pb-5"
                                                 src="{{asset('frontend/images/time-table/4.jpg')}}" alt=""><br>
                                            <a href="#"><strong>Yoga training</strong> <br>
                                                7 am-6 am</a></td>
                                        <td><i class="pe-7s-close font-30 mt-40"></i></td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-circle pb-5"
                                                 src="{{asset('frontend/images/time-table/5.jpg')}}" alt=""><br>
                                            <a href="#"><strong>Yoga training</strong> <br>
                                                7 am-6 am</a></td>
                                        <td><i class="pe-7s-close font-30 mt-40"></i></td>
                                        <td><img class="img-circle pb-5"
                                                 src="{{asset('frontend/images/time-table/6.jpg')}}" alt=""><br>
                                            <a href="#"><strong>Yoga training</strong> <br>
                                                7 am-6 am</a></td>
                                        <td><i class="pe-7s-close font-30 mt-40"></i></td>
                                        <td><img class="img-circle pb-5"
                                                 src="{{asset('frontend/images/time-table/1.jpg')}}" alt=""><br>
                                            <a href="#"><strong>Yoga training</strong> <br>
                                                7 am-6 am</a></td>
                                        <td><i class="pe-7s-close font-30 mt-40"></i></td>
                                        <td><img class="img-circle pb-5"
                                                 src="{{asset('frontend/images/time-table/2.jpg')}}" alt=""><br>
                                            <a href="#"><strong>Yoga training</strong> <br>
                                                7 am-6 am</a></td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-circle pb-5"
                                                 src="{{asset('frontend/images/time-table/3.jpg')}}" alt=""><br>
                                            <a href="#"><strong>Yoga training</strong> <br>
                                                7 am-6 am</a></td>
                                        <td><i class="pe-7s-close font-30 mt-40"></i></td>
                                        <td><img class="img-circle pb-5"
                                                 src="{{asset('frontend/images/time-table/4.jpg')}}" alt=""><br>
                                            <a href="#"><strong>Yoga training</strong> <br>
                                                7 am-6 am</a></td>
                                        <td><img class="img-circle pb-5"
                                                 src="{{asset('frontend/images/time-table/5.jpg')}}" alt=""><br>
                                            <a href="#"><strong>Event</strong> <br>
                                                7 am-6 am</a></td>
                                        <td><i class="pe-7s-close font-30 mt-40"></i></td>
                                        <td><img class="img-circle pb-5"
                                                 src="{{asset('frontend/images/time-table/6.jpg')}}" alt=""><br>
                                            <a href="#"><strong>Boxing</strong> <br>
                                                7 am-6 am</a></td>
                                        <td><img class="img-circle pb-5"
                                                 src="{{asset('frontend/images/time-table/1.jpg')}}" alt=""><br>
                                            <a href="#"><strong>Yoga training</strong> <br>
                                                7 am-6 am</a></td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th><a href="#"><i class="fa fa-arrow-circle-left"></i> September</a></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th><a href="#">November <i class="fa fa-arrow-circle-right"></i></a></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: Calculator  -->
        <section class="divider parallax" data-bg-img="{{asset('frontend/images/gym/bg/bg17.jpg')}}">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="p-40 bg-theme-colored2 text-white pull-left">
                                <h2 class="mt-0 text-white">Sign Up Today And Save!</h2>
                                <p>Gaining strength allows you to perform daily tasks much easier, such as carrying heavy groceries.
                                </p>
                                <!-- Appointment Form -->
                                <form id="appointment_form" name="appointment_form" class="" method="post" action="#">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group mb-10">
                                                <input name="form_name" class="form-control" type="text" required=""
                                                       placeholder="Enter Name" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group mb-10">
                                                <input name="form_email" class="form-control required email"
                                                       type="email" placeholder="Enter Email" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group mb-10">
                                                <input name="form_appontment_date"
                                                       class="form-control required datetime-picker" type="text"
                                                       placeholder="Appoinment Date & Time" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-10">
                                        <textarea id="form_message" name="form_message" class="form-control required"
                                                  placeholder="Enter Message" rows="5" aria-required="true"></textarea>
                                    </div>
                                    <div class="form-group mb-0 mt-20">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control"
                                               type="hidden" value="">
                                        <button type="submit" class="btn btn-dark btn-theme-colored"
                                                data-loading-text="Please wait...">Send Message
                                        </button>
                                    </div>
                                </form>
                                <!-- Appointment Form Validation-->
                                <script type="text/javascript">
                                    $("#appointment_form").validate({
                                        submitHandler: function (form) {
                                            var form_btn = $(form).find('button[type="submit"]');
                                            var form_result_div = '#form-result';
                                            $(form_result_div).remove();
                                            form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                            var form_btn_old_msg = form_btn.html();
                                            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                            $(form).ajaxSubmit({
                                                dataType: 'json',
                                                success: function (data) {
                                                    if (data.status == 'true') {
                                                        $(form).find('.form-control').val('');
                                                    }
                                                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                                                    $(form_result_div).html(data.message).fadeIn('slow');
                                                    setTimeout(function () {
                                                        $(form_result_div).fadeOut('slow')
                                                    }, 6000);
                                                }
                                            });
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--start trainer Section-->
        <section class="bg-lighter">
            <div class="container pt-70 pb-70">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="mt-0 line-height-1">Meet Our <span class="text-black">Expert Trainers</span></h2>
                            <p>This is a complete guide for teens that includes workouts and nutritional advice to help you maximize progress.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mtli-row-clearfix">
                    <div class="col-md-12">
                        <div class="owl-carousel-4col" data-nav="true" data-dots="true">
                            <div class="item">
                                <div class="team-members text-center maxwidth400">
                                    <div class="team-thumb">
                                        <img class="img-fullwidth" alt=""
                                             src="{{asset('frontend/images/gym/team/1.jpg')}}">
                                    </div>
                                    <div class="team-details">
                                        <div class="p-10 bg-theme-colored">
                                            <h4 class="team-title text-uppercase mt-0 mb-0"><a href="#">Gordon James</a>
                                            </h4>
                                            <p class="team-subtitle mt-0 mb-0">Cardio Trainer</p>
                                        </div>
                                        <div class="p-20 bg-white">
                                            <div class="opening-hours text-left mb-30">
                                                <ul class="list-unstyled">
                                                    <li class="clearfix line-height-1"><span> Monday - Friday </span>
                                                        <div class="value"> 9.00 - 20.00</div>
                                                    </li>
                                                    <li class="clearfix line-height-1"><span> Saturday </span>
                                                        <div class="value"> 10.00 - 16.00</div>
                                                    </li>
                                                    <li class="clearfix line-height-1"><span> Sunday </span>
                                                        <div class="value"> 9.30 - 18.00</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team-members text-center maxwidth400">
                                    <div class="team-thumb">
                                        <img class="img-fullwidth" alt=""
                                             src="{{asset('frontend/images/gym/team/2.jpg')}}">
                                    </div>
                                    <div class="team-details">
                                        <div class="p-10 bg-theme-colored">
                                            <h4 class="team-title text-uppercase mt-0 mb-0"><a href="#">James
                                                    Steward</a></h4>
                                            <p class="team-subtitle mt-0 mb-0">Boxing Athlete</p>
                                        </div>
                                        <div class="p-20 bg-white">
                                            <div class="opening-hours text-left mb-30">
                                                <ul class="list-unstyled">
                                                    <li class="clearfix line-height-1"><span> Monday - Friday </span>
                                                        <div class="value"> 9.00 - 20.00</div>
                                                    </li>
                                                    <li class="clearfix line-height-1"><span> Saturday </span>
                                                        <div class="value"> 10.00 - 16.00</div>
                                                    </li>
                                                    <li class="clearfix line-height-1"><span> Sunday </span>
                                                        <div class="value"> 9.30 - 18.00</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team-members text-center maxwidth400">
                                    <div class="team-thumb">
                                        <img class="img-fullwidth" alt=""
                                             src="{{asset('frontend/images/gym/team/3.jpg')}}">
                                    </div>
                                    <div class="team-details">
                                        <div class="p-10 bg-theme-colored">
                                            <h4 class="team-title text-uppercase mt-0 mb-0"><a href="#">Jan Doe</a></h4>
                                            <p class="team-subtitle mt-0 mb-0">Professional Trainer</p>
                                        </div>
                                        <div class="p-20 bg-white">
                                            <div class="opening-hours text-left mb-30">
                                                <ul class="list-unstyled">
                                                    <li class="clearfix line-height-1"><span> Monday - Friday </span>
                                                        <div class="value"> 9.00 - 20.00</div>
                                                    </li>
                                                    <li class="clearfix line-height-1"><span> Saturday </span>
                                                        <div class="value"> 10.00 - 16.00</div>
                                                    </li>
                                                    <li class="clearfix line-height-1"><span> Sunday </span>
                                                        <div class="value"> 9.30 - 18.00</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team-members text-center maxwidth400">
                                    <div class="team-thumb">
                                        <img class="img-fullwidth" alt=""
                                             src="{{asset('frontend/images/gym/team/4.jpg')}}">
                                    </div>
                                    <div class="team-details">
                                        <div class="p-10 bg-theme-colored">
                                            <h4 class="team-title text-uppercase mt-0 mb-0"><a href="#">Jason Doenly</a>
                                            </h4>
                                            <p class="team-subtitle mt-0 mb-0">Gym Experts</p>
                                        </div>
                                        <div class="p-20 bg-white">
                                            <div class="opening-hours text-left mb-30">
                                                <ul class="list-unstyled">
                                                    <li class="clearfix line-height-1"><span> Monday - Friday </span>
                                                        <div class="value"> 9.00 - 20.00</div>
                                                    </li>
                                                    <li class="clearfix line-height-1"><span> Saturday </span>
                                                        <div class="value"> 10.00 - 16.00</div>
                                                    </li>
                                                    <li class="clearfix line-height-1"><span> Sunday </span>
                                                        <div class="value"> 9.30 - 18.00</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team-members text-center maxwidth400">
                                    <div class="team-thumb">
                                        <img class="img-fullwidth" alt=""
                                             src="{{asset('frontend/images/gym/team/5.jpg')}}">
                                    </div>
                                    <div class="team-details">
                                        <div class="p-10 bg-theme-colored">
                                            <h4 class="team-title text-uppercase mt-0 mb-0"><a href="#">Mike Wilson</a>
                                            </h4>
                                            <p class="team-subtitle mt-0 mb-0">Bodybuilding</p>
                                        </div>
                                        <div class="p-20 bg-white">
                                            <div class="opening-hours text-left mb-30">
                                                <ul class="list-unstyled">
                                                    <li class="clearfix line-height-1"><span> Monday - Friday </span>
                                                        <div class="value"> 9.00 - 20.00</div>
                                                    </li>
                                                    <li class="clearfix line-height-1"><span> Saturday </span>
                                                        <div class="value"> 10.00 - 16.00</div>
                                                    </li>
                                                    <li class="clearfix line-height-1"><span> Sunday </span>
                                                        <div class="value"> 9.30 - 18.00</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--start funfact Section-->
        <section class="divider parallax layer-overlay overlay-theme-colored-8 bg-black" data-bg-img="#">
            <div class="container pt-90 pb-90">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="mt-0 text-white">Some Funfacts</h2>
                            <p class="text-white">This is a complete guide for teens that includes workouts and nutritional advice to help
                                <br> you maximize progress!</p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                            <div class="funfact text-center">
                                <i class="flaticon-gym-scale text-white"></i>
                                <h2 data-animation-duration="2000" data-value="100%"
                                    class="animate-number text-white font-38">0</h2>
                                <h5 class="text-white text-uppercase mb-0">Happy Coustomer</h5>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                            <div class="funfact text-center">
                                <i class="flaticon-gym-kettlebells text-white"></i>
                                <h2 data-animation-duration="2000" data-value="1250"
                                    class="animate-number text-white font-38">0</h2>
                                <h5 class="text-white text-uppercase mb-0">Pounds Shredded</h5>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                            <div class="funfact text-center">
                                <i class="flaticon-gym-stopwatch text-white"></i>
                                <h2 data-animation-duration="2000" data-value="1283"
                                    class="animate-number text-white font-38">0</h2>
                                <h5 class="text-white text-uppercase mb-0">Personal Training Hours</h5>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
                            <div class="funfact text-center">
                                <i class="flaticon-gym-dumbbell text-white"></i>
                                <h2 data-animation-duration="2000" data-value="60%"
                                    class="animate-number text-white font-38">0</h2>
                                <h5 class="text-white text-uppercase mb-0">RETENTION RATE</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--start gallary Section-->
        <section>
            <div class="container-fluid pb-0">
                <div class="section-title text-center mt-0">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="mt-0 line-height-1">Our <span class="text-theme-colored2">Gallery</span></h2>
                            <p>Indoor Cycling is an intense workout with which you can burn a lot of calories if you do it right.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Portfolio Filter -->
                            <div class="portfolio-filter text-center">
                                <a href="#" class="active" data-filter="*">All</a>
                                <a href="#branding" class="" data-filter=".branding">Branding</a>
                                <a href="#design" class="" data-filter=".design">Design</a>
                                <a href="#photography" class="" data-filter=".photography">Photography</a>
                            </div>
                            <!-- End Portfolio Filter -->

                            <!-- Portfolio Gallery Grid -->
                            <div class="gallery-isotope default-animation-effect grid-3 gutter-small clearfix"
                                 data-lightbox="gallery">
                                <!-- Portfolio Item Start -->
                                <div class="gallery-item design">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{asset('frontend/images/gym/gallery/1.jpg')}}"
                                             alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder">
                                            <div class="title text-center">Sample Title</div>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div
                                                    class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="{{asset('frontend/images/gym/gallery/full/1.jpg')}}"
                                                       data-lightbox-gallery="gallery" title="Your Title Here"><i
                                                            class="fa fa-picture-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->
                                <!-- Portfolio Item Start -->
                                <div class="gallery-item branding photography">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{asset('frontend/images/gym/gallery/2.jpg')}}"
                                             alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder">
                                            <div class="title text-center">Sample Title</div>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div
                                                    class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="{{asset('frontend/images/gym/gallery/full/2.jpg')}}"
                                                       data-lightbox-gallery="gallery" title="Your Title Here"><i
                                                            class="fa fa-picture-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->
                                <!-- Portfolio Item Start -->
                                <div class="gallery-item design">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{asset('frontend/images/gym/gallery/3.jpg')}}"
                                             alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder">
                                            <div class="title text-center">Sample Title</div>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div
                                                    class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="{{asset('frontend/images/gym/gallery/full/3.jpg')}}"
                                                       data-lightbox-gallery="gallery" title="Your Title Here"><i
                                                            class="fa fa-picture-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->
                                <!-- Portfolio Item Start -->
                                <div class="gallery-item branding">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{asset('frontend/images/gym/gallery/4.jpg')}}"
                                             alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder">
                                            <div class="title text-center">Sample Title</div>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div
                                                    class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="{{asset('frontend/images/gym/gallery/full/4.jpg')}}"
                                                       data-lightbox-gallery="gallery" title="Your Title Here"><i
                                                            class="fa fa-picture-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->
                                <!-- Portfolio Item Start -->
                                <div class="gallery-item design photography">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{asset('frontend/images/gym/gallery/5.jpg')}}"
                                             alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder">
                                            <div class="title text-center">Sample Title</div>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div
                                                    class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="{{asset('frontend/images/gym/gallery/full/5.jpg')}}"
                                                       data-lightbox-gallery="gallery" title="Your Title Here"><i
                                                            class="fa fa-picture-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->
                                <!-- Portfolio Item Start -->
                                <div class="gallery-item photography">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{asset('frontend/images/gym/gallery/6.jpg')}}"
                                             alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder">
                                            <div class="title text-center">Sample Title</div>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div
                                                    class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="{{asset('frontend/images/gym/gallery/full/6.jpg')}}"
                                                       data-lightbox-gallery="gallery" title="Your Title Here"><i
                                                            class="fa fa-picture-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->
                                <!-- Portfolio Item End -->
                            </div>
                            <!-- End Portfolio Gallery Grid -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Call To Action -->
        <section class="divider parallax layer-overlay overlay-theme-colored2-8"
                 data-bg-img="{{asset('frontend/images/gym/bg/bg10.jpg')}}">
            <div class="container">
                <div class="call-to-action">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 text-center">
                            <h2 class="text-white text-uppercase font-36">fitness is not a destination its a way of
                                life</h2>
                            <p class="text-white lead">Start War on Fat - Have Energy. Strong Body Strong Mind
                                flexibility, and mind-body awareness.Balance - Fitness For Life</p>
                            <a href="#" class="btn btn-circled btn-theme-colored btn-lg">Become A Member</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--start shop Section-->
        <section>
            <div class="container">
                <div class="section-title text-center mt-0">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="mt-0 line-height-1">Shop Sports <span class="text-black">Products</span></h2>
                            <p>Aqua fitness covers a range of exercises you can do in the pool aqua aerobics, aqua jogging
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel-4col" data-nav="true" data-dots="true">
                                <div class="item">
                                    <div class="product">
                                        <span class="tag-sale">Sale!</span>
                                        <div class="product-thumb"><img alt=""
                                                                        src="{{asset('frontend/images/gym/shopping/1.jpg')}}"
                                                                        class="img-responsive img-fullwidth">
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="product-details text-center bg-light p-20">
                                            <h5 class="product-title mt-0"><a href="#">Gym Dumble</a></h5>
                                            <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="90%">3.50</span>
                                            </div>
                                            <div class="price">
                                                <del><span class="amount">$520.00</span></del>
                                                <ins><span class="amount">$480.00</span></ins>
                                            </div>
                                            <a class="btn btn-dark btn-theme-colored btn-add-to-cart" href="#">Add To
                                                Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <span class="tag-sale">Sale!</span>
                                        <div class="product-thumb"><img alt=""
                                                                        src="{{asset('frontend/images/gym/shopping/2.jpg')}}"
                                                                        class="img-responsive img-fullwidth">
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="product-details text-center bg-light p-20">
                                            <h5 class="product-title mt-0"><a href="#">Gym Rope</a></h5>
                                            <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="90%">3.50</span>
                                            </div>
                                            <div class="price">
                                                <del><span class="amount">$520.00</span></del>
                                                <ins><span class="amount">$480.00</span></ins>
                                            </div>
                                            <a class="btn btn-dark btn-theme-colored btn-add-to-cart" href="#">Add To
                                                Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <span class="tag-sale">Sale!</span>
                                        <div class="product-thumb"><img alt=""
                                                                        src="{{asset('frontend/images/gym/shopping/3.jpg')}}"
                                                                        class="img-responsive img-fullwidth">
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="product-details text-center bg-light p-20">
                                            <h5 class="product-title mt-0"><a href="#">Gym Shoe</a></h5>
                                            <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="90%">3.50</span>
                                            </div>
                                            <div class="price">
                                                <del><span class="amount">$520.00</span></del>
                                                <ins><span class="amount">$480.00</span></ins>
                                            </div>
                                            <a class="btn btn-dark btn-theme-colored btn-add-to-cart" href="#">Add To
                                                Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <span class="tag-sale">Sale!</span>
                                        <div class="product-thumb"><img alt=""
                                                                        src="{{asset('frontend/images/gym/shopping/4.jpg')}}"
                                                                        class="img-responsive img-fullwidth">
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="product-details text-center bg-light p-20">
                                            <h5 class="product-title mt-0"><a href="#">Gym Towel</a></h5>
                                            <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="90%">3.50</span>
                                            </div>
                                            <div class="price">
                                                <del><span class="amount">$520.00</span></del>
                                                <ins><span class="amount">$480.00</span></ins>
                                            </div>
                                            <a class="btn btn-dark btn-theme-colored btn-add-to-cart" href="#">Add To
                                                Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <span class="tag-sale">Sale!</span>
                                        <div class="product-thumb"><img alt=""
                                                                        src="{{asset('frontend/images/gym/shopping/5.jpg')}}"
                                                                        class="img-responsive img-fullwidth">
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="product-details text-center bg-light p-20">
                                            <h5 class="product-title mt-0"><a href="#">Gym Bag</a></h5>
                                            <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="90%">3.50</span>
                                            </div>
                                            <div class="price">
                                                <del><span class="amount">$520.00</span></del>
                                                <ins><span class="amount">$480.00</span></ins>
                                            </div>
                                            <a class="btn btn-dark btn-theme-colored btn-add-to-cart" href="#">Add To
                                                Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <a class="btn btn-theme-colored" href="#">All Shop <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--start testimonial Section-->
        <section class="divider parallax layer-overlay overlay-theme-colored-8"
                 data-bg-img="{{asset('frontend/images/gym/bg/bg10.jpg')}}">
            <div class="container">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-uppercase text-white mt-0 line-height-1">Testimonial</h2>
                            <p class="text-white">During a Zumba class, you'll follow choreography with footwork that works your leg muscles, arm movements that
                                <br>  tone your arm muscles</p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel-3col" data-dots="true">
                                <div class="item">
                                    <div class="testimonial testimonial-yoga">
                                        <div class="comment p-30 bg-theme-colored2-transparent-8">
                                            <h4 class="comment-title text-white">Truly Recommended for This Company</h4>
                                            <p class="text-white">Getting your cardio in on the reg can improve heart health by lowering cholesterol levels and reducing your risk of heart disease.</p>
                                        </div>
                                        <div class="content mt-20">
                                            <div class="thumb pull-left flip mr-20">
                                                <img class="img-circle img-thumbnail" alt=""
                                                     src="{{asset('frontend/images/testimonials/1.jpg')}}">
                                            </div>
                                            <div class="pull-left flip mt-10">
                                                <h5 class="author text-white">Tegan Bolton</h5>
                                                <h6 class="author-title text-white">Happy Client</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial testimonial-yoga">
                                        <div class="comment p-30 bg-theme-colored2-transparent-8">
                                            <h4 class="comment-title text-white">Truly Recommended for This Company</h4>
                                            <p class="text-white">If your goal is to build bigger legs and glutes, your ideal workout split will look different build a broad back and shoulders
                                            </p>
                                        </div>
                                        <div class="content mt-20">
                                            <div class="thumb pull-left flip mr-20">
                                                <img class="img-circle img-thumbnail" alt=""
                                                     src="{{asset('frontend/images/testimonials/2.jpg')}}">
                                            </div>
                                            <div class="pull-left flip mt-10">
                                                <h5 class="author text-white">Tegan Bolton</h5>
                                                <h6 class="author-title text-white">Happy Client</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial testimonial-yoga">
                                        <div class="comment p-30 bg-theme-colored2-transparent-9">
                                            <h4 class="comment-title text-white">Truly Recommended for This Company</h4>
                                            <p class="text-white">Indoor Cycling is an intense workout with which you can burn a lot of calories if you do it right.
                                            </p>
                                        </div>
                                        <div class="content mt-20">
                                            <div class="thumb pull-left flip mr-20">
                                                <img class="img-circle img-thumbnail" alt=""
                                                     src="{{asset('frontend/images/testimonials/3.jpg')}}">
                                            </div>
                                            <div class="pull-left flip mt-10">
                                                <h5 class="author text-white">Tegan Bolton</h5>
                                                <h6 class="author-title text-white">Happy Client</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial testimonial-yoga">
                                        <div class="comment p-30 bg-theme-colored2-transparent-8">
                                            <h4 class="comment-title text-white">Truly Recommended for This Company</h4>
                                            <p class="text-white">Yoga is as good as basic stretching for easing pain and improving mobility in people with lower back pain.
                                            </p>
                                        </div>
                                        <div class="content mt-20">
                                            <div class="thumb pull-left flip mr-20">
                                                <img class="img-circle img-thumbnail" alt=""
                                                     src="{{asset('frontend/images/testimonials/4.jpg')}}">
                                            </div>
                                            <div class="pull-left flip mt-10">
                                                <h5 class="author text-white">Tegan Bolton</h5>
                                                <h6 class="author-title text-white">Happy Client</h6>
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

        <!--start blog Section-->
        <section>
            <div class="container">
                <div class="section-title text-center mt-0">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="mt-0 line-height-1">Recent <span class="text-theme-colored">News</span></h2>
                            <p>Fitness training balances five elements of good health includes aerobic fitness, strength training, core exercises, balance training
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <article class="post clearfix maxwidth500 mb-sm-30">
                                <div class="entry-header">
                                    <div class="post-thumb">
                                        <img src="{{asset('frontend/images/gym/blog/1.jpg')}}" alt=""
                                             class="img-responsive img-fullwidth">
                                    </div>
                                </div>
                                <div class="entry-content border-bottom-theme-color-2-1px bg-lighter p-30">
                                    <h3 class="entry-title text-uppercase mt-0"><a href="#">10 healthiest tips for both
                                            men and women </a></h3>
                                    <div class="entry-meta mb-20">
                                        <ul class="list-inline font-12">
                                            <li><i class="fa fa-calendar-plus-o text-theme-color-2 mr-5"></i> 25 March,
                                                2018
                                            </li>
                                        </ul>
                                    </div>
                                    <p>High-intensity interval training has been associated with a decreased risk of heart disease - bouts of high-intensity activity
                                    </p>
                                    <a class="btn btn-theme-colored mt-10 mb-0 pull-left flip" href="#">Read more <i
                                            class="fa fa-angle-double-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <article class="post clearfix maxwidth500  mb-sm-30">
                                <div class="entry-header">
                                    <div class="post-thumb">
                                        <img src="{{asset('frontend/images/gym/blog/3.jpg')}}" alt=""
                                             class="img-responsive img-fullwidth">
                                    </div>
                                </div>
                                <div class="entry-content border-bottom-theme-color-2-1px bg-lighter p-30">
                                    <h3 class="entry-title text-uppercase mt-0"><a href="#">Maintaining Your Body Is No
                                            Small Matter </a></h3>
                                    <div class="entry-meta mb-20">
                                        <ul class="list-inline font-12">
                                            <li><i class="fa fa-calendar-plus-o text-theme-color-2 mr-5"></i> 25 March,
                                                2018
                                            </li>
                                        </ul>
                                    </div>
                                    <p>Yoga is as good as basic stretching for easing pain and improving mobility in people with lower back pain.
                                    </p>
                                    <a class="btn btn-theme-colored mt-10 mb-0 pull-left flip" href="#">Read more <i
                                            class="fa fa-angle-double-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <article class="post clearfix maxwidth500">
                                <div class="entry-header">
                                    <div class="post-thumb">
                                        <img src="{{asset('frontend/images/gym/blog/2.jpg')}}" alt=""
                                             class="img-responsive img-fullwidth">
                                    </div>
                                </div>
                                <div class="entry-content border-bottom-theme-color-2-1px bg-lighter p-30">
                                    <h3 class="entry-title text-uppercase mt-0"><a href="#">Get off your butt and
                                            exercise orders</a></h3>
                                    <div class="entry-meta mb-20">
                                        <ul class="list-inline font-12">
                                            <li><i class="fa fa-calendar-plus-o text-theme-color-2 mr-5"></i> 25 March,
                                                2018
                                            </li>
                                        </ul>
                                    </div>
                                    <p>Aerobic exercise gets your heart pumping and helps lower the risk of high blood pressure
                                    </p>
                                    <a class="btn btn-theme-colored mt-10 mb-0 pull-left flip" href="#">Read more <i
                                            class="fa fa-angle-double-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--start Clients Section-->
        <section class="clients" style="background-color: #464646;">
            <div class="container pt-10 pb-0">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Section: Clients -->
                            <div class="owl-carousel-6col transparent text-center owl-nav-top p-5"
                                 style="margin-bottom: 20px !important;margin-top: 15px;">
                                <div class="item"><a href="#"><img src="{{asset('frontend/images/clients/w1.png')}}"
                                                                   height="80px" alt=""></a></div>
                                <div class="item"><a href="#"><img src="{{asset('frontend/images/clients/w2.png')}}"
                                                                   height="80px" alt=""></a></div>
                                <div class="item"><a href="#"><img src="{{asset('frontend/images/clients/w3.png')}}"
                                                                   height="80px" alt=""></a></div>
                                <div class="item"><a href="#"><img src="{{asset('frontend/images/clients/w4.png')}}"
                                                                   height="80px" alt=""></a></div>
                                <div class="item"><a href="#"><img src="{{asset('frontend/images/clients/w5.png')}}"
                                                                   height="80px" alt=""></a></div>
                                <div class="item"><a href="#"><img src="{{asset('frontend/images/clients/w6.png')}}"
                                                                   height="80px" alt=""></a></div>
                                <div class="item"><a href="#"><img src="{{asset('frontend/images/clients/w3.png')}}"
                                                                   height="80px" alt=""></a></div>
                                <div class="item"><a href="#"><img src="{{asset('frontend/images/clients/w4.png')}}"
                                                                   height="80px" alt=""></a></div>
                                <div class="item"><a href="#"><img src="{{asset('frontend/images/clients/w5.png')}}"
                                                                   height="80px" alt=""></a></div>
                                <div class="item"><a href="#"><img src="{{asset('frontend/images/clients/w6.png')}}"
                                                                   height="80px" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
