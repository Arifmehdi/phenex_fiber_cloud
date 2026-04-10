<!-- Gallery Template -->
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
            <div class="row g-3">
                @foreach($setup->features as $feature)
                    <div class="col-md-3 col-sm-6">
                        <div class="card border-0">
                            <div class="bg-light p-4 text-center">
                                <i class="fas fa-image fa-2x text-muted"></i>
                            </div>
                            <div class="card-body text-center">
                                <h6 class="mb-0">{{ $feature->feature }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @elseif($setup->content && $setup->content->content)
            <div class="prose max-w-none">
                {!! $setup->content->content !!}
            </div>
        @endif
    </div>
</section>