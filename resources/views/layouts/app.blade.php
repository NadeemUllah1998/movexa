<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- SEO Title & Description --}}
    <title>@yield('title', 'MOVEXA | Global Moving & Relocations Dubai | Moving Beyond Borders')</title>
    <meta name="description" content="@yield('meta_description', 'MOVEXA is Dubai\'s premier moving and relocation specialist. Providing local home, villa, and office moving across the UAE, and international relocations worldwide with export packing.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Movers in Dubai, Moving Company in Dubai, Movers and Packers Dubai, International Movers Dubai, Home Movers Dubai, Villa Movers Dubai, Office Relocation Dubai, UAE Relocation')">
    <meta name="author" content="MOVEXA Global Moving & Relocations">
    <link rel="canonical" href="@yield('canonical', url()->current())">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:title" content="@yield('title', 'MOVEXA | Global Moving & Relocations Dubai')">
    <meta property="og:description" content="@yield('meta_description', 'Professional moving and relocation solutions across Dubai and worldwide. Moving Beyond Borders.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('images/hero-og.jpg'))">
    <meta property="og:site_name" content="MOVEXA">
    <meta property="og:locale" content="en_AE">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'MOVEXA | Global Moving & Relocations Dubai')">
    <meta name="twitter:description" content="@yield('meta_description', 'Professional moving and relocation solutions across Dubai and worldwide.')">
    <meta name="twitter:image" content="@yield('og_image', asset('images/hero-og.jpg'))">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('images/logo/movexa-logo-transparent.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo/movexa-logo.png') }}">

    {{-- Critical Inline Styles to Prevent FOUC & Layout Shifts --}}
    <style>
        [x-cloak] { display: none !important; }
        /* Guarantee header logo never expands beyond fixed bounds on initial HTML render */
        .movexa-header-logo {
            height: 46px;
            width: auto;
            max-width: 220px;
            aspect-ratio: 1024 / 341;
        }
        @media (min-width: 640px) {
            .movexa-header-logo { height: 50px; }
        }
        @media (min-width: 1536px) {
            .movexa-header-logo { height: 54px; }
        }
    </style>

    {{-- Preload Critical Brand & Hero Assets for Instant Paint --}}
    <link rel="preload" as="image" href="{{ asset('images/logo/movexa-logo.webp') }}" type="image/webp" fetchpriority="high">
    <link rel="preload" as="image" href="{{ asset('images/hero/movexa-hero-villa-unloading.webp') }}" type="image/webp" fetchpriority="high">

    {{-- Google Fonts: Plus Jakarta Sans & Manrope --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- Font Awesome Free 6.5.1 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Schema.org JSON-LD Structured Data --}}
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MovingCompany",
      "name": "MOVEXA - Global Moving & Relocations",
      "legalName": "MOVEXA Relocations LLC",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('images/logo/movexa-logo.png') }}",
      "description": "Professional local moving in Dubai, villa and apartment shifting, office corporate relocation, and international household moving from Dubai to worldwide destinations.",
      "telephone": "{{ config('movexa.brand.phone_raw') }}",
      "email": "{{ config('movexa.brand.email') }}",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Al Saada Tower, Business Bay",
        "addressLocality": "Dubai",
        "addressRegion": "Dubai",
        "addressCountry": "AE"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 25.1867,
        "longitude": 55.2744
      },
      "areaServed": [
        "Dubai",
        "Abu Dhabi",
        "Sharjah",
        "Ajman",
        "Ras Al Khaimah",
        "Fujairah",
        "United Arab Emirates",
        "United Kingdom",
        "United States",
        "Canada",
        "Australia",
        "Germany",
        "France",
        "India",
        "Pakistan",
        "Saudi Arabia",
        "Qatar",
        "Oman",
        "Singapore"
      ],
      "sameAs": [
        "https://www.linkedin.com",
        "https://www.instagram.com"
      ],
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          "opens": "08:00",
          "closes": "20:00"
        }
      ]
    }
    </script>

    @stack('head')
</head>
<body class="bg-white text-[#202824] font-sans antialiased selection:bg-[#D8F36B] selection:text-[#08271F] min-h-screen flex flex-col justify-between w-full">

    {{-- Top Announcement Bar --}}
    <div class="bg-[#073B2E] text-[11px] sm:text-xs text-white/90 border-b border-white/10 py-1.5 px-3 sm:px-4 w-full overflow-hidden leading-tight">
        <div class="max-w-7xl 2xl:max-w-[1520px] mx-auto flex flex-col sm:flex-row items-center justify-between gap-1.5 sm:gap-4 text-center sm:text-left">
            <div class="flex items-center gap-2 sm:gap-3">
                <span class="inline-flex items-center gap-1.5 text-[#B7E532] font-bold text-[11px] sm:text-[11.5px] tracking-wide">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#B7E532] animate-pulse"></span>
                    <i class="fa-solid fa-globe text-[10px]"></i>
                    <span>Dubai &amp; Global Relocations</span>
                </span>
                <span class="hidden md:inline text-white/20 text-xs">•</span>
                <span class="hidden md:inline text-white/80 text-[11px] sm:text-[11.5px] font-medium flex items-center gap-1.5">
                    <i class="fa-solid fa-shield-halved text-[#B7E532] text-[10px]"></i>
                    <span>Moving Beyond Borders With Care</span>
                </span>
            </div>
            <div class="flex items-center gap-3 sm:gap-4 text-[11px] sm:text-[11.5px]">
                <a href="tel:0507060165" class="inline-flex items-center gap-1.5 text-white/95 hover:text-[#B7E532] transition-colors whitespace-nowrap font-bold">
                    <i class="fa-solid fa-phone text-[#B7E532] text-[10px]"></i>
                    <span>Phone: 050 706 0165</span>
                </a>
            </div>
        </div>
    </div>

    {{-- Main Navigation Header --}}
    <x-header />

    {{-- Main Content Area --}}
    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- Footer --}}
    <x-footer />

    {{-- Reusable Multi-Step Quotation Modal --}}
    <x-quote-modal />

    {{-- Reusable Lightbox Modal --}}
    <div id="movexaLightbox" class="fixed inset-0 z-50 bg-black/90 backdrop-blur-md hidden items-center justify-center p-4 transition-all duration-300" role="dialog" aria-modal="true" aria-label="Image Preview">
        <button type="button" onclick="closeLightbox()" class="absolute top-6 right-6 text-white/80 hover:text-[#D8F36B] text-3xl z-50 p-2 transition-colors focus:outline-none" aria-label="Close image preview">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="max-w-5xl max-h-[90vh] flex flex-col items-center">
            <img id="lightboxImage" src="" alt="MOVEXA Gallery Preview" class="max-h-[80vh] max-w-full rounded-2xl object-contain shadow-2xl border border-white/10">
            <p id="lightboxCaption" class="text-white/90 text-sm md:text-base mt-4 font-medium text-center px-4"></p>
        </div>
    </div>

    {{-- Floating Action Controls: WhatsApp Round Button & Back-To-Top --}}
    <div class="fixed bottom-6 right-6 z-40 flex flex-col items-center gap-3">
        {{-- Back to top button --}}
        <button id="backToTopBtn" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-[#103B30] text-white shadow-md flex items-center justify-center opacity-0 pointer-events-none transition-all duration-300 hover:bg-[#08271F] hover:shadow-xl hover:scale-105 focus:outline-none" aria-label="Scroll to top">
            <i class="fa-solid fa-chevron-up text-sm"></i>
        </button>

        {{-- WhatsApp Round (Goal) Button with Tooltip --}}
        <a href="https://wa.me/{{ config('movexa.brand.whatsapp_number') }}?text={{ urlencode('Hello MOVEXA, I would like to get a moving quote.') }}" 
           target="_blank" 
           rel="noopener" 
           class="group relative w-14 h-14 sm:w-15 sm:h-15 rounded-full bg-gradient-to-br from-[#2fe872] to-[#20BA5A] text-white flex items-center justify-center shadow-[0_10px_28px_rgba(37,211,102,0.5),inset_0_1.5px_1.5px_rgba(255,255,255,0.65)] hover:shadow-[0_14px_35px_rgba(37,211,102,0.7),inset_0_1.5px_1.5px_rgba(255,255,255,0.9)] hover:scale-110 active:scale-95 border border-white/30 transition-all duration-300 focus:outline-none" 
           aria-label="Chat on WhatsApp">
            {{-- WhatsApp Icon --}}
            <i class="fa-brands fa-whatsapp text-3xl sm:text-[34px] text-white transition-transform duration-300 group-hover:scale-105"></i>

            {{-- Hover Tooltip (Desktop) --}}
            <span class="absolute right-full mr-3.5 px-3.5 py-1.5 rounded-xl bg-[#103B30] text-white text-xs font-bold whitespace-nowrap shadow-xl opacity-0 group-hover:opacity-100 pointer-events-none transition-all duration-300 -translate-x-2 group-hover:translate-x-0 hidden sm:flex items-center gap-1.5 border border-white/10">
                <span>Chat on WhatsApp</span>
                <i class="fa-solid fa-arrow-right text-[10px] text-[#D8F36B]"></i>
            </span>
        </a>
    </div>

    {{-- Global Scripts --}}
    <script>
        // Back to top scroll handler
        window.addEventListener('scroll', function() {
            const btn = document.getElementById('backToTopBtn');
            if (window.scrollY > 400) {
                btn.classList.remove('opacity-0', 'pointer-events-none');
                btn.classList.add('opacity-100', 'pointer-events-auto');
            } else {
                btn.classList.add('opacity-0', 'pointer-events-none');
                btn.classList.remove('opacity-100', 'pointer-events-auto');
            }
        });

        // Lightbox Functions
        function openLightbox(imageUrl, caption = '') {
            const modal = document.getElementById('movexaLightbox');
            const img = document.getElementById('lightboxImage');
            const cap = document.getElementById('lightboxCaption');
            if (modal && img) {
                img.src = imageUrl;
                cap.textContent = caption;
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeLightbox() {
            const modal = document.getElementById('movexaLightbox');
            if (modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.style.overflow = '';
            }
        }

        // Close lightbox on Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeLightbox();
                if (typeof closeQuoteModal === 'function') {
                    closeQuoteModal();
                }
            }
        });
    </script>

    @stack('scripts')
</body>
</html>
