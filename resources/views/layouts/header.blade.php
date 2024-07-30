<header class="header  w-full flex items-center justify-start flex-col relative bg-cover bg-no-repeat min-h-[800px] "
    style="background-image: url({{ asset('assets/images/slider/slider-1.jpg') }});">
    <div class="container z-10">


        <div class="top-bar w-full">
            <div class="w-full">
                <div class="top-bar__container w-full flex items-center justify-between py-5">
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
                            class="news__ribbon bg-[var(--yello-primary)] rounded-3xl py-[5px] px-[10px] font-bold text-white text-wrap">متاح
                            الآن</span>
                        <span class="text-[var(--yello-primary)] font-bold ">عروض الصيف</span>
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

        <nav class="w-full z-20 fade-up">
            <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
                <a href="/" class="flex items-center space-x-3 w-28">
                    <img src="{{ asset('assets/images/logo/logo.avif') }}" class="" alt="Logo">
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0">
                    <a href="/book-now">
                        <button type="button"
                            class="bg-[var(--yello-primary)] rounded-3xl text-white text-wrap focus:outline-none px-5 py-3 text-center font-bold">إحجز
                            الآن<i class="fa-solid fa-calendar-days mr-3"></i></button></a>
                    <button data-collapse-toggle="navbar-dropdown" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-dropdown" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="hidden items-center justify-between w-full md:block md:w-auto md:order-1"
                    id="navbar-dropdown">
                    <ul class="flex p-4 md:p-0 mt-4 md:space-x-8 md:flex-row md:mt-0">
                        <li class="ml-5">
                            <a href="#" class="block py-2 px-3 md:p-0">الرئيسية</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 md:p-0">من نحن</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 md:p-0">الخدمات</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 md:p-0">عروض الصيف</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 md:p-0">الفروع</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 md:p-0">الأطباء</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="mt-52 w-full flex flex-col justify-around items-start fade-up">
            <h3 class="font-bold text-[28px] text-[var(--dark-secondary)]">
                إستمتعي <span class="text-[var(--yello-primary)] text-wrap">بالجمال</span> الآن ومدى الحياة
            </h3>
            <p class="text-[20px] text-[var(--text-gray)]">
                نوفر خدمات ذات جودة عالية تحت سقف واحد بأحدث التقنيات المتقدمة في جميع التخصصات ( أسنان – جلدية – طبي ).
            </p>
            <div class="mt-4">
                <a href="/book-now">
                    <button type="button"
                        class="bg-[var(--yello-primary)] rounded-3xl text-white text-wrap focus:outline-none px-5 py-3 text-center font-bold">إحجز
                        الآن<i class="fa-solid fa-calendar-days mr-3"></i></button></a>
            </div>
        </div>


    </div>
    <div class="w-full absolute bottom-0 translate-y-[50%] left-0 right-0  z-0">
        <svg class="w-full" id='Group_1264' data-name='Group 1264' xmlns='http://www.w3.org/2000/svg' width='1920'
            height='214' viewBox='0 0 1920 214'>
            <path id='Path_1784' data-name='Path 1784'
                d='M1920,11.456c-224.6,84.1-409.8,87.38-536,91.559C1039.5,114.361,875.3,7.177,494,2.5,282.5-.088,110,50.17,0,75.15V126.4H1920Z'
                transform='translate(0 -2.403)' fill='#fff' opacity='0.16' />
            <path id='Path_1785' data-name='Path 1785'
                d='M1920,9.5c-224.6,84.071-409.8,105.263-536,109.441C1039.5,130.284,875.3,23.13,494,18.454A2115.318,2115.318,0,0,0,0,71.185V216.4H1920Z'
                transform='translate(0 -2.403)' fill='#fff' />
        </svg>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const toggleButton = document.querySelector('[data-collapse-toggle]');
    const navbarDropdown = document.getElementById('navbar-dropdown');

    if (toggleButton && navbarDropdown) {
        toggleButton.addEventListener('click', function() {
            const isExpanded = toggleButton.getAttribute('aria-expanded') === 'true';
            toggleButton.setAttribute('aria-expanded', !isExpanded);
            navbarDropdown.classList.toggle('hidden');
        });
    }
});
</script>