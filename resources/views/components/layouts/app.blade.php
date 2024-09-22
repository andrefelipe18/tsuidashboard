<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  x-data="tallstackui_darkTheme()" x-bind:class="{ 'dark bg-[#09090b]': darkTheme, 'bg-[#f3f4f6]': !darkTheme }">>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        TSUI Dashboard
    </title>

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
