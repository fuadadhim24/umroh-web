<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js', 'node_modules/flowbite/dist/flowbite.min.js'])
</head>

<body>
    <nav
        class="bg-white shadow-2xl dark:bg-gray-900 fixed rounded-full mt-4 mb-4 inset-x-0 xl:mx-56 sm:mx-24 md:mx-36 mx-4 z-50">
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
                            class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Tentang Kami</a>
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
    <section class="h-screen 2xl:h-4/5 py-14  flex justify-center items-center">
        <div class="w-full h-full md:mx-12 mt-16 rounded-3xl mx-2"
            style="background-image: url('{{ Vite::asset('resources/images/lp-main/about/section-hero.png') }}'); background-size: cover; background-position: center;">
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
                                <div class="w-5/6 h-5/6  bg-dark-red-primary rounded-full"></div>
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
                                <div class="w-5/6 h-5/6  bg-dark-red-primary rounded-full"></div>
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
                                <div class="w-5/6 h-5/6  bg-dark-red-primary rounded-full"></div>
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
                                <div class="w-5/6 h-5/6  bg-dark-red-primary rounded-full"></div>
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
                                <div class="w-5/6 h-5/6 rounded-full"></div>
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
                                <div class="w-5/6 h-5/6 rounded-full"></div>
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
                                <div class="w-5/6 h-5/6 rounded-full"></div>
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
                                <div class="w-5/6 h-5/6 rounded-full"></div>
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
<section>
    <div class="py-6">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <div class="flex justify-center">
                <div class="pb-12">
                    <h2
                        class="mt-4 text-center sm:text-start text-3xl font-extrabold text-dark-red-primary md:text-4xl">
                        Perjalanan Kesuksesan Kami
                    </h2>
                </div>
            </div>
            <div class="lg:flex lg:items-center lg:justify-between lg:mx-24">
                <div class="w-1/4  h-96 rounded-xl flex items-end justify-center p-4"
                    style="background-image: url('{{ Vite::asset('resources/images/lp-main/about/bg-1.png') }}'); background-size: cover; ">
                    <div>
                        <h2 class="mb-16 text-3xl font-bold text-white text-center items-center">Telah Menangani Lebih
                            dari<br>+2500 Jamaah</h2>
                        <div class="w-full h-20 bg-white rounded-2xl flex items-center justify-center ">
                            <h3>Angka Keberhasilan</h3>
                        </div>
                    </div>
                </div>
                <div class="w-1/5 to-blue-800 flex flex-col justify-center h-96">
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
                <div class="w-1/4 bg-white h-96 rounded-xl flex items-end justify-center p-4"
                    style="background-image: url('{{ Vite::asset('resources/images/lp-main/about/bg-2.png') }}'); background-size: cover;">
                    <div>
                        <h2 class="mb-8 text-3xl font-bold text-white text-center items-center">Menjadi mitra terpercaya
                            bagi jamaah di Bondowoso dan sekitarnya</h2>
                        <div class="w-full h-20 bg-white rounded-2xl flex items-center justify-center ">
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
                Perjalanan Kesuksesan Kami
            </h2>
        </div>
    </div>
    <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:grid-cols-4">
        <!-- product - start -->
        <div>
            <a href="#" class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                <img src="https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?auto=format&q=75&fit=crop&crop=top&w=600&h=700"
                    loading="lazy" alt="Photo by Austin Wade"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                    

            </a>
        </div>
        <!-- product - end -->

        <!-- product - start -->
        <div>
            <a href="#" class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                <img src="https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?auto=format&q=75&fit=crop&crop=top&w=600&h=700"
                    loading="lazy" alt="Photo by engin akyurt"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />


            </a>

        </div>
        <!-- product - end -->

        <!-- product - start -->
        <div>
            <a href="#" class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
                <img src="https://images.unsplash.com/photo-1552668693-d0738e00eca8?auto=format&q=75&fit=crop&crop=top&w=600&h=700"
                    loading="lazy" alt="Photo by Austin Wade"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

            </a>

        </div>
        <!-- product - end -->

        <!-- product - start -->
        <div>
            <a href="#" class="group relative flex h-96 items-end overflow-hidden rounded-lg bg-gray-100 p-4 shadow-lg">
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
    
    <section class="bg-cover bg-center h-80 mt-14"
        style="background-image: url('{{ Vite::asset('resources/images/lp-main/section-hero.png') }}')">
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
                    <button type="button"
                        class="text-white bg-red-primary hover:bg-hover-red-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-xs sm:text-sm sm:px-4 px-4 py-4 text-center dark:bg-hover-red-primary dark:hover:bg-hover-red-primary dark:focus:ring-red-primary flex justify-between items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                        </svg>
                        &nbsp;Kirim Chat
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="h-48 justify-center flex">
        <div class="py-12">
            <img src="{{ Vite::asset('resources/images/lp-main/al-aqsha-horizontal.png') }}" class="h-14"
                alt="Flowbite Logo">
            <h2 class="mt-4 text-center sm:text-start text-4xl font-extrabold text-gray-800 md:text-3xl">Ikuti Kami
            </h2>
        </div>
    </section>
    <section class="flex justify-center bg-grey-primary py-4">
        <p class="text-center sm:text-start text-lg font-extrabold text-white md:text-lg">@CopyrightEl-AqshoGroup
        </p>
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