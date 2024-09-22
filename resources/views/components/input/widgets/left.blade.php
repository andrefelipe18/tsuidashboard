<x-ts-card>
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
</x-ts-card>
