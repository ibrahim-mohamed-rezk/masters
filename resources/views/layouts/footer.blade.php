<footer class="relative w-full flex items-center justify-center mt-20 flex-col bg-[var(--bg-white)] pt-24">
    <div class="w-full absolute top-0 translate-y-[-50%] left-0 right-0  z-0">
        <svg class="w-full" id="Group_1264" data-name="Group 1264" xmlns="http://www.w3.org/2000/svg" width="1920"
            height="213.996" viewBox="0 0 1920 213.996">
            <path id="Path_1784" data-name="Path 1784"
                d="M1920,114.944c-224.6-84.1-409.8-87.38-536-91.559C1039.5,12.039,875.3,119.223,494,123.9,282.5,126.488,110,76.23,0,51.25V0H1920Z"
                transform="translate(0 90)" fill="#fff" opacity="0.16" />
            <path id="Path_1785" data-name="Path 1785"
                d="M1920,206.9c-224.6-84.071-409.8-105.263-536-109.441C1039.5,86.116,875.3,193.27,494,197.946A2115.336,2115.336,0,0,1,0,145.215V0H1920Z"
                transform="translate(0 0)" fill="#fff" />
        </svg>
    </div>
    <div class="container">
        <div class=" flex flex-col items-center w-full">
            <div class="w-full">
                <a href="#" class="flex items-start space-x-3 w-28">
                    <img src="{{ asset('assets/images/logo/logo.avif') }}" class="" alt="Logo">
                </a>
            </div>

            <div class="flex mt-7 w-full">
                <div class="flex items-start justify-between gap-5 w-full">
                    <div class="flex flex-col items-start justify-start gap-2">
                        <h6 class="text-[15px] text-[var(--yello-primary)] font-bold">الوصول السريع:</h6>
                        <ul class="flex flex-col gap-1">
                            <li><a class="text-[var(--dark-primary)] font-semibold text-[13px]" href="#">الرئيسية</a>
                            </li>
                            <li><a class="text-[var(--dark-primary)] font-semibold text-[13px]" href="#">عن ماسترز</a>
                            </li>
                            <li><a class="text-[var(--dark-primary)] font-semibold text-[13px]" href="#">التقسيط بسعر
                                    الكاش</a></li>
                            <li><a class="text-[var(--dark-primary)] font-semibold text-[13px]" href="#">الأطباء</a>
                            </li>
                            <li><a class="text-[var(--dark-primary)] font-semibold text-[13px]" href="#">الأخبار
                                    والمقالات</a></li>
                            <li><a class="text-[var(--dark-primary)] font-semibold text-[13px]" href="#">سياسة
                                    الخصوصية</a></li>
                        </ul>
                    </div>
                    <div class="flex flex-col items-start justify-start gap-2">
                        <h6 class="text-[15px] text-[var(--yello-primary)] font-bold">الخدمات:</h6>
                        <ul class="flex flex-col gap-1">
                            <li>
                                <atext-[var(--dark-primary)] font-semibold text-[13px] href="#">
                                    خدمات الأسنان
                                    </a>
                            </li>
                            <li>
                                <a text-[var(--dark-primary)] font-semibold text-[13px] href="#">
                                    خدمات الجلدية و التجميل و الليزر
                                </a>
                            </li>
                            <li>
                                <a text-[var(--dark-primary)] font-semibold text-[13px] href="#">
                                    خدمات الطبي
                                </a>
                            </li>
                            <li><a class="text-[var(--dark-primary)] font-semibold text-[13px]" href="#"> العروض</a>
                            </li>
                            <li><a class="text-[var(--dark-primary)] font-semibold text-[13px]" href="#">الفروع</a></li>
                        </ul>
                    </div>
                    <div class="flex flex-col items-start justify-start gap-2">
                        <h6 class="text-[15px] text-[var(--yello-primary)] font-bold">الإتصال بنا:</h6>
                        <ul class="flex flex-col gap-1">
                            <li>
                                <a text-[var(--dark-primary)] font-semibold text-[13px] href="#">
                                     من نحن
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="w-full mt-10 ">

                <div class="flex flex-col ">
                    <h6 class="text-[var(--yello-primary)] font-bold text-[15px]">إشترك لتصلك أحدث عروض وخدمات ماسترز
                        الطبية:</h6>
                    <form class="flex items-center justify-start w-full rounded-3xl bg-white mt-3 p-3 ">
                        <div class="flex w-full gap-2">
                            <label for="subscribeForm" class="sr-only">أدخل رقم الجوال</label>
                            <span class="flex w-[15px]">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.008 24" id="iphone">
                                    <g fill="var(--yello-primary)">
                                        <path
                                            d="M10.776 1.078a2.155 2.155 0 012.155 2.155v17.534a2.155 2.155 0 01-2.155 2.155H3.233a2.155 2.155 0 01-2.155-2.155V3.233a2.155 2.155 0 012.155-2.155h7.543m0-1.078H3.233A3.233 3.233 0 000 3.233v17.534A3.233 3.233 0 003.233 24h7.543a3.233 3.233 0 003.233-3.233V3.233A3.233 3.233 0 0010.776 0z" />
                                        <path
                                            d="M4.663.199h4.685a.269.269 0 01.269.269v1.2a.269.269 0 01-.269.269H4.663a.269.269 0 01-.269-.264V.468a.269.269 0 01.269-.269z" />
                                    </g>
                                </svg>
                            </span>
                            <input type="tel" name="phone" class="w-full border-none outline-none" id="subscribeForm"
                                onchange="validateSubContact(this)" maxlength="10"
                                placeholder="أدخل رقم الجوال (05xxxxxxxx)." required="">
                            <button
                                class="px-5 py-1 bg-[var(--yello-primary)] text-white rounded-3xl font-bold">إشترك</button>
                        </div>
                    </form>
                </div>


                <div class="mt-10 flex items-start justify-start flex-col gap-2 w-full">
                    <h6 class="text-[var(--yello-primary)] font-bold text-[15px]">تابعنا على وسائل التواصل الإجتماعي
                    </h6>
                    <div class=" w-full mt-2">
                        <ul class="social-list flex items-center justify-start gap-3">
                            <li
                                class="text-[var(--yello-primary)] bg-white w-[35px] h-[35px] border rounded-full flex items-center justify-center cursor-pointer">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li
                                class="text-[var(--yello-primary)] bg-white w-[35px] h-[35px] border rounded-full flex items-center justify-center cursor-pointer">
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li
                                class="text-[var(--yello-primary)] bg-white w-[35px] h-[35px] border rounded-full flex items-center justify-center cursor-pointer">
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li
                                class="text-[var(--yello-primary)] bg-white w-[35px] h-[35px] border rounded-full flex items-center justify-center cursor-pointer">
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </li>
                            <li
                                class="text-[var(--yello-primary)] bg-white w-[35px] h-[35px] border rounded-full flex items-center justify-center cursor-pointer">
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                            <li
                                class="text-[var(--yello-primary)] bg-white w-[35px] h-[35px] border rounded-full flex items-center justify-center cursor-pointer">
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="w-full mt-16 flex items-center justify-center bg-[var(--yello-primary)] py-5">
        <small class="text-white font-bold">
            جميع الحقوق محفوظة لـ عيادات ماسترز 2021 
        </small>
    </div>
</footer>