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
            'headers' => [
                ['index' => 'title', 'label' => 'Name'],
                ['index' => 'price', 'label' => 'Price'],
                ['index' => 'category', 'label' => 'Category'],
            ],
            'rows' => $result,
        ];
    }
} ?>
<div>
    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg mt-14">
            <div class="grid grid-cols-3 gap-4 mb-4">
                <div class="p-6 h-42 rounded-xl bg-gray-50 dark:bg-gray-800">
                    <div class="flex items-center justify-between">
                        <div class="">
                            <p class="block mb-2 font-medium text-gray-400 dark:text-gray-300">Orders</p>
                            <p class="text-xl font-medium text-gray-800 dark:text-gray-50">152</p>
                        </div>
                        <div class="flex items-center justify-center hidden p-2 bg-blue-100 rounded-lg md:block dark:bg-blue-400/10">
                            <x-ts-icon name="shopping-cart" class="w-5 h-5  text-blue-500 !text-xl" />
                        </div>
                    </div>
                    <div class="my-2">
                        <span class="font-medium text-[#2dc190]">24 new</span>
                        <span class="text-gray-400 dark:text-gray-300">since last visit</span>
                    </div>
                </div>
                <div class="p-6 h-42 rounded-xl bg-gray-50 dark:bg-gray-800">
                    <div class="flex items-center justify-between">
                        <div class="">
                            <p class="block mb-2 font-medium text-gray-400 dark:text-gray-300">Revenue</p>
                            <p class="text-xl font-medium text-gray-800 dark:text-gray-50">$2.100</p>
                        </div>
                        <div class="flex items-center justify-center hidden p-2 bg-orange-100 rounded-lg md:block dark:bg-orange-400/10">
                            <x-ts-icon name="money" class="w-5 h-5 text-orange-500 !text-xl" />
                        </div>
                    </div>
                    <div class="my-2">
                        <span class="font-medium text-[#2dc190]">%52+</span>
                        <span class="text-gray-400 dark:text-gray-300">since last week</span>
                    </div>
                </div>
                <div class="p-6 h-42 rounded-xl bg-gray-50 dark:bg-gray-800">
                    <div class="flex items-center justify-between">
                        <div class="">
                            <p class="block mb-2 font-medium text-gray-400 dark:text-gray-300">Customers</p>
                            <p class="text-xl font-medium text-gray-800 dark:text-gray-50">28441</p>
                        </div>
                        <div class="flex items-center justify-center hidden p-2 rounded-lg bg-cyan-100 md:block dark:bg-cyan-400/10 ">
                            <x-ts-icon name="users" class="w-5 h-5 text-cyan-500 !text-xl" />
                        </div>
                    </div>
                    <div class="my-2">
                        <span class="font-medium text-[#2dc190]">520</span>
                        <span class="text-gray-400 dark:text-gray-300">newly registered</span>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-4 gap-4 mb-4">
                <div class="col-span-4 p-6 lg:col-span-3 rounded-xl bg-gray-50 dark:bg-gray-800">
                    <p class="block mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">Recent Sales</p>
                    <x-ts-table :$headers :$rows striped />
                </div>
                <div class="hidden p-6 lg:block rounded-xl bg-gray-50 dark:bg-gray-800">
                    <div class="flex items-center justify-between mb-2">
                        <p class="block text-xl font-medium text-gray-800 dark:text-gray-300">Notifications</p>
                        <x-ts-dropdown icon="dots-three-outline-vertical" static>
                            <x-ts-dropdown.items icon="plus" text="Add New" />
                            <x-ts-dropdown.items icon="trash" text="Remove" separator />
                        </x-ts-dropdown>
                    </div>
                    <p class="mb-2 font-medium text-gray-400 text-md">TODAY</p>
                    <div class="flex items-center gap-3">
                        <div class="p-2 bg-blue-100 rounded-lg dark:bg-blue-400/10">
                            <x-ts-icon name="shopping-cart" class="w-5 h-5 text-blue-500" />
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 font-regular">Richard Jones has purchased a Fjallraven - Foldsac for $109.95</p>
                    </div>
                    <div class="my-2 border-t border-gray-200 dark:border-gray-700"></div>
                    <div class="flex items-center gap-3">
                        <div class="p-2 rounded-lg bg-cyan-100 dark:bg-cyan-400/10">
                            <x-ts-icon name="users" class="w-5 h-5 text-cyan-500 !text-xl" />
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 font-regular">Sara Smith has registered as a new customer</p>
                    </div>
                    <p class="mt-4 mb-2 font-medium text-gray-400 text-md">YESTERDAY</p>
                    <div class="flex items-center gap-3">
                        <div class="p-2 bg-blue-100 rounded-lg dark:bg-blue-400/10">
                            <x-ts-icon name="shopping-cart" class="w-5 h-5 text-blue-500" />
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 font-regular">Richard Jones has purchased a Fjallraven - Foldsac for $109.95</p>
                    </div>
                    <div class="my-2 border-t border-gray-200 dark:border-gray-700"></div>
                    <div class="flex items-center gap-3">
                        <div class="p-2 rounded-lg bg-cyan-100 dark:bg-cyan-400/10">
                            <x-ts-icon name="users" class="w-5 h-5 text-cyan-500 !text-xl" />
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 font-regular">Sara Smith has registered as a new customer</p>
                    </div>
                    <p class="mt-4 mb-2 font-medium text-gray-400 text-md">
                        2 DAYS AGO
                    </p>
                    <div class="flex items-center gap-3">
                        <div class="p-2 bg-blue-100 rounded-lg dark:bg-blue-400/10">
                            <x-ts-icon name="shopping-cart" class="w-5 h-5 text-blue-500" />
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 font-regular">Richard Jones has purchased a Fjallraven - Foldsac for $109.95</p>
                    </div>
                    <div class="my-2 border-t border-gray-200 dark:border-gray-700"></div>
                    <div class="flex items-center gap-3">
                        <div class="p-2 rounded-lg bg-cyan-100 dark:bg-cyan-400/10">
                            <x-ts-icon name="users" class="w-5 h-5 text-cyan-500 !text-xl" />
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 font-regular">Sara Smith has registered as a new customer</p>
                    </div>
                </div>
            </div>

        </div>
    </div>