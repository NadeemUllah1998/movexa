@extends('layouts.app')

@section('title', 'Moving Guides & Relocation Insights | MOVEXA Dubai')
@section('meta_description', 'Expert moving advice, Dubai building permit tips, international customs checklists, and furniture packing guides from MOVEXA relocation professionals.')

@section('content')

{{-- Breadcrumb --}}
<x-breadcrumb :items="[['label' => 'Blog & Moving Guides', 'url' => '']]" />

{{-- Hero Section --}}
<section class="bg-[#103B30] text-white py-10 sm:py-14 lg:py-18 relative overflow-hidden">
    <div class="absolute -right-20 -bottom-20 w-96 h-96 rounded-full bg-[#08271F] opacity-70 blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center max-w-3xl">
        <span class="lime-badge mb-4">
            <i class="fa-solid fa-newspaper"></i> Relocation Knowledge Base
        </span>
        <h1 class="text-3xl min-[375px]:text-4xl sm:text-5xl lg:text-6xl font-extrabold font-heading text-white tracking-tight leading-tight">
            Moving Guides & Expert Advice
        </h1>
        <p class="text-sm sm:text-base lg:text-lg text-white/80 mt-4 leading-relaxed font-normal">
            Practical insights on Dubai rental NOCs, international customs declarations, container logistics, and professional furniture wrapping techniques.
        </p>
    </div>
</section>

{{-- Blog Grid --}}
<section class="py-10 sm:py-14 lg:py-18 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($posts as $post)
        <article class="group bg-white rounded-3xl overflow-hidden border border-[#E2E8E2] shadow-sm hover:shadow-premium transition-all duration-300 flex flex-col justify-between card-hover">
            
            {{-- Image & Category --}}
            <div class="relative h-52 overflow-hidden bg-gray-100">
                <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                
                <div class="absolute top-4 left-4">
                    <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-[#103B30] text-[#D8F36B] shadow-sm">
                        {{ $post['category'] }}
                    </span>
                </div>

                <div class="absolute bottom-3 left-4 right-4 text-xs text-white/90 flex items-center gap-3">
                    <span class="flex items-center gap-1.5">
                        <i class="fa-solid fa-calendar-day text-[11px] text-[#D8F36B]"></i>
                        {{ $post['date'] }}
                    </span>
                    <span>•</span>
                    <span class="flex items-center gap-1.5">
                        <i class="fa-solid fa-clock text-[11px] text-[#D8F36B]"></i>
                        {{ $post['read_time'] }}
                    </span>
                </div>
            </div>

            {{-- Body --}}
            <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                <div class="space-y-2">
                    <h2 class="text-lg font-bold font-heading text-[#202824] group-hover:text-[#103B30] transition-colors leading-snug">
                        <a href="{{ route('blog.show', $post['slug']) }}">
                            {{ $post['title'] }}
                        </a>
                    </h2>
                    <p class="text-xs text-[#747C76] line-clamp-3 leading-relaxed">
                        {{ $post['excerpt'] }}
                    </p>
                </div>

                <div class="pt-4 border-t border-[#E2E8E2] flex items-center justify-between">
                    <span class="text-[11px] text-[#747C76] font-medium">By {{ $post['author'] }}</span>
                    <a href="{{ route('blog.show', $post['slug']) }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#103B30] group-hover:translate-x-1 transition-transform">
                        <span>Read Guide</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>

        </article>
        @endforeach
    </div>
</section>

{{-- Global CTA --}}
<x-cta-banner 
    headline="Planning a Move Soon?"
    subheadline="Put our moving advice into practice. Contact MOVEXA today for an organized, transparent moving proposal."
    buttonText="Request Your Free Quote"
/>

@endsection
