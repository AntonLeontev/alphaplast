<?php

namespace App\MoonShine;

use App\Models\Article;
use App\Models\Product;
use MoonShine\Dashboard\DashboardBlock;
use MoonShine\Dashboard\DashboardScreen;
use MoonShine\Decorations\Flex;
use MoonShine\Metrics\ValueMetric;

class Dashboard extends DashboardScreen
{
	public function blocks(): array
	{
		return [
			DashboardBlock::make([
				ValueMetric::make('Статей')
					->value(Article::query()->count())->columnSpan(6),
				ValueMetric::make('Товаров')
					->value(Product::query()->count())->columnSpan(6),
			]),
		];
	}
}
