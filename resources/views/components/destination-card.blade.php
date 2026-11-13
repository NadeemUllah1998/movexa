@props(['dest'])

<div class="group relative bg-white rounded-3xl sm:rounded-[28px] overflow-hidden border border-[#DFE7E1] hover:border-[#107050]/40 shadow-[0_8px_30px_-6px_rgba(8,39,31,0.08)] hover:shadow-[0_22px_50px_-10px_rgba(8,39,31,0.18),0_0_20px_rgba(216,243,107,0.22)] transition-all duration-300 flex flex-col justify-between card-hover h-full">
    {{-- Top Shining Laser Line on Hover --}}
    <div class="absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent shadow-[0_0_12px_#D8F36B] z-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
    {{-- Image Container (Clickable to Destination Guide) --}}
    <a href="{{ route('destinations.show', $dest['slug']) }}" class="relative h-48 sm:h-52 lg:h-[200px] overflow-hidden bg-gray-100 shrink-0 block group/img">
        <img src="{{ $dest['image'] }}" 
             alt="Relocating from Dubai to {{ $dest['country'] }} - MOVEXA" 
             loading="lazy"
             decoding="async"
             class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-700 ease-out">
        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 to-transparent"></div>

        {{-- Top Badges: Country Code Pill, Region Badge & Flag --}}
        <div class="absolute top-3.5 left-3.5 right-3.5 flex items-center justify-between pointer-events-none">
            <div class="flex items-center gap-1.5 sm:gap-2">
                {{-- Country Code Badge --}}
                <span class="px-2.5 py-1 rounded-xl bg-white/95 backdrop-blur-md text-[#103B30] font-black text-[11px] sm:text-xs tracking-wider shadow-sm border border-white/50 leading-none">
                    {{ $dest['code'] ?? strtoupper(substr($dest['slug'], -2)) }}
                </span>

                {{-- Region Badge --}}
                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-wider bg-[#103B30]/90 text-[#D8F36B] backdrop-blur-md border border-[#D8F36B]/30 shadow-sm leading-none">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#D8F36B]"></span>
                    {{ $dest['region'] }}
                </span>
            </div>

            {{-- Country Flag Emoji --}}
            <span class="text-2xl leading-none filter drop-shadow">
                {{ $dest['flag'] }}
            </span>
        </div>

        {{-- Bottom Title & Major Cities --}}
        <div class="absolute bottom-3.5 left-4 right-4">
            <h3 class="text-xl sm:text-[22px] font-black font-heading text-white tracking-tight leading-tight drop-shadow-[0_2px_8px_rgba(0,0,0,0.85)] group-hover/img:text-[#D8F36B] transition-colors">
                {{ $dest['country'] }}
            </h3>
            <p class="text-xs text-white/90 font-medium truncate mt-1 flex items-center gap-1.5 drop-shadow">
                <i class="fa-solid fa-location-dot text-[#D8F36B] text-[10px]"></i>
                <span class="truncate">{{ $dest['capital_city'] }}</span>
            </p>
        </div>
    </a>

    {{-- Details Body --}}
    <div class="p-5 sm:p-5.5 flex-grow flex flex-col justify-between space-y-3.5">
        {{-- Description / Value Proposition --}}
        <p class="text-xs sm:text-[13px] text-[#4F5953] leading-relaxed line-clamp-2 min-h-[36px] font-normal">
            {{ $dest['tagline'] }}
        </p>

        {{-- Shipping & Transit Box (Clear Icons & Bold Estimates) --}}
        <div class="bg-[#F2F7F4] p-3 sm:p-3.5 rounded-2xl border border-[#E2E8E2]/80 space-y-2">
            {{-- Sea Transit --}}
            <div class="flex items-center justify-between text-xs gap-2">
                <span class="text-[#5A645E] flex items-center gap-2 font-medium shrink-0">
                    <span class="w-6 h-6 rounded-lg bg-[#EBF2EB] text-[#103B30] flex items-center justify-center text-[10px]">
                        <i class="fa-solid fa-ship"></i>
                    </span>
                    <span>Transit:</span>
                </span>
                <span class="font-bold text-[#103B30] text-right truncate text-[11px] sm:text-xs">
                    {{ $dest['transit_sea'] }}
                </span>
            </div>

            {{-- Air Cargo --}}
            <div class="flex items-center justify-between text-xs gap-2 pt-1.5 border-t border-[#E2E8E2]/60">
                <span class="text-[#5A645E] flex items-center gap-2 font-medium shrink-0">
                    <span class="w-6 h-6 rounded-lg bg-[#EBF2EB] text-[#103B30] flex items-center justify-center text-[10px]">
                        <i class="fa-solid fa-plane"></i>
                    </span>
                    <span>Air:</span>
                </span>
                <span class="font-bold text-[#103B30] text-right truncate text-[11px] sm:text-xs">
                    {{ $dest['transit_air'] }}
                </span>
            </div>
        </div>

        {{-- Card Action Footer --}}
        <div class="pt-3.5 flex items-center justify-between border-t border-[#E2E8E2]">
            <a href="{{ route('destinations.show', $dest['slug']) }}" class="inline-flex items-center gap-2 text-xs sm:text-[13px] font-bold text-[#103B30] hover:text-[#08271F] group/link">
                <span>View Relocation Guide</span>
                <i class="fa-solid fa-arrow-right text-[10px] transform group-hover/link:translate-x-1.5 transition-transform"></i>
            </a>

            <button type="button" 
                    onclick="openQuoteModal('{{ $dest['country'] }}')" 
                    class="w-9 h-9 rounded-xl bg-[#F2F7F4] hover:bg-[#D8F36B] text-[#103B30] flex items-center justify-center text-xs transition-all duration-200 shadow-sm hover:scale-105" 
                    title="Request quote for {{ $dest['country'] }}"
                    aria-label="Request quote for {{ $dest['country'] }}">
                <i class="fa-solid fa-calculator"></i>
            </button>
        </div>
    </div>
</div>
