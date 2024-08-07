@extends('layouts.app')

@section('CssStyles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
    .active {
        background-color: var(--yello-primary);
        color: #fff;
    }
</style>
@endsection


@section('heroContent')
<div class="mt-32 w-full flex flex-col justify-around items-start px-2 fade-up pr-10">
    <h3 class="font-bold text-[28px] text-[var(--dark-secondary)]">
        مقالات ماسترز
    </h3>
</div>
@endsection

@section('container')
{{-- all articals --}}
<section class="w-full flex items-center justify-center mt-20 px-2">
    <div class="container">

        <div class="flex flex-col items-start gap-2 w-full">
            <h2 class="fade-up text-[20px] md:text-[31px] font-bold text-[var(--dark-primary)]">
                مقالات <span class="text-[var(--yello-primary)]">طبية: </span>
            </h2>
            <p class="fade-up text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold">
                تصفح على معلومات طبية موثوقة تمت مراجعتها من قبل خبرائنا.
            </p>
        </div>

        <div class="flex items-start justify-between flex-col w-full mt-10 gap-5">
            <div class="flex items-start w-full px-2">
                <div class="w-full flex flex-col md:flex-row items-center justify-start gap-5">
                    <div class="w-full md:w-[68%] p-3 bg-[var(--bg-white)] rounded-2xl flex items-center justify-center fade-up">
                        <form class="w-full flex items-center justify-center bg-white rounded-3xl px-2">
                            <input type="search" class="w-full border-none outline-none p-4 bg-transparent"
                                placeholder=" البحث عن طبيب ">
                            <button
                                class="rounded-full bg-[var(--yello-primary)] !w-[40px] !h-[40px] flex items-center justify-center">
                                <svg class="w-[15px] h-[15px]" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 15.996 16" id="search">
                                    <defs>
                                        <style>
                                            .bba {
                                                fill: #624f43
                                            }
                                        </style>
                                    </defs>
                                    <path class="bba"
                                        d="M15.808 14.842l-4.449-4.49a6.34 6.34 0 10-.962.975l4.42 4.461a.685.685 0 00.966.025.689.689 0 00.025-.971zM6.377 11.38a5.006 5.006 0 113.541-1.466 4.975 4.975 0 01-3.54 1.466z" />
                                </svg>
                            </button>
                        </form>
                    </div>

                    <div class="w-full md:w-[28%] p-3 bg-[var(--bg-white)] rounded-2xl flex items-center justify-center fade-up">
                        <form class="w-full flex flex-col items-center justify-center px-2 gap-2">
                            <div
                                class="bg-white rounded-3xl p-4 w-full font-semibold text-[var(--text-gray)] text-[15px]">
                                <select class="w-full border-none outline-none bg-transparent" name="branche">
                                    <option value="6">كل المقالات
                                    </option>
                                    <option value="7">جلدية
                                        اليحيى</option>
                                    <option value="44">أسنان
                                    </option>
                                    <option value="44">مقالات عامة
                                    </option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap items-start justify-between w-full gap-5">
                @for ($i = 0; $i < 1; $i++) <div class="w-full lg:w-[48%] ">
                    <div class="flex w-full items-center justify-start gap-4 p-4 fade-up">
                        <a href="/articals/artical" class="">
                            <img class="rounded-3xl" src="{{asset('assets/images/home/articals-1.jpg')}}" alt="artical">
                        </a>
                        <div class="flex flex-col items-start justify-start gap-2 pl-6">
                            <a href="/articals/artical" class="text-[10px] md:text-[12px] text-[var(--yello-primary)] font-bold">
                                مقالات عامة
                            </a>
                            <a href="/articals/artical">
                                <h3
                                    class="line-clamp-2 text-[12px] md:text-[15px] text-[var(--dark-secondary)] font-bold">
                                    كل ما تحتاج معرفته عن البوتكس
                                    وعيادات تجميل الأنف واسعار حقن بوتكس الأنف في
                                    السعودية</h3>
                                <p
                                    class="line-clamp-2 mt-2 text-[12px] md:text-[15px] text-[var(--text-gray)] font-semibold">
                                    &nbsp;
                                    يُعد البوتكس من الإجراءات التجميلية الشائعة التي تُستخدم لتحسين مظهر الأنف وتصحيح
                                    بعض
                                    العيوب الطفيفة دون الحاجة إلى جراحة. السؤال عن متى تظهر نتائج البوتكس للأ </p>
                                <span class="text-[12px] text-[var(--text-gray)] font-semibold">منذ 4 أيام</span>
                            </a>
                        </div>
                    </div>
            </div>
            @endfor
        </div>

        <div class="w-full flex items-center justify-center">
            <nav class="w-full mt-10 px-2 fade-up">
                <ul class="w-full h-10 flex items-center justify-center gap-2 ">
                    <li
                        class="hidden sm:inline bg-[var(--bg-white)] rounded-3xl text-[13px] md:text-[15px] font-semibold text-[var(--yello-primary)]">
                        <a href="#" class="flex items-center justify-center px-4 h-10">السابق</a>
                    </li>
                    @for ($i = 1; $i < 6; $i++) <li class="{{$i == 2 ? "active" : ""}} bg-[var(--bg-white)] rounded-3xl text-[13px]
    md:text-[15px] font-semibold text-[var(--yello-primary)]">
                        <a href="#" class="flex items-center justify-center px-4 h-10">{{$i}}</a>
                        </li>
                        @endfor
                        <li
                            class=" hidden sm:inline bg-[var(--bg-white)] rounded-3xl text-[13px] md:text-[15px] font-semibold text-[var(--yello-primary)]">
                            <a href="#" class="flex items-center justify-center px-4 h-10 rounded-e-lg">التالي</a>
                        </li>
                </ul>
            </nav>
        </div>
    </div>
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