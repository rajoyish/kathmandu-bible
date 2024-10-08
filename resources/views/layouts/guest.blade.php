<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('images/KBI-favicon.svg') }}" type="image/svg+xml">

    {{-- SEO TITLE --}}
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reddit+Sans:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">

    {{-- ShareThis --}}

    <script type='text/javascript'
        src='https://platform-api.sharethis.com/js/sharethis.js#property=66911a757f42390019536c40&product=sticky-share-buttons'
        async='async'></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/embla-slider.js', 'resources/js/photoswipe.js', 'resources/js/gallery-carousel.js'])

</head>

<body class="font-sans min-h-screen text-lg antialiased">
    @include('layouts.header')
    @include('layouts.navigation')
    <main>
        {{ $slot }}
    </main>
    @include('layouts.footer')
</body>

</html>
