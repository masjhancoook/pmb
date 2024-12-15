@props(['label', 'id', 'name', 'required' => ''])
<div class="flex flex-col w-full gap-2 max-auto">
    <label for="{{ $id }}" class="block mb-2 text-sm text-gray-900 dark:text-gray-400">{{ $label }} <span
            class="text-red-500">{{ $required }}</span></label></label>
    <select id="{{ $id }}" name="{{ $name }}"
        class="block w-full px-2 text-xs text-gray-600 uppercase bg-white border border-gray-300 rounded-sm input h-11 focus:ring-blue-400 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        {{ $slot }}
    </select>
</div>
