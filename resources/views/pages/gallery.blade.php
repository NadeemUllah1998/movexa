@extends('layouts.app')

@section('title', 'Moving & Packing Photo Gallery | MOVEXA Dubai')
@section('meta_description', 'Explore MOVEXA\'s visual gallery: apartment moving, luxury villa packing, corporate office shifting, custom wooden crating, and international maritime shipping.')

@section('content')

{{-- Breadcrumb --}}
<x-breadcrumb :items="[['label' => 'Moving Gallery', 'url' => '']]" />

{{-- Hero Section with Full-Cover Background Image (No Green Color) --}}
<section class="relative bg-neutral-900 text-white py-10 sm:py-16 lg:py-24 overflow-hidden">
    {{-- Full Background Cover Picture --}}
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/gallery/movexa-gallery-skyline-crew-fleet.webp') }}" 
             alt="MOVEXA Moving Fleet & Uniformed Crew with Dubai Skyline" 
             class="w-full h-full object-cover object-center scale-100"
             loading="eager" decoding="async">
        {{-- Neutral Dark Gradient Overlay (No Green Background) for Optimal Contrast & Readability --}}
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/75"></div>
    </div>

    {{-- Hero Content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center max-w-3xl">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/15 backdrop-blur-md border border-white/25 text-white text-xs font-bold uppercase tracking-wider mb-4 shadow-sm">
            <i class="fa-solid fa-camera text-[#B7E532]"></i>
            <span>Verified Operational Showcase</span>
        </div>
        <h1 class="text-3xl min-[375px]:text-4xl sm:text-5xl lg:text-6xl font-black font-heading text-white tracking-tight leading-tight">
            Our Moving Gallery
        </h1>
        <p class="text-sm sm:text-base lg:text-lg text-white/90 mt-4 leading-relaxed font-normal">
            Take a visual tour of our daily relocation operations across Dubai and all 7 UAE Emirates. From white-glove villa loading to heavy-duty custom timber crates, enclosed GPS trucks, and master carpentry setup.
        </p>

        {{-- Operational Highlights Pills --}}
        <div class="mt-6 sm:mt-8 flex flex-wrap items-center justify-center gap-2.5 sm:gap-4 text-xs font-semibold text-white/90">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-black/40 backdrop-blur-md border border-white/15">
                <span class="w-2 h-2 rounded-full bg-[#B7E532]"></span>
                <span>{{ count($gallery) }} Verified Photos</span>
            </div>
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-black/40 backdrop-blur-md border border-white/15">
                <i class="fa-solid fa-map-pin text-[11px] text-[#B7E532]"></i>
                <span>All 7 UAE Emirates</span>
            </div>
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-black/40 backdrop-blur-md border border-white/15">
                <i class="fa-solid fa-user-check text-[11px] text-[#B7E532]"></i>
                <span>100% Full-Time In-House Staff</span>
            </div>
        </div>
    </div>
</section>

{{-- Gallery Section with Filter Tabs & Lightbox --}}
<section class="py-10 sm:py-14 lg:py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ activeCategory: 'All' }">
    
    {{-- Category Filters with Count Badges --}}
    @php
        $cats = array_merge(['All'], array_values(array_unique(array_column($gallery, 'category'))));
        $catCounts = ['All' => count($gallery)];
        foreach ($gallery as $gItem) {
            $catCounts[$gItem['category']] = ($catCounts[$gItem['category']] ?? 0) + 1;
        }
    @endphp
    <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-2.5 mb-8 sm:mb-12">
        @foreach ($cats as $cat)
        <button type="button" @click="activeCategory = '{{ $cat }}'"
                :class="activeCategory === '{{ $cat }}' 
                    ? 'bg-[#073B2E] text-white border-[#073B2E] ring-2 ring-[#B7E532] shadow-md' 
                    : 'bg-white text-[#202824] hover:bg-[#F2F6F2] hover:text-[#073B2E] border-[#E2E8E2]'"
                class="inline-flex items-center gap-2 px-4 sm:px-5 py-2.5 rounded-full text-xs sm:text-sm font-bold border transition-all duration-200">
            <span>{{ $cat }}</span>
            <span class="text-[10px] font-extrabold px-2 py-0.5 rounded-full transition-colors"
                  :class="activeCategory === '{{ $cat }}' ? 'bg-[#B7E532] text-[#073B2E]' : 'bg-[#EBF2EB] text-[#4E5B54]'">
                {{ $catCounts[$cat] ?? 0 }}
            </span>
        </button>
        @endforeach
    </div>

    {{-- Image Grid (Clean 16:10 Aspect Ratio Cards) --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
        @foreach ($gallery as $index => $item)
        <div x-show="activeCategory === 'All' || activeCategory === '{{ $item['category'] }}'"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             class="group relative rounded-3xl overflow-hidden bg-white border border-[#E2E8E2] cursor-pointer shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between card-hover"
             onclick="openLightbox('{{ asset($item['image']) }}', '{{ addslashes($item['title'] . ' – ' . $item['caption']) }}')">
            
            <div class="relative w-full aspect-[16/10] overflow-hidden bg-gray-100">
                <img src="{{ asset($item['image']) }}" 
                     alt="{{ $item['title'] }}" 
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                     style="object-position: {{ $item['object_position'] ?? 'center' }};"
                     loading="{{ $index < 6 ? 'eager' : 'lazy' }}" decoding="async">
                
                {{-- Hover Lightbox Trigger Overlay --}}
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center backdrop-blur-[2px]">
                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white text-[#073B2E] text-xs font-bold shadow-xl">
                        <i class="fa-solid fa-magnifying-glass-plus text-[#073B2E]"></i>
                        <span>Enlarge Photo</span>
                    </span>
                </div>

                {{-- Category Badge Pill --}}
                <div class="absolute top-3 left-3 bg-black/70 backdrop-blur-md text-[#B7E532] border border-white/15 text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full shadow-sm">
                    {{ $item['category'] }}
                </div>
            </div>

            <div class="p-5 flex-grow flex flex-col justify-between space-y-2 bg-white">
                <div>
                    <h3 class="text-base font-bold font-heading text-[#073B2E] group-hover:text-[#0a5240] transition-colors line-clamp-1">
                        {{ $item['title'] }}
                    </h3>
                    <p class="text-xs text-[#5A645E] line-clamp-2 mt-1 leading-relaxed font-normal">
                        {{ $item['caption'] }}
                    </p>
                </div>
                <div class="pt-3 border-t border-[#E8EEE8] flex items-center justify-between text-xs font-bold text-[#073B2E]">
                    <span>View Full Photo</span>
                    <i class="fa-solid fa-arrow-up-right-from-square text-[11px] group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"></i>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</section>

{{-- Global CTA --}}
<x-cta-banner 
    headline="Inspired by Our Quality Work?"
    subheadline="Contact MOVEXA today to arrange a personalized survey and receive a binding moving proposal."
    buttonText="Request Your Free Quote"
/>

@endsection