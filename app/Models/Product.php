<?php

namespace App\Models;

use App\Support\Casts\PriceCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

	protected $fillable = [
		'title',
		'slug',
		'category_id',
		'thumbnail',
		'part_number',
		'diameter',
		'throat_diameter',
		'height',
		'price',
		'volume',
		'weight',
	];

	protected $casts = [
		'price' => PriceCast::class,
	];

	public function category(): BelongsTo
	{
		return $this->belongsTo(Category::class);
	}
}
