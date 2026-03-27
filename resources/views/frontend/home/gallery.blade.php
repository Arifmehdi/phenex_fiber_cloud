@extends('frontend.layouts.master')

@push('css')
<style>
    /* Grid layout refinement */
    .member-card {
        transition: all 0.3s ease;
        border: none;
        overflow: hidden;
        border-radius: 12px;
    }

    .member-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    }

.member-card img {
    width: 100%;
    height: auto;
    object-fit: contain;
    background-color: #f8f9fa; /* optional light background */
}

    .member-card .card-body {
        padding: 10px 12px;
        text-align: center;
    }

    .member-card h6 {
        font-size: 0.95rem;
        margin-bottom: 4px;
        color: #0a4275;
        font-weight: 600;
    }

    .member-card p {
        font-size: 0.8rem;
        color: #777;
        margin: 0;
    }

    @media (max-width: 576px) {
        .member-card img {
            height: 150px;
        }
    }
</style>
@endpush

@section('content')

<!-- Page Header -->
<section class="page-header page-header-modern bg-color-primary page-header-md my-0">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1>93 Shasthoseba Foundation</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-end breadcrumb-light">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">93 Shasthoseba Foundation</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Executive Members Section -->
<section class="section my-0">
  <div class="container pb-3">

    <div class="row mb-4">
      <div class="col text-center">
        <h2 class="fw-bold display-6 text-primary mb-2">Foundation Executive Members</h2>
        <hr class="mx-auto" style="width: 80px; border: 2px solid #0a4275;">
      </div>
    </div>

    <!-- Members Grid -->
    <div class="row g-3">
      @foreach ($galleries as $gallery)
        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
          <div class="card member-card shadow-sm h-100">
            <img src="{{ route('imagecache', ['template'=>'original','filename'=>$gallery->fi()]) }}" 
                 alt="{{ $gallery->name }}" class="img-fluid">
            <div class="card-body">
              <h6>{{ $gallery->title }}</h6>
              <p>{{ $gallery->designation }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <!-- Pagination -->
    <div class="row mt-4">
      <div class="col-12 d-flex justify-content-center">
        {{ $galleries->links() }}
      </div>
    </div>

  </div>
</section>

@endsection

@push('js')
<script>
  // optional custom JS here
</script>
@endpush
