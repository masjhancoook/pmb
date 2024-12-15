@props(['label', 'type' => 'submit'])
<button type="{{ $type }}"
    class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
    {{ $slot }}

    <span>{{ $label }}</span>
</button>
