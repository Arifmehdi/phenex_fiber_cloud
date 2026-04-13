<!-- Business Internet Template -->
@php
    $accentColor = $setup->content->accent_color ?? '#d97642';
    
    $features = [];
    
    // Get from SectionSetup features
    if($setup->features && count($setup->features) > 0) {
        foreach($setup->features as $feature) {
            $items = $feature->side_note ? explode('|', $feature->side_note) : [];
            foreach($items as $item) {
                $item = trim($item);
                if($item) $features[] = $item;
            }
        }
    }
    
    // Fallback: get from section's side_note
    if(count($features) == 0 && $setup->section && $setup->section->side_note) {
        $items = explode('|', $setup->section->side_note);
        foreach($items as $item) {
            $item = trim($item);
            if($item) $features[] = $item;
        }
    }
@endphp

<section class="py-16">
    <div class="container">
        <div class="max-w-2xl mx-auto">
            <div style="background: white; border-radius: 1rem; padding: 2rem; border: 2px solid rgba(217, 118, 66, 0.3); box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
                <!-- Icon -->
                <div style="text-align: center; margin-bottom: 1.5rem;">
                    <svg style="width: 4rem; height: 4rem; color: {{ $accentColor }}; margin: 0 auto;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                
                <!-- Title -->
                @if($setup->title && $setup->title->title)
                <div style="text-align: center; margin-bottom: 1rem;">
                    <h3 style="font-size: 1.875rem; font-weight: bold; color: #2D2D2D; margin-bottom: 0.5rem;">
                        {!! $setup->title->title !!}
                    </h3>
                    @if($setup->subTitle && $setup->subTitle->title)
                    <p style="font-size: 1.25rem; color: {{ $accentColor }}; font-weight: 600;">
                        {!! $setup->subTitle->title !!}
                    </p>
                    @endif
                </div>
                @endif
                
                <!-- Description -->
                @if($setup->content && $setup->content->content)
                <div style="text-align: center;">
                    <p style="text-align: center; color: #6B6B6B; margin-bottom: 1.5rem; font-size: 0.875rem;">
                        {!! $setup->content->content !!}
                    </p>
                </div>
                @endif
                
                <!-- Features List - 2 Columns -->
                @if(count($features) > 0)
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 0.75rem; margin-bottom: 2rem;">
                    @foreach($features as $feature)
                    <div style="display: flex; gap: 0.5rem; font-size: 0.875rem;">
                        <svg style="width: 1rem; height: 1rem; color: {{ $accentColor }}; flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span style="color: #6B6B6B;">{!! $feature !!}</span>
                    </div>
                    @endforeach
                </div>
                @endif
                
                <!-- CTA Button -->
                <div style="text-align: center;">
                    @if($setup->content && $setup->content->button_text)
                    <a href="{{ $setup->content->button_link ?? '#' }}" class="inline-block rounded-lg text-white font-semibold text-lg transition-all" style="background-color: {{ $accentColor }}; padding: 16px 40px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);">
                        {!! $setup->content->button_text !!}
                    </a>
                    @else
                    <a href="/contact" class="inline-block rounded-lg text-white font-semibold text-lg transition-all" style="background-color: {{ $accentColor }}; padding: 16px 40px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);">
                        Request Custom Quote
                    </a>
                    @endif
                    
                    @if($setup->content && $setup->content->side_note)
                    <p style="margin-top: 0.75rem; font-size: 0.875rem; color: #6B6B6B;">
                        {!! $setup->content->side_note !!}
                    </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>