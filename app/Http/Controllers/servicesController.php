<?php

namespace App\Http\Controllers;

use App\Models\services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class servicesController extends Controller
{

    public function index()
    {
<<<<<<< HEAD
        $services = services::paginate(10);        return view('services.services', compact('services'));
=======
        $services = services::all();
        return view('services.services', compact('services'));
>>>>>>> ef4c22462ca54af1a2d1e0cac7592c8e2157283f
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        // Valider les champs du formulaire
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'min:30'],
            'image' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:4048'], // Fichier image
        ]);

        $services = new services();
        $services->title = $request->input('title');
        $services->description = $request->input('description');

        if ($request->hasFile('image')) {
            $services->image = $request->file('image')->store('images', 'public');
        }

        $services->save();

        return redirect()->route('services.create')->with('success', 'votre service a été créé avec succès !');
    }

    // Afficher un post spécifique (Show)
    public function show($id)
    {
        $servicees = services::find($id);
        return view('services.show', compact('servicees')); // Affiche les détails d'un post spécifique
    }

    // Afficher le formulaire d'édition (Edit)
    public function edit($id)
    {
        $services = services::find($id);
        return view('services.edit', compact('services')); // Retourne la vue d'édition du post
    }

    // Mettre à jour un post existant (Update)
    public function update(Request $request, string $id)
    {
        $services = services::find($id);
        // Valider les champs du formulaire
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'min:30'],
            'image' => ['nullable', 'image', 'mimes:jpeg,jpg,png', 'max:2048'],
        ]);

        // Gestion de l'upload de l'image (si mise à jour)
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($services->image) {
                Storage::disk('public')->delete($services->image);
            }

            // Stocker la nouvelle image
            $imagePath = $request->file('image')->store('images', 'public');
        }

        // Mise à jour des champs
        $services->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $imagePath ?? $services->image, // Si l'image n'est pas changée, garder l'ancienne
        ]);

        return redirect()->route('service.edit', ['id' => $id])->with('success', 'Service mis à jour avec succès !');

    }

    // Supprimer un post existant (Delete)
    public function destroy(services $services)
    {
        // Supprimer l'image associée
        if ($services->image) {
            Storage::disk('public')->delete($services->image);
        }

        // Supprimer le post
        $services->delete();

        return redirect()->route('services.index')->with('success', 'Post supprimé avec succès !');
    }
}
