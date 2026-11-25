<?php

return [
    /*
    |--------------------------------------------------------------------------
    | MOVEXA Brand & Contact Settings
    |--------------------------------------------------------------------------
    */
    'brand' => [
        'name' => 'MOVEXA',
        'descriptor' => 'GLOBAL MOVING & RELOCATIONS',
        'tagline' => 'Moving Beyond Borders.',
        'logo' => 'images/logo/movexa-logo.webp',
        'logo_transparent' => 'images/logo/movexa-logo-transparent.webp',
        'location' => 'Dubai, United Arab Emirates',
        'address' => 'Floor 14, Al Saada Tower, Business Bay, Dubai, UAE (Placeholder)',
        'phone' => '+971 50 706 0165',
        'phone_display' => '050 7060165',
        'phone_raw' => '+971507060165',
        'whatsapp' => '+971507060165',
        'whatsapp_display' => '050 7060165',
        'whatsapp_number' => '971507060165',
        'email' => 'inquiry@movexa.ae',
        'support_email' => 'support@movexa.ae',
        'hours' => 'Monday – Saturday: 8:00 AM – 8:00 PM (GST)',
        'emergency_moving' => '24/7 Consultation Available via WhatsApp',
    ],

    /*
    |--------------------------------------------------------------------------
    | Primary Services
    |--------------------------------------------------------------------------
    */
    'services' => [
        'home-moving' => [
            'slug' => 'home-moving',
            'title' => 'Home Moving',
            'nav_title' => 'Home Moving',
            'icon' => 'fa-house-chimney',
            'short_desc' => 'Turnkey white-glove residential moving engineered for Dubai apartments, townhouses, and luxury family villas. From complete room-by-room packing to master developer NOC permits and furniture carpentry, MOVEXA delivers effortless home transitions with zero move-day stress.',
            'headline' => 'Turnkey Home Relocation in Dubai: White-Glove Care From Door to Door.',
            'subheadline' => 'Executive residential shifting across Dubai\'s premier residential communities. 100% full-time vetted moving crews, certified master carpenters, industrial 5-ply export crating, and complete Emaar, Nakheel, and DAMAC NOC permit coordination.',
            'image' => '/images/services/movexa-service-home-moving.webp',
            'secondary_image' => '/images/gallery/movexa-gallery-fragile-room-packing.webp',
            'features' => [
                'Room-by-Room Color-Coded Packing & Barcoded Inventory System',
                'Industrial 5-Ply Corrugated Cartons & Multi-Layer Bubble Wrap Protection',
                'Certified Master Carpenters for Hydraulic Beds & Sliding Wardrobes',
                'Acid-Free Swaddling & Cell Dividers for Fine Porcelain and Glassware',
                'Crease-Free Hanging Wardrobe Boxes for Designer Garments and Abayas',
                'Full Emaar, Nakheel, DAMAC & Dubai Holding Move-In/NOC Permit Fast-Track',
            ],
            'benefits' => [
                [
                    'title' => 'Guaranteed Binding Pricing & Zero Hidden Surcharges',
                    'desc' => 'Every Movexa quotation is fixed and all-inclusive. You will never encounter move-day surprise fees for stair carries, heavy appliances, or elevator transit delays.',
                ],
                [
                    'title' => '100% Full-Time Vetted Specialists & Master Carpenters',
                    'desc' => 'We never outsource to casual day-laborers. Our uniformed, full-time crews are trained in delicate antique handling, precision joinery, and high-rise building etiquette.',
                ],
                [
                    'title' => 'Complete Developer NOC & Building Management Liaison',
                    'desc' => 'Our dedicated operations desk coordinates directly with Dubai facility managers to secure freight elevator slots, security gate passes, and loading bay clearance.',
                ],
            ],
            'process' => [
                ['step' => '01', 'title' => 'Volumetric Survey & Fixed Quotation', 'desc' => 'Complimentary on-site or high-definition virtual survey evaluating cubic volume, delicate heirlooms, and building access with a guaranteed fixed quotation.'],
                ['step' => '02', 'title' => 'White-Glove Export-Grade Packing', 'desc' => 'Full-time packing specialists arrive with heavy-duty 5-ply cartons, dish-pack barrels, and hypoallergenic mattress covers to safely cocoon every possession.'],
                ['step' => '03', 'title' => 'Carpet-Lined Enclosed Fleet Transit', 'desc' => 'Secure transportation in fully enclosed, weather-sealed moving box trucks featuring carpeted interior decks, ratchet cargo tracks, and satellite GPS tracking.'],
                ['step' => '04', 'title' => 'Turnkey Placement, Carpentry & Debris Removal', 'desc' => 'Carpenters reassemble beds and modular wardrobes, boxes are placed in target rooms, and our crew hauls away 100% of discarded packing materials.'],
            ],
            'faqs' => [
                ['q' => 'Do I need a Move-In / Move-Out permit (NOC) in Dubai, and does MOVEXA handle it?', 'a' => 'Yes, almost every gated community and residential tower in Dubai—including Emaar Properties (Downtown, Dubai Marina, Arabian Ranches), Nakheel (Palm Jumeirah, JVC), DAMAC Hills, and Dubai Holding—strictly mandates an approved Move-In/Move-Out NOC before moving vehicles are granted entry. MOVEXA provides all required operational documentation directly to you or your building management: company trade license, comprehensive public liability insurance certificate, driver Emirates IDs, and vehicle registration cards to guarantee prompt approval.'],
                ['q' => 'How does MOVEXA protect delicate items like chandeliers, fine china, and oil paintings?', 'a' => 'We deploy export-standard packaging protocols. Delicate crystal stemware and fine china are individually wrapped in acid-free tissue paper and packed upright into reinforced 5-ply dish-pack barrels with cellular dividing partitions. Large oil paintings, ornate mirrors, and chandeliers are measured for custom-built wooden crates lined with high-density shock-absorbing polyethylene foam.'],
                ['q' => 'Can your carpenters disassemble and reassemble complex hydraulic beds and multi-door wardrobes?', 'a' => 'Yes. Every MOVEXA residential moving team includes full-time, certified master carpenters equipped with precision tools. They specialize in modern hydraulic gas-strut storage beds, Italian modular sliding-door wardrobes, and complex flat-pack furniture. All bolts, dowels, and hinges are sealed in labeled hardware bags and taped directly to matching frames to ensure zero lost parts.'],
                ['q' => 'How far in advance should I book my Dubai home move?', 'a' => 'We recommend reserving your move 3 to 7 days in advance, especially for month-end dates and weekends when Dubai building elevator slots book up quickly. However, we also maintain dedicated rapid-dispatch teams for same-day or next-day urgent relocations across Dubai.'],
                ['q' => 'What happens to all the empty cardboard boxes and packing debris after the move?', 'a' => 'As part of our white-glove turnkey commitment, our crew collects every discarded cardboard carton, roll of packing tape, bubble wrap scrap, and foam protector before departing your new home. We haul away 100% of packing debris for environmentally responsible recycling, leaving your new residence pristine and ready to enjoy from night one.'],
            ]
        ],

        'apartment-moving' => [
            'slug' => 'apartment-moving',
            'title' => 'Apartment Moving',
            'nav_title' => 'Apartment Moving',
            'icon' => 'fa-building',
            'short_desc' => 'Specialized moving for high-rise towers, studios, and penthouses with strict elevator and loading bay management.',
            'headline' => 'Your Apartment Move, Handled With Care.',
            'subheadline' => 'Smooth high-rise apartment relocations across Dubai Marina, Downtown, JBR, Business Bay, and beyond.',
            'image' => '/images/services/movexa-service-apartment-moving.webp',
            'secondary_image' => '/images/gallery/movexa-gallery-apartment-packing-crew.webp',
            'features' => [
                'Service elevator schedule & permit coordination',
                'Wall corner guards & hallway floor runners',
                'Low-clearance basement truck fleet access',
                'Balcony and outdoor patio furniture protection',
                'Curtain rail, chandelier & TV bracket unmounting',
                'Quiet, building-compliant operating hours',
            ],
            'benefits' => [
                [
                    'title' => 'Tower Logistics Expertise',
                    'desc' => 'We know the loading bays, basement height clearances, and security protocols across Dubai high-rises.',
                ],
                [
                    'title' => 'Strict Property Protection',
                    'desc' => 'We install elevator corner wraps, door-jamb guards, and floor runners to prevent scratches and deposit deductions.',
                ],
                [
                    'title' => 'Rapid Execution',
                    'desc' => 'Sized crew teams ensure elevator booking time windows are strictly met without overtime fees.',
                ],
            ],
            'process' => [
                ['step' => '01', 'title' => 'Service Lift Reservation', 'desc' => 'Coordination with your building management for the designated service elevator slot.'],
                ['step' => '02', 'title' => 'Apartment Prep & Packing', 'desc' => 'Wall padding, doorway guards, and careful box wrapping of all personal possessions.'],
                ['step' => '03', 'title' => 'Smooth Lift Transfer', 'desc' => 'Direct transfer via padded carts and loading bays into covered transport vehicles.'],
                ['step' => '04', 'title' => 'Destination Setup', 'desc' => 'Transfer up into the new apartment, bed reassembly, and debris clear-out.'],
            ],
            'faqs' => [
                ['q' => 'Can your moving truck fit in Dubai underground basement parking?', 'a' => 'Most Dubai basement loading bays have height limits between 2.2m and 3.5m. We maintain a fleet of both low-clearance box trucks and tail-lift moving vehicles specifically to enter standard tower basements.'],
                ['q' => 'Can your team dismount flat-screen TVs and wall shelves?', 'a' => 'Yes, our handyman team can safely dismount wall-mounted televisions, mirrors, artwork, and shelving, packing them in protective rigid panels for transit.'],
            ]
        ],

        'villa-moving' => [
            'slug' => 'villa-moving',
            'title' => 'Villa Relocation',
            'nav_title' => 'Villa Relocation',
            'icon' => 'fa-landmark-dome',
            'short_desc' => 'Turnkey moving solutions for multi-level luxury villas, townhomes, and private estates throughout the UAE.',
            'headline' => 'Professional Villa Relocation Services.',
            'subheadline' => 'From Arabian Ranches and Palm Jumeirah to Jumeirah Golf Estates and Emirates Hills, we treat luxury properties with utmost respect.',
            'image' => '/images/services/movexa-service-villa-relocation.webp',
            'secondary_image' => '/images/gallery/movexa-gallery-villa-relocation-loading.webp',
            'features' => [
                'Multi-truck fleet allocations for luxury estates',
                'Custom timber crating for fine art & chandeliers',
                'Floor-plan zoning with dedicated move supervisor',
                'Multi-story staircase carpet runners and bannister shields',
                'Garden furniture & outdoor equipment transport',
                'Large crew deployments with specialized carpenters',
            ],
            'benefits' => [
                [
                    'title' => 'Large Scale Capacity',
                    'desc' => 'Capable of relocating 4 to 7-bedroom villas smoothly without taking multiple days of disruption.',
                ],
                [
                    'title' => 'Precious Item Crating',
                    'desc' => 'Custom timber crates and shock-absorbing foams for luxury chandeliers, sculptures, and rare artwork.',
                ],
                [
                    'title' => 'Gated Community Compliance',
                    'desc' => 'Full compliance with security gate passes for Dubai gated villa communities.',
                ],
            ],
            'process' => [
                ['step' => '01', 'title' => 'On-Site Survey', 'desc' => 'Senior surveyor visits your villa to estimate cubic meters, access, and special packaging needs.'],
                ['step' => '02', 'title' => 'Multi-Zone Packing', 'desc' => 'Dedicated teams pack bedrooms, living suites, kitchen, and exterior areas simultaneously.'],
                ['step' => '03', 'title' => 'Strategic Loading', 'desc' => 'Systematic loading so destination rooms can be unpacked in logical priority order.'],
                ['step' => '04', 'title' => 'Complete Reassembly', 'desc' => 'King beds, dressers, dining sets, and patio arrangements assembled in place.'],
            ],
            'faqs' => [
                ['q' => 'Can you move heavy garden planters and outdoor furniture?', 'a' => 'Yes, we handle heavy outdoor patio dining suites, daybeds, and decorative ceramic planters using specialized equipment and protective wrapping.'],
                ['q' => 'Do you provide insurance coverage for high-value villa items?', 'a' => 'All standard moves include our comprehensive goods-in-transit handling protection, and we can arrange extended all-risk transit valuation coverage for high-value artwork or antiques.'],
            ]
        ],

        'office-relocation' => [
            'slug' => 'office-relocation',
            'title' => 'Office Relocation',
            'nav_title' => 'Office Relocation',
            'icon' => 'fa-briefcase',
            'short_desc' => 'Corporate moving designed to minimize operational downtime, protect IT infrastructure, and reconfigure workstations.',
            'headline' => 'Move Your Business Without Losing Momentum.',
            'subheadline' => 'Structured weekend and after-hours commercial moves for startups, corporate offices, and commercial institutions in Dubai.',
            'image' => '/images/services/movexa-service-office-relocation.webp',
            'secondary_image' => '/images/why-choose-us/movexa-why-choose-us-team-skyline.webp',
            'features' => [
                'Anti-static bubble wrap for server & PC setups',
                'Color-coded desk numbering & employee tagging',
                'Modular workstation dismantling & reassembly',
                'Secure confidential document transport crates with seals',
                'Night and weekend moving schedules to prevent company downtime',
                'Building management coordinate for loading docks and freight lifts',
            ],
            'benefits' => [
                [
                    'title' => 'Minimal Business Disruption',
                    'desc' => 'We pack on Thursday or Friday evening and have your teams ready to operate on Monday morning.',
                ],
                [
                    'title' => 'IT Equipment Safeguarding',
                    'desc' => 'Individual padded computer sleeves, screen protectors, and cable harness labeling.',
                ],
                [
                    'title' => 'Corporate Account Management',
                    'desc' => 'A single dedicated relocation manager who coordinates every stage with your HR/Ops team.',
                ],
            ],
            'process' => [
                ['step' => '01', 'title' => 'Pre-Move Audit', 'desc' => 'Detailed workstation census, server room inventory, and building access blueprint.'],
                ['step' => '02', 'title' => 'Crate Delivery', 'desc' => 'Delivery of labeled plastic crates to staff members for confidential and desk materials.'],
                ['step' => '03', 'title' => 'Decommission & Transfer', 'desc' => 'Workstations dismantled, electronics packed in antistatic wraps, and loaded safely.'],
                ['step' => '04', 'title' => 'Setup & Turnkey Delivery', 'desc' => 'Desks rebuilt according to CAD/floorplan layouts, computers placed, ready for staff.'],
            ],
            'faqs' => [
                ['q' => 'Can you relocate our office over the weekend?', 'a' => 'Yes! The majority of our corporate relocations take place starting Thursday or Friday afternoon through Saturday and Sunday, allowing your staff to resume work seamlessly at the start of the week.'],
                ['q' => 'Do you provide plastic hire crates for office files?', 'a' => 'Yes, we supply heavy-duty nestable plastic commercial crates equipped with tamper-evident security seal ties for files, laptops, and desktop accessories.'],
            ]
        ],

        'international-moving' => [
            'slug' => 'international-moving',
            'title' => 'International Moving',
            'nav_title' => 'International Moving',
            'icon' => 'fa-plane-departure',
            'short_desc' => 'Worldwide household relocation from Dubai to the UK, Europe, North America, Australia, Asia, and the GCC.',
            'headline' => 'International Moving From Dubai, Made Easier.',
            'subheadline' => 'Global relocation expertise, export-grade seaworthy packing, customs documentation guidance, and door-to-door coordination.',
            'image' => '/images/services/movexa-service-international-moving.webp',
            'secondary_image' => '/images/gallery/movexa-gallery-residential-export-packing.webp',
            'features' => [
                'Full container (FCL) & shared container (LCL) freight',
                'Priority air cargo for expedited personal shipments',
                'Export seaworthy multi-layer packaging & crating',
                'Comprehensive bilingual customs packing inventory lists',
                'Destination customs guidance & import duty advice',
                'International destination delivery and unpacking coordination',
            ],
            'benefits' => [
                [
                    'title' => 'Global Agent Network',
                    'desc' => 'We collaborate with vetted global moving partners across 80+ countries for smooth customs clearance and home delivery.',
                ],
                [
                    'title' => 'Export-Grade Packaging',
                    'desc' => 'Materials engineered specifically to endure maritime humidity, temperature shifts, and long ocean transits.',
                ],
                [
                    'title' => 'Transparent Communication',
                    'desc' => 'Regular milestone updates from packing day until delivery at your international doorstep.',
                ],
            ],
            'process' => [
                ['step' => '01', 'title' => 'Volume Estimation', 'desc' => 'Accurate cubic meter calculation to recommend between FCL container, shared LCL, or air freight.'],
                ['step' => '02', 'title' => 'Export Wrapping', 'desc' => 'Multi-layer seaworthy packing, waterproof lining, and itemized bilingual packing list.'],
                ['step' => '03', 'title' => 'Port Dispatch & Shipping', 'desc' => 'Container drayage via Jebel Ali Port or Dubai Airport with bill of lading coordination.'],
                ['step' => '04', 'title' => 'Destination Delivery', 'desc' => 'Customs clearance coordination, port haulage, delivery into your overseas residence, and unpack.'],
            ],
            'faqs' => [
                ['q' => 'What is the difference between FCL and LCL shipping from Dubai?', 'a' => 'FCL (Full Container Load) means you have a dedicated 20ft or 40ft container exclusively for your household goods. LCL (Less than Container Load) is a shared container service where your belongings are packed into a wooden lift-van crate and share space with other shipments, which is ideal and economical for smaller volumes.'],
                ['q' => 'What documents are required to export personal effects from the UAE?', 'a' => 'Typically you will need a copy of your passport, UAE residence visa with cancellation stamp or departure ticket, UAE Emirates ID copy, an authorization letter, and an itemized packing list signed by you. We guide you through each requirement step-by-step.'],
                ['q' => 'Are international transit times guaranteed?', 'a' => 'Ocean and air freight transit times are subject to carrier schedules, weather conditions, transshipment hubs, and local destination customs inspection protocols. While we provide reliable estimated timeframes, customs and maritime factors remain subject to official clearance.'],
            ]
        ],

        'storage-solutions' => [
            'slug' => 'storage-solutions',
            'title' => 'Storage Solutions',
            'nav_title' => 'Storage Solutions',
            'icon' => 'fa-warehouse',
            'short_desc' => 'Secure, climate-controlled, short-term and long-term storage arrangements in Dubai for furniture and household goods.',
            'headline' => 'Flexible Storage for Your Moving Needs.',
            'subheadline' => 'Clean, pest-controlled, and 24/7 guarded storage options tailored for transitional moves and renovation periods.',
            'image' => '/images/services/movexa-service-storage-solutions.webp',
            'secondary_image' => '/images/gallery/movexa-gallery-warehouse-packing.webp',
            'features' => [
                'Climate-controlled 24/7 CCTV surveillance facility',
                'Flexible weekly, monthly & annual storage terms',
                'Dust-free furniture wrapping & elevated pallet vaults',
                'Palletized and wooden vault storage systems',
                'Dust-free wrapping and elevated platform storage',
                'Complete origin pickup and destination redelivery available',
            ],
            'benefits' => [
                [
                    'title' => 'Climate Protection in Dubai Heat',
                    'desc' => 'Humidity and extreme heat can warp wood or damage leather; our facility options feature maintained climate controls.',
                ],
                [
                    'title' => 'Flexible Durations',
                    'desc' => 'Whether you need 2 weeks between tenancy agreements or 12 months during an overseas assignment, we have options.',
                ],
                [
                    'title' => 'Comprehensive Inventory List',
                    'desc' => 'Every stored item is barcoded and documented before placement in your designated storage container.',
                ],
            ],
            'process' => [
                ['step' => '01', 'title' => 'Pickup & Protective Packing', 'desc' => 'Items are wrapped in breathable, heavy-duty furniture pads and shrink-wrapped.'],
                ['step' => '02', 'title' => 'Vault Loading', 'desc' => 'Furniture is carefully stacked into clean storage vaults or dedicated secured bays.'],
                ['step' => '03', 'title' => 'Continuous Climate Care', 'desc' => 'Monitored temperature conditions maintain your belongings in pristine shape.'],
                ['step' => '04', 'title' => 'Scheduled Redelivery', 'desc' => 'When your new property is ready, we load and deliver directly to your new home.'],
            ],
            'faqs' => [
                ['q' => 'Can I access my belongings while they are in storage?', 'a' => 'Yes, access can be coordinated with prior notice during facility working hours so our staff can safely retrieve your designated vault or bay.'],
                ['q' => 'What items cannot be placed in storage?', 'a' => 'Flammables, chemicals, paints, perishable foodstuffs, plants, jewelry, currency, and firearms cannot be accepted into the storage facility under UAE civil defense regulations.'],
            ]
        ],

        'packing-services' => [
            'slug' => 'packing-services',
            'title' => 'Professional Packing',
            'nav_title' => 'Packing Services',
            'icon' => 'fa-boxes-packing',
            'short_desc' => 'Industrial-grade packing materials, custom timber crating, and meticulous wrapping for all household goods.',
            'headline' => 'Every Item Deserves the Right Protection.',
            'subheadline' => 'We supply premium 5-ply cartons, bubble wrap, acid-free tissue paper, wardrobe boxes, and custom wooden crates.',
            'image' => '/images/gallery/movexa-gallery-warehouse-packing.webp',
            'secondary_image' => '/images/gallery/movexa-gallery-organized-room-packing.webp',
            'features' => [
                'Export-grade 5-ply heavy-duty corrugated cartons',
                'High-density shock-absorbing bubble wrap & foam',
                'Acid-free tissue wrapping for fine porcelain & art',
                'Hanging wardrobe boxes to keep clothing crease-free',
                'Heavy-duty adhesive tapes and moisture-resistant stretch film',
                'Custom timber crating built to size for fragile stone and glass',
            ],
            'benefits' => [
                [
                    'title' => 'Save 30+ Hours of Stress',
                    'desc' => 'Avoid spending days packing boxes; our skilled packing crew can wrap an entire 3-bedroom residence in a single morning.',
                ],
                [
                    'title' => 'Maximum Item Defense',
                    'desc' => 'Professional cushioning techniques distribute weight properly, eliminating crushing and friction during transit.',
                ],
                [
                    'title' => 'All Materials Included',
                    'desc' => 'No need to guess how many boxes or rolls of tape you need; we arrive with a fully stocked inventory.',
                ],
            ],
            'process' => [
                ['step' => '01', 'title' => 'Material Preparation', 'desc' => 'Selection of appropriate gauge cartons, bubble wraps, and protective wraps for your inventory.'],
                ['step' => '02', 'title' => 'Fragile Layering', 'desc' => 'Individual wrapping of china, crystal, artwork, and mirrors using tissue and bubble cushioning.'],
                ['step' => '03', 'title' => 'Systematic Labeling', 'desc' => 'Every box is labeled with origin room, contents summary, and handling orientation arrows.'],
                ['step' => '04', 'title' => 'Unpacking Assistance', 'desc' => 'Optional full unpacking service to clear boxes and place kitchen items onto countertops.'],
            ],
            'faqs' => [
                ['q' => 'Can I hire MOVEXA just for packing services without moving truck transport?', 'a' => 'Yes! We offer standalone packing services if you are shipping goods yourself, storing items in your own facility, or staging your home for renovation.'],
                ['q' => 'What kind of boxes do you use?', 'a' => 'We exclusively use industrial heavy-grade 5-ply cartons rather than flimsy single-ply cardboard. We have specialized book boxes, linen cartons, dish packs with dividers, and wardrobe hanging boxes.'],
            ]
        ],

        'furniture-dismantling' => [
            'slug' => 'furniture-dismantling',
            'title' => 'Furniture Dismantling & Reassembly',
            'nav_title' => 'Furniture Services',
            'icon' => 'fa-screwdriver-wrench',
            'short_desc' => 'Skilled carpenters and handymen to carefully disassemble complex beds, wardrobes, and modular furnishings.',
            'headline' => 'Careful Furniture Handling From Start to Finish.',
            'subheadline' => 'Precision disassembly, secure hardware bagging, and exact reassembly at your destination residence.',
            'image' => '/images/gallery/movexa-gallery-villa-sofa-loading.webp',
            'secondary_image' => '/images/gallery/movexa-gallery-sofa-living-room-wrapping.webp',
            'features' => [
                'Hydraulic beds, king beds & wardrobe deconstruction',
                'Ziploc hardware bagging attached directly to frames',
                'Master carpenters for precise alignment & reassembly',
                'Ziploc screw and hardware labeling attached to corresponding frames',
                'Professional cordless drill tools and magnetic screw trays',
                'Exact realignment of cabinet hinges and drawer sliders during rebuild',
            ],
            'benefits' => [
                [
                    'title' => 'No Lost Screws or Bolts',
                    'desc' => 'Hardware is bagged, labeled, and taped securely to its corresponding furniture component.',
                ],
                [
                    'title' => 'Prevents Structural Stress',
                    'desc' => 'Moving large timber beds or wardrobes intact often causes joint damage; dismantling guarantees safe passage.',
                ],
                [
                    'title' => 'Fits Narrow Doorways',
                    'desc' => 'Allows bulky items to safely navigate elevators, stairwells, and tight residential turns without scuffs.',
                ],
            ],
            'process' => [
                ['step' => '01', 'title' => 'Structural Inspection', 'desc' => 'Examination of joinery, hydraulic mechanisms, and locking cams before unbolting.'],
                ['step' => '02', 'title' => 'Gentle Disassembly', 'desc' => 'Careful removal of panels, drawers, and structural frames with proper torque.'],
                ['step' => '03', 'title' => 'Panel Padding', 'desc' => 'Individual bubble-wrapping of wooden headboards, mirrors, rails, and structural slats.'],
                ['step' => '04', 'title' => 'Accurate Reassembly', 'desc' => 'Rebuilding the furniture at your new address and testing stability and door alignments.'],
            ],
            'faqs' => [
                ['q' => 'Can you assemble IKEA, Home Centre, and luxury Italian furniture brands?', 'a' => 'Yes, our carpenters have extensive experience with flat-pack furniture systems (IKEA, West Elm, Pottery Barn) as well as delicate designer Italian or solid hardwood furniture pieces.'],
                ['q' => 'What happens if a screw or fastener was already stripped or missing?', 'a' => 'Our vans carry comprehensive fastener replacement kits with common metric wood screws, dowels, and bracket fixings to ensure your furniture is assembled solidly.'],
            ]
        ],

        'door-to-door-moving' => [
            'slug' => 'door-to-door-moving',
            'title' => 'Door-to-Door Moving',
            'nav_title' => 'Door-to-Door Moving',
            'icon' => 'fa-door-open',
            'short_desc' => 'End-to-end relocation service managing every detail from your current threshold directly to your new destination room.',
            'headline' => 'From Your Current Door to Your Next Destination.',
            'subheadline' => 'Experience a seamless transition where every detail—from packing at origin to placement at destination—is managed by MOVEXA.',
            'image' => '/images/gallery/movexa-gallery-crew-fleet-ramp.webp',
            'secondary_image' => '/images/gallery/movexa-gallery-full-service-montage.webp',
            'features' => [
                'Full pack at origin address including all supplies',
                'Loading and secure transport via dedicated vehicles',
                'Origin and destination parking and permit management',
                'Unloading, placement in designated rooms, and assembly',
                'Unpacking of cartons onto flat surfaces',
                'Complete removal of all packing paper and cardboard waste',
            ],
            'benefits' => [
                [
                    'title' => 'Hands-Off Convenience',
                    'desc' => 'Ideal for busy executives, expat families, and seniors who want a move that requires no physical lifting.',
                ],
                [
                    'title' => 'Accountable Single Point of Contact',
                    'desc' => 'One moving coordinator oversees the whole journey, giving you clear communication at all times.',
                ],
                [
                    'title' => 'Turnkey Arrival',
                    'desc' => 'Walk into your new residence with your beds assembled, wardrobes hung, and boxes unpacked.',
                ],
            ],
            'process' => [
                ['step' => '01', 'title' => 'Consultation', 'desc' => 'Customized relocation plan covering every room and unique requirement.'],
                ['step' => '02', 'title' => 'Door Departure', 'desc' => 'Our crew packs every room, loads the vehicles, and performs a final sweep.'],
                ['step' => '03', 'title' => 'Transit Monitoring', 'desc' => 'Direct or coordinated transfer with ongoing status reports.'],
                ['step' => '04', 'title' => 'Door Arrival & Setup', 'desc' => 'Delivery directly through your new front door, setup, and cleanup.'],
            ],
            'faqs' => [
                ['q' => 'Is door-to-door available for international moves as well?', 'a' => 'Yes, our international door-to-door service includes origin packing in Dubai, export customs, ocean/air shipping, destination customs clearance, and delivery directly into your overseas home via our trusted destination partner.'],
                ['q' => 'Do I need to be present throughout the move?', 'a' => 'We recommend having an adult family member or authorized representative present at the start for briefing and at the end for the final inventory sign-off.'],
            ]
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | International Destinations (12 Distinct Countries)
    |--------------------------------------------------------------------------
    */
    'destinations' => [
        'moving-from-dubai-to-uk' => [
            'slug' => 'moving-from-dubai-to-uk',
            'country' => 'United Kingdom',
            'country_short' => 'UK',
            'capital_city' => 'London, Manchester, Birmingham, Edinburgh',
            'code' => 'GB',
            'region' => 'Europe',
            'flag' => '🇬🇧',
            'transit_sea' => '22 – 30 Days (Estimated Ocean)',
            'transit_air' => '5 – 8 Days (Estimated Air Cargo)',
            'ports' => 'Southampton, Felixstowe, London Gateway',
            'image' => 'https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=1200&q=80',
            'tagline' => 'Relocating to London or throughout the UK with seamless ToR01 guidance.',
            'headline' => 'Moving from Dubai to the United Kingdom',
            'subheadline' => 'Comprehensive international relocation solutions from the UAE to England, Scotland, Wales, and Northern Ireland.',
            'intro' => 'Relocating from Dubai to the United Kingdom involves transitioning personal effects through HM Revenue & Customs (HMRC). MOVEXA assists with export sea/air freight, seaworthy export packing, and guidance on securing your UK Transfer of Residence (ToR01) relief code so your used personal effects can enter duty-free.',
            'customs_overview' => 'Under UK customs regulations, personal belongings can be imported free of customs duty and VAT under Transfer of Residence (ToR) relief, provided you are relocating your main residence to the UK, have lived outside the UK for at least 12 months, and have owned the goods for at least 6 months prior to departure.',
            'docs_needed' => [
                'UK HMRC Transfer of Residence (ToR01) unique reference number',
                'Copy of Valid Passport and UK Visa / BRP or British Passport',
                'UAE Residence Visa cancellation page or departure proof',
                'Comprehensive bilingual packing list with box numbers',
                'Proof of UK address (tenancy agreement, purchase contract, or utility bill)',
                'Signed MOVEXA international shipper declaration form',
            ],
            'shipping_modes' => [
                'Full Container Load (20ft or 40ft FCL) for 2 to 5-bedroom residences',
                'Less than Container Load (LCL Groupage) for small shipments and single-room volumes',
                'Priority Air Cargo for high-importance garments, work electronics, and essentials',
            ],
            'customs_tips' => 'Apply for your UK ToR number online at least 3 to 4 weeks prior to container dispatch from Dubai. Having this reference before the ship docks avoids expensive UK port demurrage charges.',
            'faqs' => [
                ['q' => 'Can I take my UAE electrical appliances to the United Kingdom?', 'a' => 'The UK operates on the same 230V 50Hz electrical standard as Dubai and uses the identical Type-G 3-pin plug! Your televisions, computers, kitchen blenders, and gaming consoles will work in the UK without transformers.'],
                ['q' => 'How does the HMRC ToR01 application work?', 'a' => 'You must complete an online form on the official GOV.UK portal. Once approved, HMRC issues a unique reference code which our customs clearance team in the UK quotes on the import entry to waive duty and VAT.'],
                ['q' => 'What items are restricted when entering the UK?', 'a' => 'Restricted or prohibited items include firearms, controlled drugs, protected animal species (CITES ivory/coral), offensive weapons, and certain plant species. Alcohol and tobacco are subject to strict excise duties.'],
            ]
        ],

        'moving-from-dubai-to-usa' => [
            'slug' => 'moving-from-dubai-to-usa',
            'country' => 'United States',
            'country_short' => 'USA',
            'capital_city' => 'New York, Los Angeles, Chicago, Houston, Miami',
            'code' => 'US',
            'region' => 'North America',
            'flag' => '🇺🇸',
            'transit_sea' => '28 – 40 Days (Estimated Ocean)',
            'transit_air' => '5 – 8 Days (Estimated Air Cargo)',
            'ports' => 'New York / New Jersey, Los Angeles / Long Beach, Savannah, Houston',
            'image' => 'https://images.unsplash.com/photo-1506146332389-18140dc7b2fb?auto=format&fit=crop&w=1200&q=80',
            'tagline' => 'Moving across the Atlantic with complete US Customs Form 3299 compliance.',
            'headline' => 'Moving from Dubai to the United States',
            'subheadline' => 'Professional relocation from Dubai to major US hubs with certified export packing and ISF documentation.',
            'intro' => 'Relocating to the United States requires navigating US Customs and Border Protection (CBP) and Department of Agriculture (USDA) regulations. MOVEXA manages container loading, ocean booking through major American seaports, and accurate preparation of CBP Form 3299 for duty-free entry of bona fide household effects.',
            'customs_overview' => 'US Customs allows personal effects that have been in the owner\'s possession abroad for at least one year to be imported duty-free. Shipments must be accompanied by CBP Form 3299 (Declaration for Free Entry of Unaccompanied Articles) and Supplemental Declaration.',
            'docs_needed' => [
                'Completed & Signed CBP Form 3299 (Declaration of Free Entry)',
                'CBP Supplemental Declaration for Unaccompanied Articles',
                'Copy of Valid US Passport or Foreign Passport with valid US Visa / Green Card',
                'ISF (Importer Security Filing) 10+2 Form submitted before Dubai vessel departure',
                'Copy of UAE visa cancellation stamp or residency record',
                'Detailed valued packing inventory list',
            ],
            'shipping_modes' => [
                'Dedicated 20ft & 40ft High-Cube Ocean Containers directly to East/West coast ports',
                'LCL Lift-Van crated consolidation for apartments and partial moves',
                'Air cargo to JFK, LAX, ORD, IAH, and major international US gateways',
            ],
            'customs_tips' => 'The Importer Security Filing (ISF 10+2) MUST be filed at least 48 hours prior to vessel departure from Jebel Ali Port, UAE. Late ISF filing results in steep US CBP penalties. MOVEXA manages this filing on your behalf.',
            'faqs' => [
                ['q' => 'Will my Dubai 220V appliances work in the United States?', 'a' => 'The US operates on 110V/120V 60Hz. Dual-voltage items (smartphones, laptops, iPads, shavers) will work with simple plug adapters. However, single-voltage 220V motors (vacuum cleaners, kitchen mixers, washing machines) will need heavy step-up transformers or may run slower due to 60Hz frequency differences.'],
                ['q' => 'Does the owner need to be physically in the USA when the shipment arrives?', 'a' => 'Yes. US Customs will only clear unaccompanied personal goods once the shipper has officially arrived and cleared immigration in the United States. You cannot clear your shipment while still residing outside the US.'],
            ]
        ],

        'moving-from-dubai-to-canada' => [
            'slug' => 'moving-from-dubai-to-canada',
            'country' => 'Canada',
            'country_short' => 'Canada',
            'capital_city' => 'Toronto, Vancouver, Montreal, Calgary, Ottawa',
            'code' => 'CA',
            'region' => 'North America',
            'flag' => '🇨🇦',
            'transit_sea' => '30 – 42 Days (Estimated Ocean)',
            'transit_air' => '6 – 9 Days (Estimated Air Cargo)',
            'ports' => 'Vancouver, Montreal, Halifax, Prince Rupert',
            'image' => 'https://images.unsplash.com/photo-1503614472-8c93d56e92ce?auto=format&fit=crop&w=1200&q=80',
            'tagline' => 'Relocating to Canada with smooth CBSA BSF186 customs preparation.',
            'headline' => 'Moving from Dubai to Canada',
            'subheadline' => 'Relocation solutions from Dubai to Toronto, Vancouver, Calgary, and across Canadian provinces.',
            'intro' => 'Whether you are returning to Canada or landing as a new permanent resident (PR), the Canada Border Services Agency (CBSA) requires specific accounting of "Goods to Follow". MOVEXA assists with export crating, ocean transport via Vancouver or East Coast ports, and preparing CBSA Form BSF186.',
            'customs_overview' => 'Settlers moving to Canada can bring their used personal and household goods duty-free if owned, possessed, and used before arrival in Canada. New immigrants must declare their "Goods to Follow" with CBSA upon first landing at the airport.',
            'docs_needed' => [
                'CBSA Form BSF186 (Personal Effects Accounting Document) stamped at first port of entry',
                'Copy of Canadian Passport or Confirmation of Permanent Residence (COPR) / Work Permit',
                'Detailed B4A itemized inventory with serial numbers for major electronics',
                'UAE exit paperwork / residence cancellation records',
                'Canadian delivery address or in-transit inland bonded warehouse paperwork',
            ],
            'shipping_modes' => [
                'Full 20ft & 40ft container maritime transport directly to Canadian railheads',
                'Shared consolidated crates (LCL) for small shipments',
                'Expedited air cargo to Pearson (YYZ), Vancouver (YVR), or Montreal (YUL)',
            ],
            'customs_tips' => 'Ensure you get your BSF186 "Goods to Follow" stamped by CBSA officers at the airport when you first enter Canada. If this stamp is missing, customs clearance at the destination rail ramp can be delayed.',
            'faqs' => [
                ['q' => 'What is the "Goods to Follow" list for Canada?', 'a' => 'When you land in Canada, you present two copies of Form BSF186 listing items you have with you and items shipping later ("Goods to Follow"). The border officer stamps this, which authorizes your container to clear duty-free when it arrives weeks later.'],
                ['q' => 'Can I import outdoor wooden furniture or garden tools to Canada?', 'a' => 'The Canadian Food Inspection Agency (CFIA) strictly inspects outdoor furniture, camping gear, and lawn tools for any traces of soil, pests, or biological matter. All outdoor goods must be steam-cleaned before packing.'],
            ]
        ],

        'moving-from-dubai-to-australia' => [
            'slug' => 'moving-from-dubai-to-australia',
            'country' => 'Australia',
            'country_short' => 'Australia',
            'capital_city' => 'Sydney, Melbourne, Brisbane, Perth, Adelaide',
            'code' => 'AU',
            'region' => 'Oceania',
            'flag' => '🇦🇺',
            'transit_sea' => '25 – 35 Days (Estimated Ocean)',
            'transit_air' => '6 – 9 Days (Estimated Air Cargo)',
            'ports' => 'Sydney (Port Botany), Melbourne, Brisbane, Fremantle (Perth)',
            'image' => 'https://images.unsplash.com/photo-1506973035872-a4ec16b8e8d9?auto=format&fit=crop&w=1200&q=80',
            'tagline' => 'Expert international moving with Australia Biosecurity (DAFF) quarantine rigor.',
            'headline' => 'Moving from Dubai to Australia',
            'subheadline' => 'Relocating to Sydney, Melbourne, Brisbane, or Perth with biosecurity-compliant export wrapping.',
            'intro' => 'Australia maintains some of the world\'s strictest biosecurity quarantine regulations under the Department of Agriculture, Fisheries and Forestry (DAFF). MOVEXA ensures your belongings are packed using heat-treated ISPM-15 certified timber, free of organic soil, and processed with Form B534 for Australian Border Force.',
            'customs_overview' => 'Personal effects owned and used abroad for over 12 months qualify for concession under by-law for duty/GST exemption. However, all incoming shipments are subject to mandatory DAFF biosecurity inspections.',
            'docs_needed' => [
                'Australian Border Force Form B534 (Unaccompanied Personal Effects Declaration)',
                'Copy of Australian Passport or Foreign Passport with valid Australian permanent/work visa',
                'Comprehensive packing list highlighting any wood, cane, outdoor shoes, or sports equipment',
                'ISPM-15 phytosanitary treatment certificate for any wooden crates or lift vans',
                'Proof of arrival date in Australia',
            ],
            'shipping_modes' => [
                'Full 20ft and 40ft container options direct from Jebel Ali to Australian ports',
                'Consolidated biosecurity-inspected LCL wooden crates',
                'Air freight to Sydney Kingsford Smith (SYD), Melbourne (MEL), and Brisbane (BNE)',
            ],
            'customs_tips' => 'Thoroughly wash and disinfect all bicycles, golf clubs, running shoes, vacuum cleaners, and garden equipment before packing. Any traces of soil will trigger expensive quarantine treatment or destruction by DAFF inspectors.',
            'faqs' => [
                ['q' => 'Can I ship wooden furniture to Australia?', 'a' => 'Yes, commercially manufactured wooden furniture is generally permitted. However, untreated raw timber, cane, rattan, wicker, and bamboo are subject to inspection and may require mandatory fumigation if insect borers or bark are present.'],
                ['q' => 'Are packing materials inspected?', 'a' => 'Australia strictly prohibits packing personal belongings with straw, egg cartons, unpeeled timber, or used fruit boxes. MOVEXA only uses certified virgin cardboard and ISPM-15 stamped wooden crating.'],
            ]
        ],

        'moving-from-dubai-to-germany' => [
            'slug' => 'moving-from-dubai-to-germany',
            'country' => 'Germany',
            'country_short' => 'Germany',
            'capital_city' => 'Berlin, Munich, Frankfurt, Hamburg, Düsseldorf',
            'code' => 'DE',
            'region' => 'Europe',
            'flag' => '🇩🇪',
            'transit_sea' => '24 – 32 Days (Estimated Ocean)',
            'transit_air' => '5 – 8 Days (Estimated Air Cargo)',
            'ports' => 'Hamburg, Bremerhaven',
            'image' => 'https://images.unsplash.com/photo-1599946347371-68eb71b16afc?auto=format&fit=crop&w=1200&q=80',
            'tagline' => 'Relocating to Germany with German Zoll 0350 customs documentation.',
            'headline' => 'Moving from Dubai to Germany',
            'subheadline' => 'Structured relocations to Berlin, Frankfurt, Munich, Hamburg, and throughout the Bundesrepublik.',
            'intro' => 'Relocating your household goods to Germany requires adherence to German Customs (Zoll) guidelines. Under European Union regulations, individuals transferring their normal place of residence from a non-EU state (such as the UAE) to Germany can claim exemption from import duties and VAT (Einfuhrumsatzsteuer) using Form 0350.',
            'customs_overview' => 'To obtain duty-free clearance (Übersiedlungsgut), you must have lived outside the EU for at least 12 consecutive months and have owned the goods for at least 6 months. Goods cannot be lent, rented, or sold for 12 months following import.',
            'docs_needed' => [
                'German Customs Form 0350 (Zollantrag für Übersiedlungsgut)',
                'Copy of German Meldebestätigung (City registration confirmation in Germany)',
                'German employment contract or proof of residence establishment',
                'Valid passport and German residence visa or EU citizenship proof',
                'Proof of living in Dubai for at least 12 months (tenancy/utility records)',
                'Itemized packing inventory with German or English descriptions',
            ],
            'shipping_modes' => [
                'Ocean shipping through ports of Hamburg or Bremerhaven with inland delivery',
                'LCL consolidated pallet shipping for moderate volumes',
                'Air cargo to Frankfurt (FRA) or Munich (MUC)',
            ],
            'customs_tips' => 'Register your address at the local Bürgeramt in Germany as soon as you arrive to obtain your Meldebestätigung. German Zoll will not clear your container without this official registration document.',
            'faqs' => [
                ['q' => 'Will my electrical electronics from Dubai work in Germany?', 'a' => 'Yes! Germany operates on 230V 50Hz, the exact voltage used in Dubai. You only need Type C or Type F German two-pin plug adapters for your UAE cords.'],
                ['q' => 'Can I import wine and spirits as part of my household move?', 'a' => 'Alcoholic beverages and tobacco products are NOT covered by the German duty-free relocation exemption and will incur customs duty, excise taxes, and 19% VAT if included.'],
            ]
        ],

        'moving-from-dubai-to-france' => [
            'slug' => 'moving-from-dubai-to-france',
            'country' => 'France',
            'country_short' => 'France',
            'capital_city' => 'Paris, Lyon, Marseille, Nice, Toulouse',
            'code' => 'FR',
            'region' => 'Europe',
            'flag' => '🇫🇷',
            'transit_sea' => '24 – 32 Days (Estimated Ocean)',
            'transit_air' => '5 – 8 Days (Estimated Air Cargo)',
            'ports' => 'Le Havre, Fos-sur-Mer (Marseille)',
            'image' => 'https://images.unsplash.com/photo-1502602898657-3e91760cbb34?auto=format&fit=crop&w=1200&q=80',
            'tagline' => 'Relocate to Paris, the Côte d’Azur, and French regions with French Douane expertise.',
            'headline' => 'Moving from Dubai to France',
            'subheadline' => 'Seamless international moving services from the UAE to Paris, Lyon, Bordeaux, and across France.',
            'intro' => 'Transitioning from Dubai to France entails coordination through French Customs (La Douane). With MOVEXA, your household items are securely packed in Dubai to international maritime export specifications and cleared using the "Franchise de déménagement" duty-free protocol.',
            'customs_overview' => 'French customs grants duty and tax exemption for personal property belonging to individuals who transfer their main residence to France after residing outside the European Union for at least 12 months.',
            'docs_needed' => [
                'Cerfa Form 10070 (Déclaration d\'entrée en franchise de biens personnels)',
                'Certificat de changement de résidence (issued by French consulate in UAE or employer letter)',
                'Proof of residence in France (Lease agreement, title deed, or EDF utility bill)',
                'Copy of Passport and French long-stay visa or European passport',
                'Bilingual (French/English) valued inventory signed by the shipper',
            ],
            'shipping_modes' => [
                'Full container shipments routed to Le Havre (North) or Fos-sur-Mer (South)',
                'Shared container consolidated shipments (LCL)',
                'Priority air cargo directly to Paris Charles de Gaulle (CDG)',
            ],
            'customs_tips' => 'Obtain a Certificate of Change of Residence from the French Consulate in Dubai prior to your departure, or ensure you have an official transfer letter on company letterhead confirming your departure date from Dubai.',
            'faqs' => [
                ['q' => 'Can you navigate narrow streets and courtyard buildings in Paris?', 'a' => 'Parisian buildings frequently have narrow staircases and compact elevators. In collaboration with our local French partners, we arrange municipal parking permits and exterior furniture elevators (monte-meubles) to hoist large pieces safely through exterior windows.'],
            ]
        ],

        'moving-from-dubai-to-india' => [
            'slug' => 'moving-from-dubai-to-india',
            'country' => 'India',
            'country_short' => 'India',
            'capital_city' => 'Mumbai, Delhi, Bangalore, Hyderabad, Chennai, Kochi',
            'code' => 'IN',
            'region' => 'Asia',
            'flag' => '🇮🇳',
            'transit_sea' => '10 – 16 Days (Fast Ocean Route)',
            'transit_air' => '3 – 5 Days (Estimated Air Cargo)',
            'ports' => 'Nhava Sheva (Mumbai), Chennai, Cochin, Mundra',
            'image' => 'https://images.unsplash.com/photo-1524492412937-b28074a5d7da?auto=format&fit=crop&w=1200&q=80',
            'tagline' => 'Fast sea transit from Jebel Ali to Mumbai, Cochin, Chennai, and Delhi ICDs under Transfer of Residence (TR).',
            'headline' => 'Moving from Dubai to India',
            'subheadline' => 'Reliable and affordable household relocations for Non-Resident Indians (NRIs) returning under Transfer of Residence.',
            'intro' => 'The Dubai-to-India corridor is one of the busiest relocation routes in the world. With brief maritime transit times from Jebel Ali to western Indian ports, MOVEXA provides tailored solutions under the Indian Customs Transfer of Residence (TR) rules, minimizing duties on used household goods.',
            'customs_overview' => 'Under Indian Baggage Rules, Indians returning after staying abroad for at least 2 years can avail of Transfer of Residence (TR) concessions, allowing duty-free import of used personal effects and concessional rates on specified electronic white goods.',
            'docs_needed' => [
                'Original Passport of the shipper (showing 2+ years of UAE residency)',
                'UAE Residence Visa cancellation stamp and Emirates ID copy',
                'Air ticket / boarding pass showing final arrival into India',
                'Transfer of Residence customs declaration forms',
                'Itemized inventory with serial numbers for LED TVs, refrigerators, and washing machines',
                'OCI Card copy or Indian Passport copy',
            ],
            'shipping_modes' => [
                'Direct ocean containers to Nhava Sheva (JNPT), Chennai, Mundra, and Cochin ports',
                'Inland Container Depot (ICD) rail transfers directly to Delhi, Hyderabad, and Bangalore',
                'Fast air freight to Mumbai (BOM), Delhi (DEL), Bangalore (BLR), and Kochi (COK)',
            ],
            'customs_tips' => 'Indian customs requires the shipper’s original physical passport during customs clearance at the seaport or ICD. Electronics like large smart TVs attract specific duty slabs under Indian baggage regulations.',
            'faqs' => [
                ['q' => 'Is there customs duty on televisions when moving from Dubai to India?', 'a' => 'Under Indian customs regulations, flat-panel LED/OLED televisions are subject to standard customs duty (around 38.5%) and are excluded from the general duty-free allowance under TR. Our team calculates these expected charges beforehand so there are no surprises.'],
                ['q' => 'How long does shipping take from Dubai to Mumbai?', 'a' => 'The direct sea transit from Jebel Ali Port to Nhava Sheva (JNPT) takes only 4 to 6 days on the water! Port handling and customs clearance typically require an additional 5 to 7 days.'],
            ]
        ],

        'moving-from-dubai-to-pakistan' => [
            'slug' => 'moving-from-dubai-to-pakistan',
            'country' => 'Pakistan',
            'country_short' => 'Pakistan',
            'capital_city' => 'Karachi, Lahore, Islamabad, Rawalpindi, Faisalabad',
            'code' => 'PK',
            'region' => 'Asia',
            'flag' => '🇵🇰',
            'transit_sea' => '8 – 14 Days (Fast Ocean Route)',
            'transit_air' => '3 – 5 Days (Estimated Air Cargo)',
            'ports' => 'Karachi Port, Port Qasim',
            'image' => 'https://images.unsplash.com/photo-1588668214407-6ea9a6d8c272?auto=format&fit=crop&w=1200&q=80',
            'tagline' => 'Direct sea freight from Dubai to Karachi with door delivery across Pakistan under Transfer of Residence.',
            'headline' => 'Moving from Dubai to Pakistan',
            'subheadline' => 'Complete moving services for overseas Pakistanis relocating from the UAE to Karachi, Lahore, Islamabad, and beyond.',
            'intro' => 'Relocating from Dubai to Pakistan is streamlined by geographical proximity and rapid transit times from Jebel Ali to Karachi Port. MOVEXA handles the export packing, ocean freight, customs clearance at Karachi, and secure bonded trucking to upcountry destinations including Lahore, Islamabad, and Peshawar.',
            'customs_overview' => 'Overseas Pakistanis returning home under the Transfer of Residence (TR) scheme can import used household and personal effects subject to Federal Board of Revenue (FBR) Baggage Rules. The person must have lived abroad for at least 2 years without recent long stays in Pakistan.',
            'docs_needed' => [
                'Original Pakistani Passport or NICOP / CNIC copy',
                'UAE Residence Visa cancellation and Emirates ID copy',
                'FBR Transfer of Residence (TR) declaration and inventory form',
                'Air ticket or boarding pass confirming departure to Pakistan',
                'Detailed bilingual packing list with box counts',
            ],
            'shipping_modes' => [
                'Direct 20ft & 40ft container maritime transport to Karachi Port Trust (KPT) & Port Qasim',
                'LCL shared box-shipments for modest apartment contents',
                'Air cargo to Karachi (KHI), Lahore (LHE), and Islamabad (ISB)',
            ],
            'customs_tips' => 'Customs duties in Pakistan apply to certain luxury home appliances and electronic devices. Ensure all items are declared accurately on the packing list to facilitate swift clearance by customs appraisers.',
            'faqs' => [
                ['q' => 'Can you deliver my belongings directly to Lahore or Islamabad?', 'a' => 'Yes! After customs clearance is completed at Karachi Port, our bonded transport fleet moves your goods securely by road or dedicated dry-port rail directly to your residence in Lahore, Islamabad, Rawalpindi, or other cities.'],
                ['q' => 'What is the required overseas stay to qualify for Transfer of Residence in Pakistan?', 'a' => 'To qualify for Transfer of Residence concessions under FBR rules, a minimum continuous stay of two years abroad is generally required, with allowable brief short visits to Pakistan.'],
            ]
        ],

        'moving-from-dubai-to-saudi-arabia' => [
            'slug' => 'moving-from-dubai-to-saudi-arabia',
            'country' => 'Saudi Arabia',
            'country_short' => 'KSA',
            'capital_city' => 'Riyadh, Jeddah, Dammam, Khobar, Medina',
            'code' => 'SA',
            'region' => 'Middle East',
            'flag' => '🇸🇦',
            'transit_sea' => '3 – 6 Days (Overland Road Freight) or 7 – 12 Days (Sea)',
            'transit_air' => '2 – 4 Days (Estimated Air Cargo)',
            'ports' => 'Batha Border (Road), King Abdulaziz Port Dammam, Jeddah Islamic Port',
            'image' => 'https://images.unsplash.com/photo-1586724237569-f3d0c1dee8c6?auto=format&fit=crop&w=1200&q=80',
            'tagline' => 'Direct overland road transport across Batha border or ocean freight to Dammam and Jeddah.',
            'headline' => 'Moving from Dubai to Saudi Arabia',
            'subheadline' => 'Specialized GCC relocations from Dubai to Riyadh, Jeddah, Dammam, and NEOM via road convoy and sea.',
            'intro' => 'With the burgeoning economy and giga-projects across the Kingdom of Saudi Arabia, thousands of executives and families move between Dubai and KSA each year. MOVEXA offers rapid overland road freight using closed box trailers crossing the UAE-KSA border at Al Ghuwaifat / Batha, as well as ocean and air alternatives.',
            'customs_overview' => 'Personal effects entering Saudi Arabia are cleared through ZATCA (Zakat, Tax and Customs Authority). Shipments require an Iqama (Saudi Residence Permit), a Saudi customs authorization, and adherence to strict cultural censorship and inspection standards.',
            'docs_needed' => [
                'Copy of Valid Saudi Iqama (Residence Permit) or Saudi National ID',
                'Copy of Passport with Saudi Entry Stamp or Visa',
                'ZATCA electronic delegation (Tawkeel) for customs clearance via FASAH portal',
                'UAE Residence Visa cancellation or job transfer documents',
                'Comprehensive packing list in Arabic / English',
            ],
            'shipping_modes' => [
                'Dedicated 40ft & 50ft closed box road trailers with direct delivery from Dubai to Riyadh/Khobar',
                'Consolidated overland groupage road freight for budget moves',
                'Air cargo to Riyadh King Khalid Airport (RUH) or Jeddah King Abdulaziz Airport (JED)',
            ],
            'customs_tips' => 'Saudi customs prohibits all alcoholic beverages, pork products, religious materials conflicting with Islam, and unapproved drones or satellite receivers. Ensure your library and media collections are scrutinized prior to loading.',
            'faqs' => [
                ['q' => 'Is overland road freight faster than sea freight to Riyadh?', 'a' => 'Yes! Overland road transport via the Batha border is significantly faster than ocean freight. Transit from Dubai to Riyadh takes just 3 to 5 days, including customs inspection at the border!'],
                ['q' => 'What is the FASAH authorization needed for Saudi customs?', 'a' => 'FASAH is Saudi Arabia\'s official electronic customs portal. You create a profile using your Iqama and electronically delegate our customs broker to clear your household goods on your behalf.'],
            ]
        ],

        'moving-from-dubai-to-qatar' => [
            'slug' => 'moving-from-dubai-to-qatar',
            'country' => 'Qatar',
            'country_short' => 'Qatar',
            'capital_city' => 'Doha, Al Wakrah, Lusail, Al Rayyan',
            'code' => 'QA',
            'region' => 'Middle East',
            'flag' => '🇶🇦',
            'transit_sea' => '5 – 8 Days (Sea) or 3 – 5 Days (Overland Road Transit via KSA)',
            'transit_air' => '2 – 4 Days (Estimated Air Cargo)',
            'ports' => 'Hamad Port (Doha), Abu Samra Border (Road)',
            'image' => 'https://images.unsplash.com/photo-1568084680786-a84f91d1153c?auto=format&fit=crop&w=1200&q=80',
            'tagline' => 'Fast GCC moves from Dubai to Doha and Lusail with ocean container and cross-border road logistics.',
            'headline' => 'Moving from Dubai to Qatar',
            'subheadline' => 'Door-to-door relocation solutions from Dubai and the UAE to Doha, Lusail, and The Pearl Qatar.',
            'intro' => 'Relocating from Dubai to Qatar is fast and convenient due to strong GCC trade links. MOVEXA coordinates ocean freight from Jebel Ali to Hamad Port in Doha, as well as overland road transport through transit corridors, complete with Qatar General Authority of Customs compliance.',
            'customs_overview' => 'Used household goods can be cleared into Qatar duty-free if the importer holds a valid Qatar Residence Permit (QID) and the goods have been in their personal ownership. Shipments undergo physical or X-ray inspection at Hamad Port or Abu Samra.',
            'docs_needed' => [
                'Copy of Qatar ID (QID) or Qatari Ministry entry visa',
                'Original or color copy of Passport',
                'Customs authorization letter in Arabic for Qatar Customs',
                'UAE exit proof / residence cancellation',
                'Detailed bilingual inventory checklist',
            ],
            'shipping_modes' => [
                'Direct short-sea ocean container shipping from Jebel Ali to Hamad Port (Doha)',
                'Dedicated overland transit road trailers via border crossings',
                'Direct air cargo into Hamad International Airport (DOH)',
            ],
            'customs_tips' => 'Keep your QID or sponsor company letter handy. Qatar Customs requires your active QID to release household goods without paying a refundable customs deposit.',
            'faqs' => [
                ['q' => 'How long does container shipping take from Dubai to Doha?', 'a' => 'Direct container sea freight between Jebel Ali Port and Hamad Port takes only 2 to 4 days of ocean sailing, with port clearance usually concluding within 3 to 5 business days.'],
            ]
        ],

        'moving-from-dubai-to-oman' => [
            'slug' => 'moving-from-dubai-to-oman',
            'country' => 'Oman',
            'country_short' => 'Oman',
            'capital_city' => 'Muscat, Salalah, Sohar, Nizwa',
            'code' => 'OM',
            'region' => 'Middle East',
            'flag' => '🇴🇲',
            'transit_sea' => '2 – 4 Days (Direct Overland Road Freight)',
            'transit_air' => '1 – 2 Days (Air Cargo)',
            'ports' => 'Al Wajajah Border, Hatta Border, Port Sultan Qaboos, Sohar Port',
            'image' => 'https://images.unsplash.com/photo-1596401057633-54a8fe8ef647?auto=format&fit=crop&w=1200&q=80',
            'tagline' => 'Direct door-to-door overland road moving from Dubai to Muscat across UAE-Oman borders in 48 to 72 hours.',
            'headline' => 'Moving from Dubai to Oman',
            'subheadline' => 'The fastest international relocation route: direct road trucks from your Dubai home to Muscat.',
            'intro' => 'Because Oman shares a direct land border with the United Arab Emirates, moving from Dubai to Muscat, Sohar, or Nizwa is accomplished effortlessly via dedicated road freight. MOVEXA loads your items in Dubai and drives directly through the border to your new address in Oman in as little as 2 to 4 days.',
            'customs_overview' => 'Royal Oman Police (ROP) Directorate General of Customs oversees clearance of household effects at the border. Expatriates moving to the Sultanate of Oman with a valid work visa or Omani Civil Card enjoy duty-free entry for personal belongings.',
            'docs_needed' => [
                'Copy of Valid Oman Visa / Civil Card / Resident Card',
                'Copy of Passport with Oman entry stamp',
                'Bayan customs system electronic authorization',
                'UAE exit / cancellation document',
                'Comprehensive packing list',
            ],
            'shipping_modes' => [
                'Direct closed box truck overland transport (fastest & most popular option)',
                'Dedicated full trailer loads for large villas',
                'Air freight to Muscat International Airport (MCT) for emergency requirements',
            ],
            'customs_tips' => 'Overland road moves are cleared directly at the border post (Al Wajajah or Khatm Al Shiklah). Having your Bayan customs authorization completed beforehand ensures your truck crosses within hours.',
            'faqs' => [
                ['q' => 'Can my furniture be loaded in Dubai on Friday and delivered in Muscat on Sunday?', 'a' => 'Yes! The overland road journey between Dubai and Muscat is just 450 km. With fast border clearance, delivery is often completed within 48 to 72 hours.'],
            ]
        ],

        'moving-from-dubai-to-singapore' => [
            'slug' => 'moving-from-dubai-to-singapore',
            'country' => 'Singapore',
            'country_short' => 'Singapore',
            'capital_city' => 'Singapore (Islandwide)',
            'code' => 'SG',
            'region' => 'Asia',
            'flag' => '🇸🇬',
            'transit_sea' => '14 – 20 Days (Estimated Ocean)',
            'transit_air' => '4 – 6 Days (Estimated Air Cargo)',
            'ports' => 'Port of Singapore (PSA)',
            'image' => 'https://images.unsplash.com/photo-1525625293386-3f8f99389edd?auto=format&fit=crop&w=1200&q=80',
            'tagline' => 'Relocate to the Lion City with Singapore Customs GST relief and PSA port handling.',
            'headline' => 'Moving from Dubai to Singapore',
            'subheadline' => 'Premium international moving from Dubai to condominiums and residences across Singapore.',
            'intro' => 'Moving from the Middle East\'s commercial capital to Southeast Asia\'s leading hub is an everyday journey for global professionals. MOVEXA offers expert container logistics from Jebel Ali to the Port of Singapore (PSA), managing Singapore Customs GST relief declarations and condo delivery regulations.',
            'customs_overview' => 'Personal effects and used household articles imported by individuals transferring their residence to Singapore qualify for relief from Goods and Services Tax (GST) if owned and used abroad for at least 3 months and imported within 6 months of arrival.',
            'docs_needed' => [
                'Declaration of Facts for GST Relief on Used Household Articles',
                'Copy of Employment Pass (EP), Dependent Pass, S Pass, or Singapore IC',
                'Copy of Passport photo page',
                'Detailed valued packing inventory list',
                'Proof of living in Dubai for at least 6 months prior to moving',
            ],
            'shipping_modes' => [
                'Dedicated 20ft and 40ft maritime containers directly into PSA Singapore',
                'Consolidated shared container shipments for small apartments',
                'Air cargo into Singapore Changi Airport (SIN)',
            ],
            'customs_tips' => 'Condominiums in Singapore strictly enforce move-in hours (typically 9am - 5pm weekdays and Saturdays, zero moving on Sundays and public holidays) and require a security deposit from moving companies. We coordinate all condo management requirements.',
            'faqs' => [
                ['q' => 'Will my electrical items work in Singapore?', 'a' => 'Yes! Singapore uses 230V 50Hz and the exact same 3-pin British Type-G plug used in Dubai. All your electronics, lamps, and appliances will plug straight in without converters.'],
                ['q' => 'Is chewing gum prohibited in Singapore personal shipments?', 'a' => 'Yes, chewing gum is strictly prohibited in Singapore and must never be packed in your household containers.'],
            ]
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Dubai Local Service Neighborhoods & UAE Emirates
    |--------------------------------------------------------------------------
    */
    'dubai_areas' => [
        ['name' => 'Dubai Marina', 'desc' => 'High-rise waterfront apartments, tower elevator coordination, and tight loading bay specialists.', 'icon' => 'fa-water'],
        ['name' => 'Downtown Dubai', 'desc' => 'Luxury residences around Burj Khalifa and Boulevard towers with strict Emaar move permit standards.', 'icon' => 'fa-city'],
        ['name' => 'Business Bay', 'desc' => 'Fast residential and commercial moves across commercial towers and residential canal developments.', 'icon' => 'fa-building-columns'],
        ['name' => 'Jumeirah', 'desc' => 'Low-rise luxury villas and townhouses, careful furniture transport, and beachfront property protection.', 'icon' => 'fa-umbrella-beach'],
        ['name' => 'Palm Jumeirah', 'desc' => 'Exclusive villa communities and Frond estates requiring high-end protective wrapping and gate approvals.', 'icon' => 'fa-tree'],
        ['name' => 'Arabian Ranches', 'desc' => 'Family villa moving specialists with extensive experience in multi-bedroom relocations.', 'icon' => 'fa-house-chimney-window'],
        ['name' => 'Jumeirah Village Circle (JVC)', 'desc' => 'High-frequency apartment and townhouse relocations with rapid same-day turnaround.', 'icon' => 'fa-compass'],
        ['name' => 'Dubai Silicon Oasis', 'desc' => 'Tech hub communities, studios, and family apartments with seamless door-to-door execution.', 'icon' => 'fa-microchip'],
        ['name' => 'Al Barsha', 'desc' => 'Close proximity moving for apartments and standalone villas across Barsha 1, 2, 3, and South.', 'icon' => 'fa-map-pin'],
        ['name' => 'Mirdif', 'desc' => 'Spacious compound villas and family homes with organized room-by-room unpacking.', 'icon' => 'fa-house'],
    ],

    'uae_emirates' => [
        ['name' => 'Abu Dhabi', 'desc' => 'Inter-emirate moving connecting Dubai to Al Reem Island, Saadiyat, Yas Island, and Khalifa City.', 'dist' => '130 km from Dubai'],
        ['name' => 'Sharjah', 'desc' => 'Daily inter-city transit between Dubai and Sharjah residential districts with flexible off-peak timing.', 'dist' => '30 km from Dubai'],
        ['name' => 'Ajman', 'desc' => 'Cost-effective apartment and villa relocations connecting Dubai to Ajman Corniche and Al Nuaimiya.', 'dist' => '40 km from Dubai'],
        ['name' => 'Ras Al Khaimah', 'desc' => 'Full villa moving and coastal apartment relocations to Al Hamra Village and Mina Al Arab.', 'dist' => '105 km from Dubai'],
        ['name' => 'Fujairah', 'desc' => 'Scenic east-coast relocations through mountain transit routes with heavy-duty vehicles.', 'dist' => '120 km from Dubai'],
        ['name' => 'Umm Al Quwain', 'desc' => 'Dedicated household transit to peaceful coastal communities in the Northern Emirates.', 'dist' => '65 km from Dubai'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Blog Posts (10 Unique Comprehensive Articles)
    |--------------------------------------------------------------------------
    */
    'blog_posts' => [
        'complete-moving-checklist-for-dubai-residents' => [
            'slug' => 'complete-moving-checklist-for-dubai-residents',
            'title' => 'Complete Moving Checklist for Dubai Residents: Week-by-Week Guide',
            'excerpt' => 'A comprehensive, timeline-based moving checklist covering Ejari cancellation, DEWA transfer, Move-Out NOCs, and packing tips in Dubai.',
            'category' => 'Moving Guides',
            'read_time' => '7 min read',
            'date' => 'October 15, 2026',
            'author' => 'MOVEXA Relocation Team',
            'image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80',
            'intro' => 'Relocating to a new home in Dubai is an exciting milestone, whether you are upgrading to a villa in Arabian Ranches or settling into a waterfront apartment in Dubai Marina. However, the administrative processes in the UAE require clear preparation. This week-by-week checklist guides you through every step so nothing is missed.',
            'sections' => [
                [
                    'h2' => '4 Weeks Before Moving: Administration & Ejari',
                    'content' => 'Begin by reviewing your existing tenancy contract terms. Dubai rental law requires formal notice to your landlord prior to lease expiration. Request your landlord’s maintenance inspection and check the status of your security deposit. Next, start sorting your belongings into items to keep, donate, or discard.',
                ],
                [
                    'h2' => '3 Weeks Before Moving: Building NOCs and Move-In Approvals',
                    'content' => 'In Dubai, master developers (such as Emaar, Nakheel, DAMAC, and Dubai Holding) mandate Move-Out NOCs from your current property and Move-In NOCs for your new home. Gather required documents: Passport, Visa, Emirates ID, Tenancy Contract, Title Deed copy, and your moving company’s Trade License and insurance details.',
                ],
                [
                    'h2' => '2 Weeks Before Moving: DEWA & Telecommunications',
                    'content' => 'Schedule your DEWA (Dubai Electricity and Water Authority) final bill request for your departure date, and initiate your "Move To" request for the new address. Contact your internet provider (du or e&) to schedule fiber transfer at least 10 days in advance to prevent connection downtime.',
                ],
                [
                    'h2' => '1 Week Before Moving: Fragile Packing & Essentials Bag',
                    'content' => 'Confirm your moving schedule with MOVEXA. Reserve service elevators with building security for both origin and destination buildings. Prepare an "Essentials Bag" with passports, jewelry, vital medications, laptops, and a change of clothes for moving day.',
                ],
                [
                    'h2' => 'Moving Day: Supervisor Briefing & Final Meter Readings',
                    'content' => 'Walk through the home with your MOVEXA moving crew supervisor. Take photos of your empty apartment and record final DEWA meter numbers. Once arrived at your new home, inspect all cartons before signing the delivery sheet.',
                ],
            ],
            'checklist_items' => [
                'Notify landlord in writing regarding lease end date',
                'Apply for developer Move-Out and Move-In NOCs online',
                'Initiate DEWA disconnection and connection transfer',
                'Schedule du or e& home internet address migration',
                'Reserve service elevator and basement loading dock slots',
                'Pack valuable documents, passports, and jewelry separately',
            ]
        ],

        'how-to-prepare-for-an-international-move-from-dubai' => [
            'slug' => 'how-to-prepare-for-an-international-move-from-dubai',
            'title' => 'How to Prepare for an International Move From Dubai: The Definitive Expat Guide',
            'excerpt' => 'Everything you need to know about sea vs. air freight, UAE visa cancellation, bank account closing, and export packing when leaving Dubai.',
            'category' => 'International Relocation',
            'read_time' => '8 min read',
            'date' => 'October 08, 2026',
            'author' => 'MOVEXA Global Mobility',
            'image' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=1200&q=80',
            'intro' => 'When your Dubai adventure draws to a close or career opportunities take you overseas, international relocation involves both personal packing and official repatriation steps. This guide outlines how to organize your move smoothly.',
            'sections' => [
                [
                    'h2' => 'Choosing the Right Shipping Method: FCL, LCL, or Air Freight',
                    'content' => 'The size of your inventory dictates your transit mode. If you are shipping the contents of a 2 to 4-bedroom home, a dedicated 20ft or 40ft Full Container Load (FCL) offers the highest security and direct dispatch. For smaller volumes (under 10 cubic meters), Less than Container Load (LCL) consolidation is cost-effective. Air freight is best reserved for immediate work essentials, winter apparel, and documents.',
                ],
                [
                    'h2' => 'Understanding Destination Customs Relief',
                    'content' => 'Most nations offer duty and tax exemptions for returning citizens and incoming residents importing used personal effects. For the UK, this is the ToR01; for the US, CBP Form 3299; for Canada, CBSA BSF186; for India, the Transfer of Residence baggage rules. Starting these applications weeks in advance avoids port storage fines.',
                ],
                [
                    'h2' => 'Managing UAE Departure Paperwork',
                    'content' => 'Your UAE residence visa must be formally cancelled by your sponsor, but ensure you keep color scans of your Emirates ID and visa page before surrendering your physical card. Clear credit card balances, obtain bank clearance letters, and transfer funds internationally before closing local accounts.',
                ],
                [
                    'h2' => 'Export-Grade Professional Packing',
                    'content' => 'Ocean transit involves humidity variations and container shifting. Ordinary moving boxes are inadequate. Professional export wrapping with multi-ply bubble craft, silica desiccant gel packs, and wooden crating for delicate furniture is vital.',
                ],
            ],
            'checklist_items' => [
                'Survey household volume and choose FCL or LCL sea freight',
                'Apply for destination country transfer of residence tax relief',
                'Request employer visa cancellation and settlement',
                'Close or settle UAE utility accounts (DEWA, du, Salik)',
                'Procure international transit protection coverage',
            ]
        ],

        'moving-from-dubai-to-the-uk-important-things-to-know' => [
            'slug' => 'moving-from-dubai-to-the-uk-important-things-to-know',
            'title' => 'Moving From Dubai to the UK: Important Things to Know',
            'excerpt' => 'From HMRC ToR01 relief to shipping schedules and electrical compatibility: essential relocation tips for expats moving to Britain.',
            'category' => 'Destinations',
            'read_time' => '6 min read',
            'date' => 'September 28, 2026',
            'author' => 'MOVEXA UK Desk',
            'image' => 'https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=1200&q=80',
            'intro' => 'Whether you are a British expat heading home after years under the Dubai sun or an international professional taking a post in London, moving your life to the UK requires strategic planning.',
            'sections' => [
                [
                    'h2' => 'The Transfer of Residence (ToR01) Process Explained',
                    'content' => 'The single most critical step in moving personal effects from Dubai to the UK is applying for Transfer of Residence (ToR) relief via GOV.UK. If approved, HMRC grants a unique reference number that exempts your used household effects from the standard 20% VAT and customs duties.',
                ],
                [
                    'h2' => 'Electronics: The Good News for Dubai Movers',
                    'content' => 'Unlike moving to the US or Canada, moving to the UK means your electrical appliances are fully compatible. Both the UAE and the UK use 230V 50Hz and the 3-pin British plug (Type G). Your televisions, sound systems, lamps, and vacuum cleaners plug right into UK wall sockets without transformers.',
                ],
                [
                    'h2' => 'Container Shipping Times and Port Entry',
                    'content' => 'Ocean freight from Jebel Ali to UK ports (Southampton, Felixstowe, London Gateway) typically takes 22 to 30 days of water transit. Adding customs clearance and onward UK road haulage means planning for an approximate 5 to 7-week window door-to-door.',
                ],
            ],
            'checklist_items' => [
                'Apply for HMRC ToR01 code at least 4 weeks before ship sailing',
                'Verify home address or storage depot in the UK',
                'Separate personal jewelry and high-value watches for your carry-on luggage',
                'Ensure wooden packaging complies with ISPM-15 standards',
            ]
        ],

        'how-to-pack-furniture-for-international-relocation' => [
            'slug' => 'how-to-pack-furniture-for-international-relocation',
            'title' => 'How to Pack Furniture for International Relocation: Expert Techniques',
            'excerpt' => 'Learn how professional export packers wrap, cushion, and crate hardwood, marble, and delicate upholstered furniture for ocean transits.',
            'category' => 'Packing Insights',
            'read_time' => '5 min read',
            'date' => 'September 20, 2026',
            'author' => 'MOVEXA Operations',
            'image' => 'https://images.unsplash.com/photo-1530587191325-3db32d826c18?auto=format&fit=crop&w=1200&q=80',
            'intro' => 'Maritime containers travel thousands of nautical miles across open seas, enduring rough waters, humidity fluctuations, and port crane handling. Standard domestic packing blankets are not sufficient for international voyages.',
            'sections' => [
                [
                    'h2' => 'The Three-Layer Wrapping Method',
                    'content' => 'Professional export packers employ a three-layer system. First, a breathable layer of paper blanket or furniture-grade tissue prevents condensation. Second, heavy shock-absorbing bubble wrap buffers corners and carved woodwork. Third, heavy corrugated wrap or cardboard edge-caps provide rigid armor.',
                ],
                [
                    'h2' => 'Timber Crating for Marble and Glass',
                    'content' => 'Natural stone dining table tops, glass vitrines, and crystal chandeliers cannot travel wrapped in cardboard alone. Custom-built ISPM-15 timber skeleton crates, lined with high-density polyfoam, provide structural rigidity that prevents breakage.',
                ],
                [
                    'h2' => 'Hardware Management',
                    'content' => 'When disassembling dining tables or wardrobes, screws and dowels must be sealed in heavy-gauge ziploc bags, labeled with the furniture component, and taped to the inner structural rail so nothing is lost upon overseas arrival.',
                ],
            ],
            'checklist_items' => [
                'Disassemble detachable legs, shelves, and headboards',
                'Wrap delicate fabric upholstery in breathable clean plastic',
                'Use ISPM-15 heat-treated wood for custom shipping crates',
                'Include moisture-absorbing silica gel bags inside enclosed crates',
            ]
        ],

        'apartment-moving-tips-in-dubai' => [
            'slug' => 'apartment-moving-tips-in-dubai',
            'title' => 'Apartment Moving Tips in Dubai: Overcoming Tower Logistics',
            'excerpt' => 'Practical advice for moving in Dubai Marina, JBR, Downtown, and Business Bay: loading bays, service lifts, and security passes.',
            'category' => 'Local Dubai Moving',
            'read_time' => '5 min read',
            'date' => 'September 12, 2026',
            'author' => 'MOVEXA Local Logistics',
            'image' => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&w=1200&q=80',
            'intro' => 'Living in a high-rise Dubai apartment offers panoramic skyline views, but moving out of or into a skyscraper requires specialized coordination. Here is how to navigate building security, elevator reservations, and parking permits.',
            'sections' => [
                [
                    'h2' => 'Check Basement Height Clearance',
                    'content' => 'Many residential towers have subterranean loading docks with ceiling clearance between 2.2 meters and 3.2 meters. Oversized commercial trucks cannot enter. MOVEXA uses specialized low-clearance box trucks tailored to navigate tower ramps safely.',
                ],
                [
                    'h2' => 'Securing Your Service Elevator Time Slot',
                    'content' => 'Most building management teams allow move operations only during designated hours (usually 9:00 AM to 5:00 PM, Sunday through Friday). Reserve your service elevator slot at least 5 business days in advance to prevent move-day cancellation.',
                ],
                [
                    'h2' => 'Protecting Public Areas and Deposits',
                    'content' => 'Building management security officers inspect hallway carpets, door frames, and elevator walls before and after your move. Any damage can result in building fines or withheld security deposits. Professional movers install wall protectors and elevator floor covers.',
                ],
            ],
            'checklist_items' => [
                'Verify moving vehicle height clearance with building management',
                'Book service elevator slot at both old and new buildings',
                'Ensure moving crew has valid Emirates ID copies for security gate passes',
                'Take timestamped photos of hallway walls before move starts',
            ]
        ],

        'office-relocation-planning-checklist' => [
            'slug' => 'office-relocation-planning-checklist',
            'title' => 'Office Relocation Planning Checklist: Zero-Downtime Commercial Moves',
            'excerpt' => 'How to coordinate an office move in Dubai without interrupting business continuity, server integrity, or employee productivity.',
            'category' => 'Corporate Moving',
            'read_time' => '7 min read',
            'date' => 'September 02, 2026',
            'author' => 'MOVEXA Corporate Desk',
            'image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1200&q=80',
            'intro' => 'Relocating a corporate headquarters or branch office involves hundreds of interconnected variables: IT infrastructure, employee workstations, sensitive records, and landlord handovers. Strategic planning is essential.',
            'sections' => [
                [
                    'h2' => 'Phase 1: 8 Weeks Out – Appoint a Move Project Manager',
                    'content' => 'Designate an internal relocation committee. Map the new floor plan with assigned desk numbers, department zones, and meeting room layouts. Provide this blueprint to MOVEXA for systematic crate labeling.',
                ],
                [
                    'h2' => 'Phase 2: 4 Weeks Out – IT & Server Room Coordination',
                    'content' => 'Servers and network switches are the heartbeat of modern companies. Plan data center disconnection schedules, cloud failovers, and backup verification before equipment is unmounted. Antistatic packaging is mandatory.',
                ],
                [
                    'h2' => 'Phase 3: Moving Weekend – Sequential Department Setup',
                    'content' => 'Executing the physical move over Friday and Saturday enables staff to leave their old desks on Thursday evening and sit at their fully assembled workstations on Monday morning with zero business downtime.',
                ],
            ],
            'checklist_items' => [
                'Appoint internal move committee and floor captain',
                'Number every workstation according to new office CAD layout',
                'Distribute color-coded personal crates to all staff members',
                'Decommission server rack in coordination with IT infrastructure teams',
                'Arrange building loading bay access for commercial night shifts',
            ]
        ],

        'moving-from-dubai-to-canada' => [
            'slug' => 'moving-from-dubai-to-canada',
            'title' => 'Moving From Dubai to Canada: Goods to Follow & Customs Essentials',
            'excerpt' => 'A detailed guide for Canadian returnees and PR immigrants on BSF186 forms, sea freight timelines, and winterizing your shipment.',
            'category' => 'Destinations',
            'read_time' => '6 min read',
            'date' => 'August 24, 2026',
            'author' => 'MOVEXA Canada Desk',
            'image' => 'https://images.unsplash.com/photo-1503614472-8c93d56e92ce?auto=format&fit=crop&w=1200&q=80',
            'intro' => 'Canada continues to welcome skilled professionals, families, and returning expats from the UAE. Navigating Canada Border Services Agency (CBSA) requires understanding the "Goods to Follow" mechanism and maritime routes.',
            'sections' => [
                [
                    'h2' => 'Landing in Canada: Form BSF186 at the Airport',
                    'content' => 'When you land at Toronto Pearson, Vancouver, or Montreal, you must declare both the luggage you are carrying and your unaccompanied shipment ("Goods to Follow") using CBSA Form BSF186. The border officer will inspect your itemized packing list and affix an official CBSA stamp.',
                ],
                [
                    'h2' => 'Maritime Ocean Routes to Canada',
                    'content' => 'Containers departing Jebel Ali Port reach Canada via two principal channels: West Coast shipments via Vancouver port, or East Coast shipments through Montreal or Halifax. Once at the seaport, containers transfer to CN or CP Rail networks to reach inland bonded terminals.',
                ],
                [
                    'h2' => 'Electrical Appliance Reality Check',
                    'content' => 'Canada operates on 120V 60Hz with North American Type A/B plugs. UAE large white appliances (fridges, washers, dryers) designed for 220V 50Hz will generally not function efficiently in Canada and are rarely worth shipping overseas.',
                ],
            ],
            'checklist_items' => [
                'Prepare detailed B4/BSF186 inventory with valuations in Canadian Dollars',
                'Ensure all outdoor items are completely cleaned of soil to satisfy CFIA',
                'Obtain stamped BSF186 from CBSA officer immediately upon arrival',
                'Confirm inland destination delivery address or bonded storage facility',
            ]
        ],

        'international-shipping-and-customs-preparation' => [
            'slug' => 'international-shipping-and-customs-preparation',
            'title' => 'International Shipping and Customs Preparation: How to Avoid Delays',
            'excerpt' => 'Proactive steps to clear customs swiftly: packing declarations, prohibited items, fumigation certificates, and itemized inventories.',
            'category' => 'International Relocation',
            'read_time' => '6 min read',
            'date' => 'August 16, 2026',
            'author' => 'MOVEXA Compliance Officer',
            'image' => 'https://images.unsplash.com/photo-1542296332-2e4473faf563?auto=format&fit=crop&w=1200&q=80',
            'intro' => 'Customs clearance is the most regulated phase of any overseas move. Understanding how customs authorities inspect containers and process documentation ensures your belongings move swiftly through ports.',
            'sections' => [
                [
                    'h2' => 'Creating an Itemized Bilingual Packing List',
                    'content' => 'Customs officers do not accept vague descriptions like "Box 1: Miscellaneous Items" or "Box 2: Stuff". Every box must indicate its specific contents (e.g., "Box 14: Men’s Cotton Shirts and Trousers", "Box 15: Porcelain Dinnerware"). Specific descriptions reduce physical inspection rates.',
                ],
                [
                    'h2' => 'Strictly Prohibited Items Across International Borders',
                    'content' => 'Never pack flammable liquids, aerosols, lighter gas, firearms, ammunition, fresh fruits, seeds, organic plants, or counterfeit goods. Including these items can result in container impoundment, hefty legal penalties, and customs rejections.',
                ],
                [
                    'h2' => 'ISPM-15 Wooden Crating Compliance',
                    'content' => 'The International Standards for Phytosanitary Measures (ISPM-15) mandates that all raw timber used in shipping crates must be heat-treated or fumigated and stamped with the official IPPC wheat stamp to prevent pest infestation.',
                ],
            ],
            'checklist_items' => [
                'Review destination prohibited goods lists prior to packing',
                'Avoid generic carton descriptions on packing inventories',
                'Confirm all wooden pallets and crates bear ISPM-15 stamps',
                'Keep copies of passport, visas, and bill of lading readily accessible',
            ]
        ],

        'how-to-choose-professional-movers-in-dubai' => [
            'slug' => 'how-to-choose-professional-movers-in-dubai',
            'title' => 'How to Choose Professional Movers in Dubai: Avoiding Unlicensed Operators',
            'excerpt' => 'Key questions to ask, red flags to avoid, trade licenses, insurance policies, and written quotation contracts in the UAE moving sector.',
            'category' => 'Consumer Advice',
            'read_time' => '5 min read',
            'date' => 'August 08, 2026',
            'author' => 'MOVEXA Editorial',
            'image' => 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&w=1200&q=80',
            'intro' => 'Dubai’s moving industry has numerous operators ranging from premier international logistics companies to unlicensed pickup trucks advertising on lamp posts. Entrusting your life\'s possessions to movers requires careful vetting.',
            'sections' => [
                [
                    'h2' => 'Verify Official DED Trade Licensing',
                    'content' => 'Always verify that the moving company holds a legitimate trade license issued by the Dubai Department of Economy and Tourism (DET) with activities designated for cargo transport or moving services. Unlicensed movers cannot enter gated communities or secure loading bay NOCs.',
                ],
                [
                    'h2' => 'Insist on a Comprehensive Written Quotation',
                    'content' => 'Beware of companies offering vague quotes over WhatsApp with rock-bottom prices. Unscrupulous operators often arrive on move day and demand cash surcharges for packing tape, stairs, or furniture assembly. Demand an all-inclusive binding quote.',
                ],
                [
                    'h2' => 'Examine Packing Material Quality',
                    'content' => 'Professional movers use double-wall 5-ply corrugated cardboard boxes, fresh virgin bubble wrap, stretch film, and specialized wardrobe boxes. Inquire whether materials are included or billed separately.',
                ],
            ],
            'checklist_items' => [
                'Check Dubai DED trade license validity and moving business activities',
                'Obtain written quote specifying all inclusions and potential extras',
                'Confirm goods-in-transit insurance coverage',
                'Ensure the company can provide necessary documentation for building NOCs',
            ]
        ],

        'how-to-prepare-your-villa-for-relocation' => [
            'slug' => 'how-to-prepare-your-villa-for-relocation',
            'title' => 'How to Prepare Your Villa for Relocation: A Room-by-Room Strategy',
            'excerpt' => 'Managing large-scale villa moves: garden furniture, maid quarters, chandeliers, heavy fitness equipment, and multi-day moving schedules.',
            'category' => 'Villa Shifting',
            'read_time' => '6 min read',
            'date' => 'August 01, 2026',
            'author' => 'MOVEXA Villa Specialist',
            'image' => 'https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&w=1200&q=80',
            'intro' => 'Relocating a 4 to 6-bedroom villa in communities like Arabian Ranches, Emirates Hills, or Jumeirah Golf Estates is a major logistical undertaking. With multiple floors, extensive outdoor spaces, and delicate fixtures, planning is paramount.',
            'sections' => [
                [
                    'h2' => 'Outdoor & Garden Areas: First to Address',
                    'content' => 'Villas often feature extensive patio furnishings, barbecues, trampolines, and heavy planters. Begin cleaning and draining outdoor hoses and gas barbecues several days prior. Trampolines and play gyms require advance dismantling.',
                ],
                [
                    'h2' => 'Staircases and Flooring Protection',
                    'content' => 'High-traffic villa corridors, marble staircases, and polished timber handrails must be protected. Require your moving team to install heavy neoprene floor runners and padded handrail guards throughout the home.',
                ],
                [
                    'h2' => 'Managing Large Crews with Zoned Packing',
                    'content' => 'A large villa move often deploys 8 to 15 crew members. A zoned approach—where designated team leaders manage the ground floor living areas while others handle master suites upstairs—keeps the operation organized and efficient.',
                ],
            ],
            'checklist_items' => [
                'Disconnect and empty outdoor gas grills and water features',
                'Arrange community security gate passes for large moving trucks',
                'Designate a staging zone on the ground floor for packed cartons',
                'Protect banisters, stairs, and door casings with padded guards',
            ]
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Moving Gallery Showcase (16 High-Res Distinct Images)
    |--------------------------------------------------------------------------
    */
    'gallery' => [
        [
            'id' => 1,
            'category' => 'Moving Fleet & Crew',
            'title' => '15+ Full-Time MOVEXA Moving Crew & Commercial Fleet',
            'caption' => 'Verified in-house moving crew posing with dedicated commercial fleet, packing boxes, and direct hotline (050 706 0165).',
            'image' => 'images/gallery/movexa-gallery-team-trucks-pose.webp',
            'aspect' => 'portrait',
            'object_position' => 'center',
        ],
        [
            'id' => 2,
            'category' => 'Moving Fleet & Crew',
            'title' => 'Dubai Skyline Fleet Deployment & Inter-City Relocations',
            'caption' => 'MOVEXA team and moving truck deployed across Dubai Marina, Downtown, and inter-emirate relocation routes with Burj Khalifa backdrop.',
            'image' => 'images/gallery/movexa-gallery-skyline-crew-fleet.webp',
            'aspect' => 'wide',
            'object_position' => 'center',
        ],
        [
            'id' => 3,
            'category' => 'Villa Relocation',
            'title' => 'White-Glove Luxury Villa Furniture Loading',
            'caption' => 'Careful loading of premium living room sofa and bedroom furnishings at an Arabian Ranches luxury villa estate.',
            'image' => 'images/gallery/movexa-gallery-villa-sofa-loading.webp',
            'aspect' => 'landscape',
            'object_position' => 'center',
        ],
        [
            'id' => 4,
            'category' => 'Protective Packing',
            'title' => 'Turnkey Packing, Assembly & Curtain Installation',
            'caption' => 'Master handymen taping heavy-duty boxes, installing window curtain drapery, and wrapping luxury residential furniture.',
            'image' => 'images/gallery/movexa-gallery-composite-services.webp',
            'aspect' => 'wide',
            'object_position' => 'center',
        ],
        [
            'id' => 5,
            'category' => 'Moving Fleet & Crew',
            'title' => 'Hydraulic Tail-Lift Ramp & Heavy-Duty Carton Staging',
            'caption' => 'Enclosed commercial moving truck with hydraulic tail-lift ramp, export-grade boxes, and uniformed logistics specialists.',
            'image' => 'images/gallery/movexa-gallery-crew-fleet-ramp.webp',
            'aspect' => 'landscape',
            'object_position' => 'center',
        ],
        [
            'id' => 6,
            'category' => 'Protective Packing',
            'title' => 'Industrial Shock-Absorbing Packing & Bubble Cushioning',
            'caption' => 'Professional movers and packers applying high-density bubble wrap, corner guards, and heavy-duty tape to delicate items.',
            'image' => 'images/gallery/movexa-gallery-packers-movers-banner.webp',
            'aspect' => 'square',
            'object_position' => 'center',
        ],
        [
            'id' => 7,
            'category' => 'Protective Packing',
            'title' => 'End-to-End Furniture Disassembly & Setup Montage',
            'caption' => 'Complete residential moving workflow: furniture dismantling, secure strapping, vehicle transit, and home setup.',
            'image' => 'images/gallery/movexa-gallery-full-service-montage.webp',
            'aspect' => 'wide',
            'object_position' => 'center',
        ],
        [
            'id' => 8,
            'category' => 'Residential Moving',
            'title' => 'Comprehensive Household & Apartment Moving',
            'caption' => 'Uniformed MOVEXA movers carefully carrying protective-wrapped household furniture and moving boxes in Dubai.',
            'image' => 'images/gallery/movexa-gallery-service-home-moving.webp',
            'aspect' => 'landscape',
            'object_position' => 'center',
        ],
        [
            'id' => 9,
            'category' => 'Residential Moving',
            'title' => 'High-Rise Tower Apartment Moving & Rolling Carts',
            'caption' => 'Specialized service elevator moving with heavy-duty platform trolleys, low-clearance basement trucks, and building NOC management.',
            'image' => 'images/gallery/movexa-gallery-service-apartment-moving.webp',
            'aspect' => 'landscape',
            'object_position' => 'center',
        ],
        [
            'id' => 10,
            'category' => 'Villa Relocation',
            'title' => 'Turnkey Multi-Level Villa Relocation',
            'caption' => 'Turnkey luxury estate moving in Palm Jumeirah and Arabian Ranches with dedicated supervisors and enclosed trucks.',
            'image' => 'images/gallery/movexa-gallery-service-villa-relocation.webp',
            'aspect' => 'landscape',
            'object_position' => 'center',
        ],
        [
            'id' => 11,
            'category' => 'Commercial Moving',
            'title' => 'Corporate Office & Commercial IT Shifting',
            'caption' => 'Structured commercial office moving scheduled after-hours to safeguard IT workstations, monitors, and filing systems.',
            'image' => 'images/gallery/movexa-gallery-service-office-relocation.webp',
            'aspect' => 'landscape',
            'object_position' => 'center',
        ],
        [
            'id' => 12,
            'category' => 'Export Wrapping',
            'title' => 'Seaworthy Timber Crating & International Export Shipping',
            'caption' => 'Custom wooden timber crates built to size for worldwide maritime ocean freight and bilingual customs clearance from Dubai.',
            'image' => 'images/gallery/movexa-gallery-service-international-moving.webp',
            'aspect' => 'landscape',
            'object_position' => 'center',
        ],
        [
            'id' => 13,
            'category' => 'Storage Solutions',
            'title' => 'Climate-Controlled Warehouse & Pallet Vault Storage',
            'caption' => '24/7 CCTV-monitored, dust-free warehouse storage in Dubai with multi-layer protective furniture wrapping.',
            'image' => 'images/gallery/movexa-gallery-service-storage-solutions.webp',
            'aspect' => 'landscape',
            'object_position' => 'center',
        ],
        [
            'id' => 14,
            'category' => 'Moving Fleet & Crew',
            'title' => 'MOVEXA Professional Moving Fleet & Crew Operations',
            'caption' => 'Dubai skyline relocation operations with dedicated commercial fleet, certified crew, and full protective sofa packing.',
            'image' => 'images/gallery/movexa-gallery-skyline-truck-team.webp',
            'aspect' => 'wide',
            'object_position' => 'center',
        ],
        [
            'id' => 15,
            'category' => 'Villa Relocation',
            'title' => 'Turnkey Luxury Villa Relocation & Loading',
            'caption' => 'Full-service villa moving team handling careful furniture transport and box loading at a private Dubai estate.',
            'image' => 'images/gallery/movexa-gallery-villa-relocation-loading.webp',
            'aspect' => 'landscape',
            'object_position' => 'center',
        ],
        [
            'id' => 16,
            'category' => 'Moving Fleet & Crew',
            'title' => 'Furniture Movers Commercial Transport Truck',
            'caption' => 'Fully enclosed, branded MOVEXA truck equipped with hydraulic ramp for safe residential and office moving.',
            'image' => 'images/gallery/movexa-gallery-truck-sofa-fleet.webp',
            'aspect' => 'portrait',
            'object_position' => 'center 20%',
        ],
        [
            'id' => 17,
            'category' => 'Moving Fleet & Crew',
            'title' => 'Villa Relocation Logistics Truck',
            'caption' => 'Clean, GPS-monitored MOVEXA moving vehicle with direct WhatsApp dispatch line (050 706 0165).',
            'image' => 'images/gallery/movexa-gallery-truck-house-fleet.webp',
            'aspect' => 'portrait',
            'object_position' => 'center 18%',
        ],
        [
            'id' => 18,
            'category' => 'Residential Moving',
            'title' => 'Apartment Packing & Uniformed Moving Crew',
            'caption' => 'Professional MOVEXA crew members carefully packing double-wall cartons and wrapping fragile furnishings in a Dubai apartment.',
            'image' => 'images/gallery/movexa-gallery-apartment-packing-crew.webp',
            'aspect' => 'portrait',
            'object_position' => 'center 38%',
        ],
        [
            'id' => 19,
            'category' => 'Moving Fleet & Crew',
            'title' => 'Multi-Truck Fleet Deployment & Logistics',
            'caption' => 'Coordinated multi-vehicle deployment for large-scale household and corporate relocations across Dubai.',
            'image' => 'images/gallery/movexa-gallery-dual-trucks-community.webp',
            'aspect' => 'landscape',
            'object_position' => 'center',
        ],
        [
            'id' => 20,
            'category' => 'Moving Fleet & Crew',
            'title' => 'Commercial Relocation Truck in Transit',
            'caption' => 'Clean, temperature-regulated MOVEXA transport vehicle dispatched across UAE emirates with live GPS tracking.',
            'image' => 'images/gallery/movexa-gallery-branded-truck-in-transit.webp',
            'aspect' => 'landscape',
            'object_position' => 'center',
        ],
        [
            'id' => 21,
            'category' => 'Protective Packing',
            'title' => 'Structured Room-by-Room Packing & Staging',
            'caption' => 'Organized staging with branded heavy-duty moving cartons, protective bubble-lining, and labeled contents for seamless unpacking.',
            'image' => 'images/gallery/movexa-gallery-organized-room-packing.webp',
            'aspect' => 'landscape',
            'object_position' => 'center',
        ],
        [
            'id' => 22,
            'category' => 'Protective Packing',
            'title' => 'Warehouse Staging & Furniture Wrapping',
            'caption' => 'Multi-layer stretch wrap, thick mattress pads, and corner edge shields applied to packaged furniture in storage.',
            'image' => 'images/gallery/movexa-gallery-warehouse-packing.webp',
            'aspect' => 'landscape',
            'object_position' => 'center 50%',
        ],
        [
            'id' => 23,
            'category' => 'Export Wrapping',
            'title' => 'Residential Export-Grade Furniture Packing',
            'caption' => 'Individual inventory numbering, heavy-duty shrink-wrapping, and security strapping for client home relocation.',
            'image' => 'images/gallery/movexa-gallery-residential-export-packing.webp',
            'aspect' => 'landscape',
            'object_position' => 'center 50%',
        ],
        [
            'id' => 24,
            'category' => 'Residential Moving',
            'title' => 'Apartment Room Packing & Fragile Item Boxing',
            'caption' => 'Carefully sealed double-wall cartons with fragile labeling, shrink-wrapped cabinetry, and disassembled bed framing ready for transport.',
            'image' => 'images/gallery/movexa-gallery-fragile-room-packing.webp',
            'aspect' => 'landscape',
            'object_position' => 'center',
        ],
        [
            'id' => 25,
            'category' => 'Protective Packing',
            'title' => 'Heavy-Duty Mattress & Bedding Protection',
            'caption' => 'Multi-layer waterproof stretch wrap encasing mattresses and bed bases to prevent dust, moisture, and transit wear.',
            'image' => 'images/gallery/movexa-gallery-mattress-protective-wrap.webp',
            'aspect' => 'landscape',
            'object_position' => 'center',
        ],
        [
            'id' => 26,
            'category' => 'Protective Packing',
            'title' => 'Living Room Sofa & Carpet Protective Wrapping',
            'caption' => 'Comprehensive protective shrink-wrapping for living room sofas, armchairs, and rolled carpets in a residential home.',
            'image' => 'images/gallery/movexa-gallery-sofa-living-room-wrapping.webp',
            'aspect' => 'landscape',
            'object_position' => 'center',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Frequently Asked Questions Categorized
    |--------------------------------------------------------------------------
    */
    'faq_categories' => [
        'Local Moving in Dubai' => [
            [
                'q' => 'Do you provide local moving services across all areas of Dubai?',
                'a' => 'Yes! MOVEXA provides moving services across all Dubai communities, including Dubai Marina, Downtown, Palm Jumeirah, Business Bay, JBR, Arabian Ranches, JVC, Dubai Hills, Silicon Oasis, and Mirdif, as well as inter-emirate moves across the UAE.'
            ],
            [
                'q' => 'Do I need building permits (Move-In / Move-Out NOCs)?',
                'a' => 'Yes, almost all residential master developers and towers in Dubai (Emaar, Nakheel, DAMAC, Dubai Properties) require building permits before a moving truck can access the loading dock. We provide all company trade licenses, driver IDs, and vehicle insurance paperwork needed for your building NOC application.'
            ],
            [
                'q' => 'Can you move high-rise apartments with elevator restrictions?',
                'a' => 'Yes, we specialize in high-rise moves. Our crew coordinates with your building security, reserves service elevator slots, and protects elevators with padded covers and floor runners.'
            ],
            [
                'q' => 'How early should I book my move in Dubai?',
                'a' => 'We recommend booking 5 to 7 days in advance, especially for month-end dates and weekends when moving schedules and building service elevator slots fill quickly.'
            ]
        ],

        'International Moving' => [
            [
                'q' => 'Can I relocate from Dubai to another country with MOVEXA?',
                'a' => 'Yes, MOVEXA organizes international relocations from Dubai to destinations across the United Kingdom, Europe, North America, Australia, Asia, and the GCC through trusted ocean and air freight channels.'
            ],
            [
                'q' => 'What is the difference between FCL and LCL container shipping?',
                'a' => 'FCL (Full Container Load) means an entire 20ft or 40ft container is exclusively reserved for your belongings. LCL (Less than Container Load) is a shared container option where smaller volumes are safely enclosed in wooden lift-van crates, making it cost-efficient for smaller shipments.'
            ],
            [
                'q' => 'What documents are needed for an international moving quotation?',
                'a' => 'To prepare an accurate international quotation, we need: your current Dubai address, destination country and city, estimated moving date, preferred shipping method (sea FCL/LCL or air), and an inventory list of items to calculate cubic volume.'
            ],
            [
                'q' => 'Are shipping transit times and customs clearances guaranteed?',
                'a' => 'While we provide reliable estimated transit schedules, all maritime and air routes remain subject to carrier scheduling, transshipment weather, and official customs inspection and clearance at destination ports.'
            ]
        ],

        'Packing & Materials' => [
            [
                'q' => 'Do you provide all packing materials and boxes?',
                'a' => 'Yes, our comprehensive packing service includes industrial-grade 5-ply cartons, bubble wrap, packing paper, hanging wardrobe containers, tape, and protective mattress covers.'
            ],
            [
                'q' => 'How do you protect fragile items like mirrors, artwork, and TVs?',
                'a' => 'Fragile items are cushioned with multiple layers of bubble wrap, corner foam guards, and heavy corrugated outer shells. For valuable stone, glass, and chandeliers, we construct custom timber crates.'
            ],
            [
                'q' => 'Do you unpack boxes at our new home?',
                'a' => 'Yes! We offer full unpacking options where our team unboxes cartons, places items onto flat surfaces or shelves, and hauls away all used cardboard and packing debris.'
            ]
        ],

        'Office & Commercial Relocation' => [
            [
                'q' => 'Can our office move take place over the weekend to prevent downtime?',
                'a' => 'Yes, corporate moves are commonly scheduled starting Thursday afternoon or Friday through the weekend, allowing your business to reopen on Monday morning ready for operations.'
            ],
            [
                'q' => 'How do you handle computers, monitors, and server equipment?',
                'a' => 'All electronic equipment is individually wrapped in anti-static bubble wrap and packed into cushioned crates with labeled cable ties and screen protection.'
            ]
        ],

        'Furniture Services' => [
            [
                'q' => 'Do you dismantle and reassemble beds and wardrobes?',
                'a' => 'Yes, our team includes skilled carpenters and handymen who disassemble king/queen beds, modular wardrobes, dining tables, and assemble them back at your destination.'
            ],
            [
                'q' => 'Can you dismount wall-mounted TVs, mirrors, and curtains?',
                'a' => 'Yes, our handyman team can safely unmount televisions, paintings, mirrors, and curtain rods, packing them securely for transport.'
            ]
        ],

        'Quotation & Booking' => [
            [
                'q' => 'How do I request a moving quotation?',
                'a' => 'You can request a free quote through our interactive online form on this website, or connect directly with our moving advisors via WhatsApp or phone. We will review your volume and provide a clear, transparent proposal.'
            ],
            [
                'q' => 'Are there any hidden charges on moving day?',
                'a' => 'No. MOVEXA adheres to complete pricing transparency. Our proposals clearly outline what is included (materials, labor, transport, assembly) with zero unexpected surprise charges.'
            ]
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Verified Client Testimonials & Experiences
    |--------------------------------------------------------------------------
    */
    'testimonials' => [
        [
            'id' => 1,
            'name' => 'Alexander & Sarah Mitchell',
            'avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=240&h=240&q=80',
            'route' => 'Dubai Marina to Richmond, London, UK',
            'type' => 'International Sea Freight (FCL)',
            'rating' => 5,
            'date' => 'October 2026',
            'highlight' => 'Arrived without a single scratch in London',
            'comment' => 'MOVEXA handled our 3-bedroom apartment move from Dubai Marina to Richmond, London. The export packing team was punctual, respectful, and meticulously wrapped our glass dining table in custom timber crating. Our 40ft container arrived without a single scratch, and their UK customs ToR advice was spot on. Highly recommended!',
            'initials' => 'AM',
        ],
        [
            'id' => 2,
            'name' => 'Fatima Al-Hashemi',
            'avatar' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=240&h=240&q=80',
            'route' => 'Arabian Ranches to Palm Jumeirah, Dubai',
            'type' => '5-Bedroom Luxury Villa Relocation',
            'rating' => 5,
            'date' => 'September 2026',
            'highlight' => 'Kept a massive 5-bedroom villa move stress-free',
            'comment' => 'Moving a large 5-bedroom villa is usually overwhelming, but MOVEXA’s crew supervisor kept every detail organized from start to finish. Their specialized carpenters disassembled our custom Italian hydraulic bed and reassembled it flawlessly at our new Palm Jumeirah villa. Truly the best moving team in Dubai.',
            'initials' => 'FA',
        ],
        [
            'id' => 3,
            'name' => 'David Chen',
            'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=240&h=240&q=80',
            'route' => 'Downtown Dubai to Marina Bay, Singapore',
            'type' => 'Corporate Relocation & Sea Container',
            'rating' => 5,
            'date' => 'August 2026',
            'highlight' => 'Transparent port clearance & milestone tracking',
            'comment' => 'Transferred our family from Downtown Dubai to Singapore for a corporate assignment. MOVEXA managed container drayage through Jebel Ali Port and coordinated door-to-door delivery with their Singapore partners. Regular WhatsApp milestone updates gave us total peace of mind throughout the 18-day ocean transit.',
            'initials' => 'DC',
        ],
        [
            'id' => 4,
            'name' => 'Tariq & Reem Al-Kuwari',
            'avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=240&h=240&q=80',
            'route' => 'Business Bay to Al Nakheel, Riyadh, KSA',
            'type' => 'GCC Cross-Border Overland Transport',
            'rating' => 5,
            'date' => 'October 2026',
            'highlight' => 'Direct overland transit in just four days',
            'comment' => 'Relocated our entire household from Business Bay to Riyadh via MOVEXA’s dedicated overland box truck. The truck arrived at our Riyadh residence in just four days with all border customs manifests cleared at Batha without delay. Exceptional professionalism and care.',
            'initials' => 'TK',
        ],
        [
            'id' => 5,
            'name' => 'Marcus & Elena Vance',
            'avatar' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=240&h=240&q=80',
            'route' => 'Dubai Hills Estate to Toronto, Canada',
            'type' => 'Air & Maritime Relocation',
            'rating' => 5,
            'date' => 'July 2026',
            'highlight' => 'Flawless custom timber crating for delicate artwork',
            'comment' => 'We had fragile stone sculptures and large canvas paintings that required custom timber crating. The MOVEXA carpentry team built bespoke padded wooden crates on-site in our Dubai Hills villa. Everything reached Toronto in museum condition. Their attention to detail is second to none.',
            'initials' => 'MV',
        ],
        [
            'id' => 6,
            'name' => 'Dr. Rashid Al-Nuaimi',
            'avatar' => 'https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?auto=format&fit=crop&w=240&h=240&q=80',
            'route' => 'Jumeirah Golf Estates to Emirates Hills',
            'type' => 'Turnkey Local Villa Shifting',
            'rating' => 5,
            'date' => 'September 2026',
            'highlight' => 'White-glove moving crew and spotless packing',
            'comment' => 'The white-glove treatment was remarkable. MOVEXA laid heavy-duty floor runners to protect our marble flooring, protected all stair railings, and wrapped every piece of furniture in export-grade pads. By 6 PM on moving day, every room was completely unpacked and ready to live in.',
            'initials' => 'RA',
        ],
        [
            'id' => 7,
            'name' => 'Sophie Laurent',
            'avatar' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=240&h=240&q=80',
            'route' => 'DIFC to 16th Arrondissement, Paris, France',
            'type' => 'Diplomatic & Fine Furniture Relocation',
            'rating' => 5,
            'date' => 'June 2026',
            'highlight' => 'Smooth customs clearance at French Douane',
            'comment' => 'Relocating antique French furniture back to Paris was stressful until we spoke with MOVEXA. They cataloged every antique with bilingual French inventory sheets and handled French Douane customs with zero delays. A truly world-class international mover.',
            'initials' => 'SL',
        ],
        [
            'id' => 8,
            'name' => 'Michael & Jessica Miller',
            'avatar' => 'https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?auto=format&fit=crop&w=240&h=240&q=80',
            'route' => 'JBR Dubai to Sydney, Australia',
            'type' => 'International Ocean Freight & DAFF Biosecurity',
            'rating' => 5,
            'date' => 'May 2026',
            'highlight' => 'Passed Australian Biosecurity inspection seamlessly',
            'comment' => 'Australia has the strictest biosecurity quarantine regulations in the world. MOVEXA steam-cleaned our outdoor furniture, vacuumed rugs, and packed everything into sealed crates that passed DAFF inspection in Sydney on the very first round. Couldn’t be happier!',
            'initials' => 'MM',
        ],
    ],
];
