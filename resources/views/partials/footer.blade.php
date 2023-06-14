<footer class="footer">
	<div class="container">
		<div class="d-md-flex justify-content-between align-items-center align-items-lg-start">
			<div class="footer__block-1">
				<a href="index.html">
					<img src="{{ Vite::asset('resources/images/logo-footer.png') }}" alt="">
				</a>
				<p class="footer__text">
					Адрес офиса и производства ООО «Альфапласт»: Московская область, Солнечногорский район, Ленинградское шоссе, деревня Поярково, улица Клушинская 2.
				</p>
			</div>
			<ul class="footer__list">
				<li class="footer__item"><a class="footer__link" href="{{ route('about') }}">О нас</a></li>
				<li class="footer__item"><a class="footer__link" href="{{ route('catalog') }}">Каталог</a></li>
				<li class="footer__item"><a class="footer__link" href="{{ route('news') }}">Новости</a></li>
				<li class="footer__item"><a class="footer__link" href="{{ route('contacts') }}">Контакты</a></li>
			</ul>
			<div class="mb-57">
				<ul class="footer__contact">
					<li><a href="tel:+74955040605">+7 (495) 504-06-05</a></li>
					<li><a href="mailto:plastbox@mail.ru">plastbox@mail.ru</a></li>
				</ul>
			</div>
		</div>
		<ul class="footer__list-2">
			<li class="text-center footer__item-2">
				<a href="{{ route('user-agreement') }}">Пользовательское соглашение</a>
			</li>
			<li class="text-center footer__item-2">
				<a href="{{ route('cookie-policy') }}">ПОЛИТИКА ИСПОЛЬЗОВАНИЯ КУКИ ФАЙЛОВ</a>
			</li>
		</ul>
	</div>
</footer>
