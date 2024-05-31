<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;


class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        // Créer un nouveau service avec les données du formulaire
        Service::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // Rediriger vers la page d'index avec un message de succès
        return redirect()->route('services.index')->with('success', 'Service créé avec succès.');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }
    public function update(Request $request, Service $service)
{
    // Valider les données du formulaire
    $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
    ]);

    // Mettre à jour les données du service
    $service->update([
        'title' => $request->title,
        'description' => $request->description,
    ]);

    // Rediriger vers la page d'index avec un message de succès
    return redirect()->route('services.index')->with('success', 'Service mis à jour avec succès.');
}

public function destroy(Service $service)
{
    // Supprimer le service
    $service->delete();

    // Rediriger vers la page d'index avec un message de succès
    return redirect()->route('services.index')->with('success', 'Service supprimé avec succès.');
}

}
