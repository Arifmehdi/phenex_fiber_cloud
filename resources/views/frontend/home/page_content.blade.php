@extends('website.layouts.master')

@section('title', 'Contact Us - ' . config('app.name'))
@section('meta')
    <meta name="description" content="Contact North Bengal for inquiries, product details, or business queries. Get in touch via phone, email, or visit our office.">
    <meta name="keywords" content="contact north bengal, contact us, north bengal inquiries, phone, email, office location">
    <meta property="og:title" content="Contact Us - North Bengal">
    <meta property="og:description" content="Reach North Bengal for product inquiries or business partnerships.">
    <meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/contact_banner.png') }}">
    <meta property="og:type" content="website">
@endsection

@section('content')


    <x-breadcrumb slug="Pages" image="{{ asset('frontend') }}/assets/img/media/page-title-bg.png"/>
    {{-- Other Pages --}}
    <section class="py-5">
            <div class="container">
                @if($page)

                @if($page->pageItems && count($page->pageItems))
                    @foreach ($page->pageItems as $item)
                        <div class="mb-3">
                            {!! $item->description_en ?? $item->description ?? '' !!}
                        </div>
                    @endforeach
                @else
                    <p>No content available for this page.</p>
                @endif
            @else
                <p>Page not found.</p>
            @endif
        </div>
    </section>


@endsection
