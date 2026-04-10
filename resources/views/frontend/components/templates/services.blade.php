<!-- Services Grid Template - with icons -->
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
                @foreach($setup->features as $feature)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="single-online-thread bg-white p-4 rounded shadow-sm text-center">
                            <div class="img mb-3">
                                @php
                                    $iconMap = [
                                        'identity theft' => 'fa-user-shield',
                                        'virus' => 'fa-virus',
                                        'phishing' => 'fa-fish',
                                        'hacking' => 'fa-hackathon',
                                        'malware' => 'fa-shield-alt',
                                        'spam' => 'fa-envelope-open-text',
                                        'spyware' => 'fa-eye',
                                        'ransomware' => 'fa-lock',
                                        'default' => 'fa-shield-virus'
                                    ];
                                    $icon = 'fa-shield-virus';
                                    $featureLower = strtolower($feature->feature);
                                    foreach($iconMap as $key => $val) {
                                        if(str_contains($featureLower, $key)) {
                                            $icon = $val;
                                            break;
                                        }
                                    }
                                @endphp
                                <i class="fas {{ $icon }} fa-3x text-primary"></i>
                            </div>
                            <div class="content">
                                <h4 class="font-weight-bold mb-2">{{ $feature->feature }}</h4>
                                <p class="text-muted mb-0">
                                    {{ strip_tags($feature->side_note) ?? 'Data thieves look unprotected devices and those that do not use encryption are easy for targets.' }}
                                </p>
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