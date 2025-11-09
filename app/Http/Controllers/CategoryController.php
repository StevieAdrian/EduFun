<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function show($id)
    {
        $categoryId = match ($id) {
            'interactive-multimedia' => 1,
            'software-engineering' => 2,
            default => null,
        };

        $category = Category::findOrFail($categoryId);
        $articles = Article::where('category_id', $categoryId)->with('writer')->orderBy('publish_date', 'desc')->get();

        return view('category.index', compact('category', 'articles'));
    }
}
