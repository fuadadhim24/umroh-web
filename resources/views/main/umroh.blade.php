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
                        <a href="{{ route('dashboard')}}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang
                            Kami</a>
                    </li>
                    <li>
                        <a href="{{ route('haji')}}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Haji</a>
                    </li>
                    <li>
                        <a href="{{ route('umroh') }}"
                            class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Umrah</a>
                    </li>
                    <li>
                        <a href="{{ route('badal') }}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Badal</a>
                    </li>
                    <li>
                        <a href="{{ route('artikel') }}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Artikel</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="h-screen 2xl:h-96 py-14  flex justify-center items-center">
        <div class="w-full h-full md:mx-12 mt-16 rounded-3xl mx-2"
            style="background-image: url('{{ Vite::asset('resources/images/lp-main/umroh/section-hero.png') }}'); background-size: cover; background-position: center;">
            <div class="flex items-center justify-center h-full">
                <h1 class="text-white text-3xl md:text-6xl font-extrabold text-center leading-tight">
                    Umroh
                </h1>
            </div>
        </div>
    </section>
    <section class="px-8 md:px-24 lg:px-48 xl:px-72 md:mt-20 md:mb-20">
        <h1 class="text-center text-4xl font-extrabold text-dark-red-primary mb-12">Mengapa Harus Umroh Bersama <br>El
            Aqsho Group?</h1>
        <div class="lg:px-24">
            <h4 class="text-center font-semibold">El Aqsho Group hadir untuk mewujudkan perjalanan ibadah umroh Anda
                menjadi pengalaman yang penuh makna dan kenangan istimewa. Berikut adalah alasan mengapa El Aqsho Group
                menjadi pilihan terbaik untuk <br> perjalanan ibadah Anda.</h4>
        </div>
    </section>
    <section class="md:px-24 mt-8 md:mt-22 py-12">
        <h1 class="text-center text-4xl font-extrabold text-dark-red-primary mb-12 px-4 md:px-0">Kelebihan Umroh Bersama
            El-Aqsho Group</h1>
        <div class="lg:grid lg:grid-cols-3 lg:gap-8">
            <div class="my-2 lg:my-0 flex flex-col items-center mb-8 ">
                <div class="rounded-full h-28 w-28 shadow-xl bg-dark-red-primary flex justify-center p-6">
                    <img class="object-contain"
                        src="{{ Vite::asset('resources/images/lp-main/umroh/ic-excess-1.png') }}" alt="">

                </div>
                <h3 class="font-bold text-dark-red-primary mt-4 text-lg">Visa Umroh Resmi dan Terjamin</h3>
                <p class="text-center mt-2 mx-4">Kami memastikan proses pengurusan visa umroh dilakukan secara resmi dan
                    terpercaya, sehingga Anda bisa fokus mempersiapkan diri untuk ibadah.</p>
            </div>
            <div class="my-2 lg:my-0 flex flex-col items-center mb-8">
                <div class="rounded-full h-28 w-28 shadow-xl bg-dark-red-primary flex justify-center p-6">
                    <img class="object-contain"
                        src="{{ Vite::asset('resources/images/lp-main/umroh/ic-excess-2.png') }}" alt="">

                </div>
                <h3 class="font-bold text-dark-red-primary mt-4 text-lg">Pembingan Ibadah yang Profesional</h3>
                <p class="text-center  mt-2 mx-4">Ibadah Anda akan didampingi oleh pembimbing berpengalaman dan
                    kompeten, yang memastikan seluruh rangkaian ibadah berjalan sesuai tuntunan syariat.</p>
            </div>
            <div class="my-2 lg:my-0 flex flex-col items-center">
                <div class="rounded-full h-28 w-28 shadow-xl bg-dark-red-primary flex justify-center p-6">
                    <img class="object-contain"
                        src="{{ Vite::asset('resources/images/lp-main/umroh/ic-excess-3.png') }}" alt="">

                </div>
                <h3 class="font-bold text-dark-red-primary mt-4 text-lg">Fasilitas Akomodasi Nyaman</h3>
                <p class="text-center  mt-2 mx-4">El Aqsho Group menyediakan akomodasi hotel berbintang dengan lokasi
                    strategis, dekat dengan Masjidil Haram dan Masjid Nabawi, demi kenyamanan dan kemudahan Anda.</p>
            </div>
        </div>
        <div class="lg:grid lg:grid-cols-3 lg:gap-4 mt-8">
            <div class="my-2 lg:my-0 flex flex-col items-center mb-8">
                <div class="rounded-full h-28 w-28 shadow-xl bg-dark-red-primary flex justify-center p-6">
                    <img class="object-contain"
                        src="{{ Vite::asset('resources/images/lp-main/umroh/ic-excess-4.png') }}" alt="">

                </div>
                <h3 class="font-bold text-dark-red-primary mt-4 text-lg">Transportasi yang Aman dan Nyaman</h3>
                <p class="text-center mt-2 mx-4">Transportasi darat dan udara yang kami sediakan dirancang untuk
                    memberikan kenyamanan maksimal selama perjalanan Anda.</p>
            </div>
            <div class="my-2 lg:my-0 flex flex-col items-center mb-8">
                <div class="rounded-full h-28 w-28 shadow-xl bg-dark-red-primary flex justify-center p-6">
                    <img class="object-contain"
                        src="{{ Vite::asset('resources/images/lp-main/umroh/ic-excess-5.png') }}" alt="">

                </div>
                <h3 class="font-bold text-dark-red-primary mt-4 text-lg">Harga Transparan dan Kompetitif</h3>
                <p class="text-center mt-2 mx-4">El Aqsho Group menawarkan paket umroh dengan harga yang terjangkau
                    tanpa biaya tersembunyi, sehingga Anda dapat merencanakan perjalanan dengan tenang.</p>
            </div>
            <div class="my-2 lg:my-0 flex flex-col items-center">
                <div class="rounded-full h-28 w-28 shadow-xl bg-dark-red-primary flex justify-center p-6">
                    <img class="object-contain"
                        src="{{ Vite::asset('resources/images/lp-main/umroh/ic-excess-6.png') }}" alt="">

                </div>
                <h3 class="font-bold text-dark-red-primary mt-4 text-lg">Pelayanan Ramah dan Profesional</h3>
                <p class="text-center  mt-2 mx-4">Tim kami siap melayani Anda dengan sepenuh hati, dari awal pendaftaran
                    hingga kepulangan Anda ke tanah air.</p>
            </div>
        </div>
    </section>
    <section class="px-4 md:px-12 py-6">
        <div class=" flex flex-col lg:flex-row lg:justify-between items-center mb-8">
            <h1 class="text-3xl md:text-5xl text-black font-bold text-center md:text-start mb-4">Paket<br>Umroh</h1>
            <div class="bg-red-primary rounded-full">
                <h3 class="my-2 mx-4 font-bold text-white">Selengkapnya</h3>
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
                <h2 class="text-center font-semibold text-xl mt-4">Bulan Syawwal</h2>
                <h2 class="text-center font-semibold text-sm">Harga Rp 34,9 Jt</h2>
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
                <h2 class="text-center font-semibold text-xl mt-4">Bulan Syawwal</h2>
                <h2 class="text-center font-semibold text-sm">Harga Rp 34,9 Jt</h2>
            
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
                <h2 class="text-center font-semibold text-xl mt-4">Bulan Syawwal</h2>
                <h2 class="text-center font-semibold text-sm">Harga Rp 34,9 Jt</h2>
            
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
                <h2 class="text-center font-semibold text-xl mt-4">Bulan Syawwal</h2>
                <h2 class="text-center font-semibold text-sm">Harga Rp 34,9 Jt</h2>
            
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
        <div class="py-12 flex flex-col items-center">
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

</body>