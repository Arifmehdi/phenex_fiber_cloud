@php
use Illuminate\Support\Str;
@endphp
<!-- Blog Posts Template -->
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
                    <div class="col-md-4 mb-4">
                        <div class="card border-0 shadow-sm">
                            <div class="bg-light p-5">
                                <i class="fas fa-blog fa-3x text-muted"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="font-weight-bold">{{ $feature->feature }}</h5>
                                <p class="card-text text-muted">{{ Str::limit(strip_tags($feature->side_note), 100) }}</p>
                                <a href="#" class="btn btn-sm btn-outline-primary">Read More</a>
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