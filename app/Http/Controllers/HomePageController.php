<?php

namespace App\Http\Controllers;

use App\Models\Article;

class HomePageController extends Controller
{
    public function __invoke()
    {
        $articles = Article::query()
            ->where('on_home', 1)
            ->where('is_published', 1)
            ->orderByDesc('created_at')
            ->get();

        return view('welcome', compact('articles'));
    }
}
