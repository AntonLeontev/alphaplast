<form class="mb-3 w-100 position-relative" x-data="search">
	<input 
		name="search" 
		class="filter__input w-100" 
		type="text" 
		placeholder="Поиск по названию или артикулу"
		x-model="search"
		@input="getProducts"
	>
	<div class="search__pad top-100 z-3 w-100 mt-1" x-show="show" x-on:click.outside="hide">
		<template x-for="product in products">
			<a :href="'products/' + product.id">
				<div class=" d-flex align-items-center text-bg-light p-3">
					<template x-if="product.thumbnail">
						<img height="50px" :src="thumbnail(product.thumbnail)" alt="img" class="me-1">
					</template>
					<span class="text-black text-truncate d-block" x-text="product.title"></span>
					<span class="mx-2 text-secondary">Арт: </span>
					<span class="text-black" x-text="product.part_number"></span>
				</div>
			</a>
		</template>
		<div class="text-bg-light p-3" x-show="products.length === 0" x-cloak>
			Ничего не найдено
		</div>
	</div>
</form>

<script>
	document.addEventListener('alpine:init', () => {
		Alpine.data('search', () => ({
			search: '',
			products: [],
			show: false,
			getProducts() {
				if (this.search.length < 3) {
					this.hide();
					return;
				};

				axios
					.post('/products/search', {search: this.search})
					.then(response => {
						this.show = true;
						this.products = response.data;
					})
					.catch(error => {
						console.log(error);
					});
			},
			hide() {
				this.show = false;
			},
			thumbnail(thumbnail) {
				if (thumbnail.startsWith('http')) {
					return thumbnail;
				}
				return '/storage/' + thumbnail;
			},
		}))
	})
</script>
