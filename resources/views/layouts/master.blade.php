
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from kodesolution.com/html/2017/health-yoga-html/demo/index-mp-layout3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Dec 2022 09:10:29 GMT -->
<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="Yoga | Health Beauty & Yoga Responsive HTML5 Template" />
    <meta name="keywords" content="care, clinic, corporate, dental, dentist, doctor" />
    <meta name="author" content="ThemeMascot" />

    <!-- Page Title -->
    <title>TKMMAFIT | GYM. MMA. FITNESS</title>

    <!-- Favicon and Touch Icons -->
    <link href="{{asset('frontend/images/favicon.png')}}" rel="shortcut icon" type="image/png">
    <link href="{{asset('frontend/images/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{asset('frontend/images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{asset('frontend/images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{asset('frontend/images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/css/css-plugin-collections.css')}}" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link href="{{asset('frontend/css/menuzord-megamenu.css')}}" rel="stylesheet"/>
    <link id="menuzord-menu-skins" href="{{asset('frontend/css/menuzord-skins/menuzord-bottom-trace.css')}}" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="{{asset('frontend/css/style-main.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{asset('frontend/css/preloader.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{asset('frontend/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link  href="{{asset('frontend/js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
    <link  href="{{asset('frontend/js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
    <link  href="{{asset('frontend/js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

    <!-- CSS | Theme Color -->
    <link href="{{asset('frontend/css/colors/theme-skin-color-set3.css')}}" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="{{asset('frontend/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{asset('frontend/js/jquery-plugin-collection.js')}}"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="{{asset('frontend/js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('frontend/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="">
    <div id="wrapper">

        <!-- preloader -->
        <div id="preloader">
            <div id="spinner">
                <div class="preloader-dot-loading">
                    <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
                </div>
            </div>
{{--            <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>--}}
        </div>

        @yield('content')
        @include('layouts.footer')

        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>

<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{asset('frontend/js/custom.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>

</body>

<!-- Mirrored from kodesolution.com/html/2017/health-yoga-html/demo/index-mp-layout3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Dec 2022 09:12:35 GMT -->
</html>
<style>
    @media only screen and (min-width: 600px) {
        .mobile {
            display: none;
        }
    }
    @media only screen and (max-width: 600px) {
        .desktop {
            display: none;
        }
    }

</style>

