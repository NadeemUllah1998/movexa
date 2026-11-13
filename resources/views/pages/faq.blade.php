@extends('layouts.app')

@section('title', 'Frequently Asked Questions | MOVEXA Moving Dubai')
@section('meta_description', 'Have questions about moving in Dubai or international relocation? Read answers to frequently asked questions about permits, packing, customs, and pricing.')

@section('content')

{{-- Breadcrumb --}}
<x-breadcrumb :items="[['label' => 'FAQ', 'url' => '']]" />

{{-- Hero Section --}}
<section class="bg-[#103B30] text-white py-16 sm:py-20 relative overflow-hidden">
    <div class="absolute -right-20 -bottom-20 w-96 h-96 rounded-full bg-[#08271F] opacity-70 blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center max-w-3xl">
        <span class="lime-badge mb-4">
            <i class="fa-solid fa-circle-question"></i> Clear & Honest Answers
        </span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold font-heading text-white tracking-tight leading-tight">
            Frequently Asked Questions
        </h1>
        <p class="text-base sm:text-lg text-white/80 mt-4 leading-relaxed font-normal">
            Find immediate answers regarding Dubai community move permits, elevator reservations, international shipping container options, customs relief, and furniture assembly.
        </p>
    </div>
</section>

{{-- FAQ Categorized Accordion Section --}}
<section class="py-20 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ activeCategory: '{{ array_key_first($faq_categories) }}', activeItem: null }">

    {{-- Category Pills --}}
    <div class="flex flex-wrap items-center justify-center gap-2 mb-12">
        @foreach (array_keys($faq_categories) as $catName)
        <button type="button" @click="activeCategory = '{{ $catName }}'; activeItem = null"
                :class="activeCategory === '{{ $catName }}' ? 'bg-[#103B30] text-white' : 'bg-white text-[#202824] hover:bg-[#EBF2EB]'"
                class="px-5 py-2.5 rounded-full text-xs font-bold border border-[#E2E8E2] transition-colors">
            {{ $catName }}
        </button>
        @endforeach
    </div>

    {{-- Categorized Lists --}}
    @foreach ($faq_categories as $catName => $faqs)
    <div x-show="activeCategory === '{{ $catName }}'" class="space-y-4" style="display: none;">
        <div class="mb-4">
            <h2 class="text-xl font-bold font-heading text-[#202824]">{{ $catName }}</h2>
            <p class="text-xs text-[#747C76]">Frequently asked questions regarding {{ strtolower($catName) }}.</p>
        </div>

        @foreach ($faqs as $i => $item)
        <div class="bg-white rounded-3xl border border-[#E2E8E2] overflow-hidden shadow-sm transition-colors">
            <button type="button" @click="activeItem = (activeItem === '{{ $catName }}-{{ $i }}' ? null : '{{ $catName }}-{{ $i }}')" 
                    class="w-full px-6 py-5 text-left flex items-center justify-between text-sm sm:text-base font-bold text-[#202824] hover:text-[#103B30] transition-colors focus:outline-none">
                <span>{{ $item['q'] }}</span>
                <span class="w-8 h-8 rounded-full bg-white border border-[#E2E8E2] flex items-center justify-center text-xs text-[#103B30] flex-shrink-0 ml-4 transition-transform duration-200"
                      :class="{ 'rotate-180 bg-[#EBF2EB]': activeItem === '{{ $catName }}-{{ $i }}' }">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </button>
            <div x-show="activeItem === '{{ $catName }}-{{ $i }}'" 
                 x-collapse
                 class="px-6 pb-6 pt-1 text-xs sm:text-sm text-[#747C76] leading-relaxed border-t border-gray-100"
                 style="display: none;">
                {{ $item['a'] }}
            </div>
        </div>
        @endforeach
    </div>
    @endforeach

    {{-- Still have questions banner --}}
    <div class="mt-16 bg-[#EBF2EB] p-8 rounded-3xl border border-[#103B30]/20 flex flex-col sm:flex-row items-center justify-between gap-6 text-center sm:text-left">
        <div>
            <h3 class="text-lg font-bold font-heading text-[#08271F]">Have a question not listed here?</h3>
            <p class="text-xs text-[#747C76] mt-1">Our relocation specialists are available to answer your specific requirements.</p>
        </div>
        <div class="flex items-center gap-3">
            <a href="https://wa.me/{{ config('movexa.brand.whatsapp_number') }}" target="_blank" rel="noopener" class="btn-forest text-xs font-bold py-3 px-5">
                <i class="fa-brands fa-whatsapp text-sm text-[#25D366]"></i> Chat on WhatsApp
            </a>
            <a href="{{ route('contact') }}" class="btn-outline-forest text-xs font-bold py-2.5 px-5">
                Contact Us
            </a>
        </div>
    </div>

</section>

{{-- Global CTA --}}
<x-cta-banner 
    headline="Ready to Plan Your Relocation?"
    subheadline="Get in touch with our moving team today for a transparent, itemized moving proposal."
    buttonText="Get a Free Quote"
/>

@endsection
