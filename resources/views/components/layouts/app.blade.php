<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
        <x-app-sidebar />
        <div class="">
            {{ $slot }}
        </div>
    </div>

    @livewireScripts
</body>

</html>
