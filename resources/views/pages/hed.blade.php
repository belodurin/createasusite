<header class="header">
    <div class="container">
        <div class="header-content">
            <img src="{{ asset('images/B1.png') }}" alt="Логотип" class="image-logo">

            <!-- Навигационное меню -->
            <nav class="nav-menu" id="navMenu">
                <div><a href="{{ url('/') }}">Главная</a></div>
                <div><a href="{{ url('/neft') }}">Нефтяная отрасль</a></div>
                <div><a href="{{ url('/food-industry') }}">Пищевая отрасль</a></div>
                <div><a href="{{ url('/shop') }}">Решения АСУ ТП</a></div>
                <div><a href="{{ url('/news') }}">Новости</a></div>
                <div><a href="{{ url('/career') }}">Вакансии</a></div>

                <div>
                    @auth
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="logout-button">Выход</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}">Авторизация</a>
                    @endauth
                </div>
            </nav>

            <!-- Бургер кнопка -->
            <button class="burger" id="burgerBtn">&#9776;</button>
        </div>
    </div>
</header>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const burger = document.getElementById('burgerBtn');
    const navMenu = document.getElementById('navMenu');

    if (burger && navMenu) {
        burger.addEventListener('click', function () {
            navMenu.classList.toggle('active');
        });

        // Закрытие меню при клике вне его
        document.addEventListener('click', function (event) {
            if (!navMenu.contains(event.target) && !burger.contains(event.target)) {
                navMenu.classList.remove('active');
            }
        });
    }
});
</script>
