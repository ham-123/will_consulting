<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('admin.articles.index', compact('articles'));
    }

    // Méthode pour afficher le formulaire de création d'un nouvel article
    public function create()
    {
        return view('admin.articles.create');
    }

    // Méthode pour stocker un nouvel article
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $article = new Article();
        $article->title = $request->title;
        $article->content = $request->content;

        if ($request->hasFile('image')) {
            $article->saveImage($request->file('image'));
        } else {
            $article->save();
        }

        return redirect()->route('articles.index')->with('success', 'Article créé avec succès.');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.articles.show', compact('article'));
    }



    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.articles.edit', compact('article'));
    }

 
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $article = Article::findOrFail($id);
        $article->title = $request->title;
        $article->content = $request->content;

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($article->image) {
                Storage::disk('public')->delete($article->image);
            }
            // Save the new image
            $article->saveImage($request->file('image'));
        }

        $article->save();

        return redirect()->route('articles.index')->with('success', 'Article mis à jour avec succès.');
    }
    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        // Supprimer l'image associée si elle existe
        if ($article->image) {
            Storage::disk('public')->delete($article->image);
        }

        // Supprimer l'article
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès.');
    }

}
