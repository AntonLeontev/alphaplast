<header class="header">
	<div class="container d-flex justify-content-between align-items-center">
		<a href="/" class="hero__header-logo bg-cirgle">
			<img class="w-100" src="{{ Vite::asset('resources/images/logo.png') }}" alt="Logo">
		</a>
		<div class="menu">
			<button  type="button" class="menu__btn-close" >
				<i class="icon-close"></i>
			</button>   
			<ul class="menu__list">
				<li class="menu__item"><a class="menu__link btn-hover" href="{{ route('about') }}">О нас</a></li>
				<li class="menu__item"><a class="menu__link btn-hover" href="{{ route('catalog') }}">Каталог</a></li>
				<li class="menu__item"><a class="menu__link btn-hover" href="{{ route('news') }}">Новости</a></li>
				<li class="menu__item"><a class="menu__link btn-hover" href="{{ route('contacts') }}">Контакты</a></li>
			</ul>
			<div class="menu__adrees">
				<a href="tel:+74955040605">+7 (495) 504-06-05</a>   
			</div>
		</div>
		<button type="button" class="menu-burger color-green d-flex flex-column justify-content-center align-items-center">
			<span></span>
			<span class="my-1"></span>
			<span></span>
		</button>
		<div class="header__adrees">
			<a href="tel:+74955040605">+7 (495) 504-06-05</a>
		</div>
	</div>
</header>
