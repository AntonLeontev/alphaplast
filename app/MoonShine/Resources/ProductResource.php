<?php

namespace App\MoonShine\Resources;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Actions\FiltersAction;
use MoonShine\Decorations\Flex;
use MoonShine\Fields\BelongsTo;
use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;
use MoonShine\Filters\BelongsToFilter;
use MoonShine\Resources\Resource;

class ProductResource extends Resource
{
    public static string $model = Product::class;

    public static string $title = 'Товары';

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Flex::make([
                Text::make('Название', 'title')
                    ->required(),
                Slug::make('Slug')
                    ->from('title')
                    ->locked()
                    ->hideOnCreate()
                    ->hideOnUpdate()
                    ->hideOnIndex(),
                BelongsTo::make('Категория', 'category_id', 'title')->sortable(),
                Image::make('Фото', 'thumbnail'),
            ]),
            Flex::make([
                Text::make('Артикул', 'part_number'),
                Number::make('Диаметр', 'diameter')
                    ->expansion('мм')
                    ->hideOnIndex(),
                Number::make('Диаметр горловины', 'throat_diameter')
                    ->hideOnIndex()
                    ->expansion('мм'),
            ]),
            Flex::make([
                Number::make('Высота', 'height')
                    ->hideOnIndex()
                    ->expansion('мм'),
                Number::make('Объем', 'volume')
                    ->hideOnIndex()
                    ->expansion('мл'),
                Number::make('Вес', 'weight')
                    ->hideOnIndex()
                    ->expansion('г'),
                Text::make('Цена', 'price', fn ($m) => $m->price?->amount())
                    ->expansion('₽'),
            ]),

        ];
    }

    public function rules(Model $item): array
    {
        return [
            'title' => ['required', 'max:250', 'min:1'],
            'thumbnail' => ['nullable', 'image'],
            'part_number' => ['nullable', 'string', 'max:250'],
            'diameter' => ['nullable', 'numeric'],
            'throat_diameter' => ['nullable', 'numeric'],
            'height' => ['nullable', 'numeric'],
            'volume' => ['nullable', 'numeric'],
            'weight' => ['nullable', 'numeric'],
            'price' => ['sometimes', 'decimal:0,2', 'min:0', 'nullable'],
        ];
    }

    public function search(): array
    {
        return ['title', 'part_number'];
    }

    public function filters(): array
    {
        return [
            BelongsToFilter::make('Категория', 'category_id', 'title'),
        ];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }
}
