@extends('layout.app')

@section('title', 'Автоматизация нефтяной промышленности')

@section('content')
<div class="container" id="oil-automation-container">
    <div class="hero-section text-center" id="oil-hero">
        <h1 id="oil-main-title">Автоматизация в нефтегазовом производстве</h1>
        <div class="oil-wave-divider"></div>
    </div>

    <div class="oil-content-section" id="oil-intro-section">
        <p class="oil-animated-text">
            Автоматизация производства включает создание систем мониторинга и удалённого контроля работы оборудования, а также программное обеспечение для планирования и диспетчеризации производственных процессов.
        </p>
        <p class="oil-animated-text">
            Автоматизация бизнес-процессов подразумевает внедрение цифровых технологий в управление продажами, материально-техническим обеспечением, работу с клиентами, бюджетирование, бухучет, делопроизводство и т.д.
        </p>
    </div>

    <div class="oil-solutions-section" id="oil-solutions">
        <h2 class="oil-section-title">Решения для нефтеперерабатывающих заводов</h2>
        <div class="oil-solution-cards">
            <div class="oil-solution-card">
                <div class="oil-card-icon">🛢️</div>
                <h3>Геораспределённые системы</h3>
                <p>Контроль и логгирование параметров работы транспортной системы на удалённых площадках</p>
            </div>
            <div class="oil-solution-card">
                <div class="oil-card-icon">📊</div>
                <h3>ExeMES система</h3>
                <p>Визуализация производственных процессов в режиме реального времени, анализ уязвимых мест</p>
            </div>
        </div>
    </div>

    <div class="oil-gallery-section" id="oil-gallery">
        <h2 class="oil-section-title">Виды решений</h2>
        <div class="oil-image-grid" id="oil-image-grid">
            <div class="oil-gallery-item">
                <img src="{{ asset('images/1.jpg') }}" alt="Oil Automation">
                <div class="oil-gallery-overlay">
                    <h3>Мониторинг и контроль</h3>
                    <button class="oil-gallery-btn">Подробнее</button>
                </div>
            </div>
            <div class="oil-gallery-item">
                <img src="{{ asset('images/oil2.jpg') }}" alt="Oil Systems">
                <div class="oil-gallery-overlay">
                    <h3>Геораспределённые системы</h3>
                    <button class="oil-gallery-btn">Подробнее</button>
                </div>
            </div>
            <div class="oil-gallery-item">
                <img src="{{ asset('images/oil3.jpg') }}" alt="Oil Management">
                <div class="oil-gallery-overlay">
                    <h3>Управление производством</h3>
                    <button class="oil-gallery-btn">Подробнее</button>
                </div>
            </div>
            <div class="oil-gallery-item">
                <img src="{{ asset('images/oil4.png') }}" alt="Oil Analytics">
                <div class="oil-gallery-overlay">
                    <h3>Аналитика и прогнозирование</h3>
                    <button class="oil-gallery-btn">Подробнее</button>
                </div>
            </div>
        </div>
    </div>

    <div class="oil-benefits-section" id="oil-benefits">
        <h2 class="oil-section-title">Преимущества автоматизации</h2>
        <div class="oil-benefits-list">
            <div class="oil-benefit-item">
                <span class="oil-benefit-check">✓</span>
                <span>Повышение эффективности производственных процессов</span>
            </div>
            <div class="oil-benefit-item">
                <span class="oil-benefit-check">✓</span>
                <span>Снижение затрат на обслуживание оборудования</span>
            </div>
            <div class="oil-benefit-item">
                <span class="oil-benefit-check">✓</span>
                <span>Улучшение точности данных и прогнозирования</span>
            </div>
            <div class="oil-benefit-item">
                <span class="oil-benefit-check">✓</span>
                <span>Оперативное выявление и устранение неполадок</span>
            </div>
            <div class="oil-benefit-item">
                <span class="oil-benefit-check">✓</span>
                <span>Интеграция с существующими системами управления</span>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {

    const oilColors = {
        darkBlue: '#003366',
        mediumBlue: '#0066cc',
        lightBlue: '#3399ff',
        accent: '#00ccff',
        dark: '#001a33',
        light: '#e6f2ff'
    };


    const mainTitle = document.getElementById('oil-main-title');
    mainTitle.style.color = oilColors.darkBlue;
    mainTitle.style.fontSize = '2.5rem';
    mainTitle.style.transition = 'all 0.5s ease';

    mainTitle.addEventListener('mouseover', () => {
        mainTitle.style.textShadow = `0 0 15px ${oilColors.accent}`;
        mainTitle.style.color = oilColors.mediumBlue;
    });

    mainTitle.addEventListener('mouseout', () => {
        mainTitle.style.textShadow = 'none';
        mainTitle.style.color = oilColors.darkBlue;
    });


    const waveDivider = document.querySelector('.oil-wave-divider');
    waveDivider.style.height = '20px';
    waveDivider.style.background = `linear-gradient(90deg, ${oilColors.darkBlue}, ${oilColors.accent}, ${oilColors.darkBlue})`;
    waveDivider.style.margin = '20px auto';
    waveDivider.style.width = '80%';
    waveDivider.style.borderRadius = '50%';
    waveDivider.style.opacity = '0.7';


    const animatedTexts = document.querySelectorAll('.oil-animated-text');
    animatedTexts.forEach((text, index) => {
        text.style.opacity = '0';
        text.style.transform = 'translateY(20px)';
        text.style.transition = `all 0.5s ease ${index * 0.2}s`;

        setTimeout(() => {
            text.style.opacity = '1';
            text.style.transform = 'translateY(0)';
        }, 500 + index * 200);
    });


    const solutionCards = document.querySelectorAll('.oil-solution-card');
    solutionCards.forEach(card => {
        card.style.background = 'white';
        card.style.borderRadius = '10px';
        card.style.padding = '25px';
        card.style.boxShadow = `0 5px 15px rgba(0, 68, 136, 0.1)`;
        card.style.transition = 'all 0.3s ease';
        card.style.margin = '15px';
        card.style.textAlign = 'center';

        const icon = card.querySelector('.oil-card-icon');
        icon.style.fontSize = '3rem';
        icon.style.marginBottom = '15px';
        icon.style.color = oilColors.mediumBlue;

        card.querySelector('h3').style.color = oilColors.darkBlue;
        card.querySelector('p').style.color = oilColors.dark;

        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translateY(-10px)';
            card.style.boxShadow = `0 15px 30px rgba(0, 102, 204, 0.2)`;
            icon.style.transform = 'scale(1.1)';
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0)';
            card.style.boxShadow = `0 5px 15px rgba(0, 68, 136, 0.1)`;
            icon.style.transform = 'scale(1)';
        });
    });

    const galleryItems = document.querySelectorAll('.oil-gallery-item');
    galleryItems.forEach(item => {
        item.style.position = 'relative';
        item.style.borderRadius = '8px';
        item.style.overflow = 'hidden';
        item.style.boxShadow = `0 5px 15px rgba(0, 51, 102, 0.2)`;
        item.style.transition = 'all 0.3s ease';

        const img = item.querySelector('img');
        img.style.width = '100%';
        img.style.height = '250px';
        img.style.objectFit = 'cover';
        img.style.transition = 'transform 0.5s ease';

        const overlay = item.querySelector('.oil-gallery-overlay');
        overlay.style.position = 'absolute';
        overlay.style.bottom = '0';
        overlay.style.left = '0';
        overlay.style.right = '0';
        overlay.style.background = `linear-gradient(transparent, ${oilColors.darkBlue})`;
        overlay.style.padding = '20px';
        overlay.style.color = 'white';
        overlay.style.opacity = '0';
        overlay.style.transition = 'all 0.3s ease';
        overlay.style.transform = 'translateY(20px)';

        const btn = item.querySelector('.oil-gallery-btn');
        btn.style.background = oilColors.accent;
        btn.style.color = 'white';
        btn.style.border = 'none';
        btn.style.padding = '8px 15px';
        btn.style.borderRadius = '20px';
        btn.style.cursor = 'pointer';
        btn.style.transition = 'all 0.3s ease';
        btn.style.marginTop = '10px';

        btn.addEventListener('mouseenter', () => {
            btn.style.background = 'white';
            btn.style.color = oilColors.darkBlue;
        });

        btn.addEventListener('mouseleave', () => {
            btn.style.background = oilColors.accent;
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


    const benefitItems = document.querySelectorAll('.oil-benefit-item');
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

        const check = item.querySelector('.oil-benefit-check');
        check.style.color = oilColors.accent;
        check.style.fontSize = '1.5rem';
        check.style.marginRight = '15px';
        check.style.fontWeight = 'bold';

        setTimeout(() => {
            item.style.opacity = '1';
            item.style.transform = 'translateX(0)';
        }, 500 + index * 100);

        item.addEventListener('mouseenter', () => {
            item.style.background = oilColors.light;
            item.style.transform = 'translateX(5px)';
        });

        item.addEventListener('mouseleave', () => {
            item.style.background = 'white';
            item.style.transform = 'translateX(0)';
        });
    });


    const sections = document.querySelectorAll('.oil-content-section, .oil-solutions-section, .oil-gallery-section, .oil-benefits-section');
    sections.forEach(section => {
        section.style.margin = '40px 0';
        section.style.padding = '20px';
        section.style.borderRadius = '8px';
    });

    const sectionTitles = document.querySelectorAll('.oil-section-title');
    sectionTitles.forEach(title => {
        title.style.color = oilColors.darkBlue;
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
        underline.style.background = oilColors.accent;
        title.appendChild(underline);
    });

    const imageGrid = document.getElementById('oil-image-grid');
    imageGrid.style.display = 'grid';
    imageGrid.style.gridTemplateColumns = 'repeat(auto-fit, minmax(250px, 1fr))';
    imageGrid.style.gap = '20px';
    imageGrid.style.margin = '30px 0';


    const solutionCardsContainer = document.querySelector('.oil-solution-cards');
    solutionCardsContainer.style.display = 'grid';
    solutionCardsContainer.style.gridTemplateColumns = 'repeat(auto-fit, minmax(300px, 1fr))';
    solutionCardsContainer.style.gap = '20px';


    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.oil-solution-card, .oil-gallery-item, .oil-benefit-item');
        const windowHeight = window.innerHeight;

        elements.forEach(el => {
            const elementPosition = el.getBoundingClientRect().top;
            const elementVisible = 150;

            if (elementPosition < windowHeight - elementVisible) {
                el.style.opacity = '1';
                el.style.transform = 'translateY(0)';
            }
        });
    };

    window.addEventListener('scroll', animateOnScroll);
    animateOnScroll();
});
</script>

<style>

#oil-automation-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #333;
}


#oil-hero {
    padding: 60px 20px;
    background: linear-gradient(135deg, #e6f2ff, #cce5ff);
    border-radius: 10px;
    margin-bottom: 40px;
}


@media (max-width: 768px) {
    #oil-main-title {
        font-size: 2rem !important;
    }

    .oil-solution-cards {
        grid-template-columns: 1fr !important;
    }

    .oil-image-grid {
        grid-template-columns: 1fr !important;
    }
}
</style>
@endsection
