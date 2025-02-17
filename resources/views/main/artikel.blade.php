<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js', 'node_modules/flowbite/dist/flowbite.min.js'])
</head>

<body>
    <nav
        class="bg-white dark:bg-gray-900 fixed rounded-full shadow-2xl mt-4 mb-4 inset-x-0 xl:mx-56 sm:mx-24 md:mx-36 mx-4 z-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-1 lg:p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ Vite::asset('resources/images/lp-main/al-aqsha-horizontal.png') }}" class="lg:h-8 h-6 ml-4"
                    alt="Flowbite Logo">
                {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                --}}
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a href="{{ route('register-form') }}"><button type="button"
                        class="text-white bg-red-primary hover:bg-hover-red-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-xs sm:text-sm sm:px-4  px-1 py-1 lg:px-2 text-center dark:bg-hover-red-primary dark:hover:bg-hover-red-primary dark:focus:ring-red-primary">Daftar
                        Sekarang</button></a>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex mr-2 items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-full lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full lg:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="{{ route('dashboard') }}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang
                            Kami</a>
                    </li>
                    <li>
                        <a href="{{ route('haji') }}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Haji</a>
                    </li>
                    <li>
                        <a href="{{ route('umroh') }}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Umrah</a>
                    </li>
                    <li>
                        <a href="{{ route('badal') }}"
                            class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Badal</a>
                    </li>
                    <li>
                        <a href="{{ route('artikel') }}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Artikel</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="h-screen pt-24 px-16 pb-4">
        <div class="h-full w-full flex flex-col">
            <h1 class="text-2xl font-extrabold">Artikel Terbaru</h1>
            <div class="mt-4  shadow-xl rounded-2xl flex-grow p-4">
                <div class="w-full h-full flex flex-col ">
                    <div class=" rounded-3xl flex-grow"
                        style="background-image: url('{{ Vite::asset('resources/images/lp-main/artikel/bg-1.png') }}">
                    </div>
                    <div class="my-2 mt-8 mx-14 flex justify-center">
                        <div class=" w-2/3 mr-2">
                            <p
                                class="mb-4 inline-flex items-center px-12 py-1 text-sm font-medium text-center text-white bg-yellow-primary rounded-full focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Edukasi</p>
                            <h2 class="text-2xl font-semibold mb-3 font-normal text-gray-700 dark:text-gray-400">Panduan
                                Lengkap Manasik Umroh: Langkah-Langkah Penting Sebelum Berangkat ke Tanah Suci.</h2>
                            <p class="mb-3 font-light text-gray-700 dark:text-gray-400">Tanggal: 01 Desember 2025</p>

                        </div>
                        <div class=" flex-grow ml-2 flex flex-col items-center justify-center  h-full">
                            <a href="">
                                <p
                                    class="mb-4 inline-flex items-center px-24 py-6 text-sm font-medium text-center text-black shadow-lg border  border-black rounded-3xl focus:ring-4 focus:outline-none focus:ring-blue-300 w-full">
                                    <img src="{{ Vite::asset('resources/images/lp-main/artikel/ic-1.png') }}"
                                        class="mr-2"></img> Simpan bookmark
                                </p>
                            </a>
                            <a href="">
                                <p
                                    class="mb-4 inline-flex items-center px-24 py-6 text-sm font-medium text-center text-white shadow-lg bg-blue-primary  rounded-3xl focus:ring-4 focus:outline-none focus:ring-blue-300 w-full">
                                    <img src="{{ Vite::asset('resources/images/lp-main/artikel/ic-2.png') }}"
                                        class="mr-2"></img>Bagikan ke media
                                </p>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class=" mx-16">
        <div class="mt-8 h-72 flex items-center shadow-xl rounded-2xl">
            <div class="h-full w-2/3 rounded-2xl" style="background-image: url('{{ Vite::asset('resources/images/lp-main/artikel/bg-2.png') }}');background-size: cover; backgound-position: center; background-repeat: no-repeat;">
            </div>
            <div class="py-14 flex-grow mx-10">
                <div class="flex justify-between w-full">
                    <h1 class="font-bold text-2xl text-gray-800">Edukasi</h1>
                    <h2 class="font-semibold text-md text-gray-800">Tanggal: 22 Desember 2024</h2>
                </div>
                <h1 class="mt-4 font-bold text-3xl text-black">Tips Memilih Paket Umroh yang Tepat: Jangan Sampai Salah Pilih!</h1>
                <div class="w-11/12 ml-4">
                    <p class="mt-4 text-gray-800 ">Memilih paket Umroh yang tepat adalah keputusan penting yang akan mempengaruhi kenyamanan dan kelancaran ibadah Anda. Berikut adalah beberapa tips yang dapat membantu Anda dalam memilih paket Umroh yang sesuai:</p>
                </div>
            </div>
        </div>
        <div class="mt-8 h-72 flex items-center shadow-xl rounded-2xl">
            <div class="h-full w-2/3 rounded-2xl" style="background-image: url('{{ Vite::asset('resources/images/lp-main/artikel/bg-2.png') }}');background-size: cover; backgound-position: center; background-repeat: no-repeat;">
            </div>
            <div class="py-14 flex-grow mx-10">
                <div class="flex justify-between w-full">
                    <h1 class="font-bold text-2xl text-gray-800">Edukasi</h1>
                    <h2 class="font-semibold text-md text-gray-800">Tanggal: 22 Desember 2024</h2>
                </div>
                <h1 class="mt-4 font-bold text-3xl text-black">Tips Memilih Paket Umroh yang Tepat: Jangan Sampai Salah Pilih!</h1>
                <div class="w-11/12 ml-4">
                    <p class="mt-4 text-gray-800 ">Memilih paket Umroh yang tepat adalah keputusan penting yang akan mempengaruhi kenyamanan dan kelancaran ibadah Anda. Berikut adalah beberapa tips yang dapat membantu Anda dalam memilih paket Umroh yang sesuai:</p>
                </div>
            </div>
        </div>
        <div class="mt-8 h-72 flex items-center shadow-xl rounded-2xl">
            <div class="h-full w-2/3 rounded-2xl" style="background-image: url('{{ Vite::asset('resources/images/lp-main/artikel/bg-2.png') }}');background-size: cover; backgound-position: center; background-repeat: no-repeat;">
            </div>
            <div class="py-14 flex-grow mx-10">
                <div class="flex justify-between w-full">
                    <h1 class="font-bold text-2xl text-gray-800">Edukasi</h1>
                    <h2 class="font-semibold text-md text-gray-800">Tanggal: 22 Desember 2024</h2>
                </div>
                <h1 class="mt-4 font-bold text-3xl text-black">Tips Memilih Paket Umroh yang Tepat: Jangan Sampai Salah Pilih!</h1>
                <div class="w-11/12 ml-4">
                    <p class="mt-4 text-gray-800 ">Memilih paket Umroh yang tepat adalah keputusan penting yang akan mempengaruhi kenyamanan dan kelancaran ibadah Anda. Berikut adalah beberapa tips yang dapat membantu Anda dalam memilih paket Umroh yang sesuai:</p>
                </div>
            </div>
        </div>
        <div class="mt-8 h-72 flex items-center shadow-xl rounded-2xl">
            <div class="h-full w-2/3 rounded-2xl" style="background-image: url('{{ Vite::asset('resources/images/lp-main/artikel/bg-2.png') }}');background-size: cover; backgound-position: center; background-repeat: no-repeat;">
            </div>
            <div class="py-14 flex-grow mx-10">
                <div class="flex justify-between w-full">
                    <h1 class="font-bold text-2xl text-gray-800">Edukasi</h1>
                    <h2 class="font-semibold text-md text-gray-800">Tanggal: 22 Desember 2024</h2>
                </div>
                <h1 class="mt-4 font-bold text-3xl text-black">Tips Memilih Paket Umroh yang Tepat: Jangan Sampai Salah Pilih!</h1>
                <div class="w-11/12 ml-4">
                    <p class="mt-4 text-gray-800 ">Memilih paket Umroh yang tepat adalah keputusan penting yang akan mempengaruhi kenyamanan dan kelancaran ibadah Anda. Berikut adalah beberapa tips yang dapat membantu Anda dalam memilih paket Umroh yang sesuai:</p>
                </div>
            </div>
        </div>
        <div class="mt-8 h-72 flex items-center shadow-xl rounded-2xl">
            <div class="h-full w-2/3 rounded-2xl" style="background-image: url('{{ Vite::asset('resources/images/lp-main/artikel/bg-2.png') }}');background-size: cover; backgound-position: center; background-repeat: no-repeat;">
            </div>
            <div class="py-14 flex-grow mx-10">
                <div class="flex justify-between w-full">
                    <h1 class="font-bold text-2xl text-gray-800">Edukasi</h1>
                    <h2 class="font-semibold text-md text-gray-800">Tanggal: 22 Desember 2024</h2>
                </div>
                <h1 class="mt-4 font-bold text-3xl text-black">Tips Memilih Paket Umroh yang Tepat: Jangan Sampai Salah Pilih!</h1>
                <div class="w-11/12 ml-4">
                    <p class="mt-4 text-gray-800 ">Memilih paket Umroh yang tepat adalah keputusan penting yang akan mempengaruhi kenyamanan dan kelancaran ibadah Anda. Berikut adalah beberapa tips yang dapat membantu Anda dalam memilih paket Umroh yang sesuai:</p>
                </div>
            </div>
        </div>
    </section>
</body>
