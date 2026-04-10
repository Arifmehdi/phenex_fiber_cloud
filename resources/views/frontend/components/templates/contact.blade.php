<!-- Contact Section Template -->
<section class="py-16 bg-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($setup->title && $setup->title->title)
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">{{ $setup->title->title }}</h2>
        @endif
        
        @if($setup->subTitle && $setup->subTitle->title)
            <p class="text-lg text-muted text-center mb-12 max-w-2xl mx-auto">{{ $setup->subTitle->title }}</p>
        @endif
        
        @if($setup->content && $setup->content->content)
            <div class="prose max-w-none">
                {!! $setup->content->content !!}
            </div>
        @endif
        
        @if($setup->features && count($setup->features) > 0)
            <div class="row g-4 mt-4">
                @foreach($setup->features as $feature)
                    <div class="col-md-4">
                        <div class="text-center p-4">
                            <div class="bg-warning rounded-circle d-inline-flex p-3 mb-3">
                                <i class="fas fa-phone text-white"></i>
                            </div>
                            <h5>{{ $feature->feature }}</h5>
                            @if($feature->side_note)
                                <p class="text-muted mb-0">{{ strip_tags($feature->side_note) }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>