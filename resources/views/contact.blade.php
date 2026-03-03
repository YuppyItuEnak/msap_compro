<x-layout>
    <section class="relative py-32 md:py-48 overflow-hidden bg-gray-100">
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center">

                <h1
                    class="text-5xl md:text-7xl font-extrabold text-white leading-tight mb-6 [text-shadow:_0_4px_12px_rgb(0_0_0_/_50%)]">
                    {{ __('contact.contact_title') }} <span
                        class="text-blue-800">{{ __('contact.contact_title2') }}</span>
                </h1>


                <p
                    class="text-xl md:text-2xl text-white max-w-3xl mx-auto leading-relaxed [text-shadow:_0_2px_8px_rgb(0_0_0_/_60%)]">
                    {{ __('contact.contact_sub') }}
                </p>
                <div class="w-32 h-1.5 bg-red-600 mx-auto mt-6"></div>
            </div>
        </div>
    </section>

    <div class="max-w-6xl mx-auto px-4 py-16">

        <div class="text-center mb-12">
            @if (app()->getlocale() === 'id')
                <p class="text-blue-900 font-bold uppercase tracking-[0.2em] text-sm mb-2">Informasi Perusahaan</p>
            @else
                <p class="text-blue-900 font-bold uppercase tracking-[0.2em] text-sm mb-2">Company Information</p>
            @endif
            <h2 class="text-3xl md:text-4xl font-black text-gray-800">
                CV. MITRA SARANA <span class="text-blue-800 uppercase">Abdi Pratama</span>
            </h2>
            <div class="w-20 h-1 bg-red-600 mx-auto mt-4"></div>
        </div>

        <div class="rounded-2xl overflow-hidden shadow-2xl border border-gray-100 mb-16">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.270928236209!2d112.775833!3d-7.3235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb217f259695%3A0x66c89c894817a783!2sRungkut%20Menanggal%20Harapan!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
            <div class="space-y-8">
                <div class="bg-white p-10 rounded-3xl shadow-sm border border-gray-100">
                    <div class="bg-blue-50 w-14 h-14 rounded-2xl flex items-center justify-center text-blue-600 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    @if (app()->getlocale() === 'id')
                        <h3 class="font-bold text-2xl text-gray-800 mb-6">Jam Operasional</h3>
                        <ul class="space-y-4 text-gray-600 text-lg">
                            <li class="flex flex-col">
                                <span class="font-medium text-gray-800">Senin - Jumat: 08:00 - 17:00 WIB</span>
                            </li>
                            <li class="flex flex-col">
                                <span class="font-medium text-gray-800">Sabtu: 08:00 - 13:00 WIB</span>
                            </li>
                            <li class="flex flex-col">
                                <span class="font-medium text-gray-800 text-red-500">Minggu & Hari Libur: Tutup</span>
                            </li>
                        </ul>
                        <p class="text-xs text-gray-400 mt-8 italic">
                            * Untuk keadaan darurat, hubungi nomor HP / WhatsApp
                        </p>
                    @else
                        <h3 class="font-bold text-2xl text-gray-800 mb-6">Operating Hours</h3>
                        <ul class="space-y-4 text-gray-600 text-lg">
                            <li class="flex flex-col">
                                <span class="font-medium text-gray-800">Monday - Friday: 08:00 AM - 05:00 PM
                                    (WIB)</span>
                            </li>
                            <li class="flex flex-col">
                                <span class="font-medium text-gray-800">Saturday: 08:00 AM - 01:00 PM (WIB)</span>
                            </li>
                            <li class="flex flex-col">
                                <span class="font-medium text-gray-800 text-red-500">Sunday & Public Holidays:
                                    Closed</span>
                            </li>
                        </ul>
                        <p class="text-xs text-gray-400 mt-8 italic">
                            * For emergencies, please contact our mobile / WhatsApp number
                        </p>
                    @endif

                </div>

                <div class="bg-white p-10 rounded-3xl shadow-sm border border-gray-100 flex items-start space-x-5">
                    <div class="bg-blue-50 p-4 rounded-xl text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 text-lg">Email</h4>
                        <p class="text-gray-600 mt-2 font-medium">cvmsap@yahoo.co.id</p>
                    </div>
                </div>
            </div>

            <div class="space-y-8">
                <div class="bg-white p-10 rounded-3xl shadow-sm border border-gray-100 flex items-start space-x-5">
                    <div class="bg-blue-50 p-4 rounded-xl text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div>
                        @if (app()->getlocale() === 'id')
                            <h4 class="font-bold text-gray-800 text-lg">Alamat Perusahaan</h4>
                        @else
                            <h4 class="font-bold text-gray-800 text-lg">Company Address</h4>
                        @endif

                        <p class="text-gray-600 mt-2 leading-relaxed">Rungkut Menanggal Harapan Blok O No. 23 Surabaya,
                            Jawa Timur</p>
                    </div>
                </div>

                <div class="bg-white p-10 rounded-3xl shadow-sm border border-gray-100 flex items-start space-x-5">
                    <div class="bg-blue-50 p-4 rounded-xl text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <div>
                        @if (app()->getlocale() === 'id')
                            <h4 class="font-bold text-gray-800 text-lg">Nomor Telepon</h4>
                            <div class="text-gray-600 mt-2 space-y-1">
                                <p>Telepon: <span class="font-semibold text-gray-800">031-8793878</span></p>
                                <p>Hp : <span class="font-semibold text-gray-800">082231881979</span></p>
                            </div>
                        @else
                            <h4 class="font-bold text-gray-800 text-lg">Phone Number</h4>
                            <div class="text-gray-600 mt-2 space-y-1">
                                <p>Telephone: <span class="font-semibold text-gray-800">031-8793878</span></p>
                                <p>Mobile: <span class="font-semibold text-gray-800">082231881979</span></p>
                            </div>
                        @endif

                    </div>
                </div>

                <div class="p-2">
                    <h3 class="font-bold text-lg text-gray-800 mb-3 uppercase tracking-wide">{{ __('contact.contact') }}</h3>
                    <p class="text-gray-500 text-xs leading-relaxed">
                       {{ __('contact.contact_desc') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
