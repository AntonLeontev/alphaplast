<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleSection;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
	{
		$companyNews = Article::where('is_published', 1)->where('section_id', 2)->paginate(3);
		$petNews = Article::where('is_published', 1)->where('section_id', 1)->paginate(3);

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
			->orderBy('created_at')
			->first();
		
		return view('article', compact('article', 'prevArticle', 'nextArticle'));
	}

	public function loadBySection(int $section)
	{
		$articles = Article::query()
			->where('section_id', $section)
			->paginate(3);

		return response()->json($articles);
	}
}
