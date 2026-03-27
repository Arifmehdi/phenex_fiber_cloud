@extends('frontend.layouts.master')
@push('css')

<style>
.custom-owl-prev,
.custom-owl-next {
    border-radius: 50%;
    width: 38px;
    height: 38px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.form-control:focus {
    border: 2px solid #1abc9c;
    /* bright green border */
    box-shadow: 0 0 5px rgba(26, 188, 156, 0.5);
}

.form-select:focus {
    border: 2px solid #1abc9c;
    box-shadow: 0 0 5px rgba(26, 188, 156, 0.5);
}

textarea.form-control:focus {
    border: 2px solid #1abc9c;
    box-shadow: 0 0 5px rgba(26, 188, 156, 0.5);
}

/* partner logo css  */
.partner-card {
    display: block;
    padding: 15px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.partner-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.partner-logo-wrapper {
    padding: 10px;
    background: #f9f9f9;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100px;
}

.partner-logo {
    max-height: 80px;
    object-fit: contain;
}

.partner-name {
    margin-top: 8px;
    font-size: 14px;
    font-weight: bold;
    color: #333;
}


</style>
@endpush

@section('content')


@if (Agent::isDesktop())

<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual 
    dots-inside dots-vertical-center dots-align-right dots-orientation-portrait 
    custom-dots-style-1 show-dots-hover show-dots-xs nav-style-1 nav-inside 
    nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0"
    data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['650px','650px','650px','550px','500px']"
    style="height: 650px;">

    <div class="owl-stage-outer">
        <div class="owl-stage">


            @forelse ($sliders as $slider)

            <div class="owl-item position-relative overlay overlay-show overlay-op-3" style="background-image: url({{ route('imagecache', ['template'=>'original','filename' => $slider->fi()]) }}); 
                            background-size: cover; background-position: center;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row align-items-center h-100">
                        <div class="col pb-4">

                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="owl-item position-relative overlay overlay-show overlay-op-3" style="background-image: url('{{ asset('img/default-slider.jpg') }}'); 
                            background-size: cover; background-position: center;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row align-items-center h-100">
                        <div class="col pb-4">
                            <h2 class="text-color-light font-weight-extra-bold text-5 mb-3">
                                Welcome to Our Website
                            </h2>
                            <p class="text-color-light font-weight-light text-4 mb-0">
                                Default slider will show if no sliders found.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforelse

        </div>
    </div>
    <div class="owl-dots mb-5">
        <button role="button" class="owl-dot active"><span></span></button>
        <button role="button" class="owl-dot"><span></span></button>
    </div>
</div>


@else
<div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark mb-2"
    data-plugin-options="{'items': 1, 'margin': 10, 'loop': true, 'nav': true, 'dots': true,'autoplay': true}">
    @foreach ($sliders as $slider)
    <div>
        <div class="img-thumbnail border-0 p-0 d-block">
            <a target="_blank" href="{{ $slider->link }}">
                <img class="img-fluid border-radius-0"
                    src="{{ route('imagecache', [ 'template'=>'original','filename' => $slider->fi() ]) }}" alt="">
            </a>
        </div>
    </div>
    @endforeach
</div>
@endif

<!-- Banner Slider start  -->
{{--<section class="mb-3 d-block d-lg-none">
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-body p-2">
                <div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'margin': 5, 'loop': true, 'nav': false, 'dots': false, 'autoplay': true}" style="margin-bottom: 2px">
                    <div>
                        <a href="#">
                            <img class="img-fluid rounded" src="{{ asset('frontend/assets/img/flash-sale.gif') }}" alt="Flash Sale 1">
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img class="img-fluid rounded" src="{{ asset('frontend/assets/img/flash-sale.gif') }}" alt="Flash Sale 2">
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img class="img-fluid rounded" src="{{ asset('frontend/assets/img/flash-sale.gif') }}" alt="Flash Sale 3">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>--}}

<!-- single banner  -->
@if($banner)
<section class="mb-3 d-block d-lg-none">
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-body p-2 text-center">
                <a href="{{ $banner->link }}">
                    <img class="img-fluid rounded"
                         src="{{ route('imagecache', ['template' => 'original', 'filename' => $banner->fi()]) }}"
                         alt="{{ $banner->title }}">
                </a>
            </div>
        </div>
    </div>
</section>
@else
<section class="mb-3 d-block d-lg-none">
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-body p-2 text-center">
                <a href="#">
                    <img class="img-fluid rounded"
                         src="{{ asset('frontend/assets/img/flash-sale.gif') }}"
                         alt="Flash Sale">
                </a>
            </div>
        </div>
    </div>
</section>
@endif


<section class="section-custom-medical d-none d-lg-block">
    <div class="container">
        <div class="row medical-schedules">
            {{-- <div class="col-xl-3 box-one bg-color-primary appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="0">
            <div class="feature-box feature-box-style-2 align-items-center p-4">
                <div class="feature-box-icon p-0">
                    <img src="img/demos/medical/icons/medical-icon-heart.png" alt class="img-fluid pt-1" />
                </div>
                <div class="feature-box-info">
                    <a href="{{route('doctorList')}}" title="" class="text-decoration-none">

            Medical Treatment
            </a>
        </div>
    </div>
    </div> --}}
    <div class="col-xl-3 box-two bg-color-primary appear-animation" data-appear-animation="zoomIn"
        data-appear-animation-delay="200">
        <h5 class="m-0">
            <a href="{{route('doctorList')}}" title="">
                Medical Treatment
                <i class="icon-arrow-right-circle icons"></i>
            </a>
        </h5>
    </div>

    <div class="col-xl-3 box-two bg-color-tertiary appear-animation" data-appear-animation="zoomIn"
        data-appear-animation-delay="400">
        <h5 class="m-0">
            <a href="{{route('doctorList')}}" title="">
                Doctors Timetable
                <i class="icon-arrow-right-circle icons"></i>
            </a>
        </h5>
    </div>
    <div class="col-xl-3 box-three bg-color-primary appear-animation" data-appear-animation="zoomIn"
        data-appear-animation-delay="600">
        <div class="expanded-info p-4 bg-color-primary">
            <div class="info custom-info info custom-info text-white">
                <span>Sunday-Thursday</span><br>
                <span>10:00 AM to 10:00 PM </span>
            </div>
            <div class="info custom-info info custom-info text-white">
                <span>Friday-Saturday</span><br>
                <span>10:00 AM to 04.00 PM </span>
            </div>
            {{--<div class="info custom-info">
                    <span>Friday</span>
                    <span>9:00 to 16:00</span>
                </div>
                <div class="info custom-info">
                    <span>Saturday</span>
                    <span>9:00 to 16:00</span>
                </div>--}}
        </div>
        <h5 class="m-0">
            Opening Hours
            <i class="icon-arrow-right-circle icons"></i>
        </h5>
    </div>
    <div class="col-xl-3 box-four bg-color-tertiary p-0 appear-animation" data-appear-animation="zoomIn"
        data-appear-animation-delay="800">
        <a href="tel:+008001234567" class="text-decoration-none">
            <div class="feature-box feature-box-style-2 m-0">
                <div class="feature-box-icon">
                    <i class="icon-call-out icons"></i>
                </div>
                <div class="feature-box-info">
                    <label class="font-weight-light">Emergency case</label>
                    <span class="fw-bold">{{$ws->contact_mobile}}</span>
                    {{--<strong class="font-weight-normal">{{$ws->contact_mobile}}</strong>--}}
                </div>
            </div>
        </a>
    </div>
    </div>

    </div>
</section>

<section class="section my-0">
    <div class="container">
        <div class="row text-center">
            <div class="col-md d-flex flex-column mb-3">
                <a href="{{ route('shop.shasthoseba')}}" class="text-decoration-none d-block flex-fill">
                    <div class="thumb-info h-100">
                        <div class="thumb-info-side-image-wrapper">
                            <img alt="" class="img-fluid"
                                src="{{ route('imagecache', ['template'=>'cpmd','filename' => $ws->eccomerce_img()]) }}">
                        </div>
                        <div class="thumb-info-caption py-3">
                            <h4 class="font-weight-semibold mb-1 w3-large">Pharmacy E-Shopping</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md d-flex flex-column mb-3">
                <a href="{{ route('doctorList')}}" class="text-decoration-none d-block flex-fill">
                    <div class="thumb-info h-100">
                        <div class="thumb-info-side-image-wrapper">
                            <img alt="" class="img-fluid"
                                src="{{ route('imagecache', ['template'=>'cpmd','filename' => $ws->doctor_img()]) }}">
                        </div>
                        <div class="thumb-info-caption py-3">
                            <h4 class="font-weight-semibold mb-1 w3-large">Doctor’s Appointment</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md d-flex flex-column mb-3">
                <a href="{{ route('hospitalList')}}" class="text-decoration-none d-block flex-fill">
                    <div class="thumb-info h-100">
                        <div class="thumb-info-side-image-wrapper">
                            <img alt="" class="img-fluid"
                                src="{{ route('imagecache', ['template'=>'cpmd','filename' => $ws->hospital_img()]) }}">
                        </div>
                        <div class="thumb-info-caption py-3">
                            <h4 class="font-weight-semibold mb-1 w3-large">Hospitals Service</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md d-flex flex-column mb-3">
                <a href="{{ route('ambulanceProviderList')}}" class="text-decoration-none d-block flex-fill">
                    <div class="thumb-info h-100">
                        <div class="thumb-info-side-image-wrapper">
                            <img alt="" class="img-fluid"
                                src="{{ route('imagecache', ['template'=>'cpmd','filename' => $ws->ambulance_img()]) }}">
                        </div>
                        <div class="thumb-info-caption py-3">
                            <h4 class="font-weight-semibold mb-1 w3-large">Ambulances Service</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md d-flex flex-column mb-3">
                <a href="{{ route('diagnostic') }}" class="text-decoration-none d-block flex-fill">
                    <div class="thumb-info h-100">
                        <div class="thumb-info-side-image-wrapper">
                            <img alt="" class="img-fluid"
                                src="{{ route('imagecache', ['template'=>'cpmd','filename' => $ws->diagnostic_img()]) }}">
                        </div>
                        <div class="thumb-info-caption py-3">
                            <h4 class="font-weight-semibold mb-1 w3-large">Diagnostic Service</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="container">

        <!-- Section Header -->
        <div class="row mb-4">
            <div class="col text-center">
                <h2 class="fw-bold display-6 text-primary mb-2">Hospital Services</h2>
                <p class="text-muted">Choose the best hospitals and get world-class treatment</p>
            </div>
        </div>

        <!-- Owl Carousel -->
        <div class="row">
            <div class="owl-carousel owl-theme show-nav-title"
                data-plugin-options='{"items": 4, "margin": 10, "loop": true, "nav": true, "autoplay":true, "dots": false}'>
                @foreach ($hospitals as $hospital)
                <div class="item">
                    <a href="{{ route('hospitalDetails', $hospital->id)}}" class="text-decoration-none">
                        <div class="card border-0  rounded overflow-hidden h-100 hover-shadow ">

                            <!-- Hospital Image -->
                            <div class="position-relative">
                                <img class="card-img-top img-fluid"
                                    src="{{ route('imagecache', ['template'=>'cpmd','filename' => $hospital->fi()]) }}"
                                    alt="{{ $hospital->name_en }}">
                                <!-- Overlay Effect (light opacity) -->
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark"
                                    style="opacity:0; transition: all 0.3s ease-in-out;"
                                    onmouseover="this.style.opacity='0.25';" onmouseout="this.style.opacity='0';">
                                    <div class="d-flex h-100 justify-content-center align-items-center">
                                        <span class="btn btn-outline-light rounded-pill px-4">View Details</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body text-center py-3">
                                <h5 class="card-title fw-semibold text-dark mb-0">
                                    {{ $hospital->name_en }}
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

<section class="section section-no-border">
    <div class="container">
        <div class="row pt-3">
            <div class="col text-center mb-4">
                <h2 class="fw-semibold display-6 mb-2 text-primary">Departments</h2>
                <p class="text-muted fs-6 mb-0">Explore our specialized medical departments</p>
            </div>
        </div>
        <div class="row mt-4">
            @foreach ($departments as $department)
            <div class="col-lg-4">
                <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp"
                    data-appear-animation-delay="300">
                    <div class="feature-box-icon" style="min-width: 4.7rem;">
                        <img src="{{ route('imagecache', ['template'=>'original','filename' => $department->fi()]) }}"
                            alt class="img-fluid" />
                    </div>
                    <div class="feature-box-info">
                        <h4 class="font-weight-semibold"><a href="javascript::void(0)"
                                class="text-decoration-none">{{$department->name_en}}</a></h4>
                        <p>{{$department->excerpt_en}}</p>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

        <div class="row mt-2 pb-4">
            <div class="col-lg-12 text-center">
                <a class="btn btn-outline btn-quaternary custom-button text-uppercase mt-4 font-weight-bold"
                    href="{{route('departmentList')}}">View More</a>
            </div>
        </div>
    </div>
</section>

<section class="team pb-2">
    <div class="container">
        <div class="row pt-4">
            <div class="col text-center">
                <h2 class="fw-bold display-6 text-primary mb-2">Our Specialist Doctors</h2>
                <p class="text-muted"> Meet our specialists delivering expert care with dedication and compassion.</p>

                <div id="porfolioAjaxBoxMedical" class="ajax-box ajax-box-init mb-4">
                    <div class="bounce-loader">
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                    </div>
                    <div class="ajax-box-content" id="porfolioAjaxBoxContentMedical"></div>
                </div>
            </div>
        </div>

        <div class="row pb-5">
            <div class="owl-carousel owl-theme nav-bottom rounded-nav show-nav-title ps-1 pe-1"
                data-plugin-options="{'items': 4, 'loop': false, 'dots': false, 'nav': true}">

                @foreach ($doctors as $doctor)
                <div class="pe-3 ps-3">
                    <a href="{{ route('doctorDetails', $doctor->id) }}" class="text-decoration-none">
                        <span class="thumb-info thumb-info-no-zoom thumb-info-hide-wrapper-bg">
                            <span class="thumb-info-wrapper m-0">
                                <img src="{{ route('imagecache', ['template'=>'pfimd','filename' => $doctor->fi()]) }}"
                                    class="img-fluid" alt="{{ $doctor->name_en }}">
                            </span>
                            <span class="thumb-info-caption p-4">
                                <span class="custom-thumb-info-title">
                                    <span
                                        class="custom-thumb-info-type font-weight-light text-4">{{ $doctor->department->name_en }}</span>
                                    <span
                                        class="custom-thumb-info-inner font-weight-semibold text-5">{{ $doctor->name_en }}</span>
                                    <i class="icon-arrow-right-circle icons font-weight-semibold text-5"></i>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

<section class="section overlay overlay-show overlay-color-primary custom-overlay-opacity-40 border-0 m-0" style="background: url({{ route('imagecache', ['template'=>'pfimd','filename' => 'parallax.jpg']) }}); 
                background-size: cover; 
                background-position: center;">
    <div class="container position-relative z-index-2 pt-5">
        <div class="row">
            <div class="col text-center">
                <h3 class="font-weight-bold text-color-light text-4-5 ls-0 mb-2">About Us</h3>
                <h2 class="font-weight-bold text-color-light text-8 line-height-3 line-height-md-1 mb-1">Chief Doctor
                    Says</h2>
            </div>
        </div>

        <div class="row counters counters-sm text-6 pb-5 pt-4 mt-5">
            <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                <div class="counter">
                    <strong class="text-color-light font-weight-extra-bold text-8 line-height-1" data-to="100"
                        data-append="+">100%</strong>
                    <span class="text-color-light font-weight-normal line-height-1 text-0 mt-0">Quality</span>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                <div class="counter">
                    <strong class="text-color-light font-weight-extra-bold text-8 line-height-1" data-to="1575"
                        data-append="+">1575+</strong>
                    <span class="text-color-light font-weight-normal line-height-1 text-0 mt-0">Patients a year</span>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                <div class="counter">
                    <strong class="text-color-light font-weight-extra-bold text-8 line-height-1" data-to="26"
                        data-append="+">26+</strong>
                    <span class="text-color-light font-weight-normal line-height-1 text-0 mt-0">People working</span>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="counter">
                    <strong class="text-color-light font-weight-extra-bold text-8 line-height-1" data-to="5"
                        data-append="+">5+</strong>
                    <span class="text-color-light font-weight-normal line-height-1 text-0 mt-0">Years of
                        experience</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section my-0">
    <div class="container">

        <!-- Section Title -->
        <div class="row mb-4">
            <div class="col text-center">
                <h2 class="fw-bold display-6 text-primary mb-2">Ambulance Services</h2>
                <p class="text-muted">Choose the best ambulance service and get world-class treatment</p>
            </div>
        </div>

        <!-- Custom Nav -->
        <div class="d-flex justify-content-end mb-2">
            <button class="btn btn-outline-primary btn-sm me-2 custom-owl-prev">
                <i class="icon-arrow-left icons"></i>
            </button>
            <button class="btn btn-outline-primary btn-sm custom-owl-next">
                <i class="icon-arrow-right icons"></i>
            </button>
        </div>

        <!-- Owl Carousel -->
        <div class="owl-carousel owl-theme" id="ambulance-carousel"
            data-plugin-options='{"items": 4, "margin": 10, "loop": true, "nav": false, "autoplay":true, "dots": false}'>
            @foreach ($ambulances as $ambulance)
            <div class="item">
                <div class="card border-0 shadow-sm h-100 rounded overflow-hidden">
                    <a href="javascript:void(0)" class="text-decoration-none">
                        <img src="{{ route('imagecache', ['template'=>'pfimd','filename'=>$ambulance->fi()]) }}"
                            class="card-img-top img-fluid" alt="{{ $ambulance->name }}">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-1">{{ $ambulance->name }}</h5>
                            <p class="card-subtitle w3-small text-muted">{{ $ambulance->tagline }}</p>
                            <p class="mb-0 mt-2">📞 {{ $ambulance->mobile }}</p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>




{{-- <section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">

                <!-- Card -->
                <div class="card shadow-lg border-0 rounded overflow-hidden">
                    
                    <!-- Card Header -->
                    <div class="card-header bg-primary text-white text-center py-4">
                        <h2 class="h3 mb-1 fw-bold">Book an Appointment</h2>
                        <p class="mb-0 text-dark">Send a message or book your visit with our specialists</p>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body p-4 p-md-5">
                        
                        <!-- Success/Error Messages -->
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
@endif
@if(session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif
<form action="{{ route('storeAppointment')}}" method="POST">
    @csrf
    <div class="row g-3 mb-3">
        <div class="col-md-6">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Your Email" required>
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row g-3 mb-3">

        <!-- Department -->
        <div class="col-md-6">
            <label for="department" class="form-label">Department</label>
            <select id="department" class="form-select" required>
                <option value="">Select Department</option>
                @foreach($departments as $department)
                <option value="{{ $department->id }}">
                    {{ $department->name_en }}
                </option>
                @endforeach
            </select>
            @error('department_id')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!-- Doctor -->
        <div class="col-md-6">
            <label for="doctor" class="form-label">Doctor</label>
            <select id="doctor" class="form-select" name="doctor_id" required>
                <option value="">Select Doctor</option>
                @foreach($doctors as $doctor)
                <option value="{{ $doctor->id }}" data-fee="{{ $doctor->doctor_fee }}"
                    data-chamber="{{ $doctor->chambar_location }}" data-department="{{ $doctor->department_id }}">
                    {{ $doctor->name_en }}
                </option>
                @endforeach
            </select>
            @error('doctor_id')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="doctor_fee" class="form-label">Doctor Fee</label>
            <input type="text" id="doctor_fee" name="doctor_fee" class="form-control" placeholder="Doctor Fee" required>
            @error('doctor_fee')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="chambar_location" class="form-label">Chamber Location</label>
            <input type="text" id="chambar_location" name="chambar_location" class="form-control"
                placeholder="Chamber Location" required>
            @error('chambar_location')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="row g-3 mb-3">
            <div class="col-md-6">
                <label for="mobile" class="form-label">Phone</label>
                <input type="tel" id="mobile" name="mobile" class="form-control" placeholder="Phone" required>
                @error('mobile')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="appointment_date" class="form-label">Appointment Date</label>
                <input type="date" id="appointment_date" name="appointment_date" class="form-control" required>
                @error('appointment_date')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea id="message" name="message" rows="4" class="form-control" placeholder="Message"></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg rounded-pill px-5">
                Make an Appointment
            </button>
        </div>
</form>

</div> <!-- End Card Body -->
</div> <!-- End Card -->

</div>
</div>
</div>
</section> --}}

<section class=" my-5">
    <div class="container">

        <!-- Section Title -->
        <div class="row mb-4">
            <div class="col text-center">
                <h2 class="fw-bold display-6 text-primary mb-2">Latest News</h2>
                <p class="text-muted">Be the first to read</p>
            </div>
        </div>
        <div class="row">
            @foreach ($newses as $news)
            <div class="col-md-4">
                <a href="{{ route('singleNews', ['id' => $news->id]) }}" class="text-decoration-none">
                    <span
                        class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight d-block">
                        <span class="thumb-info-side-image-wrapper">
                            <img alt="" class="img-fluid"
                                src="{{ route('imagecache', ['template'=>'cpmd','filename' => $news->fi()]) }}">
                        </span>
                        <span class="thumb-info-caption px-4 pb-3">
                            <span class="thumb-info-caption-text p-xl">
                                <h4 class="font-weight-semibold mb-1">
                                    {{ \Illuminate\Support\Str::limit($news->title, 65, '...') }}</h4>
                                <p class="text-3">{{ \Illuminate\Support\Str::limit($news->excerpt, 150, '...') }}</p>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
            @endforeach
        </div>
        <div class="row pb-4">
            <div class="col-lg-12 text-center">
                <a href="{{ route('news')}}"
                    class="btn btn-outline btn-quaternary custom-button text-uppercase font-weight-bold">view more</a>
            </div>
        </div>
    </div>
</section>

<section class="section my-5">
    <div class="container">
        <!-- Section Header -->
        <div class="row mb-4">
            <div class="col text-center">
                <h2 class="fw-bold display-6 text-primary mb-2">Our Partners</h2>
                <p class="text-muted">We are proud to partner with leading organizations.</p>
            </div>
        </div>

        <!-- Owl Carousel -->
        <div class="row">
            <div class="owl-carousel owl-theme"
                data-plugin-options='{"items": 5, "margin": 15, "loop": true, "autoplay":true, "dots": false, "nav": true, "responsive":{"0":{"items":2},"576":{"items":3},"768":{"items":4},"992":{"items":5}}}'>

                @foreach($partners as $partner)
                <div class="item text-center">
                    <a href="{{$partner->link}}" target="_blank" class="partner-card">
                        <div class="partner-logo-wrapper">
                            <img src="{{asset($partner->logo)}}" alt="{{$partner->name}}"
                                class="img-fluid partner-logo">
                        </div>
                        <p class="partner-name">{{$partner->name}}</p>
                    </a>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
@endsection

@push('js')
<script>
$(document).ready(function() {
    var owl = $('#ambulance-carousel');


    // Custom Nav
    $('.custom-owl-next').click(function() {
        owl.trigger('next.owl.carousel');
    });
    $('.custom-owl-prev').click(function() {
        owl.trigger('prev.owl.carousel');
    });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const departmentSelect = document.getElementById('department');
    const doctorSelect = document.getElementById('doctor');
    const doctorFeeInput = document.getElementById('doctor_fee');
    const chamberInput = document.getElementById('chambar_location');

    // Filter doctors based on department
    departmentSelect.addEventListener('change', function() {
        const selectedDept = this.value;
        doctorSelect.value = ''; // reset doctor
        doctorFeeInput.value = '';
        chamberInput.value = '';

        for (let option of doctorSelect.options) {
            if (!option.value) continue; // skip "Select Doctor"
            if (option.dataset.department === selectedDept) {
                option.style.display = 'block';
            } else {
                option.style.display = 'none';
            }
        }
    });

    // Populate fee and chamber when doctor selected
    doctorSelect.addEventListener('change', function() {
        const selectedOption = this.selectedOptions[0];
        doctorFeeInput.value = selectedOption.dataset.fee || '';
        chamberInput.value = selectedOption.dataset.chamber || '';
    });

    // Trigger change to initialize
    departmentSelect.dispatchEvent(new Event('change'));
});
</script>
@endpush