@extends('layouts.app')

@section('title', $post['title'] . ' | MOVEXA Moving Guides')
@section('meta_description', $post['excerpt'])

@section('content')

{{-- Breadcrumb --}}
<x-breadcrumb :items="[
    ['label' => 'Blog & Moving Guides', 'url' => route('blog.index')],
    ['label' => $post['title'], 'url' => '']
]" />

{{-- Article Header Section --}}
<section class="bg-[#103B30] text-white py-16 sm:py-20 relative overflow-hidden">
    <div class="absolute -right-20 -bottom-20 w-96 h-96 rounded-full bg-[#08271F] opacity-70 blur-3xl pointer-events-none"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-4">
        <div class="flex items-center justify-center gap-3">
            <span class="lime-badge">{{ $post['category'] }}</span>
            <span class="text-xs text-white/70">{{ $post['read_time'] }}</span>
            <span class="text-xs text-white/70">•</span>
            <span class="text-xs text-white/70">{{ $post['date'] }}</span>
        </div>

        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-heading text-white tracking-tight leading-tight">
            {{ $post['title'] }}
        </h1>

        <p class="text-xs text-white/70">
            Authored by <span class="text-[#D8F36B] font-semibold">{{ $post['author'] }}</span> • MOVEXA Global Relocations
        </p>
    </div>
</section>

{{-- Article Main Content & Sidebar Layout --}}
<section class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
        
        {{-- Main Article Column --}}
        <div class="lg:col-span-8 space-y-8">
            
            {{-- Featured Image --}}
            <div class="rounded-3xl overflow-hidden shadow-md aspect-[16/9] bg-gray-100 border border-[#E2E8E2]">
                <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover">
            </div>

            {{-- Lead Introduction --}}
            <div class="p-6 rounded-3xl bg-[#EBF2EB] border border-[#103B30]/20 text-[#08271F] text-sm leading-relaxed font-medium">
                {{ $post['intro'] }}
            </div>

            {{-- Table of Contents --}}
            <div class="p-6 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm space-y-3">
                <span class="text-xs font-bold text-[#103B30] uppercase tracking-wider flex items-center gap-2">
                    <i class="fa-solid fa-list-ul"></i> Table of Contents
                </span>
                <ul class="space-y-1.5 text-xs text-[#202824]">
                    @foreach ($post['sections'] as $sIndex => $sec)
                    <li>
                        <a href="#section-{{ $sIndex }}" class="hover:text-[#103B30] hover:underline flex items-center gap-2">
                            <span class="text-[#103B30] font-bold">0{{ $sIndex + 1 }}.</span>
                            <span>{{ $sec['h2'] }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Body Sections --}}
            <div class="space-y-8">
                @foreach ($post['sections'] as $sIndex => $sec)
                <div id="section-{{ $sIndex }}" class="space-y-3 scroll-mt-24">
                    <h2 class="text-xl sm:text-2xl font-bold font-heading text-[#202824] pt-2">
                        {{ $sec['h2'] }}
                    </h2>
                    <p class="text-xs sm:text-sm text-[#747C76] leading-relaxed">
                        {{ $sec['content'] }}
                    </p>
                </div>
                @endforeach
            </div>

            {{-- Actionable Checklist Box --}}
            @if (!empty($post['checklist_items']))
            <div class="p-6 sm:p-8 rounded-3xl bg-white border-2 border-[#103B30] shadow-sm space-y-4">
                <div class="flex items-center gap-3">
                    <span class="w-9 h-9 rounded-xl bg-[#103B30] text-[#D8F36B] flex items-center justify-center text-sm">
                        <i class="fa-solid fa-square-check"></i>
                    </span>
                    <div>
                        <h3 class="text-base font-bold font-heading text-[#202824]">
                            Relocation Action Checklist
                        </h3>
                        <span class="text-[11px] text-[#747C76]">Key takeaways from this moving guide</span>
                    </div>
                </div>

                <ul class="space-y-2 text-xs text-[#202824]">
                    @foreach ($post['checklist_items'] as $item)
                    <li class="flex items-start gap-2.5">
                        <i class="fa-solid fa-check text-xs text-[#103B30] mt-0.5"></i>
                        <span class="font-medium">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif

            {{-- Author Bio / Brand Sign-off --}}
            <div class="p-6 rounded-3xl bg-white border border-[#E2E8E2] flex items-center gap-4 text-xs">
                <div class="w-12 h-12 rounded-2xl bg-[#103B30] text-[#D8F36B] flex items-center justify-center font-bold text-lg flex-shrink-0">
                    <i class="fa-solid fa-shield-cat"></i>
                </div>
                <div>
                    <span class="font-bold text-[#202824] block">Published by {{ $post['author'] }}</span>
                    <p class="text-[#747C76] text-[11px] mt-0.5 leading-tight">
                        MOVEXA provides professional moving, packing, and global relocation services from Dubai to destinations worldwide.
                    </p>
                </div>
            </div>

        </div>

        {{-- Sidebar Column --}}
        <div class="lg:col-span-4 space-y-6">
            
            {{-- Quick Quote Box --}}
            <div class="bg-[#08271F] text-white p-6 sm:p-8 rounded-3xl border border-white/10 shadow-xl space-y-4">
                <span class="lime-badge">Free Estimation</span>
                <h3 class="text-xl font-bold font-heading text-white">
                    Planning Your Next Move?
                </h3>
                <p class="text-xs text-white/70 leading-relaxed">
                    Get an itemized moving proposal in minutes with zero obligations.
                </p>
                <button type="button" onclick="openQuoteModal()" class="btn-lime w-full text-xs font-bold py-3.5 shadow-lime-glow">
                    <i class="fa-solid fa-calculator"></i>
                    <span>Get Moving Quote</span>
                </button>
                <a href="https://wa.me/{{ config('movexa.brand.whatsapp_number') }}" target="_blank" rel="noopener" class="w-full btn-outline-white py-2.5 text-xs text-center block rounded-full">
                    <i class="fa-brands fa-whatsapp text-sm text-[#25D366]"></i> Chat on WhatsApp
                </a>
            </div>

            {{-- More Articles List --}}
            <div class="bg-white p-6 rounded-3xl border border-[#E2E8E2] shadow-sm space-y-4">
                <h4 class="text-sm font-bold font-heading text-[#202824] border-b border-[#E2E8E2] pb-2">
                    Related Moving Guides
                </h4>

                <div class="space-y-3">
                    @foreach (array_slice($all_posts, 0, 5) as $p)
                        @if ($p['slug'] !== $slug)
                        <a href="{{ route('blog.show', $p['slug']) }}" class="block group">
                            <span class="text-[10px] text-[#103B30] font-bold uppercase tracking-wider block">{{ $p['category'] }}</span>
                            <span class="text-xs font-bold text-[#202824] group-hover:text-[#103B30] transition-colors line-clamp-2 mt-0.5">
                                {{ $p['title'] }}
                            </span>
                            <span class="text-[10px] text-[#747C76] block mt-1">{{ $p['date'] }}</span>
                        </a>
                        @endif
                    @endforeach
                </div>
            </div>

        </div>

    </div>
</section>

{{-- Global CTA --}}
<x-cta-banner 
    headline="Put Our Relocation Expertise to Work"
    subheadline="Whether moving across Dubai or shipping household effects worldwide, MOVEXA ensures your belongings arrive safely."
    buttonText="Request Your Free Proposal"
/>

@endsection
