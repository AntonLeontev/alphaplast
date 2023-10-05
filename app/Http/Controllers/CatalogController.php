<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::get();
        $diameters = $products->pluck('diameter')->unique()->filter()->sort()->toArray();
        $throatDiameters = $products->pluck('throat_diameter')->unique()->filter()->sort()->toArray();
        $height = $products->pluck('height')->unique()->filter()->sort()->toArray();
        $volume = $products->pluck('volume')->unique()->filter()->sort()->toArray();
        $weight = $products->pluck('weight')->unique()->filter()->sort()->toArray();

        $products = Product::query()
            ->when($request->diameter !== null, function ($query) use ($request) {
                $query->where('diameter', $request->diameter);
            })
            ->when($request->throat_diameter !== null, function ($query) use ($request) {
                $query->where('throat_diameter', $request->throat_diameter);
            })
            ->when($request->height !== null, function ($query) use ($request) {
                $query->where('height', $request->height);
            })
            ->when($request->weight !== null, function ($query) use ($request) {
                $query->where('weight', $request->weight);
            })
            ->when($request->volume !== null, function ($query) use ($request) {
                $query->where('volume', $request->volume);
            })
            ->get(['id', 'title', 'thumbnail', 'part_number', 'category_id', 'price'])
            ->groupBy('category_id');

        return view('catalog', compact('products', 'diameters', 'throatDiameters', 'height', 'volume', 'weight'));
    }
}
