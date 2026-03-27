@extends('frontend.layouts.ecommercemaster')
@section('title', "All Categories")

@push('css')
<style>
.card-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card-hover:hover {
    transform: translateY(-1px) scale(1.01);
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.12);
}
</style>
@endpush

@section('content')
<section class="section my-0 py-0">
    <div class="container-fluid py-5">
        <div class="row g-4">
            
            <!-- Sidebar -->
            <div class="col-lg-2 order-2 order-lg-1 d-none d-lg-block">
                <aside class="sidebar">
                    <h5>Product Categories</h5>

                    <ul class="nav nav-list flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('productCategory') && !request()->segment(2) ? 'active' : '' }}" href="{{ route('productCategory') }}">
                                <span >All</span>
                            </a>
                        </li>

                        @if(isset($productCategories))
                            @foreach ($productCategories as $category)
                                @php
                                    $isActiveParent = request()->segment(2) === $category->slug ||
                                                      ($category->children->isNotEmpty() && $category->children->pluck('slug')->contains(request()->segment(2)));
                                @endphp
                                <li class="nav-item">
                                    <a class="nav-link parent-category {{ $isActiveParent ? 'active' : '' }}"
                                       href="{{ count($category->children) > 0 ? '#' : route('productCategory', $category->slug) }}"
                                       @if(count($category->children) > 0) data-bs-toggle="collapse" data-bs-target="#category-{{ $category->id }}" aria-expanded="{{ $isActiveParent ? 'true' : 'false' }}" @endif>
                                        <span>{{ $category->name_en }} </span>
                                        @if(count($category->children) > 0)
                                            <i class="fas fa-chevron-down float-end"></i>
                                        @endif
                                    </a>
                                    @if(count($category->children) > 0)
                                        <ul id="category-{{ $category->id }}" class="nav flex-column ms-3 collapse {{ $isActiveParent ? 'show' : '' }}">
                                            @foreach($category->children as $child)
                                                <li class="nav-item {{ request()->segment(2) === $child->slug ? 'active' : '' }}">
                                                    <a class="nav-link" href="{{ route('productCategory', $child->slug) }}">{{ $child->name_en }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </aside>
            </div>

            <div class="col-12 col-lg-10 order-1 order-lg-2"> 
                <!-- single banner  -->
                @if(isset($banner) && $banner)
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

                
                <!-- Marquee -->
                @if(isset($offers) && $offers->count() > 0)
                    <marquee behavior="scroll" direction="left" scrollamount="5" style="font-weight:bold; color:red;">
                        @foreach($offers as $key => $offer)
                            {{ $offer->text }}
                            @if($key < $offers->count() - 1)
                                &nbsp;&nbsp; | &nbsp;&nbsp;
                            @endif
                        @endforeach
                    </marquee>
                @else
                    <marquee behavior="scroll" direction="left" scrollamount="5" style="font-weight:bold; color:red;">
                        🎉 Special Offer: 50% OFF on all products! Hurry up! 🎉
                    </marquee>
                @endif


                <!-- Mobile Category Buttons -->
                <div class="d-flex overflow-x-auto mb-4">
                    <div class="d-flex flex-nowrap d-lg-none">

                        <!-- All Category -->
                        <a href="{{ route('productCategory') }}" 
                        class="btn btn-outline-primary m-1 d-flex align-items-center rounded-pill {{ request()->routeIs('productCategory') && !request()->segment(2) ? 'active' : '' }}"
                        style="{{ request()->routeIs('productCategory') && !request()->segment(2) ? 'background-color: #2D529F; border-color: #2D529F; color: #fff;' : '' }}">
                            <span class="ms-2 text-nowrap" 
                                style="color: {{ request()->routeIs('productCategory') && !request()->segment(2) ? '#fff' : '#2D529F' }};">
                                All Category
                            </span>
                        </a>

                        @if(isset($subcategories))
                            @foreach ($subcategories as $subcategory)
                                <a href="{{ route('productCategory', $subcategory->slug) }}" 
                                class="btn btn-outline-primary m-1 d-flex align-items-center rounded-pill {{ request()->segment(2) == $subcategory->slug ? 'active' : '' }}"
                                style="{{ request()->segment(2) == $subcategory->slug ? 'background-color: #2D529F; border-color: #2D529F; color: #fff;' : '' }}">
                                    <img src="{{ route('imagecache', ['template' => 'pnism', 'filename' => $subcategory->fi()]) }}" 
                                        alt="{{ $subcategory->name_en }}" class="rounded-circle" width="30" height="30">
                                    <span class="ms-2 text-nowrap" 
                                        style="color: {{ request()->segment(2) == $subcategory->slug ? '#fff' : '#2D529F' }};">
                                        {{ $subcategory->name_en }}
                                    </span>
                                </a>
                            @endforeach
                        @endif

                    </div>
                </div>


                <!-- Categories Grid (Adapted from original all-categories.blade.php with design from shasthoseba.blade.php) -->
                <div class="row g-4">
                    @foreach ($categories as $category)
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="card h-100 border-0 shadow-sm card-hover">
                                
                                <!-- Image -->
                                <a href="{{ route('productCategory', $category->slug) }}" class="d-block">
                                    <img src="{{ route('imagecache', ['template' => 'pnism', 'filename' => $category->fi()]) }}" 
                                         class="card-img-top rounded-top" 
                                         alt="{{ $category->name_en }}" 
                                         style="height: 150px; object-fit: contain;">
                                </a>

                                <!-- Body -->
                                <div class="card-body d-flex flex-column p-3">

                                    <!-- Category Name -->
                                    <h6 class="fw-semibold text-truncate mb-1">
                                        <a href="{{ route('productCategory', $category->slug) }}" 
                                           class="text-dark text-decoration-none">
                                            {{ $category->name_en }}
                                        </a>
                                    </h6>

                                    <!-- View Category Button -->
                                    <div class="mt-auto">
                                        <a href="{{ route('productCategory', $category->slug) }}" class="btn btn-outline-primary w-100 btn-sm">
                                            View Category
                                        </a>
                                    </div> 

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>
@endsection

@push('js')
<script>
@if(session('success'))
    Swal.fire({
        toast: true,
        icon: 'success',
        title: "{{ session('success') }}",
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
    });
@endif
</script>
@endpush