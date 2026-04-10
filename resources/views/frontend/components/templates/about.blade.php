<!-- About / Story Template -->
<section class="py-20 bg-light">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($setup->title && $setup->title->title)
            <h2 class="text-3xl font-bold text-center mb-8">{{ $setup->title->title }}</h2>
        @endif
        
        <div class="bg-white rounded-2xl p-8 md:p-12 border shadow-sm">
            <div class="prose prose-lg max-w-none">
                @if($setup->content && $setup->content->content)
                    {!! $setup->content->content !!}
                @endif
            </div>
        </div>
    </div>
</section>