<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('resources/images/lp-main/al-aqsha.png') }}" type="image/icon type">
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleButton = document.querySelector("[data-collapse-toggle]");
            const navMenu = document.getElementById("navbar-sticky");

            toggleButton.addEventListener("click", function() {
                navMenu.classList.toggle("hidden");
            });
        });
    </script>
</head>

<body>
    <nav
        class="bg-white shadow-2xl dark:bg-gray-900 fixed rounded-3xl mt-4 mb-4 inset-x-0 xl:mx-56 sm:mx-24 md:mx-36 mx-4 z-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-1 lg:p-4">
            <a href="https://elaqsho.co.id" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('resources/images/lp-main/al-aqsha-horizontal.png') }}" class="lg:h-8 h-6 ml-4"
                    alt="Flowbite Logo">
                {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                --}}
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
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
                            class="block py-2 px-3 text-white bg-red-primary rounded-sm md:bg-transparent md:text-red-primary md:p-0 md:dark:text-red-primary"
                            aria-current="page">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="{{ route('haji') }}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-primary md:p-0 md:dark:hover:text-red-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Haji</a>
                    </li>
                    <li>
                        <a href="{{ route('umroh') }}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-primary md:p-0 md:dark:hover:text-red-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">umroh</a>
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
    <section class="h-screen 2xl:h-4/5 py-14  flex justify-center items-center">
        <div class="w-full h-full md:mx-12 mt-16 rounded-3xl mx-2"
            style="background-image: url('{{ asset('resources/images/lp-main/about/section-hero.png') }}'); background-size: cover; background-position: center;">
            <div class="flex items-center justify-center h-full">
                <h1 class="text-white text-3xl md:text-6xl font-extrabold text-center leading-tight">
                    Selamat Datang <br> di El Aqsho Group
                </h1>
            </div>
        </div>
    </section>

    <section>
        <div class="bg-white py-6 sm:py-8 md:mx-8 lg:py-12 lg:mx-20">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                <div class="flex justify-center">
                    <div class="pb-12">
                        <h2
                            class="mt-4 text-center sm:text-start text-3xl font-extrabold text-dark-red-primary md:text-4xl">
                            Layanan Unggulan Kami
                        </h2>
                    </div>
                </div>

                <div class="grid sm:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:grid-cols-4">
                    <!-- product - start -->
                    <div>
                        <a href="#"
                            class="group relative flex h-80  justify-center items-center  overflow-hidden rounded-lg p-4">
                            <div
                                class="absolute top-24 left-1/2 -translate-x-1/2 -translate-y-24 w-24 h-24 bg-white   shadow-lg rounded-full z-20 flex items-center justify-center">
                                <div
                                    class="w-5/6 h-5/6  bg-dark-red-primary rounded-full flex justify-center items-center">
                                    <img src="{{ asset('resources/images/lp-main/about/ic_keunggulan1.png') }}"
                                        alt="" srcset="" class="w-12 h-12">
                                </div>
                            </div>
                            <div
                                class="absolute top-1/2 h-48 left-1/2 -translate-x-1/2 -translate-y-28 w-full  shadow-lg rounded-lg p-6 flex flex-col items-center justify-center z-10 bg-gradient-to-b from-dark-red-primary to-dark-red-second">
                                <!-- Konten utama -->
                                <div class="relative flex mt-4 w-full flex-col rounded-lg text-center p-4">
                                    <span class="text-lg font-bold text-white lg:text-xl">Manasik Terpadu</span>
                                    <span class="text-gray-200 text-sm mt-2">Pendampingan ibadah dengan bimbingan
                                        profesional dan
                                        berpengalaman</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- product - end -->

                    <!-- product - start -->
                    <div>
                        <a href="#"
                            class="group relative flex h-80 justify-center items-center  overflow-hidden rounded-lg p-4">
                            <div
                                class="absolute top-24 left-1/2 -translate-x-1/2 -translate-y-24 w-24 h-24 bg-white   shadow-lg rounded-full z-20 flex items-center justify-center">
                                <div
                                    class="w-5/6 h-5/6  bg-dark-red-primary rounded-full flex justify-center items-center">

                                    <img src="{{ asset('resources/images/lp-main/about/ic_keunggulan2.png') }}"
                                        alt="" srcset="" class="w-12 h-12">
                                </div>
                            </div>
                            <div
                                class="absolute top-1/2 h-48 left-1/2 -translate-x-1/2 -translate-y-28 w-full  shadow-lg rounded-lg p-6 flex flex-col items-center justify-center z-10 bg-gradient-to-b from-dark-red-primary to-dark-red-second">
                                <!-- Konten utama -->
                                <div class="relative flex mt-4 w-full flex-col rounded-lg text-center p-4">
                                    <span class="text-lg font-bold text-white lg:text-xl">Fasilitas Lengkap</span>
                                    <span class="text-gray-200 text-sm mt-2">Hotel, transportasi nyaman, dan konsumsi
                                        yang memadai</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- product - end -->

                    <!-- product - start -->
                    <div>
                        <a href="#"
                            class="group relative flex h-80 justify-center items-center  overflow-hidden rounded-lg p-4">
                            <div
                                class="absolute top-24 left-1/2 -translate-x-1/2 -translate-y-24 w-24 h-24 bg-white   shadow-lg rounded-full z-20 flex items-center justify-center">
                                <div
                                    class="w-5/6 h-5/6  bg-dark-red-primary rounded-full flex items-center justify-center">
                                    <img src="{{ asset('resources/images/lp-main/about/ic_keunggulan3.png') }}"
                                        alt="" srcset="" class="w-12 h-12">
                                </div>
                            </div>
                            <div
                                class="absolute top-1/2 h-48 left-1/2 -translate-x-1/2 -translate-y-28 w-full  shadow-lg rounded-lg p-6 flex flex-col items-center justify-center z-10 bg-gradient-to-b from-dark-red-primary to-dark-red-second">
                                <!-- Konten utama -->
                                <div class="relative flex mt-4 w-full flex-col rounded-lg text-center p-4">
                                    <span class="text-lg font-bold text-white lg:text-xl">Harga Kompetitif</span>
                                    <span class="text-gray-200 text-sm mt-2">Pilihan paket terjangkau tanpa mengurangi
                                        kualitas layanan</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- product - end -->

                    <!-- product - start -->
                    <div>
                        <a href="#"
                            class="group relative flex h-80 justify-center items-center  overflow-hidden rounded-lg p-4">
                            <div
                                class="absolute top-24 left-1/2 -translate-x-1/2 -translate-y-24 w-24 h-24 bg-white   shadow-lg rounded-full z-20 flex items-center justify-center">
                                <div
                                    class="w-5/6 h-5/6  bg-dark-red-primary rounded-full flex justify-center items-center">
                                    <img src="{{ asset('resources/images/lp-main/about/ic_keunggulan4.png') }}"
                                        alt="" srcset="" class="w-12 h-12">
                                </div>
                            </div>
                            <div
                                class="absolute top-1/2 h-48 left-1/2 -translate-x-1/2 -translate-y-28 w-full  shadow-lg rounded-lg p-6 flex flex-col items-center justify-center z-10 bg-gradient-to-b from-dark-red-primary to-dark-red-second">
                                <!-- Konten utama -->
                                <div class="relative flex mt-8 w-full flex-col rounded-lg text-center p-4">
                                    <span class="text-lg font-bold text-white lg:text-xl text-center">Tim Pendamping
                                        Profesional</span>
                                    <span class="text-gray-200 text-sm mt-2">Tim kami siap melayani Anda dengan sepenuh
                                        hati selama perjalanan</span>
                                </div>
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

    <section class="2xl:h-4/5 py-14  flex justify-center items-center">
        <div class="w-full h-full md:mx-4 rounded-3xl bg-black">
            <div class="container mx-auto px-4 py-12">
                <div class="text-center mb-12">
                    <h2 class="text-white text-4xl md:text-5xl font-extrabold">
                        Alasan Memilih <br>
                        El Aqsho Group
                    </h2>
                </div>

                <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:grid-cols-4">
                    <!-- product - start -->
                    <div>
                        <a href="#"
                            class="group relative flex h-96 justify-center items-center  overflow-hidden rounded-lg p-4">
                            <div
                                class="absolute top-24 left-1/2 -translate-x-1/2 -translate-y-24 w-24 h-24 bg-white   shadow-lg rounded-full z-20 flex items-center justify-center">
                                <div class="w-5/6 h-5/6 rounded-full flex  justify-center items-center ">
                                    <img src="{{ asset('resources/images/lp-main/about/ic_reason1.png') }}"
                                        alt="" srcset="" class="w-12 h-12">
                                </div>
                            </div>
                            <div
                                class="absolute top-1/2 h-48 left-1/2 -translate-x-1/2 -translate-y-3/4 w-full  shadow-lg rounded-lg p-6 flex flex-col items-center justify-center z-10 bg-white">
                                <!-- Konten utama -->
                                <div class="relative flex mt-4 w-full flex-col rounded-lg text-center p-4">
                                    <span class="text-lg font-bold text-yellow-primary lg:text-xl">Legalitas
                                        Terjamin</span>
                                    <span class="text-gray-600 text-sm mt-2">Berizin resmi dari Kementerian Agama RI
                                        untuk perjalanan Haji dan Umroh</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- product - end -->

                    <!-- product - start -->
                    <div>
                        <a href="#"
                            class="group relative flex h-96 justify-center items-center  overflow-hidden rounded-lg p-4">
                            <div
                                class="absolute top-24 left-1/2 -translate-x-1/2 -translate-y-24 w-24 h-24 bg-white   shadow-lg rounded-full z-20 flex items-center justify-center">
                                <div class="w-5/6 h-5/6 rounded-full flex justify-center items-center">
                                    <img src="{{ asset('resources/images/lp-main/about/ic_reason2.png') }}"
                                        alt="" srcset="" class="w-12 h-12">
                                </div>
                            </div>
                            <div
                                class="absolute top-1/2 h-48 left-1/2 -translate-x-1/2 -translate-y-3/4 w-full  shadow-lg rounded-lg p-6 flex flex-col items-center justify-center z-10 bg-white">
                                <!-- Konten utama -->
                                <div class="relative flex mt-4 w-full flex-col rounded-lg text-center p-4">
                                    <span class="text-lg font-bold text-yellow-primary lg:text-xl">Pengalaman
                                        Teruji</span>
                                    <span class="text-gray-600 text-sm mt-2">Telah memberangkatkan ribuan jamaah dengan
                                        pengalaman spiritual yang berkesan.</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- product - end -->

                    <!-- product - start -->
                    <div>
                        <a href="#"
                            class="group relative flex h-96 justify-center items-center  overflow-hidden rounded-lg p-4">
                            <div
                                class="absolute top-24 left-1/2 -translate-x-1/2 -translate-y-24 w-24 h-24 bg-white   shadow-lg rounded-full z-20 flex items-center justify-center">
                                <div class="w-5/6 h-5/6 rounded-full flex justify-center items-center">
                                    <img src="{{ asset('resources/images/lp-main/about/ic_reason3.png') }}"
                                        alt="" srcset="" class="w-12 h-12">
                                </div>
                            </div>
                            <div
                                class="absolute top-1/2 h-48 left-1/2 -translate-x-1/2 -translate-y-3/4 w-full  shadow-lg rounded-lg p-6 flex flex-col items-center justify-center z-10 bg-white">
                                <!-- Konten utama -->
                                <div class="relative flex mt-4 w-full flex-col rounded-lg text-center p-4">
                                    <span class="text-lg font-bold text-yellow-primary lg:text-xl">Fasilitas
                                        Premium</span>
                                    <span class="text-gray-600 text-sm mt-2">Layanan kelas dunia untuk kenyamanan dan
                                        keamanan jamaah</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- product - end -->

                    <!-- product - start -->
                    <div>
                        <a href="#"
                            class="group relative flex h-96 justify-center items-center  overflow-hidden rounded-lg p-4">
                            <div
                                class="absolute top-24 left-1/2 -translate-x-1/2 -translate-y-24 w-24 h-24 bg-white   shadow-lg rounded-full z-20 flex items-center justify-center">
                                <div class="w-5/6 h-5/6 rounded-full  flex justify-center items-center">
                                    <img src="{{ asset('resources/images/lp-main/about/ic_reason4.png') }}"
                                        alt="" srcset="" class="w-12 h-12">
                                </div>
                            </div>
                            <div
                                class="absolute top-1/2 h-48 left-1/2 -translate-x-1/2 -translate-y-3/4 w-full  shadow-lg rounded-lg p-6 flex flex-col items-center justify-center z-10 bg-white">
                                <!-- Konten utama -->
                                <div class="relative flex mt-4 w-full flex-col rounded-lg text-center p-4">
                                    <span class="text-lg font-bold text-yellow-primary lg:text-xl">Layanan
                                        Responsif</span>
                                    <span class="text-gray-600 text-sm mt-2">Dukungan 24/7 untuk setiap kebutuhan dan
                                        pertanyaan jamaah</span>
                                </div>
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
    <section class="mb-4">
        <div>
            <div class="mx-auto max-w-screen-2xl md:px-8 ">
                <div class="flex justify-center ">
                    <div class="">
                        <h2 class="mt-4 text-center  text-3xl font-extrabold text-dark-red-primary md:text-4xl">
                            Perjalanan Kesuksesan<br>Kami
                        </h2>
                    </div>
                </div>
                <div class="lg:flex lg:items-center lg:justify-between lg:mx-24">
                    <div class="sm:w-1/4  h-96 rounded-xl flex items-end justify-center p-4"
                        style="background-image: url('{{ asset('resources/images/lp-main/about/bg-1.png') }}'); background-size: cover; ">
                        <div class="mx-2">
                            <h2 class="mb-16 text-3xl font-bold text-white text-center items-center">Telah Menangani
                                Lebih
                                dari<br>+2500 Jamaah</h2>
                            <div class="w-full h-20 bg-white rounded-2xl flex items-center justify-center font-bold">
                                <h3>Angka Keberhasilan</h3>
                            </div>
                        </div>
                    </div>
                    <div class="sm:w-1/5 px-14 sm:px-0 to-blue-800 flex flex-col justify-center h-96">
                        <div class="mb-12 w-full h-28 rounded-xl bg-black flex justify-center items-center">
                            <h2 class="text-2xl font-bold text-white text-center justify-center ">
                                +2500<br>
                                Jama’ah</h2>
                        </div>
                        <div class="w-full h-28 rounded-xl bg-black flex justify-center items-center">
                            <h2 class="text-2xl font-bold text-white text-center justify-center ">
                                +2500<br>
                                Jama’ah</h2>
                        </div>
                    </div>
                    <div class="sm:w-1/4  h-96 rounded-xl flex items-end justify-center p-4"
                        style="background-image: url('{{ asset('resources/images/lp-main/about/bg-2.png') }}'); background-size: cover; ">
                        <div class="mx-2">
                            <h2 class="mb-8 text-3xl font-bold text-white text-center items-center">Menjadi mitra
                                terpercaya
                                bagi jamaah di Bondowoso dan sekitarnya</h2>
                            <div class="w-full h-20 bg-white rounded-2xl flex items-center justify-center font-bold">
                                <h3>Angka Keberhasilan</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-4 md:px-12 py-6">
        <div class="flex justify-center">
            <div class="pb-12">
                <h2 class="mt-4 text-center sm:text-start text-3xl font-extrabold text-dark-red-primary md:text-4xl">
                    Tim dan Divisi Kami
                </h2>
            </div>
        </div>
        <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:grid-cols-4">
            <!-- product - start -->
            <div>
                <a href="#"
                    class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                    <img src="https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?auto=format&q=75&fit=crop&crop=top&w=600&h=700"
                        loading="lazy" alt="Photo by Austin Wade"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
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
                </a>

            </div>
            <!-- product - end -->
            <button type="button"
                class="sm:hidden text-white bg-red-primary hover:bg-hover-red-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-xs sm:text-sm sm:px-4 px-3 py-4 text-center dark:bg-hover-red-primary dark:hover:bg-hover-red-primary dark:focus:ring-red-primary">Selengkapnya</button>
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
                    <button type="button"
                        class="mt-4 text-white bg-red-primary hover:bg-hover-red-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-xs sm:text-sm sm:px-4 px-3 py-2 text-center dark:bg-hover-red-primary dark:hover:bg-hover-red-primary dark:focus:ring-red-primary">Jadwalkan
                        Sekarang</button>

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
                <a href="https://www.facebook.com/share/1F9cb4zLLn/" target="_blank" rel="noopener noreferrer">
                    <div
                        class="shadow-xl border-2 border-red-primary rounded-xl w-24 h-24 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg>
                    </div>
                </a>
                <a href="https://www.instagram.com/elaqshogroup/profilecard/?igsh=Zm05bGozemRtaXNj" target="_blank"
                    rel="noopener noreferrer">
                    <div
                        class="shadow-xl border-2 border-red-primary rounded-xl w-24 h-24 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg>

                    </div>
                </a>

                <a href="https://www.tiktok.com/@elaqshogroup?_t=ZS-8upUzdWhtg2&_r=1" target="_blank"
                    rel="noopener noreferrer">
                    <div
                        class="shadow-xl border-2 border-red-primary rounded-xl w-24 h-24 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-tiktok" viewBox="0 0 16 16">
                            <path
                                d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                        </svg>
                    </div>
                </a>
                <a href="http://wa.me/6282141297588" target="_blank" rel="noopener noreferrer">
                    <div
                        class="shadow-xl border-2 border-red-primary rounded-xl w-24 h-24 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
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
