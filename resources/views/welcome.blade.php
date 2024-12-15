<x-app>
    <!-- Navbar -->
    <x-navbar></x-navbar>
    <!-- End Navbar -->

    <!-- Banner -->
    <section class="relative py-10 overflow-hidden bg-blue-500 sm:py-16 lg:py-24 xl:py-20">
        <div class="absolute inset-0">
            <img class="object-cover w-full h-full md:object-left md:origin-top-left"
                src="{{ asset('assets/banner/banner.png') }}" alt="" />
            <!-- src="https://cdn.rareblocks.xyz/collection/celebration/images/cta/5/girl-working-on-laptop.jpg" -->
        </div>

        <div class="absolute inset-0 hidden bg-gradient-to-r md:block from-black to-transparent"></div>

        <div class="absolute inset-0 block bg-black/60 md:hidden"></div>

        <div class="relative px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="text-center md:w-2/3 lg:w-1/2 xl:w-1/2 md:text-left">
                <h2 class="text-3xl font-bold leading-tight text-white sm:text-4xl lg:text-5xl">PENERIMAAN
                    <span class="text-[#f8e433]">MAHASISWA</span>
                    BARU
                </h2>
                <p class="mt-4 mb-4 text-base text-gray-200">Temukan pengalaman belajar yang unggul dan peluang yang
                    tak
                    terbatas bersama kami.</p>
                <div
                    class="flex mb-6 items-center justify-center py-2 bg-[#f8e433] lg:max-w-xs rounded-tr-full rounded-bl-full">
                    <h1 class="text-[#094784] text-xl font-semibold">Universitas terbaik</h1>
                </div>

                <div class="flex flex-row items-center gap-2 mb-4">
                    <h1 class="text-xl font-semibold text-white">Tahun Ajaran</h1>
                    <h1 class="text-xl font-semibold text-[#f8e433]">2024/2025</h1>
                </div>

                <div
                    class="flex flex-row justify-between px-4 py-2 mb-8 rounded-sm lg:max-w-sm outline-dotted outline-2 outline-offset-2 outline-white">
                    <div class="text-white">
                        <h1>Gelombang 1</h1>
                        <span>1 - 31 Juli 2025</span>
                    </div>
                    <div class="text-white">
                        <h1>Gelombang 2</h1>
                        <span>1 - 30 September 2025</span>
                    </div>
                </div>
                <div class="">
                    <a href="{{ route('register') }}"
                        class="inline-flex uppercase items-center justify-center flex-shrink-0 w-auto px-4 py-4 mt-4 text-sm  transition-all duration-200 bg-white border border-transparent rounded-md sm:mt-0 sm:w-auto hover:bg-[#f8e433] focus:bg-yellow-300 ">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 right-0 bg-yellow-300 lg:min-w-[50%] rounded-tl-full">
            <div class="hidden mb-10 lg:flex lg:items-center lg:justify-start lg:pt-8 lg:mx-20">
                <div class="flex flex-row gap-6">
                    <div class="flex flex-row items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-world">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M3.6 9h16.8" />
                            <path d="M3.6 15h16.8" />
                            <path d="M11.5 3a17 17 0 0 0 0 18" />
                            <path d="M12.5 3a17 17 0 0 1 0 18" />
                        </svg>
                        <div class="flex flex-col ">
                            <h1 class="text-sm">Kunjungi website</h1>
                            <h1 class="text-xs">www.universitasterbaik.com</h1>
                        </div>
                    </div>
                    <div class="flex flex-row items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                        </svg>
                        <div class="flex flex-col ">
                            <h1 class="text-sm">Hubungi Kami</h1>
                            <h1 class="text-xs">+628123456789</h1>
                        </div>
                    </div>
                    <div class="flex flex-row items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-mail">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                            <path d="M3 7l9 6l9 -6" />
                        </svg>
                        <div class="flex flex-col ">
                            <h1 class="text-sm">Hubungi Kami</h1>
                            <h1 class="text-xs">admin@gmail.com</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner -->


    <!--  Pengumuman -->
    <section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="flex items-end justify-between">
                <div class="flex-1 text-center lg:text-left">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Informasi &
                        Pengumuman
                    </h2>
                    <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600 lg:mx-0">Amet minim mollit
                        non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
                </div>

                <div class="hidden lg:flex lg:items-center lg:space-x-3">
                    <button type="button"
                        class="flex items-center justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-9 h-9 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>

                    <button type="button"
                        class="flex items-center justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-9 h-9 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="grid max-w-md grid-cols-1 gap-6 mx-auto mt-8 lg:mt-16 lg:grid-cols-3 lg:max-w-full">
                <div class="overflow-hidden bg-white rounded shadow">
                    <div class="p-5">
                        <div class="relative">
                            <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                                <img class="object-cover w-full h-full"
                                    src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/2/blog-post-1.jpg"
                                    alt="" />
                            </a>

                            <div class="absolute top-4 left-4">
                                <span
                                    class="px-4 py-2 text-xs font-semibold tracking-widest text-gray-900 uppercase bg-white rounded-full">
                                    Lifestyle </span>
                            </div>
                        </div>
                        <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase"> March
                            21, 2020 </span>
                        <p class="mt-5 text-2xl font-semibold">
                            <a href="#" title="" class="text-black"> How to build coffee inside your home
                                in 5 minutes. </a>
                        </p>
                        <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua
                            dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                        <a href="#" title=""
                            class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-blue-600 transition-all duration-200 border-b-2 border-transparent hover:border-blue-600 focus:border-blue-600">
                            Continue Reading
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="overflow-hidden bg-white rounded shadow">
                    <div class="p-5">
                        <div class="relative">
                            <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                                <img class="object-cover w-full h-full"
                                    src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/2/blog-post-2.jpg"
                                    alt="" />
                            </a>

                            <div class="absolute top-4 left-4">
                                <span
                                    class="px-4 py-2 text-xs font-semibold tracking-widest text-gray-900 uppercase bg-white rounded-full">
                                    Marketing </span>
                            </div>
                        </div>
                        <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase"> April
                            04, 2020 </span>
                        <p class="mt-5 text-2xl font-semibold">
                            <a href="#" title="" class="text-black"> Ho7 Tips to run your remote team
                                faster and better. </a>
                        </p>
                        <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua
                            dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                        <a href="#" title=""
                            class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-blue-600 transition-all duration-200 border-b-2 border-transparent hover:border-blue-600 focus:border-blue-600">
                            Continue Reading
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="overflow-hidden bg-white rounded shadow">
                    <div class="p-5">
                        <div class="relative">
                            <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                                <img class="object-cover w-full h-full"
                                    src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/2/blog-post-3.jpg"
                                    alt="" />
                            </a>

                            <div class="absolute top-4 left-4">
                                <span
                                    class="px-4 py-2 text-xs font-semibold tracking-widest text-gray-900 uppercase bg-white rounded-full">
                                    Productivity </span>
                            </div>
                        </div>
                        <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase"> May 12,
                            2020 </span>
                        <p class="mt-5 text-2xl font-semibold">
                            <a href="#" title="" class="text-black"> 5 Productivity tips to write faster
                                at morning. </a>
                        </p>
                        <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua
                            dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                        <a href="#" title=""
                            class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-blue-600 transition-all duration-200 border-b-2 border-transparent hover:border-blue-600 focus:border-blue-600">
                            Continue Reading
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center mt-8 space-x-3 lg:hidden">
                <button type="button"
                    class="flex items-center justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-9 h-9 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <button type="button"
                    class="flex items-center justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-9 h-9 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!--  Pengumuman -->




    <!--  angatement -->
    <section class="pt-10 overflow-hidden bg-gray-50 md:pt-0 sm:pt-16 2xl:pt-16">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid items-center grid-cols-1 md:grid-cols-2">
                <div>
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Kenapa Harus Kuliah
                        <br class="block sm:hidden" /><span class="text-blue-500">Universitas</span>
                        <span>Terbaik</span>
                    </h2>
                    <p class="max-w-lg mt-3 text-xl leading-relaxed text-gray-600 md:mt-8">Universitas terbaik
                        menawarkan kurikulum yang dirancang secara komprehensif dan selalu diperbarui sesuai dengan
                        kebutuhan industri dan perkembangan ilmu pengetahuan. Anda akan diajar oleh dosen-dosen
                        berkualitas yang ahli di bidangnya</p>
                </div>
                <div class="relative">
                    <img class="absolute inset-x-0 bottom-0 -mb-48 -translate-x-1/2 left-1/2"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/team/1/blob-shape.svg"
                        alt="" />

                    <img class="relative w-full xl:max-w-lg xl:mx-auto 2xl:origin-bottom 2xl:scale-110"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/team/1/business-woman.png"
                        alt="" />
                </div>
            </div>
        </div>
    </section>
    <!--  End andgementment -->



    <!--  Fasilitas -->
    <section class="py-10 bg-white sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto text-center lg:mb-16">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Fasilitas Kami</h2>
                <p class="max-w-lg mx-auto mt-4 text-base leading-relaxed text-gray-600">Amet minim mollit non deserunt
                    ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
            </div>
            <div class="grid grid-cols-1 gap-12 text-center sm:grid-cols-2 md:grid-cols-3 lg:gap-y-16">
                <div>
                    <div class="relative flex items-center justify-center mx-auto">
                        <svg class="text-blue-100" width="72" height="75" viewBox="0 0 72 75"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M63.6911 28.8569C68.0911 48.8121 74.6037 61.2674 53.2349 65.9792C31.8661 70.6909 11.6224 61.2632 7.22232 41.308C2.82229 21.3528 3.6607 12.3967 25.0295 7.68503C46.3982 2.97331 59.2911 8.90171 63.6911 28.8569Z" />
                        </svg>
                        <svg class="absolute text-blue-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                        </svg>
                    </div>
                    <h3 class="mt-8 text-lg font-semibold text-black">Secured Payments</h3>
                    <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor
                        do amet sint. Velit officia consequat duis enim velit mollit.</p>
                </div>

                <div>
                    <div class="relative flex items-center justify-center mx-auto">
                        <svg class="text-orange-100" width="62" height="64" viewBox="0 0 62 64"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M62 13.001C62 33.4355 53.9345 64.001 33.5 64.001C13.0655 64.001 0 50.435 0 30.0005C0 9.56596 2.56546 4.00021 23 4.00021C43.4345 4.00021 62 -7.43358 62 13.001Z" />
                        </svg>
                        <svg class="absolute text-orange-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="mt-8 text-lg font-semibold text-black">Fast & Easy to Load</h3>
                    <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor
                        do amet sint. Velit officia consequat duis enim velit mollit.</p>
                </div>

                <div>
                    <div class="relative flex items-center justify-center mx-auto">
                        <svg class="text-green-100" width="66" height="68" viewBox="0 0 66 68"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M65.5 30C65.5 50.4345 46.4345 68 26 68C5.56546 68 0 50.4345 0 30C0 9.56546 12.5655 0 33 0C53.4345 0 65.5 9.56546 65.5 30Z" />
                        </svg>
                        <svg class="absolute text-green-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </div>
                    <h3 class="mt-8 text-lg font-semibold text-black">Light & Dark Version</h3>
                    <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor
                        do amet sint. Velit officia consequat duis enim velit mollit.</p>
                </div>

                <div>
                    <div class="relative flex items-center justify-center mx-auto">
                        <svg class="text-purple-100" width="66" height="68" viewBox="0 0 66 68"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M65.5 30C65.5 50.4345 46.4345 68 26 68C5.56546 68 0 50.4345 0 30C0 9.56546 12.5655 0 33 0C53.4345 0 65.5 9.56546 65.5 30Z" />
                        </svg>
                        <svg class="absolute text-purple-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </div>
                    <h3 class="mt-8 text-lg font-semibold text-black">Light & Dark Version</h3>
                    <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor
                        do amet sint. Velit officia consequat duis enim velit mollit.</p>
                </div>

                <div>
                    <div class="relative flex items-center justify-center mx-auto">
                        <svg class="text-gray-100" width="65" height="70" viewBox="0 0 65 70"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M64.5 26C64.5 46.4345 56.4345 70 36 70C15.5655 70 0 53.9345 0 33.5C0 13.0655 13.0655 0 33.5 0C53.9345 0 64.5 5.56546 64.5 26Z" />
                        </svg>
                        <svg class="absolute text-gray-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="mt-8 text-lg font-semibold text-black">Fast & Easy to Load</h3>
                    <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor
                        do amet sint. Velit officia consequat duis enim velit mollit.</p>
                </div>

                <div>
                    <div class="relative flex items-center justify-center mx-auto">
                        <svg class="text-yellow-100" width="78" height="78" viewBox="0 0 78 78"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.49996 28.0002C4.09993 47.9554 14.1313 66.7885 35.5 71.5002C56.8688 76.2119 68.0999 58.4553 72.5 38.5001C76.9 18.5449 68.3688 12.711 47 7.99931C25.6312 3.28759 12.9 8.04499 8.49996 28.0002Z" />
                        </svg>
                        <svg class="absolute text-yellow-500 w-9 h-9" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                        </svg>
                    </div>
                    <h3 class="mt-8 text-lg font-semibold text-black">Secured Payments</h3>
                    <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor
                        do amet sint. Velit officia consequat duis enim velit mollit.</p>
                </div>

                <div>
                    <div class="relative flex items-center justify-center mx-auto">
                        <svg class="text-gray-100" width="62" height="64" viewBox="0 0 62 64"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M62 13.001C62 33.4355 53.9345 64.001 33.5 64.001C13.0655 64.001 0 50.435 0 30.0005C0 9.56596 2.56546 4.00021 23 4.00021C43.4345 4.00021 62 -7.43358 62 13.001Z">
                            </path>
                        </svg>
                        <svg class="absolute text-gray-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </div>
                    <h3 class="mt-8 text-lg font-semibold text-black">Light & Dark Version</h3>
                    <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor
                        do amet sint. Velit officia consequat duis enim velit mollit.</p>
                </div>

                <div>
                    <div class="relative flex items-center justify-center mx-auto">
                        <svg class="text-rose-100" width="72" height="75" viewBox="0 0 72 75"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M63.6911 28.8569C68.0911 48.8121 74.6037 61.2674 53.2349 65.9792C31.8661 70.6909 11.6224 61.2632 7.22232 41.308C2.82229 21.3528 3.6607 12.3967 25.0295 7.68503C46.3982 2.97331 59.2911 8.90171 63.6911 28.8569Z" />
                        </svg>
                        <svg class="absolute text-rose-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                        </svg>
                    </div>
                    <h3 class="mt-8 text-lg font-semibold text-black">Secured Payments</h3>
                    <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor
                        do amet sint. Velit officia consequat duis enim velit mollit.</p>
                </div>

                <div>
                    <div class="relative flex items-center justify-center mx-auto">
                        <svg class="text-lime-100" width="62" height="65" viewBox="0 0 62 65"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 13.0264C0 33.4609 8.06546 64.0264 28.5 64.0264C48.9345 64.0264 62 50.4604 62 30.0259C62 9.59135 59.4345 4.0256 39 4.0256C18.5655 4.0256 0 -7.40819 0 13.0264Z" />
                        </svg>

                        <svg class="absolute text-lime-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="mt-8 text-lg font-semibold text-black">Fast & Easy to Load</h3>
                    <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor
                        do amet sint. Velit officia consequat duis enim velit mollit.</p>
                </div>
            </div>
        </div>
    </section>

    <!--  Fasilitas -->



    <!--  Jalur Pendaftaran -->
    <section class="py-10 bg-white sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Alur Pendaftaran</h2>
                <p class="max-w-lg mx-auto mt-4 text-base leading-relaxed text-gray-600">Amet minim mollit non deserunt
                    ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
            </div>

            <div class="relative mt-12 lg:mt-20">
                <div class="absolute inset-x-0 hidden xl:px-44 top-2 md:block md:px-20 lg:px-28">
                    <img class="w-full"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/steps/2/curved-dotted-line.svg"
                        alt="" />
                </div>

                <div class="relative grid grid-cols-1 text-center gap-y-12 md:grid-cols-3 gap-x-12">
                    <div>
                        <div
                            class="flex items-center justify-center w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full shadow">
                            <span class="text-xl font-semibold text-gray-700"> 1 </span>
                        </div>
                        <h3 class="mt-6 text-xl font-semibold leading-tight text-black md:mt-10">Create a free account
                        </h3>
                        <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua
                            dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                    </div>

                    <div>
                        <div
                            class="flex items-center justify-center w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full shadow">
                            <span class="text-xl font-semibold text-gray-700"> 2 </span>
                        </div>
                        <h3 class="mt-6 text-xl font-semibold leading-tight text-black md:mt-10">Build your website
                        </h3>
                        <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua
                            dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                    </div>

                    <div>
                        <div
                            class="flex items-center justify-center w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full shadow">
                            <span class="text-xl font-semibold text-gray-700"> 3 </span>
                        </div>
                        <h3 class="mt-6 text-xl font-semibold leading-tight text-black md:mt-10">Release & Launch</h3>
                        <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua
                            dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  Jalur Pendaftaran -->






    <!-- footer -->
    <section class="py-10 bg-gray-50 sm:pt-16 lg:pt-24">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid grid-cols-2 md:col-span-3 lg:grid-cols-6 gap-y-16 gap-x-12">
                <div class="col-span-2 md:col-span-3 lg:col-span-2 lg:pr-8">
                    <img class="w-auto h-9" src="https://cdn.rareblocks.xyz/collection/celebration/images/logo.svg"
                        alt="" />

                    <p class="text-base leading-relaxed text-gray-600 mt-7">Amet minim mollit non deserunt ullamco est
                        sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>

                    <ul class="flex items-center space-x-3 mt-9">
                        <li>
                            <a href="#" title=""
                                class="flex items-center justify-center text-white transition-all duration-200 bg-gray-800 rounded-full w-7 h-7 hover:bg-blue-600 focus:bg-blue-600">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
                                    </path>
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="#" title=""
                                class="flex items-center justify-center text-white transition-all duration-200 bg-gray-800 rounded-full w-7 h-7 hover:bg-blue-600 focus:bg-blue-600">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z">
                                    </path>
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="#" title=""
                                class="flex items-center justify-center text-white transition-all duration-200 bg-gray-800 rounded-full w-7 h-7 hover:bg-blue-600 focus:bg-blue-600">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z">
                                    </path>
                                    <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                    <path
                                        d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z">
                                    </path>
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="#" title=""
                                class="flex items-center justify-center text-white transition-all duration-200 bg-gray-800 rounded-full w-7 h-7 hover:bg-blue-600 focus:bg-blue-600">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <p class="text-sm font-semibold tracking-widest text-gray-400 uppercase">Company</p>

                    <ul class="mt-6 space-y-4">
                        <li>
                            <a href="#" title=""
                                class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600">
                                About </a>
                        </li>

                        <li>
                            <a href="#" title=""
                                class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600">
                                Features </a>
                        </li>

                        <li>
                            <a href="#" title=""
                                class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600">
                                Works </a>
                        </li>

                        <li>
                            <a href="#" title=""
                                class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600">
                                Career </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <p class="text-sm font-semibold tracking-widest text-gray-400 uppercase">Help</p>

                    <ul class="mt-6 space-y-4">
                        <li>
                            <a href="#" title=""
                                class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600">
                                Customer Support </a>
                        </li>

                        <li>
                            <a href="#" title=""
                                class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600">
                                Delivery Details </a>
                        </li>

                        <li>
                            <a href="#" title=""
                                class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600">
                                Terms & Conditions </a>
                        </li>

                        <li>
                            <a href="#" title=""
                                class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600">
                                Privacy Policy </a>
                        </li>
                    </ul>
                </div>

                <div class="col-span-2 md:col-span-1 lg:col-span-2 lg:pl-8">
                    <p class="text-sm font-semibold tracking-widest text-gray-400 uppercase">Subscribe to newsletter
                    </p>

                    <form action="#" method="POST" class="mt-6">
                        <div>
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" placeholder="Enter your email"
                                class="block w-full p-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600" />
                        </div>

                        <button type="submit"
                            class="inline-flex items-center justify-center px-6 py-4 mt-3 font-semibold text-white transition-all duration-200 bg-blue-600 rounded-md hover:bg-blue-700 focus:bg-blue-700">Subscribe</button>
                    </form>
                </div>
            </div>

            <hr class="mt-16 mb-10 border-gray-200" />

            <p class="text-sm text-center text-gray-600">© Copyright 2021, All Rights Reserved by Postcraft</p>
        </div>
    </section>

    <!-- end footer -->
</x-app>
