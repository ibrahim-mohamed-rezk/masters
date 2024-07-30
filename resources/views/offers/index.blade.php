@extends('layouts.app')

@section('CssStyles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
    .service-img::before {
        content: "";
        background: transparent linear-gradient(0deg,
                #f3f9eb 0,
                rgba(255, 255, 255, 0.84) 37%,
                rgba(255, 255, 255, 0) 100%);
        position: absolute;
        top: 50%;
        right: 0;
        left: 0;
        bottom: 0;
        transition: all 0.5s cubic-bezier(0, 0, 0.2, 1);
        z-index: 1;
    }
</style>
@endsection


@section('heroContent')
<div class="mt-32 w-full flex flex-col justify-around items-start px-2 fade-up pr-10">
    <h3 class="font-bold text-[28px] text-[var(--dark-secondary)]">
        العروض المتاحة
    </h3>
</div>
@endsection

@section('container')
{{-- offers --}}
<section class="w-full flex items-center justify-center mt-20 px-2">
    <div class="container">

        <div class="flex flex-col items-start gap-2 w-full px-2">
            <h2
                class="w-full text-[20px] md:text-[31px] font-bold text-[var(--dark-primary)] text-center md:text-right fade-up">
                <span class="text-[var(--yello-primary)]">العروض </span> المتاحة:
            </h2>
            <p class=" w-full text-[var(--text-gray)] text-[12px] md:text-[15px] font-bold text-center md:text-right fade-up">
                تمتع بأحدث وأقوى العروض من عيادات رام، بجودة وأسعار تنافسية!
            </p>
        </div>

        <div class="flex items-center justify-center flex-wrap gap-5 mt-5">
            @for ($i = 0; $i < 10; $i++) <a href="#" class="rounded-3xl overflow-hidden relative fade-up">
                <div class="service-img w-full">
                    <img src="{{asset('assets/images/offers/offers-1.jpg')}}" alt="offer">
                </div>
                <div class="absolute bottom-0 right-0 w-full bg-none z-10">
                    <h3 class="p-4 text-[14px] lg:text-[19px] font-bold text-[var(--dark-primary)]">
                        <span class="text-[var(--yello-primary)]">عروض إفتتاح - فرع المدينة المنورة</span>
                        عروض الصيف
                    </h3>
                </div>
                </a>
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