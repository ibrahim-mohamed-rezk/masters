@extends('layouts.app')

@section('CssStyles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
    .custom-radio:checked+label span:first-child {
        @apply border-[var(--yello-primary)] bg-[var(--yello-primary)];
    }

    .custom-radio:checked+label span:first-child::before {
        content: "✔";
        @apply text-white;
        font-size: 12px;
        line-height: 1;
    }

    .custom-radio+label span:first-child {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* terms */
    .custom-radio-terms:checked+label span:first-child {
        @apply border-[var(--yello-primary)] bg-[var(--yello-primary)];
    }

    .custom-radio-terms:checked+label span:first-child::before {
        content: "✔";
        @apply text-white;
        font-size: 12px;
        line-height: 1;
    }

    .custom-radio-terms+label span:first-child {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* installments */
    .custom-radio-installmet:checked+label span:first-child {
        @apply border-[var(--yello-primary)] bg-[var(--yello-primary)];
    }

    .custom-radio-installmet:checked+label span:first-child::before {
        content: "✔";
        @apply text-white;
        font-size: 12px;
        line-height: 1;
    }

    .custom-radio-installmet+label span:first-child {
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
@endsection

@section('heroContent')
<div class="mt-32 w-full flex flex-col justify-around items-start px-2 fade-up pr-10">
    <h3 class="font-bold text-[28px] text-[var(--dark-secondary)]">
        عمليه خلع ضرس العقل المطمور بدون الم
    </h3>
</div>
@endsection

@section('container')
{{-- book form --}}
<section class="w-full flex items-center justify-center mt-20 px-2">
    <div class="container">

        <div class="flex flex-col items-start gap-2 w-full">
            <h2 class="fade-up text-[20px] md:text-[31px] font-bold text-[var(--dark-primary)]">
                عمليه خلع ضرس العقل المطمور بدون الم
            </h2>

        </div>

        <div class="flex flex-col md:flex-row items-start justify-between w-full mt-8">

            <div class="flex items-center justify-center w-full md:w-[60%]">
                <form class="flex items-start justify-start flex-col w-full gap-3 p-1">
                    <div class="flex items-center justify-between w-full fade-up">
                        <label class="text-[var(--text-gray)] text-[14px] font-bold ">العرض</label>
                        <div class="flex items-center justify-center w-2/3  rounded-3xl bg-[var(--bg-white)] p-4">
                            <select class="w-full bg-transparent border-none outline-none" required="">
                                <option value="1">عمليه خلع ضرس العقل المطمور بدون الم</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex items-center justify-between w-full fade-up">
                        <label class="text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold">المدينة</label>
                        <div class="flex items-center justify-center w-2/3  rounded-3xl bg-[var(--bg-white)] p-4">
                            <select class="w-full bg-transparent border-none outline-none" required="">
                                <option>إختر المدينة المناسبة لك</option>
                                <option> جده</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex items-center justify-between w-full fade-up">
                        <label for="bookName" class="text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold">الاسم
                            بالكامل</label>
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
                        <label for="bookDate" class="text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold">الدفع
                        </label>
                        <div class="flex items-center justify-start gap-3 w-2/3 flex-wrap">
                            <div
                                class="flex items-center bg-[var(--bg-white)] py-4 rounded-3xl w-[29%] min-w-[95px] justify-center">
                                <input type="radio" id="online" name="payment" class="custom-radio hidden" />
                                <label for="online" class="flex items-center cursor-pointer gap-2">
                                    <span
                                        class="w-5 h-5 border border-gray-300 rounded-md flex items-center justify-center transition-colors duration-200"></span>
                                    <span
                                        class="ml-2 text-[14px] text-[var(--dark-primary)] font-semibold">أونلاين</span>
                                </label>
                            </div>
                            <div
                                class="flex items-center bg-[var(--bg-white)] py-4 rounded-3xl w-[29%] min-w-[95px] justify-center">
                                <input type="radio" id="installment" name="payment" class="custom-radio hidden" />
                                <label for="installment" class="flex items-center cursor-pointer gap-2">
                                    <span
                                        class="w-5 h-5 border border-gray-300 rounded-md flex items-center justify-center transition-colors duration-200"></span>
                                    <span
                                        class="ml-2 text-[14px] text-[var(--dark-primary)] font-semibold">التقسيط</span>
                                </label>
                            </div>
                            <div
                                class="flex items-center bg-[var(--bg-white)] py-4 rounded-3xl w-[29%] min-w-[95px] justify-center">
                                <input type="radio" id="branch" name="payment" class="custom-radio hidden" />
                                <label for="branch" class="flex items-center cursor-pointer gap-2">
                                    <span
                                        class="w-5 h-5 border border-gray-300 rounded-md flex items-center justify-center transition-colors duration-200"></span>
                                    <span class="ml-2 text-[14px] text-[var(--dark-primary)] font-semibold">في
                                        الفرع</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    {{-- hidden installment methodths --}}
                    <div id="hidden-installment" class="hidden items-center justify-between w-full fade-up">
                        <label for="bookTime1"
                            class="text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold">التقسيط</label>
                        <div class="flex items-center justify-start gap-3 w-2/3 flex-wrap">
                            <div
                                class="flex items-center bg-[var(--bg-white)] py-4 rounded-3xl w-[29%] min-w-[95px] justify-center">
                                <input type="radio" id="taby" name="installment"
                                    class="custom-radio-installmet hidden" />
                                <label for="taby" class="flex items-center cursor-pointer gap-2">
                                    <span
                                        class="w-5 h-5 border border-gray-300 rounded-md flex items-center justify-center transition-colors duration-200"></span>
                                    <span class="ml-2 text-[14px] text-[var(--dark-primary)] font-semibold">
                                        تمارا</span>
                                </label>
                            </div>
                            <div
                                class="flex items-center bg-[var(--bg-white)] py-4 rounded-3xl w-[29%] min-w-[95px] justify-center">
                                <input type="radio" id="tamara" name="installment"
                                    class="custom-radio-installmet hidden" />
                                <label for="tamara" class="flex items-center cursor-pointer gap-2">
                                    <span
                                        class="w-5 h-5 border border-gray-300 rounded-md flex items-center justify-center transition-colors duration-200"></span>
                                    <span class="ml-2 text-[14px] text-[var(--dark-primary)] font-semibold">تابي</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    {{-- hidden installment method card taby --}}
                    <div id="hidden-installment-card-tamara" class="hidden items-center justify-between w-full fade-up">
                        <div
                            class="w-full flex items-center justify-between bg-[var(--bg-white)] rounded-2xl p-4 gap-2">
                            <div>
                                <span class=" text-[14px] text-[var(--dark-primary)] font-semibold">
                                    4 دفعات بلا فوائد بقيمة 350.00 SAR. بدون رسوم، ومتوافقة مع أحكام الشريعة.
                                </span>
                                <span class=" text-[15px] text-[var(--dark-primary)] font-bold">اعرف أكثر</span>
                            </div>
                            <svg viewBox="0 0 100 40" class="w-[70px] h-[28px]" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M92.2524 0H7.74757C3.46871 0 0 3.48347 0 7.78054V32.2195C0 36.5165 3.46871 40 7.74757 40H92.2524C96.5313 40 100 36.5165 100 32.2195V7.78054C100 3.48347 96.5313 0 92.2524 0Z"
                                    fill="url(#paint0_linear_99_113_0.9273061030866736)"></path>
                                <path
                                    d="M86.9113 12.6893L81.5394 33.1972L81.5274 33.2434H85.7106L91.1016 12.6893H86.9113Z"
                                    fill="#292929"></path>
                                <path
                                    d="M20.4447 24.3575C19.817 24.6651 19.1268 24.8233 18.4279 24.8198C16.9206 24.8198 16.0655 24.5796 15.9731 23.3607V23.2793C15.9731 23.2301 15.967 23.1788 15.967 23.1306V19.5946L15.9731 19.1765V16.6805H15.967V15.6073L15.9731 15.1863V12.7746L12.237 13.269C14.7673 12.7787 16.2173 10.778 16.2173 8.7864V7.56049H12.015V13.3032L11.7778 13.3695V24.0018C11.9165 26.9892 13.888 28.7648 17.1146 28.7648C18.2708 28.762 19.4146 28.5251 20.4768 28.0684L20.4979 28.0594V24.3294L20.4447 24.3575Z"
                                    fill="#292929"></path>
                                <path d="M21.1069 11.9165L9.32401 13.7332V16.7216L21.1069 14.9049V11.9165Z"
                                    fill="#292929"></path>
                                <path d="M21.1069 16.2876L9.32401 18.1044V20.9582L21.1069 19.1424V16.2876Z"
                                    fill="#292929"></path>
                                <path
                                    d="M34.3287 17.6622C34.1619 14.3462 32.0878 12.3767 28.7075 12.3767C26.7652 12.3767 25.1634 13.1273 24.0762 14.5481C22.9889 15.969 22.4202 18.046 22.4202 20.5702C22.4202 23.0944 22.993 25.1784 24.0762 26.5993C25.1594 28.0201 26.7652 28.7698 28.7075 28.7698C32.0878 28.7698 34.1619 26.7932 34.3287 23.4561V28.4573H38.5269V12.7264L34.3287 13.3735V17.6622ZM34.5467 20.5702C34.5467 23.5104 33.0033 25.4095 30.6147 25.4095C28.1519 25.4095 26.6818 23.6008 26.6818 20.5702C26.6818 17.5215 28.1519 15.7007 30.6147 15.7007C31.8125 15.7007 32.8133 16.167 33.5077 17.0502C34.188 17.9134 34.5467 19.1313 34.5467 20.5702Z"
                                    fill="#292929"></path>
                                <path
                                    d="M50.773 12.3767C47.3917 12.3767 45.3177 14.3452 45.1529 17.6673V8.14732L40.9536 8.79545V28.4523H45.1529V23.4451C45.3177 26.7863 47.3917 28.7648 50.773 28.7648C54.7301 28.7648 57.0925 25.702 57.0925 20.5703C57.0925 15.4385 54.7301 12.3767 50.773 12.3767ZM48.8638 25.4096C46.4743 25.4096 44.9308 23.5105 44.9308 20.5703C44.9308 19.1313 45.2905 17.9134 45.9708 17.0533C46.6652 16.17 47.666 15.7038 48.8638 15.7038C51.3267 15.7038 52.7968 17.5246 52.7968 20.5733C52.7998 23.6009 51.3297 25.4096 48.8668 25.4096H48.8638Z"
                                    fill="#292929"></path>
                                <path
                                    d="M68.5306 12.3767C65.1493 12.3767 63.0743 14.3452 62.9095 17.6673V8.14732L58.7113 8.79545V28.4523H62.9035V23.4451C63.0683 26.7863 65.1433 28.7648 68.5246 28.7648C72.4807 28.7648 74.8431 25.702 74.8431 20.5703C74.8431 15.4385 72.4817 12.3767 68.5306 12.3767ZM66.6214 25.4096C64.2319 25.4096 62.6885 23.5105 62.6885 20.5703C62.6885 19.1313 63.0472 17.9134 63.7275 17.0533C64.4228 16.17 65.4237 15.7038 66.6214 15.7038C69.0833 15.7038 70.5534 17.5246 70.5534 20.5733C70.5514 23.6009 69.0813 25.4096 66.6214 25.4096Z"
                                    fill="#292929"></path>
                                <path d="M74.8531 12.6893H79.3368L82.9794 28.4232H78.96L74.8531 12.6893Z"
                                    fill="#292929"></path>
                                <defs>
                                    <linearGradient id="paint0_linear_99_113_0.9273061030866736" x1="0" y1="19.9995"
                                        x2="100" y2="19.9995" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#3BFF9D"></stop>
                                        <stop offset="1" stop-color="#3BFFC8"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    {{-- hidden installment method card tamara--}}
                    <div id="hidden-installment-card-taby" class="hidden items-center justify-between w-full fade-up">
                        <div
                            class="w-full flex items-center justify-between bg-[var(--bg-white)] rounded-2xl p-4 gap-2">
                            <div>
                                <span class=" text-[14px] text-[var(--dark-primary)] font-semibold">
                                    أو قسم فاتورتك بقيمة 350.00 ر.س على 4 دفعات بدون رسوم تأخير، متوافقة مع الشريعة
                                    الإسلامية
                                </span>
                                <span class=" text-[15px] text-[var(--dark-primary)] font-bold">اعرف أكثر</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-[28px]">
                                <rect xmlns="http://www.w3.org/2000/svg" width="85" height="28" rx="8"
                                    fill="url(#logo-grad-ar__a)" />
                                <g xmlns="http://www.w3.org/2000/svg" clip-path="url(#logo-grad-ar__b)" fill="black">
                                    <path
                                        d="M19.566 11.566c-.214 0-.525.22-.636.427-.34.65-.586 1.343-.913 1.999-.175.35-.095.56.155.838.669.75 1.362 1.493 1.917 2.331.664.997.575 2.06-.272 2.896a8.365 8.365 0 0 1-2.206 1.585c-1.17.557-2.434.907-3.648 1.38-.167.065-.43.284-.451.427-.07.451.179.584.347.657 1.396.609 2.816 1.17 4.288 1.772.473-.718.955-1.385 1.373-2.09 2.26-3.803 2.757-7.723.681-11.775-.108-.213-.414-.443-.635-.447Zm50.066-4.931-.05-.05a1.722 1.722 0 0 0-1.877-.374 1.72 1.72 0 0 0-.933.935 1.733 1.733 0 0 0 .374 1.884l.05.05c.973.977 2.065.372 2.436 0a1.728 1.728 0 0 0 .374-1.884 1.74 1.74 0 0 0-.374-.561Zm-7.164.069c-.17.17-.306.373-.397.597l2.613 2.273a1.78 1.78 0 0 0 .364-.281l.053-.053c1.033-1.036.394-2.194 0-2.59a1.825 1.825 0 0 0-1.989-.398 1.825 1.825 0 0 0-.592.397l-.052.055ZM23.652 5.533s-.646 1.343-.936 2.03a2.152 2.152 0 0 0-.18.906c.106 2.391.202 4.785.377 7.17.178 2.431 1.371 4.206 3.614 5.23 1.569.716 3.227 1.043 4.931 1.141 2.147.123 4.298.187 6.447.205 3.573.031 7.119-.224 10.617-.927 1.078-.142 4.449-1.017 5.034-1.336.658-.359.614-.273 1.277-.105 1.609.41 5.855.309 7.078-.053.818-.243 1.565-.438 1.749-1 .75 1.187 1.17 1.79 2.465 1.674 1.294-.117 1.403-.18 2.672-.464 1.058-.236 1.839-.92 2.157-1.957.197-.641.171-.948.227-1.425.196-1.695-.066-3.302-1.04-4.729-.158-.229-.259-.457-.811-.42-.173.01-.431.269-.537.477-.322.633-.564 1.304-.883 1.943-.18.358-.098.612.182.87a51.96 51.96 0 0 1 1.887 1.845c-1.42.15-1.908.303-3.13.399-1.222.096-3.463.078-4.092-1.036-.46-.812-.757-1.373-1.505-1.927-1.245-.925-3.259-.919-4.94-.048-.76.388-1.561 1.165-1.691 2.072-.059.408-.198.745-.656.863-6.97 1.796-15.137 2.635-21.998 1.865-1.748-.197-3.485-.486-5.135-1.134-1.475-.576-2.141-1.6-2.114-3.199.049-2.946.018-5.893 0-8.84A.57.57 0 0 0 24.18 5c-.226-.019-.53.533-.53.533Zm37.69 12.237-5.703-.069s.422-2.26 2.741-2.348c3.338-.12 2.959 2.417 2.959 2.417h.002Z" />
                                    <path
                                        d="M15.848 5.806a.571.571 0 0 0-.541-.622c-.231-.019-.53.531-.53.531s-.645 1.345-.935 2.03a2.154 2.154 0 0 0-.18.907c.052 1.174.102 2.35.16 3.524l.237 5.01c.049 1.026.106 2.051.159 3.1h.947c.234-1.167.635-2.318.662-3.476.032-1.558.031-8.894.02-11.004Z" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-center justify-between w-full fade-up">
                        <label for="bookTime1"
                            class="text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold"></label>
                        <div
                            class="flex items-center justify-center w-2/3  rounded-3xl bg-[var(--bg-white)] py-2 px-4 ">
                            <div class="flex items-center bg-[var(--bg-white)] py-4 rounded-3xl w-full justify-start">
                                <input type="radio" id="terms" name="terms" class="custom-radio-terms hidden" />
                                <label for="terms" class="flex items-center cursor-pointer gap-2">
                                    <span
                                        class="w-5 h-5 border border-gray-300 rounded-md flex items-center justify-center transition-colors duration-200"></span>
                                    <span class="ml-2 text-[14px] text-[var(--dark-primary)] font-semibold">أوافق على
                                        الشروط واﻷحكام</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-center w-full mt-8 fade-up">
                        <button type="button"
                            class="text-white text-wrap rounded-3xl outline-none border-none focus:outline-none px-5 py-3 text-center font-bold bg-[var(--yello-primary)]">
                            إحجز موعدك الآن<i class="fa-solid fa-calendar-days mr-3"></i></button>
                    </div>

                </form>
            </div>


            <div class="w-full flex flex-col md:w-[35%] rounded-3xl overflow-hidden fade-up bg-[var(--bg-white)] p-2">
                <img class="rounded-2xl" src="{{asset('assets/images/offers/book-offer.png')}}" alt="">
                <div class="w-full mt-4 flex flex-col items-center justify-center gap-3 py-4">
                    <h3 class="font-bold text-[17px] text-[var(--dark-primary)]">
                        عمليه خلع ضرس العقل المطمور بدون الم
                    </h3>
                    <span class="font-bold text-[17px] text-[var(--yello-primary)]">
                        999 <small class="text-[var(--dark-primary)] text-[13px]">ريال</small>
                    </span>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- partners --}}
<section class="w-full flex items-center justify-center mt-20">
    <div class="container">
        <h2 class="w-full text-center text-[20px] md:text-[31px] text-[var(--dark-primary)] font-bold fade-up ">
            شركاء
            <span class="text-[var(--yello-primary)] ">النجاح</span>
        </h2>
        <div class="swiper swiper4 w-full mt-4 fade-up ">
            <div class="swiper-wrapper" id="swiper-wrapper-41f2f6ebbd0cf81091">
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
    const swiper4 = new Swiper('.swiper4', {
        loop: true,
        slidesPerView: 5,
        spaceBetween: 16,
        pagination: {
            el: '.swiper4 .swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper4 .swiper-button-next',
            prevEl: '.swiper4 .swiper-button-prev',
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
<script>
    document.querySelectorAll('.custom-radio').forEach((radio) => {
    radio.addEventListener('change', function () {
        // to change checked pyment method
        document.querySelectorAll('.custom-radio').forEach((r) => {
            const span = r.nextElementSibling.querySelector('span:first-child');
            if (r.checked) {
                span.classList.add('bg-[var(--yello-primary)]', 'border-[var(--yello-primary)]');
            } else {
                span.classList.remove('bg-[var(--yello-primary)]', 'border-[var(--yello-primary)]');
            }
            document.querySelector('#hidden-installment-card-tamara').classList.add('hidden');
            document.querySelector('#hidden-installment-card-tamara').classList.remove('flex');
            document.querySelector('#hidden-installment-card-taby').classList.add('hidden');
            document.querySelector('#hidden-installment-card-taby').classList.remove('flex');
        });

        // to show installment methods
        const installment = document.querySelectorAll('#installment')
        if(installment[0].checked){
                document.querySelector('#hidden-installment').classList.add('flex');
                document.querySelector('#hidden-installment').classList.remove('hidden');
            }else{
                document.querySelector('#hidden-installment').classList.remove('flex');
                document.querySelector('#hidden-installment').classList.add('hidden'); 
            }
    });
});
</script>
<script>
    // to check terms
    document.querySelectorAll('.custom-radio-terms').forEach((radio) => {
    radio.addEventListener('change', function () {
        document.querySelectorAll('.custom-radio-terms').forEach((r) => {
            const span = r.nextElementSibling.querySelector('span:first-child');
            if (r.checked) {
                span.classList.add('bg-[var(--yello-primary)]', 'border-[var(--yello-primary)]');
            } else {
                span.classList.remove('bg-[var(--yello-primary)]', 'border-[var(--yello-primary)]');
            }
        });
    });
});
</script>
<script>
    // to check installment method
    document.querySelectorAll('.custom-radio-installmet').forEach((radio) => {
    radio.addEventListener('change', function () {
        document.querySelectorAll('.custom-radio-installmet').forEach((r) => {
            const span = r.nextElementSibling.querySelector('span:first-child');
            if (r.checked) {
                span.classList.add('bg-[var(--yello-primary)]', 'border-[var(--yello-primary)]');
            } else {
                span.classList.remove('bg-[var(--yello-primary)]', 'border-[var(--yello-primary)]');
            }

            const taby = document.getElementById('taby')
            const tamara = document.getElementById('tamara')

            if(r.id === "taby" && taby.checked){
                document.querySelector('#hidden-installment-card-tamara').classList.add('hidden');
                document.querySelector('#hidden-installment-card-tamara').classList.remove('flex');
                document.querySelector('#hidden-installment-card-taby').classList.add('flex');
                document.querySelector('#hidden-installment-card-taby').classList.remove('hidden');
            }
            if(r.id === "tamara" && tamara.checked){
                document.querySelector('#hidden-installment-card-taby').classList.add('hidden');
                document.querySelector('#hidden-installment-card-taby').classList.remove('flex');
                document.querySelector('#hidden-installment-card-tamara').classList.add('flex');
                document.querySelector('#hidden-installment-card-tamara').classList.remove('hidden');
            }
        });
    });
});
</script>
@endsection