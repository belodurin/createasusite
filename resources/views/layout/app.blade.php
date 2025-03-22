<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Автоматизация технологических процессов')</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanta/0.5.21/vanta.topology.min.js"></script>
</head>
<body>

    @include('pages.hed')


    <main id="vanta-container">
        @yield('content')
    </main>


    @include('pages.footer')

    <script>

        VANTA.TOPOLOGY({
            el: "#vanta-container",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0xff,
            backgroundColor: 0xfafafa
        });
    </script>
</body>
</html>
