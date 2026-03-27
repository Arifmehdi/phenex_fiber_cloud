@extends('frontend.layouts.master')

@section('content')

<!-- Page Header -->
<section class="page-header page-header-modern bg-color-primary page-header-md">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1>{{ $hospital->name_en }}</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-end breadcrumb-light">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('hospitalList') }}">Hospitals</a></li>
                    <li class="active">{{ $hospital->name_en }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Hospital Details -->
<section class="pt-5 pb-4">
    <div class="container">

        <!-- Hospital Info -->
        <div class="row mb-5">
            <div class="col-md-4">
                <img src="{{ route('imagecache', ['template'=>'cpmd','filename' => $hospital->fi()]) }}" 
                     alt="{{ $hospital->name_en }}" 
                     class="img-fluid rounded shadow-sm">
            </div>
            <div class="col-md-8">
                <h2 class="fw-bold text-primary">{{ $hospital->name_en }}</h2>
                <p class="text-muted mb-2"><i class="fas fa-map-marker-alt me-2"></i>{{ $hospital->address_en ?? 'No address available' }}</p>
                <p class="mb-2"><i class="fas fa-phone-alt me-2"></i>{{ $hospital->hospital_contacts ?? 'No phone available' }}</p>
<div class="hospital-description">
    {!! $hospital->description_en ?? 'No description available' !!}
</div>

<style>
.hospital-description p {
    display: flex;
    flex-wrap: wrap;
    gap: 10px; /* space between images */
    justify-content: center; /* centers images if they don't fill the row */
    align-items: center; /* Vertically align items */
}

.hospital-description a {
    flex: 1 1 calc(25% - 10px); /* 4 images per row on large screens */
    max-width: calc(25% - 10px);
    display: block;
    border-radius: 8px; /* optional */
    overflow: hidden; /* hide anything that overflows the rounded corners */
    /* Set a background color for the letterbox effect of 'contain' */
    background-color: #f0f0f0;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    transition: box-shadow 0.3s ease;
}

.hospital-description a:hover {
    box-shadow: 0 8px 16px rgba(0,0,0,0.2);
}

.hospital-description img {
    width: 100%;
    height: auto;
    max-height: 200px; /* Limit the maximum height of the image */
    display: block;
    /* 'contain' will fit the whole image, letterboxing if necessary */
    object-fit: contain; 
}

/* Responsive adjustments for tablets */
@media (min-width: 768px) and (max-width: 991px) {
    .hospital-description a {
        flex-basis: calc(50% - 10px); /* 2 images per row */
        max-width: calc(50% - 10px);
    }
}

/* Responsive adjustments for mobile */
@media (max-width: 767px) {
    .hospital-description a {
        flex-basis: 100%; /* 1 image per row */
        max-width: 100%;
    }
}
</style>

  </div>
        </div>

        <!-- Doctors Section -->
        <div class="row mb-3">
            <div class="col-md-6">
                <h4 class="fw-bold text-dark">Doctors</h4>
            </div>
            <hr>
        </div>

        <!-- Doctors Grid -->
        <div class="row g-4">
            @forelse ($doctors as $doctor)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="row g-0">
                            <div class="col-4">
                                <img src="{{ route('imagecache', ['template'=>'pplg','filename' => $doctor->fi()]) }}" 
                                     alt="{{ $doctor->name_en }}" 
                                     class="img-fluid rounded-start">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title text-danger fw-bold mb-1">{{ $doctor->name_en }}</h5>
                                    <p class="text-success mb-1 fw-semibold">{{ $doctor->department->name_en ?? '' }}</p>
                                    <p class="mb-1">{{ $doctor->designation }}</p>
                                    <p class="small text-muted mb-0">
                                        {{ Str::limit($doctor->excerpt, 70, '...') }}
                                        <a href="{{ route('doctorDetails', $doctor->id) }}" class="text-danger fw-bold">More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-muted text-center">No doctors available in this hospital.</p>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="row mt-4">
            <div class="col d-flex justify-content-center">
                {{ $doctors->links() }}
            </div>
        </div>

    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const hospitalDescription = document.querySelector('.hospital-description');
    if (hospitalDescription) {
        const p = hospitalDescription.querySelector('p');
        if (p) {
            // Part 1: Separate text from images
            const textNodes = Array.from(p.childNodes).filter(node => node.nodeType === Node.TEXT_NODE && node.textContent.trim().length > 0);
            const textContent = textNodes.map(node => node.textContent.trim()).join(' ');

            if (textContent) {
                const textElement = document.createElement('p');
                textElement.textContent = textContent;
                hospitalDescription.insertBefore(textElement, p);
                textNodes.forEach(node => node.remove());
            }

            // Part 2: Add lightbox functionality (safer version)
            const images = p.querySelectorAll('img');
            images.forEach(originalImg => {
                const link = document.createElement('a');
                link.href = originalImg.src;
                link.setAttribute('data-lightbox', 'hospital-gallery');

                const newImg = document.createElement('img');
                newImg.src = originalImg.src;
                
                link.appendChild(newImg);
                originalImg.parentNode.replaceChild(link, originalImg);
            });
        }
    }
});
</script>

@endsection
