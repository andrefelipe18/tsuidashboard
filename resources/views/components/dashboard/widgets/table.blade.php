@props(['headers', 'rows'])
<div class="col-span-4 lg:col-span-3">
    <x-ts-card>
        <p class="block mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Recent Sales</p>
        <x-ts-table :$headers :$rows striped />
    </x-ts-card>
</div>
