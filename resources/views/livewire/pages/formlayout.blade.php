<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div class="p-4 rounded-lg mt-14">
    <div class="grid grid-cols-2 gap-4 mb-4">
        <x-formlayout.widgets.vertical />
        <div class="space-y-8">
            <x-formlayout.widgets.horizontal />
            <x-formlayout.widgets.inline />
        </div>
    </div>
    <div class="grid grid-cols-2 gap-4 mb-4">
        <x-formlayout.widgets.vertical-grid />
        <x-formlayout.widgets.hint-text />
    </div>
    <div class="">
        <x-formlayout.widgets.advanced />
    </div>
</div>