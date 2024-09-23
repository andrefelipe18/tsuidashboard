<div class="h-fit">
    <x-ts-card>
        <div class="flex items-center gap-6 mb-2">
            <div class="">
                <x-card.title>Radio</x-card.title>
                <div class="flex gap-4">
                    <x-ts-radio label="Rio de Janeiro" />
                    <x-ts-radio label="São Paulo" color="secondary" />
                    <x-ts-radio label="Fortaleza" color="red" />
                </div>
            </div>
            <div class="">
                <x-card.title>Checkbox</x-card.title>
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
    </x-ts-card>
</div>