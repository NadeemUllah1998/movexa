@extends('layouts.app')

@section('title', 'Privacy Policy | MOVEXA Global Relocations')
@section('meta_description', 'Privacy Policy for MOVEXA Global Moving & Relocations in Dubai, UAE. How we handle and protect customer inquiry information.')

@section('content')

{{-- Breadcrumb --}}
<x-breadcrumb :items="[['label' => 'Privacy Policy', 'url' => '']]" />

<section class="py-16 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white rounded-3xl p-8 sm:p-12 border border-[#E2E8E2] shadow-sm space-y-6 text-xs sm:text-sm text-[#747C76] leading-relaxed">
        
        <div>
            <span class="forest-badge mb-2">Legal Compliance</span>
            <h1 class="text-3xl font-extrabold font-heading text-[#202824] tracking-tight">
                Privacy Policy
            </h1>
            <p class="text-xs text-[#747C76] mt-1">Last Updated: October 2026 • MOVEXA Relocations (Dubai, UAE)</p>
        </div>

        <div class="space-y-4 pt-4 border-t border-gray-100">
            <h2 class="text-lg font-bold font-heading text-[#202824]">1. Information We Collect</h2>
            <p>
                MOVEXA collects information necessary to formulate moving estimates, schedule on-site or virtual surveys, arrange building permits, and coordinate domestic or international freight logistics. This may include your name, email address, telephone number, origin address, destination address, preferred moving dates, and property inventory specifications.
            </p>

            <h2 class="text-lg font-bold font-heading text-[#202824]">2. How We Use Your Information</h2>
            <p>
                Your personal details are used exclusively to:
            </p>
            <ul class="list-disc pl-5 space-y-1">
                <li>Prepare and provide accurate moving quotations.</li>
                <li>Communicate with you regarding your moving schedule and logistics.</li>
                <li>Submit required documentation for building Move-In / Move-Out NOCs to property developers in Dubai.</li>
                <li>Coordinate with shipping lines, airlines, and destination customs clearance agents for international moves.</li>
            </ul>

            <h2 class="text-lg font-bold font-heading text-[#202824]">3. WhatsApp & Direct Communication</h2>
            <p>
                When you initiate an inquiry via WhatsApp or our online forms, your information is transmitted directly into official communication channels with our team. We do not sell, rent, or trade your contact details with third-party marketing brokers.
            </p>

            <h2 class="text-lg font-bold font-heading text-[#202824]">4. Data Protection & Confidentiality</h2>
            <p>
                We adopt appropriate technical measures to maintain the safety of your personal information. Only authorized operational coordinators who require customer data to execute moving services have access to your personal files.
            </p>

            <h2 class="text-lg font-bold font-heading text-[#202824]">5. Contact Us Regarding Privacy</h2>
            <p>
                If you have questions regarding this Privacy Policy, you may contact our legal desk at <a href="mailto:{{ config('movexa.brand.email') }}" class="text-[#103B30] font-bold underline">{{ config('movexa.brand.email') }}</a> or by mail at Business Bay, Dubai, United Arab Emirates.
            </p>
        </div>

    </div>
</section>

@endsection
