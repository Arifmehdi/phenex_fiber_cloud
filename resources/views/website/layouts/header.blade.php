    <header class="header fixed-top">
        <div class="header-main love-sticky">
            <div class="container">
                <div class="row align-items-center position-relative">
                    <div class="col-lg-2 col-sm-3 col-5">
                        <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('frontend')}}/assets/img/logo.png" class="main-logo" alt="">
                                <img src="{{ asset('frontend')}}/assets/img/sticky-logo.png" class="sticky-logo" alt=""></a></div>
                    </div>
                    <div class="col-lg-10 col-sm-9 col-7 d-flex align-items-center justify-content-end position-static">
                        <div class="nav-wrapper w-100 d-flex justify-content-end justify-content-lg-center">
                            <ul class="nav">
                                                                <li><a class="current-menu-parent" href="{{ route('home') }}">Home</a></li>
                                @foreach ($headerMenus as $menu)
                                    @php
                                        $pages = $menu->latestPages();
                                    @endphp
                                    <li>
                                        <a class="{{ request()->url() == ($menu->link ?? ($menu->slug ? route('page', $menu->slug) : '')) ? 'current-menu-parent' : '' }}" 
                                           href="{{ $menu->link ?? ($menu->slug ? route('page', $menu->slug) : 'javascript:void(0)') }}">
                                            {{ $menu->name_en }}
                                        </a>
                                        @if ($pages->count() > 0)
                                            <ul class="sub-menu">
                                                @foreach ($pages as $page)
                                                    <li>
                                                        <a href="{{ route('page', $page->slug) }}">
                                                            {{ $page->name_en }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                                    {{--<li><a href="{{ route('about') }}">About Us</a></li>--}}
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center mr-2 mr-sm-3">
                            <div class="search-toggle ml-sm-2 mr-2 mr-sm-3"><button class="search-toggle-btn"><img
                                        src="{{ asset('frontend')}}/assets/img/icons/search.svg" alt="" class="svg"></button>
                                <div class="full-page-search"><button class="search-close-btn"><i
                                            class="fa fa-times"></i></button>
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8">
                                                <div class="search-form p-5">
                                                    <form action="#">
                                                        <div class="input-wrapper"><input type="text"
                                                                placeholder="Enter Your Keyword" name="s" required>
                                                            <span class="input-icon"><i class="fa fa-search"></i></span>
                                                        </div><button type="submit" class="btn">SEARCH</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="user-login ml-sm-2 mr-2 mr-sm-3">
                                @if(Auth::check())
                                    <a href="{{ Auth::user()->hasRole('admin') ? route('admin.dashboard') : route('user.dashboard') }}">
                                        <img src="{{ asset('frontend')}}/assets/img/icons/user.svg" alt="Profile" class="svg" style="width: 20px; height: 20px;">
                                    </a>
                                @else
                                    <a href="{{ route('login') }}">
                                        <img src="{{ asset('frontend')}}/assets/img/icons/user.svg" alt="Login" class="svg" style="width: 20px; height: 20px;">
                                    </a>
                                @endif
                            </div>
                            <style>
                                .svg {
                                        height: 17px;
                                        width: auto; /* maintains aspect ratio */
                                    }
                            </style>
                            {{--<div class="flag-dropdown"><button class="dropdown-btn d-flex align-items-center"
                                    data-toggle="dropdown"><img src="{{ asset('frontend')}}/assets/img/icons/flag.png" alt="" class="flag">
                                    <img src="{{ asset('frontend')}}/assets/img/icons/down-arrow.svg" alt="" class="svg arrow"></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><img src="{{ asset('frontend')}}/assets/img/icons/flag1.png" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('frontend')}}/assets/img/icons/flag2.png" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('frontend')}}/assets/img/icons/flag3.png" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('frontend')}}/assets/img/icons/flag4.png" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('frontend')}}/assets/img/icons/flag5.png" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('frontend')}}/assets/img/icons/flag6.png" alt=""></a></li>
                                </ul>
                            </div>--}}
                        </div>
                        {{--<div class="offcanvas-trigger"><img src="{{ asset('frontend')}}/assets/img/icons/ofcanvas-trigar.svg" alt=""
                                class="svg"></div>--}}
                    </div>
                </div>
            </div>
        </div>
    </header>