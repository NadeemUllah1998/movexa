<header id="mainHeader" 
        x-data="{ 
            isScrolled: false,
            activeDropdown: null,
            closeTimer: null,
            mobileOpen: false,
            mobileServicesOpen: false,
            mobileMovingServicesOpen: false,
            init() {
                const updateScroll = () => {
                    this.isScrolled = window.scrollY > 15;
                };
                window.addEventListener('scroll', updateScroll, { passive: true });
                updateScroll();
            },
            openDropdown(name) {
                if (this.closeTimer) clearTimeout(this.closeTimer);
                this.activeDropdown = name;
            },
            scheduleClose(name) {
                this.closeTimer = setTimeout(() => {
                    if (this.activeDropdown === name) {
                        this.activeDropdown = null;
                    }
                }, 180);
            },
            toggleDropdown(name) {
                if (this.closeTimer) clearTimeout(this.closeTimer);
                this.activeDropdown = (this.activeDropdown === name) ? null : name;
            },
            closeAll() {
                if (this.closeTimer) clearTimeout(this.closeTimer);
                this.activeDropdown = null;
            }
        }"
        @keydown.escape.window="closeAll()"
        @click.outside="closeAll()"
        class="sticky top-0 z-50 bg-white border-b border-[#E2E8E2] transition-all duration-300 w-full"
        :class="isScrolled ? 'shadow-md shadow-[#073B2E]/05' : 'shadow-xs'">

    {{-- Subtle Brand Accent Line --}}
    <div class="h-[2px] w-full bg-gradient-to-r from-[#073B2E] via-[#B7E532] to-[#073B2E]"></div>

    <div class="w-full max-w-7xl 2xl:max-w-[1520px] mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Header Bar Row (Static default height prevents CLS on initial page paint) --}}
        <div class="flex items-center justify-between transition-all duration-300 gap-3 h-[70px] sm:h-[74px]"
             :class="isScrolled ? '!h-[58px] sm:!h-[62px]' : ''">

            {{-- 1. MOVEXA Brand Logo (Static height & aspect ratio prevents any oversized flash/shift on refresh) --}}
            <div class="flex-shrink-0 flex items-center pr-0 sm:pr-1">
                <a href="{{ route('home') }}" class="group flex items-center py-0.5" aria-label="MOVEXA - Global Moving & Relocations">
                    <img src="{{ asset('images/logo/movexa-logo.webp') }}" 
                         alt="MOVEXA - Global Moving &amp; Relocations" 
                         width="160" 
                         height="50"
                         fetchpriority="high"
                         decoding="async"
                         class="movexa-header-logo w-auto h-[46px] sm:h-[50px] 2xl:h-[54px] object-contain object-left transition-all duration-300 group-hover:scale-[1.02] block"
                         :class="isScrolled ? '!h-[38px] sm:!h-[42px]' : ''">
                </a>
            </div>

            {{-- Center Navigation Links (Visible on Laptops, Desktops & Ultrawide: lg:flex) --}}
            <nav class="hidden lg:flex items-center gap-0.5 xl:gap-1.5 2xl:gap-2 text-[12.5px] xl:text-[13.5px] 2xl:text-[14px] font-semibold text-[#202A26]">
                
                {{-- 2. Home --}}
                <a href="{{ route('home') }}" 
                   class="relative group/nav whitespace-nowrap px-2.5 py-1.5 xl:px-3.5 xl:py-1.5 2xl:px-4 2xl:py-2 rounded-full transition-all duration-200 {{ request()->routeIs('home') ? 'bg-[#EBF5E7] text-[#073B2E] font-bold border border-[#CFE8C7] shadow-xs' : 'text-[#202A26] hover:text-[#073B2E] hover:bg-[#EBF5E7] border border-transparent' }}">
                    <span>Home</span>
                    <span class="absolute bottom-1 left-1/2 -translate-x-1/2 h-[2px] bg-[#B7E532] rounded-full transition-all duration-200 {{ request()->routeIs('home') ? 'w-4' : 'w-0 group-hover/nav:w-4' }}"></span>
                </a>

                {{-- 3. About Us --}}
                <a href="{{ route('about') }}" 
                   class="relative group/nav whitespace-nowrap px-2.5 py-1.5 xl:px-3.5 xl:py-1.5 2xl:px-4 2xl:py-2 rounded-full transition-all duration-200 {{ request()->routeIs('about') ? 'bg-[#EBF5E7] text-[#073B2E] font-bold border border-[#CFE8C7] shadow-xs' : 'text-[#202A26] hover:text-[#073B2E] hover:bg-[#EBF5E7] border border-transparent' }}">
                    <span>About Us</span>
                    <span class="absolute bottom-1 left-1/2 -translate-x-1/2 h-[2px] bg-[#B7E532] rounded-full transition-all duration-200 {{ request()->routeIs('about') ? 'w-4' : 'w-0 group-hover/nav:w-4' }}"></span>
                </a>

                {{-- 4. Services ▼ (Properly Sized, Directly Positioned 2-Column Professional Dropdown) --}}
                <div class="relative group/nav" 
                     @mouseenter="openDropdown('services')" 
                     @mouseleave="scheduleClose('services')">
                    <button type="button" 
                            class="whitespace-nowrap inline-flex items-center gap-1.5 px-2.5 py-1.5 xl:px-3.5 xl:py-1.5 2xl:px-4 2xl:py-2 rounded-full transition-all duration-200 {{ request()->is('services*') ? 'bg-[#EBF5E7] text-[#073B2E] font-bold border border-[#CFE8C7] shadow-xs' : 'text-[#202A26] hover:text-[#073B2E] hover:bg-[#EBF5E7] border border-transparent' }}" 
                            @click="toggleDropdown('services')"
                            aria-expanded="activeDropdown === 'services'"
                            aria-haspopup="true">
                        <span>Services</span>
                        <i class="fa-solid fa-chevron-down text-[9px] transition-transform duration-300" :class="{ 'rotate-180': activeDropdown === 'services' }"></i>
                    </button>
                    <span class="absolute bottom-1 left-1/2 -translate-x-1/2 h-[2px] bg-[#B7E532] rounded-full transition-all duration-200 {{ request()->is('services*') ? 'w-4' : 'w-0 group-hover/nav:w-4' }}"></span>

                    {{-- Hover Bridge & Dropdown Menu Container (Anchored Directly Below Navbar Item) --}}
                    <div x-show="activeDropdown === 'services'" 
                         x-cloak
                         @mouseenter="openDropdown('services')"
                         @mouseleave="scheduleClose('services')"
                         x-transition:enter="transition cubic-bezier(0.16, 1, 0.3, 1) duration-200" 
                         x-transition:enter-start="opacity-0 translate-y-1.5 scale-[0.985]" 
                         x-transition:enter-end="opacity-100 translate-y-0 scale-100" 
                         x-transition:leave="transition ease-in duration-150" 
                         x-transition:leave-start="opacity-100 translate-y-0 scale-100" 
                         x-transition:leave-end="opacity-0 translate-y-1.5 scale-[0.985]"
                         class="absolute top-full left-0 pt-2 w-[650px] max-w-[calc(100vw-32px)] z-50">
                        
                        <div class="bg-white rounded-2xl sm:rounded-3xl shadow-[0_25px_60px_-10px_rgba(0,0,0,0.28),0_0_0_1px_rgba(7,59,46,0.1)] border-2 border-[#D8E6D8] overflow-hidden"
                             style="background-color: #ffffff !important;">
                            
                            {{-- Top Specular Brand Accent Line --}}
                            <div class="h-[3px] w-full bg-gradient-to-r from-[#103B30] via-[#B7E532] to-[#103B30]"></div>

                            {{-- Dropdown Header Strip --}}
                            <div class="bg-[#F2F7F3] px-5 py-3 border-b border-[#DDE7DD] flex items-center justify-between"
                                 style="background-color: #F2F7F3 !important;">
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-[#103B30] shadow-[0_0_6px_#103B30] animate-pulse"></span>
                                    <span class="text-xs font-black uppercase tracking-wider text-[#103B30]">
                                        Relocation Services Directory
                                    </span>
                                    <span class="hidden sm:inline-block text-[10px] font-bold px-2 py-0.5 rounded-full bg-white text-[#103B30] border border-[#CFE8C7] shadow-2xs">
                                        8 Specializations
                                    </span>
                                </div>
                                <a href="{{ route('services.index') }}" 
                                   @click="closeAll()"
                                   class="group/all text-xs font-extrabold text-[#103B30] hover:text-[#073B2E] inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white hover:bg-[#EBF5E7] border border-[#DCE9DC] transition-all shadow-2xs">
                                    <span>All Services</span>
                                    <i class="fa-solid fa-arrow-right text-[9px] text-[#103B30] group-hover/all:translate-x-0.5 transition-transform"></i>
                                </a>
                            </div>

                            {{-- 2 Balanced Columns (Residential vs Commercial & Storage) --}}
                            <div class="bg-white p-4 sm:p-5 grid grid-cols-2 gap-3 sm:gap-4"
                                 style="background-color: #ffffff !important;">
                                
                                {{-- Column 1: RESIDENTIAL RELOCATION --}}
                                <div class="space-y-1">
                                    <div class="flex items-center justify-between pb-2 mb-2 border-b border-[#EAEFEA]">
                                        <div class="flex items-center gap-2">
                                            <span class="w-5 h-5 rounded-md bg-[#103B30] text-[#D8F36B] flex items-center justify-center text-[10px]">
                                                <i class="fa-solid fa-house-chimney"></i>
                                            </span>
                                            <span class="text-xs font-extrabold uppercase tracking-wider text-[#103B30]">
                                                Residential Moving
                                            </span>
                                        </div>
                                        <span class="text-[10px] font-bold text-[#6B7B71]">4 Services</span>
                                    </div>

                                    <div class="space-y-2 pt-0.5">
                                        {{-- 1. Home Moving --}}
                                        <a href="{{ route('services.show', 'home-moving') }}" 
                                           @click="closeAll()"
                                           class="group/item flex items-center gap-3 p-2.5 rounded-xl bg-white hover:bg-[#F2F8F2] border border-[#E2EBE2] hover:border-[#B7E532] shadow-[0_1px_3px_rgba(0,0,0,0.02)] hover:shadow-xs transition-all duration-150">
                                            <span class="w-8.5 h-8.5 rounded-xl bg-[#F0F5F1] group-hover/item:bg-[#103B30] text-[#103B30] group-hover/item:text-[#D8F36B] border border-[#DCE6DC] group-hover/item:border-[#103B30] flex items-center justify-center text-xs transition-colors shrink-0 shadow-2xs">
                                                <i class="fa-solid fa-house"></i>
                                            </span>
                                            <div class="min-w-0 flex-1">
                                                <div class="font-extrabold text-[13px] sm:text-[13.5px] text-[#102A20] group-hover/item:text-[#073B2E] transition-colors leading-snug flex items-center justify-between">
                                                    <span>Home Moving</span>
                                                    <i class="fa-solid fa-chevron-right text-[8px] text-[#103B30] opacity-40 group-hover/item:opacity-100 group-hover/item:translate-x-0.5 transition-all"></i>
                                                </div>
                                                <div class="text-[11px] sm:text-[11.5px] text-[#55655D] font-medium leading-tight truncate mt-0.5">Household &amp; family residences</div>
                                            </div>
                                        </a>

                                        {{-- 2. Apartment Moving --}}
                                        <a href="{{ route('services.show', 'apartment-moving') }}" 
                                           @click="closeAll()"
                                           class="group/item flex items-center gap-3 p-2.5 rounded-xl bg-white hover:bg-[#F2F8F2] border border-[#E2EBE2] hover:border-[#B7E532] shadow-[0_1px_3px_rgba(0,0,0,0.02)] hover:shadow-xs transition-all duration-150">
                                            <span class="w-8.5 h-8.5 rounded-xl bg-[#F0F5F1] group-hover/item:bg-[#103B30] text-[#103B30] group-hover/item:text-[#D8F36B] border border-[#DCE6DC] group-hover/item:border-[#103B30] flex items-center justify-center text-xs transition-colors shrink-0 shadow-2xs">
                                                <i class="fa-solid fa-building"></i>
                                            </span>
                                            <div class="min-w-0 flex-1">
                                                <div class="font-extrabold text-[13px] sm:text-[13.5px] text-[#102A20] group-hover/item:text-[#073B2E] transition-colors leading-snug flex items-center justify-between">
                                                    <span>Apartment Moving</span>
                                                    <i class="fa-solid fa-chevron-right text-[8px] text-[#103B30] opacity-40 group-hover/item:opacity-100 group-hover/item:translate-x-0.5 transition-all"></i>
                                                </div>
                                                <div class="text-[11px] sm:text-[11.5px] text-[#55655D] font-medium leading-tight truncate mt-0.5">High-rise elevators &amp; loading bays</div>
                                            </div>
                                        </a>

                                        {{-- 3. Villa Relocation --}}
                                        <a href="{{ route('services.show', 'villa-moving') }}" 
                                           @click="closeAll()"
                                           class="group/item flex items-center gap-3 p-2.5 rounded-xl bg-white hover:bg-[#F2F8F2] border border-[#E2EBE2] hover:border-[#B7E532] shadow-[0_1px_3px_rgba(0,0,0,0.02)] hover:shadow-xs transition-all duration-150">
                                            <span class="w-8.5 h-8.5 rounded-xl bg-[#F0F5F1] group-hover/item:bg-[#103B30] text-[#103B30] group-hover/item:text-[#D8F36B] border border-[#DCE6DC] group-hover/item:border-[#103B30] flex items-center justify-center text-xs transition-colors shrink-0 shadow-2xs">
                                                <i class="fa-solid fa-landmark-dome"></i>
                                            </span>
                                            <div class="min-w-0 flex-1">
                                                <div class="font-extrabold text-[13px] sm:text-[13.5px] text-[#102A20] group-hover/item:text-[#073B2E] transition-colors leading-snug flex items-center justify-between">
                                                    <span>Villa Relocation</span>
                                                    <i class="fa-solid fa-chevron-right text-[8px] text-[#103B30] opacity-40 group-hover/item:opacity-100 group-hover/item:translate-x-0.5 transition-all"></i>
                                                </div>
                                                <div class="text-[11px] sm:text-[11.5px] text-[#55655D] font-medium leading-tight truncate mt-0.5">Multi-level luxury estate moves</div>
                                            </div>
                                        </a>

                                        {{-- 4. Door-to-Door Moving --}}
                                        <a href="{{ route('services.show', 'door-to-door-moving') }}" 
                                           @click="closeAll()"
                                           class="group/item flex items-center gap-3 p-2.5 rounded-xl bg-white hover:bg-[#F2F8F2] border border-[#E2EBE2] hover:border-[#B7E532] shadow-[0_1px_3px_rgba(0,0,0,0.02)] hover:shadow-xs transition-all duration-150">
                                            <span class="w-8.5 h-8.5 rounded-xl bg-[#F0F5F1] group-hover/item:bg-[#103B30] text-[#103B30] group-hover/item:text-[#D8F36B] border border-[#DCE6DC] group-hover/item:border-[#103B30] flex items-center justify-center text-xs transition-colors shrink-0 shadow-2xs">
                                                <i class="fa-solid fa-door-open"></i>
                                            </span>
                                            <div class="min-w-0 flex-1">
                                                <div class="font-extrabold text-[13px] sm:text-[13.5px] text-[#102A20] group-hover/item:text-[#073B2E] transition-colors leading-snug flex items-center justify-between">
                                                    <span>Door-to-Door Moving</span>
                                                    <i class="fa-solid fa-chevron-right text-[8px] text-[#103B30] opacity-40 group-hover/item:opacity-100 group-hover/item:translate-x-0.5 transition-all"></i>
                                                </div>
                                                <div class="text-[11px] sm:text-[11.5px] text-[#55655D] font-medium leading-tight truncate mt-0.5">Turnkey white-glove setup</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                {{-- Column 2: COMMERCIAL & STORAGE --}}
                                <div class="space-y-1">
                                    <div class="flex items-center justify-between pb-2 mb-2 border-b border-[#EAEFEA]">
                                        <div class="flex items-center gap-2">
                                            <span class="w-5 h-5 rounded-md bg-[#103B30] text-[#D8F36B] flex items-center justify-center text-[10px]">
                                                <i class="fa-solid fa-briefcase"></i>
                                            </span>
                                            <span class="text-xs font-extrabold uppercase tracking-wider text-[#103B30]">
                                                Commercial &amp; Storage
                                            </span>
                                        </div>
                                        <span class="text-[10px] font-bold text-[#6B7B71]">4 Services</span>
                                    </div>

                                    <div class="space-y-2 pt-0.5">
                                        {{-- 5. Office Relocation --}}
                                        <a href="{{ route('services.show', 'office-relocation') }}" 
                                           @click="closeAll()"
                                           class="group/item flex items-center gap-3 p-2.5 rounded-xl bg-white hover:bg-[#F2F8F2] border border-[#E2EBE2] hover:border-[#B7E532] shadow-[0_1px_3px_rgba(0,0,0,0.02)] hover:shadow-xs transition-all duration-150">
                                            <span class="w-8.5 h-8.5 rounded-xl bg-[#F0F5F1] group-hover/item:bg-[#103B30] text-[#103B30] group-hover/item:text-[#D8F36B] border border-[#DCE6DC] group-hover/item:border-[#103B30] flex items-center justify-center text-xs transition-colors shrink-0 shadow-2xs">
                                                <i class="fa-solid fa-briefcase"></i>
                                            </span>
                                            <div class="min-w-0 flex-1">
                                                <div class="font-extrabold text-[13px] sm:text-[13.5px] text-[#102A20] group-hover/item:text-[#073B2E] transition-colors leading-snug flex items-center justify-between">
                                                    <span>Office Relocation</span>
                                                    <i class="fa-solid fa-chevron-right text-[8px] text-[#103B30] opacity-40 group-hover/item:opacity-100 group-hover/item:translate-x-0.5 transition-all"></i>
                                                </div>
                                                <div class="text-[11px] sm:text-[11.5px] text-[#55655D] font-medium leading-tight truncate mt-0.5">Zero-downtime commercial shifting</div>
                                            </div>
                                        </a>

                                        {{-- 6. Storage Solutions --}}
                                        <a href="{{ route('services.show', 'storage-solutions') }}" 
                                           @click="closeAll()"
                                           class="group/item flex items-center gap-3 p-2.5 rounded-xl bg-white hover:bg-[#F2F8F2] border border-[#E2EBE2] hover:border-[#B7E532] shadow-[0_1px_3px_rgba(0,0,0,0.02)] hover:shadow-xs transition-all duration-150">
                                            <span class="w-8.5 h-8.5 rounded-xl bg-[#F0F5F1] group-hover/item:bg-[#103B30] text-[#103B30] group-hover/item:text-[#D8F36B] border border-[#DCE6DC] group-hover/item:border-[#103B30] flex items-center justify-center text-xs transition-colors shrink-0 shadow-2xs">
                                                <i class="fa-solid fa-warehouse"></i>
                                            </span>
                                            <div class="min-w-0 flex-1">
                                                <div class="font-extrabold text-[13px] sm:text-[13.5px] text-[#102A20] group-hover/item:text-[#073B2E] transition-colors leading-snug flex items-center justify-between">
                                                    <span>Storage Solutions</span>
                                                    <i class="fa-solid fa-chevron-right text-[8px] text-[#103B30] opacity-40 group-hover/item:opacity-100 group-hover/item:translate-x-0.5 transition-all"></i>
                                                </div>
                                                <div class="text-[11px] sm:text-[11.5px] text-[#55655D] font-medium leading-tight truncate mt-0.5">Climate-controlled 24/7 guarded vaults</div>
                                            </div>
                                        </a>

                                        {{-- 7. International Moving --}}
                                        <a href="{{ route('international-moving') }}" 
                                           @click="closeAll()"
                                           class="group/item flex items-center gap-3 p-2.5 rounded-xl bg-white hover:bg-[#F2F8F2] border border-[#E2EBE2] hover:border-[#B7E532] shadow-[0_1px_3px_rgba(0,0,0,0.02)] hover:shadow-xs transition-all duration-150">
                                            <span class="w-8.5 h-8.5 rounded-xl bg-[#F0F5F1] group-hover/item:bg-[#103B30] text-[#103B30] group-hover/item:text-[#D8F36B] border border-[#DCE6DC] group-hover/item:border-[#103B30] flex items-center justify-center text-xs transition-colors shrink-0 shadow-2xs">
                                                <i class="fa-solid fa-plane-departure"></i>
                                            </span>
                                            <div class="min-w-0 flex-1">
                                                <div class="font-extrabold text-[13px] sm:text-[13.5px] text-[#102A20] group-hover/item:text-[#073B2E] transition-colors leading-snug flex items-center justify-between">
                                                    <span>International Moving</span>
                                                    <i class="fa-solid fa-chevron-right text-[8px] text-[#103B30] opacity-40 group-hover/item:opacity-100 group-hover/item:translate-x-0.5 transition-all"></i>
                                                </div>
                                                <div class="text-[11px] sm:text-[11.5px] text-[#55655D] font-medium leading-tight truncate mt-0.5">Sea freight FCL/LCL &amp; customs setup</div>
                                            </div>
                                        </a>

                                        {{-- 8. Local Moving Dubai --}}
                                        <a href="{{ route('local-moving') }}" 
                                           @click="closeAll()"
                                           class="group/item flex items-center gap-3 p-2.5 rounded-xl bg-white hover:bg-[#F2F8F2] border border-[#E2EBE2] hover:border-[#B7E532] shadow-[0_1px_3px_rgba(0,0,0,0.02)] hover:shadow-xs transition-all duration-150">
                                            <span class="w-8.5 h-8.5 rounded-xl bg-[#F0F5F1] group-hover/item:bg-[#103B30] text-[#103B30] group-hover/item:text-[#D8F36B] border border-[#DCE6DC] group-hover/item:border-[#103B30] flex items-center justify-center text-xs transition-colors shrink-0 shadow-2xs">
                                                <i class="fa-solid fa-truck-fast"></i>
                                            </span>
                                            <div class="min-w-0 flex-1">
                                                <div class="font-extrabold text-[13px] sm:text-[13.5px] text-[#102A20] group-hover/item:text-[#073B2E] transition-colors leading-snug flex items-center justify-between">
                                                    <span>Local Movers Dubai</span>
                                                    <i class="fa-solid fa-chevron-right text-[8px] text-[#103B30] opacity-40 group-hover/item:opacity-100 group-hover/item:translate-x-0.5 transition-all"></i>
                                                </div>
                                                <div class="text-[11px] sm:text-[11.5px] text-[#55655D] font-medium leading-tight truncate mt-0.5">Same-day dispatch across UAE</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                {{-- 5. Moving Services ▼ (Local UAE Emirates Dropdown) --}}
                <div class="relative group/nav" 
                     @mouseenter="openDropdown('moving-services')" 
                     @mouseleave="scheduleClose('moving-services')">
                    <button type="button" 
                            class="whitespace-nowrap inline-flex items-center gap-1.5 px-2.5 py-1.5 xl:px-3.5 xl:py-1.5 2xl:px-4 2xl:py-2 rounded-full transition-all duration-200 {{ (request()->routeIs('local-moving') || request()->routeIs('international-moving')) ? 'bg-[#EBF5E7] text-[#073B2E] font-bold border border-[#CFE8C7] shadow-xs' : 'text-[#202A26] hover:text-[#073B2E] hover:bg-[#EBF5E7] border border-transparent' }}" 
                            @click="toggleDropdown('moving-services')"
                            aria-expanded="activeDropdown === 'moving-services'"
                            aria-haspopup="true">
                        <span>Moving Services</span>
                        <i class="fa-solid fa-chevron-down text-[9px] transition-transform duration-300" :class="{ 'rotate-180': activeDropdown === 'moving-services' }"></i>
                    </button>
                    <span class="absolute bottom-1 left-1/2 -translate-x-1/2 h-[2px] bg-[#B7E532] rounded-full transition-all duration-200 {{ (request()->routeIs('local-moving') || request()->routeIs('international-moving')) ? 'w-4' : 'w-0 group-hover/nav:w-4' }}"></span>

                    {{-- Hover Bridge & Dropdown Menu Container (Anchored Directly Below Navbar Item) --}}
                    <div x-show="activeDropdown === 'moving-services'" 
                         x-cloak
                         @mouseenter="openDropdown('moving-services')"
                         @mouseleave="scheduleClose('moving-services')"
                         x-transition:enter="transition cubic-bezier(0.16, 1, 0.3, 1) duration-200" 
                         x-transition:enter-start="opacity-0 translate-y-1.5 scale-[0.985]" 
                         x-transition:enter-end="opacity-100 translate-y-0 scale-100" 
                         x-transition:leave="transition ease-in duration-150" 
                         x-transition:leave-start="opacity-100 translate-y-0 scale-100" 
                         x-transition:leave-end="opacity-0 translate-y-1.5 scale-[0.985]"
                         class="absolute top-full left-1/2 -translate-x-1/2 pt-2 w-[700px] max-w-[calc(100vw-32px)] z-50">
                        
                        <div class="bg-white rounded-3xl shadow-[0_25px_60px_-10px_rgba(0,0,0,0.28),0_0_0_1px_rgba(7,59,46,0.1)] border-2 border-[#D8E6D8] overflow-hidden"
                             style="background-color: #ffffff !important;">
                            {{-- Header Top Bar --}}
                            <div class="bg-[#F2F7F3] px-6 py-3 border-b border-[#DDE7DD] flex items-center justify-between"
                                 style="background-color: #F2F7F3 !important;">
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-[#103B30] shadow-[0_0_6px_#103B30] animate-pulse"></span>
                                    <span class="text-[11px] font-black uppercase tracking-wider text-[#103B30]">UAE Relocation Network</span>
                                    <span class="px-2 py-0.5 rounded-full bg-white text-[#103B30] text-[9.5px] font-bold border border-[#DCE6DC] shadow-2xs">All 7 Emirates Covered</span>
                                </div>
                                <a href="{{ route('local-moving') }}" 
                                   @click="closeAll()"
                                   class="group/all inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white hover:bg-[#103B30] text-[#103B30] hover:text-[#D8F36B] border border-[#DDE7DD] text-[11px] font-bold transition-all shadow-2xs">
                                    <span>Local Moving Guide</span>
                                    <i class="fa-solid fa-arrow-right text-[9px] group-hover/all:translate-x-0.5 transition-transform"></i>
                                </a>
                            </div>

                            {{-- 2-Column Grid: METROPOLITAN & NORTHERN/COASTAL EMIRATES --}}
                            <div class="p-5 grid grid-cols-2 gap-4">
                                
                                {{-- Column 1: METROPOLITAN HUBS --}}
                                <div class="space-y-1">
                                    <div class="flex items-center justify-between pb-2 mb-1.5 border-b border-[#EAEFEA]">
                                        <div class="flex items-center gap-2">
                                            <span class="w-5 h-5 rounded-md bg-[#103B30] text-[#D8F36B] flex items-center justify-center text-[10px]">
                                                <i class="fa-solid fa-city"></i>
                                            </span>
                                            <span class="text-[11px] font-black uppercase tracking-wider text-[#103B30]">
                                                Metropolitan Hubs
                                            </span>
                                        </div>
                                        <span class="text-[10px] font-bold text-[#55635B] uppercase tracking-wide">4 Hubs</span>
                                    </div>

                                    <div class="space-y-1.5 pt-0.5">
                                        {{-- 1. Dubai --}}
                                        <a href="{{ route('local-moving') }}" 
                                           @click="closeAll()"
                                           class="group/item flex items-center justify-between gap-2.5 p-2 rounded-xl bg-white hover:bg-[#EBF5E7] border border-[#E0E8E0] hover:border-[#B7E532] shadow-2xs hover:shadow-xs transition-all duration-150">
                                            <div class="flex items-center gap-2.5 min-w-0 flex-1">
                                                <span class="w-8 h-8 rounded-xl bg-white group-hover/item:bg-[#103B30] text-[#103B30] group-hover/item:text-[#D8F36B] border border-[#DCE6DC] group-hover/item:border-[#103B30] flex items-center justify-center text-xs transition-colors shrink-0 shadow-2xs">
                                                    <i class="fa-solid fa-building-user"></i>
                                                </span>
                                                <div class="min-w-0 flex-1">
                                                    <div class="font-black text-[13px] text-[#103B30] group-hover/item:text-[#073B2E] transition-colors leading-snug flex items-center justify-between">
                                                        <span class="truncate">Dubai Relocations</span>
                                                    </div>
                                                    <div class="text-[11px] text-[#405047] font-medium leading-tight truncate">Marina, Downtown, Palm &amp; Hills</div>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-1.5 shrink-0 pl-1">
                                                <span class="text-[9px] font-black px-2 py-0.5 rounded-md bg-[#EBF2EB] text-[#103B30] group-hover/item:bg-[#103B30] group-hover/item:text-[#D8F36B] transition-colors">HQ Hub</span>
                                                <i class="fa-solid fa-chevron-right text-[8px] text-[#073B2E] opacity-0 -translate-x-1 group-hover/item:opacity-100 group-hover/item:translate-x-0 transition-all"></i>
                                            </div>
                                        </a>

                                        {{-- 2. Abu Dhabi --}}
                                        <a href="{{ route('local-moving') }}" 
                                           @click="closeAll()"
                                           class="group/item flex items-center justify-between gap-2.5 p-2 rounded-xl bg-white hover:bg-[#EBF5E7] border border-[#E0E8E0] hover:border-[#B7E532] shadow-2xs hover:shadow-xs transition-all duration-150">
                                            <div class="flex items-center gap-2.5 min-w-0 flex-1">
                                                <span class="w-8 h-8 rounded-xl bg-white group-hover/item:bg-[#103B30] text-[#103B30] group-hover/item:text-[#D8F36B] border border-[#DCE6DC] group-hover/item:border-[#103B30] flex items-center justify-center text-xs transition-colors shrink-0 shadow-2xs">
                                                    <i class="fa-solid fa-landmark"></i>
                                                </span>
                                                <div class="min-w-0 flex-1">
                                                    <div class="font-black text-[13px] text-[#103B30] group-hover/item:text-[#073B2E] transition-colors leading-snug flex items-center justify-between">
                                                        <span class="truncate">Abu Dhabi Relocations</span>
                                                    </div>
                                                    <div class="text-[11px] text-[#405047] font-medium leading-tight truncate">Capital residential &amp; corporate</div>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-1.5 shrink-0 pl-1">
                                                <span class="text-[9px] font-bold px-2 py-0.5 rounded-md bg-[#EBF2EB] text-[#103B30] group-hover/item:bg-[#103B30] group-hover/item:text-[#D8F36B] transition-colors">Daily</span>
                                                <i class="fa-solid fa-chevron-right text-[8px] text-[#073B2E] opacity-0 -translate-x-1 group-hover/item:opacity-100 group-hover/item:translate-x-0 transition-all"></i>
                                            </div>
                                        </a>

                                        {{-- 3. Sharjah --}}
                                        <a href="{{ route('local-moving') }}" 
                                           @click="closeAll()"
                                           class="group/item flex items-center justify-between gap-2.5 p-2 rounded-xl bg-white hover:bg-[#EBF5E7] border border-[#E0E8E0] hover:border-[#B7E532] shadow-2xs hover:shadow-xs transition-all duration-150">
                                            <div class="flex items-center gap-2.5 min-w-0 flex-1">
                                                <span class="w-8 h-8 rounded-xl bg-white group-hover/item:bg-[#103B30] text-[#103B30] group-hover/item:text-[#D8F36B] border border-[#DCE6DC] group-hover/item:border-[#103B30] flex items-center justify-center text-xs transition-colors shrink-0 shadow-2xs">
                                                    <i class="fa-solid fa-truck-ramp-box"></i>
                                                </span>
                                                <div class="min-w-0 flex-1">
                                                    <div class="font-black text-[13px] text-[#103B30] group-hover/item:text-[#073B2E] transition-colors leading-snug flex items-center justify-between">
                                                        <span class="truncate">Sharjah Express</span>
                                                    </div>
                                                    <div class="text-[11px] text-[#405047] font-medium leading-tight truncate">Fast inter-city &amp; family shifting</div>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-1.5 shrink-0 pl-1">
                                                <span class="text-[9px] font-bold px-2 py-0.5 rounded-md bg-[#EBF2EB] text-[#103B30] group-hover/item:bg-[#103B30] group-hover/item:text-[#D8F36B] transition-colors">Direct</span>
                                                <i class="fa-solid fa-chevron-right text-[8px] text-[#073B2E] opacity-0 -translate-x-1 group-hover/item:opacity-100 group-hover/item:translate-x-0 transition-all"></i>
                                            </div>
                                        </a>

                                        {{-- 4. Ajman --}}
                                        <a href="{{ route('local-moving') }}" 
                                           @click="closeAll()"
                                           class="group/item flex items-center justify-between gap-2.5 p-2 rounded-xl bg-white hover:bg-[#EBF5E7] border border-[#E0E8E0] hover:border-[#B7E532] shadow-2xs hover:shadow-xs transition-all duration-150">
                                            <div class="flex items-center gap-2.5 min-w-0 flex-1">
                                                <span class="w-8 h-8 rounded-xl bg-white group-hover/item:bg-[#103B30] text-[#103B30] group-hover/item:text-[#D8F36B] border border-[#DCE6DC] group-hover/item:border-[#103B30] flex items-center justify-center text-xs transition-colors shrink-0 shadow-2xs">
                                                    <i class="fa-solid fa-boxes-packing"></i>
                                                </span>
                                                <div class="min-w-0 flex-1">
                                                    <div class="font-black text-[13px] text-[#103B30] group-hover/item:text-[#073B2E] transition-colors leading-snug flex items-center justify-between">
                                                        <span class="truncate">Ajman Relocations</span>
                                                    </div>
                                                    <div class="text-[11px] text-[#405047] font-medium leading-tight truncate">Family &amp; household shifting</div>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-1.5 shrink-0 pl-1">
                                                <span class="text-[9px] font-bold px-2 py-0.5 rounded-md bg-[#EBF2EB] text-[#103B30] group-hover/item:bg-[#103B30] group-hover/item:text-[#D8F36B] transition-colors">Direct</span>
                                                <i class="fa-solid fa-chevron-right text-[8px] text-[#073B2E] opacity-0 -translate-x-1 group-hover/item:opacity-100 group-hover/item:translate-x-0 transition-all"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                {{-- Column 2: NORTHERN & COASTAL EMIRATES --}}
                                <div class="space-y-1">
                                    <div class="flex items-center justify-between pb-2 mb-1.5 border-b border-[#EAEFEA]">
                                        <div class="flex items-center gap-2">
                                            <span class="w-5 h-5 rounded-md bg-[#103B30] text-[#D8F36B] flex items-center justify-center text-[10px]">
                                                <i class="fa-solid fa-compass"></i>
                                            </span>
                                            <span class="text-[11px] font-black uppercase tracking-wider text-[#103B30]">
                                                Northern &amp; Coastal
                                            </span>
                                        </div>
                                        <span class="text-[10px] font-bold text-[#55635B] uppercase tracking-wide">3 Emirates + Transit</span>
                                    </div>

                                    <div class="space-y-1.5 pt-0.5">
                                        {{-- 5. Ras Al Khaimah --}}
                                        <a href="{{ route('local-moving') }}" 
                                           @click="closeAll()"
                                           class="group/item flex items-center justify-between gap-2.5 p-2 rounded-xl bg-white hover:bg-[#EBF5E7] border border-[#E0E8E0] hover:border-[#B7E532] shadow-2xs hover:shadow-xs transition-all duration-150">
                                            <div class="flex items-center gap-2.5 min-w-0 flex-1">
                                                <span class="w-8 h-8 rounded-xl bg-white group-hover/item:bg-[#103B30] text-[#103B30] group-hover/item:text-[#D8F36B] border border-[#DCE6DC] group-hover/item:border-[#103B30] flex items-center justify-center text-xs transition-colors shrink-0 shadow-2xs">
                                                    <i class="fa-solid fa-mountain-sun"></i>
                                                </span>
                                                <div class="min-w-0 flex-1">
                                                    <div class="font-black text-[13px] text-[#103B30] group-hover/item:text-[#073B2E] transition-colors leading-snug flex items-center justify-between">
                                                        <span class="truncate">Ras Al Khaimah (RAK)</span>
                                                    </div>
                                                    <div class="text-[11px] text-[#405047] font-medium leading-tight truncate">Coastal &amp; gated communities</div>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-1.5 shrink-0 pl-1">
                                                <span class="text-[9px] font-bold px-2 py-0.5 rounded-md bg-[#EBF2EB] text-[#103B30] group-hover/item:bg-[#103B30] group-hover/item:text-[#D8F36B] transition-colors">Scheduled</span>
                                                <i class="fa-solid fa-chevron-right text-[8px] text-[#073B2E] opacity-0 -translate-x-1 group-hover/item:opacity-100 group-hover/item:translate-x-0 transition-all"></i>
                                            </div>
                                        </a>

                                        {{-- 6. Fujairah --}}
                                        <a href="{{ route('local-moving') }}" 
                                           @click="closeAll()"
                                           class="group/item flex items-center justify-between gap-2.5 p-2 rounded-xl bg-white hover:bg-[#EBF5E7] border border-[#E0E8E0] hover:border-[#B7E532] shadow-2xs hover:shadow-xs transition-all duration-150">
                                            <div class="flex items-center gap-2.5 min-w-0 flex-1">
                                                <span class="w-8 h-8 rounded-xl bg-white group-hover/item:bg-[#103B30] text-[#103B30] group-hover/item:text-[#D8F36B] border border-[#DCE6DC] group-hover/item:border-[#103B30] flex items-center justify-center text-xs transition-colors shrink-0 shadow-2xs">
                                                    <i class="fa-solid fa-water"></i>
                                                </span>
                                                <div class="min-w-0 flex-1">
                                                    <div class="font-black text-[13px] text-[#103B30] group-hover/item:text-[#073B2E] transition-colors leading-snug flex items-center justify-between">
                                                        <span class="truncate">Fujairah Relocations</span>
                                                    </div>
                                                    <div class="text-[11px] text-[#405047] font-medium leading-tight truncate">East Coast mountain transit</div>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-1.5 shrink-0 pl-1">
                                                <span class="text-[9px] font-bold px-2 py-0.5 rounded-md bg-[#EBF2EB] text-[#103B30] group-hover/item:bg-[#103B30] group-hover/item:text-[#D8F36B] transition-colors">Scheduled</span>
                                                <i class="fa-solid fa-chevron-right text-[8px] text-[#073B2E] opacity-0 -translate-x-1 group-hover/item:opacity-100 group-hover/item:translate-x-0 transition-all"></i>
                                            </div>
                                        </a>

                                        {{-- 7. Umm Al Quwain --}}
                                        <a href="{{ route('local-moving') }}" 
                                           @click="closeAll()"
                                           class="group/item flex items-center justify-between gap-2.5 p-2 rounded-xl bg-white hover:bg-[#EBF5E7] border border-[#E0E8E0] hover:border-[#B7E532] shadow-2xs hover:shadow-xs transition-all duration-150">
                                            <div class="flex items-center gap-2.5 min-w-0 flex-1">
                                                <span class="w-8 h-8 rounded-xl bg-white group-hover/item:bg-[#103B30] text-[#103B30] group-hover/item:text-[#D8F36B] border border-[#DCE6DC] group-hover/item:border-[#103B30] flex items-center justify-center text-xs transition-colors shrink-0 shadow-2xs">
                                                    <i class="fa-solid fa-anchor"></i>
                                                </span>
                                                <div class="min-w-0 flex-1">
                                                    <div class="font-black text-[13px] text-[#103B30] group-hover/item:text-[#073B2E] transition-colors leading-snug flex items-center justify-between">
                                                        <span class="truncate">Umm Al Quwain (UAQ)</span>
                                                    </div>
                                                    <div class="text-[11px] text-[#405047] font-medium leading-tight truncate">Turnkey estate relocation</div>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-1.5 shrink-0 pl-1">
                                                <span class="text-[9px] font-bold px-2 py-0.5 rounded-md bg-[#EBF2EB] text-[#103B30] group-hover/item:bg-[#103B30] group-hover/item:text-[#D8F36B] transition-colors">Scheduled</span>
                                                <i class="fa-solid fa-chevron-right text-[8px] text-[#073B2E] opacity-0 -translate-x-1 group-hover/item:opacity-100 group-hover/item:translate-x-0 transition-all"></i>
                                            </div>
                                        </a>

                                        {{-- 8. Inter-Emirate Express Transit --}}
                                        <a href="{{ route('local-moving') }}" 
                                           @click="closeAll()"
                                           class="group/item flex items-center justify-between gap-2.5 p-2 rounded-xl bg-white hover:bg-[#EBF5E7] border border-[#E0E8E0] hover:border-[#B7E532] shadow-2xs hover:shadow-xs transition-all duration-150">
                                            <div class="flex items-center gap-2.5 min-w-0 flex-1">
                                                <span class="w-8 h-8 rounded-xl bg-white group-hover/item:bg-[#103B30] text-[#103B30] group-hover/item:text-[#D8F36B] border border-[#DCE6DC] group-hover/item:border-[#103B30] flex items-center justify-center text-xs transition-colors shrink-0 shadow-2xs">
                                                    <i class="fa-solid fa-route"></i>
                                                </span>
                                                <div class="min-w-0 flex-1">
                                                    <div class="font-black text-[13px] text-[#103B30] group-hover/item:text-[#073B2E] transition-colors leading-snug flex items-center justify-between">
                                                        <span class="truncate">Inter-Emirate Transit</span>
                                                    </div>
                                                    <div class="text-[11px] text-[#405047] font-medium leading-tight truncate">Cross-emirate NOCs &amp; GPS fleet</div>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-1.5 shrink-0 pl-1">
                                                <span class="text-[9px] font-black px-2 py-0.5 rounded-md bg-[#B7E532] text-[#073B2E] group-hover/item:bg-[#103B30] group-hover/item:text-[#D8F36B] transition-colors">All 7 UAE</span>
                                                <i class="fa-solid fa-chevron-right text-[8px] text-[#073B2E] opacity-0 -translate-x-1 group-hover/item:opacity-100 group-hover/item:translate-x-0 transition-all"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                {{-- 6. Gallery --}}
                <a href="{{ route('gallery') }}" 
                   class="relative group/nav whitespace-nowrap px-2.5 py-1.5 xl:px-3.5 xl:py-1.5 2xl:px-4 2xl:py-2 rounded-full transition-all duration-200 {{ request()->routeIs('gallery') ? 'bg-[#EBF5E7] text-[#073B2E] font-bold border border-[#CFE8C7] shadow-xs' : 'text-[#202A26] hover:text-[#073B2E] hover:bg-[#EBF5E7] border border-transparent' }}">
                    <span>Gallery</span>
                    <span class="absolute bottom-1 left-1/2 -translate-x-1/2 h-[2px] bg-[#B7E532] rounded-full transition-all duration-200 {{ request()->routeIs('gallery') ? 'w-4' : 'w-0 group-hover/nav:w-4' }}"></span>
                </a>

                {{-- 7. Blog --}}
                <a href="{{ route('blog.index') }}" 
                   class="relative group/nav whitespace-nowrap px-2.5 py-1.5 xl:px-3.5 xl:py-1.5 2xl:px-4 2xl:py-2 rounded-full transition-all duration-200 {{ request()->is('blog*') ? 'bg-[#EBF5E7] text-[#073B2E] font-bold border border-[#CFE8C7] shadow-xs' : 'text-[#202A26] hover:text-[#073B2E] hover:bg-[#EBF5E7] border border-transparent' }}">
                    <span>Blog</span>
                    <span class="absolute bottom-1 left-1/2 -translate-x-1/2 h-[2px] bg-[#B7E532] rounded-full transition-all duration-200 {{ request()->is('blog*') ? 'w-4' : 'w-0 group-hover/nav:w-4' }}"></span>
                </a>

                {{-- 8. Contact --}}
                <a href="{{ route('contact') }}" 
                   class="relative group/nav whitespace-nowrap px-2.5 py-1.5 xl:px-3.5 xl:py-1.5 2xl:px-4 2xl:py-2 rounded-full transition-all duration-200 {{ request()->routeIs('contact') ? 'bg-[#EBF5E7] text-[#073B2E] font-bold border border-[#CFE8C7] shadow-xs' : 'text-[#202A26] hover:text-[#073B2E] hover:bg-[#EBF5E7] border border-transparent' }}">
                    <span>Contact</span>
                    <span class="absolute bottom-1 left-1/2 -translate-x-1/2 h-[2px] bg-[#B7E532] rounded-full transition-all duration-200 {{ request()->routeIs('contact') ? 'w-4' : 'w-0 group-hover/nav:w-4' }}"></span>
                </a>
            </nav>

            {{-- 9. Phone Number ONLY (Far Right: Compact, Elegant Outline Element) --}}
            <div class="hidden lg:flex items-center shrink-0">
                <a href="tel:0507060165" 
                   class="inline-flex items-center gap-2 px-3.5 py-1.5 2xl:px-4 rounded-full border-2 border-[#B7E532] bg-white hover:bg-[#073B2E] text-[#073B2E] hover:text-[#D8F36B] hover:border-[#073B2E] shadow-[0_2px_10px_rgba(183,229,50,0.25)] hover:shadow-[0_8px_20px_rgba(7,59,46,0.3)] transition-all duration-200 group whitespace-nowrap"
                   title="Call MOVEXA 050 706 0165">
                    <span class="w-6 h-6 rounded-full bg-[#103B30] group-hover:bg-[#D8F36B] text-[#D8F36B] group-hover:text-[#073B2E] flex items-center justify-center transition-colors shadow-2xs">
                        <i class="fa-solid fa-phone text-[10px] transition-colors"></i>
                    </span>
                    <span class="text-[12.5px] xl:text-[13px] 2xl:text-[13.5px] font-black tracking-tight text-[#073B2E] group-hover:text-white transition-colors">
                        050 706 0165
                    </span>
                </a>
            </div>

            {{-- Mobile & Tablet Controls (visible below lg) --}}
            <div class="flex items-center gap-2 lg:hidden shrink-0">
                <a href="tel:0507060165" 
                   class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full border border-[#B7E532] bg-[#EBF5E7] text-xs font-bold text-[#073B2E] shadow-2xs"
                   title="Call 050 706 0165">
                    <i class="fa-solid fa-phone text-[#073B2E] text-[10px]"></i>
                    <span>050 706 0165</span>
                </a>
                <button type="button" 
                        @click="mobileOpen = !mobileOpen" 
                        class="w-9 h-9 rounded-xl bg-white border border-[#E2ECE2] text-[#073B2E] hover:bg-[#EBF5E7] flex items-center justify-center transition-colors focus:outline-none" 
                        aria-label="Toggle Navigation Menu">
                    <i class="fa-solid text-sm" :class="mobileOpen ? 'fa-xmark' : 'fa-bars'"></i>
                </button>
            </div>

        </div>
    </div>

    {{-- Mobile & Tablet Navigation Drawer (Clean, Modern Card Architecture / No Vertically Stretched Lists) --}}
    <div x-show="mobileOpen" 
         x-cloak
         x-transition:enter="transition ease-out duration-250"
         x-transition:enter-start="opacity-0 -translate-y-3"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-3"
         class="lg:hidden bg-white border-b border-[#E2ECE2] px-4 pt-3 pb-6 max-h-[82vh] overflow-y-auto shadow-2xl">
        
        <div class="space-y-1.5 text-sm font-semibold text-[#202A26]">
            {{-- 1. Home --}}
            <a href="{{ route('home') }}" 
               @click="mobileOpen = false"
               class="flex items-center gap-2.5 px-3 py-2 rounded-xl transition-colors {{ request()->routeIs('home') ? 'bg-[#EBF5E7] text-[#073B2E] font-bold border border-[#CFE8C7]' : 'hover:bg-[#EBF5E7]' }}">
                <span class="w-7 h-7 rounded-lg bg-[#EBF5E7] text-[#073B2E] flex items-center justify-center text-xs">
                    <i class="fa-solid fa-house"></i>
                </span>
                <span>Home</span>
            </a>

            {{-- 2. About Us --}}
            <a href="{{ route('about') }}" 
               @click="mobileOpen = false"
               class="flex items-center gap-2.5 px-3 py-2 rounded-xl transition-colors {{ request()->routeIs('about') ? 'bg-[#EBF5E7] text-[#073B2E] font-bold border border-[#CFE8C7]' : 'hover:bg-[#EBF5E7]' }}">
                <span class="w-7 h-7 rounded-lg bg-[#EBF5E7] text-[#073B2E] flex items-center justify-center text-xs">
                    <i class="fa-solid fa-circle-info"></i>
                </span>
                <span>About Us</span>
            </a>

            {{-- 3. Services Accordion (Organized into Clean 2-Column Grid) --}}
            <div class="border border-[#EAEFEA] rounded-2xl overflow-hidden bg-white">
                <button type="button" 
                        @click="mobileServicesOpen = !mobileServicesOpen" 
                        class="w-full flex items-center justify-between px-3.5 py-2.5 text-left transition-colors {{ request()->is('services*') ? 'bg-[#EBF5E7] text-[#073B2E] font-bold' : 'hover:bg-[#F0F5F0]' }}">
                    <span class="flex items-center gap-2.5">
                        <span class="w-7 h-7 rounded-lg bg-[#EBF5E7] text-[#073B2E] flex items-center justify-center text-xs">
                            <i class="fa-solid fa-truck-ramp-box"></i>
                        </span>
                        <span class="font-bold text-sm">Services</span>
                    </span>
                    <i class="fa-solid fa-chevron-down text-xs transition-transform duration-200" :class="{ 'rotate-180': mobileServicesOpen }"></i>
                </button>
                <div x-show="mobileServicesOpen" x-cloak class="p-3 bg-white border-t border-[#EAEFEA] space-y-3">
                    <div>
                        <span class="text-[10px] font-black uppercase tracking-wider text-[#073B2E] block mb-1.5">Residential Moving</span>
                        <div class="grid grid-cols-2 gap-1.5 text-xs">
                            <a href="{{ route('services.show', 'home-moving') }}" @click="mobileOpen = false" class="p-2 rounded-lg bg-white border border-[#EAEFEA] hover:bg-[#EBF5E7] text-[#202A26] font-bold flex items-center gap-1.5">
                                <i class="fa-solid fa-house text-[#073B2E] text-[10px]"></i> Home Moving
                            </a>
                            <a href="{{ route('services.show', 'apartment-moving') }}" @click="mobileOpen = false" class="p-2 rounded-lg bg-white border border-[#EAEFEA] hover:bg-[#EBF5E7] text-[#202A26] font-bold flex items-center gap-1.5">
                                <i class="fa-solid fa-building text-[#073B2E] text-[10px]"></i> Apartment
                            </a>
                            <a href="{{ route('services.show', 'villa-moving') }}" @click="mobileOpen = false" class="p-2 rounded-lg bg-white border border-[#EAEFEA] hover:bg-[#EBF5E7] text-[#202A26] font-bold flex items-center gap-1.5">
                                <i class="fa-solid fa-landmark-dome text-[#073B2E] text-[10px]"></i> Villa Move
                            </a>
                            <a href="{{ route('services.show', 'door-to-door-moving') }}" @click="mobileOpen = false" class="p-2 rounded-lg bg-white border border-[#EAEFEA] hover:bg-[#EBF5E7] text-[#202A26] font-bold flex items-center gap-1.5">
                                <i class="fa-solid fa-door-open text-[#073B2E] text-[10px]"></i> Door-to-Door
                            </a>
                        </div>
                    </div>

                    <div class="pt-2 border-t border-gray-100">
                        <span class="text-[10px] font-black uppercase tracking-wider text-[#073B2E] block mb-1.5">Commercial &amp; Storage</span>
                        <div class="grid grid-cols-2 gap-1.5 text-xs">
                            <a href="{{ route('services.show', 'office-relocation') }}" @click="mobileOpen = false" class="p-2 rounded-lg bg-white border border-[#EAEFEA] hover:bg-[#EBF5E7] text-[#202A26] font-bold flex items-center gap-1.5">
                                <i class="fa-solid fa-briefcase text-[#073B2E] text-[10px]"></i> Office Move
                            </a>
                            <a href="{{ route('services.show', 'storage-solutions') }}" @click="mobileOpen = false" class="p-2 rounded-lg bg-white border border-[#EAEFEA] hover:bg-[#EBF5E7] text-[#202A26] font-bold flex items-center gap-1.5">
                                <i class="fa-solid fa-warehouse text-[#073B2E] text-[10px]"></i> Storage
                            </a>
                            <a href="{{ route('international-moving') }}" @click="mobileOpen = false" class="p-2 rounded-lg bg-white border border-[#EAEFEA] hover:bg-[#EBF5E7] text-[#202A26] font-bold flex items-center gap-1.5">
                                <i class="fa-solid fa-plane text-[#073B2E] text-[10px]"></i> International
                            </a>
                            <a href="{{ route('local-moving') }}" @click="mobileOpen = false" class="p-2 rounded-lg bg-white border border-[#EAEFEA] hover:bg-[#EBF5E7] text-[#202A26] font-bold flex items-center gap-1.5">
                                <i class="fa-solid fa-truck-fast text-[#073B2E] text-[10px]"></i> Local Dubai
                            </a>
                        </div>
                    </div>
                    
                    <a href="{{ route('services.index') }}" @click="mobileOpen = false" class="block text-center py-2 rounded-xl bg-[#EBF5E7] font-bold text-xs text-[#073B2E] hover:bg-[#B7E532] transition-colors">
                        View All Moving Services Directory →
                    </a>
                </div>
            </div>

            {{-- 4. Moving Services Accordion (Local UAE + Global Routes) --}}
            <div class="border border-[#EAEFEA] rounded-2xl overflow-hidden bg-white">
                <button type="button" 
                        @click="mobileMovingServicesOpen = !mobileMovingServicesOpen" 
                        class="w-full flex items-center justify-between px-3.5 py-2.5 text-left transition-colors {{ (request()->routeIs('local-moving') || request()->routeIs('international-moving')) ? 'bg-[#EBF5E7] text-[#073B2E] font-bold' : 'hover:bg-[#F0F5F0]' }}">
                    <span class="flex items-center gap-2.5">
                        <span class="w-7 h-7 rounded-lg bg-[#EBF5E7] text-[#073B2E] flex items-center justify-center text-xs">
                            <i class="fa-solid fa-boxes-stacked"></i>
                        </span>
                        <span class="font-bold text-sm">Moving Services</span>
                    </span>
                    <i class="fa-solid fa-chevron-down text-xs transition-transform duration-200" :class="{ 'rotate-180': mobileMovingServicesOpen }"></i>
                </button>
                <div x-show="mobileMovingServicesOpen" x-cloak class="p-3 bg-white border-t border-[#EAEFEA] space-y-3">
                    {{-- Local Moving (7 Emirates) --}}
                    <div>
                        <div class="flex items-center justify-between mb-1.5">
                            <span class="text-[10px] font-black uppercase tracking-wider text-[#073B2E]">Local Moving (7 UAE Emirates)</span>
                            <a href="{{ route('local-moving') }}" @click="mobileOpen = false" class="text-[10px] font-bold text-[#073B2E] underline">Hub →</a>
                        </div>
                        <div class="grid grid-cols-2 gap-1.5 text-xs">
                            <a href="{{ route('local-moving') }}" @click="mobileOpen = false" class="p-1.5 rounded-lg bg-white border border-[#EAEFEA] text-[#202824] font-semibold flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#B7E532]"></span> Dubai
                            </a>
                            <a href="{{ route('local-moving') }}" @click="mobileOpen = false" class="p-1.5 rounded-lg bg-white border border-[#EAEFEA] text-[#202824] font-semibold flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#B7E532]"></span> Abu Dhabi
                            </a>
                            <a href="{{ route('local-moving') }}" @click="mobileOpen = false" class="p-1.5 rounded-lg bg-white border border-[#EAEFEA] text-[#202824] font-semibold flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#B7E532]"></span> Sharjah
                            </a>
                            <a href="{{ route('local-moving') }}" @click="mobileOpen = false" class="p-1.5 rounded-lg bg-white border border-[#EAEFEA] text-[#202824] font-semibold flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#B7E532]"></span> Ajman
                            </a>
                            <a href="{{ route('local-moving') }}" @click="mobileOpen = false" class="p-1.5 rounded-lg bg-white border border-[#EAEFEA] text-[#202824] font-semibold flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#B7E532]"></span> RAK
                            </a>
                            <a href="{{ route('local-moving') }}" @click="mobileOpen = false" class="p-1.5 rounded-lg bg-white border border-[#EAEFEA] text-[#202824] font-semibold flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#B7E532]"></span> Fujairah
                            </a>
                            <a href="{{ route('local-moving') }}" @click="mobileOpen = false" class="p-1.5 rounded-lg bg-white border border-[#EAEFEA] text-[#202824] font-semibold flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#B7E532]"></span> UAQ
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 5. Gallery --}}
            <a href="{{ route('gallery') }}" 
               @click="mobileOpen = false"
               class="flex items-center gap-2.5 px-3 py-2 rounded-xl transition-colors {{ request()->routeIs('gallery') ? 'bg-[#EBF5E7] text-[#073B2E] font-bold border border-[#CFE8C7]' : 'hover:bg-[#EBF5E7]' }}">
                <span class="w-7 h-7 rounded-lg bg-[#EBF5E7] text-[#073B2E] flex items-center justify-center text-xs">
                    <i class="fa-solid fa-images"></i>
                </span>
                <span>Gallery</span>
            </a>

            {{-- 6. Blog --}}
            <a href="{{ route('blog.index') }}" 
               @click="mobileOpen = false"
               class="flex items-center gap-2.5 px-3 py-2 rounded-xl transition-colors {{ request()->is('blog*') ? 'bg-[#EBF5E7] text-[#073B2E] font-bold border border-[#CFE8C7]' : 'hover:bg-[#EBF5E7]' }}">
                <span class="w-7 h-7 rounded-lg bg-[#EBF5E7] text-[#073B2E] flex items-center justify-center text-xs">
                    <i class="fa-solid fa-newspaper"></i>
                </span>
                <span>Blog</span>
            </a>

            {{-- 7. Contact --}}
            <a href="{{ route('contact') }}" 
               @click="mobileOpen = false"
               class="flex items-center gap-2.5 px-3 py-2 rounded-xl transition-colors {{ request()->routeIs('contact') ? 'bg-[#EBF5E7] text-[#073B2E] font-bold border border-[#CFE8C7]' : 'hover:bg-[#EBF5E7]' }}">
                <span class="w-7 h-7 rounded-lg bg-[#EBF5E7] text-[#073B2E] flex items-center justify-center text-xs">
                    <i class="fa-solid fa-envelope"></i>
                </span>
                <span>Contact</span>
            </a>

            {{-- Mobile Quick Actions --}}
            <div class="pt-3 border-t border-gray-100 flex flex-col gap-2">
                <button type="button" 
                        onclick="openQuoteModal();" 
                        @click="mobileOpen = false"
                        class="btn-lime w-full text-xs font-bold py-3">
                    <i class="fa-solid fa-calculator text-xs"></i>
                    <span>Get Free Moving Quote</span>
                </button>
                <a href="https://wa.me/{{ config('movexa.brand.whatsapp_number') }}" 
                   target="_blank" 
                   rel="noopener" 
                   class="inline-flex items-center justify-center gap-2 w-full py-2.5 rounded-full border border-gray-200 text-xs font-bold text-[#073B2E] hover:bg-[#EBF5E7]">
                    <i class="fa-brands fa-whatsapp text-sm text-[#25D366]"></i>
                    <span>WhatsApp Moving Specialist</span>
                </a>
            </div>
        </div>
    </div>
</header>
