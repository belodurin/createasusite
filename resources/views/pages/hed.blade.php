<header>
    <div class="header">
        <img class="image-logo" src="{{ asset('images/B1.png') }}" alt="automation">
        <nav class="nav-menu">
            <div><a href="{{ url('/') }}">Главная страница</a></div>
            <div><a href="{{ url('/neft') }}">Автоматизация в нефтяной отрасли</a></div>
            <div><a href="{{ url('/food-industry') }}">Автоматизация в пищевой отрасли</a></div>
            <div><a href="{{ url('/shop') }}">Решения для АСУ ТП</a></div>
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
    </div>
</header>
