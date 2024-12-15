<x-app>
    <x-navbar></x-navbar>
    <div class="w-full px-4 mx-auto mb-8 md:px-0 md:w-10/12">
        <div class="flex-1 py-4 mt-4 bg-gray-100 rounded-md shadow-sm">
            <h4 class="text-xl font-bold text-gray-900">Statistics</h4>

            <div class="grid grid-cols-1 gap-8 mt-4 lg:grid-cols-3">
                <div class="px-6 py-6 bg-gray-100 border border-gray-300 rounded-lg shadow-xl">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-bold text-indigo-500">Jumlah Pendaftar</span>
                        <span
                            class="px-2 py-1 text-xs text-indigo-500 transition duration-200 bg-gray-200 rounded-lg cursor-default hover:bg-gray-500 hover:text-gray-200">
                            Record</span>
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex flex-col">
                            <div class="flex flex-col items-start">
                                <h1 class="text-2xl font-bold text-indigo-500 2xl:text-3xl">{{ $mahasiswas->count() }}
                                </h1>
                                <span class="text-sm text-gray-500">Pendaftar</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-6 bg-gray-100 border border-gray-300 rounded-lg shadow-xl">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-bold text-green-600">Jumlah Lulusan</span>
                        <span
                            class="px-2 py-1 text-xs text-green-500 transition duration-200 bg-gray-200 rounded-lg cursor-default hover:bg-gray-500 hover:text-gray-200">
                            Record</span>
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex flex-col">
                            <div class="flex flex-col items-start">
                                <h1 class="text-2xl font-bold text-green-600 2xl:text-3xl">
                                    {{ $mahasiswas->where('status', 'aktif')->count() }}</h1>
                                <span class="text-sm text-gray-500">Lulus</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-6 bg-gray-100 border border-gray-300 rounded-lg shadow-xl">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-bold text-rose-600">Tidak Lulus</span>
                        <span
                            class="px-2 py-1 text-xs transition duration-200 bg-gray-200 rounded-lg cursor-default text-rose-500 hover:bg-gray-500 hover:text-gray-200">
                            Record</span>
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex flex-col">
                            <div class="flex flex-col items-start">
                                <h1 class="text-2xl font-bold text-rose-600 2xl:text-3xl">{{ $jumlahLulusan }}</h1>
                                <span class="text-sm text-gray-500">Tidak Lulus</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-6 bg-gray-100 border border-gray-300 rounded-lg shadow-xl">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-bold text-orange-500">Status Pembayaran</span>
                        <span
                            class="px-2 py-1 text-xs font-semibold text-orange-500 transition duration-200 bg-orange-200 rounded-lg cursor-default hover:bg-gray-500 hover:text-gray-200">
                            Belum Bayar</span>
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex flex-col">
                            <div class="flex flex-col items-start">
                                <h1 class="text-2xl font-bold text-orange-500 2xl:text-3xl">{{ $belumbayar }}
                                </h1>
                                <span class="text-sm text-gray-500">Orang</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-6 bg-gray-100 border border-gray-300 rounded-lg shadow-xl">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-bold text-violet-600">Status Pembayaran</span>
                        <span
                            class="px-2 py-1 text-xs font-semibold transition duration-200 bg-gray-200 rounded-lg cursor-default text-violet-500 hover:bg-gray-500 hover:text-gray-200">
                            Menunggu Konfirmasi</span>
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex flex-col">
                            <div class="flex flex-col items-start">
                                <h1 class="text-2xl font-bold text-violet-600 2xl:text-3xl">{{ $konfirmasi }}</h1>
                                <span class="text-sm text-gray-500">Orang</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-6 bg-gray-100 border border-gray-300 rounded-lg shadow-xl">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-bold text-green-600">Status Pembayaran</span>
                        <span
                            class="px-2 py-1 text-xs font-semibold text-green-500 transition duration-200 bg-gray-200 rounded-lg cursor-default hover:bg-gray-500 hover:text-gray-200">
                            Lunas</span>
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex flex-col">
                            <div class="flex flex-col items-start">
                                <h1 class="text-2xl font-bold 2xl:text-3xl">{{ $lunas }}</h1>
                                <span class="text-sm text-gray-500">Orang</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-table></x-table>
</x-app>
