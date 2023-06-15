@props(['product'])

<div class="catalog-content__card col-md-6 col-lg-4 mb-3">
    <img src="/storage/{{ $product->thumbnail }}" alt="{{ $product->title }}">
    <h3>{{ $product->title }}</h3>
    <ul>
        <li class="me-2">Артикул {{ $product->part_number }}</li>
    </ul>
    <a href="{{ route('products.show', $product->id) }}">{{ $product->price }}</a>
</div>
