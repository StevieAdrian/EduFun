<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class PopularController extends Controller
{
    //
    public function index(Request $request) {
        $perPage = 3;
        $page = $request->query('page', 1);

        $articles = Article::orderBy('view_count', 'desc')
            ->skip(($page - 1) * $perPage)
            ->take($perPage)
            ->with(['writer','category'])
            ->get();

        $totalArticles = Article::count();
        $totalPages = ceil($totalArticles / $perPage);

        return view('popular.index', compact('articles', 'page','totalPages'));
    }
}
