@extends('layouts.app')

@section('CssStyles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endsection


@section('heroContent')
<div class="mt-32 w-full flex flex-col justify-around items-start px-2 fade-up pr-10">
    <h3 class="font-bold text-[28px] text-[var(--dark-secondary)]">
        العروض المتاحة عروض إفتتاح - فرع الدمام حي الشاطئ
    </h3>
</div>
@endsection

@section('container')
{{-- doctor more info --}}
<section class="w-full flex items-center justify-center mt-20 px-2">
    <div class="container">
        <div class="flex flex-col items-start gap-2 w-full">
            <h2 class="fade-up text-[20px] md:text-[31px] font-bold text-[var(--dark-primary)]">
                عروض إفتتاح - فرع الدمام حي الشاطئ
            </h2>

        </div>
        <div class="flex items-start justify-between flex-col lg:flex-row w-full mt-10 gap-5">
            <div class="flex items-start w-full lg:w-[30%] px-2">
                <div class="w-full flex flex-col items-center justify-center gap-5">

                    <div
                        class="w-full p-2 bg-[var(--bg-white)] rounded-2xl flex flex-col gap-6 items-center justify-center fade-up">
                        <div class="w-full flex items-center justify-center rounded-2xl overflow-hidden">
                            <img src="{{asset('assets/images/offers/offers-1.jpg')}}" alt="offers"
                                class="w-full rounded-2xl">
                        </div>
                        <div class="w-full flex flex-col items-center justify-center px-2 gap-2">
                            <a class=" w-full" href="#">
                                <button
                                    class=" bg-white rounded-3xl p-4 w-full font-semibold text-[var(--text-gray)] text-[15px] hover:bg-[var(--yello-primary)] ">عن
                                    كل العروض
                                </button></a>
                            <a class=" w-full" href="#">
                                <button
                                    class=" bg-white rounded-3xl p-4 w-full font-semibold text-[var(--text-gray)] text-[15px] hover:bg-[var(--yello-primary)] ">الرحلة
                                    عروض الأسنان</button></a>
                            <a class=" w-full" href="#">
                                <button
                                    class=" bg-white rounded-3xl p-4 w-full font-semibold text-[var(--text-gray)] text-[15px] hover:bg-[var(--yello-primary)] ">
                                    عروض الجلدية و التجميل و الليزر

                                </button></a>
                            <a class=" w-full" href="#">
                                <button
                                    class=" bg-white rounded-3xl p-4 w-full font-semibold text-[var(--text-gray)] text-[15px] hover:bg-[var(--yello-primary)] ">
                                    عروض الطبي
                                </button></a>
                            <a class=" w-full" href="#">
                                <button
                                    class=" bg-white rounded-3xl p-4 w-full font-semibold text-[var(--text-gray)] text-[15px] hover:bg-[var(--yello-primary)] ">
                                    عروض السمنة و التكميم
                                </button></a>
                            <a class=" w-full" href="#">
                                <button
                                    class=" bg-white rounded-3xl p-4 w-full font-semibold text-[var(--text-gray)] text-[15px] hover:bg-[var(--yello-primary)] ">
                                    عروض جراحات التجميل
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center w-full lg:w-[68%]">
                <div class="flex flex-wrap w-full gap-5">
                    @for ($i = 0; $i < 9; $i++) <div
                        class=" w-full sm:w-[45%] md:w-[30%] overflow-hidden rounded-2xl bg-[var(--bg-white)] p-2 fade-up">
                        <div class="">

                            <div class="rounded-2xl overflow-hidden w-full">
                                <img class="w-full" src="{{ asset('assets/images/offers/offer.jpg') }}" alt="doctor">
                            </div>

                            <div class="flex flex-col items-center justify-center mt-4 gap-1 px-2">
                                <h3 class=" text-center text-[12px] md:text-[15px] font-bold text-[var(--dark-primary)]">تقويم
                                    الاسنان الانفزلاين بأقساط شهرية
                                </h3>
                                <span class="block text-[20px] font-bold text-[var(--yello-primary)]">500 <span
                                        class="text-[13px]">ريال</span>
                                </span>
                            </div>

                            <div class="flex justify-center items-center flex-col px-2 pb-2">
                                <div class="mt-4 w-full">
                                    <a href="/book-now" class="w-full">
                                        <button type="button"
                                            class="w-full bg-[var(--yello-primary)] rounded-[20px] text-white text-wrap focus:outline-none px-5 py-3 text-center font-bold">إحجز
                                            الآن<i class="fa-solid fa-calendar-days mr-3"></i></button></a>
                                </div>
                            </div>
                        </div>
                </div>
                @endfor
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
    const header = document.getElementById('header');
    header.style.backgroundImage = `url({{ asset('assets/images/offers/offers-panel.jpg') }})`;
    });
</script>
@endsection