<!-- Call Center Template -->
@php
    $accentColor = $setup->content->accent_color ?? '#d97642';
@endphp

<section class="py-20 md:py-28 relative overflow-hidden bg-light">
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-0 right-0 w-96 h-96" style="background-color: {{ $accentColor }}10; border-radius: 50%; filter: blur(60px);"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80" style="background-color: {{ $accentColor }}5; border-radius: 50%; filter: blur(60px);"></div>
    </div>
    <div class="container">
        @if($setup->title && $setup->title->title)
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $setup->title->title }}</h1>
            @if($setup->subTitle && $setup->subTitle->title)
            <p class="text-lg md:text-xl text-muted max-w-3xl mx-auto mb-8">{{ $setup->subTitle->title }}</p>
            @endif
            @if($setup->content && $setup->content->side_note)
            <div class="inline-flex items-center gap-2 bg-white px-6 py-3 rounded-pill border" style="border-color: {{ $accentColor }}20;">
                <svg class="w-5 h-5" style="color: {{ $accentColor }}" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
                <span class="text-sm font-semibold">{!! $setup->content->side_note !!}</span>
            </div>
            @endif
        </div>
        @endif

        @if($setup->features && count($setup->features) > 0)
        <div class="row justify-content-center mb-12">
            @foreach($setup->features as $index => $feature)
            @php
                $isPopular = str_contains(strtolower($feature->feature ?? ''), 'attendant') || str_contains(strtolower($feature->side_note ?? ''), 'popular');
                $featureItems = $feature->side_note ? explode('|', $feature->side_note) : [];
            @endphp
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 border-2 rounded-3 overflow-hidden {{ $isPopular ? 'border-warning' : 'border-gray-200' }}" style="{{ $isPopular ? 'border-color: ' . $accentColor : '' }}">
                    @if($isPopular)
                    <div class="text-white text-center py-1 px-2 font-weight-bold small" style="background-color: {{ $accentColor }};">POPULAR</div>
                    @endif
                    <div class="card-body p-6" style="{{ $isPopular ? 'background: linear-gradient(to bottom, #fff8f0, #fff);' : '' }}">
                        <div class="w-12 h-12 rounded-xl d-flex align-items-center justify-content-center mb-4" style="background-color: {{ $accentColor }}10;">
                            <svg class="w-6 h-6" style="color: {{ $accentColor }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2">{{ $feature->feature }}</h3>
                        <p class="text-sm text-muted mb-4">{!! $feature->side_note !!}</p>
                        @if(count($featureItems) > 0)
                        <ul class="space-y-2 text-sm">
                            @foreach($featureItems as $item)
                                @php $item = trim($item); @endphp
                                @if($item && !str_contains(strtolower($item), 'popular'))
                                    <li class="flex items-start gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full mt-1.5 flex-shrink-0" style="background-color: {{ $accentColor }};"></span>
                                        <span class="text-muted">{!! $item !!}</span>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif

        @if($setup->content && ($setup->content->button_text || $setup->content->content))
        <div class="text-center">
            @if($setup->content->button_text)
            <a href="{{ $setup->content->button_link ?? '#' }}" class="btn text-white font-weight-bold px-5 py-3 rounded" style="background-color: {{ $accentColor }};">
                {{ $setup->content->button_text }}
            </a>
            @endif
            @if($setup->content->content)
            <p class="text-muted mt-3 text-sm">{!! $setup->content->content !!}</p>
            @endif
        </div>
        @endif
    </div>
</section>