@props([
	'title' => '',
	'articles',
])
@if ($articles->isNotEmpty())
	<section class="news">
		<div class="container">
			<h2>{{ $title }}</h2>

			<div class="mb-3 row justify-content-md-between justify-content-center">
				
				@foreach ($articles as $article)
					<x-article-preview :$article />
				@endforeach
				
			</div>
			<div class="text-center">
				<button>БОЛЬШЕ НОВОСТЕЙ</button>
			</div>
		</div>
	</section>
@endif
