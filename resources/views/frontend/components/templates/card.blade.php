<!-- Card Component Template -->
@php
    $accentColor = $setup->content->accent_color ?? '#d97642';
    $icon = $setup->content->icon ?? 'fa fa-star';
    $cardTitle = $setup->content->name ?? ($setup->title->title ?? 'Card Title');
    $cardContent = $setup->content->content ?? '';
    $sideNote = $setup->content->side_note ?? '';
@endphp

<section class="py-5 position-relative bg-light">
    <div class="position-absolute w-100 h-100" style="background-image: radial-gradient(circle at 15px 15px, {!! $accentColor !!}20 1px, transparent 0); background-size: 30px 30px; top: 0; left: 0;"></div>
    
    <div class="container text-center" style="position: relative; z-index: 1;">
        @if($icon)
        <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px; background-color: {!! $accentColor !!}15;">
            <i class="{{ $icon }}" style="font-size: 2rem; color: {!! $accentColor !!}"></i>
        </div>
        @endif
        
        @if($cardTitle)
            <h2 class="text-4xl font-weight-bold mb-4 text-dark">
                {{ $cardTitle }}
            </h2>
        @endif
        
        @if($cardContent)
            <p class="lead mb-4 text-muted">
                {!! $cardContent !!}
            </p>
        @endif
        
        @if($sideNote)
            <div class="d-inline-flex align-items-center rounded-pill px-4 py-2 border" style="border-color: {!! $accentColor !!}40;">
                <i class="fas fa-clock mr-2" style="color: {!! $accentColor !!}"></i>
                <span class="font-weight-bold text-dark">{{ $sideNote }}</span>
            </div>
        @endif
    </div>
</section>