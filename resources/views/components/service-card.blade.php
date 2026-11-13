@props(['service', 'imageOnly' => false])

@if ($imageOnly)
    {{-- Clean Full-Bleed Image Showcase Card (No Clutter / Pure Visual Presentation) --}}
    <a href="{{ route('services.show', $service['slug']) }}" 
       class="group relative block w-full rounded-3xl overflow-hidden border border-[#E2E8E2] bg-white shadow-[0_8px_30px_rgba(7,59,46,0.06)] hover:shadow-[0_22px_55px_rgba(7,59,46,0.18)] hover:border-[#107050]/50 transition-all duration-300 card-hover aspect-[4/3] sm:aspect-[16/11] lg:aspect-[4/3]"
       aria-label="{{ $service['title'] }} in Dubai">
        
        {{-- Full-Bleed Branded Image with Smooth Hover Zoom --}}
        <img src="{{ $service['image'] }}" 
             alt="{{ $service['title'] }} in Dubai - MOVEXA" 
             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out"
             loading="lazy"
             decoding="async">
        
        {{-- Elegant Dark Vignette Gradient for High Contrast & Text Legibility --}}
        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 to-transparent"></div>
        
        {{-- Floating Category Icon Badge (Top Left) --}}
        <div class="absolute top-4 left-4 sm:top-5 sm:left-5">
            <span class="w-10 h-10 sm:w-11 sm:h-11 rounded-2xl bg-[#073B2E]/90 backdrop-blur-md border border-white/20 text-[#B7E532] flex items-center justify-center text-sm sm:text-base shadow-md group-hover:scale-105 group-hover:bg-[#B7E532] group-hover:text-[#073B2E] transition-all duration-300">
                <i class="fa-solid {{ $service['icon'] }}"></i>
            </span>
        </div>

        {{-- Service Title & Modern Arrow Indicator (Bottom) --}}
        <div class="absolute bottom-4 left-4 right-4 sm:bottom-5 sm:left-5 sm:right-5 flex items-end justify-between gap-3">
            <div>
                <span class="text-[10px] sm:text-[11px] font-extrabold uppercase tracking-widest text-[#B7E532] block mb-1 drop-shadow-sm">
                    Relocation Services
                </span>
                <h3 class="text-xl sm:text-2xl font-black font-heading text-white tracking-tight leading-snug drop-shadow-[0_2px_10px_rgba(0,0,0,0.85)] group-hover:text-[#B7E532] transition-colors">
                    {{ $service['title'] }}
                </h3>
            </div>
            <span class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md border border-white/30 text-white group-hover:bg-[#B7E532] group-hover:text-[#073B2E] group-hover:border-[#B7E532] flex items-center justify-center text-xs transition-all duration-300 shrink-0 shadow-md">
                <i class="fa-solid fa-arrow-right -rotate-45 group-hover:rotate-0 transition-transform"></i>
            </span>
        </div>

        {{-- Subtle Border Glow on Hover --}}
        <div class="absolute inset-0 rounded-3xl border border-white/10 group-hover:border-[#B7E532]/60 transition-colors pointer-events-none"></div>
    </a>
@else
<div class="group relative bg-white rounded-3xl overflow-hidden border border-[#DFE7E1] hover:border-[#107050]/40 shadow-[0_10px_35px_-8px_rgba(7,59,46,0.06)] hover:shadow-[0_25px_60px_-12px_rgba(7,59,46,0.18),0_0_25px_rgba(216,243,107,0.22)] transition-all duration-300 flex flex-col justify-between card-hover h-full">
    {{-- Permanent Top Shining Laser Line --}}
    <div class="laser-card-line absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent shadow-[0_0_12px_#D8F36B] z-20"></div>
    {{-- Card Image with overlay & badge --}}
    <div class="relative h-60 sm:h-[250px] xl:h-[260px] overflow-hidden bg-gray-100 shrink-0">
        <img src="{{ $service['image'] }}" 
             alt="{{ $service['title'] }} in Dubai - MOVEXA" 
             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out"
             loading="lazy"
             decoding="async">
        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 to-transparent"></div>
        
        {{-- Floating Category Icon Badge --}}
        <div class="absolute top-4 left-4 sm:top-5 sm:left-5">
            <span class="w-11 h-11 rounded-2xl bg-[#073B2E]/90 backdrop-blur-md border border-white/20 text-[#B7E532] flex items-center justify-center text-base shadow-md group-hover:scale-105 group-hover:bg-[#B7E532] group-hover:text-[#073B2E] transition-all duration-300">
                <i class="fa-solid {{ $service['icon'] }}"></i>
            </span>
        </div>

        {{-- Prominent Service Title on Image --}}
        <div class="absolute bottom-4 left-5 right-5">
            <span class="text-[10.5px] font-extrabold uppercase tracking-widest text-[#B7E532] block mb-1 drop-shadow-sm">Relocation Services</span>
            <h3 class="text-2xl sm:text-[25px] font-black font-heading text-white tracking-tight leading-snug drop-shadow-[0_2px_10px_rgba(0,0,0,0.85)]">
                {{ $service['title'] }}
            </h3>
        </div>
    </div>

    {{-- Card Body (Generous Padding, High Readability & Clean Spacing) --}}
    <div class="p-6 sm:p-7 flex-grow flex flex-col justify-between space-y-5">
        {{-- Description Text with High Contrast & Readability --}}
        <p class="text-sm sm:text-[15px] text-[#425048] leading-relaxed font-normal min-h-[44px]">
            {{ $service['short_desc'] }}
        </p>

        {{-- Feature Highlights (Proper text display without truncation) --}}
        <ul class="space-y-2.5 pt-4 border-t border-[#EAEFEA]">
            @foreach (array_slice($service['features'], 0, 3) as $feat)
            <li class="flex items-start gap-2.5 text-xs sm:text-[13px] text-[#18221D] font-bold leading-snug">
                <span class="w-5 h-5 rounded-full bg-[#EBF5E7] group-hover:bg-[#B7E532] text-[#073B2E] flex items-center justify-center text-[9px] mt-0.5 shrink-0 transition-colors shadow-2xs">
                    <i class="fa-solid fa-check font-black"></i>
                </span>
                <span class="flex-1">{{ $feat }}</span>
            </li>
            @endforeach
        </ul>

        {{-- Footer Actions --}}
        <div class="pt-4 flex items-center justify-between border-t border-[#EAEFEA]">
            <a href="{{ route('services.show', $service['slug']) }}" class="inline-flex items-center gap-2 text-xs sm:text-sm font-extrabold text-[#103B30] hover:text-emerald-900 group/link transition-colors">
                <span>Explore Service</span>
                <i class="fa-solid fa-arrow-right text-[10.5px] transform group-hover/link:translate-x-1.5 transition-transform text-[#073B2E]"></i>
            </a>

            <button type="button" 
                    onclick="openQuoteModal('', '{{ $service['title'] }}')" 
                    class="w-10 h-10 rounded-xl bg-white border border-[#E2E8E2] hover:bg-[#073B2E] hover:text-[#B7E532] hover:border-[#073B2E] text-[#073B2E] flex items-center justify-center text-xs transition-all duration-200 shadow-2xs hover:shadow-sm hover:scale-105" 
                    title="Request quote for {{ $service['title'] }}"
                    aria-label="Request quote for {{ $service['title'] }}">
                <i class="fa-solid fa-calculator"></i>
            </button>
        </div>
    </div>
</div>
@endif
