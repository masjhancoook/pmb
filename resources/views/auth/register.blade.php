<x-app>
    <x-error-massage></x-error-massage>
    <section class="relative h-screen py-10 bg-gradient-to-t from-gray-50 to-white sm:py-16 lg:py-24 ">
        <div class="relative max-w-lg px-4 mx-auto sm:px-0">
            <div class="overflow-hidden bg-white rounded-md shadow-md">
                <div class="px-4 py-6 sm:px-8 sm:py-7">
                    <div class="text-start">
                        <h2 class="text-lg font-medium text-gray-800">{{ __('Register') }}</h2>
                        <p class="mt-2 text-sm text-gray-600">Semua informasi yang anda masukan akan digunakan untuk
                            keperluan login </p>
                    </div>

                    <form action="{{ route('register') }}" method="POST" class="mt-8">
                        @csrf
                        <div class="space-y-5">
                            <x-text-input label="Nama Lengkap" name="name" type="name"
                                placeholder="Masukan Nama Lengkap" required="*"></x-text-input>
                            @error('name')
                                <span class="text-xs text-red-500 font-poppins">{{ $message }}</span>
                            @enderror
                            <x-text-input label="Alamat Email" name="email" type="email"
                                placeholder="Masukan Alamat Email" required="*"></x-text-input>
                            @error('email')
                                <span class="text-xs text-red-500 font-poppins">{{ $message }}</span>
                            @enderror
                            <x-text-input label="Password" name="password" type="password"
                                placeholder="Masukan Password" required="*"></x-text-input>
                            @error('password')
                                <span class="text-xs text-red-500 font-poppins">{{ $message }}</span>
                            @enderror
                            <x-text-input label="Konfirmasi Password" name="password_confirmation" type="password"
                                placeholder="Masukan Konfirmasi password" required="*"></x-text-input>
                            @error('password_confirmation')
                                <span class="text-xs text-red-500 font-poppins">{{ $message }}</span>
                            @enderror
                            <div class="py-4">
                                <button type="submit"
                                    class="inline-flex items-center justify-center w-full px-4 text-base font-semibold text-white transition-all duration-200 border border-transparent rounded-md bg-blue-500/75 h-11 focus:outline-none hover:bg-blue-400 focus:bg-blue-700">Buat
                                    Akun</button>
                            </div>

                            <div class="text-center ">
                                <h1 class="text-sm text-gray-500">Sudah punya akun ? <a href="{{ route('login') }}"
                                        title=""
                                        class="text-sm font-semibold text-blue-400 transition-all duration-200 hover:underline hover:text-blue-500">Login</a>
                                </h1>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app>
