@extends('layout.app')

@section('title', 'Новости в сфере автоматизации')

@section('content')
<div class="news-container">
    <h1 class="news-title">Новости в мире автоматизации</h1>
    <div class="news-grid">

        <div class="news-item">
            <h2 class="news-item-title">
                <a href="/shownews.php" class="news-link">Новые роботы с ИИ</a>
            </h2>
            <p class="news-item-description">
                <small>Андроид-робот, разработанный компанией 1X. Может убирать, сортировать, перемещать и доставлять предметы.</small>
            </p>
        </div>


        <div class="news-item">
            <h2 class="news-item-title">
                <a href="/shownews.php" class="news-link">Пром сеть "Росатома"</a>
            </h2>
            <p class="news-item-description">
                <small>К 2030 году структуры «Росатома» разработают отечественную защищённую промышленную сеть.</small>
            </p>
        </div>


         <div class="news-item">
            <h2 class="news-item-title">
                <a href="/shownews.php" class="news-link">мини-ПК GENESYSM</a>
            </h2>
            <p class="news-item-description">
                <small>Genesis Cube предназначен для выполнения сложных задач, оставаясь при этом компактным и универсальным.</small>
            </p>
        </div>


        <div class="news-item">
            <h2 class="news-item-title">
                <a href="/shownews.php" class="news-link">Автоматизация в сельском хозяйстве</a>
            </h2>
            <p class="news-item-description">
                <small>Новые технологии для автоматизации процессов в сельском хозяйстве.</small>
            </p>
        </div>


        <div class="news-item">
            <h2 class="news-item-title">
                <a href="/shownews.php" class="news-link">Роботы-курьеры</a>
            </h2>
            <p class="news-item-description">
                <small>Компания Amazon тестирует роботов-курьеров для доставки товаров.</small>
            </p>
        </div>


        <div class="news-item">
            <h2 class="news-item-title">
                <a href="/shownews.php" class="news-link">ИИ в медицине</a>
            </h2>
            <p class="news-item-description">
                <small>Искусственный интеллект помогает врачам ставить точные диагнозы.</small>
            </p>
        </div>


        <div class="news-item">
            <h2 class="news-item-title">
                <a href="/shownews.php" class="news-link">Автоматизация складов</a>
            </h2>
            <p class="news-item-description">
                <small>Новые системы управления складами на основе ИИ.</small>
            </p>
        </div>


        <div class="news-item">
            <h2 class="news-item-title">
                <a href="/shownews.php" class="news-link">Беспилотные автомобили</a>
            </h2>
            <p class="news-item-description">
                <small>Компания Tesla представила новую версию автономного автомобиля.</small>
            </p>
        </div>


</div>
@endsection
