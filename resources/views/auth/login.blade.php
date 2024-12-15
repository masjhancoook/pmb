<x-app>
    <x-success-massage></x-success-massage>
    <x-error-massage></x-error-massage>
    <section class="relative h-screen py-10 bg-white sm:py-16 lg:py-24 ">
        <div class="relative max-w-lg px-4 mx-auto sm:px-0">
            <div class="overflow-hidden rounded-md shadow-md bg-white/75">
                <div class="px-4 py-6 sm:px-8 sm:py-7">
                    <div class="text-start">
                        <h2 class="text-lg font-medium text-gray-800">Login</h2>
                        <p class="mt-2 text-sm text-gray-600">Log in to your account</p>
                    </div>

                    <form action="{{ route('login') }}" method="POST" class="mt-8">
                        @csrf
                        <div class="space-y-5">
                            <x-text-input label="Email address" name="email" type="email"
                                placeholder="Enter your email" required="*"></x-text-input>
                            @error('email')
                                <span class="text-xs text-red-500 font-poppins">{{ $message }}</span>
                            @enderror
                            <x-text-input label="Password" name="password" type="password"
                                placeholder="Enter your password" required="*"></x-text-input>
                            @error('password')
                                <span class="text-xs text-red-500 font-poppins">{{ $message }}</span>
                            @enderror
                            <div class="py-4">
                                <button type="submit"
                                    class="inline-flex items-center justify-center w-full px-4 text-base font-semibold text-white transition-all duration-200 border border-transparent rounded-md bg-blue-500/75 h-11 focus:outline-none hover:bg-blue-400 focus:bg-blue-700">Log
                                    in</button>
                            </div>

                            <div class="text-center ">
                                <h1 class="text-sm text-gray-600">Don’t have an account? <a
                                        href="{{ route('register') }}" title=""
                                        class="text-sm text-blue-400 transition-all duration-200 hover:underline hover:text-blue-500">Create
                                        account</a>
                                </h1>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app>
