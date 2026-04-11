@extends('website.layouts.master')

@section('title', ($page->name_en ?? 'Page') . ' - ' . config('app.name'))
@section('meta')
    <meta name="description" content="{{ $page->excerpt_en ?? '' }}">
    <meta property="og:title" content="{{ $page->name_en ?? 'Page' }}">
    <meta property="og:description" content="{{ $page->excerpt_en ?? '' }}">
    <meta property="og:type" content="website">
@endsection

@section('content')


    <x-breadcrumb :slug="strtoupper($page->slug ?? 'Pages')" image="{{ asset('frontend') }}/assets/img/media/page-title-bg.png"/>
    
    <section class="py-5">
        <div class="container">
            @if($page)
                @if(count($sectionSetups) > 0)
                    @foreach($sectionSetups as $setup)
                        @php
                            $template = $setup->section->template ?? 'default';
                        @endphp

                        @switch($template)
                            @case('hero')
                                @include('frontend.components.templates.hero')
                                @break
                            @case('about')
                                @include('frontend.components.templates.about')
                                @break
                            @case('services')
                                @include('frontend.components.templates.services')
                                @break
                            @case('services_simple')
                                @include('frontend.components.templates.services_simple')
                                @break
                            @case('features')
                                @include('frontend.components.templates.features')
                                @break
                            @case('pricing')
                                @include('frontend.components.templates.pricing')
                                @break
                            @case('pricing_table')
                                @include('frontend.components.templates.pricing_table')
                                @break
                            @case('cta')
                                @include('frontend.components.templates.cta')
                                @break
                            @case('contact')
                                @include('frontend.components.templates.contact')
                                @break
                            @case('testimonial')
                                @include('frontend.components.templates.testimonial')
                                @break
                            @case('team')
                                @include('frontend.components.templates.team')
                                @break
                            @case('faq')
                                @include('frontend.components.templates.faq')
                                @break
                            @case('blog')
                                @include('frontend.components.templates.blog')
                                @break
                            @case('gallery')
                                @include('frontend.components.templates.gallery')
                                @break
                            @case('card')
                                @include('frontend.components.templates.card')
                                @break
                            @case('vps_pricing')
                                @include('frontend.components.templates.vps_pricing')
                                @break
                            @case('cta_button')
                                @include('frontend.components.templates.cta_button')
                                @break
                            @case('call_center')
                                @include('frontend.components.templates.call_center')
                                @break
                            @case('internet_packages')
                                @include('frontend.components.templates.internet_packages')
                                @break
                            @case('business_internet')
                                @include('frontend.components.templates.business_internet')
                                @break
                            @case('internet_hero')
                                @include('frontend.components.templates.internet_hero')
                                @break
                            @default
                                @include('frontend.components.templates.default')
                        @endswitch
                    @endforeach
                @endif

                {{-- Legacy Page Items (still supported) --}}
                @if($page->pageItems && count($page->pageItems))
                    @foreach ($page->pageItems as $item)
                        <div class="mb-3">
                            {!! $item->description_en ?? $item->description ?? '' !!}
                        </div>
                    @endforeach
                @elseif(count($sectionSetups) == 0)
                    <p>No content available for this page.</p>
                @endif
            @else
                <p>Page not found.</p>
            @endif
        </div>
    </section>


@endsection