@extends('layout.app')

@section('title', 'ИИ в робототехнике - революция в автоматизации производства')

@section('content')
<div class="news-container">
    <article class="news-article">
        <h1>ИИ в робототехнике - революция в автоматизации производства</h1>

        <div class="news-meta">
            <span class="news-date">29 марта 2025</span>
            <span class="news-author">Автор: Антон Б.</span>
            <span class="news-category">Категория: Робототехника</span>
        </div>

        <div class="news-content">
            <img src="{{ asset('images/ai-robotics.jpg') }}" alt="ИИ в робототехнике" class="news-image">

            <p class="news-lead"><strong>Современные роботы с искусственным интеллектом кардинально меняют подходы к автоматизации промышленных процессов.</strong></p>

            <h2>О технологии</h2>
            <p>Компания 1X Technologies представила новое поколение андроид-роботов, способных обучаться в процессе работы и адаптироваться к изменяющимся условиям производства. Система на основе нейросетей позволяет роботам самостоятельно принимать решения в нестандартных ситуациях.</p>

            <h2>Ключевые возможности</h2>
            <ul class="news-features">
                <li>Самообучение в реальном времени</li>
                <li>Распознавание сложных объектов и жестов</li>
                <li>Координация действий между роботами</li>
                <li>Прогнозирование неисправностей оборудования</li>
                <li>Адаптация к изменениям в производственном процессе</li>
            </ul>

            <blockquote class="news-quote">
                "Эти роботы не просто выполняют запрограммированные действия - они понимают контекст задачи и могут находить оптимальные решения"
                <footer>- Бернт Борник, CEO 1X Technologies</footer>
            </blockquote>

            <h2>Применение в промышленности</h2>
            <div class="news-applications">
                <div class="application-item">
                    <h3>Автомобилестроение</h3>
                    <p>Автоматическая сборка сложных узлов с контролем качества</p>
                </div>
                <div class="application-item">
                    <h3>Электроника</h3>
                    <p>Точный монтаж микросхем с адаптацией к дефектам компонентов</p>
                </div>
                <div class="application-item">
                    <h3>Фармацевтика</h3>
                    <p>Автоматизация лабораторных исследований и упаковки</p>
                </div>
            </div>

            <h2>Перспективы развития</h2>
            <ol class="news-timeline">
                <li><strong>2024:</strong> Пилотные проекты на 10 предприятиях</li>
                <li><strong>2025:</strong> Массовое внедрение в автомобильной промышленности</li>
                <li><strong>2026:</strong> Интеграция с системами цифровых двойников</li>
                <li><strong>2027:</strong> Полная автономность в 80% производственных операций</li>
            </ol>

            <h2>Экономический эффект</h2>
            <p>По оценкам экспертов, внедрение ИИ-роботов позволит сократить:</p>
            <ul>
                <li>Время перенастройки производственных линий на 70%</li>
                <li>Количество брака на 45%</li>
                <li>Энергопотребление на 30%</li>
            </ul>
        </div>

        <div class="news-footer">
            <a href="{{ route('news.index') }}"
               class="back-link"
               id="news-back-button">
               ← Вернуться к списку новостей
            </a>
            <div class="news-tags">
                <span class="tag">#ИИ</span>
                <span class="tag">#Робототехника</span>
                <span class="tag">#Автоматизация</span>
                <span class="tag">#Инновации</span>
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
