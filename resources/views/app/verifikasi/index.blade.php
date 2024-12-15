<x-app>
    <x-navbar></x-navbar>
    <x-breadcrumb></x-breadcrumb>
    <div class="mt-10">
        <x-table>
            <table id="dataTable" class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-800">
                    <tr>
                        <th scope="col"
                            class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            No
                        </th>

                        <th scope="col"
                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            Nama Mahasiswa
                        </th>

                        <th scope="col"
                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            Email
                        </th>

                        <th scope="col"
                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            Nomor Induk Kependudukan</th>
                        <th scope="col"
                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            Peminatan Pertama</th>

                        <th scope="col"
                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            Peminatan Kedua</th>

                        <th scope="col"
                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            Status</th>

                        <th scope="col" class="relative py-3.5 px-4">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                    @foreach ($verifikasi as $item)
                        <tr>
                            <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                <div>
                                    <h2 class="font-medium text-gray-800 dark:text-white ">{{ $loop->iteration }}</h2>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                <div>
                                    <h2 class="font-medium text-gray-800 dark:text-white ">{{ $item->nama }}</h2>
                                </div>
                            </td>
                            <td class="py-4 text-sm font-medium whitespace-nowrap">
                                {{ $item->email }}
                            </td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div>
                                    <h4 class="text-gray-700 dark:text-gray-200">{{ $item->nik }}</h4>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                {{ $item->peminatan->pilihan_pertama }}
                            </td>


                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                {{ $item->peminatan->pilihan_kedua }}
                            </td>

                            <td class="py-4 text-sm font-medium whitespace-nowrap">
                                <div
                                    class="inline px-3 py-1 text-sm font-normal rounded-full {{ $item->status == 'Lulus' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }} gap-x-2 bg-emerald-100/60 dark:bg-gray-800">
                                    {{ $item->status }}
                                </div>
                            </td>

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
                                    class="absolute w-48 mt-2 bg-white border rounded-lg shadow-md right-20 lg:right-56 md:right-32">
                                    <a href="{{ route('app.verification.edit', $item->id) }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" ">Verifikasi</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                        @click="if (confirm('Apakah Anda yakin ingin menghapus item ini?')) { alert('Item deleted'); }">Delete</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                        @click="alert('Show item')">Show</a>
                                </div>
                            </td>
                        </tr>
 @endforeach
                </tbody>
            </table>
        </x-table>
    </div>
</x-app>
