<header class="pb-6 bg-white/75 lg:pb-0">
    <div class="w-10/12 px-4 mx-auto sm:px-6 lg:px-0">
        <!-- lg+ -->
        <nav class="flex items-center justify-between h-16 lg:h-20">
            <div class="flex flex-row items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="text-blue-400 icon icon-tabler icons-tabler-outline icon-tabler-school">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6" />
                    <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4" />
                </svg>
                <a href="#" title="" class="flex flex-col">
                    {{-- <img class="w-auto h-8 lg:h-10"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/logo.svg" alt="" /> --}}
                    <h1 class="text-sm font-bold text-blue-400">Penerima Mahasiswa baru</h1>
                    <p class="text-xs text-gray-500">Universitas Terbaik</p>
                </a>
            </div>

            <button type="button"
                class="inline-flex p-2 text-black transition-all duration-200 rounded-md lg:hidden focus:bg-gray-100 hover:bg-gray-100">
                <!-- Menu open: "hidden", Menu closed: "block" -->
                <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
                </svg>

                <!-- Menu open: "block", Menu closed: "hidden" -->
                <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <div class="hidden lg:flex lg:items-center lg:ml-auto lg:space-x-10">
                @auth
                    <a href="{{ url('app') }}" title=""
                        class="text-gray-500 transition-all duration-200 hover:text-blue-500/75 focus:text-blue-500">
                        Beranda </a>
                    @hasrole('Mahasiswa')
                        <a href="{{ route('app.pendaftaran.create') }}" title=""
                            class="text-gray-500 transition-all duration-200 hover:text-blue-500/75 focus:text-blue-500">
                            Pendaftaran </a>
                        <a href="{{ route('app.pembayaran.index') }}" title=""
                            class="text-gray-500 transition-all duration-200 hover:text-blue-500/75 focus:text-blue-500">
                            Pembayaran </a>
                    @endhasrole
                    @hasrole('Super Admin|Operator')
                        <a href="{{ route('app.verification.index') }}" title=""
                            class="text-gray-500 transition-all duration-200 hover:text-blue-500/75 focus:text-blue-500">
                            Verifikasi Berkas </a>
                        <a href="{{ route('app.pembayarans.index') }}" title=""
                            class="text-gray-500 transition-all duration-200 hover:text-blue-500/75 focus:text-blue-500">
                            Verifikasi Pembayaran</a>
                    @endhasrole
                    @hasrole('Super Admin')
                        <!-- Dropwown -->
                        <div x-data="{ open: false }" class="relative">
                            <a href="#" @mouseover="open = true" @mouseleave="open = false"
                                class="text-gray-500 transition-all duration-200 hover:text-blue-500/75 focus:text-blue-500">
                                Management Users
                            </a>
                            <div x-show="open" x-transition
                                class="absolute left-0 z-20 py-2 mt-2 bg-white border border-gray-300 rounded-md shadow-lg w-60"
                                @mouseover="open = true" @mouseleave="open = false">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Users
                                    Management
                                </a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Roles
                                    Management
                                </a>
                                <a href="{{ route('app.permission.index') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Permissions
                                    Management
                                </a>
                            </div>
                        </div>
                        <!-- end Dropwown -->
                    @endhasrole
                @endauth
                @guest
                    <a href="{{ url('/') }}" title=""
                        class="text-gray-500 transition-all duration-200 hover:text-blue-500/75 focus:text-blue-500">
                        Beranda </a>
                    <!-- Dropwown -->
                    <div x-data="{ open: false }" class="relative">
                        <a href="#" @mouseover="open = true" @mouseleave="open = false"
                            class="text-gray-500 transition-all duration-200 hover:text-blue-500/75 focus:text-blue-500">
                            Fasilitas
                        </a>
                        <div x-show="open" x-transition
                            class="absolute left-0 z-20 py-2 mt-2 bg-white border border-gray-300 rounded-md shadow-lg w-60"
                            @mouseover="open = true" @mouseleave="open = false">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Fasilitas
                                1</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Fasilitas
                                2</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Fasilitas
                                3</a>
                        </div>
                    </div>
                    <!-- end Dropwown -->
                    <a href="#" title=""
                        class="text-gray-500 transition-all duration-200 hover:text-blue-500/75 focus:text-blue-500">
                        Biaya Kuliah </a>

                    <a href="#" title=""
                        class="text-gray-500 transition-all duration-200 hover:text-blue-500/75 focus:text-blue-500">
                        Pengumuman </a>
                    <a href="{{ route('login') }}" title=""
                        class="items-center justify-center hidden px-8 py-3 ml-10 text-sm text-blue-400 transition-all duration-200 border rounded-md font-menidum hover:bg-blue-400 border-bg-blue-500/40 lg:inline-flex focus:bg-blue-400 hover:text-white"
                        role="button">Masuk</a>
                @endguest
            </div>

            @auth
                <a href="{{ route('app.logout') }}" title=""
                    class="items-center justify-center hidden px-8 py-3 ml-10 text-sm text-blue-400 transition-all duration-200 border rounded-md font-menidum hover:bg-blue-400 border-bg-blue-500/40 lg:inline-flex focus:bg-blue-400 hover:text-white"
                    role="button">Logout</a>
            @endauth

        </nav>

        <!-- xs to lg -->
        <nav class="pt-4 pb-6 bg-white border border-gray-200 rounded-md shadow-md lg:hidden">
            <div class="flow-root">
                <div class="flex flex-col px-6 -my-2 space-y-1">
                    <a href="#" title=""
                        class="inline-flex py-2 text-base font-medium text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600">
                        Features </a>

                    <a href="#" title=""
                        class="inline-flex py-2 text-base font-medium text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600">
                        Solutions </a>

                    <a href="#" title=""
                        class="inline-flex py-2 text-base font-medium text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600">
                        Resources </a>

                    <a href="#" title=""
                        class="inline-flex py-2 text-base font-medium text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600">
                        Pricing </a>
                </div>
            </div>

            <div class="px-6 mt-6">
                <a href="#" title=""
                    class="inline-flex justify-center px-4 py-3 text-base font-semibold text-white transition-all duration-200 bg-blue-600 border border-transparent rounded-md tems-center hover:bg-blue-700 focus:bg-blue-700"
                    role="button"> Get started now </a>
            </div>
        </nav>
    </div>
</header>
