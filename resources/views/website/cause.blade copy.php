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
    <x-breadcrumb slug="Causes" image="{{ asset('frontend') }}/images/bg/bg1.jpg"/>

    <!-- Section: Causes -->
    <section>
      <div class="container">
        <div class="row multi-row-clearfix">
            @forelse($causes as $cause)
            <a href="{{ route('cause.details', $cause->slug) }}">
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="causes bg-white maxwidth500 mb-30">
                        <div class="thumb">
                            @if($cause->image)
                                <img src="{{ asset('storage/' . $cause->image) }}" alt="{{ $cause->title }}" class="img-fullwidth">
                            @else
                                <img src="{{ asset('frontend') }}/images/project/no-image.png" alt="No Image" class="img-fullwidth">
                            @endif
                            <div class="overlay-donate-now">
                                <a href="#" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Donate <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                            </div>
                        </div>
                        @php
                            $progress = ($cause->goal_amount > 0) ? round(($cause->raised_amount / $cause->goal_amount) * 100) : 0;
                        @endphp
                        <div class="progress-item mt-0">
                            <div class="progress mb-0">
                                <div data-percent="{{ $progress }}" class="progress-bar"><span class="percent">{{ $progress }}%</span></div>
                            </div>
                        </div>
                        <div class="causes-details clearfix  border-bottom-theme-color-1px p-15 pt-10 pb-10">
                            <h5 class="font-weight-600 font-16"><a href="{{ route('cause.details', $cause->slug) }}">{{ $cause->title }}</a></h5>
                            <p class="mt-20">
                                {{ \Illuminate\Support\Str::limit(strip_tags($cause->short_description), 150, '...') }}
                            </p>
                            <ul class="list-inline project-conditions mt-20 text-center bg-theme-colored-transparent-1 m-0 p-10">
                                <li class="target-fund text-theme-colored"><strong>${{ number_format($cause->goal_amount, 2) }}</strong>Target</li>
                                <li class="day text-theme-colored"><i class="flaticon-charity-hand-holding-a-heart font-30"></i></li>
                                <li class="raised text-theme-colored"><strong>${{ number_format($cause->raised_amount, 2) }}</strong>Raised</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </a>
            @empty
                <div class="col-md-12">
                    <p>No active causes found.</p>
                </div>
            @endforelse
        </div>
      </div>
    </section>

@endsection

@push('scripts')

@endpush