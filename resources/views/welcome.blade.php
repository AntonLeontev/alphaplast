@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <main>
        <section class="hero">
            <div class="container">
                <div class="hero__text-1">Производство пластиковой тары</div>
                <h1 class="hero__title">ПЭТ – упаковка для любых видов продукции</h1>
                <ul class="hero__list">
                    <li>ПЭТ – бутылка</li>
                    <li>ПЭТ – банка</li>
                    <li>ПЭТ – флакон</li>
                    <li>ПЭТ – преформа</li>
                    <li>Крышка и колпачок</li>
                    <li>Индивидуальный заказ</li>
                </ul>
                <a class="hero__btn btn-hover" type="button" href="#free-feedback">Связатся с нами</a>
            </div>
        </section>

        <section class="advantages">
            <div class="container">
                <h2 class="advantages__title">Изготавливаем тару под направления</h2>
                <div class="advantages__slider swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="advantages__card" style="background-image: url({{ Vite::asset('resources/images/card-section2-1.png') }})">
                                <h3>Косметика и парфюмерия</h3>
                                <p>ПЭТ- флаконы и баночки для косметики – удобное и практичное решение для продажи, хранения
                                    и транспортировки косметики: крем, гель для душа, шампунь, лосьон, праймер и других
                                    видов.</p>
                                <a class="btn-hover" href="catalog.html">ПОДРОБНЕЕ</a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="advantages__card" style="background-image: url({{ Vite::asset('resources/images/card-section2-2.png') }})">
                                <h3>Кондитерские изделия</h3>
                                <p>ПЭТ- флаконы и баночки для косметики – удобное и практичное решение для продажи, хранения
                                    и транспортировки косметики: крем, гель для душа, шампунь, лосьон, праймер и других
                                    видов.</p>
                                <a class="btn-hover" href="catalog.html">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="advantages__card" style="background-image: url({{ Vite::asset('resources/images/card-section2-3.png') }})">
                                <h3>Напитки и еда</h3>
                                <p>ПЭТ- флаконы и баночки для косметики – удобное и практичное решение для продажи, хранения
                                    и транспортировки косметики: крем, гель для душа, шампунь, лосьон, праймер и других
                                    видов.</p>
                                <a class="btn-hover" href="catalog.html">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="advantages__card" style="background-image: url({{ Vite::asset('resources/images/card-section2-4.png') }})">
                                <h3>Бытовая химия</h3>
                                <p>ПЭТ- флаконы и баночки для косметики – удобное и практичное решение для продажи, хранения
                                    и транспортировки косметики: крем, гель для душа, шампунь, лосьон, праймер и других
                                    видов.</p>
                                <a class="btn-hover" href="catalog.html">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="advantages__card" style="background-image: url({{ Vite::asset('resources/images/card-section2-5.png') }})">
                                <h3>Фармацевтика</h3>
                                <p>ПЭТ- флаконы и баночки для косметики – удобное и практичное решение для продажи, хранения
                                    и транспортировки косметики: крем, гель для душа, шампунь, лосьон, праймер и других
                                    видов.</p>
                                <a class="btn-hover" href="catalog.html">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="advantages__card" style="background-image: url({{ Vite::asset('resources/images/card-section2-6.png') }})">
                                <h3>Игрушки из мелких деталей</h3>
                                <p>ПЭТ- флаконы и баночки для косметики – удобное и практичное решение для продажи, хранения
                                    и транспортировки косметики: крем, гель для душа, шампунь, лосьон, праймер и других
                                    видов.</p>
                                <a class="btn-hover" href="catalog.html">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="advantages__card" style="background-image: url({{ Vite::asset('resources/images/card-section2-7.png') }})">
                                <h3>Спортивное питание</h3>
                                <p>ПЭТ- флаконы и баночки для косметики – удобное и практичное решение для продажи, хранения
                                    и транспортировки косметики: крем, гель для душа, шампунь, лосьон, праймер и других
                                    видов.</p>
                                <a class="btn-hover" href="catalog.html">ПОДРОБНЕЕ</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="advantages__card" style="background-image: url({{ Vite::asset('resources/images/card-section2-8.png') }})">
                                <h3>Ваша сфера деятельности</h3>
                                <p>ПЭТ- флаконы и баночки для косметики – удобное и практичное решение для продажи, хранения
                                    и транспортировки косметики: крем, гель для душа, шампунь, лосьон, праймер и других
                                    видов.</p>
                                <a class="btn-hover" href="catalog.html">ПОДРОБНЕЕ</a>
                            </div>
                        </div>

                    </div>
                    <div class="cases__wrapper-btn">
                        <div class="swiper-button-prev swiper-button-advantages-prev"></div>
                        <div class="swiper-button-next swiper-button-advantages-next"></div>
                    </div>
                    <!-- <div class="swiper-pagination advantages__pagination"></div> -->
                </div>

            </div>
        </section>


        <section class="teachers" id="section2">
            <div class="container">
                <h2 class="teachers__title">Каталог с категориями товаров</h2>
                <div class="teachers__wrap row gy-4 justify-content-center justify-content-lg-between">
                    <div class="pb-4 col-lg-4 teachers__card">
                        <picture>
                            <img class="" src="{{ Vite::asset('resources/images/card-section3-1.png') }}" alt="фото" />
                        </picture>
                        <div class="">
                            <h3 class="teachers__card-title">Флаконы</h3>
                            <a class="btn-hover" href="catalog.html">Смотреть</a>
                        </div>
                    </div>
                    <div class="pb-4 col-lg-4 teachers__card">
                        <picture>
                            <img class="" src="{{ Vite::asset('resources/images/card-section3-2.png') }}" alt="фото" />
                        </picture>
                        <div class="">
                            <h3 class="teachers__card-title">Флаконы</h3>
                            <a class="btn-hover" href="catalog.html">Смотреть</a>
                        </div>
                    </div>
                    <div class="pb-4 col-lg-4 teachers__card">
                        <picture>
                            <img class="" src="{{ Vite::asset('resources/images/card-section3-3.png') }}" alt="фото" />
                        </picture>
                        <div class="">
                            <h3 class="teachers__card-title">Флаконы</h3>
                            <a class="btn-hover" href="catalog.html">Смотреть</a>
                        </div>
                    </div>
                    <div class="pb-4 col-lg-4 teachers__card">
                        <picture>
                            <img class="" src="{{ Vite::asset('resources/images/card-section3-4.png') }}" alt="фото" />
                        </picture>
                        <div class="">
                            <h3 class="teachers__card-title">Флаконы</h3>
                            <a class="btn-hover" href="catalog.html">Смотреть</a>
                        </div>
                    </div>
                    <div class="pb-4 col-lg-4 teachers__card">
                        <picture>
                            <img class="" src="{{ Vite::asset('resources/images/card-section3-5.png') }}" alt="фото" />
                        </picture>
                        <div class="">
                            <h3 class="teachers__card-title">Флаконы</h3>
                            <a class="btn-hover" href="catalog.html">Смотреть</a>
                        </div>
                    </div>
                    <div class="pb-4 col-lg-4 teachers__card">
                        <picture>
                            <img class="" src="{{ Vite::asset('resources/images/card-section3-6.png') }}" alt="фото" />
                        </picture>
                        <div class="">
                            <h3 class="teachers__card-title">Флаконы</h3>
                            <a class="btn-hover" href="catalog.html">Смотреть</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="robots">
            <div class="container">
                <div class="robots__wrapp">
                    <div class="robots__block-1">
                        <p>Не нашли подходящей модели? Закажите индивидуальную разработку по собственному эскизу!</p>
                        <a class="robots__block-1-a btn-hover" href="#">Заказать разработку</a>
                    </div>
                    <div class="robots__block-2">
                        <img src="{{ Vite::asset('resources/images/card-section4-1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>


        <section class="reviews" id="section4">
            <div class="container">
                <h2>Отзывы</h2>
                <div class="reviews__slider swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="reviews__item">
                                <div class="">
                                    <h3>Иван</h3>
                                    <p>Все отлично, рекомендую. Большой выбор пэт бутылок и банок.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="reviews__item">
                                <div class="">
                                    <h3>Мария</h3>
                                    <p>Отличные банки, помогли подобрать, все подсказали, буду брать ещё!</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="reviews__item">
                                <div class="">
                                    <h3>Олег</h3>
                                    <p>Отличная производственная компания!</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="reviews__item">
                                <div class="">
                                    <h3>Сергей</h3>
                                    <p>Все как в аптеке четко быстро и отличное качество.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="reviews__item">
                                <div class="">
                                    <h3>Владимир</h3>
                                    <p>Был там два раза, персонал вроде приветливый. Проблем никаких не было.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="reviews__item">
                                <div class="">
                                    <h3>Павел</h3>
                                    <p>Самая дешевая продукция и продают мелкими партиями.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- <div class="swiper-pagination advantages__pagination"></div> -->
                    <div class="cases__wrapper-btn reviews__wrapper-btn">
                        <div class="swiper-button-prev swiper-button-reviews-prev"></div>
                        <div class="swiper-button-next swiper-button-reviews-next"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="price" id="section3">
            <div class="container">
                <h2>О КОМПАНИИ</h2>
                <p>ПЭТ-тара от «Альфапласт» - совершенство в деталях 15 лет производим ПЭТ-упаковку для вас</p>
                <div class="price__wrapp">
                    <div class="price__list">
                        <ul>
                            <li>Большой опыт работы</li>
                            <li>Приятно низкая стоимость</li>
                            <li>Соблюдаем сроки производства</li>
                            <li>Воплощаем любые ваши идеи</li>
                            <li>Высокие стандарты качества</li>
                        </ul>
                        <a class="btn-hover" href="#">О КОМПАНИИ</a>
                    </div>
                    <div class="price__img">
                        <img src="{{ Vite::asset('resources/images/card-section5-1.jpg') }}" alt="">
                        <a class="btn-hover" href="about.html">О КОМПАНИИ</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="schedule" id="section">
            <div class="container">
                <h2>Новости и полезные статьи</h2>
                <div class="schedule__slider swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="schedule__item">
                                <picture>
                                    <img class="" src="{{ Vite::asset('resources/images/card-section6-1.png') }}" alt="фото" />
                                </picture>
                                <div class="schedule__item-wrapp">
                                    <h3 class="">Преимущества ПЭТ пластиковых бутылок и банок</h3>
                                    <p>ПЭТ-пластиковые бутылки и банки в настоящее время стали незаменимыми в повседневной
                                        жизни....</p>
                                    <a href="post-1.html">читать</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="schedule__item">
                                <picture>
                                    <img class="" src="{{ Vite::asset('resources/images/card-section6-2.png') }}" alt="фото" />
                                </picture>
                                <div class="schedule__item-wrapp">
                                    <h3 class="">Преимущества ПЭТ пластиковых бутылок и банок</h3>
                                    <p>ПЭТ-бутылки и банки широко используются в промышленности и быту, благодаря своим
                                        удобству, легкости....</p>
                                    <a href="post-1.html">читать</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="schedule__item">
                                <picture>
                                    <img class="" src="{{ Vite::asset('resources/images/card-section6-3.png') }}" alt="фото" />
                                </picture>
                                <div class="schedule__item-wrapp">
                                    <h3 class="">Преимущества ПЭТ пластиковых бутылок и банок</h3>
                                    <p>ПЭТ-бутылки и ПЭТ-банки являются одними из наиболее популярных видов упаковки в мире.
                                        Они... </p>
                                    <a href="post-1.html">читать</a>
                                </div>
                            </div>
                        </div>



                    </div>
                    <!-- <div class="swiper-pagination advantages__pagination"></div> -->
                    <div class="cases__wrapper-btn schedule__wrapper-btn">
                        <div class="swiper-button-prev swiper-button-schedule-prev"></div>
                        <div class="swiper-button-next swiper-button-schedule-next"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="free-feedback" id="free-feedback">
            <div class="container">
                <h2>Розничная продажа ПЭТ-тары</h2>

                <div class="free-feedback__wrapp">
                    <h3>Закажите продукцию компании в маленьком объёме. Напишите нам желаемые объёмы заказа и номер
                        продукции. Мы проконсультируем вас.</h3>
                    <form class="free-feedback__form" action="#">
                        <div>
                            <input class="form-control" type="text" placeholder="Ваше имя">
                        </div>
                        <div>
                            <input class="form-control" type="text" placeholder="Номер телефона">
                        </div>
                        <div>
                            <input class="form-control" type="text" placeholder="Закажите нашу тару на Озон">
                        </div>
                        <button class="btn-hover">Заказать</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <div class="modal fade z999" id="myModal-2" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1"
        style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-fb">
                <div class="p-2 w-100 d-flex justify-content-end">
                    <button class="bg-white btn-close" data-bs-dismiss="modal" type="button"
                        aria-label="Close"></button>
                </div>
                <div class="p-5 text-center text-white h1">
                    Спасибо заявка отправлена
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

