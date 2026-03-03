<x-layout>
    {{-- Hero Section --}}
    <section class="relative py-32 md:py-48 overflow-hidden bg-gray-900">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2070&auto=format&fit=crop"
                alt="Hero Background" class="w-full h-full object-cover opacity-50" />
            <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/40 to-black/70"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center">
                <h1
                    class="text-5xl md:text-7xl font-extrabold text-white leading-tight mb-6 tracking-tight drop-shadow-2xl">
                    {{ __('about.hero_title') }}
                    <span class="text-blue-400">{{ __('about.hero_company') }}</span>
                </h1>

                <div class="w-24 h-1.5 bg-blue-500 mx-auto mb-8 rounded-full shadow-lg"></div>

                <p class="text-xl md:text-2xl text-gray-100 max-w-3xl mx-auto leading-relaxed drop-shadow-lg">
                    {{ __('about.hero_sub') }}
                    <br>
                    <span class="font-bold text-white">{{ __('about.hero_subtitle') }}</span>
                </p>
            </div>
        </div>
    </section>

    {{-- About Section --}}
    <section class="py-24 max-w-screen-xl mx-auto px-6">
        <div class="text-center mb-16">
            <h1 class="font-bold text-[#002473] text-xl">{{ __('about.about_small') }}</h1>
            <h1 class="text-5xl font-bold mb-5">
                {{ __('about.about_profile') }}
            </h1>
            <div class="w-24 h-1.5 bg-blue-800 mx-auto mb-8 rounded-full shadow-lg"></div>
        </div>

        <!-- Content Wrapper -->
        <div class="flex justify-center">
            <!-- Card -->
            <div class="relative bg-white rounded-xl shadow-lg p-8 md:p-12
                max-w-6xl w-full">
                <!-- Badge -->
                <span
                    class="absolute -top-4 left-0 bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded-md shadow">
                    {{ __('about.since') }}
                </span>

                <!-- Content -->
                <p class="text-gray-700 text-xl leading-relaxed mb-4">
                    <strong>CV. Mitra Sarana Abdi Pratama (MSAP)</strong> {{ __('about.about_p1') }}
                </p>

                <p class="text-gray-700 text-xl leading-relaxed">
                    {{ __('about.about_p2') }}
                </p>
            </div>
        </div>
    </section>


    {{-- Visi & Misi --}}
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

                <!-- VISI -->
                <div
                    class="relative bg-[#E9EEF5] rounded-xl shadow-md border border-blue-300
           min-h-[509px] flex flex-col">

                    <!-- Top Border -->
                    <div class="h-3 bg-blue-800 rounded-t-xl"></div>

                    <div class="p-8 flex flex-col flex-1">
                        <!-- Header (tetap di atas) -->
                        <div class="flex items-center gap-3 mb-6">
                            <div
                                class="w-10 h-10 flex items-center justify-center
                       bg-blue-700 text-white rounded-lg">
                                <!-- Target Icon -->
                                <svg width="28" height="28" viewBox="0 0 56 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M28 51.3333C24.7722 51.3333 21.7389 50.7204 18.9 49.4946C16.0611 48.2688 13.5916 46.6067 11.4916 44.5083C9.39163 42.4098 7.72952 39.9404 6.5053 37.1C5.28107 34.2595 4.66818 31.2262 4.66663 28C4.66507 24.7737 5.27796 21.7404 6.5053 18.9C7.73263 16.0595 9.39474 13.5901 11.4916 11.4916C13.5885 9.39318 16.058 7.73107 18.9 6.50529C21.742 5.27952 24.7753 4.66663 28 4.66663C31.2246 4.66663 34.258 5.27952 37.1 6.50529C39.942 7.73107 42.4114 9.39318 44.5083 11.4916C46.6052 13.5901 48.2681 16.0595 49.497 18.9C50.7258 21.7404 51.338 24.7737 51.3333 28C51.3286 31.2262 50.7157 34.2595 49.4946 37.1C48.2735 39.9404 46.6114 42.4098 44.5083 44.5083C42.4052 46.6067 39.9357 48.2696 37.1 49.497C34.2642 50.7243 31.2309 51.3364 28 51.3333ZM28 46.6666C33.2111 46.6666 37.625 44.8583 41.2416 41.2416C44.8583 37.625 46.6666 33.2111 46.6666 28C46.6666 22.7888 44.8583 18.375 41.2416 14.7583C37.625 11.1416 33.2111 9.33329 28 9.33329C22.7888 9.33329 18.375 11.1416 14.7583 14.7583C11.1416 18.375 9.3333 22.7888 9.3333 28C9.3333 33.2111 11.1416 37.625 14.7583 41.2416C18.375 44.8583 22.7888 46.6666 28 46.6666ZM28 42C24.1111 42 20.8055 40.6388 18.0833 37.9166C15.3611 35.1944 14 31.8888 14 28C14 24.1111 15.3611 20.8055 18.0833 18.0833C20.8055 15.3611 24.1111 14 28 14C31.8888 14 35.1944 15.3611 37.9166 18.0833C40.6388 20.8055 42 24.1111 42 28C42 31.8888 40.6388 35.1944 37.9166 37.9166C35.1944 40.6388 31.8888 42 28 42ZM28 37.3333C30.5666 37.3333 32.7638 36.4194 34.5916 34.5916C36.4194 32.7638 37.3333 30.5666 37.3333 28C37.3333 25.4333 36.4194 23.2361 34.5916 21.4083C32.7638 19.5805 30.5666 18.6666 28 18.6666C25.4333 18.6666 23.2361 19.5805 21.4083 21.4083C19.5805 23.2361 18.6666 25.4333 18.6666 28C18.6666 30.5666 19.5805 32.7638 21.4083 34.5916C23.2361 36.4194 25.4333 37.3333 28 37.3333ZM28 32.6666C26.7166 32.6666 25.6184 32.2101 24.7053 31.297C23.7922 30.3838 23.3349 29.2848 23.3333 28C23.3317 26.7151 23.7891 25.6168 24.7053 24.7053C25.6215 23.7937 26.7197 23.3364 28 23.3333C29.2802 23.3302 30.3792 23.7875 31.297 24.7053C32.2147 25.6231 32.6713 26.7213 32.6666 28C32.662 29.2786 32.2054 30.3776 31.297 31.297C30.3885 32.2163 29.2895 32.6728 28 32.6666Z"
                                        fill="white" />
                                </svg>

                            </div>

                            <h3 class="text-3xl font-bold text-gray-900">
                                {{ __('about.vision_title') }} <span
                                    class="text-blue-600">{{ __('about.company') }}</span>
                            </h3>
                        </div>

                        <!-- CONTENT (DITENGAHKAN) -->
                        <div class="flex flex-1 items-center">
                            <div class="flex gap-5">
                                <!-- Vertical Line -->
                                <div class="w-2 h-40 bg-blue-600 rounded-full"></div>

                                <p class="text-gray-900 text-2xl font-semibold leading-relaxed max-w-sm">
                                    {{ __('about.vision_text') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- MISI -->
                <div
                    class="relative bg-[#EFF8EB] rounded-xl shadow-md border border-green-300
           min-h-[509px] flex flex-col">

                    <!-- Top Border -->
                    <div class="h-3 bg-green-600 rounded-t-xl"></div>

                    <div class="p-8 flex flex-col flex-1">
                        <!-- Header (tetap di atas) -->
                        <div class="flex items-center gap-3 mb-6">
                            <div
                                class="w-10 h-10 flex items-center justify-center
                       bg-green-500 text-white rounded-lg">
                                <svg width="28" height="28" viewBox="0 0 56 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.8335 29.1666L24.5002 33.8333L36.1668 22.1666" stroke="white"
                                        stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M16.3334 7.78866C19.8788 5.73701 23.9039 4.6599 28.0001 4.66666C40.8871 4.66666 51.3334 15.113 51.3334 28C51.3334 40.887 40.8871 51.3333 28.0001 51.3333C15.1131 51.3333 4.66675 40.887 4.66675 28C4.66675 23.751 5.80308 19.7633 7.78875 16.3333"
                                        stroke="white" stroke-width="3.5" stroke-linecap="round" />
                                </svg>

                            </div>

                            <h3 class="text-3xl font-bold text-gray-900">
                                {{ __('about.mission_title') }} <span
                                    class="text-green-600">{{ __('about.company') }}</span>
                            </h3>
                        </div>

                        <!-- CONTENT (DITENGAHKAN) -->
                        <div class="flex flex-1 items-center">
                            <ul class="space-y-6 text-gray-900 text-base font-semibold max-w-md">
                                <li class="flex items-center text-2xl gap-3">
                                    <svg width="60" height="60" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_48_60)">
                                            <path d="M10.625 15.625L13.125 18.125L19.375 11.875" stroke="#5EB546"
                                                stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M8.75 4.17252C10.6493 3.07342 12.8056 2.4964 15 2.50002C21.9037 2.50002 27.5 8.09627 27.5 15C27.5 21.9038 21.9037 27.5 15 27.5C8.09625 27.5 2.5 21.9038 2.5 15C2.5 12.7238 3.10875 10.5875 4.1725 8.75002"
                                                stroke="#5EB546" stroke-width="3.5" stroke-linecap="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_48_60">
                                                <rect width="30" height="30" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    {{ __('about.mission_1') }}
                                </li>

                                <li class="flex items-start text-2xl gap-3">
                                    <svg width="60" height="60" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_48_60)">
                                            <path d="M10.625 15.625L13.125 18.125L19.375 11.875" stroke="#5EB546"
                                                stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M8.75 4.17252C10.6493 3.07342 12.8056 2.4964 15 2.50002C21.9037 2.50002 27.5 8.09627 27.5 15C27.5 21.9038 21.9037 27.5 15 27.5C8.09625 27.5 2.5 21.9038 2.5 15C2.5 12.7238 3.10875 10.5875 4.1725 8.75002"
                                                stroke="#5EB546" stroke-width="3.5" stroke-linecap="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_48_60">
                                                <rect width="30" height="30" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    {{ __('about.mission_2') }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    {{-- Sertifikasi K3 --}}
    <section class="relative p-10 bg-gray-100 overflow-hidden">

        <!-- Background miring kanan -->
        <div class="absolute right-0 top-0 h-full w-1/3 bg-gray-300/60 skew-x-[-10deg] origin-top-right"></div>

        <div class="relative z-10 max-w-7xl mx-auto">

            <!-- Title -->
            @if (app()->getLocale() === 'id')
                <h1 class="text-4xl font-bold mb-2">
                    Sertifikasi <span class="text-[#002473]">Tenaga Ahli</span>
                </h1>
            @elseif (app()->getLocale() === 'en')
                <h1 class="text-4xl font-bold mb-2">
                    <span class="text-[#002473]">Expert</span> Certifications
                </h1>
            @endif

            <div class="w-28 h-1.5 bg-red-500 mb-4 rounded-full"></div>

            <!-- Description -->
            <p class="text-xl font-semibold max-w-4xl mb-10">
                {{ __('about.cert_desc') }}
            </p>

            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- LEFT CARD : K3 -->
                <div class="bg-white rounded-xl shadow-md border border-gray-300 p-8 h-full">

                    <!-- Header -->
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-12 h-12 flex items-center justify-center bg-[#C2F3B4] rounded-lg shrink-0">
                            <!-- Icon -->
                            <svg width="26" height="26" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.25 21.7C6.25 15.04 6.25 11.71 7.04 10.59C7.82 9.47 10.95 8.4 17.22 6.25L18.41 5.84C21.68 4.72 23.31 4.17 25 4.17C26.69 4.17 28.32 4.72 31.59 5.84L32.78 6.25C39.05 8.4 42.18 9.47 42.96 10.59C43.75 11.71 43.75 15.04 43.75 21.7V24.98C43.75 36.73 34.92 42.43 29.38 44.85C27.88 45.5 27.12 45.83 25 45.83C22.88 45.83 22.12 45.5 20.62 44.85C15.08 42.43 6.25 36.73 6.25 24.98V21.7Z"
                                    stroke="#5EB546" stroke-width="3.5" />
                                <path d="M19.8 25.8L22.8 29.2L30.2 20.8" stroke="#5EB546" stroke-width="3.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                        @if (app()->getlocale() === 'id')
                            <h3 class="text-xl font-bold leading-tight">
                                K3 – Keselamatan &<br />
                                Kesehatan Kerja
                            </h3>
                        @else
                            <h3 class="text-xl font-bold leading-tight">
                                OHS – Occupational Health &<br />
                                Safety
                            </h3>
                        @endif


                    </div>

                    <!-- Content -->
                    <div class="flex flex-wrap gap-3">
                        @if (app()->getlocale() === 'id')
                            <span class="px-4 py-2 bg-green-100 text-green-800 rounded-lg text-sm font-semibold">
                                Ahli K3 Spesialis Bidang Listrik
                            </span>
                            <span class="px-4 py-2 bg-green-100 text-green-800 rounded-lg text-sm font-semibold">
                                Teknisi Scaffolding
                            </span>
                            <span class="px-4 py-2 bg-green-100 text-green-800 rounded-lg text-sm font-semibold">
                                Ahli Muda K3 Konstruksi
                            </span>
                            <span class="px-4 py-2 bg-green-100 text-green-800 rounded-lg text-sm font-semibold">
                                Juru Las Kelas I (Satu)
                            </span>
                            <span class="px-4 py-2 bg-green-100 text-green-800 rounded-lg text-sm font-semibold">
                                Program Ketrampilan Alat Berat
                            </span>
                            <span class="px-4 py-2 bg-green-100 text-green-800 rounded-lg text-sm font-semibold">
                                Tenaga Kerja Bangunan Tinggi Tingkat 2
                            </span>
                        @else
                            <span class="px-4 py-2 bg-green-100 text-green-800 rounded-lg text-sm font-semibold">
                                Electrical OHS Specialist
                            </span>
                            <span class="px-4 py-2 bg-green-100 text-green-800 rounded-lg text-sm font-semibold">
                                Scaffolding Technician
                            </span>
                            <span class="px-4 py-2 bg-green-100 text-green-800 rounded-lg text-sm font-semibold">
                                Junior Construction OHS Expert
                            </span>
                            <span class="px-4 py-2 bg-green-100 text-green-800 rounded-lg text-sm font-semibold">
                                Class I (Level 1) Welder
                            </span>
                            <span class="px-4 py-2 bg-green-100 text-green-800 rounded-lg text-sm font-semibold">
                                Heavy Equipment Skills Program
                            </span>
                            <span class="px-4 py-2 bg-green-100 text-green-800 rounded-lg text-sm font-semibold">
                                High-Rise Construction Worker Level 2
                            </span>
                        @endif

                    </div>
                </div>

                <!-- RIGHT CARD : SKA -->
                <div class="bg-white rounded-xl shadow-md border border-gray-300 p-8 h-full">

                    <!-- Header -->
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-12 h-12 flex items-center justify-center bg-blue-100 rounded-lg shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-700" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>

                        @if (app()->getlocale() === 'id')
                            <h3 class="text-xl font-bold">
                                SKA – Sertifikat Keahlian
                            </h3>
                        @else
                            <h3 class="text-xl font-bold">
                                SKA – Certificate of Expertise
                            </h3>
                        @endif

                    </div>

                    <!-- Content -->
                    <div class="space-y-4">
                        <div class="px-5 py-3 bg-blue-100 text-blue-900 rounded-lg">
                            @if (app()->getlocale() === 'id')
                                <p class="font-semibold text-sm">
                                    Ahli Teknik Tenaga Listrik
                                </p>
                                <p class="text-xs text-blue-700">
                                    Tingkat: Madya
                                </p>
                            @else
                                <p class="font-semibold text-sm">
                                    Electrical Power Engineering Expert
                                </p>
                                <p class="text-xs text-blue-700">
                                    Level: Intermediate
                                </p>
                            @endif

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    {{-- Experience --}}
    <section class="p-10 bg-white relative overflow-hidden">
        <!-- Header -->
        <div class="text-center mb-12">

            @if (app()->getlocale() === 'id')
                <h1 class="text-3xl font-bold mb-2">
                    Pengalaman
                </h1>
                <div class="w-28 h-1.5 bg-[#002473] mx-auto mb-4 rounded-full"></div>

                <p class="font-bold max-w-xl mx-auto text-xl text-gray-700">
                    Didukung oleh tenaga ahli tersertifikasi K3 yang memastikan setiap pengerjaan berjalan aman dan
                    presisi.
                </p>
            @else
                <h1 class="text-3xl font-bold mb-2">
                    Experience
                </h1>
                <div class="w-28 h-1.5 bg-[#002473] mx-auto mb-4 rounded-full"></div>

                <p class="font-bold max-w-xl mx-auto text-xl text-gray-700">
                    Supported by certified OHS professionals who ensure that every project is carried out safely and
                    with precision.
                </p>
            @endif
        </div>

        <!-- Experience Cards -->
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Item -->
            <div class="relative bg-gray-200 rounded-xl shadow-md p-6 pl-10">
                <div class="absolute left-0 top-0 h-full w-3 bg-[#002473] rounded-l-xl"></div>
                <p class="font-semibold text-gray-900">
                    {{ __('about.exp_item1') }}
                </p>
            </div>

            <div class="relative bg-gray-200 rounded-xl shadow-md p-6 pl-10">
                <div class="absolute left-0 top-0 h-full w-3 bg-[#002473] rounded-l-xl"></div>
                <p class="font-semibold text-gray-900">
                    {{ __('about.exp_item2') }}
                </p>
            </div>

            <div class="relative bg-gray-200 rounded-xl shadow-md p-6 pl-10">
                <div class="absolute left-0 top-0 h-full w-3 bg-[#002473] rounded-l-xl"></div>
                <p class="font-semibold text-gray-900">
                    {{ __('about.exp_item3') }}
                </p>
            </div>

            <div class="relative bg-gray-200 rounded-xl shadow-md p-6 pl-10">
                <div class="absolute left-0 top-0 h-full w-3 bg-[#002473] rounded-l-xl"></div>
                <p class="font-semibold text-gray-900">
                    {{ __('about.exp_item4') }}
                </p>
            </div>

            <div class="relative bg-gray-200 rounded-xl shadow-md p-6 pl-10">
                <div class="absolute left-0 top-0 h-full w-3 bg-[#002473] rounded-l-xl"></div>
                <p class="font-semibold text-gray-900">
                    {{ __('about.exp_item5') }}
                </p>
            </div>

            <div class="relative bg-gray-200 rounded-xl shadow-md p-6 pl-10">
                <div class="absolute left-0 top-0 h-full w-3 bg-[#002473] rounded-l-xl"></div>
                <p class="font-semibold text-gray-900">
                    {{ __('about.exp_item6') }}
                </p>
            </div>

        </div>
    </section>


    {{-- End Section --}}
    <section class="relative py-24 md:py-32 overflow-hidden bg-[#001c5a]">

        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute inset-0 opacity-[0.07]"
                style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 40px 40px;">
            </div>

            <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-600/20 rounded-full blur-[100px] animate-pulse">
            </div>
            <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-red-600/10 rounded-full blur-[100px]"></div>
        </div>

        <div class=" mx-auto px-6 relative z-10 text-center">

            <div
                class="inline-block mb-6 px-4 py-1.5 rounded-full border border-blue-400/30 bg-blue-500/10 backdrop-blur-sm">
                <span class="text-blue-300 text-[10px] md:text-xs uppercase tracking-[0.2em] font-bold">
                    Professional Engineering Services
                </span>
            </div>

            @if (app()->getlocale() === 'id')
                <h2
                    class="max-w-6xl text-4xl md:text-5xl font-extrabold mx-auto text-white leading-[1.1] tracking-tight">
                    Integritas dalam bekerja, kualitas dalam hasil. Percayakan kebutuhan <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-200">
                        konstruksi</span>, <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-200">mekanikal</span>,
                    dan <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-200">elektrikal</span>
                    Anda kepada mitra yang tepat.
                </h2>
            @else
                <h2
                    class="max-w-6xl text-4xl md:text-5xl font-extrabold mx-auto text-white leading-[1.1] tracking-tight">
                    Integrity in every task, quality in every result. Entrust your
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-200">
                        construction
                    </span>,
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-200">
                        mechanical
                    </span>,
                    and
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-200">
                        electrical
                    </span>
                    needs to the right partner.
                </h2>
            @endif


            @if (app()->getlocale() === 'id')
                <p class="mt-8 text-blue-100/80 text-base md:text-lg leading-relaxed max-w-sm mx-auto font-light">
                    Mari wujudkan proyek impian Anda bersama <span class="text-white font-medium">CV. Mitra Sarana Abdi
                        Pratama.</span>
                </p>
            @else
                <p class="mt-8 text-blue-100/80 text-base md:text-lg leading-relaxed max-w-sm mx-auto font-light">
                    Let’s bring your dream project to life together with <span class="text-white font-medium">CV. Mitra
                        Sarana Abdi
                        Pratama.</span>
                </p>
            @endif



            <div class="mt-12 flex flex-col sm:flex-row justify-center items-center gap-4">
                <a href="#"
                    class="group relative inline-flex items-center gap-3 px-8 py-4 bg-red-600 text-white text-sm font-bold rounded-xl transition-all duration-300 hover:bg-red-700 hover:scale-105 hover:shadow-[0_10px_20px_-10px_rgba(220,38,38,0.5)]">
                    {{ __('about.cta_button2') }}
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
</x-layout>
