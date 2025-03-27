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
        class="bg-white dark:bg-gray-900 fixed rounded-3xl shadow-2xl mt-4 mb-4 inset-x-0 xl:mx-56 sm:mx-24 md:mx-36 mx-4 z-50">
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
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-primary md:p-0 md:dark:hover:text-red-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang
                            Kami</a>
                    </li>
                    <li>
                        <a href="{{ route('haji') }}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-primary md:p-0 md:dark:hover:text-red-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Haji</a>
                    </li>
                    <li>
                        <a href="{{ route('umroh') }}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-primary md:p-0 md:dark:hover:text-red-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Umroh</a>
                    </li>
                    <li>
                        <a href="{{ route('badal') }}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-primary md:p-0 md:dark:hover:text-red-primary dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                            aria-current="page">Badal</a>
                    </li>
                    <li>
                        <a href="{{ route('artikel') }}"
                            class="block py-2 px-3 text-white bg-red-primary rounded-sm md:bg-transparent md:text-red-primary md:p-0 md:dark:text-red-primary">Artikel</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @if ($articles->isNotEmpty())
        <section class="min-h-screen pt-24 px-4 md:px-16 pb-4">

            <div class="h-full w-full flex flex-col">
                <h1 class="text-2xl font-extrabold  md:text-left">Artikel Terbaru</h1>
                <div class="mt-4 shadow-xl rounded-2xl flex-grow p-4">
                    <div class="w-full h-full flex flex-col">
                        <!-- Gambar Artikel -->
                        <div class="rounded-3xl flex-grow h-64 md:h-auto"
                            style="background-image: url('{{ asset('storage/' . $articles[0]->image) }}');  
                                                           background-size: cover; 
                                                           background-position: center; 
                                                           background-repeat: no-repeat;">
                        </div>
                        <!-- Konten Artikel -->
                        <div class="my-2 mt-8 md:mx-14 flex flex-col md:flex-row">
                            <div class="w-full md:w-full md:mr-2 text-start md:text-left mr-4 font-weight-bold">
                                <p
                                    class="mb-4 inline-flex items-center px-6 md:px-12 py-1 text-sm font-medium text-center 
                                                              text-white bg-yellow-primary rounded-full">
                                    {{ $articles[0]->category }}
                                </p>
                                <h2 class=" font-bold text-2xl md:text-3xl text-black  mb-3 ">
                                    {{ $articles[0]->title }}
                                </h2>
                                <p class="mb-3 font-semibold text-sm md:text-md text-gray-800">
                                    Tanggal:
                                    {{ \Carbon\Carbon::parse($articles[0]->created_at)->translatedFormat('d F Y') }}
                                </p>
                            </div>
                            <!-- Tombol Aksi -->
                            <div class="w-full md:w-1/3 flex flex-col items-center justify-center h-full space-y-1">
                                <a href="{{ route('detail-artikel', ['id' => $articles[0]->id]) }}" class="w-full ">
                                    <p
                                        class="mb-4 inline-flex items-center justify-center px-10 py-8 text-sm font-medium text-center 
                                                  text-black shadow-lg border border-black rounded-3xl w-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="20"
                                            height="20" fill="currentColor" class="bi bi-book-half"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                                        </svg>
                                        Baca Sekarang
                                    </p>
                                </a>
                                <a href="javascript:void(0);"
                                    onclick="shareArticle('{{ $articles[0]->title }}', '{{ $articles[0]->url }}')"
                                    class="w-full">
                                    <p
                                        class="mb-4 inline-flex items-center px-10 py-8 justify-center text-sm font-medium text-center 
                                                                          text-white shadow-lg bg-blue-primary rounded-3xl w-full">
                                        <img src="{{ asset('resources/images/lp-main/artikel/ic-2.png') }}"
                                            class="mr-2 w-6 h-6">
                                        Bagikan Artikel
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <!-- Jika tidak ada paket, tampilkan pesan atau div kosong -->
        <section class="min-h-screen pt-24 px-4 md:px-16 pb-4 flex items-center justify-center">
            <div class="text-center text-gray-500 flex flex-col items-center">
                <h2 class="text-center sm:text-start text-4xl font-extrabold text-gray-800 md:text-3xl">
                    Mohon Maaf</h2>
                <p>Tidak ada artikel yang tersedia saat ini.</p>
            </div>
        </section>
    @endif
    <section class=" mx-4 md:mx-16 border-l-orange-200">
        @if (count($articles) > 1)
            @foreach ($articles->skip(1) as $article)
                {{-- <div class="grid grid-cols-3 gap-4 bg-red-primary my-4">
                        <div class="...">01</div>
                        <div class="...">02</div>
                        <div class="col-span-2 ...">04</div>
                        <div class="...">05</div>
                        <div class="...">06</div>
                        <div class="col-span-2 ...">07</div>
                    </div> --}}
                {{-- <div class="grid md:grid-flow-col grid-cols-3  grid-rows-3 bg-red-primary my-4 ">
                        <div class="row-span-3 bg-white"
                            style="background-image: url('{{ asset('storage/' . $article->image) }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                            01</div>
                        <div class="col-span-2 row-span-2">
                            <div class="flex justify-between">
                                <h1 class="font-bold text-2xl text-gray-800">{{ $article->category }}</h1>
                                <h2 class="font-semibold text-md text-gray-800">Tanggal:
                                    {{ \Carbon\Carbon::parse($article->created_at)->translatedFormat('d F Y') }}
                                </h2>
                            </div>
                            <h1 class="mt-4 font-bold text-3xl text-black break-words">
                                {{ $article->title }}
                            </h1>
                            <div class="ml-4">
                                <p class="mt-4 text-gray-800">{{ $article->short_description }}</p>
                            </div>
                        </div>
                    </div> --}}


                <a href="{{ route('detail-artikel', ['id' => $article->id]) }}">
                    <div
                        class="mt-8 h-auto md:h-72 flex flex-col md:flex-row items-center bg-amber-700 shadow-xl rounded-2xl p-4">
                        <!-- Gambar -->
                        <img src="{{ asset('storage/' . $article->image) }}"
                            class="w-[180px] md:w-1/3 h-48 md:h-full object-cover rounded-2xl">

                        <!-- Konten -->
                        <div class="md:mx-10 w-full md:w-2/3 p-4 ">
                            <div class="flex flex-col md:flex-row justify-between w-full">
                                <h1 class="font-bold text-xl md:text-2xl text-gray-800">{{ $article->category }}</h1>
                                <h2 class="font-semibold text-sm md:text-md text-gray-800">Tanggal:
                                    {{ \Carbon\Carbon::parse($article->created_at)->translatedFormat('d F Y') }}
                                </h2>
                            </div>
                            <h1 class="mt-4 font-bold text-2xl md:text-3xl text-black">{{ $article->title }}</h1>
                            <div class="w-full md:w-11/12 mt-4 ml-4">
                                <p class="text-gray-800 text-sm md:text-base">{{ $article->short_description }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        @else
            @if ($articles->isNotEmpty())
                <div class="text-center text-gray-500 flex flex-col items-center">
                    <h2 class="text-center sm:text-start text-4xl font-extrabold text-gray-800 md:text-3xl">Mohon Maaf
                    </h2>
                    <p>Belum ada artikel lain yang tersedia saat ini.</p>
                </div>
            @else
            @endif
        @endif
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
                </di5v>
            </div>
    </section>

    <section class="justify-center flex">
        <div class="py-12 flex flex-col items-center">
            <img src="{{ asset('resources/images/lp-main/al-aqsha-horizontal.png') }}" class="h-14"
                alt="Flowbite Logo">
            <h2 class="mt-4 text-center sm:text-start text-4xl font-extrabold text-gray-800 md:text-3xl">Ikuti Kami
            </h2>
            <div class="flex justify-evenly gap-4 mt-8 w-full flex-wrap px-4">
                <a href="https://www.facebook.com/share/1F9cb4zLLn/" target="_blank" rel="noopener noreferrer">
                    <div
                         class="shadow-xl border-2 border-red-primary rounded-xl p-3 md:p-5 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-facebook md:hidden" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                            class="bi bi-facebook hidden md:block" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg>
                    </div>
                </a>
                <a href="https://www.instagram.com/elaqshogroup/profilecard/?igsh=Zm05bGozemRtaXNj" target="_blank"
                    rel="noopener noreferrer">
                    <div
                         class="shadow-xl border-2 border-red-primary rounded-xl p-3 md:p-5 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-instagram md:hidden" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                            class="bi bi-instagram md:block hidden" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg>

                    </div>
                </a>

                <a href="https://www.tiktok.com/@elaqshogroup?_t=ZS-8upUzdWhtg2&_r=1" target="_blank"
                    rel="noopener noreferrer">
                    <div
                         class="shadow-xl border-2 border-red-primary rounded-xl p-3 md:p-5 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-tiktok md:hidden" viewBox="0 0 16 16">
                            <path
                                d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                            class="bi bi-tiktok md:block hidden" viewBox="0 0 16 16">
                            <path
                                d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                        </svg>
                    </div>
                </a>
                <a href="http://wa.me/6282141297588" target="_blank" rel="noopener noreferrer">
                    <div
                         class="shadow-xl border-2 border-red-primary rounded-xl p-3 md:p-5 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                            class="bi bi-whatsapp md:block hidden" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-whatsapp md:hidden" viewBox="0 0 16 16">
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
        function shareArticle(title, url) {
            if (navigator.share) {
                navigator.share({
                    title: title,
                    url: url
                }).then(() => {
                    console.log('Artikel berhasil dibagikan');
                }).catch((error) => {
                    console.error('Error sharing:', error);
                });
            } else {
                const shareLink = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
                window.open(shareLink, '_blank');
            }
        }
    </script>
</body>
