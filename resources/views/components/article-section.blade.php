@props([
	'title' => '',
	'articles',
])
@if ($articles->isNotEmpty())
	<section class="news" x-data="data{{ $articles->first()->section_id }}">
		<div class="container">
			<h2>{{ $title }}</h2>

			<div class="mb-3 row justify-content-md-between justify-content-center">
				
				<template x-for="article in articles.data">
					<div class="schedule__item col-md-6 col-lg-4 mb-3 p-0">
					<picture>
						<img :src="'/storage/' + article.thumbnail" alt="Обложка" />
					</picture>
					<div class="schedule__item-wrapp">
						<h3 x-text="article.title"></h3>
						<p x-text="article.description_short"></p>
						<a :href="'/news/' + article.slug">читать</a>
					</div>
				</div>
				</template>
				
			</div>
			<div class="text-center">
				<button 
					x-show="articles.data.length < articles.total"
					x-on:click="loadArticles"
				>
					БОЛЬШЕ НОВОСТЕЙ
				</button>
			</div>
		</div>
	</section>
	
	<script>
		document.addEventListener('alpine:init', () => {
			Alpine.data('data{{ $articles->first()->section_id }}', () => ({
				articles: @json($articles),
				section: {{ $articles->first()->section_id }},
				page: 1,
				loadArticles() {
					axios
						.get(`/articles/section/${this.section}?page=${this.page + 1}`, {timeout: 4000})
						.then(response => {
							response.data.data.forEach(article => this.articles.data.push(article));
							this.page = response.data.current_page;
						})
						.catch(error => {
							console.log(error);
						})
				},
			}))
		})
	</script>
@endif

