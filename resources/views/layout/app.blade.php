<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Автоматизация технологических процессов')</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!-- Убрали подключение Vanta -->
</head>
<body>

@include('pages.hed')

<main>
    @yield('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @stack('styles')
</main>

@include('pages.footer')

<!-- Убрали скрипт VANTA -->
</body>
</html>
