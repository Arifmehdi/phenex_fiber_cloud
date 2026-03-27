@extends('frontend.layouts.master')
@section('title', $event->title)

@section('content')

<!-- Page Header -->
<section class="page-header page-header-modern bg-color-primary page-header-md">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1>Event Details</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-end breadcrumb-light">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Event Details</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- News Content -->
<section class="py-5 bg-light">
    <div class="container">

        <div class="card border-0 shadow-sm mb-5">
            <div class="card-body">
                <!-- Title -->
                <h2 class="card-title h3 fw-bold mb-4">{{ $event->title }}</h2>

                <!-- Image -->
                <img src="{{ route('imagecache', ['template' => 'original', 'filename' => $event->fi()]) }}"
                     alt="{{ $event->title }}"
                     class="img-fluid rounded mb-4">

                <!-- Description -->
                <div class="card-text text-muted mb-4">
                    {!! $event->description ?? '' !!}
                </div>
                <!-- YouTube Video -->
                @if(!empty($event->video_link))
                    @php
                        // Convert YouTube link to embeddable format
                        $videoId = '';
                        if (preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $event->video_link, $matches)) {
                            $videoId = $matches[1];
                        }
                    @endphp

                    @if($videoId)
                        <div class="ratio ratio-16x9 mb-4">
                            <iframe src="https://www.youtube.com/embed/{{ $videoId }}" 
                                    title="YouTube video player" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                    allowfullscreen>
                            </iframe>
                        </div>
                    @endif
                @endif

                <hr>

                <!-- Category -->
                <p class="mb-0 text-muted">
                    <strong>Category:</strong>
                    <a href="javascript:void(0)" class="text-decoration-none text-primary">
                        {{ $event->category->name ?? '' }}
                    </a>
                </p>
            </div>
        </div>

        <!-- Related News -->
        <h4 class="fw-bold mb-4">Related <span class="text-danger">News</span></h4>

        {{--<div class="row g-4">
            @forelse ($relatedPosts as $post)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm hover-shadow">
                        <a href="{{ route('singleNews',['id' => $post->id]) }}">
                            <img src="{{ route('imagecache', ['template' => 'cpmd', 'filename' => $post->fi()]) }}"
                                 class="card-img-top" alt="{{ $post->title }}">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-2">
                                <a href="{{ route('singleNews', ['id' => $post->id]) }}" class="text-dark text-decoration-none">
                                    {!! Str::limit($post->title, 40) !!}
                                </a>
                            </h5>
                            <p class="card-text text-muted small mb-0">
                                {!! Str::limit($post->excerpt, 60) !!}
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-muted">No related news available.</p>
                </div>
            @endforelse
        </div>--}}

    </div>
</section>

@endsection
