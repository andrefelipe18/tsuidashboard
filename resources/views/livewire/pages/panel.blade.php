<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div class="p-4 rounded-lg mt-14">
    <div class="grid grid-cols-2 gap-4 mb-4">
        <x-ts-card>
            <x-card.title>Alert</x-card.title>
            <div class="space-y-4">
                <x-ts-alert>
                    TallStackUi
                </x-ts-alert>
                <x-ts-alert title="TallStackUi" text="Primary" />
                <x-ts-alert title="TallStackUi" text="Primary" light />
            </div>
        </x-ts-card>
        <div class="">
            <div class="h-fit">
                <x-ts-card>
                    <x-card.title>Dropdown</x-card.title>
                    <div class="flex justify-around">
                        <x-ts-dropdown text="Menu" position="bottom-end">
                            <x-ts-dropdown.items text="Settings" />
                            <x-ts-dropdown.items text="Logout" separator />
                        </x-ts-dropdown>

                        <x-ts-dropdown icon="caret-down" position="bottom-end">
                            <a href="https://google.com.br" target="_blank">
                                <x-ts-dropdown.items text="Google" />
                            </a>
                            <a href="https://twitter.com" target="_blank">
                                <x-ts-dropdown.items text="Twitter" separator />
                            </a>
                        </x-ts-dropdown>

                        <x-ts-dropdown icon="dots-three-outline-vertical" static>
                            <x-ts-dropdown.items text="Settings" />
                            <x-ts-dropdown.items text="Logout" separator />
                        </x-ts-dropdown>
                    </div>
                </x-ts-card>
            </div>
            <div class="mt-4 h-fit">
                <x-ts-card>
                    <x-ts-tab selected="Invoices">
                        <x-ts-tab.items tab="Invoices">
                            <x-slot:right>
                                <x-ts-icon name="file-text" class="w-5 h-5" />
                            </x-slot:right>
                            Invoices
                        </x-ts-tab.items>
                        <x-ts-tab.items tab="Transactions">
                            <x-slot:left>
                                <x-ts-icon name="money" class="w-5 h-5" />
                            </x-slot:left>
                            Transactions
                        </x-ts-tab.items>
                        <x-ts-tab.items tab="Settings">
                            <x-slot:right>
                                <x-ts-icon name="wrench" class="w-5 h-5" />
                            </x-slot:right>
                            Settings
                        </x-ts-tab.items>
                        <x-ts-tab.items tab="Profile">
                            <x-slot:left>
                                <x-ts-icon name="user" class="w-5 h-5" />
                            </x-slot:left>
                            Profile
                        </x-ts-tab.items>
                        <x-ts-tab.items tab="Logout">
                            <x-slot:right>
                                <x-ts-icon name="sign-out" class="w-5 h-5" />
                            </x-slot:right>
                            Logout
                        </x-ts-tab.items>
                    </x-ts-tab>
                </x-ts-card>
            </div>
        </div>
    </div>
</div>