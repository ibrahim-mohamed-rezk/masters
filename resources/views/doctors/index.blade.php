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
        الأطباء
    </h3>
</div>
@endsection

@section('container')
{{-- all doctors --}}
<section class="w-full flex items-center justify-center mt-20 px-2">
    <div class="container">

        <div class="flex flex-col items-start gap-2 w-full">
            <h2 class="fade-up text-[20px] md:text-[31px] font-bold text-[var(--dark-primary)]">
                تعرف على <span class="text-[var(--yello-primary)]">خبرائنا: </span>
            </h2>
            <p class="fade-up text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold">
                عيادات ماسترز معروفة بفريقها الطبي المتميز. نقدم لك كوادر وخبرات عالمية. تعرف على طاقم ماسترز الطبي،
                واحجز
                موعدك في الحال.
            </p>
        </div>

        <div class="flex items-start justify-between flex-col lg:flex-row w-full mt-10 gap-5">
            <div class="flex items-start w-full lg:w-[25%] px-2">
                <div class="w-full flex flex-col items-center justify-center gap-5">

                    <div class="w-full p-3 bg-[var(--bg-white)] rounded-2xl flex items-center justify-center fade-up">
                        <form class="w-full flex items-center justify-center bg-white rounded-3xl px-2">
                            <input type="search" class="w-[90%] border-none outline-none p-4 bg-transparent"
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


                    <div class="w-full p-3 bg-[var(--bg-white)] rounded-2xl flex items-center justify-center fade-up">
                        <div class="w-full flex flex-col items-center justify-center px-2 gap-2">
                            <button
                                class=" bg-white rounded-3xl p-4 w-full font-semibold text-[var(--text-gray)] text-[15px] hover:bg-[var(--yello-primary)] ">كل
                                الأطباء</button>
                            <button
                                class=" bg-white rounded-3xl p-4 w-full font-semibold text-[var(--text-gray)] text-[15px] hover:bg-[var(--yello-primary)] ">الأسنان</button>
                            <button
                                class=" bg-white rounded-3xl p-4 w-full font-semibold text-[var(--text-gray)] text-[15px] hover:bg-[var(--yello-primary)] ">الجلدية
                                و التجميل
                                و الليزر</button>
                            <button
                                class=" bg-white rounded-3xl p-4 w-full font-semibold text-[var(--text-gray)] text-[15px] hover:bg-[var(--yello-primary)] ">الطبي</button>
                        </div>
                    </div>


                    <div class="w-full p-3 bg-[var(--bg-white)] rounded-2xl flex items-center justify-center fade-up">

                        <form class="w-full flex flex-col items-center justify-center px-2 gap-2">
                            <div
                                class="bg-white rounded-3xl p-4 w-full font-semibold text-[var(--text-gray)] text-[15px]">
                                <select class="w-full border-none outline-none bg-transparent" name="branche">
                                    <option value="">التصفية بالفرع</option>
                                    <optgroup label="الأحساء">
                                        <option value="6">رام الأحساء الهفوف - خلف العثيم مول - حي البستان
                                        </option>
                                        <option value="7">رام الأحساء المبرز - شارع الظهران - مقابل الجبر - حي
                                            اليحيى</option>
                                        <option value="44">رام الأحساء الواحة - شارع الملك عبدالله - حي الواحة
                                        </option>
                                    </optgroup>
                                </select>
                            </div>

                            <div
                                class="bg-white rounded-3xl p-4 w-full font-semibold text-[var(--text-gray)] text-[15px]">
                                <select class="w-full border-none outline-none bg-transparent" name="specialty">
                                    <option value="">التصفية بالخدمات</option>
                                    <optgroup label="الأسنان">
                                        <option value="7">علاج جذور الأسنان</option>
                                        <option value="4">طب أسنان الأطفال</option>
                                        <option value="27">طب أسنان عام</option>
                                        <option value="1">جراحة الوجه و الفكين و زراعة الأسنان</option>
                                        <option value="5">علاج اللثة</option>
                                        <option value="3">تقويم الأسنان</option>
                                        <option value="2">العلاج التحفظي</option>
                                        <option value="32">تركيبات الاسنان</option>
                                    </optgroup>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center w-full lg:w-[70%]">
                <div class="flex flex-wrap w-full gap-5">
                    @for ($i = 0; $i < 9; $i++) <div
                        class=" w-full sm:w-[45%] md:w-[30%] overflow-hidden rounded-2xl bg-[var(--bg-white)] p-2 fade-up">
                        <div class="">

                            <div class="rounded-2xl overflow-hidden">
                                <img src="{{ asset('assets/images/home/doctor-slider.jpg') }}" alt="doctor">
                            </div>

                            <div class="flex flex-col items-center justify-center mt-4 gap-1 px-2">
                                <h3 class=" text-[12px] md:text-[15px] font-bold text-[var(--dark-primary)]">د. عاصم حمد
                                </h3>
                                <span class="block text-[13px] font-bold text-[var(--yello-primary)]">ماسترز
                                    الأسنان</span>
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
            <div class="w-full flex items-center justify-center">
                <nav class="w-full mt-10 px-2 fade-up">
                    <ul class="w-full h-10 flex items-center justify-center gap-2 ">
                        <li
                            class="hidden sm:inline bg-[var(--bg-white)] rounded-3xl text-[13px] md:text-[15px] font-semibold text-[var(--yello-primary)]">
                            <a href="#" class="flex items-center justify-center px-4 h-10">السابق</a>
                        </li>
                        @for ($i = 1; $i < 6; $i++) <li
                            class="{{$i == 2 ? "active" : ""}} bg-[var(--bg-white)] rounded-3xl text-[13px] md:text-[15px] font-semibold text-[var(--yello-primary)]">
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