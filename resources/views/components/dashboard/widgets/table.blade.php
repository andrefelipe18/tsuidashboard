@props(['headers', 'rows'])
<div class="col-span-4 lg:col-span-3">
    <x-ts-card>
        <x-card.title>Recent Sales</x-card.title>
        <x-ts-table :$headers :$rows striped />
    </x-ts-card>
</div>
