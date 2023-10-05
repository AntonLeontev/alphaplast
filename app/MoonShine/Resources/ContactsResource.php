<?php

namespace App\MoonShine\Resources;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use MoonShine\Actions\FiltersAction;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Text;
use MoonShine\Fields\Url;
use MoonShine\Resources\Resource;

class ContactsResource extends Resource
{
    public static string $model = Contact::class;

    public static string $title = 'Контакты';

    public static string $subTitle = 'Изменяются на странице контактов, а также в шапке и подвале сайта';

    public static array $activeActions = ['show', 'edit'];

    public function fields(): array
    {
        return [
            Grid::make([
                Column::make([
                    Block::make([
                        Text::make('Основной телефон', 'primary_phone')
                            ->hint('Изменится в шапке и подвале'),
                        Text::make('Дополнительный телефон', 'secondary_phone'),
                        Text::make('Email')
                            ->hint('Изменится в шапке и подвале'),
                        Text::make('Адрес', 'address')->hideOnIndex(),
                    ]),
                ])->columnSpan(7),
                Column::make([
                    Block::make([
                        Url::make('Инстаграм', 'instagram'),
                        Url::make('Вконтакте', 'vk'),
                    ]),
                ])->columnSpan(5),
            ]),

        ];
    }

    public function rules(Model $item): array
    {
        return [
            'email' => ['email'],
            'address' => ['string'],
        ];
    }

    public function search(): array
    {
        return [];
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

    protected function afterUpdated(Model $item)
    {
        Cache::delete('contacts');
    }
}
