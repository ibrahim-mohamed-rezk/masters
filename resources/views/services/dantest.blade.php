@extends('layouts.app')

@section('CssStyles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endsection

@section('heroContent')
<div class="mt-32 w-full flex flex-col justify-around items-start px-2 fade-up pr-10">
    <h3 class="font-bold text-[28px] text-[var(--dark-secondary)]">
        خدمات عيادات ماسترز للأسنان
    </h3>
</div>
@endsection

@section('container')
{{-- services details --}}
<section class="w-full flex items-center justify-center mt-20 px-2">
    <div class="container">

        <div class="flex flex-col w-full md:w-[60%] gap-4 text-center md:text-right">
            <h2 class="text-[20px] md:text-[27px] text-[var(--dark-primary)] fade-up font-bold">
                نتميز <span class="text-[var(--yello-primary)]">بالجودة العالية وأحدث التقنيات المتقدمة</span>
                في جميع تخصصات طب وتجميل الأسنان
            </h2>
            <p class="text-[15px] md:text-[17px] text-[var(--text-gray)] fade-up font-semibold fade-up">
                ستعيش تجربة فريدة أثناء علاجك لأننا رواد في الرعاية الصحية مع بيئة مريحة و
                الرعاية المتكاملة التي نقدمها لك.
            </p>
            <p class="text-[15px] md:text-[17px] text-[var(--text-gray)] fade-up font-semibold fade-up">
                في عيادات رام ستعيش تجربة فريدة من نوعها أثناء فترة علاجك لأننا رائدون في الرعاية الصحية بوجود بيئة
                مريحة ورعاية متكاملة نوفرها
                لك، كما إننا نهدف الى بناء جسور الثقة مع جميع عملاؤنا عن طريق التعليم والتثقيف الصحي بالإضافة الى
                المصداقية.
            </p>
        </div>

    </div>
</section>

{{-- dantest services --}}
<section class="w-full flex items-center justify-center mt-8">
    <div class="container">
        <div class="swiper swiper1 w-full px-2 fade-up">
            <div class="swiper-wrapper " id="swiper-wrapper-388fc33a10f2e2169" aria-live="off">
                @for ($i = 0; $i < 10; $i++) <div
                    class="swiper-slide  overflow-hidden rounded-2xl p-2">
                    <div class="">

                        <div class="rounded-2xl overflow-hidden">
                            <img src="{{ asset('assets/images/services/dantest-service.jpg') }}" alt="doctor">
                        </div>

                        <div class="flex flex-col items-center justify-center gap-1 px-2">
                            <h3 class=" text-[12px] md:text-[15px] font-bold text-[var(--dark-primary)]">العلاج التحفظي  
                            </h3>
                        </div>
                    </div>
            </div>
            @endfor
        </div>
        <div class="slider-controls">
            <div class="swiper-button-next doctor-slider-btn bg-white rounded-full !w-[40px] !h-[40px] " role="button"
                aria-label="Next slide" aria-controls="swiper-wrapper-388fc33a10f2e2169"></div>
            <div class="swiper-button-prev doctor-slider-btn bg-white rounded-full !w-[40px] !h-[40px] " tabindex="0"
                role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-388fc33a10f2e2169"></div>
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
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

{{-- doctors --}}
<section class="w-full flex items-center justify-center mt-20">
    <div class="container">
        <div class="flex items-center justify-between py-4 px-2 fade-up">
            <h2 class="text-[20px] md:text-[31px] text-[var(--dark-primary)] font-bold">
                أطباء <span class="text-[var(--yello-primary)]">عيادات ماسترز</span>
            </h2>
            <a href="#" class=" text-[12px] md:text-[15px] font-bold text-[var(--yello-primary)]">
                عرض جميع اﻷطباء
                <div class="inline-block mr-2 rounded-xl bg-[var(--bg-white)] px-3 py-1">
                    <i class="fa-solid fa-chevron-left text-[var(--yello-primary)]"></i>
                </div>
            </a>
        </div>


        <div class="swiper swiper1 w-full px-2 fade-up">
            <div class="swiper-wrapper " id="swiper-wrapper-388fc33a10f2e2169" aria-live="off">
                @for ($i = 0; $i < 10; $i++) <div
                    class="swiper-slide  overflow-hidden rounded-2xl bg-[var(--bg-white)] p-2">
                    <div class="">

                        <div class="rounded-2xl overflow-hidden">
                            <img src="{{ asset('assets/images/home/doctor-slider.jpg') }}" alt="doctor">
                        </div>

                        <div class="flex flex-col items-center justify-center mt-4 gap-1 px-2">
                            <h3 class=" text-[12px] md:text-[15px] font-bold text-[var(--dark-primary)]">د. عاصم حمد
                            </h3>
                            <span class="block text-[13px] font-bold text-[var(--yello-primary)]">ماسترز الأسنان</span>
                            <span class="text-[13px] font-bold text-[var(--text-gray)] text-center">ماسترز الأحساء
                                الهفوف - خلف العثيم مول - حي
                                البستان</span>
                        </div>

                        <div class="flex justify-center items-center flex-col px-2 pb-2">
                            <div class="mt-4 w-full">
                                <a href="/book-now" class="w-full">
                                    <button type="button"
                                        class="w-full bg-[var(--yello-primary)] rounded-[20px] text-white text-wrap focus:outline-none px-5 py-3 text-center font-bold">إحجز
                                        الآن<i class="fa-solid fa-calendar-days mr-3"></i></button></a>
                            </div>
                            <div class="mt-4 w-full">
                                <button type="button"
                                    class="rounded-[20px] bg-white text-[var(--text-gray)] text-wrap focus:outline-none px-5 py-3 text-center font-bold w-full">
                                    المزيد</button>
                            </div>
                        </div>

                    </div>
            </div>
            @endfor
        </div>
        <div class="slider-controls">
            <div class="swiper-button-next doctor-slider-btn bg-white rounded-full !w-[40px] !h-[40px] " role="button"
                aria-label="Next slide" aria-controls="swiper-wrapper-388fc33a10f2e2169"></div>
            <div class="swiper-button-prev doctor-slider-btn bg-white rounded-full !w-[40px] !h-[40px] " tabindex="0"
                role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-388fc33a10f2e2169"></div>
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>


    </div>
</section>

{{-- articals --}}
<section class="w-full flex items-center justify-center mt-20">
    <div class="container">
        <div class="flex items-center justify-between py-4 px-2 fade-up">
            <h2 class="text-[20px] md:text-[31px] text-[var(--dark-primary)] font-bold">
                أحدث <span class="text-[var(--yello-primary)]">المقالات </span>
            </h2>
            <a href="#" class=" text-[12px] md:text-[15px] font-bold text-[var(--yello-primary)]">
                عرض جميع المقالات
                <div class="inline-block mr-2 rounded-xl bg-[var(--bg-white)] px-3 py-1">
                    <i class="fa-solid fa-chevron-left text-[var(--yello-primary)]"></i>
                </div>
            </a>
        </div>

        <div class="flex flex-wrap items-start justify-between w-full gap-5">
            @for ($i = 0; $i < 8; $i++) <div class="w-full lg:w-[48%] ">
                <div class="flex w-full items-center justify-start gap-4 p-4 fade-up">
                    <a href="#" class="">
                        <img class="rounded-3xl" src="{{asset('assets/images/home/articals-1.jpg')}}" alt="artical">
                    </a>
                    <div class="flex flex-col items-start justify-start gap-2 pl-6">
                        <a href="#" class="text-[10px] md:text-[12px] text-[var(--yello-primary)] font-bold">
                            مقالات عامة
                        </a>
                        <a href="#">
                            <h3 class="line-clamp-2 text-[12px] md:text-[15px] text-[var(--dark-secondary)] font-bold">
                                كل ما تحتاج معرفته عن البوتكس
                                وعيادات تجميل الأنف واسعار حقن بوتكس الأنف في
                                السعودية</h3>
                            <p
                                class="line-clamp-2 mt-2 text-[12px] md:text-[15px] text-[var(--text-gray)] font-semibold">
                                &nbsp;
                                يُعد البوتكس من الإجراءات التجميلية الشائعة التي تُستخدم لتحسين مظهر الأنف وتصحيح بعض
                                العيوب الطفيفة دون الحاجة إلى جراحة. السؤال عن متى تظهر نتائج البوتكس للأ </p>
                            <span class="text-[12px] text-[var(--text-gray)] font-semibold">منذ 4 أيام</span>
                        </a>
                    </div>
                </div>
        </div>
        @endfor
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
    const swiper1 = new Swiper('.swiper1', {
        loop: true,
        slidesPerView: 4,
        spaceBetween: 16,
        pagination: {
            el: '.swiper1 .swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper1 .swiper-button-next',
            prevEl: '.swiper1 .swiper-button-prev',
        },
        autoplay: {
            delay: 3000, 
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
                slidesPerView: 4,
                spaceBetween: 16
            }
        }
    });

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