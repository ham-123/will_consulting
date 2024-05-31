<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Formation;
use App\Models\Inscription;
use Illuminate\Http\Request;

class FormationsController extends Controller
{
    public function index()
    {
        $formations = Formation::all();
        return view('user.formations.index', compact('formations'));
    }

    public function show($id)
    {
        $formation = Formation::findOrFail($id);
        return view('user.formations.details', compact('formation'));
    }

    public function inscription($id)
    {
        $formation = Formation::findOrFail($id);
        return view('user.formations.inscription', compact('formation'));
    }

    public function form_inscription($id){
        $formation = Formation::findOrFail($id);
        return view('user.formations.form_inscription', compact('formation'));
    }

    public function store(Request $request)
    {
        // Valider les données
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'type' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'nullable|string|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        // Créer une nouvelle inscription
        Inscription::create([
            'formation_title' => $request->title,
            'formation_price' => $request->price,
            'formation_type' => $request->type,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        // Rediriger ou retourner une réponse
        return redirect()->back()->with('success', 'Inscription réussie! Vous serez appelé directement pour finaliser votre inscription ou être contacté par WhatsApp.');
    }
}
