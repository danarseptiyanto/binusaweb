<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();

        return view('berita', compact('articles'));
    }

    public function detail($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $otherArticles = Article::latest()->take(3)->get();

        return view('berita-detail', compact('article', 'otherArticles'));
    }
}
