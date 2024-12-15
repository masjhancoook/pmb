<x-app>
    <x-navbar></x-navbar>
    <x-modal titleDialog="Tambah Permission"></x-modal>
    <div x-data="{ isEditing: false }" class="mt-6">

        <div class="container w-10/12 mx-auto">
            <!-- Form Edit -->
            <div x-show="isEditing" class="p-4 mb-4 bg-white rounded-lg">
                <h2 class="text-lg font-bold">Edit Data</h2>
                <form method="POST" action="">
                    @csrf
                    <div class="mt-4">
                        <x-text-input name="name" label="Permission"></x-text-input>
                    </div>
                    <div class="flex justify-start mt-4">
                        <button type="button" @click="isEditing = false"
                            class="px-4 py-2 mr-2 text-gray-700 bg-gray-200 rounded-md">Batal</button>
                        <x-botton label="Perbahrui"></x-botton>
                    </div>
                </form>
            </div>
        </div>

        <!-- Tabel Data -->
        <x-table x-show="!isEditing">
            @if ($permissions->isNotEmpty())
                <table id="dataTable" class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-800">
                        <tr>
                            <th scope="col"
                                class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                No</th>
                            <th scope="col"
                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Nama Mahasiswa</th>
                            <th scope="col"
                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Guard Name</th>
                            <th scope="col"
                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Dibuat</th>
                            <th scope="col"
                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                        @foreach ($permissions as $permission)
                            <tr>
                                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">{{ $loop->iteration }}</td>
                                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">{{ $permission->name }}</td>
                                <td class="px-4 py-4 text-sm font-semibold text-blue-400 whitespace-nowrap">
                                    {{ $permission->guard_name }}</td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    {{ \Carbon\Carbon::parse($permission->created_at)->format('d F Y') }}</td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap" x-data="{ open: false }">
                                    <!-- Tombol Titik Tiga -->
                                    <button @click="open = !open"
                                        class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 hover:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                        </svg>
                                    </button>

                                    <!-- Menu Dropdown -->
                                    <div x-show="open" x-transition @click.away="open = false"
                                        class="absolute w-48 mt-2 bg-white border rounded-lg shadow-md">
                                        <button @click="isEditing = true; open = false"
                                            class="flex items-start w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit</button>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Delete</a>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Show</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="flex flex-col items-center justify-center gap-3 p-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"
                        fill="currentColor" class="text-rose-500">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M12 1.67c.955 0 1.845 .467 2.39 1.247l.105 .16l8.114 13.548a2.914 2.914 0 0 1 -2.307 4.363l-.195 .008h-16.225a2.914 2.914 0 0 1 -2.582 -4.2l.099 -.185l8.11 -13.538a2.914 2.914 0 0 1 2.491 -1.403zm.01 13.33l-.127 .007a1 1 0 0 0 0 1.986l.117 .007l.127 -.007a1 1 0 0 0 0 -1.986l-.117 -.007zm-.01 -7a1 1 0 0 0 -.993 .883l-.007 .117v4l.007 .117a1 1 0 0 0 1.986 0l.007 -.117v-4l-.007 -.117a1 1 0 0 0 -.993 -.883z" />
                    </svg>
                    <p class="text-lg text-center text-gray-400">Tidak ada data permissions</p>
                </div>
            @endif
        </x-table>
    </div>

</x-app>
