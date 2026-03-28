@extends('website.layouts.master')

@section('title', 'Home | ' .env('APP_NAME'))

@section('meta')
<meta name="description"
    content="North Bengal offers premium dairy products, latest news, and world-class services. Explore our departments and services with ease.">
<meta name="keywords" content="North Bengal, dairy products, latest news, services, departments, quality dairy">
<meta property="og:title" content="Home - North Bengal">
<meta property="og:description"
    content="Discover North Bengal’s quality dairy products, latest news, and world-class services.">
<meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/home-banner.png') }}">
<meta property="og:type" content="website">
<meta name="robots" content="index, follow">
@endsection

@push('css')

@endpush

@section('content')
     <div class="banner layer"><img src="{{ asset('frontend')}}/assets/img/media/banner-shape.png" alt="" class="banner-shape">
        <div class="grid-animation">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <p class="sub-title">Fiber Cloud</p>
                        <h1>{{ $sliders->title }}</h1>
                        <p>{{ $sliders->description }}</p>

                        {{--<div class="banner-btn-group">
                            <a href="price.html" class="btn">
                                <img src="{{ asset('frontend')}}/assets/img/icons/btn-svg.svg" alt="" class="svg">
                                Get Fiber Cloud
                            </a> 
                            <a href="https://www.youtube.com/watch?v=ni5hRK1ehzk" class="mfp-iframe video-btn"><span><i
                                class="fa fa-play"></i></span> 
                                See Video
                            </a>
                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img d-none d-xl-block">
                        <img src="{{ asset('frontend')}}/assets/img/media/main-img.png" alt="main img" data-rjs="2" class="main-img"> 
                        <img src="{{ route('imagecache', ['template'=>'original','filename' => $sliders->fi()]) }}" alt="Shield" data-rjs="2" class="shield-img">
                        {{--<img src="{{ asset('frontend')}}/assets/img/media/shield.png" alt="Shield" data-rjs="2" class="shield-img"> --}}
                        <img src="{{ asset('frontend')}}/assets/img/media/man1.png" alt="Man1"data-rjs="2" class="man1"> 
                        <img src="{{ asset('frontend')}}/assets/img/media/man2.png" alt="Man2" data-rjs="2" class="man2"> 
                        <img src="{{ asset('frontend')}}/assets/img/media/man3.png" alt="Man3" data-rjs="2" class="man3">
                        <img src="{{ asset('frontend')}}/assets/img/media/man4.png" alt="Man4" data-rjs="2" class="man4"></div>
                    <div class="banner-img-responsive d-block d-xl-none"><img src="{{ asset('frontend')}}/assets/img/media/banner-img.png"
                            data-rjs="2" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <section class="online-thread pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>{{ $ws->service_title }}</h2>
                        <p>{!! $ws->service_subtitle !!}</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pattern-wrap"><img src="{{ asset('frontend')}}/assets/img/media/threat-pattern.png" alt=""
                    class="pattern">
                @forelse ($departments as $department)
                <div class="col-lg-4 col-md-6">
                    <div class="single-online-thread">
                        <div class="img"><img src="{{ route('imagecache', ['template'=>'original','filename' => $department->fi()]) }}" data-rjs="2" alt=""></div>
                        <div class="content">
                            <h4>{{$department->name_en}}</h4>
                            <p>{{$department->excerpt_en}}</p>
                        </div>
                    </div>
                </div>
                @empty 
                <p>There no slider available now. </p>
                @endforelse
                {{--<div class="col-lg-4 col-md-6">
                    <div class="single-online-thread">
                        <div class="img"><img src="{{ asset('frontend')}}/assets/img/icons/threat1.png" data-rjs="2" alt=""></div>
                        <div class="content">
                            <h4>Identity Theft</h4>
                            <p>Data thieves look unprotected devices and those that do not use encryption are easy for
                                targets.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-online-thread">
                        <div class="img"><img src="{{ asset('frontend')}}/assets/img/icons/threat2.png" data-rjs="2" alt=""></div>
                        <div class="content">
                            <h4>Virus & Phishing</h4>
                            <p>Data thieves look unprotected devices and those that do not use encryption are easy for
                                targets.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-online-thread">
                        <div class="img"><img src="{{ asset('frontend')}}/assets/img/icons/threat3.png" data-rjs="2" alt=""></div>
                        <div class="content">
                            <h4>Online Hacking</h4>
                            <p>Data thieves look unprotected devices and those that do not use encryption are easy for
                                targets.</p>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </section>
    <section class="use-govpn pt-120 pb-120" data-bg-img="{{ asset('frontend')}}/assets/img/media/use-govpn-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>{{ $ws->why_fb_cloud_title }}</h2>
                        <p>{!! $ws->why_fb_cloud_subtitle !!}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-wrap">
                        <ul class="nav" role="tablist">
                            <li class="nav-item"><a class="active" data-toggle="tab" href="#basic-protection"
                                    role="tab">
                                    <div class="img"><img src="{{ asset('frontend')}}/assets/img/icons/use1.png" alt=""></div>
                                    <h5>Basic Protection</h5>
                                </a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#browsing-history" role="tab">
                                    <div class="img"><img src="{{ asset('frontend')}}/assets/img/icons/use2.png" alt=""></div>
                                    <h5>Browsing History</h5>
                                </a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#restricted-content" role="tab">
                                    <div class="img"><img src="{{ asset('frontend')}}/assets/img/icons/use3.png" alt=""></div>
                                    <h5>Restricted Content</h5>
                                </a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#browse-privately" role="tab">
                                    <div class="img"><img src="{{ asset('frontend')}}/assets/img/icons/use4.png" alt=""></div>
                                    <h5>Browse Privately</h5>
                                </a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="basic-protection" role="tabpanel">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="tab-img"><img src="{{ asset('frontend')}}/assets/img/media/tab1.png" data-rjs="2" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="section-title style--two">
                                            <h2>{{ $ws->about_title}}</h2>
                                            <p>{!! $ws->about_subtitle !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="browsing-history" role="tabpanel">
                                <div class="row align-items-center">
                                    @php
                                        $imagePath = $ws->about_img
                                            ? asset('storage/s/' . $ws->about_img)
                                            : asset('frontend/assets/img/media/tab2.png');
                                    @endphp
                                    <div class="col-lg-6">
                                        <div class="tab-img"><img src="{{ $imagePath }}" data-rjs="2" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="section-title style--two">
                                            <h2>Take Your Browsing To History your grave</h2>
                                            <p>Data thieves look for unprotected devices & those that do not use to this
                                                encryption are easy targets. These types of attacks are common, and it’s
                                                difficult to avoid them without protection.</p>
                                        </div>
                                        <ul class="list-dot list-unstyled">
                                            <li>
                                                <h5>Safe Browsing</h5>
                                                <p>It is easy for advertisers to influence your behavior you expose all
                                                    browsing habits. show you higher more affluent city.</p>
                                            </li>
                                            <li>
                                                <h5>Hide History</h5>
                                                <p>It is easy for advertisers to influence your behavior you expose all
                                                    browsing habits. show you higher more affluent city.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="restricted-content" role="tabpanel">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="tab-img"><img src="{{ asset('frontend')}}/assets/img/media/tab1.png" data-rjs="2" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="section-title style--two">
                                            <h2>Unblock geo restricted content</h2>
                                            <p>Data thieves look for unprotected devices & those that do not use to this
                                                encryption are easy targets. These types of attacks are common, and it’s
                                                difficult to avoid them without protection.</p>
                                        </div>
                                        <ul class="list-dot list-unstyled">
                                            <li>
                                                <h5>Safe Content</h5>
                                                <p>It is easy for advertisers to influence your behavior you expose all
                                                    browsing habits. show you higher more affluent city.</p>
                                            </li>
                                            <li>
                                                <h5>Secure access</h5>
                                                <p>It is easy for advertisers to influence your behavior you expose all
                                                    browsing habits. show you higher more affluent city.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="browse-privately" role="tabpanel">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="tab-img"><img src="{{ asset('frontend')}}/assets/img/media/tab2.png" alt=""></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="section-title style--two">
                                            <h2>Stop tracking & browse privately</h2>
                                            <p>Data thieves look for unprotected devices & those that do not use to this
                                                encryption are easy targets. These types of attacks are common, and it’s
                                                difficult to avoid them without protection.</p>
                                        </div>
                                        <ul class="list-dot list-unstyled">
                                            <li>
                                                <h5>Stop Tracking</h5>
                                                <p>It is easy for advertisers to influence your behavior you expose all
                                                    browsing habits. show you higher more affluent city.</p>
                                            </li>
                                            <li>
                                                <h5>Safe Browsing</h5>
                                                <p>It is easy for advertisers to influence your behavior you expose all
                                                    browsing habits. show you higher more affluent city.</p>
                                            </li>
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
    <section class="cta" data-bg-img="{{ asset('frontend')}}/assets/img/media/cta-bg.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="cta-content text-center">
                        <h3>Download Your Free Trial<br>And Make Internet Great Again!</h3><a href="price.html"
                            class="btn"><img src="{{ asset('frontend')}}/assets/img/icons/btn-svg.svg" alt="" class="svg">get started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-120 pb-120" data-bg-img="{{ asset('frontend')}}/assets/img/media/price-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>{{ $ws->price_title }}</h2>
                        <p>{!! $ws->price_subtitle !!}</p>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-xl-3 col-sm-6">
                    <div class="price-box">
                        <div class="price-head">
                            <p>Basic Plan</p>
                            <div class="plan">
                                <h5>Get 1 Year Plan</h5>
                            </div>
                        </div>
                        <div class="price-body">
                            <div class="price"><span class="currency">$</span> <span class="value">3.49</span> <span
                                    class="duration">/yrs</span></div>
                            <p>Save 10%</p>
                            <ul>
                                <li><del>$430.20</del> <span>&nbsp;$125.99 billed</span></li>
                                <li>every 1 years</li>
                            </ul><a href="price.html" class="btn btn-black btn-sm btn-shadow"><img
                                    src="{{ asset('frontend')}}/assets/img/icons/btn-svg.svg" alt="" class="svg">buy now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="price-box active">
                        <div class="price-head">
                            <p>Premium Plan</p>
                            <div class="plan">
                                <h5>Get 3 Year Plan</h5>
                            </div>
                        </div>
                        <div class="price-body">
                            <div class="price"><span class="currency">$</span> <span class="value">4.49</span> <span
                                    class="duration">/yrs</span></div>
                            <p>Save 30%</p>
                            <ul>
                                <li><del>$430.20</del> <span>&nbsp;$125.99 billed</span></li>
                                <li>every 3 years</li>
                            </ul><a href="price.html" class="btn btn-black btn-sm btn-shadow"><img
                                    src="{{ asset('frontend')}}/assets/img/icons/btn-svg.svg" alt="" class="svg">buy now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="price-box">
                        <div class="price-head">
                            <p>standard Plan</p>
                            <div class="plan">
                                <h5>Get 5 Year Plan</h5>
                            </div>
                        </div>
                        <div class="price-body">
                            <div class="price"><span class="currency">$</span> <span class="value">6.49</span> <span
                                    class="duration">/yrs</span></div>
                            <p>Save 50%</p>
                            <ul>
                                <li><del>$430.20</del> <span>&nbsp;$125.99 billed</span></li>
                                <li>every 5 years</li>
                            </ul><a href="price.html" class="btn btn-black btn-sm btn-shadow"><img
                                    src="{{ asset('frontend')}}/assets/img/icons/btn-svg.svg" alt="" class="svg">buy now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="price-box">
                        <div class="price-head">
                            <p>gold Plan</p>
                            <div class="plan">
                                <h5>Get 7 Year Plan</h5>
                            </div>
                        </div>
                        <div class="price-body">
                            <div class="price"><span class="currency">$</span> <span class="value">9.49</span> <span
                                    class="duration">/yrs</span></div>
                            <p>Save 70%</p>
                            <ul>
                                <li><del>$430.20</del> <span>&nbsp;$125.99 billed</span></li>
                                <li>every 7 years</li>
                            </ul><a href="price.html" class="btn btn-black btn-sm btn-shadow"><img
                                    src="{{ asset('frontend')}}/assets/img/icons/btn-svg.svg" alt="" class="svg">buy now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="payment-info text-center mt-n1">
                        <p>30-Day Money Back Guarantee For New Purchases</p><img src="{{ asset('frontend')}}/assets/img/media/pay-img.png"
                            data-rjs="2" alt="Payment Info">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="newsletter" data-bg-img="{{ asset('frontend')}}/assets/img/media/subscribe-bg.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe-newsletter text-center">
                        <h3>Subscribe Newsletter</h3>
                        <form
                            action="#"
                            class="newsletter-form" target="_blank"><input type="email" class="form-control"
                                placeholder="Email Address Here..."> <button type="submit"><img
                                    src="{{ asset('frontend')}}/assets/img/icons/paper.svg" alt="" class="svg"></button></form>
                        <p>Daily offers software many more update report</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="pt-120 pb-120 pb-xl-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="all-country-img"><img src="{{ asset('frontend')}}/assets/img/media/all-country-img.png" data-rjs="2" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title style--two">
                        <h2>Finds Fiber Cloud Services Where You Need</h2>
                        <p>Data thieves look for unprotected devices & those that do not use to this encryption are easy
                            targets. These types of attacks are common, and it’s difficult to avoid them without
                            protection.</p>
                    </div>
                    <ul class="list-dot list-unstyled">
                        <li>
                            <h5>Global Network</h5>
                            <p>It is easy for advertisers to influence your behavior you expose all browsing habits.
                                show you higher more affluent city.</p>
                        </li>
                        <li>
                            <h5>Support 369+ Country</h5>
                            <p>Onlines businesses mights show you higher this they see you are in a more affluent city.
                                <a href="#">Views All County.</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->
    <section class="blog pt-120 pb-70" data-bg-img="{{ asset('frontend')}}/assets/img/media/blog-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>{{ $ws->tips_title }}</h2>
                        <p>{!! $ws->tips_subtitle !!}</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @forelse ($newses as $news)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog"><a href="blog-details.html" class="blog-img"><img
                                src="{{ route('imagecache', ['template'=>'cpmd','filename' => $news->fi()]) }}" alt="" data-rjs="2"></a>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul class="list-inline">
                                    <li><a href="#" class="posted-by"><img src="{{ asset('frontend')}}/assets/img/icons/user.svg" alt=""
                                                class="svg"> {{ $news->category->name }}</a></li>
                                    <li><a href="#" class="posted-on"><img src="{{ asset('frontend')}}/assets/img/icons/calendar.svg" alt=""
                                                class="svg">{{ $news->created_at->format('F d, Y') }}</a></li>
                                </ul>
                            </div>
                            <h4><a href="#">{{ \Illuminate\Support\Str::limit($news->title, 45, '...') }}</a></h4><a
                                href="#" class="btn-link"><img src="{{ asset('frontend')}}/assets/img/icons/btn-svg2.svg"
                                    alt="" class="svg">Read More</a>
                        </div>
                    </div>
                </div>
                @empty
                <p>There have no new blogs</p>
                @endforelse
                {{--<div class="col-lg-4 col-md-6">
                    <div class="single-blog"><a href="blog-details.html" class="blog-img"><img
                                src="{{ asset('frontend')}}/assets/img/blog/blog_img.png" alt="" data-rjs="2"></a>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul class="list-inline">
                                    <li><a href="#" class="posted-by"><img src="{{ asset('frontend')}}/assets/img/icons/user.svg" alt=""
                                                class="svg"> Provpn</a></li>
                                    <li><a href="#" class="posted-on"><img src="{{ asset('frontend')}}/assets/img/icons/calendar.svg" alt=""
                                                class="svg"> May 26, 2020</a></li>
                                </ul>
                            </div>
                            <h4><a href="blog-details.html">A single speed test is fun them may actually</a></h4><a
                                href="blog-details.html" class="btn-link"><img src="{{ asset('frontend')}}/assets/img/icons/btn-svg2.svg"
                                    alt="" class="svg">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog"><a href="blog-details.html" class="blog-img"><img
                                src="{{ asset('frontend')}}/assets/img/blog/blog_img2.png" alt="" data-rjs="2"></a>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul class="list-inline">
                                    <li><a href="#" class="posted-by"><img src="{{ asset('frontend')}}/assets/img/icons/user.svg" alt=""
                                                class="svg"> Provpn</a></li>
                                    <li><a href="#" class="posted-on"><img src="{{ asset('frontend')}}/assets/img/icons/calendar.svg" alt=""
                                                class="svg"> May 26, 2020</a></li>
                                </ul>
                            </div>
                            <h4><a href="blog-details.html">What Security Not Really Collect Analyze?</a></h4><a
                                href="blog-details.html" class="btn-link"><img src="{{ asset('frontend')}}/assets/img/icons/btn-svg2.svg"
                                    alt="" class="svg">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog"><a href="blog-details.html" class="blog-img"><img
                                src="{{ asset('frontend')}}/assets/img/blog/blog_img3.png" alt="" data-rjs="2"></a>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul class="list-inline">
                                    <li><a href="#" class="posted-by"><img src="{{ asset('frontend')}}/assets/img/icons/user.svg" alt=""
                                                class="svg"> Provpn</a></li>
                                    <li><a href="#" class="posted-on"><img src="{{ asset('frontend')}}/assets/img/icons/calendar.svg" alt=""
                                                class="svg"> May 26, 2020</a></li>
                                </ul>
                            </div>
                            <h4><a href="blog-details.html">Phishing and Protection for Remote Workers</a></h4><a
                                href="blog-details.html" class="btn-link"><img src="{{ asset('frontend')}}/assets/img/icons/btn-svg2.svg"
                                    alt="" class="svg">Read More</a>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </section>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="logo-carousel owl-carousel" data-owl-items="6" data-owl-margin="30"
                        data-owl-autoplay="false"
                        data-owl-responsive='{"0": {"items": "2"}, "500": {"items": "3"}, "767": {"items": "4"}, "992": {"items": "5"}, "1200": {"items": "6"}}'>
                        @forelse ($galleries as $gallery)
                        <div class="single-logo"><img src="{{ asset('storage/galleries/' . $gallery->featured_image) }}" alt=""></div>
                        @empty 
                        <p>There have no brands to display.</p>
                        @endforelse
                        {{--<div class="single-logo"><img src="{{ asset('frontend')}}/assets/img/media/logo1.png" alt=""></div>
                        <div class="single-logo"><img src="{{ asset('frontend')}}/assets/img/media/logo2.png" alt=""></div>
                        <div class="single-logo"><img src="{{ asset('frontend')}}/assets/img/media/logo3.png" alt=""></div>
                        <div class="single-logo"><img src="{{ asset('frontend')}}/assets/img/media/logo4.png" alt=""></div>
                        <div class="single-logo"><img src="{{ asset('frontend')}}/assets/img/media/logo5.png" alt=""></div>
                        <div class="single-logo"><img src="{{ asset('frontend')}}/assets/img/media/logo6.png" alt=""></div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@push('js')

@endpush