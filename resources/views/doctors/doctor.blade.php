@extends('layouts.app')

@section('CssStyles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
    .journey::before {
        width: 4px;
        height: 100%;
        background: #e8f4d8;
        content: "";
        position: absolute;
        top: 0;
        right: 10px;
    }

    .journey li::after {
        content: "";
        position: absolute;
        top: 2px;
        right: -20px;
        width: 25px;
        height: 25px;
        border-radius: 100%;
        background-color: #e8f4d8;
    }

    .journey li:nth-child(1)::after {
        background-color: var(--yello-primary) !important;
        -webkit-animation: fade .5s ease-in-out infinite;
        animation: fade .5s ease-in-out infinite;
        border: 5px solid #e8f4d8;
    }
</style>
@endsection


@section('heroContent')
<div class="mt-32 w-full flex flex-col justify-around items-start px-2 fade-up pr-10">
    <h3 class="font-bold text-[28px] text-[var(--dark-secondary)]">
        د. نوال العمري
    </h3>
</div>
@endsection

@section('container')
{{-- doctor more info --}}
<section class="w-full flex items-center justify-center mt-20 px-2">
    <div class="container">

        <div class="flex items-start justify-between flex-col lg:flex-row w-full mt-10 gap-5">
            <div class="flex items-start w-full lg:w-[30%] px-2">
                <div class="w-full flex flex-col items-center justify-center gap-5">

                    <div class="w-full p-2 bg-[var(--bg-white)] rounded-2xl flex items-center justify-center fade-up">
                        <div class="w-full flex items-center justify-center rounded-2xl overflow-hidden">
                            <img src="{{asset('assets/images/doctors/doctor.jpg')}}" alt="doctor" class="w-full rounded-2xl">
                        </div>
                    </div>


                    <div class="w-full p-3 bg-[var(--bg-white)] rounded-2xl flex items-center justify-center fade-up">
                        <div class="w-full flex flex-col items-center justify-center px-2 gap-2">
                            <a class=" w-full" href="#profileAbout">
                                <button
                                    class=" bg-white rounded-3xl p-4 w-full font-semibold text-[var(--text-gray)] text-[15px] hover:bg-[var(--yello-primary)] ">عن
                                    الدكتور
                                </button></a>
                            <a class=" w-full" href="#profileJourney">
                                <button
                                    class=" bg-white rounded-3xl p-4 w-full font-semibold text-[var(--text-gray)] text-[15px] hover:bg-[var(--yello-primary)] ">الرحلة
                                    المهنية</button></a>
                            <a class=" w-full" href="#profileServices">
                                <button
                                    class=" bg-white rounded-3xl p-4 w-full font-semibold text-[var(--text-gray)] text-[15px] hover:bg-[var(--yello-primary)] ">الخدمات

                                </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center w-full lg:w-[68%]">
                <div class="flex flex-wrap w-full gap-5">
                    <div class="flex flex-col w-full ">

                        <div class="flex w-full items-center justify-between fade-up">
                            <div>
                                <h2 class="text-[20px] md:text-[23px] text-[var(--dark-primary)] font-bold">
                                    د. نوال العمري
                                </h2>
                                <span class="text-[13px] md:text-[15px] text-[var(--yello-primary)] font-bold">طب أسنان
                                    عام</span>
                            </div>
                            <a href="/book-now"
                                class="text-[13px] p-4 md:text-[15px] text-white font-bold rounded-3xl bg-[var(--yello-primary)]">
                                إحجز الآن مع د. نوال العمري
                            </a>
                        </div>


                        <div class="w-full mt-8 fade-up" id="profileAbout">
                            <h3 class="text-[15px] md:text-[19px] text-[var(--dark-primary)] font-bold">
                                عن الدكتور
                            </h3>
                            <div
                                class="flex w-full mt-2 items-start justify-center flex-col gap-2 bg-[var(--bg-white)] p-4 rounded-2xl">
                                <h4 class="text-[13px] md:text-[15px] text-[var(--dark-primary)] font-bold">د. نوال
                                    العمري</h4>
                                <p class="text-[13px] md:text-[15px] text-[var(--text-gray)] font-bold">
                                    طبيب أسنان عام
                                </p>
                                <div class="flex w-full items-center justify-between mt-4">
                                    <div class="flex flex-col items-start justify-start gap-2">
                                        <h4 class="text-[13px] md:text-[15px] text-[var(--dark-primary)] font-bold">
                                            سنوات الخبرة:</h4>
                                        <span
                                            class="text-[20px] md:text-[27px] text-[var(--yello-primary)] font-bold">1</span>
                                        <small
                                            class="text-[10px] md:text-[13px] text-[var(--text-gray)] font-bold">سنوات</small>
                                    </div>
                                    <div class="flex flex-col items-start justify-start gap-2">
                                        <h4 class="text-[13px] md:text-[15px] text-[var(--dark-primary)] font-bold">
                                            الفروع التي يخدم بها:</h4>
                                        <ul class="bg-white px-2 py-1 rounded-2xl">
                                            <li class="list-inline-item">ماسترز العزيزية - بجانب بستاني
                                                و مطعم البيك - حي الخزامى</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="w-full mt-8 fade-up" id="profileJourney">
                            <h3 class="text-[15px] md:text-[19px] text-[var(--dark-primary)] font-bold">
                                الرحلة المهنية
                            </h3>
                            <div
                                class="flex w-full mt-2 items-start justify-center flex-col gap-2 bg-[var(--bg-white)] p-5 rounded-2xl">
                                <ul class=" journey relative px-5 pt-4 flex flex-col items-start justify-center gap-4">
                                    <li
                                        class="relative px-4 text-[13px] md:text-[15px] text-[var(--yello-primary)] font-bold">
                                        بكالوريوس طب وجراحة الفم والاسنان. </li>
                                    <li
                                        class="relative px-4 text-[13px] md:text-[15px] text-[var(--dark-primary)] font-bold">
                                        بكالوريوس طب وجراحة الفم والاسنان. </li>
                                </ul>
                            </div>
                        </div>


                        <div class="w-full mt-8 fade-up" id="profileServices">
                            <h3 class="text-[15px] md:text-[19px] text-[var(--dark-primary)] font-bold">
                                الخدمات التي يقدمها الطبيب
                            </h3>
                            <div
                                class="flex w-full md:w-1/2 mt-2 items-start justify-center flex-col gap-2 bg-[var(--bg-white)] p-3 rounded-2xl">

                                <div class="flex flex-col items-center justify-center gap-2">

                                    <div class="rounded-3xl overflow-hidden">
                                        <img src="{{asset('assets/images/doctors/doctor-service.jpg')}}" alt="">
                                    </div>

                                    <div class="w-full flex items-center justify-center mt-2">
                                        <h4 class="text-[15px] md:text-[17px] text-[var(--dark-primary)] font-bold">
                                            طب أسنان عام
                                        </h4>
                                    </div>

                                    <div class="w-full flex items-center justify-center mt-2">
                                        <a href="/book-now">
                                            <button type="button"
                                                class="bg-[var(--yello-primary)] rounded-3xl text-white text-wrap focus:outline-none px-5 py-3 text-center font-bold">إحجز
                                                الآن<i class="fa-solid fa-calendar-days mr-3"></i></button></a>
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
                                <a href="/doctor/doctorName">
                                    <button type="button"
                                        class="rounded-[20px] bg-white text-[var(--text-gray)] text-wrap focus:outline-none px-5 py-3 text-center font-bold w-full">
                                        المزيد</button></a>
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