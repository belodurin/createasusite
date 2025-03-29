<footer class="site-footer" id="animated-footer">
    <div class="container">
        <div class="footer-sections">
            <div class="footer-section" id="footer-about">
                <h2>О компании</h2>
                <p>Компания, занимающаяся автоматизацией процессов, предлагает инновационные решения для вашего бизнеса.</p>
            </div>
            <div class="footer-section" id="footer-services">
                <h2>Услуги</h2>
                <ul>
                    <li><a class="service-link">Автоматизация процессов</a></li>
                    <li><a class="service-link">Программирование</a></li>
                    <li><a class="service-link">Проектирование АСУТП</a></li>
                </ul>
            </div>
            <div class="footer-section" id="footer-contacts">
                <h2>Контакты</h2>
                <p>Телефон: <span class="phone-number">8 (800) 555-3535</span></p>
                <p>Email: <a href="mailto:susu@susu.ru" class="email-link">susu@susu.ru</a></p>
            </div>
            <div class="footer-section" id="footer-social">
                <h2>Социальные сети</h2>
                <ul>
                    <li><a href="https://vk.com" target="_blank" class="social-link">Вконтакте</a></li>
                    <li><a href="https://rutube.ru" target="_blank" class="social-link">Rutube</a></li>
                    <li><a href="https://telegram.org" target="_blank" class="social-link">Telegram</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-copyright" id="footer-copyright">
            <p>&copy; <span id="current-year">{{ date('Y') }}</span> FreshPath. Все права защищены.</p>
        </div>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Цветовая схема
    const colors = {
        primary: '#4a89dc',
        secondary: '#5d9cec',
        accent: '#3bafda',
        dark: '#3a539b',
        light: '#e6f2ff',
        text: '#434a54',
        white: '#ffffff'
    };

    // Анимация появления футера
    const footer = document.getElementById('animated-footer');
    footer.style.opacity = '0';
    footer.style.transform = 'translateY(20px)';
    footer.style.transition = 'opacity 0.6s ease, transform 0.6s ease';

    setTimeout(() => {
        footer.style.opacity = '1';
        footer.style.transform = 'translateY(0)';
    }, 300);

    // Анимация секций футера
    const footerSections = [
        document.getElementById('footer-about'),
        document.getElementById('footer-services'),
        document.getElementById('footer-contacts'),
        document.getElementById('footer-social')
    ];

    footerSections.forEach((section, index) => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(15px)';
        section.style.transition = `all 0.5s ease ${index * 0.2 + 0.3}s`;

        setTimeout(() => {
            section.style.opacity = '1';
            section.style.transform = 'translateY(0)';
        }, 500 + index * 200);
    });

    // Анимация ссылок на услуги
    const serviceLinks = document.querySelectorAll('.service-link');
    serviceLinks.forEach(link => {
        link.style.transition = 'all 0.3s ease';
        link.style.display = 'inline-block';

        link.addEventListener('mouseenter', () => {
            link.style.transform = 'translateX(5px)';
            link.style.color = colors.accent;
        });

        link.addEventListener('mouseleave', () => {
            link.style.transform = 'translateX(0)';
            link.style.color = '';
        });
    });

    // Анимация телефонного номера
    const phoneNumber = document.querySelector('.phone-number');
    phoneNumber.style.transition = 'all 0.3s ease';

    phoneNumber.addEventListener('mouseenter', () => {
        phoneNumber.style.color = colors.accent;
        phoneNumber.style.textShadow = `0 0 8px ${colors.light}`;
    });

    phoneNumber.addEventListener('mouseleave', () => {
        phoneNumber.style.color = '';
        phoneNumber.style.textShadow = 'none';
    });

    // Анимация email-ссылки
    const emailLink = document.querySelector('.email-link');
    emailLink.style.transition = 'all 0.3s ease';

    emailLink.addEventListener('mouseenter', () => {
        emailLink.style.color = colors.accent;
        emailLink.style.textDecoration = 'underline';
    });

    emailLink.addEventListener('mouseleave', () => {
        emailLink.style.color = '';
        emailLink.style.textDecoration = '';
    });

    // Анимация социальных ссылок
    const socialLinks = document.querySelectorAll('.social-link');
    socialLinks.forEach(link => {
        link.style.transition = 'all 0.3s ease';
        link.style.display = 'inline-block';

        link.addEventListener('mouseenter', () => {
            link.style.transform = 'scale(1.05)';
            link.style.color = colors.accent;
        });

        link.addEventListener('mouseleave', () => {
            link.style.transform = 'scale(1)';
            link.style.color = '';
        });
    });

    // Анимация копирайта
    const copyright = document.getElementById('footer-copyright');
    copyright.style.opacity = '0';
    copyright.style.transition = 'opacity 0.6s ease 1s';

    setTimeout(() => {
        copyright.style.opacity = '1';
    }, 1300);

    // Обновление года в копирайте
    const yearElement = document.getElementById('current-year');
    yearElement.textContent = new Date().getFullYear();

    // Пульсация года
    setInterval(() => {
        yearElement.style.transform = 'scale(1.05)';
        yearElement.style.transition = 'transform 0.5s ease';

        setTimeout(() => {
            yearElement.style.transform = 'scale(1)';
        }, 500);
    }, 3000);
});
</script>
