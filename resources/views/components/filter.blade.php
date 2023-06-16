@props([
	'label' => '',
	'name',
	'param',
	'extend' => '',
])

<div {{ $attributes->class('d-flex flex-column align-items-center')->merge() }}>
	<label for="{{ $name }}" class="me-1">{{ $label }}</label>
	<select name="{{ $name }}" class="filter__select w-100 z-2">
		<option value="" class="filter__item" selected></option>

		@foreach ($param as $value)
			<option value="{{ $value }}" class="filter__item" @if(request()->{$name} == $value) selected @endif>{{ $value }} {{ $extend }}</option>
		@endforeach
	</select>
</div>
