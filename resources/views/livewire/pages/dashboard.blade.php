<?php

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Livewire\Volt\Component;

new class extends Component {
    public $count = 0;

    public function with(): array
    {
        $result = Http::get('https://fakestoreapi.com/products/')->json();

        $result = array_slice($result, 0, 7);

        foreach ($result as $key => $value) {
            $result[$key]['title'] = substr($value['title'], 0, 20);
        }

        return [
            'headers' => [['index' => 'title', 'label' => 'Name'], ['index' => 'price', 'label' => 'Price'], ['index' => 'category', 'label' => 'Category']],
            'rows' => $result,
        ];
    }
}; ?>
<div class="p-4 rounded-lg mt-14">
    <x-dashboard.top-widgets />
    <div class="grid grid-cols-4 gap-4 mb-4">
        <x-dashboard.widgets.table :headers="$headers" :rows="$rows" />
        <x-dashboard.widgets.notifications />
    </div>
</div>