@extends('website.layouts.master')

@section('title', 'Login - '.env('APP_NAME'))

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
    <x-breadcrumb slug="My Account" image="{{ asset('frontend') }}/images/bg/bg6.jpg"/>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-push-3">
            <h4 class="text-gray mt-0 pt-5"> Login</h4>
            <hr>
            <p>Welcome Back !</p>
            {{-- Flash Messages --}}
              @if (session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @endif

              @if (session('error'))
                  <div class="alert alert-danger">
                      {{ session('error') }}
                  </div>
              @endif

              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul class="mb-0">
                          @foreach ($errors->all() as $err)
                              <li>{{ $err }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
            <form name="login-form" class="clearfix" action="{{ route('login') }}" method="POST">
              @csrf
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="email">Email</label>
                  <input id="email" name="email" class="form-control" type="text">
                  @error('email')
                      <span class="text-danger small">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="password">Password</label>
                  <input id="password" name="password" class="form-control" type="password">
                    @error('password')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>
              </div>
              <div class="checkbox pull-left mt-15">
                <label for="remember">
                  <input id="remember" name="remember" type="checkbox">
                  Remember me </label>
              </div>
              <div class="form-group pull-right mt-10">
                <button type="submit" class="btn btn-dark btn-sm">Login</button>
              </div>
              <div class="clear text-center pt-10">
                <a class="text-theme-colored font-weight-600 font-12" href="#">Forgot Your Password?</a>
              </div>
              {{--<div class="clear text-center pt-10">
                <a class="btn btn-dark btn-lg btn-block no-border mt-15 mb-15" href="#" data-bg-color="#3b5998">Login with facebook</a>
                <a class="btn btn-dark btn-lg btn-block no-border" href="#" data-bg-color="#00acee">Login with twitter</a>
              </div>--}}
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection

@push('scripts')

@endpush