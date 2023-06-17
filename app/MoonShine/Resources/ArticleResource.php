<?php

namespace App\MoonShine\Resources;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;

use MoonShine\Actions\FiltersAction;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\BelongsTo;
use MoonShine\Fields\Date;
use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Fields\Slug;
use MoonShine\Fields\SwitchBoolean;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Quill\Fields\Quill;
use MoonShine\Resources\Resource;

class ArticleResource extends Resource
{
	public static string $model = Article::class;

	public static string $title = 'Статьи';

	public static array $with = ['section'];

	public static string $orderField = 'created_at';

	public function fields(): array
	{
		return [
			Grid::make('test', [
				Column::make([
					Block::make([
						Text::make('Заголовок', 'title')->required(),
						Slug::make('Slug')
							->from('title')
							->separator('-')
							->unique()
							->hideOnIndex()
							->hideOnCreate()
							->locked(),
						Image::make('Обложка', 'thumbnail')->dir('articles')->disk('public'),
						BelongsTo::make('Раздел', 'section', 'title'),
						TinyMce::make('Текст статьи', 'description')
							->plugins('link lists fullscreen wordcount table preview')
							->toolbar('undo redo | blocks fontsize | alignleft aligncenter alignright | bold italic underline | link | bullist numlist')
							->required()
							->hideOnIndex(),
						Date::make('Создана', 'created_at')
							->format('j.m.Y')
							->hideOnForm()
							->sortable(),
					]),
				])->columnSpan(10),
				Column::make('Видимость', [
					Block::make([
						SwitchBoolean::make('Опубликовано', 'is_published')->autoUpdate(true),
						SwitchBoolean::make('На главной', 'on_home')->autoUpdate(true),
					]),
				])->columnSpan(2),
			]),
        ];
	}

	public function rules(Model $item): array
	{
	    return [
			'title' => ['required', 'string', 'max:250'],
			'thumbnail' => ['sometimes', 'image', 'max:6000'],
			'description' => ['required', 'string', 'max:15000']
		];
    }

    public function search(): array
    {
        return ['title'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }
}
