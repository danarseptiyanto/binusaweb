<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $filterLabel = $request->input('label'); // Get the label filter from the request

        $articles = Article::query()
            ->when($search, function ($query, $search) {
                return $query->where('title', 'like', '%' . $search . '%');
            })
            ->when($filterLabel, function ($query, $filterLabel) {
                return $query->whereJsonContains('label', $filterLabel);
            })
            ->latest()
            ->paginate(9);

        return view('berita', compact('articles', 'search', 'filterLabel'));
    }

    public function detail($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $otherArticles = Article::latest()->take(3)->get();

        return view('berita-detail', compact('article', 'otherArticles'));
    }
}
