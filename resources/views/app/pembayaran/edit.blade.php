<div class="max-w-lg p-8 mx-auto mt-10 text-white shadow-lg bg-gradient-to-r from-blue-500 to-blue-700 rounded-xl"
    x-data="{ file: null, preview: '' }">
    <h2 class="mb-6 text-2xl font-bold text-center">Upload Bukti Pembayaran</h2>

    <form action="/upload" method="POST" enctype="multipart/form-data" class="space-y-6">
        <!-- Input File -->
        <div>
            <label for="file" class="block mb-2 text-lg font-medium">Pilih File:</label>
            <input type="file" id="file" name="file" accept="image/*,application/pdf"
                class="block w-full px-4 py-2 text-gray-800 bg-gray-100 border border-gray-300 rounded-lg cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-blue-500"
                x-on:change="
                    file = $event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = e => preview = e.target.result;
                        reader.readAsDataURL(file);
                    }
                ">
            <p class="mt-2 text-sm text-gray-200">Format yang diizinkan: JPG, PNG, PDF. Maksimal 5MB.</p>
        </div>

        <!-- Preview -->
        <div x-show="file" class="relative mt-4">
            <label class="block mb-2 text-lg font-medium">Preview:</label>
            <template x-if="file.type.includes('image')">
                <img :src="preview" alt="Preview"
                    class="object-cover w-full h-48 border-2 border-gray-200 rounded-lg shadow-md">
            </template>
            <template x-if="file.type.includes('pdf')">
                <div class="flex items-center justify-between p-4 text-gray-800 bg-white rounded-lg shadow-md">
                    <div>
                        <p class="text-sm font-medium">File PDF:</p>
                        <p class="text-sm font-semibold" x-text="file.name"></p>
                    </div>
                    <span class="px-3 py-1 text-sm font-bold text-white bg-blue-500 rounded-full">PDF</span>
                </div>
            </template>
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="w-full px-4 py-2 font-semibold text-blue-700 bg-white rounded-lg shadow-md hover:bg-blue-100 focus:outline-none focus:ring-4 focus:ring-blue-300">
            Upload File
        </button>
    </form>
</div>
