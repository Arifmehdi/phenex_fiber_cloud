@extends('website.layouts.master')

@section('title', 'Contact Us - ' . config('app.name'))
@section('meta')
    <meta name="description" content="Contact North Bengal for inquiries, product details, or business queries. Get in touch via phone, email, or visit our office.">
    <meta name="keywords" content="contact north bengal, contact us, north bengal inquiries, phone, email, office location">
    <meta property="og:title" content="Contact Us - North Bengal">
    <meta property="og:description" content="Reach North Bengal for product inquiries or business partnerships.">
    <meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/contact_banner.png') }}">
    <meta property="og:type" content="website">
@endsection

@section('content')
    <x-breadcrumb slug="Contact Us" image="{{ asset('frontend') }}/assets/img/media/page-title-bg.png"/>

    <section class="contact pt-120 pb-120" data-bg-img="assets/img/media/contact-bg.png">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="contact-form-wrap">
                        <div class="section-title style--two">
                            <h2>Let's talk</h2>
                            <p>Your real IP address disappear so that your online activity can’t be tracke Our strict
                                zero log policy keeps your identity under wrap. order preserve your privacy, we’ll never
                                record your activity.</p>
                        </div>
                        <form action="{{ route('contact.store') }}" class="contact-form" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" name="name" class="form-control" placeholder="First Name"> 
                                    <input type="email" name="email" class="form-control" placeholder="Email Address"> 
                                    <textarea class="form-control" name="message"  placeholder="Messages"> </textarea> 
                                    <button type="submit" class="btn">
                                        <img src="assets/img/icons/btn-svg.svg" alt="" class="svg"> Submit Now
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="form-response"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info">
                        <div class="img"><img src="assets/img/media/contact-img.png" data-rjs="2" alt=""></div>
                        <ul class="contact-info-list">
                            <li>{{$ws->contact_address }}</li>
                            <li><a href="callto:{{$ws->contact_mobile }}">{{$ws->contact_mobile }}</a></li>
                            <li><a href="mailto:{{$ws->contact_email }}">{{$ws->contact_email }}</a></li>
                        </ul>
                        <div class="social-links contact-social-links"><a
                                class="d-inline-flex align-items-center justify-content-center" target="_blank"
                                href="{{$ws->fb_url}}"><i class="fa fa-facebook"></i> </a><a
                                class="d-inline-flex align-items-center justify-content-center" target="_blank"
                                href="{{$ws->twitter_url}}"><i class="fa fa-twitter"></i> </a><a
                                class="d-inline-flex align-items-center justify-content-center" target="_blank"
                                href="{{$ws->youtube_url}}"><i class="fa fa-youtube"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="map-responsive">
        <iframe 
            src="{{ $ws->iframe_map}}"
            allowfullscreen 
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

    <style id="mapresp2">
    .map-responsive {
        position: relative;
        width: 100%;
        padding-bottom: 56.25%; /* 16:9 ratio */
        height: 0;
        overflow: hidden;
    }

    .map-responsive iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }
    </style>
    {{--<section class="faq pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>Questions? look here!</h2>
                        <p>Data thieves look for unprotected devices, and those that do not use encryption<br>are easy
                            targets. It is easy for advertisers to influence</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <h4 class="faq-tab-title">Table of contents</h4>
                    <nav>
                        <div class="nav nav-tab flex-column" role="tablist"><a class="nav-item nav-link active"
                                data-toggle="tab" href="#nav-generel">Generel</a> <a class="nav-item nav-link"
                                data-toggle="tab" href="#nav-safety">Trust of safety</a> <a class="nav-item nav-link"
                                data-toggle="tab" href="#nav-service">Services</a> <a class="nav-item nav-link"
                                data-toggle="tab" href="#nav-information">Office information</a></div>
                    </nav>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content">
                        <div class="tab-pane fade" id="nav-generel">
                            <div class="accordion">
                                <div data-accordion-tab="toggle" class="active">
                                    <h3>How to get started?</h3>
                                    <div class="accordion-content">Your real IP address disappear so that your online
                                        activity can’t be tracke Our strict zero log policy keeps your identity under
                                        wrap. order preserve your privacy, we’ll never record your activity.</div>
                                </div>
                                <div data-accordion-tab="toggle">
                                    <h3>How to watch Netflix with Provpn?</h3>
                                    <div class="accordion-content">Your real IP address disappear so that your online
                                        activity can’t be tracke Our strict zero log policy keeps your identity under
                                        wrap. order preserve your privacy, we’ll never record your activity.</div>
                                </div>
                                <div data-accordion-tab="toggle">
                                    <h3>How to connect from countries with network restrictions?</h3>
                                    <div class="accordion-content">Your real IP address disappear so that your online
                                        activity can’t be tracke Our strict zero log policy keeps your identity under
                                        wrap. order preserve your privacy, we’ll never record your activity.</div>
                                </div>
                                <div data-accordion-tab="toggle">
                                    <h3>Asus router tutorial running AsusWRT firmware</h3>
                                    <div class="accordion-content">Your real IP address disappear so that your online
                                        activity can’t be tracke Our strict zero log policy keeps your identity under
                                        wrap. order preserve your privacy, we’ll never record your activity.</div>
                                </div>
                                <div data-accordion-tab="toggle">
                                    <h3>How to set up Surfshark smart DNS for Apple TV</h3>
                                    <div class="accordion-content">Your real IP address disappear so that your online
                                        activity can’t be tracke Our strict zero log policy keeps your identity under
                                        wrap. order preserve your privacy, we’ll never record your activity.</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-safety">
                            <div class="accordion">
                                <div data-accordion-tab="toggle" class="active">
                                    <h3>How to get started?</h3>
                                    <div class="accordion-content">Your real IP address disappear so that your online
                                        activity can’t be tracke Our strict zero log policy keeps your identity under
                                        wrap. order preserve your privacy, we’ll never record your activity.</div>
                                </div>
                                <div data-accordion-tab="toggle">
                                    <h3>How to watch Netflix with Provpn?</h3>
                                    <div class="accordion-content">Your real IP address disappear so that your online
                                        activity can’t be tracke Our strict zero log policy keeps your identity under
                                        wrap. order preserve your privacy, we’ll never record your activity.</div>
                                </div>
                                <div data-accordion-tab="toggle">
                                    <h3>How to connect from countries with network restrictions?</h3>
                                    <div class="accordion-content">Your real IP address disappear so that your online
                                        activity can’t be tracke Our strict zero log policy keeps your identity under
                                        wrap. order preserve your privacy, we’ll never record your activity.</div>
                                </div>
                                <div data-accordion-tab="toggle">
                                    <h3>Asus router tutorial running AsusWRT firmware</h3>
                                    <div class="accordion-content">Your real IP address disappear so that your online
                                        activity can’t be tracke Our strict zero log policy keeps your identity under
                                        wrap. order preserve your privacy, we’ll never record your activity.</div>
                                </div>
                                <div data-accordion-tab="toggle">
                                    <h3>How to set up Surfshark smart DNS for Apple TV</h3>
                                    <div class="accordion-content">Your real IP address disappear so that your online
                                        activity can’t be tracke Our strict zero log policy keeps your identity under
                                        wrap. order preserve your privacy, we’ll never record your activity.</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="nav-service">
                            <div class="accordion">
                                <div data-accordion-tab="toggle" class="active">
                                    <h3>How to get started?</h3>
                                    <div class="accordion-content">Your real IP address disappear so that your online
                                        activity can’t be tracke Our strict zero log policy keeps your identity under
                                        wrap. order preserve your privacy, we’ll never record your activity.</div>
                                </div>
                                <div data-accordion-tab="toggle">
                                    <h3>How to watch Netflix with Provpn?</h3>
                                    <div class="accordion-content">Your real IP address disappear so that your online
                                        activity can’t be tracke Our strict zero log policy keeps your identity under
                                        wrap. order preserve your privacy, we’ll never record your activity.</div>
                                </div>
                                <div data-accordion-tab="toggle">
                                    <h3>How to connect from countries with network restrictions?</h3>
                                    <div class="accordion-content">Your real IP address disappear so that your online
                                        activity can’t be tracke Our strict zero log policy keeps your identity under
                                        wrap. order preserve your privacy, we’ll never record your activity.</div>
                                </div>
                                <div data-accordion-tab="toggle">
                                    <h3>Asus router tutorial running AsusWRT firmware</h3>
                                    <div class="accordion-content">Your real IP address disappear so that your online
                                        activity can’t be tracke Our strict zero log policy keeps your identity under
                                        wrap. order preserve your privacy, we’ll never record your activity.</div>
                                </div>
                                <div data-accordion-tab="toggle">
                                    <h3>How to set up Surfshark smart DNS for Apple TV</h3>
                                    <div class="accordion-content">Your real IP address disappear so that your online
                                        activity can’t be tracke Our strict zero log policy keeps your identity under
                                        wrap. order preserve your privacy, we’ll never record your activity.</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-information">
                            <div class="accordion">
                                <div data-accordion-tab="toggle" class="active">
                                    <h3>How to get started?</h3>
                                    <div class="accordion-content">Your real IP address disappear so that your online
                                        activity can’t be tracke Our strict zero log policy keeps your identity under
                                        wrap. order preserve your privacy, we’ll never record your activity.</div>
                                </div>
                                <div data-accordion-tab="toggle">
                                    <h3>How to watch Netflix with Provpn?</h3>
                                    <div class="accordion-content">Your real IP address disappear so that your online
                                        activity can’t be tracke Our strict zero log policy keeps your identity under
                                        wrap. order preserve your privacy, we’ll never record your activity.</div>
                                </div>
                                <div data-accordion-tab="toggle">
                                    <h3>How to connect from countries with network restrictions?</h3>
                                    <div class="accordion-content">Your real IP address disappear so that your online
                                        activity can’t be tracke Our strict zero log policy keeps your identity under
                                        wrap. order preserve your privacy, we’ll never record your activity.</div>
                                </div>
                                <div data-accordion-tab="toggle">
                                    <h3>Asus router tutorial running AsusWRT firmware</h3>
                                    <div class="accordion-content">Your real IP address disappear so that your online
                                        activity can’t be tracke Our strict zero log policy keeps your identity under
                                        wrap. order preserve your privacy, we’ll never record your activity.</div>
                                </div>
                                <div data-accordion-tab="toggle">
                                    <h3>How to set up Surfshark smart DNS for Apple TV</h3>
                                    <div class="accordion-content">Your real IP address disappear so that your online
                                        activity can’t be tracke Our strict zero log policy keeps your identity under
                                        wrap. order preserve your privacy, we’ll never record your activity.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
@endsection

@push('css')

@endpush
