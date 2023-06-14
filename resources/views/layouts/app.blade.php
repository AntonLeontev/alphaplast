<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Альфапласт</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,300;1,500&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    {{-- <link rel="stylesheet" href="css/um-icon-style.css"> --}}
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    
@include('partials.header')

@yield('content')

<div class="btn-up btn-up_hide"></div>
@include('partials.footer')


{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
@yield('body-scripts')

<script>
	const btnUp = {
		el: document.querySelector('.btn-up'),
		show() {
			// удалим у кнопки класс btn-up_hide
			this.el.classList.remove('btn-up_hide');
		},
		hide() {
			// добавим к кнопке класс btn-up_hide
			this.el.classList.add('btn-up_hide');
		},
		addEventListener() {
			// при прокрутке содержимого страницы
			window.addEventListener('scroll', () => {
				// определяем величину прокрутки
				const scrollY = window.scrollY || document.documentElement.scrollTop;
				// если страница прокручена больше чем на 400px, то делаем кнопку видимой, иначе скрываем
				scrollY > 400 ? this.show() : this.hide();
			});
			// при нажатии на кнопку .btn-up
			document.querySelector('.btn-up').onclick = () => {
				// переместим в начало страницы
				window.scrollTo({
					top: 0,
					left: 0,
					behavior: 'smooth'
				});
			}
		}
	}
	btnUp.addEventListener();
</script>

</body>
</html>
