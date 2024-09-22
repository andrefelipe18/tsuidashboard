<div @toggle-sidebar.window="isSidebarOpen = !isSidebarOpen">
    <aside id="logo-sidebar" :class="{ '-translate-x-full': !isSidebarOpen, 'translate-x-0': isSidebarOpen }"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform bg-white dark:bg-[#18181b]"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-[#18181b]">
            <ul class="space-y-2 font-medium">
                <x-sidebar.link-section title="Home">
                    <x-slot name="links">
                        <li>
                            <a href="{{ route('dashboard') }}" wire:navigate
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <x-ts-icon name="chart-pie-slice" bold
                                    class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" />
                                <span class="ms-3">Dashboard</span>
                            </a>
                        </li>
                    </x-slot>
                </x-sidebar.link-section>   
                <x-sidebar.link-section title="UI Components">
                    <x-slot name="links">
                        <li>
                            <a href="{{ route('formlayout') }}" wire:navigate
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <x-ts-icon name="table" bold
                                    class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" />
                                <span class="ms-3">Form Layout</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('input') }}" wire:navigate
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <x-ts-icon name="check-square" bold
                                    class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" />
                                <span class="ms-3">Input</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('button') }}" wire:navigate
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <x-ts-icon name="radio-button" bold
                                    class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" />
                                <span class="ms-3">Button</span>
                            </a>
                        </li>
                    </x-slot>
                </x-sidebar.link-section>   
            </ul>
        </div>
    </aside>
</div>
