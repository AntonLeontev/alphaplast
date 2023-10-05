@extends('layouts.app')

@section('title', 'Товар')

@section('content')
    <main>
        <section class="card">
            <div class="container">
                <div>
                    <h2>{{ $product->title }}</h2>
                </div>
                <div class="card__wrapper">
                    <div class="card__img">
                        <img src="
						@if (str_starts_with($product?->thumbnail, 'http')) {{ $product?->thumbnail }}
						@else
							/storage/{{ $product?->thumbnail }} @endif
						"
                            alt="{{ $product->title }}">
                    </div>
                    <div class="card__info">
                        <div><span> Артикул </span> {{ $product->part_number }}</div>
						@if ($product->diameter)
                        	<div><span> Диаметр</span> {{ $product->diameter }} мм</div>
						@endif
						@if ($product->throat_diameter)
                        	<div><span> Диаметр горла </span>{{ $product->throat_diameter }} мм</div>
						@endif
						@if ($product->volume)
                        	<div><span> Объем </span> {{ $product->volume }} мл</div>
						@endif
						@if ($product->height)
                        	<div><span> Высота </span> {{ $product->height }} мм</div>
						@endif
						@if ($product->weight)
                        	<div><span> Вес </span> {{ $product->weight }} г</div>
						@endif
                    </div>
                    <div class="card__card">
						@if (is_null($product->price) || $product->price === 0)
                        	<div>от {{ $product->price }}</div>
						@else
							<div>по запросу</div>
						@endif
                        
                        <a href="#" data-bs-toggle="modal" data-bs-target="#myModal">ЗАКАЗАТЬ</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div id="myModal" class="modal fade z999" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true"
        style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content modal-fb">
                <div class="mw-50 p-2">
                    <h3>Оставьте свои контакты, мы с вами свяжемся для обсуждения деталей </h3>
                    <form action="">
                        <div>
                            <input name="name" type="text" class="form-control" placeholder="Ваше имя">
                        </div>
                        <div x-data>
                            <input name="phone" type="text" class="form-control" placeholder="Номер телефона"
                                x-mask="8 999 999-99-99">
                        </div>
                        <div class="mb-4">
                            <input name="email" type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="d-flex flex-column mt-4">
                            <button type="submit" class="btn btn-primary submit-btn mb-2" data-bs-toggle="modal"
                                data-bs-dismiss="modal">Отправить</button>
                        </div>
                    </form>
                </div>



            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="myModal-2" class="modal fade z999" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true"
        style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-fb">
                <div class="w-100 d-flex justify-content-end p-2">
                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="h1 p-5 text-center text-white">
                    Спасибо заявка отправлена
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

@section('body-scripts')
<script>
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
