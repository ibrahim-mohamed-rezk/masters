<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="{{asset('css/styles-Ar/styles.css')}}">
        <link rel="stylesheet" href="{{asset('css/styles-Ar/header/index.css')}}">

        @yield('CssStyles')

    </head>

    <body>
        @include('layouts.header')
        <main class="w-full mx-auto flex flex-col items-center justify-center mb-20">
            @yield('container')
        </main>
        @include('layouts.footer')

        {{-- flowbit js --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

        {{-- Animate.css --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>
        <script>
            gsap.registerPlugin(ScrollTrigger);
    
            gsap.utils.toArray('.fade-up').forEach((fadeUpElement) => {
                gsap.to(fadeUpElement, {
                    scrollTrigger: {
                        trigger: fadeUpElement,
                        start: 'top 85%', 
                        toggleActions: 'play none none none' 
                    },
                    opacity: 1,
                    y: 0,
                    duration: .8,
                    ease: 'power2.out',
                    stagger: 0.3 
                });
            });
        </script>
        @yield('jsContainer')

    </body>

</html>