@extends('layout.app')

@section('title', 'Вакансии FreshPath')

@section('content')
<div class="vacancies-container">
    <h1 class="vacancies-title">Доступные вакансии</h1>
    <div class="vacancies-grid">
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
                    <form action="{{ route('vacancies.apply', $vacancy->id) }}" method="POST" class="apply-form" style="display: inline;">
                        @csrf
                        <button type="submit" class="vacancy-button">Откликнуться</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="vacancy-button">Откликнуться</a>
                @endauth
            </div>
        @endforeach
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.apply-form').forEach(form => {
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                const button = this.querySelector('button');
                button.disabled = true;
                button.style.backgroundColor = '#808080';
                button.textContent = 'Отклик доставлен';

                fetch(this.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({}),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log('Отклик успешно отправлен');
                    } else {
                        console.error('Ошибка при отправке отклика');
                        button.disabled = false;
                        button.style.backgroundColor = '';
                        button.textContent = 'Откликнуться';
                    }
                })
                .catch(error => {
                    console.error('Ошибка:', error);
                    button.disabled = false;
                    button.style.backgroundColor = '';
                    button.textContent = 'Откликнуться';
                });
            });
        });
    });
</script>
@endsection
