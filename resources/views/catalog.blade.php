@extends('layouts.app')

@section('title', 'Каталог')

@section('content')
	<main class="mb-5">
        <section class="catalog-hero hero">
            <div class="container">
                <h1 class="hero__title">КАТАЛОГ ПРОДУКЦИИ</h1>
                <div class="select" style="background: #fff; border-radius: 10px;">
                    <input class="select__input" type="hidden" name="">
                    <div class="select__head">ВСЯ ПРОДУКЦИЯ</div>
                    <ul class="select__list">
                        <li class="select__item" data-id="banki">банки</li>
                        <li class="select__item" data-id="butilki">БУТЫЛКИ</li>
                        <li class="select__item" data-id="preformi">ПРЕФОРМЫ</li>
                        <li class="select__item" data-id="pet-preforma">ПЭТ-Преформа для банок</li>
                        <li class="select__item" data-id="press-formi">ПРЕСС-ФОРМЫ</li>
                        <li class="select__item" data-id="krishki">КРЫШКИ</li>
                    </ul>
                </div>
                <button type="button" class="catalog-hero__filter-btn">фильтр</button>
                <div>
                    
                </div>
                <ul class="catalog-hero__list">
                    <li><button type="button" class="btn__item" data-id="banki">банки</button></li>
                    <li><button type="button" class="btn__item" data-id="butilki">БУТЫЛКИ</button></li>
                    <li><button type="button" class="btn__item" data-id="preformi">ПРЕФОРМЫ</button></li>
                    <li><button type="button" class="btn__item" data-id="pet-preforma">ПЭТ-Преформа для банок</button></li>
                    <li><button type="button" class="btn__item" data-id="press-formi">ПРЕСС-ФОРМЫ</button></li>
                    <li><button type="button" class="btn__item" data-id="krishki">КРЫШКИ</button></li>
                </ul>
                <div class="catalog-hero__filter-wrapp">
                    <x-search />
					
                    <form class="d-flex justify-content-between align-items-center">
						<input type="hidden" name="category" id="category-input">
						<x-filter name="diameter" :param="$diameters" label="Диаметр" extend="мм" />
						<x-filter name="throat_diameter" :param="$throatDiameters" label="Горловина" extend="мм" />
						<x-filter name="height" :param="$height" label="Высота" extend="мм" />
						<x-filter name="weight" :param="$weight" label="Вес" extend="г" />
						<x-filter name="volume" :param="$volume" label="Объем" extend="мл" />
                        
                        <button type="submit" class="filter__btn" style=" background-color: #5934C2; color: #fff;">Подобрать</button>
                    </form>
                    <div class="mt-3 mb-3 text-end">
						<form>
							<button type="submit" class="filter__btn-1" style="color: #000;">Сбросить фильтр</button>
						</form>
                    </div>
                </div>
            </div>
        </section>
        <section class="filter d-none">
            <div class="container">
                <x-search />

                <form class="">
					<div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-2 gap-1">
						<x-filter name="diameter" :param="$diameters" label="Диаметр" extend="мм" class="w-100 w-md-auto" />
						<x-filter name="throat_diameter" :param="$throatDiameters" label="Горловина" extend="мм" class="w-100 w-md-auto" />
						<x-filter name="height" :param="$height" label="Высота" extend="мм" class="w-100 w-md-auto" />
						<x-filter name="weight" :param="$weight" label="Вес" extend="г" class="w-100 w-md-auto" />
						<x-filter name="volume" :param="$volume" label="Объем" extend="мл" class="w-100 w-md-auto" />
					</div>

					<div>

						<button type="submit" class="filter__btn mt-2 mt-md-0 px-2">Подобрать</button>
					</div>
				</form>
				<form class="d-flex justify-content-end">
					<button type="button" class="filter__btn-1">Сбросить фильтр</button>
				</form>

            </div>
        </section>

        <section class="catalog-content catalog-contentbanki" id="banki">
            <div class="container">
                <h2>банки</h2>
				@empty($products["1"])
					<div class="text-center">Ничего не найдено</div>
				@else
					<div class="row justify-content-center justify-content-md-between">
						@foreach ($products["1"] as $product)
							<x-product-preview :$product />
						@endforeach
					</div>
				@endempty
            </div>
        </section>
        <section class="catalog-content catalog-contentbutilki d-none" id="butilki">
            <div class="container">
                <h2>БУТЫЛКИ</h2>
				@empty($products["2"])
					<div class="text-center">Ничего не найдено</div>
				@else
					<div class="row justify-content-center justify-content-md-between">
						@foreach ($products["2"] as $product)
							<x-product-preview :$product />
						@endforeach
					</div>
				@endempty
            </div>
        </section>

        <section class="catalog-content catalog-contentpreformi d-none" id="preformi">
            <div class="container">
                <h2>ПРЕФОРМЫ</h2>
               @empty($products["3"])
					<div class="text-center">Ничего не найдено</div>
				@else
					<div class="row justify-content-center justify-content-md-between">
						@foreach ($products["3"] as $product)
							<x-product-preview :$product />
						@endforeach
					</div>
				@endempty
            </div>
        </section>

        <section class="catalog-content catalog-contentpet-preforma d-none" id="pet-preforma">
            <div class="container">
                <h2>ПЭТ-Преформа для банок</h2>
                @empty($products["4"])
					<div class="text-center">Ничего не найдено</div>
				@else
					<div class="row justify-content-center justify-content-md-between">
						@foreach ($products["4"] as $product)
							<x-product-preview :$product />
						@endforeach
					</div>
				@endempty
            </div>
        </section>

        <section class="catalog-content catalog-contentpress-formi d-none" id="press-formi">
            <div class="container">
                <h2>пресс-формы</h2>
                @empty($products["5"])
					<div class="text-center">Ничего не найдено</div>
				@else
					<div class="row justify-content-center justify-content-md-between">
						@foreach ($products["5"] as $product)
							<x-product-preview :$product />
						@endforeach
					</div>
				@endempty
            </div>
        </section>

        <section class="catalog-content catalog-contentkrishki d-none" id="krishki">
            <div class="container">
                <h2>КРЫШКИ</h2>
               @empty($products["6"])
					<div class="text-center">Ничего не найдено</div>
				@else
					<div class="row justify-content-center justify-content-md-between">
						@foreach ($products["6"] as $product)
							<x-product-preview :$product />
						@endforeach
					</div>
				@endempty
            </div>
        </section>


    </main>
@endsection

@section('body-scripts')
	<script>
		let select = document.querySelector('.select__head');
		let list = document.querySelector('.select__list');
		let filterBtn = document.querySelector('.catalog-hero__filter-btn');
		let filter = document.querySelector('.filter');

		
		select.addEventListener('click', toggleMenu);
		filterBtn.addEventListener('click', toggleFilter);

		function toggleMenu(event) {
			select.classList.toggle('open');
			list.classList.toggle('open');
		}

		function toggleFilter(event) {
			filter.classList.toggle('d-none');
		}
	</script>
@endsection
