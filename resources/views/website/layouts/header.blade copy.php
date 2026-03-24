        <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            {{--<img src="{{ asset('frontend/assets') }}/app/img/system_logo.png" alt="Business Solutions Bangladesh">--}}
            <img src="{{ $ws->logo_alt }}" alt="Business Solutions Bangladesh">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="active">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="#">Software</a></li>
                <li class="dropdown"><a href="#"><span>Telephony</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li>
                            <a href="#">IP Phone</a>
                        </li>

                        <li>
                            <a href="#">
                                IP-PBX Solution
                            </a>
                        </li>
                        <li>
                            <a href="#">Call
                                Center Solution</a>
                        </li>
                        <li>
                            <a href="#">
                                Integration with Legacy PBX
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Custom Call Center with CRM
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#"><span>Packages</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        
                        <li>
                            <a href="#">
                                Telephony Packages
                            </a>
                        </li>
                    </ul>
                </li>

                <li><a href="{{ route('team') }}">Team</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li class="nav-item ms-1">
                        <a href="{{ route('login') }}">Login</a>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>