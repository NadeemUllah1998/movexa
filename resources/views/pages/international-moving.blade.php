@extends('layouts.app')

@section('title', 'International Movers Dubai | Global Relocations Worldwide | MOVEXA')
@section('meta_description', 'Relocating from Dubai overseas? MOVEXA provides turnkey international moving from Dubai to the UK, USA, Canada, Australia, Europe, India, Pakistan, and GCC with export packing, FCL/LCL shipping, and customs clearance.')

@section('content')

{{-- Breadcrumb --}}
<x-breadcrumb :items="[['label' => 'International Moving', 'url' => '']]" />

{{-- =========================================================================
     1. HERO SECTION: High-Contrast Luxury Maritime Relocation Hero
     ========================================================================= --}}
<section class="relative text-white overflow-hidden py-10 sm:py-12 lg:py-14 bg-[#051712] w-full">
    {{-- Full Photographic Background Image with Clean Deep Contrast Overlay --}}
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <img src="{{ asset('images/services/movexa-service-international-moving.jpg') }}" 
             alt="International Moving from Dubai Worldwide - MOVEXA" 
             class="w-full h-full object-cover object-center lg:object-right opacity-35 scale-105 pointer-events-none filter brightness-90">
        <div class="absolute inset-0 bg-gradient-to-r from-[#04130F] via-[#061E17]/95 to-[#08291F]/80"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#051712] via-transparent to-black/30"></div>
    </div>

    {{-- Top Specular Light Highlight Line --}}
    <div class="absolute top-0 left-6 right-6 sm:left-12 sm:right-12 h-[1px] bg-gradient-to-r from-transparent via-[#D8F36B]/50 to-transparent pointer-events-none"></div>

    {{-- Ambient Radiant Glows --}}
    <div class="absolute -top-32 -left-32 w-96 h-96 rounded-full bg-[#103B30]/60 filter blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 right-10 w-96 h-96 rounded-full bg-[#D8F36B]/10 filter blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            {{-- Left Column: Hero Narrative & Value Proposition --}}
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                
                {{-- Live Status Pill --}}
                <div class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full text-xs font-extrabold uppercase tracking-wider bg-[#103B30]/90 text-[#D8F36B] border border-[#D8F36B]/35 shadow-lg backdrop-blur-md">
                    <span class="w-2 h-2 rounded-full bg-[#D8F36B] animate-pulse"></span>
                    <span>Global Moving & Maritime Freight Specialists</span>
                </div>

                {{-- Main Headline --}}
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[52px] font-black font-heading text-white tracking-tight leading-[1.12] drop-shadow-[0_2px_14px_rgba(0,0,0,0.85)]">
                    Moving Beyond Borders.<br>
                    <span class="text-shine-lime">Worldwide Relocations</span> From Dubai.
                </h1>

                {{-- Supporting Copy --}}
                <p class="text-sm sm:text-base lg:text-lg text-white/90 leading-relaxed font-normal max-w-2xl mx-auto lg:mx-0 drop-shadow-[0_1px_4px_rgba(0,0,0,0.7)]">
                    Relocating across oceans requires precision logistics, export-grade seaworthy packing, and flawless customs compliance. MOVEXA delivers door-to-door turnkey international moving from Dubai to the UK, Europe, North America, Australia, Asia, and the GCC.
                </p>

                {{-- High-Contrast Micro-Trust Proof Row --}}
                <div class="pt-1 flex flex-wrap items-center justify-center lg:justify-start gap-2.5 sm:gap-3 text-xs font-semibold text-white/95">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-white/10 backdrop-blur-md border border-white/15">
                        <i class="fa-solid fa-cube text-[#D8F36B]"></i>
                        <span>ISPM-15 Timber Crating</span>
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-white/10 backdrop-blur-md border border-white/15">
                        <i class="fa-solid fa-ship text-[#D8F36B]"></i>
                        <span>FCL & LCL Ocean Freight</span>
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-white/10 backdrop-blur-md border border-white/15">
                        <i class="fa-solid fa-passport text-[#D8F36B]"></i>
                        <span>Transfer of Residence (ToR)</span>
                    </span>
                </div>

                {{-- Action Buttons Row --}}
                <div class="pt-3 flex flex-col sm:flex-row items-stretch sm:items-center justify-center lg:justify-start gap-3 sm:gap-4">
                    <button type="button" 
                            onclick="openQuoteModal('International', 'International Moving')" 
                            class="inline-flex items-center justify-center gap-2.5 font-extrabold px-7 py-4 rounded-full bg-[#B7E532] text-[#073B2E] hover:bg-[#cbf54a] text-xs sm:text-sm shadow-[0_10px_25px_rgba(183,229,50,0.35)] hover:shadow-[0_15px_30px_rgba(183,229,50,0.5)] transition-all duration-200 transform hover:-translate-y-0.5 focus:outline-none w-full sm:w-auto cursor-pointer">
                        <i class="fa-solid fa-calculator text-xs"></i>
                        <span>Get Free International Quote</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </button>

                    <a href="https://wa.me/{{ config('movexa.brand.whatsapp_number') }}?text={{ urlencode('Hello MOVEXA, I am planning an international move from Dubai and would like to speak to a relocation consultant.') }}" 
                       target="_blank" 
                       rel="noopener" 
                       class="inline-flex items-center justify-center gap-2.5 font-semibold px-6 py-4 rounded-full bg-white/10 hover:bg-white hover:text-[#073B2E] text-white border border-white/25 backdrop-blur-md text-xs sm:text-sm transition-all duration-200 transform hover:-translate-y-0.5 focus:outline-none shadow-md w-full sm:w-auto">
                        <i class="fa-brands fa-whatsapp text-base text-[#25D366]"></i>
                        <span>WhatsApp Move Consultant</span>
                    </a>
                </div>

            </div>

            {{-- Right Column: Interactive Quick Route & Container Rate Inquiry Card --}}
            <div class="lg:col-span-5"
                 x-data="{
                     selectedCountry: 'United Kingdom',
                     selectedMode: 'Dedicated 20ft Container (FCL)',
                     selectedMonth: 'Within 30 Days',
                     submitInquiry() {
                         openQuoteModal(this.selectedCountry, 'International Move - ' + this.selectedMode + ' (' + this.selectedMonth + ')');
                     }
                 }">
                <div class="relative rounded-3xl bg-gradient-to-b from-white/[0.14] to-white/[0.04] p-6 sm:p-8 backdrop-blur-xl border border-white/20 shadow-[0_25px_60px_-15px_rgba(0,0,0,0.7)] text-left">
                    
                    {{-- Card Badge & Header --}}
                    <div class="flex items-center justify-between pb-4 border-b border-white/15 mb-5">
                        <div>
                            <span class="text-[11px] font-extrabold uppercase tracking-wider text-[#D8F36B] flex items-center gap-1.5">
                                <i class="fa-solid fa-compass"></i> Fast Route Inquiry
                            </span>
                            <h3 class="text-lg font-bold text-white mt-0.5">
                                Calculate Your Moving Route
                            </h3>
                        </div>
                        <span class="w-9 h-9 rounded-xl bg-[#D8F36B]/20 text-[#D8F36B] border border-[#D8F36B]/30 flex items-center justify-center text-sm">
                            <i class="fa-solid fa-ship"></i>
                        </span>
                    </div>

                    {{-- Origin Field (Pre-locked Dubai) --}}
                    <div class="space-y-4">
                        <div>
                            <label class="block text-[11px] font-bold text-white/80 uppercase tracking-wider mb-1.5">
                                Origin Location
                            </label>
                            <div class="flex items-center gap-2.5 px-3.5 py-2.5 rounded-xl bg-black/40 border border-white/15 text-white text-xs sm:text-sm">
                                <span class="text-base">🇦🇪</span>
                                <span class="font-semibold text-white">Dubai, United Arab Emirates</span>
                                <span class="ml-auto text-[10px] uppercase font-bold text-[#D8F36B] bg-[#103B30] px-2 py-0.5 rounded-md">Port Origin</span>
                            </div>
                        </div>

                        {{-- Destination Country Dropdown --}}
                        <div>
                            <label for="routeDestCountry" class="block text-[11px] font-bold text-white/80 uppercase tracking-wider mb-1.5">
                                Destination Country
                            </label>
                            <div class="relative">
                                <select id="routeDestCountry" 
                                        x-model="selectedCountry" 
                                        class="w-full px-3.5 py-2.5 rounded-xl bg-[#092B22] border border-white/25 text-white text-xs sm:text-sm focus:border-[#D8F36B] focus:ring-1 focus:ring-[#D8F36B] appearance-none pr-8 cursor-pointer">
                                    <option value="United Kingdom" class="bg-[#08271F] text-white">🇬🇧 United Kingdom (London, Manchester, etc.)</option>
                                    <option value="United States" class="bg-[#08271F] text-white">🇺🇸 United States (New York, LA, Texas, Florida)</option>
                                    <option value="Canada" class="bg-[#08271F] text-white">🇨🇦 Canada (Toronto, Vancouver, Montreal)</option>
                                    <option value="Australia" class="bg-[#08271F] text-white">🇦🇺 Australia (Sydney, Melbourne, Brisbane, Perth)</option>
                                    <option value="Germany" class="bg-[#08271F] text-white">🇩🇪 Germany (Frankfurt, Munich, Berlin)</option>
                                    <option value="France" class="bg-[#08271F] text-white">🇫🇷 France (Paris, Lyon, Marseille)</option>
                                    <option value="India" class="bg-[#08271F] text-white">🇮🇳 India (Mumbai, Delhi, Bangalore, Kochi)</option>
                                    <option value="Pakistan" class="bg-[#08271F] text-white">🇵🇰 Pakistan (Karachi, Lahore, Islamabad)</option>
                                    <option value="Saudi Arabia" class="bg-[#08271F] text-white">🇸🇦 Saudi Arabia (Riyadh, Jeddah, Dammam)</option>
                                    <option value="Qatar" class="bg-[#08271F] text-white">🇶🇦 Qatar (Doha, Lusail)</option>
                                    <option value="Oman" class="bg-[#08271F] text-white">🇴🇲 Oman (Muscat, Sohar, Salalah)</option>
                                    <option value="Singapore" class="bg-[#08271F] text-white">🇸🇬 Singapore (Islandwide)</option>
                                    <option value="Worldwide Relocation" class="bg-[#08271F] text-white">🌐 Other International Destination</option>
                                </select>
                                <i class="fa-solid fa-chevron-down text-white/60 text-xs absolute right-3 top-3.5 pointer-events-none"></i>
                            </div>
                        </div>

                        {{-- Shipment Mode Selector --}}
                        <div>
                            <label for="routeShipMode" class="block text-[11px] font-bold text-white/80 uppercase tracking-wider mb-1.5">
                                Shipment Size / Mode
                            </label>
                            <div class="relative">
                                <select id="routeShipMode" 
                                        x-model="selectedMode" 
                                        class="w-full px-3.5 py-2.5 rounded-xl bg-[#092B22] border border-white/25 text-white text-xs sm:text-sm focus:border-[#D8F36B] focus:ring-1 focus:ring-[#D8F36B] appearance-none pr-8 cursor-pointer">
                                    <option value="Dedicated 20ft Container (FCL)" class="bg-[#08271F] text-white">20ft Dedicated Container (FCL - 1-3 BR Home)</option>
                                    <option value="Dedicated 40ft Container (FCL)" class="bg-[#08271F] text-white">40ft Dedicated Container (FCL - 4-5 BR Villa)</option>
                                    <option value="Shared LCL Groupage Lift-Van" class="bg-[#08271F] text-white">Shared Container / Lift-Van (LCL - Partial Move)</option>
                                    <option value="Priority Air Freight" class="bg-[#08271F] text-white">Priority Air Freight (Expedited Essentials)</option>
                                    <option value="Volume Survey Required" class="bg-[#08271F] text-white">Not Sure - Need Free Volume Survey</option>
                                </select>
                                <i class="fa-solid fa-chevron-down text-white/60 text-xs absolute right-3 top-3.5 pointer-events-none"></i>
                            </div>
                        </div>

                        {{-- Target Date & Submit --}}
                        <div class="pt-2">
                            <button type="button" 
                                    @click="submitInquiry()" 
                                    class="w-full inline-flex items-center justify-center gap-2 font-black px-6 py-3.5 rounded-xl bg-[#B7E532] text-[#073B2E] hover:bg-[#cbf54a] text-xs sm:text-sm shadow-lg transition-all duration-200 transform hover:-translate-y-0.5 cursor-pointer">
                                <span>Check Route & Request Quote</span>
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </button>
                        </div>

                        {{-- Safety & Privacy Guarantee --}}
                        <div class="pt-1 flex items-center justify-between text-[11px] text-white/70">
                            <span class="flex items-center gap-1.5">
                                <i class="fa-solid fa-shield-halved text-[#D8F36B]"></i>
                                <span>Free Survey & No Hidden Port Fees</span>
                            </span>
                            <span class="text-[#D8F36B] font-bold">Jebel Ali Hub</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

{{-- =========================================================================
     2. GLOBAL REACH CONTRAST RIBBON: High-Contrast Dark Emerald / Lime Bar
     ========================================================================= --}}
<section class="bg-[#061D17] border-y border-white/10 text-white py-8 sm:py-10 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 divide-y sm:divide-y-0 sm:divide-x divide-white/10">
            
            {{-- Stat 1 --}}
            <div class="pt-4 sm:pt-0 sm:px-6 first:pl-0 flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-[#103B30] text-[#D8F36B] border border-[#D8F36B]/30 flex items-center justify-center text-xl shrink-0">
                    <i class="fa-solid fa-earth-americas"></i>
                </div>
                <div>
                    <div class="text-2xl sm:text-3xl font-black font-heading text-[#D8F36B]">120+</div>
                    <div class="text-xs text-white/80 font-medium">Global Ports & Terminals</div>
                </div>
            </div>

            {{-- Stat 2 --}}
            <div class="pt-4 sm:pt-0 sm:px-6 flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-[#103B30] text-[#D8F36B] border border-[#D8F36B]/30 flex items-center justify-center text-xl shrink-0">
                    <i class="fa-solid fa-boxes-packing"></i>
                </div>
                <div>
                    <div class="text-2xl sm:text-3xl font-black font-heading text-[#D8F36B]">100%</div>
                    <div class="text-xs text-white/80 font-medium">ISPM-15 Timber Crating</div>
                </div>
            </div>

            {{-- Stat 3 --}}
            <div class="pt-4 sm:pt-0 sm:px-6 flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-[#103B30] text-[#D8F36B] border border-[#D8F36B]/30 flex items-center justify-center text-xl shrink-0">
                    <i class="fa-solid fa-handshake-simple"></i>
                </div>
                <div>
                    <div class="text-2xl sm:text-3xl font-black font-heading text-[#D8F36B]">80+</div>
                    <div class="text-xs text-white/80 font-medium">Global Relocation Partners</div>
                </div>
            </div>

            {{-- Stat 4 --}}
            <div class="pt-4 sm:pt-0 sm:px-6 flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-[#103B30] text-[#D8F36B] border border-[#D8F36B]/30 flex items-center justify-center text-xl shrink-0">
                    <i class="fa-solid fa-file-shield"></i>
                </div>
                <div>
                    <div class="text-2xl sm:text-3xl font-black font-heading text-[#D8F36B]">ToR Ready</div>
                    <div class="text-xs text-white/80 font-medium">Duty-Free Customs Guidance</div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- =========================================================================
     3. SHIPPING MODES COMPARISON: Tiered Visual Hierarchy (Light Canvas, Featured Dark Card)
     ========================================================================= --}}
<section class="py-10 sm:py-12 lg:py-14 bg-white border-b border-[#E2E8E2] w-full relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Section Header --}}
        <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-10 space-y-3">
            <span class="forest-badge">
                <i class="fa-solid fa-sliders"></i> Freight Flexibility
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-[40px] font-black font-heading text-[#103B30] tracking-tight">
                Choose Your International Transit Mode
            </h2>
            <p class="text-sm sm:text-base text-[#425048] leading-relaxed max-w-2xl mx-auto">
                Whether relocating an entire 5-bedroom villa or transporting a few cartons of personal effects, we engineer the shipping mode around your timeline and budget.
            </p>
        </div>

        {{-- 3-Tier Shipping Modes Grid --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
            
            {{-- Mode 1: Shared LCL (Groupage Lift-Van) --}}
            <div class="bg-white rounded-3xl p-7 sm:p-8 border border-[#E2E8E2] shadow-sm hover:shadow-premium transition-all duration-300 card-hover flex flex-col justify-between">
                <div>
                    {{-- Card Badge --}}
                    <div class="flex items-center justify-between mb-5">
                        <span class="px-3 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-[#EBF2EB] text-[#103B30] border border-[#103B30]/15">
                            Cost-Effective Option
                        </span>
                        <div class="w-10 h-10 rounded-xl bg-[#EBF2EB] text-[#103B30] flex items-center justify-center text-lg">
                            <i class="fa-solid fa-boxes-stacked"></i>
                        </div>
                    </div>

                    <h3 class="text-xl font-bold font-heading text-[#202824] mb-2">
                        Shared LCL (Groupage)
                    </h3>
                    <p class="text-sm text-[#425048] leading-relaxed mb-6">
                        Best suited for 1-bedroom apartments, students, or smaller household consignments where you do not need an entire shipping container.
                    </p>

                    {{-- Specs Box --}}
                    <div class="space-y-3 pt-4 border-t border-[#E2E8E2] text-xs">
                        <div class="flex items-start gap-2.5">
                            <i class="fa-solid fa-circle-check text-[#103B30] mt-0.5 text-xs"></i>
                            <span class="text-[#4F5953]"><strong class="text-[#202824]">Custom Wooden Lift-Vans:</strong> Personal effects packed into sealed ISPM-15 wooden crates inside shared container.</span>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <i class="fa-solid fa-circle-check text-[#103B30] mt-0.5 text-xs"></i>
                            <span class="text-[#4F5953]"><strong class="text-[#202824]">Pay by Volume:</strong> Only pay for the exact cubic meters (CBM) your cargo occupies.</span>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <i class="fa-solid fa-circle-check text-[#103B30] mt-0.5 text-xs"></i>
                            <span class="text-[#4F5953]"><strong class="text-[#202824]">Estimated Transit:</strong> 28 to 45 Days depending on destination consolidation cycles.</span>
                        </div>
                    </div>
                </div>

                <div class="pt-8 mt-6 border-t border-[#E2E8E2]">
                    <button type="button" 
                            onclick="openQuoteModal('International', 'Shared LCL Groupage')" 
                            class="w-full btn-outline-forest text-xs font-bold py-3 text-center">
                        <span>Quote Shared LCL Move</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </button>
                </div>
            </div>

            {{-- Mode 2: Dedicated FCL Container (FEATURED LUXURY CARD - HIGH CONTRAST) --}}
            <div class="relative rounded-3xl p-7 sm:p-9 bg-gradient-to-b from-[#08271F] via-[#09352A] to-[#061F18] text-white border-2 border-[#D8F36B] shadow-[0_20px_50px_rgba(8,39,31,0.25)] flex flex-col justify-between transform lg:-translate-y-3 z-10">
                
                {{-- Floating Pill Badge --}}
                <div class="absolute -top-3.5 left-1/2 -translate-x-1/2">
                    <span class="px-4 py-1.5 rounded-full text-xs font-black uppercase tracking-wider bg-[#D8F36B] text-[#08271F] shadow-lg flex items-center gap-1.5">
                        <i class="fa-solid fa-star text-[10px]"></i> Most Popular for Villas & Whole Homes
                    </span>
                </div>

                <div>
                    {{-- Header Row --}}
                    <div class="flex items-center justify-between mb-5 mt-2">
                        <span class="px-3 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-white/10 text-[#D8F36B] border border-[#D8F36B]/30">
                            Exclusive Full Container
                        </span>
                        <div class="w-12 h-12 rounded-2xl bg-[#D8F36B] text-[#08271F] flex items-center justify-center text-xl font-bold shadow-md">
                            <i class="fa-solid fa-ship"></i>
                        </div>
                    </div>

                    <h3 class="text-2xl font-black font-heading text-white mb-2">
                        Dedicated FCL (20ft / 40ft)
                    </h3>
                    <p class="text-xs text-white/85 leading-relaxed mb-6">
                        An exclusive maritime steel container loaded, inventoried, and sealed directly at your Dubai residence, proceeding straight to vessel sailing without intermediate transfers.
                    </p>

                    {{-- Specs Box --}}
                    <div class="space-y-3.5 pt-4 border-t border-white/15 text-xs">
                        <div class="flex items-start gap-2.5">
                            <i class="fa-solid fa-circle-check text-[#D8F36B] mt-0.5 text-xs"></i>
                            <span class="text-white/90"><strong class="text-white">Direct Door-to-Door Seal:</strong> Loaded at your Dubai villa, sealed with customs bolt-seal, opened only at destination port.</span>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <i class="fa-solid fa-circle-check text-[#D8F36B] mt-0.5 text-xs"></i>
                            <span class="text-white/90"><strong class="text-white">Flexible Capacity:</strong> 20ft (33 CBM, 2-3 BR) or 40ft/40ft High-Cube (67-76 CBM, 4-5 BR + Cars).</span>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <i class="fa-solid fa-circle-check text-[#D8F36B] mt-0.5 text-xs"></i>
                            <span class="text-white/90"><strong class="text-white">Faster Ocean Transit:</strong> Direct maritime routes (18 to 35 Days) departing Jebel Ali weekly.</span>
                        </div>
                    </div>
                </div>

                <div class="pt-8 mt-6 border-t border-white/15">
                    <button type="button" 
                            onclick="openQuoteModal('International', 'Dedicated FCL Container')" 
                            class="w-full inline-flex items-center justify-center gap-2 font-black px-6 py-3.5 rounded-full bg-[#B7E532] text-[#073B2E] hover:bg-[#cbf54a] text-xs sm:text-sm shadow-lg transition-all duration-200 transform hover:-translate-y-0.5 cursor-pointer">
                        <i class="fa-solid fa-file-invoice text-xs"></i>
                        <span>Quote Dedicated FCL Container</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </button>
                </div>
            </div>

            {{-- Mode 3: Priority Air Freight Cargo --}}
            <div class="bg-white rounded-3xl p-7 sm:p-8 border border-[#E2E8E2] shadow-sm hover:shadow-premium transition-all duration-300 card-hover flex flex-col justify-between">
                <div>
                    {{-- Card Badge --}}
                    <div class="flex items-center justify-between mb-5">
                        <span class="px-3 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-[#EBF2EB] text-[#103B30] border border-[#103B30]/15">
                            Expedited Transit
                        </span>
                        <div class="w-10 h-10 rounded-xl bg-[#EBF2EB] text-[#103B30] flex items-center justify-center text-lg">
                            <i class="fa-solid fa-plane-departure"></i>
                        </div>
                    </div>

                    <h3 class="text-xl font-bold font-heading text-[#202824] mb-2">
                        Priority Air Freight
                    </h3>
                    <p class="text-sm text-[#425048] leading-relaxed mb-6">
                        The fastest method for high-priority shipments, business gear, wardrobe essentials, or immediate-need items while your sea container is in ocean transit.
                    </p>

                    {{-- Specs Box --}}
                    <div class="space-y-3 pt-4 border-t border-[#E2E8E2] text-xs">
                        <div class="flex items-start gap-2.5">
                            <i class="fa-solid fa-circle-check text-[#103B30] mt-0.5 text-xs"></i>
                            <span class="text-[#4F5953]"><strong class="text-[#202824]">IATA-Compliant Crates:</strong> Aircraft contour-compatible packaging with security screening compliance.</span>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <i class="fa-solid fa-circle-check text-[#103B30] mt-0.5 text-xs"></i>
                            <span class="text-[#4F5953]"><strong class="text-[#202824]">Rapid Departure:</strong> Flown via Dubai International Airport (DXB) or DWC direct to global hubs.</span>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <i class="fa-solid fa-circle-check text-[#103B30] mt-0.5 text-xs"></i>
                            <span class="text-[#4F5953]"><strong class="text-[#202824]">Fastest Delivery:</strong> 4 to 8 Days door-to-door including destination customs expedited clearance.</span>
                        </div>
                    </div>
                </div>

                <div class="pt-8 mt-6 border-t border-[#E2E8E2]">
                    <button type="button" 
                            onclick="openQuoteModal('International', 'Priority Air Freight')" 
                            class="w-full btn-outline-forest text-xs font-bold py-3 text-center">
                        <span>Quote Priority Air Cargo</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </button>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- =========================================================================
     4. EXPORT-GRADE SEAWORTHY PACKING: Dark High-Contrast Visual Showcase
     ========================================================================= --}}
<section class="py-10 sm:py-12 lg:py-14 bg-gradient-to-b from-[#061E18] to-[#041611] text-white relative overflow-hidden w-full">
    {{-- Ambient Radiant Glows --}}
    <div class="absolute -top-40 right-10 w-96 h-96 rounded-full bg-[#103B30]/70 filter blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-40 left-10 w-96 h-96 rounded-full bg-[#D8F36B]/10 filter blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            {{-- Left Column: 4 Technical Packing Standards --}}
            <div class="lg:col-span-7 space-y-6">
                <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-[#103B30] text-[#D8F36B] border border-[#D8F36B]/30">
                    <i class="fa-solid fa-box-open"></i> Seaworthy Packaging Standard
                </span>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black font-heading text-white tracking-tight leading-tight">
                    Engineered to Endure Oceans, Humidity & Transits.
                </h2>

                <p class="text-sm sm:text-base text-white/80 leading-relaxed font-normal">
                    Standard domestic cartons cannot survive high maritime humidity, saltwater atmosphere, and container ship motion. MOVEXA uses export-engineered packaging materials meeting strict global freight standards.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                    
                    {{-- Standard 1 --}}
                    <div class="p-5 rounded-2xl bg-white/[0.06] border border-white/10 backdrop-blur-sm space-y-2.5">
                        <div class="w-10 h-10 rounded-xl bg-[#D8F36B] text-[#08271F] flex items-center justify-center font-bold text-base">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>
                        <h4 class="text-sm font-bold text-white">5-Ply Heavy-Duty Kraft Cartons</h4>
                        <p class="text-xs text-white/70 leading-relaxed">
                            Double-walled corrugated export boxes with reinforced corners designed to resist compression and damp oceanic climates.
                        </p>
                    </div>

                    {{-- Standard 2 --}}
                    <div class="p-5 rounded-2xl bg-white/[0.06] border border-white/10 backdrop-blur-sm space-y-2.5">
                        <div class="w-10 h-10 rounded-xl bg-[#D8F36B] text-[#08271F] flex items-center justify-center font-bold text-base">
                            <i class="fa-solid fa-shield-virus"></i>
                        </div>
                        <h4 class="text-sm font-bold text-white">ISPM-15 Certified Crating</h4>
                        <p class="text-xs text-white/70 leading-relaxed">
                            Custom on-site carpentry with heat-treated timber bearing international phyto-sanitary stamps for overseas biosecurity border approval.
                        </p>
                    </div>

                    {{-- Standard 3 --}}
                    <div class="p-5 rounded-2xl bg-white/[0.06] border border-white/10 backdrop-blur-sm space-y-2.5">
                        <div class="w-10 h-10 rounded-xl bg-[#D8F36B] text-[#08271F] flex items-center justify-center font-bold text-base">
                            <i class="fa-solid fa-umbrella"></i>
                        </div>
                        <h4 class="text-sm font-bold text-white">Moisture Desiccants & Poly Liners</h4>
                        <p class="text-xs text-white/70 leading-relaxed">
                            High-density polyethylene moisture barriers and active silica gel packs placed inside cartons to counteract container condensation rain.
                        </p>
                    </div>

                    {{-- Standard 4 --}}
                    <div class="p-5 rounded-2xl bg-white/[0.06] border border-white/10 backdrop-blur-sm space-y-2.5">
                        <div class="w-10 h-10 rounded-xl bg-[#D8F36B] text-[#08271F] flex items-center justify-center font-bold text-base">
                            <i class="fa-solid fa-barcode"></i>
                        </div>
                        <h4 class="text-sm font-bold text-white">Itemized Bilingual Barcode Lists</h4>
                        <p class="text-xs text-white/70 leading-relaxed">
                            Numbered cartons with bilingual valued manifests matching destination customs requirements for rapid clearance inspections.
                        </p>
                    </div>

                </div>
            </div>

            {{-- Right Column: Photographic Showcase Card --}}
            <div class="lg:col-span-5">
                <div class="relative rounded-3xl overflow-hidden border border-white/20 shadow-2xl group">
                    <img src="{{ asset('images/gallery/movexa-gallery-residential-export-packing.jpg') }}" 
                         alt="Export Packing Standards - MOVEXA" 
                         class="w-full h-[440px] sm:h-[480px] object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>

                    {{-- Floating Glass Tag on Image --}}
                    <div class="absolute top-4 left-4 right-4 flex items-center justify-between">
                        <span class="px-3 py-1.5 rounded-full text-xs font-bold bg-black/60 text-[#D8F36B] border border-white/20 backdrop-blur-md">
                            <i class="fa-solid fa-shield-halved"></i> Export Packaging Audit
                        </span>
                        <span class="px-3 py-1.5 rounded-full text-xs font-bold bg-[#D8F36B] text-[#08271F] shadow-sm">
                            FIDI Quality Standard
                        </span>
                    </div>

                    {{-- Bottom Caption Box --}}
                    <div class="absolute bottom-5 left-5 right-5 p-4 rounded-2xl bg-[#08271F]/85 border border-white/15 backdrop-blur-md text-white space-y-2">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-[#D8F36B]"></span>
                            <span class="text-xs font-bold text-white">White-Glove Export Certified Crew</span>
                        </div>
                        <p class="text-[11px] text-white/80 leading-relaxed">
                            Every delicate piece—from oil paintings and crystal chandeliers to Italian marble dining tables—receives custom-tailored protection.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- =========================================================================
     5. TURNKEY RELOCATION PROTOCOL: Clean Crisp 5-Step Process Flow
     ========================================================================= --}}
<section class="py-10 sm:py-12 lg:py-14 bg-white border-b border-[#E2E8E2] w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Section Header --}}
        <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-10 space-y-3">
            <span class="forest-badge">
                <i class="fa-solid fa-route"></i> Turnkey Journey
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-[40px] font-black font-heading text-[#103B30] tracking-tight">
                How MOVEXA Manages Global Moves
            </h2>
            <p class="text-sm sm:text-base text-[#425048] leading-relaxed max-w-2xl mx-auto">
                From your Dubai doorstep to your overseas residence, every step is coordinated with military precision, live milestone updates, and zero hidden costs.
            </p>
        </div>

        {{-- 5 Steps Horizontal / Grid Timeline --}}
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6">
            
            {{-- Step 01 --}}
            <div class="p-6 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm hover:border-[#103B30] hover:shadow-md transition-all card-hover flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-2xl font-black font-heading text-[#103B30]">01</span>
                        <div class="w-9 h-9 rounded-xl bg-white text-[#103B30] flex items-center justify-center text-sm shadow-2xs">
                            <i class="fa-solid fa-calculator"></i>
                        </div>
                    </div>
                    <h3 class="text-base font-bold font-heading text-[#202824] mb-2">Volume Survey</h3>
                    <p class="text-sm text-[#425048] leading-relaxed">
                        Virtual 3D video survey or on-site consultation to calculate exact cubic volume (CBM), assess fragile items, and provide a fixed-rate quotation.
                    </p>
                </div>
                <div class="mt-4 pt-3 border-t border-gray-200 text-[11px] font-bold text-[#103B30]">
                    Fixed Price Guarantee
                </div>
            </div>

            {{-- Step 02 --}}
            <div class="p-6 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm hover:border-[#103B30] hover:shadow-md transition-all card-hover flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-2xl font-black font-heading text-[#103B30]">02</span>
                        <div class="w-9 h-9 rounded-xl bg-white text-[#103B30] flex items-center justify-center text-sm shadow-2xs">
                            <i class="fa-solid fa-box-open"></i>
                        </div>
                    </div>
                    <h3 class="text-base font-bold font-heading text-[#202824] mb-2">Export Packing</h3>
                    <p class="text-sm text-[#425048] leading-relaxed">
                        Multi-layer wrapping, custom ISPM-15 wooden crating built on site, and preparation of bilingual itemized packing manifests.
                    </p>
                </div>
                <div class="mt-4 pt-3 border-t border-gray-200 text-[11px] font-bold text-[#103B30]">
                    Museum-Grade Care
                </div>
            </div>

            {{-- Step 03 --}}
            <div class="p-6 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm hover:border-[#103B30] hover:shadow-md transition-all card-hover flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-2xl font-black font-heading text-[#103B30]">03</span>
                        <div class="w-9 h-9 rounded-xl bg-white text-[#103B30] flex items-center justify-center text-sm shadow-2xs">
                            <i class="fa-solid fa-truck-ramp-box"></i>
                        </div>
                    </div>
                    <h3 class="text-base font-bold font-heading text-[#202824] mb-2">UAE Customs & Port</h3>
                    <p class="text-sm text-[#425048] leading-relaxed">
                        Container drayage to Jebel Ali Port or DXB Air Cargo, official export customs processing, and release of Bill of Lading (BOL).
                    </p>
                </div>
                <div class="mt-4 pt-3 border-t border-gray-200 text-[11px] font-bold text-[#103B30]">
                    Jebel Ali Dispatch
                </div>
            </div>

            {{-- Step 04 --}}
            <div class="p-6 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm hover:border-[#103B30] hover:shadow-md transition-all card-hover flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-2xl font-black font-heading text-[#103B30]">04</span>
                        <div class="w-9 h-9 rounded-xl bg-white text-[#103B30] flex items-center justify-center text-sm shadow-2xs">
                            <i class="fa-solid fa-satellite-dish"></i>
                        </div>
                    </div>
                    <h3 class="text-base font-bold font-heading text-[#202824] mb-2">Transit Tracking</h3>
                    <p class="text-sm text-[#425048] leading-relaxed">
                        Ocean vessel or air freight tracking with proactive milestone updates from Dubai departure to destination port arrival.
                    </p>
                </div>
                <div class="mt-4 pt-3 border-t border-gray-200 text-[11px] font-bold text-[#103B30]">
                    Weekly Status Reports
                </div>
            </div>

            {{-- Step 05 --}}
            <div class="p-6 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm hover:border-[#103B30] hover:shadow-md transition-all card-hover flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-2xl font-black font-heading text-[#103B30]">05</span>
                        <div class="w-9 h-9 rounded-xl bg-white text-[#103B30] flex items-center justify-center text-sm shadow-2xs">
                            <i class="fa-solid fa-house-chimney"></i>
                        </div>
                    </div>
                    <h3 class="text-base font-bold font-heading text-[#202824] mb-2">Clearance & Unpack</h3>
                    <p class="text-sm text-[#425048] leading-relaxed">
                        Transfer of Residence (ToR) customs clearance, container haulage to your new overseas home, full unpacking, and debris removal.
                    </p>
                </div>
                <div class="mt-4 pt-3 border-t border-gray-200 text-[11px] font-bold text-[#103B30]">
                    White-Glove Delivery
                </div>
            </div>

        </div>

    </div>
</section>

{{-- =========================================================================
     6. CUSTOMS READINESS & TAX RELIEF (ToR): High-Contrast Dual Grid
     ========================================================================= --}}
<section class="py-10 sm:py-12 lg:py-14 bg-white border-b border-[#E2E8E2] w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-stretch">
            
            {{-- Left Column: UAE Departure Paperwork (Crisp White Card) --}}
            <div class="lg:col-span-6 bg-white rounded-3xl p-7 sm:p-9 border border-[#E2E8E2] shadow-sm flex flex-col justify-between">
                <div class="space-y-5">
                    <span class="forest-badge">
                        <i class="fa-solid fa-clipboard-check"></i> Export Dossier
                    </span>
                    <h3 class="text-2xl sm:text-3xl font-extrabold font-heading text-[#202824] tracking-tight">
                        Standard UAE Export Documentation
                    </h3>
                    <p class="text-xs sm:text-sm sm:text-base text-[#425048] leading-relaxed">
                        Exporting personal belongings from the United Arab Emirates is streamlined when your paperwork is in order. MOVEXA prepares the majority of packing inventories and clearance declarations on your behalf:
                    </p>

                    <div class="space-y-3 pt-2 text-xs text-[#202824]">
                        <div class="flex items-start gap-3 p-3.5 rounded-2xl bg-white border border-[#E2E8E2] shadow-2xs">
                            <i class="fa-solid fa-circle-check text-sm text-[#103B30] mt-0.5"></i>
                            <div>
                                <span class="font-bold text-[#202824]">Valid Passport & Visa:</span>
                                <span class="text-[#5A645E] block text-[11px] mt-0.5">Copy of shipper's passport plus destination work/residence permit or entry visa.</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 p-3.5 rounded-2xl bg-white border border-[#E2E8E2] shadow-2xs">
                            <i class="fa-solid fa-circle-check text-sm text-[#103B30] mt-0.5"></i>
                            <div>
                                <span class="font-bold text-[#202824]">UAE Visa Cancellation or Departure Ticket:</span>
                                <span class="text-[#5A645E] block text-[11px] mt-0.5">UAE residency visa cancellation page, or valid flight tickets showing departure from the UAE.</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 p-3.5 rounded-2xl bg-white border border-[#E2E8E2] shadow-2xs">
                            <i class="fa-solid fa-circle-check text-sm text-[#103B30] mt-0.5"></i>
                            <div>
                                <span class="font-bold text-[#202824]">Bilingual Valued Packing Inventory:</span>
                                <span class="text-[#5A645E] block text-[11px] mt-0.5">Itemized box-by-box manifest prepared and certified by MOVEXA crew during packing day.</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 p-3.5 rounded-2xl bg-white border border-[#E2E8E2] shadow-2xs">
                            <i class="fa-solid fa-circle-check text-sm text-[#103B30] mt-0.5"></i>
                            <div>
                                <span class="font-bold text-[#202824]">Authorization Letter & Shipper Declaration:</span>
                                <span class="text-[#5A645E] block text-[11px] mt-0.5">Customs clearance authorization granting MOVEXA permission to clear cargo at Dubai ports.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-6 mt-6 border-t border-[#E2E8E2] flex items-center justify-between text-xs text-[#747C76]">
                    <span class="flex items-center gap-1.5 font-bold text-[#103B30]">
                        <i class="fa-solid fa-shield-halved"></i> 100% Legal UAE Customs Clearance
                    </span>
                    <span>Jebel Ali Port / DXB Cargo</span>
                </div>
            </div>

            {{-- Right Column: Transfer of Residence (ToR) Relief (DEEP EMERALD LUXURY CARD - HIGH CONTRAST) --}}
            <div class="lg:col-span-6 rounded-3xl p-7 sm:p-9 bg-gradient-to-br from-[#08271F] via-[#09352A] to-[#041914] text-white border border-white/15 shadow-2xl flex flex-col justify-between">
                <div class="space-y-5">
                    <div class="flex items-center justify-between">
                        <span class="px-3.5 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-[#D8F36B] text-[#08271F]">
                            Duty-Free Tax Relief (ToR)
                        </span>
                        <div class="w-10 h-10 rounded-xl bg-white/10 text-[#D8F36B] flex items-center justify-center text-lg">
                            <i class="fa-solid fa-stamp"></i>
                        </div>
                    </div>

                    <h3 class="text-2xl sm:text-3xl font-black font-heading text-white tracking-tight">
                        Destination Import Duty Exemptions
                    </h3>

                    <p class="text-xs sm:text-sm text-white/85 leading-relaxed">
                        Sovereign nations provide duty-free and VAT-free import for used household effects under Transfer of Residence (ToR) provisions. We guide you through country-specific exemptions to eliminate unnecessary customs taxes:
                    </p>

                    {{-- Destination Schemes List --}}
                    <div class="space-y-3 pt-1 text-xs">
                        <div class="p-3 rounded-2xl bg-white/[0.07] border border-white/10">
                            <div class="flex items-center justify-between font-bold text-white mb-0.5">
                                <span class="flex items-center gap-2">🇬🇧 United Kingdom</span>
                                <span class="text-[#D8F36B] text-[11px]">HMRC ToR01 Relief</span>
                            </div>
                            <p class="text-white/70 text-[11px]">Must have lived outside the UK for 12+ months. Goods owned for 6+ months enter zero duty & VAT.</p>
                        </div>

                        <div class="p-3 rounded-2xl bg-white/[0.07] border border-white/10">
                            <div class="flex items-center justify-between font-bold text-white mb-0.5">
                                <span class="flex items-center gap-2">🇺🇸 United States</span>
                                <span class="text-[#D8F36B] text-[11px]">CBP Form 3299</span>
                            </div>
                            <p class="text-white/70 text-[11px]">Free entry for bona fide personal belongings and household items owned for at least 1 year.</p>
                        </div>

                        <div class="p-3 rounded-2xl bg-white/[0.07] border border-white/10">
                            <div class="flex items-center justify-between font-bold text-white mb-0.5">
                                <span class="flex items-center gap-2">🇦🇺 Australia</span>
                                <span class="text-[#D8F36B] text-[11px]">B534 & Biosecurity</span>
                            </div>
                            <p class="text-white/70 text-[11px]">Duty exemption with mandatory timber inspection. ISPM-15 crating is legally enforced.</p>
                        </div>

                        <div class="p-3 rounded-2xl bg-white/[0.07] border border-white/10">
                            <div class="flex items-center justify-between font-bold text-white mb-0.5">
                                <span class="flex items-center gap-2">🇸🇦 GCC / Middle East</span>
                                <span class="text-[#D8F36B] text-[11px]">GCC Unified Exemption</span>
                            </div>
                            <p class="text-white/70 text-[11px]">Relocation across KSA, Qatar, and Oman benefits from unified customs treaties for used effects.</p>
                        </div>
                    </div>
                </div>

                <div class="pt-6 mt-6 border-t border-white/15">
                    <button type="button" 
                            onclick="openQuoteModal('International', 'Customs Consultation')" 
                            class="w-full inline-flex items-center justify-center gap-2 font-black px-6 py-3.5 rounded-full bg-[#B7E532] text-[#073B2E] hover:bg-[#cbf54a] text-xs sm:text-sm shadow-lg transition-all duration-200 transform hover:-translate-y-0.5 cursor-pointer">
                        <i class="fa-solid fa-headset text-xs"></i>
                        <span>Speak to Customs Clearance Specialist</span>
                    </button>
                </div>
            </div>

        </div>

    </div>
</section>



{{-- =========================================================================
     8. FREQUENTLY ASKED QUESTIONS (High-Contrast Interactive Alpine Accordion)
     ========================================================================= --}}
<section class="py-10 sm:py-12 lg:py-14 bg-white border-b border-[#E2E8E2] w-full">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Section Header --}}
        <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-10 space-y-3">
            <span class="forest-badge">
                <i class="fa-solid fa-circle-question"></i> Global Moving FAQs
            </span>
            <h2 class="text-3xl sm:text-4xl font-black font-heading text-[#103B30] tracking-tight">
                Frequently Asked Questions
            </h2>
            <p class="text-sm sm:text-base text-[#425048] leading-relaxed">
                Clear answers regarding maritime schedules, customs duty relief, prohibited goods, and cargo protection.
            </p>
        </div>

        {{-- Accordion Container --}}
        <div class="space-y-4" x-data="{ openFaq: 1 }">
            
            {{-- FAQ 1 --}}
            <div class="rounded-2xl border transition-all duration-200 overflow-hidden"
                 :class="openFaq === 1 ? 'bg-white border-[#103B30] shadow-md' : 'bg-white border-[#E2E8E2] hover:border-gray-300'">
                <button type="button" 
                        @click="openFaq = (openFaq === 1 ? null : 1)" 
                        class="w-full p-5 sm:p-6 text-left flex items-center justify-between gap-4 font-bold text-sm sm:text-base text-[#202824] focus:outline-none">
                    <span class="flex items-center gap-3">
                        <span class="w-7 h-7 rounded-lg bg-[#EBF2EB] text-[#103B30] flex items-center justify-center text-xs shrink-0 font-bold">1</span>
                        <span>How is the cost of an international move from Dubai calculated?</span>
                    </span>
                    <i class="fa-solid fa-chevron-down text-xs transition-transform duration-200 text-[#103B30]"
                       :class="openFaq === 1 ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="openFaq === 1" 
                     x-transition:enter="transition ease-out duration-200" 
                     x-transition:enter-start="opacity-0 -translate-y-1" 
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-cloak>
                    <div class="px-5 pb-6 sm:px-6 text-xs sm:text-sm text-[#4F5953] leading-relaxed border-t border-gray-100 pt-4 space-y-2">
                        <p>
                            International moving pricing is primarily determined by four key factors: 
                            <strong>total volume (cubic meters / CBM)</strong>, <strong>freight mode</strong> (Dedicated FCL container, Shared LCL lift-van crate, or Priority Air Freight), <strong>origin and destination access conditions</strong> (elevators, stairs, shuttle access), and <strong>customs clearance requirements</strong> at the destination port.
                        </p>
                        <p>
                            MOVEXA provides transparent, all-inclusive quotations following a complimentary on-site or virtual 3D survey, detailing all freight charges, export packing materials, and handling fees with zero hidden charges.
                        </p>
                    </div>
                </div>
            </div>

            {{-- FAQ 2 --}}
            <div class="rounded-2xl border transition-all duration-200 overflow-hidden"
                 :class="openFaq === 2 ? 'bg-white border-[#103B30] shadow-md' : 'bg-white border-[#E2E8E2] hover:border-gray-300'">
                <button type="button" 
                        @click="openFaq = (openFaq === 2 ? null : 2)" 
                        class="w-full p-5 sm:p-6 text-left flex items-center justify-between gap-4 font-bold text-sm sm:text-base text-[#202824] focus:outline-none">
                    <span class="flex items-center gap-3">
                        <span class="w-7 h-7 rounded-lg bg-[#EBF2EB] text-[#103B30] flex items-center justify-center text-xs shrink-0 font-bold">2</span>
                        <span>How far in advance should I plan and book an international relocation?</span>
                    </span>
                    <i class="fa-solid fa-chevron-down text-xs transition-transform duration-200 text-[#103B30]"
                       :class="openFaq === 2 ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="openFaq === 2" 
                     x-transition:enter="transition ease-out duration-200" 
                     x-transition:enter-start="opacity-0 -translate-y-1" 
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-cloak>
                    <div class="px-5 pb-6 sm:px-6 text-xs sm:text-sm text-[#4F5953] leading-relaxed border-t border-gray-100 pt-4">
                        We recommend starting your survey and booking <strong>4 to 8 weeks before your desired departure date</strong>. This timeline ensures carrier container space reservations during peak maritime seasons, allows adequate time for custom ISPM-15 wooden crating construction, and provides ample window for destination customs pre-approvals (such as the UK ToR01 or Australian biosecurity documentation).
                    </div>
                </div>
            </div>

            {{-- FAQ 3 --}}
            <div class="rounded-2xl border transition-all duration-200 overflow-hidden"
                 :class="openFaq === 3 ? 'bg-white border-[#103B30] shadow-md' : 'bg-white border-[#E2E8E2] hover:border-gray-300'">
                <button type="button" 
                        @click="openFaq = (openFaq === 3 ? null : 3)" 
                        class="w-full p-5 sm:p-6 text-left flex items-center justify-between gap-4 font-bold text-sm sm:text-base text-[#202824] focus:outline-none">
                    <span class="flex items-center gap-3">
                        <span class="w-7 h-7 rounded-lg bg-[#EBF2EB] text-[#103B30] flex items-center justify-center text-xs shrink-0 font-bold">3</span>
                        <span>What items are strictly prohibited from international sea and air shipments?</span>
                    </span>
                    <i class="fa-solid fa-chevron-down text-xs transition-transform duration-200 text-[#103B30]"
                       :class="openFaq === 3 ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="openFaq === 3" 
                     x-transition:enter="transition ease-out duration-200" 
                     x-transition:enter-start="opacity-0 -translate-y-1" 
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-cloak>
                    <div class="px-5 pb-6 sm:px-6 text-xs sm:text-sm text-[#4F5953] leading-relaxed border-t border-gray-100 pt-4 space-y-2">
                        <p>
                            International maritime and aviation laws strictly forbid hazardous, flammable, or perishable goods. Common restricted and prohibited items include:
                        </p>
                        <ul class="list-disc list-inside space-y-1 pl-2 text-xs">
                            <li>Aerosol spray cans, compressed gas cylinders, fire extinguishers, and fireworks.</li>
                            <li>Perishable food, meat products, plants, seeds, and soil.</li>
                            <li>Flammable liquids, perfumes in bulk, paints, lighter fluids, and chemicals.</li>
                            <li>Loose lithium-ion power banks exceeding carrier safety watt-hour limits.</li>
                            <li>Unlicensed alcoholic beverages (unless declared under specialized destination customs permits).</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- FAQ 4 --}}
            <div class="rounded-2xl border transition-all duration-200 overflow-hidden"
                 :class="openFaq === 4 ? 'bg-white border-[#103B30] shadow-md' : 'bg-white border-[#E2E8E2] hover:border-gray-300'">
                <button type="button" 
                        @click="openFaq = (openFaq === 4 ? null : 4)" 
                        class="w-full p-5 sm:p-6 text-left flex items-center justify-between gap-4 font-bold text-sm sm:text-base text-[#202824] focus:outline-none">
                    <span class="flex items-center gap-3">
                        <span class="w-7 h-7 rounded-lg bg-[#EBF2EB] text-[#103B30] flex items-center justify-center text-xs shrink-0 font-bold">4</span>
                        <span>How do I qualify for duty-free Transfer of Residence (ToR) tax relief?</span>
                    </span>
                    <i class="fa-solid fa-chevron-down text-xs transition-transform duration-200 text-[#103B30]"
                       :class="openFaq === 4 ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="openFaq === 4" 
                     x-transition:enter="transition ease-out duration-200" 
                     x-transition:enter-start="opacity-0 -translate-y-1" 
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-cloak>
                    <div class="px-5 pb-6 sm:px-6 text-xs sm:text-sm text-[#4F5953] leading-relaxed border-t border-gray-100 pt-4">
                        Most sovereign countries (including the UK, USA, Australia, and EU member states) grant 100% customs import duty and VAT exemptions on used household effects if you can demonstrate you have lived outside the country (e.g. in Dubai/UAE) for at least 12 continuous months, and that you have personally owned and used the goods for at least 6 months prior to shipment. MOVEXA assists with preparing all supporting proof and required declaration forms.
                    </div>
                </div>
            </div>

            {{-- FAQ 5 --}}
            <div class="rounded-2xl border transition-all duration-200 overflow-hidden"
                 :class="openFaq === 5 ? 'bg-white border-[#103B30] shadow-md' : 'bg-white border-[#E2E8E2] hover:border-gray-300'">
                <button type="button" 
                        @click="openFaq = (openFaq === 5 ? null : 5)" 
                        class="w-full p-5 sm:p-6 text-left flex items-center justify-between gap-4 font-bold text-sm sm:text-base text-[#202824] focus:outline-none">
                    <span class="flex items-center gap-3">
                        <span class="w-7 h-7 rounded-lg bg-[#EBF2EB] text-[#103B30] flex items-center justify-center text-xs shrink-0 font-bold">5</span>
                        <span>Can MOVEXA ship my car or vehicle overseas alongside my household goods?</span>
                    </span>
                    <i class="fa-solid fa-chevron-down text-xs transition-transform duration-200 text-[#103B30]"
                       :class="openFaq === 5 ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="openFaq === 5" 
                     x-transition:enter="transition ease-out duration-200" 
                     x-transition:enter-start="opacity-0 -translate-y-1" 
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-cloak>
                    <div class="px-5 pb-6 sm:px-6 text-xs sm:text-sm text-[#4F5953] leading-relaxed border-t border-gray-100 pt-4">
                        Yes! We provide dedicated vehicle shipping from Jebel Ali Port. Motor vehicles can be consolidated inside a dedicated 40ft High-Cube container together with your household furniture (utilizing custom timber chocking, wheel lashing, and fuel drainage safety protocols) or shipped independently via dedicated Ro-Ro (Roll-on/Roll-off) car-carrier ocean vessels.
                    </div>
                </div>
            </div>

            {{-- FAQ 6 --}}
            <div class="rounded-2xl border transition-all duration-200 overflow-hidden"
                 :class="openFaq === 6 ? 'bg-white border-[#103B30] shadow-md' : 'bg-white border-[#E2E8E2] hover:border-gray-300'">
                <button type="button" 
                        @click="openFaq = (openFaq === 6 ? null : 6)" 
                        class="w-full p-5 sm:p-6 text-left flex items-center justify-between gap-4 font-bold text-sm sm:text-base text-[#202824] focus:outline-none">
                    <span class="flex items-center gap-3">
                        <span class="w-7 h-7 rounded-lg bg-[#EBF2EB] text-[#103B30] flex items-center justify-center text-xs shrink-0 font-bold">6</span>
                        <span>What insurance coverage protects my goods during transoceanic shipping?</span>
                    </span>
                    <i class="fa-solid fa-chevron-down text-xs transition-transform duration-200 text-[#103B30]"
                       :class="openFaq === 6 ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="openFaq === 6" 
                     x-transition:enter="transition ease-out duration-200" 
                     x-transition:enter-start="opacity-0 -translate-y-1" 
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-cloak>
                    <div class="px-5 pb-6 sm:px-6 text-xs sm:text-sm text-[#4F5953] leading-relaxed border-t border-gray-100 pt-4">
                        MOVEXA partners with leading international marine insurance syndicates to provide comprehensive <strong>All-Risk Marine Transit Coverage</strong>. This policy protects your personal effects door-to-door—from packing in Dubai, transit through Jebel Ali, ocean voyage, to unloading and placing inside your new home—against maritime perils, theft, handling damage, and container total loss.
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- =========================================================================
     9. GLOBAL CTA BANNER
     ========================================================================= --}}
<section class="bg-white py-4 sm:py-6 w-full">
    <x-cta-banner 
    headline="Planning an Overseas Move from Dubai?"
    subheadline="Consult our international relocation team today for volume surveys, container options, maritime transit timelines, and customs tax relief guidance."
    buttonText="Request International Quote"
    destination="International"
/>
</section>

@endsection
