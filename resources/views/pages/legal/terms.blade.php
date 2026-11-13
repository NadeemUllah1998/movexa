@extends('layouts.app')

@section('title', 'Terms and Conditions | MOVEXA Global Relocations')
@section('meta_description', 'Terms and Conditions governing moving, packing, storage, and international relocation services provided by MOVEXA in Dubai, UAE.')

@section('content')

{{-- Breadcrumb --}}
<x-breadcrumb :items="[['label' => 'Terms and Conditions', 'url' => '']]" />

<section class="py-16 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white rounded-3xl p-8 sm:p-12 border border-[#E2E8E2] shadow-sm space-y-6 text-xs sm:text-sm text-[#747C76] leading-relaxed">
        
        <div>
            <span class="forest-badge mb-2">Service Agreement</span>
            <h1 class="text-3xl font-extrabold font-heading text-[#202824] tracking-tight">
                Terms and Conditions
            </h1>
            <p class="text-xs text-[#747C76] mt-1">Last Updated: October 2026 • MOVEXA Relocations (Dubai, UAE)</p>
        </div>

        <div class="space-y-4 pt-4 border-t border-gray-100">
            <h2 class="text-lg font-bold font-heading text-[#202824]">1. Quotations and Service Scope</h2>
            <p>
                All moving quotations issued by MOVEXA are based on the initial volume, access conditions, and services agreed upon during the survey or inquiry. Additional services requested on moving day (such as extra packing materials, unexpected flights of stairs without elevator access, or additional collection addresses) may be subject to supplementary charges.
            </p>

            <h2 class="text-lg font-bold font-heading text-[#202824]">2. Building Permits & Access NOCs</h2>
            <p>
                It is the responsibility of the customer to ensure that all necessary Move-In and Move-Out permits (NOCs) are obtained from building management, master developers, or community gate authorities prior to our crew's scheduled arrival. MOVEXA will furnish all required company trade licenses, vehicle registrations, and personnel identification upon confirmation of booking.
            </p>

            <h2 class="text-lg font-bold font-heading text-[#202824]">3. Excluded & Prohibited Items</h2>
            <p>
                MOVEXA does not transport hazardous materials, flammable fuels, illegal substances, perishable foodstuffs, cash currency, precious jewelry, or confidential identity documents. High-value jewelry, personal passports, and vital medical items must remain in the personal custody of the customer during transit.
            </p>

            <h2 class="text-lg font-bold font-heading text-[#202824]">4. International Moving & Customs</h2>
            <p>
                For international shipments departing the United Arab Emirates, shipping dates, ocean transit schedules, and port handling are subject to maritime carrier operations and official sovereign customs inspection protocols. While MOVEXA provides expert guidance and prepares all export documentation, customs duty liabilities, inspection charges, and final release remain under destination government authority.
            </p>

            <h2 class="text-lg font-bold font-heading text-[#202824]">5. Goods in Transit & Valuation Protection</h2>
            <p>
                Standard moves include our goods-in-transit handling warranty for professionally packed items. Customers wishing to procure comprehensive all-risk transit insurance for high-value artwork or luxury antiques can coordinate with their moving advisor prior to dispatch.
            </p>

            <h2 class="text-lg font-bold font-heading text-[#202824]">6. Governing Law</h2>
            <p>
                These terms are governed by and construed in accordance with the laws of the Emirate of Dubai and the federal laws of the United Arab Emirates.
            </p>
        </div>

    </div>
</section>

@endsection
