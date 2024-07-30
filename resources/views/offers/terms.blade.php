@extends('layouts.app')

@section('CssStyles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endsection


@section('heroContent')
<div class="mt-32 w-full flex flex-col justify-around items-start px-2 fade-up pr-10">
    <h3 class="font-bold text-[28px] text-[var(--dark-secondary)]">
        الشروط والأحكام العامة للعروض
        لمجموعة عيادات ماسترز
    </h3>
</div>
@endsection

@section('container')
{{-- terms --}}
<section class="w-full flex items-center justify-center mt-20 px-2">
    <div class="container">
        <li style=" margin-bottom: 10px; font-size: 6pt;">
            في حال وجود عروض على بكجات جلسات الاكزليس لعدد خمس جلسات تكون لمنطقه واحده بالجسم, وليس لاكثر من منطقة .
        </li>
        <li style=" margin-bottom: 10px; font-size: 6pt;">
            المبلغ المدفوع غير مسترد و يمكن استبدال الخدمة المدفوعة بخدمات اخرى
        </li>
        <li style=" margin-bottom: 10px; font-size: 6pt;">
            يمكن لنفس العميل الدفع لعرض و شراء عدة جلسات ولكن يجب استخدامها جميعا خلال ستة أشهر من تاريخ الفوترة.
        </li>
        <li style=" margin-bottom: 10px; font-size: 6pt;">
            عند تزويد عيادات ماسترز ببيانات العميل الاسم والرقم و البريد الإلكتروني عبر ارسال طلب الحجز في الموقع
            الإلكتروني يحق لعيادات ماسترز لاستخدام هذه المعلومات مستقبلاً لارسال العروض والحملات الخاصة بها.
        </li>
        <li style=" margin-bottom: 10px; font-size: 6pt;">
            يحق للعميل اللذي تمت الفوتره باسمه ورقم ملفه الاستفادة من الخدمة أويمكنه
            تحويلها لشخص آخر ولكن يشترط وجودهما معا وقت التحويل .
        </li>
        <li style=" margin-bottom: 10px; font-size: 6pt;">
            يمكن استخدام فاتورة العروض الخاصه بالباقات لشخصين بحد اقصى اي توزيع عدد الجلسات الخاصة برقم الفاتورة على
            ملفين .
        </li>
        <li style=" margin-bottom: 10px; font-size: 6pt;">
            يمكن تقسيط جميع العروض من خلال شركة تسهيل للتمويل.
        </li>
        <li style=" margin-bottom: 10px; font-size: 6pt;">
            اسعار العروض غير شاملة قيمة الضريبة المضافة لغير السعوديين .
        </li>
        <li style=" margin-bottom: 10px; font-size: 6pt;">
            مدة الاستفادة من الخدمة 6 اشهر من تاريخ شراء العرض.
            لايمكن عمل اي خصم اضافي على العروض.
        </li>
        <li style=" margin-bottom: 10px; font-size: 6pt;">
            التأمين والخصومات غير مشمولة على العروض.
        </li>
        <li style=" margin-bottom: 10px; font-size: 6pt;">
            في حال دفع العميل كامل القيمة لباقة مثل الليزر و غيرها واستخدم جزء من هذه
            الجلسات في فرع , يحق للعميل التحويل لفرع اخر لاكمال الجلسات الأخرى , مع دفع قيمة الكشفية للعرض .
        </li>
        <li style=" margin-bottom: 10px; font-size: 6pt;">
            تتوفر لدينا الخدمة الذاتية لليزر شرط توقيع العميله على الاقرار الخاص بالخدمة.
        </li>
        <li style=" margin-bottom: 10px; font-size: 6pt;">
            فيما يخص عروض الليزر لكامل الجسم فهي تشمل الوجه , بشرط استخدام نفس الجهاز المستخدم للجسم .
        </li>
        <li style=" margin-bottom: 10px; font-size: 6pt;">
            فيما يخص عروض الليزر للمناطق فان المناطق هي بكيني - اندر ارم - وجه او سيتم تفصيله بالعرض نفسه ,كما يكون
            الثلاث مناطق خلال جلسه واحدة.
        </li>
        <li style=" margin-bottom: 10px; font-size: 6pt;">
            فيما يخص عروض الليزر لكامل الجسم لاتشمل الرجال . يتم توضيح عروض الليزر في حال كانت خاصة بالرجال .
        </li>
        <li style=" margin-bottom: 10px; font-size: 6pt;">
            في حال وجود اي نقطه خلاف ما ذكر اعلاه للشروط والاحكام الخاصة بالعروض فسيتم الاخذ بالشروط والاحكام العامة
            للخدمات المقدمة في مجموعة عيادات ماسترز .
            يسري العرض لدى اطباء الاسنان العامين المرخصين و لا يسري لدى الاخصائيين
        </li>
        <li style=" margin-bottom: 10px; font-size: 6pt;">
            من حق اي طبيب اخصائي العمل بالعرض او عدم الالتزام به بحسب تشخيص الحالة
        </li>
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