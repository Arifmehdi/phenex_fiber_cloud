<!-- Pricing Card Template -->
<section class="py-16 bg-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($setup->title && $setup->title->title)
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">{{ $setup->title->title }}</h2>
        @endif
        
        @if($setup->subTitle && $setup->subTitle->title)
            <p class="text-lg text-muted text-center mb-12 max-w-2xl mx-auto">{{ $setup->subTitle->title }}</p>
        @endif
        
        @if($setup->pricing)
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card text-center border-2 shadow-sm p-4">
                        @if($setup->pricing->section)
                            <h5 class="text-muted mb-3">{{ $setup->pricing->section->section_name }}</h5>
                        @endif
                        <div class="display-4 font-weight-bold text-warning mb-3">
                            {{ $setup->pricing->price }}
                            <small class="text-muted" style="font-size: 0.5em;">{{ $setup->pricing->currency }}</small>
                        </div>
                        @if($setup->pricing->side_note)
                            <div class="prose small">
                                {!! $setup->pricing->side_note !!}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @elseif($setup->content && $setup->content->content)
            <div class="prose max-w-none">
                {!! $setup->content->content !!}
            </div>
        @endif
    </div>
</section>