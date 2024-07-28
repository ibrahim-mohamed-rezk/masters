<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="{{asset('css/styles-Ar/styles.css')}}">
        <link rel="stylesheet" href="{{asset('css/styles-Ar/header/index.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/app-DvWVwaW3.css')}}">
        
        @yield('CssStyles')

    </head>

    <body>
        @include('layouts.header')
        <main class="w-full flex flex-col items-center justify-center mb-20">
            @yield('container')
        </main>
        @include('layouts.footer')
        @yield('jsContainer')

       <script src="{{asset('build/assets/app-jtyrA5B8.js')}}"></script>
    </body>

</html>