<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>  

<div class="p-4 rounded-lg mt-14">
    <div class="grid grid-cols-2 gap-4 mb-4">
        <x-button.widgets.default />
        <x-button.widgets.icons />
    </div>
    <div class="grid grid-cols-2 gap-4 mb-4">
        <x-button.widgets.round-variation />
        <x-button.widgets.slots />
    </div>
    <div class="grid grid-cols-2 gap-4 mb-4">
        <x-button.widgets.colors />
        <x-button.widgets.outline />
    </div>
    <div class="grid grid-cols-2 gap-4 mb-4">
        <x-button.widgets.flat />
        <x-button.widgets.circle />
    </div>
</div>