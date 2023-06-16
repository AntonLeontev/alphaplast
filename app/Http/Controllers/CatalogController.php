<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(Request $request)
	{
		$diameters = Product::get('diameter')->pluck('diameter')->unique()->sort()->toArray();
		$throatDiameters = Product::get('throat_diameter')->pluck('throat_diameter')->unique()->sort()->toArray();
		$height = Product::get('height')->pluck('height')->unique()->sort()->toArray();
		$volume = Product::get('volume')->pluck('volume')->unique()->sort()->toArray();
		$weight = Product::get('weight')->pluck('weight')->unique()->sort()->toArray();

		$products = Product::with('category')
			->when($request->diameter !== null, function($query) use ($request) {
				$query->where('diameter', $request->diameter);
			})
			->when($request->throat_diameter !== null, function($query) use ($request) {
				$query->where('throat_diameter', $request->throat_diameter);
			})
			->when($request->height !== null, function($query) use ($request) {
				$query->where('height', $request->height);
			})
			->when($request->weight !== null, function($query) use ($request) {
				$query->where('weight', $request->weight);
			})
			->when($request->volume !== null, function($query) use ($request) {
				$query->where('volume', $request->volume);
			})
			->get(['id', 'title', 'thumbnail', 'part_number', 'category_id', 'price'])
			->groupBy('category_id');

		return view('catalog', compact('products', 'diameters', 'throatDiameters', 'height', 'volume', 'weight'));
	}
}
