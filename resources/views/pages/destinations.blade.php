@extends('layouts.app')

@section('title', 'International Relocation Destinations From Dubai | MOVEXA')
@section('meta_description', 'Explore MOVEXA\'s destination relocation guides for 12 major countries: UK, USA, Canada, Australia, Germany, France, India, Pakistan, Saudi Arabia, Qatar, Oman, and Singapore.')

@section('content')

{{-- Breadcrumb --}}
<x-breadcrumb :items="[['label' => 'Destinations', 'url' => '']]" />

{{-- Hero Section --}}
<section class="bg-[#103B30] text-white py-16 sm:py-20 relative overflow-hidden">
    <div class="absolute -right-20 -bottom-20 w-96 h-96 rounded-full bg-[#08271F] opacity-70 blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center max-w-3xl">
        <span class="lime-badge mb-4">
            <i class="fa-solid fa-globe"></i> Global Moving Network
        </span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold font-heading text-white tracking-tight leading-tight">
            International Relocation Destinations
        </h1>
        <p class="text-base sm:text-lg text-white/80 mt-4 leading-relaxed font-normal">
            Relocating from Dubai to a new country? Browse our in-depth destination guides covering customs relief forms, shipping container transit schedules, documentation checklists, and packing specifications.
        </p>
    </div>
</section>

{{-- Destination Filter & Grid --}}
<section class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ activeRegion: 'All' }">
    
    {{-- Region Filter Pills --}}
    <div class="flex flex-wrap items-center justify-center gap-2 mb-12">
        <button type="button" @click="activeRegion = 'All'" 
                :class="activeRegion === 'All' ? 'bg-[#103B30] text-white' : 'bg-white text-[#202824] hover:bg-[#EBF2EB]'" 
                class="px-5 py-2 rounded-full text-xs font-bold border border-[#E2E8E2] transition-colors">
            All 12 Destinations
        </button>
        <button type="button" @click="activeRegion = 'Europe'" 
                :class="activeRegion === 'Europe' ? 'bg-[#103B30] text-white' : 'bg-white text-[#202824] hover:bg-[#EBF2EB]'" 
                class="px-5 py-2 rounded-full text-xs font-bold border border-[#E2E8E2] transition-colors">
            Europe (UK, DE, FR)
        </button>
        <button type="button" @click="activeRegion = 'North America'" 
                :class="activeRegion === 'North America' ? 'bg-[#103B30] text-white' : 'bg-white text-[#202824] hover:bg-[#EBF2EB]'" 
                class="px-5 py-2 rounded-full text-xs font-bold border border-[#E2E8E2] transition-colors">
            North America (USA, Canada)
        </button>
        <button type="button" @click="activeRegion = 'Middle East'" 
                :class="activeRegion === 'Middle East' ? 'bg-[#103B30] text-white' : 'bg-white text-[#202824] hover:bg-[#EBF2EB]'" 
                class="px-5 py-2 rounded-full text-xs font-bold border border-[#E2E8E2] transition-colors">
            GCC / Middle East (KSA, QA, OM)
        </button>
        <button type="button" @click="activeRegion = 'Asia'" 
                :class="activeRegion === 'Asia' ? 'bg-[#103B30] text-white' : 'bg-white text-[#202824] hover:bg-[#EBF2EB]'" 
                class="px-5 py-2 rounded-full text-xs font-bold border border-[#E2E8E2] transition-colors">
            Asia (IN, PK, SG)
        </button>
        <button type="button" @click="activeRegion = 'Oceania'" 
                :class="activeRegion === 'Oceania' ? 'bg-[#103B30] text-white' : 'bg-white text-[#202824] hover:bg-[#EBF2EB]'" 
                class="px-5 py-2 rounded-full text-xs font-bold border border-[#E2E8E2] transition-colors">
            Oceania (Australia)
        </button>
    </div>

    {{-- Cards Grid --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach ($destinations as $dest)
        <div x-show="activeRegion === 'All' || activeRegion === '{{ $dest['region'] }}'" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100">
            <x-destination-card :dest="$dest" />
        </div>
        @endforeach
    </div>

</section>

{{-- Customs Compliance Banner --}}
<section class="py-16 bg-white border-y border-[#E2E8E2]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-8 space-y-3">
                <span class="forest-badge">Customs Transparency</span>
                <h3 class="text-2xl font-bold font-heading text-[#202824]">
                    Destination Customs Regulations & Duty-Free Allowances
                </h3>
                <p class="text-xs text-[#747C76] leading-relaxed">
                    Most sovereign countries allow duty-free and tax-free entry for bona fide used personal effects and household goods under Transfer of Residence (ToR) rules. However, each destination has distinct qualification criteria, such as proving minimum stay abroad (usually 12 to 24 months) and declaring unaccompanied effects beforehand.
                </p>
            </div>
            <div class="lg:col-span-4 flex justify-start lg:justify-end">
                <button type="button" onclick="openQuoteModal('International', 'International Moving')" class="btn-forest text-xs font-bold py-3.5 px-6">
                    <i class="fa-solid fa-file-invoice"></i> Get Custom Route Quote
                </button>
            </div>
        </div>
    </div>
</section>

{{-- Global CTA --}}
<x-cta-banner 
    headline="Planning a Move to Any of These Destinations?"
    subheadline="Contact MOVEXA today to evaluate container space, ocean transit schedules, and destination customs paperwork."
    buttonText="Request Destination Quote"
/>

@endsection
