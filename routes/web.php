<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/', 'pages.dashboard')
    ->name('dashboard');


Route::prefix('uikit')->group(function () {
    Volt::route('/formlayout', 'pages.formlayout')
        ->name('formlayout');
});