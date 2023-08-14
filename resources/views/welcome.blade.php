@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <main>
        <section class="hero" >
        <div class="container">
            <div class="hero__text-1  wow fadeInUp">Производство пластиковой тары</div>
            <h1 class="hero__title  wow fadeInUp">ПЭТ – упаковка для любых видов продукции</h1>
            <!-- <div class="hero__text-2">Курсы для детей 5-17 лет по разработке, конструированию, прототипированию и программированию роботов</div> -->
            <ul class="hero__list  wow fadeInUp">
                <li>ПЭТ – бутылка</li>
                <li>ПЭТ – банка</li>
                <li>ПЭТ – флакон</li>
                <li>ПЭТ – преформа</li>
                <li>Крышка и колпачок</li>
                <li>Индивидуальный заказ</li>
            </ul>
            <a href="#free-feedback" type="button" class="hero__btn btn-hover wow fadeInUp" onclick="ym(27541782,'reachGoal','btn_contact'); return true;">Связаться с нами</a>
        </div>
    </section>

        <section class="advantages" >
        <div class="container  wow fadeInUp">
            <h2 class="advantages__title wow fadeInUp">Изготавливаем тару под направления</h2>
            <div class="advantages__slider swiper wow fadeInUp">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="advantages__card" style="background-image: url({{ Vite::asset('resources/images/card-section2-1.png') }})">
                            <h3>Косметика и парфюмерия</h3>
                            <p>ПЭТ- флаконы и баночки для косметики – удобное и практичное решение для продажи, хранения и транспортировки косметики: крем, гель для душа, шампунь, лосьон, праймер и других видов.</p>
                            <a class="btn-hover" href="{{ route('catalog') }}">ПОДРОБНЕЕ</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="advantages__card" style="background-image: url({{ Vite::asset('resources/images/card-section2-2.png') }})">
                            <h3>Кондитерские изделия</h3>
                            <p>ПЭТ – упаковка для пищевых продуктов производится из пищевого пластика и имеет различные размеры и объёмы для удобной фасовки изделий: конфеты, мармелад, зефир и других видов.</p>
                            <a class="btn-hover" href="{{ route('catalog') }}">ПОДРОБНЕЕ</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="advantages__card" style="background-image: url({{ Vite::asset('resources/images/card-section2-3.png') }})">
                            <h3>Напитки и еда</h3>
                            <p>ПЭТ - бутылки для напитков производятся в различных цветах и размерах, которые удобны как для производителя, так и для потребителя продукта.</p>
                            <a class="btn-hover" href="{{ route('catalog') }}">ПОДРОБНЕЕ</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="advantages__card" style="background-image: url({{ Vite::asset('resources/images/card-section2-4.png') }})">
                            <h3>Бытовая химия</h3>
                            <p>Специальный состав ПЭТ – тары безопасен для здоровья, не вступает в реакцию с содержимым и надёжно защищает его. Тара для хранения химикатов производится в удобных объёмах и формах.</p>
                            <a class="btn-hover" href="{{ route('catalog') }}">ПОДРОБНЕЕ</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="advantages__card" style="background-image: url({{ Vite::asset('resources/images/card-section2-5.png') }})">
                            <h3>Фармацевтика</h3>
                            <p>ПЭТ – флаконы для фармацевтической и медицинской продукции, а также БАД, - это отдельная серия упаковки специально выверенных размеров, оснащенная крышечкой. Удобно использовать для: таблеток, капсул, порошков и других видов.</p>
                            <a class="btn-hover" href="{{ route('catalog') }}">ПОДРОБНЕЕ</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="advantages__card" style="background-image: url({{ Vite::asset('resources/images/card-section2-6.png') }})">
                            <h3>Игрушки из мелких деталей</h3>
                            <p>ПЭТ – банки из прозрачного пластика с закручивающейся крышкой разработаны специально для упаковки детских игрушек, в составе которых есть мелкие детали: конструкторы, пазлы и другие.</p>
                            <a class="btn-hover" href="{{ route('catalog') }}">ПОДРОБНЕЕ</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="advantages__card" style="background-image: url({{ Vite::asset('resources/images/card-section2-7.png') }})">
                            <h3>Спортивное питание</h3>
                            <p>Большие ПЭТ – банки пользуются популярностью в сфере спортивного питания. Их используют для упаковки сыпучей продукции или для замешивания спортивных коктейлей, например, протеин в банке, гейнеры и т.д.</p>
                            <a class="btn-hover" href="{{ route('catalog') }}">ПОДРОБНЕЕ</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="advantages__card" style="background-image: url({{ Vite::asset('resources/images/card-section2-8.png') }})">
                            <h3>Ваша сфера деятельности</h3>
                            <p>ПЭТ – упаковка по вашему индивидуальному запросу изготавливается в течение нескольких дней. Мы создаём прозрачную и цветную продукцию, любой размер, а также можем делать любой рельеф на поверхности изделия (например, логотип вашей компании). </p>
                            <a class="btn-hover" href="{{ route('catalog') }}">ПОДРОБНЕЕ</a>
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

	<section class="anima">
        <img class="anima-item anima1" src="{{ Vite::asset('resources/images/animate1.png') }}" alt="">
        <img class="anima-item anima2" src="{{ Vite::asset('resources/images/animate2.png') }}" alt="">
        <img class="anima-item anima3" src="{{ Vite::asset('resources/images/animate3.png') }}" alt="">
        <img class="anima-item anima4" src="{{ Vite::asset('resources/images/animate4.png') }}" alt="">
        <div class="anima-item text1">СОВЕРШЕНСТВО</div>
        <div class="anima-item text2">В ДЕТАЛЯХ</div>
    </section>


        <section class="teachers" id="section2">
            <div class="container">
                <h2 class="teachers__title wow fadeInUp">Каталог</h2>
                <div class="teachers__wrap row gy-4 justify-content-center justify-content-lg-between">
                    <div class="pb-4 col-lg-4 teachers__card wow fadeInUp">
                        <picture>
                            <img class="" src="{{ Vite::asset('resources/images/card-section3-1.png') }}" alt="фото" />
                        </picture>
                        <div class="">
                            <h3 class="teachers__card-title">Флаконы</h3>
                            <a class="btn-hover" href="{{ route('catalog') }}">Смотреть</a>
                        </div>
                    </div>
                    <div class="pb-4 col-lg-4 teachers__card wow fadeInUp">
                        <picture>
                            <img class="" src="{{ Vite::asset('resources/images/card-section3-2.png') }}" alt="фото" />
                        </picture>
                        <div class="">
                            <h3 class="teachers__card-title">Банки</h3>
                            <a class="btn-hover" href="{{ route('catalog') }}?category=banki">Смотреть</a>
                        </div>
                    </div>
                    <div class="pb-4 col-lg-4 teachers__card wow fadeInUp">
                        <picture>
                            <img class="" src="{{ Vite::asset('resources/images/card-section3-3.png') }}" alt="фото" />
                        </picture>
                        <div class="">
                            <h3 class="teachers__card-title">Бутылки</h3>
                            <a class="btn-hover" href="{{ route('catalog') }}?category=butilki">Смотреть</a>
                        </div>
                    </div>
                    <div class="pb-4 col-lg-4 teachers__card wow fadeInUp">
                        <picture>
                            <img class="" src="{{ Vite::asset('resources/images/card-section3-4.png') }}" alt="фото" />
                        </picture>
                        <div class="">
                            <h3 class="teachers__card-title">Крышки</h3>
                            <a class="btn-hover" href="{{ route('catalog') }}?category=krishki">Смотреть</a>
                        </div>
                    </div>
                    <div class="pb-4 col-lg-4 teachers__card wow fadeInUp">
                        <picture>
                            <img class="" src="{{ Vite::asset('resources/images/card-section3-5.png') }}" alt="фото" />
                        </picture>
                        <div class="">
                            <h3 class="teachers__card-title">Преформы</h3>
                            <a class="btn-hover" href="{{ route('catalog') }}?category=preformi">Смотреть</a>
                        </div>
                    </div>
					<div class="pb-4 col-lg-4 teachers__card wow fadeInUp">
                        <picture>
                            <img class="" src="{{ Vite::asset('resources/images/card-section3-6.png') }}" alt="фото" />
                        </picture>
                        <div class="">
                            <h3 class="teachers__card-title">Пресс-формы</h3>
                            <a class="btn-hover" href="{{ route('catalog') }}?category=press-formi">Смотреть</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="robots">
        <div class="container">
            <div class="robots__wrapp robots__wrapp-bg wow fadeInUp">
                <div class="robots__block-1 robots__block-1-100 ">
                    <p class="wow fadeInUp">Не нашли подходящей модели?<br> Закажите индивидуальную разработку по собственному эскизу!</p>
                    <a class="robots__block-1-a btn-hover wow fadeInUp" href="#" data-bs-toggle="modal" data-bs-target="#myModal" onclick="ym(27541782,'reachGoal','btn_razrab'); return true;">
						Заказать разработку
					</a>
                </div>
            </div>
        </div>
    </section>


        <section class="reviews" id="section4">
        <div class="container">
            <h2 class="wow fadeInUp">Отзывы</h2>
            <div class="reviews__slider swiper wow fadeInUp">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="reviews__item">
                            <div class="">
                                <h3 class="">Иван</h3>
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
            <h2 class="wow fadeInUp">О КОМПАНИИ</h2>
            <p class="wow fadeInUp">ПЭТ-тара от «Альфапласт» - совершенство в деталях<br>15 лет производим ПЭТ-упаковку для вас</p>
            <div class="price__wrapp">
                <div class="price__list wow fadeInUp">
                    <ul>
                        <li>Большой опыт работы</li>
                        <li>Приятно низкая стоимость</li>
                        <li>Соблюдаем сроки производства</li>
                        <li>Воплощаем любые ваши идеи</li>
                        <li>Высокие стандарты качества</li>
                    </ul>
                    <a href="{{ route('about') }}" class="btn-hover">О КОМПАНИИ</a>
                </div>
                <div class="price__img wow fadeInUp">
                    <img class="" src="{{ Vite::asset('resources/images/card-section5-1.jpg') }}" alt="">
                    <a class="btn-hover" href="{{ route('about') }}" >О КОМПАНИИ</a>
                </div>
            </div>
        </div>
    </section>

		@if ($articles->isNotEmpty())
			<section class="schedule" id="section">
				<div class="container">
					<h2 class="wow fadeInUp">Новости и полезные статьи</h2>
					<div class="schedule__slider swiper wow fadeInUp">
						<div class="swiper-wrapper">

							@foreach ($articles as $article)
								<div class="swiper-slide">
									<x-article-preview :$article />
								</div>
							@endforeach

						</div>
						<!-- <div class="swiper-pagination advantages__pagination"></div> -->
						<div class="cases__wrapper-btn schedule__wrapper-btn">
							<div class="swiper-button-prev swiper-button-schedule-prev"></div>
							<div class="swiper-button-next swiper-button-schedule-next"></div>
						</div>
					</div>
				</div>
			</section>
		@endif

        <section class="free-feedback" id="free-feedback">
        <div class="container">
            <h2 class="wow fadeInUp">Розничная продажа ПЭТ-тары</h2>

            <div class="free-feedback__wrapp wow fadeInUp">
                <h3>Закажите продукцию компании в маленьком объёме. Напишите нам желаемые объёмы заказа и номер продукции. <br>Мы проконсультируем вас.</h3>
                <form action="" class="free-feedback__form" onsubmit="ym(27541782,'reachGoal','form_order_contact'); return true;">
					@csrf
                    <div>
                        <input type="text" name="name" class="form-control" placeholder="Ваше имя">
                    </div>
                    	<div x-data>
                            <input name="phone" type="text" class="form-control" placeholder="Номер телефона" x-mask="8 999 999-99-99">
                        </div>
                    <div>
                        <input type="text" name="description" class="form-control" placeholder="Опишите ваш заказ">
                    </div>
                    <div class="text-center">
                        <a 
							href="https://www.ozon.ru/seller/alfaplast-600322/products/?miniapp=seller_600322" 
							style="color: #fff; text-decoration: underline;"
							onclick="ym(27541782,'reachGoal','btn_order_ozon'); return true;"
							target="_blank"
						>
							Закажите нашу тару на Озон
						</a>
                    </div>
                    <button type="submit" class="btn-hover submit-btn" data-bs-toggle="modal">Заказать</button>
                </form>
            </div>
        </div>
    </section>
    </main>

    <div id="myModal" class="modal fade z999" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog ">
            <div class="modal-content modal-fb ">
                <div class="p-2 mw-50">
                    <h3>Оставьте свои контакты, мы с вами свяжемся для обсуждения деталей </h3>
                    <form action="" onsubmit="ym(27541782,'reachGoal','form_order_main'); return true;">
                        <div>
                            <input name="name" type="text" class="form-control" placeholder="Ваше имя">
                        </div>
                        <div x-data>
                            <input name="phone" type="text" class="form-control" placeholder="Номер телефона" x-mask="8 999 999-99-99">
                        </div>
                        <div class="mb-4">
                            <input name="email" type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="d-flex flex-column mt-4">
                            <button type="submit" class="btn btn-primary mb-2 submit-btn" data-bs-toggle="modal" data-bs-dismiss="modal">Отправить</button>
                        </div>
                    </form>
                </div>



            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="myModal-2" class="modal fade z999" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content modal-fb ">
                <div class="w-100 p-2 d-flex justify-content-end">
                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="text-white h1 p-5 text-center">
                    Спасибо заявка отправлена
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

@section('body-scripts')
	<script>
		let lastScrollTop = 0;
		const img1 = document.querySelector('.anima1');
		const img2 = document.querySelector('.anima2');
		const img3 = document.querySelector('.anima3');
		const img4 = document.querySelector('.anima4');

		window.addEventListener('scroll', handleScroll);
		function handleScroll() {
			let currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;


			if (currentScrollTop > 1294) {
				img1.style.left = '15%';
				img1.style.bottom = '89px';
				img2.style.bottom = '30px';
				img3.style.left = '8%';
				img3.style.top = '20px';
				img4.style.right = '8%';
				img4.style.top = '40px';
			}  
			
			
			if (currentScrollTop > 1400) {
				img1.style.left = '38%';
				img1.style.bottom = '158px';
				img2.style.bottom = '60px';
				img3.style.left = '16%';
				img3.style.top = '80px';
				img4.style.right = '22%';
				img4.style.top = '120px';

			}   

			if (currentScrollTop > 1500) {
				img1.style.left = '36%';
				img1.style.bottom = '165px';
				img2.style.bottom = '112px';
				img3.style.left = '50%';
				img3.style.transform = 'translateX(-50%)';
				img3.style.top = '150px';
				img4.style.right = '38%';
				img4.style.top = '219px';
		
			}   

			if (currentScrollTop > 1600) {
				img1.style.left = '58%';
				img1.style.bottom = '240px';
				img4.style.right = '60%';
				img4.style.top = '270px';
			}   

			if (currentScrollTop > 1700) {
				img1.style.left = '78%';
				img1.style.bottom = '334px';
				img4.style.right = '74%';
				img4.style.top = '306px;';
			}   
		
			lastScrollTop = currentScrollTop <= 0 ? 0 : currentScrollTop;


		}

		function isEndOfPage() {
			return (window.innerHeight + window.scrollY) >= document.body.offsetHeight;
		}

		document.addEventListener('DOMContentLoaded', () => {
			document.querySelectorAll('.submit-btn')
				.forEach(el => {
					el.addEventListener('click', sendForm);
				});
	
			const thanksModal = new bootstrap.Modal('#myModal-2');
	
			function sendForm(event) {
				event.preventDefault();
				
				const form = event.target.closest('form');
				let data = new FormData(form);
	
				axios
					.post('/send-form', data)
					.then(response => {
						console.log(response.data);
						thanksModal.show();
					})
			}
		})


	</script>
@endsection

