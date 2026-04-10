<!-- Pricing Table Template -->
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
        
        @if($setup->pricing)
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card border shadow-sm text-center">
                        <div class="card-header bg-light">
                            <h5 class="font-weight-bold">{{ $setup->pricing->section->section_name ?? 'Basic' }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="price mb-3">
                                <span class="currency">$</span>
                                <span class="display-4 font-weight-bold">{{ $setup->pricing->price }}</span>
                                <span class="text-muted">/mo</span>
                            </div>
                            @if($setup->pricing->side_note)
                                <p class="text-muted small">{!! $setup->pricing->side_note !!}</p>
                            @endif
                            <a href="#" class="btn btn-dark btn-sm">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        @elseif($setup->features && count($setup->features) > 0)
            <div class="row">
                @foreach($setup->features as $feature)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border shadow-sm text-center">
                            <div class="card-header bg-light">
                                <h5 class="font-weight-bold">{{ $feature->feature }}</h5>
                            </div>
                            <div class="card-body">
                                <div class="price mb-3">
                                    <span class="text-muted">{{ strip_tags($feature->side_note) }}</span>
                                </div>
                                <a href="#" class="btn btn-dark btn-sm">Select Plan</a>
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