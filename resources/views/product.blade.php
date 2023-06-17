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
						@if (str_starts_with($product?->thumbnail, 'http'))
							{{ $product?->thumbnail }}
						@else
							/storage/{{ $product?->thumbnail }}
						@endif
						" alt="{{ $product->title }}">
                    </div>
                    <div class="card__info">
                        <div><span> Артикул </span> {{ $product->part_number }}</div>
                        <div><span> Диаметр</span> {{ $product->diameter }} мм</div>
                        <div><span> Диаметр горла  </span>{{ $product->throat_diameter }} мм</div>
                        <div><span> Объем </span> {{ $product->volume }} мл</div>
                        <div><span> Высота </span> {{ $product->height }} мм</div>
                        <div><span> Вес </span> {{ $product->weight }} г</div>
                    </div>
                    <div class="card__card">
                        <div>{{ $product->price }}</div>
                        <a href="">ДОБАВИТЬ В КОРЗИНУ</a>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
