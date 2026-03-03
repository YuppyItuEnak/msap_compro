<?php
$isIndo = app()->getLocale() === 'id';
?>

<x-layout>
    {{-- Hero Section --}}
    <section class="relative py-32 md:py-48 overflow-hidden bg-center bg-cover "
        style="background-image: url('{{ asset('images/hero.jpg') }}');">


        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center">

                <h1
                    class="text-5xl md:text-7xl font-extrabold text-white leading-tight mb-6 [text-shadow:_0_4px_12px_rgb(0_0_0_/_50%)]">

                    @if ($isIndo)
                        Kontraktor & Maintenance <br>Terpercaya di <span class="text-blue-800">Indonesia </span>
                    @else
                        <span class="text-blue-800">Indonesia</span>'s Leading Contractor & Maintenance Provider
                    @endif
                </h1>

                <div class="w-24 h-1.5 bg-blue-800 mx-auto mb-8 rounded-full shadow-lg"></div>

                <p
                    class="text-xl md:text-2xl text-white max-w-3xl mx-auto leading-relaxed [text-shadow:_0_2px_8px_rgb(0_0_0_/_60%)]">
                    {{ __('message.Hero_Section.Subtitle') }} <span
                        class="font-bold">{{ __('message.Hero_Section.Sub2') }}</span>
                </p>

                <div class="mt-12 flex flex-wrap justify-center gap-5">
                    <button
                        class="px-8 py-4 bg-white text-[#002473] font-bold rounded-xl shadow-2xl hover:bg-gray-100 transition-all transform hover:-translate-y-1">
                        {{ __('message.Contact_Button') }}
                    </button>

                    <button
                        class="px-8 py-4 bg-[#002473]/80 text-white border-2 border-white/30 rounded-xl font-bold backdrop-blur-sm hover:bg-[#002473] transition-all transform hover:-translate-y-1 shadow-2xl">
                        {{ __('message.Learn_Button') }}
                    </button>
                </div>
            </div>
        </div>
    </section>



    {{-- About Section --}}
    <section class="max-w-screen-xl mx-auto py-16 px-6 grid md:grid-cols-2 gap-10">
        <img src="images/kantor.jpg" class="rounded-lg shadow order-1 md:order-1 w-full h-auto" />

        <div class="order-2 md:order-1">
            <h2 class="text-4xl font-bold mb-4 text-[#002473]">
                {{ __('message.About_Section.About_Title') }}
            </h2>

            <p class="text-gray-800 text-xl font-semibold leading-relaxed mb-4 md:mr-25">
                {{ __('message.About_Section.About_Description1') }}
            </p>

            <p class="text-gray-800 text-xl font-semibold leading-relaxed mb-12 md:mr-25">
                {{ __('message.About_Section.About_Description2') }}
            </p>

            <a href=""
                class="text-white bg-[#002473]/80 hover:bg-[#002473] transition-all transform hover:-translate-y-1
                      focus:ring-4 focus:ring-blue-300
                      shadow-md font-medium rounded-lg text-sm
                      px-5 py-2.5 transition duration-150">
                {{ __('message.Learn_Button') }}
            </a>
        </div>
    </section>

    {{-- Services Section --}}
    <section class="relative py-24 overflow-hidden bg-white">
        {{-- RESPONSIVE DIAGONAL BACKGROUND --}}
        <div class="absolute inset-0 left-0 z-0">
            <div
                class="
            absolute inset-0
            bg-gray-100
            md:bg-[#D9DEE8]

            /* MOBILE */
            w-full
            transform-none

            /* DESKTOP */
            md:w-[70%]
            md:skew-x-12
            md:origin-top-left
            md:-translate-x-[20%]
        ">
            </div>
        </div>


        <div class="max-w-7xl mx-auto px-6 relative z-10">
            {{-- Title --}}
            <div class="text-center mb-14">
                <h2 class="text-4xl md:text-5xl font-extrabold">
                    {{ __('message.Service_Section.Service_Title1') }} <span
                        class="text-[#002473]">{{ __('message.Service_Section.Service_Title2') }}</span>
                </h2>
                <div class="w-20 h-1 bg-blue-700 mx-auto mt-4 rounded-full"></div>

                <p class="mt-6 text-2xl text-gray-600 max-w-3xl mx-auto">
                    {{ __('message.Service_Section.Service_Subtitle') }}
                </p>
            </div>

            {{-- Content --}}
            <div class="grid md:grid-cols-2 gap-14 items-center">

                {{-- Left Circle --}}
                <div class="relative flex justify-center items-center">

                    {{-- Main Circle --}}
                    <div
                        class="
            w-56 h-56
            sm:w-64 sm:h-64
            md:w-80 md:h-80
            rounded-full
            bg-[#3F5FB5]
            flex flex-col items-center justify-center
            text-white
            border-[8px] sm:border-[10px] border-white
            shadow-lg
        ">

                        <span class="text-4xl sm:text-5xl md:text-7xl font-extrabold leading-none">
                            631
                        </span>

                        <span class="text-sm sm:text-base md:text-lg font-semibold mt-1 text-center">
                            Completed Projects
                        </span>

                        <span class="mt-1 sm:mt-2 text-xs sm:text-sm opacity-90">
                            Per 2025
                        </span>
                    </div>

                    {{-- Experience Badge --}}
                    <div
                        class="
            absolute
            -top-3 right-15 md:right-25
            sm:-top-4 sm:right-6
            md:-top-2 md:right-10
            w-16 h-16
            sm:w-20 sm:h-20
            md:w-24 md:h-24
            rounded-full
            bg-[#3F5FB5]
            flex flex-col items-center justify-center
            text-white
            border-[4px] sm:border-[6px] border-white
            shadow-md
        ">

                        <span class="text-lg sm:text-xl md:text-2xl font-extrabold leading-none">
                            11
                        </span>
                        <span class="text-[10px] sm:text-xs font-medium leading-tight">
                            Years
                        </span>
                        <span class="text-[10px] sm:text-xs font-medium leading-tight">
                            Experience
                        </span>
                    </div>

                </div>



                {{-- Right Services --}}
                <div class="grid sm:grid-cols-2 gap-6">

                    {{-- Mechanical --}}
                    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                        <div class="flex items-center mb-4">
                            <div>
                                <svg width="40" height="40" viewBox="0 0 57 57" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M28.5 36.8125C26.2954 36.8125 24.1811 35.9367 22.6222 34.3778C21.0633 32.8189 20.1875 30.7046 20.1875 28.5C20.1875 26.2954 21.0633 24.1811 22.6222 22.6222C24.1811 21.0633 26.2954 20.1875 28.5 20.1875C30.7046 20.1875 32.8189 21.0633 34.3778 22.6222C35.9367 24.1811 36.8125 26.2954 36.8125 28.5C36.8125 30.7046 35.9367 32.8189 34.3778 34.3778C32.8189 35.9367 30.7046 36.8125 28.5 36.8125ZM46.1462 30.8038C46.2412 30.0438 46.3125 29.2838 46.3125 28.5C46.3125 27.7163 46.2412 26.9325 46.1462 26.125L51.1575 22.2538C51.6087 21.8975 51.7275 21.2563 51.4425 20.7338L46.6925 12.5163C46.4075 11.9938 45.7662 11.78 45.2437 11.9938L39.33 14.3688C38.095 13.4425 36.8125 12.635 35.3162 12.0413L34.4375 5.7475C34.3892 5.46777 34.2435 5.21414 34.0262 5.03156C33.8088 4.84898 33.5338 4.74924 33.25 4.75H23.75C23.1562 4.75 22.6575 5.1775 22.5625 5.7475L21.6837 12.0413C20.1875 12.635 18.905 13.4425 17.67 14.3688L11.7562 11.9938C11.2337 11.78 10.5925 11.9938 10.3075 12.5163L5.55748 20.7338C5.24873 21.2563 5.39124 21.8975 5.84249 22.2538L10.8537 26.125C10.7587 26.9325 10.6875 27.7163 10.6875 28.5C10.6875 29.2838 10.7587 30.0438 10.8537 30.8038L5.84249 34.7463C5.39124 35.1025 5.24873 35.7438 5.55748 36.2663L10.3075 44.4838C10.5925 45.0063 11.2337 45.1963 11.7562 45.0063L17.67 42.6075C18.905 43.5575 20.1875 44.365 21.6837 44.9588L22.5625 51.2525C22.6575 51.8225 23.1562 52.25 23.75 52.25H33.25C33.8437 52.25 34.3425 51.8225 34.4375 51.2525L35.3162 44.9588C36.8125 44.3413 38.095 43.5575 39.33 42.6075L45.2437 45.0063C45.7662 45.1963 46.4075 45.0063 46.6925 44.4838L51.4425 36.2663C51.7275 35.7438 51.6087 35.1025 51.1575 34.7463L46.1462 30.8038Z"
                                        fill="#B3B3B3" />
                                </svg>

                            </div>

                        </div>
                        <h3 class="text-lg font-bold text-gray-800">Mechanical</h3>
                        <p class="text-gray-600 text-sm">
                            Generator set, otomotif, alat berat, dan lain-lain
                        </p>
                    </div>

                    {{-- Electrical --}}
                    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                        <div class="flex items-center mb-4">
                            <div>
                                <svg width="40" height="40" viewBox="0 0 57 57" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.625 52.25L26.125 34.4375L7.125 32.0625L35.625 4.75H40.375L30.875 22.5625L49.875 24.9375L21.375 52.25H16.625Z"
                                        fill="#B3B3B3" />
                                </svg>

                            </div>

                        </div>
                        <h3 class="text-lg font-bold text-gray-800">Electrical</h3>
                        <p class="text-gray-600 text-sm">
                            MDP, SDP, Motor, dan lain-lain
                        </p>
                    </div>

                    {{-- Pipping --}}
                    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                        <div class="flex items-center mb-4">
                            <div>
                                <svg width="40" height="40" viewBox="0 0 57 57" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M45.125 34.4375C45.125 34.4375 49.875 39.5913 49.875 42.75C49.875 44.0098 49.3746 45.218 48.4838 46.1088C47.593 46.9996 46.3848 47.5 45.125 47.5C43.8652 47.5 42.657 46.9996 41.7662 46.1088C40.8754 45.218 40.375 44.0098 40.375 42.75C40.375 39.5913 45.125 34.4375 45.125 34.4375ZM11.875 42.75V21.375C10.6152 21.375 9.40704 20.8746 8.51624 19.9838C7.62544 19.093 7.125 17.8848 7.125 16.625C7.125 15.3652 7.62544 14.157 8.51624 13.2662C9.40704 12.3754 10.6152 11.875 11.875 11.875V9.5C11.875 8.24022 12.3754 7.03204 13.2662 6.14124C14.157 5.25044 15.3652 4.75 16.625 4.75H21.375C22.6348 4.75 23.843 5.25044 24.7338 6.14124C25.6246 7.03204 26.125 8.24022 26.125 9.5V11.875H45.125C46.3848 11.875 47.593 12.3754 48.4838 13.2662C49.3746 14.157 49.875 15.3652 49.875 16.625V26.125C50.5049 26.125 51.109 26.3752 51.5544 26.8206C51.9998 27.266 52.25 27.8701 52.25 28.5C52.25 29.1299 51.9998 29.734 51.5544 30.1794C51.109 30.6248 50.5049 30.875 49.875 30.875H40.375C39.7451 30.875 39.141 30.6248 38.6956 30.1794C38.2502 29.734 38 29.1299 38 28.5C38 27.8701 38.2502 27.266 38.6956 26.8206C39.141 26.3752 39.7451 26.125 40.375 26.125V21.375H26.125V42.75H28.5C29.7598 42.75 30.968 43.2504 31.8588 44.1412C32.7496 45.032 33.25 46.2402 33.25 47.5V52.25H4.75V47.5C4.75 46.2402 5.25044 45.032 6.14124 44.1412C7.03204 43.2504 8.24022 42.75 9.5 42.75H11.875Z"
                                        fill="#B3B3B3" />
                                </svg>

                            </div>

                        </div>
                        <h3 class="text-lg font-bold text-gray-800">Pipping</h3>
                        <p class="text-gray-600 text-sm">
                            Hydrant, air bersih, air limbah, dan lain-lain
                        </p>
                    </div>

                    {{-- Sipil --}}
                    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                        <div class="flex items-center mb-4">
                            <div>
                                <svg width="40" height="40" viewBox="0 0 57 57" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M53.3774 46.3126H49.875V21.3751C49.875 20.4303 49.4997 19.5241 48.8316 18.856C48.1635 18.1879 47.2573 17.8126 46.3125 17.8126H36.5156C36.2794 17.8126 36.0529 17.9064 35.8859 18.0734C35.7188 18.2405 35.625 18.467 35.625 18.7032V46.3126H32.0625V7.21637C32.0684 6.66147 31.948 6.1125 31.7104 5.61102C31.4727 5.10953 31.1241 4.66868 30.6909 4.32184C30.1005 3.86147 29.3799 3.59885 28.6317 3.57127C27.8835 3.54369 27.1456 3.75256 26.5228 4.16821L8.71032 16.0313C8.22168 16.3573 7.82123 16.7991 7.54464 17.3174C7.26805 17.8356 7.12389 18.4142 7.12501 19.0016V46.3126H3.62262C3.16232 46.3058 2.71651 46.4736 2.37489 46.7821C2.03326 47.0907 1.82116 47.5172 1.78126 47.9758C1.76508 48.2195 1.79917 48.4639 1.88142 48.6938C1.96366 48.9237 2.0923 49.1343 2.25934 49.3124C2.42639 49.4905 2.62827 49.6323 2.85245 49.7291C3.07663 49.8259 3.31832 49.8756 3.56251 49.8751H53.4375C53.6817 49.8756 53.9234 49.8259 54.1476 49.7291C54.3717 49.6323 54.5736 49.4905 54.7407 49.3124C54.9077 49.1343 55.0364 48.9237 55.1186 48.6938C55.2008 48.4639 55.2349 48.2195 55.2188 47.9758C55.1789 47.5172 54.9668 47.0907 54.6251 46.7821C54.2835 46.4736 53.8377 46.3058 53.3774 46.3126ZM16.9219 40.9688C16.9224 41.213 16.8727 41.4547 16.7759 41.6789C16.6791 41.9031 16.5373 42.105 16.3592 42.272C16.181 42.439 15.9705 42.5677 15.7406 42.6499C15.5107 42.7322 15.2663 42.7663 15.0226 42.7501C14.5636 42.7102 14.1368 42.4977 13.8282 42.1556C13.5195 41.8135 13.352 41.3672 13.3594 40.9065V37.4665C13.3531 37.0063 13.5211 36.5608 13.8295 36.2193C14.138 35.8778 14.5642 35.6655 15.0226 35.6251C15.2663 35.6089 15.5107 35.643 15.7406 35.7252C15.9705 35.8075 16.181 35.9361 16.3592 36.1032C16.5373 36.2702 16.6791 36.4721 16.7759 36.6963C16.8727 36.9205 16.9224 37.1621 16.9219 37.4063V40.9688ZM16.9219 28.5001C16.9224 28.7443 16.8727 28.986 16.7759 29.2101C16.6791 29.4343 16.5373 29.6362 16.3592 29.8032C16.181 29.9703 15.9705 30.0989 15.7406 30.1812C15.5107 30.2634 15.2663 30.2975 15.0226 30.2813C14.5638 30.2409 14.1373 30.0283 13.8288 29.6863C13.5202 29.3444 13.3525 28.8983 13.3594 28.4377V24.9977C13.3531 24.5375 13.5211 24.092 13.8295 23.7505C14.138 23.409 14.5642 23.1967 15.0226 23.1563C15.2663 23.1402 15.5107 23.1742 15.7406 23.2565C15.9705 23.3387 16.181 23.4674 16.3592 23.6344C16.5373 23.8015 16.6791 24.0033 16.7759 24.2275C16.8727 24.4517 16.9224 24.6934 16.9219 24.9376V28.5001ZM25.8281 40.9688C25.8287 41.213 25.779 41.4547 25.6822 41.6789C25.5854 41.9031 25.4435 42.105 25.2654 42.272C25.0873 42.439 24.8767 42.5677 24.6468 42.6499C24.4169 42.7322 24.1725 42.7663 23.9289 42.7501C23.4706 42.7102 23.0445 42.4984 22.7359 42.1573C22.4274 41.8161 22.2594 41.3709 22.2656 40.9109V37.4665C22.2599 37.0067 22.4281 36.5617 22.7365 36.2207C23.045 35.8796 23.4708 35.6677 23.9289 35.6273C24.1725 35.6111 24.4169 35.6452 24.6468 35.7275C24.8767 35.8097 25.0873 35.9384 25.2654 36.1054C25.4435 36.2724 25.5854 36.4743 25.6822 36.6985C25.779 36.9227 25.8287 37.1644 25.8281 37.4086V40.9688ZM25.8281 28.5001C25.8287 28.7443 25.779 28.986 25.6822 29.2101C25.5854 29.4343 25.4435 29.6362 25.2654 29.8032C25.0873 29.9703 24.8767 30.0989 24.6468 30.1812C24.4169 30.2634 24.1725 30.2975 23.9289 30.2813C23.4708 30.2409 23.045 30.029 22.7365 29.688C22.4281 29.3469 22.2599 28.902 22.2656 28.4422V24.9977C22.2599 24.5379 22.4281 24.093 22.7365 23.7519C23.045 23.4109 23.4708 23.1989 23.9289 23.1586C24.1725 23.1424 24.4169 23.1765 24.6468 23.2587C24.8767 23.341 25.0873 23.4696 25.2654 23.6366C25.4435 23.8037 25.5854 24.0056 25.6822 24.2298C25.779 24.4539 25.8287 24.6956 25.8281 24.9398V28.5001Z"
                                        fill="#B3B3B3" />
                                </svg>

                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800">Sipil</h3>
                        <p class="text-gray-600 text-sm">
                            Konstruksi umum dan infrastruktur
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>


    {{-- Superiority Section  --}}
    <section class="max-w-screen-xl mx-auto py-16 px-6">
        {{-- HEADER --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-10">
            <div>
                <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900">
                    {{ __('message.Superiority_Section.Superiority_Title') }}<span
                        class="text-[#002473]">{{ __('message.Superiority_Section.Superiority_Title2') }}</span> ?
                </h2>
                <p class="mt-2 text-xl font-semibold text-gray-600">
                    {{ __('message.Superiority_Section.Superiority_Subtitle') }}
                </p>
            </div>

            <a href="#"
                class="mt-4 md:mt-0 text-[#002473] font-bold flex items-center gap-2 hover:gap-3 transition-all hidden md:flex">
                {{ __('message.Learn_Button') }}
                <span class="text-xl font-bold">→</span>
            </a>
        </div>

        {{-- CARDS --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            {{-- Card 1 --}}
            <div
                class="border border-blue-200 rounded-xl p-6 bg-white hover:shadow-lg transition
            flex flex-col items-center text-center">

                <div class="w-20 h-20 rounded-full bg-[#002473] flex items-center justify-center mb-18 mt-5">
                    <svg width="45" height="45" viewBox="0 0 60 60" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8.445 12.705C7.5 14.05 7.5 18.05 7.5 26.0425V29.9775C7.5 44.0725 18.0975 50.915 24.7475 53.8175C26.55 54.605 27.4525 55 30 55C32.55 55 33.45 54.605 35.2525 53.8175C41.9025 50.9125 52.5 44.075 52.5 29.9775V26.0425C52.5 18.0475 52.5 14.05 51.555 12.705C50.6125 11.3625 46.855 10.075 39.3375 7.5025L37.905 7.0125C33.9875 5.67 32.03 5 30 5C27.97 5 26.0125 5.67 22.095 7.0125L20.6625 7.5C13.145 10.075 9.3875 11.3625 8.445 12.705ZM37.65 26.25C37.814 26.0661 37.9402 25.8518 38.0213 25.6192C38.1025 25.3866 38.137 25.1403 38.1229 24.8943C38.1089 24.6483 38.0466 24.4076 37.9395 24.1857C37.8323 23.9638 37.6826 23.7652 37.4988 23.6012C37.3149 23.4373 37.1005 23.3111 36.8679 23.2299C36.6353 23.1488 36.389 23.1143 36.1431 23.1283C35.8971 23.1423 35.6563 23.2047 35.4344 23.3118C35.2126 23.4189 35.014 23.5687 34.85 23.7525L27.3225 32.1875L25.1475 29.7525C24.8151 29.3852 24.3508 29.1644 23.8561 29.1382C23.3614 29.1121 22.8765 29.2828 22.5072 29.6131C22.138 29.9434 21.9145 30.4063 21.8855 30.9009C21.8565 31.3954 22.0244 31.8813 22.3525 32.2525L25.9225 36.2525C26.0984 36.4495 26.3139 36.6072 26.555 36.7151C26.796 36.8231 27.0571 36.8789 27.3213 36.8789C27.5854 36.8789 27.8465 36.8231 28.0875 36.7151C28.3286 36.6072 28.5441 36.4495 28.72 36.2525L37.65 26.25Z"
                            fill="white" />
                    </svg>

                </div>

                <h3 class="font-bold text-2xl text-gray-800 mb-10">
                    {{ __('message.Superiority_Section.Superiority_Point1_Title') }}
                </h3>

                <p class="text-xl  text-gray-500 mb-15">
                    SIUP, NIB, NPWP & <br>Akta Resmi
                </p>
            </div>


            {{-- Card 2 --}}
            <div
                class="border border-blue-200 rounded-xl p-6 bg-white hover:shadow-lg transition
            flex flex-col items-center text-center">

                <div class="w-20 h-20 rounded-full bg-[#002473] flex items-center justify-center mb-18 mt-5">
                    <svg width="45" height="45" viewBox="0 0 60 60" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M38.6925 32.2251L42.48 53.5401C42.5224 53.7911 42.4872 54.049 42.379 54.2795C42.2709 54.5099 42.095 54.7018 41.8748 54.8296C41.6546 54.9573 41.4007 55.0148 41.147 54.9944C40.8933 54.9739 40.6518 54.8765 40.455 54.7151L31.505 47.9976C31.0729 47.6748 30.5481 47.5004 30.0087 47.5004C29.4694 47.5004 28.9446 47.6748 28.5125 47.9976L19.5475 54.7126C19.3508 54.8737 19.1096 54.971 18.8562 54.9915C18.6028 55.0119 18.3492 54.9547 18.1291 54.8273C17.9091 54.6999 17.7332 54.5084 17.6248 54.2784C17.5164 54.0485 17.4807 53.7909 17.5225 53.5401L21.3075 32.2251"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M30 35C38.2843 35 45 28.2843 45 20C45 11.7157 38.2843 5 30 5C21.7157 5 15 11.7157 15 20C15 28.2843 21.7157 35 30 35Z"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>


                </div>

                <h3 class="font-bold text-2xl text-gray-800 mb-10">
                    {{ __('message.Superiority_Section.Superiority_Point2_Title') }}
                </h3>

                <p class="text-xl  text-gray-500 mb-15">
                    {{ __('message.Superiority_Section.Superiority_Point2_Description') }}
                </p>
            </div>

            {{-- Card 3 --}}
            <div
                class="border border-blue-200 rounded-xl p-6 bg-white hover:shadow-lg transition
            flex flex-col items-center text-center">

                <div class="w-20 h-20 rounded-full bg-[#002473] flex items-center justify-center mb-18 mt-5">
                    <svg width="45" height="45" viewBox="0 0 60 60" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M54.0164 15.8203C53.8458 15.3987 53.5754 15.0247 53.2285 14.7304C52.8817 14.4362 52.4686 14.2304 52.0247 14.1309C51.5809 14.0313 51.1195 14.0409 50.6802 14.1588C50.2409 14.2767 49.8367 14.4994 49.5023 14.8078L40.4132 23.2031L37.4414 22.5656L36.7968 19.5867L45.1851 10.4977C45.4935 10.1633 45.7162 9.75913 45.8341 9.3198C45.952 8.88047 45.9616 8.4191 45.8621 7.97525C45.7625 7.5314 45.5568 7.11832 45.2626 6.77144C44.9683 6.42456 44.5943 6.15422 44.1726 5.98361C40.9863 4.70097 37.4974 4.36602 34.1252 5.01903C30.7531 5.67204 27.6414 7.28521 25.1642 9.66458C22.6871 12.0439 20.95 15.0882 20.1617 18.4313C19.3735 21.7744 19.5677 25.274 20.7211 28.5094L7.24685 40.8235C7.21478 40.8515 7.18427 40.8812 7.15544 40.9125C5.59439 42.4992 4.72355 44.6385 4.73261 46.8643C4.74168 49.0901 5.62991 51.2222 7.20383 52.7962C8.77775 54.3701 10.9098 55.2583 13.1357 55.2674C15.3615 55.2764 17.5008 54.4056 19.0875 52.8446L19.1765 52.7531L31.4906 39.2789C34.7269 40.4354 38.2284 40.6317 41.5737 39.8441C44.9189 39.0565 47.9651 37.3186 50.3454 34.8397C52.7258 32.3608 54.3387 29.2466 54.99 25.8722C55.6413 22.4978 55.3032 19.007 54.0164 15.8203ZM37.5 34.6875C35.5993 34.6932 33.7242 34.2499 32.0273 33.3938C31.4795 33.1176 30.8564 33.0281 30.253 33.139C29.6496 33.2498 29.099 33.555 28.6851 34.0078L15.0726 48.9047C14.5443 49.4331 13.8277 49.7299 13.0804 49.7299C12.3332 49.7299 11.6166 49.4331 11.0883 48.9047C10.5599 48.3763 10.2631 47.6597 10.2631 46.9125C10.2631 46.1653 10.5599 45.4487 11.0883 44.9203L25.9828 31.3102C26.4357 30.8963 26.7408 30.3457 26.8516 29.7423C26.9625 29.1389 26.873 28.5158 26.5968 27.968C25.7447 26.2717 25.3047 24.3983 25.3125 22.5C25.3162 19.2688 26.6014 16.1711 28.8862 13.8863C31.171 11.6015 34.2688 10.3162 37.5 10.3125H37.7086L31.6804 16.8445C31.3752 17.1756 31.154 17.5751 31.0353 18.0095C30.9166 18.4439 30.904 18.9004 30.9984 19.3406L32.325 25.5164C32.4388 26.0458 32.703 26.5312 33.0859 26.9141C33.4688 27.297 33.9541 27.5612 34.4836 27.675L40.6593 29.0016C41.0996 29.096 41.5561 29.0834 41.9905 28.9647C42.4248 28.846 42.8244 28.6247 43.1554 28.3195L49.6875 22.2938V22.5024C49.6831 25.7331 48.3976 28.8303 46.1129 31.1146C43.8282 33.3989 40.7308 34.6838 37.5 34.6875Z"
                            fill="white" />
                    </svg>


                </div>

                <h3 class="font-bold text-2xl text-gray-800 mb-10">
                    {{ __('message.Superiority_Section.Superiority_Point3_Title') }}
                </h3>

                <p class="text-xl  text-gray-500 mb-15">
                    {{ __('message.Superiority_Section.Superiority_Point3_Description') }}
                </p>
            </div>

            {{-- Card 4 --}}
            <div
                class="border border-blue-200 rounded-xl p-6 bg-white hover:shadow-lg transition
            flex flex-col items-center text-center">

                <div class="w-20 h-20 rounded-full bg-[#002473] flex items-center justify-center mb-18 mt-5">
                    <svg width="45" height="45" viewBox="0 0 60 60" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M42.5 45C43.8261 45 45.0979 45.5268 46.0355 46.4645C46.9732 47.4021 47.5 48.6739 47.5 50C47.5 51.3261 46.9732 52.5979 46.0355 53.5355C45.0979 54.4732 43.8261 55 42.5 55C41.1739 55 39.9021 54.4732 38.9645 53.5355C38.0268 52.5979 37.5 51.3261 37.5 50C37.5 47.225 39.725 45 42.5 45ZM2.5 5H10.675L13.025 10H50C50.663 10 51.2989 10.2634 51.7678 10.7322C52.2366 11.2011 52.5 11.837 52.5 12.5C52.5 12.925 52.375 13.35 52.2 13.75L43.25 29.925C42.4 31.45 40.75 32.5 38.875 32.5H20.25L18 36.575L17.925 36.875C17.925 37.0408 17.9908 37.1997 18.1081 37.3169C18.2253 37.4342 18.3842 37.5 18.55 37.5H47.5V42.5H17.5C16.1739 42.5 14.9021 41.9732 13.9645 41.0355C13.0268 40.0979 12.5 38.8261 12.5 37.5C12.5 36.625 12.725 35.8 13.1 35.1L16.5 28.975L7.5 10H2.5V5ZM17.5 45C18.8261 45 20.0979 45.5268 21.0355 46.4645C21.9732 47.4021 22.5 48.6739 22.5 50C22.5 51.3261 21.9732 52.5979 21.0355 53.5355C20.0979 54.4732 18.8261 55 17.5 55C16.1739 55 14.9021 54.4732 13.9645 53.5355C13.0268 52.5979 12.5 51.3261 12.5 50C12.5 47.225 14.725 45 17.5 45ZM40 27.5L46.95 15H15.35L21.25 27.5H40Z"
                            fill="white" />
                    </svg>


                </div>

                <h3 class="font-bold text-2xl text-gray-800 mb-3">
                    {{ __('message.Superiority_Section.Superiority_Point4_Title') }}
                </h3>

                <p class="text-xl  text-gray-500 mb-15">
                    {{ __('message.Superiority_Section.Superiority_Point4_Description') }}
                </p>
            </div>

        </div>

        <a href="">

            <button type="button"
                class="mt-10 md:mt-0 mx-auto md:hidden
            flex items-center gap-2
             bg-[#3F5FB5] text-white font-bold
            px-6 py-3 rounded-lg
            shadow-md
            hover:gap-3 hover:bg-[#002473] transition-all transform hover:-translate-y-1">

                {{ __('message.Learn_Button') }}
                <span class="text-xl">→</span>
            </button>
        </a>

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

        <div class="max-w-4xl mx-auto px-6 relative z-10 text-center">

            <div
                class="inline-block mb-6 px-4 py-1.5 rounded-full border border-blue-400/30 bg-blue-500/10 backdrop-blur-sm">
                <span class="text-blue-300 text-[10px] md:text-xs uppercase tracking-[0.2em] font-bold">
                    Professional Engineering Services
                </span>
            </div>

            <h2 class="text-4xl md:text-6xl font-extrabold text-white leading-[1.1] tracking-tight">
                @if ($isIndo)
                    Siap Menjadi Mitra Strategis <br class="hidden md:block">
                    Solusi <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-200">Kontraktor</span>
                    Anda
                @else
                    Ready to be your strategic partner in <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-200">contracting</span>
                    and maintenance solutions.
                @endif


            </h2>



            <p class="mt-8 text-blue-100/80 text-base md:text-lg leading-relaxed max-w-2xl mx-auto font-light">
                @if ($isIndo)
                    Konsultasikan kebutuhan <span class="text-white font-medium">elektrikal, mekanikal, dan
                        konstruksi</span> Anda bersama tim ahli yang mengutamakan kualitas dan presisi.
                @else
                    Consult your <span class="text-white font-medium">electrical, mechanical, and construction</span>
                    needs with an expert team that prioritizes quality and precision.
                @endif

            </p>

            <div class="mt-12 flex flex-col sm:flex-row justify-center items-center gap-4">
                <a href="#"
                    class="group relative inline-flex items-center gap-3 px-8 py-4 bg-red-600 text-white text-sm font-bold rounded-xl transition-all duration-300 hover:bg-red-700 hover:scale-105 hover:shadow-[0_10px_20px_-10px_rgba(220,38,38,0.5)]">
                    {{ __('message.Contact_Button') }}
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
