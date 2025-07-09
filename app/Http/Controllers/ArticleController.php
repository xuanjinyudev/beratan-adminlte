<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $articles = Article::latest()->paginate(9);
        return view('article', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article', compact('article'));
    }
}
