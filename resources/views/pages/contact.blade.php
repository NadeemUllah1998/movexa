@extends('layouts.app')

@section('title', 'Contact MOVEXA | Moving Company in Dubai, UAE | Get a Free Quote')
@section('meta_description', 'Get in touch with MOVEXA relocation specialists in Dubai. Reach us via WhatsApp, phone, or email for instant quotes, free video surveys, building permit assistance, and relocation advice.')

@section('content')

{{-- Breadcrumb --}}
<x-breadcrumb :items="[['label' => 'Contact Us', 'url' => '']]" />

{{-- =========================================================================
     1. HERO SECTION: CLEAN MOVER PHOTOGRAPHIC BACKGROUND & MINIMAL "CONTACT US"
     ========================================================================= --}}
<section class="relative text-white overflow-hidden py-14 sm:py-20 lg:py-24 bg-neutral-950 w-full flex items-center justify-center">
    {{-- Full Photographic Mover Background (Uniformed Crew & Branded Fleet in Dubai) --}}
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <img src="{{ asset('images/hero/movexa-hero-team.webp') }}" 
             alt="MOVEXA Professional Moving Crew and Fleet in Dubai" 
             class="w-full h-full object-cover object-center pointer-events-none scale-100" 
             loading="eager" 
             decoding="async">
        {{-- High-Contrast Neutral Cinematic Dark Overlay --}}
        <div class="absolute inset-0 bg-gradient-to-b from-black/85 via-black/70 to-black/90 pointer-events-none"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/40 pointer-events-none"></div>
    </div>

    {{-- Subtle Top Specular Laser Line --}}
    <div class="absolute top-0 inset-x-0 h-[1.5px] bg-gradient-to-r from-transparent via-[#D8F36B]/60 to-transparent pointer-events-none"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full text-center">
        {{-- Clean Single Main Headline: Contact Us --}}
        <h1 class="text-4xl min-[375px]:text-5xl sm:text-6xl lg:text-7xl font-black font-heading text-white tracking-tight leading-tight drop-shadow-[0_2px_18px_rgba(0,0,0,0.95)]">
            Contact Us
        </h1>
    </div>
</section>

{{-- =========================================================================
     2. EXECUTIVE OPERATIONAL STATUS RIBBON (DIRECTLY BENEATH HERO)
     ========================================================================= --}}
<section class="bg-[#061D17] border-y border-[#164335] text-white py-5 sm:py-6 relative z-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 min-[480px]:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 divide-y min-[480px]:divide-y-0 sm:divide-x divide-white/10">
            
            {{-- Stat 1: Phone Line --}}
            <div class="flex items-center gap-3.5 pt-3 min-[480px]:pt-0">
                <span class="w-10 h-10 rounded-xl bg-white/5 border border-white/15 text-[#D8F36B] flex items-center justify-center text-sm shrink-0 shadow-2xs">
                    <i class="fa-solid fa-phone-volume"></i>
                </span>
                <div>
                    <div class="text-sm sm:text-base font-black text-white font-heading">{{ config('movexa.brand.phone_display') }}</div>
                    <div class="text-[11px] text-[#A6C5B8] font-medium leading-tight">Mon–Sat: 8:00 AM – 8:00 PM (GST)</div>
                </div>
            </div>

            {{-- Stat 2: WhatsApp Desk --}}
            <div class="flex items-center gap-3.5 pt-3 min-[480px]:pt-0 sm:pl-6">
                <span class="w-10 h-10 rounded-xl bg-white/5 border border-white/15 text-[#25D366] flex items-center justify-center text-base shrink-0 shadow-2xs">
                    <i class="fa-brands fa-whatsapp"></i>
                </span>
                <div>
                    <div class="text-sm sm:text-base font-black text-white font-heading">WhatsApp Moving Desk</div>
                    <div class="text-[11px] text-[#A6C5B8] font-medium leading-tight">Instant photos &amp; video survey chat</div>
                </div>
            </div>

            {{-- Stat 3: Location Hub --}}
            <div class="flex items-center gap-3.5 pt-3 min-[480px]:pt-0 sm:pl-6">
                <span class="w-10 h-10 rounded-xl bg-white/5 border border-white/15 text-[#D8F36B] flex items-center justify-center text-sm shrink-0 shadow-2xs">
                    <i class="fa-solid fa-location-dot"></i>
                </span>
                <div>
                    <div class="text-sm sm:text-base font-black text-white font-heading">Business Bay, Dubai</div>
                    <div class="text-[11px] text-[#A6C5B8] font-medium leading-tight">Serving all 7 UAE Emirates &amp; Global</div>
                </div>
            </div>

            {{-- Stat 4: Free Survey Guarantee --}}
            <div class="flex items-center gap-3.5 pt-3 min-[480px]:pt-0 sm:pl-6">
                <span class="w-10 h-10 rounded-xl bg-white/5 border border-white/15 text-[#D8F36B] flex items-center justify-center text-sm shrink-0 shadow-2xs">
                    <i class="fa-solid fa-clipboard-check"></i>
                </span>
                <div>
                    <div class="text-sm sm:text-base font-black text-white font-heading">100% Free Survey</div>
                    <div class="text-[11px] text-[#A6C5B8] font-medium leading-tight">Virtual video or on-site consultation</div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- =========================================================================
     3. MAIN CONTACT & CONSULTATION SECTION: DIRECT CHANNELS & SMART FORM
     ========================================================================= --}}
<section class="py-12 sm:py-16 lg:py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
        
        {{-- Contact Details (Left Column - 5 Cols) --}}
        <div class="lg:col-span-5 space-y-6">
            
            <div>
                <span class="forest-badge mb-2">Direct Communication</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold font-heading text-[#073B2E] tracking-tight">
                    Get in Touch With Our Team
                </h2>
                <p class="text-xs sm:text-sm text-[#46574D] mt-2 leading-relaxed font-normal">
                    Our relocation advisors in Dubai are available to answer your moving questions, clarify building permit steps, evaluate special items, and provide binding written proposals.
                </p>
            </div>

            <div class="space-y-3.5">
                
                {{-- Phone Card --}}
                <div class="p-4 sm:p-5 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm hover:shadow-md transition-all card-hover flex items-start gap-4 group">
                    <div class="w-12 h-12 rounded-2xl bg-[#EBF5E7] text-[#103B30] group-hover:bg-[#103B30] group-hover:text-[#D8F36B] flex items-center justify-center text-lg shrink-0 transition-colors shadow-2xs">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <span class="text-[11px] font-bold text-[#747C76] uppercase tracking-wider">Direct Hotline</span>
                            <span class="text-[10px] font-bold px-2 py-0.5 rounded-full bg-[#EBF5E7] text-[#103B30]">Active Line</span>
                        </div>
                        <a href="tel:{{ config('movexa.brand.phone_raw') }}" class="text-base font-black text-[#073B2E] hover:text-[#103B30] transition-colors mt-0.5 block font-heading">
                            {{ config('movexa.brand.phone_display') }}
                        </a>
                        <span class="text-xs text-[#5C6A62] block mt-0.5">{{ config('movexa.brand.hours') }}</span>
                    </div>
                </div>

                {{-- WhatsApp Card --}}
                <div class="p-4 sm:p-5 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm hover:shadow-md transition-all card-hover flex items-start gap-4 group">
                    <div class="w-12 h-12 rounded-2xl bg-[#25D366]/15 text-[#25D366] group-hover:bg-[#25D366] group-hover:text-white flex items-center justify-center text-xl shrink-0 transition-colors shadow-2xs">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <span class="text-[11px] font-bold text-[#747C76] uppercase tracking-wider">Instant WhatsApp</span>
                            <span class="inline-flex items-center gap-1 text-[10px] font-bold px-2 py-0.5 rounded-full bg-[#25D366]/15 text-[#15803d]">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#25D366] animate-pulse"></span>
                                Online Now
                            </span>
                        </div>
                        <a href="https://wa.me/{{ config('movexa.brand.whatsapp_number') }}?text={{ urlencode('Hello MOVEXA, I would like to inquire about your moving services.') }}" 
                           target="_blank" 
                           rel="noopener" 
                           class="text-base font-black text-[#073B2E] hover:text-[#25D366] transition-colors mt-0.5 block font-heading">
                            {{ config('movexa.brand.whatsapp_display') }}
                        </a>
                        <span class="text-xs text-[#5C6A62] block mt-0.5">Send inventory photos &amp; get instant estimate</span>
                    </div>
                </div>

                {{-- Email Card --}}
                <div class="p-4 sm:p-5 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm hover:shadow-md transition-all card-hover flex items-start gap-4 group">
                    <div class="w-12 h-12 rounded-2xl bg-[#EBF5E7] text-[#103B30] group-hover:bg-[#103B30] group-hover:text-[#D8F36B] flex items-center justify-center text-lg shrink-0 transition-colors shadow-2xs">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <span class="text-[11px] font-bold text-[#747C76] uppercase tracking-wider">Formal Inquiries</span>
                            <span class="text-[10px] font-bold px-2 py-0.5 rounded-full bg-[#EBF5E7] text-[#103B30]">RFP &amp; Quotes</span>
                        </div>
                        <a href="mailto:{{ config('movexa.brand.email') }}" class="text-base font-black text-[#073B2E] hover:text-[#103B30] transition-colors mt-0.5 block font-heading">
                            {{ config('movexa.brand.email') }}
                        </a>
                        <span class="text-xs text-[#5C6A62] block mt-0.5">Official proposals, corporate RFPs &amp; contracts</span>
                    </div>
                </div>

                {{-- Office Location Card --}}
                <div class="p-4 sm:p-5 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm hover:shadow-md transition-all card-hover flex items-start gap-4 group">
                    <div class="w-12 h-12 rounded-2xl bg-[#EBF5E7] text-[#103B30] group-hover:bg-[#103B30] group-hover:text-[#D8F36B] flex items-center justify-center text-lg shrink-0 transition-colors shadow-2xs">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <span class="text-[11px] font-bold text-[#747C76] uppercase tracking-wider">Headquarters &amp; Dispatch</span>
                            <span class="text-[10px] font-bold px-2 py-0.5 rounded-full bg-[#EBF5E7] text-[#103B30]">Licensed UAE</span>
                        </div>
                        <span class="text-sm font-black text-[#073B2E] mt-0.5 block font-heading">
                            Business Bay, Dubai, United Arab Emirates
                        </span>
                        <span class="text-xs text-[#5C6A62] block mt-0.5">Fleet dispatches daily across all Dubai communities &amp; 7 Emirates</span>
                    </div>
                </div>

            </div>

            {{-- Interactive Location & Route Directions Card --}}
            <div class="relative rounded-3xl overflow-hidden border border-[#DDE6DD] shadow-sm bg-gradient-to-br from-[#072F25] to-[#041A14] text-white p-5 sm:p-6 space-y-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-[#B7E532] text-[#073B2E] flex items-center justify-center text-base font-bold shadow-md">
                            <i class="fa-solid fa-map-location-dot"></i>
                        </div>
                        <div>
                            <span class="text-[11px] text-[#D8F36B] uppercase font-bold tracking-wider block">Operational Hub</span>
                            <h4 class="text-sm sm:text-base font-black text-white font-heading">Dubai Operations Center</h4>
                        </div>
                    </div>
                    <span class="text-xs bg-white/10 px-2.5 py-1 rounded-full text-white/90 border border-white/20">Dubai, UAE</span>
                </div>

                <p class="text-xs text-white/80 leading-relaxed font-normal">
                    Located in Business Bay with rapid access to Sheikh Zayed Road, Al Khail Road, and Downtown Dubai. Fully licensed moving fleet with dedicated warehouse crating facilities.
                </p>

                <div class="pt-1 flex flex-col sm:flex-row items-center gap-2.5">
                    <a href="https://maps.google.com/?q=Business+Bay+Dubai+UAE" 
                       target="_blank" 
                       rel="noopener" 
                       class="w-full sm:w-auto flex-1 inline-flex items-center justify-center gap-2 py-2.5 px-4 rounded-xl bg-white/10 hover:bg-white hover:text-[#073B2E] text-white text-xs font-bold border border-white/20 transition-all shadow-2xs">
                        <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                        <span>Open Location in Google Maps</span>
                    </a>

                    <button type="button" 
                            onclick="openQuoteModal('', 'Virtual Survey Consultation')" 
                            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 py-2.5 px-4 rounded-xl bg-[#B7E532] hover:bg-[#cbf54a] text-[#073B2E] text-xs font-extrabold transition-all shadow-sm">
                        <i class="fa-solid fa-video text-xs"></i>
                        <span>Book Video Survey</span>
                    </button>
                </div>
            </div>

        </div>

        {{-- Contact & Quote Request Form (Right Column - 7 Cols) --}}
        <div class="lg:col-span-7">
            <div class="relative bg-white p-5 sm:p-7 md:p-10 rounded-3xl border border-[#DDE7DE] shadow-[0_20px_55px_-15px_rgba(7,59,46,0.1)] overflow-hidden">
                
                {{-- Permanent Top Shining Laser Line & Glow --}}
                <div class="absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent shadow-[0_0_12px_#D8F36B] z-20"></div>

                {{-- Form Header --}}
                <div class="mb-6 space-y-2">
                    <div class="flex items-center justify-between flex-wrap gap-2">
                        <span class="forest-badge">
                            <i class="fa-solid fa-file-pen text-[11px]"></i> Fast Moving Inquiry
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#EBF5E7] text-[#073B2E] text-[11px] font-bold border border-[#D0E5CF]">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#25D366] animate-pulse"></span>
                            <span>Average Reply: &lt; 15 Mins</span>
                        </span>
                    </div>

                    <h3 class="text-2xl sm:text-[28px] font-black font-heading text-[#073B2E] tracking-tight leading-tight">
                        Send a Message or Request a Quote
                    </h3>
                    <p class="text-xs sm:text-sm text-[#46574D] leading-relaxed font-normal">
                        Fill in your details below. You can send this request directly through WhatsApp for fastest priority response, or submit via our email desk.
                    </p>
                </div>

                {{-- Alert Notification Banner --}}
                <div id="contactAlert" class="hidden mb-5 p-3.5 rounded-2xl bg-red-50 border border-red-200 text-red-700 text-xs font-semibold flex items-center gap-2.5">
                    <i class="fa-solid fa-triangle-exclamation text-base"></i>
                    <span id="contactAlertMsg">Please fill all required fields before sending.</span>
                </div>

                {{-- Form Body --}}
                <form id="contactForm" onsubmit="handleContactSubmit(event)" class="space-y-4">
                    
                    {{-- Row 1: Name & Email --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="cName" class="block text-xs font-bold text-[#073B2E] mb-1.5">
                                Full Name <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-400 text-xs">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                                <input type="text" 
                                       id="cName" 
                                       required 
                                       placeholder="e.g. Tariq Al-Nuaimi" 
                                       class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] focus:ring-2 focus:ring-[#103B30]/20 py-3 pl-9 pr-3 transition-colors text-[#073B2E] placeholder-gray-400">
                            </div>
                        </div>

                        <div>
                            <label for="cEmail" class="block text-xs font-bold text-[#073B2E] mb-1.5">
                                Email Address <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-400 text-xs">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <input type="email" 
                                       id="cEmail" 
                                       required 
                                       placeholder="name@example.com" 
                                       class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] focus:ring-2 focus:ring-[#103B30]/20 py-3 pl-9 pr-3 transition-colors text-[#073B2E] placeholder-gray-400">
                            </div>
                        </div>
                    </div>

                    {{-- Row 2: Phone & Service Type --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="cPhone" class="block text-xs font-bold text-[#073B2E] mb-1.5">
                                Phone Number / WhatsApp <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-400 text-xs">
                                    <i class="fa-solid fa-phone"></i>
                                </span>
                                <input type="tel" 
                                       id="cPhone" 
                                       required 
                                       placeholder="050 7060165" 
                                       class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] focus:ring-2 focus:ring-[#103B30]/20 py-3 pl-9 pr-3 transition-colors text-[#073B2E] placeholder-gray-400">
                            </div>
                        </div>

                        <div>
                            <label for="cSubject" class="block text-xs font-bold text-[#073B2E] mb-1.5">
                                Moving Service Category <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <select id="cSubject" required class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] focus:ring-2 focus:ring-[#103B30]/20 py-3 px-3 transition-colors text-[#073B2E] bg-white">
                                    <option value="Home Moving (Dubai Residential)">Home Moving (Dubai Residential)</option>
                                    <option value="Luxury Villa Relocation">Luxury Villa Relocation</option>
                                    <option value="High-Rise Apartment Moving">High-Rise Apartment Moving</option>
                                    <option value="Corporate Office Relocation">Corporate Office Relocation</option>
                                    <option value="International Moving & Freight">International Moving &amp; Freight</option>
                                    <option value="Climate-Controlled Storage">Climate-Controlled Storage</option>
                                    <option value="Professional Packing & Crating">Professional Packing &amp; Crating</option>
                                    <option value="Inter-Emirate Moving (UAE)">Inter-Emirate Moving (UAE)</option>
                                    <option value="General Question / Partnership">General Question / Partnership</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    {{-- Row 3: Target Moving Date & Move Size --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="cDate" class="block text-xs font-bold text-[#073B2E] mb-1.5">
                                Target Move Date / Timeframe
                            </label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-400 text-xs">
                                    <i class="fa-solid fa-calendar-day"></i>
                                </span>
                                <input type="text" 
                                       id="cDate" 
                                       placeholder="e.g. This week, next month, or specific date" 
                                       class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] focus:ring-2 focus:ring-[#103B30]/20 py-3 pl-9 pr-3 transition-colors text-[#073B2E] placeholder-gray-400">
                            </div>
                        </div>

                        <div>
                            <label for="cPropertySize" class="block text-xs font-bold text-[#073B2E] mb-1.5">
                                Approximate Property Size
                            </label>
                            <select id="cPropertySize" class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] focus:ring-2 focus:ring-[#103B30]/20 py-3 px-3 transition-colors text-[#073B2E] bg-white">
                                <option value="Studio or 1 Bedroom Apartment">Studio or 1 Bedroom Apartment</option>
                                <option value="2-3 Bedroom Apartment">2-3 Bedroom Apartment</option>
                                <option value="3-4 Bedroom Villa / Townhouse">3-4 Bedroom Villa / Townhouse</option>
                                <option value="5+ Bedroom Luxury Estate">5+ Bedroom Luxury Estate</option>
                                <option value="Commercial Office / Retail Space">Commercial Office / Retail Space</option>
                                <option value="Single Items / Partial Load">Single Items / Partial Load</option>
                            </select>
                        </div>
                    </div>

                    {{-- Row 4: Message Textarea --}}
                    <div>
                        <label for="cMessage" class="block text-xs font-bold text-[#073B2E] mb-1.5">
                            Relocation Details &amp; Questions <span class="text-red-500">*</span>
                        </label>
                        <textarea id="cMessage" 
                                  rows="4" 
                                  required 
                                  placeholder="Please mention moving origin (e.g. Dubai Marina), destination community (e.g. Arabian Ranches or overseas), elevator access, and any fragile heirlooms..." 
                                  class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] focus:ring-2 focus:ring-[#103B30]/20 py-3 px-3.5 transition-colors text-[#073B2E] placeholder-gray-400"></textarea>
                    </div>

                    {{-- Action Submission Buttons --}}
                    <div class="pt-2 space-y-2.5">
                        <button type="submit" 
                                class="w-full bg-[#25D366] hover:bg-[#20ba59] text-white py-3.5 px-6 rounded-2xl font-bold text-xs sm:text-sm flex items-center justify-center gap-2.5 shadow-[0_8px_20px_rgba(37,211,102,0.3)] hover:shadow-[0_12px_28px_rgba(37,211,102,0.4)] transition-all cursor-pointer">
                            <i class="fa-brands fa-whatsapp text-lg text-white"></i>
                            <span>Send via WhatsApp (Instant Reply &amp; Fast Quote)</span>
                        </button>

                        <button type="button" 
                                onclick="sendContactViaEmail()" 
                                class="w-full btn-outline-forest py-3 px-6 text-xs font-bold rounded-2xl flex items-center justify-center gap-2 cursor-pointer transition-all">
                            <i class="fa-solid fa-envelope text-xs"></i>
                            <span>Send via Email Alternative</span>
                        </button>
                    </div>

                    {{-- Security & Privacy Note --}}
                    <div class="pt-3 border-t border-gray-100 flex flex-wrap items-center justify-center gap-x-4 gap-y-1 text-[11px] text-[#747C76]">
                        <span class="inline-flex items-center gap-1.5">
                            <i class="fa-solid fa-lock text-[#103B30] text-[10px]"></i>
                            <span>Privacy Protected</span>
                        </span>
                        <span>&bull;</span>
                        <span class="inline-flex items-center gap-1.5">
                            <i class="fa-solid fa-shield-check text-[#103B30] text-[10px]"></i>
                            <span>Direct Dispatch Desk</span>
                        </span>
                        <span>&bull;</span>
                        <span class="inline-flex items-center gap-1.5">
                            <i class="fa-solid fa-file-contract text-[#103B30] text-[10px]"></i>
                            <span>Zero Obligation Estimate</span>
                        </span>
                    </div>

                </form>

            </div>
        </div>

    </div>
</section>

{{-- =========================================================================
     4. FREQUENTLY ASKED PRE-CONTACT QUESTIONS (3 HELPFUL CARDS)
     ========================================================================= --}}
<section class="py-10 sm:py-14 lg:py-16 bg-[#F8FAF8] border-y border-[#E2E8E2] w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-8 sm:mb-10 space-y-2.5">
            <span class="forest-badge">
                <i class="fa-solid fa-circle-question text-[11px]"></i> Clear &amp; Immediate Answers
            </span>
            <h3 class="text-2xl sm:text-3xl font-black font-heading text-[#073B2E] tracking-tight">
                Quick Answers Before You Reach Out
            </h3>
            <p class="text-xs sm:text-sm text-[#46574D] leading-relaxed font-normal">
                Common questions from Dubai residents regarding surveys, booking timelines, and developer gate permits.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            {{-- FAQ 1 --}}
            <div class="p-6 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm hover:shadow-md transition-all card-hover space-y-3">
                <div class="w-10 h-10 rounded-xl bg-[#EBF5E7] text-[#103B30] flex items-center justify-center font-bold text-base">
                    <i class="fa-solid fa-stopwatch"></i>
                </div>
                <h4 class="text-base font-bold font-heading text-[#073B2E]">How fast do you respond to quote requests?</h4>
                <p class="text-xs sm:text-[13px] text-[#46574D] leading-relaxed">
                    Our WhatsApp desk responds within 5 to 15 minutes during operating hours (Mon–Sat 8 AM – 8 PM). We can issue preliminary estimates immediately upon reviewing photos or room video clips.
                </p>
            </div>

            {{-- FAQ 2 --}}
            <div class="p-6 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm hover:shadow-md transition-all card-hover space-y-3">
                <div class="w-10 h-10 rounded-xl bg-[#EBF5E7] text-[#103B30] flex items-center justify-center font-bold text-base">
                    <i class="fa-solid fa-video"></i>
                </div>
                <h4 class="text-base font-bold font-heading text-[#073B2E]">Can I do a virtual video survey?</h4>
                <p class="text-xs sm:text-[13px] text-[#46574D] leading-relaxed">
                    Yes! You do not need to wait for a surveyor to visit. Simply schedule a 10-minute high-definition video call on WhatsApp with a senior relocation coordinator at your convenience.
                </p>
            </div>

            {{-- FAQ 3 --}}
            <div class="p-6 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm hover:shadow-md transition-all card-hover space-y-3">
                <div class="w-10 h-10 rounded-xl bg-[#EBF5E7] text-[#103B30] flex items-center justify-center font-bold text-base">
                    <i class="fa-solid fa-file-shield"></i>
                </div>
                <h4 class="text-base font-bold font-heading text-[#073B2E]">Do you handle building Move-In NOCs?</h4>
                <p class="text-xs sm:text-[13px] text-[#46574D] leading-relaxed">
                    Yes. We provide official company trade licenses, driver Emirates IDs, and vehicle insurance documents required by Emaar, Nakheel, DAMAC, and Dubai Properties to secure your Move-In pass smoothly.
                </p>
            </div>

        </div>

    </div>
</section>

{{-- =========================================================================
     5. GLOBAL CTA BANNER
     ========================================================================= --}}
<section class="bg-white py-4 sm:py-6 w-full">
    <x-cta-banner 
        headline="Experience the MOVEXA Standard on Your Next Move"
        subheadline="Talk directly with our moving advisors today to discuss schedules, packing specifications, and pricing."
        buttonText="Request Your Free Proposal"
    />
</section>

@endsection

@push('scripts')
<script>
    function handleContactSubmit(e) {
        e.preventDefault();
        const name = document.getElementById('cName').value.trim();
        const email = document.getElementById('cEmail').value.trim();
        const phone = document.getElementById('cPhone').value.trim();
        const subject = document.getElementById('cSubject').value;
        const date = document.getElementById('cDate') ? document.getElementById('cDate').value.trim() : '';
        const size = document.getElementById('cPropertySize') ? document.getElementById('cPropertySize').value : '';
        const message = document.getElementById('cMessage').value.trim();

        if (!name || !email || !phone || !message) {
            const alertBox = document.getElementById('contactAlert');
            if (alertBox) alertBox.classList.remove('hidden');
            return;
        }

        let msg = `💬 *NEW MOVEXA INQUIRY – MOVING SERVICES*\n` +
                  `-----------------------------------\n` +
                  `👤 *Name:* ${name}\n` +
                  `📧 *Email:* ${email}\n` +
                  `📞 *Phone:* ${phone}\n` +
                  `🏷️ *Service:* ${subject}\n`;
        
        if (size) {
            msg += `🏠 *Property Size:* ${size}\n`;
        }
        if (date) {
            msg += `📅 *Target Date:* ${date}\n`;
        }

        msg += `-----------------------------------\n` +
               `📝 *Details & Notes:*\n${message}\n` +
               `-----------------------------------\n` +
               `Sent via MOVEXA Dubai Official Contact Page`;

        const whatsappNumber = "{{ config('movexa.brand.whatsapp_number') }}";
        window.open(`https://wa.me/${whatsappNumber}?text=${encodeURIComponent(msg)}`, '_blank');
    }

    function sendContactViaEmail() {
        const name = document.getElementById('cName').value.trim();
        const email = document.getElementById('cEmail').value.trim();
        const phone = document.getElementById('cPhone').value.trim();
        const subject = document.getElementById('cSubject').value;
        const date = document.getElementById('cDate') ? document.getElementById('cDate').value.trim() : '';
        const size = document.getElementById('cPropertySize') ? document.getElementById('cPropertySize').value : '';
        const message = document.getElementById('cMessage').value.trim();

        if (!name || !email || !phone || !message) {
            const alertBox = document.getElementById('contactAlert');
            if (alertBox) alertBox.classList.remove('hidden');
            return;
        }

        let body = `Name: ${name}\nEmail: ${email}\nPhone: ${phone}\nService Category: ${subject}\n`;
        if (size) body += `Property Size: ${size}\n`;
        if (date) body += `Target Move Date: ${date}\n`;
        body += `\nMessage Details:\n${message}\n`;

        const toEmail = "{{ config('movexa.brand.email') }}";
        window.location.href = `mailto:${toEmail}?subject=${encodeURIComponent(subject + ' - ' + name)}&body=${encodeURIComponent(body)}`;
    }
</script>
@endpush
