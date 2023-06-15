<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
	{
		$companyNews = Article::where('is_published', 1)->where('section_id', 1)->take(3)->get();
		$petNews = Article::where('is_published', 1)->where('section_id', 2)->take(3)->get();

		return view('news', compact('companyNews', 'petNews'));			
	}

	public function show(Article $article)
	{
		$prevArticle = Article::where('is_published', 1)
			->where('created_at', '<', $article->created_at)
			->orderByDesc('created_at')
			->first();

		$nextArticle = Article::where('is_published', 1)
			->where('created_at', '>', $article->created_at)
			->orderByDesc('created_at')
			->first();
		
		return view('article', compact('article', 'prevArticle', 'nextArticle'));
	}
}
