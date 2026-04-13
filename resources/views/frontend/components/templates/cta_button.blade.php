<!-- CTA Button Center Template -->
@php
    $accentColor = $setup->content->accent_color ?? '#d97642';
    $title = $setup->content->name ?? ($setup->title->title ?? 'Talk to Our Team');
    $content = $setup->content->content ?? '';
    $buttonText = $setup->content->button_text ?? 'Contact Us';
    $buttonLink = $setup->content->button_link ?? '#';
@endphp

<section class="py-5">
    <div class="container">
        <div class="text-center">
            @if($title)
            <h2 class="text-4xl font-weight-bold mb-3">{{ $title }}</h2>
            @endif
            @if($content)
            <p class="text-muted mb-4">{!! $content !!}</p>
            @endif
            @if($buttonText)
            <a href="{{ $buttonLink }}" class="btn text-white font-weight-bold px-5 py-3 rounded" style="background-color: {{ $accentColor }};">
                {{ $buttonText }}
            </a>
            @endif
        </div>
    </div>
</section>