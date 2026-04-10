<!-- Call to Action Template -->
<section class="py-16 bg-warning text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        @if($setup->title && $setup->title->title)
            <h2 class="text-3xl md:text-4xl font-bold mb-4">{{ $setup->title->title }}</h2>
        @endif
        
        @if($setup->subTitle && $setup->subTitle->title)
            <p class="text-lg mb-8 opacity-90">{{ $setup->subTitle->title }}</p>
        @endif
        
        @if($setup->content && $setup->content->content)
            <div class="prose prose-inverted max-w-none mb-8">
                {!! $setup->content->content !!}
            </div>
        @endif
        
        @if($setup->side_note)
            <div class="mt-4">
                {!! $setup->side_note !!}
            </div>
        @endif
    </div>
</section>