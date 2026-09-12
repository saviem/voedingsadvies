<!DOCTYPE html>
<html lang="nl" class="h-full antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@hasSection('title')@yield('title') · @endif{{ config('app.name') }}</title>
    <meta name="description" content="@yield('description', 'Doorzoekbare kennisbank: wat mag je wel en niet eten tijdens de candidakuur van praktijk ARDRA.')">
    <meta name="theme-color" content="#F6F7F4">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Candidakuur">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <link rel="icon" href="{{ asset('brand/favicon-light-32.png') }}?v=gut18" type="image/png" sizes="32x32" media="(prefers-color-scheme: light)">
    <link rel="icon" href="{{ asset('brand/favicon-dark-32.png') }}?v=gut18" type="image/png" sizes="32x32" media="(prefers-color-scheme: dark)">
    <link rel="icon" href="{{ asset('favicon.ico') }}?v=gut18" sizes="any">
    <link rel="apple-touch-icon" href="{{ asset('brand/apple-touch-icon.png') }}?v=gut18">
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full flex flex-col font-sans bg-paper text-ink">
    @include('partials.header')
    <main class="flex-1">
        @yield('content')
    </main>
    @include('partials.footer')
</body>
</html>
