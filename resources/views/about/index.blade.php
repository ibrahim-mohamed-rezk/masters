@extends('layouts.app')

@section('CssStyles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endsection

@section('heroContent')
<div class="mt-32 w-full flex flex-col justify-around items-start px-2 fade-up pr-10">
    <h3 class="font-bold text-[28px] text-[var(--dark-secondary)]">
        عن عيادات ماسترز
    </h3>
</div>
@endsection

@section('container')
{{-- about masters --}}
<section class="w-full mt-28 flex items-center justify-center">
    <div class="container">
        <div class="flex w-full items-center justify-between flex-col lg:flex-row px-2 gap-5">
            <div class="w-full lg:w-[49%] mt-4 lg:mt-0 fade-up">
                <div class="flex items-center justify-center gap-4">
                    <div class="rounded-2xl overflow-hidden">
                        <img src="{{asset('assets/images/about/about.webp')}}" alt="about-1">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center w-full lg:w-[49%]">
                <div class="about__text">
                    <p
                        class="text-[10px] md:text-[12px] text-[var(--yello-primary)] text-center lg:text-right font-bold fade-up">
                        عن عيادات ماسترز
                    </p>
                    <h2
                        class="text-[var(--dark-primary)] text-center lg:text-right text-[20px] lg:text-[33px] font-extrabold fade-up">
                        الجودة،، السلامة،، رضا العملاء،،
                        <span class="text-[var(--yello-primary)] ">
                            وأخيراً المصداقية
                        </span>
                    </h2>

                    <p
                        class="text-[14px] lg:text-[19px] text-[var(--text-gray)] mt-4 font-bold text-wrap text-center lg:text-right fade-up">
                        نحن في عيادات ماسترز نتخصص في الرعاية الطبية ونوفر خدمات ذات جودة عالية تحت سقف واحد بأحدث
                        التقنيات
                        المتقدمة في جميع التخصصات ( أسنان – جلدية – طبي ).
                    </p>
                    <p
                        class="text-[14px] lg:text-[19px] text-[var(--text-gray)] mt-4 font-bold text-wrap text-center lg:text-right fade-up">
                        في عيادات ماسترز ستعيش تجربة فريدة من نوعها أثناء فترة علاجك لأننا رائدون في الرعاية الطبية
                        بوجود
                        بيئة مريحة ورعاية متكاملة نوفرها لك، كما إننا نهدف الى بناء جسور الثقة مع جميع عملاؤنا عن طريق
                        التعليم والتثقيف الصحي بالإضافة الى المصداقية.
                    </p>
                    <p
                        class="text-[14px] lg:text-[19px] text-[var(--text-gray)] mt-4 font-bold text-wrap text-center lg:text-right fade-up">
                        أخيراً، نود أن نقول لكم عملاؤنا بأن تتأكدوا أن مهاراتنا وقدراتنا لن تتوقف عن النمو لأننا في
                        نهاية المطاف نحن نسعى لتحقيق أعلى درجات الثقة والخدمة لكم.
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>

{{-- statistics --}}
<section class="w-full flex items-center justify-center z-10 relative">
    <div class="statistics__container w-full flex flex-wrap items-center justify-center gap-4 mt-12 px-2">

        <div
            class="flex items-center justify-between w-full md:w-[45%] lg:w-[30%] min-w-[220px] bg-[var(--bg-white)] px-4 py-3 rounded-2xl min-h-[140px] fade-up">
            <div class="w-[40%] px-5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="country">
                    <defs>
                        <style>
                            .aga {
                                fill: var(--yello-secondary)
                            }
                        </style>
                    </defs>
                    <path class="aga"
                        d="M22.094 22.851zM13.308 40.162l-.012.055zM26.239 28.818l-.011.052v.008zM29.533 48.267v-.005zM49.684 31.158a5.053 5.053 0 10-5.053 5.053 5.052 5.052 0 005.053-5.053zm-7.579 0a2.526 2.526 0 112.526 2.526 2.529 2.529 0 01-2.526-2.526z" />
                    <path class="aga"
                        d="M32 0a31.821 31.821 0 00-13.489 2.995A11.011 11.011 0 0010.947 0 10.856 10.856 0 000 10.737c0 2.227 1.363 5.032 3.046 7.655A32 32 0 1032 0zM10.947 2.526a8.317 8.317 0 018.421 8.211c0 4.534-8.421 13.684-8.421 13.684s-8.421-9.15-8.421-13.684a8.318 8.318 0 018.421-8.211zM4.73 20.838a65.663 65.663 0 004.359 5.293l1.859 2.02 1.859-2.02c1.518-1.649 9.089-10.141 9.089-15.395a10.514 10.514 0 00-1.7-5.728 29.267 29.267 0 016.413-1.98l-.685 1.231a3.872 3.872 0 00-.457 1.878 4.016 4.016 0 00.691 2.314l1.921 2.7a2.652 2.652 0 01.338.767 3.741 3.741 0 01.147.98 1.846 1.846 0 01-.025.324l-.5 2.717a2.435 2.435 0 01-1.12 1.444l-3.378 1.559a2.953 2.953 0 00-1.443 3.914l1.426 3.1a3.342 3.342 0 01.216.74 5.366 5.366 0 01.088.952 3.24 3.24 0 01-.062.674l-.017.068-.388 1.686a2.987 2.987 0 01-1.226 1.6L19.634 33a1.644 1.644 0 01-.726.146 1.8 1.8 0 01-.9-.213l-2.041-1.315a4.047 4.047 0 00-2.173-.594 3.986 3.986 0 00-2.021.516l-2.045 1.21a2.73 2.73 0 00-.957.936 2.479 2.479 0 00-.356 1.276 2.632 2.632 0 00.761 1.825l1.144 1.194a1.909 1.909 0 01.359.63 2.587 2.587 0 01.159.846 1.305 1.305 0 01-.023.259l-.228 1.093a4.826 4.826 0 01-1.205 2.09l-1.035.928a26.614 26.614 0 00-2.214 2.3 29.415 29.415 0 01-1.4-25.284zm2.8 27.567c.115-.141.237-.295.368-.455a24.2 24.2 0 012.14-2.25l1.034-.928a7.251 7.251 0 001.992-3.453l.23-1.1a3.839 3.839 0 00.074-.765 5.053 5.053 0 00-.314-1.715 4.319 4.319 0 00-.906-1.509L11 35.033l-.045-.061.061-.05 2.045-1.21a1.527 1.527 0 01.73-.162 1.6 1.6 0 01.806.192l2.04 1.314a4.237 4.237 0 002.269.616 4.106 4.106 0 001.91-.44l2.5-1.324a5.444 5.444 0 002.5-3.264l.408-1.772a5.721 5.721 0 00.123-1.223 7.883 7.883 0 00-.131-1.412 5.719 5.719 0 00-.4-1.335l-1.427-3.107-.036-.168a.43.43 0 01.245-.391l3.379-1.559a4.905 4.905 0 002.544-3.283l.5-2.716a4.383 4.383 0 00.067-.775 6.185 6.185 0 00-.245-1.675 5.079 5.079 0 00-.709-1.537l-1.92-2.7a1.561 1.561 0 01-.221-.845 1.406 1.406 0 01.138-.649l1.594-2.865c.755-.061 1.512-.1 2.28-.1A29.517 29.517 0 0161.094 27.3l-1.128-.627a5.765 5.765 0 00-1.5-.548 7.357 7.357 0 00-1.6-.187 4.927 4.927 0 00-.861.07l-.233.041A12.628 12.628 0 0032 32c0 4.257 4.179 10.41 7.4 14.52l-1.928 2.168a2.208 2.208 0 01-.745.49 2.524 2.524 0 01-.931.221h-.08l-3.683-.284-.093-.02v-.013l.009-.082v-.009l.657-2.189a3.229 3.229 0 00.132-.925 3.7 3.7 0 00-.419-1.691 3.4 3.4 0 00-1.2-1.325l-1.477-.923a3.05 3.05 0 00-1.623-.459 3.117 3.117 0 00-2.5 1.228l-4.477 5.97a2.952 2.952 0 00.589 4.126l1.638 1.228a1.1 1.1 0 01.31.417 1.518 1.518 0 01.142.616.888.888 0 01-.029.234l-1.312 4.555A29.61 29.61 0 017.527 48.405zm27-16.4a10.105 10.105 0 0120.211 0c0 5.579-10.105 16.841-10.105 16.841S34.526 37.58 34.526 32zM32 61.474a29.419 29.419 0 01-7.2-.893L26.129 56a3.383 3.383 0 00.129-.936 4.022 4.022 0 00-.375-1.674 3.6 3.6 0 00-1.089-1.38l-1.637-1.228a.418.418 0 01-.166-.34.4.4 0 01.082-.248l4.478-5.971a.6.6 0 01.475-.216.537.537 0 01.284.075l1.476.923a.9.9 0 01.294.345 1.2 1.2 0 01.136.528.714.714 0 01-.026.2l-.654 2.183a2.773 2.773 0 00-.124.817 2.532 2.532 0 00.7 1.757 2.662 2.662 0 001.734.8l3.683.284c.092.007.183.01.274.01a4.979 4.979 0 001.927-.429 4.652 4.652 0 001.633-1.131l1.649-1.856a74.517 74.517 0 001.741 2.018l1.88 2.1 1.88-2.1c1.8-2 10.752-12.3 10.752-18.528a12.572 12.572 0 00-.513-3.535h.112a4.887 4.887 0 011.043.123 3.337 3.337 0 01.834.293l2.687 1.493c.03.541.048 1.083.048 1.629A29.507 29.507 0 0132 61.474z" />
                    <path class="aga"
                        d="M15.368 10.105a4.211 4.211 0 10-4.211 4.21 4.21 4.21 0 004.211-4.21zm-5.895 0a1.684 1.684 0 111.683 1.684 1.685 1.685 0 01-1.683-1.684z" />
                </svg>
            </div>
            <div class=" flex flex-col items-center justify-around gap-2">
                <span class="text-[var(--text-gray)]">أكثر من</span>
                <h2 class="text-2xl font-bold text-[var(--yello-secondary)]">30</h2>
                <span class="text-[var(--text-gray)]">فرع</span>
            </div>
        </div>

        <div
            class="flex items-center justify-between w-full md:w-[45%] lg:w-[30%] min-w-[220px] bg-[var(--bg-white)] px-4 py-3 rounded-2xl min-h-[140px] fade-up">
            <div class="w-[40%] px-5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55.612 64" id="doctor">
                    <defs>
                        <style>
                            .aqa {
                                fill: var(--yello-secondary)
                            }
                        </style>
                    </defs>
                    <path class="aqa"
                        d="M50.418 43.306c-.606-.4-1.211-.808-1.918-1.312l-2.221-1.312c-.606-.3-1.211-.606-1.918-1.009l-.707-.4c-.606-.3-1.312-.707-2.019-1.009a14.018 14.018 0 00-2.624-1.018l-1.11-.3-.5.808c-.5.707-5.148 5.148-9.59 9.186-4.442-4.139-9.085-8.48-9.59-9.186l-.5-.808-1.11.4a10.119 10.119 0 00-2.524 1.009c-.707.3-1.413.707-2.12 1.009l-.808.4-.606.3-2.322 1.312c-1.009.606-2.019 1.211-2.826 1.817C3.487 44.606 1.67 46.12.761 48.139a12.59 12.59 0 00-.716 5.766v6.158A3.942 3.942 0 003.982 64h47.647a3.942 3.942 0 003.937-3.937v-6.057a12.59 12.59 0 00-.707-5.754 13.131 13.131 0 00-4.441-4.946zm-6.864 6.864a2.647 2.647 0 011.312 1.615 2.354 2.354 0 01-.2 2.019 2.647 2.647 0 01-1.621 1.312 2.354 2.354 0 01-2.019-.2 2.647 2.647 0 01-1.312-1.615 2.354 2.354 0 01.2-2.019 2.647 2.647 0 011.615-1.312 2.223 2.223 0 01.808-.1 2.688 2.688 0 011.216.3zm9.491 3.634v6.158a1.38 1.38 0 01-1.413 1.413H3.982a1.38 1.38 0 01-1.413-1.413v-6.259a9.742 9.742 0 01.5-4.543 11.252 11.252 0 013.735-3.836 27.324 27.324 0 012.524-1.716l1.217-.706a28.911 28.911 0 00.707 2.826 4.216 4.216 0 00-1.514 1.11 5.992 5.992 0 00-1.312 1.817 6.819 6.819 0 00-.5 4.24l1.306 5.551 3.937-.909a1.249 1.249 0 00-.606-2.423l-1.514.3-.704-3.124a3.626 3.626 0 01.3-2.524 4.482 4.482 0 01.808-1.11 4.037 4.037 0 011.816-1.01 3.409 3.409 0 012.019.1 3.585 3.585 0 01.909.4c.1.1.2.1.3.2a3.79 3.79 0 011.413 2.12l.707 3.129-1.514.3a1.249 1.249 0 10.606 2.423l3.937-.909-1.312-5.552a5.958 5.958 0 00-2.221-3.533 2.112 2.112 0 00-.606-.4 5.276 5.276 0 00-1.514-.707 17.111 17.111 0 00-2.322-.1 17.844 17.844 0 01-.808-3.129c0-.1 0-.1-.1-.2l.2-.1c.606-.3 1.312-.707 2.019-1.009a12.315 12.315 0 011.716-.707c2.12 2.221 8.177 7.874 10.2 9.691l.808.808.808-.808c2.019-1.817 8.076-7.47 10.2-9.691.5.2 1.11.4 1.716.707s1.312.606 1.918.909l.707.4c.5.3 1.009.5 1.514.808a15.9 15.9 0 01-1.624 4.65 4.48 4.48 0 00-2.322.2 4.873 4.873 0 00-3.028 2.625 5.314 5.314 0 00-.3 3.937 4.873 4.873 0 002.625 3.028 4.8 4.8 0 002.425.61 8.834 8.834 0 001.615-.2 4.873 4.873 0 003.028-2.625 5.314 5.314 0 00.3-3.937 5.893 5.893 0 00-1.817-2.625 17.073 17.073 0 001.514-4.341l.2.1c.606.4 1.211.808 1.716 1.11a11.252 11.252 0 013.735 3.836 11.6 11.6 0 01.409 4.64z" />
                    <path class="aqa"
                        d="M13.067 20.391a5.908 5.908 0 00.2 1.309c0 .2.1.4.1.606a5.307 5.307 0 002.726 4.341.1.1 0 00.1.1 13.884 13.884 0 005.552 8.278 10.639 10.639 0 001.11.707c.5.3 1.211.5 1.817.808h.1a7.565 7.565 0 001.615.5 5.756 5.756 0 001.312.1h.3a5.333 5.333 0 001.312-.1 4.465 4.465 0 001.514-.5h.1a10.94 10.94 0 001.918-.808 6.789 6.789 0 001.11-.707 13.521 13.521 0 003.735-3.836 17.983 17.983 0 001.211-2.423c.1-.3.2-.707.3-1.009a4.694 4.694 0 01.3-.909 4.664 4.664 0 01.707-.707c.2-.1.3-.3.5-.4a5.134 5.134 0 001.615-3.533c0-.2.1-.4.1-.606.1-.4.1-.909.2-1.312v-1.11a2.939 2.939 0 00-1.918-3.028v-.606a4.338 4.338 0 01.2-1.211 15.014 15.014 0 00.5-3.634 9.188 9.188 0 00-5.552-8.984c-.4-.2-.808-.3-1.211-.5A19.254 19.254 0 0027.805 0h-1.514a14 14 0 00-5.047 1.009 2.206 2.206 0 00-.5.3 6.145 6.145 0 00-1.615 1.615c-.1.1-.2.2-.2.3a3.2 3.2 0 01-.5.606 6.79 6.79 0 01-1.11.707 3.564 3.564 0 00-1.716 1.514 10.688 10.688 0 00-.909 3.735 24.626 24.626 0 00.1 3.937 10.065 10.065 0 00.2 1.615c.1.3.1.606.2 1.009h-.1a2.882 2.882 0 00-2.027 3.136v.908zm2.625-1.716h1.009l.2-.1a1.611 1.611 0 00.808-1.413 8.6 8.6 0 00-.3-2.322 5.067 5.067 0 01-.2-1.211c-.1-1.009-.1-2.322-.1-3.634a5.406 5.406 0 01.5-2.423 1.008 1.008 0 01.5-.4 5.423 5.423 0 001.615-1.009 3.337 3.337 0 001.009-1.211l.2-.3a3.855 3.855 0 01.909-.909c.1-.1.2-.1.3-.2a12.051 12.051 0 014.139-.808h1.312a16.444 16.444 0 015.956 1.11c.3.1.707.3 1.009.4a6.652 6.652 0 014.049 6.655 17.736 17.736 0 01-.4 3.129 8.835 8.835 0 00-.2 1.615l-.1.606a2.922 2.922 0 000 1.615 1.7 1.7 0 001.716 1.009.771.771 0 01.2.5v1.11c0 .4-.1.707-.1 1.11 0 .2-.1.5-.1.707a2.619 2.619 0 01-.808 1.918c-.1.1-.3.2-.4.3-.3.3-.707.606-1.11 1.009a3.937 3.937 0 00-.808 1.918c-.1.2-.1.4-.2.606a9.42 9.42 0 01-1.009 2.019 12.406 12.406 0 01-2.927 3.129 4.091 4.091 0 01-.909.5 11.75 11.75 0 01-1.514.606.352.352 0 00-.2.1 3.846 3.846 0 01-1.009.3 3.434 3.434 0 01-1.009.1 3.434 3.434 0 01-1.009-.1c-.4-.1-.707-.2-1.11-.3l-.2-.1a11.75 11.75 0 01-1.514-.606 4.092 4.092 0 00-.909-.5 10.785 10.785 0 01-4.442-6.763 2.511 2.511 0 00-1.009-1.514l-.2-.1a3.284 3.284 0 01-1.514-2.524c0-.2-.1-.5-.1-.707a4.141 4.141 0 01-.1-1.11v-1.11a2.465 2.465 0 01.079-.697z" />
                </svg>
            </div>
            <div class=" flex flex-col items-center justify-around gap-2">
                <span class="text-[var(--text-gray)] ">أكثر من</span>
                <h2 class="text-2xl font-bold text-[var(--yello-secondary)]">500</h2>
                <span class="text-[var(--text-gray)]">طبيب</span>
            </div>
        </div>


        <div
            class="flex items-center justify-between w-full md:w-[45%] lg:w-[30%] min-w-[220px] bg-[var(--bg-white)] px-4 py-3 rounded-2xl min-h-[140px] fade-up">
            <div class=" w-[40%] px-5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="client">
                    <defs>
                        <style>
                            .aea {
                                fill: var(--yello-secondary)
                            }
                        </style>
                    </defs>
                    <path class="aea"
                        d="M40.178 34.3a13.439 13.439 0 019.386-3.754 12.906 12.906 0 0111.982 7.46 1.28 1.28 0 102.346-1.026 15.042 15.042 0 00-9.4-8.24 9.125 9.125 0 003.257-7.07c0-4.893-3.671-8.875-8.184-8.875a8.247 8.247 0 00-7.651 5.752 15.826 15.826 0 00-4.988-2.607 9.124 9.124 0 003.259-7.071C40.187 3.982 36.516 0 32 0s-8.184 3.981-8.184 8.875a9.125 9.125 0 003.258 7.07 15.87 15.87 0 00-4.993 2.609 8.247 8.247 0 00-7.648-5.754c-4.512 0-8.184 3.981-8.184 8.875a9.125 9.125 0 003.257 7.07 15.042 15.042 0 00-9.4 8.24 1.28 1.28 0 102.347 1.025 12.906 12.906 0 0111.982-7.46 13.425 13.425 0 019.393 3.76 9.107 9.107 0 003.247 6.859 15.866 15.866 0 00-4.991 2.609 8.247 8.247 0 00-7.651-5.753c-4.512 0-8.184 3.981-8.184 8.875a9.124 9.124 0 003.259 7.071 15.052 15.052 0 00-9.4 8.235 1.28 1.28 0 102.344 1.028 12.913 12.913 0 0111.983-7.458 12.912 12.912 0 0111.983 7.458 1.28 1.28 0 102.344-1.027 15.05 15.05 0 00-9.4-8.237 9.124 9.124 0 003.255-7.07c0-.057-.007-.112-.008-.168a13.613 13.613 0 0118.782 0c0 .057-.008.112-.008.17a9.124 9.124 0 003.257 7.069 15.05 15.05 0 00-9.4 8.237 1.28 1.28 0 002.344 1.027 12.912 12.912 0 0111.983-7.458 12.913 12.913 0 0111.983 7.458 1.28 1.28 0 002.344-1.028 15.052 15.052 0 00-9.4-8.235 9.124 9.124 0 003.257-7.072c0-4.893-3.671-8.875-8.184-8.875a8.247 8.247 0 00-7.65 5.751 15.826 15.826 0 00-4.986-2.607 9.107 9.107 0 003.247-6.869zM14.433 53.215c-3.1 0-5.624-2.833-5.624-6.315s2.523-6.315 5.624-6.315a5.922 5.922 0 015.593 5.655c.021.236.031.446.031.66 0 3.482-2.523 6.315-5.624 6.315zm35.134-12.63c3.1 0 5.624 2.833 5.624 6.315s-2.523 6.315-5.624 6.315-5.624-2.833-5.624-6.315c0-.213.01-.423.028-.63.297-3.202 2.693-5.685 5.596-5.685zm0-25.225c3.1 0 5.624 2.833 5.624 6.315s-2.523 6.315-5.624 6.315-5.624-2.833-5.624-6.315c0-.212.01-.421.028-.627.297-3.205 2.693-5.688 5.596-5.688zM32 2.56c3.1 0 5.625 2.833 5.625 6.315S35.1 15.19 32 15.19s-5.624-2.833-5.624-6.315S28.9 2.56 32 2.56zm0 15.19a13.442 13.442 0 019.391 3.758c0 .056-.008.111-.008.168a9.125 9.125 0 003.257 7.07 15.838 15.838 0 00-4.887 2.525A8.281 8.281 0 0032 25.226a8.281 8.281 0 00-7.751 6.047 15.819 15.819 0 00-4.892-2.529 9.125 9.125 0 003.257-7.069c0-.056-.007-.11-.008-.166A13.461 13.461 0 0132 17.75zm-17.567-2.39a5.922 5.922 0 015.593 5.656c.021.238.031.447.031.659 0 3.482-2.523 6.315-5.624 6.315s-5.624-2.833-5.624-6.315 2.523-6.315 5.624-6.315zm17.594 25.053c-3.14-.016-5.649-2.841-5.649-6.313S28.9 27.785 32 27.785s5.625 2.833 5.625 6.315-2.51 6.3-5.6 6.313z" />
                </svg>
            </div>
            <div class=" flex flex-col items-center justify-around gap-2">
                <span class="text-[var(--text-gray)]">أكثر من</span>
                <h2 class="text-2xl font-bold text-[var(--yello-secondary)]">150000</h2>
                <span class="text-[var(--text-gray)]">عميل</span>
            </div>
        </div>

    </div>
</section>

{{-- believes --}}
<section class="w-full flex items-center justify-center mt-20">
    <div class="flex items-center w-full justify-center px-2">
        <div class="container">
            <div class="flex items-center justify-center gap-5 flex-wrap">

                <div class="flex flex-col items-center justify-center w-full md:w-[48%] lg:w-[30%] gap-4 fade-up">
                    <div class="flex w-full items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[80px]" viewBox="0 0 48 48" id="vision">
                            <defs>
                                <style>
                                    .bha {
                                        fill: var(--yello-primary)
                                    }
                                </style>
                            </defs>
                            <path class="bha"
                                d="M47.2 18.982h-4.08a19.572 19.572 0 00-2.055-4.951l2.886-2.887a.8.8 0 000-1.131l-5.964-5.966a.8.8 0 00-1.131 0L33.97 6.934a19.582 19.582 0 00-4.952-2.054V.8a.8.8 0 00-.8-.8h-8.436a.8.8 0 00-.8.8v4.08a19.582 19.582 0 00-4.952 2.057l-2.886-2.89a.8.8 0 00-1.131 0l-5.966 5.965a.8.8 0 000 1.131l2.886 2.887a19.572 19.572 0 00-2.053 4.952H.8a.8.8 0 00-.8.8v8.437a.8.8 0 00.8.8h4.08a19.572 19.572 0 002.055 4.951l-2.888 2.887a.8.8 0 000 1.131l5.966 5.965a.8.8 0 001.131 0l2.886-2.886a19.582 19.582 0 004.952 2.057V47.2a.8.8 0 00.8.8h8.435a.8.8 0 00.8-.8v-4.08a19.582 19.582 0 004.952-2.057l2.886 2.886a.8.8 0 001.131 0l5.966-5.965a.8.8 0 000-1.131l-2.886-2.887a19.572 19.572 0 002.053-4.948H47.2a.8.8 0 00.8-.8v-8.436a.8.8 0 00-.8-.8zm-.8 8.437h-3.9a.8.8 0 00-.779.622 18.072 18.072 0 01-2.336 5.625.8.8 0 00.111.991l2.765 2.766-4.834 4.834-2.765-2.765a.8.8 0 00-.992-.111 18.009 18.009 0 01-5.624 2.335.8.8 0 00-.623.78v3.9h-6.841V42.5a.8.8 0 00-.623-.78 18.009 18.009 0 01-5.624-2.335.8.8 0 00-.992.111l-2.765 2.765-4.834-4.839 2.765-2.766a.8.8 0 00.111-.991 18.072 18.072 0 01-2.336-5.625.8.8 0 00-.779-.622H1.6v-6.836h3.9a.8.8 0 00.779-.622 18.072 18.072 0 012.336-5.625.8.8 0 00-.111-.991l-2.76-2.766 4.834-4.834 2.765 2.765a.8.8 0 00.992.111 18.009 18.009 0 015.624-2.335.8.8 0 00.623-.78V1.6h6.835v3.9a.8.8 0 00.623.78 18.009 18.009 0 015.624 2.335.8.8 0 00.992-.111l2.765-2.765 4.834 4.834-2.765 2.766a.8.8 0 00-.111.991 18.072 18.072 0 012.336 5.625.8.8 0 00.779.622h3.9z" />
                            <path class="bha"
                                d="M24 8a16 16 0 1016 16A16 16 0 0024 8zm0 30.4A14.4 14.4 0 1138.4 24 14.4 14.4 0 0124 38.4z" />
                            <path class="bha"
                                d="M11.4 23.469a.8.8 0 000 1.062 16.457 16.457 0 0025.2 0 .8.8 0 000-1.062 16.457 16.457 0 00-25.2 0zm13.234-4.236c2.789.272 4.965 2.3 4.965 4.767s-2.176 4.5-4.965 4.767c-.212.009-.422.033-.635.033s-.423-.024-.635-.033C20.576 28.5 18.4 26.462 18.4 24s2.176-4.5 4.965-4.767c.212-.009.422-.033.635-.033s.423.024.635.033zm-6.673 1.292a5.776 5.776 0 000 6.95A15.978 15.978 0 0113.089 24a15.978 15.978 0 014.874-3.475zm12.075 6.95a5.776 5.776 0 000-6.95A15.978 15.978 0 0134.911 24a15.977 15.977 0 01-4.874 3.475z" />
                            <path class="bha"
                                d="M20.8 24a3.2 3.2 0 103.2-3.2 3.2 3.2 0 00-3.2 3.2zm4.8 0a1.6 1.6 0 11-1.6-1.6 1.6 1.6 0 011.6 1.6z" />
                        </svg>
                    </div>
                    <div class="w-full flex-col items-center justify-center text-center">
                        <h2 class="text-[15px] md:text-[17px] font-bold text-[var(--dark-primary)]  ">الرؤية</h2>
                        <p class="text-[15px] md:text-[17px] font-semibold text-[var(--text-gray)] ">
                            الريادة فى تقديم خدمات الرعاية الطبية والتي تتوافق مع أعلى المعايير المحلية والدولية.
                        </p>
                    </div>
                </div>


                <div class="flex flex-col items-center justify-center w-full md:w-[48%] lg:w-[30%] gap-4 fade-up">
                    <div class="flex w-full items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[80px]" viewBox="0 0 41.552 47.999"
                            id="message">
                            <defs>
                                <style>
                                    .aza {
                                        fill: var(--yello-primary)
                                    }
                                </style>
                            </defs>
                            <path class="aza"
                                d="M36.183 9.363a1.547 1.547 0 001.631-.354L41.1 5.723a1.541 1.541 0 00-.548-2.532l-1.6-.6-.6-1.6A1.542 1.542 0 0035.82.444l-3.28 3.292a1.543 1.543 0 00-.353 1.63l.743 1.978-.8.8A19.19 19.19 0 108.183 38.043l-3.28 7.44a1.793 1.793 0 001.639 2.516h4.1a1.8 1.8 0 001.647-1.066l2.592-5.893a18.622 18.622 0 008.665 0l2.594 5.9a1.8 1.8 0 001.648 1.059h4.094a1.788 1.788 0 001.51-.824 1.767 1.767 0 00.127-1.692l-3.272-7.443a19.137 19.137 0 003.148-28.623l.8-.8zm.633-7.364l.6 1.607a.9.9 0 00.525.525l1.608.6-2.891 2.89-1.982-.743-.751-1.989zM10.645 46.204h-4.1l3.17-7.19a19.076 19.076 0 003.422 1.533zm21.237 0l-4.1.007-2.49-5.663a19.08 19.08 0 003.422-1.534zm4.75-23.868a17.487 17.487 0 11-5.775-12.918l-2.219 2.219a14.339 14.339 0 101.269 1.269l2.219-2.219a17.324 17.324 0 014.506 11.649zm-14.421 0a3 3 0 11-3-3 2.958 2.958 0 011.372.348l-2.66 2.66a.9.9 0 001.27 1.269l2.662-2.662a2.956 2.956 0 01.356 1.385zm-.309-3.964a4.8 4.8 0 101.27 1.268l2.249-2.249a7.971 7.971 0 11-1.27-1.268zm3.528-3.527a9.755 9.755 0 101.27 1.269l1.939-1.939a12.512 12.512 0 11-1.269-1.269z" />
                        </svg>
                    </div>
                    <div class="w-full flex-col items-center justify-center text-center">
                        <h2 class="text-[15px] md:text-[17px] font-bold text-[var(--dark-primary)]  ">الرسالة</h2>
                        <p class="text-[15px] md:text-[17px] font-semibold text-[var(--text-gray)] ">
                            تقديم الخدمات الطبية بجودة عالية من خلال الكوادر المؤهلة والتكنولوجيا المتقدمة وشبكة الفروع
                            الواسعة.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col items-center justify-center w-full md:w-[48%] lg:w-[30%] gap-4 fade-up">
                    <div class="flex w-full items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[80px]" viewBox="0 0 48 48" id="values">
                            <defs>
                                <style>
                                    .bga {
                                        fill: var(--yello-primary)
                                    }
                                </style>
                            </defs>
                            <path class="bga"
                                d="M46.673 21.63l-.139-.085a5.027 5.027 0 01-1.792-6.688l.078-.142a2.779 2.779 0 00-2.372-4.105h-.152a5.025 5.025 0 01-4.9-4.9v-.153a2.779 2.779 0 00-4.106-2.372l-.14.076a5.028 5.028 0 01-6.69-1.793l-.084-.138a2.779 2.779 0 00-4.739 0l-.085.14a5.027 5.027 0 01-6.689 1.791l-.141-.077a2.779 2.779 0 00-4.106 2.373v.15a5.025 5.025 0 01-4.9 4.9h-.15a2.779 2.779 0 00-2.372 4.106l.076.141a5.028 5.028 0 01-1.79 6.689l-.14.085a2.779 2.779 0 000 4.74l.139.085a5.027 5.027 0 011.792 6.688l-.078.142a2.779 2.779 0 002.372 4.105h.152a5.025 5.025 0 014.9 4.9v.153a2.779 2.779 0 004.106 2.372l.14-.076a5.028 5.028 0 016.69 1.793l.084.138a2.779 2.779 0 004.739 0l.085-.14a5.027 5.027 0 016.689-1.791l.141.077a2.779 2.779 0 004.106-2.373v-.15a5.025 5.025 0 014.9-4.9h.15a2.779 2.779 0 002.372-4.106l-.076-.141a5.028 5.028 0 011.79-6.689l.14-.086a2.779 2.779 0 000-4.74zm-1.114 2.92l-.14.086a7.159 7.159 0 00-2.551 9.526l.076.141a.645.645 0 01-.552.954h-.15a7.157 7.157 0 00-6.981 6.981v.15a.646.646 0 01-.953.552l-.141-.077a7.161 7.161 0 00-9.527 2.551l-.086.14a.645.645 0 01-1.1 0l-.085-.138a7.157 7.157 0 00-9.527-2.551l-.14.076a.646.646 0 01-.954-.551v-.152a7.157 7.157 0 00-6.98-6.981h-.152a.646.646 0 01-.553-.952l.078-.142a7.161 7.161 0 00-2.551-9.527l-.139-.085a.646.646 0 010-1.1l.14-.085a7.159 7.159 0 002.551-9.526l-.076-.141a.645.645 0 01.552-.954h.15a7.157 7.157 0 006.981-6.981v-.15a.646.646 0 01.953-.552l.141.077a7.16 7.16 0 009.527-2.551l.086-.14a.645.645 0 011.1 0l.085.138a7.16 7.16 0 009.527 2.55l.14-.076a.646.646 0 01.954.551v.152a7.157 7.157 0 006.98 6.981h.152a.646.646 0 01.553.952l-.078.142a7.161 7.161 0 002.551 9.527l.139.085a.647.647 0 010 1.1z" />
                            <path class="bga"
                                d="M29.905 15.982a1.066 1.066 0 00-1.5.133l-6.242 7.449-2.873-2.871a1.066 1.066 0 00-1.508 0l-2.9 2.9a1.066 1.066 0 000 1.508l6.866 6.853a1.067 1.067 0 00.754.313h.046a1.066 1.066 0 00.771-.38l9.862-11.77a1.066 1.066 0 00-.133-1.5zm-7.476 13.64l-5.281-5.28 1.387-1.387 2.94 2.94a1.067 1.067 0 001.572-.069l6.3-7.524 1.5 1.26z" />
                            <path class="bga"
                                d="M24 8a16 16 0 1016 16A16.018 16.018 0 0024 8zm0 29.867A13.867 13.867 0 1137.867 24 13.882 13.882 0 0124 37.867z" />
                        </svg>
                    </div>
                    <div class="w-full flex-col items-center justify-center text-center">
                        <h2 class="text-[15px] md:text-[17px] font-bold text-[var(--dark-primary)]  ">القيم</h2>
                        <p class="text-[15px] md:text-[17px] font-semibold text-[var(--text-gray)] ">
                            الجودة، السلامة، العمل الجماعي، رضا العملاء، رضا الموظفين، والمصداقية.
                        </p>
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
                فريقنا <span class="text-[var(--yello-primary)]">الرائع </span>
            </h2>
            <a href="#" class=" text-[12px] md:text-[15px] font-bold text-[var(--yello-primary)]">
                عرض جميع اﻷطباء
                <div class="inline-block mr-2 rounded-xl bg-[var(--bg-white)] px-3 py-1">
                    <i class="fa-solid fa-chevron-left text-[var(--yello-primary)]"></i>
                </div>
            </a>
        </div>
        <div class="flex items-center justify-between py-4 px-2 fade-up flex-col md:flex-row gap-8 fade-up">
            <p class="text-[13px] md:text-[15px] text-[var(--text-gray)] font-semibold">
                نخبة من الإستشاريين والإخصائيين في كافة التخصصات الطبية (أسنان – جلدية – طبية) سيقومون بخدمتكم. أغلب
                أعضاء فريقنا لديهم الماجستير أو الدكتوراه من أعلى الجامعات الرائدةوالخبرة المميزة في كافة التخصصات
                الطبية.
            </p>
            <p class=" text-[13px] md:text-[15px] font-semibold text-[var(--text-gray)]">
                تضم مجموعة عيادات ماسترز أكثر من 400 طبيب وطبيبة من خلال شبكة واسعة من الفروع التي تضم 20 فرع داخل المملكة
                العربية السعودية والبحرين والامارات ومصر. كل هذا الفريق يعمل من أجل أن يقدم لك أفضل علاج

            </p>
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
        <div class="flex items-center justify-start py-4 px-2 fade-up">
            <h2 class="text-[20px] md:text-[31px] text-[var(--dark-primary)] font-bold">
                أنت في <span class="text-[var(--yello-primary)]">أيد آمنة </span>
            </h2>
        </div>

        <div class="flex flex-wrap items-start justify-between w-full gap-5">
            @for ($i = 0; $i < 2; $i++) <div class="w-full lg:w-[48%] ">
                <div class="flex w-full items-center justify-start gap-4 p-4 fade-up">
                    <a href="#" class="">
                        <img class="rounded-3xl" src="{{asset('assets/images/home/articals-2.webp')}}" alt="artical">
                    </a>
                    <div class="flex flex-col items-start justify-start gap-2 pl-6">
                        <a href="#">
                            <p
                                class="line-clamp-5 mt-2 text-[12px] md:text-[15px] text-[var(--text-gray)] font-semibold">
                                منذ 2007 تتخصص مجموعة ماسترز في تقديم خدمات الرعاية الطبية بأحدث التقنيات العالمية في كافة
                                التخصصات، حيث نعمل على إرضاء كافة المرضى من خلال تقديم خدمات عالية الجودة على أيدي أمهر
                                الكوادر الطبية بتكلفة مناسبة.</p>
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
    })
</script>
@endsection