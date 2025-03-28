@extends('layout.app')

@section('title', 'Автоматизация в пищевой промышленности')

@section('content')
<div class="container" id="food-automation-container">
    <div class="food-hero-section text-center" id="food-hero">
        <h1 id="food-main-title">Автоматизация на современных пищевых производствах</h1>
        <div class="food-wave-divider"></div>
    </div>

    <div class="food-content-section" id="food-intro-section">
        <p class="food-animated-text">
            Автоматизация в пищевой промышленности позволяет значительно повысить эффективность производства, снизить затраты и улучшить качество продукции.
        </p>
        <h2 class="food-section-subtitle">Основные направления автоматизации</h2>
        <div class="food-direction-cards">
            <div class="food-direction-card">
                <div class="food-card-icon">🌾</div>
                <h3>Сбор и обработка сырья</h3>
                <p>Автоматизированные системы сбора и первичной обработки</p>
            </div>
            <div class="food-direction-card">
                <div class="food-card-icon">🏭</div>
                <h3>Производственные линии</h3>
                <p>Полностью автоматизированные технологические линии</p>
            </div>
            <div class="food-direction-card">
                <div class="food-card-icon">📊</div>
                <h3>Управление производством</h3>
                <p>Интеллектуальные системы управления процессами</p>
            </div>
        </div>
    </div>

    <div class="food-gallery-section" id="food-gallery">
        <h2 class="food-section-title">Автоматизированные линии пищевых производств</h2>
        <div class="food-image-grid" id="food-image-grid">
            <div class="food-gallery-item">
                <img src="{{ asset('images/pish1.png') }}" alt="Автоматизация сбора сырья">
                <div class="food-gallery-overlay">
                    <h3>Автоматизация сбора сырья</h3>
                    <button class="food-gallery-btn">Подробнее</button>
                </div>
            </div>
            <div class="food-gallery-item">
                <img src="{{ asset('images/pish2.jpeg') }}" alt="Производственные линии">
                <div class="food-gallery-overlay">
                    <h3>Автоматическая линия производства печенья</h3>
                    <button class="food-gallery-btn">Подробнее</button>
                </div>
            </div>
            <div class="food-gallery-item">
                <img src="{{ asset('images/pish3.jpg') }}" alt="Управление производством">
                <div class="food-gallery-overlay">
                    <h3>Производство сладких десертов</h3>
                    <button class="food-gallery-btn">Подробнее</button>
                </div>
            </div>
            <div class="food-gallery-item">
                <img src="{{ asset('images/pish4.jpg') }}" alt="Инновационные технологии">
                <div class="food-gallery-overlay">
                    <h3>Линия производства мороженого</h3>
                    <button class="food-gallery-btn">Подробнее</button>
                </div>
            </div>
        </div>
    </div>

    <div class="food-benefits-section" id="food-benefits">
        <h2 class="food-section-title">Преимущества автоматизации</h2>
        <div class="food-benefits-list">
            <div class="food-benefit-item">
                <span class="food-benefit-check">✓</span>
                <span>Повышение производительности за счет оптимизации процессов</span>
            </div>
            <div class="food-benefit-item">
                <span class="food-benefit-check">✓</span>
                <span>Снижение человеческого фактора и ошибок</span>
            </div>
            <div class="food-benefit-item">
                <span class="food-benefit-check">✓</span>
                <span>Улучшение контроля качества продукции</span>
            </div>
            <div class="food-benefit-item">
                <span class="food-benefit-check">✓</span>
                <span>Сокращение времени на производство и доставку</span>
            </div>
            <div class="food-benefit-item">
                <span class="food-benefit-check">✓</span>
                <span>Экономия ресурсов и снижение затрат</span>
            </div>
        </div>
    </div>

    <div class="food-tech-section" id="food-tech">
        <h2 class="food-section-title">Технологии автоматизации</h2>
        <div class="food-tech-cards">
            <div class="food-tech-card">
                <div class="food-tech-icon">🤖</div>
                <h3>Роботизированные линии</h3>
                <p>Для упаковки и сортировки продукции</p>
            </div>
            <div class="food-tech-card">
                <div class="food-tech-icon">👁️</div>
                <h3>Мониторинг в реальном времени</h3>
                <p>Контроль всех параметров производства</p>
            </div>
            <div class="food-tech-card">
                <div class="food-tech-icon">💻</div>
                <h3>MES системы</h3>
                <p>Программное обеспечение для управления</p>
            </div>
        </div>
    </div>

    <div class="food-solutions-section" id="food-solutions">
        <h2 class="food-section-title">Наши решения</h2>
        <div class="food-solutions-list">
            <div class="food-solution-item">
                <div class="food-solution-number">1</div>
                <div class="food-solution-content">
                    <h3>Проектирование и внедрение</h3>
                    <p>Автоматизированных линий под ключ</p>
                </div>
            </div>
            <div class="food-solution-item">
                <div class="food-solution-number">2</div>
                <div class="food-solution-content">
                    <h3>Разработка ПО</h3>
                    <p>Индивидуальные решения для управления</p>
                </div>
            </div>
            <div class="food-solution-item">
                <div class="food-solution-number">3</div>
                <div class="food-solution-content">
                    <h3>Обучение персонала</h3>
                    <p>Полный цикл подготовки специалистов</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {

    const foodColors = {
        primary: '#4a6fa5',
        secondary: '#6b8cae',
        accent: '#ff7e5f',
        light: '#f8f4e9',
        dark: '#2c3e50',
        text: '#333333'
    };


    const mainTitle = document.getElementById('food-main-title');
    mainTitle.style.color = foodColors.dark;
    mainTitle.style.fontSize = '2.5rem';
    mainTitle.style.transition = 'all 0.5s ease';

    mainTitle.addEventListener('mouseover', () => {
        mainTitle.style.textShadow = `0 0 15px ${foodColors.accent}`;
        mainTitle.style.color = foodColors.primary;
    });

    mainTitle.addEventListener('mouseout', () => {
        mainTitle.style.textShadow = 'none';
        mainTitle.style.color = foodColors.dark;
    });

    const waveDivider = document.querySelector('.food-wave-divider');
    waveDivider.style.height = '20px';
    waveDivider.style.background = `linear-gradient(90deg, ${foodColors.primary}, ${foodColors.accent}, ${foodColors.primary})`;
    waveDivider.style.margin = '20px auto';
    waveDivider.style.width = '80%';
    waveDivider.style.borderRadius = '50%';
    waveDivider.style.opacity = '0.7';


    const animatedTexts = document.querySelectorAll('.food-animated-text');
    animatedTexts.forEach((text, index) => {
        text.style.opacity = '0';
        text.style.transform = 'translateY(20px)';
        text.style.transition = `all 0.5s ease ${index * 0.2}s`;

        setTimeout(() => {
            text.style.opacity = '1';
            text.style.transform = 'translateY(0)';
        }, 500 + index * 200);
    });


    const directionCards = document.querySelectorAll('.food-direction-card');
    directionCards.forEach(card => {
        card.style.background = 'white';
        card.style.borderRadius = '10px';
        card.style.padding = '25px';
        card.style.boxShadow = `0 5px 15px rgba(74, 111, 165, 0.1)`;
        card.style.transition = 'all 0.3s ease';
        card.style.margin = '15px';
        card.style.textAlign = 'center';

        const icon = card.querySelector('.food-card-icon');
        icon.style.fontSize = '3rem';
        icon.style.marginBottom = '15px';
        icon.style.color = foodColors.primary;

        card.querySelector('h3').style.color = foodColors.dark;
        card.querySelector('p').style.color = foodColors.text;

        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translateY(-10px)';
            card.style.boxShadow = `0 15px 30px rgba(74, 111, 165, 0.2)`;
            icon.style.transform = 'scale(1.1)';
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0)';
            card.style.boxShadow = `0 5px 15px rgba(74, 111, 165, 0.1)`;
            icon.style.transform = 'scale(1)';
        });
    });


    const galleryItems = document.querySelectorAll('.food-gallery-item');
    galleryItems.forEach(item => {
        item.style.position = 'relative';
        item.style.borderRadius = '8px';
        item.style.overflow = 'hidden';
        item.style.boxShadow = `0 5px 15px rgba(44, 62, 80, 0.2)`;
        item.style.transition = 'all 0.3s ease';

        const img = item.querySelector('img');
        img.style.width = '100%';
        img.style.height = '250px';
        img.style.objectFit = 'cover';
        img.style.transition = 'transform 0.5s ease';

        const overlay = item.querySelector('.food-gallery-overlay');
        overlay.style.position = 'absolute';
        overlay.style.bottom = '0';
        overlay.style.left = '0';
        overlay.style.right = '0';
        overlay.style.background = `linear-gradient(transparent, ${foodColors.primary})`;
        overlay.style.padding = '20px';
        overlay.style.color = 'white';
        overlay.style.opacity = '0';
        overlay.style.transition = 'all 0.3s ease';
        overlay.style.transform = 'translateY(20px)';

        const btn = item.querySelector('.food-gallery-btn');
        btn.style.background = foodColors.accent;
        btn.style.color = 'white';
        btn.style.border = 'none';
        btn.style.padding = '8px 15px';
        btn.style.borderRadius = '20px';
        btn.style.cursor = 'pointer';
        btn.style.transition = 'all 0.3s ease';
        btn.style.marginTop = '10px';

        btn.addEventListener('mouseenter', () => {
            btn.style.background = 'white';
            btn.style.color = foodColors.primary;
        });

        btn.addEventListener('mouseleave', () => {
            btn.style.background = foodColors.accent;
            btn.style.color = 'white';
        });

        item.addEventListener('mouseenter', () => {
            img.style.transform = 'scale(1.05)';
            overlay.style.opacity = '1';
            overlay.style.transform = 'translateY(0)';
        });

        item.addEventListener('mouseleave', () => {
            img.style.transform = 'scale(1)';
            overlay.style.opacity = '0';
            overlay.style.transform = 'translateY(20px)';
        });
    });


    const benefitItems = document.querySelectorAll('.food-benefit-item');
    benefitItems.forEach((item, index) => {
        item.style.background = 'white';
        item.style.padding = '15px';
        item.style.margin = '10px 0';
        item.style.borderRadius = '5px';
        item.style.display = 'flex';
        item.style.alignItems = 'center';
        item.style.transition = 'all 0.3s ease';
        item.style.opacity = '0';
        item.style.transform = 'translateX(-20px)';

        const check = item.querySelector('.food-benefit-check');
        check.style.color = foodColors.accent;
        check.style.fontSize = '1.5rem';
        check.style.marginRight = '15px';
        check.style.fontWeight = 'bold';

        setTimeout(() => {
            item.style.opacity = '1';
            item.style.transform = 'translateX(0)';
        }, 500 + index * 100);

        item.addEventListener('mouseenter', () => {
            item.style.background = foodColors.light;
            item.style.transform = 'translateX(5px)';
        });

        item.addEventListener('mouseleave', () => {
            item.style.background = 'white';
            item.style.transform = 'translateX(0)';
        });
    });


    const techCards = document.querySelectorAll('.food-tech-card');
    techCards.forEach(card => {
        card.style.background = 'white';
        card.style.borderRadius = '10px';
        card.style.padding = '25px';
        card.style.boxShadow = `0 5px 15px rgba(74, 111, 165, 0.1)`;
        card.style.transition = 'all 0.3s ease';
        card.style.margin = '15px';
        card.style.textAlign = 'center';

        const icon = card.querySelector('.food-tech-icon');
        icon.style.fontSize = '3rem';
        icon.style.marginBottom = '15px';
        icon.style.color = foodColors.primary;

        card.querySelector('h3').style.color = foodColors.dark;
        card.querySelector('p').style.color = foodColors.text;

        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translateY(-10px)';
            card.style.boxShadow = `0 15px 30px rgba(74, 111, 165, 0.2)`;
            icon.style.transform = 'scale(1.1)';
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0)';
            card.style.boxShadow = `0 5px 15px rgba(74, 111, 165, 0.1)`;
            icon.style.transform = 'scale(1)';
        });
    });


    const solutionItems = document.querySelectorAll('.food-solution-item');
    solutionItems.forEach((item, index) => {
        item.style.background = 'white';
        item.style.padding = '20px';
        item.style.margin = '15px 0';
        item.style.borderRadius = '8px';
        item.style.display = 'flex';
        item.style.alignItems = 'center';
        item.style.transition = 'all 0.3s ease';
        item.style.opacity = '0';

        const number = item.querySelector('.food-solution-number');
        number.style.background = foodColors.primary;
        number.style.color = 'white';
        number.style.width = '40px';
        number.style.height = '40px';
        number.style.borderRadius = '50%';
        number.style.display = 'flex';
        number.style.justifyContent = 'center';
        number.style.alignItems = 'center';
        number.style.fontWeight = 'bold';
        number.style.marginRight = '20px';
        number.style.flexShrink = '0';

        const content = item.querySelector('.food-solution-content h3');
        content.style.color = foodColors.dark;
        content.style.marginBottom = '5px';

        setTimeout(() => {
            item.style.opacity = '1';
        }, 500 + index * 150);

        item.addEventListener('mouseenter', () => {
            item.style.transform = 'translateX(5px)';
            number.style.background = foodColors.accent;
        });

        item.addEventListener('mouseleave', () => {
            item.style.transform = 'translateX(0)';
            number.style.background = foodColors.primary;
        });
    });

    const sections = document.querySelectorAll('.food-content-section, .food-gallery-section, .food-benefits-section, .food-tech-section, .food-solutions-section');
    sections.forEach(section => {
        section.style.margin = '40px 0';
        section.style.padding = '20px';
        section.style.borderRadius = '8px';
    });


    const sectionTitles = document.querySelectorAll('.food-section-title, .food-section-subtitle');
    sectionTitles.forEach(title => {
        title.style.color = foodColors.dark;
        title.style.textAlign = 'center';
        title.style.marginBottom = '30px';
        title.style.position = 'relative';
        title.style.paddingBottom = '15px';

        const underline = document.createElement('div');
        underline.style.position = 'absolute';
        underline.style.bottom = '0';
        underline.style.left = '50%';
        underline.style.transform = 'translateX(-50%)';
        underline.style.width = '80px';
        underline.style.height = '3px';
        underline.style.background = foodColors.accent;
        title.appendChild(underline);
    });


    const imageGrid = document.getElementById('food-image-grid');
    imageGrid.style.display = 'grid';
    imageGrid.style.gridTemplateColumns = 'repeat(auto-fit, minmax(250px, 1fr))';
    imageGrid.style.gap = '20px';
    imageGrid.style.margin = '30px 0';


    const directionCardsContainer = document.querySelector('.food-direction-cards');
    directionCardsContainer.style.display = 'grid';
    directionCardsContainer.style.gridTemplateColumns = 'repeat(auto-fit, minmax(300px, 1fr))';
    directionCardsContainer.style.gap = '20px';


    const techCardsContainer = document.querySelector('.food-tech-cards');
    techCardsContainer.style.display = 'grid';
    techCardsContainer.style.gridTemplateColumns = 'repeat(auto-fit, minmax(300px, 1fr))';
    techCardsContainer.style.gap = '20px';


    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.food-direction-card, .food-gallery-item, .food-benefit-item, .food-tech-card, .food-solution-item');
        const windowHeight = window.innerHeight;

        elements.forEach(el => {
            const elementPosition = el.getBoundingClientRect().top;
            const elementVisible = 150;

            if (elementPosition < windowHeight - elementVisible) {
                el.style.opacity = '1';
                if(el.style.transform.includes('translateX')) {
                    el.style.transform = 'translateX(0)';
                } else {
                    el.style.transform = 'translateY(0)';
                }
            }
        });
    };

    window.addEventListener('scroll', animateOnScroll);
    animateOnScroll();
});
</script>

<style>
#food-automation-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #333;
    background-color: #f8f4e9;
}

#food-hero {
    padding: 60px 20px;
    background: linear-gradient(135deg, #e6f2ff, #cce5ff);
    border-radius: 10px;
    margin-bottom: 40px;
}

@media (max-width: 768px) {
    #food-main-title {
        font-size: 2rem !important;
    }

    .food-direction-cards,
    .food-tech-cards {
        grid-template-columns: 1fr !important;
    }

    .food-image-grid {
        grid-template-columns: 1fr !important;
    }

    .food-solution-item {
        flex-direction: column;
        text-align: center;
    }

    .food-solution-number {
        margin-right: 0 !important;
        margin-bottom: 15px;
    }
}
</style>
@endsection
