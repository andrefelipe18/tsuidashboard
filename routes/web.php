<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/', 'pages.dashboard')
    ->name('dashboard');



Route::prefix('uikit')->group(function () {
    Volt::route('/formlayout', 'pages.formlayout')
        ->name('formlayout');

    Volt::route('/input', 'pages.input')
        ->name('input');

    Volt::route('/button', 'pages.button')
        ->name('button');

    Volt::route('/panel', 'pages.panel')
        ->name('panel');
});
