@extends('layout.app')

@section('title', 'Новости в сфере автоматизации')

@section('content')
<div class="news-container">
    <h1 class="news-title">Новости в мире автоматизации</h1>
    <div class="news-grid">

        <div class="news-item">
            <h2 class="news-item-title">
                <a href="{{ route('news.ai-robots') }}" class="news-link">Новые роботы с ИИ</a>
            </h2>
            <p class="news-item-description">
                <small>Андроид-робот, разработанный компанией 1X. Может убирать, сортировать, перемещать и доставлять предметы.</small>
            </p>
        </div>

        <div class="news-item">
            <h2 class="news-item-title">
                <a href="{{ route('news.rosatom-network') }}" class="news-link">Пром сеть "Росатома"</a>
            </h2>
            <p class="news-item-description">
                <small>К 2030 году структуры «Росатома» разработают отечественную защищённую промышленную сеть.</small>
            </p>
        </div>


        <div class="news-item">
            <h2 class="news-item-title">
                <a href="{{ route('news.genesys-pc') }}" class="news-link">мини-ПК GENESYSM</a>
            </h2>
            <p class="news-item-description">
                <small>К 2030 году структуры «Росатома» разработают отечественную защищённую промышленную сеть.</small>
            </p>
        </div>

    </div>
</div>
@endsection
