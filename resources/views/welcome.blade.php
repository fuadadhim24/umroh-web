<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav class="bg-white dark:bg-gray-900 fixed rounded-full mt-4 mb-4 inset-x-0 xl:mx-56 sm:mx-24 md:mx-36 mx-4">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ Vite::asset('resources/images/lp-main/al-aqsha-horizontal.png') }}" class="h-8 ml-4"
                    alt="Flowbite Logo">
                {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                --}}
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-white bg-red-primary hover:bg-hover-red-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-xs sm:text-sm sm:px-4 px-3 py-2 text-center dark:bg-hover-red-primary dark:hover:bg-hover-red-primary dark:focus:ring-red-primary">Hubungi
                    Kami</button>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
            </div>
            </nav>
    <section class=" dark:bg-gray-900 bg-cover bg-center h-screen"
        style="background-image: url('{{ Vite::asset('resources/images/lp-main/section-hero.png') }}');">
        <div
            class="grid max-w-screen-xl px-4 md:px-16 xl:px-0 py-40 mx-auto lg:gap-8 xl:gap-0 lg:py-24 xl:py-8 lg:grid-cols-12 items-center justify-center">

            <div class="mr-auto place-self-center lg:col-span-7 xl:col-span-7 md:mt-12">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-white">
                    Temukan keajaiban dunia melalui perjalanan Haji dan Umroh yang tak terlupakan.</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-300 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Mulailah merencanakan perjalanan spiritual Anda dengan kami. Klik tombol di bawah ini untuk informasi
                    lebih lanjut untuk pemesanan Haji & Umroh Bersama EL-Aqsho Group.</p>
                <button type="button"
                    class="text-white bg-red-primary hover:bg-hover-red-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-xs sm:text-sm sm:px-4 px-3 py-2 text-center dark:bg-hover-red-primary dark:hover:bg-hover-red-primary dark:focus:ring-red-primary">Hubungi
                    Kami</button>
            </div>
            <div class="hidden lg:block lg:col-span-2 w-full xl:col-span-2 xl:ml-8">
                <img src="{{ Vite::asset('resources/images/lp-main/hero-1.png') }}" class="h-full w-full object-cover"
                    alt="Gambar 1">
            </div>
            <!-- Gambar 2 & 3 pada layar besar -->
            <div class="xl:ml-8 hidden lg:flex lg:col-span-2 lg:py-24 xl:col-span-3 flex-wrap justify-between gap-4 mt-8">
                <div class="flex justify-center items-center">
                    <img src="{{ Vite::asset('resources/images/lp-main/hero-2.png') }}" class="w-full h-auto object-cover xl:w-4/5"
                        alt="Gambar 2">
                </div>
                <div class="flex justify-center items-center">
                    <img src="{{ Vite::asset('resources/images/lp-main/hero-3.png') }}" class="w-full h-auto object-cover xl:w-4/5"
                        alt="Gambar 3">
                </div>
                </div>
        </div>
    </section>
    <section class="mt-12">
        <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                <h2 class="mb-8 text-start text-4xl font-extrabold text-gray-800 md:mb-12 lg:text-3xl">Pilihan Paket Haji & Umroh</h2>
    
                <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:grid-cols-4">
                    <!-- product - start -->
                    <div>
                        <a href="#"
                            class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                            <img src="https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?auto=format&q=75&fit=crop&crop=top&w=600&h=700"
                                loading="lazy" alt="Photo by Austin Wade"
                                class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
    
                            <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                                <span class="text-gray-500">Rp. 35.9 Jt</span>
                                <span class="text-lg font-bold text-gray-800 lg:text-xl">Umroh Full Ramadhan</span>
                            </div>
                        </a>
                    </div>
                    <!-- product - end -->
    
                    <!-- product - start -->
                    <div>
                        <a href="#"
                            class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                            <img src="https://images.unsplash.com/photo-1603344797033-f0f4f587ab60?auto=format&q=75&fit=crop&crop=top&w=600&h=700"
                                loading="lazy" alt="Photo by engin akyurt"
                                class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
    
                            <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                                <span class="text-gray-500">Rp. 35.9 Jt</span>
                                <span class="text-lg font-bold text-gray-800 lg:text-xl">Haji Furodha</span>
                            </div>
                        </a>
                    </div>
                    <!-- product - end -->
    
                    <!-- product - start -->
                    <div>
                        <a href="#"
                            class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                            <img src="https://images.unsplash.com/photo-1552668693-d0738e00eca8?auto=format&q=75&fit=crop&crop=top&w=600&h=700"
                                loading="lazy" alt="Photo by Austin Wade"
                                class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
    
                            <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                                <span class="text-gray-500">Rp. 35.9 Jt</span>
                                <span class="text-lg font-bold text-gray-800 lg:text-xl">Haji Furodha</span>
                            </div>
                        </a>
                    </div>
                    <!-- product - end -->
                    
                    <!-- product - start -->
                    <div>
                        <a href="#"
                            class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                            <img src="https://images.unsplash.com/photo-1560269999-cef6ebd23ad3?auto=format&q=75&fit=crop&w=600&h=700"
                                loading="lazy" alt="Photo by Austin Wade"
                                class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
    
                            <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                                <span class="text-gray-500">Rp. 35.9 Jt</span>
                                <span class="text-lg font-bold text-gray-800 lg:text-xl">Haji Furodha</span>
                            </div>
                        </a>
                    </div>
                    <!-- product - end -->
                    <button type="button"
                    class="text-white bg-red-primary hover:bg-hover-red-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-xs sm:text-sm sm:px-4 px-3 py-4 text-center dark:bg-hover-red-primary dark:hover:bg-hover-red-primary dark:focus:ring-red-primary">Selengkapnya</button>
                    </div>
            </div>
        </div>
    </section>



    </body>

</html>