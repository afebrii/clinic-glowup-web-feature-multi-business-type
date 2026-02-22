# ✨ Velucia — All-in-One Beauty & Wellness Management System

[![Laravel 12](https://img.shields.io/badge/Laravel-12-FF2D20?style=for-the-badge&logo=laravel)](https://laravel.com)
[![PHP 8.3](https://img.shields.io/badge/PHP-8.3-777BB4?style=for-the-badge&logo=php)](https://php.net)
[![Tailwind CSS 4](https://img.shields.io/badge/Tailwind_CSS-4-06B6D4?style=for-the-badge&logo=tailwind-css)](https://tailwindcss.com)
[![Vite 7](https://img.shields.io/badge/Vite-7-646CFF?style=for-the-badge&logo=vite)](https://vitejs.dev)

> **Velucia** is a high-performance, enterprise-grade management system designed specifically for the beauty & wellness industry. Whether you run a **Beauty Clinic**, a **Hair Salon**, or a **Barbershop**, Velucia provides the tools you need to scale your business.

---

## 🎨 Brand Identity

| Item | Value |
|------|-------|
| **Brand Color** | `#5D4157` — Deep Plum |
| **Accent Color** | `#A8CABA` — Sage Green |
| **Background** | `#F4E7D3` — Warm Sand |
| **Typography** | Cormorant Garamond (Display) + Jost (Body) |

---

## 🌟 Key Features

### 🏢 Multi-Business Adaptivity
Tailored experiences for different business types:
- 🌸 **Beauty Clinic:** Focus on treatment records, skin analysis, and medical-grade aesthetics. (Deep Plum Theme)
- 💇 **Hair Salon:** Optimized for hair treatments, product sales, and stylist management. (Purple Theme)
- 💈 **Barbershop:** Streamlined for quick services, pomade inventory, and walk-in queues. (Slate/Charcoal Theme)

### 🚀 Core Modules
- **🛠️ Smart Setup Wizard:** Get your business up and running in 3 simple steps with auto-generated sample data.
- **📅 Advanced Appointment System:** Real-time calendar, automated slot calculation based on operating hours, and staff assignment.
- **💰 Integrated POS (Point of Sale):** Multi-item transactions, 6+ payment methods, automated invoicing, and partial payments.
- **💎 Loyalty & Referral Program:** Tiered loyalty levels (Bronze to Platinum), automated point earning/expiry, and a robust referral system to grow your client base.
- **📝 Treatment Records:** Specialized for clinics, featuring multi-photo upload (before/after) and PDF exports.
- **📦 Inventory & Packages:** Track product stock and manage service packages with automated session tracking.

### 🌐 Digital Presence
- **🏠 Adaptive Landing Page:** Professional public-facing page that automatically matches your business type's theme.
- **🔐 Customer Portal:** Dedicated space for clients to book online, view appointment history, check loyalty points, and track their treatment progress.
- **📱 Mobile Ready API:** Versioned RESTful API (v1) powered by Laravel Sanctum, ready for native mobile app integration.

---

## 🛠️ Tech Stack

| Layer | Technology |
|-------|-----------|
| **Backend** | PHP 8.3 & Laravel 12 |
| **Frontend** | Tailwind CSS 4 & Alpine.js |
| **Database** | MySQL / PostgreSQL |
| **API Auth** | Laravel Sanctum |
| **Reporting** | DomPDF (PDF) & Maatwebsite (Excel/CSV) |
| **Testing** | PHPUnit 11 |

---

## 🚀 Getting Started

### Prerequisites
- PHP >= 8.3
- Composer
- Node.js & NPM
- Database (MySQL/PostgreSQL)

### Installation

1. **Clone the repository:**
   ```bash
   git clone <repository-url>
   cd clinic-glowup-web-feature-multi-business-type
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install
   ```

3. **Environment Setup:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure `.env`** — set database connection and brand variables:
   ```dotenv
   APP_NAME=Velucia
   APP_BRAND_NAME=Velucia
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Database & Assets:**
   ```bash
   php artisan migrate --seed
   npm run build
   ```

6. **Start Development:**
   ```bash
   composer run dev
   ```

### Demo Credentials

After seeding, you can log in with:

| Role | Email | Password |
|------|-------|----------|
| Owner | `owner@gmail.com` | `12345678` |
| Admin | `admin@gmail.com` | `12345678` |
| Beautician | `maya@gmail.com` | `12345678` |

---

## 📁 Project Architecture

```
app/
├── Http/Controllers/Api/V1/  # Mobile API Endpoints
├── Models/                    # 20+ Core Business Entities
├── Services/                  # Business Logic & Import Engines
└── Providers/                 # Custom Business Service Providers

resources/
├── css/app.css                # Tailwind v4 config & Velucia color tokens
├── views/
│   ├── landing/               # Public landing page (multi-business adaptive)
│   ├── dashboard/             # Admin dashboard
│   └── layouts/               # Shared layouts
```

---

## ⚡ Useful Commands

```bash
# Clear all caches
php artisan config:clear && php artisan cache:clear && php artisan view:clear

# Re-seed database with fresh demo data
php artisan migrate:fresh --seed

# Build production assets
npm run build
```

---

## 🤝 Contributing

Contributions are welcome! Please check out the project documentation in the `docs/` folder for current architecture and plans.

## 📄 License

This project is proprietary software. All rights reserved.

---

<p align="center">
  Built with ❤️ for the Beauty & Wellness Industry by <strong>Velucia</strong>
</p>
