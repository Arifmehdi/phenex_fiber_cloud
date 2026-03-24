<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="@yield('title')" />
<meta name="keywords" content="charity,crowdfunding,nonprofit,orphan,Poor,funding,fundrising,ngo,children" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>@yield('title')</title>

<!-- Favicon and Touch Icons -->
<link href="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()]) }}" rel="shortcut icon" type="image/png">
<link href="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()]) }}" rel="apple-touch-icon">
<link href="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()]) }}" rel="apple-touch-icon" sizes="72x72">
<link href="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()]) }}" rel="apple-touch-icon" sizes="114x114">
<link href="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()]) }}" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="{{ asset('frontend') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="{{ asset('frontend') }}/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="{{ asset('frontend') }}/css/animate.css" rel="stylesheet" type="text/css">
<link href="{{ asset('frontend') }}/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{ asset('frontend') }}/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{ asset('frontend') }}/css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{ asset('frontend') }}/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{ asset('frontend') }}/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{ asset('frontend') }}/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="{{ asset('frontend') }}/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="{{ asset('frontend') }}/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="{{ asset('frontend') }}/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="{{ asset('frontend') }}/css/colors/theme-skin-orange.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="{{ asset('frontend') }}/js/jquery-2.2.4.min.js"></script>
<script src="{{ asset('frontend') }}/js/jquery-ui.min.js"></script>
<script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{ asset('frontend') }}/js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{ asset('frontend') }}/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="{{ asset('frontend') }}/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- Analytics -->
@if(!empty($ws->google_analytics_code)){!! $ws->google_analytics_code !!}@endif
@if(!empty($ws->google_search_console)){!! $ws->google_search_console !!}@endif
@if(!empty($ws->facebook_pixel_code)){!! $ws->facebook_pixel_code !!}@endif
@stack('css')

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  {{--<div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div> --}}
  
  <!-- Header -->
    @include('website.layouts.header')
      
    <!-- Start main-content -->
    <div class="main-content">
      @yield('content')



  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
  @include('website.layouts.footer')
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{ asset('frontend') }}/js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{ asset('frontend') }}/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"88f4fa328f314d4c95a104b4a60b2313","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>
</html>