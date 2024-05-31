<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Recrutement;
use Illuminate\Http\Request;

class RecrutementController extends Controller
{
    public function index()
    {
        $recrutements = Recrutement::all();
        return view('admin.recrutements.index', compact('recrutements'));
    }
    public function create()
    {
        return view('admin.recrutements.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required',
            'competences_requises' => 'required',
            'type_contrat' => 'required|in:CDI,CDD,Freelance',
            'lieu_travail' => 'required|string|max:255',
            'date_publication' => 'required|date',
            'date_limite' => 'required|date',
        ]);

        Recrutement::create($request->all());

        return redirect()->route('recrutements.index')->with('success', 'Recrutement créé avec succès.');
    }

    public function edit($id)
    {
        $recrutement = Recrutement::findOrFail($id);
        return view('admin.recrutements.edit', compact('recrutement'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required',
            'competences_requises' => 'required',
            'type_contrat' => 'required|in:CDI,CDD,Freelance',
            'lieu_travail' => 'required|string|max:255',
            'date_publication' => 'required|date',
            'date_limite' => 'required|date',
        ]);

        $recrutement = Recrutement::findOrFail($id);
        $recrutement->update($request->all());

        return redirect()->route('recrutements.index')->with('success', 'Recrutement mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $recrutement = Recrutement::findOrFail($id);
        $recrutement->delete();

        return redirect()->route('recrutements.index')->with('success', 'Recrutement supprimé avec succès.');
    }
}
