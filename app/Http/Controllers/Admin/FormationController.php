<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Formation;
use App\Models\Inscription;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formations = Formation::all();
        return view('admin.formations.index', compact('formations'));
    }

    public function create()
    {
        return view('admin.formations.create');
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'price' => 'required|numeric',
            'type' => 'required|string|in:Formation en présentiel,Formation en ligne',
        ]);

        Formation::create($validatedData);

        return redirect()->route('formations.index')->with('success', 'Formation créée avec succès.');
    }
    public function edit($id)
    {
        $formation = Formation::findOrFail($id);
        return view('admin.formations.edit', compact('formation'));
    }

    /**
     * Met à jour la formation spécifiée dans la base de données.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'price' => 'required|numeric',
            'type' => 'required|string|in:Formation en présentiel,Formation en ligne',
        ]);

        $formation = Formation::findOrFail($id);
        $formation->update($validatedData);

        return redirect()->route('formations.index')->with('success', 'Formation mise à jour avec succès.');
    }

    public function destroy($id)
    {
        $formation = Formation::findOrFail($id);
        $formation->delete();

        return redirect()->route('formations.index')->with('success', 'Formation supprimée avec succès.');
    }

    public function form_list(){
        $inscriptions = Inscription::orderBy('created_at', 'desc')->get();
        return view('admin.formations.form_liste', compact('inscriptions'));
    }


}
