@extends('layout.app')

@section('title', 'Главная страница - Автоматизация производственных процессов')

@section('content')
<div class="container" id="automation-container">
    <div class="hero-section text-center" id="automation-hero">
        <h1 id="automation-title">Автоматизация на современных производствах</h1>
        <p class="hero-subtitle" id="automation-subtitle">Инновационные решения для повышения эффективности современных производств</p>
        <div class="wave-divider"></div>
    </div>

    <div class="automation-card" id="intro-card">
        <p class="automation-text">Автоматизация на современных производствах — это процесс использования технологий и систем для выполнения задач, которые ранее выполнялись вручную. Основная цель автоматизации — повысить эффективность, снизить затраты и улучшить качество продукции.</p>

        <div class="automation-features">
            <ol class="feature-list">
                <li class="feature-item">
                    <span class="feature-icon">⚙️</span>
                    <div class="feature-content">
                        <h3>Промышленное оборудование с ЧПУ</h3>
                        <p>Станки, запрограммированные на выполнение определённых работ. Технологический процесс осуществляется под управлением электроники, вмешательство человека сведено к минимуму.</p>
                    </div>
                </li>
                <li class="feature-item">
                    <span class="feature-icon">🤖</span>
                    <div class="feature-content">
                        <h3>Роботы</h3>
                        <p>Они могут выполнять широкий спектр задач, от сборки и упаковки до сварки и окраски. Современные роботы оснащены сенсорами и системами искусственного интеллекта.</p>
                    </div>
                </li>
                <li class="feature-item">
                    <span class="feature-icon">🔄</span>
                    <div class="feature-content">
                        <h3>Гибкие производственные системы (FMS)</h3>
                        <p>Такие комплексы помогают совершать полные циклы изготовления продукции в условиях изменяющейся производственной среды.</p>
                    </div>
                </li>
                <li class="feature-item">
                    <span class="feature-icon">💻</span>
                    <div class="feature-content">
                        <h3>Системы автоматизированного проектирования</h3>
                        <p>Программное обеспечение помогает изготавливать сложные детали и сокращать цикл их производства.</p>
                    </div>
                </li>
            </ol>
        </div>
    </div>

    <div class="automation-card" id="management-card">
        <h2 class="section-title">Совершенствование систем управления на производстве</h2>
        <div class="process-steps">
            <div class="process-step">
                <div class="step-number">1</div>
                <div class="step-content">Осмыслить необходимость совершенствования и сформировать понимание улучшений</div>
            </div>
            <div class="process-step">
                <div class="step-number">2</div>
                <div class="step-content">Оценить текущее состояние компании по всем основным направлениям деятельности</div>
            </div>
            <div class="process-step">
                <div class="step-number">3</div>
                <div class="step-content">Параметрическая и структурная оптимизация производственных процессов</div>
            </div>
            <div class="process-step">
                <div class="step-number">4</div>
                <div class="step-content">Статистическое управление производственными процессами (SPC)</div>
            </div>
        </div>
    </div>

    <div class="automation-card" id="types-card">
        <h2 class="section-title">Типы автоматизированных производств</h2>
        <div class="production-grid">
            <div class="production-item">
                <img src="{{ asset('images/automation.jpg') }}" alt="Automation Image">
                <div class="production-overlay">
                    <h3>Автоматизированные системы энергетики</h3>
                    <button class="details-button">Подробнее</button>
                </div>
            </div>
            <div class="production-item">
                <img src="{{ asset('images/auto1.jpg') }}" alt="Auto1 Image">
                <div class="production-overlay">
                    <h3>Распределенная автоматизация</h3>
                    <button class="details-button">Подробнее</button>
                </div>
            </div>
            <div class="production-item">
                <img src="{{ asset('images/auto2.jpg') }}" alt="Auto2 Image">
                <div class="production-overlay">
                    <h3>Роботизированные линии</h3>
                    <button class="details-button">Подробнее</button>
                </div>
            </div>
            <div class="production-item">
                <img src="{{ asset('images/auto3.jpg') }}" alt="Auto3 Image">
                <div class="production-overlay">
                    <h3>Интеллектуальные системы</h3>
                    <button class="details-button">Подробнее</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {

    const colors = {
        primary: '#4a89dc',
        secondary: '#5d9cec',
        light: '#e6f2ff',
        accent: '#3bafda',
        dark: '#3a539b',
        text: '#434a54',
        white: '#ffffff'
    };


    const mainTitle = document.getElementById('automation-title');
    mainTitle.style.color = colors.dark;
    mainTitle.style.transition = 'all 0.5s ease';


    const waveDivider = document.querySelector('.wave-divider');
    waveDivider.style.height = '10px';
    waveDivider.style.background = `linear-gradient(90deg, ${colors.primary}, ${colors.accent}, ${colors.primary})`;
    waveDivider.style.margin = '30px auto';
    waveDivider.style.width = '200px';
    waveDivider.style.borderRadius = '10px';
    waveDivider.style.opacity = '0.7';


    const cards = document.querySelectorAll('.automation-card');
    cards.forEach(card => {
        card.style.background = colors.white;
        card.style.borderRadius = '12px';
        card.style.padding = '30px';
        card.style.marginBottom = '40px';
        card.style.boxShadow = `0 5px 25px rgba(74, 137, 220, 0.1)`;
        card.style.borderTop = `5px solid ${colors.primary}`;
        card.style.transition = 'all 0.4s ease';

        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translateY(-8px)';
            card.style.boxShadow = `0 15px 35px rgba(74, 137, 220, 0.15)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0)';
            card.style.boxShadow = `0 5px 25px rgba(74, 137, 220, 0.1)`;
        });
    });


    const featureItems = document.querySelectorAll('.feature-item');
    featureItems.forEach(item => {
        item.style.background = colors.light;
        item.style.borderRadius = '8px';
        item.style.padding = '20px';
        item.style.marginBottom = '15px';
        item.style.display = 'flex';
        item.style.alignItems = 'flex-start';
        item.style.transition = 'all 0.3s ease';

        const icon = item.querySelector('.feature-icon');
        icon.style.fontSize = '2rem';
        icon.style.marginRight = '20px';
        icon.style.color = colors.primary;

        item.addEventListener('mouseenter', () => {
            item.style.background = colors.white;
            item.style.boxShadow = `0 5px 15px rgba(74, 137, 220, 0.1)`;
            icon.style.transform = 'scale(1.1)';
        });

        item.addEventListener('mouseleave', () => {
            item.style.background = colors.light;
            item.style.boxShadow = 'none';
            icon.style.transform = 'scale(1)';
        });
    });


    const processSteps = document.querySelectorAll('.process-step');
    processSteps.forEach(step => {
        step.style.display = 'flex';
        step.style.alignItems = 'center';
        step.style.marginBottom = '15px';
        step.style.padding = '15px';
        step.style.background = colors.light;
        step.style.borderRadius = '8px';
        step.style.transition = 'all 0.3s ease';

        const number = step.querySelector('.step-number');
        number.style.background = colors.primary;
        number.style.color = colors.white;
        number.style.width = '30px';
        number.style.height = '30px';
        number.style.borderRadius = '50%';
        number.style.display = 'flex';
        number.style.justifyContent = 'center';
        number.style.alignItems = 'center';
        number.style.marginRight = '15px';
        number.style.fontWeight = 'bold';
        number.style.flexShrink = '0';

        step.addEventListener('mouseenter', () => {
            step.style.background = colors.white;
            step.style.transform = 'translateX(5px)';
            number.style.background = colors.accent;
        });

        step.addEventListener('mouseleave', () => {
            step.style.background = colors.light;
            step.style.transform = 'translateX(0)';
            number.style.background = colors.primary;
        });
    });


    const productionItems = document.querySelectorAll('.production-item');
    productionItems.forEach(item => {
        item.style.position = 'relative';
        item.style.borderRadius = '8px';
        item.style.overflow = 'hidden';
        item.style.boxShadow = `0 5px 15px rgba(58, 83, 155, 0.1)`;
        item.style.transition = 'all 0.4s ease';

        const img = item.querySelector('img');
        img.style.width = '100%';
        img.style.height = '250px';
        img.style.objectFit = 'cover';
        img.style.transition = 'transform 0.5s ease';

        const overlay = item.querySelector('.production-overlay');
        overlay.style.position = 'absolute';
        overlay.style.bottom = '0';
        overlay.style.left = '0';
        overlay.style.right = '0';
        overlay.style.background = `linear-gradient(transparent, ${colors.dark})`;
        overlay.style.padding = '25px';
        overlay.style.color = colors.white;
        overlay.style.transform = 'translateY(100%)';
        overlay.style.transition = 'all 0.4s ease';

        const btn = item.querySelector('.details-button');
        btn.style.background = colors.accent;
        btn.style.color = colors.white;
        btn.style.border = 'none';
        btn.style.padding = '10px 20px';
        btn.style.borderRadius = '20px';
        btn.style.cursor = 'pointer';
        btn.style.transition = 'all 0.3s ease';
        btn.style.marginTop = '15px';

        btn.addEventListener('mouseenter', () => {
            btn.style.background = colors.white;
            btn.style.color = colors.primary;
        });

        btn.addEventListener('mouseleave', () => {
            btn.style.background = colors.accent;
            btn.style.color = colors.white;
        });

        item.addEventListener('mouseenter', () => {
            item.style.transform = 'translateY(-10px)';
            img.style.transform = 'scale(1.05)';
            overlay.style.transform = 'translateY(0)';
        });

        item.addEventListener('mouseleave', () => {
            item.style.transform = 'translateY(0)';
            img.style.transform = 'scale(1)';
            overlay.style.transform = 'translateY(100%)';
        });
    });


    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.automation-card, .feature-item, .process-step, .production-item');
        const windowHeight = window.innerHeight;

        elements.forEach((el, index) => {
            const elementPosition = el.getBoundingClientRect().top;
            const elementVisible = 150;

            if (elementPosition < windowHeight - elementVisible) {
                setTimeout(() => {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }, index * 100);
            }
        });
    };


    window.addEventListener('load', () => {
        const elements = document.querySelectorAll('.automation-card, .feature-item, .process-step, .production-item');
        elements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        });

        animateOnScroll();
    });

    window.addEventListener('scroll', animateOnScroll);
});
</script>

<style>

#automation-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 30px 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #434a54;
}


#automation-hero {
    padding: 60px 20px;
    background: linear-gradient(135deg, #e6f2ff, #d4e6ff);
    border-radius: 12px;
    margin-bottom: 50px;
}

#automation-title {
    font-size: 2.5rem;
    margin-bottom: 15px;
    font-weight: 600;
}

.hero-subtitle {
    font-size: 1.2rem;
    color: #5d9cec;
    max-width: 800px;
    margin: 0 auto;
}


.section-title {
    color: #3a539b;
    text-align: center;
    margin-bottom: 30px;
    font-weight: 600;
    position: relative;
    padding-bottom: 15px;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background: #4a89dc;
}


.production-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 25px;
    margin-top: 30px;
}


@media (max-width: 768px) {
    #automation-title {
        font-size: 2rem;
    }

    .production-grid {
        grid-template-columns: 1fr;
    }

    .feature-item {
        flex-direction: column;
    }

    .feature-icon {
        margin-bottom: 15px;
        margin-right: 0 !important;
    }
}
</style>
@endsection
