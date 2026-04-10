<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()]) }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()]) }}">
    <link rel="icon" href="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()]) }}" type="image/x-icon">
    
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&amp;family=Rubik:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/plugins/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/custom.css">

    <!-- Analytics -->
    @if(!empty($ws->google_analytics_code)){!! $ws->google_analytics_code !!}@endif
    @if(!empty($ws->google_search_console)){!! $ws->google_search_console !!}@endif
    @if(!empty($ws->facebook_pixel_code)){!! $ws->facebook_pixel_code !!}@endif
    @stack('css')
</head>

<body>
    {{--<div class="preloader">
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
    </div>--}}
    <div class="offcanvas_menu">
        <div class="offcanvas-overlay fixed-top w-100 h-100"></div>
        <div class="offcanvas-wrapper fixed-top h-100">
            <div class="offcanvas-close position-absolute"><i class="fa fa-times"></i></div>
            <div class="offcanvas-content">
                <div class="widget widget_logo"><a href="#"><img src="{{ asset('frontend')}}/assets/img/sticky-logo.png" alt=""></a></div>
                <div class="widget widget_about">
                    <h3 class="widget-title">About us</h3>
                    <p>It takes more than a private internet browser to go incognito. We’ll make your real IP address.
                    </p>
                </div>
                <div class="widget widget_ip">
                    <h3 class="widget-title">Your IP Address:</h3>
                    <ul>
                        <li>103.237.76.105</li>
                    </ul>
                </div>
                <div class="widget widget_about">
                    <h3 class="widget-title">Your ISP:</h3>
                    <p>KS Network Limited</p>
                </div>
                <div class="widget widget_contact">
                    <h3 class="widget-title">Get In Touch</h3>
                    <ul>
                        <li><span class="icon"><i class="fa fa-envelope"></i> </span><a
                                href="mailto:Your@gmail.com">Your@gmail.com</a></li>
                        <li><span class="icon"><i class="fa fa-phone"></i> </span><a href="callto:(202)2555421">(202)
                                255 5421</a></li>
                        <li><span class="icon"><i class="fa fa-map-signs"></i> </span>27 Division St, New York NY 10002,
                            USA</li>
                    </ul>
                </div>
            </div>
            <div class="widget widget_social_links border-top mt-5">
                <div class="social-links"><a class="d-inline-flex align-items-center justify-content-center"
                        href="https://www.facebook.com/"><i class="fa fa-facebook"></i> </a><a
                        class="d-inline-flex align-items-center justify-content-center" href="https://twitter.com/"><i
                            class="fa fa-twitter"></i> </a><a
                        class="d-inline-flex align-items-center justify-content-center"
                        href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i> </a><a
                        class="d-inline-flex align-items-center justify-content-center"
                        href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></div>
            </div>
        </div>
    </div>
    @include('website.layouts.header')
    @yield('content')
    
    <!-- Global CTA Section - Only show on about page -->
    @php
        $routeName = Route::currentRouteName();
        $slug = request()->segment(2) ?? '';
        $showGlobalCta = in_array($routeName, ['page', 'page_content']) && in_array($slug, ['about', 'about-us']);
    @endphp
    @if($showGlobalCta)
        @include('frontend.components.cta-global')
    @endif
    
    @include('website.layouts.footer')
    <a href="#" class="back-to-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <script src="{{ asset('frontend')}}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('frontend')}}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend')}}/assets/js/menu.min.js"></script>
    <script src="{{ asset('frontend')}}/assets/plugins/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend')}}/assets/plugins/retinajs/retina.min.js"></script>
    <script src="{{ asset('frontend')}}/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontend')}}/assets/plugins/countdown-timer/countdown.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjkssBA3hMeFtClgslO2clWFR6bRraGz0"></script>
    <script src="{{ asset('frontend')}}/assets/js/main.js"></script>
    <script src="{{ asset('frontend')}}/assets/js/custom.js"></script>
</body>
</html>