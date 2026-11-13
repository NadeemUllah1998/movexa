# MOVEXA — Global Moving & Relocations Dubai

<p align="center">
  <img src="public/images/logo/movexa-logo.webp" alt="MOVEXA Global Moving & Relocations" width="320">
</p>

<p align="center">
  <strong>Moving Beyond Borders.</strong><br>
  Dubai’s Premier Relocation Specialists for Local & Worldwide Residential, Villa, Corporate, and International Mobility.
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-8.1%2B-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/Tailwind_CSS-3.x-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS">
  <img src="https://img.shields.io/badge/Alpine.js-3.x-8BC0D0?style=for-the-badge&logo=alpine.js&logoColor=white" alt="Alpine.js">
  <img src="https://img.shields.io/badge/Vite-5.x-646CFF?style=for-the-badge&logo=vite&logoColor=white" alt="Vite">
  <img src="https://img.shields.io/badge/License-MIT-green?style=for-the-badge" alt="License">
</p>

---

## 📌 Table of Contents

- [Overview](#-overview)
- [Key Features](#-key-features)
- [System Architecture & Directory Structure](#-system-architecture--directory-structure)
- [Tech Stack](#-tech-stack)
- [Requirements](#-requirements)
- [Getting Started / Installation](#-getting-started--installation)
- [Configuration](#-configuration)
- [Page & Route Sitemap](#-page--route-sitemap)
- [Asset Pipeline & Optimization](#-asset-pipeline--optimization)
- [SEO & Open Graph Features](#-seo--open-graph-features)
- [Contributing](#-contributing)
- [License & Author](#-license--author)

---

## 📖 Overview

**MOVEXA** is an enterprise-grade web application built with **Laravel 10**, **Tailwind CSS**, and **Alpine.js** designed for luxury moving and international relocations originating from Dubai, United Arab Emirates.

The platform provides a turnkey digital experience for clients seeking residential shifting, high-rise apartment logistics, private villa estate moves, commercial corporate office relocations, international freight shipping, climate-controlled vault storage, export-grade crating, and master carpentry assembly.

---

## 🚀 Key Features

### 1. Specialized Moving Divisions
- **Home & Residential Moving:** Room-by-room inventory tracking, color-coded packing system, mattress vacuum sealing, and hanging wardrobe transit.
- **High-Rise Apartment Logistics:** Building management clearance, low-clearance basement fleet access, freight elevator booking coordination, and protective wall/floor padding for Emaar, Nakheel, and DAMAC properties.
- **Luxury Villa & Private Estates:** Dedicated move supervisors, multi-truck coordinated fleets, and custom timber crating for chandeliers, fine art, and marble.
- **Corporate Office & IT Mobility:** Zero-downtime weekend/after-hours corporate shifts, anti-static IT server packaging, asset tagging, and modular desk assembly.
- **Global Relocations & Maritime Freight:** FCL/LCL ocean container shipping, air freight, customs relief documentation, and global port delivery to 12 worldwide destinations.
- **Secure Climate-Controlled Storage:** Dust-proof warehouse vaults with 24/7 temperature/humidity control, biometric access, and CCTV monitoring.
- **Certified Joinery & Carpentry:** Specialist dismantling and rebuilding of hydraulic beds, sliding wardrobes, Italian furniture, and OLED/mirror wall mount uninstallation.

### 2. Destination Guides & Customs Intelligence
- Detailed relocation guides for 12 major countries:
  - **North America:** United States, Canada
  - **Europe:** United Kingdom, Germany, France
  - **Middle East / GCC:** Saudi Arabia, Qatar, Oman
  - **Asia & Oceania:** India, Pakistan, Singapore, Australia
- Covers customs documentation requirements, duty relief policies, prohibited goods, and port transit durations.

### 3. Lead Generation & Customer Conversion
- **Interactive Moving Estimator:** Quick instant estimate calculator on the homepage based on property size and destination.
- **Multi-Step Quote Modal (`x-quote-modal`):** Dynamic pop-up modal capturing move types, origin/destination details, date preferences, and customer contact information.
- **Direct WhatsApp Integration:** 1-click contextual WhatsApp inquiry buttons passing pre-filled messages with service titles directly to the operations dispatch desk.
- **Emergency Relocation Hotline:** Persistent floating action controls with immediate telephone dialing and back-to-top smooth scrolling.

### 4. Interactive Gallery & Customer Proof
- Responsive media gallery categorized by Villa Moves, Apartment Moves, Fleet & Equipment, and White-Glove Packing.
- Built-in lightbox modal (`#movexaLightbox`) for high-resolution visual previews.

### 5. Educational Knowledge Hub (Blog)
- 10 in-depth moving guides covering Dubai NOC permits, DEWA disconnection, packing fragile items, moving with pets, and international customs clearance.

---

## 🛠 Tech Stack

- **Backend Framework:** [Laravel 10.x](https://laravel.com/)
- **Programming Language:** PHP 8.1+
- **Frontend Styling:** [Tailwind CSS 3.x](https://tailwindcss.com/) with custom `@tailwindcss/forms`
- **Frontend Interactivity:** [Alpine.js 3.x](https://alpinejs.dev/)
- **Asset Bundling:** [Vite 5.x](https://vitejs.dev/)
- **Icons:** [Font Awesome 6 Pro / Free](https://fontawesome.com/)
- **Typography:** Google Fonts (*Plus Jakarta Sans* & *Manrope*)
- **Image Optimization:** High-fidelity, lightweight modern **WebP** formats

---

## 📂 System Architecture & Directory Structure

```text
nexamove/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── PageController.php          # Primary controller serving static & dynamic content
│   │   │   └── Auth/                       # Laravel Breeze authentication controllers
│   │   └── Middleware/
│   └── Models/
├── config/
│   ├── app.php
│   └── movexa.php                         # Core project configuration (services, destinations, blogs, FAQs)
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
│   ├── images/
│   │   ├── blog/                          # WebP blog cover imagery
│   │   ├── destinations/                  # International country destination banners
│   │   ├── gallery/                       # Showcase operational fleet and team photography
│   │   ├── hero/                          # High-resolution hero slides
│   │   ├── logo/                          # Vector and transparent WebP brand logos
│   │   ├── services/                      # Service category covers
│   │   └── why-choose-us/                 # Trust and certification visuals
│   ├── favicon.ico
│   ├── index.php
│   └── robots.txt
├── resources/
│   ├── css/
│   │   └── app.css                        # Tailwind directives, custom glassmorphism, animations
│   ├── js/
│   │   ├── app.js                         # Alpine.js initializers and global client scripts
│   │   └── bootstrap.js
│   └── views/
│       ├── components/                    # Blade components (header, footer, modals, cards, breadcrumbs)
│       │   ├── breadcrumb.blade.php
│       │   ├── cta-banner.blade.php
│       │   ├── destination-card.blade.php
│       │   ├── footer.blade.php
│       │   ├── header.blade.php
│       │   ├── quote-modal.blade.php
│       │   └── service-card.blade.php
│       ├── layouts/
│       │   └── app.blade.php              # Master layout with SEO headers, lightbox & WhatsApp trigger
│       └── pages/                         # Core views
│           ├── about.blade.php
│           ├── blog.blade.php
│           ├── blog-detail.blade.php
│           ├── contact.blade.php
│           ├── destination-detail.blade.php
│           ├── destinations.blade.php
│           ├── faq.blade.php
│           ├── gallery.blade.php
│           ├── home.blade.php
│           ├── international-moving.blade.php
│           ├── local-moving.blade.php
│           ├── privacy.blade.php
│           ├── service-detail.blade.php
│           ├── services.blade.php
│           ├── sitemap.blade.php
│           └── terms.blade.php
├── routes/
│   ├── web.php                            # Clean semantic routing
│   └── console.php
├── tailwind.config.js
├── vite.config.js
├── composer.json
└── package.json
```

---

## 📋 Requirements

Before setting up the project locally or in production, ensure your environment meets the following specifications:

- **PHP:** >= 8.1
  - Required Extensions: `BCMath`, `Ctype`, `Fileinfo`, `JSON`, `Mbstring`, `OpenSSL`, `PDO`, `Tokenizer`, `XML`, `GD` / `Imagick`
- **Composer:** >= 2.x
- **Node.js:** >= 18.x
- **NPM:** >= 9.x
- **Web Server:** Apache (with `mod_rewrite` enabled) or Nginx
- **Database (Optional for basic viewing / required for user auth):** MySQL 8.0+ or MariaDB 10.4+

---

## ⚙️ Getting Started / Installation

### 1. Clone the Repository
```bash
git clone https://github.com/NadeemUllah1998/movexa.git
cd movexa
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install JavaScript Dependencies
```bash
npm install
```

### 4. Configure Environment
Duplicate the environment template and configure your local settings:
```bash
cp .env.example .env
```

Generate the application encryption key:
```bash
php artisan key:generate
```

### 5. Compile Frontend Assets
For local development with Hot Module Replacement (HMR):
```bash
npm run dev
```

For production builds:
```bash
npm run build
```

### 6. Serve the Application
Start the built-in PHP development server:
```bash
php artisan serve
```

Visit the application at: `http://127.0.0.1:8000`

---

## 🔧 Configuration (`config/movexa.php`)

All company profile details, contact numbers, services, global destination corridors, blog articles, and FAQs are managed centrally in `config/movexa.php`.

To update the operational details:
```php
'brand' => [
    'name' => 'MOVEXA',
    'descriptor' => 'GLOBAL MOVING & RELOCATIONS',
    'phone' => '+971 50 706 0165',
    'whatsapp_number' => '971507060165',
    'email' => 'inquiry@movexa.ae',
    'location' => 'Dubai, United Arab Emirates',
],
```

---

## 🗺 Page & Route Sitemap

| Route Name | URI | Description |
|---|---|---|
| `home` | `/` | Main showcase homepage with interactive hero & estimator |
| `about` | `/about` | Company background, certifications, and moving protocol |
| `services.index` | `/services` | Primary directory of all 9 relocation categories |
| `services.show` | `/services/{slug}` | Service detail pages (e.g. `villa-moving`, `home-moving`) |
| `local-moving` | `/local-moving-dubai` | Dedicated local moving in Dubai landing page |
| `international-moving` | `/international-moving` | Global freight & overseas relocations landing page |
| `destinations.index` | `/destinations` | Interactive directory of 12 international country routes |
| `destinations.show` | `/destinations/{slug}` | Country-specific customs, shipping & document guide |
| `gallery` | `/gallery` | Categorized showcase with interactive lightbox preview |
| `blog.index` | `/blog` | Relocation knowledge hub with search & categories |
| `blog.show` | `/blog/{slug}` | In-depth moving & settlement guides |
| `faq` | `/faq` | Categorized interactive FAQ accordion |
| `contact` | `/contact` | Inquiry form, office details, and WhatsApp dispatch |
| `legal.privacy` | `/privacy-policy` | UAE compliant privacy policy |
| `legal.terms` | `/terms-conditions` | Moving terms, insurance, and transit terms |
| `sitemap` | `/sitemap.xml` | Auto-generated XML sitemap for Google Search Console |

---

## ⚡ Asset Pipeline & Optimization

- **WebP Image Format:** All operational photos, icons, and hero visuals have been converted to WebP format, achieving substantial bandwidth savings and sub-second Largest Contentful Paint (LCP).
- **Vite Bundler:** Modern tree-shaking and asset minification producing streamlined CSS and JS bundles.
- **Tailwind JIT:** Zero unused CSS in production builds.

To clear view and configuration caches:
```bash
php artisan optimize:clear
```

---

## 🔍 SEO & Social Metadata

Every view extends `layouts.app` and leverages dynamic meta tags:
- Standard meta tags (`title`, `description`, `keywords`, `canonical`)
- **OpenGraph** properties for Facebook and LinkedIn (`og:type`, `og:title`, `og:description`, `og:image`, `og:url`)
- **Twitter Cards** (`summary_large_image`)
- Valid XML sitemap dynamically generated at `/sitemap.xml`
- Search bot instructions pre-configured in `public/robots.txt`

---

## 🤝 Contributing

Contributions, feedback, and feature suggestions are welcome.
1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## 📄 License & Author

- **Author:** [Nadeem Ullah](https://github.com/NadeemUllah1998) (`nadeemuom1@gmail.com`)
- **Project:** MOVEXA Relocations Web Platform
- **License:** Open-source software licensed under the [MIT License](LICENSE).
