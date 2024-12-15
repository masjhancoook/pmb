<x-app>
    <x-navbar></x-navbar>
    <x-breadcrumb></x-breadcrumb>
    <x-error-massage></x-error-massage>
    <x-success-massage></x-success-massage>


    <div class="container w-10/12 mx-auto my-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2">
                <!-- Profile Card -->
                <div class="p-3 bg-white border-t-4 border-blue-400">
                    <div class="overflow-hidden image">
                        <img class="w-full h-auto mx-auto"
                            src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg"
                            alt="">
                    </div>
                    <h1 class="my-1 text-xl font-bold leading-8 text-gray-900">{{ $mahasiswa->nama }}</h1>
                    <h3 class="leading-6 text-gray-600 font-lg text-semibold">Pastikan sebelum merubah status verifikasi
                        anda sudah melakukan pengecekan berkas sesuai dengan ketentuan</h3>
                    <div class="">
                    </div>
                    <ul
                        class="px-3 py-2 mt-3 text-gray-600 bg-gray-100 divide-y rounded shadow-sm hover:text-gray-700 hover:shadow">
                        <li class="flex items-center py-3">
                            <span>Status</span>
                            <span class="ml-auto"><span
                                    class="px-2 py-1 text-sm text-white {{ $mahasiswa->status == 'Lulus' ? 'bg-green-500' : 'bg-red-500' }} rounded">{{ $mahasiswa->status }}</span></span>
                        </li>
                        <li class="flex items-center py-3">
                            <span>Mendaftar Tangal</span>
                            <span
                                class="ml-auto">{{ \Carbon\Carbon::parse($mahasiswa->created_at)->diffForHumans() }}</span>
                        </li>
                        <li class="flex items-end py-3">
                            <x-modal titleDialog="Verifikasi Berkas" bottonTitle="Verifikasi Berkas"
                                titleButton="Verifikasi">
                                <form method="POST" action="{{ route('app.verification.update', $mahasiswa->id) }}"
                                    class="mt-5">
                                    @csrf
                                    @method('PUT')
                                    <div>
                                        <x-select id="status" name="status" label="Status Verifikasi">
                                            <option selected>Pilih Status</option>
                                            <option value="Lulus">Lulus</option>
                                            <option value="Tidak Lulus">Tidak Lulus</option>
                                        </x-select>
                                    </div>
                                    <div class="flex justify-end mt-6">
                                        <button type="submit"
                                            class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                            Verifikasi
                                        </button>
                                    </div>
                                </form>
                            </x-modal>
                        </li>
                    </ul>
                </div>
                <!-- End of profile card -->
                <div class="my-4"></div>
                <!-- Friends card -->
                <div class="p-3 bg-white hover:shadow">
                    <div class="flex items-center space-x-3 text-xl font-semibold leading-8 text-gray-900">
                        <span class="text-green-500">
                            <svg class="h-5 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </span>
                        <span class="text-md">Foto</span>
                    </div>
                    <div class="flex ">
                        <img src="{{ Storage::url($mahasiswa->foto) }}" alt="" class="rounded-sm">
                    </div>
                </div>
                <!-- End of friends card -->
            </div>
            <!-- Right Side -->
            <div class="w-full h-64 mx-2 md:w-9/12">
                <!-- Profile tab -->
                <!-- About Section -->
                <div x-data="{ showFullInfo: true }" class="p-3 mt-4 bg-white rounded-sm shadow-sm md:mt-0">
                    <div class="p-3 bg-white rounded-sm shadow-sm">
                        <div class="flex items-center space-x-2 font-semibold leading-8 text-gray-900">
                            <span class="text-green-500">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </span>
                            <span class="tracking-wide">Informasi Pribadi</span>
                        </div>
                        <div class="text-gray-700">
                            <div class="grid text-sm md:grid-cols-2">
                                <div class="grid grid-cols-2 gap-3 mt-5">
                                    <div class="px-4 py-2 font-semibold">Nama Lengkap</div>
                                    <div class="px-4 py-2"><span class="px-2">:</span>{{ $mahasiswa->nama }}</div>
                                    <div class="px-4 py-2 font-semibold">NIK</div>
                                    <div class="px-4 py-2"><span class="px-2">:</span>
                                        {{ $mahasiswa->nik }}</div>
                                    <div x-show="showFullInfo" class="px-4 py-2 font-semibold">Tempat Lahir
                                    </div>
                                    <div x-show="showFullInfo" class="px-4 py-2"><span class="px-2">:</span>
                                        {{ $mahasiswa->tempat_lahir }}
                                    </div>
                                    <div x-show="showFullInfo" class="px-4 py-2 font-semibold">Tanggal Lahir.</div>
                                    <div x-show="showFullInfo" class="px-4 py-2"><span class="px-2">:</span>
                                        {{ \Carbon\Carbon::parse($mahasiswa->tanggal_lahir)->format('d, M, Y') }}</div>
                                    <div x-show="showFullInfo" class="px-4 py-2 font-semibold">Jenis Kelamin</div>
                                    <div x-show="showFullInfo" class="px-4 py-2"><span class="px-2">:</span>
                                        {{ $mahasiswa->jenis_kelamin }}</div>
                                    <div x-show="showFullInfo" class="px-4 py-2 font-semibold">Agama</div>
                                    <div x-show="showFullInfo" class="px-4 py-2"><span class="px-2">:</span>
                                        {{ $mahasiswa->agama }}</div>
                                    <div x-show="showFullInfo" class="px-4 py-2 font-semibold">Kewarganegaraan</div>
                                    <div x-show="showFullInfo" class="px-4 py-2"><span class="px-2">:</span>
                                        {{ $mahasiswa->kewarganegaraan }}</div>
                                    <div x-show="showFullInfo" class="px-4 py-2 font-semibold">Alamat</div>
                                    <div x-show="showFullInfo" class="px-4 py-2"><span class="px-2">:</span>
                                        {{ $mahasiswa->alamat }}</div>
                                    <div x-show="showFullInfo" class="px-4 py-2 font-semibold">Telepon</div>
                                    <div x-show="showFullInfo" class="px-4 py-2"><span class="px-2">:</span> +62
                                        {{ $mahasiswa->nomor_telepon }}
                                    </div>
                                </div>

                            </div>
                        </div>
                        <button @click="showFullInfo = !showFullInfo"
                            class="block w-full p-3 my-4 text-sm font-semibold text-blue-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs">
                            <span x-text="showFullInfo ? 'Hide Full Information' : 'Show Full Information'"></span>
                        </button>
                    </div>
                </div>

                <!-- End of about section -->

                <div class="my-4"></div>

                <!-- Experience and education -->
                <div x-data="{ showFullInfo: false }" class="p-3 bg-white rounded-sm shadow-sm">
                    <div class="p-3 bg-white rounded-sm shadow-sm">
                        <div class="flex items-center space-x-2 font-semibold leading-8 text-gray-900">
                            <span class="text-green-500">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </span>
                            <span class="tracking-wide">Asal Sekolah</span>
                        </div>
                        <div class="text-gray-700">
                            <div class="grid text-sm md:grid-cols-2">
                                <div class="grid grid-cols-2 gap-3 mt-5">
                                    <div class="px-4 py-2 font-semibold">Nama Lengkap</div>
                                    <div class="px-4 py-2"><span
                                            class="px-2">:</span>{{ $mahasiswa->sekolah->nama_sekolah }}</div>
                                    <div class="px-4 py-2 font-semibold">Alamat Sekolah</div>
                                    <div class="px-4 py-2"><span class="px-2">:</span>
                                        {{ $mahasiswa->sekolah->alamat_sekolah }}</div>
                                    <div x-show="showFullInfo" class="px-4 py-2 font-semibold">NISN
                                    </div>
                                    <div x-show="showFullInfo" class="px-4 py-2"><span class="px-2">:</span>
                                        {{ $mahasiswa->sekolah->nisn }}</div>
                                    <div x-show="showFullInfo" class="px-4 py-2 font-semibold">Tahun Lulus</div>
                                    <div x-show="showFullInfo" class="px-4 py-2"><span class="px-2">:</span>
                                        {{ \Carbon\Carbon::parse($mahasiswa->tanggal_lahir)->format('Y') }}</div>
                                    <div x-show="showFullInfo" class="px-4 py-2 font-semibold">Jurusan</div>
                                    <div x-show="showFullInfo" class="px-4 py-2"><span class="px-2">:</span>
                                        {{ $mahasiswa->sekolah->jurusan }}</div>
                                    <div x-show="showFullInfo" class="px-4 py-2 font-semibold">Provinsi</div>
                                    <div x-show="showFullInfo" class="px-4 py-2"><span class="px-2">:</span>
                                        {{ $mahasiswa->sekolah->provinsi }}</div>
                                    <div x-show="showFullInfo" class="px-4 py-2 font-semibold">Kabupaten/Kota</div>
                                    <div x-show="showFullInfo" class="px-4 py-2"><span class="px-2">:</span>
                                        {{ $mahasiswa->sekolah->kabupaten }}</div>
                                </div>

                            </div>
                        </div>
                        <button @click="showFullInfo = !showFullInfo"
                            class="block w-full p-3 my-4 text-sm font-semibold text-blue-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs">
                            <span x-text="showFullInfo ? 'Hide Full Information' : 'Show Full Information'"></span>
                        </button>
                    </div>
                </div>
                <!-- End of profile tab -->

                <!-- Parent -->
                <div class="my-4"></div>

                <!-- parent card -->
                <div x-data="{ showFullInfo: false }" class="p-3 bg-white rounded-sm shadow-sm">
                    <div class="p-3 bg-white rounded-sm shadow-sm">
                        <div class="flex items-center space-x-2 font-semibold leading-8 text-gray-900">
                            <span class="text-green-500">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </span>
                            <span class="tracking-wide">Orang Tua</span>
                        </div>
                        <div class="text-gray-700">
                            <div class="grid text-sm md:grid-cols-2">
                                <div class="grid grid-cols-2 gap-3 mt-5">
                                    <div class="px-4 py-2 font-semibold">Nama Ayah</div>
                                    <div class="px-4 py-2"><span
                                            class="px-2">:</span>{{ $mahasiswa->orangtua->nama_ayah }}</div>
                                    <div class="px-4 py-2 font-semibold">Pekerjaan Ayah</div>
                                    <div class="px-4 py-2"><span class="px-2">:</span>
                                        {{ $mahasiswa->orangtua->pekerjaan_ayah }}</div>
                                    <div x-show="showFullInfo" class="px-4 py-2 font-semibold">Pendidikan Ayah
                                    </div>
                                    <div x-show="showFullInfo" class="px-4 py-2"><span class="px-2">:</span>
                                        {{ $mahasiswa->orangtua->pendidikan_ayah }}</div>
                                    <div x-show="showFullInfo" class="px-4 py-2 font-semibold">Penghasilan Ayah</div>
                                    <div x-show="showFullInfo" class="px-4 py-2"><span class="px-2">:</span> Rp.
                                        {{ number_format($mahasiswa->orangtua->penghasilan_ayah, 0, ',', '.') }}
                                    </div>
                                    <div x-show="showFullInfo" class="px-4 py-2 font-semibold">Telepon Ayah</div>
                                    <div x-show="showFullInfo" class="px-4 py-2"><span class="px-2">:</span>
                                        {{ $mahasiswa->orangtua->nomor_telepon_ayah }}</div>
                                    <div x-show="showFullInfo" class="px-4 py-2 font-semibold">Nama Ibu</div>
                                    <div x-show="showFullInfo" class="px-4 py-2"><span class="px-2">:</span>
                                        {{ $mahasiswa->orangtua->nama_ibu }}</div>
                                    <div x-show="showFullInfo" class="px-4 py-2 font-semibold">Pendidikan Ibu</div>
                                    <div x-show="showFullInfo" class="px-4 py-2"><span class="px-2">:</span>
                                        {{ $mahasiswa->orangtua->pendidikan_ibu }}</div>
                                    <div x-show="showFullInfo" class="px-4 py-2 font-semibold">Pekerjaan Ibu</div>
                                    <div x-show="showFullInfo" class="px-4 py-2"><span class="px-2">:</span>
                                        {{ $mahasiswa->orangtua->pekerjaan_ibu }}</div>
                                    <div x-show="showFullInfo" class="px-4 py-2 font-semibold">Penghasilan Ibu</div>
                                    <div x-show="showFullInfo" class="px-4 py-2"><span class="px-2">:</span>
                                        {{ number_format($mahasiswa->orangtua->penghasilan_ibu, 0, ',', '.') }}</div>
                                    <div x-show="showFullInfo" class="px-4 py-2 font-semibold">Telepon Ibu</div>
                                    <div x-show="showFullInfo" class="px-4 py-2"><span class="px-2">:</span>
                                        {{ $mahasiswa->orangtua->nomor_telepon_ibu }}</div>
                                    <div x-show="showFullInfo" class="px-4 py-2 font-semibold">Nama Wali</div>
                                    <div x-show="showFullInfo" class="px-4 py-2"><span class="px-2">:</span>
                                        {{ $mahasiswa->orangtua->nama_wali ?? '-' }}</div>
                                    <div x-show="showFullInfo" class="px-4 py-2 font-semibold">Telepon Wali</div>
                                    <div x-show="showFullInfo" class="px-4 py-2"><span class="px-2">:</span>
                                        {{ $mahasiswa->orangtua->nomor_telepon_wali ?? '-' }}</div>
                                </div>


                            </div>
                        </div>
                        <button @click="showFullInfo = !showFullInfo"
                            class="block w-full p-3 my-4 text-sm font-semibold text-blue-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs">
                            <span x-text="showFullInfo ? 'Hide Full Information' : 'Show Full Information'"></span>
                        </button>
                    </div>
                </div>
                <!-- End Parent -->
            </div>

        </div>
    </div>
</x-app>
