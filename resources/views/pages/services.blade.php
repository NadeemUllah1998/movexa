@extends('layouts.app')

@section('title', 'Moving & Relocation Services in Dubai | MOVEXA')
@section('meta_description', 'Explore MOVEXA\'s full suite of moving solutions: residential home shifting, high-rise apartment moves, luxury villa relocations, corporate office shifting, international shipping, and packing.')

@section('content')

{{-- Breadcrumb --}}
<x-breadcrumb :items="[['label' => 'Our Services', 'url' => '']]" />

{{-- Services Hub Hero Section --}}
<section class="relative text-white overflow-hidden py-10 sm:py-12 lg:py-14 bg-[#0A0D0C] w-full">
    {{-- Photographic Background Image with Clean Neutral Contrast --}}
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <img src="{{ asset('images/hero/movexa-hero-team.webp') }}" 
             alt="MOVEXA Moving Services Dubai Fleet and Crew" 
             class="w-full h-full object-cover object-center opacity-90 scale-100 pointer-events-none" loading="lazy" decoding="async">
        <div class="absolute inset-0 bg-gradient-to-b from-black/85 via-black/55 to-black/85"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
    </div>

    {{-- Top Specular Light Highlight Line --}}
    <div class="absolute top-0 left-6 right-6 sm:left-12 sm:right-12 h-[1px] bg-gradient-to-r from-transparent via-white/30 to-transparent pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl mx-auto text-center space-y-4 sm:space-y-5">
            
            {{-- Main Headline --}}
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[48px] font-black font-heading text-white tracking-tight leading-[1.14] drop-shadow-[0_2px_12px_rgba(0,0,0,0.8)]">
                Tailored Moving Solutions For Every Home, Villa, Office & Border.
            </h1>

            {{-- Subheadline --}}
            <p class="text-sm sm:text-base lg:text-lg text-white/90 leading-relaxed font-normal max-w-2xl mx-auto drop-shadow-[0_1px_4px_rgba(0,0,0,0.7)]">
                Whether shifting luxury villas in Emirates Hills, moving high-rises in Dubai Marina, relocating corporate headquarters, or shipping worldwide, MOVEXA delivers end-to-end white-glove relocation with zero hassle.
            </p>

            {{-- CTA Buttons & Direct Hotline --}}
            <div class="pt-2 flex flex-col sm:flex-row items-stretch sm:items-center justify-center gap-3 sm:gap-4 max-w-md sm:max-w-none mx-auto">
                <button type="button" 
                        onclick="openQuoteModal()" 
                        class="inline-flex items-center justify-center gap-2.5 font-extrabold px-6 py-3.5 rounded-full bg-[#B7E532] text-[#073B2E] hover:bg-[#cbf54a] text-xs sm:text-sm shadow-lg hover:shadow-xl transition-all duration-200 transform hover:-translate-y-0.5 focus:outline-none cursor-pointer w-full sm:w-auto">
                    <i class="fa-solid fa-calculator text-xs"></i>
                    <span>Get a Free Moving Quote</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </button>

                <a href="https://wa.me/{{ config('movexa.brand.whatsapp_number') }}?text={{ urlencode('Hello MOVEXA, I would like to inquire about your moving services.') }}" 
                   target="_blank" 
                   rel="noopener" 
                   class="inline-flex items-center justify-center gap-2.5 font-semibold px-6 py-3.5 rounded-full bg-white/10 hover:bg-white/20 text-white border border-white/25 backdrop-blur-md text-xs sm:text-sm transition-all duration-200 transform hover:-translate-y-0.5 focus:outline-none shadow-md w-full sm:w-auto">
                    <i class="fa-brands fa-whatsapp text-base text-[#25D366] group-hover:text-white transition-colors"></i>
                    <span>Speak with an Advisor</span>
                </a>
            </div>

        </div>

        {{-- 4 Pillars Capability Metric Strip (Anchored inside Hero) --}}
        <div class="mt-8 sm:mt-10 pt-6 border-t border-white/15 grid grid-cols-1 min-[480px]:grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-5">
            <div class="bg-white/[0.04] backdrop-blur-md rounded-2xl p-4 sm:p-5 border border-white/10 space-y-1.5">
                <div class="w-8 h-8 rounded-xl bg-[#B7E532]/20 text-[#B7E532] flex items-center justify-center text-sm font-bold mb-2">
                    <i class="fa-solid fa-layer-group"></i>
                </div>
                <div class="text-sm sm:text-base font-extrabold text-white font-heading">7 Moving Specializations</div>
                <div class="text-[11px] sm:text-xs text-white/70 leading-snug">Villas, high-rise apartments, offices, global sea freight & climate storage.</div>
            </div>

            <div class="bg-white/[0.04] backdrop-blur-md rounded-2xl p-4 sm:p-5 border border-white/10 space-y-1.5">
                <div class="w-8 h-8 rounded-xl bg-[#B7E532]/20 text-[#B7E532] flex items-center justify-center text-sm font-bold mb-2">
                    <i class="fa-solid fa-user-shield"></i>
                </div>
                <div class="text-sm sm:text-base font-extrabold text-white font-heading">100% In-House Crew</div>
                <div class="text-[11px] sm:text-xs text-white/70 leading-snug">Uniformed, vetted full-time packers and master carpenters. Zero casual labor.</div>
            </div>

            <div class="bg-white/[0.04] backdrop-blur-md rounded-2xl p-4 sm:p-5 border border-white/10 space-y-1.5">
                <div class="w-8 h-8 rounded-xl bg-[#B7E532]/20 text-[#B7E532] flex items-center justify-center text-sm font-bold mb-2">
                    <i class="fa-solid fa-file-circle-check"></i>
                </div>
                <div class="text-sm sm:text-base font-extrabold text-white font-heading">Dubai NOC Permit Support</div>
                <div class="text-[11px] sm:text-xs text-white/70 leading-snug">Assistance with Emaar, Nakheel, DAMAC, and Dubai Holding move permits.</div>
            </div>

            <div class="bg-white/[0.04] backdrop-blur-md rounded-2xl p-4 sm:p-5 border border-white/10 space-y-1.5">
                <div class="w-8 h-8 rounded-xl bg-[#B7E532]/20 text-[#B7E532] flex items-center justify-center text-sm font-bold mb-2">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <div class="text-sm sm:text-base font-extrabold text-white font-heading">Zero-Damage Pledge</div>
                <div class="text-[11px] sm:text-xs text-white/70 leading-snug">5-ply export boxing, bubble wrapping, and comprehensive transit protection.</div>
            </div>
        </div>

    </div>
</section>

{{-- Quick Category Jump Filter Pills --}}
<div class="bg-white border-b border-[#E2E8E2] sticky top-16 sm:top-20 z-30 shadow-xs py-3 px-4">
    <div class="max-w-7xl mx-auto flex items-center gap-2 overflow-x-auto no-scrollbar">
        <span class="text-xs font-bold text-[#747C76] shrink-0 uppercase tracking-wider mr-2 hidden sm:inline-block">Quick Jump:</span>
        @foreach ($services as $s)
        <a href="#service-{{ $s['slug'] }}" 
           class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-xs font-bold bg-white text-[#103B30] hover:bg-[#103B30] hover:text-[#D8F36B] border border-[#E2E8E2] shadow-2xs hover:shadow transition-all shrink-0">
            <i class="fa-solid {{ $s['icon'] }} text-[11px]"></i>
            <span>{{ $s['title'] }}</span>
        </a>
        @endforeach
    </div>
</div>

{{-- Services Catalog Grid (All 7 Services) --}}
<section class="py-10 sm:py-12 lg:py-14 bg-white border-b border-[#E2E8E2] w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-8 sm:mb-10 space-y-3">
        <h2 class="text-3xl sm:text-4xl lg:text-[40px] font-black font-heading text-[#103B30] tracking-tight">
            Tailored Relocation Categories
        </h2>
        <p class="text-sm sm:text-base text-[#425048] leading-relaxed max-w-xl mx-auto">
            Every move is unique. Click any service below to explore detailed packing methods, building permits, and workflows.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($services as $s)
            <div id="service-{{ $s['slug'] }}" class="scroll-mt-36">
                <x-service-card :service="$s" />
            </div>
        @endforeach
    </div>
    </div>
</section>

{{-- Comparison / Guarantee Section --}}
<section class="py-10 sm:py-12 lg:py-14 bg-white border-b border-[#E2E8E2] w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="p-7 sm:p-8 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm hover:shadow-md transition-all card-hover space-y-3.5">
                <div class="w-10 h-10 rounded-xl bg-[#103B30] text-[#D8F36B] flex items-center justify-center font-bold">
                    <i class="fa-solid fa-box-archive"></i>
                </div>
                <h3 class="text-xl font-black font-heading text-[#103B30]">All-Inclusive Materials</h3>
                <p class="text-sm text-[#425048] leading-relaxed">
                    We arrive with fresh 5-ply cartons, bubble wrap, stretch film, wardrobe boxes, and tape. No hidden material charges on move day.
                </p>
            </div>

            <div class="p-7 sm:p-8 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm hover:shadow-md transition-all card-hover space-y-3.5">
                <div class="w-10 h-10 rounded-xl bg-[#103B30] text-[#D8F36B] flex items-center justify-center font-bold">
                    <i class="fa-solid fa-file-shield"></i>
                </div>
                <h3 class="text-xl font-black font-heading text-[#103B30]">Dubai Permit Support</h3>
                <p class="text-sm text-[#425048] leading-relaxed">
                    We supply trade license, vehicle registration, and driver IDs to help secure Move-In and Move-Out NOCs from Emaar, Nakheel, and DAMAC.
                </p>
            </div>

            <div class="p-7 sm:p-8 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm hover:shadow-md transition-all card-hover space-y-3.5">
                <div class="w-10 h-10 rounded-xl bg-[#103B30] text-[#D8F36B] flex items-center justify-center font-bold">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                </div>
                <h3 class="text-xl font-black font-heading text-[#103B30]">Carpentry & Handyman</h3>
                <p class="text-sm text-[#425048] leading-relaxed">
                    Skilled in-house carpenters disassemble king beds, modular wardrobes, and unmount curtains and wall-mounted televisions safely.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Global CTA --}}
<section class="bg-white py-4 sm:py-6 w-full">
    <x-cta-banner 
    headline="Ready to Organize Your Move?"
    subheadline="Contact our moving coordinators today to discuss schedules, packing, and pricing."
    buttonText="Request Your Free Proposal"
/>
</section>

@endsection
