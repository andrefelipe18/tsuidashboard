@php
    $notifications = [
        [
            'date' => 'TODAY',
            'events' => [
                [
                    'icon' => 'shopping-cart',
                    'bgColor' => 'bg-blue-100',
                    'darkBgColor' => 'dark:bg-blue-400/10',
                    'textColor' => 'text-blue-500',
                    'message' => 'Emily Brown has purchased a MacBook Air for $999.00',
                ],
                [
                    'icon' => 'users',
                    'bgColor' => 'bg-cyan-100',
                    'darkBgColor' => 'dark:bg-cyan-400/10',
                    'textColor' => 'text-cyan-500',
                    'message' => 'James Williams has registered as a new customer',
                ],
            ],
        ],
        [
            'date' => 'YESTERDAY',
            'events' => [
                [
                    'icon' => 'shopping-cart',
                    'bgColor' => 'bg-blue-100',
                    'darkBgColor' => 'dark:bg-blue-400/10',
                    'textColor' => 'text-blue-500',
                    'message' => 'Lily Johnson has purchased a Samsung Galaxy S21 for $799.99',
                ],
                [
                    'icon' => 'users',
                    'bgColor' => 'bg-cyan-100',
                    'darkBgColor' => 'dark:bg-cyan-400/10',
                    'textColor' => 'text-cyan-500',
                    'message' => 'David Lee has registered as a new customer',
                ],
            ],
        ],
        [
            'date' => '2 DAYS AGO',
            'events' => [
                [
                    'icon' => 'shopping-cart',
                    'bgColor' => 'bg-blue-100',
                    'darkBgColor' => 'dark:bg-blue-400/10',
                    'textColor' => 'text-blue-500',
                    'message' => 'Olivia Davis has purchased a Sony PlayStation 5 for $499.99',
                ],
                [
                    'icon' => 'users',
                    'bgColor' => 'bg-cyan-100',
                    'darkBgColor' => 'dark:bg-cyan-400/10',
                    'textColor' => 'text-cyan-500',
                    'message' => 'Michael Brown has registered as a new customer',
                ],
            ],
        ],
    ];
@endphp

<div class="hidden lg:block">
    <x-ts-card>
        <div class="flex items-center justify-between mb-2">
            <p class="block text-xl font-medium text-gray-800 dark:text-gray-300">Notifications</p>
            <x-ts-dropdown icon="dots-three-outline-vertical" static>
                <x-ts-dropdown.items icon="plus" text="Add New" />
                <x-ts-dropdown.items icon="trash" text="Remove" separator />
            </x-ts-dropdown>
        </div>
        @foreach ($notifications as $notify)
            <p class="mb-2 font-medium text-gray-400 text-md">{{ $notify['date'] }}</p>
            @foreach ($notify['events'] as $event)
                <div class="flex items-center gap-3 my-2">
                    <div class="p-2 {{ $event['bgColor'] }} rounded-lg {{ $event['darkBgColor'] }}">
                        <x-ts-icon name="{{ $event['icon'] }}" class="w-5 h-5 {{ $event['textColor'] }}" />
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 font-regular">{{ $event['message'] }}</p>
                </div>
            @endforeach
            <div class="my-2 border-t border-gray-200 dark:border-gray-700"></div>
        @endforeach
    </x-ts-card>
</div>
