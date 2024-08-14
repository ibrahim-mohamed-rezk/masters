@extends('layouts.app')

@section('CssStyles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endsection


@section('heroContent')
<div class="mt-32 w-full flex flex-col justify-around items-start px-2 fade-up pr-10">
    <h3 class="font-bold text-[28px] text-[var(--dark-secondary)]">
        قيم مستوى الخدمات
    </h3>
</div>
@endsection

@section('container')


{{-- rate us --}}
<section class="w-full flex items-center justify-center mt-20 px-2">
    <div class="container">

        <div class="flex flex-col items-start gap-2 w-full">
            <h2 class="fade-up text-[20px] md:text-[31px] font-bold text-[var(--dark-primary)]">
                سعداء بتقديم خدماتنا إليكم
            </h2>
            <h2 class="fade-up text-[20px] md:text-[31px] font-bold text-[var(--yello-primary)]">
                قيم مستوى الخدمات الآن
            </h2>
            <p class="fade-up text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold">
                قيم مستوى الخدمة التي قدمت إليك لتساعدنا على تحسين تجربتك إلى الأفضل
            </p>
        </div>


        <div class="flex items-start justify-between flex-col lg:flex-row w-full mt-10 gap-5">
            <div class="flex items-start w-full lg:w-[58%] px-2">
                <div class="w-full flex flex-col items-center justify-center gap-5">
                    <h2
                        class="fade-up text-[15px] md:text-[20px] font-bold text-[var(--dark-primary)] w-full text-start">
                        إختر القسم
                    </h2>

                    {{-- form --}}
                    <div class="flex items-center justify-between w-full fade-up">
                        <label class="text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold"> القسم </label>
                        <div class="flex items-center justify-center w-2/3  rounded-3xl bg-[var(--bg-white)] p-4">
                            <select class="w-full bg-transparent border-none outline-none" required="">
                                <option value="">الاسنان</option>
                                <option value="MEDICAL_COMPLAINT">
                                    الجلدية و التجميل و الليزر</option>
                                <option value="NON_MEDICAL_COMPLAINT">
                                    الطبي</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex items-center justify-between w-full fade-up">
                        <label class="text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold"> الفرع </label>
                        <div class="flex items-center justify-center w-2/3  rounded-3xl bg-[var(--bg-white)] p-4">
                            <select class="w-full bg-transparent border-none outline-none" required="">
                                <option value="">إختر الفرع المناسب لك</option>
                                <option value="11">سكيكو الأحساء - طريق الأمير مقرن - الفاضلية - الهفوف - عيادات
                                    الشركة السعودية للكهرباء</option>
                                <option value="18">رام الفيصلية - شارع عمر بن الخطاب - حي الفيصلية</option>

                                <option value="50">رام المدينة - طريق الملك عبدالله الفرعي - سيد الشهداء</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex items-center justify-between w-full fade-up">
                        <label class="text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold"> الخدمة </label>
                        <div class="flex items-center justify-center w-2/3  rounded-3xl bg-[var(--bg-white)] p-4">
                            <select class="w-full bg-transparent border-none outline-none" required="">
                                <option value="">إختر الخدمة المناسبة لك</option>
                                <option value="11">النساء و التوليد و التجميل النسائي</option>
                                <option value="12">خدمات طب الأطفال</option>
                                <option value="13">خدمات قسم العيون</option>
                                <option value="14">أمراض القلب</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex items-center justify-between w-full fade-up">
                        <label class="text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold"> الطبيب </label>
                        <div class="flex items-center justify-center w-2/3  rounded-3xl bg-[var(--bg-white)] p-4">
                            <select class="w-full bg-transparent border-none outline-none" required="">
                                <option value="">إختر الطبيب المناسب لك</option>
                            </select>
                        </div>
                    </div>
                    <h3
                        class="fade-up text-[15px] md:text-[20px] font-bold text-[var(--dark-primary)] w-full text-start">
                        البيانات الشخصية:</h3>
                    <div class="flex items-center justify-between w-full fade-up">
                        <label for="bookName" class="text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold">
                            الاسم بالكامل</label>
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
                </div>
            </div>

            {{-- right side --}}
            <div class="flex flex-col items-center justify-center w-full lg:w-[38%]">
                <div class="flex flex-wrap w-full gap-5">
                    <div class="flex flex-col w-full ">
                        <h2
                            class="fade-up text-[15px] md:text-[20px] font-bold text-[var(--dark-primary)] w-full text-start">
                            التقييم
                        </h2>
                        <div
                            class=" mt-4 flex flex-col fade-up w-full items-start justify-center gap-3 bg-[var(--bg-white)] p-4 rounded-3xl">
                            <h4 class="text-[15px] text-[var(--dark-primary)] font-semibold">مدى سهولة حجز المواعيد ؟
                            </h4>
                            <div class="flex items-center justify-start gap-5">
                                <div class="flex items-center justify-center gap-1">
                                    <input type="radio" name="booking">
                                    <label class="text-[14px] text-[var(--text-gray)] font-semibold">راضي
                                        جداً</label>
                                </div>
                                <div class="flex items-center justify-center gap-1">
                                    <input type="radio" name="booking">
                                    <label class="text-[14px] text-[var(--text-gray)] font-semibold">راضي</label>
                                </div>
                                <div class="flex items-center justify-center gap-1">
                                    <input type="radio" name="booking">
                                    <label class="text-[14px] text-[var(--text-gray)] font-semibold">غير راضي</label>
                                </div>
                            </div>
                        </div>
                        <div
                            class=" mt-4 flex flex-col fade-up w-full items-start justify-center gap-3 bg-[var(--bg-white)] p-4 rounded-3xl">
                            <h4 class="text-[15px] text-[var(--dark-primary)] font-semibold"> مدى رضاكم عن الوقت
                                المستغرق خلال رحلتكم العلاجية داخل العيادات؟
                            </h4>
                            <div class="flex items-center justify-start gap-5">
                                <div class="flex items-center justify-center gap-1">
                                    <input type="radio" name="tiem">
                                    <label class="text-[14px] text-[var(--text-gray)] font-semibold">راضي
                                        جداً</label>
                                </div>
                                <div class="flex items-center justify-center gap-1">
                                    <input type="radio" name="tiem">
                                    <label class="text-[14px] text-[var(--text-gray)] font-semibold">راضي</label>
                                </div>
                                <div class="flex items-center justify-center gap-1">
                                    <input type="radio" name="tiem">
                                    <label class="text-[14px] text-[var(--text-gray)] font-semibold">غير راضي</label>
                                </div>
                            </div>
                        </div>
                        <div
                            class=" mt-4 flex flex-col fade-up w-full items-start justify-center gap-3 bg-[var(--bg-white)] p-4 rounded-3xl">
                            <h4 class="text-[15px] text-[var(--dark-primary)] font-semibold"> مدى رضاكم عن سعر الخدمة؟
                            </h4>
                            <div class="flex items-center justify-start gap-5">
                                <div class="flex items-center justify-center gap-1">
                                    <input type="radio" name="price">
                                    <label class="text-[14px] text-[var(--text-gray)] font-semibold">راضي
                                        جداً</label>
                                </div>
                                <div class="flex items-center justify-center gap-1">
                                    <input type="radio" name="price">
                                    <label class="text-[14px] text-[var(--text-gray)] font-semibold">راضي</label>
                                </div>
                                <div class="flex items-center justify-center gap-1">
                                    <input type="radio" name="price">
                                    <label class="text-[14px] text-[var(--text-gray)] font-semibold">غير راضي</label>
                                </div>
                            </div>
                        </div>
                        <div
                            class=" mt-4 flex flex-col fade-up w-full items-start justify-center gap-3 bg-[var(--bg-white)] p-4 rounded-3xl">
                            <h4 class="text-[15px] text-[var(--dark-primary)] font-semibold"> مدى رضاكم عن الخدمة الطبية
                                المقدمة؟
                            </h4>
                            <div class="flex items-center justify-start gap-5">
                                <div class="flex items-center justify-center gap-1">
                                    <input type="radio" name="service">
                                    <label class="text-[14px] text-[var(--text-gray)] font-semibold">راضي
                                        جداً</label>
                                </div>
                                <div class="flex items-center justify-center gap-1">
                                    <input type="radio" name="service">
                                    <label class="text-[14px] text-[var(--text-gray)] font-semibold">راضي</label>
                                </div>
                                <div class="flex items-center justify-center gap-1">
                                    <input type="radio" name="service">
                                    <label class="text-[14px] text-[var(--text-gray)] font-semibold">غير راضي</label>
                                </div>
                            </div>
                        </div>
                        <div
                            class=" mt-4 flex flex-col fade-up w-full items-start justify-center gap-3 bg-[var(--bg-white)] p-4 rounded-3xl">
                            <h4 class="text-[15px] text-[var(--dark-primary)] font-semibold"> مدى رضاكم عن جودة خدمة
                                الإستقبال؟
                            </h4>
                            <div class="flex items-center justify-start gap-5">
                                <div class="flex items-center justify-center gap-1">
                                    <input type="radio" name="quality">
                                    <label class="text-[14px] text-[var(--text-gray)] font-semibold">راضي
                                        جداً</label>
                                </div>
                                <div class="flex items-center justify-center gap-1">
                                    <input type="radio" name="quality">
                                    <label class="text-[14px] text-[var(--text-gray)] font-semibold">راضي</label>
                                </div>
                                <div class="flex items-center justify-center gap-1">
                                    <input type="radio" name="quality">
                                    <label class="text-[14px] text-[var(--text-gray)] font-semibold">غير راضي</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center w-full mt-8 fade-up">
            <button type="button"
                class="text-white text-wrap rounded-3xl outline-none border-none focus:outline-none px-5 py-3 text-center font-bold bg-[var(--yello-primary)]">
                قيم مستوى الخدمات</button>
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