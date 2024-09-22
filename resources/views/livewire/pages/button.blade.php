<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div class="p-4 rounded-lg mt-14">
    <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="p-6 rounded-xl bg-gray-50 dark:bg-gray-800 h-fit">
            <p class="block mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Default</p>
            <div class="flex gap-4">
                <x-ts-button text="Submit" />
                <x-ts-button text="Disabled" disabled />
                <x-ts-button href="https://tallstackui.com/docs/ui/button" target="_blank" text="Link to: TallStackUi" />
            </div>
        </div>
        <div class="p-6 rounded-xl bg-gray-50 dark:bg-gray-800 h-fit">
            <p class="block mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Icons</p>
            <div class="flex gap-4">
                <x-ts-button icon="bookmark-simple" solid />
                <x-ts-button icon="bookmark-simple" position="left">Bookmark</x-ts-button>
                <x-ts-button icon="bookmark-simple" position="right">Bookmark</x-ts-button>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="p-6 rounded-xl bg-gray-50 dark:bg-gray-800 h-fit">
            <p class="block mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Round Variation</p>
            <div class="flex gap-4">
                <x-ts-button round>TallStackUi</x-ts-button>
                <x-ts-button round color="red">TallStackUi</x-ts-button>
            </div>
        </div>
        <div class="p-6 rounded-xl bg-gray-50 dark:bg-gray-800 h-fit">
            <p class="block mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Left & Right Slots </p>
            <div class="flex gap-4">
                <x-ts-button>
                    <x-slot:left>
                        <x-ts-badge color="emerald" text="+99" round light />
                    </x-slot:left>
                    TallStackUi
                </x-ts-button>
                <x-ts-button>
                    <x-slot:right>
                        <x-ts-badge color="emerald" text="+99" round light />
                    </x-slot:right>
                    TallStackUi
                </x-ts-button>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="p-6 rounded-xl bg-gray-50 dark:bg-gray-800 h-fit">
            <p class="block mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Colors</p>
            <div class="flex gap-4">
                <x-ts-button text="Red" color="red" />
                <x-ts-button text="Orange" color="orange" />
                <x-ts-button text="Amber" color="amber" />
                <x-ts-button text="Yellow" color="yellow" />
                <x-ts-button text="Lime" color="lime" />
                <x-ts-button text="Green" color="green" />
                <x-ts-button text="Emerald" color="emerald" />
                <x-ts-button text="Teal" color="teal" />
            </div>
        </div>
        <div class="p-6 rounded-xl bg-gray-50 dark:bg-gray-800 h-fit">
            <p class="block mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Outline</p>
            <div class="flex gap-4">
                <x-ts-button text="Red" color="red" outline />
                <x-ts-button text="Orange" color="orange" outline />
                <x-ts-button text="Amber" color="amber" outline />
                <x-ts-button text="Yellow" color="yellow" outline />
                <x-ts-button text="Lime" color="lime" outline />
                <x-ts-button text="Green" color="green" outline />
                <x-ts-button text="Emerald" color="emerald" outline />
                <x-ts-button text="Teal" color="teal" outline />
            </div>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="p-6 rounded-xl bg-gray-50 dark:bg-gray-800 h-fit">
            <p class="block mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Flat Variations</p>
            <div class="flex gap-4">
                <x-ts-button text="Red" color="red" flat />
                <x-ts-button text="Orange" color="orange" flat />
                <x-ts-button text="Amber" color="amber" flat />
                <x-ts-button text="Yellow" color="yellow" flat />
                <x-ts-button text="Lime" color="lime" flat />
                <x-ts-button text="Green" color="green" flat />
                <x-ts-button text="Emerald" color="emerald" flat />
                <x-ts-button text="Teal" color="teal" flat />
            </div>
        </div>
        <div class="p-6 rounded-xl bg-gray-50 dark:bg-gray-800 h-fit">
            <p class="block mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Circle</p>
            <div class="flex gap-4">
                <x-ts-button.circle>TS</x-ts-button.circle>
                <x-ts-button.circle icon="users" />
                <x-ts-button.circle icon="users" color="red" />
                <x-ts-button.circle icon="users" color="orange" light />
                <x-ts-button.circle icon="users" color="amber" outline />
                <x-ts-button.circle icon="users" color="yellow" flat />
            </div>
        </div>
    </div>
</div>