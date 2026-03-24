@extends('website.layouts.master')

@section('title', 'Home -' .env('APP_NAME'))

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
    <!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider rev_slider_default" data-version="5.0">
            <ul>


              @forelse($sliders as $index => $slider)
                  <li
                      data-index="rs-{{ $index + 1 }}"
                      data-transition="slidingoverlayhorizontal"
                      data-slotamount="default"
                      data-masterspeed="default"
                      data-thumb="{{ route('imagecache', ['template'=>'original','filename' => $slider->fi()]) }}"
                  >
                      <!-- MAIN IMAGE -->
                      <img
                          src="{{ route('imagecache', ['template'=>'original','filename' => $slider->fi()]) }}"
                          alt="Slider Image"
                          class="rev-slidebg"
                          data-bgposition="center center"
                          data-bgfit="cover"
                          data-bgrepeat="no-repeat"
                          data-bgparallax="10"
                      >

                      <!-- LAYER 1 -->
                      {{--<div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                          data-x="left"
                          data-hoffset="30"
                          data-y="middle"
                          data-voffset="-110"
                          data-fontsize="110"
                          data-lineheight="120"
                          data-start="1000"
                          style="font-weight:700;">
                          {{ $slider->title ?? 'Donate' }}
                      </div>--}}

                      <!-- LAYER 2 -->
                      <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pl-20 pr-20"
                          data-x="left"
                          data-hoffset="35"
                          data-y="middle"
                          data-voffset="-25"
                          data-fontsize="35"
                          data-lineheight="54"
                          data-start="1100"
                          style="font-weight:600;">
                          {{ $slider->title ?? 'For the poor children' }}
                      </div>

                      <!-- LAYER 3 -->
                      <div class="tp-caption tp-resizeme text-white"
                          data-x="left"
                          data-hoffset="35"
                          data-y="middle"
                          data-voffset="35"
                          data-fontsize="16"
                          data-lineheight="28"
                          data-start="1400">
                          {{ strip_tags($slider->description ?? 'Every day we bring hope to millions of children.') }}
                      </div>

                      <!-- BUTTON -->
                      <div class="tp-caption tp-resizeme"
                          data-x="left"
                          data-hoffset="35"
                          data-y="middle"
                          data-voffset="95"
                          data-start="1600">
                          <a href="{{ $slider->button_url ?? '#' }}"
                            class="btn btn-colored btn-lg btn-theme-colored pl-20 pr-20">
                              {{ $slider->button_text ?? 'Donate Now' }}
                          </a>
                      </div>
                  </li>
              @empty
                  <li>
                      <div class="text-center p-50">
                          <strong>No sliders available</strong>
                      </div>
                  </li>
              @endforelse

              {{--<!-- SLIDE 2 -->
              <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg23.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('frontend') }}/images/bg/bg23.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase  bg-dark-transparent-6 text-white font-raleway pl-30 pr-30"
                  id="rs-2-layer-1"
                
                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-90']" 
                  data-fontsize="['28']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">For the poor children 
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                  id="rs-2-layer-2"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-20']"
                  data-fontsize="['48']"
                  data-lineheight="['70']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">raise your helping hand 
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white text-center" 
                  id="rs-2-layer-3"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['50']"
                  data-fontsize="['16','18',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-2-layer-4"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['115']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-default btn-circled btn-transparent pl-20 pr-20" href="{{ route('donate') }}">Donate Now</a> 
                </div>
              </li>

              <!-- SLIDE 3 -->
              <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg24.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 3" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('frontend') }}/images/bg/bg24.jpg"  alt=""  data-bgposition="top 30%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pr-20 pl-20"
                  id="rs-3-layer-1"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-90']" 
                  data-fontsize="['64']"
                  data-lineheight="['72']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;"><span class="">Help</span> The Poor
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                  id="rs-3-layer-2"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['-25']" 
                  data-fontsize="['32']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">For Their Better Future 
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white text-right" 
                  id="rs-3-layer-3"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['30']"
                  data-fontsize="['16','18',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-3-layer-4"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['95']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored pl-20 pr-20" href="#">Donate Now</a> 
                </div>
              </li>--}}

            </ul>
          </div>
          <!-- end .rev_slider -->
        </div>
        <!--  Revolution slider scriopt -->
        <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
          $(document).ready(function(e) {
            $(".rev_slider_default").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                  touchenabled: "on",
                  swipe_threshold: 75,
                  swipe_min_touches: 1,
                  swipe_direction: "horizontal",
                  drag_block_vertical: false
                },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                  tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title"></span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [700, 768, 960, 720],
              lazyType: "none",
              parallax: {
                origo: "slidercenter",
                speed: 1000,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
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
          });
        </script>
        <!-- Slider Revolution Ends -->
      </div>
    </section>
    <!-- title :1115 -->
    <!-- Section: home-boxes -->
    <section class="layer-overlay overlay-theme-colored-8" data-bg-img="{{ asset('frontend') }}/images/bg/bg10.jpg">
      <div class="container pt-0 pb-0">
        <div class="section-content">
          <div class="row" data-margin-top="-90px">
            @forelse($departments as $department)
            <div class="col-sm-12 col-md-4">
              <div class="icon-box p-40 iconbox-theme-colored bg-white border-1px text-center">
                <a class="icon" href="#">
                  {{--<i class="flaticon-charity-world-in-your-hands font-48 font-weight-100"></i>--}}
                      <img src="{{ route('imagecache', ['template'=>'original','filename' => $department->fi()]) }}"
                      style="width:48px; height:48px; object-fit:contain;"
                      alt="Icon">
                </a>
                <h4 class="text-uppercase mt-0">{{ $department->name_en }}</h4>
                <p>{{ \Illuminate\Support\Str::limit(strip_tags($department->excerpt_en), 120, '...') }}</p>
              </div>
            </div>
            @empty 
            <p>There have no service yet</p>
            @endforelse

            {{--<div class="col-sm-12 col-md-4">
              <div class="icon-box p-40 iconbox-theme-colored bg-white border-1px text-center">
                <a class="icon" href="#">
                  <i class="flaticon-charity-shaking-hands-inside-a-heart font-48 font-weight-100"></i>
                </a>
                <h4 class="text-uppercase mt-0">Latest Tools</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="icon-box p-40 iconbox-theme-colored bg-white border-1px text-center">
                <a class="icon" href="#">
                  <i class="flaticon-charity-child-hand-on-adult-hand font-48 font-weight-100"></i>
                </a>
                <h4 class="text-uppercase mt-0">Quick Delivery</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non nulla placeat, odio, qui dicta alias.</p>
              </div>
            </div>--}}

          </div>
        </div>
      </div>
    </section>

    <!-- Section: About -->
    <section id="about">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 mt-20">
              <div class="row">
                <div class="col-md-6 col-sm-6 pl-0">
                  <div class="img-hover-border mt-sm-40">
                    <img class="img-fullwidth" src="{{ asset('frontend') }}/images/about/about_001.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 pl-0 pr-0">
                  <div class="img-hover-border mt-sm-30">
                    <img class="img-fullwidth" src="{{ asset('frontend') }}/images/about/d2.jpg" alt="">
                  </div>
                  <div class="img-hover-border mt-15 mt-sm-30">
                    <img class="img-fullwidth" src="{{ asset('frontend') }}/images/about/about_003.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="about-details">
                <h2 class="font-36 mt-0"><span class="text-theme-colored">North Bangla Foundation</span>   </h2>
                <h3>Together We Build a Better Tomorrow</h3>
                <p>We are passionately committed to uplifting underprivileged communities across Northern Bangladesh by providing access to quality education, essential healthcare services, and comprehensive humanitarian assistance. Through our programs, we aim to empower children, women, and families, alleviate poverty, and create sustainable opportunities that transform lives and build stronger, healthier, and more resilient communities. </p>
                <div class="singnature mt-20">
                  <img src="{{ asset('frontend') }}/images/signature.png" alt="img1">
                </div>
                <a href="#" class="btn btn-flat btn-colored btn-theme-colored mt-15 mr-15">Read More</a><a href="#" class="btn btn-flat btn-colored btn-default btn-theme-colored mt-15">Get a Quote</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Causes -->
    <section id="causes" class="bg-silver-light">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-colored font-weight-600">Causes</span></h2>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
              <p>We work to support those in need by providing education, healthcare, and essential aid to <br>improve lives and build stronger communities.</p>
            </div>
          </div>
        </div>
        <div class="row multi-row-clearfix">
          <div class="owl-carousel-3col">
            @forelse($causes_for_homepage as $cause)
            <div class="item">
              <div class="causes bg-white maxwidth500 mb-30">
                <a href="{{ route('cause.details', $cause->slug) }}">
                  <div class="thumb">
                    @if($cause->image)
                      <img src="{{ asset('storage/' . $cause->image) }}" alt="{{ $cause->title }}" class="img-fullwidth">
                    @else
                      <img src="{{ asset('frontend') }}/images/project/no-image.png" alt="No Image" class="img-fullwidth">
                    @endif
                  </div>
                </a>
                <div class="causes-details clearfix border-bottom p-15 pt-15 pb-15">
                <ul class="list-inline font-20 font-weight-600 clearfix mb-5">
                  <li class="pull-left font-weight-400 text-black-333 pr-0">Raised: <span class="text-theme-colored font-weight-700">${{ number_format($cause->raised_amount, 2) }}</span></li>
                  <li class="pull-right font-weight-400 text-black-333 pr-0">Goal: <span class="text-theme-colored font-weight-700">${{ number_format($cause->goal_amount, 2) }}</span></li>
                </ul>
                @php
                    $progress = ($cause->goal_amount > 0) ? round(($cause->raised_amount / $cause->goal_amount) * 100) : 0;
                @endphp
                <h4 class="text-uppercase"><a href="{{ route('cause.details', $cause->slug) }}">{{ $cause->title }}</a></h4>
                  <div class="progress-item mt-0">
                    <div class="progress mb-0">
                      <div data-percent="{{ $progress }}" class="progress-bar"><span class="percent">{{ $progress }}%</span></div>
                    </div>
                  </div>
                  <p class="mt-20">
                      {{ \Illuminate\Support\Str::limit(strip_tags($cause->short_description), 150, '...') }}
                  </p>

                <a href="{{ asset('donate') }}" class="btn btn-default btn-theme-colored btn-xs font-16 mt-10"><i class="flaticon-charity-make-a-donation font-16 ml-5"></i> Donate <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                </div>
              </div>
            </div>
            @empty
            <div class="item">
                <p>No active causes found.</p>
            </div>
            @endforelse
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-dark-9" data-bg-img="images/bg/bg4.jpg" data-parallax-ratio="0.7">
      <div class="container pt-80 pb-80">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-smile mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="1054" class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Happy Donators</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-rocket mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="875" class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Success Mission</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-add-user mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="1248" class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Volunteer Reached</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-global mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="54" class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Globalization Work</h5>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Mission  -->
    <section>
      <div class="container pb-30">
        <div class="section-content">
          <div class="row">
            <div class="col-md-8 pb-sm-20">
              <h3 class="line-bottom mt-0">Our Mission</h3>
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box left media bg-silver-light border-1px border-theme-colored p-15 mb-20"> <a class="media-left pull-left flip" href="#"><i class="flaticon-charity-shaking-hands-inside-a-heart text-theme-colored"></i></a>
                    <div class="media-body">
                      <h4 class="font-15 text-uppercase">Save The children</h4>
                      <p>We work to protect underprivileged children by supporting their education, health, and basic needs so they can grow.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box left media bg-silver-light border-1px border-theme-colored p-15 mb-20"> <a class="media-left pull-left flip" href="#"><i class="flaticon-charity-shelter text-theme-colored"></i></a>
                    <div class="media-body">
                      <h4 class="font-15 text-uppercase">Help The Helpless</h4>
                      <p>We stand beside the poorest and most vulnerable people by providing food, clothing, medical support, and essential assistance in times of need.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box left media bg-silver-light border-1px border-theme-colored p-15 mb-20"> <a class="media-left pull-left flip" href="#"><i class="flaticon-charity-responsible-use-of-water text-theme-colored"></i></a>
                    <div class="media-body">
                      <h4 class="font-15 text-uppercase">Pure Water For Poor</h4>
                      <p>We help provide access to clean and safe drinking water in underserved communities to prevent disease and improve overall health.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box left media bg-silver-light border-1px border-theme-colored p-15 mb-20"> <a class="media-left pull-left flip" href="#"><i class="flaticon-charity-make-a-donation text-theme-colored"></i></a>
                    <div class="media-body">
                      <h4 class="font-15 text-uppercase">Donation for poor</h4>
                      <p>Your donation helps us support struggling families with food, medicine, education, and emergency relief, bringing hope and dignity to their lives.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <h3 class="line-bottom border-bottom mt-0">Upcoming Events</h3>
              <div class="event media sm-maxwidth400 border-bottom mt-5 mb-0 pt-10 pb-15">
                <div class="row">
                  <div class="col-xs-2 col-md-3 pr-0">
                    <div class="event-date text-center bg-theme-colored border-1px p-0 pt-10 pb-10 sm-custom-style">
                      <ul>
                        <li class="font-28 text-white font-weight-700">28</li>
                        <li class="font-18 text-white text-center text-uppercase">Feb</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xs-9 pr-10 pl-10">
                    <div class="event-content mt-10 p-5 pb-0 pt-0">
                      <h5 class="media-heading font-16 font-weight-600"><a href="#">Event: Help The Children</a></h5>
                      <ul class="list-inline font-weight-600 text-gray-dimgray">
                        <li><i class="fa fa-clock-o text-theme-colored"></i> 5.00 pm - 7.30 pm</li>
                        <li> <i class="fa fa-map-marker text-theme-colored"></i> 25 Dhaka, Bangladesh.</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="event media sm-maxwidth400 border-bottom mt-5 mb-0 pt-10 pb-15">
                <div class="row">
                  <div class="col-xs-2 col-md-3 pr-0">
                    <div class="event-date text-center bg-theme-colored border-1px p-0 pt-10 pb-10 sm-custom-style">
                      <ul>
                        <li class="font-28 text-white font-weight-700">26</li>
                        <li class="font-18 text-white text-center text-uppercase">OCT</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xs-9 pr-10 pl-10">
                    <div class="event-content mt-10 p-5 pb-0 pt-0">
                      <h5 class="media-heading font-16 font-weight-600"><a href="#">Event: Foods For Poor</a></h5>
                      <ul class="list-inline font-weight-600 text-gray-dimgray">
                        <li><i class="fa fa-clock-o text-theme-colored"></i> 6.00 pm - 8.30 pm</li>
                        <li> <i class="fa fa-map-marker text-theme-colored"></i> 25 Dhaka, Bangladesh</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="event media sm-maxwidth400 mt-5 mb-0 pt-10 pb-15">
                <div class="row">
                  <div class="col-xs-2 col-md-3 pr-0">
                    <div class="event-date text-center bg-theme-colored border-1px p-0 pt-10 pb-10 sm-custom-style">
                      <ul>
                        <li class="font-28 text-white font-weight-700">12</li>
                        <li class="font-18 text-white text-center text-uppercase">DEC</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xs-9 pr-10 pl-10">
                    <div class="event-content mt-10 p-5 pb-0 pt-0">
                      <h5 class="media-heading font-16 font-weight-600"><a href="#">Event: Save The Water</a></h5>
                      <ul class="list-inline font-weight-600 text-gray-dimgray">
                        <li><i class="fa fa-clock-o text-theme-colored"></i> 4.00 pm - 6.00 pm</li>
                        <li> <i class="fa fa-map-marker text-theme-colored"></i> 25 Dhaka, Bangladesh</li>
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
    
    <!-- Section: volunteers -->
    <section id="team" class="bg-silver-light">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-colored font-weight-600">volunteers</span></h2>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
                <p>
                Join North Bengal Foundation as a volunteer and be a part of meaningful change. <br>
                Your time and effort can help us support communities, bring hope, and build a better future together.
                </p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row multi-row-clearfix">

          @forelse($volunteers as $volunteer)
            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
              <div class="team-member clearfix">
                <div class="team-thumb">
                  <img alt="" src="{{ asset('storage/' . $volunteer->image) }}" class="img-fullwidth">
                  <div class="overlay">
                    <div class="content">
                      <p>{{ $volunteer->short_bio }}</p>
                    </div>
                  </div>
                </div>
                <div class="team-info bg-theme-colored">
                  <h3 class="mt-0 text-white">{{ $volunteer->name }}</h3>
                  <ul class="styled-icons icon-circled icon-theme-colored">
                    <li><a href="{{ $volunteer->fb_url }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="{{ $volunteer->twitter_url }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="{{ $volunteer->local_url }}" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            @empty 
            <p>Here is no volunteer</p>
            @endforelse 
          </div>
          <div class="col-12 text-center mt-30">
            <a href="{{ route('member.apply') }}" class="btn btn-theme-colored btn-lg mr-2">
              <i class="fa fa-user-plus"></i> Be a Member
            </a>
            <a href="{{ route('membership') }}" class="btn btn-default btn-lg">
              <i class="fa fa-users"></i> View All Members
            </a>
          </div>
        </div>
      </div>
    </section>



    <!-- divider: Emergency Services -->
    <x-emergency-service title="How you can help us" />

    <!-- Section: Become a Volunteer -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h3 class="bg-theme-colored p-15 pl-30 mb-0 text-white">Become a Volunteer</h3>
              <form id="volunteer_apply_form" class="bg-light p-30 pb-15" name="job_apply_form" action=#" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="form_name">Name <small>*</small></label>
                      <input id="form_name" name="form_name" type="text" placeholder="Enter Name" required="" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="form_email">Email <small>*</small></label>
                      <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                    </div>
                  </div>
                </div>
                <div class="row">               
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="form_sex">Sex <small>*</small></label>
                      <select id="form_sex" name="form_sex" class="form-control required">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="form_branch">Choose Branch <small>*</small></label>
                      <select id="form_branch" name="form_branch" class="form-control required">
                        <option value="Dhaka">Dhaka</option>
                        <option value="Mymensingh">Mymensingh</option>
                        <option value="Khulna">Khulna</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="form_message">Message <small>*</small></label>
                  <textarea id="form_message" name="form_message" class="form-control required" rows="3" placeholder="Your cover letter/message sent to the employer"></textarea>
                </div>
                <div class="form-group">
                  <label for="form_attachment">C/V Upload</label>
                  <input id="form_attachment" name="form_attachment" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
                </div>
                <div class="form-group">
                  <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                  <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
                </div>
              </form>
              <!-- Job Form Validation-->
              <script type="text/javascript">
                $("#volunteer_apply_form").validate({
                  submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                      dataType:  'json',
                      success: function(data) {
                        if( data.status == 'true' ) {
                          $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                      }
                    });
                  }
                });
              </script>
            </div>
            <div class="col-md-6 sm-text-center mt-40">
              <img class="hidden-sm hidden-xs" src="{{ asset('frontend') }}/images/photos/v1.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Testimonials -->
    <section class="divider parallax layer-overlay overlay-dark-9" data-bg-img="{{ asset('frontend') }}/images/bg/bg23.jpg" data-parallax-ratio="0.7">
      <div class="container pt-60 pb-60">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-white mt-0">Happy Donors Say</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="pt-20">
              <div class="testimonial style1 owl-carousel-2col">

              @forelse($testimonials as $testimonial)
                <div class="item">
                  <div class="comment border-radius-15px">
                  <p>{{ strip_tags($testimonial->text_en) }}</p>

                  </div>
                  <div class="content mt-20">
                    <div class="thumb pull-right">
                      <img class="img-circle" alt="" src="{{ asset('frontend') }}/images/testimonials/user.png">
                    </div>
                    <div class="patient-details text-right pull-right mr-20 mt-10">
                      <h5 class="text-theme-colored">{{ $testimonial->name }}</h5>
                      <h6 class="title">{{ $testimonial->company }}</h6>
                    </div>
                  </div>
                </div>
              @empty
              <p>There no testimonials here</p>
              @endforelse

                {{--<div class="item">
                  <div class="comment border-radius-15px">
                    <p>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis. adipisicing elitvolup tatem error</p>
                  </div>
                  <div class="content mt-20">
                    <div class="thumb pull-right">
                      <img class="img-circle" alt="" src="{{ asset('frontend') }}/images/testimonials/s2.jpg">
                    </div>
                    <div class="patient-details text-right pull-right mr-20 mt-10">
                      <h5 class="text-theme-colored">Jonathan Smith</h5>
                      <h6 class="title">kode inc.</h6>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="comment border-radius-15px">
                    <p>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis. adipisicing elitvolup tatem error</p>
                  </div>
                  <div class="content mt-20">
                    <div class="thumb pull-right">
                      <img class="img-circle" alt="" src="{{ asset('frontend') }}/images/testimonials/s3.jpg">
                    </div>
                    <div class="patient-details text-right pull-right mr-20 mt-10">
                      <h5 class="text-theme-colored">Jonathan Smith</h5>
                      <h6 class="title">kode inc.</h6>
                    </div>
                  </div>
                </div>--}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Gallery -->
    <section id="gallery" class="bg-silver-light">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-center mt-0">Photo <span class="text-theme-colored font-weight-600">Gallery</span></h2>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
              <p>Our gallery showcases the impactful work of North Foundation in education, healthcare, and disaster relief. <br>Each moment reflects our commitment to creating a better, more compassionate future for those in need.</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <!-- Portfolio Gallery Grid -->


              <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
                <!-- Portfolio Item Start -->

                @forelse($galleries as $gallery)
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{ asset('storage/galleries/' . $gallery->featured_image) }}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{ asset('storage/galleries/' . $gallery->featured_image) }}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @empty 
                <p>Here no gallery image here </p>
                @endforelse 
                <!-- Portfolio Item End -->
                
             {{--   <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{ asset('frontend') }}/images/gallery/gallery-lg2.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{ asset('frontend') }}/images/gallery/gallery-lg2.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{ asset('frontend') }}/images/gallery/gallery-lg3.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{ asset('frontend') }}/images/gallery/gallery-lg3.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{ asset('frontend') }}/images/gallery/gallery-md4.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{ asset('frontend') }}/images/gallery/gallery-lg4.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{ asset('frontend') }}/images/gallery/gallery-md5.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{ asset('frontend') }}/images/gallery/gallery-lg5.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{ asset('frontend') }}/images/gallery/gallery-md6.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{ asset('frontend') }}/images/gallery/gallery-lg6.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{ asset('frontend') }}/images/gallery/gallery-md7.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{ asset('frontend') }}/images/gallery/gallery-lg7.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{ asset('frontend') }}/images/gallery/gallery-md8.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{ asset('frontend') }}/images/gallery/gallery-lg8.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{ asset('frontend') }}/images/gallery/gallery-md9.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{ asset('frontend') }}/images/gallery/gallery-lg9.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{ asset('frontend') }}/images/gallery/gallery-md10.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{ asset('frontend') }}/images/gallery/gallery-md10.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{ asset('frontend') }}/images/gallery/gallery-lg11.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{ asset('frontend') }}/images/gallery/gallery-lg11.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{ asset('frontend') }}/images/gallery/gallery-md12.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="{{ asset('frontend') }}/images/gallery/gallery-md12.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End --> --}}
              </div>
              <!-- End Portfolio Gallery Grid -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: blog -->
    <section id="blog">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-center mt-0"> <span class="text-theme-colored font-weight-600">News & </span>Media</h2>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
              <p>
              Stay updated with the latest news, activities, and impact stories from North Bengal Foundation. <br>
              Discover how we are working to support communities, improve lives, and bring positive change across the region.
              </p>

            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">

            @forelse($newses as $news)
            <div class="col-xs-12 col-sm-6 col-md-4">
              <article class="post clearfix mb-sm-30 bg-silver-light">
                <a href="{{ route('news.details', $news->id) }}">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> 
                      <img src="{{ route('imagecache', ['template' => 'cpmd', 'filename' => $news->fi()]) }}" alt="{{ $news->title }}" class="img-responsive img-fullwidth"> 
                    </div>
                  </div>
                </a>
                 {{--<div class="bg-theme-colored p-5 text-center pt-10 pb-10">
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-share-alt mr-5 text-white"></i>24 Share</span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-white"></i> 214 Comments</span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-heart-o mr-5 text-white"></i> 895 Likes</span>
                 </div>--}}
                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                    <ul>
                        <li class="font-16 text-white font-weight-600">
                            {{ $news->created_at->format('d') }}
                        </li>
                        <li class="font-12 text-white text-uppercase">
                            {{ $news->created_at->format('M') }}
                        </li>
                    </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="{{ route('news.details', $news->id) }}">{{ $news->title }}</a></h4>                      
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">{{ \Illuminate\Support\Str::limit(strip_tags($news->excerpt), 120, '...') }}</p>
                  <a href="{{ route('news.details', $news->id) }}" class="btn btn-default btn-sm btn-theme-colored mt-10">Read more</a>
                </div>
              </article>
            </div>
            @empty 
            <p>There have no news here </p>
            @endforelse
          </div>
        </div>
      </div>
    </section>
    
    <x-brand-slider />
@endsection



@push('js')

@endpush