@extends('layouts.app')

@section('title', $service['title'] . ' in Dubai | MOVEXA Relocations')
@section('meta_description', $service['short_desc'])

@section('content')

{{-- Breadcrumb --}}
<x-breadcrumb :items="[
    ['label' => 'Our Services', 'url' => route('services.index')],
    ['label' => $service['title'], 'url' => '']
]" />

@php
$heroConfigs = [
    'villa-moving' => [
        'badge' => 'LUXURY VILLA & PRIVATE ESTATE SPECIALIST',
        'badge_icon' => 'fa-landmark-dome',
        'badge_color' => 'text-[#D8F36B] border-[#D8F36B]/40',
        'bg_image' => asset('images/services/movexa-service-villa-relocation.webp'),
        'hero_image' => asset('images/services/movexa-service-villa-relocation.webp'),
        'quote_label' => 'Get Villa Moving Quote',
        'stat1_val' => 'Master Carpenters', 'stat1_lbl' => 'Furniture Dismantling & Assembly',
        'stat2_val' => 'Custom Crating', 'stat2_lbl' => 'Fine Art, Chandeliers & Marble',
        'stat3_val' => 'Move Supervisor', 'stat3_lbl' => 'Dedicated On-Site Team Lead',
        'guarantee_tag' => 'Exclusive Villa Care',
        'guarantee_desc' => 'Arabian Ranches, Palm Jumeirah & Emirates Hills Specialist',
        'theme_gradient' => 'from-[#06241D] via-[#09352A] to-[#041914]',
        'accent_tag' => 'Private Estate Protocol',
    ],
    'apartment-moving' => [
        'badge' => 'HIGH-RISE TOWER & APARTMENT LOGISTICS',
        'badge_icon' => 'fa-building',
        'badge_color' => 'text-sky-300 border-sky-400/40',
        'bg_image' => asset('images/services/movexa-service-apartment-moving.webp'),
        'hero_image' => asset('images/gallery/movexa-gallery-apartment-packing-crew.webp'),
        'quote_label' => 'Get Apartment Moving Quote',
        'stat1_val' => 'Building NOCs', 'stat1_lbl' => 'Emaar, Nakheel & DAMAC Permits',
        'stat2_val' => 'Elevator Priority', 'stat2_lbl' => 'Wall & Elevator Protective Padding',
        'stat3_val' => 'Basement Fleet', 'stat3_lbl' => 'Low-Clearance Tailored Moving Vans',
        'guarantee_tag' => 'Tower Management Clearance',
        'guarantee_desc' => 'Downtown, Dubai Marina, JBR & Business Bay Logistics',
        'theme_gradient' => 'from-[#06211C] via-[#08332C] to-[#051C17]',
        'accent_tag' => 'Dubai High-Rise Specialist',
    ],
    'office-relocation' => [
        'badge' => 'CORPORATE COMMERCIAL & IT MOBILITY',
        'badge_icon' => 'fa-briefcase',
        'badge_color' => 'text-indigo-200 border-indigo-400/40',
        'bg_image' => asset('images/services/movexa-service-office-relocation.webp'),
        'hero_image' => asset('images/services/movexa-service-office-relocation.webp'),
        'quote_label' => 'Get Corporate Office Quote',
        'stat1_val' => 'Zero Downtime', 'stat1_lbl' => 'Weekend & Night After-Hours Moves',
        'stat2_val' => 'Anti-Static IT', 'stat2_lbl' => 'Server & Workstation Asset Tagging',
        'stat3_val' => 'Modular Assembly', 'stat3_lbl' => 'Desks, Meeting Rooms & Partitions',
        'guarantee_tag' => 'Business Continuity Assured',
        'guarantee_desc' => 'DIFC, Business Bay, Media City & DWTC Corporate Moves',
        'theme_gradient' => 'from-[#051D19] via-[#083028] to-[#041714]',
        'accent_tag' => 'Zero Business Disruption',
    ],
    'home-moving' => [
        'badge' => 'RESIDENTIAL HOME SHIFTING SPECIALISTS',
        'badge_icon' => 'fa-house-chimney',
        'badge_color' => 'text-emerald-200 border-emerald-400/40',
        'bg_image' => asset('images/services/movexa-service-home-moving.webp'),
        'hero_image' => asset('images/services/movexa-service-home-moving.webp'),
        'quote_label' => 'Get Home Moving Quote',
        'stat1_val' => '5-Ply Cartons', 'stat1_lbl' => 'Heavy-Duty Color-Coded Room Boxing',
        'stat2_val' => 'Wardrobes', 'stat2_lbl' => 'Hanging Clothes Wardrobe Crates',
        'stat3_val' => 'Same-Day Survey', 'stat3_lbl' => 'Instant Virtual Video or Home Survey',
        'guarantee_tag' => 'Turnkey Home Relocation',
        'guarantee_desc' => 'Full-Service Moving Across Dubai & All 7 UAE Emirates',
        'theme_gradient' => 'from-[#06261E] via-[#0A382C] to-[#051E17]',
        'accent_tag' => 'Turnkey Family Moving',
    ],
    'international-moving' => [
        'badge' => 'GLOBAL RELOCATIONS & MARITIME FREIGHT',
        'badge_icon' => 'fa-plane-departure',
        'badge_color' => 'text-cyan-200 border-cyan-400/40',
        'bg_image' => asset('images/services/movexa-service-international-moving.webp'),
        'hero_image' => asset('images/services/movexa-service-international-moving.webp'),
        'quote_label' => 'Get International Moving Quote',
        'stat1_val' => 'FCL / LCL Sea', 'stat1_lbl' => 'Full Container & Shared Cargo Freight',
        'stat2_val' => 'Export Crates', 'stat2_lbl' => 'Seaworthy 5-Ply Packaging & Crating',
        'stat3_val' => 'Customs Cleared', 'stat3_lbl' => 'Global Port Clearance & Home Delivery',
        'guarantee_tag' => 'Worldwide Relocation Network',
        'guarantee_desc' => 'UK, Europe, USA, Canada, Australia, GCC & Worldwide',
        'theme_gradient' => 'from-[#05201C] via-[#08342E] to-[#041916]',
        'accent_tag' => 'Global Transit & Customs',
    ],
    'storage-solutions' => [
        'badge' => 'SECURE CLIMATE-CONTROLLED STORAGE VAULTS',
        'badge_icon' => 'fa-warehouse',
        'badge_color' => 'text-amber-300 border-amber-400/40',
        'bg_image' => asset('images/services/movexa-service-storage-solutions.webp'),
        'hero_image' => asset('images/services/movexa-service-storage-solutions.webp'),
        'quote_label' => 'Reserve Storage Space',
        'stat1_val' => '100% AC Controlled', 'stat1_lbl' => '24/7 Humidity & Temperature Regulated',
        'stat2_val' => '24/7 CCTV & Security', 'stat2_lbl' => 'Biometric Gated Access & Fire Safety',
        'stat3_val' => 'Flexible Terms', 'stat3_lbl' => 'Weekly, Monthly & Annual Lease Plans',
        'guarantee_tag' => 'Secure Warehouse Vaults',
        'guarantee_desc' => 'Al Quoz, Dubai Investment Park (DIP) & JAFZA Units',
        'theme_gradient' => 'from-[#061D17] via-[#092E24] to-[#051713]',
        'accent_tag' => 'Climate & Pest Controlled',
    ],
    'door-to-door-moving' => [
        'badge' => 'ALL-INCLUSIVE DOOR-TO-DOOR CONCIERGE',
        'badge_icon' => 'fa-door-open',
        'badge_color' => 'text-[#B7E532] border-[#B7E532]/50',
        'bg_image' => asset('images/gallery/movexa-gallery-crew-fleet-ramp.webp'),
        'hero_image' => asset('images/gallery/movexa-gallery-full-service-montage.webp'),
        'quote_label' => 'Get Turnkey Moving Quote',
        'stat1_val' => 'Zero Effort', 'stat1_lbl' => 'Complete Packing, Transit & Setup',
        'stat2_val' => 'Turnkey Placement', 'stat2_lbl' => 'Room-by-Room Furniture & Unpacking',
        'stat3_val' => 'All-Risk Cover', 'stat3_lbl' => 'Comprehensive Moving Transit Warranty',
        'guarantee_tag' => 'Complete Moving Concierge',
        'guarantee_desc' => 'Key Handover at Origin to Ready-to-Live at Destination',
        'theme_gradient' => 'from-[#06241D] via-[#0A372C] to-[#051C16]',
        'accent_tag' => '100% White Glove Turnkey',
    ],
    'packing-services' => [
        'badge' => 'INDUSTRIAL-GRADE PACKING & TIMBER CRATING',
        'badge_icon' => 'fa-boxes-packing',
        'badge_color' => 'text-lime-300 border-lime-400/40',
        'bg_image' => asset('images/gallery/movexa-gallery-fragile-room-packing.webp'),
        'hero_image' => asset('images/gallery/movexa-gallery-fragile-room-packing.webp'),
        'quote_label' => 'Get Packing Service Quote',
        'stat1_val' => '5-Ply Cartons', 'stat1_lbl' => 'Heavy-Duty Corrugated Boxes',
        'stat2_val' => 'Fine Porcelain', 'stat2_lbl' => 'Acid-Free Tissue & Bubble Cells',
        'stat3_val' => 'Custom Crates', 'stat3_lbl' => 'Tailor-Made Timber Enclosures',
        'guarantee_tag' => 'Export-Standard Packing',
        'guarantee_desc' => 'Maximum Shock Absorption & Moisture Defense',
        'theme_gradient' => 'from-[#06241D] via-[#09352A] to-[#051C15]',
        'accent_tag' => 'Certified Packing Crew',
    ],
    'furniture-dismantling' => [
        'badge' => 'MASTER CARPENTRY & FURNITURE ASSEMBLY',
        'badge_icon' => 'fa-screwdriver-wrench',
        'badge_color' => 'text-amber-200 border-amber-400/40',
        'bg_image' => asset('images/gallery/movexa-gallery-sofa-living-room-wrapping.webp'),
        'hero_image' => asset('images/gallery/movexa-gallery-villa-sofa-loading.webp'),
        'quote_label' => 'Book Carpentry Assembly',
        'stat1_val' => 'Master Carpenters', 'stat1_lbl' => 'Hydraulic Beds & Sliding Wardrobes',
        'stat2_val' => 'Hardware Bagged', 'stat2_lbl' => 'Zero Lost Bolts or Fasteners',
        'stat3_val' => 'Wall Unmounting', 'stat3_lbl' => 'OLED TVs, Chandeliers & Mirrors',
        'guarantee_tag' => 'Joinery Integrity Guaranteed',
        'guarantee_desc' => 'IKEA, Italian & Solid Hardwood Specialist Rebuild',
        'theme_gradient' => 'from-[#06241D] via-[#093226] to-[#051B14]',
        'accent_tag' => 'Certified Joinery Division',
    ],
];

$slug = $service['slug'] ?? '';
$hero = $heroConfigs[$slug] ?? [
    'badge' => 'MOVEXA SERVICE SPECIALIZATION',
    'badge_icon' => $service['icon'] ?? 'fa-truck-moving',
    'badge_color' => 'text-[#D8F36B] border-white/20',
    'bg_image' => $service['image'] ?? asset('images/services/movexa-service-home-moving.webp'),
    'hero_image' => $service['image'] ?? asset('images/services/movexa-service-home-moving.webp'),
    'quote_label' => 'Get ' . ($service['title'] ?? 'Moving') . ' Quote',
    'stat1_val' => '100% Vetted', 'stat1_lbl' => 'Trained Full-Time Moving Crew',
    'stat2_val' => 'On-Time', 'stat2_lbl' => 'Punctual Dispatch Across Dubai',
    'stat3_val' => 'Zero Damage', 'stat3_lbl' => 'Full-Cover Transit Protection',
    'guarantee_tag' => ($service['title'] ?? 'Service') . ' Guarantee',
    'guarantee_desc' => 'Professional Relocation Across Dubai & All 7 UAE Emirates',
    'theme_gradient' => 'from-[#06251E] via-[#09352A] to-[#051C16]',
    'accent_tag' => 'Certified Moving Protocol',
];

$narrativeSectionTitles = [
    'home-moving' => [
        'title' => 'Complete Home Moving in Dubai: Step-by-Step Excellence',
        'subtitle' => 'From initial inventory survey to your first night settling comfortably in your new residence, discover how MOVEXA orchestrates your household relocation with white-glove care.',
    ],
    'apartment-moving' => [
        'title' => 'High-Rise Apartment Moving: Precision Logistics & Protection',
        'subtitle' => 'Mastering elevator slots, basement loading bays, and developer permits across Dubai Marina, Downtown, and Business Bay.',
    ],
    'villa-moving' => [
        'title' => 'Luxury Villa Relocation: White-Glove Estate Handling',
        'subtitle' => 'Turnkey moving for multi-level private estates across Palm Jumeirah, Arabian Ranches, Dubai Hills, and Emirates Hills.',
    ],
    'office-relocation' => [
        'title' => 'Corporate Office Moving: Zero-Downtime Business Mobility',
        'subtitle' => 'Weekend and after-hours commercial moves designed to protect critical IT assets and ensure uninterrupted business continuity.',
    ],
    'storage-solutions' => [
        'title' => 'Secure Storage Solutions: Climate-Controlled Warehouse Care',
        'subtitle' => 'Dust-proof vault storage in Dubai with 24/7 CCTV surveillance, humidity regulation, and scheduled door-to-door delivery.',
    ],
    'door-to-door-moving' => [
        'title' => 'Door-to-Door Concierge: Complete Hands-Off Relocation',
        'subtitle' => 'We pack every drawer, manage all building logistics, transport your belongings, and set up your new home down to the last detail.',
    ],
    'international-moving' => [
        'title' => 'Worldwide International Moving: Export Standards & Global Freight',
        'subtitle' => 'Export-grade seaworthy packing, customs paperwork compliance, and door-to-door shipping from Dubai to destinations worldwide.',
    ],
    'packing-services' => [
        'title' => 'Professional Packing & Timber Crating: Maximum Protection',
        'subtitle' => 'Industrial-strength 5-ply cartons, shock-absorbing materials, and bespoke wooden crates built to safeguard your most precious belongings.',
    ],
    'furniture-dismantling' => [
        'title' => 'Master Carpentry: Furniture Dismantling & Precision Assembly',
        'subtitle' => 'Full-time certified carpenters equipped with precision tools to deconstruct complex beds, wardrobes, and wall fixtures with zero damage.',
    ],
];

$narrativeSections = [
    'home-moving' => [
        [
            'tag' => 'Phase 01 • Survey & Permitting',
            'title' => '1. Dedicated Home Survey & Dubai Community NOC Approvals',
            'subtitle' => 'Pre-move volume calculation, fragile inventory audit, and developer permit clearance.',
            'image' => asset('images/gallery/movexa-gallery-organized-room-packing.webp'),
            'caption' => 'MOVEXA relocation advisor conducting pre-move inventory and room-by-room staging in Dubai.',
            'p1' => 'Every smooth home move across Dubai begins with meticulous survey planning. Prior to packing a single box, MOVEXA provides a comprehensive on-site or high-definition virtual video survey of your home. Our seasoned relocation coordinators inventory every room, measure large furniture pieces, identify delicate heirlooms (such as crystal chandeliers, antique sideboards, and oil paintings), and establish a transparent, fixed-price quotation with guaranteed zero move-day surprise surcharges.',
            'p2' => 'Navigating Dubai’s residential communities requires formal administrative authorization. Our dedicated operations desk takes full charge of securing official Move-Out and Move-In NOC (No Objection Certificate) approvals across all major UAE master developers—including Emaar Properties (Downtown, Dubai Marina, Arabian Ranches), Nakheel (Palm Jumeirah, JVC), DAMAC Hills, and Dubai Properties. We coordinate directly with building facilities management to reserve priority freight elevator windows and secure basement loading bay clearance.',
            'pills' => ['Free On-Site or Video Survey', 'Master Developer NOC Assistance', 'Service Elevator Reservations', 'Zero Tenancy Deposit Penalties'],
        ],
        [
            'tag' => 'Phase 02 • White-Glove Packing',
            'title' => '2. Heavy-Duty 5-Ply Packing & White-Glove Fragile Protection',
            'subtitle' => 'Industrial-grade 5-ply cartons, shock-absorbing bubble wrap, and cell dividers.',
            'image' => asset('images/gallery/movexa-gallery-fragile-room-packing.webp'),
            'caption' => 'Certified MOVEXA packing crew wrapping fine porcelain, crystal, and kitchenware with multi-layer cushioning.',
            'p1' => 'Fragile kitchen glassware, porcelain dinner sets, and delicate decorative collectibles require far more protection than standard cardboard. MOVEXA exclusively utilizes industrial-grade, export-strength 5-ply corrugated cardboard cartons engineered to resist humidity and crushing. Every piece of china and stemware is individually swaddled in acid-free tissue paper to protect glaze and metal gilding, followed by high-density polyethylene bubble cushioning before placement into reinforced dish-pack barrels with cellular dividing partitions.',
            'p2' => 'For bedrooms and master walk-in dressing rooms, we deploy tall hanging wardrobe boxes outfitted with rigid metal hanger bars. Your designer garments, formal suits, dresses, and abayas transfer directly from your closet hangers into the protective wardrobe container without folding or wrinkling. All mattresses are sealed inside thick 100-micron waterproof, hypoallergenic protective slipcovers before being carried out, shielding them from ambient dust and elevator contact.',
            'pills' => ['5-Ply Corrugated Heavy Cartons', 'Dish-Packs with Cellular Dividers', 'Crease-Free Hanging Wardrobes', 'Sealed Hypoallergenic Mattress Covers'],
        ],
        [
            'tag' => 'Phase 03 • Certified Carpentry',
            'title' => '3. Master Carpentry: Hydraulic Beds, Modular Wardrobes & TV Dismounting',
            'subtitle' => 'Precision furniture deconstruction, labeled hardware bagging, and wall unmounting.',
            'image' => asset('images/gallery/movexa-gallery-sofa-living-room-wrapping.webp'),
            'caption' => 'Full-time MOVEXA carpenters dismantling hydraulic bed frames and wrapping structural components.',
            'p1' => 'Modern residential furnishings feature sophisticated mechanical joinery that cannot safely pass through standard doorways intact without structural strain. MOVEXA assigns certified, full-time master carpenters to every household move. Our technicians specialize in dismantling complex hydraulic gas-lift storage beds, multi-sliding door wardrobes, Italian designer consoles, and executive dining tables. Every frame is protected with padded edge guards and heavy stretch wrap.',
            'p2' => 'Hardware security is our strict operational standard: all bolts, cams, hinges, and fasteners are sealed inside heavy-duty Ziploc bags and taped directly to their corresponding furniture frame, eliminating the nightmare of lost screws. Our handyman team safely dismounts wall-mounted OLED/QLED televisions, heavy ornate mirrors, designer wall sconces, and curtain rods, packing all brackets, cables, and hardware securely in protective foam-lined crates.',
            'pills' => ['Hydraulic Bed Gas-Lift Disassembly', 'Taped & Labeled Hardware Bags', 'Wall-Mounted TV & Mirror Dismount', 'Precision Re-Leveling at Destination'],
        ],
        [
            'tag' => 'Phase 04 • Secure Fleet Haulage',
            'title' => '4. Covered, Carpet-Lined Moving Fleet & Weatherproof Transit',
            'subtitle' => 'Closed weatherproof cargo boxes, carpet-lined interiors, and real-time GPS tracking.',
            'image' => asset('images/gallery/movexa-gallery-truck-house-fleet.webp'),
            'caption' => 'MOVEXA\'s enclosed, clean-air moving fleet navigating Dubai residential communities.',
            'p1' => 'Dubai’s harsh midday heat, dust, and coastal humidity can cause warping and surface degradation if furniture is exposed during transit. MOVEXA operates a private fleet of 100% enclosed, weatherproof box trucks. The cargo compartment of every vehicle is lined with thick impact-absorbing industrial carpeting on the walls and deck, paired with aircraft-grade ratchet lashing tracks that anchor furniture firmly to prevent sliding or contact vibration during highway travel.',
            'p2' => 'Our fleet is equipped with heavy-duty hydraulic tail-lift ramps with 1,500 kg capacities, ensuring heavy marble tabletops, solid timber credenzas, and large refrigerators are loaded onto the truck horizontally without tipping or mechanical shock. With satellite GPS telematics connected across our fleet, our central Dubai dispatch team continuously monitors routes from Downtown Dubai to Arabian Ranches, Abu Dhabi, or the Northern Emirates.',
            'pills' => ['100% Enclosed Box Moving Trucks', 'Carpet-Lined Interior Walls & Decks', 'Hydraulic 1,500kg Tail-Lift Gates', 'Live Satellite GPS Route Telematics'],
        ],
        [
            'tag' => 'Phase 05 • Turnkey Setup & Cleanup',
            'title' => '5. Turnkey Destination Setup, Assembly & 100% Eco-Friendly Waste Removal',
            'subtitle' => 'Room-by-room box staging, complete furniture reassembly, and debris clear-out.',
            'image' => asset('images/hero/movexa-hero-villa-unloading.webp'),
            'caption' => 'MOVEXA moving crew reassembling furniture and organizing rooms at destination residence.',
            'p1' => 'Arriving at your new home should be a milestone to enjoy, not a stressful night spent in a maze of stacked boxes. Upon arrival at your destination, our move supervisor stations crew members in designated rooms according to your pre-agreed floor plan. Using our room-by-room color-coding system, every carton is placed directly into its target space (Master Suite, Kids\' Bedroom, Living Room, Kitchen Pantry) without cluttering hallways.',
            'p2' => 'Our carpenters immediately reconstruct all beds, wardrobes, and dining tables, testing leveling feet and drawer glides to guarantee perfect stability. Upon request, we unpack kitchen essentials, glassware, and wardrobe items onto flat surfaces so you can start living comfortably immediately. Before departing, our team collects every single discarded carton, roll of tape, and bubble wrap scrap, hauling it away for responsible eco-friendly recycling.',
            'pills' => ['Color-Coded Room-by-Room Staging', 'Complete Bed & Wardrobe Assembly', 'Unpacking of Essential Surfaces', '100% Packaging Debris Removal'],
        ],
    ],
    'apartment-moving' => [
        [
            'tag' => 'Phase 01 • High-Rise Logistics',
            'title' => '1. Service Elevator Bookings & Low-Clearance Basement Parking',
            'subtitle' => 'Coordinating loading docks, height clearances, and tower security passes.',
            'image' => asset('images/gallery/movexa-gallery-apartment-packing-crew.webp'),
            'caption' => 'MOVEXA team navigating Dubai high-rise loading docks and elevator bays.',
            'p1' => 'Apartment moving in Dubai towers requires strict adherence to building rules. Most residential high-rises in Downtown Dubai, Dubai Marina, and Business Bay have strict service elevator booking windows and security gate access rules. MOVEXA handles your building management paperwork in advance, securing priority freight elevator reservations and providing the necessary company trade license and insurance certificates to building management.',
            'p2' => 'Our specialized apartment fleet includes low-clearance moving vehicles specifically engineered to navigate underground parking basements with 2.2m to 2.8m ceiling heights. This eliminates the need to push trolleys across long outdoor driveways in extreme weather, keeping your move efficient, dry, and protected from the elements.',
            'pills' => ['Elevator Reservation Assistance', 'Low-Clearance Basement Trucks', 'Security Gate Documentation', 'Zero Building Delay Fines'],
        ],
        [
            'tag' => 'Phase 02 • Property Protection',
            'title' => '2. Hallway Floor Runners, Door-Jamb Shields & Elevator Blanketing',
            'subtitle' => 'Comprehensive building protection to safeguard your tenancy security deposit.',
            'image' => asset('images/services/movexa-service-apartment-moving.webp'),
            'caption' => 'MOVEXA crew applying protective wall padding and door guards during apartment transit.',
            'p1' => 'Dubai building owners and facilities managers strictly penalize moving companies for any scuffs or scratches in public corridors or elevators. MOVEXA treats every building with utmost respect by laying heavy neoprene floor runners along common hallways, wrapping elevator interiors in padded moving blankets, and installing rigid foam corner guards on vulnerable door jambs.',
            'p2' => 'Our moving crews use non-marking rubberized castor wheels on all flatbeds and dollies to prevent scuffs on polished marble and porcelain lobby tiles. This thorough care ensures that building inspections pass smoothly with zero deductions from your tenancy security deposit.',
            'pills' => ['Elevator Padded Quilted Blankets', 'Hallway Heavy-Duty Floor Runners', 'Rubberized Non-Marking Dollies', 'Zero Security Deposit Deductions'],
        ],
        [
            'tag' => 'Phase 03 • Swift Execution',
            'title' => '3. Rapid Moving Turnaround & Fast-Track Destination Move-In',
            'subtitle' => 'Careful apartment setup completed well within building operating hours.',
            'image' => asset('images/gallery/movexa-gallery-crew-fleet-ramp.webp'),
            'caption' => 'MOVEXA loading team ensuring punctual arrival and delivery according to elevator slots.',
            'p1' => 'Dubai residential towers strictly prohibit moving activities after 6:00 PM and on Sundays. Our apartment relocation crews are sized strategically—typically deploying 4 to 6 trained movers and an experienced team leader—to ensure all packing, loading, and transit occur strictly within permitted hours.',
            'p2' => 'At your new apartment, furniture is quickly positioned, beds are assembled, and flat-screen TVs are re-mounted onto wall brackets. All moving boxes are stacked neatly in corresponding rooms, leaving corridors clear and walkways completely unobstructed.',
            'pills' => ['Sized Crews for Rapid Moves', 'Strict Compliance with Quiet Hours', 'Immediate Bed & Furniture Rebuild', 'Clear Walkways & Hallways'],
        ],
    ],
    'villa-moving' => [
        [
            'tag' => 'Phase 01 • Estate Supervision',
            'title' => '1. Dedicated Move Supervisor & Multi-Truck Fleet Coordination',
            'subtitle' => 'Full-scale logistics for large properties across Dubai’s luxury gated communities.',
            'image' => asset('images/gallery/movexa-gallery-villa-relocation-loading.webp'),
            'caption' => 'MOVEXA villa moving crew staging multi-truck loading at luxury residential estate.',
            'p1' => 'Moving a multi-level villa in communities such as Palm Jumeirah, Arabian Ranches, Emirates Hills, or Dubai Hills Estate requires comprehensive logistics. MOVEXA assigns a senior on-site move supervisor who oversees every phase of the relocation. We allocate multiple dedicated covered moving trucks simultaneously, allowing large households to be relocated efficiently in a single coordinated day rather than dragging across several stressful days.',
            'p2' => 'Our supervisor manages security gate entry passes, community contractor permits, and neighborhood parking coordination, ensuring our fleet operates smoothly without disturbing surrounding neighbors.',
            'pills' => ['Dedicated Senior Move Supervisor', 'Multi-Truck Fleet Deployments', 'Gated Community Gate Passes', 'Single-Day Relocation Efficiency'],
        ],
        [
            'tag' => 'Phase 02 • Bespoke Crating',
            'title' => '2. Custom Timber Crating for Fine Art, Chandeliers & Sculptures',
            'subtitle' => 'Museum-grade packaging for high-value artwork, marble, and crystal.',
            'image' => asset('images/gallery/movexa-gallery-villa-sofa-loading.webp'),
            'caption' => 'Protective wrapping and specialized loading of luxury furniture and decorative artwork.',
            'p1' => 'Luxury villas house valuable collections: grand crystal chandeliers, delicate marble console tables, rare oil paintings, and bronze sculptures. MOVEXA builds tailor-made wooden crates lined with high-density shock-absorbing foam specifically shaped to the dimensions of each item, eliminating any risk of impact damage.',
            'p2' => 'Our certified master carpenters dismantle oversized multi-door designer wardrobes, custom sectional sofas, and king-size hydraulic beds, bagging and barcoding all hardware fasteners directly onto structural components.',
            'pills' => ['Custom Timber Museum Crating', 'Shock-Absorbing Molded Foam', 'Chandeliers & Fine Art Crating', 'Hardware Barcoding & Bagging'],
        ],
        [
            'tag' => 'Phase 03 • Turnkey Estate Setup',
            'title' => '3. Multi-Level Staircase Blanketing & Complete Landscape Furnishing',
            'subtitle' => 'Protecting parquet, bannisters, and setting up outdoor patios and gardens.',
            'image' => asset('images/hero/movexa-hero-villa-unloading.webp'),
            'caption' => 'MOVEXA team safely unloading furnishings at destination luxury villa.',
            'p1' => 'During villa moves, expansive staircases and custom flooring require specialized shielding. We install heavy quilted stair runners and bannister wraps along multi-story staircases, preventing scratches while transporting bulky bedroom furniture upstairs.',
            'p2' => 'We also handle outdoor patio dining suites, daybeds, and heavy garden planters with specialized equipment, positioning them precisely according to your outdoor landscape layout. All packing debris is cleared away, leaving your luxury estate pristine and ready to enjoy.',
            'pills' => ['Bannister & Staircase Shields', 'Outdoor Patio & Garden Furniture', 'Room-by-Room White-Glove Setup', 'Complete Packaging Waste Removal'],
        ],
    ],
    'office-relocation' => [
        [
            'tag' => 'Phase 01 • Business Continuity',
            'title' => '1. Weekend & Overnight Zero-Downtime Corporate Shifting',
            'subtitle' => 'Scheduled commercial moves designed to keep your business operating without interruption.',
            'image' => asset('images/why-choose-us/movexa-why-choose-us-team-skyline.webp'),
            'caption' => 'MOVEXA corporate relocation team executing office transition in Dubai Business Bay.',
            'p1' => 'Downtime means lost revenue. MOVEXA specializes in structured weekend and after-hours corporate office relocations across DIFC, Downtown, Business Bay, Media City, and Dubai Silicon Oasis. We begin packing on Friday afternoon, transport over the weekend, and ensure your entire company is fully operational by Monday 8:00 AM.',
            'p2' => 'Our corporate project manager works alongside your HR and facilities department, creating an itemized workstation census and floor-plan coding system that eliminates employee confusion on move-in morning.',
            'pills' => ['Zero Business Downtime Guarantee', 'Weekend & Overnight Shifting', 'Dedicated Corporate Account Lead', 'Building Loading Bay Logistics'],
        ],
        [
            'tag' => 'Phase 02 • IT Equipment Care',
            'title' => '2. Anti-Static IT Server, Workstation & Cable Asset Tagging',
            'subtitle' => 'Specialized anti-static packaging for servers, desktop PCs, and monitors.',
            'image' => asset('images/services/movexa-service-office-relocation.webp'),
            'caption' => 'Careful handling and protective packing of commercial IT electronics and workstations.',
            'p1' => 'Commercial technology assets require specialized protective standards. MOVEXA packs desktop PCs, monitors, and server components using certified anti-static bubble wrap and foam-lined electronics containers. Cables, keyboards, and peripherals are tagged and sealed in numbered individual bags corresponding to each employee’s desk.',
            'p2' => 'Confidential corporate files, legal documents, and financial records are packed into heavy-duty plastic security crates equipped with numbered, tamper-evident security seal ties, guaranteeing privacy throughout transit.',
            'pills' => ['Anti-Static Bubble Wrap Protection', 'Desk & Cable Numbered Tagging', 'Tamper-Evident Security Seal Crates', 'Server Rack Safe Handling'],
        ],
        [
            'tag' => 'Phase 03 • Office Floorplan Rebuild',
            'title' => '3. Modular Desk Disassembly, File Crates & Floorplan Reconfiguration',
            'subtitle' => 'Carpentry teams assemble cubicles, meeting rooms, and executive suites to CAD layouts.',
            'image' => asset('images/gallery/movexa-gallery-warehouse-packing.webp'),
            'caption' => 'Systematic office furniture staging and assembly according to corporate floorplan.',
            'p1' => 'Our corporate carpenters dismantle and rebuild complex modular workstations, multi-person bench desks, acoustic privacy screens, and executive conference tables according to your architectural CAD drawings.',
            'p2' => 'At destination, crates are distributed directly onto their respective desks, ready for employees to unpack their personal belongings and resume work without a single lost working hour.',
            'pills' => ['Modular Workstation Carpentry', 'Acoustic Screen Re-Installation', 'Direct Employee Desk Staging', 'Debris & Packaging Clear-Out'],
        ],
    ],
    'storage-solutions' => [
        [
            'tag' => 'Phase 01 • Climate Vaults',
            'title' => '1. 100% Climate-Controlled & Humidity-Regulated Storage Vaults',
            'subtitle' => 'Preserving furniture and household goods in Dubai’s extreme heat and humidity.',
            'image' => asset('images/gallery/movexa-gallery-warehouse-packing.webp'),
            'caption' => 'MOVEXA climate-controlled secure warehouse facility in Dubai.',
            'p1' => 'Dubai’s summer temperatures exceeding 45°C and coastal humidity can warp wood, crack leather, and damage delicate artwork if stored in unconditioned spaces. MOVEXA’s storage facility operates 24/7 industrial HVAC systems maintaining constant temperature (20°C–23°C) and controlled humidity levels year-round.',
            'p2' => 'Our storage facility is protected by 24/7 CCTV surveillance, biometric access gates, comprehensive fire suppression systems, and regular civil-defense-certified pest control treatments.',
            'pills' => ['24/7 Climate & Humidity Control', 'Continuous CCTV Surveillance', 'Biometric Gated Access Security', 'Clean & Certified Pest-Controlled'],
        ],
        [
            'tag' => 'Phase 02 • Dust-Proof Blanketing',
            'title' => '2. Dust-Proof Furniture Blanketing & Barcoded Inventory Tracking',
            'subtitle' => 'Individual piece wrapping and systematic digital inventory registers.',
            'image' => asset('images/services/movexa-service-storage-solutions.webp'),
            'caption' => 'Protective wrapping and vault placement of furniture items for secure storage.',
            'p1' => 'Before items enter our storage vaults, they receive comprehensive protective wrapping. Sofas and upholstered items are wrapped in breathable furniture blankets and heavy shrink wrap to prevent dust accumulation. Mattresses and soft goods are placed into sealed protective covers.',
            'p2' => 'Every single piece is tagged with a unique barcode and cataloged on a digital inventory register provided to you, ensuring you know exactly where every item is located throughout its storage term.',
            'pills' => ['Breathable Heavy Furniture Pads', 'Dust-Free Moisture Barriers', 'Barcoded Digital Inventory Registers', 'Elevated Wooden Pallet Vaults'],
        ],
        [
            'tag' => 'Phase 03 • Flexible Logistics',
            'title' => '3. Scheduled Door-to-Door Pickup & Flexible Redelivery Terms',
            'subtitle' => 'Convenient weekly, monthly, or annual plans with turnkey move-in when you are ready.',
            'image' => asset('images/gallery/movexa-gallery-dual-trucks-community.webp'),
            'caption' => 'MOVEXA moving trucks managing scheduled storage collection and redelivery.',
            'p1' => 'You do not need to lift a finger to store your belongings. MOVEXA provides turnkey pickup from your home, transports items directly to our warehouse, and loads them safely into your designated vault.',
            'p2' => 'When your new home or renovation is completed, simply give us notice and our team will load your vault and deliver it directly to your new address, reassembling all furniture on the spot.',
            'pills' => ['Door-to-Door Pickup & Delivery', 'Weekly & Monthly Flexible Contracts', 'Simple Retrieval Notice', 'Full Assembly Upon Redelivery'],
        ],
    ],
    'door-to-door-moving' => [
        [
            'tag' => 'Phase 01 • Total Concierge',
            'title' => '1. Full Concierge Packing: We Pack Every Drawer, Closet & Cabinet',
            'subtitle' => 'Zero effort required: our trained specialists handle all inventory wrapping.',
            'image' => asset('images/gallery/movexa-gallery-organized-room-packing.webp'),
            'caption' => 'MOVEXA white-glove packers carefully organizing household items for door-to-door move.',
            'p1' => 'Our door-to-door relocation concierge is designed for busy professionals and families who want a completely stress-free moving experience. You do not need to pack a single box or roll of tape. Our trained packing crews arrive with all necessary 5-ply cartons, bubble wrap, and wardrobe boxes to pack your entire home room by room.',
            'p2' => 'Every drawer, linen closet, bookshelf, and kitchen pantry is packed systematically, labeled clearly, and inventoried so that finding your belongings at the new address is effortless.',
            'pills' => ['100% Hands-Off Moving Experience', 'All Packing Supplies Included', 'Systematic Room & Box Labeling', 'Dedicated Moving Concierge Lead'],
        ],
        [
            'tag' => 'Phase 02 • Seamless Transit',
            'title' => '2. Complete Logistics Management: Permits, Parking & Freight Haulage',
            'subtitle' => 'Managing all building paperwork, service lifts, and safe enclosed transport.',
            'image' => asset('images/gallery/movexa-gallery-crew-fleet-ramp.webp'),
            'caption' => 'MOVEXA crew loading covered moving truck via hydraulic ramp for secure transit.',
            'p1' => 'From securing community gate passes in Arabian Ranches or Jumeirah Golf Estates to coordinating freight elevators in Downtown Dubai, MOVEXA handles the entire logistical journey from origin threshold to destination threshold.',
            'p2' => 'Belongings travel in our clean, enclosed, carpet-lined box trucks equipped with hydraulic tail lifts and real-time GPS tracking, guaranteeing complete security and protection from transit vibrations.',
            'pills' => ['Developer & Community Permits', 'Service Lift Priority Reservations', 'Carpet-Lined Enclosed Vehicles', 'Real-Time GPS Fleet Updates'],
        ],
        [
            'tag' => 'Phase 03 • Ready to Live',
            'title' => '3. Ready to Live: Furniture Built, Closets Hung & Packaging Cleared',
            'subtitle' => 'Walk into your new residence with beds made, wardrobes unpacked, and debris gone.',
            'image' => asset('images/gallery/movexa-gallery-full-service-montage.webp'),
            'caption' => 'Turnkey unpacking and room arrangement executed by MOVEXA moving crew.',
            'p1' => 'With our door-to-door concierge, your move does not end when boxes are placed in rooms. Our carpenters reassemble all beds, wardrobes, and tables, and our team unpacks clothing directly back into wardrobes and kitchenware onto countertops.',
            'p2' => 'All discarded cardboard boxes, wrapping paper, and plastic waste are removed immediately from your property, allowing you to relax comfortably in your fully operational home on move day.',
            'pills' => ['Full Furniture Reconstruction', 'Unpacking of Wardrobes & Kitchens', '100% Packaging Waste Removal', 'Immediate Move-In Comfort'],
        ],
    ],
    'international-moving' => [
        [
            'tag' => 'Phase 01 • Export Packaging',
            'title' => '1. Seaworthy Export Packing & Heavy-Duty Lift-Van Timber Crating',
            'subtitle' => 'Industrial multi-layer wrapping engineered for maritime humidity and long-distance ocean voyages.',
            'image' => asset('images/gallery/movexa-gallery-residential-export-packing.webp'),
            'caption' => 'MOVEXA export packing team preparing household goods for international container shipping.',
            'p1' => 'International moving across oceans demands the highest level of packaging engineering. MOVEXA uses export-grade multi-layer corrugated wrap, anti-humidity desiccants, waterproof polyethylene sheeting, and custom timber lift-vans to safeguard furniture during weeks at sea.',
            'p2' => 'Delicate items such as oil paintings, crystal chandeliers, and grandfather clocks are housed in bespoke heat-treated wooden crates built to comply with international phytosanitary standards (ISPM-15).',
            'pills' => ['ISPM-15 Heat-Treated Crating', 'Multi-Layer Moisture Barriers', 'Desiccant Humidity Absorbers', 'Dedicated Full Container (FCL) Options'],
        ],
        [
            'tag' => 'Phase 02 • Customs Clearance',
            'title' => '2. Bilingual Customs Documentation, Port Haulage & Bill of Lading',
            'subtitle' => 'Complete guidance through destination customs frameworks and shipping paperwork.',
            'image' => asset('images/services/movexa-service-international-moving.webp'),
            'caption' => 'MOVEXA international relocation division managing container logistics and customs export documentation.',
            'p1' => 'Customs regulations can be complicated. Our international documentation team prepares itemized bilingual packing inventories, export certificates, and destination customs forms (such as UK ToR01, US Customs Form 3299, and Canadian CBSA BSF186).',
            'p2' => 'We coordinate direct container drayage through Jebel Ali Port or Dubai International Airport, providing you with maritime Bill of Lading numbers and real-time vessel tracking across international waters.',
            'pills' => ['Bilingual Inventory Preparation', 'Destination Customs Form Guidance', 'Direct Port Haulage & Drayage', 'Vessel Tracking & Bill of Lading'],
        ],
        [
            'tag' => 'Phase 03 • Global Delivery',
            'title' => '3. Global Partner Network & Overseas In-Home Delivery with Unpacking',
            'subtitle' => 'Door-to-door delivery into your overseas residence via trusted international affiliates.',
            'image' => asset('images/gallery/movexa-gallery-branded-truck-in-transit.webp'),
            'caption' => 'MOVEXA international moving vehicle managing global freight dispatch.',
            'p1' => 'MOVEXA partners with vetted international moving agents across the UK, Europe, USA, Canada, Australia, India, and the GCC. Once your container arrives at the destination port, our overseas partner manages customs inspection, port haulage, and delivery directly to your new home.',
            'p2' => 'The overseas crew carries items inside, reassembles major furniture pieces, and clears away all shipping crates and packaging debris, making your international transition truly seamless.',
            'pills' => ['Vetted Global Agent Network', 'Destination Customs Clearance', 'In-Home Delivery & Furniture Setup', 'Complete Debris & Crate Removal'],
        ],
    ],
    'packing-services' => [
        [
            'tag' => 'Phase 01 • Materials Preparation',
            'title' => '1. Export-Grade 5-Ply Cartons & Specialized Item Protection',
            'subtitle' => 'Industrial packaging materials engineered to absorb shocks and protect delicate surfaces.',
            'image' => asset('images/gallery/movexa-gallery-warehouse-packing.webp'),
            'caption' => 'MOVEXA packing specialists preparing industrial 5-ply cartons and protective materials.',
            'p1' => 'MOVEXA never uses lightweight single-ply cardboard boxes. We arrive with fully stocked inventory vehicles carrying 5-ply heavy-duty corrugated cartons, high-density polyethylene bubble wrap, acid-free unprinted newsprint paper, and heavy-gauge stretch film.',
            'p2' => 'Every category of item has a dedicated box design: dish-pack barrels with cellular honeycomb dividers for stemware, book cartons for heavy printed media, and tall hanging wardrobe boxes with metal bars for clothing.',
            'pills' => ['5-Ply Heavy Corrugated Boxes', 'Cellular Honeycomb Dish Packs', 'Acid-Free Protective Tissue', 'Hanging Garment Wardrobes'],
        ],
        [
            'tag' => 'Phase 02 • Fragile Item Boxing',
            'title' => '2. Multi-Layer Cushioning for China, Crystal & Artwork',
            'subtitle' => 'Careful individual wrapping of delicate collectibles, mirrors, and porcelain.',
            'image' => asset('images/gallery/movexa-gallery-fragile-room-packing.webp'),
            'caption' => 'Meticulous multi-layer wrapping of delicate porcelain and crystal glassware.',
            'p1' => 'Our packing crew wraps each fragile item individually with acid-free tissue to prevent friction scratches, followed by shock-absorbing bubble cushioning and secure tape bonding. Items are packed upright in cellular compartments to distribute transit pressure evenly.',
            'p2' => 'Oil paintings, decorative wall mirrors, and framed artwork are enclosed inside custom-fitted telescope picture boxes with padded corner shields to protect gilding and frames.',
            'pills' => ['Individual Item Swaddling', 'Telescope Picture Cartons', 'Reinforced Corner Guards', 'Vertical China Packing Technique'],
        ],
        [
            'tag' => 'Phase 03 • Systematic Staging',
            'title' => '3. Systematic Labeling, Inventory Numbering & Unpacking Support',
            'subtitle' => 'Color-coded room identification to make move-in day organized and effortless.',
            'image' => asset('images/gallery/movexa-gallery-organized-room-packing.webp'),
            'caption' => 'Color-coded and systematically labeled cartons organized room by room.',
            'p1' => 'Every single box is labeled on two sides with its room of origin, summary of contents, and handling orientation arrows. Fragile boxes receive bright neon handling indicators to guarantee priority placement in the moving truck.',
            'p2' => 'We also offer comprehensive unpacking services, placing kitchen contents onto counters, hanging clothes into wardrobes, and removing all cardboard debris for clean, immediate move-in.',
            'pills' => ['Dual-Sided Carton Labeling', 'Color-Coded Room Identifiers', 'Neon Fragile Warning Badges', 'Full Unpacking Assistance Available'],
        ],
    ],
    'furniture-dismantling' => [
        [
            'tag' => 'Phase 01 • Master Carpentry',
            'title' => '1. Precision Disassembly of Complex Hydraulic Beds & Wardrobes',
            'subtitle' => 'Certified joiners and carpenters using calibrated cordless tools and magnetic trays.',
            'image' => asset('images/gallery/movexa-gallery-sofa-living-room-wrapping.webp'),
            'caption' => 'MOVEXA master carpenter carefully dismantling and wrapping furniture components.',
            'p1' => 'Modern modular furniture requires skilled hands to disassemble without stripping screws or splitting veneer. MOVEXA’s full-time carpenters are trained in complex German, Italian, and IKEA flat-pack systems, including hydraulic storage gas-strut beds, multi-slider mirrored wardrobes, and modular dining suites.',
            'p2' => 'Each panel is examined, unbolted using appropriate torque settings, and immediately wrapped with heavy bubble blankets and stretch film to shield edges and corners from scuffs.',
            'pills' => ['Hydraulic Gas-Lift Bed Specialists', 'Multi-Slider Wardrobe Deconstruction', 'Calibrated Cordless Tools', 'Edge & Corner Protective Blanketing'],
        ],
        [
            'tag' => 'Phase 02 • Hardware Bagging',
            'title' => '2. Zero-Loss Hardware Bagging & Barcode Frame Attachment',
            'subtitle' => 'Every bolt, cam dowel, and hinge is bagged and taped directly to its matching frame.',
            'image' => asset('images/gallery/movexa-gallery-villa-sofa-loading.webp'),
            'caption' => 'Protective wrapping and secure hardware bagging of disassembled furniture frames.',
            'p1' => 'The most common frustration in moving is lost furniture hardware. MOVEXA eliminates this problem completely: every screw, bolt, wooden dowel, and bracket is placed inside heavy-duty Ziploc bags and taped securely to its corresponding furniture frame.',
            'p2' => 'Our service vehicles also carry extensive hardware replacement kits containing common metric bolts, wood screws, and bracket fixings in case older fasteners require replacement.',
            'pills' => ['Ziploc Sealed Hardware Bags', 'Taped Directly to Matching Frame', 'Backup Metric Hardware Kits', 'Zero Missing Bolt Guarantee'],
        ],
        [
            'tag' => 'Phase 03 • Destination Rebuild',
            'title' => '3. Exact Alignment, Structural Reassembly & Wall Mounting',
            'subtitle' => 'Rebuilding beds, adjusting cabinet hinges, and securing wall mirrors and TVs.',
            'image' => asset('images/hero/movexa-hero-villa-unloading.webp'),
            'caption' => 'Carpentry team reassembling and leveling furniture at destination residence.',
            'p1' => 'At your new property, our carpenters reassemble all furniture to manufacturer specifications. We test drawer sliders, level wardrobe doors, and adjust cabinet hinges so they close silently and smoothly.',
            'p2' => 'Our handyman team securely unmounts and re-hangs flat-screen televisions, wall art, heavy mirrors, and curtain fixtures, using heavy-duty anchors suitable for UAE concrete or drywall construction.',
            'pills' => ['Precision Hinge & Slider Adjustment', 'Structural Stability Testing', 'Wall-Mounted TV & Mirror Re-Hanging', 'UAE Concrete Anchor Fixings'],
        ],
    ],
];
@endphp

{{-- Service Hero Section (Full Photographic Background with Direct High-Contrast Narrative) --}}
<section class="relative min-h-[500px] sm:min-h-[540px] lg:min-h-[580px] xl:min-h-[620px] flex items-center text-white overflow-hidden py-10 sm:py-12 lg:py-14 bg-[#071712] w-full border-b border-[#143B2F]/60">
    
    {{-- Full Natural Hero Background Image Layer --}}
    <div class="absolute inset-0 z-0 bg-[#071712] overflow-hidden pointer-events-none">
        {{-- Ambient soft-blurred backdrop to seamlessly fill any ultrawide aspect ratio --}}
        <img src="{{ $hero['bg_image'] }}" 
             alt="" 
             aria-hidden="true" 
             class="absolute inset-0 w-full h-full object-cover filter blur-3xl opacity-30 scale-110 pointer-events-none" loading="lazy" decoding="async">
        
        {{-- Main Crisp Hero Slide Image --}}
        <img src="{{ $hero['bg_image'] }}" 
             alt="{{ $service['title'] }} Moving in Dubai - MOVEXA" 
             class="w-full h-full object-cover object-[75%_center] sm:object-[78%_center] md:object-[80%_center] lg:object-center relative z-0" loading="lazy" decoding="async">

        {{-- Natural Soft Neutral Contrast Gradient (Ensures direct text legibility while preserving vibrant photo details on the right) --}}
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/55 to-black/35 lg:bg-gradient-to-r lg:from-black/85 lg:via-black/55 lg:to-transparent z-10 pointer-events-none"></div>
    </div>

    {{-- Top Specular Light Highlight Line --}}
    <div class="absolute top-0 left-6 right-6 sm:left-12 sm:right-12 h-[1px] bg-gradient-to-r from-transparent via-white/30 to-transparent pointer-events-none z-20"></div>

    <div class="max-w-7xl 2xl:max-w-[1520px] mx-auto px-4 sm:px-6 lg:px-8 relative z-20 w-full">
        {{-- Hero Content (Direct Typography & Actions, No Card Container) --}}
        <div class="w-full max-w-full sm:max-w-xl md:max-w-2xl text-left relative z-20 space-y-4 sm:space-y-5">
            
            {{-- Category Pill Badge with Live Pulsing Lime Accent --}}
            <div>
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-black/40 backdrop-blur-md border border-white/20 text-white text-[11px] sm:text-xs font-bold tracking-wider uppercase shadow-xs">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#B7E532] opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-[#B7E532] shadow-[0_0_8px_#B7E532]"></span>
                    </span>
                    <span class="text-white">{{ $hero['badge'] ?? 'MOVEXA SERVICE SPECIALIZATION' }}</span>
                </div>
            </div>

            {{-- Main Service Headline --}}
            <h1 class="text-3xl min-[375px]:text-4xl sm:text-5xl lg:text-[50px] xl:text-[54px] font-black font-heading tracking-tight text-white leading-[1.14] drop-shadow-[0_2px_16px_rgba(0,0,0,0.95)]">
                {{ $service['headline'] }}
            </h1>

            {{-- Supporting Subheadline --}}
            <p class="text-sm sm:text-base lg:text-lg text-white/90 leading-relaxed font-normal drop-shadow-[0_2px_8px_rgba(0,0,0,0.95)] max-w-xl">
                {{ $service['subheadline'] }}
            </p>

            {{-- Action Buttons Row --}}
            <div class="pt-2 sm:pt-3 flex flex-col sm:flex-row items-stretch sm:items-center justify-start gap-3 sm:gap-4 w-full">
                <button type="button" 
                        onclick="openQuoteModal('', '{{ $service['title'] }}')" 
                        class="inline-flex items-center justify-center gap-2 font-extrabold px-7 py-3.5 rounded-full bg-[#B7E532] text-[#073B2E] hover:bg-[#cbf54a] text-xs sm:text-sm shadow-lg hover:shadow-xl hover:shadow-[#B7E532]/20 transition-all duration-200 transform hover:-translate-y-0.5 focus:outline-none w-full sm:w-auto cursor-pointer">
                    <i class="fa-solid fa-file-invoice text-xs"></i>
                    <span>{{ $hero['quote_label'] }}</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </button>

                <a href="https://wa.me/{{ config('movexa.brand.whatsapp_number') }}?text={{ urlencode('Hello MOVEXA, I am inquiring about ' . $service['title'] . ' in Dubai.') }}" 
                   target="_blank" 
                   rel="noopener" 
                   class="inline-flex items-center justify-center gap-2 font-semibold px-6 py-3.5 rounded-full border border-white/60 bg-white/10 hover:bg-white hover:text-[#073B2E] text-white text-xs sm:text-sm backdrop-blur-md transition-all duration-200 focus:outline-none w-full sm:w-auto shadow-md">
                    <i class="fa-brands fa-whatsapp text-sm text-[#25D366]"></i>
                    <span>Chat With Specialist</span>
                </a>
            </div>

            {{-- Key Trust Assurance Strip --}}
            <div class="pt-4 border-t border-white/20 flex flex-wrap items-center gap-y-2 gap-x-5 text-xs sm:text-sm text-white/90 font-medium drop-shadow-[0_1px_4px_rgba(0,0,0,0.85)]">
                <span class="inline-flex items-center gap-1.5">
                    <i class="fa-solid fa-circle-check text-[#B7E532] text-xs"></i>
                    <span>100% Full-Time Crew</span>
                </span>
                <span class="inline-flex items-center gap-1.5">
                    <i class="fa-solid fa-circle-check text-[#B7E532] text-xs"></i>
                    <span>Dubai NOC Approvals</span>
                </span>
                <span class="inline-flex items-center gap-1.5">
                    <i class="fa-solid fa-circle-check text-[#B7E532] text-xs"></i>
                    <span>Zero Damage Guarantee</span>
                </span>
            </div>

        </div>
    </div>
</section>

{{-- Key Features & Inclusions Section --}}
<section class="py-10 sm:py-12 lg:py-14 bg-white border-b border-[#E2E8E2] w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        
        {{-- Left: Secondary Visual & Quote Callout --}}
        <div class="lg:col-span-5 space-y-6">
            <div class="rounded-3xl overflow-hidden shadow-lg border border-[#E2E8E2] aspect-[4/3] bg-gray-100">
                <img src="{{ $service['secondary_image'] }}" alt="{{ $service['title'] }} packing and handling" class="w-full h-full object-cover" loading="lazy" decoding="async">
            </div>

            <div class="bg-white p-6 rounded-3xl border border-[#E2E8E2] shadow-sm space-y-3">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-[#103B30] text-[#D8F36B] flex items-center justify-center font-bold">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div>
                        <span class="text-xs text-[#747C76] block">Need rapid assistance?</span>
                        <a href="tel:{{ config('movexa.brand.phone_raw') }}" class="text-sm font-bold text-[#103B30] hover:underline">
                            {{ config('movexa.brand.phone_display') }}
                        </a>
                    </div>
                </div>
                <p class="text-[11px] text-[#747C76] leading-tight">
                    Our Dubai team coordinates loading bay bookings, elevator passes, and packing schedules.
                </p>
            </div>
        </div>

        {{-- Right: What is Included --}}
        <div class="lg:col-span-7 space-y-6">
            <span class="forest-badge">
                <i class="fa-solid fa-list-check"></i> Included In Every Move
            </span>
            <h2 class="text-3xl sm:text-4xl font-black font-heading text-[#103B30] tracking-tight">
                Meticulous Standards For Your Peace of Mind
            </h2>
            <p class="text-sm sm:text-base text-[#425048] leading-relaxed">
                {{ $service['short_desc'] }} Our comprehensive service package is designed to relieve your stress from door to door.
            </p>

            {{-- Feature Checklist --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                @foreach ($service['features'] as $feat)
                <div class="flex items-start gap-3 p-3 rounded-2xl bg-white border border-[#E2E8E2] shadow-sm">
                    <i class="fa-solid fa-circle-check text-sm text-[#103B30] mt-0.5"></i>
                    <span class="text-xs sm:text-[13px] font-bold text-[#18221D]">{{ $feat }}</span>
                </div>
                @endforeach
            </div>

            <div class="pt-4">
                <button type="button" onclick="openQuoteModal('', '{{ $service['title'] }}')" class="btn-forest text-xs font-bold py-3 px-6">
                    <i class="fa-solid fa-calculator"></i>
                    <span>Request Custom Quote for This Service</span>
                </button>
            </div>
        </div>

    </div>
    </div>
</section>

{{-- In-Depth Service Breakdown & White-Glove Standard Section --}}
@if (isset($narrativeSections[$slug]))
<section class="py-14 sm:py-18 lg:py-24 bg-[#F8FAF8] border-b border-[#E0EBE0] relative overflow-hidden w-full">
    {{-- Ambient Luxury Glow Effects --}}
    <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[1100px] h-[500px] bg-gradient-to-b from-[#D8F36B]/15 via-[#103B30]/5 to-transparent rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-gradient-to-t from-[#EBF5E7]/40 to-transparent rounded-full blur-2xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        {{-- Section Header --}}
        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-12 space-y-3.5">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white text-[#103B30] border border-[#CFE0D1] shadow-2xs text-xs font-black uppercase tracking-wider">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#B7E532] opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-[#103B30]"></span>
                </span>
                <i class="fa-solid fa-shield-halved text-[#103B30] text-[11px]"></i>
                <span>White-Glove Relocation Standard</span>
            </div>
            
            <h2 class="text-3xl sm:text-4xl lg:text-[42px] font-black font-heading text-[#073B2E] tracking-tight leading-tight">
                {{ $narrativeSectionTitles[$slug]['title'] ?? 'The MOVEXA Standard for ' . $service['title'] }}
            </h2>
            
            <p class="text-sm sm:text-base text-[#46574D] leading-relaxed max-w-2xl mx-auto font-medium">
                {{ $narrativeSectionTitles[$slug]['subtitle'] ?? 'Discover how our certified in-house teams, high-grade materials, and Dubai-compliant logistics make every transition effortless.' }}
            </p>
        </div>

        {{-- Interactive / Visual Process Milestone Bar (Advanced Operational Flow) --}}
        @php $phaseCount = count($narrativeSections[$slug]); @endphp
        <div class="hidden lg:block mb-12 max-w-5xl mx-auto">
            <div class="bg-white/95 backdrop-blur-md p-3 rounded-2xl border border-[#DFE7DF] shadow-[0_4px_16px_rgba(7,59,46,0.04)]">
                <div class="grid gap-2.5" style="grid-template-columns: repeat({{ $phaseCount }}, minmax(0, 1fr));">
                    @foreach ($narrativeSections[$slug] as $pIndex => $pBlock)
                    @php
                        $rawTag = $pBlock['tag'] ?? '';
                        $tagParts = explode('•', $rawTag);
                        $phaseNum = trim($tagParts[0] ?? ('Phase ' . ($pIndex + 1)));
                        $phaseName = trim($tagParts[1] ?? ($pBlock['title']));
                    @endphp
                    <div class="p-2.5 rounded-xl bg-[#F8FAF8] border border-[#E2EBE2] hover:border-[#103B30] hover:bg-[#F2F7F2] transition-all group/step">
                        <div class="flex items-center justify-between mb-1">
                            <span class="text-[10px] font-black uppercase tracking-wider text-[#103B30] flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#103B30]"></span>
                                <span>{{ $phaseNum }}</span>
                            </span>
                            <span class="text-[9.5px] font-black text-[#6C7E72] bg-white px-1.5 py-0.5 rounded-md border border-[#DCE6DC]">
                                Step {{ $pIndex + 1 }}
                            </span>
                        </div>
                        <div class="text-[11px] font-extrabold text-[#0D2E24] truncate group-hover/step:text-[#073B2E]">
                            {{ $phaseName }}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Narrative Process Cards List --}}
        <div class="space-y-8 sm:space-y-12">
            @foreach ($narrativeSections[$slug] as $index => $block)
            @php 
                $isEven = $index % 2 === 0;
                $cleanTitle = preg_replace('/^\d+\.\s*/', '', $block['title']);
            @endphp
            
            <div class="relative bg-white rounded-3xl p-6 sm:p-8 lg:p-10 border border-[#DEE7DF] shadow-[0_20px_55px_-15px_rgba(7,59,46,0.07),0_1px_3px_rgba(0,0,0,0.02)] group hover:border-[#CFDEC7] hover:shadow-[0_25px_65px_-15px_rgba(7,59,46,0.12)] transition-all duration-300 overflow-hidden">
                {{-- Top Specular Laser Highlight Line --}}
                <div class="absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent opacity-60 group-hover:opacity-100 transition-opacity"></div>
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    
                    {{-- Media Column --}}
                    <div class="lg:col-span-6 {{ $isEven ? 'lg:order-1' : 'lg:order-2' }}">
                        <div class="relative rounded-3xl overflow-hidden shadow-[0_20px_50px_-15px_rgba(7,59,46,0.22)] border-2 border-white ring-1 ring-[#DEE8DE] group/img aspect-[4/3] bg-[#07241C]">
                            <img src="{{ $block['image'] }}" 
                                 alt="{{ $block['title'] }} - MOVEXA Dubai" 
                                 class="w-full h-full object-cover group-hover/img:scale-105 transition-transform duration-700 ease-out" 
                                 loading="lazy" 
                                 decoding="async">
                            
                            {{-- Dark Ambient Gradient for Captions & Badges --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 to-black/10 pointer-events-none"></div>

                            {{-- Top Left Floating Phase Tag --}}
                            <div class="absolute top-4 left-4 z-10 inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-black/75 backdrop-blur-md text-[#D8F36B] text-[11px] font-black uppercase tracking-wider border border-white/20 shadow-md">
                                <span class="w-2 h-2 rounded-full bg-[#B7E532] animate-pulse"></span>
                                <span>{{ $block['tag'] }}</span>
                            </div>

                            {{-- Top Right Verified Protocol Tag --}}
                            <div class="absolute top-4 right-4 z-10 hidden sm:inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/90 backdrop-blur-md text-[#073B2E] text-[10.5px] font-black border border-white/40 shadow-xs">
                                <i class="fa-solid fa-shield-halved text-[#103B30] text-[10px]"></i>
                                <span>Dubai Standard Verified</span>
                            </div>

                            {{-- Bottom Glassmorphic Photo Caption --}}
                            <div class="absolute bottom-4 left-4 right-4 text-white z-10 flex items-center gap-3 bg-[#07241C]/85 backdrop-blur-md p-3.5 rounded-2xl border border-white/20 shadow-lg">
                                <div class="w-7 h-7 rounded-lg bg-[#103B30] text-[#D8F36B] border border-[#205545] flex items-center justify-center text-xs shrink-0">
                                    <i class="fa-solid fa-camera"></i>
                                </div>
                                <span class="text-[11.5px] text-white/95 font-semibold leading-snug">{{ $block['caption'] }}</span>
                            </div>
                        </div>
                    </div>

                    {{-- Content Column --}}
                    <div class="lg:col-span-6 {{ $isEven ? 'lg:order-2' : 'lg:order-1' }} space-y-4 sm:space-y-5">
                        
                        {{-- Header Row: Category Badge + Milestone Counter --}}
                        <div class="flex items-center justify-between gap-3 flex-wrap">
                            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#103B30] text-[#D8F36B] text-[11px] font-black uppercase tracking-wider shadow-2xs">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#D8F36B] animate-pulse"></span>
                                <span>{{ $block['tag'] }}</span>
                            </div>
                            <span class="text-[11px] font-black uppercase tracking-widest text-[#4B6053] bg-[#F2F7F2] px-3 py-1 rounded-full border border-[#DCE7DC]">
                                Phase {{ sprintf('%02d', $index + 1) }} of {{ sprintf('%02d', $phaseCount) }}
                            </span>
                        </div>

                        {{-- Step Heading --}}
                        <h3 class="text-2xl sm:text-[28px] font-black font-heading text-[#073B2E] tracking-tight leading-snug">
                            {{ $cleanTitle }}
                        </h3>

                        {{-- Key Takeaway Callout Box (Subtitle) --}}
                        <div class="flex items-start gap-3 p-3.5 rounded-xl bg-gradient-to-r from-[#F0F6F1] to-[#F7FAF7] border-l-4 border-[#103B30] border-y border-r border-[#E0ECE0]">
                            <i class="fa-solid fa-clipboard-check text-[#103B30] text-sm mt-0.5 shrink-0"></i>
                            <div class="text-xs sm:text-[13px] font-bold text-[#143B2E] leading-relaxed">
                                {{ $block['subtitle'] }}
                            </div>
                        </div>

                        {{-- Structured Narrative Paragraphs --}}
                        <div class="space-y-3 text-xs sm:text-[13.5px] text-[#344439] leading-relaxed font-normal">
                            <p class="pl-3.5 border-l-2 border-[#DCE6DC]">{{ $block['p1'] }}</p>
                            <p class="pl-3.5 border-l-2 border-[#DCE6DC]">{{ $block['p2'] }}</p>
                        </div>

                        {{-- Feature Checklist (Assurance Grid) --}}
                        @if (!empty($block['pills']))
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 pt-1">
                            @foreach ($block['pills'] as $pill)
                            <div class="flex items-center gap-2.5 p-2.5 sm:p-3 rounded-xl bg-[#F7FAF7] hover:bg-[#EEF6EF] border border-[#DEE8DF] hover:border-[#B7E532] transition-all shadow-2xs group/pill">
                                <span class="w-6 h-6 rounded-lg bg-[#103B30] text-[#D8F36B] flex items-center justify-center text-[10px] shrink-0 shadow-2xs group-hover/pill:bg-[#B7E532] group-hover/pill:text-[#073B2E] transition-colors">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span class="text-xs font-black text-[#102A20] leading-tight">{{ $pill }}</span>
                            </div>
                            @endforeach
                        </div>
                        @endif

                    </div>

                </div>
            </div>
            @endforeach
        </div>

        {{-- Interactive Section Footer CTA --}}
        <div class="mt-14 sm:mt-18 p-6 sm:p-8 lg:p-9 rounded-3xl bg-gradient-to-r from-[#072F25] via-[#0A3D30] to-[#041913] text-white border border-white/10 shadow-2xl relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-6">
            {{-- Top Accent Line --}}
            <div class="absolute inset-x-0 top-0 h-[2.5px] bg-gradient-to-r from-transparent via-[#D8F36B] to-transparent"></div>
            
            <div class="space-y-1.5 text-center md:text-left">
                <span class="inline-flex items-center gap-2 px-3 py-0.5 rounded-full bg-white/10 text-[#D8F36B] border border-white/15 text-[11px] font-black uppercase tracking-wider">
                    <i class="fa-solid fa-star text-[10px] text-[#D8F36B]"></i>
                    <span>Tailored Relocation Architecture</span>
                </span>
                <h4 class="text-xl sm:text-2xl font-black font-heading tracking-tight">Have Unique Furniture or Tight Moving Deadlines?</h4>
                <p class="text-xs sm:text-sm text-white/80 max-w-xl font-medium">Our Dubai relocation coordinators can craft a custom move-day workflow around your family's exact schedule.</p>
            </div>
            
            <div class="flex items-center gap-3 shrink-0 w-full md:w-auto justify-center flex-wrap sm:flex-nowrap">
                <button type="button" onclick="openQuoteModal('', '{{ $service['title'] }}')" class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-[#B7E532] text-[#073B2E] hover:bg-[#cbf54a] text-xs font-black shadow-[0_4px_16px_rgba(183,229,50,0.35)] hover:shadow-[0_6px_22px_rgba(183,229,50,0.5)] transition-all cursor-pointer">
                    <i class="fa-solid fa-calculator"></i>
                    <span>Get Moving Quote</span>
                </button>
                <a href="https://wa.me/{{ config('movexa.brand.whatsapp_number') }}?text={{ urlencode('Hello MOVEXA, I would like to consult about ' . $service['title'] . ' in Dubai.') }}" 
                   target="_blank" 
                   rel="noopener" 
                   class="inline-flex items-center justify-center gap-2 px-5 py-3.5 rounded-xl bg-white/10 hover:bg-[#25D366] text-white hover:text-white border border-white/20 text-xs font-black backdrop-blur-md transition-all shadow-sm">
                    <i class="fa-brands fa-whatsapp text-sm text-[#25D366]"></i>
                    <span>WhatsApp</span>
                </a>
            </div>
        </div>

    </div>
</section>
@endif

{{-- Benefits Cards --}}
<section class="py-10 sm:py-12 lg:py-14 bg-white border-b border-[#E2E8E2] w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-10 space-y-2">
            <span class="forest-badge">Why MOVEXA</span>
            <h2 class="text-3xl sm:text-4xl font-black font-heading text-[#103B30] tracking-tight">
                The Advantage of Our {{ $service['title'] }} Service
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($service['benefits'] as $b)
            <div class="p-7 sm:p-8 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm hover:shadow-md transition-all card-hover space-y-3.5">
                <div class="w-10 h-10 rounded-xl bg-[#103B30] text-[#D8F36B] flex items-center justify-center font-bold text-sm">
                    <i class="fa-solid fa-star"></i>
                </div>
                <h3 class="text-xl font-black font-heading text-[#103B30]">{{ $b['title'] }}</h3>
                <p class="text-sm text-[#425048] leading-relaxed">{{ $b['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Step-By-Step Workflow --}}
<section class="py-10 sm:py-12 lg:py-14 bg-white border-b border-[#E2E8E2] w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-10 space-y-3">
        <span class="forest-badge">How It Works</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold font-heading text-[#202824]">
            Our 4-Stage Relocation Flow
        </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach ($service['process'] as $step)
        <div class="p-6 rounded-3xl bg-white border border-[#E2E8E2] shadow-sm space-y-3 flex flex-col justify-between card-hover">
            <div>
                <span class="text-2xl font-black text-[#D8F36B] font-heading bg-[#103B30] px-3 py-1 rounded-xl inline-block mb-3">
                    {{ $step['step'] }}
                </span>
                <h3 class="text-lg font-black font-heading text-[#103B30]">{{ $step['title'] }}</h3>
                <p class="text-xs sm:text-sm text-[#425048] leading-relaxed mt-2">{{ $step['desc'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</section>

{{-- Service-Specific FAQs --}}
@if (!empty($service['faqs']))
<section class="py-10 sm:py-12 lg:py-14 bg-white border-b border-[#E2E8E2] w-full">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10 space-y-2">
            <span class="forest-badge">Questions Answered</span>
            <h2 class="text-3xl sm:text-4xl font-black font-heading text-[#103B30] tracking-tight">
                {{ $service['title'] }} FAQs
            </h2>
        </div>

        <div class="space-y-3" x-data="{ activeFaq: null }">
            @foreach ($service['faqs'] as $idx => $faq)
            <div class="rounded-2xl border border-[#E2E8E2] overflow-hidden bg-white shadow-xs">
                <button type="button" @click="activeFaq = (activeFaq === {{ $idx }} ? null : {{ $idx }})" class="w-full px-6 py-4 text-left flex items-center justify-between text-sm sm:text-base font-extrabold text-[#103B30] hover:text-[#073B2E] transition-colors focus:outline-none">
                    <span>{{ $faq['q'] }}</span>
                    <i class="fa-solid fa-chevron-down text-xs transition-transform" :class="{ 'rotate-180': activeFaq === {{ $idx }} }"></i>
                </button>
                <div x-show="activeFaq === {{ $idx }}" class="px-6 pb-4 pt-1 text-xs sm:text-sm text-[#425048] leading-relaxed border-t border-gray-100" style="display: none;">
                    {{ $faq['a'] }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- Related Services Navigation --}}
<section class="py-10 sm:py-12 bg-white border-b border-[#E2E8E2] w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between mb-8">
        <h3 class="text-xl font-bold font-heading text-[#202824]">Other Moving Services You Might Need</h3>
        <a href="{{ route('services.index') }}" class="text-xs font-bold text-[#103B30] hover:underline">All Services →</a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach (array_slice($all_services, 0, 4) as $other)
            @if ($other['slug'] !== $slug)
            <a href="{{ route('services.show', $other['slug']) }}" class="p-4 rounded-2xl bg-white border border-[#E2E8E2] hover:border-[#103B30] transition-colors flex items-center gap-3 group">
                <span class="w-9 h-9 rounded-xl bg-[#EBF2EB] group-hover:bg-[#D8F36B] flex items-center justify-center text-[#103B30] text-sm transition-colors flex-shrink-0">
                    <i class="fa-solid {{ $other['icon'] }}"></i>
                </span>
                <span class="text-xs font-bold text-[#202824] group-hover:text-[#103B30] transition-colors truncate">
                    {{ $other['title'] }}
                </span>
            </a>
            @endif
        @endforeach
    </div>
    </div>
</section>

{{-- Global CTA --}}
<section class="bg-white py-4 sm:py-6 w-full">
    <x-cta-banner 
    headline="Let Us Handle Your {{ $service['title'] }}"
    subheadline="Experience hassle-free moving across Dubai or beyond borders with MOVEXA's certified handling crew."
    buttonText="Request Your Free Quote"
/>
</section>

@endsection
