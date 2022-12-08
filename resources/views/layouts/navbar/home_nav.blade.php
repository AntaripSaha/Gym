<header id="header" class="header header-floating">
    <div class="header-top sm-text-center style-bordered">

        <!-- <div class="container">
          <div class="row">
            <div class="col-md-6">
              <a class="switchable-logo pull-left flip mb-5" href="index.html">
                <img class="logo-default" src="images/logo-wide-white.png" alt="" style="height: 80px !important; margin-top: 10px;">
              </a>
            </div>
            <div class="col-md-6" style="text-align: end;">
              <div class="widget">
                  <div id="social">
                    <a href="https://www.youtube.com/channel/UCeLFX5X4tAVVkZPo96KYoEA" target="_blank">
                      <img src="http://tkmmafit.com/wp-content/themes/gymguide/images/ico-yt.jpg">
                    </a>
                    <a href="https://www.facebook.com/tkmmafit" target="_blank">
                      <img src="http://tkmmafit.com/wp-content/themes/gymguide/images/ico-fb.jpg">
                    </a>
                    &nbsp;&nbsp;
                    <a href="https://twitter.com/tkmmafit" target="_blank">
                      <img src="http://tkmmafit.com/wp-content/themes/gymguide/images/ico-tw.jpg">
                    </a>
                    &nbsp;&nbsp;
                    <a href="http://instagram.com/tkmmafit" target="_blank">
                      <img src="http://tkmmafit.com/wp-content/themes/gymguide/images/ico-is.jpg">
                    </a>
                  </div>
                   <h3 style="color: white;">THE ULTIMATE TRAINING FACILITY</h3>

              </div>
            </div>
          </div>
        </div> -->
    </div>
    <div class="header-nav bg-light navbar-scrolltofixed navbar-sticky-animated  style-bordered">
        <div class="header-nav-wrapper ">
            <div class="container">
                <nav id="menuzord-right" class="menuzord orange no-bg">
                    <a class="menuzord-brand switchable-logo pull-left flip mb-15" href="/">
                        <img class="logo-default mobile" src="{{asset('frontend/images/logo-wide.png')}}" alt="">
                        <img class="logo-scrolled-to-fixed" src="{{asset('frontend/images/logo-wide.png')}}" alt="">
                    </a>
                    <a class="switchable-logo pull-left flip mb-5" href="/">
                        <img class="logo-default desktop" src="{{asset('frontend/images/logo-wide.png')}}" alt="" style="height: 55px !important; margin-top: 10px;">

                        <!-- <img class="logo-scrolled-to-fixed" src="images/logo-wide.png" alt=""> -->
                    </a>
                    <ul class="menuzord-menu" style="text-align: start;">
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
