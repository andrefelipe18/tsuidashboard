@props(['title'])

<p class="block mb-2 text-xl font-medium text-gray-800 dark:text-gray-300">
  {{ $title ?? $slot }}
</p>