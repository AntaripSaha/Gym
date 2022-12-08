<header id="header" class="header">
    <div class="header-top bg-light sm-text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="widget">
                        <i class="fa fa-clock-o text-theme-colored"></i> Opening Hours:  Mon - Tues : 6.00 am - 10.00 pm, Sunday Closed
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="widget">
                        <ul class="list-inline pull-right flip sm-pull-none sm-text-center">
                            <li><i class="fa fa-phone text-theme-colored"></i> Call Us at <a href="#">+(012) 345 6789</a></li>
                            <li><i class="fa fa-envelope-o text-theme-colored"></i> <a href="#">contact@yourdomain.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
            <div class="container">
                <nav id="menuzord-right" class="menuzord blue no-bg"><a class="menuzord-brand pull-left flip mb-15" href="/"><img src="{{asset('frontend/images/logo-wide.png')}}" alt=""></a>
                    <ul class="menuzord-menu">
                        <li class="active"><a href="/">Home</a>
                        </li>
                        <li><a href="#">The Center</a>

                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="#">Gallery</a>
                                    <ul class="dropdown">
                                        <li><a href="page-gallery.html">Gallery</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('course')}}">Courses</a>
                                </li>
                                <li><a href="#">Membership</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Membership</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        </li>
                        <li>
                            <a href="#">Kids</a>
                        </li>
                        <li>
                            <a href="#">Events</a>
                        </li>
                        <li>
                            <a href="#">News</a>
                        </li>
                        <li>
                            <a href="{{route('about')}}">About</a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
