@extends('layouts.app')
@section('content')

    <!-- Hero -->
    <div id="controls-carousel" class="relative w-full max-w-screen-xl mx-auto" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative w-full overflow-hidden rounded-lg">
            <div class="relative w-full" style="padding-top:50%;">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="{{ asset('images/assets/hero.png') }}" class="absolute inset-0 h-full w-full object-cover"
                        alt="Hero">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/assets/hero2.png') }}" class="absolute inset-0 h-full w-full object-cover"
                        alt="Hero">
                </div>
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
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
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <!-- Hero - end -->

    <!-- About Us -->
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-xl px-4 md:px-8">
            <div class="grid gap-8 md:grid-cols-2 lg:gap-12">
                <div>
                    <div class="h-64 overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-auto">
                        <img src="{{asset('images/assets/aboutus.png')}}" loading="lazy" alt="Photo by Martin Sanchez"
                            class="h-full w-full object-cover object-center" />
                    </div>
                </div>

                <div class="md:pt-8">

                    <p class="mb-6 text-gray-900 sm:text-lg md:mb-8 text-justify">PPM (Pondok Pesantren Mahasiswa )
                        Al-Kautsar Bina Insani merupakan salah satu pondok pesantren yang berdiri di Wilayah Purwokerto,
                        Jawa Tengah. Terletak di Kelurahan Sumampir, Purwokerto Utara, PPM Al-Kautsar Bina Insani telah
                        berdiri 11 tahun lamanya sejak tahun 2014 </p>

                    <h2 class="mb-2 text-center text-xl font-semibold text-gray-800 sm:text-2xl md:mb-4 md:text-left">VISI
                        PPM</h2>
                    <p class="mb-6 text-gray-900 text-justify sm:text-lg md:mb-8 bg-[#96B1AD80] p-4 rounded-lg">Membentuk
                        generasi penerus yang profesional religius, serta menjadi mubaligh yang sarjana dan sarjana yang
                        mubaligh</p>

                    <h2 class="mb-2 text-center text-xl font-semibold text-gray-800 sm:text-2xl md:mb-4 md:text-left">MISI
                        PPM</h2>
                    <ul
                        class="mb-6 bg-[#96B1AD80] p-4 rounded-lg text-gray-900 sm:text-lg md:mb-8 list-disc text-justify list-outside pl-8 text-left">
                        <li>Melaksanakan program pembinaan secara intensif dan berkesinambungan.</li>
                        <li>Meningkatkan softskill santri dan melancarkan kuliah santri.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us - end -->

    <!-- Struktur Organisasi -->
    <div id="controls-carousel" class="relative w-full max-w-screen-xl mx-auto shadow-xl/30" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative w-full overflow-hidden rounded-lg">
            <div class="relative w-full" style="padding-top:50%;">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/assets/struktur1.png') }}"
                        class="absolute inset-0 h-full w-full object-cover" alt="Hero">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="{{ asset('images/assets/struktur2.png') }}"
                        class="absolute inset-0 h-full w-full object-cover" alt="Hero">
                </div>
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
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
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <!-- Struktur Organisasi - end -->

    <!-- Data Santri -->
    <section class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-3xl px-4 md:px-8">
            <div class="mx-auto max-w-3xl w-full bg-white rounded-lg shadow-xl/30 p-4 md:p-6">
                <!-- HEADER -->
                <div class="mb-5 md:mb-8">
                    <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Data Santri
                    </h2>
                </div>
                <div class="flex justify-between items-center pb-4 mb-4 border-b border-gray-200 relative">
                    <!-- Month dropdown (left) -->
                    <div class="relative">
                        <button id="monthButton" type="button"
                            class="text-sm font-medium text-gray-600 hover:text-gray-900 inline-flex items-center">
                            January 2025
                            <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <!-- Dropdown -->
                        <div id="monthDropdown"
                            class="absolute left-0 mt-2 z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44">
                            <ul class="py-2 text-sm text-gray-700">
                                <li><a href="#" class="month-item block px-4 py-2 hover:bg-gray-100"
                                        data-month="2025-01">January 2025</a></li>
                                <li><a href="#" class="month-item block px-4 py-2 hover:bg-gray-100"
                                        data-month="2025-02">February 2025</a></li>
                                <li><a href="#" class="month-item block px-4 py-2 hover:bg-gray-100"
                                        data-month="2025-03">March 2025</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Male / Female counts (right) -->
                    <div class="flex items-center gap-2">
                        <span
                            class="inline-flex items-center px-2.5 py-1 rounded-md bg-blue-100 text-blue-800 text-xs font-medium">
                            <!-- user icon -->
                            <svg class="w-3.5 h-3.5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 19">
                                <path
                                    d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z" />
                                <path d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2Z" />
                            </svg>
                            Male:&nbsp;<span id="maleCount">--</span>
                        </span>
                        <span
                            class="inline-flex items-center px-2.5 py-1 rounded-md bg-pink-100 text-pink-800 text-xs font-medium">
                            <svg class="w-3.5 h-3.5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 19">
                                <path
                                    d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z" />
                                <path d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2Z" />
                            </svg>
                            Female:&nbsp;<span id="femaleCount">--</span>
                        </span>
                    </div>
                </div>
                <!-- /HEADER -->

                <div id="column-chart"></div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.46.0/dist/apexcharts.min.js"></script>
    <script>
        // Categories on X axis
        const CATEGORIES = ["Pegon Bacaan", "Lambatan", "Cepatan", "Saringan", "Hadist Besar"];

        // Example counts by month (replace with real data)
        const DATA_BY_MONTH = {
            "2025-01": { male: [12, 9, 14, 7, 5], female: [10, 8, 11, 6, 4], label: "January 2025" },
            "2025-02": { male: [15, 7, 12, 9, 6], female: [11, 9, 10, 7, 5], label: "February 2025" },
            "2025-03": { male: [13, 8, 16, 8, 7], female: [12, 10, 12, 9, 6], label: "March 2025" }
        };

        const sum = (arr) => arr.reduce((a, b) => a + b, 0);
        const makeSeries = (key) => ([
            { name: "Male", color: "#1A56DB", data: DATA_BY_MONTH[key].male },
            { name: "Female", color: "#FDBA8C", data: DATA_BY_MONTH[key].female }
        ]);

        function updateCounts(key) {
            const male = sum(DATA_BY_MONTH[key].male);
            const female = sum(DATA_BY_MONTH[key].female);
            document.getElementById('maleCount').textContent = male;
            document.getElementById('femaleCount').textContent = female;
        }

        const defaultKey = "2025-01";

        const options = {
            colors: ["#1A56DB", "#FDBA8C"],
            series: makeSeries(defaultKey),
            chart: { type: "bar", height: "320px", fontFamily: "Inter, sans-serif", toolbar: { show: false } },
            plotOptions: { bar: { horizontal: false, columnWidth: "60%", borderRadiusApplication: "end", borderRadius: 8 } },
            xaxis: {
                categories: CATEGORIES,
                labels: { show: true, rotate: -15, style: { fontFamily: "Inter, sans-serif", cssClass: "text-xs font-normal fill-gray-500" } },
                axisBorder: { show: false }, axisTicks: { show: false }
            },
            legend: { show: true },
            tooltip: { shared: true, intersect: false, style: { fontFamily: "Inter, sans-serif" } },
            grid: { show: false, strokeDashArray: 4, padding: { left: 2, right: 2, top: -14 } },
            dataLabels: { enabled: false },
            stroke: { show: true, width: 0, colors: ["transparent"] },
            yaxis: { show: true },
            fill: { opacity: 1 }
        };

        let chart;
        if (document.getElementById("column-chart") && typeof ApexCharts !== "undefined") {
            chart = new ApexCharts(document.getElementById("column-chart"), options);
            chart.render();
        }

        // Init header (button label + counts)
        const monthButton = document.getElementById("monthButton");
        const monthDropdown = document.getElementById("monthDropdown");
        monthButton.firstChild.nodeValue = DATA_BY_MONTH[defaultKey].label;
        updateCounts(defaultKey);

        // Simple open/close for dropdown (works even without Flowbite)
        monthButton.addEventListener("click", () => monthDropdown.classList.toggle("hidden"));
        document.addEventListener("click", (e) => {
            if (!monthButton.contains(e.target) && !monthDropdown.contains(e.target)) {
                monthDropdown.classList.add("hidden");
            }
        });

        // Month change
        document.querySelectorAll("#monthDropdown .month-item").forEach(a => {
            a.addEventListener("click", (e) => {
                e.preventDefault();
                const key = a.getAttribute("data-month");
                const label = DATA_BY_MONTH[key]?.label || key;

                chart.updateSeries(makeSeries(key));
                updateCounts(key);
                monthButton.firstChild.nodeValue = label;
                monthDropdown.classList.add("hidden");
            });
        });
    </script>
    <!-- Data Santri - end -->

    <!-- Kurikulum -->
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <!-- text - start -->
            <div class="mb-10 md:mb-16">
                <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Kurikulum Kami
                </h2>
            </div>
            <!-- text - end -->

            <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-5 xl:gap-10">
                <!-- feature - start -->
                <div class="flex flex-col items-center bg-white rounded-xl shadow-xl/30 p-4">
                    <div
                        class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>

                    <h3 class="mb-2 text-center text-lg font-semibold md:text-xl">Pegon Bacaan</h3>
                </div>
                <!-- feature - end -->

                <!-- feature - start -->
                <div class="flex flex-col items-center bg-white rounded-xl shadow-xl/30 p-4">
                    <div
                        class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>

                    <h3 class="mb-2 text-center text-lg font-semibold md:text-xl">Lambatan</h3>
                </div>
                <!-- feature - end -->

                <!-- feature - start -->
                <div class="flex flex-col items-center bg-white rounded-xl shadow-xl/30 p-4">
                    <div
                        class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                        </svg>
                    </div>

                    <h3 class="mb-2 text-center text-lg font-semibold md:text-xl">Cepatan</h3>
                </div>
                <!-- feature - end -->

                <!-- feature - start -->
                <div class="flex flex-col items-center bg-white rounded-xl shadow-xl/30 p-4">
                    <div
                        class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>

                    <h3 class="mb-2 text-center text-lg font-semibold md:text-xl">Saringan</h3>
                </div>
                <!-- feature - end -->

                <!-- feature - start -->
                <div class="flex flex-col items-center bg-white rounded-xl shadow-xl/30 p-4">
                    <div
                        class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>

                    <h3 class="mb-2 text-center text-lg font-semibold md:text-xl">Hadist Besar</h3>
                </div>
                <!-- feature - end -->
            </div>
        </div>
    </div>
    <!-- Kurikulum - end -->

    <!-- Kegiatan Belajar Mengajar -->
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <!-- text - start -->
            <div class="mb-10 md:mb-16">
                <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Kegiatan Belajar Mengajar</h2>
            </div>
            <!-- text - end -->

            <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-8">
                <!-- article - start -->
                <div class="flex flex-col overflow-hidden rounded-lg border bg-white">
                    <a href="#" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
                        <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600"
                            loading="lazy" alt="Photo by Minh Pham"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                    </a>

                    <div class="flex flex-1 flex-col p-4 sm:p-6">
                        <h2 class="mb-2 text-lg font-semibold text-gray-800">
                            <a href="#" class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">New
                                trends in Tech</a>
                        </h2>

                        <p class="mb-8 text-gray-500">This is a section of some simple filler text, also known as
                            placeholder text. It shares some characteristics of a real written text.</p>

                        <div class="mt-auto flex items-end justify-between">
                            <div class="flex items-center gap-2">
                                <div class="h-10 w-10 shrink-0 overflow-hidden rounded-full bg-gray-100">
                                    <img src="https://images.unsplash.com/photo-1611898872015-0571a9e38375?auto=format&q=75&fit=crop&w=64"
                                        loading="lazy" alt="Photo by Brock Wegner"
                                        class="h-full w-full object-cover object-center" />
                                </div>

                                <div>
                                    <span class="block text-indigo-500">Mike Lane</span>
                                    <span class="block text-sm text-gray-400">July 19, 2021</span>
                                </div>
                            </div>

                            <span class="rounded border px-2 py-1 text-sm text-gray-500">Article</span>
                        </div>
                    </div>
                </div>
                <!-- article - end -->

                <!-- article - start -->
                <div class="flex flex-col overflow-hidden rounded-lg border bg-white">
                    <a href="#" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
                        <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&q=75&fit=crop&w=600"
                            loading="lazy" alt="Photo by Lorenzo Herrera"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                    </a>

                    <div class="flex flex-1 flex-col p-4 sm:p-6">
                        <h2 class="mb-2 text-lg font-semibold text-gray-800">
                            <a href="#" class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">Working
                                with legacy stacks</a>
                        </h2>

                        <p class="mb-8 text-gray-500">This is a section of some simple filler text, also known as
                            placeholder text. It shares some characteristics of a real written text.</p>

                        <div class="mt-auto flex items-end justify-between">
                            <div class="flex items-center gap-2">
                                <div class="h-10 w-10 shrink-0 overflow-hidden rounded-full bg-gray-100">
                                    <img src="https://images.unsplash.com/photo-1586116104126-7b8e839d5b8c?auto=format&q=75&fit=crop&w=64"
                                        loading="lazy" alt="Photo by peter bucks"
                                        class="h-full w-full object-cover object-center" />
                                </div>

                                <div>
                                    <span class="block text-indigo-500">Jane Jackobs</span>
                                    <span class="block text-sm text-gray-400">April 07, 2021</span>
                                </div>
                            </div>

                            <span class="rounded border px-2 py-1 text-sm text-gray-500">Article</span>
                        </div>
                    </div>
                </div>
                <!-- article - end -->

                <!-- article - start -->
                <div class="flex flex-col overflow-hidden rounded-lg border bg-white">
                    <a href="#" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
                        <img src="https://images.unsplash.com/photo-1542759564-7ccbb6ac450a?auto=format&q=75&fit=crop&w=600"
                            loading="lazy" alt="Photo by Magicle"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                    </a>

                    <div class="flex flex-1 flex-col p-4 sm:p-6">
                        <h2 class="mb-2 text-lg font-semibold text-gray-800">
                            <a href="#" class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">10 best
                                smartphones for devs</a>
                        </h2>

                        <p class="mb-8 text-gray-500">This is a section of some simple filler text, also known as
                            placeholder text. It shares some characteristics of a real written text.</p>

                        <div class="mt-auto flex items-end justify-between">
                            <div class="flex items-center gap-2">
                                <div class="h-10 w-10 shrink-0 overflow-hidden rounded-full bg-gray-100">
                                    <img src="https://images.unsplash.com/photo-1592660503155-7599a37f06a6?auto=format&q=75&fit=crop&w=64"
                                        loading="lazy" alt="Photo by Jassir Jonis"
                                        class="h-full w-full object-cover object-center" />
                                </div>

                                <div>
                                    <span class="block text-indigo-500">Tylor Grey</span>
                                    <span class="block text-sm text-gray-400">March 15, 2021</span>
                                </div>
                            </div>

                            <span class="rounded border px-2 py-1 text-sm text-gray-500">Article</span>
                        </div>
                    </div>
                </div>
                <!-- article - end -->

                <!-- article - start -->
                <div class="flex flex-col overflow-hidden rounded-lg border bg-white">
                    <a href="#" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
                        <img src="https://images.unsplash.com/photo-1610465299996-30f240ac2b1c?auto=format&q=75&fit=crop&w=600"
                            loading="lazy" alt="Photo by Martin Sanchez"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                    </a>

                    <div class="flex flex-1 flex-col p-4 sm:p-6">
                        <h2 class="mb-2 text-lg font-semibold text-gray-800">
                            <a href="#" class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">8 High
                                performance Notebooks</a>
                        </h2>

                        <p class="mb-8 text-gray-500">This is a section of some simple filler text, also known as
                            placeholder text. It shares some characteristics of a real written text.</p>

                        <div class="mt-auto flex items-end justify-between">
                            <div class="flex items-center gap-2">
                                <div class="h-10 w-10 shrink-0 overflow-hidden rounded-full bg-gray-100">
                                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&q=75&fit=crop&w=64"
                                        loading="lazy" alt="Photo by Aiony Haust"
                                        class="h-full w-full object-cover object-center" />
                                </div>

                                <div>
                                    <span class="block text-indigo-500">Ann Park</span>
                                    <span class="block text-sm text-gray-400">January 27, 2021</span>
                                </div>
                            </div>

                            <span class="rounded border px-2 py-1 text-sm text-gray-500">Article</span>
                        </div>
                    </div>
                </div>
                <!-- article - end -->
            </div>
        </div>
    </div>
    <!-- Kegiatan Belajar Mengajar - end -->

@endsection