@extends('layouts.app')

@section('title', 'Contact MOVEXA | Moving Company in Dubai, UAE')
@section('meta_description', 'Get in touch with MOVEXA moving specialists in Dubai. Reach us via WhatsApp, phone, or email for quick moving inquiries, quotes, or relocation advice.')

@section('content')

{{-- Breadcrumb --}}
<x-breadcrumb :items="[['label' => 'Contact Us', 'url' => '']]" />

{{-- Hero Section --}}
<section class="bg-[#103B30] text-white py-16 sm:py-20 relative overflow-hidden">
    <div class="absolute -right-20 -bottom-20 w-96 h-96 rounded-full bg-[#08271F] opacity-70 blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center max-w-3xl">
        <span class="lime-badge mb-4">
            <i class="fa-solid fa-headset"></i> We Are Here to Help
        </span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold font-heading text-white tracking-tight leading-tight">
            Contact MOVEXA
        </h1>
        <p class="text-base sm:text-lg text-white/80 mt-4 leading-relaxed font-normal">
            Have questions about an upcoming move across Dubai or an international relocation? Connect with our dedicated relocation advisors today.
        </p>
    </div>
</section>

{{-- Main Contact Section (Grid) --}}
<section class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
        
        {{-- Contact Details Left --}}
        <div class="lg:col-span-5 space-y-8">
            <div>
                <span class="forest-badge mb-2">Direct Channels</span>
                <h2 class="text-3xl font-extrabold font-heading text-[#202824] tracking-tight">
                    Get in Touch Directly
                </h2>
                <p class="text-xs sm:text-sm text-[#747C76] mt-2 leading-relaxed">
                    Our relocation advisors in Dubai are available 6 days a week to assist with surveys, building permits, and quotation requests.
                </p>
            </div>

            <div class="space-y-4">
                {{-- Phone --}}
                <div class="p-5 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm flex items-start gap-4">
                    <div class="w-11 h-11 rounded-2xl bg-[#EBF2EB] text-[#103B30] flex items-center justify-center text-lg flex-shrink-0">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div>
                        <span class="text-[11px] font-bold text-[#747C76] uppercase tracking-wider block">Phone Line</span>
                        <a href="tel:{{ config('movexa.brand.phone_raw') }}" class="text-sm font-bold text-[#103B30] hover:underline">
                            {{ config('movexa.brand.phone_display') }}
                        </a>
                        <span class="text-[11px] text-[#747C76] block">Mon–Sat: 8:00 AM – 8:00 PM</span>
                    </div>
                </div>

                {{-- WhatsApp --}}
                <div class="p-5 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm flex items-start gap-4">
                    <div class="w-11 h-11 rounded-2xl bg-[#25D366]/15 text-[#25D366] flex items-center justify-center text-xl flex-shrink-0">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                    <div>
                        <span class="text-[11px] font-bold text-[#747C76] uppercase tracking-wider block">Instant WhatsApp</span>
                        <a href="https://wa.me/{{ config('movexa.brand.whatsapp_number') }}" target="_blank" rel="noopener" class="text-sm font-bold text-[#202824] hover:text-[#25D366]">
                            {{ config('movexa.brand.whatsapp_display') }}
                        </a>
                        <span class="text-[11px] text-[#747C76] block">Immediate response during working hours</span>
                    </div>
                </div>

                {{-- Email --}}
                <div class="p-5 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm flex items-start gap-4">
                    <div class="w-11 h-11 rounded-2xl bg-[#EBF2EB] text-[#103B30] flex items-center justify-center text-lg flex-shrink-0">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div>
                        <span class="text-[11px] font-bold text-[#747C76] uppercase tracking-wider block">Email Inquiries</span>
                        <a href="mailto:{{ config('movexa.brand.email') }}" class="text-sm font-bold text-[#103B30] hover:underline">
                            {{ config('movexa.brand.email') }}
                        </a>
                        <span class="text-[11px] text-[#747C76] block">Formal quotations and corporate RFP replies</span>
                    </div>
                </div>

                {{-- Office Location --}}
                <div class="p-5 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm flex items-start gap-4">
                    <div class="w-11 h-11 rounded-2xl bg-[#EBF2EB] text-[#103B30] flex items-center justify-center text-lg flex-shrink-0">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div>
                        <span class="text-[11px] font-bold text-[#747C76] uppercase tracking-wider block">Headquarters</span>
                        <span class="text-xs font-bold text-[#202824] block">
                            Business Bay, Dubai, United Arab Emirates
                        </span>
                        <span class="text-[11px] text-[#747C76] block">Serving all UAE Emirates & Global Destinations</span>
                    </div>
                </div>
            </div>

            {{-- Google Map Placeholder --}}
            <div class="rounded-3xl overflow-hidden border border-[#E2E8E2] shadow-sm bg-gray-100 aspect-video relative flex items-center justify-center text-center p-6">
                <div class="space-y-2">
                    <div class="w-10 h-10 rounded-full bg-[#103B30] text-[#D8F36B] flex items-center justify-center mx-auto text-base">
                        <i class="fa-solid fa-map-location-dot"></i>
                    </div>
                    <span class="text-xs font-bold text-[#202824] block">Business Bay, Dubai, UAE</span>
                    <span class="text-[11px] text-[#747C76] block">Interactive Map Location Placeholder</span>
                </div>
            </div>
        </div>

        {{-- Contact Form Right --}}
        <div class="lg:col-span-7">
            <div class="bg-white p-8 sm:p-10 rounded-3xl border border-[#E2E8E2] shadow-premium">
                <div class="mb-6">
                    <span class="forest-badge mb-2">Send an Inquiry</span>
                    <h3 class="text-2xl font-bold font-heading text-[#202824] tracking-tight">
                        Send a Direct Message
                    </h3>
                    <p class="text-xs text-[#747C76] mt-1">
                        Fill in your details below. You can send this inquiry directly via WhatsApp for fastest response, or through your default email client.
                    </p>
                </div>

                <div id="contactAlert" class="hidden mb-4 p-3 rounded-xl bg-red-50 border border-red-200 text-red-700 text-xs font-semibold flex items-center gap-2">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <span id="contactAlertMsg">Please fill all required fields.</span>
                </div>

                <form id="contactForm" onsubmit="handleContactSubmit(event)" class="space-y-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-[#202824] mb-1">
                                Full Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="cName" required placeholder="Your full name" class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] py-2.5 px-3">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-[#202824] mb-1">
                                Email Address <span class="text-red-500">*</span>
                            </label>
                            <input type="email" id="cEmail" required placeholder="name@example.com" class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] py-2.5 px-3">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-[#202824] mb-1">
                                Phone Number / WhatsApp <span class="text-red-500">*</span>
                            </label>
                            <input type="tel" id="cPhone" required placeholder="050 7060165" class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] py-2.5 px-3">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-[#202824] mb-1">
                                Subject <span class="text-red-500">*</span>
                            </label>
                            <select id="cSubject" required class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] py-2.5 px-3">
                                <option value="Local Moving Quote (Dubai)">Local Moving Quote (Dubai)</option>
                                <option value="Villa Relocation Inquiry">Villa Relocation Inquiry</option>
                                <option value="International Moving Quote">International Moving Quote</option>
                                <option value="Office Corporate Move">Office Corporate Move</option>
                                <option value="Packing or Storage Inquiry">Packing or Storage Inquiry</option>
                                <option value="General Question">General Question</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-[#202824] mb-1">
                            Your Message <span class="text-red-500">*</span>
                        </label>
                        <textarea id="cMessage" rows="5" required placeholder="Please describe where you are moving from, to, your target dates, and any specific questions..." class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] py-2.5 px-3"></textarea>
                    </div>

                    <div class="pt-2 space-y-3">
                        <button type="submit" class="w-full bg-[#25D366] hover:bg-[#20ba59] text-white py-3.5 px-6 rounded-2xl font-bold text-xs flex items-center justify-center gap-2 shadow-md transition-all">
                            <i class="fa-brands fa-whatsapp text-lg"></i>
                            <span>Send Message via WhatsApp (Instant Response)</span>
                        </button>

                        <button type="button" onclick="sendContactViaEmail()" class="w-full btn-outline-forest py-3 px-6 text-xs font-bold rounded-2xl flex items-center justify-center gap-2">
                            <i class="fa-solid fa-envelope"></i>
                            <span>Send via Email Alternative</span>
                        </button>
                    </div>

                    <p class="text-[11px] text-[#747C76] text-center pt-2">
                        * Inquiries connect directly with MOVEXA's relocation team in Dubai. Your privacy is protected.
                    </p>
                </form>
            </div>
        </div>

    </div>
</section>

@endsection

@push('scripts')
<script>
    function handleContactSubmit(e) {
        e.preventDefault();
        const name = document.getElementById('cName').value.trim();
        const email = document.getElementById('cEmail').value.trim();
        const phone = document.getElementById('cPhone').value.trim();
        const subject = document.getElementById('cSubject').value;
        const message = document.getElementById('cMessage').value.trim();

        if (!name || !email || !phone || !message) {
            document.getElementById('contactAlert').classList.remove('hidden');
            return;
        }

        const msg = `💬 *NEW INQUIRY – MOVEXA WEBSITE*\n` +
                    `-----------------------------------\n` +
                    `👤 *Name:* ${name}\n` +
                    `📧 *Email:* ${email}\n` +
                    `📞 *Phone:* ${phone}\n` +
                    `🏷️ *Subject:* ${subject}\n` +
                    `-----------------------------------\n` +
                    `📝 *Message:*\n${message}\n` +
                    `-----------------------------------\n` +
                    `Sent via MOVEXA Dubai Contact Page`;

        const whatsappNumber = "{{ config('movexa.brand.whatsapp_number') }}";
        window.open(`https://wa.me/${whatsappNumber}?text=${encodeURIComponent(msg)}`, '_blank');
    }

    function sendContactViaEmail() {
        const name = document.getElementById('cName').value.trim();
        const email = document.getElementById('cEmail').value.trim();
        const phone = document.getElementById('cPhone').value.trim();
        const subject = document.getElementById('cSubject').value;
        const message = document.getElementById('cMessage').value.trim();

        if (!name || !email) {
            document.getElementById('contactAlert').classList.remove('hidden');
            return;
        }

        const msg = `Name: ${name}\nEmail: ${email}\nPhone: ${phone}\nSubject: ${subject}\n\nMessage:\n${message}`;
        const toEmail = "{{ config('movexa.brand.email') }}";
        window.location.href = `mailto:${toEmail}?subject=${encodeURIComponent(subject + ' - ' + name)}&body=${encodeURIComponent(msg)}`;
    }
</script>
@endpush
