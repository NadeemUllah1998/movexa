@props([
    'headline' => 'Ready to Make Your Next Move?',
    'subheadline' => 'Let MOVEXA help you plan a smoother relocation, wherever your next destination may be.',
    'buttonText' => 'Get a Free Quote',
    'destination' => ''
])

<section {{ $attributes->merge(['class' => 'relative my-6 sm:my-10 lg:my-14 mx-auto max-w-5xl w-full']) }}>
    {{-- Clean, Minimal Luxury Card (High-Contrast Typography & Actions, Crisp Zero-Blur Design) --}}
    <div class="relative rounded-2xl sm:rounded-3xl bg-white border-2 border-[#D8E6D8] shadow-[0_20px_55px_-10px_rgba(7,59,46,0.14)] p-5 sm:p-8 md:p-11 text-center overflow-hidden">
        {{-- Permanent Top Shining Laser Line & Glow --}}
        <div class="absolute inset-x-0 top-0 h-[3px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent shadow-[0_0_15px_#D8F36B] z-20 pointer-events-none"></div>
        
        <div class="max-w-3xl mx-auto space-y-3.5 sm:space-y-4">
            
            {{-- Clean Badge --}}
            <span class="forest-badge">
                <i class="fa-solid fa-truck-ramp-box text-[#D8F36B]"></i>
                <span>Moving Beyond Borders</span>
            </span>

            {{-- Main Headline --}}
            <h2 class="text-2xl sm:text-3xl md:text-[34px] lg:text-4xl font-black font-heading tracking-tight text-[#073B2E] leading-tight">
                {{ $headline }}
            </h2>

            {{-- Supporting Subheadline --}}
            <p class="text-xs sm:text-sm md:text-base text-[#4A5750] leading-relaxed font-normal max-w-xl mx-auto">
                {{ $subheadline }}
            </p>

            {{-- Action Buttons Row --}}
            <div class="pt-2 sm:pt-2.5 flex flex-col sm:flex-row items-center justify-center gap-2.5 sm:gap-3.5">
                {{-- Primary Quote CTA (Lime Button) --}}
                <button type="button" 
                        onclick="openQuoteModal('{{ $destination }}')" 
                        class="btn-lime text-xs sm:text-sm font-bold py-3.5 px-6 shadow-md w-full sm:w-auto cursor-pointer">
                    <i class="fa-solid fa-file-invoice text-xs"></i>
                    <span>{{ $buttonText }}</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </button>

                {{-- WhatsApp Direct Chat Button (Forest Green) --}}
                <a href="https://wa.me/{{ config('movexa.brand.whatsapp_number') }}?text={{ urlencode('Hello MOVEXA, I am planning a move and would like to speak to a relocation consultant.') }}" 
                   target="_blank" 
                   rel="noopener" 
                   class="btn-forest text-xs sm:text-sm font-bold py-3.5 px-6 shadow-md w-full sm:w-auto">
                    <i class="fa-brands fa-whatsapp text-base text-[#25D366]"></i>
                    <span>Chat on WhatsApp</span>
                </a>

                {{-- Direct Phone Link Pill --}}
                <a href="tel:{{ config('movexa.brand.phone_raw') }}" 
                   class="inline-flex items-center justify-center gap-2 px-4 py-3.5 rounded-full bg-white hover:bg-[#EBF5E7] border border-[#D5E2D5] text-[#073B2E] text-xs sm:text-sm font-bold transition-all w-full sm:w-auto shadow-2xs">
                    <i class="fa-solid fa-phone text-[#073B2E] text-xs"></i>
                    <span>{{ config('movexa.brand.phone_display') }}</span>
                </a>
            </div>

            {{-- Compact Micro-Trust Proof Line --}}
            <div class="pt-2 text-[11px] sm:text-xs text-[#747C76] font-medium flex flex-wrap items-center justify-center gap-x-4 gap-y-1">
                <span class="inline-flex items-center gap-1.5">
                    <i class="fa-solid fa-star text-amber-500 text-[10px]"></i>
                    <span>4.9/5 Rating (650+ Reviews)</span>
                </span>
                <span class="hidden sm:inline opacity-40">&bull;</span>
                <span class="inline-flex items-center gap-1.5">
                    <i class="fa-solid fa-shield-check text-[#103B30] text-[10px]"></i>
                    <span>Free Virtual Survey</span>
                </span>
                <span class="hidden sm:inline opacity-40">&bull;</span>
                <span class="inline-flex items-center gap-1.5">
                    <i class="fa-solid fa-certificate text-[#103B30] text-[10px]"></i>
                    <span>Fixed-Price Guarantee</span>
                </span>
            </div>

        </div>

    </div>
</section>
