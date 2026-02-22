# 🎨 Panduan Rebranding: GlowUp → Velucia

> **Tanggal Dibuat:** 22 Februari 2026
> **Versi:** 1.0.0
> **Status:** Draft — Siap Dieksekusi

---

## 🎯 Ringkasan Rebranding

| Item | Sebelum | Sesudah |
|------|---------|---------|
| Nama Brand | **GlowUp** | **Velucia** |
| Warna Primer | `#f43f5e` (Rose) | `#5D4157` (Deep Plum) |
| Warna Sekunder | `#FFEEE8` (Peach) | `#A8CABA` (Sage Green) |
| Warna Aksen | `#FFF9F5` (Cream) | `#F4E7D3` (Warm Sand) |
| Email Seeder | `@jagoflutter.com` | `@gmail.com` |

---

## 🖌️ Palet Warna Velucia

```
#5D4157  →  Deep Plum (Warna Primer Utama)
#A8CABA  →  Sage Green (Warna Sekunder / Aksen Segar)
#F4E7D3  →  Warm Sand (Background / Warna Hangat)
```

**Contoh penggunaan:**
- **Deep Plum `#5D4157`**: Tombol utama, header, gradient, teks brand
- **Sage Green `#A8CABA`**: Badge, highlight, elemen dekoratif, hover state
- **Warm Sand `#F4E7D3`**: Background section, card, area konten ringan

---

## 📋 Phase-by-Phase Rebranding Plan

---

## Phase 1 — Nama Brand & Konfigurasi Dasar

### Tujuan
Mengganti semua referensi nama brand **GlowUp** menjadi **Velucia** pada file konfigurasi dan environment.

---

### 1.1 File: `config/branding.php`

```php
// SEBELUM
'name' => env('APP_BRAND_NAME', 'GlowUp'),
'contact' => [
    'email' => env('APP_CONTACT_EMAIL', 'support@glowup.app'),
],
'footer' => [
    'powered_by_text' => env('APP_FOOTER_POWERED_BY', 'Powered by GlowUp'),
    'powered_by_url'  => env('APP_FOOTER_POWERED_BY_URL', 'https://glowup.app'),
],

// SESUDAH
'name' => env('APP_BRAND_NAME', 'Velucia'),
'contact' => [
    'email' => env('APP_CONTACT_EMAIL', 'support@velucia.app'),
],
'footer' => [
    'powered_by_text' => env('APP_FOOTER_POWERED_BY', 'Powered by Velucia'),
    'powered_by_url'  => env('APP_FOOTER_POWERED_BY_URL', 'https://velucia.app'),
],
```

**File:** [`config/branding.php`](file:///e:/Coding/PHP/JagoFlutter/afc/afc8/clinic-glowup-web-feature-multi-business-type/config/branding.php)
**Baris yang diubah:** 17, 56, 77, 78

---

### 1.2 File: `.env`

Tambahkan / perbarui variabel berikut di file `.env`:

```dotenv
APP_NAME=Velucia
APP_BRAND_NAME=Velucia
APP_BRAND_TAGLINE="Beauty & Wellness Management"
APP_BRAND_TAGLINE_ID="Manajemen Kecantikan & Wellness"
APP_CONTACT_EMAIL=support@velucia.app
APP_FOOTER_POWERED_BY="Powered by Velucia"
APP_FOOTER_POWERED_BY_URL=https://velucia.app

# Warna Tema Baru
APP_COLOR_PRIMARY=#5D4157
APP_COLOR_PRIMARY_HOVER=#4a3346
APP_COLOR_PRIMARY_LIGHT=#f5f0f4
APP_COLOR_ACCENT=#A8CABA
```

**File:** [`.env`](file:///e:/Coding/PHP/JagoFlutter/afc/afc8/clinic-glowup-web-feature-multi-business-type/.env)

---

### 1.3 File: `database/seeders/SettingSeeder.php`

```php
// SEBELUM
['key' => 'clinic_name',  'value' => 'GlowUp Clinic',          ...],
['key' => 'clinic_email', 'value' => 'hello@jagoflutter.com',  ...],

// SESUDAH
['key' => 'clinic_name',  'value' => 'Velucia Clinic',         ...],
['key' => 'clinic_email', 'value' => 'hello@velucia.app',      ...],
```

**File:** [`database/seeders/SettingSeeder.php`](file:///e:/Coding/PHP/JagoFlutter/afc/afc8/clinic-glowup-web-feature-multi-business-type/database/seeders/SettingSeeder.php)
**Baris yang diubah:** 14, 17

---

## Phase 2 — Warna Tema CSS

### Tujuan
Mengganti token warna Rose/Pink brand lama dengan palet warna Velucia: Deep Plum, Sage Green, dan Warm Sand.

---

### 2.1 File: `resources/css/app.css`

**Bagian `@theme` — Color Tokens:**

```css
/* SEBELUM — Rose (GlowUp Brand) */
--color-primary-50:  #fdf4f3;
--color-primary-100: #fce8e6;
--color-primary-200: #f9d5d2;
--color-primary-300: #f4b5ae;
--color-primary-400: #ec8b81;
--color-primary-500: #e06456;
--color-primary-600: #cc4637;
--color-primary-700: #ab372a;
--color-primary-800: #8e3127;
--color-primary-900: #772e26;

--color-cream: #FFF9F5;
--color-peach: #FFEEE8;

/* SESUDAH — Deep Plum + Sage Green + Warm Sand (Velucia Brand) */
--color-primary-50:  #f5f0f4;
--color-primary-100: #e8dce6;
--color-primary-200: #d0b8cc;
--color-primary-300: #b090ae;
--color-primary-400: #8d6888;
--color-primary-500: #5D4157;   /* Deep Plum — warna utama */
--color-primary-600: #4a3346;
--color-primary-700: #3a2838;
--color-primary-800: #2d1f2b;
--color-primary-900: #22181f;

--color-sage:   #A8CABA;         /* Sage Green — aksen */
--color-sand:   #F4E7D3;         /* Warm Sand — background */
--color-cream:  #FAF5F0;         /* Cream hangat */
```

**Bagian `.gradient-text`:**

```css
/* SEBELUM */
.gradient-text {
    background: linear-gradient(135deg, #e11d48 0%, #f43f5e 50%, #fb7185 100%);
    ...
}

/* SESUDAH */
.gradient-text {
    background: linear-gradient(135deg, #5D4157 0%, #7a5571 50%, #A8CABA 100%);
    ...
}
```

**Bagian `::-webkit-scrollbar`:**

```css
/* SEBELUM */
::-webkit-scrollbar-track  { background: #fdf4f3; }
::-webkit-scrollbar-thumb  { background: #fda4af; border-radius: 4px; }
::-webkit-scrollbar-thumb:hover { background: #fb7185; }

/* SESUDAH */
::-webkit-scrollbar-track  { background: #f5f0f4; }
::-webkit-scrollbar-thumb  { background: #b090ae; border-radius: 4px; }
::-webkit-scrollbar-thumb:hover { background: #5D4157; }
```

**Bagian form focus & checkbox:**

```css
/* SEBELUM */
input:focus, textarea:focus, select:focus {
    border-color: #f43f5e;
    box-shadow: 0 0 0 3px rgba(244, 63, 94, 0.1);
}
input[type="checkbox"]:checked, input[type="radio"]:checked {
    background-color: #f43f5e;
    border-color: #f43f5e;
}

/* SESUDAH */
input:focus, textarea:focus, select:focus {
    border-color: #5D4157;
    box-shadow: 0 0 0 3px rgba(93, 65, 87, 0.15);
}
input[type="checkbox"]:checked, input[type="radio"]:checked {
    background-color: #5D4157;
    border-color: #5D4157;
}
```

**File:** [`resources/css/app.css`](file:///e:/Coding/PHP/JagoFlutter/afc/afc8/clinic-glowup-web-feature-multi-business-type/resources/css/app.css)

---

### 2.2 File: `config/branding.php` — Warna Default

```php
// SEBELUM
'colors' => [
    'primary'       => env('APP_COLOR_PRIMARY', '#f43f5e'),   // Rose-500
    'primary_hover' => env('APP_COLOR_PRIMARY_HOVER', '#e11d48'),
    'primary_light' => env('APP_COLOR_PRIMARY_LIGHT', '#fff1f2'),
    'accent'        => env('APP_COLOR_ACCENT', '#8b5cf6'),
],
'tailwind' => [
    'primary'       => env('APP_TW_PRIMARY', 'rose'),
    'gradient_from' => env('APP_TW_GRADIENT_FROM', 'from-rose-400'),
    'gradient_to'   => env('APP_TW_GRADIENT_TO', 'to-rose-500'),
],

// SESUDAH
'colors' => [
    'primary'       => env('APP_COLOR_PRIMARY', '#5D4157'),   // Deep Plum
    'primary_hover' => env('APP_COLOR_PRIMARY_HOVER', '#4a3346'),
    'primary_light' => env('APP_COLOR_PRIMARY_LIGHT', '#f5f0f4'),
    'accent'        => env('APP_COLOR_ACCENT', '#A8CABA'),    // Sage Green
],
'tailwind' => [
    'primary'       => env('APP_TW_PRIMARY', 'primary'),
    'gradient_from' => env('APP_TW_GRADIENT_FROM', 'from-primary-500'),
    'gradient_to'   => env('APP_TW_GRADIENT_TO', 'to-primary-400'),
],
```

**File:** [`config/branding.php`](file:///e:/Coding/PHP/JagoFlutter/afc/afc8/clinic-glowup-web-feature-multi-business-type/config/branding.php)
**Baris yang diubah:** 36–51

---

### 2.3 File: `config/business.php` — Tema Per Tipe Bisnis

Untuk bisnis tipe **clinic** (default), ubah warna tema dari pink ke primary Velucia:

```php
// SEBELUM — clinic theme
'theme' => [
    'primary'      => 'pink',
    'primary_hex'  => '#ec4899',
    'gradient_from'=> 'from-pink-500',
    'gradient_to'  => 'to-rose-500',
    'bg_light'     => 'bg-pink-50',
    'bg_medium'    => 'bg-pink-100',
    'text_primary' => 'text-pink-600',
    'text_dark'    => 'text-pink-700',
    'border'       => 'border-pink-200',
    'ring'         => 'ring-pink-500',
    'button'       => 'bg-pink-600 hover:bg-pink-700',
    'button_outline'=> 'border-pink-600 text-pink-600 hover:bg-pink-50',
],

// SESUDAH — clinic theme Velucia
'theme' => [
    'primary'      => 'primary',
    'primary_hex'  => '#5D4157',
    'gradient_from'=> 'from-primary-500',
    'gradient_to'  => 'to-primary-400',
    'bg_light'     => 'bg-primary-50',
    'bg_medium'    => 'bg-primary-100',
    'text_primary' => 'text-primary-600',
    'text_dark'    => 'text-primary-700',
    'border'       => 'border-primary-200',
    'ring'         => 'ring-primary-500',
    'button'       => 'bg-primary-600 hover:bg-primary-700',
    'button_outline'=> 'border-primary-600 text-primary-600 hover:bg-primary-50',
],
```

**File:** [`config/business.php`](file:///e:/Coding/PHP/JagoFlutter/afc/afc8/clinic-glowup-web-feature-multi-business-type/config/business.php)
**Baris yang diubah:** 42–55

---

## Phase 3 — Seeder Emails (jagoflutter.com → gmail.com)

### Tujuan
Mengganti semua email demo `@jagoflutter.com` di seeder menjadi `@gmail.com` agar tampak lebih natural sebagai data demo.

---

### 3.1 File: `database/seeders/UserSeeder.php`

```php
// SEBELUM
'email' => 'owner@jagoflutter.com',   // baris 14
'email' => 'admin@jagoflutter.com',   // baris 23
'email' => 'maya@jagoflutter.com',    // baris 32
'email' => 'lisa@jagoflutter.com',    // baris 41
'email' => 'sarah@jagoflutter.com',   // baris 50

// SESUDAH
'email' => 'owner@gmail.com',
'email' => 'admin@gmail.com',
'email' => 'maya@gmail.com',
'email' => 'lisa@gmail.com',
'email' => 'sarah@gmail.com',
```

**File:** [`database/seeders/UserSeeder.php`](file:///e:/Coding/PHP/JagoFlutter/afc/afc8/clinic-glowup-web-feature-multi-business-type/database/seeders/UserSeeder.php)

---

### 3.2 File: `database/seeders/CustomerSeeder.php`

```php
// SEBELUM (semua email menggunakan @jagoflutter.com)
'email' => 'rina@jagoflutter.com',
'email' => 'siti@jagoflutter.com',
'email' => 'dewi@jagoflutter.com',
// ... dst (total 11 email)

// SESUDAH (ganti domain ke @gmail.com)
'email' => 'rina@gmail.com',
'email' => 'siti@gmail.com',
'email' => 'dewi@gmail.com',
// ... dst
```

**File:** [`database/seeders/CustomerSeeder.php`](file:///e:/Coding/PHP/JagoFlutter/afc/afc8/clinic-glowup-web-feature-multi-business-type/database/seeders/CustomerSeeder.php)
**Total baris:** 11 email perlu diubah (baris 16, 27, 38, 49, 60, 71, 82, 93, 104, 115, 126, 137)

---

### 3.3 File: `database/seeders/SettingSeeder.php`

```php
// SEBELUM
['key' => 'clinic_email', 'value' => 'hello@jagoflutter.com', ...],

// SESUDAH
['key' => 'clinic_email', 'value' => 'hello@velucia.app', ...],
```

**File:** [`database/seeders/SettingSeeder.php`](file:///e:/Coding/PHP/JagoFlutter/afc/afc8/clinic-glowup-web-feature-multi-business-type/database/seeders/SettingSeeder.php)
**Baris:** 17

---

## Phase 4 — Views & Landing Page

### Tujuan
Memperbarui tampilan halaman landing yang masih mengandung referensi GlowUp atau link JagoFlutter.

---

### 4.1 File: `resources/views/landing/index.blade.php`

**a) Brand name fallback (baris 103):**
```html
<!-- SEBELUM -->
<span class="...">{{ brand_name() ?: 'GlowUp' }}</span>

<!-- SESUDAH -->
<span class="...">{{ brand_name() ?: 'Velucia' }}</span>
```

**b) Link "Get Source Code" (baris 187, 218, 246, 708, 876, 1045):**
```html
<!-- SEBELUM -->
<a href="https://jagoflutter.com/glowupclinic" ...>

<!-- SESUDAH — ganti ke link produk Velucia Anda sendiri -->
<a href="https://velucia.app" ...>
```

**c) Alt teks gambar (baris 295, 310):**
```html
<!-- SEBELUM -->
alt="GlowUp Tablet App - Dashboard"
alt="GlowUp Mobile App - Dashboard"

<!-- SESUDAH -->
alt="Velucia Tablet App - Dashboard"
alt="Velucia Mobile App - Dashboard"
```

**d) WhatsApp link (baris 1051):**
```html
<!-- SEBELUM -->
href="https://wa.me/6285640899224?text=Halo,%20saya%20tertarik%20dengan%20event%20AFC%20GlowUp%20Clinic"

<!-- SESUDAH — sesuaikan kontak dan teks pesan -->
href="https://wa.me/6285640899224?text=Halo,%20saya%20tertarik%20dengan%20Velucia%20Clinic"
```

**e) Footer powered by (baris 1111):**
```html
<!-- SEBELUM -->
{{ brand('footer.powered_by_text', 'GlowUp') }}

<!-- SESUDAH -->
{{ brand('footer.powered_by_text', 'Velucia') }}
```

**File:** [`resources/views/landing/index.blade.php`](file:///e:/Coding/PHP/JagoFlutter/afc/afc8/clinic-glowup-web-feature-multi-business-type/resources/views/landing/index.blade.php)

---

### 4.2 File: `resources/views/auth/login.blade.php`

**a) Email demo bawaan (baris 68, 136–137):**
```html
<!-- SEBELUM -->
value="{{ old('email', 'owner@jagoflutter.com') }}"
<p>Owner: owner@jagoflutter.com</p>
<p>Admin: admin@jagoflutter.com</p>

<!-- SESUDAH -->
value="{{ old('email', 'owner@gmail.com') }}"
<p>Owner: owner@gmail.com</p>
<p>Admin: admin@gmail.com</p>
```

**b) Footer powered by (baris 144):**
```html
<!-- SEBELUM -->
{{ brand('footer.powered_by_text', 'GlowUp') }}

<!-- SESUDAH -->
{{ brand('footer.powered_by_text', 'Velucia') }}
```

**File:** [`resources/views/auth/login.blade.php`](file:///e:/Coding/PHP/JagoFlutter/afc/afc8/clinic-glowup-web-feature-multi-business-type/resources/views/auth/login.blade.php)

---

### 4.3 File: `resources/views/settings/branding.blade.php`

**Placeholder form (baris 300, 310):**
```html
<!-- SEBELUM -->
placeholder="GlowUp"
placeholder="https://glowup.app"

<!-- SESUDAH -->
placeholder="Velucia"
placeholder="https://velucia.app"
```

**File:** [`resources/views/settings/branding.blade.php`](file:///e:/Coding/PHP/JagoFlutter/afc/afc8/clinic-glowup-web-feature-multi-business-type/resources/views/settings/branding.blade.php)

---

## Phase 5 — Rekomendasi Tambahan (Opsional tapi Direkomendasikan)

### 5.1 🖼️ Logo & Favicon

| Item | Status | Aksi |
|------|--------|------|
| Logo utama | Belum ada custom | Buat logo "Velucia" dengan warna `#5D4157` dan buat file ke `public/images/logo.svg` atau `.png` |
| Favicon | Belum ada custom | Buat `favicon.ico` / `favicon.png` berisi inisial "V" dengan warna Velucia |
| OG Image | Belum ada | Buat gambar sosial media 1200×630px untuk metadata |

Setelah logo dibuat, atur di `.env`:
```dotenv
APP_LOGO_PATH=images/logo.png
APP_FAVICON_PATH=images/favicon.ico
```

---

### 5.2 📝 Font Typography

Saat ini menggunakan `DM Sans` + `Playfair Display`. Untuk Velucia yang bernuansa elegan dan premium, pertimbangkan:

| Font | Kategori | Link |
|------|----------|------|
| **Cormorant Garamond** | Display / Heading | Google Fonts |
| **Jost** | Body / Sans-serif | Google Fonts |
| **Libre Baskerville** | Alternatif serif | Google Fonts |

Perubahan di `resources/css/app.css`:
```css
@theme {
    --font-sans:    'Jost', ui-sans-serif, system-ui, sans-serif;
    --font-display: 'Cormorant Garamond', ui-serif, Georgia, serif;
}
```

Dan tambahkan Google Fonts di `<head>` layout:
```html
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">
```

---

### 5.3 📧 Template Email

File email OTP di `resources/views/emails/customer-otp.blade.php` perlu diperiksa dan diperbarui jika ada referensi GlowUp di konten teks, nama pengirim, atau warna:

- Ganti nama brand dalam teks email dari **GlowUp** → **Velucia**
- Sesuaikan warna tombol/header email dari Rose ke **Deep Plum `#5D4157`**
- Pastikan `from_name` di konfigurasi mail memakai nama Velucia

Di `.env`:
```dotenv
MAIL_FROM_NAME="Velucia"
MAIL_FROM_ADDRESS=noreply@velucia.app
```

---

### 5.4 🌍 Meta Tags & SEO

Di file layout utama (`resources/views/layouts/landing.blade.php` dan `dashboard.blade.php`), periksa dan perbarui:

```html
<!-- Meta Tags -->
<meta name="description" content="Velucia — Beauty & Wellness Management System">
<meta property="og:title" content="Velucia">
<meta property="og:description" content="Sistem manajemen klinik kecantikan modern">
<meta property="og:image" content="{{ asset('images/og-image.png') }}">
<meta name="theme-color" content="#5D4157">

<!-- Title -->
<title>{{ brand_name() ?: 'Velucia' }} — {{ $page_title ?? 'Dashboard' }}</title>
```

---

### 5.5 📱 PWA / Manifest (Opsional)

Jika ada file `public/manifest.json`, perbarui:

```json
{
    "name": "Velucia",
    "short_name": "Velucia",
    "theme_color": "#5D4157",
    "background_color": "#F4E7D3",
    "icons": [...]
}
```

---

### 5.6 🗒️ README & Dokumentasi

- Perbarui `README.md` — ganti semua referensi GlowUp → Velucia
- Perbarui `AGENTS.md` dan `CLAUDE.md` jika ada nama brand di sana
- Perbarui file `docs/` yang relevan

---

## 📊 Ringkasan File yang Perlu Diubah

| Phase | File | Jenis Perubahan | Prioritas |
|-------|------|-----------------|-----------|
| 1 | `config/branding.php` | Nama brand, email, URL | 🔴 Wajib |
| 1 | `.env` | Variable brand & warna | 🔴 Wajib |
| 1 | `database/seeders/SettingSeeder.php` | Nama klinik, email | 🔴 Wajib |
| 2 | `resources/css/app.css` | Color tokens (Rose → Plum) | 🔴 Wajib |
| 2 | `config/branding.php` | Default colors | 🔴 Wajib |
| 2 | `config/business.php` | Tema clinic (pink → primary) | 🟠 Penting |
| 3 | `database/seeders/UserSeeder.php` | Email dari @jagoflutter.com → @gmail.com | 🔴 Wajib |
| 3 | `database/seeders/CustomerSeeder.php` | Email dari @jagoflutter.com → @gmail.com | 🔴 Wajib |
| 4 | `resources/views/landing/index.blade.php` | Nama brand, link, alt text | 🟠 Penting |
| 4 | `resources/views/auth/login.blade.php` | Email demo, footer text | 🟠 Penting |
| 4 | `resources/views/settings/branding.blade.php` | Placeholder teks | 🟡 Disarankan |
| 5 | Logo & Favicon | Aset baru | 🟡 Disarankan |
| 5 | Font typography | Ganti font keluarga | 🟡 Disarankan |
| 5 | Template email | Nama brand di email | 🟡 Disarankan |
| 5 | Meta tags & SEO | Title, description, OG | 🟡 Disarankan |

---

## ⚡ Perintah Cepat Setelah Rebranding

Setelah perubahan selesai, jalankan perintah berikut:

```bash
# Reset cache konfigurasi
php artisan config:clear
php artisan cache:clear
php artisan view:clear

# Re-seed database (jika ingin data demo baru)
php artisan migrate:fresh --seed

# Build ulang aset CSS
npm run build
```

---

## 🔎 Verifikasi Rebranding

Gunakan perintah ini untuk memastikan tidak ada referensi GlowUp yang tertinggal:

```bash
# Cari sisa referensi GlowUp (kecuali folder storage, vendor, node_modules)
grep -ri "glowup" --include="*.php" --include="*.blade.php" --include="*.css" --include="*.env*" \
  --exclude-dir=storage --exclude-dir=vendor --exclude-dir=node_modules .

# Cari sisa email jagoflutter
grep -ri "jagoflutter" --include="*.php" --include="*.blade.php" \
  --exclude-dir=storage --exclude-dir=vendor --exclude-dir=node_modules .
```

---

*Dokumen ini dibuat oleh Antigravity AI — 22 Februari 2026*
