@extends('layout.app')

@section('title', $title)
@endsection
@section('content')

<div class="news-container">
    <article class="news-article">
        <h1>{{ $title }}</h1>
        <div class="news-content">
            <p>{{ $content }}</p>
        </div>
        <a href="{{ route('news.index') }}" class="back-link">← Вернуться к списку новостей</a>
    </article>
</div>
@endsection
