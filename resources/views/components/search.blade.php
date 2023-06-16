<form class="mb-3 w-100 position-relative" x-data="search">
	<input 
		name="search" 
		class="filter__input w-100" 
		type="text" 
		placeholder="Поиск по названию или артикулу"
		x-model="search"
		@input="getProducts"
	>
	<div class="search__pad top-100 z-3 w-100 mt-1">
		<template x-for="product in products">
			<a :href="'products/' + product.id">
				<div class="text-bg-light p-3">
					<img height="50px" :src="'/storage/' + product.thumbnail" alt="img" class="img">
					<span class="text-black text-truncate" x-text="product.title"></span>
					<span class="ms-2 text-secondary">Артикул: </span>
					<span class="text-black" x-text="product.part_number"></span>
				</div>
			</a>
		</template>
	</div>
</form>

<script>
	document.addEventListener('alpine:init', () => {
		Alpine.data('search', () => ({
			search: '',
			products: {},
			getProducts() {
				if (this.search.length < 3) return;

				axios
					.post('/products/search', {search: this.search})
					.then(response => {
						this.products = response.data;
					})
					.catch(error => {
						console.log(error);
					});
			},
		}))
	})
</script>
