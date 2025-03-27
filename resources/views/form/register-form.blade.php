<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" href="{{ asset('resources/images/lp-main/al-aqsha.png') }}" type="image/icon type">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                    iconElement.classList.remove('text-red-primary');
                    iconElement.classList.add('text-yellow-primary');
                } else if (i === tabIndex) {
                    stepElement.classList.remove('bg-gray-100');
                    stepElement.classList.add('bg-yellow-primary');
                    stepElementPlus.classList.remove('bg-gray-100');
                    stepElementPlus.classList.add('bg-yellow-primary');
                    iconElement.classList.remove('text-red-primary');
                    iconElement.classList.add('text-yellow-primary');
                } else {
                    stepElement.classList.remove('bg-yellow-primary');
                    stepElement.classList.add('bg-gray-100');
                    stepElementThree.classList.remove('bg-yellow-primary');
                    stepElementThree.classList.add('bg-gray-100');
                    iconElement.classList.remove('text-yellow-primary');
                    iconElement.classList.add('text-red-primary');
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
            const passportReq = document.getElementById('paspor_permintaan');

            const currentTabInputs = document.querySelectorAll(
                `#tab-${currentTab} input[required]:not(#email):not(#notes):not(#paket), #tab-${currentTab} select[required]:not(#program_choice)`
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
                // alert('Silakan isi semua field yang diperlukan sebelum melanjutkan.');
                Swal.fire({
                    icon: 'warning',
                    title: 'Perhatian!',
                    text: 'Silakan isi semua field yang diperlukan sebelum melanjutkan.',
                });
                return;
            }

            if (tabIndex < 3) {
                currentTab = tabIndex;
                showTab(currentTab);
                updateStepper(currentTab);
            } else {
                Swal.showLoading();

                const formData = new FormData(document.querySelector('form'));

                fetch('{{ route('pendaftaran-store') }}', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        Swal.close();
                        if (data.message == 'Pendaftaran berhasil dilakukan!') {
                            const nama = document.getElementById('username').value;
                            const programChoice = document.getElementById('program_choice')
                            .value;
                            const selectedPackage = document.querySelector('#paket_list option:checked')
                            .text;
                            const createdAt = new Date().toLocaleDateString();

                            const message = `
                                Assalamu'alaikum saya,
                                Nama: ${nama},
                                Kategori Paket: ${programChoice},
                                Paket yang dipilih: ${selectedPackage},
                                Tanggal pemesanan: ${createdAt},
                                telah mendaftar paket pada El-Aqsho mohon untuk dimasukkan grup🙏.
                            `;

                            const encodedMessage = encodeURIComponent(message);
                            const whatsappUrl = `https://wa.me/6285157482088?text=${encodedMessage}`;


                            Swal.fire({
                                title: "Sukses!",
                                icon: "success",
                                allowOutsideClick: false,
                                html: `
                                    <b>Alhamdulillah anda berhasil terdaftar!</b> Anda akan segera dihubungi bergabung dengan grup keberangkatan atau bisa konfirmasi langsung melalui nomor berikut <br>
                                    <a style="color: #24d265; text-decoration: none;" href="${whatsappUrl}" target="_blank" rel="noopener noreferrer">
                                        <span style="display: inline-flex; align-items: center; gap: 5px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#24d265" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                                            </svg>
                                            CS El-Aqsho
                                        </span>
                                    </a>
                                `,
                                focusConfirm: true,
                                confirmButtonColor: "#3085d6",
                                confirmButtonText: "Kembali ke beranda"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "{{ route('dashboard') }}";
                                }
                            });
                        } else if (data.message == 'The POST data is too large' || data.message ==
                            'The image failed to upload.') {
                            console.log(data.message);
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                html: `Terjadi kesalahan saat menyimpan data! Foto terlalu besar<br> Silakan unggah kembali foto berukuran maksimal 2MB. <br> Apabila masih mengalami masalah, mohon hubungi ke  
                                    <a class="text-red-primary" href="http://wa.me/6282141297588" target="_blank" rel="noopener noreferrer">CS El-Aqsho</a> berikut`,
                            });
                        } else if (data.message == 'Anda belum mengunggah foto! Silakan unggah foto terlebih dahulu.') {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Oops...',
                                html: `${data.message}<br> Apabila masih mengalami masalah, mohon hubungi ke
                                    <a class="text-red-primary" href="http://wa.me/6282141297588" target="_blank" rel="noopener noreferrer">CS El-Aqsho</a> berikut`,
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                html: `Terjadi kesalahan saat menyimpan data! ${data.message}<br> Mohon laporkan ke 
                                    <a class="text-red-primary" href="http://wa.me/6282141297588" target="_blank" rel="noopener noreferrer">CS El-Aqsho</a> berikut`,
                            });
                        }

                    })
                    .catch(error => {
                        Swal.close();
                        console.error('Error:', error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Terjadi kesalahan saat menyimpan data!',
                        });
                    });
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
            const passportReq = document.getElementById('paspor_permintaan');
            const meningitisVaccineStatus = document.getElementById('meningitis_vaccine_status');

            if (passportStatus === '1') {
                passportNameContainer.style.display = 'block';
                passportNumberContainer.style.display = 'block';
                passportIssueDateContainer.style.display = 'block';
                passportExpiryDateContainer.style.display = 'block';
                meningitisVaccineStatus.style.display = 'block';
                passportReq.style.display = 'none';
            } else {
                passportNameContainer.style.display = 'none';
                passportNumberContainer.style.display = 'none';
                passportIssueDateContainer.style.display = 'none';
                passportExpiryDateContainer.style.display = 'none';
                meningitisVaccineStatus.style.display = 'none';
                passportReq.style.display = 'block';
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

        function toggleProgram() {
            const programChoice = document.getElementById('program_choice').value;
            const paketSelect = document.getElementById('paket_select');
            const hajiSelect = document.getElementById('haji_select');
            const badalSelect = document.getElementById('badal_select');
            const paketPrice = document.getElementById('paket_price');

            paketPrice.classList.add('hidden');


            if (programChoice === 'haji') {
                hajiSelect.style.display = 'block';
                badalSelect.style.display = 'none';
                paketSelect.style.display = 'none';
            } else if (programChoice === 'badal') {
                badalSelect.style.display = 'block';
                hajiSelect.style.display = 'none';
                paketSelect.style.display = 'none';
            } else if (programChoice === 'paket') {
                paketSelect.style.display = 'block';
                hajiSelect.style.display = 'none';
                badalSelect.style.display = 'none';
            } else {
                paketSelect.style.display = 'none';
                hajiSelect.style.display = 'none';
                badalSelect.style.display = 'none';
            }
        }



        showTab(currentTab);
        updateStepper(currentTab);
    </script>
    <style>
        .responsive-margin {
            margin-right: 24px; /* Default margin */
        }
    
        @media (max-width: 768px) {
            .responsive-margin {
                margin-right:04px; /* Margin for screens smaller than 768px */
            }
        }
    </style>
</head>

<body>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('passport_status').addEventListener('change', togglePassportFields);
            document.getElementById('source_of_information').addEventListener('change', toggleAgen);
            const requiredInputs = document.querySelectorAll('input[required], select[required]');
            requiredInputs.forEach(input => {
                input.addEventListener('input', function() {
                    if (input.value) {
                        input.classList.remove('border-red-500');
                    }
                });
            });
            document.getElementById('program_choice').addEventListener('change', toggleProgram);

            const hajiSelect = document.getElementById('haji_list');
            const umrohSelect = document.getElementById('paket_list');
            const badalSelect = document.getElementById('badal_list');
            const paketDescription = document.getElementById('paket_description');
            const paketPrice = document.getElementById('paket_price');

            // Function to update the package description and price
            function updatePackageInfo(selectElement) {
                const selectedOption = selectElement.options[selectElement.selectedIndex];
                const description = selectedOption.getAttribute('data-description');
                const price = selectedOption.getAttribute('data-price');

                if (selectedOption.value) {
                    paketDescription.textContent = description;
                    paketPrice.textContent = 'Harga Paket: ' + price;
                    paketDescription.classList.remove('hidden');
                    paketPrice.classList.remove('hidden');
                } else {
                    paketDescription.classList.add('hidden');
                    paketPrice.classList.add('hidden');
                }
            }

            // Add change event listeners for all package selects
            hajiSelect.addEventListener('change', function() {
                updatePackageInfo(hajiSelect);
            });

            umrohSelect.addEventListener('change', function() {
                updatePackageInfo(umrohSelect);
            });

            badalSelect.addEventListener('change', function() {
                updatePackageInfo(badalSelect);
            });

        });
    </script>
    <section class=" w-screen bg-gray-200 p-8 pr-0 md:pr-10">
        <div class="bg-white w-full h-full rounded-xl shadow-2xl">
            <div class="flex flex-col md:flex-row justify-center md:justify-between p-4 relative md:pr-4">
                <img src="{{ asset('resources/images/lp-main/al-aqsha-horizontal.png') }}" class="h-8 lg:h-12 w-20 md:w-auto "
                    alt="El-Aqsho Logo">

                    <h1 class="text-xl font-bold text-center">Formulir<Br>
                        Pendaftaran
                    </h1>
                    <p class="w-24 mr-2 md:mr-4 responsive-margin"></p>

            </div>
            <div class="flex flex-col items-center justify-center mt-4">
                <ol class="flex items-center justify-center w-80 mb-4 sm:mb-5">
                    <!-- Langkah Pertama -->
                    <li class="flex flex-col w-full items-center text-red-primary dark:text-red-primary relative">
                        <div class="flex">
                            <div
                                class="z-20 flex items-center justify-center w-6 md:w-10 h-6 md:h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
                                <svg id='ic_0' class="w-2 h-2 text-yellow-primary md:w-4 md:h-4 lg:w-6 lg:h-6 dark:text-blue-300"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 16">
                                    <path
                                        d="M18 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM6.5 3a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3.014 13.021l.157-.625A3.427 3.427 0 0 1 6.5 9.571a3.426 3.426 0 0 1 3.322 2.805l.159.622-6.967.023ZM16 12h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Z" />
                                </svg>
                            </div>
                            <span id="step-0"
                                class="z-10 absolute top-1/3 right-0 w-1/2 h-1 bg-gray-100 dark:bg-yellow-primary -translate-y-1/2"></span>
                        </div>
                        <p class="hidden md:block mt-2 text-xs font-bold text-center text-gray-700 dark:text-gray-300">Data Diri Jama’ah
                        </p>
                    </li>

                    <!-- Langkah Kedua -->
                    <li class="flex flex-col w-full items-center justify-center relative">
                        <div class="flex justify-between">
                            <span id="step-1"
                                class="z-10 absolute top-1/3 left-0 w-1/2 h-1 bg-gray-100 text-gray-700 dark:text-gray-300 -translate-y-1/2"></span>
                            <div
                                class="z-20 flex items-center justify-center w-6 md:w-10 h-6 md:h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                                <svg id='ic_1' class="w-2 h-2 text-red-primary md:w-4 md:h-4 lg:w-6 lg:h-6 dark:text-blue-300"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 14">
                                    <path
                                        d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM2 12V6h16v6H2Z" />
                                    <path
                                        d="M6 8H4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2Zm8 0H9a1 1 0 0 0 0 2h5a1 1 0 1 0 0-2Z" />
                                </svg>
                            </div>
                            <span id="step-2"
                                class="z-10 absolute top-1/3 right-0 w-1/2 h-1 bg-gray-100 text-gray-700 dark:text-gray-300 -translate-y-1/2"></span>
                        </div>
                        <p class="hidden md:block mt-2 text-xs font-bold text-center text-gray-700 dark:text-gray-300">Alamat Domisli
                        </p>
                    </li>

                    <!-- Langkah Ketiga -->
                    <li class="flex flex-col items-center w-full justify-end relative">
                        <div class="flex">
                            <span id="step-3"
                                class="z-10 absolute top-1/3 left-0 w-1/2 h-1 text-gray-700 bg-gray-100 dark:text-gray-300 -translate-y-1/2"></span>
                            <div
                                class="z-20 flex items-center justify-center w-6 md:w-10 h-6 md:h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                                <svg id='ic_2' class="w-2 h-2 text-red-primary md:w-4 md:h-4 lg:w-6 lg:h-6 dark:text-blue-300"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 18 20">
                                    <path
                                        d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2ZM7 2h4v3H7V2Zm5.7 8.289-3.975 3.857a1 1 0 0 1-1.393 0L5.3 12.182a1.002 1.002 0 1 1 1.4-1.436l1.328 1.289 3.28-3.181a1 1 0 1 1 1.392 1.435Z" />
                                </svg>
                            </div>
                        </div>
                        <p class="hidden md:block mt-2 text-xs font-bold text-center text-gray-700 dark:text-gray-300">Pilih Paket</p>
                    </li>
                </ol>

                <form class="mt-8 w-full px-6 md:px-14" action="{{ route('pendaftaran-store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class=" md:mx-14 lg:mx-24">
                        <div id="tab-0">
                            <h3 class="mb-4 font-bold text-sm  leading-none text-gray-900 dark:text-white">Identitas
                                Jama’ah</h3>
                            <div class="mb-4">
                                <label for="username"
                                    class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                        class="text-red-600">*</span>Nama Sesuai
                                    KTP</label>
                                <input type="text" name="full_name" id="username"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                    placeholder="Masukkan Nama Lengkap Anda" required="">
                            </div>
                            <div class="mb-4">
                                <label for="username"
                                    class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                        class="text-red-600">*</span>No
                                    HP Aktif </label>
                                <input type="text" name="phone_number" id="username"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                    placeholder="cth: 6287840122213" required="">
                            </div>
                            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                <div>
                                    <label for="username"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Tempat
                                        Lahir</label>
                                    <input type="text" name="username" id="username"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                        placeholder="cth: Surabaya" required="">
                                </div>
                                <div>
                                    <label for="email"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Tanggal
                                        Lahir</label>
                                    <input type="date" name="date_of_birth" id="date_of_birth"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                        required>
                                </div>
                                <div>
                                    <label for="nik"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Nomer Induk
                                        Kependudukan (NIK)</label>
                                    <input type="text" name="national_id_number" id="password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                        placeholder="cth: 351622912321131" required="">
                                </div>
                                <div>
                                    <label for="no_kk"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Nomer Kartu keluarga (No KK)</label>
                                    <input type="text" name="family_id_number" id="no_kk"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                        placeholder="cth: 35128225661777" required="">
                                </div>
                                <div class="mb-4">
                                    <label for="gender"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Jenis Kelamin</label>
                                    <select name="gender" id="gender"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                        required>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                {{-- <div>
                                        <label for="confirm-password" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                                class="text-red-600">*</span>Nomer Kartu
                                            Keluarga (NKK)</label>
                                        <input type="text" name="nkk" id="confirm-password"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                            placeholder="cth: 351622912321131" required="">
                                        </div> --}}
                                <div class="mb-4">
                                    <label for="marital_status"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Status
                                        Pernikahan</label>
                                    <select name="marital_status" id="marital_status"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                        required>
                                        <option value="Sudah Menikah">Sudah Menikah</option>
                                        <option value="Belum Menikah">Belum Menikah</option>
                                    </select>
                                </div>
                                {{-- <div>
                                        <label for="confirm-password" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                                class="text-red-600">*</span>Jenis
                                            Kelamin</label>
                                        <div class="flex items-center space-x-4">
                                            <label class="flex items-center">
                                                <input type="radio" name="jenis-kelamin" value="Laki-laki"
                                                    class="w-4 h-4 text-red-primary border-gray-300 focus:ring-red-primary">
                                                <span class="ml-2 text-sm text-gray-900 dark:text-white">Laki-laki</span>
                                            </label>
                                            <label class="flex items-center">
                                                <input type="radio" name="jenis-kelamin" value="Perempuan"
                                                    class="w-4 h-4 text-red-primary border-gray-300 focus:ring-red-primary">
                                                <span class="ml-2 text-sm text-gray-900 dark:text-white">Perempuan</span>
                                            </label>
                                        </div>
                                        </div> --}}
                                <div>
                                    <label for="password"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Pekerjaan</label>
                                    <input type="text" name="occupation" id="password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                        placeholder="cth: Pegawai" required="">
                                </div>
                                {{-- <div>
                                        <label for="confirm-password" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
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
                                    class="text-white bg-yellow-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-red-primary dark:hover:bg-red-primary dark:focus:ring-blue-800">
                                    Lanjutkan
                                </button>

                            </div>
                        </div>
                        <div id="tab-1" hidden>
                            <h3 class="mb-4 font-bold text-sm leading-none text-gray-900 dark:text-white">Alamat
                                Domisili</h3>
                            <div class="mb-4">
                                <label for="address"
                                    class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                        class="text-red-600">*</span>Alamat</label>
                                <input type="text" name="address" id="address"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                    placeholder="cth  Jl. Jayanegara No.33, Patimura, Jember Kidul, Kec. Kaliwates, Kabupaten Jember, Jawa Timur 68131"
                                    required>
                            </div>
                            <div class="mb-4">
                                <label for="province"
                                    class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                        class="text-red-600">*</span>Provinsi</label>
                                <input type="text" name="province" id="province"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2. 5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                    placeholder="cth: Jawa Timur" required>
                            </div>
                            <div class="mb-4">
                                <label for="city_regency"
                                    class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                        class="text-red-600">*</span>Kota/Kabupaten</label>
                                <input type="text" name="city_regency" id="city_regency"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                    placeholder="cth: Jember" required>
                            </div>
                            <div class="mb-4">
                                <label for="district"
                                    class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                        class="text-red-600">*</span>Kecamatan</label>
                                <input type="text" name="district" id="district"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                    placeholder="cth: Sumbersari" required>
                            </div>
                            <div class="mb-4">
                                <label for="sub_district_village"
                                    class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                        class="text-red-600">*</span>Kelurahan/Desa</label>
                                <input type="text" name="sub_district_village" id="sub_district_village"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                    placeholder="cth: Kemlagi" required>
                            </div>
                            <div class="mb-4">
                                <label for="email"
                                    class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Email</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                    placeholder="cth: alfi@gmail.com" required>
                            </div>

                            <div class="flex justify-end mb-14">
                                <button id="prevButton" onclick="beforeTab(event, 2)"
                                    class="mr-1 text-white bg-gray-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-red-primary dark:hover:bg-red-primary dark:focus:ring-blue-800">
                                    kembali
                                </button>
                                <button id="nextButton" onclick="nextTab(event, 2)"
                                    class="text-white bg-yellow-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-red-primary dark:hover:bg-red-primary dark:focus:ring-blue-800">
                                    Lanjutkan
                                </button>

                            </div>
                        </div>
                        <div id="tab-2" hidden>
                            <h3 class="mb-4 font-bold text-sm  leading-none text-gray-900 dark:text-white">Program</h3>
                            {{-- <div class="mb-4">
                                    <label for="username" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Nama Sesuai
                                        KTP</label>
                                    <input type="text" name="username" id="username"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                        placeholder="Masukkan Nama Lengkap Anda" required="">
                                    </div> --}}
                            {{-- <div class="mb-4">
                                    <label for="username" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>No
                                        HP Aktif </label>
                                    <input type="text" name="username" id="username"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                        placeholder="cth: 6287840122213" required="">
                                    </div> --}}
                            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                <div class="mb-4">
                                    <label for="passport_status"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Status
                                        Paspor</label>
                                    <select name="passport_status" id="passport_status"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                        required>
                                        <option value="1">Aktif</option>
                                        <option value="0">Tidak Aktif</option>
                                    </select>
                                </div>
                                <div class="mb-4" id="passport_name_container" style="">
                                    <label for="nama_sesuai_paspor"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Nama Sesuai
                                        Paspor</label>
                                    <input type="text" name="nama_sesuai_paspor" id="nama_sesuai_paspor"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                        placeholder="Masukkan Nama Sesuai Paspor" required>
                                </div>
                                <div class="mb-4" id="passport_number_container" style="">
                                    <label for="nomor_paspor"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Nomor
                                        Paspor</label>
                                    <input type="text" name="nomor_paspor" id="nomor_paspor"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                        placeholder="Masukkan Nomor Paspor" required>
                                </div>
                                <div class="mb-4" id="passport_issue_date_container" style="">
                                    <label for="tanggal_issued_paspor"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Tanggal
                                        Terbit Paspor</label>
                                    <input type="date" name="tanggal_issued_paspor" id="tanggal_issued_paspor"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                        required>
                                </div>
                                <div class="mb-4" id="passport_expiry_date_container" style="">
                                    <label for="tanggal_expired"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Tanggal
                                        Expired Paspor</label>
                                    <input type="date" name="tanggal_expired" id="tanggal_expired"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                        required>
                                </div>
                                <div class="mb-4" id="passport_request_container" id="paspor_permintaan"
                                    style="display: none;">
                                    <label for="permintaan"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Permintaan
                                        Paspor</label>
                                    <select name="permintaan"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                        required>
                                        <option value="jasa el-aqsho">Jasa El-Aqsho</option>
                                        <option value="urus sendiri">Urus Sendiri</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="meningitis_vaccine_status"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Status
                                        Vaksin Meningitis</label>
                                    <div class="flex items-center space-x-4">
                                        <label class="flex items-center">
                                            <input type="radio" name="meningitis_vaccine_status" value="1"
                                                class="w-4 h-4 text-red-primary border-gray-300 focus:ring-red-primary">
                                            <span class="ml-2 text-sm text-gray-900 dark:text-white">Sudah</span>
                                        </label>
                                        <label class="flex items-center">
                                            <input type="radio" name="meningitis_vaccine_status" value="0"
                                                class="w-4 h-4 text-red-primary border-gray-300 focus:ring-red-primary">
                                            <span class="ml-2 text-sm text-gray-900 dark:text-white">Belum</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="source_of_information"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Sumber
                                        Informasi</label>
                                    <select name="source_of_information" id="source_of_information"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue- 600 focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
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
                                    <label for="agent_number"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Nomor
                                        Agen</label>
                                    <input type="text" name="agent_number"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                        placeholder="Masukkan Nomor Agen" required>
                                </div>
                                <div class="mb-4">
                                    <label for="image"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Foto
                                        Pendaftar</label>

                                    <input
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-full cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        name="image" id="file_input" type="file">

                                </div>
                                {{-- <div class="mb-4">
                                    <label for="id_paket" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Pilih
                                        Paket</label>
                                    <select name="id_paket" id="id_paket"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                        required>
                                        <option value="">Tidak Memilih</option>
                                        @foreach ($paket as $item)
                                            <option value="{{ $item->id }}"
                                                data-description="{{ $item->short_description }}"
                                                data-price="{{ number_format($item->price, 2) }}">{{ $item->title }}
                                            </option>
                                            @endforeach
                                            </select>
                                            {{-- <h2 id="paket_price" class="hidden text-lg text-gray-700 font-bold mt-2"> --}}
                                {{-- <p id="paket_description" class="hidden text-gray-700 font-bold text-sm mt-8"></p>
                                <h2 id="paket_price" class="hidden text-lg text-yellow-primary font-bold mt-2">
                                </h2>
                                    </div> --}}
                                <div class="mb-4">
                                    <label for="program_choice"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                        class="text-red-600">*</span>
                                        Pilih Program
                                    </label>
                                    <select id="program_choice" name="selected_paket"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary" required>
                                        <option value="">DP</option>
                                        {{-- <option value="haji">Haji</option> --}}
                                        <option value="badal">Badal</option>
                                        <option value="paket">Umroh</option>
                                    </select>
                                </div>

                                <div id="haji_select" class="hidden">
                                    <label for="haji_list"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                        class="text-red-600">*</span>Pilih
                                        Haji</label>
                                    <select id="haji_list" name="id_haji"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                        required>
                                        <option value="">Pilih Paket Haji</option>
                                        @forelse ($haji as $haji_item)
                                            <option value="{{ $haji_item->id }}"
                                                data-description="{{ $haji_item->subtitle }}"
                                                data-price="Rp. {{ number_format($haji_item->harga_paket, 0, ',', '.') }}">
                                                {{ $haji_item->title }}
                                            </option>
                                        @empty
                                            <option value="">Belum ada paket haji yang tersedia</option>
                                        @endforelse
                                    </select>
                                </div>

                                <div id="badal_select" class="hidden">
                                    <label for="badal_list"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Pilih
                                        Badal</label>
                                    <select id="badal_list" name="id_badal"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                        required>
                                        <option value="">Pilih Paket Badal</option>
                                        @forelse ($badal as $badal_item)
                                            <option value="{{ $badal_item->id }}"
                                                data-description="{{ $badal_item->subtitle }}"
                                                data-price="Rp. {{ number_format($badal_item->harga_paket, 0, ',', '.') }}">
                                                {{ $badal_item->title }}
                                            </option>
                                        @empty
                                            <option value="">Belum ada paket badal yang tersedia</option>
                                        @endforelse
                                    </select>
                                </div>

                                <div id="paket_select" class="hidden">
                                    <label for="paket_list"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white"><span
                                            class="text-red-600">*</span>Pilih
                                        Umroh</label>
                                    <select id="paket_list" name="id_paket"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                        required>
                                        <option value="">Pilih Paket Umroh</option>
                                        @forelse ($paket as $paket_item)
                                            <option value="{{ $paket_item->id }}"
                                                data-description="{{ $paket_item->short_description }}"
                                                data-price="Rp. {{ number_format($paket_item->price, 0, ',', '.') }}">
                                                {{ $paket_item->title }}</option>
                                        @empty
                                            <option value="">Belum ada paket umroh yang tersedia</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="notes"
                                        class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">Catatan</label>
                                    <textarea name="notes" id="notes"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-primary focus:border-red-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-primary dark:focus:border-red-primary"
                                        placeholder="Masukkan Catatan"></textarea>
                                </div>
                                <h2 id="paket_price" class="hidden text-lg text-gray-700 font-bold mt-2">
                                    <p id="paket_description" class="hidden text-gray-700 font-bold text-sm mt-8"></p>
                                    {{-- <h2 id="paket_price" class="hidden text-lg text-yellow-primary font-bold mt-2">
                                    </h2> --}}
                            </div>
                            <div class="w-full">
                                <h3 class="text-end font-bold text-gray-700">"Dengan mengucap
                                    Bismillahirrohmanirrohim,<br>
                                    saya mendaftarkan diri ikut program umroh El-Aqsho Group."</h3>
                            </div>
                            <div class="flex justify-end mb-14 mt-8">
                                <button id="prevButton" onclick="beforeTab(event, 3)"
                                    class="mr-1 text-white bg-gray-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-red-primary dark:hover:bg-red-primary dark:focus:ring-blue-800">
                                    kembali
                                </button>
                                {{-- <button data-modal-target="default-modal" data-modal-toggle="default-modal" type="button" id="nextButton"
                                    class="text-white bg-yellow-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-red-primary dark:hover:bg-red-primary dark:focus:ring-blue-800">
                                    Daftar Sekarang
                                </button> --}}


                                <!-- Modal toggle -->
                                <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                    class="text-white bg-yellow-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-red-primary dark:hover:bg-red-primary dark:focus:ring-blue-800"
                                    type="button">
                                    Daftar Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Main modal -->
                    <div id="default-modal" tabindex="-1" aria-hidden="true"
                        class="hidden rounded-3xl overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-center p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                                    <div class="px-8 py-2 bg-yellow-primary rounded-full">
                                        <h3 class="text-xl font-semibold text-center text-white dark:text-white">
                                            Syarat & Ketentuan
                                        </h3>
                                    </div>
                                    {{-- <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="default-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button> --}}
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4 flex flex-col items-center">
                                    <ol class="list-decimal px-6 text-gray-700 space-y-1 font-semibold">
                                        <li>1. Jamaah dilarang menerima atau menitipkan uang pembayaran DP/pelunasan
                                            tanpa kwitansi pembayaran. Kerugian
                                            yang terjadi akibat hal tersebut bukan menjadi tanggung jawab perusahaan.
                                        </li>
                                        <li>2. DP minimal Rp 3.500.000. Pelunasan pembayaran maksimal dilakukan 1 bulan
                                            sebelum keberangkatan. Jika
                                            jamaah belum melunasi 100% dari tenggat waktu yang ditentukan, keberangkatan
                                            akan ditunda secara otomatis.
                                        </li>
                                        <li>3. Semua pembayaran yang masuk ke perusahaan dapat dipindahtangankan (sesuai
                                            ahli waris) atau ditarik
                                            kembali sesuai ketentuan jadwal keberangkatan lebih dari 40 hari.</li>
                                        <li>4. Penarikan keuangan dapat dicairkan 100%, kecuali jika DP harus digantikan
                                            dengan jamaah baru.</li>
                                        <li>5. Pembayaran melalui metode transfer harus disertai bukti pembayaran yang
                                            dikirim ke WhatsApp admin di
                                            nomor: <strong>085157482088</strong>.</li>
                                        <li>6. Jika jamaah melakukan pembatalan sepihak:
                                            <ul class="list-disc px-8">
                                                <li>1 bulan sebelum keberangkatan: akan dikenai potongan sebesar 25%
                                                    dari harga paket.</li>
                                                <li>15 hari sebelum keberangkatan: dikenai potongan sebesar 50% dari
                                                    harga paket.</li>
                                                <li>10 hari sebelum keberangkatan: dikenai potongan 100% dari harga
                                                    paket.</li>
                                            </ul>
                                        </li>
                                    </ol>
                                    <div class="rounded-3xl shadow-2xl md:h-36 px-4 md:px-14 border-4 border-black">
                                        <div class="flex justify-center items-center px-4 py-2 bg-gray-700 rounded-3xl">
                                            <h3 class="text-xl font-semibold text-center text-white dark:text-white">
                                                Pembayaran Hanya Melalui Transfer
                                            </h3>
                                        </div>
                                        <div class="flex flex-col justify-center items-center my-4 gap-2 md:gap-1">
                                            <div class="flex flex-row md:flex-col items-center justify-center gap-2">
                                                <img src="{{ asset('resources/images/lp-main/pendaftaran/ic_bri.png') }}" 
                                                class="w-9 md:hidden object-contain"
                                                    alt="">
                                                <img src="{{ asset('resources/images/lp-main/pendaftaran/ic_bri.png') }}" 
                                                class="w-14 md:block hidden object-contain"
                                                    alt="">
                                                <p class="text-center font-bold text-sm">001301001800569</p>
                                            </div>
                                            <div class="flex flex-row md:flex-col items-center justify-center gap-1">
                                                <img src="{{ asset('resources/images/lp-main/pendaftaran/ic_bca.png') }}"
                                                    class="w-10 md:hidden object-contain" alt="">
                                                <img src="{{ asset('resources/images/lp-main/pendaftaran/ic_bca.png') }}"
                                                    class="hidden w-16 md:block object-contain mr-1" alt="">
                                                <p class="text-center fontweight-bold text-sm"><strong>1200887278</strong></p>
                                            </div>
                                            <div class="flex flex-row md:flex-col items-center justify-center gap-1 mt-2">
                                                <img src="{{ asset('resources/images/lp-main/pendaftaran/ic_mandiri.png') }}"
                                                    class="w-10 md:hidden object-contain" alt="">
                                                <img src="{{ asset('resources/images/lp-main/pendaftaran/ic_mandiri.png') }}"
                                                    class="w-16 hidden md:block object-contain mr-1" alt="">
                                                <p class="text-center fontweight-bold text-sm"><strong>1430077777926</strong></p>
                                            </div>

                                        </div>
                                    </div>

                                    {{-- <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        With less than a month to go before the European Union enacts new consumer
                                        privacy laws for its citizens, companies around the world are updating their
                                        terms of service agreements to comply.
                                    </p>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into
                                        effect on May 25 and is meant to ensure a common set of data rights in the
                                        European Union. It requires organizations to notify users as soon as possible of
                                        high-risk data breaches that could personally affect them.
                                    </p> --}}
                                </div>
                                <!-- Modal footer -->
                                <div
                                    class="flex items-center justify-end p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button data-modal-hide="default-modal" type="button"
                                        class=" bg-gray-400 py-2.5 px-5 text-sm font-medium text-white focus:outline-non rounded-full border border-gray-200 hover:bg-gray-100 hover:text-red-primary focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tidak</button>

                                    <button id="nextButton" onclick="nextTab(event, 3)" data-modal-hide="default-modal"
                                        class="ml-2 text-white bg-yellow-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-red-primary dark:hover:bg-red-primary dark:focus:ring-blue-800">
                                        Setuju
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</body>

</html>
