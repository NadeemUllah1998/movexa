@extends('layouts.app')

@section('title', 'Moving from Dubai to ' . $destination['country'] . ' | MOVEXA Relocations')
@section('meta_description', 'Complete relocation guide for moving from Dubai to ' . $destination['country'] . '. Shipping container timelines, destination customs regulations, documentation checklist, and export packing.')

@section('content')

{{-- Breadcrumb --}}
<x-breadcrumb :items="[
    ['label' => 'Destinations', 'url' => route('destinations.index')],
    ['label' => 'Dubai to ' . $destination['country'], 'url' => '']
]" />

{{-- Destination Hero Section --}}
<section class="bg-[#103B30] text-white py-16 sm:py-20 relative overflow-hidden">
    <div class="absolute -right-20 -bottom-20 w-96 h-96 rounded-full bg-[#08271F] opacity-70 blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            {{-- Hero Left --}}
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                <div class="flex flex-wrap items-center justify-center lg:justify-start gap-2">
                    <span class="text-2xl p-1 bg-white/10 rounded-lg">{{ $destination['flag'] }}</span>
                    <span class="lime-badge">
                        <i class="fa-solid fa-plane-departure"></i>
                        Dubai to {{ $destination['country'] }} Route
                    </span>
                    <span class="px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-white/10 text-white/90">
                        {{ $destination['region'] }}
                    </span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold font-heading text-white tracking-tight leading-tight">
                    {{ $destination['headline'] }}
                </h1>

                <p class="text-base sm:text-lg text-white/80 max-w-xl leading-relaxed font-normal">
                    {{ $destination['subheadline'] }}
                </p>

                <div class="pt-4 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <button type="button" onclick="openQuoteModal('{{ $destination['country'] }}', 'International Moving')" class="btn-lime w-full sm:w-auto text-xs font-bold py-3.5 px-6 shadow-lime-glow">
                        <i class="fa-solid fa-file-invoice"></i>
                        <span>Get {{ $destination['country'] }} Moving Quote</span>
                    </button>

                    <a href="https://wa.me/{{ config('movexa.brand.whatsapp_number') }}?text={{ urlencode('Hello MOVEXA, I am planning a move from Dubai to ' . $destination['country'] . '.') }}" target="_blank" rel="noopener" class="btn-outline-white w-full sm:w-auto text-xs font-semibold py-3 px-5">
                        <i class="fa-brands fa-whatsapp text-sm text-[#25D366]"></i>
                        <span>Chat With Route Specialist</span>
                    </a>
                </div>

                {{-- Transit Times Badge Bar --}}
                <div class="pt-6 grid grid-cols-2 sm:grid-cols-3 gap-3 border-t border-white/10 text-left">
                    <div class="p-3 rounded-2xl bg-white/5 border border-white/10">
                        <span class="text-[10px] text-[#D8F36B] uppercase font-bold block">Estimated Ocean Transit</span>
                        <span class="text-xs font-bold text-white">{{ $destination['transit_sea'] }}</span>
                    </div>
                    <div class="p-3 rounded-2xl bg-white/5 border border-white/10">
                        <span class="text-[10px] text-[#D8F36B] uppercase font-bold block">Estimated Air Freight</span>
                        <span class="text-xs font-bold text-white">{{ $destination['transit_air'] }}</span>
                    </div>
                    <div class="p-3 rounded-2xl bg-white/5 border border-white/10 col-span-2 sm:col-span-1">
                        <span class="text-[10px] text-[#D8F36B] uppercase font-bold block">Key Destination Hubs</span>
                        <span class="text-xs font-bold text-white truncate block">{{ $destination['ports'] }}</span>
                    </div>
                </div>

            </div>

            {{-- Hero Right: Image --}}
            <div class="lg:col-span-5">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl border-2 border-white/20 aspect-[4/3] group bg-[#08271F]">
                    <img src="{{ $destination['image'] }}" alt="Relocation from Dubai to {{ $destination['country'] }} - MOVEXA" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4 bg-white/95 backdrop-blur-md p-3.5 rounded-2xl text-[#08271F] flex items-center justify-between text-xs">
                        <div>
                            <span class="font-bold block">Major Cities Served:</span>
                            <span class="text-[11px] text-[#747C76]">{{ $destination['capital_city'] }}</span>
                        </div>
                        <span class="text-2xl">{{ $destination['flag'] }}</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Destination Overview & Customs Regulations --}}
<section class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
        
        {{-- Left: In-depth Route Narrative --}}
        <div class="lg:col-span-7 space-y-8">
            <div>
                <span class="forest-badge mb-2">Route Analysis</span>
                <h2 class="text-3xl font-extrabold font-heading text-[#202824] tracking-tight">
                    Relocation Overview: Dubai to {{ $destination['country'] }}
                </h2>
                <p class="text-sm text-[#747C76] leading-relaxed mt-4">
                    {{ $destination['intro'] }}
                </p>
            </div>

            {{-- Customs Framework --}}
            <div class="bg-white p-8 rounded-3xl border border-[#E2E8E2] shadow-sm space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-[#103B30] text-[#D8F36B] flex items-center justify-center font-bold">
                        <i class="fa-solid fa-stamp"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold font-heading text-[#202824]">
                            Customs Relief & Duty-Free Status
                        </h3>
                        <span class="text-xs text-[#747C76]">Official Transfer of Residence Regulations</span>
                    </div>
                </div>

                <p class="text-xs text-[#747C76] leading-relaxed">
                    {{ $destination['customs_overview'] }}
                </p>

                <div class="p-4 rounded-2xl bg-[#EBF2EB] border border-[#103B30]/20 flex items-start gap-3 text-xs text-[#08271F]">
                    <i class="fa-solid fa-lightbulb text-base text-[#103B30] mt-0.5"></i>
                    <div>
                        <span class="font-bold block">Important Customs Tip:</span>
                        <span>{{ $destination['customs_tips'] }}</span>
                    </div>
                </div>
            </div>

            {{-- Shipping Modes Available --}}
            <div class="space-y-4">
                <h3 class="text-xl font-bold font-heading text-[#202824]">
                    Available Freight Options for {{ $destination['country'] }}
                </h3>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    @foreach ($destination['shipping_modes'] as $mode)
                    <div class="p-4 rounded-2xl bg-white border border-[#E2E8E2] shadow-sm text-xs space-y-1.5">
                        <i class="fa-solid fa-ship text-[#103B30] text-sm"></i>
                        <p class="font-semibold text-[#202824] leading-tight">{{ $mode }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Right: Documentation Checklist & Direct Quote CTA --}}
        <div class="lg:col-span-5 space-y-6">
            
            {{-- Document Checklist Card --}}
            <div class="bg-white p-6 sm:p-8 rounded-3xl border border-[#E2E8E2] shadow-sm space-y-4">
                <div class="flex items-center gap-3 pb-3 border-b border-[#E2E8E2]">
                    <span class="w-9 h-9 rounded-xl bg-[#103B30] text-[#D8F36B] flex items-center justify-center text-sm">
                        <i class="fa-solid fa-file-circle-check"></i>
                    </span>
                    <div>
                        <h3 class="text-base font-bold font-heading text-[#202824]">
                            Documentation Checklist
                        </h3>
                        <span class="text-[11px] text-[#747C76]">Required for export & destination import</span>
                    </div>
                </div>

                <ul class="space-y-2.5 text-xs text-[#202824]">
                    @foreach ($destination['docs_needed'] as $doc)
                    <li class="flex items-start gap-2.5">
                        <i class="fa-solid fa-check text-xs text-[#103B30] mt-0.5"></i>
                        <span class="leading-tight">{{ $doc }}</span>
                    </li>
                    @endforeach
                </ul>

                <div class="pt-2">
                    <p class="text-[11px] text-[#747C76] italic">
                        * MOVEXA assists with preparing packing inventories and coordinating with destination customs clearing agents.
                    </p>
                </div>
            </div>

            {{-- Quick Quote Box for this country --}}
            <div class="bg-[#08271F] text-white p-6 sm:p-8 rounded-3xl border border-white/10 shadow-xl space-y-4">
                <span class="lime-badge">Route Quotation</span>
                <h4 class="text-xl font-bold font-heading text-white">
                    Moving from Dubai to {{ $destination['country'] }}?
                </h4>
                <p class="text-xs text-white/70 leading-relaxed">
                    Get an itemized, transparent freight estimate tailored to your volume, destination city, and preferred departure date.
                </p>
                <button type="button" onclick="openQuoteModal('{{ $destination['country'] }}', 'International Moving')" class="btn-lime w-full text-xs font-bold py-3.5 shadow-lime-glow">
                    <i class="fa-solid fa-calculator"></i>
                    <span>Quote Dubai to {{ $destination['country'] }}</span>
                </button>
            </div>

        </div>

    </div>
</section>

{{-- Destination Specific FAQs --}}
@if (!empty($destination['faqs']))
<section class="py-16 bg-white border-t border-[#E2E8E2]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10 space-y-2">
            <span class="forest-badge">Destination Q&A</span>
            <h2 class="text-3xl font-extrabold font-heading text-[#202824]">
                Dubai to {{ $destination['country'] }} Moving FAQs
            </h2>
        </div>

        <div class="space-y-3" x-data="{ activeFaq: null }">
            @foreach ($destination['faqs'] as $idx => $faq)
            <div class="rounded-2xl border border-[#E2E8E2] overflow-hidden bg-white">
                <button type="button" @click="activeFaq = (activeFaq === {{ $idx }} ? null : {{ $idx }})" class="w-full px-6 py-4 text-left flex items-center justify-between text-sm font-bold text-[#202824] hover:text-[#103B30] transition-colors focus:outline-none">
                    <span>{{ $faq['q'] }}</span>
                    <i class="fa-solid fa-chevron-down text-xs transition-transform" :class="{ 'rotate-180': activeFaq === {{ $idx }} }"></i>
                </button>
                <div x-show="activeFaq === {{ $idx }}" class="px-6 pb-4 pt-1 text-xs text-[#747C76] leading-relaxed border-t border-gray-200" style="display: none;">
                    {{ $faq['a'] }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- Other Destinations Navigation --}}
<section class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-t border-[#E2E8E2]">
    <div class="flex items-center justify-between mb-8">
        <h3 class="text-xl font-bold font-heading text-[#202824]">Other Popular Moving Routes From Dubai</h3>
        <a href="{{ route('destinations.index') }}" class="text-xs font-bold text-[#103B30] hover:underline">All Destinations →</a>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3">
        @foreach (array_slice($all_destinations, 0, 6) as $other)
            @if ($other['slug'] !== $slug)
            <a href="{{ route('destinations.show', $other['slug']) }}" class="p-3 rounded-2xl bg-white border border-[#E2E8E2] hover:border-[#103B30] transition-colors flex items-center gap-2 group text-xs font-bold text-[#202824] truncate">
                <span class="text-base">{{ $other['flag'] }}</span>
                <span class="truncate group-hover:text-[#103B30]">{{ $other['country'] }}</span>
            </a>
            @endif
        @endforeach
    </div>
</section>

{{-- Global CTA --}}
<x-cta-banner 
    headline="Begin Your Journey to {{ $destination['country'] }}"
    subheadline="From seaworthy export crating in Dubai to port customs clearance and final overseas home delivery."
    buttonText="Request {{ $destination['country'] }} Quote"
    :destination="$destination['country']"
/>

@endsection
