<footer class="bg-[#08271F] text-white pt-16 pb-10 border-t-4 border-[#D8F36B]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Top Footer Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 lg:gap-8 pb-12 border-b border-white/10">

            {{-- Column 1: Brand Info & Story --}}
            <div class="lg:col-span-2 space-y-4">
                <div>
                    <a href="{{ route('home') }}" class="inline-block bg-white py-2 px-3.5 rounded-2xl shadow-md hover:scale-102 transition-all">
                        <img src="{{ asset('images/logo/movexa-logo.webp') }}" 
                             alt="MOVEXA - Global Moving &amp; Relocations" 
                             loading="lazy"
                             decoding="async"
                             class="h-10 sm:h-11 w-auto object-contain">
                    </a>
                </div>

                <p class="text-xs text-white/70 leading-relaxed max-w-sm pt-1">
                    MOVEXA is a premier moving, packing, and global relocation company based in Dubai, United Arab Emirates. From local moves across Dubai to international relocations worldwide, we make every transition simpler, safer, and stress-free.
                </p>

                <div class="pt-2">
                    <p class="text-xs font-bold text-[#D8F36B] tracking-wide italic">
                        "Moving Beyond Borders."
                    </p>
                </div>

                {{-- Social Icons --}}
                <div class="flex items-center gap-3 pt-3">
                    <a href="https://linkedin.com" target="_blank" rel="noopener" class="w-9 h-9 rounded-xl bg-white/5 hover:bg-[#D8F36B] hover:text-[#08271F] flex items-center justify-center text-white/80 transition-all" aria-label="LinkedIn">
                        <i class="fa-brands fa-linkedin-in text-sm"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" rel="noopener" class="w-9 h-9 rounded-xl bg-white/5 hover:bg-[#D8F36B] hover:text-[#08271F] flex items-center justify-center text-white/80 transition-all" aria-label="Instagram">
                        <i class="fa-brands fa-instagram text-sm"></i>
                    </a>
                    <a href="https://facebook.com" target="_blank" rel="noopener" class="w-9 h-9 rounded-xl bg-white/5 hover:bg-[#D8F36B] hover:text-[#08271F] flex items-center justify-center text-white/80 transition-all" aria-label="Facebook">
                        <i class="fa-brands fa-facebook-f text-sm"></i>
                    </a>
                    <a href="https://wa.me/{{ config('movexa.brand.whatsapp_number') }}" target="_blank" rel="noopener" class="w-9 h-9 rounded-xl bg-white/5 hover:bg-[#25D366] hover:text-white flex items-center justify-center text-white/80 transition-all" aria-label="WhatsApp">
                        <i class="fa-brands fa-whatsapp text-sm"></i>
                    </a>
                </div>
            </div>

            {{-- Column 2: Moving Services --}}
            <div>
                <h4 class="text-xs font-bold tracking-wider uppercase text-[#D8F36B] mb-4">
                    Our Services
                </h4>
                <ul class="space-y-2.5 text-xs text-white/70">
                    @foreach (array_slice(config('movexa.services'), 0, 7) as $service)
                    <li>
                        <a href="{{ route('services.show', $service['slug']) }}" class="hover:text-white transition-colors flex items-center gap-2 group">
                            <i class="fa-solid fa-chevron-right text-[9px] text-[#D8F36B]/60 group-hover:text-[#D8F36B] transition-colors"></i>
                            <span>{{ $service['title'] }}</span>
                        </a>
                    </li>
                    @endforeach
                    <li>
                        <a href="{{ route('services.index') }}" class="text-[#D8F36B] font-semibold hover:underline inline-flex items-center gap-1.5 mt-1">
                            <span>View All Services</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Column 3: UAE Service Emirates --}}
            <div>
                <h4 class="text-xs font-bold tracking-wider uppercase text-[#D8F36B] mb-4">
                    UAE Service Emirates
                </h4>
                <ul class="space-y-2 text-xs text-white/70">
                    @php
                        $emirates = [
                            'Dubai Movers & Relocations',
                            'Abu Dhabi Shifting',
                            'Sharjah Inter-City Moving',
                            'Ajman Family Moves',
                            'Ras Al Khaimah Coastal',
                            'Fujairah Transit',
                            'Umm Al Quwain Relocations'
                        ];
                    @endphp
                    @foreach ($emirates as $em)
                    <li>
                        <a href="{{ route('local-moving') }}" class="hover:text-white transition-colors flex items-center gap-2 group">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#D8F36B]"></span>
                            <span class="group-hover:translate-x-0.5 transition-transform">{{ $em }}</span>
                        </a>
                    </li>
                    @endforeach
                    <li>
                        <a href="{{ route('local-moving') }}" class="text-[#D8F36B] font-semibold hover:underline inline-flex items-center gap-1.5 mt-1">
                            <span>Explore All 7 Emirates</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Column 4: Contact & Dubai Presence --}}
            <div>
                <h4 class="text-xs font-bold tracking-wider uppercase text-[#D8F36B] mb-4">
                    Get in Touch
                </h4>
                <ul class="space-y-3.5 text-xs text-white/70">
                    <li class="flex items-start gap-3">
                        <i class="fa-solid fa-location-dot text-[#D8F36B] mt-0.5"></i>
                        <span>Business Bay, Dubai, United Arab Emirates</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fa-solid fa-phone text-[#D8F36B]"></i>
                        <a href="tel:{{ config('movexa.brand.phone_raw') }}" class="hover:text-white transition-colors font-semibold">
                            {{ config('movexa.brand.phone_display') }}
                        </a>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fa-brands fa-whatsapp text-[#D8F36B]"></i>
                        <a href="https://wa.me/{{ config('movexa.brand.whatsapp_number') }}" target="_blank" rel="noopener" class="hover:text-white transition-colors font-semibold">
                            {{ config('movexa.brand.whatsapp_display') }}
                        </a>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fa-solid fa-envelope text-[#D8F36B]"></i>
                        <a href="mailto:{{ config('movexa.brand.email') }}" class="hover:text-white transition-colors">
                            {{ config('movexa.brand.email') }}
                        </a>
                    </li>
                    <li class="flex items-start gap-3 pt-1 border-t border-white/10">
                        <i class="fa-solid fa-clock text-[#D8F36B] mt-0.5"></i>
                        <span class="text-[11px] leading-tight text-white/60">
                            {{ config('movexa.brand.hours') }}
                        </span>
                    </li>
                </ul>
            </div>

        </div>

        {{-- Bottom Copyright & Disclaimer --}}
        <div class="pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-white/50 text-center md:text-left">
            <div>
                <p>&copy; {{ date('Y') }} MOVEXA – Global Moving & Relocations. All rights reserved.</p>
                <p class="text-[11px] text-white/40 mt-1">
                    Operated in Dubai, United Arab Emirates. International relocation routes are subject to destination import customs, route availability, and verification.
                </p>
            </div>
            <div class="flex items-center gap-6 text-xs">
                <a href="{{ route('legal.privacy') }}" class="hover:text-[#D8F36B] transition-colors">Privacy Policy</a>
                <a href="{{ route('legal.terms') }}" class="hover:text-[#D8F36B] transition-colors">Terms & Conditions</a>
                <a href="{{ route('sitemap') }}" class="hover:text-[#D8F36B] transition-colors">Sitemap</a>
            </div>
        </div>

    </div>
</footer>
