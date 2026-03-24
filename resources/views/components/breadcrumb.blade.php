    @props([
        'slug' => null,
        'image' => null,
    ])
    <div class="page-title-wrap" data-bg-img="{{ $image }}">
        <div class="grid-animation">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title text-white">
                        <h1>{{ $slug ?? 'Default Title' }}</h1>
                        <ul class="nav">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">{{ $slug ?? 'Default Title' }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
