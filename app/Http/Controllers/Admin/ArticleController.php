<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::latest()->paginate(9);
        return view('admin.dashboard.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.dashboard.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:articles,slug|max:255',
            'author' => 'nullable|string|max:255',
            'published_at' => 'nullable|date',
            'status' => 'in:draft,published',
            'category' => 'nullable|string|max:255',
            'tags' => 'nullable|string|max:255',
            'thumbnail' => 'nullable|image|max:2048', // Assuming thumbnail is an image
            'content' => 'required|string',
            'excerpt' => 'nullable|string|max:255',
        ]);

        Article::create($validated);
        return redirect()->route('admin.articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::findOrFail($id);
        return view('admin.dashboard.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::findOrFail($id);
        return view('admin.dashboard.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article = Article::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:articles,slug,' . $article->id . '|max:255',
            'author' => 'nullable|string|max:255',
            'published_at' => 'nullable|date',
            'status' => 'in:draft,published',
            'category' => 'nullable|string|max:255',
            'tags' => 'nullable|string|max:255',
            'thumbnail' => 'nullable|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'nullable|string|max:255',
        ]);
        $article->update($validated);
        return redirect()->route('admin.articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('admin.articles.index');
    }
}
