<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    //
    public function index() {
        $writers = Writer::with('articles')->get();

        return view('writers/index', compact('writers'));
    }

    public function list($id) {
        $writtenArticles = Writer::with('articles')->findOrFail($id);

        return view('writers.detail', compact('writtenArticles'));
    }
}
