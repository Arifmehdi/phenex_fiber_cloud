<!-- Hero / Banner Template -->
@php
    $bgClass = $setup->section->template ?? 'default';
@endphp

<section class="py-20 bg-light">
    @if($bgClass == 'hero')
    <div class="position-absolute w-100 h-100" style="background-image: radial-gradient(circle at 2px 2px, #ffc107 1px, transparent 0); background-size: 30px 30px; opacity: 0.3;"></div>
    @endif
    
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                @if($setup->title && $setup->title->title)
                    <h1 class="display-4 font-weight-bold mb-3">
                        {{ $setup->title->title }}
                    </h1>
                @endif
                
                @if($setup->subTitle && $setup->subTitle->title)
                    <h2 class="h3 text-warning mb-4">{{ $setup->subTitle->title }}</h2>
                @endif
                
                @if($setup->content && $setup->content->content)
                    <div class="prose max-w-2xl mx-auto mt-4">
                        {!! $setup->content->content !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>