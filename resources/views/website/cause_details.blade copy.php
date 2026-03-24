@extends('website.layouts.master')

@section('title', 'Causes - '.env('APP_NAME'))

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
              <h3 class="title text-white">Causes Grid</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Causes Details -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="causes-details bg-white mb-30">
              <div class="thumb">
                @if($cause->image)
                    <img src="{{ asset('storage/' . $cause->image) }}" alt="{{ $cause->title }}" class="img-fullwidth">
                @else
                    <img src="{{ asset('frontend') }}/images/project/no-image.png" alt="No Image" class="img-fullwidth">
                @endif
              </div>
              <div class="causes-details-content p-30">
                <h2 class="font-30 font-weight-600 mt-0">{{ $cause->title }}</h2>
                <ul class="list-inline font-20 font-weight-600 clearfix mb-5">
                  <li class="pull-left font-weight-400 text-black-333 pr-0">Raised: <span class="text-theme-colored font-weight-700">${{ number_format($cause->raised_amount, 2) }}</span></li>
                  <li class="pull-right font-weight-400 text-black-333 pr-0">Goal: <span class="text-theme-colored font-weight-700">${{ number_format($cause->goal_amount, 2) }}</span></li>
                </ul>
                @php
                    $progress = ($cause->goal_amount > 0) ? round(($cause->raised_amount / $cause->goal_amount) * 100) : 0;
                @endphp
                <div class="progress-item mt-0">
                  <div class="progress mb-0">
                    <div data-percent="{{ $progress }}" class="progress-bar"><span class="percent">{{ $progress }}%</span></div>
                  </div>
                </div>
                <h4 class="mt-20">{{ $cause->short_description }}</h4>
                <div class="description mt-20">
                    {!! $cause->description !!}
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            {{-- Assuming a sidebar for related causes or donation form --}}
            <div class="sidebar sidebar-right mt-sm-30">
                <div class="widget">
                    <h5 class="widget-title">Recent Causes</h5>
                    <div class="latest-posts">
                        {{-- You might want to fetch some recent causes here from the controller --}}
                        {{-- For now, static content or fetch in the view (less ideal) --}}
                        {{-- Example: @foreach(\App\Models\Cause::where('active', true)->latest()->take(5)->get() as $recentCause) --}}
                        {{-- <article class="post clearfix">
                            <div class="entry-header">
                                <h6 class="entry-title"><a href="{{ route('cause.details', $recentCause->slug) }}">{{ $recentCause->title }}</a></h6>
                                <p class="post-date text-theme-colored">{{ $recentCause->created_at->format('M d, Y') }}</p>
                            </div>
                        </article> --}}
                        {{-- @endforeach --}}
                         <p>Implement logic to show recent causes here.</p>
                    </div>
                </div>
                {{-- Add a donation form or other relevant widgets here --}}
            </div>
          </div>
        </div>
      </div>
    </section>