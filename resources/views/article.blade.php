@extends('layouts.app')

@section('title', $article->title)

@section('content')
	<main>
        <section class="post">
            <div class="container">
                <div class="post__btn-wrapper">
					@if ($prevArticle !== null)
                    	<a class="post__btn post__btn-prev" href="{{ route('articles.show', $prevArticle->slug) }}">предыдущая новость</a>
					@endif
					@if ($nextArticle !== null)
						<a class="post__btn post__btn-next" href="{{ route('articles.show', $nextArticle->slug) }}">Следующая новость</a>
					@endif
                    <a class="post__btn-news" href="{{ route('news') }}">все новости</a>   
                </div>
                <div>
                    <h2>{{ $article->title }}</h2>
                    <div class="post__title-text">{{ $article->created_at->translatedFormat('j M Yг.') }}</div>
                </div>
                <div class="post__wrapper">
                    {!! $article->description !!}
                </div>
                <div class="post__footer">
                    <p>
                        Закажите в Альфапласт ПЭТ-тару в готовом формате или сделайте индивидуальный дизайн
                    </p>
                    <a href="{{ route('catalog') }}">ПЕРЕЙТИ В КАТАЛОГ</a>
                </div>
            </div>
        </section>

    </main>
@endsection
