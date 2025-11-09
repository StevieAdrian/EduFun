<?php

namespace App\Http\Controllers;

use App\Models\Article;
// use App\Http\
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        $articles = Article::with(['category', 'writer'])->orderBy('publish_date', 'desc')->get();

        return view('home', compact('articles'));
    }
}
