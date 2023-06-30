@props(['article'])

<div class="schedule__item @if (!request()->is('/'))
	col-md-6 col-lg-4 mb-3 p-0
@endif">
    <picture>
        <img class="" src="/storage/{{ $article->thumbnail }}" alt="фото" />
    </picture>
    <div class="schedule__item-wrapp">
        <h3 class="">{{ $article->title }}</h3>
        <p>{!! $article->description_short !!}</p>
        <a href="{{ route('articles.show', $article->slug) }}">читать</a>
    </div>
</div>
