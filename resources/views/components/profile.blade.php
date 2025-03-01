<!-- component -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
</head>

<body>
    <div class="h-full p-8 bg-gray-200">
        <div class="pb-8 bg-white rounded-lg shadow-xl">
            <div x-data="{ openSettings: false }" class="absolute mt-4 rounded right-12">
                <button @click="openSettings = !openSettings"
                    class="p-2 text-gray-300 bg-gray-100 border border-gray-400 rounded hover:text-gray-300 bg-opacity-10 hover:bg-opacity-20"
                    title="Settings">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                        </path>
                    </svg>
                </button>
                <div x-show="openSettings" @click.away="openSettings = false"
                    class="absolute right-0 w-40 py-2 mt-1 bg-white border border-gray-200 shadow-2xl"
                    style="display: none;">
                    <div class="py-2 border-b">
                        <p class="px-6 mb-1 text-xs text-gray-400 uppercase">Settings</p>
                        <button class="w-full flex items-center px-6 py-1.5 space-x-2 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                </path>
                            </svg>
                            <span class="text-sm text-gray-700">Share Profile</span>
                        </button>
                        <button class="w-full flex items-center py-1.5 px-6 space-x-2 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636">
                                </path>
                            </svg>
                            <span class="text-sm text-gray-700">Block User</span>
                        </button>
                        <button class="w-full flex items-center py-1.5 px-6 space-x-2 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-sm text-gray-700">More Info</span>
                        </button>
                    </div>
                    <div class="py-2">
                        <p class="px-6 mb-1 text-xs text-gray-400 uppercase">Feedback</p>
                        <button class="w-full flex items-center py-1.5 px-6 space-x-2 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                </path>
                            </svg>
                            <span class="text-sm text-gray-700">Report</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full h-[250px]">
                <img src="https://vojislavd.com/ta-template-demo/assets/img/profile-background.jpg"
                    class="w-full h-full rounded-tl-lg rounded-tr-lg">
            </div>
            <div class="flex flex-col items-center -mt-20">
                <img src="https://vojislavd.com/ta-template-demo/assets/img/profile.jpg"
                    class="w-40 border-4 border-white rounded-full">
                <div class="flex items-center mt-2 space-x-2">
                    <p class="text-2xl">Amanda Ross</p>
                    <span class="p-1 bg-blue-500 rounded-full" title="Verified">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-100 h-2.5 w-2.5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                    </span>
                </div>
                <p class="text-gray-700">Senior Software Engineer at Tailwind CSS</p>
                <p class="text-sm text-gray-500">New York, USA</p>
            </div>
            <div class="flex flex-col items-center justify-end flex-1 px-8 mt-2 lg:items-end">
                <div class="flex items-center mt-2 space-x-4">
                    <button
                        class="flex items-center px-4 py-2 space-x-2 text-sm text-gray-100 transition duration-100 bg-blue-600 rounded hover:bg-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                            </path>
                        </svg>
                        <span>Connect</span>
                    </button>
                    <button
                        class="flex items-center px-4 py-2 space-x-2 text-sm text-gray-100 transition duration-100 bg-blue-600 rounded hover:bg-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Message</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="flex flex-col my-4 space-y-4 2xl:flex-row 2xl:space-y-0 2xl:space-x-4">
            <div class="flex flex-col w-full 2xl:w-1/3">
                <div class="flex-1 p-8 bg-white rounded-lg shadow-xl">
                    <h4 class="text-xl font-bold text-gray-900">Personal Info</h4>
                    <ul class="mt-2 text-gray-700">
                        <li class="flex py-2 border-y">
                            <span class="w-24 font-bold">Full name:</span>
                            <span class="text-gray-700">Amanda S. Ross</span>
                        </li>
                        <li class="flex py-2 border-b">
                            <span class="w-24 font-bold">Birthday:</span>
                            <span class="text-gray-700">24 Jul, 1991</span>
                        </li>
                        <li class="flex py-2 border-b">
                            <span class="w-24 font-bold">Joined:</span>
                            <span class="text-gray-700">10 Jan 2022 (25 days ago)</span>
                        </li>
                        <li class="flex py-2 border-b">
                            <span class="w-24 font-bold">Mobile:</span>
                            <span class="text-gray-700">(123) 123-1234</span>
                        </li>
                        <li class="flex py-2 border-b">
                            <span class="w-24 font-bold">Email:</span>
                            <span class="text-gray-700">amandaross@example.com</span>
                        </li>
                        <li class="flex py-2 border-b">
                            <span class="w-24 font-bold">Location:</span>
                            <span class="text-gray-700">New York, US</span>
                        </li>
                        <li class="flex py-2 border-b">
                            <span class="w-24 font-bold">Languages:</span>
                            <span class="text-gray-700">English, Spanish</span>
                        </li>
                        <li class="flex items-center py-2 space-x-2 border-b">
                            <span class="w-24 font-bold">Elsewhere:</span>
                            <a href="#" title="Facebook">
                                <svg class="w-5 h-5" id="Layer_1" data-name="Layer 1"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 506.86 506.86">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #1877f2;
                                            }

                                            .cls-2 {
                                                fill: #fff;
                                            }
                                        </style>
                                    </defs>
                                    <path class="cls-1"
                                        d="M506.86,253.43C506.86,113.46,393.39,0,253.43,0S0,113.46,0,253.43C0,379.92,92.68,484.77,213.83,503.78V326.69H149.48V253.43h64.35V197.6c0-63.52,37.84-98.6,95.72-98.6,27.73,0,56.73,5,56.73,5v62.36H334.33c-31.49,0-41.3,19.54-41.3,39.58v47.54h70.28l-11.23,73.26H293V503.78C414.18,484.77,506.86,379.92,506.86,253.43Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M352.08,326.69l11.23-73.26H293V205.89c0-20,9.81-39.58,41.3-39.58h31.95V104s-29-5-56.73-5c-57.88,0-95.72,35.08-95.72,98.6v55.83H149.48v73.26h64.35V503.78a256.11,256.11,0,0,0,79.2,0V326.69Z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#" title="Twitter">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 333333 333333"
                                    shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                                    image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd">
                                    <path
                                        d="M166667 0c92048 0 166667 74619 166667 166667s-74619 166667-166667 166667S0 258715 0 166667 74619 0 166667 0zm90493 110539c-6654 2976-13822 4953-21307 5835 7669-4593 13533-11870 16333-20535-7168 4239-15133 7348-23574 9011-6787-7211-16426-11694-27105-11694-20504 0-37104 16610-37104 37101 0 2893 320 5722 949 8450-30852-1564-58204-16333-76513-38806-3285 5666-5022 12109-5022 18661v4c0 12866 6532 24246 16500 30882-6083-180-11804-1876-16828-4626v464c0 17993 12789 33007 29783 36400-3113 845-6400 1313-9786 1313-2398 0-4709-247-7007-665 4746 14736 18448 25478 34673 25791-12722 9967-28700 15902-46120 15902-3006 0-5935-184-8860-534 16466 10565 35972 16684 56928 16684 68271 0 105636-56577 105636-105632 0-1630-36-3209-104-4806 7251-5187 13538-11733 18514-19185l17-17-3 2z"
                                        fill="#1da1f2"></path>
                                </svg>
                            </a>
                            <a href="#" title="LinkedIn">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 333333 333333"
                                    shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                                    image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd">
                                    <path
                                        d="M166667 0c92048 0 166667 74619 166667 166667s-74619 166667-166667 166667S0 258715 0 166667 74619 0 166667 0zm-18220 138885h28897v14814l418 1c4024-7220 13865-14814 28538-14814 30514-1 36157 18989 36157 43691v50320l-30136 1v-44607c0-10634-221-24322-15670-24322-15691 0-18096 11575-18096 23548v45382h-30109v-94013zm-20892-26114c0 8650-7020 15670-15670 15670s-15672-7020-15672-15670 7022-15670 15672-15670 15670 7020 15670 15670zm-31342 26114h31342v94013H96213v-94013z"
                                        fill="#0077b5"></path>
                                </svg>
                            </a>
                            <a href="#" title="Github">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="0"
                                    height="0" shape-rendering="geometricPrecision"
                                    text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                    fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 640 640">
                                    <path
                                        d="M319.988 7.973C143.293 7.973 0 151.242 0 327.96c0 141.392 91.678 261.298 218.826 303.63 16.004 2.964 21.886-6.957 21.886-15.414 0-7.63-.319-32.835-.449-59.552-89.032 19.359-107.8-37.772-107.8-37.772-14.552-36.993-35.529-46.831-35.529-46.831-29.032-19.879 2.209-19.442 2.209-19.442 32.126 2.245 49.04 32.954 49.04 32.954 28.56 48.922 74.883 34.76 93.131 26.598 2.882-20.681 11.15-34.807 20.315-42.803-71.08-8.067-145.797-35.516-145.797-158.14 0-34.926 12.52-63.485 32.965-85.88-3.33-8.078-14.291-40.606 3.083-84.674 0 0 26.87-8.61 88.029 32.8 25.512-7.075 52.878-10.642 80.056-10.76 27.2.118 54.614 3.673 80.162 10.76 61.076-41.386 87.922-32.8 87.922-32.8 17.398 44.08 6.485 76.631 3.154 84.675 20.516 22.394 32.93 50.953 32.93 85.879 0 122.907-74.883 149.93-146.117 157.856 11.481 9.921 21.733 29.398 21.733 59.233 0 42.792-.366 77.28-.366 87.804 0 8.516 5.764 18.473 21.992 15.354 127.076-42.354 218.637-162.274 218.637-303.582 0-176.695-143.269-319.988-320-319.988l-.023.107z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1 p-8 mt-4 bg-white rounded-lg shadow-xl">
                    <h4 class="text-xl font-bold text-gray-900">Activity log</h4>
                    <div class="relative px-4">
                        <div class="absolute h-full border border-dashed border-opacity-20 border-secondary"></div>

                        <!-- start::Timeline item -->
                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="z-10 w-1/12">
                                <div class="w-3.5 h-3.5 bg-blue-600 rounded-full"></div>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">Profile informations changed.</p>
                                <p class="text-xs text-gray-500">3 min ago</p>
                            </div>
                        </div>
                        <!-- end::Timeline item -->

                        <!-- start::Timeline item -->
                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="z-10 w-1/12">
                                <div class="w-3.5 h-3.5 bg-blue-600 rounded-full"></div>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">
                                    Connected with <a href="#" class="font-bold text-blue-600">Colby
                                        Covington</a>.</p>
                                <p class="text-xs text-gray-500">15 min ago</p>
                            </div>
                        </div>
                        <!-- end::Timeline item -->

                        <!-- start::Timeline item -->
                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="z-10 w-1/12">
                                <div class="w-3.5 h-3.5 bg-blue-600 rounded-full"></div>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">Invoice <a href="#"
                                        class="font-bold text-blue-600">#4563</a> was created.</p>
                                <p class="text-xs text-gray-500">57 min ago</p>
                            </div>
                        </div>
                        <!-- end::Timeline item -->

                        <!-- start::Timeline item -->
                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="z-10 w-1/12">
                                <div class="w-3.5 h-3.5 bg-blue-600 rounded-full"></div>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">
                                    Message received from <a href="#" class="font-bold text-blue-600">Cecilia
                                        Hendric</a>.</p>
                                <p class="text-xs text-gray-500">1 hour ago</p>
                            </div>
                        </div>
                        <!-- end::Timeline item -->

                        <!-- start::Timeline item -->
                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="z-10 w-1/12">
                                <div class="w-3.5 h-3.5 bg-blue-600 rounded-full"></div>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">New order received <a href="#"
                                        class="font-bold text-blue-600">#OR9653</a>.</p>
                                <p class="text-xs text-gray-500">2 hours ago</p>
                            </div>
                        </div>
                        <!-- end::Timeline item -->

                        <!-- start::Timeline item -->
                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="z-10 w-1/12">
                                <div class="w-3.5 h-3.5 bg-blue-600 rounded-full"></div>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">
                                    Message received from <a href="#" class="font-bold text-blue-600">Jane
                                        Stillman</a>.</p>
                                <p class="text-xs text-gray-500">2 hours ago</p>
                            </div>
                        </div>
                        <!-- end::Timeline item -->
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-full 2xl:w-2/3">
                <div class="flex-1 p-8 bg-white rounded-lg shadow-xl">
                    <h4 class="text-xl font-bold text-gray-900">About</h4>
                    <p class="mt-2 text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
                        voluptates obcaecati numquam error et ut fugiat asperiores. Sunt nulla ad incidunt laboriosam,
                        laudantium est unde natus cum numquam, neque facere. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Ut, magni odio magnam commodi sunt ipsum eum! Voluptas eveniet aperiam at
                        maxime, iste id dicta autem odio laudantium eligendi commodi distinctio!</p>
                </div>
                <div class="flex-1 p-8 mt-4 bg-white rounded-lg shadow-xl">
                    <h4 class="text-xl font-bold text-gray-900">Statistics</h4>

                    <div class="grid grid-cols-1 gap-8 mt-4 lg:grid-cols-3">
                        <div class="px-6 py-6 bg-gray-100 border border-gray-300 rounded-lg shadow-xl">
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-bold text-indigo-600">Total Revenue</span>
                                <span
                                    class="px-2 py-1 text-xs text-gray-500 transition duration-200 bg-gray-200 rounded-lg cursor-default hover:bg-gray-500 hover:text-gray-200">7
                                    days</span>
                            </div>
                            <div class="flex items-center justify-between mt-6">
                                <div>
                                    <svg class="w-12 h-12 p-2.5 bg-indigo-400 bg-opacity-20 rounded-full text-indigo-600 border border-indigo-600"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex items-end">
                                        <span class="text-2xl font-bold 2xl:text-3xl">$8,141</span>
                                        <div class="flex items-center mb-1 ml-2">
                                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                            </svg>
                                            <span class="font-bold text-sm text-gray-500 ml-0.5">3%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-6 bg-gray-100 border border-gray-300 rounded-lg shadow-xl">
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-bold text-green-600">New Orders</span>
                                <span
                                    class="px-2 py-1 text-xs text-gray-500 transition duration-200 bg-gray-200 rounded-lg cursor-default hover:bg-gray-500 hover:text-gray-200">7
                                    days</span>
                            </div>
                            <div class="flex items-center justify-between mt-6">
                                <div>
                                    <svg class="w-12 h-12 p-2.5 bg-green-400 bg-opacity-20 rounded-full text-green-600 border border-green-600"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                    </svg>
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex items-end">
                                        <span class="text-2xl font-bold 2xl:text-3xl">217</span>
                                        <div class="flex items-center mb-1 ml-2">
                                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                            </svg>
                                            <span class="font-bold text-sm text-gray-500 ml-0.5">5%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-6 bg-gray-100 border border-gray-300 rounded-lg shadow-xl">
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-bold text-blue-600">Tidak Lulus</span>
                                <span
                                    class="px-2 py-1 text-xs text-gray-500 transition duration-200 bg-gray-200 rounded-lg cursor-default hover:bg-gray-500 hover:text-gray-200">7
                                    days</span>
                            </div>
                            <div class="flex items-center justify-between mt-6">
                                <div>
                                    <svg class="w-12 h-12 p-2.5 bg-blue-400 bg-opacity-20 rounded-full text-blue-600 border border-blue-600"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex items-end">
                                        <span class="text-2xl font-bold 2xl:text-3xl">54</span>
                                        <div class="flex items-center mb-1 ml-2">
                                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                            </svg>
                                            <span class="font-bold text-sm text-gray-500 ml-0.5">7%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <canvas id="verticalBarChart"
                            style="display: block; box-sizing: border-box; height: 414px; width: 828px;"
                            width="1656" height="828"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-8 bg-white rounded-lg shadow-xl">
            <div class="flex items-center justify-between">
                <h4 class="text-xl font-bold text-gray-900">Connections (532)</h4>
                <a href="#" title="View All">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-500 hover:text-gray-700"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z">
                        </path>
                    </svg>
                </a>
            </div>
            <div
                class="grid grid-cols-2 gap-8 mt-8 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 2xl:grid-cols-8">
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600"
                    title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection1.jpg"
                        class="w-16 rounded-full">
                    <p class="mt-1 text-sm font-bold text-center">Diane Aguilar</p>
                    <p class="text-xs text-center text-gray-500">UI/UX Design at Upwork</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600"
                    title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection2.jpg"
                        class="w-16 rounded-full">
                    <p class="mt-1 text-sm font-bold text-center">Frances Mather</p>
                    <p class="text-xs text-center text-gray-500">Software Engineer at Facebook</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600"
                    title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection3.jpg"
                        class="w-16 rounded-full">
                    <p class="mt-1 text-sm font-bold text-center">Carlos Friedrich</p>
                    <p class="text-xs text-center text-gray-500">Front-End Developer at Tailwind CSS</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600"
                    title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection4.jpg"
                        class="w-16 rounded-full">
                    <p class="mt-1 text-sm font-bold text-center">Donna Serrano</p>
                    <p class="text-xs text-center text-gray-500">System Engineer at Tesla</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600"
                    title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection5.jpg"
                        class="w-16 rounded-full">
                    <p class="mt-1 text-sm font-bold text-center">Randall Tabron</p>
                    <p class="text-xs text-center text-gray-500">Software Developer at Upwork</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600"
                    title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection6.jpg"
                        class="w-16 rounded-full">
                    <p class="mt-1 text-sm font-bold text-center">John McCleary</p>
                    <p class="text-xs text-center text-gray-500">Software Engineer at Laravel</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600"
                    title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection7.jpg"
                        class="w-16 rounded-full">
                    <p class="mt-1 text-sm font-bold text-center">Amanda Noble</p>
                    <p class="text-xs text-center text-gray-500">Graphic Designer at Tailwind CSS</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600"
                    title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection8.jpg"
                        class="w-16 rounded-full">
                    <p class="mt-1 text-sm font-bold text-center">Christine Drew</p>
                    <p class="text-xs text-center text-gray-500">Senior Android Developer at Google</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600"
                    title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection9.jpg"
                        class="w-16 rounded-full">
                    <p class="mt-1 text-sm font-bold text-center">Lucas Bell</p>
                    <p class="text-xs text-center text-gray-500">Creative Writer at Upwork</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600"
                    title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection10.jpg"
                        class="w-16 rounded-full">
                    <p class="mt-1 text-sm font-bold text-center">Debra Herring</p>
                    <p class="text-xs text-center text-gray-500">Co-Founder at Alpine.js</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600"
                    title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection11.jpg"
                        class="w-16 rounded-full">
                    <p class="mt-1 text-sm font-bold text-center">Benjamin Farrior</p>
                    <p class="text-xs text-center text-gray-500">Software Engineer Lead at Microsoft</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600"
                    title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection12.jpg"
                        class="w-16 rounded-full">
                    <p class="mt-1 text-sm font-bold text-center">Maria Heal</p>
                    <p class="text-xs text-center text-gray-500">Linux System Administrator at Twitter</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600"
                    title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection13.jpg"
                        class="w-16 rounded-full">
                    <p class="mt-1 text-sm font-bold text-center">Edward Ice</p>
                    <p class="text-xs text-center text-gray-500">Customer Support at Instagram</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600"
                    title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection14.jpg"
                        class="w-16 rounded-full">
                    <p class="mt-1 text-sm font-bold text-center">Jeffery Silver</p>
                    <p class="text-xs text-center text-gray-500">Software Engineer at Twitter</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600"
                    title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection15.jpg"
                        class="w-16 rounded-full">
                    <p class="mt-1 text-sm font-bold text-center">Jennifer Schultz</p>
                    <p class="text-xs text-center text-gray-500">Project Manager at Google</p>
                </a>
                <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-600"
                    title="View Profile">
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection16.jpg"
                        class="w-16 rounded-full">
                    <p class="mt-1 text-sm font-bold text-center">Joseph Marlatt</p>
                    <p class="text-xs text-center text-gray-500">Team Lead at Facebook</p>
                </a>
            </div>
        </div>
    </div>


    <!-- component -->
    <style>
        :root {
            --main-color: #4a76a8;
        }

        .bg-main-color {
            background-color: var(--main-color);
        }

        .text-main-color {
            color: var(--main-color);
        }

        .border-main-color {
            border-color: var(--main-color);
        }
    </style>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>



    <div class="bg-gray-100">
        <div class="w-full text-white bg-main-color">
            <div x-data="{ open: false }"
                class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="flex flex-row items-center justify-between p-4">
                    <a href="#"
                        class="text-lg font-semibold tracking-widest uppercase rounded-lg focus:outline-none focus:shadow-outline">example
                        profile</a>
                    <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline"
                        @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <nav :class="{ 'flex': open, 'hidden': !open }"
                    class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open"
                            class="flex flex-row items-center w-full px-4 py-2 mt-2 space-x-2 text-sm font-semibold text-left bg-transparent md:w-auto md:inline md:mt-0 md:ml-4 hover:bg-gray-200 focus:bg-blue-800 focus:outline-none focus:shadow-outline">
                            <span>Jane Doe</span>
                            <img class="inline h-6 rounded-full"
                                src="https://avatars2.githubusercontent.com/u/24622175?s=60&amp;v=4">
                            <svg fill="currentColor" viewBox="0 0 20 20"
                                :class="{ 'rotate-180': open, 'rotate-0': !open }"
                                class="inline w-4 h-4 transition-transform duration-200 transform">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                            <div
                                class="py-2 text-sm text-blue-800 bg-white border rounded-sm shadow-sm border-main-color">
                                <a class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="#">Settings</a>
                                <a class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="#">Help</a>
                                <div class="border-b"></div>
                                <a class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="#">Logout</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- End of Navbar -->

        <div class="container p-5 mx-auto my-5">
            <div class="md:flex no-wrap md:-mx-2 ">
                <!-- Left Side -->
                <div class="w-full md:w-3/12 md:mx-2">
                    <!-- Profile Card -->
                    <div class="p-3 bg-white border-t-4 border-green-400">
                        <div class="overflow-hidden image">
                            <img class="w-full h-auto mx-auto"
                                src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg"
                                alt="">
                        </div>
                        <h1 class="my-1 text-xl font-bold leading-8 text-gray-900">Jane Doe</h1>
                        <h3 class="leading-6 text-gray-600 font-lg text-semibold">Owner at Her Company Inc.</h3>
                        <p class="text-sm leading-6 text-gray-500 hover:text-gray-600">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit.
                            Reprehenderit, eligendi dolorum sequi illum qui unde aspernatur non deserunt</p>
                        <ul
                            class="px-3 py-2 mt-3 text-gray-600 bg-gray-100 divide-y rounded shadow-sm hover:text-gray-700 hover:shadow">
                            <li class="flex items-center py-3">
                                <span>Status</span>
                                <span class="ml-auto"><span
                                        class="px-2 py-1 text-sm text-white bg-green-500 rounded">Active</span></span>
                            </li>
                            <li class="flex items-center py-3">
                                <span>Member since</span>
                                <span class="ml-auto">Nov 07, 2016</span>
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
                            <span>Similar Profiles</span>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="my-2 text-center">
                                <img class="w-16 h-16 mx-auto rounded-full"
                                    src="https://cdn.australianageingagenda.com.au/wp-content/uploads/2015/06/28085920/Phil-Beckett-2-e1435107243361.jpg"
                                    alt="">
                                <a href="#" class="text-main-color">Kojstantin</a>
                            </div>
                            <div class="my-2 text-center">
                                <img class="w-16 h-16 mx-auto rounded-full"
                                    src="https://avatars2.githubusercontent.com/u/24622175?s=60&amp;v=4"
                                    alt="">
                                <a href="#" class="text-main-color">James</a>
                            </div>
                            <div class="my-2 text-center">
                                <img class="w-16 h-16 mx-auto rounded-full"
                                    src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg"
                                    alt="">
                                <a href="#" class="text-main-color">Natie</a>
                            </div>
                            <div class="my-2 text-center">
                                <img class="w-16 h-16 mx-auto rounded-full"
                                    src="https://bucketeer-e05bbc84-baa3-437e-9518-adb32be77984.s3.amazonaws.com/public/images/f04b52da-12f2-449f-b90c-5e4d5e2b1469_361x361.png"
                                    alt="">
                                <a href="#" class="text-main-color">Casey</a>
                            </div>
                        </div>
                    </div>
                    <!-- End of friends card -->
                </div>
                <!-- Right Side -->
                <div class="w-full h-64 mx-2 md:w-9/12">
                    <!-- Profile tab -->
                    <!-- About Section -->
                    <div class="p-3 bg-white rounded-sm shadow-sm">
                        <div class="flex items-center space-x-2 font-semibold leading-8 text-gray-900">
                            <span clas="text-green-500">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </span>
                            <span class="tracking-wide">About</span>
                        </div>
                        <div class="text-gray-700">
                            <div class="grid text-sm md:grid-cols-2">
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">First Name</div>
                                    <div class="px-4 py-2">Jane</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Last Name</div>
                                    <div class="px-4 py-2">Doe</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Gender</div>
                                    <div class="px-4 py-2">Female</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Contact No.</div>
                                    <div class="px-4 py-2">+11 998001001</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Current Address</div>
                                    <div class="px-4 py-2">Beech Creek, PA, Pennsylvania</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Permanant Address</div>
                                    <div class="px-4 py-2">Arlington Heights, IL, Illinois</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Email.</div>
                                    <div class="px-4 py-2">
                                        <a class="text-blue-800" href="mailto:jane@example.com">jane@example.com</a>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Birthday</div>
                                    <div class="px-4 py-2">Feb 06, 1998</div>
                                </div>
                            </div>
                        </div>
                        <button
                            class="block w-full p-3 my-4 text-sm font-semibold text-blue-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs">Show
                            Full Information</button>
                    </div>
                    <!-- End of about section -->

                    <div class="my-4"></div>

                    <!-- Experience and education -->
                    <div class="p-3 bg-white rounded-sm shadow-sm">

                        <div class="grid grid-cols-2">
                            <div>
                                <div class="flex items-center mb-3 space-x-2 font-semibold leading-8 text-gray-900">
                                    <span clas="text-green-500">
                                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </span>
                                    <span class="tracking-wide">Experience</span>
                                </div>
                                <ul class="space-y-2 list-inside">
                                    <li>
                                        <div class="text-teal-600">Owner at Her Company Inc.</div>
                                        <div class="text-xs text-gray-500">March 2020 - Now</div>
                                    </li>
                                    <li>
                                        <div class="text-teal-600">Owner at Her Company Inc.</div>
                                        <div class="text-xs text-gray-500">March 2020 - Now</div>
                                    </li>
                                    <li>
                                        <div class="text-teal-600">Owner at Her Company Inc.</div>
                                        <div class="text-xs text-gray-500">March 2020 - Now</div>
                                    </li>
                                    <li>
                                        <div class="text-teal-600">Owner at Her Company Inc.</div>
                                        <div class="text-xs text-gray-500">March 2020 - Now</div>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <div class="flex items-center mb-3 space-x-2 font-semibold leading-8 text-gray-900">
                                    <span clas="text-green-500">
                                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                            <path fill="#fff"
                                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                        </svg>
                                    </span>
                                    <span class="tracking-wide">Education</span>
                                </div>
                                <ul class="space-y-2 list-inside">
                                    <li>
                                        <div class="text-teal-600">Masters Degree in Oxford</div>
                                        <div class="text-xs text-gray-500">March 2020 - Now</div>
                                    </li>
                                    <li>
                                        <div class="text-teal-600">Bachelors Degreen in LPU</div>
                                        <div class="text-xs text-gray-500">March 2020 - Now</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End of Experience and education grid -->
                    </div>
                    <!-- End of profile tab -->
                </div>
            </div>
        </div>
    </div>

    <script>
        const DATA_SET_VERTICAL_BAR_CHART_1 = [68.106, 26.762, 94.255, 72.021, 74.082, 64.923, 85.565, 32.432, 54.664,
            87.654, 43.013, 91.443
        ];

        const labels_vertical_bar_chart = ['January', 'February', 'Mart', 'April', 'May', 'Jun', 'July', 'August',
            'September', 'October', 'November', 'December'
        ];

        const dataVerticalBarChart = {
            labels: labels_vertical_bar_chart,
            datasets: [{
                label: 'Revenue',
                data: DATA_SET_VERTICAL_BAR_CHART_1,
                borderColor: 'rgb(54, 162, 235)',
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
            }]
        };
        const configVerticalBarChart = {
            type: 'bar',
            data: dataVerticalBarChart,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Last 12 Months'
                    }
                }
            },
        };

        var verticalBarChart = new Chart(
            document.getElementById('verticalBarChart'),
            configVerticalBarChart
        );
    </script>
</body>

</html>
