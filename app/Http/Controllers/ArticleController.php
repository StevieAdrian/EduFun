<?php

namespace App\Http\Controllers;

use App\Models\Article; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function show($id){
        $article = Article::with(['category', 'writer'])
            ->where('query_string', $id)
            ->firstOrFail();

        $article->increment('view_count');
        $article->refresh();

        return view('articles/index', compact('article'));
    }
}
