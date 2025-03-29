@extends('layout.app')

@section('title', 'Промышленная сеть "Росатома" - будущее цифровизации производства')

@section('content')
<div class="news-container">
    <article class="news-article">
        <h1>Промышленная сеть "Росатома" - будущее цифровизации производства</h1>

        <div class="news-meta">
            <span class="news-date">30 марта 2025</span>
            <span class="news-author">Автор: Антон Белодурин</span>
            <span class="news-category">Категория: Технологии</span>
        </div>

        <div class="news-content">
            <img src="{{ asset('images/rosatom-network.jpg') }}" alt="Промышленная сеть Росатома" class="news-image">

            <p class="news-lead"><strong>К 2030 году структуры «Росатома» разработают отечественную защищённую промышленную сеть нового поколения.</strong></p>

            <h2>О проекте</h2>
            <p>Госкорпорация "Росатом" приступила к созданию национальной промышленной сети, которая станет основой для цифровой трансформации российских предприятий. Проект получил кодовое название "ПромСеть-2030".</p>

            <h2>Технические особенности</h2>
            <ul class="news-features">
                <li>Скорость передачи данных до 100 Гбит/с</li>
                <li>Задержка менее 1 мс</li>
                <li>Встроенные механизмы кибербезопасности</li>
                <li>Поддержка IIoT (Industrial Internet of Things)</li>
                <li>Интеграция с системами AI/ML</li>
            </ul>

            <blockquote class="news-quote">
                "Это будет полностью отечественная разработка, не имеющая аналогов в мире по уровню защищённости и адаптивности к промышленным процессам"
                <footer>- Алексей Лихачёв, генеральный директор Росатома</footer>
            </blockquote>

            <h2>Области применения</h2>
            <div class="news-applications">
                <div class="application-item">
                    <h3>Атомная энергетика</h3>
                    <p>Управление атомными станциями в реальном времени</p>
                </div>
                <div class="application-item">
                    <h3>Машиностроение</h3>
                    <p>Цифровые двойники производственных линий</p>
                </div>
                <div class="application-item">
                    <h3>Логистика</h3>
                    <p>Умные системы управления цепями поставок</p>
                </div>
            </div>

            <h2>Этапы реализации</h2>
            <ol class="news-timeline">
                <li><strong>2024:</strong> Разработка прототипа</li>
                <li><strong>2026:</strong> Пилотные проекты на предприятиях</li>
                <li><strong>2028:</strong> Серийное внедрение</li>
                <li><strong>2030:</strong> Полномасштабное развертывание</li>
            </ol>
        </div>

        <div class="news-footer">
            <a href="{{ route('news.index') }}"
               class="back-link"
               id="news-back-button">
               ← Вернуться к списку новостей
            </a>
            <div class="news-tags">
                <span class="tag">#Росатом</span>
                <span class="tag">#Цифровизация</span>
                <span class="tag">#Промышленность</span>
                <span class="tag">#Автоматизация</span>
            </div>
        </div>
    </article>
</div>

<style>
    .news-article {
        max-width: 800px;
        margin: 0 auto;
        padding: 2rem;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .news-meta {
        color: #666;
        margin-bottom: 1.5rem;
        font-size: 0.9rem;
    }

    .news-image {
        width: 100%;
        border-radius: 6px;
        margin: 1rem 0;
    }

    .news-lead {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #333;
    }

    .news-features {
        background: #f5f9ff;
        padding: 1rem 1.5rem;
        border-radius: 6px;
    }

    .news-quote {
        border-left: 4px solid #4a89dc;
        padding-left: 1rem;
        font-style: italic;
        color: #555;
    }

    .news-applications {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1rem;
        margin: 1.5rem 0;
    }

    .application-item {
        background: #f8fafc;
        padding: 1rem;
        border-radius: 6px;
    }

    .news-tags {
        margin-top: 1rem;
    }

    .tag {
        display: inline-block;
        background: #e0edff;
        color: #2c5282;
        padding: 0.3rem 0.6rem;
        border-radius: 20px;
        font-size: 0.8rem;
        margin-right: 0.5rem;
    }
</style>

<style>
    .back-link {
        display: inline-block;
        margin-top: 30px;
        padding: 12px 24px;
        background-color: #0f44b4;
        color: white;
        text-decoration: none;
        border-radius: 25px;
        font-weight: 500;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(74, 137, 220, 0.2);
        border: 2px solid transparent;
    }

    .back-link:hover {
        background-color: #3b70c2;
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(74, 137, 220, 0.3);
    }

    .back-link:active {
        transform: translateY(0);
        box-shadow: 0 2px 4px rgba(74, 137, 220, 0.2);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const backButton = document.getElementById('news-back-button');


        backButton.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px)';
            this.style.boxShadow = '0 8px 15px rgba(74, 137, 220, 0.4)';
        });

        backButton.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '0 4px 6px rgba(74, 137, 220, 0.2)';
        });


        backButton.addEventListener('mousedown', function() {
            this.style.transform = 'translateY(1px)';
        });

        backButton.addEventListener('mouseup', function() {
            this.style.transform = 'translateY(-3px)';
        });
    });
</script>
@endsection
