<x-app>
    <x-navbar></x-navbar>
    <x-breadcrumb></x-breadcrumb>
    <x-error-massage></x-error-massage>
    <x-success-massage></x-success-massage>
    <!-- Form -->
    <div class="w-full py-8 mx-auto my-6 bg-white rounded-md shadow-sm max-w-7xl" x-data="formHandler()">
        <h1 class="p-6 mb-6 text-2xl font-bold text-gray-800 text-start">Pendaftaran Mahasiswa</h1>

        <!-- Stepper -->
        <div class="mb-12">
            <h2 class="sr-only">Steps</h2>
            <p x-text="steps[currentStep - 1].text" class="hidden text-sm font-medium text-gray-500 text-start"></p>
            <div class="h-2 mt-4 overflow-hidden bg-gray-300">
                <div class="h-3 bg-blue-500/75" :style="{ width: steps[currentStep - 1].width }"></div>
            </div>
        </div>
        <!-- Form Steps -->
        <form method="POST" action="{{ route('app.pendaftaran.store') }}" @submit.prevent="submitForm" class="mx-6"
            enctype="multipart/form-data">
            @csrf
            <!-- Step 1 -->
            <div x-show="currentStep === 1">
                <div class="flex flex-col gap-2 mb-8">
                    <div class="flex flex-row items-center gap-2">
                        <h1 class="w-40 font-semibold text-gray-700 text-md">Pilih Jurusan</h1>
                        <div class="hidden w-full border-t border-gray-200 md:block"></div>
                    </div>
                    <p class="text-sm text-gray-600">Pilih jurusan yang anda inginkan</p>
                </div>
                <div class="flex flex-col gap-2 lg:gap-4 lg:flex-row">
                    <x-select id="jurusan" name="pilihan_pertama" label="Pilih Jurusan">
                        <option selected>Pilihan Pertama</option>
                        @foreach ($prodis as $prodi)
                            <option value="{{ $prodi->kode_prodi }}"
                                {{ old('pilihan_pertama') == $prodi->nama_prodi ? 'selected' : '' }}>
                                {{ $prodi->nama_prodi }}</option>
                        @endforeach
                    </x-select>
                    @error('pilihan_pertama')
                        <p class="text-xs text-red-500">{{ $message }}</p>
                    @enderror
                    <x-select id="jurusan" name="pilihan_kedua" selected="Pilih Jurusan" label="Pilih Jurusan">
                        <x-error-validation name="pilihan_kedua"></x-error-validation>
                        <option selected>Pilihan Kedua</option>
                        @foreach ($prodis as $prodi)
                            <option value="{{ $prodi->nama_prodi }}">{{ $prodi->nama_prodi }}</option>
                        @endforeach
                    </x-select>
                </div>
                <div class="flex flex-col gap-2 mt-12 mb-8">
                    <div class="flex flex-row items-center gap-2">
                        <h1 class="w-40 font-semibold text-gray-700 text-md">Informasi Pribadi</h1>
                        <div class="hidden w-full border-t border-gray-200 md:block"></div>
                    </div>
                    <p class="text-xs text-gray-600">semua informasi yang anda masukan akan digunakan untuk keperluan
                        registrasi</p>
                </div>
                <div class="flex flex-col mb-4 lg:grid lg:grid-cols-2 lg:gap-4">
                    <div class="flex flex-col gap-4 mb-6">
                        <x-text-input name="nama" value="{{ auth()->user()->name }}" type="text" disabled="true"
                            uppercase="true" label="Nama Lengkap" required="*"
                            placeholder="Isi nama lengkap disini"></x-text-input>
                    </div>
                    <div class="flex flex-col gap-4 mb-6">
                        <label class="text-sm text-gray-800 font-poppins" for="name">Nomor Induk
                            Kependudukan <span class="text-red-500">*</span></label>
                        <input type="number" x-model="form.name" name="nik" value="{{ old('nik') }}"
                            class="block w-full px-3 text-sm text-gray-700 placeholder-gray-500 uppercase transition-all duration-200 bg-white border border-gray-200 rounded-sm font-poppins h-11 placeholder:text-sm focus:outline-none focus:border-blue-500 caret-blue-500"
                            placeholder="Isi nomor induk kependudukan 16 digit" maxlength="16" />
                        <x-error-validation name="nik"></x-error-validation>
                    </div>
                    <div class="flex flex-col gap-4 mb-6">
                        <x-text-input name="email" label="Alamat Email" type="email" required="*" uppercase="true"
                            value="{{ auth()->user()->email }}" placeholder="Isi Alamat Email"
                            disabled="true"></x-text-input>
                    </div>
                    <div class="flex flex-col gap-4 mb-6">
                        <x-text-input name="tempat_lahir" label="Tempat Lahir" type="text" required="*"
                            uppercase="true" placeholder="Masukan Temat Lahir"></x-text-input>
                        <x-error-validation name="tempat_lahir"></x-error-validation>
                    </div>
                    <div class="flex flex-col gap-4 mb-6">
                        <x-text-input name="tanggal_lahir" label="Tanggal Lahir" type="date" uppercase="true"
                            required="*"></x-text-input>
                        <x-error-validation name="tanggal_lahir"></x-error-validation>
                    </div>
                    <div class="flex flex-col gap-4 mb-6">
                        <x-text-input name="nomor_telepon" label="Nomor Telepon" type="number" required="(Whatsapp)*"
                            uppercase="true" placeholder="0852-xxxx-xxxx"></x-text-input>
                        <x-error-validation name="nomor_telepon"></x-error-validation>
                    </div>
                    <div class="flex flex-col gap-4 mb-6">
                        <x-select id="agama" name="agama" selected="Pilih Agama" label="Pilih Agama"
                            required="*">
                            <option selected>Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                        </x-select>
                        <x-error-validation name="agama"></x-error-validation>
                    </div>
                    <div class="flex flex-col gap-4 mb-6">
                        <x-select id="agama" name="kewarganegaraan" selected="Pilih Kewarganegaraan"
                            required="*" label="Pilih Kewarganegaraan">
                            <option selected>Kewarganegaraan</option>
                            <option value="indonesia">Warna Negara Indonesia (WNI)</option>
                            <option value="asing">Warna Negara Asing (WNA)</option>
                        </x-select>
                        <x-error-validation name="kewarganegaraan"></x-error-validation>
                    </div>

                    <div class="flex flex-col gap-4 mb-6">
                        <x-file-upload id="foto" name="foto" label="Foto" required="*"></x-file-upload>
                        <x-error-validation name="foto"></x-error-validation>
                    </div>

                    <div class="flex flex-col gap-4 mb-6">
                        <label class="text-sm text-gray-800 font-poppins" for="email">Alamat<span
                                class="text-red-500"> *</span></label>
                        <input type="email" x-model="form.email" name="alamat"
                            class="block w-full px-3 text-sm text-gray-700 placeholder-gray-500 uppercase transition-all duration-200 bg-white border border-gray-200 rounded-sm font-poppins h-11 placeholder:text-sm focus:outline-none focus:border-blue-500 caret-blue-500"
                            placeholder="ISI ALAMAT ANDA DISINI" />
                        <x-error-validation name="alamat"></x-error-validation>
                    </div>


                    <div class="flex flex-col justify-center gap-4 mb-6">
                        <label class="text-sm text-gray-800 font-poppins" for="jenis_kelamin">Jenis Kelamin</label>
                        <div class="flex flex-row items-center gap-6">
                            <x-radio name="jenis_kelamin" label="Laki Laki" value="Laki Laki"></x-radio>
                            <x-radio name="jenis_kelamin" label="Perempuan" value="Perempuan"></x-radio>
                        </div>
                        <x-error-validation name="jenis_kelamin"></x-error-validation>
                    </div>


                </div>
                <div class="flex justify-end">
                    <button type="button"
                        class="px-8 text-white rounded-sm shadow-md bg-blue-500/75 h-11 disabled:bg-gray-300"
                        :disabled="!stepValid(1)" @click="nextStep()">Lanjut</button>
                </div>
            </div>

            <!-- Step 2 -->
            <div x-show="currentStep === 2">
                <div class="flex flex-col gap-2 mt-12 mb-8">
                    <div class="flex flex-row items-center gap-2">
                        <h1 class="w-40 font-semibold text-gray-700 text-md">Informasi Sekolah</h1>
                        <div class="hidden w-full border-t border-gray-200 md:block"></div>
                    </div>
                    <p class="text-xs text-gray-600">semua informasi sekolah yang anda masukan akan digunakan untuk
                        keperluan registrasi</p>
                </div>
                <div class="flex flex-col mb-6 lg:grid lg:grid-cols-2 lg:gap-4">
                    <div class="flex flex-col gap-4 mb-4">
                        <label class="text-sm text-gray-800 font-poppins" for="address">Nama Sekolah</label>
                        <input type="text" x-model="form.address" name="nama_sekolah"
                            class="block w-full px-3 text-sm text-gray-700 placeholder-gray-500 uppercase transition-all duration-200 bg-white border border-gray-200 rounded-sm font-poppins h-11 placeholder:text-sm focus:outline-none focus:border-blue-500 caret-blue-500"
                            placeholder="Masukkan alamat" />
                        <x-error-validation name="nama_sekolah"></x-error-validation>
                    </div>
                    <div class="flex flex-col gap-4 mb-4">
                        <x-text-input name="nisn" label="NISN" type="number" required="*" uppercase="true"
                            placeholder="Isi NISN disini"></x-text-input>
                        <x-error-validation name="nisn"></x-error-validation>
                    </div>
                    <div class="flex flex-col gap-4 mb-4">
                        <x-text-input name="tahun_lulus" label="Tahun Lulus" type="date" uppercase="true"
                            required="*"></x-text-input>
                        <x-error-validation name="tahun_lulus"></x-error-validation>
                    </div>
                    <div class="flex flex-col gap-4 mb-4">
                        <label class="text-sm text-gray-800 font-poppins" for="phone">Alamat Sekolah</label>
                        <input type="text" x-model="form.phone" name="alamat_sekolah"
                            class="block w-full px-3 text-sm text-gray-700 placeholder-gray-500 uppercase transition-all duration-200 bg-white border border-gray-200 rounded-sm font-poppins h-11 placeholder:text-sm focus:outline-none focus:border-blue-500 caret-blue-500"
                            placeholder="Isi Alamat Sekolah disini" />
                        <x-error-validation name="alamat_sekolah"></x-error-validation>
                    </div>
                    <div class="flex flex-col gap-4 mb-4">
                        <x-select id="provinsi" name="provinsi" selected="Pilih Provinsi" label="Provinsi">
                            <option selected>Provinsi</option>
                            <option value="Maluku Uata">Maluku Uata</option>
                            <option value="Sulawesi">Sulawesi</option>
                            <option value="Jawa">Jawa</option>
                        </x-select>
                        <x-error-validation name="provinsi"></x-error-validation>
                    </div>
                    <div class="flex flex-col gap-4 mb-4">
                        <x-text-input name="kabupaten" label="Kabupaten/Kota" type="text" required="*"
                            uppercase="true" placeholder="Isi Kabupaten disini"></x-text-input>
                        <x-error-validation name="kabupaten"></x-error-validation>
                    </div>
                    <div class="flex flex-col gap-4 mb-4">
                        <x-select id="jenis_sekolah" name="jenis_sekolah" selected="Jenis Sekolah"
                            label="Jenis Sekolah">
                            <option selected>Jenis Sekolah</option>
                            <option value="SMA">SMA</option>
                            <option value="SMK">SMK</option>
                            <option value="MA">MA</option>
                            <option value="LAINNYA">LAINNYA</option>
                        </x-select>
                        <x-error-validation name="jenis_sekolah"></x-error-validation>
                    </div>
                    <div class="flex flex-col gap-4 mb-4">
                        <x-select id="jurusan" name="jurusan" selected="Pilih Jurusan" label="Pilih Jurusan">
                            <option selected>Jurusan</option>
                            <option value="IPA">IPA</option>
                            <option value="IPS">IPS</option>
                        </x-select>
                        <x-error-validation name="jurusan"></x-error-validation>
                    </div>
                </div>
                <div class="flex justify-end gap-3">
                    <button type="button"
                        class="px-5 text-white bg-yellow-400 rounded-sm shadow-sm h-11 hover:bg-yellow-500"
                        @click="previousStep()">Kembali</button>
                    <button type="button"
                        class="px-5 text-white bg-blue-400 rounded-sm shadow-sm h-11 hover:bg-blue-500 disabled:bg-gray-300"
                        :disabled="!stepValid(2)" @click="nextStep()">Berikutnya</button>
                </div>
            </div>

            <!-- Step 3 -->
            <div x-show="currentStep === 3">
                <div class="flex flex-col gap-2 mt-12 mb-8">
                    <div class="flex flex-row items-center gap-2">
                        <h1 class="w-56 font-semibold text-gray-700 text-md">Informasi Orang Tua</h1>
                        <div class="hidden w-full border-t border-gray-200 md:block"></div>
                    </div>
                    <p class="text-xs text-gray-600">semua informasi sekolah yang anda masukan akan digunakan untuk
                        keperluan registrasi</p>
                </div>
                <div class="flex flex-col mb-6 lg:grid lg:grid-cols-2 lg:gap-4">
                    <div class="flex flex-col gap-4 mb-4">
                        <label class="text-sm text-gray-800 font-poppins" for="nama_ayah">Nama Ayah <span
                                class="text-red-500">*</span></label>
                        <input type="text" x-model="form.password" name="nama_ayah" id="nama_ayah"
                            class="block w-full px-3 text-sm text-gray-700 placeholder-gray-500 uppercase transition-all duration-200 bg-white border border-gray-200 rounded-sm font-poppins h-11 placeholder:text-sm focus:outline-none focus:border-blue-500 caret-blue-500"
                            placeholder="Isikan nama Ayah" />
                        <x-error-validation name="nama_ayah"></x-error-validation>
                    </div>
                    <div class="flex flex-col gap-4 mb-4">
                        <label class="text-sm text-gray-800 font-poppins" for="pekerjaan_ayah">Pekerjaan Ayah
                            <span class="text-red-500">*</span></label>
                        <input type="text" x-model="form.confirmPassword" name="pekerjaan_ayah"
                            id="pekerjaan_ayah"
                            class="block w-full px-3 text-sm text-gray-700 placeholder-gray-500 uppercase transition-all duration-200 bg-white border border-gray-200 rounded-sm font-poppins h-11 placeholder:text-sm focus:outline-none focus:border-blue-500 caret-blue-500"
                            placeholder="Isikan pekerjaan Ayah" />
                        <x-error-validation name="pekerjaan_ayah"></x-error-validation>
                    </div>
                    <div class="flex flex-col gap-4 mb-4">
                        <x-text-input name="penghasilan_ayah" label="Penghasilan Ayah" type="number" required="*"
                            uppercase="true" placeholder="Isikan penghasilan Ayah"></x-text-input>
                        <x-error-validation name="penghasilan_ayah"></x-error-validation>
                    </div>
                    <div class="flex flex-col gap-4 mb-4">
                        <x-text-input name="pendidikan_ayah" label="Pendidikan Ayah" type="text" required="*"
                            uppercase="true" placeholder="Isikan Pendidikan Ayah"></x-text-input>
                        <x-error-validation name="pendidikan_ayah"></x-error-validation>
                    </div>
                    <div class="flex flex-col gap-4 mb-4">
                        <x-text-input name="nomor_telepon_ayah" label="Nomor Telepon Ayah" type="number"
                            uppercase="true" required="*" placeholder="0852-xxxx-xxxx"></x-text-input>
                        <x-error-validation name="nomor_telepon_ayah"></x-error-validation>
                    </div>
                    <div class="flex flex-col gap-4 mb-4">
                        <x-text-input name="nama_ibu" label="Nama Ibu" type="text" required="*"
                            uppercase="true" placeholder="Isikan Nama Ibu"></x-text-input>
                        <x-error-validation name="nama_ibu"></x-error-validation>
                    </div>
                    <div class="flex flex-col gap-4 mb-4">
                        <x-text-input name="pekerjaan_ibu" label="Pekerjaan Ibu" type="text" required="*"
                            uppercase="true" placeholder="Isikan Pekerjaan Ibu"></x-text-input>
                        <x-error-validation name="pekerjaan_ibu"></x-error-validation>
                    </div>
                    <div class="flex flex-col gap-4 mb-4">
                        <x-text-input name="pendidikan_ibu" label="Pendidikan Ibu" type="text" required="*"
                            uppercase="true" placeholder="Isikan Pendidikan Ibu"></x-text-input>
                        <x-error-validation name="pendidikan_ibu"></x-error-validation>
                    </div>
                    <div class="flex flex-col gap-4 mb-4">
                        <x-text-input name="penghasilan_ibu" label="Penghasilan Ibu" type="text" required="*"
                            uppercase="true" placeholder="Isikan Penghasilan Ibu"></x-text-input>
                        <x-error-validation name="penghasilan_ibu"></x-error-validation>
                    </div>
                    <div class="flex flex-col gap-4 mb-4">
                        <x-text-input name="nomor_telepon_ibu" label="Nomor Telepon Ibu" type="number"
                            uppercase="true" required="*" placeholder="0852-xxxx-xxxx"></x-text-input>
                        <x-error-validation name="nomor_telepon_ibu"></x-error-validation>
                    </div>
                </div>
                <div class="flex flex-col gap-2 mt-12 mb-8">
                    <div class="flex flex-row items-center gap-2">
                        <h1 class="w-64 font-semibold text-gray-700 text-md">Informasi Orang Tua Wali</h1>
                        <div class="hidden w-full border-t border-gray-200 md:block"></div>
                    </div>
                    <p class="text-xs text-gray-600">semua informasi yang anda masukan akan digunakan untuk
                        keperluan
                        registrasi</p>
                </div>
                <div class="flex flex-col mb-6 lg:grid lg:grid-cols-2 lg:gap-4">
                    <div class="flex flex-col gap-4 mb-4">
                        <x-text-input name="nama_wali" label="Nama Wali" type="text" required="*"
                            uppercase="true" placeholder="Isikan Nama Wali"></x-text-input>
                        <x-error-validation name="nama_wali"></x-error-validation>
                    </div>
                    <div class="flex flex-col gap-4 mb-4">
                        <x-text-input name="nomor_telepon_wali" label="Nomor Telepon Wali" type="number"
                            uppercase="true" required="*" placeholder="0852-xxxx-xxxx"></x-text-input>
                        <x-error-validation name="nomor_telepon_wali"></x-error-validation>
                    </div>
                </div>
                <div class="flex justify-end gap-3">
                    <button type="button"
                        class="px-5 text-white bg-yellow-400 rounded-sm shadow-sm h-11 hover:bg-yellow-500"
                        @click="previousStep()">Kembali</button>
                    <button type="submit" @click="submitForm()"
                        class="px-5 text-white bg-blue-400 rounded-sm shadow-sm h-11 hover:bg-blue-500 disabled:bg-gray-300">Daftar</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        function formHandler() {
            return {
                currentStep: 1,
                form: {
                    name: '',
                    email: '',
                    address: '',
                    phone: '',
                    password: '',
                    confirmPassword: ''
                },
                steps: [{
                        text: "1/3 - Informasi Pribadi",
                        width: "33%"
                    },
                    {
                        text: "2/3 - Alamat",
                        width: "66%"
                    },
                    {
                        text: "3/3 - Kata Sandi",
                        width: "100%"
                    }
                ],
                nextStep() {
                    this.currentStep++;
                },
                previousStep() {
                    this.currentStep--;
                },
                stepValid(step) {
                    if (step === 1) return this.form.name && this.form.email;
                    if (step === 2) return this.form.address && this.form.phone;
                    if (step === 3) return this.form.password && this.form.confirmPassword;
                },
                submitForm() {
                    // // direct to route app.pendaftaran.store
                    // window.location.href = "{{ route('app.pendaftaran.store') }}";
                    // // method post
                    // axios.post('/pendaftaran', this.form)
                    if (this.stepValid(3)) {
                        // Cari elemen form
                        const form = document.querySelector('form');
                        // Kirim form secara bawaan HTML
                        form.submit();
                    } else {
                        alert('Form belum diisi');
                    }
                }
            };
        }
    </script>
    <!-- End Form -->
</x-app>
