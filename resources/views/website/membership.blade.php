@extends('website.layouts.master')

@section('title', 'Membership - '.env('APP_NAME'))

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
    <x-breadcrumb slug="Membership" image="{{ asset('frontend') }}/images/bg/bg1.jpg"/>

    @if($executiveMembers->count() > 0)
    <section>
      <div class="container pt-70 pb-40">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-colored font-weight-600">Executive Members</span></h2>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row multi-row-clearfix">
            @foreach($executiveMembers as $membership)
            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
              <div class="team-member clearfix">
                <div class="team-thumb">
                  @if($membership->image)
                    <img alt="{{ $membership->name }}" src="{{ asset('storage/' . $membership->image) }}" class="img-fullwidth">
                  @else
                    <img alt="{{ $membership->name }}" src="{{ asset('frontend/images/default-member.jpg') }}" class="img-fullwidth">
                  @endif
                  <div class="overlay">
                    <div class="content">
                      <p>{{ $membership->short_bio }}</p>
                    </div>
                  </div>
                </div>
                <div class="team-info bg-theme-colored">
                  <h3 class="mt-0 text-white">{{ $membership->name }}</h3>
                  <ul class="styled-icons icon-circled icon-theme-colored">
                    @if($membership->fb_url)<li><a href="{{ $membership->fb_url }}" target="_blank"><i class="fa fa-facebook"></i></a></li>@endif
                    @if($membership->twitter_url)<li><a href="{{ $membership->twitter_url }}" target="_blank"><i class="fa fa-twitter"></i></a></li>@endif
                    @if($membership->local_url)<li><a href="{{ $membership->local_url }}" target="_blank"><i class="fa fa-dribbble"></i></a></li>@endif
                  </ul>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="col-12 text-center mt-30">
            <a href="{{ route('member.apply') }}" class="btn btn-theme-colored btn-lg">
              <i class="fa fa-user-plus"></i> Be a Member
            </a>
          </div>
        </div>
      </div>
    </section>
    @endif

    @if($lifetimeMembers->count() > 0)
    <section>
      <div class="container pt-70 pb-40">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-colored font-weight-600">Lifetime Members</span></h2>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row multi-row-clearfix">
            @foreach($lifetimeMembers as $membership)
            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
              <div class="team-member clearfix">
                <div class="team-thumb">
                  @if($membership->image)
                    <img alt="{{ $membership->name }}" src="{{ asset('storage/' . $membership->image) }}" class="img-fullwidth">
                  @else
                    <img alt="{{ $membership->name }}" src="{{ asset('frontend/images/default-member.jpg') }}" class="img-fullwidth">
                  @endif
                  <div class="overlay">
                    <div class="content">
                      <p>{{ $membership->short_bio }}</p>
                    </div>
                  </div>
                </div>
                <div class="team-info bg-theme-colored">
                  <h3 class="mt-0 text-white">{{ $membership->name }}</h3>
                  <ul class="styled-icons icon-circled icon-theme-colored">
                    @if($membership->fb_url)<li><a href="{{ $membership->fb_url }}" target="_blank"><i class="fa fa-facebook"></i></a></li>@endif
                    @if($membership->twitter_url)<li><a href="{{ $membership->twitter_url }}" target="_blank"><i class="fa fa-twitter"></i></a></li>@endif
                    @if($membership->local_url)<li><a href="{{ $membership->local_url }}" target="_blank"><i class="fa fa-dribbble"></i></a></li>@endif
                  </ul>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="col-12 text-center mt-30">
            <a href="{{ route('member.apply') }}" class="btn btn-theme-colored btn-lg">
              <i class="fa fa-user-plus"></i> Be a Member
            </a>
          </div>
        </div>
      </div>
    </section>
    @endif

    @if($generalMembers->count() > 0)
    <section>
      <div class="container pt-70 pb-40">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-colored font-weight-600">General Members</span></h2>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row multi-row-clearfix">
            @foreach($generalMembers as $membership)
            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
              <div class="team-member clearfix">
                <div class="team-thumb">
                  @if($membership->image)
                    <img alt="{{ $membership->name }}" src="{{ asset('storage/' . $membership->image) }}" class="img-fullwidth">
                  @else
                    <img alt="{{ $membership->name }}" src="{{ asset('frontend/images/default-member.jpg') }}" class="img-fullwidth">
                  @endif
                  <div class="overlay">
                    <div class="content">
                      <p>{{ $membership->short_bio }}</p>
                    </div>
                  </div>
                </div>
                <div class="team-info bg-theme-colored">
                  <h3 class="mt-0 text-white">{{ $membership->name }}</h3>
                  <ul class="styled-icons icon-circled icon-theme-colored">
                    @if($membership->fb_url)<li><a href="{{ $membership->fb_url }}" target="_blank"><i class="fa fa-facebook"></i></a></li>@endif
                    @if($membership->twitter_url)<li><a href="{{ $membership->twitter_url }}" target="_blank"><i class="fa fa-twitter"></i></a></li>@endif
                    @if($membership->local_url)<li><a href="{{ $membership->local_url }}" target="_blank"><i class="fa fa-dribbble"></i></a></li>@endif
                  </ul>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="col-12 text-center mt-30">
            <a href="{{ route('member.apply') }}" class="btn btn-theme-colored btn-lg">
              <i class="fa fa-user-plus"></i> Be a Member
            </a>
          </div>
        </div>
      </div>
    </section>
    @endif

    @if($donorMembers->count() > 0)
    <section>
      <div class="container pt-70 pb-40">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-colored font-weight-600">Donors</span></h2>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row multi-row-clearfix">
            @foreach($donorMembers as $membership)
            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
              <div class="team-member clearfix">
                <div class="team-thumb">
                  @if($membership->image)
                    <img alt="{{ $membership->name }}" src="{{ asset('storage/' . $membership->image) }}" class="img-fullwidth">
                  @else
                    <img alt="{{ $membership->name }}" src="{{ asset('frontend/images/default-member.jpg') }}" class="img-fullwidth">
                  @endif
                  <div class="overlay">
                    <div class="content">
                      <p>{{ $membership->short_bio }}</p>
                    </div>
                  </div>
                </div>
                <div class="team-info bg-theme-colored">
                  <h3 class="mt-0 text-white">{{ $membership->name }}</h3>
                  <ul class="styled-icons icon-circled icon-theme-colored">
                    @if($membership->fb_url)<li><a href="{{ $membership->fb_url }}" target="_blank"><i class="fa fa-facebook"></i></a></li>@endif
                    @if($membership->twitter_url)<li><a href="{{ $membership->twitter_url }}" target="_blank"><i class="fa fa-twitter"></i></a></li>@endif
                    @if($membership->local_url)<li><a href="{{ $membership->local_url }}" target="_blank"><i class="fa fa-dribbble"></i></a></li>@endif
                  </ul>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="col-12 text-center mt-30">
            <a href="{{ route('member.apply') }}" class="btn btn-theme-colored btn-lg">
              <i class="fa fa-user-plus"></i> Be a Member
            </a>
          </div>
        </div>
      </div>
    </section>
    @endif

    @if($volunteerMembers->count() > 0)
    <section>
      <div class="container pt-70 pb-40">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-colored font-weight-600">Volunteers</span></h2>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row multi-row-clearfix">
            @forelse($volunteerMembers as $membership)
            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
              <div class="team-member clearfix">
                <div class="team-thumb">
                  @if($membership->image)
                    <img alt="{{ $membership->name }}" src="{{ asset('storage/' . $membership->image) }}" class="img-fullwidth">
                  @else
                    <img alt="{{ $membership->name }}" src="{{ asset('frontend/images/default-member.jpg') }}" class="img-fullwidth">
                  @endif
                  <div class="overlay">
                    <div class="content">
                      <p>{{ $membership->short_bio }}</p>
                    </div>
                  </div>
                </div>
                <div class="team-info bg-theme-colored">
                  <h3 class="mt-0 text-white">{{ $membership->name }}</h3>
                  <ul class="styled-icons icon-circled icon-theme-colored">
                    @if($membership->fb_url)<li><a href="{{ $membership->fb_url }}" target="_blank"><i class="fa fa-facebook"></i></a></li>@endif
                    @if($membership->twitter_url)<li><a href="{{ $membership->twitter_url }}" target="_blank"><i class="fa fa-twitter"></i></a></li>@endif
                    @if($membership->local_url)<li><a href="{{ $membership->local_url }}" target="_blank"><i class="fa fa-dribbble"></i></a></li>@endif
                  </ul>
                </div>
              </div>
            </div>
            @empty
            <p>There is no membership </p>
            @endforelse
          </div>
            <div class="col-12 text-center mt-30">
            <a href="{{ route('member.apply') }}" class="btn btn-theme-colored btn-lg">
              <i class="fa fa-user-plus"></i> Be a Member
            </a>
          </div>
        </div>
      </div>
    </section>
    @endif

@endsection

@push('scripts')

@endpush