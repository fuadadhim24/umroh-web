<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js', 'node_modules/flowbite/dist/flowbite.min.js'])
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script>
        let currentTab = 0;
        function updateStepper(tabIndex) {
            document.getElementById('step-' + (tabIndex)).classList.remove('bg-gray-100');
            document.getElementById('step-' + (tabIndex)).classList.add('bg-yellow-primary');
        }

        function updateStepperBefore(tabIndex) {
            document.getElementById('step-' + (tabIndex - 1)).classList.remove('bg-yellow-primary');
            document.getElementById('step-' + (tabIndex - 1)).classList.add('bg-gray-100');
            document.getElementById('step-' + (tabIndex)).classList.add('bg-yellow-primary');
            document.getElementById('step-' + (tabIndex)).classList.remove('bg-gray-100');
        }

        function showTab(tabIndex) {
            document.getElementById('tab-' + (tabIndex - 1)).hidden = true;
            document.getElementById('tab-' + (tabIndex)).hidden = false;
        }

        function showTabBefore(tabIndex) {
            document.getElementById('tab-' + (tabIndex)).hidden = true;
            document.getElementById('tab-' + (tabIndex - 1)).hidden = false;
        }

        function nextTab(event, tabIndex) {
            event.preventDefault();
            if (tabIndex < 3) {
                currentTab = tabIndex;
                showTab(currentTab);
                updateStepper(currentTab);
            } else {
                alert('Form submitted!');
            }
        }

        function beforeTab(event, tabIndex) {
            event.preventDefault();

            if (tabIndex > 0) {
                currentTab = tabIndex - 1;
                showTabBefore(currentTab);
                updateStepperBefore(currentTab);
            }

        }

        showTab(currentTab);
        updateStepper(currentTab);
    </script>
</head>

<body>
    <section class=" w-screen bg-gray-200 p-4">
        <div class="bg-white w-full h-full rounded-xl shadow-2xl">
            <div class="flex justify-between p-4 relative">
                <img src="{{ Vite::asset('resources/images/lp-main/al-aqsha-horizontal.png') }}" class="h-8 lg:h-12 "
                    alt="El-Aqsho Logo">

                <h1 class="text-xl font-bold text-center absolute left-1/2 -translate-x-2/4">Formulir<Br> Pendaftaran
                </h1>
                <p></p>

            </div>
            <div class="flex flex-col items-center justify-center mt-4">
                <ol class="flex items-center justify-center w-96 mb-4 sm:mb-5">
                    <!-- Langkah Pertama -->
                    <li class="flex flex-col w-full items-center text-blue-600 dark:text-blue-500 relative">
                        <div class="flex">
                            <div
                                class="z-20 flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
                                <svg class="w-4 h-4 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                    <path
                                        d="M18 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM6.5 3a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3.014 13.021l.157-.625A3.427 3.427 0 0 1 6.5 9.571a3.426 3.426 0 0 1 3.322 2.805l.159.622-6.967.023ZM16 12h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Z" />
                                </svg>
                            </div>
                            <span id="step-0"
                                class="z-10 absolute top-1/3 right-0 w-1/2 h-1 bg-yellow-primary dark:bg-yellow-primary -translate-y-1/2"></span>
                        </div>
                        <p class="mt-2 text-xs font-bold text-center text-gray-700 dark:text-gray-300">Data Diri Jama’ah
                        </p>
                    </li>

                    <!-- Langkah Kedua -->
                    <li class="flex flex-col w-full items-center justify-center relative">
                        <div class="flex justify-between">
                            <span id="step-1"
                                class="z-10 absolute top-1/3 left-0 w-1/2 h-1 bg-gray-100 dark:bg-gray-700 -translate-y-1/2"></span>
                            <div
                                class="z-20 flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                                <svg class="w-4 h-4 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                    <path
                                        d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM2 12V6h16v6H2Z" />
                                    <path
                                        d="M6 8H4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2Zm8 0H9a1 1 0 0 0 0 2h5a1 1 0 1 0 0-2Z" />
                                </svg>
                            </div>
                            <span id="step-1"
                                class="z-10 absolute top-1/3 left-0 w-1/2 h-1 bg-gray-100 dark:bg-gray-700 -translate-y-1/2"></span>

                        </div>
                        <p class="mt-2 text-xs font-bold text-center text-gray-700 dark:text-gray-300">Alamat Domisli
                        </p>
                    </li>

                    <!-- Langkah Ketiga -->
                    <li class="flex flex-col items-center w-full justify-end relative">
                        <div class="flex">
                            <span id="step-2"
                                class="z-10 absolute top-1/3 left-0 w-1/2 h-1 bg-gray-100 dark:bg-gray-700 -translate-y-1/2"></span>
                            <div
                                class="z-20 flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                                <svg class="w-4 h-4 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                    <path
                                        d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2ZM7 2h4v3H7V2Zm5.7 8.289-3.975 3.857a1 1 0 0 1-1.393 0L5.3 12.182a1.002 1.002 0 1 1 1.4-1.436l1.328 1.289 3.28-3.181a1 1 0 1 1 1.392 1.435Z" />
                                </svg>
                            </div>
                        </div>
                        <p class="mt-2 text-xs font-bold text-center text-gray-700 dark:text-gray-300">Pilih Paket</p>
                    </li>
                </ol>

                <form action="#" class="mt-8 w-full">
                    <div class="mx-14">
                        <div id="tab-0">
                            <h3 class="mb-4 font-bold text-sm  leading-none text-gray-900 dark:text-white">Identitas
                                Jama’ah</h3>
                            <div class="mb-4">
                                <label for="username"
                                    class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Nama Sesuai
                                    KTP</label>
                                <input type="text" name="username" id="username"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukkan Nama Lengkap Anda" required="">
                            </div>
                            <div class="mb-4">
                                <label for="username"
                                    class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">No
                                    HP Aktif </label>
                                <input type="text" name="username" id="username"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="cth: 6287840122213" required="">
                            </div>
                            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                <div>
                                    <label for="username"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Tempat
                                        Lahir</label>
                                    <input type="text" name="username" id="username"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="username.example" required="">
                                </div>
                                <div>
                                    <label for="email"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Tanggal
                                        Lahir</label>
                                    <input type="email" name="email" id="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="name@company.com" required="">
                                </div>
                                <div>
                                    <label for="password"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Nomer Induk
                                        Kependudukan (NIK)</label>
                                    <input type="password" name="password" id="password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="•••••••••" required="">
                                </div>
                                <div>
                                    <label for="confirm-password"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Nomer Kartu
                                        Keluarga (NKK)</label>
                                    <input type="password" name="confirm-password" id="confirm-password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="•••••••••" required="">
                                </div>
                                <div>
                                    <label for="password"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Status
                                        Pernikahan</label>
                                    <input type="password" name="password" id="password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="•••••••••" required="">
                                </div>
                                <div>
                                    <label for="confirm-password"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Jenis
                                        Kelamin</label>
                                    <div class="flex items-center space-x-4">
                                        <label class="flex items-center">
                                            <input type="radio" name="jenis-kelamin" value="Laki-laki"
                                                class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                                            <span class="ml-2 text-sm text-gray-900 dark:text-white">Laki-laki</span>
                                        </label>
                                        <label class="flex items-center">
                                            <input type="radio" name="jenis-kelamin" value="Perempuan"
                                                class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                                            <span class="ml-2 text-sm text-gray-900 dark:text-white">Perempuan</span>
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <label for="password"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Pekerjaan</label>
                                    <input type="password" name="password" id="password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="•••••••••" required="">
                                </div>
                                <div>
                                    <label for="confirm-password"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Riwayat
                                        Pendidikan</label>
                                    <input type="password" name="confirm-password" id="confirm-password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-offset-yellow-primary focus:border-yellow-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-primary dark:focus:border-yellow-primary"
                                        placeholder="•••••••••" required="">
                                </div>
                                <div>
                                    <label for="confirm-password"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Nama
                                        Ayah</label>
                                    <input type="password" name="confirm-password" id="confirm-password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-offset-yellow-primary focus:border-yellow-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-primary dark:focus:border-yellow-primary"
                                        placeholder="•••••••••" required="">
                                </div>
                            </div>
                            <div class="flex justify-end mb-14">
                                <button type="submit" id="nextButton" onclick="nextTab(event, 1)"
                                    class="text-white bg-yellow-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Simpan & Lanjutkan
                                </button>

                            </div>
                        </div>
                        <div id="tab-1" hidden>
                            <h3 class="mb-4 font-bold text-sm  leading-none text-gray-900 dark:text-white">Alamat
                                Domisili </h3>
                            <div class="mb-4">
                                <label for="username"
                                    class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Alamat Sesuai
                                    KTP</label>
                                <input type="text" name="username" id="username"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukkan Nama Lengkap Anda" required="">
                            </div>
                            <div class="mb-4">
                                <label for="username"
                                    class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Pilih
                                    Provinsi</label>
                                <input type="text" name="username" id="username"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukkan Nama Lengkap Anda" required="">
                            </div>
                            <div class="mb-4">
                                <label for="username"
                                    class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Kabupaten/Kota</label>
                                <input type="text" name="username" id="username"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukkan Nama Lengkap Anda" required="">
                            </div>
                            <div class="mb-4">
                                <label for="username"
                                    class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Kecamatan</label>
                                <input type="text" name="username" id="username"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukkan Nama Lengkap Anda" required="">
                            </div>
                            <div class="mb-4">
                                <label for="username"
                                    class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Kelurahan</label>
                                <input type="text" name="username" id="username"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukkan Nama Lengkap Anda" required="">
                            </div>
                            <div class="mb-4">
                                <label for="username"
                                    class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Email</label>
                                <input type="text" name="username" id="username"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukkan Nama Lengkap Anda" required="">
                            </div>

                            <div class="flex justify-end mb-14">
                                <button type="submit" id="prevButton" onclick="beforeTab(event, 2)"
                                    class="mr-1 text-white bg-gray-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    kembali
                                </button>
                                <button type="submit" id="nextButton" onclick="nextTab(event, 2)"
                                    class="text-white bg-yellow-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Simpan & Lanjutkan
                                </button>

                            </div>
                        </div>
                        <div id="tab-2" hidden>
                            <h3 class="mb-4 font-bold text-sm  leading-none text-gray-900 dark:text-white">Program</h3>
                            <div class="mb-4">
                                <label for="username"
                                    class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Nama Sesuai
                                    KTP</label>
                                <input type="text" name="username" id="username"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukkan Nama Lengkap Anda" required="">
                            </div>
                            <div class="mb-4">
                                <label for="username"
                                    class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">No
                                    HP Aktif </label>
                                <input type="text" name="username" id="username"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="cth: 6287840122213" required="">
                            </div>
                            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                <div>
                                    <label for="username"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Tempat
                                        Lahir</label>
                                    <input type="text" name="username" id="username"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="username.example" required="">
                                </div>
                                <div>
                                    <label for="email"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Tanggal
                                        Lahir</label>
                                    <input type="email" name="email" id="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="name@company.com" required="">
                                </div>
                                <div>
                                    <label for="password"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Nomer Induk
                                        Kependudukan (NIK)</label>
                                    <input type="password" name="password" id="password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="•••••••••" required="">
                                </div>
                                <div>
                                    <label for="confirm-password"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Nomer Kartu
                                        Keluarga (NKK)</label>
                                    <input type="password" name="confirm-password" id="confirm-password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="•••••••••" required="">
                                </div>
                                <div>
                                    <label for="password"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Status
                                        Pernikahan</label>
                                    <input type="password" name="password" id="password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="•••••••••" required="">
                                </div>
                                <div>
                                    <label for="confirm-password"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Jenis
                                        Kelamin</label>
                                    <div class="flex items-center space-x-4">
                                        <label class="flex items-center">
                                            <input type="radio" name="jenis-kelamin" value="Laki-laki"
                                                class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                                            <span class="ml-2 text-sm text-gray-900 dark:text-white">Laki-laki</span>
                                        </label>
                                        <label class="flex items-center">
                                            <input type="radio" name="jenis-kelamin" value="Perempuan"
                                                class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                                            <span class="ml-2 text-sm text-gray-900 dark:text-white">Perempuan</span>
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <label for="password"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Pekerjaan</label>
                                    <input type="password" name="password" id="password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="•••••••••" required="">
                                </div>
                                <div>
                                    <label for="confirm-password"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Riwayat
                                        Pendidikan</label>
                                    <input type="password" name="confirm-password" id="confirm-password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-offset-yellow-primary focus:border-yellow-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-primary dark:focus:border-yellow-primary"
                                        placeholder="•••••••••" required="">
                                </div>
                                <div>
                                    <label for="confirm-password"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Nama
                                        Ayah</label>
                                    <input type="password" name="confirm-password" id="confirm-password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-offset-yellow-primary focus:border-yellow-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-primary dark:focus:border-yellow-primary"
                                        placeholder="•••••••••" required="">
                                </div>
                            </div>
                            <div class="flex justify-end mb-14">
                                <button type="submit" id="prevButton" onclick="beforeTab(event, 3)"
                                    class="mr-1 text-white bg-gray-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    kembali
                                </button>
                                <button type="submit" id="nextButton" onclick="nextTab(event, 3)"
                                    class="text-white bg-yellow-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Daftar Sekarang
                                </button>

                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>

</body>

</html>