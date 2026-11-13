@extends('layouts.app')

@section('title', 'Local Movers in Dubai & Across UAE | MOVEXA Relocations')
@section('meta_description', 'Professional movers in Dubai for every kind of move. Apartment, villa, and corporate office relocations across Dubai Marina, Downtown, Palm Jumeirah, Business Bay, and all UAE Emirates.')

@section('content')

{{-- Breadcrumb --}}
<x-breadcrumb :items="[['label' => 'Local Moving in Dubai', 'url' => '']]" />

{{-- Local Moving Hero Section (Full Photographic Background with Luxury Smoked Glassmorphic Card) --}}
<section class="relative min-h-[500px] sm:min-h-[540px] lg:min-h-[580px] xl:min-h-[620px] flex items-center text-white overflow-hidden py-10 sm:py-12 lg:py-14 bg-[#071712] w-full border-b border-[#143B2F]/60">
    
    {{-- Full Natural Hero Background Image Layer --}}
    <div class="absolute inset-0 z-0 bg-[#071712] overflow-hidden pointer-events-none">
        {{-- Ambient soft-blurred backdrop to seamlessly fill any ultrawide aspect ratio --}}
        <img src="{{ asset('images/gallery/movexa-gallery-truck-house-fleet.jpg') }}" 
             alt="" 
             aria-hidden="true" 
             class="absolute inset-0 w-full h-full object-cover filter blur-3xl opacity-30 scale-110 pointer-events-none">
        
        {{-- Main Crisp Hero Slide Image --}}
        <img src="{{ asset('images/gallery/movexa-gallery-truck-house-fleet.jpg') }}" 
             alt="Local Movers in Dubai Fleet - MOVEXA" 
             class="w-full h-full object-cover object-[75%_center] sm:object-[78%_center] md:object-[80%_center] lg:object-center relative z-0">

        {{-- Natural Soft Neutral Contrast Gradient (Preserves vivid photo colors while keeping glass card readable) --}}
        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/40 to-black/25 lg:bg-gradient-to-r lg:from-black/75 lg:via-black/35 lg:to-transparent z-10 pointer-events-none"></div>
    </div>

    {{-- Top Specular Light Highlight Line --}}
    <div class="absolute top-0 left-6 right-6 sm:left-12 sm:right-12 h-[1px] bg-gradient-to-r from-transparent via-white/30 to-transparent pointer-events-none z-20"></div>

    <div class="max-w-7xl 2xl:max-w-[1520px] mx-auto px-4 sm:px-6 lg:px-8 relative z-20 w-full">
        {{-- Hero Content (Direct Typography & Actions, No Card Container) --}}
        <div class="w-full max-w-full sm:max-w-xl md:max-w-2xl text-left relative z-20 space-y-4 sm:space-y-5">
            
            {{-- Category Pill Badge with Live Pulsing Lime Accent --}}
            <div>
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-black/40 backdrop-blur-md border border-white/20 text-white text-[11px] sm:text-xs font-bold tracking-wider uppercase shadow-xs">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#B7E532] opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-[#B7E532] shadow-[0_0_8px_#B7E532]"></span>
                    </span>
                    <span class="text-white">DUBAI & UAE DOMESTIC OPERATIONS</span>
                </div>
            </div>

            {{-- Main Headline --}}
            <h1 class="text-3xl min-[375px]:text-4xl sm:text-5xl lg:text-[50px] xl:text-[54px] font-black font-heading tracking-tight text-white leading-[1.14] drop-shadow-[0_2px_16px_rgba(0,0,0,0.95)]">
                Professional Movers in Dubai for Every Move.
            </h1>

            {{-- Supporting Subheadline --}}
            <p class="text-sm sm:text-base lg:text-lg text-white/90 leading-relaxed font-normal drop-shadow-[0_2px_8px_rgba(0,0,0,0.95)] max-w-xl">
                From studio apartments in Downtown to sprawling luxury villas in Arabian Ranches and commercial headquarters in DIFC, MOVEXA handles your local relocation with precision, care, and transparent pricing.
            </p>

            {{-- Action Buttons Row --}}
            <div class="pt-2 sm:pt-3 flex flex-col sm:flex-row items-stretch sm:items-center justify-start gap-3 sm:gap-4 w-full">
                <button type="button" 
                        onclick="openQuoteModal('Dubai Local Move', 'Local Moving in Dubai')" 
                        class="inline-flex items-center justify-center gap-2 font-extrabold px-7 py-3.5 rounded-full bg-[#B7E532] text-[#073B2E] hover:bg-[#cbf54a] text-xs sm:text-sm shadow-lg hover:shadow-xl hover:shadow-[#B7E532]/20 transition-all duration-200 transform hover:-translate-y-0.5 focus:outline-none w-full sm:w-auto cursor-pointer">
                    <i class="fa-solid fa-file-invoice text-xs"></i>
                    <span>Get Local Moving Quote</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </button>

                <a href="https://wa.me/{{ config('movexa.brand.whatsapp_number') }}?text={{ urlencode('Hello MOVEXA, I am looking for local movers in Dubai.') }}" 
                   target="_blank" 
                   rel="noopener" 
                   class="inline-flex items-center justify-center gap-2 font-semibold px-6 py-3.5 rounded-full border border-white/60 bg-white/10 hover:bg-white hover:text-[#073B2E] text-white text-xs sm:text-sm backdrop-blur-md transition-all duration-200 focus:outline-none w-full sm:w-auto shadow-md">
                    <i class="fa-brands fa-whatsapp text-sm text-[#25D366]"></i>
                    <span>WhatsApp Moving Team</span>
                </a>
            </div>

            {{-- Key Trust Assurance Strip --}}
            <div class="pt-4 border-t border-white/20 flex flex-wrap items-center gap-y-2 gap-x-5 text-xs sm:text-sm text-white/90 font-medium drop-shadow-[0_1px_4px_rgba(0,0,0,0.85)]">
                <span class="inline-flex items-center gap-1.5">
                    <i class="fa-solid fa-circle-check text-[#B7E532] text-xs"></i>
                    <span>Same-Day Survey</span>
                </span>
                <span class="inline-flex items-center gap-1.5">
                    <i class="fa-solid fa-circle-check text-[#B7E532] text-xs"></i>
                    <span>All 7 Emirates Covered</span>
                </span>
                <span class="inline-flex items-center gap-1.5">
                    <i class="fa-solid fa-circle-check text-[#B7E532] text-xs"></i>
                    <span>Dubai NOC Guaranteed</span>
                </span>
            </div>

        </div>
    </div>
</section>

{{-- Dubai Service Areas Section (10 Neighborhoods) --}}
<section class="py-10 sm:py-12 lg:py-14 bg-white border-b border-[#E2E8E2] w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-10 space-y-3">
        <span class="forest-badge">
            <i class="fa-solid fa-city"></i> Hyper-Local Expertise
        </span>
        <h2 class="text-3xl sm:text-4xl lg:text-[40px] font-black font-heading text-[#103B30] tracking-tight">
            Dubai Service Areas We Cover
        </h2>
        <p class="text-sm sm:text-base text-[#425048] leading-relaxed max-w-2xl mx-auto">
            Every Dubai community has its own access nuances, elevator rules, and security gate clearances. Our experienced crew navigates each neighborhood daily.
        </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
        @foreach ($dubai_areas as $area)
        <div class="bg-white rounded-3xl p-5 border border-[#E2E8E2] shadow-sm hover:shadow-premium transition-all card-hover flex flex-col justify-between">
            <div>
                <div class="w-10 h-10 rounded-2xl bg-[#EBF2EB] text-[#103B30] flex items-center justify-center text-base mb-3">
                    <i class="fa-solid {{ $area['icon'] }}"></i>
                </div>
                <h3 class="text-base font-black font-heading text-[#103B30] mb-1.5">
                    {{ $area['name'] }}
                </h3>
                <p class="text-xs sm:text-[13px] text-[#425048] leading-relaxed">
                    {{ $area['desc'] }}
                </p>
            </div>
            <div class="pt-3 mt-3 border-t border-gray-100 flex items-center justify-between">
                <span class="text-[10px] font-bold text-[#103B30] uppercase tracking-wider">Active Fleet</span>
                <button type="button" onclick="openQuoteModal('{{ $area['name'] }}', 'Home Moving')" class="text-xs text-[#103B30] hover:text-[#08271F] font-bold">
                    Book Move →
                </button>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</section>

{{-- Additional UAE Emirates Section --}}
<section class="py-10 sm:py-12 lg:py-14 bg-white border-b border-[#E2E8E2] w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
            <div>
                <span class="forest-badge">
                    <i class="fa-solid fa-road"></i> Inter-Emirate Transit
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold font-heading text-[#202824] tracking-tight mt-2">
                    Moving to Other UAE Emirates
                </h2>
                <p class="text-sm text-[#747C76] max-w-xl mt-1">
                    Daily scheduled moving links connecting Dubai to the rest of the United Arab Emirates.
                </p>
            </div>
            <button type="button" onclick="openQuoteModal('Inter-Emirate', 'Home Moving')" class="btn-forest text-xs font-bold py-2.5 px-5 self-start md:self-auto">
                <i class="fa-solid fa-calculator"></i> Quote Inter-Emirate Move
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($emirates as $em)
            <div class="p-6 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm hover:shadow-md transition-all card-hover space-y-3 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="text-lg font-black font-heading text-[#103B30]">Movers In {{ $em['name'] }}</h3>
                        <span class="text-[10px] font-bold px-2.5 py-0.5 rounded-full bg-[#103B30] text-[#D8F36B]">{{ $em['dist'] }}</span>
                    </div>
                    <p class="text-xs sm:text-sm text-[#425048] leading-relaxed">{{ $em['desc'] }}</p>
                </div>
                <div class="pt-3 border-t border-[#E2E8E2] flex items-center justify-between">
                    <a href="tel:0507060165" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#073B2E] hover:text-[#107050]">
                        <i class="fa-solid fa-phone text-[10px] text-[#073B2E]"></i>
                        <span>050 706 0165</span>
                    </a>
                    <button type="button" onclick="openQuoteModal('{{ $em['name'] }}', 'Inter-Emirate Move')" class="text-xs font-bold text-[#073B2E] hover:underline">
                        Book Move →
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Dubai Local Moving FAQ / Permit Guidelines --}}
<section class="py-10 sm:py-12 lg:py-14 bg-white border-b border-[#E2E8E2] w-full">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-8 sm:mb-10 space-y-2">
        <span class="forest-badge">Moving in Dubai</span>
        <h2 class="text-3xl sm:text-4xl font-black font-heading text-[#103B30] tracking-tight">
            Dubai Moving Regulations & Building NOCs
        </h2>
        <p class="text-sm text-[#425048] leading-relaxed">
            Everything you need to know about move-in permits, security deposits, and elevator reservations.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-3xl border border-[#E2E8E2] shadow-sm space-y-2.5">
            <h4 class="text-base font-black text-[#103B30] flex items-center gap-2">
                <i class="fa-solid fa-file-signature"></i> Move-In / Move-Out NOCs
            </h4>
            <p class="text-xs sm:text-sm text-[#425048] leading-relaxed">
                Developers like Emaar (Downtown, Marina, Dubai Hills), Nakheel (Palm, JVT), and Dubai Holding mandate an approved Move-In permit before truck entry. We furnish all trade licenses, driver Emirates IDs, and commercial vehicle papers immediately upon booking.
            </p>
        </div>

        <div class="bg-white p-6 rounded-3xl border border-[#E2E8E2] shadow-sm space-y-2.5">
            <h4 class="text-base font-black text-[#103B30] flex items-center gap-2">
                <i class="fa-solid fa-elevator"></i> Service Lift Slots
            </h4>
            <p class="text-xs sm:text-sm text-[#425048] leading-relaxed">
                Towers restrict moving operations to designated service elevators during specific business hours (typically 9 AM to 5 PM). We coordinate elevator reservation padding so common area carpets and mirrors are fully shielded against scratches.
            </p>
        </div>

        <div class="bg-white p-6 rounded-3xl border border-[#E2E8E2] shadow-sm space-y-2.5">
            <h4 class="text-base font-black text-[#103B30] flex items-center gap-2">
                <i class="fa-solid fa-bolt"></i> DEWA & Ejari Timing
            </h4>
            <p class="text-xs sm:text-sm text-[#425048] leading-relaxed">
                Ensure your DEWA electricity and water are active at the destination property before moving day so air conditioning is operational for packing crew and delicate furniture.
            </p>
        </div>

        <div class="bg-white p-6 rounded-3xl border border-[#E2E8E2] shadow-sm space-y-2.5">
            <h4 class="text-base font-black text-[#103B30] flex items-center gap-2">
                <i class="fa-solid fa-screwdriver-wrench"></i> Handyman & Carpentry
            </h4>
            <p class="text-xs sm:text-sm text-[#425048] leading-relaxed">
                Our local moving teams include experienced handymen who dismantle and reassemble beds, unmount curtain rods, chandeliers, and wall TVs safely.
            </p>
        </div>
    </div>
    </div>
</section>

{{-- Global CTA --}}
<section class="bg-white py-4 sm:py-6 w-full">
    <x-cta-banner 
    headline="Planning a Move Across Dubai?"
    subheadline="Get in touch today for an honest, transparent quote with zero surprise charges."
    buttonText="Request Dubai Moving Quote"
/>
</section>

@endsection
