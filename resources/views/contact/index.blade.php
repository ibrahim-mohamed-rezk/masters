@extends('layouts.app')

@section('CssStyles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endsection


@section('heroContent')
<div class="mt-32 w-full flex flex-col justify-around items-start px-2 fade-up pr-10">
    <h3 class="font-bold text-[28px] text-[var(--dark-secondary)]">
        اتصل بنا
    </h3>
</div>
@endsection

@section('container')


{{-- artical --}}
<section class="w-full flex items-center justify-center mt-20 px-2">
    <div class="container">

        <div class="flex flex-col items-start gap-2 w-full">
            <h2 class="fade-up text-[20px] md:text-[31px] font-bold text-[var(--dark-primary)]">
                نسعد بتواصلك معنا
            </h2>
            <p class="fade-up text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold">
                نحن هنا لاستقبال جميع استفساراتك، اقتراحاتك، وجميع الشكاوى بصدر رحب.
            </p>
        </div>


        <div class="flex items-start justify-between flex-col lg:flex-row w-full mt-10 gap-5">
            <div class="flex items-start w-full lg:w-[58%] px-2">
                <div class="w-full flex flex-col items-center justify-center gap-5">
                    <h2
                        class="fade-up text-[15px] md:text-[20px] font-bold text-[var(--dark-primary)] w-full text-start">
                        بيانات العميل
                    </h2>

                    {{-- form --}}
                    <div class="flex items-center justify-between w-full fade-up">
                        <label for="bookName" class="text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold">
                            رقم الملف الطبي</label>
                        <div class="flex items-center justify-center w-2/3  rounded-3xl bg-[var(--bg-white)] p-4">
                            <input type="text" class="bg-transparent w-full border-none outline-none"
                                placeholder="رقم الملف الطبي" required="">
                        </div>
                    </div>
                    <div class="flex items-center justify-between w-full fade-up">
                        <label for="bookName" class="text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold">
                            إسم العميل</label>
                        <div class="flex items-center justify-center w-2/3  rounded-3xl bg-[var(--bg-white)] p-4">
                            <input type="text" class="bg-transparent w-full border-none outline-none"
                                placeholder="أدخل الإسم بالكامل" required="">
                        </div>
                    </div>
                    <div class="flex items-center justify-between w-full fade-up">
                        <label for="bookPhone"
                            class="text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold">الجوال</label>
                        <div class="flex items-center justify-center w-2/3  rounded-3xl bg-[var(--bg-white)] p-4">
                            <input type="tel" class="bg-transparent border-none outline-none w-full" id="bookPhone"
                                placeholder="أدخل رقم الجوال (05xxxxxxxx)." required="">
                        </div>
                    </div>
                    <div class="flex items-center justify-between w-full fade-up">
                        <label for="bookEmail"
                            class="text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold">البريد
                            الإلكتروني</label>
                        <div class="flex items-center justify-center w-2/3  rounded-3xl bg-[var(--bg-white)] p-4">
                            <input type="email" class="bg-transparent border-none outline-none w-full" id="bookEmail"
                                placeholder="أدخل البريد الإلكتروني" required="">
                        </div>
                    </div>
                    <div class="flex items-center justify-between w-full fade-up">
                        <label for="national_id"
                            class="text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold">رقم
                            الهوية</label>
                        <div class="flex items-center justify-center w-2/3  rounded-3xl bg-[var(--bg-white)] p-4">
                            <input type="text" class="bg-transparent w-full border-none outline-none" maxlength="10"
                                id="national_id" placeholder="أدخل رقم الهوية xxxxxxxxxx" name="national_id">
                        </div>
                    </div>
                    <div class="flex items-center justify-between w-full fade-up">
                        <label class="text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold">علاقة المراسل
                            بالعميل</label>
                        <div class="flex items-center justify-center w-2/3  rounded-3xl bg-[var(--bg-white)] p-4">
                            <select class="w-full bg-transparent border-none outline-none" required="">
                                <option value="">إختر العلاقة المناسبة لك</option>
                                <option value="SELF">أنا العميل</option>
                                <option value="RELATIVE">أحد أقارب العميل</option>
                                <option value="FRIEND">أحد أصدقاء العميل</option>
                                <option value="OTHER">آخر</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex items-center justify-between w-full fade-up">
                        <label class="text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold">نوع الرسالة </label>
                        <div class="flex items-center justify-center w-2/3  rounded-3xl bg-[var(--bg-white)] p-4">
                            <select class="w-full bg-transparent border-none outline-none" required="">
                                <option value="">اختر نوع الرسالة المناسب لك</option>
                                <option value="MEDICAL_COMPLAINT">شكوى طبية</option>
                                <option value="NON_MEDICAL_COMPLAINT">شكوى غير طبية</option>
                                <option value="INQUIRY">استفسار</option>
                            </select>
                        </div>
                    </div>
                    <h3
                        class="fade-up text-[15px] md:text-[20px] font-bold text-[var(--dark-primary)] w-full text-start">
                        الرساله:</h3>
                    <div class="flex items-center justify-between w-full fade-up">
                        <label for="bookName"
                            class="text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold">الرسالة
                        </label>
                        <div class="flex items-center justify-center w-2/3  rounded-3xl bg-[var(--bg-white)] p-4">
                            <textarea class="bg-transparent w-full border-none outline-none"
                                placeholder="أدخل رسالتك"></textarea>
                        </div>
                    </div>

                    <div class="flex items-center justify-center w-full mt-8 fade-up">
                        <button type="button"
                            class="text-white text-wrap rounded-3xl outline-none border-none focus:outline-none px-5 py-3 text-center font-bold bg-[var(--yello-primary)]">
                            ارسال</button>
                    </div>


                </div>
            </div>

            {{-- right side --}}
            <div class="flex flex-col items-center justify-center w-full lg:w-[38%]">
                <div class="flex flex-wrap w-full gap-5">
                    <div class="flex flex-col w-full ">
                        <h2
                            class="fade-up text-[15px] md:text-[20px] font-bold text-[var(--dark-primary)] w-full text-start">
                            تواصل معنا
                        </h2>

                        {{-- contact numbers --}}
                        <div class="flex items-center justify-around w-full gap-4 flex-col px-2 mt-10 fade-up">
                            <div class="flex flex-wrap items-start justify-center gap-5 w-full ">

                                <div class=" bg-[var(--bg-white)] rounded-3xl p-4">
                                    <a href="#" class="flex items-center justify-start gap-2">
                                        <span
                                            class="flex items-center justify-center p-4 bg-[var(--yello-primary)] rounded-full w-[40px] h-[40px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="tel">
                                                <defs>
                                                    <style>
                                                        .bda {
                                                            fill: #fff
                                                        }
                                                    </style>
                                                </defs>
                                                <path class="bda"
                                                    d="M15.544 11.307l-3.5-1.5a.75.75 0 00-.875.216l-1.55 1.894a11.583 11.583 0 01-5.538-5.538l1.894-1.55a.748.748 0 00.216-.875l-1.5-3.5a.755.755 0 00-.86-.435l-3.25.75A.75.75 0 000 1.5 14.5 14.5 0 0014.5 16a.75.75 0 00.731-.581l.75-3.25a.759.759 0 00-.438-.863z" />
                                            </svg>
                                        </span>
                                        <span class="">
                                            01234567895
                                        </span>
                                    </a>
                                </div>


                                <div class=" bg-[var(--bg-white)] rounded-3xl p-4">
                                    <a href="#" class="flex items-center justify-start gap-2">
                                        <span
                                            class="flex items-center justify-center p-4 bg-[var(--yello-primary)] rounded-full w-[40px] h-[40px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="tel">
                                                <defs>
                                                    <style>
                                                        .bda {
                                                            fill: #fff
                                                        }
                                                    </style>
                                                </defs>
                                                <path class="bda"
                                                    d="M15.544 11.307l-3.5-1.5a.75.75 0 00-.875.216l-1.55 1.894a11.583 11.583 0 01-5.538-5.538l1.894-1.55a.748.748 0 00.216-.875l-1.5-3.5a.755.755 0 00-.86-.435l-3.25.75A.75.75 0 000 1.5 14.5 14.5 0 0014.5 16a.75.75 0 00.731-.581l.75-3.25a.759.759 0 00-.438-.863z" />
                                            </svg>
                                        </span>
                                        <span class="">
                                            01234567894
                                        </span>
                                    </a>
                                </div>


                                <div class=" bg-[var(--bg-white)] rounded-3xl p-4">
                                    <a href="#" class="flex items-center justify-start gap-2">
                                        <span
                                            class=" flex items-center justify-center p-4 bg-[var(--yello-primary)] rounded-full w-[40px] h-[40px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 16" id="email">
                                                <defs>
                                                    <style>
                                                        .ara {
                                                            fill: #fff
                                                        }
                                                    </style>
                                                </defs>
                                                <path class="ara"
                                                    d="M18 0H2A2 2 0 00.01 2L0 14a2.006 2.006 0 002 2h16a2.006 2.006 0 002-2V2a2.006 2.006 0 00-2-2zm0 4l-8 5-8-5V2l8 5 8-5z" />
                                            </svg>
                                        </span>
                                        <span class="">
                                            email@test.com
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>


                        {{-- working days --}}
                        <div class="flex items-center justify-around w-full gap-4 flex-col px-2 mt-10">
                            <div
                                class="flex rounded-full bg-[var(--dark-primary)] px-9 py-4 items-center gap-2 w-full fade-up ">
                                <div class="w-[25px] flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="dental"
                                        class="w-[24px] ">
                                        <defs>
                                            <style>
                                                .aha {
                                                    fill: var(--yello-primary)
                                                }
                                            </style>
                                        </defs>
                                        <path class="aha"
                                            d="M3.959 15.025c.141 0 .284-.007.426-.02a6.079 6.079 0 001.758-.424 3.345 3.345 0 012.659-.021 5.524 5.524 0 003.183.374 3.484 3.484 0 002.984-2.682 7.217 7.217 0 00-1-4.377 3.069 3.069 0 01-.394-1.469 16.326 16.326 0 00-.365-3.317 4.026 4.026 0 00-2.051-2.98 1.321 1.321 0 00-1.256.1c-1.343.882-1.494 4.4-1.506 4.816a.721.721 0 01-.709.677h-.276a.724.724 0 01-.71-.69c-.012-.4-.163-3.921-1.506-4.8A1.334 1.334 0 003.913.12a4.034 4.034 0 00-2.024 2.969 16.35 16.35 0 00-.359 3.325 2.9 2.9 0 01-.555 1.675 5.36 5.36 0 00-.974 3.254 3.7 3.7 0 00.585 2.046 4.059 4.059 0 003.373 1.636zM1.627 8.549a3.767 3.767 0 00.663-1.634 3.894 3.894 0 00.038-.485 15.547 15.547 0 01.34-3.16A3.376 3.376 0 014.234.853a.518.518 0 01.523.029c.753.494 1.1 2.814 1.146 4.148a1.513 1.513 0 001.508 1.476h.276a1.509 1.509 0 001.508-1.464c.043-1.346.392-3.665 1.147-4.161a.5.5 0 01.5-.041 3.364 3.364 0 011.592 2.427 15.5 15.5 0 01.341 3.15 3.869 3.869 0 00.5 1.852 6.387 6.387 0 01.914 3.831 2.714 2.714 0 01-2.355 2.049 4.671 4.671 0 01-2.728-.328 4.134 4.134 0 00-1.592-.328 4.4 4.4 0 00-1.675.349 5.289 5.289 0 01-1.531.368 3.371 3.371 0 01-3.057-1.263 2.942 2.942 0 01-.452-1.624 4.567 4.567 0 01.828-2.774zM20.926 15.025c.141 0 .284-.007.426-.02a6.079 6.079 0 001.758-.424 3.346 3.346 0 012.659-.021 5.524 5.524 0 003.183.374 3.484 3.484 0 002.984-2.682 7.218 7.218 0 00-1-4.377 3.067 3.067 0 01-.394-1.469 16.327 16.327 0 00-.365-3.317 4.028 4.028 0 00-2.051-2.98 1.321 1.321 0 00-1.256.1c-1.343.882-1.493 4.4-1.506 4.815a.721.721 0 01-.709.677h-.276a.724.724 0 01-.71-.69c-.012-.4-.163-3.921-1.506-4.8A1.334 1.334 0 0020.88.119a4.032 4.032 0 00-2.024 2.97 16.317 16.317 0 00-.36 3.325 3.05 3.05 0 01-.03.383 2.964 2.964 0 01-.521 1.292 5.36 5.36 0 00-.974 3.254 3.706 3.706 0 00.585 2.046 4.057 4.057 0 003.37 1.636zm-2.332-6.476a3.767 3.767 0 00.664-1.635 3.912 3.912 0 00.038-.484 15.482 15.482 0 01.34-3.16A3.373 3.373 0 0121.201.853a.517.517 0 01.523.029c.753.494 1.1 2.814 1.146 4.148a1.513 1.513 0 001.508 1.476h.276a1.51 1.51 0 001.508-1.464c.043-1.346.392-3.665 1.146-4.16a.5.5 0 01.5-.041 3.365 3.365 0 011.591 2.426 15.5 15.5 0 01.341 3.15 3.863 3.863 0 00.5 1.852 6.39 6.39 0 01.914 3.831 2.714 2.714 0 01-2.348 2.048 4.673 4.673 0 01-2.728-.328 4.129 4.129 0 00-1.592-.328 4.4 4.4 0 00-1.675.349 5.289 5.289 0 01-1.531.368 3.369 3.369 0 01-3.056-1.263 2.947 2.947 0 01-.453-1.624 4.567 4.567 0 01.823-2.773zM30.5 25.197a2.964 2.964 0 01.524-1.285 5.36 5.36 0 00.974-3.254 3.7 3.7 0 00-.585-2.046 4.137 4.137 0 00-3.8-1.618 6.079 6.079 0 00-1.758.424 3.346 3.346 0 01-2.659.021 5.528 5.528 0 00-3.183-.374 3.482 3.482 0 00-2.983 2.682 7.213 7.213 0 001 4.377 3.07 3.07 0 01.394 1.47 16.326 16.326 0 00.36 3.315 4.026 4.026 0 002.051 2.98 1.5 1.5 0 00.55.111 1.269 1.269 0 00.706-.215c1.343-.882 1.494-4.4 1.506-4.816a.721.721 0 01.709-.677h.276a.724.724 0 01.71.69c.012.4.163 3.921 1.506 4.8a1.333 1.333 0 001.283.092 4.034 4.034 0 002.025-2.972 16.351 16.351 0 00.359-3.325 2.972 2.972 0 01.035-.38zm-.792-.113a3.9 3.9 0 00-.038.485 15.547 15.547 0 01-.34 3.16 3.376 3.376 0 01-1.566 2.417.515.515 0 01-.523-.029c-.753-.494-1.1-2.814-1.146-4.148a1.513 1.513 0 00-1.508-1.476h-.276a1.509 1.509 0 00-1.508 1.464c-.043 1.346-.392 3.665-1.147 4.161a.5.5 0 01-.5.041 3.364 3.364 0 01-1.592-2.426 15.5 15.5 0 01-.341-3.15 3.871 3.871 0 00-.5-1.853 6.386 6.386 0 01-.914-3.831 2.713 2.713 0 012.355-2.048 4.359 4.359 0 01.818-.078 4.961 4.961 0 011.91.406 4.112 4.112 0 003.267-.02 5.289 5.289 0 011.531-.368 3.367 3.367 0 013.054 1.262 2.942 2.942 0 01.452 1.624 4.567 4.567 0 01-.826 2.773 3.767 3.767 0 00-.661 1.634zM1.462 25.594a16.326 16.326 0 00.36 3.315 4.028 4.028 0 002.051 2.98 1.5 1.5 0 00.55.111 1.27 1.27 0 00.706-.215c1.343-.882 1.493-4.4 1.506-4.815a.721.721 0 01.709-.677h.276a.724.724 0 01.71.69c.012.4.163 3.921 1.506 4.8a1.333 1.333 0 001.283.092 4.032 4.032 0 002.024-2.972 16.317 16.317 0 00.36-3.325 2.9 2.9 0 01.554-1.669 5.36 5.36 0 00.977-3.251 3.706 3.706 0 00-.585-2.046 4.136 4.136 0 00-3.8-1.618 6.079 6.079 0 00-1.758.424 3.345 3.345 0 01-2.659.021 5.528 5.528 0 00-3.183-.374 3.483 3.483 0 00-2.984 2.682 7.218 7.218 0 001 4.377 3.068 3.068 0 01.397 1.47zm-.613-5.7a2.714 2.714 0 012.348-2.048 4.345 4.345 0 01.819-.078 4.961 4.961 0 011.909.406 4.111 4.111 0 003.267-.02 5.289 5.289 0 011.531-.368 3.368 3.368 0 013.056 1.263 2.947 2.947 0 01.453 1.624 4.567 4.567 0 01-.826 2.773 3.767 3.767 0 00-.663 1.634 3.893 3.893 0 00-.039.491 15.482 15.482 0 01-.34 3.16 3.373 3.373 0 01-1.565 2.417.515.515 0 01-.523-.029c-.753-.494-1.1-2.814-1.146-4.148a1.513 1.513 0 00-1.508-1.476h-.276a1.51 1.51 0 00-1.512 1.462c-.043 1.346-.392 3.665-1.146 4.16a.5.5 0 01-.5.041 3.365 3.365 0 01-1.591-2.426 15.5 15.5 0 01-.341-3.15 3.865 3.865 0 00-.5-1.853 6.39 6.39 0 01-.907-3.831z" />
                                    </svg>
                                </div>
                                <div class="__block">
                                    <h2 class="text-[var(--yello-primary)] text-wrap"> السبت إلى الخميس:
                                        <p class="text-white text-wrap"> 8:00 صباحًا إلى 10:00 مساءً
                                        </p>
                                    </h2>
                                </div>
                                <div class="__block">
                                    <h2 class="text-[var(--yello-primary)] text-wrap"> الجمعة:
                                        <p class="text-white text-wrap"> 4:00 مساءً إلى 10:00 مساءً
                                        </p>
                                    </h2>
                                </div>
                            </div>

                            <div
                                class="flex rounded-full bg-[var(--dark-primary)] px-9 py-4 items-center gap-2 w-full fade-up">
                                <div class="w-[25px] flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.055 32" id="derma"
                                        class="w-[24px] ">
                                        <defs>
                                            <style>
                                                .apa {
                                                    fill: var(--yello-primary)
                                                }
                                            </style>
                                        </defs>
                                        <path class="apa"
                                            d="M6.408 29.082a15.5 15.5 0 003.154-.851c2.2-.755 4.477-1.536 6.1-.267 1 .784 1.173 2 1.357 3.28l.043.3a.533.533 0 00.531.453h.07a.533.533 0 00.456-.611l-.043-.3c-.205-1.435-.419-2.92-1.755-3.968-2.075-1.629-4.744-.712-7.1.1a14.57 14.57 0 01-2.933.8 2.1 2.1 0 01-1.779-.437 2.425 2.425 0 01-.493-1.76 3.533 3.533 0 00-1.183-3.215l-.029-.021a1.17 1.17 0 01-.224-.2.611.611 0 01.221-.2 1.069 1.069 0 00.283-1.475.533.533 0 00-.352-.267c-.325-.077-.533-.2-.584-.328-.064-.2.157-.6.349-.824a1.77 1.77 0 00.533-2.285 2.308 2.308 0 00-1.277-.733l-.235-.075a.613.613 0 01-.461-.6c-.021-.248.085-.389.395-.725l.12-.133q.8-.888 1.6-1.765l.891-.976a3.834 3.834 0 00.995-2.205 9.368 9.368 0 00-.267-2.845 8.05 8.05 0 01-.221-2.595 14.978 14.978 0 01.912-3.218l.155-.421a.534.534 0 10-1-.365l-.152.416a15.778 15.778 0 00-.979 3.466 9.066 9.066 0 00.235 2.933 8.487 8.487 0 01.248 2.523 3.116 3.116 0 01-.072.4.571.571 0 01-.267-.229.534.534 0 00-.9.568 1.629 1.629 0 00.733.629 2.757 2.757 0 01-.2.245l-.888.968q-.8.868-1.6 1.763l-.112.123a1.932 1.932 0 00-.672 1.533 1.672 1.672 0 001.179 1.507l.267.088a1.651 1.651 0 01.728.341c.125.173-.12.635-.4.877l-.048.045a2.195 2.195 0 00-.6 1.867 1.493 1.493 0 00.989.949 1.333 1.333 0 00-.605.955 1.281 1.281 0 00.656 1.128 2.464 2.464 0 01.8 2.216 3.551 3.551 0 00.781 2.667 3.056 3.056 0 002.65.754zM19.88 28.267a.533.533 0 00.395-.176c1.224-1.349 4.13-4.912 4.68-8.829.76-5.394-2.906-8.328-6.45-11.146-2.7-2.152-5.49-4.381-6.261-7.7a.534.534 0 10-1.04.24c.856 3.685 3.794 6.029 6.637 8.293 3.466 2.76 6.733 5.365 6.058 10.167a16.976 16.976 0 01-4.416 8.266.533.533 0 00.4.885z" />
                                        <path class="apa"
                                            d="M18.239 24.166a.533.533 0 00.744-.12 7.9 7.9 0 001.539-4.5c-.075-3.688-2.451-5.888-4.746-8a23.6 23.6 0 01-2.933-3.048 9.109 9.109 0 01-1.418-2.518.533.533 0 10-1.011.339 10.109 10.109 0 001.579 2.805 24.4 24.4 0 003.056 3.2c2.237 2.059 4.344 4.008 4.41 7.245a6.91 6.91 0 01-1.334 3.853.533.533 0 00.114.744z" />
                                        <circle class="apa" cx=".533" cy=".533" r=".533"
                                            transform="translate(9.589 10.668)" />
                                        <circle class="apa" cx=".533" cy=".533" r=".533"
                                            transform="translate(12.256 15.201)" />
                                        <circle class="apa" cx=".533" cy=".533" r=".533"
                                            transform="translate(8.256 13.334)" />
                                        <circle class="apa" cx=".533" cy=".533" r=".533"
                                            transform="rotate(-82.53 17.78 5.72)" />
                                        <circle class="apa" cx=".533" cy=".533" r=".533"
                                            transform="rotate(-82.5 17.854 2.556)" />
                                        <path class="apa"
                                            d="M11.097 16.609a.533.533 0 00-.517-.227l-.888.131-.613-.621a.533.533 0 00-.907.285l-.139.824-.8.36a.533.533 0 00-.016.965l.784.387.112.827a.533.533 0 00.9.315l.635-.6.883.16a.533.533 0 00.565-.773l-.389-.739.416-.725a.533.533 0 00-.021-.565z" />
                                    </svg>
                                </div>
                                <div class="__block">
                                    <h2 class="text-[var(--yello-primary)] text-wrap"> السبت إلى الخميس:
                                        <p class="text-white text-wrap"> 8:00 صباحًا إلى 10:00 مساءً
                                        </p>
                                    </h2>
                                </div>
                                <div class="__block">
                                    <h2 class="text-[var(--yello-primary)] text-wrap"> الجمعة:
                                        <p class="text-white text-wrap"> 4:00 مساءً إلى 10:00 مساءً
                                        </p>
                                    </h2>
                                </div>
                            </div>

                            <div
                                class="flex rounded-full bg-[var(--dark-primary)] px-9 py-4 items-center gap-2 w-full fade-up">
                                <div class="w-[25px] flex items-center justify-center ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.806 32" id="medical"
                                        class="w-[24px] ">
                                        <defs>
                                            <style>
                                                .axa {
                                                    fill: var(--yello-primary)
                                                }
                                            </style>
                                        </defs>
                                        <path class="axa"
                                            d="M25.209 21.653c-.3-.2-.606-.4-.959-.656l-1.11-.656c-.3-.151-.606-.3-.959-.5l-.353-.2c-.3-.151-.656-.353-1.009-.5a7.009 7.009 0 00-1.312-.5l-.562-.168-.252.4c-.252.353-2.574 2.574-4.795 4.593-2.221-2.069-4.543-4.24-4.795-4.593l-.252-.4-.555.2a5.059 5.059 0 00-1.262.5c-.353.151-.707.353-1.06.5l-.4.2-.3.151-1.161.656c-.5.3-1.009.606-1.413.909a6.771 6.771 0 00-2.324 2.484 6.3 6.3 0 00-.353 2.877v3.079a1.971 1.971 0 001.968 1.968h23.823a1.971 1.971 0 001.968-1.968v-3.026a6.3 6.3 0 00-.353-2.877 6.565 6.565 0 00-2.22-2.473zm-3.432 3.432a1.324 1.324 0 01.656.808 1.177 1.177 0 01-.1 1.009 1.323 1.323 0 01-.808.656 1.177 1.177 0 01-1.009-.1 1.324 1.324 0 01-.656-.808 1.177 1.177 0 01.1-1.009 1.324 1.324 0 01.808-.656 1.112 1.112 0 01.4-.05 1.344 1.344 0 01.608.15zm4.744 1.817v3.079a.69.69 0 01-.707.707H1.991a.69.69 0 01-.707-.707v-3.129a4.871 4.871 0 01.252-2.271 5.626 5.626 0 011.868-1.918 13.662 13.662 0 011.262-.858l.606-.353a14.454 14.454 0 00.353 1.413 2.108 2.108 0 00-.757.555 3 3 0 00-.656.909 3.41 3.41 0 00-.252 2.12l.656 2.776 1.968-.454a.624.624 0 10-.3-1.211l-.757.151-.353-1.565a1.813 1.813 0 01.151-1.262 2.241 2.241 0 01.4-.555 2.019 2.019 0 01.909-.5 1.7 1.7 0 011.009.05 1.793 1.793 0 01.454.2c.05.05.1.05.151.1a1.9 1.9 0 01.707 1.06l.353 1.565-.757.151a.624.624 0 10.3 1.211l1.968-.454-.656-2.776a2.979 2.979 0 00-1.11-1.767 1.056 1.056 0 00-.3-.2 2.638 2.638 0 00-.757-.353 8.556 8.556 0 00-1.161-.05 8.922 8.922 0 01-.4-1.565c0-.05 0-.05-.05-.1l.1-.05c.3-.151.656-.353 1.009-.5a6.158 6.158 0 01.858-.353c1.06 1.11 4.088 3.937 5.1 4.845l.4.4.4-.4c1.009-.909 4.038-3.735 5.1-4.845.252.1.555.2.858.353s.656.3.959.454l.353.2c.252.151.5.252.757.4a7.948 7.948 0 01-.808 2.322 2.24 2.24 0 00-1.161.1 2.436 2.436 0 00-1.514 1.312 2.657 2.657 0 00-.151 1.968 2.436 2.436 0 001.312 1.514 2.4 2.4 0 001.211.3 4.418 4.418 0 00.808-.1 2.436 2.436 0 001.514-1.312 2.657 2.657 0 00.151-1.968 2.946 2.946 0 00-.909-1.312 8.537 8.537 0 00.757-2.17l.1.05c.3.2.606.4.858.555a5.626 5.626 0 011.868 1.918 5.8 5.8 0 01.206 2.32z" />
                                        <path class="axa"
                                            d="M6.539 10.2a2.954 2.954 0 00.1.656c0 .1.05.2.05.3a2.654 2.654 0 001.363 2.17.049.049 0 00.05.05 6.942 6.942 0 002.776 4.139 5.32 5.32 0 00.555.353c.252.151.606.252.909.4h.05a3.782 3.782 0 00.808.252 2.878 2.878 0 00.656.05h.151a2.666 2.666 0 00.656-.05 2.233 2.233 0 00.757-.252h.05a5.47 5.47 0 00.959-.4 3.4 3.4 0 00.555-.353A6.76 6.76 0 0018.85 15.6a8.99 8.99 0 00.606-1.211c.05-.151.1-.353.151-.5a2.347 2.347 0 01.151-.454 2.332 2.332 0 01.353-.353c.1-.05.151-.151.252-.2a2.567 2.567 0 00.808-1.767c0-.1.05-.2.05-.3.05-.2.05-.454.1-.656V9.59a1.469 1.469 0 00-.959-1.514v-.3a2.169 2.169 0 01.1-.606 7.507 7.507 0 00.252-1.817A4.594 4.594 0 0017.939.858c-.2-.1-.4-.151-.606-.252A9.627 9.627 0 0013.903 0h-.757a7 7 0 00-2.524.5 1.1 1.1 0 00-.252.151 3.072 3.072 0 00-.808.808c-.05.05-.1.1-.1.151a1.6 1.6 0 01-.252.3 3.4 3.4 0 01-.555.353 1.782 1.782 0 00-.858.757 5.344 5.344 0 00-.458 1.88 12.313 12.313 0 00.05 1.968 5.032 5.032 0 00.1.808c.05.151.05.3.1.5h-.05a1.441 1.441 0 00-1 1.565v.459zm1.312-.858h.5l.1-.05a.806.806 0 00.4-.707A4.3 4.3 0 008.7 7.424a2.533 2.533 0 01-.1-.606c-.05-.5-.05-1.161-.05-1.817a2.7 2.7 0 01.252-1.211.5.5 0 01.252-.2 2.712 2.712 0 00.808-.5 1.669 1.669 0 00.5-.606l.1-.151a1.927 1.927 0 01.454-.454c.05-.05.1-.05.151-.1a6.025 6.025 0 012.069-.4h.656a8.222 8.222 0 012.978.555c.151.05.353.151.5.2a3.326 3.326 0 012.019 3.331 8.868 8.868 0 01-.2 1.565 4.418 4.418 0 00-.1.808l-.05.3a1.461 1.461 0 000 .808.85.85 0 00.858.5.386.386 0 01.1.252v.555c0 .2-.05.353-.05.555 0 .1-.05.252-.05.353a1.31 1.31 0 01-.4.959c-.05.05-.151.1-.2.151-.151.151-.353.3-.555.5a1.968 1.968 0 00-.4.959c-.05.1-.05.2-.1.3a4.71 4.71 0 01-.5 1.009 6.2 6.2 0 01-1.464 1.565 2.046 2.046 0 01-.454.252 5.875 5.875 0 01-.757.3.176.176 0 00-.1.05 1.923 1.923 0 01-.5.151 2.549 2.549 0 01-1.009 0c-.2-.05-.353-.1-.555-.151l-.1-.05a5.875 5.875 0 01-.757-.3 2.046 2.046 0 00-.454-.252 5.393 5.393 0 01-2.221-3.382 1.256 1.256 0 00-.5-.757l-.1-.05a1.642 1.642 0 01-.757-1.262c0-.1-.05-.252-.05-.353a2.07 2.07 0 01-.05-.555v-.554a1.232 1.232 0 01.033-.353z" />
                                    </svg>
                                </div>
                                <div class="__block">
                                    <h2 class="text-[var(--yello-primary)] text-wrap"> السبت إلى الخميس:
                                        <p class="text-white text-wrap"> 8:00 صباحًا إلى 10:00 مساءً
                                        </p>
                                    </h2>
                                </div>
                                <div class="__block">
                                    <h2 class="text-[var(--yello-primary)] text-wrap"> الجمعة:
                                        <p class="text-white text-wrap"> 4:00 مساءً إلى 10:00 مساءً
                                        </p>
                                    </h2>
                                </div>
                            </div>
                        </div>

                        {{-- go to branches --}}
                        <div class="flex justify-start mt-10 p-5 rounded-2xl bg-[var(--yello-primary)] items-center gap-5 fade-up"">
                                <div class=" flex items-center justify-center w-[40px]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.217 48" id="location">
                                <defs>
                                    <style>
                                        .awa {
                                            fill: var(--dark-secondary)
                                        }
                                    </style>
                                </defs>
                                <path class="awa"
                                    d="M20.109 12.003a8 8 0 108 8 8 8 0 00-8-8zm0 12a4 4 0 114-4 4 4 0 01-4 4z" />
                                <path class="awa"
                                    d="M20.108 48.002a10.541 10.541 0 01-8.621-4.4C3.866 33.087 0 25.184 0 20.108a20.108 20.108 0 1140.217 0c0 5.076-3.866 12.979-11.487 23.492a10.541 10.541 0 01-8.622 4.402zm0-43.634A15.765 15.765 0 004.362 20.112c0 4.02 3.786 11.453 10.657 20.93a6.289 6.289 0 0010.179 0c6.871-9.477 10.657-16.91 10.657-20.93A15.765 15.765 0 0020.108 4.366z" />
                            </svg>
                        </div>
                        <div class="flex justify-center rounded-2xl items-center md:flex-col flex-row gap-5">
                            <div class="">
                                <h2 class="text-[20px] md:text-[27px] text-[var(--dark-primary)] font-bold">
                                    فروعنا حولك أينما كنت
                                </h2>
                            </div>
                            <div class="">
                                <a href="#" class="text-nowrap text-white font-bold">
                                    إضغط هنا لمعرفة الفرع الأقرب إليك
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</section>

{{-- book now --}}
<section class="mt-20 w-full flex items-center justify-center bg-[var(--yello-primary)] fade-up">
    <div class="container">
        <div class="flex justify-between items-center py-16 flex-col lg:flex-row md:flex-row gap-8">
            <div class="">
                <h2 class="text-[20px] md:text-[27px] text-[var(--dark-primary) font-bold]">
                    هل ترغب في حجز موعدك الآن؟
                </h2>
            </div>
            <div class="">
                <a href="#" class="bg-[var(--dark-primary)] text-white py-3 px-7 rounded-3xl font-bold">
                    إحجز الآن
                    <i class="fa-solid fa-calendar-days mr-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>


{{-- partners --}}
<section class="w-full flex items-center justify-center mt-20">
    <div class="container">
        <h2 class="w-full text-center text-[20px] md:text-[31px] text-[var(--dark-primary)] font-bold fade-up">
            شركاء
            <span class="text-[var(--yello-primary)] ">النجاح</span>
        </h2>
        <div class="swiper swiper3 w-full mt-4 fade-up">
            <div class="swiper-wrapper" id="swiper-wrapper-41f2f6ebbd0cf8109">
                @for ($i = 0; $i < 10; $i++) <div class="swiper-slide">
                    <div class="flex items-center justify-center">
                        <div class="max-w-[120px]">
                            <img src="{{asset('assets/images/home/partners.webp')}}" alt="partners">
                        </div>
                    </div>
            </div>
            @endfor
        </div>
        <div class="slider-controls">
            <div class="swiper-button-next doctor-slider-btn bg-white rounded-full !w-[40px] !h-[40px]"></div>
            <div class="swiper-button-prev doctor-slider-btn bg-white rounded-full !w-[40px] !h-[40px]"></div>
        </div>
    </div>
    </div>
</section>
@endsection


@section('jsContainer')
{{-- swiper --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
    const swiper3 = new Swiper('.swiper3', {
        loop: true,
        slidesPerView: 5,
        spaceBetween: 16,
        pagination: {
            el: '.swiper3 .swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper3 .swiper-button-next',
            prevEl: '.swiper3 .swiper-button-prev',
        },
        autoplay: {
            delay: 5000, 
            disableOnInteraction: false, 
        },
        breakpoints: {
            1: {
                slidesPerView: 1,
                spaceBetween: 5
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 5
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 8
            },
            640: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 16
            }
        }
    });
    });
</script>
@endsection