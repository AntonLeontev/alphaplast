<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
	{
		return view('product', compact('product'));
	}

	public function search(Request $request)
	{
		$products = Product::query()
			->where('title', 'like', "%{$request->search}%")
			->orWhere('part_number', 'like', "%{$request->search}%")
			->take(20)
			->get();

		return response()->json($products);
	}
}
