<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="font-sans antialiased">
    <div class="min-h-screen flex">
        <!-- Left Side (Form) -->
        <div class="w-full xl:w-1/2 bg-white flex flex-col justify-center p-8">
            {{ $slot }}
        </div>
        <!-- Right Side (Image) -->
        <div class="hidden xl:block xl:w-1/2 bg-cover bg-center" 
            style="background-image: url({{ asset('storage/images/banner.png') }});">
        </div>
    </div>

    @stack('modals')
</body>
</html>
