<!-- FAQ Template -->
<section class="py-5">
    <div class="container">
        @if($setup->title && $setup->title->title)
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2 class="font-weight-bold">{{ $setup->title->title }}</h2>
                    @if($setup->subTitle && $setup->subTitle->title)
                        <p class="text-muted">{{ $setup->subTitle->title }}</p>
                    @endif
                </div>
            </div>
        @endif
        
        @if($setup->features && count($setup->features) > 0)
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        @foreach($setup->features as $index => $feature)
                            <div class="card mb-3">
                                <div class="card-header" id="heading{{ $index }}">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{ $index }}">
                                            {{ $feature->feature }}
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse{{ $index }}" class="collapse {{ $index == 0 ? 'show' : '' }}" data-parent="#faqAccordion">
                                    <div class="card-body">
                                        {{ strip_tags($feature->side_note) ?? 'Answer content here...' }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
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