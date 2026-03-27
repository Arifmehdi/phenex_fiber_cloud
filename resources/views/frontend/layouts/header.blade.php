<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
  <div class="header-body border-top-0">
    <div class="header-top header-top-default header-top-borders border-bottom-0">
      <div class="container h-100">
        <div class="header-row h-100">
          <div class="header-column justify-content-end">
            <div class="header-row">
              <nav class="header-nav-top">
                <ul class="nav nav-pills">
                  <li class="nav-item nav-item-borders py-1 d-none d-sm-inline-flex">
                    <span class="ps-0"><i class="far fa-dot-circle text-4 text-color-primary" style="top: 1px;"></i> <a class="text-decoration-none" href="{{ route('doctorList') }}">Doctor’s Appointment</a></span>
                  </li>
                  <li class="nav-item nav-item-borders py-1">
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $ws->contact_mobile) }}?text={{ urlencode('Hello, I am interested in your services.') }}" 
                      target="_blank" 
                      style="color: #2d529f !important; font-weight: 500; text-decoration: none;">
                      <i class="fab fa-whatsapp text-4" style="top: 0; color: #2d529f !important;"></i>
                      {{$ws->contact_mobile}}
                    </a>
                  </li>

                  <li class="nav-item nav-item-borders py-1 pe-1 d-none d-md-inline-flex">
                    <a href="mailto:{{$ws->contact_email}}" 
                      style="color: #2d529f !important; font-weight: 500; text-decoration: none;">
                      <i class="far fa-envelope text-4" style="top: 1px; color: #2d529f !important;"></i>
                      {{$ws->contact_email}}
                    </a>
                  </li>

                </ul>

                <ul class="nav px-0 py-0">
                    <li class="nav-item py-0 d-lg-inline-flex">
                      <a href="{{$ws->fb_url}}" target="_blank" title="Facebook" class="text-white  text-3 anim-hover-translate-top-5px transition-2ms">
                        <!-- <i class="fab fa-facebook-f text-3 p-relative top-1"></i> -->
                        <img width="80%"src="{{ asset('frontend/assets/img/icons/fb.webp') }}" alt="">
                      </a>
                    </li>
                    <li class="nav-item py-0  d-lg-inline-flex">
                      <a href="{{$ws->youtube_url}}" target="_blank" title="Youtube" class="text-white  text-3 anim-hover-translate-top-5px transition-2ms">
                        {{--<i class="fab fa-youtube text-3 p-relative top-1"></i>--}}
                        <img width="80%"src="{{ asset('frontend/assets/img/icons/yt.webp') }}" alt="">
                      </a>
                    </li>  
                </ul>

              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-container container">
      <div class="header-row">
        <div class="header-column">
          <div class="header-row">
            <div class="header-logo">
              <a href="{{ url('/') }}">  
                <img alt="{{$ws->website_title ?? ''}}" width="70" height="66" src="{{ route('imagecache', [ 'template'=>'original','filename' => $ws->logo() ]) }}">
              </a>
            </div>
          </div>
        </div>
        <div class="header-column justify-content-end">
          <div class="header-row">
            <div class="header-nav order-2 order-lg-1">
              <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                <nav class="collapse">
                    <ul class="nav nav-pills" id="mainNav">
                        <li class="dropdown-full-color dropdown-secondary">
                            <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="{{route('home')}}">
                                Home
                            </a>
                        </li>

                        <li class="dropdown dropdown-full-color dropdown-secondary">
                            <a class="dropdown-item dropdown-toggle  {{ request()->routeIs('registration') 
                            || request()->routeIs('gallery') 
                            || request()->routeIs('news') ? 'active' : '' }} nav-link" href="javascript:void(0)" >
                                About Us
                            </a>
                            <ul class="dropdown-menu">
                                
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="javascript:void(0)">Activities</a>
                                    <ul class="dropdown-menu">

                                    @php
                                        $user = Auth::user();
                                    @endphp

                                    @if (!Auth::check())
                                        {{-- Guest user --}}
                                        <li>
                                            <a class="dropdown-item" href="{{ route('registration') }}">Registration</a>
                                        </li>
                                    @elseif ($user && $user->idcard)
                                        {{-- Logged in and has idcard --}}
                                        <li>
                                            <a class="dropdown-item" href="{{ route('health.registration') }}">Health Card Registration</a>
                                        </li>
                                        {{--<li>
                                            <a href="{{ asset('storage/' . $user->idcard->file_name) }}" 
                                              target="_blank" 
                                              class="dropdown-item">
                                                Health Card
                                            </a>
                                        </li>--}}
                                    @else
                                        {{-- Logged in but no idcard --}}
                                        <li>
                                            <a class="dropdown-item" href="{{ route('health.registration') }}">Health Card Registration</a>
                                        </li>
                                    @endif


                                       
                                        {{-- <li><a class="dropdown-item" href="{{ route('doctorList')}}">Doctor Appointment</a></li>
                                        <li><a class="dropdown-item" href="{{ route('shop.shasthoseba') }}">93 Shasthoseba Pharma</a></li> --}}
                                        <li><a class="dropdown-item" href="{{ url('page/charity') }}">Charity</a></li>
                                    </ul>
                                </li>
                            
                                <li>
                                    <a class="dropdown-item" href="{{ route('news') }}">
                                        News
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{route('gallery')}}">
                                        Gallery
                                    </a>
                                </li>
                                
                                
                                
                            </ul>
                        </li>


                        <li class="dropdown dropdown-full-color dropdown-secondary">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('hospitalList') || request()->routeIs('ambulanceProviderList') ? 'active' : '' }}" class="dropdown-toggle" href="javascript:void(0)">
                                Service
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('hospitalList')}}">Hospitals</a></li>
                                <li><a class="dropdown-item" href="{{ route('ambulanceProviderList')}}">Ambulances</a></li>
                                <li><a class="dropdown-item" href="{{ route('diagnostic')}}">Diagnostic </a></li>
                                
                            </ul>
                        </li>

                        <li class="dropdown-full-color dropdown-secondary">
                            <a class="nav-link {{ request()->routeIs('allProductCategories') ? 'active' : '' }}" href="{{route('allProductCategories')}}">
                                Pharmacy E-Shopping
                            </a>
                        </li>
                        <li class="dropdown-full-color dropdown-secondary">
                            <a class="nav-link {{ request()->routeIs('doctorList') ? 'active' : '' }}" href="{{ route('doctorList') }}">
                                Doctor’s Appointment
                            </a>
                        </li>
                        <li class="dropdown-full-color dropdown-secondary">
                            <a class="nav-link {{ request()->routeIs('blogEventList') ? 'active' : '' }}" href="{{ route('blogEventList') }}">
                                Event
                            </a>
                        </li>


                        @if(Auth::check())
                        @php $user = auth()->user(); @endphp
                        <li class="dropdown dropdown-full-color dropdown-secondary">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('admin.dashboard') || request()->routeIs('user.dashboard') ? 'active' : '' }}" class="dropdown-toggle" href="javascript:void(0)">
                                <i class="fa fa-user"></i>&nbsp; {{ $user->name }}
                            </a>
                            <ul class="dropdown-menu">
                                @if ($user->hasRole('admin'))
                                    <li><a class="dropdown-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                                @endif
                                <li><a class="dropdown-item {{ request()->routeIs('user.dashboard') ? 'active' : '' }}" href="{{ route('user.dashboard') }}">Member Dashboard</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        </li>
                            @else
                            <li class="dropdown-full-color dropdown-secondary">
                            <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">
                                Login
                            </a>
                        </li>
                        
                        @endif

                        
                    </ul>
                </nav>

              </div>
              <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                <i class="fas fa-bars"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</header>

   