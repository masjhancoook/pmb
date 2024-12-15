@if (session()->has('success'))
    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)"
        class ="fixed z-50 w-3/12 transform -translate-x-1/2 border border-green-200 shadow-lg bg-green-100/40 rounded-xl top-16 left-1/2"
        role="alert" tabindex="-1" aria-labelledby="hs-toast-normal-example-label">
        <div class="flex p-4">
            <div class="shrink-0">
                <svg class="shrink-0 size-4 text-teal-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16"
                    height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                    </path>
                </svg>
            </div>
            <div class="ms-3">
                <p id="hs-toast-normal-example-label" class="text-sm text-gray-700">
                    {{ session('success') }}
                </p>
            </div>
        </div>
    </div>
@endif
