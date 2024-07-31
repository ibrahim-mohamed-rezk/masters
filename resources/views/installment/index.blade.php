@extends('layouts.app')

@section('CssStyles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endsection


@section('heroContent')
<div class="mt-32 w-full flex flex-col justify-around items-start px-2 fade-up pr-10">
    <h3 class="font-bold text-[28px] text-[var(--dark-secondary)]">
        قسط خدماتك الآن
    </h3>
</div>
@endsection

@section('container')
{{-- book form --}}
<section class="w-full flex items-center justify-center mt-20 px-2">
    <div class="container">

        <div class="flex flex-col items-start gap-2 w-full">
            <h2 class="fade-up text-[20px] md:text-[31px] font-bold text-[var(--dark-primary)]">
                تمتع بالخدمة الآن، <span class="text-[var(--yello-primary)]">وادفع لاحقًا! </span>
            </h2>
            <p class="fade-up text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold">
                لحجز موعد مسبق في عيادات ماسترز أدخل البيانات المطلوبة وسيتم التواصل معك من فريق خدمة العملاء لتأكيد الحجز.
            </p>
        </div>

        <div class="flex flex-col md:flex-row items-center justify-between w-full mt-8">

            <div class="flex items-center justify-center w-full md:w-[60%]">
                <form class="flex items-start justify-start flex-col w-full gap-3 p-1">

                    <h3 class="text-[19px] font-bold text-[var(--dark-primary)] fade-up">إختر القسم</h3>

                    <div class="flex items-center justify-between w-full fade-up">
                        <label class="text-[var(--text-gray)] text-[14px] font-bold ">القسم</label>
                        <div class="flex items-center justify-center w-2/3  rounded-3xl bg-[var(--bg-white)] p-4">
                            <select class="w-full bg-transparent border-none outline-none" required="">
                                <option>إختر القسم المناسب لك</option>
                                <option value="1">الأسنان</option>
                                <option value="2">الجلدية و التجميل و الليزر</option>
                                <option value="3">الطبي</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex items-center justify-between w-full fade-up">
                        <label class="text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold">الخدمة</label>
                        <div class="flex items-center justify-center w-2/3  rounded-3xl bg-[var(--bg-white)] p-4">
                            <select class="w-full bg-transparent border-none outline-none" " 
                             required="">
                                <option>إختر القسم أولاً</option>
                            </select>
                        </div>
                    </div>
                    <div class=" flex items-center justify-between w-full fade-up">
                                <label for="bookBranch"
                                    class="text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold">المدينة</label>
                                <div
                                    class="flex items-center justify-center w-2/3  rounded-3xl bg-[var(--bg-white)] p-4">
                                    <select class="w-full bg-transparent border-none outline-none" required="">
                                        <option>إختر القسم أولاً</option>
                                    </select>
                                </div>
                        </div>
                        <div class=" flex items-center justify-between w-full fade-up">
                            <label for="bookBranch"
                                class="text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold">الفرع</label>
                            <div class="flex items-center justify-center w-2/3  rounded-3xl bg-[var(--bg-white)] p-4">
                                <select class="w-full bg-transparent border-none outline-none" required="">
                                    <option>إختر المدينة أولاً</option>
                                </select>
                            </div>
                        </div>


                        <h3 class="text-[19px] font-bold text-[var(--dark-primary)] mt-10 fade-up">البيانات الشخصية</h3>
                        <div class="flex items-center justify-between w-full fade-up">
                            <label for="bookName"
                                class="text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold">الاسم
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
                                <input type="email" class="bg-transparent border-none outline-none w-full"
                                    id="bookEmail" placeholder="أدخل البريد الإلكتروني" required="">
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
                            <label for="bookDate"
                                class="text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold">التاريخ
                                المناسب</label>
                            <div class="flex items-center justify-center w-2/3  rounded-3xl bg-[var(--bg-white)] p-4">
                                <input onchange="return checkAvailableAppointment();" type="date"
                                    class="bg-transparent border-none outline-none w-full" name="attendance_date"
                                    value="2024-07-28" id="bookDate" required="" min="2024-07-28">
                            </div>
                        </div>
                        <div class="flex items-center justify-between w-full fade-up">
                            <label for="bookTime1"
                                class="text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold">التوقيت</label>
                            <div class="flex items-center justify-center w-2/3  rounded-3xl bg-[var(--bg-white)] p-4">
                                <select class="w-full bg-transparent border-none outline-none" id="bookTime1"
                                    name="available_time" required="">
                                    <option>إختر التوقيت المناسب لك</option>
                                    <option value="صباحي">صباحي</option>
                                    <option value="مسائي">مسائي</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex items-center justify-center w-full mt-8 fade-up">
                            <button type="button"
                                class="text-white text-wrap rounded-3xl outline-none border-none focus:outline-none px-5 py-3 text-center font-bold bg-[var(--yello-primary)]">
                                إحصل على خدمة التقسيط<i class="fa-solid fa-calendar-days mr-3"></i></button>
                        </div>

                </form>
            </div>


            <div class="w-full md:w-[35%] rounded-3xl overflow-hidden min-h-[800px] fade-up ">
                <img class="h-[100%] min-h-[800px]" src="{{asset('assets/images/bookNow/book.webp')}}" alt="">
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