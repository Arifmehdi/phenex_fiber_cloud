@extends('website.layouts.master')

@section('title', 'Campign - '.env('APP_NAME'))

@section('meta')
<meta name="description" content="Learn about Hubli’s mission to transform Bangladesh’s food supply chain and eliminate food wastage with a smart, efficient national network.">
<meta name="keywords" content="Hubli, food hub, supply chain, food wastage, Bangladesh, agriculture">
<meta property="og:title" content="About Us - Hubli">
<meta property="og:description" content="Transforming Bangladesh’s food supply chain with smart logistics and technology.">
<meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/contact_banner.png') }}">
<meta property="og:type" content="website">
@endsection

@push('styles')

@endpush

@section('content')
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ asset('frontend') }}/images/bg/bg1.jpg">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Campaign</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-lighter">
      <div class="container pt-sm-30">
        <div class="section-content">
          <div class="row">
            <div class="col-md-7 mb-sm-40">
              <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">Campaign with us! please save the children.</h2>
              <p class="text-theme-colored">Lorem ipsum dolor sit amet soluta saepe odit error, maxime praesentium sunt udiandae!</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit expedita obcaecati nulla in ducimus iure quos quam recusandae dolor quas et perspiciatis voluptatum accusantium delectus nisi reprehenderit, eveniet fuga modi pariatur, eius vero. Ea vitae maiores.</p>
              <a href="#" class="btn btn-default btn-theme-colored btn-md mt-20">Join Now</a> 
            </div>
            <div class="col-md-5">
              <div class="owl-carousel-1col" data-nav="true">
                <div class="item">
                  <img src="{{ asset('frontend') }}/images/bg/bg19.jpg" alt="">
                </div>
                <div class="item">
                  <img src="{{ asset('frontend') }}/images/bg/bg2.jpg" alt="">
                </div>
                <div class="item">
                  <img src="{{ asset('frontend') }}/images/bg/bg19.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="mt-0 text-theme-colored">Current Campaign</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus nostrum corporis qui ut nesciunt voluptatibus excepturi eum quod facere et earum quas<br> explicabo rem est Odit animi ipsam quo ad culpa in officiis qui voluptatem doloremque voluptatum nam.</p>
            </div>
          </div>
          <div class="row mt-30">
            @forelse($causes as $cause)
            <div class="col-sm-4 col-md-4 col-lg-4">
              <div class="schedule-box maxwidth500 bg-theme-colored mb-30">
                <div class="thumb">
                  @if($cause->image)
                    <img class="img-fullwidth" alt="{{ $cause->title }}" src="{{ asset('storage/' . $cause->image) }}">
                  @else
                    <img class="img-fullwidth" alt="No Image" src="{{ asset('frontend') }}/images/gallery/no-image.png">
                  @endif
                </div>
                <div class="schedule-details clearfix p-15 pt-10">
                  <h3 class="title mt-0"><a href="{{ route('cause.details', $cause->slug) }}" class="text-white">{{ $cause->title }}</a></h3>
                  <div class="clearfix"></div>
                  <p class="mt-10 text-white">{{ $cause->short_description }}</p>
                  <div class="mt-10">
                   <a href="{{ route('cause.details', $cause->slug) }}" class="btn btn-default btn-sm mt-10">Details</a>
                  </div>
                </div>
              </div>
            </div>
            @empty
            <div class="col-md-12">
                <p>No active campaigns found.</p>
            </div>
            @endforelse
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Clients -->
    <x-brand-slider />

@endsection

@push('scripts')

@endpush