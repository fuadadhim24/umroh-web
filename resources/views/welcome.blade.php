<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('resources/images/lp-main/al-aqsha.png') }}" type="image/icon type">
</head>

<body>
    <nav
        class="bg-white shadow-2xl dark:bg-gray-900 fixed rounded-full mt-4 mb-4 inset-x-0 xl:mx-56 sm:mx-24 md:mx-36 mx-4 z-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-1 lg:p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('resources/images/lp-main/al-aqsha-horizontal.png') }}" class="lg:h-8 h-6 ml-4"
                    alt="El-Aqsho Logo">
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
                            class="block py-2 px-3 text-white bg-red-primary rounded-sm md:bg-transparent md:text-red-primary md:p-0 md:dark:text-red-primary"
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-primary md:p-0 md:dark:hover:text-red-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang
                            Kami</a>
                    </li>
                    <li>
                        <a href="{{ route('haji') }}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-primary md:p-0 md:dark:hover:text-red-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Haji</a>
                    </li>
                    <li>
                        <a href="{{ route('umroh') }}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-primary md:p-0 md:dark:hover:text-red-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Umrah</a>
                    </li>
                    <li>
                        <a href="{{ route('badal') }}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-primary md:p-0 md:dark:hover:text-red-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Badal</a>
                    </li>
                    <li>
                        <a href="{{route('artikel') }}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-primary md:p-0 md:dark:hover:text-red-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Artikel</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="h-screen 2xl:h-4/5 flex justify-center"
        style="background-image: url('{{ asset('resources/images/lp-main/section-hero.png') }}');">
        <div class="mx-auto max-w-screen-2xl md:mx-4">
            <div
                class="grid max-w-screen-xl px-4 md:mx-8 xl:px-0 py-40 lg:mx-20 lg:gap-8 xl:gap-0 lg:py-8 xl:py-0 lg:grid-cols-12 items-center justify-center">
                <div class="mr-auto place-self-center lg:col-span-7 xl:col-span-7 md:mt-12">
                    <h1 class="max-w-2xl mb-8 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-5xl text-white">
                        Temukan keajaiban dunia melalui perjalanan Haji dan Umroh yang tak terlupakan.</h1>
                    <p class="max-w-2xl mb-8 font-light text-gray-300 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                        Mulailah
                        merencanakan perjalanan spiritual Anda dengan kami. Klik tombol di bawah ini untuk informasi
                        lebih lanjut untuk
                        pemesanan Haji & Umroh Bersama EL-Aqsho Group.</p>
                    <a href="http://wa.me/6282141297588" target="_blank" rel="noopener noreferrer"><button type="button"
                            class="text-white bg-red-primary hover:bg-hover-red-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-xs sm:text-sm sm:px-4 px-3 py-2 text-center dark:bg-hover-red-primary dark:hover:bg-hover-red-primary dark:focus:ring-red-primary">Hubungi
                            Kami
                            </button></a>
                            </div>
                            <div class="hidden lg:flex ml-auto lg:col-span-2 w-full xl:col-span-2 xl:ml-8">
                    <img src="{{ asset('resources/images/lp-main/hero-1.png') }}" class="h-full w-full object-cover" alt="Gambar 1">
                    </div>
                    <div class="xl:ml-8 hidden lg:flex lg:col-span-3 lg:py-24 flex-wrap justify-end items-end gap-4 mt-8">
                        <div class="flex justify-end items-end">
                        <img src="{{ asset('resources/images/lp-main/hero-2.png') }}" class="w-full h-auto object-cover xl:w-4/5"
                            alt="Gambar 2">
                        </div>
                        <div class="flex justify-end items-end">
                        <img src="{{ asset('resources/images/lp-main/hero-3.png') }}" class="w-full h-auto object-cover xl:w-4/5"
                            alt="Gambar 3">
                        </div>
                        </div>
            </div>
        </div>
    </section>
    <section class="mt-8">
        <div class="bg-white py-6 sm:py-8 md:mx-8 lg:py-12 lg:mx-20">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                @if ($pakets->where('visibility', 1)->isNotEmpty())
                    <div class="flex justify-between items-center mb-8">
                        <h2 class="text-center sm:text-start text-4xl font-extrabold text-gray-800 md:text-3xl">Pilihan
                            Paket Haji & Umroh
                        </h2>
                        <button type="button"
                            class="hidden sm:flex text-white bg-red-primary hover:bg-hover-red-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-xs sm:text-sm sm:px-4 px-3 py-4 text-center dark:bg-hover-red-primary dark:hover:bg-hover-red-primary dark:focus:ring-red-primary">
                            Selengkapnya
                        </button>
                    </div>
                @endif
                <div class="flex flex-wrap justify-evenly gap-4">
                    @if ($pakets->where('visibility', 1)->isNotEmpty())
                        @foreach ($pakets as $paket)
                            <!-- Paket - start -->
                            @if ($paket->visibility == 1)
                                <div class="flex-shrink-0 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                                    <a href="#" class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                                        <img src="{{ asset('storage/' . $paket->image) }}" loading="lazy" alt="{{ $paket->title }}"
                                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                                        <div class="relative flex w-full flex-col rounded-lg bg-white p-4 text-center">
                                            <span class="text-gray-500">Rp.
                                                {{ number_format($paket->price, 0, ',', '.') }}</span>
                                            <span class="text-lg font-bold text-gray-800 lg:text-xl">{{ $paket->title }}</span>
                                        </div>
                                    </a>
                                </div>
                            @endif
                            <!-- Paket - end -->
                        @endforeach
                    @else
                        <!-- Jika tidak ada paket, tampilkan pesan atau div kosong -->
                        <div class="text-center text-gray-500 flex flex-col items-center">
                            <h2 class="text-center sm:text-start text-4xl font-extrabold text-gray-800 md:text-3xl">
                                Mohon Maaf</h2>
                            <p>Tidak ada paket yang tersedia saat ini.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    {{-- carousel --}}
    @if ($thirdArticle != null)
        <section class="mt-8 h-screen sm:hidden">
            <div class="mx-auto max-w-screen-2xl md:mx-8 px-4 lg:mx-20 md:px-8">
                <div class="mb-8">
                    <h2 class="text-center sm:text-start text-4xl font-extrabold text-gray-800 md:text-3xl">Artikel
                        Terbaru</h2>
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
                                    <img class="rounded-t-lg" src="{{ asset('storage/' . $firstArticle->image) }}"
                                        alt="{{ $firstArticle->title }}" />
                                </a>
                                <div class="p-5">
                                    <p
                                        class="mb-4 inline-flex items-center px-3 py-1 text-sm font-medium text-center text-white bg-yellow-primary rounded-full focus:ring-4 focus:outline-none focus:ring-blue-300">
                                        {{ $firstArticle->category }}
                                    </p>
                                    <a href="#">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            {{ $firstArticle->title }}
                                        </h5>
                                        </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        {{ $firstArticle->short_description }}
                                    </p>
                                    <p class="mb-3 text-sm font-light text-gray-700 dark:text-gray-400">Tanggal:
                                        {{ \Carbon\Carbon::parse($firstArticle->created_at)->translatedFormat('d F Y') }}
                                    </p>
                                    <a href="#"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-primary rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-red-primary dark:focus:ring-blue-800">
                                        Baca
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
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
                                    <img class="rounded-t-lg" src="
                                {{ asset('storage/' . $firstArticle->image) }}"
                                        alt="{{ $firstArticle->title }}" />
                                </a>
                                <div class="p-5">
                                    <p
                                        class="mb-4 inline-flex items-center px-3 py-1 text-sm font-medium text-center text-white bg-yellow-primary rounded-full focus:ring-4 focus:outline-none focus:ring-blue-300">
                                        {{ $firstArticle->category }}
                                    </p>
                                    <a href="#">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            {{ $firstArticle->title }}
                                        </h5>
                                        </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        {{ $firstArticle->short_description }}
                                    </p>
                                    <p class="mb-3 font-light text-gray-700 dark:text-gray-400">Tanggal:
                                        {{ \Carbon\Carbon::parse($firstArticle->created_at)->translatedFormat('d F Y') }}
                                    </p>
                                    <a href="#"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-primary rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-red-primary dark:focus:ring-blue-800">
                                        Baca
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
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
                                    <img class="rounded-t-lg" src="{{ asset('storage/' . $secondArticle->image) }}" alt="{{ $secondArticle->title }}" />
                                    </a>
                                    <div class="p-5">
                                        <p
                                            class="mb-4 inline-flex items-center px-3 py-1 text-sm font-medium text-center text-white bg-yellow-primary rounded-full focus:ring-4 focus:outline-none focus:ring-blue-300">
                                            {{ $secondArticle->category }}
                                        </p>
                                        <a href="#">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            {{ $secondArticle->title }}
                                        </h5>
                                        </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        {{ $secondArticle->short_description }}
                                    </p>
                                    <p class="mb-3 font-light text-gray-700 dark:text-gray-400">Tanggal:
                                        {{ \Carbon\Carbon::parse($secondArticle->created_at)->translatedFormat('d F Y') }}
                                    </p>
                                    <a href="#"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-primary rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-red-primary dark:focus:ring-blue-800">
                                        Baca
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
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
                                    <img class="rounded-t-lg" src="{{ asset('storage/' . $thirdArticle->image) }}" alt="{{ $thirdArticle->title }}" />
                                    </a>
                                    <div class="p-5">
                                        <p
                                            class="mb-4 inline-flex items-center px-3 py-1 text-sm font-medium text-center text-white bg-yellow-primary rounded-full focus:ring-4 focus:outline-none focus:ring-blue-300">
                                            {{ $thirdArticle->category }}
                                        </p>
                                        <a href="#">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            {{ $thirdArticle->title }}
                                        </h5>
                                        </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        {{ $thirdArticle->short_description }}
                                    </p>
                                    <p class="mb-3 font-light text-gray-700 dark:text-gray-400">Tanggal:
                                        {{ \Carbon\Carbon::parse($thirdArticle->created_at)->translatedFormat('d F Y') }}
                                    </p>
                                    <a href="#"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-primary rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-red-primary dark:focus:ring-blue-800">
                                        Baca
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
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
                                    <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg" alt="" />
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
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Langkah-Langkah
                                        Penting Sebelum Berangkat ke Tanah Suci.</p>
                                    <p class="mb-3 font-light text-gray-700 dark:text-gray-400">Tanggal: 01 Desember
                                        2025</p>
                                    <a href="#"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-primary rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-red-primary dark:focus:ring-blue-800">
                                        Baca
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
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
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
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
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                                </span>
                                </button>
                                </div>
                                </div>
                                </section>
    @else
        <div class="text-center text-gray-500 flex flex-col items-center">
            <h2 class="text-center sm:text-start text-4xl font-extrabold text-gray-800 md:text-3xl">Mohon Maaf</h2>
            <p>Tidak belum ada artikel yang tersedia saat ini.</p>
        </div>
    @endif
    @if ($thirdArticle)
        <section class="hidden sm:flex py-20  justify-center">
            <div class="mx-auto w-full max-w-screen-2xl items-center md:mx-8 px-4 lg:mx-20 md:px-8">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-center sm:text-start text-4xl font-extrabold text-gray-800 md:text-3xl">Artikel
                        Terbaru
                    </h2>
                    <button type="button"
                        class="hidden sm:flex text-white bg-red-primary hover:bg-hover-red-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-xs sm:text-sm sm:px-4 px-3 py-4 text-center dark:bg-hover-red-primary dark:hover:bg-hover-red-primary dark:focus:ring-red-primary">
                        Selengkapnya
                    </button>
                </div>
                <div class="grid grid-flow-col grid-rows-2 gap-3 w-full">
                    <div
                        class="row-span-2 col-span-5 rounded-3xl shadow-custom transition-transform duration-300 hover:shadow-lg">
                        <div class="mt-4 ml-4 mr-4 rounded-2xl shadow-custom">
                            <a href="#">
                                <img class="rounded-t-lg object-cover w-full h-72 rounded-2xl" src="
                                                                            {{ asset('storage/' . $firstArticle->image) }}"
                                    alt="{{ $firstArticle->title }}" />
                            </a>
                        </div>
                        <div class="flex justify-between items-center px-4 py-4">
                            <div>
                                <p
                                    class="mb-6 inline-flex items-center px-3 py-1 text-lg font-medium text-center text-white bg-yellow-primary rounded-full focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    {{ $firstArticle->category }}
                                </p>
                                <a href="#">
                                    <h5 class="line-clamp-2 mr-2 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $firstArticle->title }}
                                    </h5>
                                </a>
                                <p class="line-clamp-5 mb-3 font-normal text-gray-700 dark:text-gray-400">
                                    {{ $firstArticle->short_description }}
                                </p>
                                <p class="font-light text-sm text-gray-700 dark:text-gray-400">Tanggal:
                                    {{ \Carbon\Carbon::parse($firstArticle->created_at)->translatedFormat('d F Y') }}
                                </p>

                            </div>
                            <a href="#"
                                class="ml-8 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-primary rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-red-primary dark:focus:ring-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z" />
                                </svg>&nbsp;Bagikan
                            </a>
                        </div>

                    </div>
                    <div class="col-span-2 rounded-3xl shadow-custom transition-transform duration-300 hover:shadow-lg">
                        <div class="mt-4 ml-4 mr-4 rounded-2xl shadow-custom">
                            <a href="#">
                                <img class="rounded-t-lg object-cover w-full h-24 rounded-2xl"
                                    src="{{ asset('storage/' . $secondArticle->image) }}"
                                    alt="{{ $secondArticle->title }}" />
                            </a>
                        </div>
                        <div class="p-5">
                            <p
                                class="mb-1 inline-flex items-center px-3 py-1 text-sm font-medium text-center text-white bg-yellow-primary rounded-full focus:ring-4 focus:outline-none focus:ring-blue-300">
                                {{ $secondArticle->category }}
                            </p>
                            <a href="#">
                                <h5 class="line-clamp-2 text-lg mb-2 font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $secondArticle->title }}
                                </h5>
                            </a>
                            <p class="line-clamp-3 mb-3 text-sm font-normal text-gray-700 dark:text-gray-400">
                                {{ $secondArticle->short_description }}
                            </p>
                            <p class="font-light text-gray-700 dark:text-gray-400">Tanggal:
                                {{ \Carbon\Carbon::parse($secondArticle->created_at)->translatedFormat('d F Y') }}
                            </p>

                        </div>
                    </div>
                    <div class="col-span-2 rounded-3xl shadow-custom transition-transform duration-300  hover:shadow-lg">
                        <div class="mt-4 ml-4 mr-4 rounded-2xl shadow-custom">
                            <a href="#">
                                <img class="rounded-t-lg object-cover w-full h-24 rounded-2xl"
                                    src="{{ asset('storage/' . $thirdArticle->image) }}"
                                    alt="{{ $thirdArticle->title }}" />
                            </a>
                        </div>
                        <div class="p-5">
                            <p
                                class="mb-1 inline-flex items-center px-3 py-1 text-sm font-medium text-center text-white bg-yellow-primary rounded-full focus:ring-4 focus:outline-none focus:ring-blue-300">
                                {{ $thirdArticle->category }}
                            </p>
                            <a href="#">
                                <h5 class="line-clamp-2 text-lg mb-2 font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $thirdArticle->title }}
                                </h5>
                            </a>
                            <p class="line-clamp-3 mb-3 text-sm font-normal text-gray-700 dark:text-gray-400">
                                {{ $thirdArticle->short_description }}
                            </p>

                            <p class="font-light text-gray-700 dark:text-gray-400">Tanggal:
                                {{ \Carbon\Carbon::parse($thirdArticle->created_at)->translatedFormat('d F Y') }}
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <section class="justify-center flex mt-14   ">
        <div class="mx-auto max-w-screen-2xl items-center md:mx-8 px-4 lg:mx-20 md:px-8">
            <h2 class="text-center sm:text-start text-4xl font-extrabold text-gray-800 md:text-3xl">Testimoni Jama'ah
            </h2>
            <div>
                <div class="lg:grid lg:grid-flow-col lg:grid-rows-3 lg:gap-3">
                    <div class="lg:row-span-3 mb-8">
                        <div class="flex mt-8 mb-4">
                            <div class="mr-4 w-20 p-2 bg-white h-20 rounded-full overflow-hidden shadow-custom ">
                                <img src="https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?auto=format&q=75&fit=crop&crop=top&w=600&h=700"
                                    alt="Profile Image" class="w-full rounded-full h-full object-cover">
                            </div>
                            <div>
                                <a href="#">
                                    <h5 class="text-lg mb-2 font-bold tracking-tight text-gray-900 dark:text-white">
                                        Ustadz Syamsul</h5>
                                    <div class="flex items-center space-x-1">
                                        <!-- Bintang penuh -->
                                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 3.317a1 1 0 011.902 0l1.478 4.555a1 1 0 00.95.69h4.8a1 1 0 01.588 1.81l-3.887 2.829a1 1 0 00-.364 1.118l1.478 4.555a1 1 0 01-1.539 1.118L10 15.767l-3.887 2.829a1 1 0 01-1.539-1.118l1.478-4.555a1 1 0 00-.364-1.118L1.8 9.372a1 1 0 01.588-1.81h4.8a1 1 0 00.95-.69l1.478-4.555z" />
                                        </svg>
                                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 3.317a1 1 0 011.902 0l1.478 4.555a1 1 0 00.95.69h4.8a1 1 0 01.588 1.81l-3.887 2.829a1 1 0 00-.364 1.118l1.478 4.555a1 1 0 01-1.539 1.118L10 15.767l-3.887 2.829a1 1 0 01-1.539-1.118l1.478-4.555a1 1 0 00-.364-1.118L1.8 9.372a1 1 0 01.588-1.81h4.8a1 1 0 00.95-.69l1.478-4.555z" />
                                        </svg>
                                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 3.317a1 1 0 011.902 0l1.478 4.555a1 1 0 00.95.69h4.8a1 1 0 01.588 1.81l-3.887 2.829a1 1 0 00-.364 1.118l1.478 4.555a1 1 0 01-1.539 1.118L10 15.767l-3.887 2.829a1 1 0 01-1.539-1.118l1.478-4.555a1 1 0 00-.364-1.118L1.8 9.372a1 1 0 01.588-1.81h4.8a1 1 0 00.95-.69l1.478-4.555z" />
                                        </svg>
                                        <!-- Bintang kosong -->
                                        <svg class="w-6 h-6 text-gray-300" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 3.317a1 1 0 011.902 0l1.478 4.555a1 1 0 00.95.69h4.8a1 1 0 01.588 1.81l-3.887 2.829a1 1 0 00-.364 1.118l1.478 4.555a1 1 0 01-1.539 1.118L10 15.767l-3.887 2.829a1 1 0 01-1.539-1.118l1.478-4.555a1 1 0 00-.364-1.118L1.8 9.372a1 1 0 01.588-1.81h4.8a1 1 0 00.95-.69l1.478-4.555z" />
                                        </svg>
                                        <svg class="w-6 h-6 text-gray-300" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 3.317a1 1 0 011.902 0l1.478 4.555a1 1 0 00.95.69h4.8a1 1 0 01.588 1.81l-3.887 2.829a1 1 0 00-.364 1.118l1.478 4.555a1 1 0 01-1.539 1.118L10 15.767l-3.887 2.829a1 1 0 01-1.539-1.118l1.478-4.555a1 1 0 00-.364-1.118L1.8 9.372a1 1 0 01.588-1.81h4.8a1 1 0 00.95-.69l1.478-4.555z" />
                                        </svg>
                                    </div>

                            </div>
                        </div>
                        <a href="#" class="mt-8">
                            <h5 class="text-lg mb-2 font-bold tracking-tight text-gray-900 dark:text-white text-justify">
                                Alhamdulillah, perjalanan umroh saya bersama El Aqsho Group benar-benar luar biasa.
                                Semua
                                fasilitas yang disediakan sangat memuaskan, mulai dari akomodasi yang nyaman, makanan
                                halal
                                yang lezat, hingga bimbingan ibadah yang sangat profesional.
                            </h5>
                        </a>
                    </div>
                    <div class="lg:row-span-5"><img src="{{ asset('resources/images/lp-main/testimoni.png') }}"
                            class="h-full w-full object-cover" alt="Testimoni 1"></div>
                    <div class="lg:row-span-5 lg:mt-2 mt-4">
                        <div class="relative overflow-hidden rounded-3xl shadow-custom bg-red-700">
                            <iframe src="https://www.youtube.com/embed/5L3wKniOnro?autoplay=1" height="300" width="100%"
                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="bg-cover bg-center h-80 mt-14"
        style="background-image: url('{{ asset('resources/images/lp-main/section-hero.png') }}')">
        <div class="flex items-center justify-center h-full px-4">
            <div class="flex flex-col items-center">
                <!-- Text div -->
                <div class="text-center p-6 rounded-lg">
                    <h2 class="text-2xl font-bold text-white mb-4">Dapatkan Berita Terbaru Umroh Langsung ke WhatsApp
                        Anda
                    </h2>
                </div>
                <!-- Button div -->
                <div>
                    <a href="http://wa.me/6282141297588" target="_blank" rel="noopener noreferrer">
                        <button type="button"
                            class="text-white bg-red-primary hover:bg-hover-red-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-xs sm:text-sm sm:px-4 px-4 py-4 text-center dark:bg-hover-red-primary dark:hover:bg-hover-red-primary dark:focus:ring-red-primary flex justify-between items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-whatsapp"
                                viewBox="0 0 16 16">
                                <path
                                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                            </svg>
                            &nbsp;Kirim Pesan
                            </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="justify-center flex">
        <div class="py-12 flex flex-col items-center">
            <img src="{{ asset('resources/images/lp-main/al-aqsha-horizontal.png') }}" class="h-14"
                alt="Flowbite Logo">
            <h2 class="mt-4 text-center sm:text-start text-4xl font-extrabold text-gray-800 md:text-3xl">Ikuti Kami
            </h2>
            <div class="flex justify-evenly gap-4 mt-8">
                <a href="http://wa.me/6282141297588" target="_blank" rel="noopener noreferrer">
                    <div class="shadow-xl border-2 border-red-primary rounded-xl w-24 h-24 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-facebook"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg>
                    </div>
                </a>
                <a href="http://wa.me/6282141297588" target="_blank" rel="noopener noreferrer">
                    <div class="shadow-xl border-2 border-red-primary rounded-xl w-24 h-24 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-instagram"
                            viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg>
            
                    </div>
                </a>
            
                <a href="http://wa.me/6282141297588" target="_blank" rel="noopener noreferrer">
                    <div class="shadow-xl border-2 border-red-primary rounded-xl w-24 h-24 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-tiktok"
                            viewBox="0 0 16 16">
                            <path
                                d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                        </svg>
                    </div>
                </a>
            
            </div>
        </div>
    </section>
    <section class="flex justify-center bg-grey-primary py-4 mt-8">
        <p class="text-center sm:text-start text-sm font-extrabold text-white md:text-sm">Copyright @El-AqshoGroup
        </p>
    </section>


    <script>
        const carouselElement = document.getElementById('carousel-example');

                const items = [{
                    position: 0,
                    el: document.getElementById('carousel-item-1')
                },
                    {
                        position: 1,
                        el: document.getElementById('carousel-item-2')
                    },
                    {
                        position: 2,
                        el: document.getElementById('carousel-item-3')
                    },
                    {
                        position: 3,
                        el: document.getElementById('carousel-item-4')
                    },
                    {
                        position: 4,
                        el: document.getElementById('carousel-item-5')
                    },
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
