<!-- Features List Template -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($setup->title && $setup->title->title)
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">{{ $setup->title->title }}</h2>
        @endif
        
        @if($setup->subTitle && $setup->subTitle->title)
            <p class="text-lg text-muted text-center mb-12 max-w-2xl mx-auto">{{ $setup->subTitle->title }}</p>
        @endif
        
        @if($setup->features && count($setup->features) > 0)
            <div class="row g-3">
                @foreach($setup->features as $feature)
                    <div class="col-12">
                        <div class="d-flex align-items-center p-3 bg-light rounded">
                            <i class="fas fa-check text-success me-3"></i>
                            <div>
                                <strong>{{ $feature->feature }}</strong>
                                @if($feature->side_note)
                                    <span class="text-muted"> - {{ strip_tags($feature->side_note) }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>