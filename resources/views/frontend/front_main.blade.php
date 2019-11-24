<!DOCTYPE html>
<html>

<!-- Mirrored from demo.nrgthemes.com/projects/travel/index_9.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Nov 2019 10:17:32 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no"/>

    <link rel="shortcut icon" href="{{ asset('frontend/favicon.ico') }}"/>
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('frontend/css/jquery-ui.structure.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('frontend/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css"/>
    <title>@yield('title')</title>
</head>
<body data-color="theme-1">
<div class="style-page">
    <div class="wrappers">
        <div class="conf-button">
            <span class="fa fa-cog"></span>
            <h6>Theme options</h6>
        </div>
        <a href="index.html" class="site-logo"><img src="{{ asset('images/sylhet.png') }}" alt=""></a>
        <div class="color-block">
            <h5>change color</h5>
            <div class="entry bg-1" data-color="theme-1"></div>
            <div class="entry bg-2" data-color="theme-2"></div>
            <div class="entry bg-3" data-color="theme-3"></div>
            <div class="entry bg-4" data-color="theme-4"></div>
            <div class="entry bg-5" data-color="theme-5"></div>
            <div class="entry bg-6" data-color="theme-6"></div>
            <div class="entry bg-7" data-color="theme-7"></div>
            <div class="entry bg-8" data-color="theme-8"></div>
            <div class="entry bg-9" data-color="theme-9"></div>
        </div>
        <div class="color-block">
            <h5>Layout style</h5>
            <div class="check-option active"><span class="boxed">Boxed</span></div>
            <div class="check-option"><span class="noboxed">Wide</span></div>
        </div>
        <div class="color-block">
            <h5>Elements style</h5>
            <div class="check-option active"><span class="rounded">Rounded</span></div>
            <div class="check-option"><span class="norounded">Not rounded</span></div>
        </div>
        <div class="color-block">
            <h5>Header style</h5>
            <div class="header-style">
                <a href="menu_style_1.html" class="active">
                    <img src="{{ asset('frontend/img/landing/header_1.png') }}" alt="">
                </a>
                <a href="menu_style_2.html">
                    <img src="{{ asset('frontend/img/landing/header_2.png') }}" alt="">
                </a>
                <a href="menu_style_3.html">
                    <img src="{{ asset('frontend/img/landing/header_3.png') }}" alt="">
                </a>
                <a href="menu_style_4.html">
                    <img src="{{ asset('frontend/img/landing/header_4.png') }}" alt="">
                </a>
                <a href="menu_style_5.html">
                    <img src="{{ asset('frontend/img/landing/header_5.png') }}" alt="">
                </a>
                <a href="menu_style_6.html">
                    <img src="{{ asset('frontend/img/landing/header_6.png') }}" alt="">
                </a>
            </div>
        </div>
        <div class="color-block">
            <h5>Footer style</h5>
            <div class="header-style">
                <a href="footer_style_1.html" class="active">
                    <img src="{{ asset('frontend/img/landing/footer_1.png') }}" alt="">
                </a>
                <a href="footer_style_2.html">
                    <img src="{{ asset('frontend/img/landing/footer_2.png') }}" alt="">
                </a>
                <a href="footer_style_3.html">
                    <img src="{{ asset('frontend/img/landing/footer_3.png') }}" alt="">
                </a>
                <a href="footer_style_4.html">
                    <img src="{{ asset('frontend/img/landing/footer_4.png') }}" alt="">
                </a>
                <a href="footer_style_5.html">
                    <img src="{{ asset('frontend/img/landing/footer_5.png') }}" alt="">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="loading dr-blue-2">
    <div class="loading-center">
        <div class="loading-center-absolute">
            <div class="object object_four"></div>
            <div class="object object_three"></div>
            <div class="object object_two"></div>
            <div class="object object_one"></div>
        </div>
    </div>
</div>

<header class="color-1 hovered menu-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="nav">
                    <a href="index.html" class="logo">
                        <img src="{{ asset('images/sylhet.png') }}" alt="lets travel">
                    </a>
                    <div class="nav-menu-icon">
                        <a href="#"><i></i></a>
                    </div>
                    <nav class="menu">
                        <ul>
                            <li class="type-1 active">
                                <a href="#">home<span class="fa fa-angle-down"></span></a>
                            </li>
                            <li class="type-1"><a href="#">Tours<span class="fa fa-angle-down"></span></a>

                            </li>
                            <li class="type-1"><a href="#">Hotels<span class="fa fa-angle-down"></span></a>

                            </li>
                            <li class="type-1"><a href="#">Flights<span class="fa fa-angle-down"></span></a>

                            </li>
                            <li class="type-1"><a href="#">Vehicles<span class="fa fa-angle-down"></span></a>

                            </li>
                            <li class="type-1"><a href="#">Tickets<span class="fa fa-angle-down"></span></a>

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="full-height">
    <div class="video-wrapper">
        <video loop autoplay muted poster="img/poster.html" class="bgvid" id="bgvid">
            <source type="video/mp4" src="video/syltrips.mp4">
            <source type="video/ogv" src="video/video.ogv">
            <source type="video/webm" src="video/video.webm">
        </video>
    </div>
</div>
@yield('content')

{{--================================================================================== Footer ===========================================================================--}}
<footer class="bg-dark type-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="footer-block">
                    <img src="{{ asset('images/sylhet.png') }}" alt="" class="logo-footer">
                    <div class="f_text color-grey-7">Let's Travel
                    </div>
                    <div class="footer-share">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                        <a href="#"><span class="fa fa-pinterest"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-sm-6 no-padding">
                <div class="footer-block">
                    <h6>Travel News</h6>
                    <div class="f_news clearfix">
                        <a class="f_news-img black-hover" href="#">
                            <img class="img-responsive" src="{{ asset('frontend/img/home_6/news_1.jpg') }}" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="f_news-content">
                            <a class="f_news-tilte color-white link-red" href="#">amazing place</a>
                            <span class="date-f">Mar 18, 2015</span>
                            <a href="#" class="r-more">read more</a>
                        </div>
                    </div>
                    <div class="f_news clearfix">
                        <a class="f_news-img black-hover" href="#">
                            <img class="img-responsive" src="{{ asset('frontend/img/home_6/news_2.jpg') }}" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="f_news-content">
                            <a class="f_news-tilte color-white link-red" href="#">amazing place</a>
                            <span class="date-f">Mar 18, 2015</span>
                            <a href="#" class="r-more">read more</a>
                        </div>
                    </div>
                    <div class="f_news clearfix">
                        <a class="f_news-img black-hover" href="#">
                            <img class="img-responsive" src="{{ asset('frontend/img/home_6/news_1.jpg') }}" alt="">
                            <div class="tour-layer delay-1"></div>
                        </a>
                        <div class="f_news-content">
                            <a class="f_news-tilte color-white link-red" href="#">amazing place</a>
                            <span class="date-f">Mar 18, 2015</span>
                            <a href="#" class="r-more">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="footer-block">
                    <h6>Tags:</h6>
                    <a href="#" class="tags-b">flights</a>
                    <a href="#" class="tags-b">traveling</a>
                    <a href="#" class="tags-b">sale</a>
                    <a href="#" class="tags-b">cruises</a>
                    <a href="#" class="tags-b">cars</a>
                    <a href="#" class="tags-b">hotels</a>
                    <a href="#" class="tags-b">tours</a>
                    <a href="#" class="tags-b">booking</a>
                    <a href="#" class="tags-b">countries</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="footer-block">
                    <h6>Contact Info</h6>
                    <div class="contact-info">
                        <div class="contact-line color-grey-3"><i class="fa fa-map-marker"></i><span>Aenean vulputate porttitor</span>
                        </div>
                        <div class="contact-line color-grey-3"><i class="fa fa-phone"></i><a href="tel:93123456789">+93
                                123 456 789</a></div>
                        <div class="contact-line color-grey-3"><i class="fa fa-envelope-o"></i><a href="mailto:">letstravel@mail.com</a>
                        </div>
                        <div class="contact-line color-grey-3"><i class="fa fa-globe"></i><a href="#">let’s_travel@world.com</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-link bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <span>&copy; All rights reserved. Syltrips</span> <span id="dateTime"></span>
                    </div>
                    <ul>
                        <li><a class="link-aqua" href="#">Privacy Policy </a></li>
                        <li><a class="link-aqua" href="#">About Us</a></li>
                        <li><a class="link-aqua" href="#">Support </a></li>
                        <li><a class="link-aqua" href="#">FAQ</a></li>
                        <li><a class="link-aqua" href="#">Blog</a></li>
                        <li><a class="link-aqua" href="#"> Forum</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('frontend/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('frontend/js/idangerous.swiper.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.viewportchecker.min.js') }}"></script>
<script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.mousewheel.min.js') }}"></script>
<script src="{{ asset('frontend/js/all.js') }}"></script>
<script>
    var today = new Date();
    //var date = today.getDate()+'/'+(today.getMonth()+1)+'/'+today.getFullYear();
    document.getElementById("dateTime").innerHTML = today;
</script>
</body>

<!-- Mirrored from demo.nrgthemes.com/projects/travel/index_9.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Nov 2019 10:17:41 GMT -->
</html>
