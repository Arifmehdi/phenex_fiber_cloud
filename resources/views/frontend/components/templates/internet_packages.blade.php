<!-- Internet Packages Template -->
@php
    $accentColor = $setup->content->accent_color ?? '#d97642';
    
    // Get all sections with internet_packages template
    $allPricings = \App\Models\Section::where('template', 'internet_packages')
        ->with('pricings')
        ->get()
        ->pluck('pricings')
        ->flatten();
@endphp

<section class="py-20 bg-white">
    <div class="container">
        @if($setup->title && $setup->title->title)
        <div class="text-center mb-16">
            <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-4">{{ $setup->title->title }}</h2>
            @if($setup->subTitle && $setup->subTitle->title)
            <p class="text-lg text-gray-600">{{ $setup->subTitle->title }}</p>
            @endif
        </div>
        @endif

        @if(count($allPricings) > 0)
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 320px)); gap: 1.5rem; justify-content: center; margin-bottom: 3rem;">
            @foreach($allPricings as $index => $pricing)
            @php
                $isPopular = str_contains(strtolower($pricing->section->section_name ?? ''), 'smart') || str_contains(strtolower($pricing->section->section_name ?? ''), '30');
                $specs = $pricing->side_note ? explode('|', $pricing->side_note) : [];
                $description = array_shift($specs);
            @endphp
            <div style="background: white; border-radius: 1rem; padding: 2rem; border: 2px solid {{ $isPopular ? $accentColor : 'transparent' }}; transition: all 0.3s; {{ $isPopular ? 'box-shadow: 0 10px 25px rgba(0,0,0,0.1);' : 'border-color: #e5e7eb;' }}">
                @if($isPopular)
                <div style="position: absolute; top: -0.75rem; left: 50%; transform: translateX(-50%); background: {{ $accentColor }}; color: white; font-size: 0.75rem; padding: 0.25rem 1rem; border-radius: 0.5rem; font-weight: 600;">POPULAR</div>
                @endif
                <div style="text-align: center; margin-bottom: 1.5rem;">
                    <svg style="width: 4rem; height: 4rem; color: {{ $accentColor }}; margin: 0 auto;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <div style="text-align: center; margin-bottom: 1rem;">
                    <div style="font-size: 3rem; font-weight: bold; color: #2D2D2D;">
                        {{ $pricing->section->section_name ?? 'Internet' }}
                    </div>
                </div>
                <div style="text-align: center; margin-bottom: 1rem;">
                    <div style="font-size: 1.875rem; font-weight: bold; color: #2D2D2D;">
                        ৳{{ $pricing->price }}<span style="font-size: 1.125rem; font-weight: normal; color: #6B6B6B;">/month</span>
                    </div>
                </div>
                <p style="text-align: center; color: #6B6B6B; margin-bottom: 1.5rem; font-size: 0.875rem;">
                    {!! $description !!}
                </p>
                @if(count($specs) > 0)
                <ul style="list-style: none; padding: 0; margin: 0;">
                    @foreach($specs as $spec)
                        @php $spec = trim($spec); @endphp
                        @if($spec)
                        <li style="display: flex; gap: 0.5rem; margin-bottom: 0.5rem; color: #6B6B6B; font-size: 0.875rem;">
                            <svg style="width: 1rem; height: 1rem; color: {{ $accentColor }}; flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>{!! $spec !!}</span>
                        </li>
                        @endif
                    @endforeach
                </ul>
                @endif
            </div>
            @endforeach
        </div>
        @elseif($setup->section && $setup->section->pricings && count($setup->section->pricings) > 0)
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 320px)); gap: 1.5rem; justify-content: center; margin-bottom: 3rem;">
            @foreach($setup->section->pricings as $index => $pricing)
            @php
                $isPopular = str_contains(strtolower($pricing->section->section_name ?? ''), 'smart') || str_contains(strtolower($pricing->section->section_name ?? ''), '30');
                $specs = $pricing->side_note ? explode('|', $pricing->side_note) : [];
                $description = array_shift($specs);
            @endphp
            <div style="background: white; border-radius: 1rem; padding: 2rem; border: 2px solid {{ $isPopular ? $accentColor : 'transparent' }}; transition: all 0.3s; {{ $isPopular ? 'box-shadow: 0 10px 25px rgba(0,0,0,0.1);' : 'border-color: #e5e7eb;' }}">
                @if($isPopular)
                <div style="position: absolute; top: -0.75rem; left: 50%; transform: translateX(-50%); background: {{ $accentColor }}; color: white; font-size: 0.75rem; padding: 0.25rem 1rem; border-radius: 0.5rem; font-weight: 600;">POPULAR</div>
                @endif
                <div style="text-align: center; margin-bottom: 1.5rem;">
                    <svg style="width: 4rem; height: 4rem; color: {{ $accentColor }}; margin: 0 auto;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <div style="text-align: center; margin-bottom: 1rem;">
                    <div style="font-size: 3rem; font-weight: bold; color: #2D2D2D;">
                        {{ $pricing->section->section_name ?? '' }}
                    </div>
                </div>
                <div style="text-align: center; margin-bottom: 1rem;">
                    <div style="font-size: 1.875rem; font-weight: bold; color: #2D2D2D;">
                        ৳{{ $pricing->price }}<span style="font-size: 1.125rem; font-weight: normal; color: #6B6B6B;">/month</span>
                    </div>
                </div>
                <p style="text-align: center; color: #6B6B6B; margin-bottom: 1.5rem; font-size: 0.875rem;">
                    {!! $description !!}
                </p>
                @if(count($specs) > 0)
                <ul style="list-style: none; padding: 0; margin: 0;">
                    @foreach($specs as $spec)
                        @php $spec = trim($spec); @endphp
                        @if($spec)
                        <li style="display: flex; gap: 0.5rem; margin-bottom: 0.5rem; color: #6B6B6B; font-size: 0.875rem;">
                            <svg style="width: 1rem; height: 1rem; color: {{ $accentColor }}; flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>{!! $spec !!}</span>
                        </li>
                        @endif
                    @endforeach
                </ul>
                @endif
            </div>
            @endforeach
        </div>
        @endif

        @if($setup->content && ($setup->content->button_text || $setup->content->content))
        <div class="text-center mb-16">
            @if($setup->content->button_text)
            <a href="{{ $setup->content->button_link ?? '#' }}" class="inline-block px-10 py-4 rounded-lg text-white font-medium text-lg transition-all shadow-lg hover:shadow-xl" style="background-color: {{ $accentColor }};">
                {{ $setup->content->button_text }}
            </a>
            @endif
            @if($setup->content->content)
            <p class="text-gray-600 mt-3 text-sm">{!! $setup->content->content !!}</p>
            @endif
        </div>
        @endif
    </div>
</section>