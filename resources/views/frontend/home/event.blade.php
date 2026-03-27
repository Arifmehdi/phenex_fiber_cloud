@extends('frontend.layouts.master')

@section('title', "Events List")

@section('content')

<!-- Page Header -->
<section class="page-header page-header-modern bg-color-primary page-header-md">
    <div class="container">
        <div class="row">
              <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1>Events</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-end breadcrumb-light">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Events List</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Hospital Related News -->
<section class="py-5 bg-light">
    <div class="container">


        <div class="row g-4">
            @forelse ($events as $event)
                <div class="col-12">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="row g-0">
                            <!-- Image -->
                            <div class="col-md-4">
                                <a href="{{ route('singleNews', ['id' => $event->id]) }}">
                                    <img src="{{ route('imagecache', ['template' => 'cpmd', 'filename' => $event->fi()]) }}" 
                                         alt="{{ $event->title }}" 
                                         class="img-fluid rounded-start w-100 h-100 object-fit-cover">
                                </a>
                            </div>

                            <!-- Content -->
                            <div class="col-md-8">
                                <div class="card-body">
                                    <!-- Date with icon -->
                                    <p class="text-muted mb-3" style="font-size: 0.9rem;">
                                        <i class="far fa-calendar-alt me-1 text-primary"></i> 
                                        {{ \Carbon\Carbon::parse($event->created_at)->format('F d, Y') }}
                                    </p>

                                    <h5 class="card-title fw-bold">
                                        <a href="{{ route('eventDetails', ['id' => $event->id]) }}" class="text-dark text-decoration-none">
                                            {{ $event->title }}
                                        </a>
                                    </h5>
                                    <p class="card-text text-muted mb-3">
                                        {{ Str::limit($event->excerpt, 300, '...') }}
                                    </p>
                                    <a href="{{ route('eventDetails', ['id' => $event->id]) }}" 
                                       class="btn btn-sm btn-outline-primary">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-muted">No event available.</p>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-4 d-flex justify-content-end">
            {{ $events->links('vendor.pagination.bootstrap-5') }}
        </div>

    </div>
</section>

@endsection
