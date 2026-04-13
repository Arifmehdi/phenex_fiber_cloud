<!-- Internet Packages Hero Template -->
@php
    $accentColor = $setup->content->accent_color ?? '#d97642';
@endphp

<section class="relative overflow-visible py-14 md:py-18" style="background-color: #f3f4f6;">
    <!-- Dotted Pattern Background -->
    <div class="absolute inset-0 opacity-40">
        <div class="absolute top-0 left-0 w-full h-full" style="background-image: radial-gradient(circle at 2px 2px, {{ $accentColor }} 1px, transparent 0); background-size: 30px 30px;"></div>
    </div>
    
    <div class="container relative">
        <div style="display: flex; flex-wrap: wrap; gap: 3rem; align-items: center; justify-content: space-between;">
            <!-- LEFT: Text -->
            <div style="flex: 1; min-width: 300px;">
                @if($setup->title && $setup->title->title)
                <h1 style="font-size: 2.5rem; md: 3rem; lg: 3.75rem; font-weight: 700; margin-bottom: 1.5rem; line-height: 1.2;">
                    {!! $setup->title->title !!}
                </h1>
                @endif
                
                @if($setup->subTitle && $setup->subTitle->title)
                <p style="font-size: 1rem; md: 1.125rem; lg: 1.25rem; color: #4b5563; font-weight: 500; line-height: 1.625; margin-bottom: 2rem;">
                    {!! $setup->subTitle->title !!}
                </p>
                @endif
                
                @if($setup->content && $setup->content->button_text)
                <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
                    <a href="#home-plans" class="inline-flex items-center justify-center text-white font-semibold transition shadow-md" style="background-color: {{ $accentColor }}; padding: 16px 32px; border-radius: 0.5rem;">
                        Home Plans
                    </a>
                    <a href="/contact" class="inline-flex items-center justify-center font-semibold transition" style="border: 2px solid {{ $accentColor }}; color: {{ $accentColor }}; padding: 14px 32px; border-radius: 0.5rem;">
                        Custom Plans for Business
                    </a>
                </div>
                @else
                <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
                    <a href="#home-plans" class="inline-flex items-center justify-center text-white font-semibold transition shadow-md" style="background-color: {{ $accentColor }}; padding: 16px 32px; border-radius: 0.5rem;">
                        Home Plans
                    </a>
                    <a href="/contact" class="inline-flex items-center justify-center font-semibold transition" style="border: 2px solid {{ $accentColor }}; color: {{ $accentColor }}; padding: 14px 32px; border-radius: 0.5rem;">
                        Custom Plans for Business
                    </a>
                </div>
                @endif
            </div>
            
            <!-- RIGHT: Illustration -->
            <div style="position: relative; width: 380px; height: 300px; flex-shrink: 0;">
                <svg viewBox="0 0 400 260" style="width: 100%; height: 100%;">
                    <!-- arcs -->
                    <path d="M60 200 A140 140 0 0 1 160 70" fill="none" stroke="#F6C27A" stroke-width="18" stroke-linecap="round"></path>
                    <path d="M160 70 A140 140 0 0 1 240 70" fill="none" stroke="{{ $accentColor }}" stroke-width="18" stroke-linecap="round"></path>
                    <path d="M240 70 A140 140 0 0 1 340 200" fill="none" stroke="#B4532A" stroke-width="18" stroke-linecap="round"></path>
                    <!-- needle -->
                    <line x1="200" y1="200" x2="265" y2="115" stroke="#2D2D2D" stroke-width="4" stroke-linecap="round"></line>
                    <circle cx="200" cy="200" r="6" fill="#2D2D2D"></circle>
                </svg>
                <!-- STUDENT -->
                <div style="position: absolute; left: 10px; bottom: 20px; text-align: center; width: 100px;">
                    <div style="font-size: 0.875rem; font-weight: 700;">30 Mbps</div>
                    <div style="font-size: 0.6875rem; color: #6b7280;">Students & Individuals</div>
                </div>
                <!-- FAMILY -->
                <div style="position: absolute; left: 50%; transform: translateX(-50%); top: 8px; text-align: center; width: 120px;">
                    <div style="font-size: 0.875rem; font-weight: 700;">50 Mbps</div>
                    <div style="font-size: 0.6875rem; color: #6b7280;">Family Use</div>
                </div>
                <!-- GAMER -->
                <div style="position: absolute; right: 10px; bottom: 20px; text-align: center; width: 100px;">
                    <div style="font-size: 0.875rem; font-weight: 700;">100 Mbps</div>
                    <div style="font-size: 0.6875rem; color: #6b7280;">Gaming & Streaming</div>
                </div>
            </div>
        </div>
    </div>
</section>