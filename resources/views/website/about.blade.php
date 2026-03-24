@extends('website.layouts.master')

@section('title', 'About Us - North Bengal Foundation')

@section('meta')
<meta name="description" content="Learn about North Bengal Foundation, a non-profit organization working for education, healthcare, disaster relief, and social welfare in Bangladesh.">
<meta name="keywords" content="North Bengal Foundation, charity, NGO Bangladesh, education support, healthcare, disaster relief">
<meta property="og:title" content="About Us - North Bengal Foundation">
<meta property="og:description" content="Building a just, inclusive, and resilient society through humanitarian work across Bangladesh.">
<meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/contact_banner.png') }}">
<meta property="og:type" content="website">
@endsection

@push('styles')
@endpush

@section('content')
    <x-breadcrumb slug="Our Team" image="{{ asset('frontend') }}/assets/img/media/page-title-bg.png"/>

    <section class="about pt-120 pb-90" data-bg-img="{{ asset('frontend')}}/assets/img/media/use-govpn-bg.png">
        <div class="container">
            <div class="row align-items-center pb-120">
                <div class="col-lg-6">
                    <div class="about-img"><img src="{{ asset('frontend')}}/assets/img/media/about-img.png" data-rjs="2" alt=""></div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title style--two">
                        <h5>About Fiber Cloud</h5>
                        <h2>Yours simple solutions online privacy.</h2>
                        <p>Data thieves look for unprotected devices & those that do not use to this encryption are easy
                            targets. These types of attacks are common, and it’s difficult to avoid them without
                            protection.</p>
                    </div>
                    <ul class="list-dot list-unstyled">
                        <li>
                            <h5>Government Users</h5>
                            <p>It is easy for advertisers to influence your behavior you expose all browsing habits.
                                show you higher more affluent city.</p>
                        </li>
                        <li>
                            <h5>Hackers</h5>
                            <p>Onlines businesses mights show you higher this they see you are in a more affluent city.
                                sell your data to advertisers.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="features">
                <div class="row no-gutters-lg pattern-wrap"><img src="{{ asset('frontend')}}/assets/img/media/threat-pattern.png" alt=""
                        class="pattern">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-feature" data-bg-img="{{ asset('frontend')}}/assets/img/media/f1.png">
                            <h4>Hide your Internet Protocol</h4>
                            <p>Our strict zero is policy keep identity under this order we record activity.</p><a
                                href="feature-details.html" class="btn-link"><img src="{{ asset('frontend')}}/assets/img/icons/btn-svg2.svg"
                                    alt="" class="svg">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-feature active feature-two" data-bg-img="{{ asset('frontend')}}/assets/img/media/f2.png">
                            <h4>Stay safe public Wi-Fi zone</h4>
                            <p>Our strict zero is policy keep identity under this order we record activity.</p><a
                                href="feature-details.html" class="btn-link"><img src="{{ asset('frontend')}}/assets/img/icons/btn-svg2.svg"
                                    alt="" class="svg">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-feature feature-three" data-bg-img="{{ asset('frontend')}}/assets/img/media/f3.png">
                            <h4>Access blocked websites</h4>
                            <p>Our strict zero is policy keep identity under this order we record activity.</p><a
                                href="feature-details.html" class="btn-link"><img src="{{ asset('frontend')}}/assets/img/icons/btn-svg2.svg"
                                    alt="" class="svg">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-feature feature-four" data-bg-img="{{ asset('frontend')}}/assets/img/media/f4.png">
                            <h4>Save shopping onlines.</h4>
                            <p>Our strict zero is policy keep identity under this order we record activity.</p><a
                                href="feature-details.html" class="btn-link"><img src="{{ asset('frontend')}}/assets/img/icons/btn-svg2.svg"
                                    alt="" class="svg">Read More</a>
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
    <section class="service pt-120 pb-90" data-bg-img="{{ asset('frontend')}}/assets/img/media/service-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>Our Services</h2>
                        <p>Data thieves look for unprotected devices, and those that do not use encryption<br>are easy
                            targets. It is easy for advertisers to influence</p>
                    </div>
                </div>
            </div>
            <div class="row pattern-wrap"><img src="{{ asset('frontend')}}/assets/img/media/threat-pattern.png" alt="" class="pattern">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service">
                        <div class="img"><img src="{{ asset('frontend')}}/assets/img/icons/serv1.png" alt=""></div>
                        <div class="content">
                            <h4>Privacy geeks</h4>
                            <p>It takes lot of moving parts simple on yours here’s how it works your disappear that
                                your.</p><a href="service-details.html" class="btn-link"><img
                                    src="{{ asset('frontend')}}/assets/img/icons/btn-svg2.svg" alt="" class="svg">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service">
                        <div class="img"><img src="{{ asset('frontend')}}/assets/img/icons/serv2.png" alt=""></div>
                        <div class="content">
                            <h4>Security devotees</h4>
                            <p>It takes lot of moving parts simple on yours here’s how it works your disappear that
                                your.</p><a href="service-details.html" class="btn-link"><img
                                    src="{{ asset('frontend')}}/assets/img/icons/btn-svg2.svg" alt="" class="svg">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service">
                        <div class="img"><img src="{{ asset('frontend')}}/assets/img/icons/serv3.png" alt=""></div>
                        <div class="content">
                            <h4>Human activists</h4>
                            <p>It takes lot of moving parts simple on yours here’s how it works your disappear that
                                your.</p><a href="service-details.html" class="btn-link"><img
                                    src="{{ asset('frontend')}}/assets/img/icons/btn-svg2.svg" alt="" class="svg">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service">
                        <div class="img"><img src="{{ asset('frontend')}}/assets/img/icons/serv4.png" alt=""></div>
                        <div class="content">
                            <h4>Avid gamers</h4>
                            <p>It takes lot of moving parts simple on yours here’s how it works your disappear that
                                your.</p><a href="service-details.html" class="btn-link"><img
                                    src="{{ asset('frontend')}}/assets/img/icons/btn-svg2.svg" alt="" class="svg">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service">
                        <div class="img"><img src="{{ asset('frontend')}}/assets/img/icons/serv5.png" alt=""></div>
                        <div class="content">
                            <h4>Travelers</h4>
                            <p>It takes lot of moving parts simple on yours here’s how it works your disappear that
                                your.</p><a href="service-details.html" class="btn-link"><img
                                    src="{{ asset('frontend')}}/assets/img/icons/btn-svg2.svg" alt="" class="svg">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service">
                        <div class="img"><img src="{{ asset('frontend')}}/assets/img/icons/serv6.png" alt=""></div>
                        <div class="content">
                            <h4>Mobile users</h4>
                            <p>It takes lot of moving parts simple on yours here’s how it works your disappear that
                                your.</p><a href="service-details.html" class="btn-link"><img
                                    src="{{ asset('frontend')}}/assets/img/icons/btn-svg2.svg" alt="" class="svg">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="testimonial pt-120 pb-120" data-bg-img="{{ asset('frontend')}}/assets/img/media/testimonial-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="white">Testimonial</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slider owl-carousel" data-owl-nav="true" data-owl-autoplay="true">
                        <div class="single-testimonial-slide">
                            <div class="img"><img src="{{ asset('frontend')}}/assets/img/media/testimonial1.png" data-rjs="2" alt=""></div>
                            <div class="content">
                                <p>World where everyone is carrying around small computer one<br>Pocket it's no surprise
                                    that video has become one of the most popular ways</p>
                                <div class="meta-info">
                                    <p>Chief Executive</p>
                                    <h4>Sarah Arevik</h4>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-slide">
                            <div class="img"><img src="{{ asset('frontend')}}/assets/img/media/testimonial2.png" data-rjs="2" alt=""></div>
                            <div class="content">
                                <p>World where everyone is carrying around small computer one<br>Pocket it's no surprise
                                    that video has become one of the most popular ways</p>
                                <div class="meta-info">
                                    <p>UX Consultant</p>
                                    <h4>Michale Clark</h4>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-slide">
                            <div class="img"><img src="{{ asset('frontend')}}/assets/img/media/testimonial3.png" data-rjs="2" alt=""></div>
                            <div class="content">
                                <p>World where everyone is carrying around small computer one<br>Pocket it's no surprise
                                    that video has become one of the most popular ways</p>
                                <div class="meta-info">
                                    <p>Chief Executive</p>
                                    <h4>Jennifer Lida</h4>
                                </div>
                            </div>
                        </div>
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
                            action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&amp;id=f4e0e93d1d"
                            class="newsletter-form" target="_blank"><input type="email" class="form-control"
                                placeholder="Email Address Here..."> <button type="submit"><img
                                    src="{{ asset('frontend')}}/assets/img/icons/paper.svg" alt="" class="svg"></button></form>
                        <p>Daily offers software many more update report</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-120 pb-120 pb-xl-5">
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
@endsection

@push('js')
@endpush
