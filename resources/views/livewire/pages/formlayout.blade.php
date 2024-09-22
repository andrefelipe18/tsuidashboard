<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div class="p-4 rounded-lg mt-14">
    <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="p-6 rounded-xl bg-gray-50 dark:bg-gray-800">
            <p class="block mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Vertical</p>
            <div class="flex flex-col gap-4">
                <x-ts-input label="Name" />
                <x-ts-input label="Email" />
                <x-ts-input label="Password" />
            </div>
        </div>
        <div class="space-y-4">
            <div class="p-6 rounded-xl bg-gray-50 dark:bg-gray-800">
                <p class="block mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Horizontal</p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center gap-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                        <x-ts-input />
                    </div>
                    <div class="flex items-center gap-2">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                        <x-ts-input />
                    </div>
                </div>
            </div>
            <div class="p-6 rounded-xl bg-gray-50 dark:bg-gray-800">
                <p class="block mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Inline</p>
                <div class="flex gap-4">
                    <div class="flex items-center gap-2">
                        <x-ts-input placeholder="Name" />
                        <x-ts-input placeholder="Email" />
                        <x-ts-button>Submit</x-ts-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="p-6 rounded-xl bg-gray-50 dark:bg-gray-800">
            <p class="block mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Vertical Grid</p>
            <div class="grid grid-cols-2 gap-4">
                <x-ts-input label="Name" />
                <x-ts-input label="Email" />
            </div>
        </div>
        <div class="p-6 rounded-xl bg-gray-50 dark:bg-gray-800">
            <p class="block mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Hint Text</p>
            <x-ts-input label="Name" hint="Your full name" />
        </div>
    </div>
    <div class="">
        <div class="p-6 rounded-xl bg-gray-50 dark:bg-gray-800">
            <p class="block mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Advanced</p>
            <div class="flex flex-col gap-4">
                <div class="grid grid-cols-2 gap-4">
                    <x-ts-input label="First Name" />
                    <x-ts-input label="Last Name" />
                </div>
                <x-ts-textarea label="Address" />
                <div class="grid items-center grid-cols-2 gap-4">
                    <x-ts-select.native label="State" :options="['Option 1', 'Option 2','Option 3']" />
                    <x-ts-input label="ZIP" />
                </div>
            </div>
        </div>
    </div>
</div>