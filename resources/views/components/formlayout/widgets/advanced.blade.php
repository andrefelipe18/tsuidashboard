<x-ts-card>
    <x-card.title>Advanced</x-card.title>
    <div class="flex flex-col gap-4">
        <div class="grid grid-cols-2 gap-4">
            <x-ts-input label="First Name" />
            <x-ts-input label="Last Name" />
        </div>
        <x-ts-textarea label="Address" />
        <div class="grid items-center grid-cols-2 gap-4">
            <x-ts-select.native label="State" :options="['Option 1', 'Option 2', 'Option 3']" />
            <x-ts-input label="ZIP" />
        </div>
    </div>
</x-ts-card>
