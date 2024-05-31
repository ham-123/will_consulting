<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\RDV;
use Illuminate\Http\Request;

class RDVController extends Controller
{
    public function rdv(Request $request)
    {
        $request->validate([
            'motif' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'telephone' => 'required|string|max:20',
        ]);

        RDV::create($request->all());

        return redirect()->back()->with('success', 'Votre demande a été envoyée avec succès.');
    }
}
