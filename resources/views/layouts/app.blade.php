<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="{{asset('css/styles-Ar/styles.css')}}">
        <link rel="stylesheet" href="{{asset('css/styles-Ar/header/index.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        @yield('CssStyles')

    </head>

    <body>
        @include('layouts.header')
        <main class="w-full flex flex-col items-center justify-center mb-20">

            @yield('container')
        </main>
        @yield('jsContainer')

        {{-- swiper --}}
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const swiper = new Swiper('.swiper', {
                    pagination: {
                        el: '.swiper-pagination',
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });
            });
        </script>
    </body>

</html>