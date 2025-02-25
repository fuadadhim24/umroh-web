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
            for (let i = 0; i <= 2; i++) {
                const stepElement = document.getElementById('step-' + i);
                const stepElementPlus = document.getElementById('step-' + (i + 1));
                const stepElementThree = document.getElementById('step-' + 3);
                const stepElementOne = document.getElementById('step-' + 0);
                const iconElement = document.getElementById('ic_' + i);

                if (i < tabIndex) {
                    stepElement.classList.remove('bg-gray-100');
                    stepElement.classList.add('bg-yellow-primary');
                    stepElementPlus.classList.remove('bg-gray-100');
                    stepElementPlus.classList.add('bg-yellow-primary');
                    iconElement.classList.remove('text-blue-600');
                    iconElement.classList.add('text-yellow-primary');
                } else if (i === tabIndex) {
                    stepElement.classList.remove('bg-gray-100');
                    stepElement.classList.add('bg-yellow-primary');
                    stepElementPlus.classList.remove('bg-gray-100');
                    stepElementPlus.classList.add('bg-yellow-primary');
                    iconElement.classList.remove('text-blue-600');
                    iconElement.classList.add('text-yellow-primary');
                } else {
                    stepElement.classList.remove('bg-yellow-primary');
                    stepElement.classList.add('bg-gray-100');
                    stepElementThree.classList.remove('bg-yellow-primary');
                    stepElementThree.classList.add('bg-gray-100');
                    iconElement.classList.remove('text-yellow-primary');
                    iconElement.classList.add('text-blue-600');
                    if (tabIndex == 0) {
                        stepElementOne.classList.remove('bg-yellow-primary');
                        stepElementOne.classList.add('bg-gray-100');
                    }
                }
            }
        }

        function updateStepperBefore(tabIndex) {
            updateStepper(tabIndex - 1);
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

            const passportStatus = document.getElementById('passport_status').value;
            const passportNameContainer = document.getElementById('passport_name_container');
            const passportNumberContainer = document.getElementById('passport_number_container');
            const passportIssueDateContainer = document.getElementById('passport_issue_date_container');
            const passportExpiryDateContainer = document.getElementById('passport_expiry_date_container');
            const passportPermintaan = document.getElementById('permintaan');

            const currentTabInputs = document.querySelectorAll(
                `#tab-${currentTab} input[required]:not(#email):not(#notes):not(#paket), #tab-${currentTab} select[required]`
            );
            let allFilled = true;

            currentTabInputs.forEach(input => {
                const inputContainer = input.closest("div");
                console.log(inputContainer);
                const isHidden = inputContainer && getComputedStyle(inputContainer).display === "none";

                console.log(isHidden);

                if (!isHidden) {
                    if (!input.value) {
                        console.log(input);
                        allFilled = false;
                        input.classList.add('border-red-500');
                    } else {
                        input.classList.remove('border-red-500');
                    }
                }
            });

            if (!allFilled) {
                alert('Silakan isi semua field yang diperlukan sebelum melanjutkan.');
                return;
            }

            if (tabIndex < 3) {
                currentTab = tabIndex;
                showTab(currentTab);
                updateStepper(currentTab);
            } else {
                // alert('Form submitted!');
                document.querySelector('form').submit();
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

            function togglePassportFields() {
                // alert("Hallo");
                const passportStatus = document.getElementById('passport_status').value;
                const passportNameContainer = document.getElementById('passport_name_container');
                const passportNumberContainer = document.getElementById('passport_number_container');
                const passportIssueDateContainer = document.getElementById('passport_issue_date_container');
                const passportExpiryDateContainer = document.getElementById('passport_expiry_date_container');
                const passportPermintaan = document.getElementById('permintaan');

                if (passportStatus === '1') {
                    passportNameContainer.style.display = 'block';
                    passportNumberContainer.style.display = 'block';
                    passportIssueDateContainer.style.display = 'block';
                    passportExpiryDateContainer.style.display = 'block';
                    passportPermintaan.style.display = 'none';
                } else {
                    passportNameContainer.style.display = 'none';
                    passportNumberContainer.style.display = 'none';
                    passportIssueDateContainer.style.display = 'none';
                    passportExpiryDateContainer.style.display = 'none';
                    passportPermintaan.style.display = 'block';
                }
            }

            function toggleAgen() {
                // alert("Hallo");
                const sourceOfInformation = document.getElementById('source_of_information').value;
                const agentNumber = document.getElementById('agent_number');


                if (sourceOfInformation === 'agen') {
                    // alert(sourceOfInformation);
                    agentNumber.style.display = 'block';
                } else {
                    agentNumber.style.display = 'none';
                }
            }

        

        showTab(currentTab);
        updateStepper(currentTab);
    </script>
</head>

<body>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('passport_status').addEventListener('change', togglePassportFields);
            document.getElementById('source_of_information').addEventListener('change', toggleAgen);
            const requiredInputs = document.querySelectorAll('input[required], select[required]');
            requiredInputs.forEach(input => {
                input.addEventListener('input', function () {
                    if (input.value) {
                        input.classList.remove('border-red-500');
                    }
                });
            });

            const paketSelect = document.getElementById('id_paket');
            const paketDescription = document.getElementById('paket_description');
            const paketPrice = document.getElementById('paket_price');

            paketSelect.addEventListener('change', function () {

                const selectedOption = paketSelect.options[paketSelect.selectedIndex];
                const description = selectedOption.getAttribute('data-description');
                const price = selectedOption.getAttribute('data-price');
                // alert(description);

                if (selectedOption.value) {
                    paketDescription.textContent = description;
                    paketPrice.textContent = price;
                    paketDescription.classList.remove('hidden');
                    paketPrice.classList.remove('hidden');
                } else {
                    paketDescription.classList.add('hidden');
                    paketPrice.classList.add('hidden');
                }
            });
        });
    </script>
    <section class=" w-screen bg-gray-200 p-8 pr-10">
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
                                <svg id='ic_0' class="w-4 h-4 text-yellow-primary lg:w-6 lg:h-6 dark:text-blue-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                    <path
                                        d="M18 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM6.5 3a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3.014 13.021l.157-.625A3.427 3.427 0 0 1 6.5 9.571a3.426 3.426 0 0 1 3.322 2.805l.159.622-6.967.023ZM16 12h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Z" />
                                </svg>
                            </div>
                            <span id="step-0"
                                class="z-10 absolute top-1/3 right-0 w-1/2 h-1 bg-gray-100 dark:bg-yellow-primary -translate-y-1/2"></span>
                        </div>
                        <p class="mt-2 text-xs font-bold text-center text-gray-700 dark:text-gray-300">Data Diri Jama’ah
                        </p>
                    </li>

                    <!-- Langkah Kedua -->
                    <li class="flex flex-col w-full items-center justify-center relative">
                        <div class="flex justify-between">
                            <span id="step-1"
                                class="z-10 absolute top-1/3 left-0 w-1/2 h-1 bg-gray-100 text-gray-700 dark:text-gray-300 -translate-y-1/2"></span>
                            <div
                                class="z-20 flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                                <svg id='ic_1' class="w-4 h-4 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                    <path
                                        d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM2 12V6h16v6H2Z" />
                                    <path
                                        d="M6 8H4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2Zm8 0H9a1 1 0 0 0 0 2h5a1 1 0 1 0 0-2Z" />
                                </svg>
                            </div>
                            <span id="step-2"
                                class="z-10 absolute top-1/3 right-0 w-1/2 h-1 bg-gray-100 text-gray-700 dark:text-gray-300 -translate-y-1/2"></span>
                        </div>
                        <p class="mt-2 text-xs font-bold text-center text-gray-700 dark:text-gray-300">Alamat Domisli
                        </p>
                    </li>

                    <!-- Langkah Ketiga -->
                    <li class="flex flex-col items-center w-full justify-end relative">
                        <div class="flex">
                            <span id="step-3"
                                class="z-10 absolute top-1/3 left-0 w-1/2 h-1 text-gray-700 bg-gray-100 dark:text-gray-300 -translate-y-1/2"></span>
                            <div
                                class="z-20 flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                                <svg id='ic_2' class="w-4 h-4 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                    <path
                                        d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2ZM7 2h4v3H7V2Zm5.7 8.289-3.975 3.857a1 1 0 0 1-1.393 0L5.3 12.182a1.002 1.002 0 1 1 1.4-1.436l1.328 1.289 3.28-3.181a1 1 0 1 1 1.392 1.435Z" />
                                </svg>
                            </div>
                        </div>
                        <p class="mt-2 text-xs font-bold text-center text-gray-700 dark:text-gray-300">Pilih Paket</p>
                    </li>
                </ol>

                <form class="mt-8 w-full" action="{{ route('pendaftaran-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mx-14">
                        <div id="tab-0">
                            <h3 class="mb-4 font-bold text-sm  leading-none text-gray-900 dark:text-white">Identitas
                                Jama’ah</h3>
                            <div class="mb-4">
                                <label for="username"
                                    class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                        class="text-red-600">*</span>Nama Sesuai
                                    KTP</label>
                                <input type="text" name="full_name" id="username"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukkan Nama Lengkap Anda" required="">
                            </div>
                            <div class="mb-4">
                                <label for="username"
                                    class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                        class="text-red-600">*</span>No
                                    HP Aktif </label>
                                <input type="text" name="phone_number" id="username"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="cth: 6287840122213" required="">
                            </div>
                            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                <div>
                                    <label for="username"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Tempat
                                        Lahir</label>
                                    <input type="text" name="username" id="username"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="cth: Surabaya" required="">
                                </div>
                                <div>
                                    <label for="email"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Tanggal
                                        Lahir</label>
                                    <input type="date" name="date_of_birth" id="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required="">
                                </div>
                                <div>
                                    <label for="nik" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Nomer Induk
                                        Kependudukan (NIK)</label>
                                    <input type="text" name="national_id_number" id="password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="cth: 351622912321131" required="">
                                </div>
                                <div>
                                    <label for="no_kk" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Nomer Kartu keluarga (No KK)</label>
                                    <input type="text" name="family_id_number" id="no_kk"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="cth: 35128225661777" required="">
                                    </div>
                                    <div class="mb-4">
                                        <label for="gender" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                                class="text-red-600">*</span>Jenis Kelamin</label>
                                        <select name="gender" id="gender"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    {{-- <div>
                                    <label for="confirm-password"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Nomer Kartu
                                        Keluarga (NKK)</label>
                                    <input type="text" name="nkk" id="confirm-password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="cth: 351622912321131" required="">
                                </div> --}}
                                <div class="mb-4">
                                    <label for="marital_status"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Status
                                        Pernikahan</label>
                                    <select name="marital_status" id="marital_status"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                        <option value="Sudah Menikah">Sudah Menikah</option>
                                        <option value="Belum Menikah">Belum Menikah</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="password"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Status
                                        Pernikahan</label>
                                    <input type="text" name="marital_status" id="password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="cth: Belum Menikah" required="">
                                </div>
                                {{-- <div>
                                    <label for="confirm-password"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Jenis
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
                                </div> --}}
                                <div>
                                    <label for="password"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Pekerjaan</label>
                                    <input type="text" name="occupation" id="password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="cth: Buruh Tani" required="">
                                </div>
                                {{-- <div>
                                    <label for="confirm-password"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Riwayat
                                        Pendidikan</label>
                                    <input type="text" name="confirm-password" id="confirm-password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-offset-yellow-primary focus:border-yellow-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-primary dark:focus:border-yellow-primary"
                                        placeholder="cth: SMA/SLTA Sederajat" required="">
                                </div> --}}
                                <div>
                                    <label for="confirm-password"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Nama
                                        Ayah</label>
                                    <input type="text" name="father_name" id="confirm-password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-offset-yellow-primary focus:border-yellow-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-primary dark:focus:border-yellow-primary"
                                        placeholder="cth: Bambang Prasetyo" required="">
                                </div>
                            </div>
                            <div class="flex justify-end mb-14">
                                <button id="nextButton" onclick="nextTab(event, 1)"
                                    class="text-white bg-yellow-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Lanjutkan
                                </button>

                            </div>
                        </div>
                        <div id="tab-1" hidden>
                            <h3 class="mb-4 font-bold text-sm leading-none text-gray-900 dark:text-white">Alamat
                                Domisili</h3>
                            <div class="mb-4">
                                <label for="address" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                        class="text-red-600">*</span>Alamat</label>
                                <input type="text" name="address" id="address"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="cth  Jl. Jayanegara No.33, Patimura, Jember Kidul, Kec. Kaliwates, Kabupaten Jember, Jawa Timur 68131"
                                    required>
                            </div>
                            <div class="mb-4">
                                <label for="province" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                        class="text-red-600">*</span>Provinsi</label>
                                <input type="text" name="province" id="province"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2. 5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="cth: Jawa Timur" required>
                            </div>
                            <div class="mb-4">
                                <label for="city_regency" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                        class="text-red-600">*</span>Kota/Kabupaten</label>
                                <input type="text" name="city_regency" id="city_regency"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="cth: Jember" required>
                            </div>
                            <div class="mb-4">
                                <label for="district" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                        class="text-red-600">*</span>Kecamatan</label>
                                <input type="text" name="district" id="district"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="cth: Sumbersari" required>
                            </div>
                            <div class="mb-4">
                                <label for="sub_district_village" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                        class="text-red-600">*</span>Kelurahan/Desa</label>
                                <input type="text" name="sub_district_village" id="sub_district_village"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="cth: Kemlagi" required>
                            </div>
                            <div class="mb-4">
                                <label for="email"
                                    class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Email</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="cth: alfi@gmail.com" required>
                            </div>

                            <div class="flex justify-end mb-14">
                                <button id="prevButton" onclick="beforeTab(event, 2)"
                                    class="mr-1 text-white bg-gray-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    kembali
                                </button>
                                <button id="nextButton" onclick="nextTab(event, 2)"
                                    class="text-white bg-yellow-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Lanjutkan
                                </button>

                            </div>
                        </div>
                        <div id="tab-2" hidden>
                            <h3 class="mb-4 font-bold text-sm  leading-none text-gray-900 dark:text-white">Program</h3>
                            {{-- <div class="mb-4">
                                <label for="username"
                                    class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                        class="text-red-600">*</span>Nama Sesuai
                                    KTP</label>
                                <input type="text" name="username" id="username"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukkan Nama Lengkap Anda" required="">
                            </div> --}}
                            {{-- <div class="mb-4">
                                <label for="username"
                                    class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                        class="text-red-600">*</span>No
                                    HP Aktif </label>
                                <input type="text" name="username" id="username"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="cth: 6287840122213" required="">
                            </div> --}}
                            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                <div class="mb-4">
                                    <label for="passport_status" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Status
                                        Paspor</label>
                                    <select name="passport_status" id="passport_status"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                        <option value="1">Aktif</option>
                                        <option value="0">Tidak Aktif</option>
                                    </select>
                                </div>
                                <div class="mb-4" id="passport_name_container" style="">
                                    <label for="nama_sesuai_paspor" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Nama Sesuai
                                        Paspor</label>
                                    <input type="text" name="nama_sesuai_paspor" id="nama_sesuai_paspor"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Masukkan Nama Sesuai Paspor" required>
                                </div>
                                <div class="mb-4" id="passport_number_container" style="">
                                    <label for="nomor_paspor" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Nomor
                                        Paspor</label>
                                    <input type="text" name="nomor_paspor" id="nomor_paspor"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Masukkan Nomor Paspor" required>
                                </div>
                                <div class="mb-4" id="passport_issue_date_container" style="">
                                    <label for="tanggal_issued_paspor" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Tanggal
                                        Terbit Paspor</label>
                                    <input type="date" name="tanggal_issued_paspor" id="tanggal_issued_paspor"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                </div>
                                <div class="mb-4" id="passport_expiry_date_container" style="">
                                    <label for="tanggal_expired" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Tanggal
                                        Expired Paspor</label>
                                    <input type="date" name="tanggal_expired" id="tanggal_expired"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                </div>
                                <div class="mb-4" id="passport_request_container" id="permintaan" style="display: none;">
                                    <label for="permintaan" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Permintaan
                                        Paspor</label>
                                    <select name="permintaan"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                        <option value="jasa el-aqsho">Jasa El-Aqsho</option>
                                        <option value="urus sendiri">Urus Sendiri</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="meningitis_vaccine_status" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Status
                                        Vaksin Meningitis</label>
                                    <div class="flex items-center space-x-4">
                                        <label class="flex items-center">
                                            <input type="radio" name="meningitis_vaccine_status" value="1"
                                                class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                                            <span class="ml-2 text-sm text-gray-900 dark:text-white">Sudah</span>
                                        </label>
                                        <label class="flex items-center">
                                            <input type="radio" name="meningitis_vaccine_status" value="0"
                                                class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                                            <span class="ml-2 text-sm text-gray-900 dark:text-white">Belum</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="source_of_information" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Sumber
                                        Informasi</label>
                                    <select name="source_of_information" id="source_of_information"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue- 600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                        <option value="facebook">Facebook</option>
                                        <option value="instagram">Instagram</option>
                                        <option value="tiktok">Tiktok</option>
                                        <option value="brosur">Brosur</option>
                                        <option value="google">Google</option>
                                        <option value="agen">Agen</option>
                                        <option value="keluarga">Keluarga</option>
                                        <option value="teman">Teman</option>
                                    </select>
                                </div>
                                <div class="mb-4" id="agent_number" style="display: none;">
                                    <label for="agent_number" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Nomor
                                        Agen</label>
                                    <input type="text" name="agent_number"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Masukkan Nomor Agen" required>
                                </div>
                                <div class="mb-4">
                                    <label for="image" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Foto
                                        Pendaftar</label>
                                
                                    <input
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-full cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        name="image" id="file_input" type="file">
                                
                                </div>
                                <div class="mb-4">
                                    <label for="id_paket" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Pilih
                                        Paket</label>
                                    <select name="id_paket" id="id_paket"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                        <option value="">Tidak Memilih</option>
                                        @foreach ($paket as $item)
                                            <option value="{{ $item->id }}"
                                                data-description="{{ $item->short_description }}"
                                                data-price="{{ number_format($item->price, 2) }}"
                                                >{{ $item->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    {{-- <h2 id="paket_price" class="hidden text-lg text-gray-700 font-bold mt-2"> --}}
                                        <p id="paket_description" class="hidden text-gray-700 font-bold text-sm mt-8"></p>
                                        <h2 id="paket_price" class="hidden text-lg text-yellow-primary font-bold mt-2">
                                    </h2>
                                </div>
                                <div class="mb-4">
                                    <label for="notes" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Catatan</label>
                                    <textarea name="notes" id="notes"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Masukkan Catatan"></textarea>
                                </div>
                            </div>
                            <div class="w-full">
                                <h3 class="text-end font-bold text-gray-700">"Dengan mengucap
                                    Bismillahirrohmanirrohim,<br>
                                    saya mendaftarkan diri ikut program umroh El-Aqsho Group."</h3>
                            </div>
                            <div class="flex justify-end mb-14 mt-8">
                                <button id="prevButton" onclick="beforeTab(event, 3)"
                                    class="mr-1 text-white bg-gray-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    kembali
                                </button>
                                <button data-modal-target="default-modal" data-modal-toggle="default-modal" type="button" id="nextButton"
                                    class="text-white bg-yellow-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Daftar Sekarang
                                </button>

                            </div>
                        </div>
                    </div>
                    <!-- Main modal -->
                    <div id="default-modal" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Terms of Service
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="default-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        With less than a month to go before the European Union enacts new consumer
                                        privacy laws for its citizens, companies around the world are updating their
                                        terms of service agreements to comply.
                                    </p>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into
                                        effect on May 25 and is meant to ensure a common set of data rights in the
                                        European Union. It requires organizations to notify users as soon as possible of
                                        high-risk data breaches that could personally affect them.
                                    </p>
                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button data-modal-hide="default-modal" onclick="nextTab(event, 3)" type="submit"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                                        accept</button>
                                    <button data-modal-hide="default-modal" type="button"
                                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </section>

</body>

</html>
