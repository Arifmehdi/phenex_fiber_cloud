<!-- Team Members Template -->
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
            <div class="row">
                @foreach($setup->features as $feature)
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="card border-0 shadow-sm text-center">
                            <div class="card-body">
                                <div class="bg-light rounded-circle d-inline-flex p-3 mb-3">
                                    <i class="fas fa-user fa-2x text-muted"></i>
                                </div>
                                <h5 class="font-weight-bold">{{ $feature->feature }}</h5>
                                <p class="text-muted small mb-0">{{ strip_tags($feature->side_note) }}</p>
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