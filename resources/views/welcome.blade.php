<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js', 'node_modules/flowbite/dist/flowbite.min.js'])
</head>

<body>
    <nav class="bg-white dark:bg-gray-900 fixed rounded-full mt-4 mb-4 inset-x-0 xl:mx-56 sm:mx-24 md:mx-36 mx-4 z-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ Vite::asset('resources/images/lp-main/al-aqsha-horizontal.png') }}" class="h-8 ml-4"
                    alt="Flowbite Logo">
                {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                --}}
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-white bg-red-primary hover:bg-hover-red-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-xs sm:text-sm sm:px-4 px-3 py-2 lg:px-2 text-center dark:bg-hover-red-primary dark:hover:bg-hover-red-primary dark:focus:ring-red-primary">Hubungi
                    Kami</button>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full lg:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Haji</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Umrah</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Badal</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Artikel</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="h-screen 2xl:h-4/5" style="background-image: url('{{ Vite::asset('resources/images/lp-main/section-hero.png') }}');">
        <div class="mx-auto max-w-screen-2xl">
            <div class="grid max-w-screen-xl px-4 md:mx-8 xl:px-0 py-40 lg:mx-20 lg:gap-8 xl:gap-0 lg:py-8 xl:py-0 lg:grid-cols-12 items-center justify-center">
            <div class="mr-auto place-self-center lg:col-span-7 xl:col-span-7 md:mt-12">
                <h1 class="max-w-2xl mb-8 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-5xl text-white">
                    Temukan keajaiban dunia melalui perjalanan Haji dan Umroh yang tak terlupakan.</h1>
                <p class="max-w-2xl mb-8 font-light text-gray-300 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Mulailah
                    merencanakan perjalanan spiritual Anda dengan kami. Klik tombol di bawah ini untuk informasi lebih lanjut untuk
                    pemesanan Haji & Umroh Bersama EL-Aqsho Group.</p>
                <button type="button"
                    class="text-white bg-red-primary hover:bg-hover-red-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-xs sm:text-sm sm:px-4 px-3 py-2 text-center dark:bg-hover-red-primary dark:hover:bg-hover-red-primary dark:focus:ring-red-primary">Hubungi
                    Kami</button>
            </div>
            <div class="hidden lg:flex ml-auto lg:col-span-2 w-full xl:col-span-2 xl:ml-8">
                <img src="{{ Vite::asset('resources/images/lp-main/hero-1.png') }}" class="h-full w-full object-cover"
                    alt="Gambar 1">
            </div>
            <div class="xl:ml-8 hidden lg:flex lg:col-span-3 lg:py-24 flex-wrap justify-end items-end gap-4 mt-8">
            <div class="flex justify-end items-end">
                <img src="{{ Vite::asset('resources/images/lp-main/hero-2.png') }}" class="w-full h-auto object-cover xl:w-4/5"
                    alt="Gambar 2">
            </div>
            <div class="flex justify-end items-end">
                <img src="{{ Vite::asset('resources/images/lp-main/hero-3.png') }}" class="w-full h-auto object-cover xl:w-4/5"
                    alt="Gambar 3">
            </div>
            </div>
            </div>
        </div>
    </section>
    <section class="mt-8">
        <div class="bg-white py-6 sm:py-8 md:mx-8 lg:py-12 lg:mx-20">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                <div class="flex justify-between items-center mb-8"> <!-- Menggunakan flex dengan justify-between -->
                    <h2 class="text-center sm:text-start text-4xl font-extrabold text-gray-800 md:text-3xl">Pilihan Paket Haji & Umroh
                    </h2>
                    <button type="button"
                        class="hidden sm:flex text-white bg-red-primary hover:bg-hover-red-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-xs sm:text-sm sm:px-4 px-3 py-4 text-center dark:bg-hover-red-primary dark:hover:bg-hover-red-primary dark:focus:ring-red-primary">
                        Selengkapnya
                    </button>
                </div>
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
                            <img src="https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?auto=format&q=75&fit=crop&crop=top&w=600&h=700"
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
                    <button type="button"
                    class="sm:hidden text-white bg-red-primary hover:bg-hover-red-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-xs sm:text-sm sm:px-4 px-3 py-4 text-center dark:bg-hover-red-primary dark:hover:bg-hover-red-primary dark:focus:ring-red-primary">Selengkapnya</button>
                    </div>
            </div>
        </div>
    </section>
    {{-- carousel --}}
    <section class="mt-8 h-screen sm:hidden">
        <div class="mx-auto max-w-screen-2xl md:mx-8 px-4 lg:mx-20 md:px-8">
            <div class="mb-8">
                <h2 class="text-center sm:text-start text-4xl font-extrabold text-gray-800 md:text-3xl">Artikel Terbaru</h2>
            </div>
            <div id="carousel-example" class="relative w-full h-screen" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative overflow-hidden rounded-lg md:h-96" style="height: 70vh">
                    <!-- Increased height here -->
                    <!-- Item 1 -->
                    <div id="carousel-item-1" class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-custom dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg"
                                    alt="" />
                            </a>
                            <div class="p-5">
                                <p
                                    class="mb-4 inline-flex items-center px-3 py-1 text-sm font-medium text-center text-white bg-yellow-primary rounded-full focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    Edukasi
                                </p>
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Panduan Lengkap Manasik Umroh</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Langkah-Langkah Penting Sebelum Berangkat ke Tanah Suci.</p>
                                <p class="mb-3 font-light text-gray-700 dark:text-gray-400">Tanggal: 01 Desember 2025</p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-primary rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Baca
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <!-- Added h-full and object-cover -->
                    </div>
                    <!-- Item 2 -->
                    <div id="carousel-item-2" class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-custom dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg"
                                    alt="" />
                            </a>
                            <div class="p-5">
                                <p
                                    class="mb-4 inline-flex items-center px-3 py-1 text-sm font-medium text-center text-white bg-yellow-primary rounded-full focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    Edukasi
                                </p>
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Panduan Lengkap Manasik Umroh</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Langkah-Langkah Penting Sebelum Berangkat ke Tanah Suci.</p>
                                <p class="mb-3 font-light text-gray-700 dark:text-gray-400">Tanggal: 01 Desember 2025</p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-primary rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Baca
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <!-- Added h-full and object-cover -->
                    </div>
                    <!-- Item 3 -->
                    <div id="carousel-item-3" class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-custom dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg"
                                    alt="" />
                            </a>
                            <div class="p-5">
                                <p
                                    class="mb-4 inline-flex items-center px-3 py-1 text-sm font-medium text-center text-white bg-yellow-primary rounded-full focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    Edukasi
                                </p>
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Panduan Lengkap Manasik Umroh</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Langkah-Langkah Penting Sebelum Berangkat ke Tanah Suci.</p>
                                <p class="mb-3 font-light text-gray-700 dark:text-gray-400">Tanggal: 01 Desember 2025</p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-primary rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Baca
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <!-- Added h-full and object-cover -->
                    </div>
                    <!-- Item 4 -->
                    <div id="carousel-item-4" class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-custom dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg"
                                    alt="" />
                            </a>
                            <div class="p-5">
                                <p
                                    class="mb-4 inline-flex items-center px-3 py-1 text-sm font-medium text-center text-white bg-yellow-primary rounded-full focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    Edukasi
                                </p>
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Panduan Lengkap Manasik Umroh</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Langkah-Langkah Penting Sebelum Berangkat ke Tanah Suci.</p>
                                <p class="mb-3 font-light text-gray-700 dark:text-gray-400">Tanggal: 01 Desember 2025</p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-primary rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Baca
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <!-- Added h-full and object-cover -->
                    </div>
                    <!-- Item 5 -->
                    <div id="carousel-item-5" class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-custom dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg"
                                    alt="" />
                            </a>
                            <div class="p-5">
                                <p
                                    class="mb-4 inline-flex items-center px-3 py-1 text-sm font-medium text-center text-white bg-yellow-primary rounded-full focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    Edukasi
                                </p>
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Panduan Lengkap Manasik Umroh</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Langkah-Langkah Penting Sebelum Berangkat ke Tanah Suci.</p>
                                <p class="mb-3 font-light text-gray-700 dark:text-gray-400">Tanggal: 01 Desember 2025</p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-primary rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Baca
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <!-- Added h-full and object-cover -->
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex mt-12 items-start justify-start h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex mt-12 items-start justify-start h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </section>


        <script>
            const carouselElement = document.getElementById('carousel-example');

            const items = [
                { position: 0, el: document.getElementById('carousel-item-1') },
                { position: 1, el: document.getElementById('carousel-item-2') },
                { position: 2, el: document.getElementById('carousel-item-3') },
                { position: 3, el: document.getElementById('carousel-item-4') },
                { position: 4, el: document.getElementById('carousel-item-5') },
            ];

            const options = {
                defaultPosition: 0,
                interval: 3000,
                indicators: true,
            };

            const carousel = new Carousel(carouselElement, items, options);

            // Event listeners for controls
            document.querySelector('[data-carousel-prev]').addEventListener('click', () => carousel.prev());
            document.querySelector('[data-carousel-next]').addEventListener('click', () => carousel.next());
        </script>


    </body>

</html>