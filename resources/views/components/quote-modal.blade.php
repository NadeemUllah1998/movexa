<div id="movexaQuoteModal" class="fixed inset-0 z-50 bg-black/80 backdrop-blur-sm hidden items-center justify-center p-3 sm:p-4 overflow-y-auto" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <div class="relative w-full max-w-2xl bg-white rounded-3xl shadow-2xl border border-[#E2E8E2] overflow-hidden my-8">

        {{-- Modal Header --}}
        <div class="bg-[#103B30] text-white px-6 py-5 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-[#D8F36B] text-[#08271F] flex items-center justify-center font-bold text-lg">
                    <i class="fa-solid fa-calculator"></i>
                </div>
                <div>
                    <h3 id="modalTitle" class="text-lg font-bold text-white font-heading">
                        Request a Free Moving Quote
                    </h3>
                    <p class="text-xs text-[#D8F36B]">
                        Fast, transparent quotation tailored to your move
                    </p>
                </div>
            </div>
            <button type="button" onclick="closeQuoteModal()" class="w-9 h-9 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center text-lg transition-colors focus:outline-none" aria-label="Close modal">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        {{-- Step Progress Bar --}}
        <div class="bg-white px-6 py-3 border-b border-[#E2E8E2]">
            <div class="flex items-center justify-between text-xs font-bold text-[#747C76]">
                <div id="stepIndicator1" class="flex items-center gap-2 text-[#103B30]">
                    <span class="w-6 h-6 rounded-full bg-[#103B30] text-white flex items-center justify-center text-[11px]">1</span>
                    <span class="hidden sm:inline">Moving Details</span>
                </div>
                <div class="w-8 sm:w-12 h-0.5 bg-[#E2E8E2]" id="stepBar1"></div>
                <div id="stepIndicator2" class="flex items-center gap-2">
                    <span class="w-6 h-6 rounded-full bg-[#E2E8E2] text-[#747C76] flex items-center justify-center text-[11px]">2</span>
                    <span class="hidden sm:inline">Property</span>
                </div>
                <div class="w-8 sm:w-12 h-0.5 bg-[#E2E8E2]" id="stepBar2"></div>
                <div id="stepIndicator3" class="flex items-center gap-2">
                    <span class="w-6 h-6 rounded-full bg-[#E2E8E2] text-[#747C76] flex items-center justify-center text-[11px]">3</span>
                    <span class="hidden sm:inline">Contact</span>
                </div>
                <div class="w-8 sm:w-12 h-0.5 bg-[#E2E8E2]" id="stepBar3"></div>
                <div id="stepIndicator4" class="flex items-center gap-2">
                    <span class="w-6 h-6 rounded-full bg-[#E2E8E2] text-[#747C76] flex items-center justify-center text-[11px]">4</span>
                    <span class="hidden sm:inline">Review</span>
                </div>
            </div>
        </div>

        {{-- Form Content --}}
        <form id="quoteMultiStepForm" onsubmit="event.preventDefault();" class="p-6">

            {{-- Validation Error Alert Box --}}
            <div id="formAlertBox" class="hidden mb-4 p-3 rounded-xl bg-red-50 border border-red-200 text-red-700 text-xs font-semibold flex items-center gap-2">
                <i class="fa-solid fa-triangle-exclamation text-base"></i>
                <span id="formAlertMsg">Please fill in all required fields to proceed.</span>
            </div>

            {{-- STEP 1: MOVING DETAILS --}}
            <div id="quoteStep1" class="space-y-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-[#202824] mb-1">
                            Moving From <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="qMoveFrom" placeholder="e.g. Dubai Marina, Downtown, Abu Dhabi" class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] focus:ring-[#103B30] py-2.5 px-3">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-[#202824] mb-1">
                            Moving To <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="qMoveTo" placeholder="e.g. Palm Jumeirah, London UK, Toronto CA" class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] focus:ring-[#103B30] py-2.5 px-3">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-[#202824] mb-1">
                            Target Moving Date <span class="text-red-500">*</span>
                        </label>
                        <input type="date" id="qMoveDate" class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] focus:ring-[#103B30] py-2.5 px-3">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-[#202824] mb-1">
                            Moving Category <span class="text-red-500">*</span>
                        </label>
                        <select id="qMoveType" class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] focus:ring-[#103B30] py-2.5 px-3">
                            <option value="">Select Moving Category</option>
                            <option value="Home Moving">Home Moving (Residential)</option>
                            <option value="Apartment Moving">Apartment Moving (High-Rise)</option>
                            <option value="Villa Relocation">Villa Relocation (Estate/Townhouse)</option>
                            <option value="Office Relocation">Office Relocation (Commercial)</option>
                            <option value="International Moving">International Moving (Overseas)</option>
                            <option value="Packing Only">Professional Packing Only</option>
                            <option value="Storage & Moving">Storage Solutions & Moving</option>
                        </select>
                    </div>
                </div>

                <div class="pt-4 flex justify-end">
                    <button type="button" onclick="goToStep(2)" class="btn-forest text-xs font-bold py-2.5 px-6">
                        <span>Continue to Property Details</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </button>
                </div>
            </div>

            {{-- STEP 2: PROPERTY DETAILS --}}
            <div id="quoteStep2" class="space-y-4 hidden">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-[#202824] mb-1">
                            Property Size / Bedrooms <span class="text-red-500">*</span>
                        </label>
                        <select id="qBedrooms" class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] focus:ring-[#103B30] py-2.5 px-3">
                            <option value="Studio / 1 Room">Studio / 1 Room</option>
                            <option value="1 Bedroom Apartment">1 Bedroom Apartment</option>
                            <option value="2 Bedroom Apartment">2 Bedroom Apartment</option>
                            <option value="3 Bedroom Apartment / Villa">3 Bedroom Apartment / Villa</option>
                            <option value="4 Bedroom Villa">4 Bedroom Villa</option>
                            <option value="5+ Bedroom Luxury Villa">5+ Bedroom Luxury Villa</option>
                            <option value="Small Commercial Office (1-15 desks)">Small Commercial Office (1-15 desks)</option>
                            <option value="Medium/Large Corporate Office">Medium/Large Corporate Office</option>
                            <option value="Boxes / Partial Load Only">Boxes / Partial Load Only</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-[#202824] mb-1">
                            Floor Level (Current Address)
                        </label>
                        <input type="text" id="qFloor" placeholder="e.g. Ground Floor, 14th Floor" class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] focus:ring-[#103B30] py-2.5 px-3">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-[#202824] mb-1">
                            Elevator Available?
                        </label>
                        <select id="qElevator" class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] focus:ring-[#103B30] py-2.5 px-3">
                            <option value="Yes - Service Lift">Yes - Service Lift</option>
                            <option value="Yes - Passenger Lift">Yes - Passenger Lift</option>
                            <option value="No - Stairs Only">No - Stairs Only</option>
                            <option value="Ground Floor Villa">Ground Floor Villa</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-[#202824] mb-1">
                            Packing Required?
                        </label>
                        <select id="qPacking" class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] focus:ring-[#103B30] py-2.5 px-3">
                            <option value="Full Professional Packing (Recommended)">Full Professional Packing (Recommended)</option>
                            <option value="Fragile Items Only">Fragile Items Only</option>
                            <option value="Self Packing (Transport Only)">Self Packing (Transport Only)</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-[#202824] mb-1">
                            Furniture Dismantling?
                        </label>
                        <select id="qDismantle" class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] focus:ring-[#103B30] py-2.5 px-3">
                            <option value="Yes (Beds & Wardrobes)">Yes (Beds & Wardrobes)</option>
                            <option value="No (Already dismantled / not needed)">No (Not needed)</option>
                        </select>
                    </div>
                </div>

                <div class="pt-4 flex items-center justify-between">
                    <button type="button" onclick="goToStep(1)" class="btn-outline-forest text-xs font-bold py-2.5 px-5">
                        <i class="fa-solid fa-arrow-left text-xs"></i> Back
                    </button>
                    <button type="button" onclick="goToStep(3)" class="btn-forest text-xs font-bold py-2.5 px-6">
                        <span>Continue to Contact</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </button>
                </div>
            </div>

            {{-- STEP 3: CUSTOMER CONTACT DETAILS --}}
            <div id="quoteStep3" class="space-y-4 hidden">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-[#202824] mb-1">
                            Your Full Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="qName" placeholder="e.g. Tariq Mansoor" class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] focus:ring-[#103B30] py-2.5 px-3">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-[#202824] mb-1">
                            Email Address <span class="text-red-500">*</span>
                        </label>
                        <input type="email" id="qEmail" placeholder="e.g. name@example.com" class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] focus:ring-[#103B30] py-2.5 px-3">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-[#202824] mb-1">
                            WhatsApp / Phone Number <span class="text-red-500">*</span>
                        </label>
                        <div class="flex gap-2">
                            <select id="qCountryCode" class="w-28 text-xs rounded-xl border border-gray-300 focus:border-[#103B30] py-2.5 px-2">
                                <option value="+971" selected>🇦🇪 +971 (UAE)</option>
                                <option value="+44">🇬🇧 +44 (UK)</option>
                                <option value="+1">🇺🇸 +1 (US/CA)</option>
                                <option value="+91">🇮🇳 +91 (IN)</option>
                                <option value="+92">🇵🇰 +92 (PK)</option>
                                <option value="+966">🇸🇦 +966 (KSA)</option>
                                <option value="+974">🇶🇦 +974 (QA)</option>
                                <option value="+968">🇴🇲 +968 (OM)</option>
                                <option value="+65">🇸🇬 +65 (SG)</option>
                                <option value="+49">🇩🇪 +49 (DE)</option>
                                <option value="+33">🇫🇷 +33 (FR)</option>
                                <option value="+61">🇦🇺 +61 (AU)</option>
                            </select>
                            <input type="tel" id="qPhone" placeholder="50 706 0165" class="flex-1 text-xs rounded-xl border border-gray-300 focus:border-[#103B30] focus:ring-[#103B30] py-2.5 px-3">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-[#202824] mb-1">
                            Preferred Contact Channel
                        </label>
                        <select id="qContactPref" class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] focus:ring-[#103B30] py-2.5 px-3">
                            <option value="WhatsApp Message (Fastest)">WhatsApp Message (Fastest)</option>
                            <option value="Phone Call">Direct Phone Call</option>
                            <option value="Email">Formal Email Quotation</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-[#202824] mb-1">
                        Special Instructions or Inventory Notes (Optional)
                    </label>
                    <textarea id="qNotes" rows="2" placeholder="e.g. Glass dining table, piano, storage needed for 2 weeks, gate security clearance..." class="w-full text-xs rounded-xl border border-gray-300 focus:border-[#103B30] focus:ring-[#103B30] py-2 px-3"></textarea>
                </div>

                <div class="pt-4 flex items-center justify-between">
                    <button type="button" onclick="goToStep(2)" class="btn-outline-forest text-xs font-bold py-2.5 px-5">
                        <i class="fa-solid fa-arrow-left text-xs"></i> Back
                    </button>
                    <button type="button" onclick="goToStep(4)" class="btn-forest text-xs font-bold py-2.5 px-6">
                        <span>Review & Confirm</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </button>
                </div>
            </div>

            {{-- STEP 4: REVIEW & SUBMIT --}}
            <div id="quoteStep4" class="space-y-4 hidden">
                <div class="bg-white rounded-2xl p-4 border border-[#E2E8E2] space-y-3 text-xs">
                    <h4 class="font-bold text-sm text-[#103B30] border-b border-[#E2E8E2] pb-2 flex items-center justify-between">
                        <span>Inquiry Summary</span>
                        <span class="text-[11px] font-normal text-[#747C76]">Ready to Dispatch</span>
                    </h4>

                    <div class="grid grid-cols-2 gap-3 text-xs">
                        <div>
                            <span class="text-[#747C76] block text-[10px] uppercase font-bold">Route</span>
                            <span id="revRoute" class="font-bold text-[#202824]">Dubai Marina → London UK</span>
                        </div>
                        <div>
                            <span class="text-[#747C76] block text-[10px] uppercase font-bold">Category</span>
                            <span id="revType" class="font-bold text-[#202824]">Home Moving</span>
                        </div>
                        <div>
                            <span class="text-[#747C76] block text-[10px] uppercase font-bold">Target Date</span>
                            <span id="revDate" class="font-bold text-[#202824]">2026-11-20</span>
                        </div>
                        <div>
                            <span class="text-[#747C76] block text-[10px] uppercase font-bold">Property Size</span>
                            <span id="revBedrooms" class="font-bold text-[#202824]">2 Bedroom Apartment</span>
                        </div>
                        <div>
                            <span class="text-[#747C76] block text-[10px] uppercase font-bold">Packing & Assembly</span>
                            <span id="revServices" class="font-bold text-[#202824]">Full Packing | Dismantle Yes</span>
                        </div>
                        <div>
                            <span class="text-[#747C76] block text-[10px] uppercase font-bold">Customer</span>
                            <span id="revCustomer" class="font-bold text-[#202824]">Tariq (+971 50...)</span>
                        </div>
                    </div>
                </div>

                {{-- Action Choices --}}
                <div class="space-y-3 pt-2">
                    <button type="button" onclick="submitQuoteViaWhatsApp()" class="w-full bg-[#25D366] hover:bg-[#20ba59] text-white py-3.5 px-6 rounded-2xl font-bold text-sm flex items-center justify-center gap-3 shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-0.5">
                        <i class="fa-brands fa-whatsapp text-xl"></i>
                        <span>Send Quote Request via WhatsApp (Instant Reply)</span>
                    </button>

                    <button type="button" onclick="submitQuoteViaEmail()" class="w-full bg-[#103B30] hover:bg-[#08271F] text-white py-3 px-6 rounded-2xl font-bold text-xs flex items-center justify-center gap-2 transition-all">
                        <i class="fa-solid fa-envelope"></i>
                        <span>Send via Email Alternative</span>
                    </button>
                </div>

                <div class="pt-2 flex items-center justify-between border-t border-gray-100 mt-3">
                    <button type="button" onclick="goToStep(3)" class="btn-outline-forest text-xs font-bold py-2 px-4">
                        <i class="fa-solid fa-arrow-left text-xs"></i> Edit Details
                    </button>
                    <span class="text-[11px] text-[#747C76]">
                        <i class="fa-solid fa-shield-halved text-[#103B30]"></i> No spam, 100% confidential
                    </span>
                </div>
            </div>

        </form>

    </div>
</div>

<script>
    let currentStep = 1;

    function openQuoteModal(prefillDestination = '', prefillService = '') {
        const modal = document.getElementById('movexaQuoteModal');
        if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';

            if (prefillDestination) {
                const toInput = document.getElementById('qMoveTo');
                if (toInput) toInput.value = prefillDestination;
            }

            if (prefillService) {
                const typeSelect = document.getElementById('qMoveType');
                if (typeSelect) {
                    for (let opt of typeSelect.options) {
                        if (opt.value.toLowerCase().includes(prefillService.toLowerCase())) {
                            opt.selected = true;
                            break;
                        }
                    }
                }
            }

            goToStep(1);
        }
    }

    function closeQuoteModal() {
        const modal = document.getElementById('movexaQuoteModal');
        if (modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = '';
        }
    }

    function showAlert(msg) {
        const box = document.getElementById('formAlertBox');
        const text = document.getElementById('formAlertMsg');
        if (box && text) {
            text.textContent = msg;
            box.classList.remove('hidden');
        }
    }

    function hideAlert() {
        const box = document.getElementById('formAlertBox');
        if (box) box.classList.add('hidden');
    }

    function goToStep(step) {
        hideAlert();

        // Validate Step 1 before moving to 2
        if (currentStep === 1 && step > 1) {
            const from = document.getElementById('qMoveFrom').value.trim();
            const to = document.getElementById('qMoveTo').value.trim();
            const date = document.getElementById('qMoveDate').value;
            const type = document.getElementById('qMoveType').value;

            if (!from || !to || !date || !type) {
                showAlert('Please fill in Moving From, Moving To, Moving Date, and Category to proceed.');
                return;
            }
        }

        // Validate Step 3 before moving to 4
        if (currentStep === 3 && step > 3) {
            const name = document.getElementById('qName').value.trim();
            const email = document.getElementById('qEmail').value.trim();
            const phone = document.getElementById('qPhone').value.trim();

            if (!name || !email || !phone) {
                showAlert('Please provide your Full Name, Email Address, and Phone Number.');
                return;
            }
        }

        // Hide all steps
        for (let i = 1; i <= 4; i++) {
            const stepEl = document.getElementById(`quoteStep${i}`);
            if (stepEl) stepEl.classList.add('hidden');

            const ind = document.getElementById(`stepIndicator${i}`);
            if (ind) {
                const circle = ind.querySelector('span:first-child');
                if (i <= step) {
                    ind.classList.add('text-[#103B30]');
                    circle.classList.remove('bg-[#E2E8E2]', 'text-[#747C76]');
                    circle.classList.add('bg-[#103B30]', 'text-white');
                } else {
                    ind.classList.remove('text-[#103B30]');
                    circle.classList.remove('bg-[#103B30]', 'text-white');
                    circle.classList.add('bg-[#E2E8E2]', 'text-[#747C76]');
                }
            }

            if (i < 4) {
                const bar = document.getElementById(`stepBar${i}`);
                if (bar) {
                    if (i < step) {
                        bar.classList.add('bg-[#103B30]');
                        bar.classList.remove('bg-[#E2E8E2]');
                    } else {
                        bar.classList.remove('bg-[#103B30]');
                        bar.classList.add('bg-[#E2E8E2]');
                    }
                }
            }
        }

        // Show requested step
        const targetStep = document.getElementById(`quoteStep${step}`);
        if (targetStep) targetStep.classList.remove('hidden');

        currentStep = step;

        // If step 4, populate review summary
        if (step === 4) {
            updateReviewSummary();
        }
    }

    function updateReviewSummary() {
        const from = document.getElementById('qMoveFrom').value.trim();
        const to = document.getElementById('qMoveTo').value.trim();
        const date = document.getElementById('qMoveDate').value;
        const type = document.getElementById('qMoveType').value;
        const bedrooms = document.getElementById('qBedrooms').value;
        const packing = document.getElementById('qPacking').value;
        const dismantle = document.getElementById('qDismantle').value;
        const name = document.getElementById('qName').value.trim();
        const code = document.getElementById('qCountryCode').value;
        const phone = document.getElementById('qPhone').value.trim();

        document.getElementById('revRoute').textContent = `${from} ➔ ${to}`;
        document.getElementById('revType').textContent = type;
        document.getElementById('revDate').textContent = date;
        document.getElementById('revBedrooms').textContent = bedrooms;
        document.getElementById('revServices').textContent = `${packing} | Dismantle: ${dismantle}`;
        document.getElementById('revCustomer').textContent = `${name} (${code} ${phone})`;
    }

    function generateInquiryMessage() {
        const from = document.getElementById('qMoveFrom').value.trim();
        const to = document.getElementById('qMoveTo').value.trim();
        const date = document.getElementById('qMoveDate').value;
        const type = document.getElementById('qMoveType').value;
        const bedrooms = document.getElementById('qBedrooms').value;
        const floor = document.getElementById('qFloor').value.trim() || 'Not specified';
        const elevator = document.getElementById('qElevator').value;
        const packing = document.getElementById('qPacking').value;
        const dismantle = document.getElementById('qDismantle').value;
        const name = document.getElementById('qName').value.trim();
        const email = document.getElementById('qEmail').value.trim();
        const code = document.getElementById('qCountryCode').value;
        const phone = document.getElementById('qPhone').value.trim();
        const pref = document.getElementById('qContactPref').value;
        const notes = document.getElementById('qNotes').value.trim() || 'None';

        return `📦 *NEW MOVING QUOTATION REQUEST – MOVEXA*\n` +
               `-----------------------------------\n` +
               `📍 *Moving From:* ${from}\n` +
               `🎯 *Moving To:* ${to}\n` +
               `📅 *Estimated Date:* ${date}\n` +
               `🏷️ *Service Type:* ${type}\n` +
               `-----------------------------------\n` +
               `🏠 *Property Size:* ${bedrooms}\n` +
               `🏢 *Floor:* ${floor} | *Elevator:* ${elevator}\n` +
               `📦 *Packing Service:* ${packing}\n` +
               `🔧 *Dismantling/Assembly:* ${dismantle}\n` +
               `-----------------------------------\n` +
               `👤 *Customer Name:* ${name}\n` +
               `📧 *Email:* ${email}\n` +
               `📞 *Phone/WhatsApp:* ${code} ${phone}\n` +
               `💬 *Preferred Contact:* ${pref}\n` +
               `📝 *Special Notes:* ${notes}\n` +
               `-----------------------------------\n` +
               `Sent via MOVEXA Website (Dubai, UAE)`;
    }

    function submitQuoteViaWhatsApp() {
        const msg = generateInquiryMessage();
        const whatsappNumber = "{{ config('movexa.brand.whatsapp_number') }}";
        const url = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(msg)}`;
        window.open(url, '_blank');
        closeQuoteModal();
    }

    function submitQuoteViaEmail() {
        const msg = generateInquiryMessage();
        const email = "{{ config('movexa.brand.email') }}";
        const subject = encodeURIComponent(`Moving Quote Request from ${document.getElementById('qName').value.trim()}`);
        const body = encodeURIComponent(msg);
        window.location.href = `mailto:${email}?subject=${subject}&body=${body}`;
        closeQuoteModal();
    }
</script>
