@props(['product' => null])

<a href="{{ route('products.show', $product->id) }}" class="catalog-content__card col-md-6 col-lg-4 mb-3">        
	@if ($product?->thumbnail)
		<img src="
		@if (str_starts_with($product?->thumbnail, 'http'))
			{{ $product?->thumbnail }}
		@else
			/storage/{{ $product?->thumbnail }}
		@endif
		" alt="{{ $product->title }}">
	@endif
	<h3>{{ $product->title }}</h3>
    <ul>
        <li class="me-2">Артикул: {{ $product->part_number }}</li>
    </ul>
	<span href="card-1.html">{{ $product->price }}</span>
</a>
