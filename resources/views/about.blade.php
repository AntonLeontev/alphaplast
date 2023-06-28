@extends('layouts.app')

@section('title', 'О нас')

@section('content')
	<main>
	<x-h1>ПЭТ-тара от «Альфапласт» - совершенство в деталях</x-h1>
    
    <section class="about-text">
        <div class="container">
            <p>
                Производство пластиковой тары ООО «Альфапласт» уже 15 лет является лидером рынка по производству ПЭТ-упаковки. Технология производства ПЭТ выработана для каждого вида тары. 
            </p>
            <p>
                <span>Мы предлагаем клиентам как готовые комплекты:</span> ПЭТ-банки с крышкой, ПЭТ-бутылки с колпачком, ПЭТ-флаконы с крышкой, преформы с крышкой, так и отдельные ПЭТ-преформы любых выпускаемых стандартов. 
            </p>
            <p>
                На выбор клиенту предлагаем прозрачный или цветной пластик, различные размеры, крышки и колпачки. 
            </p>
            <p>
                Помимо стандартных моделей и форм из каталога, создаём изделия из пластика на заказ с индивидуальным дизайном и ПЭТ-прессформы для выдува бутылки, банки или флакона заданной формы. Возможно нанесение объёмных названий и логотипов любой сложности на поверхности выдуваемых пэт банок и бутылок.
            </p>
        </div>
    </section>

    <section class="about-adv">
        <div class="container">
            <h2>Преимущества тары в Альфапласт</h2>
            <p class="about-adv__text">
                «Альфапласт» хорошо зарекомендовал себя, поэтому нашу продукцию заказывают крупные производители различных продуктов, малый и средний бизнес, покупают ПЭТ-бутылки и ПЭТ-банки в розницу. ПЭТ- продукция компании обладает неоспоримыми преимуществами
            </p>
            <ul class="about-adv__list">
                <li class="about-adv__item">
                    <h3>Высокая прочность</h3>
                    <p>Мы гарантируем долгий срок службы изделий производства Альфапласт.</p>
                </li>
                <li class="about-adv__item">
                    <h3>Лёгкий вес</h3>
                    <p>В больших оптовых заказах вес имеет значение. Небольшой вес наших изделий сокращает компаниям расходы на транспортную логистику.</p>
                </li>
                <li class="about-adv__item">
                    <h3>Лёгкая транспортировка</h3>
                    <p>За счёт прочности и легкого веса изделий транспортировка не занимает много времени и физических сил.</p>
                </li>
                <li class="about-adv__item">
                    <h3>Низкая цена</h3>
                    <p>В сравнении с другими видами тары стоимость ПЭТ-упаковки в Альфапласт приятно мала.</p>
                </li>
                <li class="about-adv__item">
                    <h3>Аккуратный и стильный внешний вид</h3>
                    <p>Для производителя важно, чтобы упаковка их продукции имела презентабельный внешний вид – мы уделяем этому особое внимание.</p>
                </li>
            </ul>
            <div class="about-adv__block">
                Пластиковые изделия компании можно заказать большими партиями и без задержек производства – за это клиенты нас ценят
            </div>
        </div>
    </section>

    <section class="about-number">
        <div class="container">
            <h2>Почему ПЭТ?</h2>
            <p class="about-number__text">
                Производство Альфапласт заботится о благополучии клиентов и не меньше заботится об экологии. Материал ПЭТ (полиэтилентерефталат) мы выбрали за его свойства
            </p>
            <ul class="about-number__list">
                <li>
                    <h3>Экологичный</h3>
                    <p>ПЭТ легко перерабатывается, поэтому его предпочитают среди других сложноперерабатываемых материалов.</p>
                </li>
                <li>
                    <h3>Внешние характеристики</h3>
                    <p>Прозрачность и чистота ПЭТ напоминает хрустальное стекло, при этом материал лёгкий, прочный и обладает повышенной устойчивостью к высокому давлению.</p>
                </li>
                <li>
                    <h3>Безопасен для хранения</h3>
                    <p>Особенно важно это для пищевых продуктов. ПЭТ помогает сохранить пищу в безопасности и не повредить при транспортировке</p>
                </li>
                <li>
                    <h3>Лёгкое термоформирование</h3>
                    <p>ПЭТ обладает боее высокой теплопроводностью по сравнению с другими материалами, поэтому ему требуется меньше энергии для формовки и временной цикл производства короче.</p>
                </li>
            </ul>
            <div class="about-number__block">
                На сайте Альфапласт представлены все популярные модели бутылок, банок, флаконов, преформ и крышек из ПЭТ. У нас можно купить ПЭТ-тару оптом, заказать выдув ПЭТ или создать прессформу по индивидуальному заказу – мы будем рады сотрудничеству с вами!
            </div>
        </div>
    </section>

    <section class="about-catalog">
        <div class="container">
            <h2>Выберите свой вариант упаковки вашей продукции</h2>
            <div class="row about-catalog__list">
                <div class="col-md-6 col-lg-4 about-catalog__item">
                    <img src="{{ Vite::asset('resources/images/card-section3-3.png') }}" alt="">
                    <h3>ПЭТ-бутылка</h3>
                    <a class="btn-hover" href="{{ route('catalog') }}?category=butilki">Смотреть</a>
                </div>
                <div class="col-md-6 col-lg-4 about-catalog__item">
                    <img src="{{ Vite::asset('resources/images/card-section3-2.png') }}" alt="">
                    <h3>ПЭТ-банка</h3>
                    <a class="btn-hover" href="{{ route('catalog') }}?category=banki">Смотреть</a>
                </div>
                <div class="col-md-6 col-lg-4 about-catalog__item">
                    <img src="{{ Vite::asset('resources/images/card-section3-1.png') }}" alt="">
                    <h3>ПЭТ-Преформа</h3>
                    <a class="btn-hover" href="{{ route('catalog') }}?category=pet-preforma">Смотреть</a>
                </div>
                <div class="col-md-6 col-lg-4 about-catalog__item">
                    <img src="{{ Vite::asset('resources/images/card-section3-5.png') }}" alt="">
                    <h3>преформа</h3>
                    <a class="btn-hover" href="{{ route('catalog') }}?category=preformi">Смотреть</a>
                </div>
                <div class="col-md-6 col-lg-4 about-catalog__item">
                    <img src="{{ Vite::asset('resources/images/card-section3-4.png') }}" alt="">
                    <h3>Крышки и колпачки</h3>
                    <a class="btn-hover" href="{{ route('catalog') }}?category=krishki">Смотреть</a>
                </div>
                <div class="col-md-6 col-lg-4 about-catalog__item">
                    <img src="{{ Vite::asset('resources/images/card-section3-6.png') }}" alt="">
                    <h3>Индивидуальный заказ</h3>
                    <a class="btn-hover" href="{{ route('catalog') }}?category=press-formi">Смотреть</a>
                </div>
            </div>
            <div class="robots__wrapp">
                <div class="robots__block-1">
                    <p>Оформите заказ по телефону или напишите ваш запрос на почту.</p>
                    <ul class="">
                        <li><a class="about-catalog__btn-phone" href="tel:+74955040605">+7 (495) 504-06-05</a></li>
                        <li><a class="about-catalog__btn-mail" href="mailto:plastbox@mail.ru">plastbox@mail.ru</a></li>
                    </ul>
                </div>
                <div class="robots__block-2">
                    <img src="{{ Vite::asset('resources/images/card-section4-1.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="about-number">
        <div class="container">
            <h2>Сертификаты</h2>
        </div>
    </section>
</main>
@endsection
