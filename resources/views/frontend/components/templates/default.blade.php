<!-- Default / Generic Template -->
<section class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($setup->title && $setup->title->title)
            <h2 class="text-3xl font-bold mb-6">{{ $setup->title->title }}</h2>
        @endif
        
        @if($setup->subTitle && $setup->subTitle->title)
            <p class="text-lg text-muted mb-6">{{ $setup->subTitle->title }}</p>
        @endif
        
        @if($setup->content && $setup->content->content)
            <div class="prose max-w-none">
                {!! $setup->content->content !!}
            </div>
        @endif
        
        @if($setup->features && count($setup->features) > 0)
            <div class="mt-6">
                @foreach($setup->features as $feature)
                    <div class="mb-2">
                        <i class="fas fa-check text-success me-2"></i>
                        <strong>{{ $feature->feature }}</strong>
                        @if($feature->side_note)
                            <span class="text-muted"> - {{ strip_tags($feature->side_note) }}</span>
                        @endif
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>