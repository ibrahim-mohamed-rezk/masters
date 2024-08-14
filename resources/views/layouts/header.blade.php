<header id="header"
    class="header w-full mx-auto flex items-center justify-start flex-col relative bg-cover bg-center bg-no-repeat min-h-[650px] "
    style="background-image: url({{ asset('assets/images/slider/slider-1.jpg') }});">
    <div class="container z-10">

        <div class="top-bar w-full">
            <div class="w-full">
                <div class="top-bar__container w-full flex items-center justify-between py-5 px-2">
                    <div class="social">
                        <ul class="social-list flex items-center justify-center gap-3">
                            <li
                                class="text-[var(--yello-primary)] bg-[var(--white-primary)] lg:w-[35px] md:w-[25px] lg:h-[35px] md:h-[25px] w-[20px] h-[20px] text-[12px] md:text-[15px] lg:text-[18px] border rounded-full flex items-center justify-center cursor-pointer">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li
                                class="text-[var(--yello-primary)] bg-[var(--white-primary)] lg:w-[35px] md:w-[25px] lg:h-[35px] md:h-[25px] w-[20px] h-[20px] text-[12px] md:text-[15px] lg:text-[18px] border rounded-full flex items-center justify-center cursor-pointer">
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li
                                class="text-[var(--yello-primary)] bg-[var(--white-primary)] lg:w-[35px] md:w-[25px] lg:h-[35px] md:h-[25px] w-[20px] h-[20px] text-[12px] md:text-[15px] lg:text-[18px] border rounded-full flex items-center justify-center cursor-pointer">
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li
                                class="text-[var(--yello-primary)] bg-[var(--white-primary)] lg:w-[35px] md:w-[25px] lg:h-[35px] md:h-[25px] w-[20px] h-[20px] text-[12px] md:text-[15px] lg:text-[18px] border rounded-full flex items-center justify-center cursor-pointer">
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </li>
                            <li
                                class="text-[var(--yello-primary)] bg-[var(--white-primary)] lg:w-[35px] md:w-[25px] lg:h-[35px] md:h-[25px] w-[20px] h-[20px] text-[12px] md:text-[15px] lg:text-[18px] border rounded-full flex items-center justify-center cursor-pointer">
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                            <li
                                class="text-[var(--yello-primary)] bg-[var(--white-primary)] lg:w-[35px] md:w-[25px] lg:h-[35px] md:h-[25px] w-[20px] h-[20px] text-[12px] md:text-[15px] lg:text-[18px] border rounded-full flex items-center justify-center cursor-pointer">
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                            </li>
                        </ul>
                    </div>

                    <a href="#" class="news flex items-center justify-center gap-3">
                        <span
                            class="news__ribbon flex items-center justify-center bg-[var(--yello-primary)] rounded-3xl py-[2px] px-[5px] md:py-[5px] md:px-[10px] font-bold text-white">متاح
                            الآن</span>
                        <span class="text-[var(--yello-primary)] font-bold hidden sm:block ">عروض الصيف</span>
                    </a>

                    <div class="reach hidden lg:block">
                        <ul class="flex items-center justify-center gap-4">
                            <li>123456789</li>
                            <li>12345678974</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <nav class="w-full z-20 fade-up relative flex items-center justify-center">
            <div class="max-w-screen-xl flex  items-center justify-between mx-auto p-4 w-full">
                <a href="/" class="flex items-center space-x-3 w-28">
                    <img src="{{ asset('assets/images/logo/logo.avif') }}" class="" alt="Logo">
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 ">
                    <a href="/book-now">
                        <button type="button"
                            class="bg-[var(--yello-primary)] rounded-3xl text-white text-wrap focus:outline-none px-5 py-3 text-center font-bold">إحجز
                            الآن<i class="fa-solid fa-calendar-days mr-3"></i></button></a>
                    <button data-collapse-toggle="navbar-cta" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100  "
                        aria-controls="navbar-cta" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="absolute top-20 left-0 md:static items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
                    id="navbar-cta">
                    <ul
                        class="flex flex-col items-center justify-center font-bold mt-4 border border-gray-100 rounded-2xl bg-gray-50 md:space-x-8  md:flex-row md:mt-0 md:border-0 md:bg-transparent w-10/12 md:w-auto mx-auto py-3">
                        <li class="md:ml-5 text-[var(--yello-primary)]">
                            <a href="/" class="block py-2 px-3 md:p-0">الرئيسية</a>
                        </li>
                        <li>
                            <a href="/about" class="block py-2 px-3 md:p-0 text-[var(--text-gray)]">من نحن</a>
                        </li>
                        {{-- services dropdown item --}}
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="flex items-center text-[var(--text-gray)] justify-between w-full py-2 px-3 rounded md:hover:bg-transparent md:border-0 md:p-0 md:w-auto ">الخدمات
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-3xl shadow w-44">
                                <ul class="p-2 text-sm font-semibold text-[var(--text-gray)] flex flex-col items-center justify-center gap-2"
                                    aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="/services"
                                            class="block py-2 px-3 md:p-0 text-[var(--text-gray)] text-center">جميع
                                            الخدمات</a>
                                    </li>
                                    <li>
                                        <a href="/services-dantest"
                                            class="block py-2 px-3 md:p-0 text-[var(--text-gray)] text-center">خدمات
                                            الأسنان</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block py-2 px-3 md:p-0 text-[var(--text-gray)] text-center">
                                            خدمات الجلدية و التجميل و الليزر</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block py-2 px-3 md:p-0 text-[var(--text-gray)] text-center">
                                            خدمات الطبي</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        {{-- offers dropdown item --}}
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="offersDropdownNavbar"
                                class="flex items-center text-[var(--text-gray)] justify-between w-full py-2 px-3 rounded md:hover:bg-transparent md:border-0 md:p-0 md:w-auto ">العروض
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="offersDropdownNavbar"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-3xl shadow w-44">
                                <ul class="p-2 text-sm font-semibold text-[var(--text-gray)] flex flex-col items-center justify-center gap-2"
                                    aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="/offers"
                                            class="block py-2 px-3 md:p-0 text-[var(--text-gray)] text-center">كل
                                            العروض</a>
                                    </li>
                                    <li>
                                        <a href="/terms"
                                            class="block py-2 px-3 md:p-0 text-[var(--text-gray)] text-center">الشروط
                                            واﻷحكام
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="/installment" class="block py-2 px-3 md:p-0 text-[var(--text-gray)]">التقسيط</a>
                        </li>
                        <li>
                            <a href="/doctors" class="block py-2 px-3 md:p-0 text-[var(--text-gray)]">الأطباء</a>
                        </li>
                        <li>
                            <a href="/branches" class="block py-2 px-3 md:p-0 text-[var(--text-gray)]">الفروع</a>
                        </li>
                        {{-- contact dropdown item --}}
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="contactDropdownNavbar"
                                class="flex items-center text-[var(--text-gray)] justify-between w-full py-2 px-3 rounded md:hover:bg-transparent md:border-0 md:p-0 md:w-auto ">تواصل معنا
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- contact menu -->
                            <div id="contactDropdownNavbar"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-3xl shadow w-44">
                                <ul class="p-2 text-sm font-semibold text-[var(--text-gray)] flex flex-col items-center justify-center gap-2"
                                    aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="/contact-us"
                                            class="block py-2 px-3 md:p-0 text-[var(--text-gray)] text-center">
                                            تواصل معنا</a>
                                    </li>
                                    <li>
                                        <a href="/rate-us"
                                            class="block py-2 px-3 md:p-0 text-[var(--text-gray)] text-center">
                                            قيم زيارتك
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('heroContent')
    </div>
    <div class="w-full absolute bottom-0 translate-y-[50%] left-0 right-0  z-0">
        <svg class="w-full h-full" id="Group_1264" data-name="Group 1264" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1920 214" preserveAspectRatio="none">
            <path id='Path_1784' data-name='Path 1784'
                d='M1920,11.456c-224.6,84.1-409.8,87.38-536,91.559C1039.5,114.361,875.3,7.177,494,2.5,282.5-.088,110,50.17,0,75.15V126.4H1920Z'
                transform='translate(0 -2.403)' fill='#fff' opacity='0.16' />
            <path id='Path_1785' data-name='Path 1785'
                d='M1920,9.5c-224.6,84.071-409.8,105.263-536,109.441C1039.5,130.284,875.3,23.13,494,18.454A2115.318,2115.318,0,0,0,0,71.185V216.4H1920Z'
                transform='translate(0 -2.403)' fill='#fff' />
        </svg>
    </div>
</header>