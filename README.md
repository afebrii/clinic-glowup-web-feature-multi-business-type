# ✨ GlowUp - All-in-One Beauty Business Management System

[![Laravel 12](https://img.shields.io/badge/Laravel-12-FF2D20?style=for-the-badge&logo=laravel)](https://laravel.com)
[![PHP 8.3](https://img.shields.io/badge/PHP-8.3-777BB4?style=for-the-badge&logo=php)](https://php.net)
[![Tailwind CSS 4](https://img.shields.io/badge/Tailwind_CSS-4-06B6D4?style=for-the-badge&logo=tailwind-css)](https://tailwindcss.com)
[![Vite 7](https://img.shields.io/badge/Vite-7-646CFF?style=for-the-badge&logo=vite)](https://vitejs.dev)

> **GlowUp** is a high-performance, enterprise-grade management system designed specifically for the beauty industry. Whether you run a **Beauty Clinic**, a **Hair Salon**, or a **Barbershop**, GlowUp provides the tools you need to scale your business.

---

## 🌟 Key Features

### 🏢 Multi-Business Adaptivity
Tailored experiences for different business types:
- 🌸 **Beauty Clinic:** Focus on treatment records, skin analysis, and medical-grade aesthetics. (Pink Theme)
- 💇 **Hair Salon:** Optimized for hair treatments, product sales, and stylist management. (Purple Theme)
- 💈 **Barbershop:** Streamlined for quick services, pomade inventory, and walk-in queues. (Blue Theme)

### 🚀 Core Modules
- **🛠️ Smart Setup Wizard:** Get your business up and running in 3 simple steps with auto-generated sample data.
- **📅 Advanced Appointment System:** Real-time calendar, automated slot calculation based on operating hours, and staff assignment.
- **💰 Integrated POS (Point of Sale):** Multi-item transactions, 6+ payment methods, automated invoicing, and partial payments.
- **💎 Loyalty & Referral Program:** Tiered loyalty levels (Bronze to Platinum), automated point earning/expiry, and a robust referral system to grow your client base.
- **📝 Treatment Records:** specialized for clinics, featuring multi-photo upload (before/after) and PDF exports.
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
   cd clinic-glowup-web
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

4. **Database & Assets:**
   ```bash
   php artisan migrate
   npm run build
   ```

5. **Start Development:**
   ```bash
   composer run dev
   ```

---

## 📁 Project Architecture

```
app/
├── Http/Controllers/Api/V1/  # Mobile API Endpoints
├── Models/                    # 20+ Core Business Entities
├── Services/                  # Business Logic & Import Engines
└── Providers/                 # Custom Business Service Providers
```

---

## 🤝 Contributing

We welcome contributions to GlowUp! Please check out our [Development Roadmap](docs/plan2-singleclinic/00-DEVELOPMENT-ROADMAP.md) for current tasks and future plans.

## 📄 License

This project is proprietary software. All rights reserved.

---

<p align="center">
  Built with ❤️ for the Beauty Industry
</p>
