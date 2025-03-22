@extends('layout.app')

@section('title', 'Главная страница - Автоматизация производственных процессов')

@section('content')
<div class="container">
    <h1 class="text-black text-center">Автоматизация на современных производствах</h1>
    <div class="container text-black">
        <p>Автоматизация на современных производствах — это процесс использования технологий и систем для выполнения задач, которые ранее выполнялись вручную. Основная цель автоматизации — повысить эффективность, снизить затраты и улучшить качество продукции.</p>
        <div class="container text-black">
            <ol>
                <li>Промышленное оборудование с числовым программным управлением</li>
                <p>Станки, запрограммированные на выполнение определённых работ. Технологический процесс осуществляется под управлением электроники, вмешательство человека сведено к минимуму.</p>
                <li>Роботы</li>
                <p>Они могут выполнять широкий спектр задач, от сборки и упаковки до сварки и окраски. Современные роботы оснащены сенсорами и системами искусственного интеллекта, что позволяет им адаптироваться к изменениям в производственном процессе и выполнять задачи с высокой точностью.</p>
                <li>Гибкие производственные системы (FMS)</li>
                <p>Такие комплексы помогают совершать полные циклы изготовления продукции в условиях изменяющейся производственной среды. Система своевременно реагирует на предсказуемые и непредвиденные обстоятельства и адаптируется к ним.</p>
                <li>Системы автоматизированного проектирования</li>
                <p>Программное обеспечение помогает изготавливать сложные детали и сокращать цикл их производства. Посредством прикладных программ создаются алгоритмы работы применяемых станков.</p>
                <li>Складские системы автоматизации</li>
                <p>Предусматривают использование управляемых компьютером подъёмно-транспортных устройств, которые закладывают изделия на склад и извлекают их оттуда по команде.</p>
            </ol>
        </div>
    </div>

    <h1 class="text-black text-center">Совершенствование систем управления на производстве</h1>
    <div class="container text-black">
        <ol>
            <li>Осмыслить необходимость совершенствования и сформировать понимание улучшений.</li>
            <li>Оценить текущее состояние компании по всем основным направлениям деятельности.</li>
            <li>Параметрическая и структурная оптимизация производственных процессов.</li>
            <li>Статистическое управление производственными процессами (SPC).</li>
            <li>Создать стратегию развития и активизировать рабочие группы и персонал компании.</li>
        </ol>
    </div>

    <h1 class="text-black text-center">Типы автоматизированных производств</h1>
    <div class="image-grid">
        <div class="image-item">
            <img class="img-fluid" src="{{ asset('images/automation.jpg') }}" alt="Automation Image">
            <div class="image-caption">Автоматизированные системы энергетики</div>
        </div>
        <div class="image-item">
            <img class="img-fluid" src="{{ asset('images/auto1.jpg') }}" alt="Auto1 Image">
            <div class="image-caption">Распределенная автоматизация</div>
        </div>
        <div class="image-item">
            <img class="img-fluid" src="{{ asset('images/auto2.jpg') }}" alt="Auto2 Image">
            <div class="image-caption">Роботизированные линии</div>
        </div>
        <div class="image-item">
            <img class="img-fluid" src="{{ asset('images/auto3.jpg') }}" alt="Auto3 Image">
            <div class="image-caption">Интеллектуальные системы</div>
        </div>
    </div>
</div>
@endsection
