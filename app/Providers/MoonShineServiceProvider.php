<?php

namespace App\Providers;

use App\MoonShine\Resources\ArticleResource;
use App\MoonShine\Resources\ContactsResource;
use App\MoonShine\Resources\ProductResource;
use Illuminate\Support\ServiceProvider;
use MoonShine\Menu\MenuDivider;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\MoonShine;
use MoonShine\Resources\MoonShineUserResource;

class MoonShineServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        app(MoonShine::class)->menu([
			MenuItem::make('moonshine::ui.resource.admins_title', new MoonShineUserResource())
				->translatable()
				->icon('users'),

			MenuItem::make('Статьи', new ArticleResource())
				->translatable()
				->icon('heroicons.book-open'),

			MenuItem::make('Товары', new ProductResource())
				->translatable()
				->icon('heroicons.cube'),

			MenuItem::make('Контакты', new ContactsResource())
				->translatable()
				->icon('heroicons.envelope-open'),
			
			MenuDivider::make(), 

			MenuItem::make('На сайт', fn() => route('home'))
				->icon('heroicons.home'),
        ]);
    }
}
