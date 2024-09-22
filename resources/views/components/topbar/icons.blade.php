<div class="flex gap-2 items-center">
    <div class="hover:bg-gray-300 dark:hover:bg-gray-600 transition-all p-2 rounded-xl duration-500">
        <x-ts-theme-switch only-icons />
    </div>
    <div class="hover:bg-gray-300 dark:hover:bg-gray-600 transition-all p-2 rounded-xl duration-500 hidden md:block">
        <x-ts-icon name="user" class="h-5 w-5 dark:text-white" />
    </div>
    <div class="hover:bg-gray-300 dark:hover:bg-gray-600 transition-all p-2 rounded-xl duration-500 hidden md:block">
        <x-ts-icon name="envelope-simple" class="h-5 w-5 dark:text-white" />
    </div>
    <div class="hover:bg-gray-300 dark:hover:bg-gray-600 transition-all p-2 rounded-xl duration-500 hidden md:block">
        <x-ts-icon name="sign-out" class="h-5 w-5 dark:text-white" />
    </div>
    <div class="md:hidden">
        <x-topbar.user-dropdown />
    </div>
</div>
