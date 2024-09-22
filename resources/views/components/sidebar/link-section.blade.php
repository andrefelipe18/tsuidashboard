@props(['title'])
<div class="p-2 space-y-2">
    <h1 class="font-bold text-gray-700 dark:text-gray-200">
      {{ $title }}
    </h1>
    {{ $links }}
</div>