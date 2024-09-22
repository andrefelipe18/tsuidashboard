<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  x-data="tallstackui_darkTheme()" x-bind:class="{ 'dark bg-[#09090b]': darkTheme, 'bg-[#f3f4f6]': !darkTheme }">>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        TSUI Dashboard
    </title>

    {{-- Lato Font Family --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Lato', sans-serif;
        }
    </style>

    <tallstackui:script />
    @livewireStyles
    @vite('resources/css/app.css')
</head>

<body x-data="{ isSidebarOpen: true }">
    <div class="">
        <x-topbar />
        <x-sidebar />
        <div class="">
            {{ $slot }}
        </div>
    </div>

    @livewireScripts
</body>
</html>
