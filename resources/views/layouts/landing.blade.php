@php
    $businessType = business_type() ?? 'clinic';

    // Theme colors per business type
    $landingThemes = [
        'clinic' => [
            'primary' => 'primary',
            'gradient_from' => 'from-primary-500',
            'gradient_to' => 'to-primary-400',
            'bg_light' => 'bg-primary-100',
            'bg_50' => 'bg-primary-50',
            'text' => 'text-primary-600',
            'text_700' => 'text-primary-700',
            'border' => 'border-primary-100',
            'border_400' => 'border-primary-400',
            'hover_bg' => 'hover:bg-primary-50',
            'hover_text' => 'hover:text-primary-600',
            'shadow' => 'shadow-primary-200',
            'hover_shadow' => 'hover:shadow-primary-200',
            'group_hover_shadow' => 'group-hover:shadow-primary-300',
            'bg_gradient_1' => 'from-primary-200/40 to-sage/30',
            'bg_gradient_2' => 'from-primary-100/50 to-sand/50',
            'bg_gradient_3' => 'from-primary-100/30 to-sage/20',
        ],
        'salon' => [
            'primary' => 'purple',
            'gradient_from' => 'from-purple-500',
            'gradient_to' => 'to-violet-600',
            'bg_light' => 'bg-purple-100',
            'bg_50' => 'bg-purple-50',
            'text' => 'text-purple-600',
            'text_700' => 'text-purple-700',
            'border' => 'border-purple-100',
            'border_400' => 'border-purple-400',
            'hover_bg' => 'hover:bg-purple-50',
            'hover_text' => 'hover:text-purple-600',
            'shadow' => 'shadow-purple-200',
            'hover_shadow' => 'hover:shadow-purple-200',
            'group_hover_shadow' => 'group-hover:shadow-purple-300',
            'bg_gradient_1' => 'from-purple-200/40 to-violet-200/30',
            'bg_gradient_2' => 'from-purple-100/50 to-violet-50/50',
            'bg_gradient_3' => 'from-violet-100/30 to-purple-100/30',
        ],
        'barbershop' => [
            'primary' => 'slate',
            'gradient_from' => 'from-slate-700',
            'gradient_to' => 'to-slate-900',
            'bg_light' => 'bg-slate-100',
            'bg_50' => 'bg-slate-50',
            'text' => 'text-slate-700',
            'text_700' => 'text-slate-800',
            'border' => 'border-slate-200',
            'border_400' => 'border-slate-500',
            'hover_bg' => 'hover:bg-slate-50',
            'hover_text' => 'hover:text-slate-700',
            'shadow' => 'shadow-slate-200',
            'hover_shadow' => 'hover:shadow-slate-200',
            'group_hover_shadow' => 'group-hover:shadow-slate-300',
            'bg_gradient_1' => 'from-slate-200/30 to-slate-300/25',
            'bg_gradient_2' => 'from-slate-100/40 to-slate-200/35',
            'bg_gradient_3' => 'from-slate-100/25 to-slate-200/25',
        ],
    ];

    $lt = (object) ($landingThemes[$businessType] ?? $landingThemes['clinic']);
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', brand_name() . ' - ' . brand_tagline())</title>
    <meta name="description" content="@yield('description', brand_description())">
    @if(brand_logo('favicon'))
        <link rel="icon" type="image/x-icon" href="{{ brand_logo('favicon') }}">
    @endif

    <!-- Google Fonts — Velucia Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- SEO & OG Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', brand_name() . ' — ' . brand_tagline())">
    <meta property="og:description" content="@yield('description', brand_description())">
    <meta name="theme-color" content="#5D4157">
    <meta name="msapplication-TileColor" content="#5D4157">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        :root {
            --brand-primary: {{ brand_color('primary') }};
            --brand-primary-hover: {{ brand_color('primary_hover') }};
            --brand-primary-light: {{ brand_color('primary_light') }};
        }
    </style>
    @if(brand_custom_css())
        <style>{!! brand_custom_css() !!}</style>
    @endif
    @if(brand_custom_script('head'))
        {!! brand_custom_script('head') !!}
    @endif
</head>
<body class="bg-cream antialiased" x-data="{ mobileMenu: false }">

    <!-- Decorative Background Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-gradient-to-br {{ $lt->bg_gradient_1 }} blob-1 blur-3xl animate-pulse-soft"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-gradient-to-tr {{ $lt->bg_gradient_2 }} blob-2 blur-3xl" style="animation-delay: 1.5s;"></div>
        <div class="absolute top-1/2 left-1/2 w-[400px] h-[400px] bg-gradient-to-r {{ $lt->bg_gradient_3 }} rounded-full blur-3xl transform -translate-x-1/2 -translate-y-1/2"></div>
    </div>

    @yield('content')

    @stack('scripts')
    @if(brand_custom_script('body'))
        {!! brand_custom_script('body') !!}
    @endif
</body>
</html>
