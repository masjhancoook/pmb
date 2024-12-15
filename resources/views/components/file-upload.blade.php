@props(['label', 'id', 'name', 'required' => ''])

<div class="relative flex flex-col w-full gap-4">
    <label class="text-sm text-gray-800 font-poppins" for="{{ $id }}">
        {{ $label }}
        <span class="text-red-500">{{ $required }}</span>
    </label>
    <input id="{{ $id }}" name="{{ $name }}" type="file"
        class="w-full py-1 text-sm bg-white border border-gray-300 rounded-sm overflow-clip text-neutral-600 file:mr-4 file:cursor-pointer file:border-none file:bg-neutral-50 file:px-4 file:py-2 file:font-medium file:text-neutral-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:text-neutral-300 dark:file:bg-neutral-900 dark:file:text-white dark:focus-visible:outline-white"
        onchange="previewImage(event, '{{ $id }}')" />
    <div id="preview-{{ $id }}" class="hidden mt-4">
        <img id="preview-img-{{ $id }}" alt="Preview"
            class="w-full h-40 object-cover rounded-lg border border-gray-300">
        <p id="preview-name-{{ $id }}" class="text-sm text-gray-600 mt-2 truncate"></p>
    </div>
</div>

<script>
    function previewImage(event, inputId) {
        const inputFile = document.getElementById(inputId);
        const file = inputFile.files[0];
        const previewContainer = document.getElementById(`preview-${inputId}`);
        const previewImage = document.getElementById(`preview-img-${inputId}`);
        const previewName = document.getElementById(`preview-name-${inputId}`);

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewContainer.classList.remove("hidden");
            };
            reader.readAsDataURL(file);
            previewName.textContent = file.name;
        } else {
            previewContainer.classList.add("hidden");
        }
    }
</script>


{{-- @props(['label', 'id', 'name', 'required' => ''])
<div class="relative flex flex-col w-full gap-4">
    <label class="text-sm text-gray-800 font-poppins" for="{{ $id }}">{{ $label }} <span
            class="text-red-500">{{ $required }}</span></label>
    <input id="{{ $id }}" name="{{ $name }}" type="file"
        class="w-full py-1 text-sm bg-white border border-gray-300 rounded-sm overflow-clip text-neutral-600 file:mr-4 file:cursor-pointer file:border-none file:bg-neutral-50 file:px-4 file:py-2 file:font-medium file:text-neutral-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:text-neutral-300 dark:file:bg-neutral-900 dark:file:text-white dark:focus-visible:outline-white" /> --}}
