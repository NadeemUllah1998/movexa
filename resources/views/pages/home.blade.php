@extends('layouts.app')

@section('title', 'MOVEXA – Global Moving & Relocations | Movers in Dubai')
@section('meta_description', 'MOVEXA is Dubai\'s premier moving and relocation company. We offer local home moving in Dubai, luxury villa relocations, corporate office moves, and international relocations from Dubai to destinations worldwide.')

@section('content')

{{-- ==========================================
     SECTION 1: HERO SECTION (PROPORTIONAL, COMPLETE HERO TEAM IMAGE - NO ZOOM / NOT NEAR)
     ========================================== --}}
{{-- ==========================================
     SECTION 1: HERO SECTION (DYNAMIC AUTO-SLIDING CAROUSEL WITH MATCHED TEXT & IMAGERY)
     ========================================== --}}
@php
$heroSlides = [
    [
        'image' => asset('images/hero/movexa-hero-villa-unloading.webp'),
        'badge' => 'DUBAI VILLA & RESIDENTIAL RELOCATIONS',
        'line1' => 'Luxury Villa Relocation,',
        'line2' => 'Handled With Precision.',
        'desc' => 'Specialized moving for luxury villas and residential communities across Dubai with tailored fleet trucks, padded wrapping, and white-glove setup.',
        'stat1_val' => '100%', 'stat1_lbl' => 'White-Glove Care',
        'stat2_val' => 'Villas', 'stat2_lbl' => '& Residences',
        'stat3_val' => 'On-Time', 'stat3_lbl' => 'Guaranteed Move',
    ],
    [
        'image' => asset('images/hero/movexa-hero-truck-skyline.webp'),
        'badge' => "DUBAI'S TRUSTED RELOCATION PARTNER",
        'line1' => 'Moving Beyond Borders,',
        'line2' => 'With Complete Care.',
        'desc' => 'From local moves across Dubai and the UAE to worldwide relocations, MOVEXA makes every transition seamless, secure, and stress-free.',
        'stat1_val' => 'Dubai', 'stat1_lbl' => '& All Emirates',
        'stat2_val' => 'Export', 'stat2_lbl' => '5-Ply Packaging',
        'stat3_val' => 'Global', 'stat3_lbl' => 'Relocation Routes',
    ],
    [
        'image' => asset('images/hero/movexa-hero-fleet-community.webp'),
        'badge' => 'LOCAL DUBAI MOVING EXPERTS',
        'line1' => 'Your Neighborhood Movers,',
        'line2' => 'Fast, Safe & Reliable.',
        'desc' => 'Operating daily across Downtown, Dubai Marina, Arabian Ranches, Palm Jumeirah, and all residential communities with modern covered trucks.',
        'stat1_val' => 'Fast', 'stat1_lbl' => 'Same-Day Survey',
        'stat2_val' => 'Covered', 'stat2_lbl' => 'Moving Trucks',
        'stat3_val' => 'All-Risk', 'stat3_lbl' => 'Transit Protection',
    ],
    [
        'image' => asset('images/hero/movexa-hero-team.webp'),
        'badge' => 'CERTIFIED MOVING SPECIALISTS',
        'line1' => 'Professional Movers,',
        'line2' => 'Trained & Dedicated.',
        'desc' => 'Experienced crew leaders, master carpenters for furniture dismantling, and packaging experts who treat your belongings with maximum protection.',
        'stat1_val' => 'Certified', 'stat1_lbl' => 'Moving Crew',
        'stat2_val' => 'Zero', 'stat2_lbl' => 'Damage Goal',
        'stat3_val' => 'Dedicated', 'stat3_lbl' => 'Move Supervisor',
    ],
    [
        'image' => asset('images/hero/movexa-hero-truck-hands.webp'),
        'badge' => 'STRESS-FREE HOME RELOCATIONS',
        'line1' => 'Careful Packing & Transit,',
        'line2' => 'Every Step Of The Way.',
        'desc' => 'High-density multi-ply cartons, delicate wrapping, custom crating, and systematic room-by-room unpacking for a seamless moving experience.',
        'stat1_val' => '5-Ply', 'stat1_lbl' => 'Heavy Duty Boxes',
        'stat2_val' => 'Custom', 'stat2_lbl' => 'Wooden Crating',
        'stat3_val' => 'Complete', 'stat3_lbl' => 'Unpacking Setup',
    ],
];
@endphp

<section class="relative min-h-[460px] sm:min-h-[500px] md:min-h-[530px] lg:min-h-[550px] xl:min-h-[570px] 2xl:min-h-[600px] flex items-start text-white overflow-hidden pt-5 sm:pt-7 md:pt-8 lg:pt-9 xl:pt-10 pb-14 sm:pb-16 md:pb-18 lg:pb-20 xl:pb-24 bg-[#071712] w-full"
         x-data="{
             active: 0,
             total: {{ count($heroSlides) }},
             timer: null,
             next() {
                 this.active = (this.active + 1) % this.total;
             },
             prev() {
                 this.active = (this.active - 1 + this.total) % this.total;
             },
             goTo(index) {
                 this.active = index;
                 this.resetAutoplay();
             },
             startAutoplay() {
                 this.timer = setInterval(() => { this.next(); }, 5500);
             },
             pauseAutoplay() {
                 if (this.timer) clearInterval(this.timer);
             },
             resetAutoplay() {
                 this.pauseAutoplay();
                 this.startAutoplay();
             }
         }"
         x-init="startAutoplay()"
         @mouseenter="pauseAutoplay()"
         @mouseleave="startAutoplay()">

    {{-- Full Natural Hero Slider Backgrounds with Cross-Fade (Truck & Workers Kept Prominently Visible) --}}
    <div class="absolute inset-0 z-0 bg-[#071712] overflow-hidden pointer-events-none">
        @foreach ($heroSlides as $idx => $slide)
        <div class="absolute inset-0 transition-opacity duration-1000 ease-in-out"
             :class="active === {{ $idx }} ? 'opacity-100 z-10' : 'opacity-0 z-0 pointer-events-none'"
             {{ $idx !== 0 ? 'x-cloak' : '' }}>
            
            {{-- Ambient soft-blurred backdrop to seamlessly fill any ultrawide aspect ratio --}}
            <img src="{{ $slide['image'] }}" 
                 alt="" 
                 aria-hidden="true" 
                 loading="{{ $idx === 0 ? 'eager' : 'lazy' }}"
                 decoding="async"
                 class="absolute inset-0 w-full h-full object-cover filter blur-3xl opacity-35 scale-110 pointer-events-none">
            
            {{-- Main Crisp Hero Slide Image (Optimized Object Position for Mobile, Tablet, Laptop, and Desktop) --}}
            <img src="{{ $slide['image'] }}" 
                 alt="{{ $slide['line1'] }} {{ $slide['line2'] }}" 
                 @if($idx === 0)
                 loading="eager"
                 fetchpriority="high"
                 decoding="sync"
                 @else
                 loading="lazy"
                 decoding="async"
                 @endif
                 class="w-full h-full object-cover object-[75%_center] sm:object-[78%_center] md:object-[80%_center] lg:object-center relative z-0">
        </div>
        @endforeach

        {{-- Natural Contrast Gradient (Soft neutral gradient ensuring direct text legibility without a card) --}}
        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/50 to-black/30 lg:bg-gradient-to-r lg:from-black/80 lg:via-black/50 lg:to-transparent z-20 pointer-events-none"></div>
        <div class="absolute inset-0 bg-black/10 lg:bg-transparent z-20 pointer-events-none"></div>
    </div>

    <div class="max-w-7xl 2xl:max-w-[1520px] mx-auto px-4 sm:px-6 lg:px-8 relative z-20 w-full">
        {{-- Hero Content (Direct Typography & Slider, No Card Container) --}}
        <div class="w-full max-w-full sm:max-w-lg md:max-w-xl lg:max-w-xl xl:max-w-2xl 2xl:max-w-[700px] text-center sm:text-left transition-all duration-300 relative z-20">
            
            {{-- Slide Content Container with CSS Grid Overlay (Prevents Multi-Slide Stacking) --}}
            <div class="grid grid-cols-1 grid-rows-1 relative min-h-[420px] min-[375px]:min-h-[390px] sm:min-h-[360px] md:min-h-[350px] lg:min-h-[365px]">
                @foreach ($heroSlides as $idx => $slide)
                <div class="col-start-1 row-start-1 transition-all duration-700 ease-out"
                     :class="active === {{ $idx }} ? 'opacity-100 translate-y-0 z-10 pointer-events-auto' : 'opacity-0 translate-y-3 z-0 pointer-events-none invisible'"
                     {{ $idx !== 0 ? 'x-cloak' : '' }}>
                    
                    {{-- Compact Trust Badge (Frosted glass with Pure White text & Lime Pulsing Accent) --}}
                    <div class="mb-3.5 sm:mb-5">
                        <div class="inline-flex items-center gap-2 px-3 py-1 sm:px-3.5 sm:py-1.5 rounded-full bg-white/[0.08] backdrop-blur-md border border-white/20 text-white text-[10px] min-[375px]:text-[10.5px] sm:text-xs font-bold tracking-wider uppercase shadow-xs">
                            <span class="relative flex h-2 w-2">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#B7E532] opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-[#B7E532] shadow-[0_0_8px_#B7E532]"></span>
                            </span>
                            <span class="text-white">{{ $slide['badge'] }}</span>
                        </div>
                    </div>

                    {{-- Main Headline (Pure White #FFFFFF across both lines, generous line-height, proper vertical spacing) --}}
                    <h1 class="text-2xl min-[375px]:text-[26px] sm:text-3xl md:text-4xl lg:text-[40px] xl:text-[46px] 2xl:text-[48px] font-black font-heading tracking-tight text-white leading-[1.22] sm:leading-[1.20] drop-shadow-[0_2px_12px_rgba(0,0,0,0.85)]">
                        <span class="block">{{ $slide['line1'] }}</span>
                        <span class="block text-white/95 mt-1 sm:mt-1.5">{{ $slide['line2'] }}</span>
                    </h1>

                    {{-- Supporting text (Pure White #FFFFFF, comfortable line-height and generous vertical margins) --}}
                    <p class="mt-3 sm:mt-4 text-xs sm:text-sm lg:text-[15px] text-white/90 leading-relaxed font-normal drop-shadow-[0_1px_4px_rgba(0,0,0,0.85)] max-w-xl mx-auto sm:mx-0">
                        {{ $slide['desc'] }}
                    </p>

                    {{-- Hero CTA Buttons (Vertically stacked on mobile, side-by-side on tablet/desktop, generous vertical spacing) --}}
                    <div class="pt-3.5 sm:pt-5 pb-1 flex flex-col sm:flex-row items-stretch sm:items-center justify-center sm:justify-start gap-2.5 sm:gap-4 w-full">
                        <button type="button" 
                                onclick="openQuoteModal()" 
                                class="inline-flex items-center justify-center gap-2 font-extrabold px-5 sm:px-6 py-3 sm:py-3.5 rounded-full bg-[#B7E532] text-[#073B2E] hover:bg-[#cbf54a] text-xs sm:text-sm shadow-md hover:shadow-lg hover:shadow-[#B7E532]/20 transition-all duration-200 transform hover:-translate-y-0.5 focus:outline-none w-full sm:w-auto">
                            <i class="fa-solid fa-file-invoice text-xs"></i>
                            <span>Get a Free Moving Quote</span>
                        </button>

                        <a href="{{ route('services.index') }}" 
                           class="inline-flex items-center justify-center gap-2 font-semibold px-5 sm:px-6 py-3 sm:py-3.5 rounded-full border border-white/60 bg-white/10 hover:bg-white hover:text-[#073B2E] text-white text-xs sm:text-sm backdrop-blur-md transition-all duration-200 focus:outline-none w-full sm:w-auto">
                            <span>Explore Our Services</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>

                    {{-- Complete Key Trust Indicators (Pure White #FFFFFF Statistics & Labels with clean word-wrapping) --}}
                    <div class="mt-4 sm:mt-6 pt-3.5 sm:pt-5 grid grid-cols-3 gap-1.5 min-[375px]:gap-2 sm:gap-4 border-t border-white/15 text-center sm:text-left">
                        <div class="space-y-0.5 sm:space-y-1">
                            <div class="text-base min-[375px]:text-lg sm:text-2xl 2xl:text-[28px] font-black text-white font-heading tracking-tight drop-shadow-[0_1px_4px_rgba(0,0,0,0.8)]">
                                {{ $slide['stat1_val'] }}
                            </div>
                            <div class="text-[9px] min-[375px]:text-[10px] sm:text-[11px] text-white/90 font-medium uppercase tracking-normal leading-snug drop-shadow-[0_1px_2px_rgba(0,0,0,0.8)]">
                                {{ $slide['stat1_lbl'] }}
                            </div>
                        </div>
                        <div class="space-y-0.5 sm:space-y-1">
                            <div class="text-base min-[375px]:text-lg sm:text-2xl 2xl:text-[28px] font-black text-white font-heading tracking-tight drop-shadow-[0_1px_4px_rgba(0,0,0,0.8)]">
                                {{ $slide['stat2_val'] }}
                            </div>
                            <div class="text-[9px] min-[375px]:text-[10px] sm:text-[11px] text-white/90 font-medium uppercase tracking-normal leading-snug drop-shadow-[0_1px_2px_rgba(0,0,0,0.8)]">
                                {{ $slide['stat2_lbl'] }}
                            </div>
                        </div>
                        <div class="space-y-0.5 sm:space-y-1">
                            <div class="text-base min-[375px]:text-lg sm:text-2xl 2xl:text-[28px] font-black text-white font-heading tracking-tight drop-shadow-[0_1px_4px_rgba(0,0,0,0.8)]">
                                {{ $slide['stat3_val'] }}
                            </div>
                            <div class="text-[9px] min-[375px]:text-[10px] sm:text-[11px] text-white/90 font-medium uppercase tracking-normal leading-snug drop-shadow-[0_1px_2px_rgba(0,0,0,0.8)]">
                                {{ $slide['stat3_lbl'] }}
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>

            {{-- Minimalist Slide Progress Dots (Accessible & Responsive) --}}
            <div class="mt-4 sm:mt-5 pt-3.5 sm:pt-4 flex items-center justify-center sm:justify-start gap-2 sm:gap-2.5 border-t border-white/15">
                @foreach ($heroSlides as $idx => $slide)
                <button type="button" 
                        @click="goTo({{ $idx }})" 
                        class="h-2 rounded-full transition-all duration-300 focus:outline-none"
                        :class="active === {{ $idx }} ? 'w-8 sm:w-9 bg-[#B7E532] shadow-[0_0_10px_#B7E532]' : 'w-2.5 bg-white/40 hover:bg-white'"
                        aria-label="Go to Slide {{ $idx + 1 }}">
                </button>
                @endforeach
            </div>

        </div>
    </div>
</section>

{{-- ==========================================
     SECTION 2: QUICK MOVING QUOTE
     ========================================== --}}
<section class="relative -mt-6 sm:-mt-10 z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="relative bg-white/98 backdrop-blur-md rounded-2xl sm:rounded-3xl p-4 sm:p-8 lg:p-9 shadow-[0_25px_65px_-15px_rgba(7,59,46,0.14),0_0_0_1px_rgba(16,59,48,0.06)] border border-[#DFE7E0] overflow-hidden">
        {{-- Top Specular Brand Accent Line --}}
        <div class="absolute inset-x-0 top-0 h-[3px] bg-gradient-to-r from-[#103B30] via-[#B7E532] to-[#103B30] shadow-[0_0_12px_#B7E532] z-20 pointer-events-none"></div>
        
        {{-- Section Header --}}
        <div class="flex flex-col md:flex-row md:items-center justify-between pb-5 sm:pb-6 mb-6 border-b border-[#EAEFEA] gap-4">
            <div>
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-[11px] font-black uppercase tracking-wider bg-[#103B30] text-[#D8F36B] shadow-2xs">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#D8F36B] opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-[#D8F36B]"></span>
                    </span>
                    <i class="fa-solid fa-calculator text-[10px]"></i>
                    <span>Instant Moving Estimation</span>
                </div>
                <h2 class="text-xl min-[375px]:text-2xl sm:text-3xl lg:text-[32px] font-black font-heading text-[#073B2E] tracking-tight mt-2.5">
                    Where Are You Moving?
                </h2>
            </div>
            
            {{-- Trust Points Strip --}}
            <div class="flex flex-wrap items-center gap-2 sm:gap-3 text-xs font-semibold text-[#4F5D54]">
                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-[#F4F8F4] border border-[#DCE7DC] text-[#203D2E] shadow-2xs font-bold text-[11.5px]">
                    <i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i>
                    <span>100% Free Survey</span>
                </span>
                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-[#F4F8F4] border border-[#DCE7DC] text-[#203D2E] shadow-2xs font-bold text-[11.5px]">
                    <i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i>
                    <span>Fixed Price Guarantee</span>
                </span>
                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-[#F4F8F4] border border-[#DCE7DC] text-[#203D2E] shadow-2xs font-bold text-[11.5px]">
                    <i class="fa-brands fa-whatsapp text-[#25D366] text-sm"></i>
                    <span>Instant Dispatch</span>
                </span>
            </div>
        </div>

        {{-- Quick Quote Form --}}
        <form id="quickQuoteForm" onsubmit="handleQuickQuote(event)" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-3.5 sm:gap-4 items-end">
            {{-- 1. Moving From --}}
            <div>
                <label for="qqFrom" class="block text-[11px] font-black uppercase tracking-wider text-[#2D4537] mb-2 flex items-center gap-1.5">
                    <span>Moving From</span>
                </label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-2.5 flex items-center pointer-events-none">
                        <span class="w-7 h-7 rounded-lg bg-[#EBF5E7] text-[#103B30] border border-[#D5E6D5] flex items-center justify-center text-[11px]">
                            <i class="fa-solid fa-location-dot"></i>
                        </span>
                    </span>
                    <input type="text" id="qqFrom" required placeholder="Dubai Marina, Downtown..." 
                           class="w-full text-xs sm:text-[13px] font-semibold text-[#102A20] rounded-xl pl-11 pr-3.5 py-3.5 bg-[#F9FBF9] hover:bg-white focus:bg-white border-2 border-[#E1EAE1] hover:border-[#CFDEC7] focus:border-[#103B30] focus:ring-4 focus:ring-[#103B30]/10 transition-all placeholder:text-[#8FA094] placeholder:font-normal shadow-2xs">
                </div>
            </div>

            {{-- 2. Moving To --}}
            <div>
                <label for="qqTo" class="block text-[11px] font-black uppercase tracking-wider text-[#2D4537] mb-2 flex items-center gap-1.5">
                    <span>Moving To</span>
                </label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-2.5 flex items-center pointer-events-none">
                        <span class="w-7 h-7 rounded-lg bg-[#EBF5E7] text-[#103B30] border border-[#D5E6D5] flex items-center justify-center text-[11px]">
                            <i class="fa-solid fa-flag-checkered"></i>
                        </span>
                    </span>
                    <input type="text" id="qqTo" required placeholder="Palm Jumeirah, London UK..." 
                           class="w-full text-xs sm:text-[13px] font-semibold text-[#102A20] rounded-xl pl-11 pr-3.5 py-3.5 bg-[#F9FBF9] hover:bg-white focus:bg-white border-2 border-[#E1EAE1] hover:border-[#CFDEC7] focus:border-[#103B30] focus:ring-4 focus:ring-[#103B30]/10 transition-all placeholder:text-[#8FA094] placeholder:font-normal shadow-2xs">
                </div>
            </div>

            {{-- 3. Moving Date --}}
            <div>
                <label for="qqDate" class="block text-[11px] font-black uppercase tracking-wider text-[#2D4537] mb-2 flex items-center gap-1.5">
                    <span>Moving Date</span>
                </label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-2.5 flex items-center pointer-events-none">
                        <span class="w-7 h-7 rounded-lg bg-[#EBF5E7] text-[#103B30] border border-[#D5E6D5] flex items-center justify-center text-[11px]">
                            <i class="fa-solid fa-calendar-days"></i>
                        </span>
                    </span>
                    <input type="date" id="qqDate" required 
                           class="w-full text-xs sm:text-[13px] font-semibold text-[#102A20] rounded-xl pl-11 pr-3.5 py-3.5 bg-[#F9FBF9] hover:bg-white focus:bg-white border-2 border-[#E1EAE1] hover:border-[#CFDEC7] focus:border-[#103B30] focus:ring-4 focus:ring-[#103B30]/10 transition-all shadow-2xs cursor-pointer">
                </div>
            </div>

            {{-- 4. Moving Type --}}
            <div>
                <label for="qqType" class="block text-[11px] font-black uppercase tracking-wider text-[#2D4537] mb-2 flex items-center gap-1.5">
                    <span>Moving Type</span>
                </label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-2.5 flex items-center pointer-events-none">
                        <span class="w-7 h-7 rounded-lg bg-[#EBF5E7] text-[#103B30] border border-[#D5E6D5] flex items-center justify-center text-[11px]">
                            <i class="fa-solid fa-truck-ramp-box"></i>
                        </span>
                    </span>
                    <select id="qqType" required 
                            class="w-full text-xs sm:text-[13px] font-semibold text-[#102A20] rounded-xl pl-11 pr-8 py-3.5 bg-[#F9FBF9] hover:bg-white focus:bg-white border-2 border-[#E1EAE1] hover:border-[#CFDEC7] focus:border-[#103B30] focus:ring-4 focus:ring-[#103B30]/10 transition-all shadow-2xs cursor-pointer appearance-none">
                        <option value="Home Moving">Home Moving (Apartment/Villa)</option>
                        <option value="Villa Moving">Luxury Villa Relocation</option>
                        <option value="Apartment Moving">High-Rise Apartment Move</option>
                        <option value="Office Relocation">Corporate Office Shifting</option>
                        <option value="International Moving">International Moving (Global)</option>
                    </select>
                    <i class="fa-solid fa-chevron-down text-[#103B30] text-[10px] absolute right-3.5 top-1/2 -translate-y-1/2 pointer-events-none opacity-60"></i>
                </div>
            </div>

            {{-- 5. Submit CTA Button --}}
            <div class="sm:col-span-2 lg:col-span-1">
                <button type="submit" 
                        class="w-full inline-flex items-center justify-center gap-2 font-black text-xs sm:text-sm py-3.5 px-4 rounded-xl bg-gradient-to-r from-[#B7E532] to-[#cbf54a] hover:from-[#c2f235] hover:to-[#d2f748] text-[#073B2E] shadow-[0_6px_20px_rgba(183,229,50,0.4)] hover:shadow-[0_8px_26px_rgba(183,229,50,0.55)] transition-all duration-200 transform hover:-translate-y-0.5 active:translate-y-0 cursor-pointer group">
                    <i class="fa-brands fa-whatsapp text-base text-[#073B2E]"></i>
                    <span class="truncate">Get Free Quote</span>
                    <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-0.5 transition-transform"></i>
                </button>
            </div>
        </form>

    </div>
</section>

{{-- ==========================================
     SECTION 3: SERVICES OVERVIEW (HORIZONTAL CAROUSEL SLIDER - 3 LARGE CARDS)
     ========================================== --}}
<section class="py-20 sm:py-24 max-w-7xl 2xl:max-w-[1520px] mx-auto px-4 sm:px-6 lg:px-8 xl:px-10 relative overflow-hidden"
         x-data="{
             currentIndex: 0,
             visibleCards: 3,
             totalCards: {{ count(array_slice($services, 0, 6)) }},
             dots: [0, 1, 2, 3],
             timer: null,
             startX: 0,
             startY: 0,
             currentX: 0,
             currentY: 0,
             isSwiping: false,

             init() {
                 this.updateVisibleCards();
                 window.addEventListener('resize', () => {
                     this.updateVisibleCards();
                 });
                 this.startTimer();
             },

             updateVisibleCards() {
                 const w = window.innerWidth;
                 if (w >= 1024) {
                     this.visibleCards = 3;
                 } else if (w >= 640) {
                     this.visibleCards = 2;
                 } else {
                     this.visibleCards = 1;
                 }
                 this.dots = Array.from({ length: this.maxIndex() + 1 }, (_, i) => i);
                 if (this.currentIndex > this.maxIndex()) {
                     this.currentIndex = this.maxIndex();
                 }
             },

             maxIndex() {
                 return Math.max(0, this.totalCards - this.visibleCards);
             },

             next() {
                 if (this.currentIndex >= this.maxIndex()) {
                     this.currentIndex = 0;
                 } else {
                     this.currentIndex++;
                 }
             },

             prev() {
                 if (this.currentIndex <= 0) {
                     this.currentIndex = this.maxIndex();
                 } else {
                     this.currentIndex--;
                 }
             },

             goTo(idx) {
                 this.currentIndex = Math.min(Math.max(0, idx), this.maxIndex());
             },

             startTimer() {
                 this.stopTimer();
                 this.timer = setInterval(() => {
                     this.next();
                 }, 5000);
             },

             stopTimer() {
                 if (this.timer) {
                     clearInterval(this.timer);
                     this.timer = null;
                 }
             },

             restartTimer() {
                 this.stopTimer();
                 this.startTimer();
             },

             touchStart(e) {
                 this.stopTimer();
                 this.startX = e.touches[0].clientX;
                 this.startY = e.touches[0].clientY;
                 this.currentX = this.startX;
                 this.currentY = this.startY;
                 this.isSwiping = true;
             },

             touchMove(e) {
                 if (!this.isSwiping) return;
                 this.currentX = e.touches[0].clientX;
                 this.currentY = e.touches[0].clientY;
             },

             touchEnd() {
                 if (!this.isSwiping) return;
                 const diffX = this.startX - this.currentX;
                 const diffY = this.startY - this.currentY;
                 const threshold = 40;
                 if (Math.abs(diffX) > Math.abs(diffY) && Math.abs(diffX) > threshold) {
                     if (diffX > 0) {
                         this.next();
                     } else {
                         this.prev();
                     }
                 }
                 this.isSwiping = false;
                 this.startTimer();
             }
         }"
         @mouseenter="stopTimer()"
         @mouseleave="startTimer()">

    {{-- Luminous Ambient Glow Blooms --}}
    <div class="absolute -top-24 right-10 w-96 h-96 bg-[radial-gradient(ellipse_at_center,rgba(216,243,107,0.12),transparent_70%)] blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute -bottom-24 left-10 w-96 h-96 bg-[radial-gradient(ellipse_at_center,rgba(7,59,46,0.06),transparent_70%)] blur-3xl pointer-events-none -z-10"></div>

    {{-- Section Header with Integrated Navigation Controls --}}
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 sm:mb-14 gap-6 relative z-10">
        <div class="space-y-3.5 max-w-2xl text-left">
            <span class="forest-badge">
                <i class="fa-solid fa-truck-ramp-box"></i>
                <span>Comprehensive Moving Services</span>
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-[44px] xl:text-5xl font-black font-heading text-[#073B2E] tracking-tight leading-[1.15]">
                Moving Solutions Designed Around You.
            </h2>
            <p class="text-sm sm:text-base text-[#4E5B54] leading-relaxed font-normal">
                Whether you're moving across Dubai or relocating internationally, MOVEXA delivers turnkey moving solutions tailored to your schedule, property, and budget.
            </p>
        </div>

        {{-- Top Navigation Controls (Desktop, Tablet & Mobile) --}}
        <div class="flex items-center gap-3.5 self-start md:self-end shrink-0">
            {{-- Active Position Counter Pill --}}
            <div class="inline-flex items-center gap-2 text-xs font-bold text-[#073B2E] bg-white px-4 py-2.5 rounded-full border border-[#D8E2D9] shadow-2xs">
                <span class="w-2 h-2 rounded-full bg-[#B7E532] animate-pulse"></span>
                <span><span x-text="currentIndex + 1"></span> - <span x-text="Math.min(currentIndex + visibleCards, totalCards)"></span> of <span x-text="totalCards"></span> Services</span>
            </div>

            {{-- Previous Button --}}
            <button type="button" 
                    @click="prev(); restartTimer();" 
                    class="w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-white border border-[#D8E2D9] text-[#073B2E] hover:bg-[#073B2E] hover:text-[#B7E532] hover:border-[#073B2E] shadow-2xs hover:shadow-md flex items-center justify-center transition-all duration-200 focus:outline-none group"
                    aria-label="Previous Service">
                <i class="fa-solid fa-arrow-left text-xs sm:text-sm group-hover:-translate-x-0.5 transition-transform"></i>
            </button>

            {{-- Next Button --}}
            <button type="button" 
                    @click="next(); restartTimer();" 
                    class="w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-white border border-[#D8E2D9] text-[#073B2E] hover:bg-[#073B2E] hover:text-[#B7E532] hover:border-[#073B2E] shadow-2xs hover:shadow-md flex items-center justify-center transition-all duration-200 focus:outline-none group"
                    aria-label="Next Service">
                <i class="fa-solid fa-arrow-right text-xs sm:text-sm group-hover:translate-x-0.5 transition-transform"></i>
            </button>
        </div>
    </div>

    {{-- Carousel Track Container (with Mobile Swipe Listeners) --}}
    <div class="relative group/carousel"
         @touchstart.passive="touchStart($event)"
         @touchmove.passive="touchMove($event)"
         @touchend="touchEnd()">

        {{-- Floating Left Arrow for Large Screens --}}
        <button type="button" 
                @click="prev(); restartTimer();" 
                class="hidden xl:flex absolute -left-6 2xl:-left-7 top-1/2 -translate-y-1/2 z-30 w-12 h-12 rounded-full bg-white/95 backdrop-blur-md border border-[#D8E2D9] text-[#073B2E] hover:bg-[#073B2E] hover:text-[#B7E532] hover:border-[#073B2E] shadow-xl items-center justify-center transition-all duration-200 focus:outline-none opacity-0 group-hover/carousel:opacity-100 -translate-x-2 group-hover/carousel:translate-x-0"
                aria-label="Previous Service Slide">
            <i class="fa-solid fa-chevron-left text-sm"></i>
        </button>

        {{-- Floating Right Arrow for Large Screens --}}
        <button type="button" 
                @click="next(); restartTimer();" 
                class="hidden xl:flex absolute -right-6 2xl:-right-7 top-1/2 -translate-y-1/2 z-30 w-12 h-12 rounded-full bg-white/95 backdrop-blur-md border border-[#D8E2D9] text-[#073B2E] hover:bg-[#073B2E] hover:text-[#B7E532] hover:border-[#073B2E] shadow-xl items-center justify-center transition-all duration-200 focus:outline-none opacity-0 group-hover/carousel:opacity-100 translate-x-2 group-hover/carousel:translate-x-0"
                aria-label="Next Service Slide">
            <i class="fa-solid fa-chevron-right text-sm"></i>
        </button>

        {{-- Clipping Window with vertical padding to preserve card hover elevations --}}
        <div class="overflow-hidden py-5 -my-5">
            {{-- Horizontal Sliding Track (Moves 1 Large Card at a Time, 3 Visible on Desktop) --}}
            <div class="flex transition-transform duration-500 ease-out -mx-3.5 sm:-mx-4"
                 :style="'transform: translateX(-' + (currentIndex * (100 / visibleCards)) + '%)'">
                @foreach (array_slice($services, 0, 6) as $s)
                    <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 px-3.5 sm:px-4 flex flex-col">
                        <x-service-card :service="$s" :image-only="true" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Interactive Pagination Dots --}}
    <div class="flex items-center justify-center gap-2 mt-8 sm:mt-10">
        <template x-for="idx in dots" :key="idx">
            <button type="button" 
                    @click="goTo(idx); restartTimer();" 
                    class="h-2 rounded-full transition-all duration-300 focus:outline-none"
                    :class="currentIndex === idx ? 'w-9 bg-[#073B2E] shadow-2xs' : 'w-2 bg-[#D5DDD6] hover:bg-[#073B2E]/50'"
                    :aria-label="'Go to service position ' + (idx + 1)">
            </button>
        </template>
    </div>

    {{-- Bottom Explore All Services CTA --}}
    <div class="mt-8 sm:mt-10 text-center">
        <a href="{{ route('services.index') }}" class="inline-flex items-center justify-center gap-2.5 px-8 py-3.5 rounded-full border-2 border-[#073B2E] text-[#073B2E] hover:bg-[#073B2E] hover:text-[#B7E532] font-bold text-xs sm:text-sm tracking-wide transition-all duration-200 shadow-2xs hover:shadow-md hover:scale-[1.02]">
            <span>Explore All Moving &amp; Relocation Services</span>
            <i class="fa-solid fa-arrow-right text-xs"></i>
        </a>
    </div>
</section>

{{-- ==========================================
     SECTION 4: THE MOVEXA STANDARD (YOUR MOVE DESERVES PROFESSIONAL CARE - 6-CARD GRID)
     ========================================== --}}
<section class="bg-white py-16 sm:py-20 border-y border-[#E2E8E2] relative overflow-hidden" id="services">
    {{-- Ambient Radiant Glow Blooms for Depth & Luxury Contrast --}}
    <div class="absolute -top-32 right-10 w-[500px] h-[500px] bg-[radial-gradient(ellipse_at_center,rgba(216,243,107,0.12),transparent_70%)] blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute -bottom-32 left-10 w-[500px] h-[500px] bg-[radial-gradient(ellipse_at_center,rgba(7,59,46,0.05),transparent_70%)] blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute top-0 inset-x-0 h-px bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent opacity-70 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        {{-- Section Header (Centered Clean Standard) --}}
        <div class="text-center max-w-3xl mx-auto mb-14 sm:mb-16 space-y-3.5">
            <span class="forest-badge">
                <i class="fa-solid fa-truck-ramp-box"></i>
                The MOVEXA Standard
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-[44px] font-black font-heading text-[#073B2E] tracking-tight">
                Your Move Deserves Professional Care.
            </h2>
            <p class="text-sm sm:text-base text-[#3E5247] leading-relaxed font-normal">
                We understand that moving is more than transporting belongings. It is about making your next chapter seamless with Dubai's premier moving and relocation specialists.
            </p>
        </div>

        {{-- Desktop & Tablet Services Grid (Maintains Current Three-Image Card Layout) --}}
        <div class="hidden md:grid md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 items-stretch">
            
            {{-- Service 1: Home Moving --}}
            <div class="relative rounded-3xl bg-white border border-[#DFE7E1] hover:border-[#107050]/40 transition-all duration-300 card-hover flex flex-col justify-between overflow-hidden group shadow-[0_4px_24px_rgba(7,59,46,0.05)] hover:shadow-[0_22px_50px_-10px_rgba(7,59,46,0.15),0_0_22px_rgba(216,243,107,0.22)] h-full">
                {{-- Top Shining Laser Line on Hover --}}
                <div class="absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent shadow-[0_0_12px_#D8F36B] z-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                {{-- Top Image with Subtle Zoom --}}
                <div class="relative w-full aspect-[16/10] overflow-hidden bg-gray-100 shrink-0">
                    <img src="{{ asset('images/services/movexa-service-home-moving.webp') }}" 
                         alt="Home Moving and Relocation Services in Dubai - MOVEXA" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out"
                         loading="lazy"
                         decoding="async">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/55 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity"></div>
                    
                    {{-- Floating Category Icon Badge --}}
                    <div class="absolute top-4 left-4">
                        <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-2xl bg-[#073B2E]/90 backdrop-blur-md text-[#D8F36B] flex items-center justify-center text-base sm:text-lg shadow-md border border-white/20 group-hover:bg-[#B7E532] group-hover:text-[#073B2E] transition-colors">
                            <i class="fa-solid fa-house-chimney"></i>
                        </div>
                    </div>
                </div>

                {{-- Card Body (Clean Typography & SEO Optimized) --}}
                <div class="p-6 sm:p-7 xl:p-8 flex flex-col justify-between flex-grow">
                    <div>
                        <h3 class="text-xl sm:text-2xl lg:text-[26px] font-bold font-heading text-[#073B2E] mb-3 tracking-tight group-hover:text-[#107050] transition-colors">
                            1. Home Moving
                        </h3>
                        <p class="text-[15px] md:text-[16px] lg:text-[17px] text-[#37473E] leading-[1.6] font-normal flex-1">
                            Trusted <span class="font-bold text-[#073B2E]">movers and packers in Dubai</span> delivering complete home relocations across all 7 UAE Emirates. We provide protective furniture wrapping, master carpentry assembly, and seamless move-in coordination for townhouses and residential properties.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-[#E2E8E2]/80 flex items-center justify-between">
                        <a href="{{ route('services.show', 'home-moving') }}" class="inline-flex items-center gap-2 text-xs sm:text-[13px] font-extrabold text-[#073B2E] hover:text-[#107050] group-hover:translate-x-0.5 transition-all">
                            <span>Explore Service</span>
                            <i class="fa-solid fa-arrow-right text-[11px] transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#EBF5E7] text-[#073B2E] text-[10.5px] font-bold uppercase tracking-wider border border-[#CFE8C7]">Dubai &amp; UAE</span>
                    </div>
                </div>
            </div>

            {{-- Service 2: Apartment Moving --}}
            <div class="relative rounded-3xl bg-white border border-[#DFE7E1] hover:border-[#107050]/40 transition-all duration-300 card-hover flex flex-col justify-between overflow-hidden group shadow-[0_4px_24px_rgba(7,59,46,0.05)] hover:shadow-[0_22px_50px_-10px_rgba(7,59,46,0.15),0_0_22px_rgba(216,243,107,0.22)] h-full">
                {{-- Top Shining Laser Line on Hover --}}
                <div class="absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent shadow-[0_0_12px_#D8F36B] z-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                {{-- Top Image with Subtle Zoom --}}
                <div class="relative w-full aspect-[16/10] overflow-hidden bg-gray-100 shrink-0">
                    <img src="{{ asset('images/services/movexa-service-apartment-moving.webp') }}" 
                         alt="Apartment Moving and Tower Relocations in Dubai - MOVEXA" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out"
                         loading="lazy"
                         decoding="async">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/55 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity"></div>
                    
                    {{-- Floating Category Icon Badge --}}
                    <div class="absolute top-4 left-4">
                        <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-2xl bg-[#073B2E]/90 backdrop-blur-md text-[#D8F36B] flex items-center justify-center text-base sm:text-lg shadow-md border border-white/20 group-hover:bg-[#B7E532] group-hover:text-[#073B2E] transition-colors">
                            <i class="fa-solid fa-building"></i>
                        </div>
                    </div>
                </div>

                {{-- Card Body (Clean Typography & SEO Optimized) --}}
                <div class="p-6 sm:p-7 xl:p-8 flex flex-col justify-between flex-grow">
                    <div>
                        <h3 class="text-xl sm:text-2xl lg:text-[26px] font-bold font-heading text-[#073B2E] mb-3 tracking-tight group-hover:text-[#107050] transition-colors">
                            2. Apartment Moving
                        </h3>
                        <p class="text-[15px] md:text-[16px] lg:text-[17px] text-[#37473E] leading-[1.6] font-normal flex-1">
                            Specialized <span class="font-bold text-[#073B2E]">high-rise apartment moving in Dubai</span> across Dubai Marina, Downtown, and Business Bay. Our certified crews manage building <span class="font-semibold text-[#073B2E]">NOC permits</span>, service elevator slots, and dispatch low-clearance basement parking trucks.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-[#E2E8E2]/80 flex items-center justify-between">
                        <a href="{{ route('services.show', 'apartment-moving') }}" class="inline-flex items-center gap-2 text-xs sm:text-[13px] font-extrabold text-[#073B2E] hover:text-[#107050] group-hover:translate-x-0.5 transition-all">
                            <span>Explore Service</span>
                            <i class="fa-solid fa-arrow-right text-[11px] transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#EBF5E7] text-[#073B2E] text-[10.5px] font-bold uppercase tracking-wider border border-[#CFE8C7]">High-Rise</span>
                    </div>
                </div>
            </div>

            {{-- Service 3: Villa Relocation --}}
            <div class="relative rounded-3xl bg-white border border-[#DFE7E1] hover:border-[#107050]/40 transition-all duration-300 card-hover flex flex-col justify-between overflow-hidden group shadow-[0_4px_24px_rgba(7,59,46,0.05)] hover:shadow-[0_22px_50px_-10px_rgba(7,59,46,0.15),0_0_22px_rgba(216,243,107,0.22)] h-full">
                {{-- Top Shining Laser Line on Hover --}}
                <div class="absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent shadow-[0_0_12px_#D8F36B] z-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                {{-- Top Image with Subtle Zoom --}}
                <div class="relative w-full aspect-[16/10] overflow-hidden bg-gray-100 shrink-0">
                    <img src="{{ asset('images/services/movexa-service-villa-relocation.webp') }}" 
                         alt="Luxury Villa Moving and Estate Shifting in Dubai - MOVEXA" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out"
                         loading="lazy"
                         decoding="async">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/55 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity"></div>
                    
                    {{-- Floating Category Icon Badge --}}
                    <div class="absolute top-4 left-4">
                        <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-2xl bg-[#073B2E]/90 backdrop-blur-md text-[#D8F36B] flex items-center justify-center text-base sm:text-lg shadow-md border border-white/20 group-hover:bg-[#B7E532] group-hover:text-[#073B2E] transition-colors">
                            <i class="fa-solid fa-landmark-dome"></i>
                        </div>
                    </div>
                </div>

                {{-- Card Body (Clean Typography & SEO Optimized) --}}
                <div class="p-6 sm:p-7 xl:p-8 flex flex-col justify-between flex-grow">
                    <div>
                        <h3 class="text-xl sm:text-2xl lg:text-[26px] font-bold font-heading text-[#073B2E] mb-3 tracking-tight group-hover:text-[#107050] transition-colors">
                            3. Villa Relocation
                        </h3>
                        <p class="text-[15px] md:text-[16px] lg:text-[17px] text-[#37473E] leading-[1.6] font-normal flex-1">
                            Turnkey <span class="font-bold text-[#073B2E]">luxury villa movers in Dubai</span> serving Palm Jumeirah, Arabian Ranches, and Dubai Hills. Featuring dedicated move supervisors, custom timber crating for chandeliers and fine art, and large GPS-monitored fleet allocations.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-[#E2E8E2]/80 flex items-center justify-between">
                        <a href="{{ route('services.show', 'villa-moving') }}" class="inline-flex items-center gap-2 text-xs sm:text-[13px] font-extrabold text-[#073B2E] hover:text-[#107050] group-hover:translate-x-0.5 transition-all">
                            <span>Explore Service</span>
                            <i class="fa-solid fa-arrow-right text-[11px] transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#EBF5E7] text-[#073B2E] text-[10.5px] font-bold uppercase tracking-wider border border-[#CFE8C7]">Luxury Estates</span>
                    </div>
                </div>
            </div>

            {{-- Service 4: Office Relocation --}}
            <div class="relative rounded-3xl bg-white border border-[#DFE7E1] hover:border-[#107050]/40 transition-all duration-300 card-hover flex flex-col justify-between overflow-hidden group shadow-[0_4px_24px_rgba(7,59,46,0.05)] hover:shadow-[0_22px_50px_-10px_rgba(7,59,46,0.15),0_0_22px_rgba(216,243,107,0.22)] h-full">
                {{-- Top Shining Laser Line on Hover --}}
                <div class="absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent shadow-[0_0_12px_#D8F36B] z-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                {{-- Top Image with Subtle Zoom --}}
                <div class="relative w-full aspect-[16/10] overflow-hidden bg-gray-100 shrink-0">
                    <img src="{{ asset('images/services/movexa-service-office-relocation.webp') }}" 
                         alt="Corporate Office Relocation and Commercial Movers in Dubai - MOVEXA" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out"
                         loading="lazy"
                         decoding="async">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/55 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity"></div>
                    
                    {{-- Floating Category Icon Badge --}}
                    <div class="absolute top-4 left-4">
                        <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-2xl bg-[#073B2E]/90 backdrop-blur-md text-[#D8F36B] flex items-center justify-center text-base sm:text-lg shadow-md border border-white/20 group-hover:bg-[#B7E532] group-hover:text-[#073B2E] transition-colors">
                            <i class="fa-solid fa-briefcase"></i>
                        </div>
                    </div>
                </div>

                {{-- Card Body (Clean Typography & SEO Optimized) --}}
                <div class="p-6 sm:p-7 xl:p-8 flex flex-col justify-between flex-grow">
                    <div>
                        <h3 class="text-xl sm:text-2xl lg:text-[26px] font-bold font-heading text-[#073B2E] mb-3 tracking-tight group-hover:text-[#107050] transition-colors">
                            4. Office Relocation
                        </h3>
                        <p class="text-[15px] md:text-[16px] lg:text-[17px] text-[#37473E] leading-[1.6] font-normal flex-1">
                            Structured <span class="font-bold text-[#073B2E]">corporate office relocation in Dubai</span> scheduled after-hours and weekends to guarantee zero business downtime. We handle anti-static IT server packing, workstation dismantling, and secure confidential document transit.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-[#E2E8E2]/80 flex items-center justify-between">
                        <a href="{{ route('services.show', 'office-relocation') }}" class="inline-flex items-center gap-2 text-xs sm:text-[13px] font-extrabold text-[#073B2E] hover:text-[#107050] group-hover:translate-x-0.5 transition-all">
                            <span>Explore Service</span>
                            <i class="fa-solid fa-arrow-right text-[11px] transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#EBF5E7] text-[#073B2E] text-[10.5px] font-bold uppercase tracking-wider border border-[#CFE8C7]">Zero Downtime</span>
                    </div>
                </div>
            </div>

            {{-- Service 5: International Moving --}}
            <div class="relative rounded-3xl bg-white border border-[#DFE7E1] hover:border-[#107050]/40 transition-all duration-300 card-hover flex flex-col justify-between overflow-hidden group shadow-[0_4px_24px_rgba(7,59,46,0.05)] hover:shadow-[0_22px_50px_-10px_rgba(7,59,46,0.15),0_0_22px_rgba(216,243,107,0.22)] h-full">
                {{-- Top Shining Laser Line on Hover --}}
                <div class="absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent shadow-[0_0_12px_#D8F36B] z-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                {{-- Top Image with Subtle Zoom --}}
                <div class="relative w-full aspect-[16/10] overflow-hidden bg-gray-100 shrink-0">
                    <img src="{{ asset('images/services/movexa-service-international-moving.webp') }}" 
                         alt="International Relocation and Overseas Shipping from Dubai - MOVEXA" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out"
                         loading="lazy"
                         decoding="async">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/55 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity"></div>
                    
                    {{-- Floating Category Icon Badge --}}
                    <div class="absolute top-4 left-4">
                        <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-2xl bg-[#073B2E]/90 backdrop-blur-md text-[#D8F36B] flex items-center justify-center text-base sm:text-lg shadow-md border border-white/20 group-hover:bg-[#B7E532] group-hover:text-[#073B2E] transition-colors">
                            <i class="fa-solid fa-earth-americas"></i>
                        </div>
                    </div>
                </div>

                {{-- Card Body (Clean Typography & SEO Optimized) --}}
                <div class="p-6 sm:p-7 xl:p-8 flex flex-col justify-between flex-grow">
                    <div>
                        <h3 class="text-xl sm:text-2xl lg:text-[26px] font-bold font-heading text-[#073B2E] mb-3 tracking-tight group-hover:text-[#107050] transition-colors">
                            5. International Moving
                        </h3>
                        <p class="text-[15px] md:text-[16px] lg:text-[17px] text-[#37473E] leading-[1.6] font-normal flex-1">
                            Door-to-door <span class="font-bold text-[#073B2E]">international moving from Dubai</span> to the UK, Europe, USA, Canada, and the GCC. Full export-grade seaworthy packing, bilingual customs clearance, and dedicated container (FCL/LCL) ocean and air freight.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-[#E2E8E2]/80 flex items-center justify-between">
                        <a href="{{ route('services.show', 'international-moving') }}" class="inline-flex items-center gap-2 text-xs sm:text-[13px] font-extrabold text-[#073B2E] hover:text-[#107050] group-hover:translate-x-0.5 transition-all">
                            <span>Explore Service</span>
                            <i class="fa-solid fa-arrow-right text-[11px] transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#EBF5E7] text-[#073B2E] text-[10.5px] font-bold uppercase tracking-wider border border-[#CFE8C7]">Worldwide</span>
                    </div>
                </div>
            </div>

            {{-- Service 6: Storage Solutions --}}
            <div class="relative rounded-3xl bg-white border border-[#DFE7E1] hover:border-[#107050]/40 transition-all duration-300 card-hover flex flex-col justify-between overflow-hidden group shadow-[0_4px_24px_rgba(7,59,46,0.05)] hover:shadow-[0_22px_50px_-10px_rgba(7,59,46,0.15),0_0_22px_rgba(216,243,107,0.22)] h-full">
                {{-- Top Shining Laser Line on Hover --}}
                <div class="absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent shadow-[0_0_12px_#D8F36B] z-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                {{-- Top Image with Subtle Zoom --}}
                <div class="relative w-full aspect-[16/10] overflow-hidden bg-gray-100 shrink-0">
                    <img src="{{ asset('images/services/movexa-service-storage-solutions.webp') }}" 
                         alt="Climate Controlled Storage and Warehousing in Dubai - MOVEXA" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out"
                         loading="lazy"
                         decoding="async">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/55 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity"></div>
                    
                    {{-- Floating Category Icon Badge --}}
                    <div class="absolute top-4 left-4">
                        <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-2xl bg-[#073B2E]/90 backdrop-blur-md text-[#D8F36B] flex items-center justify-center text-base sm:text-lg shadow-md border border-white/20 group-hover:bg-[#B7E532] group-hover:text-[#073B2E] transition-colors">
                            <i class="fa-solid fa-warehouse"></i>
                        </div>
                    </div>
                </div>

                {{-- Card Body (Clean Typography & SEO Optimized) --}}
                <div class="p-6 sm:p-7 xl:p-8 flex flex-col justify-between flex-grow">
                    <div>
                        <h3 class="text-xl sm:text-2xl lg:text-[26px] font-bold font-heading text-[#073B2E] mb-3 tracking-tight group-hover:text-[#107050] transition-colors">
                            6. Storage Solutions
                        </h3>
                        <p class="text-[15px] md:text-[16px] lg:text-[17px] text-[#37473E] leading-[1.6] font-normal flex-1">
                            Secure, <span class="font-bold text-[#073B2E]">climate-controlled storage in Dubai</span> for furniture and commercial inventory. Monitored with 24/7 CCTV surveillance, dust-free protective vaults, flexible monthly contracts, and scheduled door-to-door pickup.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-[#E2E8E2]/80 flex items-center justify-between">
                        <a href="{{ route('services.show', 'storage-solutions') }}" class="inline-flex items-center gap-2 text-xs sm:text-[13px] font-extrabold text-[#073B2E] hover:text-[#107050] group-hover:translate-x-0.5 transition-all">
                            <span>Explore Service</span>
                            <i class="fa-solid fa-arrow-right text-[11px] transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#EBF5E7] text-[#073B2E] text-[10.5px] font-bold uppercase tracking-wider border border-[#CFE8C7]">Climate Controlled</span>
                    </div>
                </div>
            </div>

        </div>

        {{-- Mobile Single-Image Horizontal Carousel (3 Image Cards Slider with Smooth Swipe & Progress Dots) --}}
        <div class="block md:hidden relative"
             x-data="{
                 current: 0,
                 total: 3,
                 startX: 0,
                 startY: 0,
                 currentX: 0,
                 currentY: 0,
                 isSwiping: false,
                 next() {
                     this.current = (this.current + 1) % this.total;
                 },
                 prev() {
                     this.current = (this.current - 1 + this.total) % this.total;
                 },
                 goTo(idx) {
                     this.current = idx;
                 },
                 touchStart(e) {
                     this.startX = e.touches[0].clientX;
                     this.startY = e.touches[0].clientY;
                     this.currentX = this.startX;
                     this.currentY = this.startY;
                     this.isSwiping = true;
                 },
                 touchMove(e) {
                     if (!this.isSwiping) return;
                     this.currentX = e.touches[0].clientX;
                     this.currentY = e.touches[0].clientY;
                 },
                 touchEnd() {
                     if (!this.isSwiping) return;
                     const diffX = this.startX - this.currentX;
                     const diffY = this.startY - this.currentY;
                     const threshold = 35;
                     if (Math.abs(diffX) > Math.abs(diffY) && Math.abs(diffX) > threshold) {
                         if (diffX > 0) {
                             this.next();
                         } else {
                             this.prev();
                         }
                     }
                     this.isSwiping = false;
                 }
             }">

            {{-- Slider Clipping Track Window (Shows 1 card at a time occupying available mobile width) --}}
            <div class="overflow-hidden py-3 -my-3"
                 @touchstart.passive="touchStart($event)"
                 @touchmove.passive="touchMove($event)"
                 @touchend="touchEnd()">
                
                {{-- Track that slides 100% per active card --}}
                <div class="flex transition-transform duration-500 ease-out"
                     :style="'transform: translateX(-' + (current * 100) + '%)'">
                    
                    {{-- Slide 1: Home Moving --}}
                    <div class="w-full shrink-0 px-1">
                        <div class="relative rounded-3xl bg-white border border-[#DFE7E1] flex flex-col justify-between overflow-hidden shadow-[0_4px_24px_rgba(7,59,46,0.06)] h-full">
                            {{-- Top Laser Accent --}}
                            <div class="absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent shadow-[0_0_12px_#D8F36B] z-20 pointer-events-none"></div>
                            {{-- Image with 16/10 aspect ratio --}}
                            <div class="relative w-full aspect-[16/10] overflow-hidden bg-gray-100 shrink-0">
                                <img src="{{ asset('images/services/movexa-service-home-moving.webp') }}" 
                                     alt="Home Moving and Relocation Services in Dubai - MOVEXA" 
                                     class="w-full h-full object-cover"
                                     loading="lazy"
                                     decoding="async">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/55 via-transparent to-transparent opacity-60"></div>
                                <div class="absolute top-4 left-4">
                                    <div class="w-10 h-10 rounded-2xl bg-[#073B2E]/90 backdrop-blur-md text-[#D8F36B] flex items-center justify-center text-base shadow-md border border-white/20">
                                        <i class="fa-solid fa-house-chimney"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col justify-between flex-grow">
                                <div>
                                    <h3 class="text-xl font-bold font-heading text-[#073B2E] mb-2.5 tracking-tight">
                                        1. Home Moving
                                    </h3>
                                    <p class="text-[15px] text-[#37473E] leading-[1.6] font-normal">
                                        Trusted <span class="font-bold text-[#073B2E]">movers and packers in Dubai</span> delivering complete home relocations across all 7 UAE Emirates. We provide protective furniture wrapping, master carpentry assembly, and seamless move-in coordination for townhouses and residential properties.
                                    </p>
                                </div>
                                <div class="mt-6 pt-4 border-t border-[#E2E8E2]/80 flex items-center justify-between">
                                    <a href="{{ route('services.show', 'home-moving') }}" class="inline-flex items-center gap-2 text-xs font-extrabold text-[#073B2E] hover:text-[#107050]">
                                        <span>Explore Service</span>
                                        <i class="fa-solid fa-arrow-right text-[11px]"></i>
                                    </a>
                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#EBF5E7] text-[#073B2E] text-[10.5px] font-bold uppercase tracking-wider border border-[#CFE8C7]">Dubai &amp; UAE</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Slide 2: Apartment Moving --}}
                    <div class="w-full shrink-0 px-1">
                        <div class="relative rounded-3xl bg-white border border-[#DFE7E1] flex flex-col justify-between overflow-hidden shadow-[0_4px_24px_rgba(7,59,46,0.06)] h-full">
                            {{-- Top Laser Accent --}}
                            <div class="absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent shadow-[0_0_12px_#D8F36B] z-20 pointer-events-none"></div>
                            {{-- Image with 16/10 aspect ratio --}}
                            <div class="relative w-full aspect-[16/10] overflow-hidden bg-gray-100 shrink-0">
                                <img src="{{ asset('images/services/movexa-service-apartment-moving.webp') }}" 
                                     alt="Apartment Moving and Tower Relocations in Dubai - MOVEXA" 
                                     class="w-full h-full object-cover"
                                     loading="lazy"
                                     decoding="async">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/55 via-transparent to-transparent opacity-60"></div>
                                <div class="absolute top-4 left-4">
                                    <div class="w-10 h-10 rounded-2xl bg-[#073B2E]/90 backdrop-blur-md text-[#D8F36B] flex items-center justify-center text-base shadow-md border border-white/20">
                                        <i class="fa-solid fa-building"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col justify-between flex-grow">
                                <div>
                                    <h3 class="text-xl font-bold font-heading text-[#073B2E] mb-2.5 tracking-tight">
                                        2. Apartment Moving
                                    </h3>
                                    <p class="text-[15px] text-[#37473E] leading-[1.6] font-normal">
                                        Specialized <span class="font-bold text-[#073B2E]">high-rise apartment moving in Dubai</span> across Dubai Marina, Downtown, and Business Bay. Our certified crews manage building <span class="font-semibold text-[#073B2E]">NOC permits</span>, service elevator slots, and dispatch low-clearance basement parking trucks.
                                    </p>
                                </div>
                                <div class="mt-6 pt-4 border-t border-[#E2E8E2]/80 flex items-center justify-between">
                                    <a href="{{ route('services.show', 'apartment-moving') }}" class="inline-flex items-center gap-2 text-xs font-extrabold text-[#073B2E] hover:text-[#107050]">
                                        <span>Explore Service</span>
                                        <i class="fa-solid fa-arrow-right text-[11px]"></i>
                                    </a>
                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#EBF5E7] text-[#073B2E] text-[10.5px] font-bold uppercase tracking-wider border border-[#CFE8C7]">High-Rise</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Slide 3: Villa Relocation --}}
                    <div class="w-full shrink-0 px-1">
                        <div class="relative rounded-3xl bg-white border border-[#DFE7E1] flex flex-col justify-between overflow-hidden shadow-[0_4px_24px_rgba(7,59,46,0.06)] h-full">
                            {{-- Top Laser Accent --}}
                            <div class="absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent shadow-[0_0_12px_#D8F36B] z-20 pointer-events-none"></div>
                            {{-- Image with 16/10 aspect ratio --}}
                            <div class="relative w-full aspect-[16/10] overflow-hidden bg-gray-100 shrink-0">
                                <img src="{{ asset('images/services/movexa-service-villa-relocation.webp') }}" 
                                     alt="Luxury Villa Moving and Estate Shifting in Dubai - MOVEXA" 
                                     class="w-full h-full object-cover"
                                     loading="lazy"
                                     decoding="async">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/55 via-transparent to-transparent opacity-60"></div>
                                <div class="absolute top-4 left-4">
                                    <div class="w-10 h-10 rounded-2xl bg-[#073B2E]/90 backdrop-blur-md text-[#D8F36B] flex items-center justify-center text-base shadow-md border border-white/20">
                                        <i class="fa-solid fa-landmark-dome"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col justify-between flex-grow">
                                <div>
                                    <h3 class="text-xl font-bold font-heading text-[#073B2E] mb-2.5 tracking-tight">
                                        3. Villa Relocation
                                    </h3>
                                    <p class="text-[15px] text-[#37473E] leading-[1.6] font-normal">
                                        Turnkey <span class="font-bold text-[#073B2E]">luxury villa movers in Dubai</span> serving Palm Jumeirah, Arabian Ranches, and Dubai Hills. Featuring dedicated move supervisors, custom timber crating for chandeliers and fine art, and large GPS-monitored fleet allocations.
                                    </p>
                                </div>
                                <div class="mt-6 pt-4 border-t border-[#E2E8E2]/80 flex items-center justify-between">
                                    <a href="{{ route('services.show', 'villa-moving') }}" class="inline-flex items-center gap-2 text-xs font-extrabold text-[#073B2E] hover:text-[#107050]">
                                        <span>Explore Service</span>
                                        <i class="fa-solid fa-arrow-right text-[11px]"></i>
                                    </a>
                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-[#EBF5E7] text-[#073B2E] text-[10.5px] font-bold uppercase tracking-wider border border-[#CFE8C7]">Luxury Estates</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Slim Slider Progress Bar & Interactive Navigation Dots --}}
            <div class="mt-5 flex flex-col items-center gap-2.5">
                {{-- Slim Progress Bar --}}
                <div class="w-32 h-1 bg-[#E2E8E2] rounded-full overflow-hidden relative" role="progressbar" :aria-valuenow="current + 1" aria-valuemin="1" aria-valuemax="3" aria-label="Services carousel progress">
                    <div class="h-full bg-[#073B2E] rounded-full transition-all duration-300 ease-out"
                         :style="'width: ' + (((current + 1) / total) * 100) + '%'"></div>
                </div>

                {{-- Interactive Navigation Dots with Prev/Next Controls --}}
                <div class="flex items-center justify-center gap-2">
                    <button type="button" 
                            @click="prev()" 
                            class="w-7 h-7 rounded-full bg-white border border-[#D8E2D9] text-[#073B2E] flex items-center justify-center text-xs shadow-2xs hover:bg-[#073B2E] hover:text-[#B7E532] transition-colors focus:outline-none"
                            aria-label="Previous image card">
                        <i class="fa-solid fa-chevron-left text-[10px]"></i>
                    </button>

                    <div class="flex items-center gap-1.5 px-2">
                        <template x-for="idx in [0, 1, 2]" :key="idx">
                            <button type="button"
                                    @click="goTo(idx)"
                                    class="h-2 rounded-full transition-all duration-300 focus:outline-none"
                                    :class="current === idx ? 'w-7 bg-[#073B2E]' : 'w-2 bg-[#CBD5E1] hover:bg-[#073B2E]/40'"
                                    :aria-label="'Go to image card ' + (idx + 1)">
                            </button>
                        </template>
                    </div>

                    <button type="button" 
                            @click="next()" 
                            class="w-7 h-7 rounded-full bg-white border border-[#D8E2D9] text-[#073B2E] flex items-center justify-center text-xs shadow-2xs hover:bg-[#073B2E] hover:text-[#B7E532] transition-colors focus:outline-none"
                            aria-label="Next image card">
                        <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    </button>
                </div>

                <div class="text-[11px] font-bold text-[#4E5B54] uppercase tracking-wider">
                    <span>Card <span x-text="current + 1"></span> of 3</span>
                    <span class="text-[#8B9D93] mx-1.5">&bull;</span>
                    <span class="normal-case font-medium text-[#6B7D73]">Swipe to explore</span>
                </div>
            </div>

        </div>

        {{-- Bottom Explore All Services CTA --}}
        <div class="mt-12 sm:mt-14 text-center flex flex-wrap items-center justify-center gap-4">
            <a href="{{ route('services.index') }}" class="inline-flex items-center justify-center gap-2.5 px-8 py-3.5 rounded-full border-2 border-[#073B2E] text-[#073B2E] hover:bg-[#073B2E] hover:text-[#B7E532] font-bold text-xs sm:text-sm tracking-wide transition-all duration-200 shadow-2xs hover:shadow-md hover:scale-[1.02]">
                <span>Explore All Moving &amp; Relocation Services</span>
                <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>

            <button type="button" 
                    onclick="openQuoteModal('', 'General Inquiry')" 
                    class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-full bg-[#B7E532] text-[#073B2E] hover:bg-[#073B2E] hover:text-[#B7E532] font-bold text-xs sm:text-sm tracking-wide transition-all duration-200 shadow-sm hover:shadow-md hover:scale-[1.02]">
                <i class="fa-solid fa-calculator text-xs"></i>
                <span>Get Free Moving Quote</span>
            </button>
        </div>

    </div>
</section>

{{-- ==========================================
     SECTION 5: LOCAL MOVING IN DUBAI & UAE STATES (AUTO-SLIDING 7 EMIRATES GALLERY WITH CARDS POSITIONED BELOW)
     ========================================== --}}
@php
$localDubaiSlides = [
    [
        'image' => asset('images/gallery/movexa-gallery-apartment-packing-crew.webp'),
        'title' => 'Movers In Dubai',
        'subtitle' => 'Apartment, Villa & Commercial Relocations',
        'trust' => 'Downtown • Dubai Marina • Arabian Ranches • Palm',
        'icon' => 'fa-building',
        'position' => 'center 20%',
    ],
    [
        'image' => asset('images/gallery/movexa-gallery-branded-truck-in-transit.webp'),
        'title' => 'Movers In Abu Dhabi',
        'subtitle' => 'Express Inter-Emirate Residential Moving',
        'trust' => 'Yas Island • Saadiyat • Al Reem • Khalifa City',
        'icon' => 'fa-truck-fast',
        'position' => 'center',
    ],
    [
        'image' => asset('images/gallery/movexa-gallery-villa-relocation-loading.webp'),
        'title' => 'Movers In Sharjah',
        'subtitle' => 'Inter-City & Villa Relocations',
        'trust' => 'Al Majaz • Al Nahda • Daily Scheduled Moving',
        'icon' => 'fa-house-chimney',
        'position' => 'center 35%',
    ],
    [
        'image' => asset('images/gallery/movexa-gallery-sofa-living-room-wrapping.webp'),
        'title' => 'Movers In Ajman',
        'subtitle' => 'Cost-Effective Family & Household Shifting',
        'trust' => 'Corniche • Al Nuaimiya • Full Furniture Setup',
        'icon' => 'fa-couch',
        'position' => 'center',
    ],
    [
        'image' => asset('images/gallery/movexa-gallery-truck-house-fleet.webp'),
        'title' => 'Movers In Ras Al Khaimah',
        'subtitle' => 'Coastal Villa & Community Relocations',
        'trust' => 'Al Hamra Village • Mina Al Arab • Safe Transit',
        'icon' => 'fa-location-dot',
        'position' => 'center 20%',
    ],
    [
        'image' => asset('images/gallery/movexa-gallery-mattress-protective-wrap.webp'),
        'title' => 'Movers In Fujairah',
        'subtitle' => 'East-Coast Mountain Transit & Relocation',
        'trust' => 'Heavy-Duty Box Trucks • Certified Moving Crew',
        'icon' => 'fa-boxes-packing',
        'position' => 'center 30%',
    ],
    [
        'image' => asset('images/gallery/movexa-gallery-organized-room-packing.webp'),
        'title' => 'Movers In Umm Al Quwain',
        'subtitle' => 'Dedicated Residential Shifting & Setup',
        'trust' => 'Peaceful Communities • Door-to-Door Delivery',
        'icon' => 'fa-dolly',
        'position' => 'center',
    ],
];
@endphp

<section class="py-8 sm:py-10 lg:py-12 max-w-7xl 2xl:max-w-[1520px] mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-gradient-to-br from-white via-[#FAFBF9] to-[#F3F7F4] text-[#202824] rounded-3xl p-5 sm:p-7 lg:p-8 xl:p-9 overflow-hidden shadow-[0_15px_40px_rgba(7,59,46,0.06)] border border-[#DFE7E1] relative">
        {{-- Subtle Ambient Glow Accents --}}
        <div class="absolute -top-28 -right-28 w-80 h-80 rounded-full bg-[#B7E532]/10 filter blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-28 -left-28 w-80 h-80 rounded-full bg-[#073B2E]/5 filter blur-3xl pointer-events-none"></div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 xl:gap-10 items-center relative z-10">
            
            {{-- Left Side: Compact Professional Content --}}
            <div class="lg:col-span-6 space-y-4 sm:space-y-4.5">
                {{-- Category Pill --}}
                <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#EBF5E7] border border-[#CFE8C7] text-[#073B2E] text-[11px] font-extrabold uppercase tracking-wider shadow-2xs">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#107050] shadow-[0_0_5px_#107050]"></span>
                    <i class="fa-solid fa-location-dot text-[#073B2E] text-[10px]"></i>
                    <span>All 7 UAE Emirates Coverage</span>
                </div>

                {{-- Section Heading with Shining Accent --}}
                <h2 class="text-2xl sm:text-3xl lg:text-[32px] xl:text-[36px] font-black font-heading text-[#073B2E] tracking-tight leading-tight">
                    Moving Across Dubai & UAE? <br>
                    <span class="text-shine-forest">We've Got You Covered.</span>
                </h2>

                {{-- Professional Narrative (Solid Black, Increased Single Paragraph & High Readability) --}}
                <div class="pt-0.5">
                    <p class="text-sm sm:text-[15px] lg:text-[15.5px] text-black font-normal leading-[1.75] tracking-normal">
                        Whether relocating into a high-rise residence in <span class="text-black font-bold">Dubai Marina and Downtown</span> or shifting an expansive family villa across <span class="text-black font-bold">Palm Jumeirah, Arabian Ranches, Abu Dhabi, Sharjah, or the Northern Emirates</span>, MOVEXA orchestrates your entire move with uncompromising care. Our certified moving crews manage all operational details from start to finish—including obtaining official <span class="text-black font-bold">Move-In and Move-Out NOC permits</span> across master developers (<span class="text-black font-semibold">Emaar, Nakheel, and DAMAC</span>), reserving building service elevator slots, and dispatching specialized low-clearance <span class="text-black font-bold">GPS-tracked box trucks</span> designed for underground basement access. With experienced move supervisors and master carpenters providing white-glove furniture disassembly, multi-layer protective packaging, and meticulous room-by-room setup, your furnishings arrive safely on schedule with zero stress.
                    </p>
                </div>

                {{-- Compact Communities tags --}}
                <div class="pt-1.5">
                    <div class="flex items-center gap-1.5 mb-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#073B2E]"></span>
                        <p class="text-[11px] font-extrabold uppercase tracking-wider text-[#073B2E]">Serving All 7 UAE States & Key Communities:</p>
                    </div>
                    <div class="flex flex-wrap gap-1.5 text-xs">
                        @foreach (['Dubai', 'Abu Dhabi', 'Sharjah', 'Ajman', 'Ras Al Khaimah', 'Fujairah', 'Umm Al Quwain', 'Dubai Marina', 'Downtown Dubai', 'Palm Jumeirah', 'Arabian Ranches', 'Dubai Hills'] as $area)
                        <span class="px-2.5 py-1 rounded-full bg-white hover:bg-[#073B2E] hover:text-[#B7E532] transition-all duration-200 text-[#073B2E] font-bold text-[10.5px] border border-[#CFE2D4] shadow-[0_1px_4px_rgba(7,59,46,0.04)] hover:shadow-xs hover:scale-105 cursor-default">
                            {{ $area }}
                        </span>
                        @endforeach
                    </div>
                </div>

                {{-- Compact CTA Buttons --}}
                <div class="pt-2 sm:pt-2.5 flex flex-wrap items-center gap-3">
                    <a href="{{ route('local-moving') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-[#B7E532] text-[#073B2E] hover:bg-[#073B2E] hover:text-[#B7E532] font-bold text-xs shadow-sm hover:shadow-md transition-all duration-200 transform hover:-translate-y-0.5">
                        <span>Explore UAE Local Moving</span>
                        <i class="fa-solid fa-arrow-right text-[11px]"></i>
                    </a>

                    <button type="button" 
                            onclick="openQuoteModal('', 'UAE Relocations')" 
                            class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full border-2 border-[#073B2E] bg-white hover:bg-[#073B2E] hover:text-white text-[#073B2E] font-bold text-xs shadow-2xs transition-all duration-200">
                        <i class="fa-solid fa-calculator text-[11px]"></i>
                        <span>Get Free Moving Quote</span>
                    </button>
                </div>
            </div>

            {{-- Right Side: Auto-Sliding 7 UAE States Gallery with Compact Balanced Height --}}
            <div class="lg:col-span-6">
                <div x-data="{
                         localSlide: 0,
                         slides: {{ Js::from($localDubaiSlides) }},
                         totalSlides: {{ count($localDubaiSlides) }},
                         timer: null,
                         next() { this.localSlide = (this.localSlide + 1) % this.totalSlides; },
                         prev() { this.localSlide = (this.localSlide - 1 + this.totalSlides) % this.totalSlides; },
                         goTo(idx) { this.localSlide = idx; this.resetTimer(); },
                         startTimer() { this.timer = setInterval(() => this.next(), 4000); },
                         stopTimer() { if (this.timer) clearInterval(this.timer); },
                         resetTimer() { this.stopTimer(); this.startTimer(); }
                     }"
                     x-init="startTimer()"
                     @mouseenter="stopTimer()"
                     @mouseleave="startTimer()"
                     class="relative pb-7 sm:pb-8 select-none">
                    
                    {{-- Compact Balanced Image Frame (Reduced Height, Preserving Natural Aspect Ratio) --}}
                    <div class="relative rounded-2xl sm:rounded-3xl overflow-hidden shadow-xl border border-[#DFE7E1] h-[360px] sm:h-[400px] md:h-[430px] lg:h-[450px] xl:h-[470px] group/slider bg-[#E9EFEA]">
                        @foreach ($localDubaiSlides as $idx => $s)
                        <div class="absolute inset-0 transition-opacity duration-700 ease-in-out"
                             :class="localSlide === {{ $idx }} ? 'opacity-100 z-10' : 'opacity-0 z-0 pointer-events-none'"
                             {{ $idx !== 0 ? 'x-cloak' : '' }}>
                            <img src="{{ $s['image'] }}" 
                                 alt="{{ $s['title'] }}" 
                                 loading="lazy"
                                 decoding="async"
                                 class="w-full h-full object-cover group-hover/slider:scale-105 transition-transform duration-700"
                                 style="object-position: {{ $s['position'] ?? 'center' }};">
                            {{-- Dark Vignette for Visual Contrast --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        </div>
                        @endforeach

                        {{-- Top Left Indicator Badge: All 7 UAE States --}}
                        <div class="absolute top-3 left-3 z-30 inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-black/60 backdrop-blur-md text-white text-[10.5px] font-bold border border-white/20">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#B7E532] animate-pulse"></span>
                            <span>7 UAE States Active</span>
                        </div>

                        {{-- Floating Progress Indicator Pills (Top Right) --}}
                        <div class="absolute top-3 right-3 z-30 flex items-center gap-1 bg-black/60 backdrop-blur-md px-2.5 py-1 rounded-full border border-white/20">
                            <template x-for="i in totalSlides" :key="i">
                                <button type="button" 
                                        @click.stop="goTo(i - 1)" 
                                        class="h-1 rounded-full transition-all duration-300 focus:outline-none" 
                                        :class="localSlide === (i - 1) ? 'w-3.5 bg-[#B7E532]' : 'w-1 bg-white/50 hover:bg-white'">
                                </button>
                            </template>
                        </div>

                        {{-- Floating Prev / Next Navigation Arrows --}}
                        <button type="button" 
                                @click.stop="prev(); resetTimer();" 
                                class="absolute left-2.5 top-1/2 -translate-y-1/2 z-30 w-8 h-8 rounded-full bg-black/45 hover:bg-[#B7E532] text-white hover:text-[#073B2E] backdrop-blur-md flex items-center justify-center text-xs transition-all opacity-0 group-hover/slider:opacity-100 shadow-md focus:outline-none"
                                aria-label="Previous Slide">
                            <i class="fa-solid fa-chevron-left text-[11px]"></i>
                        </button>

                        <button type="button" 
                                @click.stop="next(); resetTimer();" 
                                class="absolute right-2.5 top-1/2 -translate-y-1/2 z-30 w-8 h-8 rounded-full bg-black/45 hover:bg-[#B7E532] text-white hover:text-[#073B2E] backdrop-blur-md flex items-center justify-center text-xs transition-all opacity-0 group-hover/slider:opacity-100 shadow-md focus:outline-none"
                                aria-label="Next Slide">
                            <i class="fa-solid fa-chevron-right text-[11px]"></i>
                        </button>
                    </div>

                    {{-- Compact Floating Contact Card Neatly Positioned at Bottom-Center (Single Dynamic Card to Prevent Stacking) --}}
                    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 z-30 w-[90%] sm:w-[84%] max-w-[320px] sm:max-w-[350px]">
                        <div class="relative overflow-hidden bg-[#073B2E] text-white rounded-2xl p-3 sm:p-3.5 text-center border-2 border-[#B7E532]/40 shadow-[0_15px_35px_rgba(7,59,46,0.4),0_0_20px_rgba(183,229,50,0.15)] hover:border-[#B7E532] hover:shadow-[0_20px_45px_rgba(7,59,46,0.5),0_0_25px_rgba(183,229,50,0.25)] transition-all duration-300 transform hover:scale-[1.02]">
                            
                            {{-- Subtle Emerald & Lime Glow Reflections --}}
                            <div class="absolute -top-8 left-1/2 -translate-x-1/2 w-40 h-20 bg-[#B7E532]/15 rounded-full blur-xl pointer-events-none"></div>
                            <div class="absolute -bottom-6 right-3 w-32 h-16 bg-[#10b981]/20 rounded-full blur-lg pointer-events-none"></div>
                            <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,rgba(183,229,50,0.1),transparent_70%)] pointer-events-none"></div>

                            {{-- Card Title (Pure White Bold Heading) --}}
                            <h3 class="relative z-10 text-base sm:text-lg font-black font-heading text-white tracking-tight leading-tight mb-0.5 drop-shadow-sm transition-all duration-300"
                                x-text="slides[localSlide].title">
                                {{ $localDubaiSlides[0]['title'] }}
                            </h3>
                            
                            {{-- Subtitle badge / desc --}}
                            <p class="relative z-10 text-[10px] sm:text-[10.5px] text-[#B7E532] font-semibold mb-2 tracking-wide drop-shadow-2xs transition-all duration-300"
                               x-text="slides[localSlide].subtitle">
                                {{ $localDubaiSlides[0]['subtitle'] }}
                            </p>

                            {{-- Direct Call Pill Button (Compact CTA) --}}
                            <a href="tel:0507060165" 
                               class="relative z-10 inline-flex items-center justify-center gap-2 px-5 py-2 rounded-full bg-[#B7E532] text-[#073B2E] hover:bg-white hover:text-[#073B2E] font-black text-xs sm:text-[13px] shadow-sm hover:shadow-md transition-all duration-200 transform hover:scale-[1.02] w-full">
                                <i class="fa-solid fa-phone text-[11px]"></i>
                                <span>050 706 0165</span>
                            </a>
                            
                            {{-- Trust Accent with Subtle Lime Glow --}}
                            <div class="relative z-10 mt-1.5 flex items-center justify-center gap-1.5 text-[9px] sm:text-[9.5px] text-white/90 font-medium">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#B7E532] shadow-[0_0_5px_#B7E532]"></span>
                                <span x-text="slides[localSlide].trust">{{ $localDubaiSlides[0]['trust'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ==========================================
     SECTION 6: WHY CHOOSE US (PREMIER MOVERS & PACKERS IN UAE - TEAM & FLEET SHOWCASE)
     ========================================== --}}
<section class="py-18 sm:py-24 bg-white border-y border-[#E2E8E2] relative overflow-hidden" 
         id="why-choose-us"
         x-data="{
             currentSlide: 0,
             totalSlides: 6,
             timer: null,
             slides: [
                 {
                     image: '{{ asset('images/why-choose-us/movexa-why-choose-us-team-trucks-pose.webp') }}',
                     title: '15+ Full-Time Verified MOVEXA Team & Fleet',
                     subtitle: 'Official In-House Moving Crew & Daily Active Fleet in Dubai',
                     tag: 'Official MOVEXA Crew',
                     icon: 'fa-solid fa-users-gear'
                 },
                 {
                     image: '{{ asset('images/why-choose-us/movexa-why-choose-us-composite-services.webp') }}',
                     title: 'Turnkey Packing, Assembly & Curtain Installation',
                     subtitle: '5-Ply Cartons, Bubble Wrap & Master Carpentry Handymen',
                     tag: 'Turnkey Relocation',
                     icon: 'fa-solid fa-boxes-stacked'
                 },
                 {
                     image: '{{ asset('images/why-choose-us/movexa-why-choose-us-team-skyline.webp') }}',
                     title: 'Moving Across Dubai & All 7 UAE Emirates',
                     subtitle: 'Burj Khalifa Skyline & Daily Inter-City Relocations',
                     tag: 'UAE-Wide Coverage',
                     icon: 'fa-solid fa-map-location-dot'
                 },
                 {
                     image: '{{ asset('images/why-choose-us/movexa-why-choose-us-villa-loading.webp') }}',
                     title: 'White-Glove Villa & Luxury Residence Care',
                     subtitle: 'Careful Loading for Palm Jumeirah, Arabian Ranches & Dubai Hills',
                     tag: 'Luxury Villa Care',
                     icon: 'fa-solid fa-gem'
                 },
                 {
                     image: '{{ asset('images/why-choose-us/movexa-why-choose-us-crew-fleet.webp') }}',
                     title: 'Modern GPS-Tracked Closed Fleet & Tail-Lifts',
                     subtitle: 'Hydraulic Tail-Lifts, Heavy-Duty Ramps & Padded Wrapping',
                     tag: 'Dedicated Fleet',
                     icon: 'fa-solid fa-truck-fast'
                 },
                 {
                     image: '{{ asset('images/why-choose-us/movexa-why-choose-us-packers-movers-banner.webp') }}',
                     title: 'Certified Movers & Packers in the UAE',
                     subtitle: 'Quick, Secure and Stress-Free Residential & Commercial Moves',
                     tag: 'Certified Quality',
                     icon: 'fa-solid fa-award'
                 }
             ],
             init() {
                 this.startTimer();
             },
             next() {
                 this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
             },
             prev() {
                 this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
             },
             goTo(idx) {
                 this.currentSlide = idx;
             },
             startTimer() {
                 this.stopTimer();
                 this.timer = setInterval(() => { this.next(); }, 5000);
             },
             stopTimer() {
                 if (this.timer) clearInterval(this.timer);
             },
             restartTimer() {
                 this.stopTimer();
                 this.startTimer();
             }
         }"
         @mouseenter="stopTimer()"
         @mouseleave="startTimer()">

    {{-- Subtle Ambient Glows & Architectural Laser Line --}}
    <div class="absolute -top-32 right-10 w-[500px] h-[500px] bg-[radial-gradient(ellipse_at_center,rgba(216,243,107,0.10),transparent_70%)] blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute -bottom-32 left-10 w-[500px] h-[500px] bg-[radial-gradient(ellipse_at_center,rgba(7,59,46,0.04),transparent_70%)] blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute top-0 inset-x-0 h-px bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent opacity-70 pointer-events-none"></div>

    <div class="max-w-7xl 2xl:max-w-[1520px] mx-auto px-4 sm:px-6 lg:px-8 xl:px-10 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 xl:gap-16 items-center">

            {{-- Left Column: Brand Header, Authoritative Text & 6-Pillar Feature Matrix --}}
            <div class="lg:col-span-6 space-y-5 sm:space-y-6 text-left">
                
                {{-- Header Area with Modern Pill Badge & Architectural Accent Bar --}}
                <div>
                    <span class="forest-badge mb-3">
                        <i class="fa-solid fa-shield-halved text-[#D8F36B]"></i>
                        <span>The MOVEXA Advantage</span>
                    </span>
                    <h2 class="text-3xl min-[375px]:text-4xl sm:text-[40px] lg:text-[42px] xl:text-[46px] font-black font-heading text-[#073B2E] tracking-tight leading-[1.15]">
                        Why Choose Us
                    </h2>
                    
                    {{-- Clean Architectural Accent Bar --}}
                    <div class="mt-2.5 sm:mt-3 flex items-center gap-2">
                        <div class="w-12 sm:w-14 h-1 rounded-full bg-[#B7E532]"></div>
                        <div class="w-2.5 h-1 rounded-full bg-[#073B2E]"></div>
                    </div>
                </div>

                {{-- Authoritative Introduction Paragraph --}}
                <p class="text-[14.5px] sm:text-[16px] text-[#37473E] leading-[1.65] font-normal">
                    As one of the UAE’s most dependable relocation specialists, MOVEXA never employs untrained temporary laborers. Every relocation is executed by our full-time, vetted moving masters—delivering turnkey care, master carpentry, and punctual service across Dubai, Abu Dhabi, and all 7 Emirates.
                </p>

                {{-- 6-Pillar Feature Grid (Structured Trust Micro-Cards) --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 sm:gap-3 pt-0.5">
                    {{-- Card 1: Transparent Pricing --}}
                    <div class="group/benefit flex items-start gap-3 p-3 sm:p-3.5 rounded-2xl bg-[#F8FAF8] border border-[#E4ECE5] hover:border-[#107050]/40 hover:bg-white hover:shadow-sm transition-all duration-200">
                        <div class="w-8 h-8 rounded-xl bg-[#073B2E] text-[#B7E532] flex items-center justify-center text-xs shrink-0 shadow-2xs group-hover/benefit:scale-105 transition-transform mt-0.5">
                            <i class="fa-solid fa-file-invoice-dollar"></i>
                        </div>
                        <div class="space-y-0.5 min-w-0">
                            <h4 class="text-[13px] sm:text-[13.5px] font-bold text-[#073B2E] leading-snug">Transparent Pricing</h4>
                            <p class="text-[11px] sm:text-[11.5px] text-[#55645A] leading-relaxed">Guaranteed fixed rates with zero hidden move-day surcharges.</p>
                        </div>
                    </div>

                    {{-- Card 2: 100% Vetted Crew --}}
                    <div class="group/benefit flex items-start gap-3 p-3 sm:p-3.5 rounded-2xl bg-[#F8FAF8] border border-[#E4ECE5] hover:border-[#107050]/40 hover:bg-white hover:shadow-sm transition-all duration-200">
                        <div class="w-8 h-8 rounded-xl bg-[#073B2E] text-[#B7E532] flex items-center justify-center text-xs shrink-0 shadow-2xs group-hover/benefit:scale-105 transition-transform mt-0.5">
                            <i class="fa-solid fa-user-shield"></i>
                        </div>
                        <div class="space-y-0.5 min-w-0">
                            <h4 class="text-[13px] sm:text-[13.5px] font-bold text-[#073B2E] leading-snug">100% Vetted Crew</h4>
                            <p class="text-[11px] sm:text-[11.5px] text-[#55645A] leading-relaxed">Full-time, background-verified movers in official uniform.</p>
                        </div>
                    </div>

                    {{-- Card 3: 5-Ply Export Packing --}}
                    <div class="group/benefit flex items-start gap-3 p-3 sm:p-3.5 rounded-2xl bg-[#F8FAF8] border border-[#E4ECE5] hover:border-[#107050]/40 hover:bg-white hover:shadow-sm transition-all duration-200">
                        <div class="w-8 h-8 rounded-xl bg-[#073B2E] text-[#B7E532] flex items-center justify-center text-xs shrink-0 shadow-2xs group-hover/benefit:scale-105 transition-transform mt-0.5">
                            <i class="fa-solid fa-boxes-stacked"></i>
                        </div>
                        <div class="space-y-0.5 min-w-0">
                            <h4 class="text-[13px] sm:text-[13.5px] font-bold text-[#073B2E] leading-snug">5-Ply Protection</h4>
                            <p class="text-[11px] sm:text-[11.5px] text-[#55645A] leading-relaxed">Heavy-duty export bubble wrap, padding &amp; custom crates.</p>
                        </div>
                    </div>

                    {{-- Card 4: GPS Enclosed Fleet --}}
                    <div class="group/benefit flex items-start gap-3 p-3 sm:p-3.5 rounded-2xl bg-[#F8FAF8] border border-[#E4ECE5] hover:border-[#107050]/40 hover:bg-white hover:shadow-sm transition-all duration-200">
                        <div class="w-8 h-8 rounded-xl bg-[#073B2E] text-[#B7E532] flex items-center justify-center text-xs shrink-0 shadow-2xs group-hover/benefit:scale-105 transition-transform mt-0.5">
                            <i class="fa-solid fa-truck-fast"></i>
                        </div>
                        <div class="space-y-0.5 min-w-0">
                            <h4 class="text-[13px] sm:text-[13.5px] font-bold text-[#073B2E] leading-snug">GPS Enclosed Fleet</h4>
                            <p class="text-[11px] sm:text-[11.5px] text-[#55645A] leading-relaxed">Sanitized closed box trucks with hydraulic tail-lifts.</p>
                        </div>
                    </div>

                    {{-- Card 5: Free Virtual Survey --}}
                    <div class="group/benefit flex items-start gap-3 p-3 sm:p-3.5 rounded-2xl bg-[#F8FAF8] border border-[#E4ECE5] hover:border-[#107050]/40 hover:bg-white hover:shadow-sm transition-all duration-200">
                        <div class="w-8 h-8 rounded-xl bg-[#073B2E] text-[#B7E532] flex items-center justify-center text-xs shrink-0 shadow-2xs group-hover/benefit:scale-105 transition-transform mt-0.5">
                            <i class="fa-solid fa-clipboard-check"></i>
                        </div>
                        <div class="space-y-0.5 min-w-0">
                            <h4 class="text-[13px] sm:text-[13.5px] font-bold text-[#073B2E] leading-snug">Free Surveys</h4>
                            <p class="text-[11px] sm:text-[11.5px] text-[#55645A] leading-relaxed">Fast virtual or on-site inventory &amp; binding price quote.</p>
                        </div>
                    </div>

                    {{-- Card 6: Turnkey Handyman --}}
                    <div class="group/benefit flex items-start gap-3 p-3 sm:p-3.5 rounded-2xl bg-[#F8FAF8] border border-[#E4ECE5] hover:border-[#107050]/40 hover:bg-white hover:shadow-sm transition-all duration-200">
                        <div class="w-8 h-8 rounded-xl bg-[#073B2E] text-[#B7E532] flex items-center justify-center text-xs shrink-0 shadow-2xs group-hover/benefit:scale-105 transition-transform mt-0.5">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </div>
                        <div class="space-y-0.5 min-w-0">
                            <h4 class="text-[13px] sm:text-[13.5px] font-bold text-[#073B2E] leading-snug">Turnkey Handyman</h4>
                            <p class="text-[11px] sm:text-[11.5px] text-[#55645A] leading-relaxed">Master carpentry, curtains hanging &amp; TV wall mounting.</p>
                        </div>
                    </div>
                </div>

                {{-- Certified UAE Operations Assurance Bar --}}
                <div class="flex items-center gap-2.5 px-3.5 py-2.5 rounded-xl bg-[#EBF5E7]/80 border border-[#CFE8C7] text-xs font-semibold text-[#073B2E]">
                    <i class="fa-solid fa-circle-check text-emerald-600 shrink-0 text-sm"></i>
                    <span>Licensed &amp; certified moving operations across all 7 UAE Emirates with full transit protection.</span>
                </div>

                {{-- Action Buttons & Trust Micro-Badges --}}
                <div class="space-y-2.5 pt-1">
                    <div class="flex flex-col min-[420px]:flex-row items-stretch min-[420px]:items-center gap-2.5 sm:gap-3.5">
                        <button type="button" 
                                onclick="openQuoteModal('', 'Why Choose Us')" 
                                class="btn-lime text-xs sm:text-sm font-bold py-3.5 px-6 shadow-sm flex items-center justify-center gap-2">
                            <i class="fa-solid fa-calculator text-xs"></i>
                            <span>Get Free Moving Quote</span>
                        </button>
                        <a href="tel:0507060165" class="inline-flex items-center justify-center gap-2 px-5 py-3.5 rounded-full border-2 border-[#073B2E] text-[#073B2E] hover:bg-[#073B2E] hover:text-[#B7E532] font-bold text-xs sm:text-sm transition-all duration-200 shadow-2xs">
                            <i class="fa-solid fa-phone text-xs"></i>
                            <span>Call 050 706 0165</span>
                        </a>
                    </div>
                    
                    {{-- Trust Micro-Indicators --}}
                    <div class="flex flex-wrap items-center gap-x-4 gap-y-1.5 text-[11.5px] text-[#55645A] font-medium pt-1">
                        <span class="inline-flex items-center gap-1 text-[#073B2E] font-semibold">
                            <i class="fa-solid fa-star text-amber-500 text-[10.5px]"></i>
                            <span>4.9/5 Rating</span>
                        </span>
                        <span class="w-1 h-1 rounded-full bg-[#CBD5CE]"></span>
                        <span>Free Virtual Survey</span>
                        <span class="w-1 h-1 rounded-full bg-[#CBD5CE]"></span>
                        <span>Zero Obligation</span>
                    </div>
                </div>
            </div>

            {{-- Right Column: Heroic Branded MOVEXA Photography Slider & Thumbnail Gallery --}}
            <div class="lg:col-span-6 space-y-3 sm:space-y-3.5">
                
                {{-- Main Featured Slide Card --}}
                <div class="relative rounded-2xl sm:rounded-3xl overflow-hidden shadow-[0_20px_50px_-12px_rgba(7,59,46,0.16)] border-2 border-[#DCE4DC] aspect-[4/3] sm:aspect-[16/11] lg:aspect-[4/3] xl:aspect-[16/11] bg-[#073B2E] group/teamCard">
                    
                    {{-- Top Laser Line Accent --}}
                    <div class="absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent shadow-[0_0_12px_#D8F36B] z-30 pointer-events-none"></div>

                    {{-- 6 Branded Team Slides with Smooth Cross-Fade --}}
                    @php
                    $slidesData = [
                        [
                            'src' => asset('images/why-choose-us/movexa-why-choose-us-team-trucks-pose.webp'),
                            'alt' => '15+ Full-Time Verified MOVEXA Team & Moving Fleet in Dubai',
                        ],
                        [
                            'src' => asset('images/why-choose-us/movexa-why-choose-us-composite-services.webp'),
                            'alt' => 'MOVEXA Complete Moving, Packing & Master Carpentry Setup',
                        ],
                        [
                            'src' => asset('images/why-choose-us/movexa-why-choose-us-team-skyline.webp'),
                            'alt' => 'MOVEXA Professional Moving Fleet & Uniformed Team with Dubai Skyline',
                        ],
                        [
                            'src' => asset('images/why-choose-us/movexa-why-choose-us-villa-loading.webp'),
                            'alt' => 'MOVEXA Movers Carefully Loading Furniture at Luxury Villa in Dubai',
                        ],
                        [
                            'src' => asset('images/why-choose-us/movexa-why-choose-us-crew-fleet.webp'),
                            'alt' => 'Uniformed MOVEXA Relocation Crew with Branded Truck, Ramp and Packing Boxes',
                        ],
                        [
                            'src' => asset('images/why-choose-us/movexa-why-choose-us-packers-movers-banner.webp'),
                            'alt' => 'Certified Professional Movers & Packers in the UAE with MOVEXA Packing Materials',
                        ],
                    ];
                    @endphp
                    @foreach ($slidesData as $sIdx => $sData)
                    <div class="absolute inset-0 transition-opacity duration-700 ease-in-out"
                         :class="currentSlide === {{ $sIdx }} ? 'opacity-100 z-10' : 'opacity-0 z-0 pointer-events-none'"
                         {{ $sIdx !== 0 ? 'x-cloak' : '' }}>
                        <img src="{{ $sData['src'] }}" 
                             alt="{{ $sData['alt'] }}" 
                             class="w-full h-full object-cover group-hover/teamCard:scale-105 transition-transform duration-700 ease-out"
                             loading="{{ $sIdx === 0 ? 'eager' : 'lazy' }}"
                             decoding="async">
                        {{-- Subtle Dark Vignette for Floating Overlay Contrast --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 to-black/10"></div>
                    </div>
                    @endforeach

                    {{-- Floating Top-Left Badge: Official Team Status --}}
                    <div class="absolute top-3 left-3 sm:top-4 sm:left-4 z-20 inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-[#073B2E]/90 backdrop-blur-md text-white text-[11px] sm:text-xs font-bold border border-white/20 shadow-md">
                        <span class="w-2 h-2 rounded-full bg-[#B7E532] animate-pulse"></span>
                        <span x-text="slides[currentSlide].tag">Official MOVEXA Crew</span>
                    </div>

                    {{-- Top-Right Integrated Navigation & Counter Capsule --}}
                    <div class="absolute top-3 right-3 sm:top-4 sm:right-4 z-20 flex items-center gap-2 bg-black/60 backdrop-blur-md px-3 py-1.5 rounded-full border border-white/20 shadow-md">
                        <span class="text-[11px] sm:text-xs font-bold text-white tracking-wider" x-text="(currentSlide + 1) + ' / ' + totalSlides">1 / 6</span>
                        <div class="w-px h-3.5 bg-white/30"></div>
                        <div class="flex items-center gap-1">
                            <button type="button" 
                                    @click="prev(); restartTimer();" 
                                    class="w-6 h-6 rounded-full hover:bg-white/20 text-white flex items-center justify-center transition-colors focus:outline-none" 
                                    aria-label="Previous Slide">
                                <i class="fa-solid fa-chevron-left text-[9px]"></i>
                            </button>
                            <button type="button" 
                                    @click="next(); restartTimer();" 
                                    class="w-6 h-6 rounded-full hover:bg-white/20 text-white flex items-center justify-center transition-colors focus:outline-none" 
                                    aria-label="Next Slide">
                                <i class="fa-solid fa-chevron-right text-[9px]"></i>
                            </button>
                        </div>
                    </div>

                    {{-- Overlay On-Image Left & Right Navigation Arrows (Subtle on rest, clear on hover) --}}
                    <button type="button" 
                            @click="prev(); restartTimer();" 
                            class="absolute left-2.5 sm:left-3.5 top-1/2 -translate-y-1/2 z-20 w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-black/35 hover:bg-white text-white hover:text-[#073B2E] backdrop-blur-md border border-white/20 flex items-center justify-center transition-all duration-200 shadow-lg focus:outline-none opacity-0 group-hover/teamCard:opacity-100"
                            aria-label="Previous Slide">
                        <i class="fa-solid fa-chevron-left text-[11px] sm:text-xs"></i>
                    </button>
                    <button type="button" 
                            @click="next(); restartTimer();" 
                            class="absolute right-2.5 sm:right-3.5 top-1/2 -translate-y-1/2 z-20 w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-black/35 hover:bg-white text-white hover:text-[#073B2E] backdrop-blur-md border border-white/20 flex items-center justify-center transition-all duration-200 shadow-lg focus:outline-none opacity-0 group-hover/teamCard:opacity-100"
                            aria-label="Next Slide">
                        <i class="fa-solid fa-chevron-right text-[11px] sm:text-xs"></i>
                    </button>

                    {{-- Floating Bottom Caption Card --}}
                    <div class="absolute bottom-2.5 left-2.5 right-2.5 sm:bottom-4 sm:left-4 sm:right-4 z-20">
                        <div class="bg-white/95 backdrop-blur-md rounded-xl sm:rounded-2xl p-3 sm:p-4 border border-white/60 shadow-[0_10px_30px_rgba(7,59,46,0.18)] flex items-center justify-between gap-3 sm:gap-4 transition-all duration-300">
                            <div class="space-y-0.5 min-w-0">
                                <h3 class="font-extrabold text-xs min-[375px]:text-sm sm:text-[15px] text-[#073B2E] tracking-tight leading-snug truncate"
                                    x-text="slides[currentSlide].title">
                                    15+ Full-Time Verified MOVEXA Team &amp; Fleet
                                </h3>
                                <p class="text-[10px] min-[375px]:text-[11px] sm:text-xs text-[#526058] leading-tight line-clamp-1"
                                   x-text="slides[currentSlide].subtitle">
                                    Official In-House Moving Crew &amp; Daily Active Fleet in Dubai
                                </p>
                            </div>
                            <span class="w-8 h-8 sm:w-10 sm:h-10 rounded-lg sm:rounded-xl bg-[#073B2E] text-[#B7E532] flex items-center justify-center text-xs sm:text-sm shrink-0 shadow-sm ring-2 ring-[#B7E532]/30">
                                <i :class="slides[currentSlide].icon"></i>
                            </span>
                        </div>
                    </div>

                </div>

                {{-- Interactive 6-Photo Thumbnail Gallery Strip --}}
                <div class="grid grid-cols-6 gap-1.5 sm:gap-2.5">
                    @foreach ($slidesData as $sIdx => $sData)
                    <button type="button" 
                            @click="goTo({{ $sIdx }}); restartTimer();" 
                            class="group/thumb relative rounded-lg sm:rounded-xl overflow-hidden aspect-[4/3] border-2 transition-all duration-200 focus:outline-none bg-gray-100"
                            :class="currentSlide === {{ $sIdx }} 
                                ? 'border-[#073B2E] ring-2 ring-[#B7E532] shadow-md scale-[1.02] opacity-100 z-10' 
                                : 'border-[#E2ECE2] opacity-60 hover:opacity-100 hover:border-[#073B2E]/40 hover:scale-[1.02]'"
                            aria-label="View photo {{ $sIdx + 1 }}">
                        <img src="{{ $sData['src'] }}" 
                             alt="{{ $sData['alt'] }}" 
                             class="w-full h-full object-cover transition-transform duration-300 group-hover/thumb:scale-110"
                             loading="lazy"
                             decoding="async">
                        {{-- Active Accent Bar Indicator --}}
                        <div class="absolute inset-x-0 bottom-0 h-1 bg-[#B7E532] transition-opacity duration-200"
                             :class="currentSlide === {{ $sIdx }} ? 'opacity-100' : 'opacity-0'"></div>
                    </button>
                    @endforeach
                </div>

                {{-- Live Operations Metadata Caption --}}
                <div class="flex items-center justify-between text-[11px] sm:text-xs text-[#5A6860] px-1 font-medium">
                    <div class="flex items-center gap-1.5">
                        <i class="fa-solid fa-camera-retro text-[#073B2E]"></i>
                        <span>100% Authentic MOVEXA Fleet &amp; Crew Operations</span>
                    </div>
                    <div class="hidden sm:flex items-center gap-1.5 font-semibold text-[#073B2E]">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span>Active Across All 7 Emirates</span>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

{{-- ==========================================
     SECTION 7: INTERNATIONAL MOVING SLIDE BAR (AUTO-SCROLLING CONTINUOUS CAROUSEL)
     ========================================== --}}
<section class="py-14 sm:py-18 lg:py-20 bg-white border-y border-[#E2E8E2] overflow-hidden relative"
         x-data="{
             offset: 0,
             speed: 0.85,
             isPaused: false,
             visibleCards: 4,
             cardWidth: 0,
             setWidth: 0,
             animId: null,
             isDragging: false,
             dragStartX: 0,
             dragStartY: 0,
             dragStartOffset: 0,
             draggedDistance: 0,
             isManualNavigating: false,

             init() {
                 this.updateDimensions();
                 window.addEventListener('resize', () => {
                     this.updateDimensions();
                 });
                 this.startLoop();
             },

             updateDimensions() {
                 const w = window.innerWidth;
                 if (w >= 1280) {
                     this.visibleCards = 4;
                 } else if (w >= 1024) {
                     this.visibleCards = 3;
                 } else if (w >= 640) {
                     this.visibleCards = 2;
                 } else {
                     this.visibleCards = 1;
                 }
                 if (this.$refs.viewport) {
                     this.cardWidth = this.$refs.viewport.offsetWidth / this.visibleCards;
                     this.setWidth = this.cardWidth * 12;
                 }
             },

             startLoop() {
                 const step = () => {
                     if (!this.isPaused && !this.isDragging && this.setWidth > 0) {
                         this.offset -= this.speed;
                         if (Math.abs(this.offset) >= this.setWidth) {
                             this.offset = 0;
                         }
                     }
                     this.animId = requestAnimationFrame(step);
                 };
                 this.animId = requestAnimationFrame(step);
             },

             pause() {
                 this.isPaused = true;
             },

             resume() {
                 this.isPaused = false;
             },

             slidePrev() {
                 if (this.cardWidth > 0) {
                     this.offset += this.cardWidth;
                     if (this.offset > 0) {
                         this.offset = -this.setWidth + this.cardWidth;
                     }
                 }
             },

             slideNext() {
                 if (this.cardWidth > 0) {
                     this.offset -= this.cardWidth;
                     if (Math.abs(this.offset) >= this.setWidth) {
                         this.offset = 0;
                     }
                 }
             },

             // Touch / Drag Handlers
             onTouchStart(e) {
                 this.isDragging = true;
                 this.isPaused = true;
                 this.dragStartX = e.touches[0].clientX;
                 this.dragStartY = e.touches[0].clientY;
                 this.dragStartOffset = this.offset;
                 this.draggedDistance = 0;
             },

             onTouchMove(e) {
                 if (!this.isDragging) return;
                 const currentX = e.touches[0].clientX;
                 const currentY = e.touches[0].clientY;
                 const diffX = currentX - this.dragStartX;
                 const diffY = currentY - this.dragStartY;

                 if (Math.abs(diffX) > Math.abs(diffY)) {
                     e.preventDefault();
                     this.draggedDistance = diffX;
                     this.offset = this.dragStartOffset + diffX;
                 }
             },

             onTouchEnd() {
                 this.isDragging = false;
                 this.isPaused = false;
                 if (this.offset > 0) {
                     this.offset = -this.setWidth + (this.offset % this.setWidth);
                 } else if (Math.abs(this.offset) >= this.setWidth) {
                     this.offset = this.offset % this.setWidth;
                 }
             },

             onMouseDown(e) {
                 this.isDragging = true;
                 this.isPaused = true;
                 this.dragStartX = e.clientX;
                 this.dragStartOffset = this.offset;
                 this.draggedDistance = 0;
                 e.preventDefault();
             },

             onMouseMove(e) {
                 if (!this.isDragging) return;
                 const diffX = e.clientX - this.dragStartX;
                 this.draggedDistance = diffX;
                 this.offset = this.dragStartOffset + diffX;
             },

             onMouseUp() {
                 if (!this.isDragging) return;
                 this.isDragging = false;
                 this.isPaused = false;
                 if (this.offset > 0) {
                     this.offset = -this.setWidth + (this.offset % this.setWidth);
                 } else if (Math.abs(this.offset) >= this.setWidth) {
                     this.offset = this.offset % this.setWidth;
                 }
             }
         }">
    
    {{-- Luminous Ambient Glow Blooms for Depth & Luxury Contrast --}}
    <div class="absolute -top-32 left-1/4 w-[600px] h-[600px] bg-[radial-gradient(ellipse_at_center,rgba(216,243,107,0.12),transparent_70%)] blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute -bottom-32 right-10 w-[600px] h-[600px] bg-[radial-gradient(ellipse_at_center,rgba(7,59,46,0.05),transparent_70%)] blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute top-0 inset-x-0 h-px bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent opacity-70 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        {{-- Section Header: Title & Navigation Controls --}}
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-8 sm:mb-10">
            <div>
                <span class="forest-badge mb-3">
                    <i class="fa-solid fa-globe text-[#D8F36B]"></i>
                    <span>Global Relocation Routes</span>
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading text-[#073B2E] tracking-tight">
                    International Moving &amp; Global Shipping
                </h2>
                <p class="text-xs sm:text-sm sm:text-base text-[#425048] mt-2 max-w-xl leading-relaxed">
                    Seamless door-to-door relocation from Dubai to popular destinations worldwide with dedicated sea container (FCL/LCL) and air freight cargo transit routes.
                </p>
            </div>

            {{-- Slider Controls (Prev / Next & View All) --}}
            <div class="flex items-center gap-3 shrink-0">
                <a href="{{ route('international-moving') }}" 
                   class="btn-forest text-xs font-bold py-2.5 px-4 hidden sm:inline-flex items-center gap-2 shadow-xs">
                    <span>Explore Global Shipping</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>

                <div class="flex items-center gap-2">
                    <button type="button" 
                            @click="slidePrev()" 
                            @mouseenter="pause()" 
                            @mouseleave="resume()" 
                            class="w-10 h-10 rounded-full bg-[#F2F7F4] hover:bg-[#103B30] text-[#103B30] hover:text-[#D8F36B] border border-[#E2E8E2] flex items-center justify-center transition-all duration-200 cursor-pointer shadow-xs hover:scale-105" 
                            aria-label="Previous international destination">
                        <i class="fa-solid fa-arrow-left text-xs"></i>
                    </button>
                    <button type="button" 
                            @click="slideNext()" 
                            @mouseenter="pause()" 
                            @mouseleave="resume()" 
                            class="w-10 h-10 rounded-full bg-[#F2F7F4] hover:bg-[#103B30] text-[#103B30] hover:text-[#D8F36B] border border-[#E2E8E2] flex items-center justify-center transition-all duration-200 cursor-pointer shadow-xs hover:scale-105" 
                            aria-label="Next international destination">
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </button>
                </div>
            </div>
        </div>

    </div>

    {{-- Continuous Carousel Viewport --}}
    <div class="w-full relative cursor-grab active:cursor-grabbing select-none"
         x-ref="viewport"
         @mouseenter="pause()"
         @mouseleave="resume()"
         @touchstart.passive="onTouchStart($event)"
         @touchmove="onTouchMove($event)"
         @touchend="onTouchEnd()"
         @mousedown="onMouseDown($event)"
         @mousemove="onMouseMove($event)"
         @mouseup="onMouseUp()"
         @mouseleave="onMouseUp()">

        {{-- Carousel Slider Track with Hardware Acceleration --}}
        <div class="flex will-change-transform"
             :style="`transform: translate3d(${offset}px, 0, 0);`">

            {{-- First Copy of 12 Cards --}}
            @foreach ($destinations as $dest)
            <div class="px-3 shrink-0"
                 :style="`width: ${cardWidth}px;`">
                <x-destination-card :dest="$dest" />
            </div>
            @endforeach

            {{-- Cloned Second Copy for Continuous Seamless Loop --}}
            @foreach ($destinations as $dest)
            <div class="px-3 shrink-0"
                 :style="`width: ${cardWidth}px;`">
                <x-destination-card :dest="$dest" />
            </div>
            @endforeach

        </div>

    </div>

    {{-- Bottom Assurance Bar --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
        <div class="p-4 rounded-2xl bg-[#F2F7F4] border border-[#E2E8E2] flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-[#5A645E]">
            <span class="inline-flex items-center gap-2 font-medium">
                <i class="fa-solid fa-ship text-[#103B30]"></i>
                <span>Direct shipping via Jebel Ali Port &bull; Transfer of Residence (ToR) customs clearance support &bull; All-risk cargo insurance</span>
            </span>
            <a href="{{ route('international-moving') }}" class="font-bold text-[#103B30] hover:underline flex items-center gap-1 shrink-0">
                <span>View International Moving Details</span>
                <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
        </div>
    </div>
</section>

{{-- ==========================================
     SECTION 8: MOVING GALLERY (PREMIUM MASONRY SHOWCASE)
     ========================================== --}}
<section class="pt-16 sm:pt-20 lg:pt-24 pb-8 sm:pb-10 relative overflow-hidden bg-white border-b border-[#E2E8E2]">
    {{-- Shining Radiant Ambient Glows (Subtle Lime & Forest Light Flares) --}}
    <div class="absolute -top-32 right-1/4 w-[700px] h-[700px] bg-gradient-to-br from-[#D8F36B]/25 via-[#103B30]/5 to-transparent rounded-full blur-[110px] pointer-events-none select-none -z-10 animate-pulse duration-[7000ms]"></div>
    <div class="absolute -bottom-32 left-10 w-[700px] h-[700px] bg-gradient-to-tr from-[#103B30]/10 via-[#D8F36B]/20 to-transparent rounded-full blur-[120px] pointer-events-none select-none -z-10"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[1000px] h-[600px] bg-[radial-gradient(ellipse_at_center,rgba(216,243,107,0.14),rgba(255,255,255,0)_70%)] blur-[90px] pointer-events-none select-none -z-10"></div>

    {{-- Subtle Logistics Matrix Grid Accent --}}
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#103B300a_1px,transparent_1px),linear-gradient(to_bottom,#103B300a_1px,transparent_1px)] bg-[size:52px_52px] pointer-events-none select-none opacity-60"></div>
    
    {{-- Shining Top Edge Light Beam Accent --}}
    <div class="absolute top-0 inset-x-0 h-px bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent opacity-80 pointer-events-none"></div>

    <div class="max-w-7xl 2xl:max-w-[1540px] mx-auto px-4 sm:px-6 lg:px-8 xl:px-10 relative z-10">
        {{-- Section Header --}}
        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-10 sm:mb-14 gap-5">
            <div>
                <span class="forest-badge mb-2.5">
                    <i class="fa-solid fa-camera text-[#D8F36B]"></i>
                    CURATED OPERATIONS PORTFOLIO
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-heading text-[#202824] tracking-tight">
                    Real Moves. Real Precision.
                </h2>
                <p class="text-sm sm:text-base text-[#5A645E] max-w-2xl mt-2 leading-relaxed">
                    An authentic look at our daily relocation operations across Dubai.
                </p>
            </div>
            <a href="{{ route('gallery') }}" class="btn-outline-forest text-xs sm:text-sm font-bold py-2.5 sm:py-3 px-5 sm:px-6 rounded-full inline-flex items-center gap-2 self-start sm:self-auto hover:shadow-md transition-all whitespace-nowrap bg-white/80 backdrop-blur-sm">
                <span>Explore Full Gallery ({{ count($gallery) }} Photos)</span>
                <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>
        </div>

        @php
            $masonryItems = [
                // Col 1: Item 0 (Medium Landscape), Item 1 (Medium 4:3)
                [
                    'image' => 'images/gallery/movexa-gallery-villa-relocation-loading.webp',
                    'alt' => 'Turnkey Luxury Villa Relocation Loading',
                    'caption' => 'Turnkey Luxury Villa Relocation - Full-service moving crew loading wrapped furniture and crated goods at a private Dubai estate.',
                    'position' => 'center',
                    'height' => 'h-[250px] min-[375px]:h-[280px] sm:h-[380px] lg:h-[420px]',
                ],
                [
                    'image' => 'images/gallery/movexa-gallery-residential-export-packing.webp',
                    'alt' => 'Export-Grade Furniture Packaging & Strapping',
                    'caption' => 'Export-Grade Furniture Packaging - Heavy-duty seaworthy shrink-wrapping, reinforced corner shields, and secure strapping.',
                    'position' => 'center 50%',
                    'height' => 'h-[270px] min-[375px]:h-[310px] sm:h-[420px] lg:h-[470px]',
                ],
                // Col 2: Item 2 (Tall Portrait), Item 3 (Wide Landscape)
                [
                    'image' => 'images/gallery/movexa-gallery-apartment-packing-crew.webp',
                    'alt' => 'White-Glove Apartment Packing Crew',
                    'caption' => 'White-Glove Apartment Packing - Certified MOVEXA specialists carefully boxing, labelling, and protecting fragile glassware and decor.',
                    'position' => 'center',
                    'height' => 'h-[300px] min-[375px]:h-[350px] sm:h-[520px] lg:h-[610px]',
                ],
                [
                    'image' => 'images/gallery/movexa-gallery-skyline-truck-team.webp',
                    'alt' => 'Dubai Skyline Operations & Moving Fleet',
                    'caption' => 'Dubai Skyline Operations - Commercial moving fleet and licensed crew handling high-rise residential transfers across Dubai.',
                    'position' => 'center 35%',
                    'height' => 'h-[200px] min-[375px]:h-[240px] sm:h-[260px] lg:h-[280px]',
                ],
                // Col 3: Item 4 (Wide Landscape), Item 5 (Tall Portrait)
                [
                    'image' => 'images/gallery/movexa-gallery-sofa-living-room-wrapping.webp',
                    'alt' => 'Protective Upholstery & Sofa Wrapping',
                    'caption' => 'Protective Upholstery Wrapping - Multi-layer waterproof stretch wrap encasing upholstered sofas, armchairs, and rolled carpets.',
                    'position' => 'center',
                    'height' => 'h-[200px] min-[375px]:h-[240px] sm:h-[260px] lg:h-[280px]',
                ],
                [
                    'image' => 'images/gallery/movexa-gallery-truck-sofa-fleet.webp',
                    'alt' => 'Commercial Logistics Transport Fleet',
                    'caption' => 'Commercial Logistics Transport - Clean, enclosed MOVEXA truck equipped with hydraulic tail-lift ramp for safe, zero-damage transport.',
                    'position' => 'center 20%',
                    'height' => 'h-[300px] min-[375px]:h-[350px] sm:h-[520px] lg:h-[610px]',
                ],
            ];
        @endphp

        {{-- Luxury Modern Asymmetric Masonry Showcase (Photographs 100% Unobstructed) --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-7 lg:gap-8">
            {{-- Column 1 --}}
            <div class="flex flex-col gap-6 sm:gap-7 lg:gap-8">
                @foreach ([$masonryItems[0], $masonryItems[1]] as $item)
                <div class="group relative rounded-3xl overflow-hidden bg-white border border-[#E2E8E2] shadow-premium hover:shadow-2xl hover:shadow-[#103B30]/15 transition-all duration-500 cursor-pointer {{ $item['height'] }}"
                     onclick="openLightbox('{{ asset($item['image']) }}', '{{ addslashes($item['caption']) }}')">
                    
                    <img src="{{ asset($item['image']) }}" 
                         alt="{{ $item['alt'] }}" 
                         loading="lazy"
                         decoding="async"
                         class="w-full h-full object-cover group-hover:scale-[1.03] transition-transform duration-700 ease-out"
                         style="object-position: {{ $item['position'] }};">

                    {{-- Subtle Hover Sheen (Only visible on hover) --}}
                    <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>

                    {{-- Floating Quick-Zoom Badge (Top-Right, shows smoothly on hover) --}}
                    <div class="absolute top-4 right-4 z-10 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-1 group-hover:translate-y-0 pointer-events-none">
                        <span class="w-11 h-11 rounded-full bg-white/95 backdrop-blur-md text-[#103B30] flex items-center justify-center shadow-lg border border-white/80 group-hover:bg-[#103B30] group-hover:text-[#D8F36B] transition-all">
                            <i class="fa-solid fa-magnifying-glass-plus text-sm"></i>
                        </span>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Column 2 --}}
            <div class="flex flex-col gap-6 sm:gap-7 lg:gap-8">
                @foreach ([$masonryItems[2], $masonryItems[3]] as $item)
                <div class="group relative rounded-3xl overflow-hidden bg-white border border-[#E2E8E2] shadow-premium hover:shadow-2xl hover:shadow-[#103B30]/15 transition-all duration-500 cursor-pointer {{ $item['height'] }}"
                     onclick="openLightbox('{{ asset($item['image']) }}', '{{ addslashes($item['caption']) }}')">
                    
                    <img src="{{ asset($item['image']) }}" 
                         alt="{{ $item['alt'] }}" 
                         loading="lazy"
                         decoding="async"
                         class="w-full h-full object-cover group-hover:scale-[1.03] transition-transform duration-700 ease-out"
                         style="object-position: {{ $item['position'] }};">

                    <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>

                    <div class="absolute top-4 right-4 z-10 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-1 group-hover:translate-y-0 pointer-events-none">
                        <span class="w-11 h-11 rounded-full bg-white/95 backdrop-blur-md text-[#103B30] flex items-center justify-center shadow-lg border border-white/80 group-hover:bg-[#103B30] group-hover:text-[#D8F36B] transition-all">
                            <i class="fa-solid fa-magnifying-glass-plus text-sm"></i>
                        </span>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Column 3 (Spans full width on tablet md for balanced 2-column subgrid) --}}
            <div class="flex flex-col gap-6 sm:gap-7 lg:gap-8 md:col-span-2 lg:col-span-1 md:grid md:grid-cols-2 md:gap-6 lg:flex lg:flex-col">
                @foreach ([$masonryItems[4], $masonryItems[5]] as $item)
                <div class="group relative rounded-3xl overflow-hidden bg-white border border-[#E2E8E2] shadow-premium hover:shadow-2xl hover:shadow-[#103B30]/15 transition-all duration-500 cursor-pointer {{ $item['height'] }}"
                     onclick="openLightbox('{{ asset($item['image']) }}', '{{ addslashes($item['caption']) }}')">
                    
                    <img src="{{ asset($item['image']) }}" 
                         alt="{{ $item['alt'] }}" 
                         loading="lazy"
                         decoding="async"
                         class="w-full h-full object-cover group-hover:scale-[1.03] transition-transform duration-700 ease-out"
                         style="object-position: {{ $item['position'] }};">

                    <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>

                    <div class="absolute top-4 right-4 z-10 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-1 group-hover:translate-y-0 pointer-events-none">
                        <span class="w-11 h-11 rounded-full bg-white/95 backdrop-blur-md text-[#103B30] flex items-center justify-center shadow-lg border border-white/80 group-hover:bg-[#103B30] group-hover:text-[#D8F36B] transition-all">
                            <i class="fa-solid fa-magnifying-glass-plus text-sm"></i>
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Compact Trust & Full Gallery Indicator --}}
        <div class="mt-8 sm:mt-10 flex flex-col sm:flex-row items-center justify-between gap-3 px-6 py-4 bg-white/90 backdrop-blur-md border border-[#E2E8E2] rounded-2xl text-xs sm:text-sm text-[#5A645E] shadow-sm">
            <div class="flex items-center gap-2.5">
                <i class="fa-solid fa-circle-check text-[#103B30] text-base"></i>
                <span><strong>100% Authentic MOVEXA Operations:</strong> Actual fleet vehicles, certified movers, and protective export wrapping across Dubai.</span>
            </div>
            <a href="{{ route('gallery') }}" class="font-bold text-[#103B30] hover:underline whitespace-nowrap inline-flex items-center gap-1.5">
                <span>View all {{ count($gallery) }} photos in archive</span>
                <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>
        </div>
    </div>
</section>

{{-- ==========================================
     SECTION 10: CUSTOMER TESTIMONIALS (CENTERED LUXURY SHOWCASE)
     ========================================== --}}
<section class="pt-10 sm:pt-14 lg:pt-16 pb-6 sm:pb-8 bg-white relative overflow-hidden border-t border-[#E8F0E8]"
     x-data="{
         currentIndex: 0,
         total: {{ count($testimonials) }},
         timer: null,
         duration: 6000,
         progress: 0,
         isPaused: false,
         touchStartX: 0,
         touchEndX: 0,

         init() {
             this.startAutoPlay();
         },
         startAutoPlay() {
             this.stopAutoPlay();
             this.progress = 0;
             const step = 50;
             this.timer = setInterval(() => {
                 if (!this.isPaused) {
                     this.progress += (step / this.duration) * 100;
                     if (this.progress >= 100) {
                         this.next();
                     }
                 }
             }, step);
         },
         stopAutoPlay() {
             if (this.timer) {
                 clearInterval(this.timer);
                 this.timer = null;
             }
         },
         restartAutoPlay() {
             this.progress = 0;
             this.startAutoPlay();
         },
         pause() {
             this.isPaused = true;
         },
         resume() {
             this.isPaused = false;
         },
         next() {
             this.currentIndex = (this.currentIndex + 1) % this.total;
             this.progress = 0;
         },
         prev() {
             this.currentIndex = (this.currentIndex - 1 + this.total) % this.total;
             this.progress = 0;
         },
         goTo(idx) {
             this.currentIndex = idx;
             this.progress = 0;
         },
         touchStart(e) {
             this.touchStartX = e.changedTouches[0].screenX;
         },
         touchEnd(e) {
             this.touchEndX = e.changedTouches[0].screenX;
             const diff = this.touchEndX - this.touchStartX;
             if (diff < -50) {
                 this.next();
             } else if (diff > 50) {
                 this.prev();
             }
         }
     }"
     @mouseenter="pause()"
     @mouseleave="resume()"
     @touchstart.passive="touchStart($event)"
     @touchend.passive="touchEnd($event)">

    {{-- Subtle Architectural Grid Micro-pattern (Crisp Luxury Feel, Zero Blur) --}}
    <div class="absolute inset-0 bg-[radial-gradient(#073B2E_1px,transparent_1px)] [background-size:28px_28px] opacity-[0.03] pointer-events-none"></div>
    <div class="absolute top-0 inset-x-0 h-px bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent opacity-70 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        {{-- Section Heading --}}
        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-14 space-y-3">
            <span class="forest-badge shadow-2xs">
                <i class="fa-solid fa-star text-[#D8F36B]"></i>
                <span>Verified Client Experiences</span>
            </span>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl xl:text-[42px] font-black font-heading text-[#073B2E] tracking-tight">
                What Our Customers Say.
            </h2>
            <p class="text-xs sm:text-sm md:text-base text-[#4E5B54] max-w-2xl mx-auto leading-relaxed">
                Real feedback from clients who trusted MOVEXA with their home moves, villa relocations, and international shipments across Dubai and worldwide.
            </p>
        </div>

                {{-- Single-Card Testimonial Showcase (Centered, Clean & Premium) --}}
        <div class="max-w-4xl mx-auto space-y-4">
            {{-- Main Sliding Card --}}
            <div class="relative bg-white rounded-3xl border-2 border-[#DCE4DC] shadow-[0_16px_45px_-10px_rgba(16,59,48,0.12)] hover:shadow-[0_22px_55px_-10px_rgba(16,59,48,0.18)] overflow-hidden transition-all duration-300 group">
                {{-- Permanent Top Shining Laser Line & Glow --}}
                <div class="absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent shadow-[0_0_15px_#D8F36B] z-30 pointer-events-none"></div>

                {{-- Dynamic Auto-slide Progress Bar --}}
                <div class="h-1 w-full bg-[#EBF2EB] relative overflow-hidden" title="Slide timer progress">
                    <div class="h-full bg-gradient-to-r from-[#103B30] via-[#D8F36B] to-[#103B30] transition-all duration-75 ease-linear shadow-[0_0_8px_#D8F36B]"
                         :style="'width: ' + progress + '%'"></div>
                </div>

                {{-- Horizontal Slide Track --}}
                <div class="flex transition-transform duration-700 ease-out"
                     :style="'transform: translateX(-' + (currentIndex * 100) + '%)'">
                    @foreach ($testimonials as $index => $t)
                    <div class="w-full flex-shrink-0 p-4 sm:p-8 lg:p-9 relative flex flex-col justify-between">
                        {{-- Large Decorative Quotation Watermark --}}
                        <div class="absolute right-6 top-6 text-[#103B30]/[0.04] pointer-events-none select-none text-7xl lg:text-8xl font-serif leading-none">
                            <i class="fa-solid fa-quote-right"></i>
                        </div>

                        {{-- Card Header: Rating, Badges & Relocation Details --}}
                        <div class="space-y-3 relative z-10">
                            <div class="flex flex-wrap items-center justify-between gap-2.5">
                                <div class="flex items-center gap-2">
                                    {{-- Star Rating --}}
                                    <div class="flex items-center gap-1 text-amber-400 text-xs sm:text-sm bg-[#103B30] px-2.5 py-1 rounded-full shadow-2xs">
                                        @for ($i = 0; $i < ($t['rating'] ?? 5); $i++)
                                            <i class="fa-solid fa-star"></i>
                                        @endfor
                                        <span class="text-xs font-black text-white ml-1">5.0</span>
                                    </div>

                                    {{-- Verified Move Badge --}}
                                    <span class="inline-flex items-center gap-1.5 bg-[#EBF5EF] text-[#0A5C36] border border-[#BCE3C8] text-[11px] sm:text-xs font-bold px-2.5 py-1 rounded-full shadow-2xs">
                                        <i class="fa-solid fa-circle-check text-[#059669]"></i>
                                        <span>Verified Move</span>
                                    </span>
                                </div>

                                {{-- Move Date --}}
                                <span class="inline-flex items-center gap-1.5 bg-white border border-[#E2E8E2] px-2.5 py-1 rounded-full text-[11px] font-semibold text-[#5A645E] shadow-2xs">
                                    <i class="fa-regular fa-calendar-check text-[#103B30]"></i>
                                    <span>{{ $t['date'] ?? 'Recent Relocation' }}</span>
                                </span>
                            </div>

                            {{-- Highlight Quote Title --}}
                            @if (!empty($t['highlight']))
                            <h3 class="text-lg sm:text-xl lg:text-[22px] font-black font-heading text-[#103B30] tracking-tight leading-snug pt-1">
                                “{{ $t['highlight'] }}”
                            </h3>
                            @endif

                            {{-- Full Review Content --}}
                            <p class="text-xs sm:text-sm md:text-[15px] text-[#3D4742] leading-relaxed font-normal">
                                {{ $t['comment'] }}
                            </p>

                            {{-- Route Pill & Logistics Tag --}}
                            <div class="pt-1 flex flex-wrap items-center gap-2">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-[#F4F8F4] border border-[#D8E6D8] text-xs font-bold text-[#103B30]">
                                    <i class="fa-solid fa-route text-[#059669]"></i>
                                    <span>Route: {{ $t['route'] ?? 'Dubai, UAE' }}</span>
                                </span>
                                @if (!empty($t['type']))
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-xl bg-[#EBF5EF] border border-[#BCE3C8] text-[11px] font-semibold text-[#073B2E]">
                                    <i class="fa-solid fa-truck-fast text-[#059669]"></i>
                                    <span>{{ $t['type'] }}</span>
                                </span>
                                @endif
                            </div>
                        </div>

                        {{-- Card Footer: Client Bio & Nav Buttons --}}
                        <div class="mt-6 pt-5 border-t border-[#EAEFEA] flex flex-wrap items-center justify-between gap-4 relative z-10">
                            <div class="flex items-center gap-3.5">
                                @if (!empty($t['avatar']))
                                <img src="{{ $t['avatar'] }}" 
                                     alt="{{ $t['name'] }}" 
                                     class="w-11 h-11 sm:w-12 sm:h-12 rounded-full object-cover border-2 border-[#D8F36B] shadow-2xs"
                                     loading="lazy">
                                @else
                                <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-[#103B30] text-[#D8F36B] font-bold text-sm flex items-center justify-center border-2 border-[#D8F36B]">
                                    {{ $t['initials'] ?? 'MC' }}
                                </div>
                                @endif
                                <div>
                                    <h4 class="text-sm sm:text-base font-bold text-[#073B2E] leading-tight">
                                        {{ $t['name'] }}
                                    </h4>
                                    <p class="text-[11px] sm:text-xs text-[#059669] font-semibold flex items-center gap-1 mt-0.5">
                                        <i class="fa-solid fa-circle-check text-[10px]"></i>
                                        <span>Verified Customer • Authenticated Experience</span>
                                    </p>
                                </div>
                            </div>

                            {{-- Navigation Buttons --}}
                            <div class="flex items-center gap-2">
                                <button type="button" 
                                        @click="prev(); restartAutoPlay();" 
                                        class="w-10 h-10 rounded-full border border-[#D5E2D5] bg-white text-[#103B30] hover:bg-[#103B30] hover:text-[#D8F36B] hover:border-[#103B30] shadow-2xs flex items-center justify-center transition-all duration-200 active:scale-95 focus:outline-none group cursor-pointer"
                                        aria-label="Previous Review">
                                    <i class="fa-solid fa-arrow-left text-xs group-hover:-translate-x-0.5 transition-transform"></i>
                                </button>
                                <button type="button" 
                                        @click="next(); restartAutoPlay();" 
                                        class="w-10 h-10 rounded-full border border-[#D5E2D5] bg-white text-[#103B30] hover:bg-[#103B30] hover:text-[#D8F36B] hover:border-[#103B30] shadow-2xs flex items-center justify-center transition-all duration-200 active:scale-95 focus:outline-none group cursor-pointer"
                                        aria-label="Next Review">
                                    <i class="fa-solid fa-arrow-right text-xs group-hover:translate-x-0.5 transition-transform"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Slider Controls Bar Below Card --}}
            <div class="flex flex-col sm:flex-row items-center justify-between gap-3 px-5 py-3 rounded-2xl bg-[#F7FAF7] border border-[#E2E8E2] shadow-2xs">
                <div class="text-xs font-semibold text-[#5A645E] flex items-center gap-2">
                    <span class="inline-block w-2.5 h-2.5 rounded-full bg-[#103B30] animate-pulse"></span>
                    <span>Displaying Review <strong class="text-[#103B30] font-bold" x-text="currentIndex + 1"></strong> of <strong class="text-[#103B30] font-bold" x-text="total"></strong> verified clients</span>
                </div>

                <div class="flex items-center gap-2">
                    @foreach ($testimonials as $index => $t)
                    <button type="button" 
                            @click="goTo({{ $index }}); restartAutoPlay();" 
                            class="h-2.5 rounded-full transition-all duration-300 focus:outline-none"
                            :class="currentIndex === {{ $index }} ? 'w-8 bg-[#103B30]' : 'w-2.5 bg-[#CBD5E1] hover:bg-[#103B30]/40'"
                            aria-label="Go to review {{ $index + 1 }} - {{ $t['name'] }}">
                    </button>
                    @endforeach
                </div>

                <div class="text-xs text-[#747C76] flex items-center gap-1.5 cursor-pointer select-none"
                     @click="isPaused = !isPaused"
                     title="Click to toggle auto-sliding">
                    <i class="fa-solid" :class="isPaused ? 'fa-circle-play text-[#103B30]' : 'fa-circle-pause text-[#747C76]'"></i>
                    <span x-text="isPaused ? 'Paused' : 'Auto-sliding'"></span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ==========================================
     SECTION 12: FINAL CALL TO ACTION (CONVERSION BANNER)
     ========================================== --}}
<section class="pt-2 sm:pt-4 pb-8 sm:pb-12 bg-gradient-to-b from-white via-[#F7FAF7] to-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <x-cta-banner 
            class="!mt-3 sm:!mt-5 !mb-4 sm:!mb-6"
            headline="Ready to Make Your Next Move?"
            subheadline="Let MOVEXA help you plan a smoother relocation, wherever your next destination may be."
            buttonText="Get a Free Quote"
        />
    </div>
</section>
@endsection

@push('scripts')
<script>
    function handleQuickQuote(e) {
        e.preventDefault();
        const from = document.getElementById('qqFrom').value.trim();
        const to = document.getElementById('qqTo').value.trim();
        const date = document.getElementById('qqDate').value;
        const type = document.getElementById('qqType').value;

        // Open WhatsApp directly with prefilled quick quote message
        const msg = `📦 *QUICK MOVING INQUIRY – MOVEXA*\n` +
                    `-----------------------------------\n` +
                    `📍 *From:* ${from}\n` +
                    `🎯 *To:* ${to}\n` +
                    `📅 *Date:* ${date}\n` +
                    `🏷️ *Type:* ${type}\n` +
                    `-----------------------------------\n` +
                    `Please provide an estimated quote for this move.`;

        const whatsappNum = "{{ config('movexa.brand.whatsapp_number') }}";
        window.open(`https://wa.me/${whatsappNum}?text=${encodeURIComponent(msg)}`, '_blank');
    }
</script>
@endpush
