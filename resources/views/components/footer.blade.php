<footer class="relative bg-gradient-to-b from-[#06241D] via-[#041A14] to-[#02100C] text-white pt-12 sm:pt-16 pb-24 sm:pb-14 border-t border-[#124234] overflow-hidden">
    
    {{-- Top Specular Laser Highlight Line & Ambient Sheen --}}
    <div class="absolute inset-x-0 top-0 h-[2px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent shadow-[0_0_15px_#D8F36B] pointer-events-none z-10"></div>
    <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[900px] h-[250px] bg-gradient-to-b from-[#D8F36B]/10 via-[#103B30]/5 to-transparent rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl 2xl:max-w-[1520px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        {{-- =========================================================================
             MAIN FOOTER CONTENT GRID (12-COL BALANCED & MOBILE-FRIENDLY)
             ========================================================================= --}}
        <div class="pb-10 sm:pb-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 sm:gap-10 lg:gap-8 border-b border-white/10">

            {{-- Column 1: Brand Info & Identity (4 Cols on Desktop) --}}
            <div class="md:col-span-2 lg:col-span-4 space-y-4">
                {{-- Clean Luxury Logo Badge --}}
                <div>
                    <a href="{{ route('home') }}" 
                       class="inline-flex items-center bg-white py-2 px-3.5 rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.3)] border border-white/50 hover:scale-102 transition-all group"
                       aria-label="MOVEXA - Global Moving & Relocations">
                        <img src="{{ asset('images/logo/movexa-logo.webp') }}" 
                             alt="MOVEXA - Global Moving &amp; Relocations" 
                             loading="lazy"
                             decoding="async"
                             class="h-9 sm:h-10 w-auto object-contain">
                    </a>
                </div>

                {{-- Company Mission Paragraph --}}
                <p class="text-xs sm:text-[13px] text-white/75 leading-relaxed max-w-md font-normal">
                    MOVEXA is Dubai's trusted moving, packing, and global relocation partner. From high-rise apartment transitions to luxury private villas and overseas sea freight, we deliver white-glove care with zero hassle.
                </p>

                {{-- Brand Tagline Pill --}}
                <div class="pt-1">
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/[0.06] border border-white/15 text-[#D8F36B] text-xs font-bold tracking-wide italic">
                        <i class="fa-solid fa-earth-americas text-[11px]"></i>
                        <span>"Moving Beyond Borders."</span>
                    </span>
                </div>

                {{-- Social Media Icons --}}
                <div class="pt-2">
                    <span class="block text-[11px] uppercase tracking-wider text-white/50 font-bold mb-2.5">Connect With Us</span>
                    <div class="flex items-center gap-2.5">
                        <a href="https://linkedin.com" target="_blank" rel="noopener" class="w-10 h-10 rounded-xl bg-white/5 hover:bg-[#D8F36B] hover:text-[#073B2E] border border-white/10 flex items-center justify-center text-white/80 transition-all duration-200 shadow-2xs hover:scale-105" aria-label="LinkedIn">
                            <i class="fa-brands fa-linkedin-in text-sm"></i>
                        </a>
                        <a href="https://instagram.com" target="_blank" rel="noopener" class="w-10 h-10 rounded-xl bg-white/5 hover:bg-[#D8F36B] hover:text-[#073B2E] border border-white/10 flex items-center justify-center text-white/80 transition-all duration-200 shadow-2xs hover:scale-105" aria-label="Instagram">
                            <i class="fa-brands fa-instagram text-sm"></i>
                        </a>
                        <a href="https://facebook.com" target="_blank" rel="noopener" class="w-10 h-10 rounded-xl bg-white/5 hover:bg-[#D8F36B] hover:text-[#073B2E] border border-white/10 flex items-center justify-center text-white/80 transition-all duration-200 shadow-2xs hover:scale-105" aria-label="Facebook">
                            <i class="fa-brands fa-facebook-f text-sm"></i>
                        </a>
                        <a href="https://wa.me/{{ config('movexa.brand.whatsapp_number') }}?text={{ urlencode('Hello MOVEXA, I would like to inquire about moving services.') }}" target="_blank" rel="noopener" class="w-10 h-10 rounded-xl bg-[#25D366]/20 hover:bg-[#25D366] text-[#25D366] hover:text-white border border-[#25D366]/40 flex items-center justify-center transition-all duration-200 shadow-2xs hover:scale-105" aria-label="WhatsApp">
                            <i class="fa-brands fa-whatsapp text-base"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Column 2: Our Services (3 Cols on Desktop) --}}
            <div class="lg:col-span-3 space-y-3">
                <div class="flex items-center gap-2 mb-3.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#D8F36B] shadow-[0_0_8px_#D8F36B]"></span>
                    <h4 class="text-xs font-black tracking-widest uppercase text-[#D8F36B] font-heading">
                        Our Services
                    </h4>
                </div>

                <ul class="space-y-2 text-xs text-white/75">
                    @foreach (array_slice(config('movexa.services'), 0, 7) as $service)
                    <li>
                        <a href="{{ route('services.show', $service['slug']) }}" class="hover:text-[#D8F36B] transition-colors inline-flex items-center gap-2 group py-0.5">
                            <i class="fa-solid fa-chevron-right text-[9px] text-[#D8F36B]/60 group-hover:text-[#D8F36B] group-hover:translate-x-0.5 transition-all"></i>
                            <span class="font-medium">{{ $service['title'] }}</span>
                        </a>
                    </li>
                    @endforeach
                    <li class="pt-1.5">
                        <a href="{{ route('services.index') }}" class="text-[#D8F36B] font-bold hover:underline inline-flex items-center gap-1.5 text-xs">
                            <span>View All Services</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Column 3: UAE Service Emirates (2 Cols on Desktop) --}}
            <div class="lg:col-span-2 space-y-3">
                <div class="flex items-center gap-2 mb-3.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#D8F36B] shadow-[0_0_8px_#D8F36B]"></span>
                    <h4 class="text-xs font-black tracking-widest uppercase text-[#D8F36B] font-heading">
                        UAE Emirates
                    </h4>
                </div>

                <ul class="space-y-2 text-xs text-white/75">
                    @php
                        $emirates = [
                            'Dubai Moving Desk',
                            'Abu Dhabi Shifting',
                            'Sharjah Inter-City',
                            'Ajman Family Moves',
                            'Ras Al Khaimah',
                            'Fujairah Routes',
                            'Umm Al Quwain'
                        ];
                    @endphp
                    @foreach ($emirates as $em)
                    <li>
                        <a href="{{ route('local-moving') }}" class="hover:text-[#D8F36B] transition-colors inline-flex items-center gap-2 group py-0.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#D8F36B]/60 group-hover:bg-[#D8F36B] transition-colors"></span>
                            <span class="font-medium group-hover:translate-x-0.5 transition-transform">{{ $em }}</span>
                        </a>
                    </li>
                    @endforeach
                    <li class="pt-1.5">
                        <a href="{{ route('local-moving') }}" class="text-[#D8F36B] font-bold hover:underline inline-flex items-center gap-1.5 text-xs">
                            <span>Explore 7 Emirates</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Column 4: Direct Contact & Location (3 Cols on Desktop) --}}
            <div class="md:col-span-2 lg:col-span-3 space-y-3.5">
                <div class="flex items-center gap-2 mb-3.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#D8F36B] shadow-[0_0_8px_#D8F36B]"></span>
                    <h4 class="text-xs font-black tracking-widest uppercase text-[#D8F36B] font-heading">
                        Get in Touch
                    </h4>
                </div>

                <ul class="space-y-3 text-xs text-white/75">
                    
                    {{-- Address --}}
                    <li class="flex items-start gap-3">
                        <span class="w-7 h-7 rounded-lg bg-white/5 border border-white/10 text-[#D8F36B] flex items-center justify-center text-xs shrink-0 mt-0.5">
                            <i class="fa-solid fa-location-dot"></i>
                        </span>
                        <div>
                            <span class="text-white font-bold block text-xs">Business Bay, Dubai</span>
                            <span class="text-white/60 text-[11px] block">United Arab Emirates</span>
                        </div>
                    </li>

                    {{-- Phone Hotline --}}
                    <li class="flex items-center gap-3">
                        <span class="w-7 h-7 rounded-lg bg-white/5 border border-white/10 text-[#D8F36B] flex items-center justify-center text-xs shrink-0">
                            <i class="fa-solid fa-phone"></i>
                        </span>
                        <div class="flex-1 flex items-center justify-between">
                            <a href="tel:{{ config('movexa.brand.phone_raw') }}" class="text-white hover:text-[#D8F36B] transition-colors font-bold text-xs sm:text-sm font-heading">
                                {{ config('movexa.brand.phone_display') }}
                            </a>
                            <span class="text-[10px] text-[#D8F36B] bg-white/5 px-2 py-0.5 rounded-md border border-white/10">Call</span>
                        </div>
                    </li>

                    {{-- WhatsApp Support --}}
                    <li class="flex items-center gap-3">
                        <span class="w-7 h-7 rounded-lg bg-[#25D366]/20 border border-[#25D366]/30 text-[#25D366] flex items-center justify-center text-xs shrink-0">
                            <i class="fa-brands fa-whatsapp"></i>
                        </span>
                        <div class="flex-1 flex items-center justify-between">
                            <a href="https://wa.me/{{ config('movexa.brand.whatsapp_number') }}?text={{ urlencode('Hello MOVEXA, I would like to get a moving quote.') }}" 
                               target="_blank" 
                               rel="noopener" 
                               class="text-white hover:text-[#25D366] transition-colors font-bold text-xs sm:text-sm font-heading">
                                {{ config('movexa.brand.whatsapp_display') }}
                            </a>
                            <span class="text-[10px] text-[#25D366] bg-[#25D366]/10 px-2 py-0.5 rounded-md border border-[#25D366]/20 font-bold">Chat</span>
                        </div>
                    </li>

                    {{-- Email --}}
                    <li class="flex items-center gap-3">
                        <span class="w-7 h-7 rounded-lg bg-white/5 border border-white/10 text-[#D8F36B] flex items-center justify-center text-xs shrink-0">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <a href="mailto:{{ config('movexa.brand.email') }}" class="text-white/80 hover:text-[#D8F36B] transition-colors text-xs truncate">
                            {{ config('movexa.brand.email') }}
                        </a>
                    </li>

                    {{-- Working Hours --}}
                    <li class="flex items-start gap-3 pt-2 border-t border-white/10">
                        <span class="w-7 h-7 rounded-lg bg-white/5 border border-white/10 text-[#D8F36B] flex items-center justify-center text-xs shrink-0 mt-0.5">
                            <i class="fa-solid fa-clock"></i>
                        </span>
                        <div>
                            <span class="text-white/90 font-semibold block text-[11.5px]">Mon – Sat: 8:00 AM – 8:00 PM</span>
                            <span class="text-white/50 text-[10.5px] block">24/7 WhatsApp Survey Desk</span>
                        </div>
                    </li>

                </ul>
            </div>

        </div>

        {{-- =========================================================================
             3. BOTTOM COPYRIGHT & LEGAL BAR
             ========================================================================= --}}
        <div class="pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-white/60 text-center md:text-left">
            <div>
                <p class="font-medium text-white/80">
                    &copy; {{ date('Y') }} MOVEXA &ndash; Global Moving &amp; Relocations. All rights reserved.
                </p>
                <p class="text-[11px] text-white/45 mt-1 max-w-2xl">
                    Operated in Dubai, United Arab Emirates. International relocation routes are subject to destination import customs, route availability, and verification.
                </p>
            </div>

            {{-- Legal Links --}}
            <div class="flex flex-wrap items-center justify-center md:justify-end gap-3 sm:gap-5 text-xs text-white/70">
                <a href="{{ route('legal.privacy') }}" class="hover:text-[#D8F36B] transition-colors py-1">Privacy Policy</a>
                <span class="text-white/20 hidden sm:inline">&bull;</span>
                <a href="{{ route('legal.terms') }}" class="hover:text-[#D8F36B] transition-colors py-1">Terms &amp; Conditions</a>
                <span class="text-white/20 hidden sm:inline">&bull;</span>
                <a href="{{ route('sitemap') }}" class="hover:text-[#D8F36B] transition-colors py-1">Sitemap</a>
            </div>
        </div>

    </div>
</footer>
