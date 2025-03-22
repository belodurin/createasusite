@extends('layout.app')

@section('title', 'Вакансии FreshPath')

@section('content')
<div class="vacancies-container">
    <h1 class="vacancies-title">Доступные вакансии</h1>
    <div class="vacancies-list">
        @foreach ($vacancies as $vacancy)
            <div class="vacancy-item">
                <h2 class="vacancy-title">{{ $vacancy->title }}</h2>
                <p class="vacancy-description">
                    {{ $vacancy->description }}
                </p>
                <ul class="vacancy-details">
                    <li><strong>Требования:</strong> {{ $vacancy->requirements }}</li>
                    <li><strong>Зарплата:</strong> {{ $vacancy->salary ? number_format($vacancy->salary, 0, ',', ' ') . ' руб.' : 'Не указана' }}</li>
                    <li><strong>Локация:</strong> {{ $vacancy->location }}</li>
                </ul>
                @auth

                    <a href="{{ route('vacancies.apply', $vacancy->id) }}" class="vacancy-button">Откликнуться</a>
                @else

                    <a href="{{ route('register') }}" class="vacancy-button">Откликнуться</a>
                @endauth
            </div>
        @endforeach
    </div>
</div>
@endsection
