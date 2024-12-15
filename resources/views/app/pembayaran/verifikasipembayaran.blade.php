<x-app>
    <x-navbar></x-navbar>
    <x-breadcrumb></x-breadcrumb>
    <x-success-massage></x-success-massage>
    <x-error-massage></x-error-massage>
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
                        Nominal Bayar</th>

                    <th scope="col"
                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        Rekening Pembayaran</th>

                    <th scope="col"
                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        Status</th>

                    <th scope="col" class="relative py-3.5 px-4">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                @foreach ($pembayarans as $item)
                    <tr>
                        <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                            <div>
                                <h2 class="font-medium text-gray-800 dark:text-white ">{{ $loop->iteration }}</h2>
                            </div>
                        </td>
                        <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                            <div>
                                <h2 class="font-medium text-gray-800 dark:text-white ">
                                    {{ $item->mahasiswa->nama }}</h2>
                            </div>
                        </td>
                        <td class="py-4 text-sm font-medium whitespace-nowrap">
                            {{ $item->mahasiswa->email }}</h2>
                        </td>
                        <td class="px-4 py-4 text-sm whitespace-nowrap">
                            <div>
                                <h4 class="text-gray-700 dark:text-gray-200">
                                    {{ $item->mahasiswa->nik }}
                                </h4>
                            </div>
                        </td>
                        <td class="px-4 py-4 text-sm whitespace-nowrap">
                            Rp. {{ number_format($item->nominal, 0, '.', '.') }}
                        </td>
                        <td class="px-4 py-4 text-sm whitespace-nowrap">
                            BCA: 443967294
                        </td>

                        <td class="py-4 text-sm font-medium whitespace-nowrap">
                            <div
                                class="inline py-1 text-sm font-normal  gap-x-2
                            px-4  rounded-full {{ $item->status == 'Lunas' ? 'bg-green-200 text-green-800 font-semibold' : 'bg-red-100 text-red-800' }}  ">
                                {{ $item->status }}
                            </div>
                        </td>

                        <td class="flex gap-3 px-4 py-4 text-sm whitespace-nowrap" x-data="{ open: false }">
                            @hasrole('Operator')
                                {{-- konfirmasi pembayaran oleh admin --}}
                                <x-modal titleDialog="Verifikasi Pembayaran" titleButton="Konfirmasi Pembayaran"
                                    msg="Apakah anda yakin ingin memverifikasi pembayaran ini?">
                                    <form method="POST" action="{{ route('app.pembayaran.update.status', $item->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="mt-4 ">
                                            <ul class="space-y-4">
                                                <li>Nama: {{ $item->mahasiswa->nama }}</li>
                                                <li>Email: {{ $item->mahasiswa->email }}</li>
                                                <li>Nominal Pembayaran: Rp.
                                                    {{-- {{ number_format($item->nominal, 0, '.', '.') }} --}}
                                                    Rp. 200.000
                                                </li>
                                                <li>Tanggal Pembayaran:
                                                    {{ \Carbon\Carbon::parse($item->created_at)->format('d F Y | H:i') }}
                                                </li>
                                                <li>
                                                    <img src="{{ Storage::url($item->bukti_pembayaran) }}"
                                                        class="w-full max-w-full" alt="">
                                                </li>
                                                <li>
                                                    <x-select id="status" name="status" label="Status">
                                                        <option selected>Pilih Status</option>
                                                        <option value="Lunas"
                                                            {{ $item->status == 'lunas' ? 'selected' : '' }}>
                                                            Lunas</option>
                                                        <option value="ditolak"
                                                            {{ $item->status == 'Belum Lunas' ? 'selected' : '' }}>
                                                            Ditolak</option>
                                                    </x-select>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mt-4">
                                            <x-botton label="Verifikasi" type="submit">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_3098_154395)">
                                                        <path
                                                            d="M13.3333 13.3332L9.99997 9.9999M9.99997 9.9999L6.66663 13.3332M9.99997 9.9999V17.4999M16.9916 15.3249C17.8044 14.8818 18.4465 14.1806 18.8165 13.3321C19.1866 12.4835 19.2635 11.5359 19.0351 10.6388C18.8068 9.7417 18.2862 8.94616 17.5555 8.37778C16.8248 7.80939 15.9257 7.50052 15 7.4999H13.95C13.6977 6.52427 13.2276 5.61852 12.5749 4.85073C11.9222 4.08295 11.104 3.47311 10.1817 3.06708C9.25943 2.66104 8.25709 2.46937 7.25006 2.50647C6.24304 2.54358 5.25752 2.80849 4.36761 3.28129C3.47771 3.7541 2.70656 4.42249 2.11215 5.23622C1.51774 6.04996 1.11554 6.98785 0.935783 7.9794C0.756025 8.97095 0.803388 9.99035 1.07431 10.961C1.34523 11.9316 1.83267 12.8281 2.49997 13.5832"
                                                            stroke="currentColor" stroke-width="1.67" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_3098_154395">
                                                            <rect width="20" height="20" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </x-botton>
                                        </div>
                                    </form>
                                </x-modal>
                            @endhasrole

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-table>
</x-app>
