<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('resources/images/lp-main/al-aqsha.png') }}" type="image/icon type">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<body>
    <nav
        class="bg-white dark:bg-gray-900 fixed rounded-full shadow-2xl mt-4 mb-4 inset-x-0 xl:mx-56 sm:mx-24 md:mx-36 mx-4 z-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-1 lg:p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('resources/images/lp-main/al-aqsha-horizontal.png') }}" class="lg:h-8 h-6 ml-4"
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
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-primary md:p-0 md:dark:hover:text-red-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-primary md:p-0 md:dark:hover:text-red-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang
                            Kami</a>
                    </li>
                    <li>
                        <a href="{{ route('haji') }}"
                            class="block py-2 px-3 text-white bg-red-primary rounded-sm md:bg-transparent md:text-red-primary md:p-0 md:dark:text-red-primary"
                            aria-current="page">Haji</a>
                    </li>
                    <li>
                        <a href="{{ route('umroh') }}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-primary md:p-0 md:dark:hover:text-red-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Umroh</a>
                    </li>
                    <li>
                        <a href="{{ route('badal') }}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-primary md:p-0 md:dark:hover:text-red-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Badal</a>
                    </li>
                    <li>
                        <a href="{{ route('artikel') }}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-primary md:p-0 md:dark:hover:text-red-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Artikel</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="xl:h-screen 2xl:h-96 flex flex-col justify-center items-center w-screen">
        <div id="indicators-carousel" class="relative w-full xl:hidden" data-carousel="static">
            <div class="flex w-full h-96 overflow-hidden rounded-lg ">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out w-full" data-carousel-item="active">
                    <div class="h-full flex items-center justify-center ">
                        <div class="h-full p-4 bg-white shadow-xl rounded-xl">
                            <img src="{{ asset('resources/images/lp-main/haji/detail-catalog-dummy-1.png') }}"
                                class="h-full rounded-xl" alt="...">

                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out w-full" data-carousel-item>
                    <div class="h-full flex items-center justify-center ">
                        <div class="h-full p-4 bg-white shadow-xl rounded-xl">
                            <img src="{{ asset('resources/images/lp-main/haji/detail-catalog-dummy-1.png') }}"
                                class="h-full rounded-xl" alt="...">

                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out w-full" data-carousel-item>
                    <div class="h-full flex items-center justify-center ">
                        <div class="h-full p-4 bg-white shadow-xl rounded-xl">
                            <img src="{{ asset('resources/images/lp-main/haji/detail-catalog-dummy-1.png') }}"
                                class="h-full rounded-xl" alt="...">

                        </div>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out w-full" data-carousel-item>
                    <div class="h-full flex items-center justify-center ">
                        <div class="h-full p-4 bg-white shadow-xl rounded-xl">
                            <img src="{{ asset('resources/images/lp-main/haji/detail-catalog-dummy-1.png') }}"
                                class="h-full rounded-xl" alt="...">

                        </div>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out w-full" data-carousel-item>
                    <div class="h-full flex items-center justify-center ">
                        <div class="h-full p-4 bg-white shadow-xl rounded-xl">
                            <img src="{{ asset('resources/images/lp-main/haji/detail-catalog-dummy-1.png') }}"
                                class="h-full rounded-xl" alt="...">

                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-red-primary dark:bg-red-primary group-hover:bg-red-500 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-red-primary dark:red-primary group-hover:bg-red-500 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
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


        <div class="gap-4 hidden xl:flex justify-around items-center flex-row">
            <div class="w-64 h-96 bg-white rounded-xl p-2 mt-16 shadow-2xl" onclick="openModal('image1')">
                <img class="rounded-xl"
                    src="{{ asset('resources/images/lp-main/haji/detail-catalog-dummy-1.png') }}"
                    alt="">
            </div>
            {{-- <div class="w-64 h-96 bg-white rounded-xl p-2 mt-16 shadow-2xl" onclick="openModal('image2')">
                <img class="rounded-xl" src="{{ asset('resources/images/lp-main/haji/detail-catalog-dummy-1.png') }}" alt="">
            </div>
            <div class="w-72 bg-white rounded-xl p-2 mt-16 shadow-2xl" onclick="openModal('image3')">
                <img class="rounded-xl" src="{{ asset('resources/images/lp-main/haji/detail-catalog-dummy-1.png') }}" alt="">
            </div> --}}
            <div class="w-64 h-96 bg-white rounded-xl p-2 mt-16 shadow-2xl" onclick="openModal('image4')">
                <img class="rounded-xl"
                    src="{{ asset('resources/images/lp-main/haji/detail-catalog-dummy-1.png') }}"
                    alt="">
            </div>
            <div class="w-64 h-96 bg-white rounded-xl p-2 mt-16 shadow-2xl" onclick="openModal('image5')">
                <img class="rounded-xl"
                    src="{{ asset('resources/images/lp-main/haji/detail-catalog-dummy-1.png') }}"
                    alt="">
            </div>
        </div>

        <!-- Modal -->
        <div id="imageModal" class="modal hidden">
            <span class="close" onclick="closeModal()">&times;</span>
            <img class="modal-content" id="modalImage">
        </div>
        <h1 class="mt-8 text-center text-2xl md:text-5xl font-extrabold text-dark-red-primary mb-12">Umroh Spesial Bulan<br>Syawwal 1446 H</h1>
    </section>


    <section class="h-2/3 px-8 md:px-24 lg:px-48 xl:px-72 flex items-center">
        <h4 class="text-center font-semibold">Bersama El-Aqsho Group, nikmati perjalanan Umroh yang penuh berkah di bulan Syawwal. Kami menghadirkan paket eksklusif dengan layanan terbaik selama 16 hari untuk pengalaman ibadah yang nyaman dan berkesan.</h4>
    </section>
    <section class="px-2 mt-8 md:mt-22 py-12 md:px-24 md:py-4">
        <h1
            class="mt-4 text-center md:text-start text-2xl md:text-5xl  font-extrabold text-dark-red-primary mb-12 md:mb-4 mx-2">
            Keunggulan Program Kami
        </h1>
        <p class="px-12 font-bold">Keunggulan Program Umroh Syawwal Kami:</p>
        <ul class="list-disc list-outside px-16 font-semibold">
            
            <li class="pb-2 md:pb-0 pt-2">Tanpa Antrian Panjang: Dengan Visa Furodha, Anda langsung berangkat tanpa harus menunggu
                antrean
                reguler.</li>
            <li class="pb-2">Pendampingan Profesional: Dibimbing oleh Muthawwif berpengalaman yang akan membantu
                kelancaran ibadah
                Anda.</li>
            <li class="pb-2">Perjalanan Nyaman: Akomodasi premium, fasilitas modern, dan layanan yang dirancang
                khusus
                untuk
                kenyamanan Anda.</li>
        </ul>
    </section>
    <section class="px-8 md:px-24">
        <div class="flex flex-col justify-between items-center md:items-start md:flex-row md:">
            <div class="">
                <h1
                    class="mt-4 text-center md:text-start text-2xl md:text-5xl  font-extrabold text-dark-red-primary mb-12 md:mb-4">
                    Harga Paket:<br>20.000 USD
                </h1>
                <h3 class="md:px-12 px-2 font-bold">Sudah Termasuk</h3>
                <ul class="list-disc list-outside px-16 md:px-12 font-semibold">
                    <li class="pb-2 md:pb-0 pt-2">Tiket pesawat PP (Indonesia - Saudi Arabia).</li>
                    <li class="pb-2">Visa Furodha tanpa antrean.</li>
                    <li class="pb-2">Maktab Furodha untuk kenyamanan ibadah.</li>
                </ul>
            </div>
            <div class="flex flex-col">
                <div>
                    <h1
                        class="mt-4 md:text-start text-center text-2xl md:text-5xl font-extrabold text-dark-red-primary mb-8 md:mb-4 mx-2">
                        Akomodasi Hotel Premium
                    </h1>
                    <ul class="list-disc list-outside px-16 font-semibold">
                        <li class="pb-4 md:pb-2">Mekah: Elaf Masyaher atau setara.</li>
                        <li class="pb-4 md:pb-2">Madinah: Al-Saha atau setara.</li>
                    </ul>
                </div>
                <div>
                    <h1
                        class="mt-4 text-center md:text-start text-2xl md:text-5xl  font-extrabold text-dark-red-primary mb-8 mx-2 md:mb-4">
                        Gratis:
                    </h1>
                    <ul class="list-disc list-outside px-16 font-semibold">
                        <li class="pb-4 md:pb-2">Pembuatan Paspor Umroh.</li>
                        <li class="pb-4 md:pb-2">Vaksin meningitis.</li>
                        <li class="pb-4 md:pb-2">City Tour ke Thaif.</li>
                        <li class="pb-4 md:pb-2">Perjalanan dengan kereta cepat yang modern.</li>
                    </ul>
                </div>
            </div>

        </div>
        <div>
            <h1
                class="mt-4 text-center md:text-start text-2xl md:text-5xl  font-extrabold text-dark-red-primary mb-8 mx-2 md:mt-2 md:mb-4">
                Tidak Termasuk:
            </h1>
            <ul class="list-disc list-outside px-16 font-semibold">
                <li class="pb-4 md:pb-2">Medical check-up sebelum keberangkatan.</li>
                <li class="pb-4 md:pb-2">Kelebihan bagasi.</li>
                <li class="pb-4 md:pb-2">Keperluan pribadi selama perjalanan.</li>
            </ul>
        </div>
    </section>
    <section class="h-screen p-4 py-12 sm:p-24">
        <div class="bg-black rounded-xl h-full w-full">
            <div class="flex flex-col sm:flex-row sm:items-center h-full px-4">
                <div class="sm:ml-4">
                    <h2 class="mt-4 text-white text-3xl md:text-5xl font-extrabold">
                        Pesan Paket<br>
                        Anda Sekarang! </h2>
                    <p class="mt-2 text-white">Jangan tunda lagi, wujudkan perjalanan spiritual Anda bersama El Aqsho
                        Group.
                    </p>
                    <a href="{{ route('register-form') }}">
                        <button type="button"
                        class="mt-4 text-white bg-red-primary hover:bg-hover-red-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-xs sm:text-sm sm:px-4 px-3 py-2 text-center dark:bg-hover-red-primary dark:hover:bg-hover-red-primary dark:focus:ring-red-primary">Jadwalkan
                        Sekarang</button>
                    </a>
                </div>
                <div class="mt-12 sm:mt-0 mb-4 rounded-2xl w-full sm:w-5/6 lg:w-1/3 sm:h-5/6 sm:mx-2 lg:mx-14 flex-grow"
                    style="background-image: url('{{ asset('resources/images/lp-main/about/bg-3.png') }}'); background-size: cover; backgound-position: center; background-repeat: no-repeat;">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
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
                    <div
                        class="shadow-xl border-2 border-red-primary rounded-xl w-24 h-24 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg>
                    </div>
                </a>
                <a href="http://wa.me/6282141297588" target="_blank" rel="noopener noreferrer">
                    <div
                        class="shadow-xl border-2 border-red-primary rounded-xl w-24 h-24 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg>

                    </div>
                </a>

                <a href="http://wa.me/6282141297588" target="_blank" rel="noopener noreferrer">
                    <div
                        class="shadow-xl border-2 border-red-primary rounded-xl w-24 h-24 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-tiktok" viewBox="0 0 16 16">
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
</body>
