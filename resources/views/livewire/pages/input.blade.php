<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div class="p-4 rounded-lg mt-14">
    <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="p-6 rounded-xl bg-gray-50 dark:bg-gray-800">
            <p class="block mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">InputText</p>
            <div class="grid grid-cols-3 gap-2">
                <x-ts-input placeholder="Default" />
                <x-ts-input placeholder="Disabled" disabled />
                <x-ts-input placeholder="Readonly" readonly />
            </div>
            <p class="block mt-2 mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Icons</p>
            <x-ts-input label="Name" icon="users" />
            <x-ts-input label="Search" icon="magnifying-glass" position="right" />
            <p class="block mt-2 mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Hint</p>
            <x-ts-input label="Name" hint="Your full name" />
            <p class="block mt-2 mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Textarea</p>
            <x-ts-textarea label="Message" />
            <p class="block mt-2 mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Prefix and Sufix</p>
            <x-ts-input label="Price" prefix="$" />
            <x-ts-input label="Email" suffix="@tallstackui.com" />
            <p class="block mt-2 mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Date Picker</p>
            <x-ts-date />
            <p class="block mt-2 mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Number</p>
            <x-ts-number chevron />
        </div>
        <div class="p-6 rounded-xl bg-gray-50 dark:bg-gray-800 h-fit">
            <div class="flex items-center gap-6 mb-2">
                <div class="">
                    <p class="block mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Radio</p>
                    <div class="flex gap-4">
                        <x-ts-radio label="Rio de Janeiro" />
                        <x-ts-radio label="São Paulo" color="secondary" />
                        <x-ts-radio label="Fortaleza" color="red" />
                    </div>
                </div>
                <div class="">
                    <p class="block mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Checkbox</p>
                    <div class="flex gap-4">
                        <x-ts-checkbox label="Rio de Janeiro" />
                        <x-ts-checkbox label="São Paulo" color="secondary" />
                        <x-ts-checkbox label="Fortaleza" color="red" />
                    </div>
                </div>
            </div>
            <p class="block mt-2 mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Color</p>
            <x-ts-color />
            <p class="block mt-2 mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Pin</p>
            <x-ts-pin length="5" />
            <p class="block mt-2 mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Toggle</p>
            <div class="flex gap-4">
                <x-ts-toggle label="Receive Alert" />
                <x-ts-toggle label="Receive Notification" color="red" />
            </div>
            <p class="block mt-2 mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Time</p>
            <x-ts-time />
            <p class="block mt-2 mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Tag</p>
            <x-ts-tag />
            <p class="block mt-2 mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Range</p>
            <x-ts-range />
        </div>
    </div>
</div>