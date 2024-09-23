<x-ts-card>
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
</x-ts-card>
