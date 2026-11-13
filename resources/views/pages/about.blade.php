@extends('layouts.app')

@section('title', 'About MOVEXA | Global Moving & Relocations Dubai | Our Story & Values')
@section('meta_description', 'Discover MOVEXA – Dubai\'s trusted relocation partner. In-house certified moving crew, high-density export packing, closed trucks, and stress-free residential, villa, corporate & international moves.')

@section('content')

{{-- Breadcrumb --}}
<x-breadcrumb :items="[['label' => 'About Us', 'url' => '']]" />

{{-- =========================================================================
     1. HERO SECTION: FULL MOVER BACKGROUND, HIGH CONTRAST & CENTERED
     ========================================================================= --}}
<section class="relative text-white overflow-hidden py-10 sm:py-12 lg:py-14 bg-neutral-950 w-full flex items-center justify-center">
    {{-- Full Photographic Mover Background (Villa Relocation & Moving Crew in Action) --}}
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <img src="{{ asset('images/hero/movexa-hero-villa-unloading.webp') }}" 
             alt="MOVEXA Professional Relocation and Moving Operations in Dubai" 
             class="w-full h-full object-cover object-center pointer-events-none scale-100" loading="lazy" decoding="async">
        {{-- Clean Neutral Cinematic Tint (No muddy colors, pure high contrast) --}}
        <div class="absolute inset-0 bg-gradient-to-b from-black/85 via-black/70 to-black/90 pointer-events-none"></div>
    </div>

    {{-- Subtle Top Specular Laser Line --}}
    <div class="absolute top-0 inset-x-0 h-[1.5px] bg-gradient-to-r from-transparent via-[#D8F36B]/60 to-transparent pointer-events-none"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full text-center">
        
        {{-- Clean Minimalist Category Pill Badge --}}
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-black/60 backdrop-blur-md border border-white/25 text-[#D8F36B] text-xs font-bold uppercase tracking-wider mb-4 sm:mb-5 shadow-lg">
            <span class="w-2 h-2 rounded-full bg-[#D8F36B] shadow-[0_0_8px_#D8F36B] animate-pulse"></span>
            <span>About MOVEXA &bull; Dubai Relocation Specialists</span>
        </div>

        {{-- High-Contrast Headline with Glowing Lime Accent --}}
        <h1 class="text-2xl min-[375px]:text-3xl sm:text-4xl lg:text-[42px] font-black font-heading text-white tracking-tight leading-[1.2] drop-shadow-[0_2px_16px_rgba(0,0,0,0.95)]">
            Moving People Forward.<br>
            <span class="text-[#D8F36B] drop-shadow-[0_0_25px_rgba(216,243,107,0.45)]">Delivering Calm, Care &amp; Confidence.</span>
        </h1>

        {{-- Supporting Subheadline with High Readability --}}
        <p class="text-sm sm:text-base text-white/90 font-normal mt-4 sm:mt-5 leading-relaxed max-w-xl mx-auto drop-shadow-[0_2px_10px_rgba(0,0,0,0.95)]">
            Headquartered in Dubai, MOVEXA brings international-grade packing standards, certified in-house crews, and total pricing transparency to every residential, villa, corporate, and global relocation.
        </p>

        {{-- Action Buttons Row (Balanced, High-Contrast & Sleek) --}}
        <div class="mt-7 sm:mt-8 flex flex-wrap items-center justify-center gap-3 sm:gap-4">
            <button type="button" 
                    onclick="openQuoteModal()" 
                    class="btn-lime text-xs sm:text-sm px-6 py-3.5 rounded-full font-bold shadow-lg hover:shadow-lime-glow flex items-center gap-2 cursor-pointer transition-all hover:scale-105">
                <i class="fa-solid fa-calculator text-xs"></i>
                <span>Get a Free Moving Quote</span>
                <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </button>

            <a href="https://wa.me/{{ config('movexa.brand.whatsapp_number') }}?text={{ urlencode('Hello MOVEXA, I would like to learn more about your moving services and get an estimate.') }}" 
               target="_blank" 
               rel="noopener" 
               class="inline-flex items-center justify-center gap-2 px-5 py-3.5 rounded-full bg-white/10 hover:bg-[#25D366] text-white hover:text-white border border-white/30 hover:border-[#25D366] backdrop-blur-md text-xs sm:text-sm font-bold transition-all duration-200 shadow-md hover:scale-105">
                <i class="fa-brands fa-whatsapp text-base text-[#25D366] group-hover:text-white transition-colors"></i>
                <span>Chat on WhatsApp</span>
            </a>

            <a href="tel:{{ config('movexa.brand.phone_raw') }}" 
               class="inline-flex items-center justify-center gap-2 px-5 py-3.5 rounded-full bg-black/60 hover:bg-black/80 border border-white/25 backdrop-blur-md text-white text-xs sm:text-sm font-bold transition-all shadow-sm">
                <i class="fa-solid fa-phone text-[#D8F36B] text-xs"></i>
                <span>{{ config('movexa.brand.phone_display') }}</span>
            </a>
        </div>

        {{-- Subtle Integrated Trust Anchors --}}
        <div class="mt-8 pt-5 border-t border-white/20 flex flex-wrap items-center justify-center gap-x-6 gap-y-2.5 text-xs text-white/95 font-semibold tracking-wide">
            <span class="inline-flex items-center gap-1.5">
                <i class="fa-solid fa-circle-check text-[#D8F36B] text-[11px]"></i> 100% In-House Crew
            </span>
            <span class="inline-flex items-center gap-1.5">
                <i class="fa-solid fa-circle-check text-[#D8F36B] text-[11px]"></i> 12,000+ Completed Moves
            </span>
            <span class="inline-flex items-center gap-1.5">
                <i class="fa-solid fa-circle-check text-[#D8F36B] text-[11px]"></i> Dubai NOC Permits
            </span>
            <span class="inline-flex items-center gap-1.5">
                <i class="fa-solid fa-circle-check text-[#D8F36B] text-[11px]"></i> Zero Hidden Charges
            </span>
        </div>

    </div>
</section>
{{-- =========================================================================
     OPERATIONAL STANDARDS: ULTRA-PREMIUM FRAMED VISUAL PILLARS
     ========================================================================= --}}
<section class="py-10 sm:py-12 lg:py-14 bg-white border-b border-[#E2E8E2] relative overflow-hidden">
    {{-- Glowing Luminous Ambient Light Sheen --}}
    <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-[900px] h-[340px] bg-gradient-to-r from-[#D8F36B]/20 via-[#103B30]/10 to-[#D8F36B]/20 rounded-full blur-3xl -z-0 pointer-events-none"></div>
    <div class="absolute -bottom-20 right-1/4 w-[450px] h-[220px] bg-[#D8F36B]/15 rounded-full blur-3xl -z-0 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        {{-- Section Header: High-Impact, Meaningful & Authoritative --}}
        <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-10 space-y-2.5">
            <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-[#EBF4EB] border border-[#CDE3CD] text-[#0B2A22] text-xs font-bold tracking-wide uppercase shadow-2xs">
                <span class="w-2 h-2 rounded-full bg-[#103B30] shadow-[0_0_8px_#103B30] animate-pulse"></span>
                <span>Verified Operational Standards</span>
            </div>
            <h2 class="text-2xl sm:text-3xl lg:text-[34px] font-black font-heading text-[#0B2A22] tracking-tight leading-tight">
                Four Pillars Behind Every MOVEXA Move
            </h2>
            <p class="text-sm sm:text-[15px] text-[#1F3027] font-medium max-w-2xl mx-auto leading-relaxed">
                See the real operational infrastructure, vetted personnel, and protective craftsmanship that protect your home and budget.
            </p>
        </div>

        {{-- 4 Ultra-Premium Framed Visual Pillar Cards Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 sm:gap-6 items-stretch">
            
            {{-- Pillar 1: In-House Certified Crew --}}
            <div class="group relative rounded-3xl bg-white border border-[#E2E8E2] shadow-[0_4px_24px_rgba(16,59,48,0.05)] hover:shadow-[0_20px_45px_-12px_rgba(16,59,48,0.13),0_0_25px_rgba(216,243,107,0.22)] hover:border-[#103B30]/35 hover:-translate-y-1.5 transition-all duration-300 flex flex-col overflow-hidden">
                {{-- Permanent Top Shining Laser Line & Glow --}}
                <div class="absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent shadow-[0_0_12px_#D8F36B] z-20"></div>

                {{-- Diagonal Light Sweep Sheen --}}
                <div class="absolute -inset-full top-0 bg-gradient-to-r from-transparent via-white/50 to-transparent -skew-x-12 opacity-0 group-hover:opacity-100 group-hover:translate-x-[200%] transition-all duration-1000 ease-out pointer-events-none z-20"></div>

                {{-- Luxury Framed Inset Photo Container --}}
                <div class="p-3 sm:p-3.5 pb-0">
                    <div class="relative aspect-[16/10] rounded-2xl overflow-hidden bg-neutral-100 shadow-inner group/img">
                        <img src="{{ asset('images/hero/movexa-hero-team.webp') }}" 
                             alt="MOVEXA 100% In-House Trained Moving Crew in Dubai" 
                             class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-700 ease-out" loading="lazy" decoding="async">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/20 to-transparent"></div>
                        
                        {{-- Floating Glass Badge --}}
                        <div class="absolute top-3 left-3 px-2.5 py-1 rounded-full bg-black/60 backdrop-blur-md border border-white/20 text-white text-[11px] font-bold flex items-center gap-1 shadow-md">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#D8F36B] shadow-[0_0_6px_#D8F36B] animate-pulse"></span>
                            <span>100% In-House Crew</span>
                        </div>

                        {{-- Index Number --}}
                        <div class="absolute bottom-2.5 right-3 px-2 py-0.5 rounded-md bg-black/50 backdrop-blur-md text-white text-[10px] font-mono font-bold tracking-widest uppercase">
                            01 / Workforce
                        </div>
                    </div>
                </div>

                {{-- Card Body --}}
                <div class="p-5 pt-3.5 pb-5 space-y-2 flex-1 flex flex-col justify-start">
                    <h3 class="text-base sm:text-lg font-bold font-heading text-[#0B2A22] tracking-tight group-hover:text-emerald-900 transition-colors leading-snug">
                        Vetted Full-Time Specialists
                    </h3>
                    <p class="text-xs sm:text-sm text-[#1E2E25] font-normal leading-relaxed">
                        Every technician, packer, and master carpenter is a direct, salaried MOVEXA employee. We strictly never use unverified casual laborers from the street.
                    </p>
                </div>
            </div>

            {{-- Pillar 2: 5-Ply Furniture & Fragile Protection --}}
            <div class="group relative rounded-3xl bg-white border border-[#E2E8E2] shadow-[0_4px_24px_rgba(16,59,48,0.05)] hover:shadow-[0_20px_45px_-12px_rgba(16,59,48,0.13),0_0_25px_rgba(216,243,107,0.22)] hover:border-[#103B30]/35 hover:-translate-y-1.5 transition-all duration-300 flex flex-col overflow-hidden">
                {{-- Permanent Top Shining Laser Line & Glow --}}
                <div class="absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent shadow-[0_0_12px_#D8F36B] z-20"></div>

                {{-- Diagonal Light Sweep Sheen --}}
                <div class="absolute -inset-full top-0 bg-gradient-to-r from-transparent via-white/50 to-transparent -skew-x-12 opacity-0 group-hover:opacity-100 group-hover:translate-x-[200%] transition-all duration-1000 ease-out pointer-events-none z-20"></div>

                {{-- Luxury Framed Inset Photo Container --}}
                <div class="p-3 sm:p-3.5 pb-0">
                    <div class="relative aspect-[16/10] rounded-2xl overflow-hidden bg-neutral-100 shadow-inner group/img">
                        <img src="{{ asset('images/gallery/movexa-gallery-sofa-living-room-wrapping.webp') }}" 
                             alt="MOVEXA 5-Ply Protective Furniture Wrapping in Dubai" 
                             class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-700 ease-out" loading="lazy" decoding="async">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/20 to-transparent"></div>
                        
                        {{-- Floating Glass Badge --}}
                        <div class="absolute top-3 left-3 px-2.5 py-1 rounded-full bg-black/60 backdrop-blur-md border border-white/20 text-white text-[11px] font-bold flex items-center gap-1 shadow-md">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#D8F36B] shadow-[0_0_6px_#D8F36B] animate-pulse"></span>
                            <span>5-Ply Export Packing</span>
                        </div>

                        {{-- Index Number --}}
                        <div class="absolute bottom-2.5 right-3 px-2 py-0.5 rounded-md bg-black/50 backdrop-blur-md text-white text-[10px] font-mono font-bold tracking-widest uppercase">
                            02 / Protection
                        </div>
                    </div>
                </div>

                {{-- Card Body --}}
                <div class="p-5 pt-3.5 pb-5 space-y-2 flex-1 flex flex-col justify-start">
                    <h3 class="text-base sm:text-lg font-bold font-heading text-[#0B2A22] tracking-tight group-hover:text-emerald-900 transition-colors leading-snug">
                        Multi-Layer Furniture Care
                    </h3>
                    <p class="text-xs sm:text-sm text-[#1E2E25] font-normal leading-relaxed">
                        Heavy-duty 5-ply cartons, virgin bubble wrap, and bespoke timber crating protect luxury upholstery, fine art, marble, and sensitive electronics.
                    </p>
                </div>
            </div>

            {{-- Pillar 3: Dedicated Enclosed GPS Fleet --}}
            <div class="group relative rounded-3xl bg-white border border-[#E2E8E2] shadow-[0_4px_24px_rgba(16,59,48,0.05)] hover:shadow-[0_20px_45px_-12px_rgba(16,59,48,0.13),0_0_25px_rgba(216,243,107,0.22)] hover:border-[#103B30]/35 hover:-translate-y-1.5 transition-all duration-300 flex flex-col overflow-hidden">
                {{-- Permanent Top Shining Laser Line & Glow --}}
                <div class="absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent shadow-[0_0_12px_#D8F36B] z-20"></div>

                {{-- Diagonal Light Sweep Sheen --}}
                <div class="absolute -inset-full top-0 bg-gradient-to-r from-transparent via-white/50 to-transparent -skew-x-12 opacity-0 group-hover:opacity-100 group-hover:translate-x-[200%] transition-all duration-1000 ease-out pointer-events-none z-20"></div>

                {{-- Luxury Framed Inset Photo Container --}}
                <div class="p-3 sm:p-3.5 pb-0">
                    <div class="relative aspect-[16/10] rounded-2xl overflow-hidden bg-neutral-100 shadow-inner group/img">
                        <img src="{{ asset('images/gallery/movexa-gallery-branded-truck-in-transit.webp') }}" 
                             alt="MOVEXA Branded Enclosed GPS Moving Truck in Dubai" 
                             class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-700 ease-out" loading="lazy" decoding="async">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/20 to-transparent"></div>
                        
                        {{-- Floating Glass Badge --}}
                        <div class="absolute top-3 left-3 px-2.5 py-1 rounded-full bg-black/60 backdrop-blur-md border border-white/20 text-white text-[11px] font-bold flex items-center gap-1 shadow-md">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#D8F36B] shadow-[0_0_6px_#D8F36B] animate-pulse"></span>
                            <span>GPS Tracked Fleet</span>
                        </div>

                        {{-- Index Number --}}
                        <div class="absolute bottom-2.5 right-3 px-2 py-0.5 rounded-md bg-black/50 backdrop-blur-md text-white text-[10px] font-mono font-bold tracking-widest uppercase">
                            03 / Logistics
                        </div>
                    </div>
                </div>

                {{-- Card Body --}}
                <div class="p-5 pt-3.5 pb-5 space-y-2 flex-1 flex flex-col justify-start">
                    <h3 class="text-base sm:text-lg font-bold font-heading text-[#0B2A22] tracking-tight group-hover:text-emerald-900 transition-colors leading-snug">
                        Enclosed Carpet-Padded Fleet
                    </h3>
                    <p class="text-xs sm:text-sm text-[#1E2E25] font-normal leading-relaxed">
                        Fully enclosed, dust-proof box trucks equipped with hydraulic tail-lifts and low-clearance access for basement parking across all Dubai towers.
                    </p>
                </div>
            </div>

            {{-- Pillar 4: Dubai Developer NOC & Permits --}}
            <div class="group relative rounded-3xl bg-white border border-[#E2E8E2] shadow-[0_4px_24px_rgba(16,59,48,0.05)] hover:shadow-[0_20px_45px_-12px_rgba(16,59,48,0.13),0_0_25px_rgba(216,243,107,0.22)] hover:border-[#103B30]/35 hover:-translate-y-1.5 transition-all duration-300 flex flex-col overflow-hidden">
                {{-- Permanent Top Shining Laser Line & Glow --}}
                <div class="absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent shadow-[0_0_12px_#D8F36B] z-20"></div>

                {{-- Diagonal Light Sweep Sheen --}}
                <div class="absolute -inset-full top-0 bg-gradient-to-r from-transparent via-white/50 to-transparent -skew-x-12 opacity-0 group-hover:opacity-100 group-hover:translate-x-[200%] transition-all duration-1000 ease-out pointer-events-none z-20"></div>

                {{-- Luxury Framed Inset Photo Container --}}
                <div class="p-3 sm:p-3.5 pb-0">
                    <div class="relative aspect-[16/10] rounded-2xl overflow-hidden bg-neutral-100 shadow-inner group/img">
                        <img src="{{ asset('images/gallery/movexa-gallery-villa-relocation-loading.webp') }}" 
                             alt="MOVEXA Villa Relocation Loading and Dubai Developer NOC Clearances" 
                             class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-700 ease-out" loading="lazy" decoding="async">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/20 to-transparent"></div>
                        
                        {{-- Floating Glass Badge --}}
                        <div class="absolute top-3 left-3 px-2.5 py-1 rounded-full bg-black/60 backdrop-blur-md border border-white/20 text-white text-[11px] font-bold flex items-center gap-1 shadow-md">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#D8F36B] shadow-[0_0_6px_#D8F36B] animate-pulse"></span>
                            <span>100% Gate Approval</span>
                        </div>

                        {{-- Index Number --}}
                        <div class="absolute bottom-2.5 right-3 px-2 py-0.5 rounded-md bg-black/50 backdrop-blur-md text-white text-[10px] font-mono font-bold tracking-widest uppercase">
                            04 / Compliance
                        </div>
                    </div>
                </div>

                {{-- Card Body --}}
                <div class="p-5 pt-3.5 pb-5 space-y-2 flex-1 flex flex-col justify-start">
                    <h3 class="text-base sm:text-lg font-bold font-heading text-[#0B2A22] tracking-tight group-hover:text-emerald-900 transition-colors leading-snug">
                        Dubai Developer NOC Permits
                    </h3>
                    <p class="text-xs sm:text-sm text-[#1E2E25] font-normal leading-relaxed">
                        Pre-approved documentation for Emaar, Nakheel, DAMAC, and Dubai Holding. Driver Emirates IDs and commercial trade license submitted in advance.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>
{{-- =========================================================================
     2. THE MOVEXA STORY & PURPOSE (PREMIUM, ATTRACTIVE & REFINED UI)
     ========================================================================= --}}
<section class="py-10 sm:py-12 lg:py-14 bg-white border-b border-[#E2E8E2] relative overflow-hidden">
    {{-- Subtle Ambient Radial Light Catch --}}
    <div class="absolute top-0 right-1/4 w-96 h-96 bg-[#EBF5E7]/40 rounded-full blur-3xl -z-0 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">
            
            {{-- Story Narrative (Left Column) --}}
            <div class="lg:col-span-7 space-y-5">
                
                {{-- Clean Luxury Pill Badge --}}
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#EBF5E7] border border-[#CFE8C7] text-[#0B2A22] text-xs font-bold uppercase tracking-wider shadow-2xs">
                    <i class="fa-solid fa-shield-halved text-[11px] text-[#0B2A22]"></i>
                    <span>Our Heritage &amp; Purpose</span>
                </div>

                {{-- Authoritative Headline with Moving Brand Accent --}}
                <div>
                    <h2 class="text-2xl sm:text-3xl lg:text-[34px] font-black font-heading text-[#0B2A22] tracking-tight leading-[1.2]">
                        More Than Moving Belongings:<br>
                        <span class="text-[#103B30]">Caring for Life’s Transitions.</span>
                    </h2>

                    {{-- Decorative Wavy Line Accent --}}
                    <div class="mt-2 flex items-center gap-2">
                        <svg class="w-16 h-2" viewBox="0 0 80 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 5C7 1 11 1 16 5C21 9 25 9 30 5C35 1 39 1 44 5C49 9 53 9 58 5C63 1 67 1 72 5C75 7.5 77 7.5 78 5" stroke="#B7E532" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                        <span class="w-1.5 h-1.5 rounded-full bg-[#0B2A22]"></span>
                    </div>
                </div>

                {{-- Lead Story Text --}}
                <div class="space-y-3 text-xs sm:text-sm text-[#1E2E25] leading-relaxed font-normal">
                    <p>
                        Relocating your home or business is one of life’s most pivotal moments. In a dynamic global metropolis like Dubai—where families move between luxury marina penthouses, quiet gated villa communities, and international borders daily—the moving experience is too frequently marred by unprofessional contractors, hidden fees on moving day, scratched furniture, and zero accountability.
                    </p>
                    <p>
                        MOVEXA was established to set a completely new standard in the UAE moving sector. We believe relocation should not feel chaotic or nerve-wracking. By combining Swiss-level organizational discipline, Japanese-grade packing craftsmanship, and deep expertise in Dubai master-developer logistics, we turn what used to be a stressful ordeal into a calm, orderly, and reassuring experience.
                    </p>
                </div>

                {{-- 3 Elevated Feature Cards with Brand Icons --}}
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-1">
                    <div class="p-3.5 sm:p-4 rounded-2xl bg-white border border-[#E2E8E2] shadow-sm space-y-2 card-hover group/c">
                        <div class="w-9 h-9 rounded-xl bg-[#103B30] text-[#D8F36B] flex items-center justify-center text-sm font-bold shadow-xs group-hover/c:scale-105 transition-transform">
                            <i class="fa-solid fa-file-invoice-dollar"></i>
                        </div>
                        <h4 class="text-xs sm:text-sm font-bold font-heading text-[#0B2A22]">Fixed Pricing</h4>
                        <p class="text-xs text-[#1E2E25] font-normal leading-snug">Binding written quote. Zero surprise fees on moving day.</p>
                    </div>

                    <div class="p-3.5 sm:p-4 rounded-2xl bg-white border border-[#E2E8E2] shadow-sm space-y-2 card-hover group/c">
                        <div class="w-9 h-9 rounded-xl bg-[#103B30] text-[#D8F36B] flex items-center justify-center text-sm font-bold shadow-xs group-hover/c:scale-105 transition-transform">
                            <i class="fa-solid fa-couch"></i>
                        </div>
                        <h4 class="text-xs sm:text-sm font-bold font-heading text-[#0B2A22]">Master Carpentry</h4>
                        <p class="text-xs text-[#1E2E25] font-normal leading-snug">Precision disassembly and rebuilding of modular wardrobes.</p>
                    </div>

                    <div class="p-3.5 sm:p-4 rounded-2xl bg-white border border-[#E2E8E2] shadow-sm space-y-2 card-hover group/c">
                        <div class="w-9 h-9 rounded-xl bg-[#103B30] text-[#D8F36B] flex items-center justify-center text-sm font-bold shadow-xs group-hover/c:scale-105 transition-transform">
                            <i class="fa-solid fa-boxes-packing"></i>
                        </div>
                        <h4 class="text-xs sm:text-sm font-bold font-heading text-[#0B2A22]">5-Ply Packing</h4>
                        <p class="text-xs text-[#1E2E25] font-normal leading-snug">Heavy-duty cartons and custom timber crates for fragile art.</p>
                    </div>
                </div>

            </div>

            {{-- Composed Visual Showcase (Right Column - Balanced Height & Proper Order) --}}
            <div class="lg:col-span-5 space-y-3.5 pt-1">
                
                {{-- Main Photographic Card --}}
                <div class="relative rounded-3xl overflow-hidden shadow-xl border-2 border-white aspect-[4/3] group bg-neutral-900">
                    <img src="{{ asset('images/why-choose-us/movexa-why-choose-us-team-trucks-pose.webp') }}" 
                         alt="MOVEXA Uniformed Crew and Fleet Ready for Moving in Dubai" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" loading="lazy" decoding="async">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                    
                    {{-- Floating Top-Right Badge --}}
                    <div class="absolute top-3.5 right-3.5 bg-white/95 backdrop-blur-md px-3 py-1.5 rounded-full shadow-md border border-white/60 text-[#0B2A22] flex items-center gap-1.5 text-xs font-bold">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span>Verified UAE Operations</span>
                    </div>

                    {{-- Bottom Feature Highlight Strip --}}
                    <div class="absolute bottom-3.5 left-3.5 right-3.5 bg-white/95 backdrop-blur-md p-3.5 rounded-2xl text-[#0B2A22] shadow-lg border border-white/80">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-xl bg-[#0B2A22] text-[#B7E532] flex items-center justify-center font-bold text-base flex-shrink-0">
                                <i class="fa-solid fa-truck-ramp-box"></i>
                            </div>
                            <div>
                                <span class="font-bold block text-xs sm:text-sm font-heading text-[#0B2A22]">Certified Moving Fleet &amp; Crew</span>
                                <span class="text-[11px] sm:text-xs text-[#203127] font-medium block">Enclosed GPS Trucks • Master Carpenters</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Twin Executive Metric Cards (Fills Height, Eliminates Dead Space) --}}
                <div class="grid grid-cols-2 gap-3">
                    <div class="p-4 sm:p-5 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm space-y-1 card-hover">
                        <div class="flex items-center justify-between">
                            <div class="text-2xl sm:text-3xl font-black font-heading text-[#0B2A22]">4.9 ★</div>
                            <span class="w-2 h-2 rounded-full bg-[#B7E532]"></span>
                        </div>
                        <div class="text-xs sm:text-sm font-bold text-[#0B2A22]">Customer Rating</div>
                        <div class="text-[11px] text-[#26372D]">Based on 4,500+ UAE moves</div>
                    </div>

                    <div class="p-4 sm:p-5 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm space-y-1 card-hover">
                        <div class="flex items-center justify-between">
                            <div class="text-2xl sm:text-3xl font-black font-heading text-[#0B2A22]">100%</div>
                            <span class="w-2 h-2 rounded-full bg-[#B7E532]"></span>
                        </div>
                        <div class="text-xs sm:text-sm font-bold text-[#0B2A22]">In-House Staff</div>
                        <div class="text-[11px] text-[#26372D]">Zero casual street labor</div>
                    </div>
                </div>

                {{-- Clean White Building Permit Coordination Card --}}
                <div class="p-3.5 sm:p-4 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm flex items-center justify-between gap-3 card-hover">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-2xl bg-[#EBF5E7] text-[#0B2A22] flex items-center justify-center text-base font-bold flex-shrink-0">
                            <i class="fa-solid fa-building-circle-check"></i>
                        </div>
                        <div>
                            <div class="text-xs sm:text-sm font-bold text-[#0B2A22]">Developer Gate Permit Support</div>
                            <div class="text-[11px] text-[#26372D]">Emaar, Nakheel, DAMAC, Dubai Holding</div>
                        </div>
                    </div>
                    <span class="text-[10px] font-bold uppercase tracking-wider text-[#0B2A22] bg-[#EBF5E7] border border-[#CFE8C7] px-2.5 py-1 rounded-full">
                        Approved
                    </span>
                </div>

            </div>

        </div>
    </div>
</section>

{{-- =========================================================================
     3. MISSION, VISION & GUIDING VALUES (PURE WHITE CARDS WITH BALANCED TYPOGRAPHY)
     ========================================================================= --}}
<section class="py-10 sm:py-12 lg:py-14 bg-white border-b border-[#E2E8E2]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Section Heading --}}
        <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-10 space-y-2.5">
            <span class="forest-badge">
                <i class="fa-solid fa-bullseye text-[11px]"></i> Guiding Principles
            </span>
            <h2 class="text-2xl sm:text-3xl lg:text-[34px] font-black font-heading text-[#0B2A22] tracking-tight">
                Our Mission, Vision &amp; Core Values
            </h2>
            <p class="text-sm sm:text-[15px] text-[#1F3027] font-medium max-w-2xl mx-auto leading-relaxed">
                Every estimate we submit, every box we tape, and every truck we dispatch is governed by a strict code of operational excellence.
            </p>
        </div>

        {{-- Mission & Vision Twin Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 mb-8">
            
            {{-- Mission Card --}}
            <div class="p-6 sm:p-8 rounded-3xl bg-white border border-[#E2E8E2] space-y-4 shadow-[0_8px_30px_rgba(0,0,0,0.04)] hover:shadow-xl hover:border-[#103B30]/30 transition-all duration-300 card-hover relative overflow-hidden group">
                {{-- Top Shining Hover Line --}}
                <div class="absolute top-0 inset-x-0 h-1.5 bg-gradient-to-r from-transparent via-[#D8F36B] to-[#103B30] opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                {{-- Soft Ambient Radial Corner Light --}}
                <div class="absolute top-0 right-0 w-44 h-44 bg-gradient-to-bl from-[#EBF5E7]/70 to-transparent rounded-bl-full pointer-events-none -z-0 transition-all duration-300 group-hover:scale-110"></div>
                
                {{-- Icon --}}
                <div class="relative z-10 w-13 h-13 rounded-2xl bg-[#103B30] text-[#D8F36B] flex items-center justify-center text-xl shadow-md group-hover:scale-105 transition-transform">
                    <i class="fa-solid fa-bullseye"></i>
                </div>

                {{-- Title & Meta --}}
                <div class="relative z-10 space-y-1.5">
                    <span class="inline-block text-[11px] sm:text-xs font-bold uppercase tracking-widest text-[#0B2A22] bg-[#EBF4EB] px-3 py-1 rounded-full border border-[#D5E5D5]">
                        Our Daily Purpose
                    </span>
                    <h3 class="text-2xl sm:text-3xl font-black font-heading text-[#0B2A22] tracking-tight">
                        Our Mission
                    </h3>
                </div>

                {{-- Body Text --}}
                <p class="relative z-10 text-sm sm:text-[15px] text-[#1E2E25] leading-relaxed font-normal">
                    To deliver reliable, stress-free moving and relocation services in Dubai and globally by upholding strict handling safety, providing honest communication, employing vetted full-time personnel, and treating every household with the respect it deserves.
                </p>

                {{-- Bottom Feature Bar --}}
                <div class="relative z-10 pt-3 border-t border-[#EEF2EE] flex items-center gap-2.5 text-xs sm:text-sm font-bold text-[#0B2A22]">
                    <i class="fa-solid fa-circle-check text-emerald-600 text-sm flex-shrink-0"></i>
                    <span>Guaranteed customer satisfaction on every move</span>
                </div>
            </div>

            {{-- Vision Card --}}
            <div class="p-6 sm:p-8 rounded-3xl bg-white border border-[#E2E8E2] space-y-4 shadow-[0_8px_30px_rgba(0,0,0,0.04)] hover:shadow-xl hover:border-[#103B30]/30 transition-all duration-300 card-hover relative overflow-hidden group">
                {{-- Top Shining Hover Line --}}
                <div class="absolute top-0 inset-x-0 h-1.5 bg-gradient-to-r from-transparent via-[#D8F36B] to-[#103B30] opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                {{-- Soft Ambient Radial Corner Light --}}
                <div class="absolute top-0 right-0 w-44 h-44 bg-gradient-to-bl from-[#EBF5E7]/70 to-transparent rounded-bl-full pointer-events-none -z-0 transition-all duration-300 group-hover:scale-110"></div>
                
                {{-- Icon --}}
                <div class="relative z-10 w-13 h-13 rounded-2xl bg-[#103B30] text-[#D8F36B] flex items-center justify-center text-xl shadow-md group-hover:scale-105 transition-transform">
                    <i class="fa-solid fa-eye"></i>
                </div>

                {{-- Title & Meta --}}
                <div class="relative z-10 space-y-1.5">
                    <span class="inline-block text-[11px] sm:text-xs font-bold uppercase tracking-widest text-[#0B2A22] bg-[#EBF4EB] px-3 py-1 rounded-full border border-[#D5E5D5]">
                        Our Long-Term Horizon
                    </span>
                    <h3 class="text-2xl sm:text-3xl font-black font-heading text-[#0B2A22] tracking-tight">
                        Our Vision
                    </h3>
                </div>

                {{-- Body Text --}}
                <p class="relative z-10 text-sm sm:text-[15px] text-[#1E2E25] leading-relaxed font-normal">
                    To be the Middle East's premier and most trusted moving and global relocation partner, recognized internationally for setting new benchmarks in customer satisfaction, master carpentry, sustainable packing, and seamless border transitions.
                </p>

                {{-- Bottom Feature Bar --}}
                <div class="relative z-10 pt-3 border-t border-[#EEF2EE] flex items-center gap-2.5 text-xs sm:text-sm font-bold text-[#0B2A22]">
                    <i class="fa-solid fa-circle-check text-emerald-600 text-sm flex-shrink-0"></i>
                    <span>Expanding reliable global trade routes and local partnerships</span>
                </div>
            </div>

        </div>

        {{-- 4 Core Values Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 sm:gap-6">
            <div class="p-5 sm:p-6 rounded-3xl bg-white border border-[#E2E8E2] space-y-2.5 shadow-sm hover:shadow-xl hover:border-[#103B30]/30 transition-all duration-300 card-hover">
                <span class="w-11 h-11 rounded-2xl bg-[#EBF4EB] text-[#103B30] flex items-center justify-center text-lg shadow-xs">
                    <i class="fa-solid fa-shield-halved"></i>
                </span>
                <h4 class="text-base sm:text-lg font-bold font-heading text-[#0B2A22]">Integrity First</h4>
                <p class="text-xs sm:text-sm text-[#1E2E25] leading-relaxed font-normal">
                    Upfront written contracts, binding proposals, and zero hidden surcharges on moving day. What we quote is what you pay.
                </p>
            </div>

            <div class="p-5 sm:p-6 rounded-3xl bg-white border border-[#E2E8E2] space-y-2.5 shadow-sm hover:shadow-xl hover:border-[#103B30]/30 transition-all duration-300 card-hover">
                <span class="w-11 h-11 rounded-2xl bg-[#EBF4EB] text-[#103B30] flex items-center justify-center text-lg shadow-xs">
                    <i class="fa-solid fa-hand-holding-heart"></i>
                </span>
                <h4 class="text-base sm:text-lg font-bold font-heading text-[#0B2A22]">White-Glove Care</h4>
                <p class="text-xs sm:text-sm text-[#1E2E25] leading-relaxed font-normal">
                    We treat your furnishings, luxury artwork, electronics, and memories with the exact same reverence as our own belongings.
                </p>
            </div>

            <div class="p-5 sm:p-6 rounded-3xl bg-white border border-[#E2E8E2] space-y-2.5 shadow-sm hover:shadow-xl hover:border-[#103B30]/30 transition-all duration-300 card-hover">
                <span class="w-11 h-11 rounded-2xl bg-[#EBF4EB] text-[#103B30] flex items-center justify-center text-lg shadow-xs">
                    <i class="fa-solid fa-user-check"></i>
                </span>
                <h4 class="text-base sm:text-lg font-bold font-heading text-[#0B2A22]">100% In-House Crew</h4>
                <p class="text-xs sm:text-sm text-[#1E2E25] leading-relaxed font-normal">
                    Zero casual labor hired from streets. Uniformed, background-verified specialists and master carpenters dedicated to your move.
                </p>
            </div>

            <div class="p-5 sm:p-6 rounded-3xl bg-white border border-[#E2E8E2] space-y-2.5 shadow-sm hover:shadow-xl hover:border-[#103B30]/30 transition-all duration-300 card-hover">
                <span class="w-11 h-11 rounded-2xl bg-[#EBF4EB] text-[#103B30] flex items-center justify-center text-lg shadow-xs">
                    <i class="fa-solid fa-earth-americas"></i>
                </span>
                <h4 class="text-base sm:text-lg font-bold font-heading text-[#0B2A22]">Global Standards</h4>
                <p class="text-xs sm:text-sm text-[#1E2E25] leading-relaxed font-normal">
                    IATA/FIDI-aligned packing methods, heavy-duty 5-ply cartons, export timber crating, and direct customs clearance worldwide.
                </p>
            </div>
        </div>

    </div>
</section>

{{-- =========================================================================
     4. WHAT WE DO: SHOWCASING OUR ENTIRE WEBSITE & SERVICES ECOSYSTEM
     ========================================================================= --}}
<section class="py-10 sm:py-12 lg:py-14 bg-white border-b border-[#E2E8E2] w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    {{-- Section Header --}}
    <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-10 space-y-2.5">
        <span class="forest-badge">
            <i class="fa-solid fa-truck-ramp-box text-[11px]"></i> Full Service Relocation Capabilities
        </span>
        <h2 class="text-2xl sm:text-3xl lg:text-[34px] font-black font-heading text-[#0B2A22] tracking-tight">
            Everything MOVEXA Does For You
        </h2>
        <p class="text-sm sm:text-[15px] text-[#1F3027] font-medium max-w-2xl mx-auto leading-relaxed">
            Whether shifting a compact studio in JLT, a luxury mansion on the Palm, a corporate head office, or shipping household goods across oceans, we provide an all-inclusive relocation ecosystem.
        </p>
    </div>

    {{-- 6 Service Pillars Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-7">
        
        {{-- Card 1: Home & Residential --}}
        <div class="bg-white rounded-3xl border border-[#E2E8E2] overflow-hidden shadow-sm card-hover flex flex-col justify-between group">
            <div>
                <div class="relative aspect-[16/10] overflow-hidden bg-gray-100">
                    <img src="{{ asset('images/services/movexa-service-home-moving.webp') }}" 
                         alt="MOVEXA Residential Home Moving in Dubai" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" decoding="async">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-md px-3 py-1 rounded-full text-xs font-bold text-[#0B2A22] shadow-md">
                        <i class="fa-solid fa-house-chimney mr-1 text-[#0B2A22]"></i> Residential
                    </span>
                </div>
                <div class="p-5 sm:p-6 space-y-2.5">
                    <h3 class="text-base sm:text-lg font-bold font-heading text-[#0B2A22] group-hover:text-[#103B30] transition-colors">
                        Home & Residential Shifting
                    </h3>
                    <p class="text-xs sm:text-sm text-[#1E2E25] leading-relaxed font-normal">
                        Comprehensive household moving for apartments, townhouses, and residential villas across all Dubai communities and the UAE.
                    </p>
                    <ul class="text-xs sm:text-[13px] font-medium text-[#14231B] space-y-1.5 pt-1">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i> Color-coded box inventory tracking</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i> Furniture disassembly & reassembly</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i> Wardrobe hanging garment boxes</li>
                    </ul>
                </div>
            </div>
            <div class="p-5 sm:p-6 pt-0">
                <a href="{{ route('services.show', 'home-moving') }}" 
                   class="inline-flex items-center justify-center gap-2 w-full py-2.5 rounded-full border border-[#103B30] text-[#103B30] hover:bg-[#103B30] hover:text-white text-xs font-bold transition-colors">
                    <span>Learn About Home Moving</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>
            </div>
        </div>

        {{-- Card 2: Luxury Villa Moving --}}
        <div class="bg-white rounded-3xl border border-[#E2E8E2] overflow-hidden shadow-sm card-hover flex flex-col justify-between group">
            <div>
                <div class="relative aspect-[16/10] overflow-hidden bg-gray-100">
                    <img src="{{ asset('images/services/movexa-service-villa-relocation.webp') }}" 
                         alt="MOVEXA Luxury Villa Relocation Dubai" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" decoding="async">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-md px-3 py-1 rounded-full text-xs font-bold text-[#0B2A22] shadow-md">
                        <i class="fa-solid fa-gem mr-1 text-[#0B2A22]"></i> Luxury Estates
                    </span>
                </div>
                <div class="p-5 sm:p-6 space-y-2.5">
                    <h3 class="text-base sm:text-lg font-bold font-heading text-[#0B2A22] group-hover:text-[#103B30] transition-colors">
                        Luxury Villa Relocations
                    </h3>
                    <p class="text-xs sm:text-sm text-[#1E2E25] leading-relaxed font-normal">
                        Dedicated fleet teams for large-scale residences in Palm Jumeirah, Emirates Hills, Arabian Ranches, and Dubai Hills Estate.
                    </p>
                    <ul class="text-xs sm:text-[13px] font-medium text-[#14231B] space-y-1.5 pt-1">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i> Multi-truck synchronized fleet</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i> Garden & outdoor furniture protection</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i> Master carpenters for modular systems</li>
                    </ul>
                </div>
            </div>
            <div class="p-5 sm:p-6 pt-0">
                <a href="{{ route('services.show', 'villa-relocation') }}" 
                   class="inline-flex items-center justify-center gap-2 w-full py-2.5 rounded-full border border-[#103B30] text-[#103B30] hover:bg-[#103B30] hover:text-white text-xs font-bold transition-colors">
                    <span>Learn About Villa Relocation</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>
            </div>
        </div>

        {{-- Card 3: Apartment & High-Rise --}}
        <div class="bg-white rounded-3xl border border-[#E2E8E2] overflow-hidden shadow-sm card-hover flex flex-col justify-between group">
            <div>
                <div class="relative aspect-[16/10] overflow-hidden bg-gray-100">
                    <img src="{{ asset('images/services/movexa-service-apartment-moving.webp') }}" 
                         alt="MOVEXA High-Rise Apartment Moving Dubai Marina Downtown" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" decoding="async">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-md px-3 py-1 rounded-full text-xs font-bold text-[#0B2A22] shadow-md">
                        <i class="fa-solid fa-building mr-1 text-[#0B2A22]"></i> High-Rise Towers
                    </span>
                </div>
                <div class="p-5 sm:p-6 space-y-2.5">
                    <h3 class="text-base sm:text-lg font-bold font-heading text-[#0B2A22] group-hover:text-[#103B30] transition-colors">
                        Apartment & Penthouse Shifting
                    </h3>
                    <p class="text-xs sm:text-sm text-[#1E2E25] leading-relaxed font-normal">
                        Precision logistics in Dubai Marina, Downtown, DIFC, and Business Bay towers with strict loading-dock and elevator management.
                    </p>
                    <ul class="text-xs sm:text-[13px] font-medium text-[#14231B] space-y-1.5 pt-1">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i> Developer NOC & gate pass coordination</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i> Elevator padding & floor runners</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i> Low-clearance basement truck access</li>
                    </ul>
                </div>
            </div>
            <div class="p-5 sm:p-6 pt-0">
                <a href="{{ route('services.show', 'apartment-moving') }}" 
                   class="inline-flex items-center justify-center gap-2 w-full py-2.5 rounded-full border border-[#103B30] text-[#103B30] hover:bg-[#103B30] hover:text-white text-xs font-bold transition-colors">
                    <span>Learn About Apartment Moving</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>
            </div>
        </div>

        {{-- Card 4: Corporate & Office --}}
        <div class="bg-white rounded-3xl border border-[#E2E8E2] overflow-hidden shadow-sm card-hover flex flex-col justify-between group">
            <div>
                <div class="relative aspect-[16/10] overflow-hidden bg-gray-100">
                    <img src="{{ asset('images/services/movexa-service-office-relocation.webp') }}" 
                         alt="MOVEXA Corporate Office Shifting Dubai" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" decoding="async">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-md px-3 py-1 rounded-full text-xs font-bold text-[#0B2A22] shadow-md">
                        <i class="fa-solid fa-briefcase mr-1 text-[#0B2A22]"></i> Corporate
                    </span>
                </div>
                <div class="p-5 sm:p-6 space-y-2.5">
                    <h3 class="text-base sm:text-lg font-bold font-heading text-[#0B2A22] group-hover:text-[#103B30] transition-colors">
                        Corporate & Office Relocation
                    </h3>
                    <p class="text-xs sm:text-sm text-[#1E2E25] leading-relaxed font-normal">
                        Zero-business-downtime workplace moves, weekend schedules, workstation reconfiguration, and secure IT equipment relocation.
                    </p>
                    <ul class="text-xs sm:text-[13px] font-medium text-[#14231B] space-y-1.5 pt-1">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i> Overnight & weekend execution</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i> IT rack & desktop anti-static wraps</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i> Numbered workstation tagging</li>
                    </ul>
                </div>
            </div>
            <div class="p-5 sm:p-6 pt-0">
                <a href="{{ route('services.show', 'office-relocation') }}" 
                   class="inline-flex items-center justify-center gap-2 w-full py-2.5 rounded-full border border-[#103B30] text-[#103B30] hover:bg-[#103B30] hover:text-white text-xs font-bold transition-colors">
                    <span>Learn About Office Moving</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>
            </div>
        </div>

        {{-- Card 5: International Moving --}}
        <div class="bg-white rounded-3xl border border-[#E2E8E2] overflow-hidden shadow-sm card-hover flex flex-col justify-between group">
            <div>
                <div class="relative aspect-[16/10] overflow-hidden bg-gray-100">
                    <img src="{{ asset('images/services/movexa-service-international-moving.webp') }}" 
                         alt="MOVEXA International Relocation from Dubai to Worldwide" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" decoding="async">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-md px-3.5 py-1.5 rounded-full text-xs font-bold text-[#0B2A22] shadow-md">
                        <i class="fa-solid fa-plane-departure mr-1 text-[#0B2A22]"></i> Worldwide
                    </span>
                </div>
                <div class="p-5 sm:p-6 space-y-2.5">
                    <h3 class="text-base sm:text-lg font-bold font-heading text-[#0B2A22] group-hover:text-[#103B30] transition-colors">
                        International Door-to-Door Moving
                    </h3>
                    <p class="text-xs sm:text-sm text-[#1E2E25] leading-relaxed font-normal">
                        Seamless sea container (FCL & LCL) and air cargo relocations to the UK, USA, Europe, Canada, Australia, Saudi Arabia, and 120+ nations.
                    </p>
                    <ul class="text-xs sm:text-[13px] font-medium text-[#14231B] space-y-1.5 pt-1">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i> Seaworthy multi-layer export packing</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i> Complete customs documentation clearance</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i> Destination delivery & room placement</li>
                    </ul>
                </div>
            </div>
            <div class="p-5 sm:p-6 pt-0">
                <a href="{{ route('international-moving') }}" 
                   class="inline-flex items-center justify-center gap-2 w-full py-2.5 rounded-full border border-[#103B30] text-[#103B30] hover:bg-[#103B30] hover:text-white text-xs font-bold transition-colors">
                    <span>Explore International Routes</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>
            </div>
        </div>

        {{-- Card 6: Storage & Packing Solutions --}}
        <div class="bg-white rounded-3xl border border-[#E2E8E2] overflow-hidden shadow-sm card-hover flex flex-col justify-between group">
            <div>
                <div class="relative aspect-[16/10] overflow-hidden bg-gray-100">
                    <img src="{{ asset('images/services/movexa-service-storage-solutions.webp') }}" 
                         alt="MOVEXA Climate-Controlled Storage and Custom Timber Crating Dubai" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" decoding="async">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-md px-3.5 py-1.5 rounded-full text-xs font-bold text-[#0B2A22] shadow-md">
                        <i class="fa-solid fa-warehouse mr-1 text-[#0B2A22]"></i> Storage & Crates
                    </span>
                </div>
                <div class="p-5 sm:p-6 space-y-2.5">
                    <h3 class="text-base sm:text-lg font-bold font-heading text-[#0B2A22] group-hover:text-[#103B30] transition-colors">
                        Custom Crating & Secure Storage
                    </h3>
                    <p class="text-xs sm:text-sm text-[#1E2E25] leading-relaxed font-normal">
                        Tailored ISPM-15 heat-treated timber crates for fine art, mirrors, and chandeliers, plus 24/7 CCTV climate-controlled Dubai storage.
                    </p>
                    <ul class="text-xs sm:text-[13px] font-medium text-[#14231B] space-y-1.5 pt-1">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i> 24/7 CCTV & pest-controlled facility</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i> Flexible monthly or long-term units</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i> Bespoke wooden crates for marble & fine art</li>
                    </ul>
                </div>
            </div>
            <div class="p-5 sm:p-6 pt-0">
                <a href="{{ route('services.show', 'storage-solutions') }}" 
                   class="inline-flex items-center justify-center gap-2 w-full py-2.5 rounded-full border border-[#103B30] text-[#103B30] hover:bg-[#103B30] hover:text-white text-xs font-bold transition-colors">
                    <span>Learn About Storage Solutions</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>
            </div>
        </div>

    </div>

    {{-- Bottom Interactive Hub Callout --}}
    <div class="mt-10 sm:mt-12 p-6 sm:p-7 rounded-3xl bg-[#08271F] text-white flex flex-col md:flex-row items-center justify-between gap-5 shadow-xl">
        <div class="space-y-1.5 text-center md:text-left">
            <span class="text-xs font-bold uppercase tracking-wider text-[#D8F36B]">Need Specialized Moving?</span>
            <h4 class="text-xl sm:text-2xl font-black font-heading text-white">
                Looking for our full directory of services and moving rates?
            </h4>
            <p class="text-xs sm:text-sm text-white/85 font-normal">
                Explore our full suite of moving solutions or speak directly with our Senior Move Coordinator for customized logistics.
            </p>
        </div>
        <div class="flex flex-wrap items-center justify-center gap-3 flex-shrink-0">
            <a href="{{ route('services.index') }}" 
               class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full bg-white text-[#08271F] hover:bg-[#D8F36B] text-xs font-bold transition-all duration-200 shadow-md">
                <span>View All Services</span>
                <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
            <button type="button" 
                    onclick="openQuoteModal()" 
                    class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full bg-[#B7E532] text-[#073B2E] hover:bg-[#cbf54a] text-xs font-bold transition-all duration-200 shadow-md">
                <i class="fa-solid fa-calculator text-xs"></i>
                <span>Instant Estimate</span>
            </button>
        </div>
    </div>
    </div>
</section>


{{-- =========================================================================
     6. THE MOVEXA 4-STEP RELOCATION JOURNEY (HOW WE WORK - PROPER VISUAL CARDS)
     ========================================================================= --}}
<section class="py-10 sm:py-12 lg:py-14 bg-white border-b border-[#E2E8E2] w-full relative overflow-hidden">
    {{-- Ambient Light Sheen --}}
    <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-[900px] h-[340px] bg-gradient-to-r from-[#D8F36B]/15 via-[#103B30]/10 to-[#D8F36B]/15 rounded-full blur-3xl -z-0 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        {{-- Section Header: High-Impact, Meaningful & Authoritative --}}
        <div class="text-center max-w-2xl mx-auto mb-8 sm:mb-10 space-y-3">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white border border-[#D5E2D5] shadow-2xs text-[#0B2A22] text-[11px] sm:text-xs font-bold tracking-wide uppercase">
                <span class="w-2 h-2 rounded-full bg-[#103B30] shadow-[0_0_8px_#103B30] animate-pulse"></span>
                <span>Simple 4-Step Relocation Journey</span>
            </div>
            <h2 class="text-2xl sm:text-3xl lg:text-[34px] font-black font-heading text-[#0B2A22] tracking-tight leading-tight">
                Your Move, Made Simple &amp; Stress-Free
            </h2>
            <p class="text-sm sm:text-[15px] text-[#1F3027] font-medium max-w-xl mx-auto leading-relaxed">
                From your first quote until the last box is placed and unpacked, our transparent 4-stage workflow keeps you in full control with zero surprises.
            </p>
        </div>

        {{-- 4 Ultra-Premium Framed Visual Process Cards Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 items-stretch">
            
            {{-- Step 1: Request a Quote & Free Survey --}}
            <div class="group relative rounded-3xl bg-white border border-[#E2E8E2] shadow-[0_4px_24px_rgba(16,59,48,0.05)] hover:shadow-[0_20px_45px_-12px_rgba(16,59,48,0.13),0_0_25px_rgba(216,243,107,0.22)] hover:border-[#103B30]/35 hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between overflow-hidden h-full">
                {{-- Top Shining Laser Line --}}
                <div class="absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent shadow-[0_0_12px_#D8F36B] z-20"></div>

                <div>
                    {{-- Luxury Inset Photographic Header --}}
                    <div class="p-3 sm:p-3.5 pb-0">
                        <div class="relative aspect-[16/10] rounded-2xl overflow-hidden bg-neutral-100 shadow-inner group/img">
                            <img src="{{ asset('images/why-choose-us/movexa-why-choose-us-team-skyline.webp') }}" 
                                 alt="MOVEXA Free Relocation Survey and Volume Calculation in Dubai" 
                                 class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-700 ease-out" loading="lazy" decoding="async">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/25 to-transparent"></div>
                            
                            {{-- Floating Glass Badge --}}
                            <div class="absolute top-3 left-3 px-3 py-1 rounded-full bg-black/60 backdrop-blur-md border border-white/20 text-white text-xs font-bold flex items-center gap-1.5 shadow-md">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#D8F36B] shadow-[0_0_6px_#D8F36B] animate-pulse"></span>
                                <span>Step 01 &bull; Instant Survey</span>
                            </div>

                            {{-- Index Tag --}}
                            <div class="absolute bottom-2.5 right-3 px-2.5 py-0.5 rounded-md bg-black/60 backdrop-blur-md text-white text-xs font-mono font-black tracking-widest uppercase">
                                01 / ESTIMATE
                            </div>
                        </div>
                    </div>

                    {{-- Card Content Body --}}
                    <div class="p-5 sm:p-6 pt-4 sm:pt-5 space-y-2.5">
                        <h3 class="text-base sm:text-lg font-bold font-heading text-[#0B2A22] tracking-tight group-hover:text-[#103B30] transition-colors leading-snug">
                            Request a Quote
                        </h3>
                        <p class="text-xs sm:text-sm text-[#1E2E25] leading-relaxed font-normal">
                            Tell us where and when you're moving. Connect via WhatsApp or online for an instant 3D video survey or in-person consultation to calculate exact volume.
                        </p>

                        {{-- Trust Checkmarks --}}
                        <div class="pt-2 space-y-1.5 border-t border-[#E2E8E2]/70">
                            <div class="flex items-center gap-2 text-xs font-semibold text-[#14231B]">
                                <i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i>
                                <span>Fast same-day response</span>
                            </div>
                            <div class="flex items-center gap-2 text-xs font-semibold text-[#14231B]">
                                <i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i>
                                <span>Zero-obligation survey</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card Bottom Footer --}}
                <div class="px-5 sm:px-6 pb-4 pt-3 border-t border-[#E2E8E2] flex items-center justify-between text-xs font-bold text-[#0B2A22] bg-white">
                    <span class="flex items-center gap-1.5">
                        <i class="fa-solid fa-shield-halved text-xs text-[#103B30]"></i>
                        <span>Fixed Quote Guarantee</span>
                    </span>
                    <i class="fa-solid fa-arrow-right text-xs text-[#103B30] group-hover:translate-x-1 transition-all"></i>
                </div>
            </div>

            {{-- Step 2: Dedicated Move Plan & Developer NOC --}}
            <div class="group relative rounded-3xl bg-white border border-[#E2E8E2] shadow-[0_4px_24px_rgba(16,59,48,0.05)] hover:shadow-[0_20px_45px_-12px_rgba(16,59,48,0.13),0_0_25px_rgba(216,243,107,0.22)] hover:border-[#103B30]/35 hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between overflow-hidden h-full">
                {{-- Top Shining Laser Line --}}
                <div class="absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent shadow-[0_0_12px_#D8F36B] z-20"></div>

                <div>
                    {{-- Luxury Inset Photographic Header --}}
                    <div class="p-3 sm:p-3.5 pb-0">
                        <div class="relative aspect-[16/10] rounded-2xl overflow-hidden bg-neutral-100 shadow-inner group/img">
                            <img src="{{ asset('images/gallery/movexa-gallery-crew-fleet-ramp.webp') }}" 
                                 alt="MOVEXA Move Planning, Dedicated Coordinator, and Logistics Scheduling" 
                                 class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-700 ease-out" loading="lazy" decoding="async">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/25 to-transparent"></div>
                            
                            {{-- Floating Glass Badge --}}
                            <div class="absolute top-3 left-3 px-3 py-1 rounded-full bg-black/60 backdrop-blur-md border border-white/20 text-white text-xs font-bold flex items-center gap-1.5 shadow-md">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#D8F36B] shadow-[0_0_6px_#D8F36B] animate-pulse"></span>
                                <span>Step 02 &bull; Move Plan</span>
                            </div>

                            {{-- Index Tag --}}
                            <div class="absolute bottom-2.5 right-3 px-2.5 py-0.5 rounded-md bg-black/60 backdrop-blur-md text-white text-xs font-mono font-black tracking-widest uppercase">
                                02 / PLANNING
                            </div>
                        </div>
                    </div>

                    {{-- Card Content Body --}}
                    <div class="p-5 sm:p-6 pt-4 sm:pt-5 space-y-2.5">
                        <h3 class="text-base sm:text-lg font-bold font-heading text-[#0B2A22] tracking-tight group-hover:text-[#103B30] transition-colors leading-snug">
                            Plan Your Move
                        </h3>
                        <p class="text-xs sm:text-sm text-[#1E2E25] leading-relaxed font-normal">
                            Your relocation advisor prepares a binding proposal, reserves service elevators, handles developer NOC permits (Emaar, Nakheel, DAMAC), and plans logistics.
                        </p>

                        {{-- Trust Checkmarks --}}
                        <div class="pt-2 space-y-1.5 border-t border-[#E2E8E2]/70">
                            <div class="flex items-center gap-2 text-xs font-semibold text-[#14231B]">
                                <i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i>
                                <span>Developer NOC guidance</span>
                            </div>
                            <div class="flex items-center gap-2 text-xs font-semibold text-[#14231B]">
                                <i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i>
                                <span>No surprise extra costs</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card Bottom Footer --}}
                <div class="px-5 sm:px-6 pb-4 pt-3 border-t border-[#E2E8E2] flex items-center justify-between text-xs font-bold text-[#0B2A22] bg-white">
                    <span class="flex items-center gap-1.5">
                        <i class="fa-solid fa-clipboard-check text-xs text-[#103B30]"></i>
                        <span>100% Gate Clearance</span>
                    </span>
                    <i class="fa-solid fa-arrow-right text-xs text-[#103B30] group-hover:translate-x-1 transition-all"></i>
                </div>
            </div>

            {{-- Step 3: Packing, Master Carpentry & Transit --}}
            <div class="group relative rounded-3xl bg-white border border-[#E2E8E2] shadow-[0_4px_24px_rgba(16,59,48,0.05)] hover:shadow-[0_20px_45px_-12px_rgba(16,59,48,0.13),0_0_25px_rgba(216,243,107,0.22)] hover:border-[#103B30]/35 hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between overflow-hidden h-full">
                {{-- Top Shining Laser Line --}}
                <div class="absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent shadow-[0_0_12px_#D8F36B] z-20"></div>

                <div>
                    {{-- Luxury Inset Photographic Header --}}
                    <div class="p-3 sm:p-3.5 pb-0">
                        <div class="relative aspect-[16/10] rounded-2xl overflow-hidden bg-neutral-100 shadow-inner group/img">
                            <img src="{{ asset('images/gallery/movexa-gallery-sofa-living-room-wrapping.webp') }}" 
                                 alt="MOVEXA Master Carpentry, 5-Ply Packing and Protective Wrapping" 
                                 class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-700 ease-out" loading="lazy" decoding="async">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/25 to-transparent"></div>
                            
                            {{-- Floating Glass Badge --}}
                            <div class="absolute top-3 left-3 px-3 py-1 rounded-full bg-black/60 backdrop-blur-md border border-white/20 text-white text-xs font-bold flex items-center gap-1.5 shadow-md">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#D8F36B] shadow-[0_0_6px_#D8F36B] animate-pulse"></span>
                                <span>Step 03 &bull; Packing &amp; Transit</span>
                            </div>

                            {{-- Index Tag --}}
                            <div class="absolute bottom-2.5 right-3 px-2.5 py-0.5 rounded-md bg-black/60 backdrop-blur-md text-white text-xs font-mono font-black tracking-widest uppercase">
                                03 / TRANSIT
                            </div>
                        </div>
                    </div>

                    {{-- Card Content Body --}}
                    <div class="p-5 sm:p-6 pt-4 sm:pt-5 space-y-2.5">
                        <h3 class="text-base sm:text-lg font-bold font-heading text-[#0B2A22] tracking-tight group-hover:text-[#103B30] transition-colors leading-snug">
                            Packing &amp; Collection
                        </h3>
                        <p class="text-xs sm:text-sm text-[#1E2E25] leading-relaxed font-normal">
                            Certified master carpenters dismantle complex furniture while our crew wraps sofas, boxed china, and electronics before loading into GPS-monitored trucks.
                        </p>

                        {{-- Trust Checkmarks --}}
                        <div class="pt-2 space-y-1.5 border-t border-[#E2E8E2]/70">
                            <div class="flex items-center gap-2 text-xs font-semibold text-[#14231B]">
                                <i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i>
                                <span>Master carpentry included</span>
                            </div>
                            <div class="flex items-center gap-2 text-xs font-semibold text-[#14231B]">
                                <i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i>
                                <span>5-ply export-grade packing</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card Bottom Footer --}}
                <div class="px-5 sm:px-6 pb-4 pt-3 border-t border-[#E2E8E2] flex items-center justify-between text-xs font-bold text-[#0B2A22] bg-white">
                    <span class="flex items-center gap-1.5">
                        <i class="fa-solid fa-truck text-xs text-[#103B30]"></i>
                        <span>Carpet-Lined GPS Fleet</span>
                    </span>
                    <i class="fa-solid fa-arrow-right text-xs text-[#103B30] group-hover:translate-x-1 transition-all"></i>
                </div>
            </div>

            {{-- Step 4: Delivery, Setup & Handover --}}
            <div class="group relative rounded-3xl bg-white border border-[#E2E8E2] shadow-[0_4px_24px_rgba(16,59,48,0.05)] hover:shadow-[0_20px_45px_-12px_rgba(16,59,48,0.13),0_0_25px_rgba(216,243,107,0.22)] hover:border-[#103B30]/35 hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between overflow-hidden h-full">
                {{-- Top Shining Laser Line --}}
                <div class="absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent shadow-[0_0_12px_#D8F36B] z-20"></div>

                <div>
                    {{-- Luxury Inset Photographic Header --}}
                    <div class="p-3 sm:p-3.5 pb-0">
                        <div class="relative aspect-[16/10] rounded-2xl overflow-hidden bg-neutral-100 shadow-inner group/img">
                            <img src="{{ asset('images/hero/movexa-hero-villa-unloading.webp') }}" 
                                 alt="MOVEXA Furniture Reassembly, Unpacking and White-Glove Handover" 
                                 class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-700 ease-out" loading="lazy" decoding="async">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/25 to-transparent"></div>
                            
                            {{-- Floating Glass Badge --}}
                            <div class="absolute top-3 left-3 px-3 py-1 rounded-full bg-black/60 backdrop-blur-md border border-white/20 text-white text-xs font-bold flex items-center gap-1.5 shadow-md">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#D8F36B] shadow-[0_0_6px_#D8F36B] animate-pulse"></span>
                                <span>Step 04 &bull; Final Setup</span>
                            </div>

                            {{-- Index Tag --}}
                            <div class="absolute bottom-2.5 right-3 px-2.5 py-0.5 rounded-md bg-black/60 backdrop-blur-md text-white text-xs font-mono font-black tracking-widest uppercase">
                                04 / SETUP
                            </div>
                        </div>
                    </div>

                    {{-- Card Content Body --}}
                    <div class="p-5 sm:p-6 pt-4 sm:pt-5 space-y-2.5">
                        <h3 class="text-base sm:text-lg font-bold font-heading text-[#0B2A22] tracking-tight group-hover:text-[#103B30] transition-colors leading-snug">
                            Delivery &amp; Setup
                        </h3>
                        <p class="text-xs sm:text-sm text-[#1E2E25] leading-relaxed font-normal">
                            At your new destination, furniture is placed and reassembled in chosen rooms, delicate items unpacked, packing debris hauled away, and full sign-off completed.
                        </p>

                        {{-- Trust Checkmarks --}}
                        <div class="pt-2 space-y-1.5 border-t border-[#E2E8E2]/70">
                            <div class="flex items-center gap-2 text-xs font-semibold text-[#14231B]">
                                <i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i>
                                <span>Complete bed/wardrobe assembly</span>
                            </div>
                            <div class="flex items-center gap-2 text-xs font-semibold text-[#14231B]">
                                <i class="fa-solid fa-circle-check text-[#103B30] text-xs"></i>
                                <span>100% debris & box haul-away</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card Bottom Footer --}}
                <div class="px-5 sm:px-6 pb-4 pt-3 border-t border-[#E2E8E2] flex items-center justify-between text-xs font-bold text-[#0B2A22] bg-white">
                    <span class="flex items-center gap-1.5">
                        <i class="fa-solid fa-house-chimney text-xs text-[#103B30]"></i>
                        <span>Turnkey White-Glove Handover</span>
                    </span>
                    <i class="fa-solid fa-arrow-right text-xs text-[#103B30] group-hover:translate-x-1 transition-all"></i>
                </div>
            </div>

        </div>

        {{-- Bottom Operational Assurance Banner --}}
        <div class="mt-10 p-5 sm:p-6 rounded-2xl sm:rounded-3xl bg-white border border-[#E2E8E2] shadow-sm flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-3.5 text-left">
                <div class="w-11 h-11 rounded-2xl bg-[#EBF2EB] text-[#103B30] flex items-center justify-center text-lg shrink-0">
                    <i class="fa-solid fa-phone-volume"></i>
                </div>
                <div>
                    <h4 class="text-sm sm:text-base font-bold text-[#0B2A22]">Need a custom relocation timeline or instant move plan?</h4>
                    <p class="text-xs sm:text-[13px] text-[#1E2E25] font-normal">Our Dubai relocation specialists are on standby 7 days a week to guide you.</p>
                </div>
            </div>
            <div class="flex items-center gap-2.5 shrink-0 w-full sm:w-auto">
                <button type="button" 
                        onclick="openQuoteModal()" 
                        class="btn-forest text-xs font-bold px-5 py-3 rounded-full w-full sm:w-auto flex items-center justify-center gap-2">
                    <i class="fa-solid fa-calculator text-xs"></i>
                    <span>Get Moving Quote</span>
                </button>
            </div>
        </div>

    </div>
</section>

{{-- =========================================================================
     7. OPERATIONAL INFRASTRUCTURE & PACKING EXCELLENCE (VISUAL PROOF)
     ========================================================================= --}}
<section class="py-10 sm:py-12 lg:py-14 bg-white border-b border-[#E2E8E2]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-8 sm:mb-10 space-y-3">
            <span class="forest-badge text-[11px] sm:text-xs">
                <i class="fa-solid fa-boxes-packing text-xs"></i> Operational Rigor
            </span>
            <h2 class="text-2xl sm:text-3xl lg:text-[34px] font-black font-heading text-[#0B2A22] tracking-tight">
                Our Fleet, Equipment &amp; Material Standards
            </h2>
            <p class="text-sm sm:text-[15px] text-[#1F3027] font-medium max-w-2xl mx-auto leading-relaxed">
                We do not compromise on packaging integrity. Here is a look at the equipment that safeguards your belongings on every trip.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            {{-- Item 1: Moving Trucks --}}
            <div class="rounded-3xl border border-[#E2E8E2] bg-white shadow-sm hover:shadow-md overflow-hidden card-hover group">
                <div class="aspect-[4/3] overflow-hidden bg-neutral-50">
                    <img src="{{ asset('images/gallery/movexa-gallery-branded-truck-in-transit.webp') }}" 
                         alt="MOVEXA Closed Box Moving Truck in Transit Dubai" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" decoding="async">
                </div>
                <div class="p-5 sm:p-6 space-y-2">
                    <span class="text-[11px] sm:text-xs font-bold text-[#103B30] uppercase tracking-wider block">Modern Fleet</span>
                    <h4 class="font-bold text-[#0B2A22] text-sm sm:text-base font-heading">Enclosed GPS Trucks</h4>
                    <p class="text-xs sm:text-[13px] text-[#1E2E25] font-normal leading-relaxed">
                        Carpet-lined interior walls, hydraulic lift ramps, and interior ratchet cargo bars to prevent shifting during transit.
                    </p>
                </div>
            </div>

            {{-- Item 2: Fragile Packing --}}
            <div class="rounded-3xl border border-[#E2E8E2] bg-white shadow-sm hover:shadow-md overflow-hidden card-hover group">
                <div class="aspect-[4/3] overflow-hidden bg-neutral-50">
                    <img src="{{ asset('images/gallery/movexa-gallery-fragile-room-packing.webp') }}" 
                         alt="MOVEXA Fragile China and Glassware Packing" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" decoding="async">
                </div>
                <div class="p-5 sm:p-6 space-y-2">
                    <span class="text-[11px] sm:text-xs font-bold text-[#103B30] uppercase tracking-wider block">Specialist Protection</span>
                    <h4 class="font-bold text-[#0B2A22] text-sm sm:text-base font-heading">5-Ply Fragile Crating</h4>
                    <p class="text-xs sm:text-[13px] text-[#1E2E25] font-normal leading-relaxed">
                        Multi-layer cellular division boxes, acid-free tissue paper, and bubble wrapping for crystal, porcelain, and china.
                    </p>
                </div>
            </div>

            {{-- Item 3: Furniture Wrap --}}
            <div class="rounded-3xl border border-[#E2E8E2] bg-white shadow-sm hover:shadow-md overflow-hidden card-hover group">
                <div class="aspect-[4/3] overflow-hidden bg-neutral-50">
                    <img src="{{ asset('images/gallery/movexa-gallery-mattress-protective-wrap.webp') }}" 
                         alt="MOVEXA Mattress and Upholstery Protective Wrapping" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" decoding="async">
                </div>
                <div class="p-5 sm:p-6 space-y-2">
                    <span class="text-[11px] sm:text-xs font-bold text-[#103B30] uppercase tracking-wider block">Cleanliness & Hygiene</span>
                    <h4 class="font-bold text-[#0B2A22] text-sm sm:text-base font-heading">Mattress & Sofa Armor</h4>
                    <p class="text-xs sm:text-[13px] text-[#1E2E25] font-normal leading-relaxed">
                        Heavy-gauge sealed polyethylene mattress wraps and thick quilted furniture blankets to protect fabrics from dust and humidity.
                    </p>
                </div>
            </div>

            {{-- Item 4: Villa Loading --}}
            <div class="rounded-3xl border border-[#E2E8E2] bg-white shadow-sm hover:shadow-md overflow-hidden card-hover group">
                <div class="aspect-[4/3] overflow-hidden bg-neutral-50">
                    <img src="{{ asset('images/gallery/movexa-gallery-villa-relocation-loading.webp') }}" 
                         alt="MOVEXA White-Glove Villa Moving Loading" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" decoding="async">
                </div>
                <div class="p-5 sm:p-6 space-y-2">
                    <span class="text-[11px] sm:text-xs font-bold text-[#103B30] uppercase tracking-wider block">On-Site Logistics</span>
                    <h4 class="font-bold text-[#0B2A22] text-sm sm:text-base font-heading">White-Glove Ramp Setup</h4>
                    <p class="text-xs sm:text-[13px] text-[#1E2E25] font-normal leading-relaxed">
                        Floor neoprene runners, door frame guards, and specialized furniture dollies safeguarding villa marble and hardwood.
                    </p>
                </div>
            </div>

        </div>

        {{-- Action to Gallery --}}
        <div class="mt-10 text-center">
            <a href="{{ route('gallery') }}" 
               class="inline-flex items-center gap-2 font-bold px-6 py-3 rounded-full bg-[#103B30] hover:bg-[#08271F] text-white text-xs sm:text-sm shadow-md transition-all duration-200">
                <i class="fa-solid fa-camera text-xs text-[#D8F36B]"></i>
                <span>Explore Our Full Moving Photo Gallery</span>
                <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>
        </div>

    </div>
</section>


{{-- =========================================================================
     9. TESTIMONIALS & CUSTOMER TRUST
     ========================================================================= --}}
<section class="py-10 sm:py-12 lg:py-14 bg-white border-b border-[#E2E8E2]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-8 sm:mb-10 space-y-3">
            <span class="forest-badge text-[11px] sm:text-xs">
                <i class="fa-solid fa-star text-xs"></i> Client Testimonials
            </span>
            <h2 class="text-2xl sm:text-3xl lg:text-[34px] font-black font-heading text-[#0B2A22] tracking-tight">
                Trusted by Over 4,500 Families &amp; Companies
            </h2>
            <p class="text-sm sm:text-[15px] text-[#1F3027] font-medium max-w-2xl mx-auto leading-relaxed">
                Here is what homeowners, tenants, and business managers in Dubai have to say about their MOVEXA experience.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
            
            {{-- Testimonial 1 --}}
            <div class="p-6 sm:p-7 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm space-y-4 card-hover flex flex-col justify-between">
                <div class="space-y-3">
                    <div class="flex items-center text-[#E5A812] gap-1 text-sm">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs sm:text-sm text-[#18261E] leading-relaxed font-normal italic">
                        "We moved from our 4-bedroom villa in Arabian Ranches to Dubai Hills. MOVEXA's team arrived at 8:00 AM sharp with three trucks and a supervisor. Not a single plate broken, and our master bedroom was completely assembled by the afternoon. Highly recommended!"
                    </p>
                </div>
                <div class="pt-3.5 border-t border-[#E2E8E2] flex items-center justify-between">
                    <div>
                        <div class="font-bold text-[#0B2A22] text-xs sm:text-sm">David &amp; Sarah H.</div>
                        <div class="text-[11px] sm:text-xs font-semibold text-[#3C4E44]">Arabian Ranches to Dubai Hills</div>
                    </div>
                    <span class="px-2.5 py-0.5 rounded-full bg-[#EBF2EB] text-[11px] font-bold text-[#103B30]">Villa Move</span>
                </div>
            </div>

            {{-- Testimonial 2 --}}
            <div class="p-6 sm:p-7 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm space-y-4 card-hover flex flex-col justify-between">
                <div class="space-y-3">
                    <div class="flex items-center text-[#E5A812] gap-1 text-sm">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs sm:text-sm text-[#18261E] leading-relaxed font-normal italic">
                        "Moving in a high-rise tower like Dubai Marina can be a nightmare with elevator bookings and building security. MOVEXA took care of all the security permits in advance. Their carpenters disassembled our Italian wardrobe effortlessly and rebuilt it perfectly."
                    </p>
                </div>
                <div class="pt-3.5 border-t border-[#E2E8E2] flex items-center justify-between">
                    <div>
                        <div class="font-bold text-[#0B2A22] text-xs sm:text-sm">Mariam Al Mansoori</div>
                        <div class="text-[11px] sm:text-xs font-semibold text-[#3C4E44]">Dubai Marina High-Rise</div>
                    </div>
                    <span class="px-2.5 py-0.5 rounded-full bg-[#EBF2EB] text-[11px] font-bold text-[#103B30]">Apartment Move</span>
                </div>
            </div>

            {{-- Testimonial 3 --}}
            <div class="p-6 sm:p-7 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm space-y-4 card-hover flex flex-col justify-between">
                <div class="space-y-3">
                    <div class="flex items-center text-[#E5A812] gap-1 text-sm">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs sm:text-sm text-[#18261E] leading-relaxed font-normal italic">
                        "We relocated our entire 45-person tech consultancy over the weekend in Business Bay. Workstations, dual monitors, server equipment, and files were moved and set up by Sunday evening. Zero lost work time for our Monday morning operations."
                    </p>
                </div>
                <div class="pt-3.5 border-t border-[#E2E8E2] flex items-center justify-between">
                    <div>
                        <div class="font-bold text-[#0B2A22] text-xs sm:text-sm">Kareem T., Ops Director</div>
                        <div class="text-[11px] sm:text-xs font-semibold text-[#3C4E44]">Business Bay Corporate HQ</div>
                    </div>
                    <span class="px-2.5 py-0.5 rounded-full bg-[#EBF2EB] text-[11px] font-bold text-[#103B30]">Office Move</span>
                </div>
            </div>

        </div>

        {{-- Verified Google Rating Banner --}}
        <div class="mt-10 sm:mt-12 text-center">
            <div class="inline-flex items-center gap-3 px-5 py-2.5 rounded-full bg-white border border-[#E2E8E2] shadow-sm text-xs sm:text-sm text-[#0B2A22] font-semibold">
                <div class="flex items-center text-[#E5A812] gap-1">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <span class="font-bold text-[#0B2A22]">4.9 / 5.0 Rating</span>
                <span class="text-[#A2B3A8]">|</span>
                <span class="text-[#203127] font-medium">Based on verified UAE customer reviews</span>
            </div>
        </div>

    </div>
</section>

{{-- =========================================================================
     10. FREQUENTLY ASKED QUESTIONS ABOUT MOVEXA (ACCORDION)
     ========================================================================= --}}
<section class="py-10 sm:py-12 lg:py-14 bg-white border-b border-[#E2E8E2] w-full" x-data="{ activeFaq: null }">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-8 sm:mb-10 space-y-3">
        <span class="forest-badge text-[11px] sm:text-xs">
            <i class="fa-solid fa-circle-question text-xs"></i> Clarity &amp; Answers
        </span>
        <h2 class="text-2xl sm:text-3xl lg:text-[34px] font-black font-heading text-[#0B2A22] tracking-tight">
            Frequently Asked Questions
        </h2>
        <p class="text-sm sm:text-[15px] text-[#1F3027] font-medium max-w-2xl mx-auto leading-relaxed">
            Have questions about how MOVEXA operates, our insurance, licensing, or booking policies? Here are the answers.
        </p>
    </div>

    <div class="space-y-3.5">
        
        {{-- FAQ 1 --}}
        <div class="rounded-2xl sm:rounded-3xl border border-[#E2E8E2] bg-white overflow-hidden transition-all duration-200 shadow-xs">
            <button type="button" 
                    @click="activeFaq = (activeFaq === 1 ? null : 1)" 
                    class="w-full p-4 sm:p-5 text-left flex items-center justify-between gap-4 font-bold text-[#0B2A22] font-heading text-sm sm:text-[15px] hover:text-[#103B30] transition-colors">
                <span class="flex items-center gap-3">
                    <i class="fa-solid fa-circle-question text-[#103B30] text-sm sm:text-base flex-shrink-0"></i>
                    <span>Is MOVEXA a licensed and insured moving company in Dubai?</span>
                </span>
                <span class="w-7 h-7 rounded-full bg-[#F0F5F1] flex items-center justify-center flex-shrink-0 text-xs transition-transform duration-200"
                      :class="activeFaq === 1 ? 'rotate-180 bg-[#103B30] text-white' : 'text-[#103B30]'">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </button>
            <div x-show="activeFaq === 1" x-collapse x-cloak class="px-4 sm:px-5 pb-5 pt-2 text-xs sm:text-sm text-[#1E2E25] font-normal leading-relaxed border-t border-gray-100">
                Yes, MOVEXA is a legally registered and licensed moving and relocations entity under the Dubai Department of Economy and Tourism (DED). We carry comprehensive commercial transport liability, and we offer optional all-risk transit insurance packages covering total replacement value for delicate and high-value belongings.
            </div>
        </div>

        {{-- FAQ 2 --}}
        <div class="rounded-2xl sm:rounded-3xl border border-[#E2E8E2] bg-white overflow-hidden transition-all duration-200 shadow-xs">
            <button type="button" 
                    @click="activeFaq = (activeFaq === 2 ? null : 2)" 
                    class="w-full p-4 sm:p-5 text-left flex items-center justify-between gap-4 font-bold text-[#0B2A22] font-heading text-sm sm:text-[15px] hover:text-[#103B30] transition-colors">
                <span class="flex items-center gap-3">
                    <i class="fa-solid fa-circle-question text-[#103B30] text-sm sm:text-base flex-shrink-0"></i>
                    <span>Do you assist with Move-In / Move-Out NOC permits in Dubai?</span>
                </span>
                <span class="w-7 h-7 rounded-full bg-[#F0F5F1] flex items-center justify-center flex-shrink-0 text-xs transition-transform duration-200"
                      :class="activeFaq === 2 ? 'rotate-180 bg-[#103B30] text-white' : 'text-[#103B30]'">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </button>
            <div x-show="activeFaq === 2" x-collapse x-cloak class="px-4 sm:px-5 pb-5 pt-2 text-xs sm:text-sm text-[#1E2E25] font-normal leading-relaxed border-t border-gray-100">
                Absolutely. Most master developers in Dubai (such as Emaar, Nakheel, DAMAC, Dubai Holding, and Meraas) require company documents and truck license plates before approving a moving permit. We provide our trade license copy, driver Emirates IDs, and vehicle insurance certificates directly for your portal application to ensure 100% barrier-free entry on moving day.
            </div>
        </div>

        {{-- FAQ 3 --}}
        <div class="rounded-2xl sm:rounded-3xl border border-[#E2E8E2] bg-white overflow-hidden transition-all duration-200 shadow-xs">
            <button type="button" 
                    @click="activeFaq = (activeFaq === 3 ? null : 3)" 
                    class="w-full p-4 sm:p-5 text-left flex items-center justify-between gap-4 font-bold text-[#0B2A22] font-heading text-sm sm:text-[15px] hover:text-[#103B30] transition-colors">
                <span class="flex items-center gap-3">
                    <i class="fa-solid fa-circle-question text-[#103B30] text-sm sm:text-base flex-shrink-0"></i>
                    <span>Are your movers full-time employees or outsourced daily workers?</span>
                </span>
                <span class="w-7 h-7 rounded-full bg-[#F0F5F1] flex items-center justify-center flex-shrink-0 text-xs transition-transform duration-200"
                      :class="activeFaq === 3 ? 'rotate-180 bg-[#103B30] text-white' : 'text-[#103B30]'">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </button>
            <div x-show="activeFaq === 3" x-collapse x-cloak class="px-4 sm:px-5 pb-5 pt-2 text-xs sm:text-sm text-[#1E2E25] font-normal leading-relaxed border-t border-gray-100">
                100% of our moving crew, packers, and master carpenters are direct, salaried employees of MOVEXA. We do not use day laborers or casual street recruits. Every crew member is thoroughly background-checked, insured, uniformed, and rigorously trained in modern handling standards, customer courtesy, and delicate furniture protection.
            </div>
        </div>

        {{-- FAQ 4 --}}
        <div class="rounded-2xl sm:rounded-3xl border border-[#E2E8E2] bg-white overflow-hidden transition-all duration-200 shadow-xs">
            <button type="button" 
                    @click="activeFaq = (activeFaq === 4 ? null : 4)" 
                    class="w-full p-4 sm:p-5 text-left flex items-center justify-between gap-4 font-bold text-[#0B2A22] font-heading text-sm sm:text-[15px] hover:text-[#103B30] transition-colors">
                <span class="flex items-center gap-3">
                    <i class="fa-solid fa-circle-question text-[#103B30] text-sm sm:text-base flex-shrink-0"></i>
                    <span>How does MOVEXA calculate moving quotations? Are there hidden fees?</span>
                </span>
                <span class="w-7 h-7 rounded-full bg-[#F0F5F1] flex items-center justify-center flex-shrink-0 text-xs transition-transform duration-200"
                      :class="activeFaq === 4 ? 'rotate-180 bg-[#103B30] text-white' : 'text-[#103B30]'">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </button>
            <div x-show="activeFaq === 4" x-collapse x-cloak class="px-4 sm:px-5 pb-5 pt-2 text-xs sm:text-sm text-[#1E2E25] font-normal leading-relaxed border-t border-gray-100">
                Our quotations are based strictly on cubic volume (CBM), access parameters (floors, elevators, parking walking distance), required packing materials, and handyman requirements. We deliver a clear, written, binding quotation before you commit. There are zero hidden fees for fuel, stairs, or tape on moving day.
            </div>
        </div>

        {{-- FAQ 5 --}}
        <div class="rounded-2xl sm:rounded-3xl border border-[#E2E8E2] bg-white overflow-hidden transition-all duration-200 shadow-xs">
            <button type="button" 
                    @click="activeFaq = (activeFaq === 5 ? null : 5)" 
                    class="w-full p-4 sm:p-5 text-left flex items-center justify-between gap-4 font-bold text-[#0B2A22] font-heading text-sm sm:text-[15px] hover:text-[#103B30] transition-colors">
                <span class="flex items-center gap-3">
                    <i class="fa-solid fa-circle-question text-[#103B30] text-sm sm:text-base flex-shrink-0"></i>
                    <span>How do you handle delicate artwork, grand pianos, and marble furniture?</span>
                </span>
                <span class="w-7 h-7 rounded-full bg-[#F0F5F1] flex items-center justify-center flex-shrink-0 text-xs transition-transform duration-200"
                      :class="activeFaq === 5 ? 'rotate-180 bg-[#103B30] text-white' : 'text-[#103B30]'">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </button>
            <div x-show="activeFaq === 5" x-collapse x-cloak class="px-4 sm:px-5 pb-5 pt-2 text-xs sm:text-sm text-[#1E2E25] font-normal leading-relaxed border-t border-gray-100">
                We operate a custom wooden carpentry workshop where we construct bespoke heat-treated timber crates measured specifically to your fine art paintings, heavy marble dining tables, ornate mirrors, and fragile sculptures. Pianos and gym machinery are transported using heavy-duty skids, lifting straps, and specialized hydraulic equipment.
            </div>
        </div>
    </div>
    </div>
</section>

{{-- =========================================================================
     11. HIGH-CONVERTING FINAL CTA BANNER
     ========================================================================= --}}
<section class="bg-white py-4 sm:py-6 w-full">
    <x-cta-banner 
    headline="Experience the MOVEXA Standard on Your Next Move"
    subheadline="Plan your residential, villa, corporate, or international relocation with Dubai's most trusted moving team. Fast quotes, zero stress."
    buttonText="Request Your Free Quote"
/>
</section>

@endsection