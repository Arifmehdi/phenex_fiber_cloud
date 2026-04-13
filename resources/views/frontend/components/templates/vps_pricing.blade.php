<!-- VPS Pricing Cards Template -->
@php
    $accentColor = $setup->content->accent_color ?? '#d97642';
    $title = $setup->title->title ?? 'VPS Pricing';
    $subtitle = $setup->subTitle->title ?? '';
@endphp

<section class="py-5 bg-light">
    <div class="container">
        @if($title)
        <div class="text-center mb-5">
            <h2 class="text-4xl font-bold mb-3">{{ $title }}</h2>
            @if($subtitle)
            <p class="text-lg text-muted">{{ $subtitle }}</p>
            @endif
        </div>
        @endif

        <div class="row">
            <!-- Starter VPS -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 border-2 rounded-3 overflow-hidden" style="border-color: #dee2e6;">
                    <div class="card-body p-4">
                        <div class="w-12 h-12 rounded-xl d-flex align-items-center justify-content-center mb-3" style="background-color: {{ $accentColor }}10;">
                            <svg class="w-6 h-6" style="color: {{ $accentColor }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                            </svg>
                        </div>
                        <h5 class="font-weight-bold mb-1">Starter VPS</h5>
                        <p class="text-muted small mb-3">Starter businesses or students</p>
                        <div class="mb-3">
                            <span class="text-4xl font-bold">৳999</span>
                            <span class="text-muted">/month</span>
                        </div>
                        <ul class="list-unstyled small">
                            <li class="mb-2"><span class="mr-2" style="color: {{ $accentColor }}">●</span><strong>2 vCPU</strong></li>
                            <li class="mb-2"><span class="mr-2" style="color: {{ $accentColor }}">●</span><strong>2 GB</strong> RAM</li>
                            <li class="mb-2"><span class="mr-2" style="color: {{ $accentColor }}">●</span><strong>80 GB</strong> SSD</li>
                            <li class="mb-2"><span class="mr-2" style="color: {{ $accentColor }}">●</span>Any Linux OS</li>
                            <li class="mb-2"><span class="mr-2" style="color: {{ $accentColor }}">●</span>1 Dedicated IP</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Standard VPS -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 border-2 rounded-3 overflow-hidden" style="border-color: #dee2e6;">
                    <div class="card-body p-4">
                        <div class="w-12 h-12 rounded-xl d-flex align-items-center justify-content-center mb-3" style="background-color: {{ $accentColor }}10;">
                            <svg class="w-6 h-6" style="color: {{ $accentColor }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                            </svg>
                        </div>
                        <h5 class="font-weight-bold mb-1">Standard VPS</h5>
                        <p class="text-muted small mb-3">Small & medium businesses</p>
                        <div class="mb-3">
                            <span class="text-4xl font-bold">৳1,600</span>
                            <span class="text-muted">/month</span>
                        </div>
                        <ul class="list-unstyled small">
                            <li class="mb-2"><span class="mr-2" style="color: {{ $accentColor }}">●</span><strong>4 vCPU</strong></li>
                            <li class="mb-2"><span class="mr-2" style="color: {{ $accentColor }}">●</span><strong>8 GB</strong> RAM</li>
                            <li class="mb-2"><span class="mr-2" style="color: {{ $accentColor }}">●</span><strong>160 GB</strong> SSD</li>
                            <li class="mb-2"><span class="mr-2" style="color: {{ $accentColor }}">●</span>Any Linux OS</li>
                            <li class="mb-2"><span class="mr-2" style="color: {{ $accentColor }}">●</span>1 Dedicated IP</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Advance VPS (Best Value) -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 border-2 rounded-3 overflow-hidden" style="border-color: {{ $accentColor }};">
                    <div class="text-white text-center py-2 font-weight-bold" style="background-color: {{ $accentColor }};">BEST VALUE</div>
                    <div class="card-body p-4" style="background: linear-gradient(to bottom, #fff8f0, #fff);">
                        <div class="w-12 h-12 rounded-xl d-flex align-items-center justify-content-center mb-3" style="background-color: {{ $accentColor }}20;">
                            <svg class="w-6 h-6" style="color: {{ $accentColor }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                            </svg>
                        </div>
                        <h5 class="font-weight-bold mb-1">Advance VPS</h5>
                        <p class="text-muted small mb-3">Power users & growing businesses</p>
                        <div class="mb-3">
                            <span class="text-4xl font-bold">৳2,600</span>
                            <span class="text-muted">/year</span>
                        </div>
                        <ul class="list-unstyled small">
                            <li class="mb-2"><span class="mr-2" style="color: {{ $accentColor }}">●</span><strong>8 vCPU</strong></li>
                            <li class="mb-2"><span class="mr-2" style="color: {{ $accentColor }}">●</span><strong>16 GB</strong> RAM</li>
                            <li class="mb-2"><span class="mr-2" style="color: {{ $accentColor }}">●</span><strong>350 GB</strong> SSD</li>
                            <li class="mb-2"><span class="mr-2" style="color: {{ $accentColor }}">●</span>Any Linux OS</li>
                            <li class="mb-2"><span class="mr-2" style="color: {{ $accentColor }}">●</span>1 Dedicated IP</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Windows VPS -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 border-2 rounded-3 overflow-hidden" style="border-color: #bee3f8;">
                    <div class="card-body p-4">
                        <div class="w-12 h-12 rounded-xl d-flex align-items-center justify-content-center mb-3" style="background-color: #bee3f8;">
                            <svg class="w-6 h-6" style="color: #3182ce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h5 class="font-weight-bold mb-1">Windows VPS</h5>
                        <p class="text-muted small mb-3">Windows OS with RDP access</p>
                        <div class="mb-3">
                            <span class="text-4xl font-bold">৳1,400</span>
                            <span class="text-muted">/month</span>
                        </div>
                        <ul class="list-unstyled small">
                            <li class="mb-2"><span class="mr-2" style="color: #3182ce">●</span><strong>4 vCPU</strong></li>
                            <li class="mb-2"><span class="mr-2" style="color: #3182ce">●</span><strong>8 GB</strong> RAM</li>
                            <li class="mb-2"><span class="mr-2" style="color: #3182ce">●</span><strong>200 GB</strong> SSD</li>
                            <li class="mb-2"><span class="mr-2" style="color: #3182ce">●</span>Any Windows OS</li>
                            <li class="mb-2"><span class="mr-2" style="color: #3182ce">●</span>Full Admin & RDP</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>