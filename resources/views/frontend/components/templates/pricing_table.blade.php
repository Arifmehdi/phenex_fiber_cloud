<!-- Pricing Table Template -->
@php
    $accentColor = $setup->content->accent_color ?? '#d97642';
    $icon = $setup->content->icon ?? 'server';
    
    // Get all sections with pricing_table template AND their pricings
    $allPricings = \App\Models\Section::where('template', 'pricing_table')
        ->with('pricings')
        ->get()
        ->pluck('pricings')
        ->flatten();
@endphp

<section class="py-5 bg-light">
    <div class="container">
        @if($setup->title && $setup->title->title)
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="text-4xl font-bold mb-3">{{ $setup->title->title }}</h2>
                    @if($setup->subTitle && $setup->subTitle->title)
                        <p class="text-lg text-muted">{{ $setup->subTitle->title }}</p>
                    @endif
                </div>
            </div>
        @endif

        {{-- Show all pricings from ALL sections with pricing_table template --}}
        @if(count($allPricings) > 0)
            <div class="row">
                @foreach($allPricings as $pricing)
                    @php
                        $isBestValue = str_contains(strtolower($pricing->section->section_name ?? ''), 'advance');
                        $specs = $pricing->side_note ? explode('|', $pricing->side_note) : [];
                        $description = array_shift($specs);
                    @endphp
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card h-100 border-2 rounded-3 overflow-hidden {{ $isBestValue ? 'border-warning' : 'border-gray-200' }}" style="{{ $isBestValue ? 'border-color: ' . $accentColor : '' }}">
                            @if($isBestValue)
                            <div class="text-white text-center py-1 px-2 font-weight-bold small" style="background-color: {{ $accentColor }};">BEST VALUE</div>
                            @endif
                            <div class="card-body p-3" style="{{ $isBestValue ? 'background: linear-gradient(to bottom, #fff8f0, #fff);' : '' }}">
                                <div class="w-10 h-10 rounded-lg d-flex align-items-center justify-content-center mb-3" style="background-color: {{ $accentColor }}10;">
                                    <svg class="w-5 h-5" style="color: {{ $accentColor }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                                    </svg>
                                </div>
                                <h5 class="font-weight-bold mb-1">{{ $pricing->section->section_name ?? 'VPS Plan' }}</h5>
                                <p class="text-muted small mb-2">{!! $description !!}</p>
                                <div class="mb-3">
                                    <span class="text-3xl font-bold">{{ $pricing->currency == 'BDT' ? '৳' : '$' }}{{ $pricing->price }}</span>
                                    <span class="text-muted small">/month</span>
                                </div>
                                @if(count($specs) > 0)
                                <ul class="list-unstyled small mb-0">
                                    @foreach($specs as $spec)
                                        @php $spec = trim($spec); @endphp
                                        @if($spec)
                                            <li class="mb-1"><span class="mr-1" style="color: {{ $accentColor }}">●</span><span class="text-secondary">{!! $spec !!}</span></li>
                                        @endif
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        {{-- Fallback: show section's own pricings --}}
        @elseif($setup->section && $setup->section->pricings && count($setup->section->pricings) > 0)
            <div class="row">
                @foreach($setup->section->pricings as $pricing)
                    @php
                        $isBestValue = str_contains(strtolower($pricing->section->section_name ?? ''), 'advance');
                        $specs = $pricing->side_note ? explode('|', $pricing->side_note) : [];
                        $description = array_shift($specs);
                    @endphp
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card h-100 border-2 rounded-3 overflow-hidden {{ $isBestValue ? 'border-warning' : 'border-gray-200' }}" style="{{ $isBestValue ? 'border-color: ' . $accentColor : '' }}">
                            @if($isBestValue)
                            <div class="text-white text-center py-1 px-2 font-weight-bold small" style="background-color: {{ $accentColor }};">BEST VALUE</div>
                            @endif
                            <div class="card-body p-3" style="{{ $isBestValue ? 'background: linear-gradient(to bottom, #fff8f0, #fff);' : '' }}">
                                <div class="w-10 h-10 rounded-lg d-flex align-items-center justify-content-center mb-3" style="background-color: {{ $accentColor }}10;">
                                    <svg class="w-5 h-5" style="color: {{ $accentColor }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                                    </svg>
                                </div>
                                <h5 class="font-weight-bold mb-1">{{ $pricing->section->section_name ?? 'VPS Plan' }}</h5>
                                <p class="text-muted small mb-2">{!! $description !!}</p>
                                <div class="mb-3">
                                    <span class="text-3xl font-bold">{{ $pricing->currency == 'BDT' ? '৳' : '$' }}{{ $pricing->price }}</span>
                                    <span class="text-muted small">/month</span>
                                </div>
                                @if(count($specs) > 0)
                                <ul class="list-unstyled small mb-0">
                                    @foreach($specs as $spec)
                                        @php $spec = trim($spec); @endphp
                                        @if($spec)
                                            <li class="mb-1"><span class="mr-1" style="color: {{ $accentColor }}">●</span><span class="text-secondary">{!! $spec !!}</span></li>
                                        @endif
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        {{-- Fallback: show single pricing --}}
        @elseif($setup->pricing)
            @php
                $specs = $setup->pricing->side_note ? explode('|', $setup->pricing->side_note) : [];
                $description = array_shift($specs);
            @endphp
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card border shadow-sm">
                        <div class="card-header bg-light">
                            <h5 class="font-weight-bold">{{ $setup->pricing->section->section_name ?? 'Basic' }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted small">{!! $description !!}</p>
                            <div class="price mb-3">
                                <span class="currency">{{ $setup->pricing->currency == 'BDT' ? '৳' : '$' }}</span>
                                <span class="display-4 font-weight-bold">{{ $setup->pricing->price }}</span>
                                <span class="text-muted">/mo</span>
                            </div>
                            @if(count($specs) > 0)
                            <ul class="list-unstyled small mb-3">
                                @foreach($specs as $spec)
                                    @php $spec = trim($spec); @endphp
                                    @if($spec)
                                        <li class="mb-1"><span class="mr-1" style="color: {{ $accentColor }}">●</span>{!! $spec !!}</li>
                                    @endif
                                @endforeach
                            </ul>
                            @endif
                            <a href="#" class="btn btn-dark btn-sm">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        {{-- Fallback: show features --}}
        @elseif($setup->features && count($setup->features) > 0)
            <div class="row">
                @foreach($setup->features as $feature)
                    @php
                        $featureSpecs = $feature->side_note ? explode('|', $feature->side_note) : [];
                        $featureDesc = array_shift($featureSpecs);
                    @endphp
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border shadow-sm">
                            <div class="card-header bg-light">
                                <h5 class="font-weight-bold">{{ $feature->feature }}</h5>
                            </div>
                            <div class="card-body">
                                <p class="text-muted small">{!! $featureDesc !!}</p>
                                @if(count($featureSpecs) > 0)
                                <ul class="list-unstyled small mb-3">
                                    @foreach($featureSpecs as $spec)
                                        @php $spec = trim($spec); @endphp
                                        @if($spec)
                                            <li class="mb-1"><span class="mr-1" style="color: {{ $accentColor }}">●</span>{!! $spec !!}</li>
                                        @endif
                                    @endforeach
                                </ul>
                                @endif
                                <a href="#" class="btn btn-dark btn-sm">Select Plan</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @elseif($setup->content && $setup->content->content)
            <div class="prose max-w-none">
                {!! $setup->content->content !!}
            </div>
        @endif
    </div>
</section>