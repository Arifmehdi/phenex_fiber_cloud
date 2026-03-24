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
    {{--<section id="team" class="team section" style="margin-top: 50px">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Our Team Member</h2>
            <div class="container">

                <div class="row gy-4">
                                    </div>

            </div>
        </div><!-- End Section Title -->

    </section>--}}
    

        <section class="team pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>Our Service Team</h2>
                        <p>Data thieves look for unprotected devices, and those that do not use encryption<br>are easy
                            targets. It is easy for advertisers to influence</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-team">
                        <div class="img"><img src="{{ asset('frontend')}}/assets/img/media/team1.png" data-rjs="2" alt="">
                            <div class="team-socials"><a href="https://twitter.com/" target="_blank"><i
                                        class="fa fa-twitter"></i></a> <a href="https://facebook.com/"
                                    target="_blank"><i class="fa fa-facebook"></i></a> <a href="#"><img
                                        src="{{ asset('frontend')}}/assets/img/icons/share.svg" alt="" class="svg"></a></div>
                        </div>
                        <div class="content">
                            <h4>Leo Alexander</h4>
                            <p>Chief Officer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-team">
                        <div class="img"><img src="{{ asset('frontend')}}/assets/img/media/team2.png" data-rjs="2" alt="">
                            <div class="team-socials"><a href="https://twitter.com/" target="_blank"><i
                                        class="fa fa-twitter"></i></a> <a href="https://facebook.com/"
                                    target="_blank"><i class="fa fa-facebook"></i></a> <a href="#"><img
                                        src="{{ asset('frontend')}}/assets/img/icons/share.svg" alt="" class="svg"></a></div>
                        </div>
                        <div class="content">
                            <h4>Chris Anderson</h4>
                            <p>Product Officer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-team">
                        <div class="img"><img src="{{ asset('frontend')}}/assets/img/media/team3.png" data-rjs="2" alt="">
                            <div class="team-socials"><a href="https://twitter.com/" target="_blank"><i
                                        class="fa fa-twitter"></i></a> <a href="https://facebook.com/"
                                    target="_blank"><i class="fa fa-facebook"></i></a> <a href="#"><img
                                        src="{{ asset('frontend')}}/assets/img/icons/share.svg" alt="" class="svg"></a></div>
                        </div>
                        <div class="content">
                            <h4>Giant Cherry</h4>
                            <p>Co Founder</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
@endpush
