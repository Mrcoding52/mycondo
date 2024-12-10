<?php

namespace App\Http\Controllers;

use App\Models\images;
use App\Models\properties;
use App\Models\statuts;
use App\Models\Types;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class propertiesController extends Controller
{
    public function  index(){
        $properties=properties::all();
        return view('index', compact('properties'));
    }

    public function viewProperty(){
        $properties=properties::all();
        return view('properties.properties', compact('properties'));
    }

    public function coPropertyView(){
        $coproperties=properties::where('statut', 3)->get();
        return view('properties.co-properties', compact('coproperties'));
    }

    public function show($id){
        $property = properties::find($id);
        return view('properties.show', compact('property'));
    }

    public function showByType($id){
        $property = properties::where('type', $id)->get();
        return view('properties.showByType', compact('property'));
    }

    public function showByStatus($id){
        $property = properties::where('statut', $id)->get();
        return view('properties.showByStatus', compact('property'));
    }

    public function create(){
        $types = Types::all();
        $statut = statuts::all();
        return view('properties.create', compact('types', 'statut'));
    }
    
    public function store(Request $request){

        $request->validate([
            'titre' => ['required', 'string', 'max:255'],
            'statut' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
            'nChambre' => [ 'integer', 'min:0'],
            'nDouche' => [ 'integer', 'min:0'],
            'nGarage' => [ 'integer'],
            'nPicsine' => ['integer'],
            'price' => ['required', 'numeric'],
            'telephone' => ['required','integer', 'min:8', ],
            'images' => 'required|array|max:4',
            'images.*' => 'image|mimes:jpg,jpeg,png|max:3024',
            'adresse' => ['required', 'string', 'max:255'],
            'details' => ['required', 'string'],
        ], [
            // Messages personnalisés pour les champs
            'titre.required' => 'Le titre est requis.',
            'titre.max' => 'Le titre ne doit pas dépasser 255 caractères.',
            
            'statut.required' => 'Le statut est requis.',
            
            'type.required' => 'Le type est requis.',
            
            'nChambre.integer' => 'Le nombre de chambres doit être un nombre entier.',
            'nChambre.min' => 'Le nombre de chambres doit être au moins 0.',
        
            'nDouche.integer' => 'Le nombre de douches doit être un nombre entier.',
            'nDouche.min' => 'Le nombre de douches doit être au moins 0.',

            'nGarage.integer' => 'Le nombre de garages doit être un nombre entier.',
            'nGarage.min' => 'Le nombre de garages doit être au moins 0.',

            'nPicsine.integer' => 'Le nombre de piscines doit être un nombre entier.',
            'nPicsine.min' => 'Le nombre de piscines doit être au moins 0.',

            'price.required' => 'Le prix est requis.',
            'price.numeric' => 'Le prix doit être un nombre.',
        
            'telephone.required' => 'Le numéro de telephone est requis.',
            'telephone.integer' => 'Le numéro de telephone doit être un nombre entier.',
            'telephone.min' => 'Le numéro de telephone doit être au moins 8 caractères.',
        
            'images.required' => 'L\'image est requise.',
            'images.mimes' => 'Le fichier doit être au format jpg, jpeg ou png.',
            'images.max' => 'L\'image ne doit pas dépasser 1 Mo.',
        
            'adresse.required' => 'L\'adresse est requise.',
            
            'details.required' => 'Les détails sont requis.',
            'details.min' => 'Les détails doivent comporter minimum 10 caractères.',
        ]);
        

        $properties = new properties();
        $properties->idUser = Auth::id();
        $properties->titre = $request->titre;
        $properties->statut = $request->statut;
        $properties->type = $request->type;
        $properties->nChambre = $request->nChambre;
        $properties->nDouche = $request->nDouche;
        $properties->telephone = $request->telephone;
        $properties->nGarage = $request->nGarage;
        $properties->nPicsine = $request->nPicsine;
        $properties->price = $request->price;
        $properties->adresse = $request->adresse;
        $properties->details = $request->details;


        $properties->save();

        // creer un service de file upload pour eviter de repeter ce bout de code

        if ($request->hasFile('images')) {


            foreach ($request->file('images') as $file) {

                $path = $file->store('uploads','public');
                images::create([
                    'idPro'=> $properties->id,
                    'images' => $path,
                ]);

            }
        }


        return redirect('/properties.create')->with('status', 'Article publié avec succès...');
    }

    public function update(Request $request, $id)
{
    $properties = properties::findOrFail($id); // Trouver le bien à modifier

    // Validation des données
    $request->validate([
        'titre' => ['required', 'string', 'max:255'],
        'statut' => ['required', 'string', 'max:255'],
        'type' => ['required', 'string', 'max:255'],
        'nChambre' => ['integer', 'min:0'],
        'nDouche' => ['integer', 'min:0'],
        'nGarage' => ['integer'],
        'nPicsine' => ['integer'],
        'price' => ['required', 'numeric'],
        'telephone' => ['required', 'integer', 'min:8'],
        'images' => 'nullable|array|max:4', // Les images sont facultatives lors de la mise à jour
        'images.*' => 'image|mimes:jpg,jpeg,png|max:3024',
        'adresse' => ['required', 'string', 'max:255'],
        'details' => ['required', 'string'],
    ], [
        // Messages personnalisés pour les champs
        'titre.required' => 'Le titre est requis.',
        'titre.max' => 'Le titre ne doit pas dépasser 255 caractères.',
        'statut.required' => 'Le statut est requis.',
        'type.required' => 'Le type est requis.',
        'nChambre.integer' => 'Le nombre de chambres doit être un nombre entier.',
        'nDouche.integer' => 'Le nombre de douches doit être un nombre entier.',
        'price.required' => 'Le prix est requis.',
        'telephone.required' => 'Le numéro de téléphone est requis.',
        'images.array' => 'Les images doivent être sous forme de tableau.',
        'images.mimes' => 'Chaque fichier doit être au format jpg, jpeg ou png.',
        'adresse.required' => 'L\'adresse est requise.',
        'details.required' => 'Les détails sont requis.',
    ]);

    // Mise à jour des champs
    $properties->update([
        'titre' => $request->titre,
        'statut' => $request->statut,
        'type' => $request->type,
        'nChambre' => $request->nChambre,
        'nDouche' => $request->nDouche,
        'telephone' => $request->telephone,
        'nGarage' => $request->nGarage,
        'nPicsine' => $request->nPicsine,
        'price' => $request->price,
        'adresse' => $request->adresse,
        'details' => $request->details,
    ]);

    // Gestion des images (si des images sont fournies)
    if ($request->hasFile('images')) {
        // Supprimer les anciennes images
        foreach ($properties->images as $image) {
            Storage::disk('public')->delete($image->images); // Supprime physiquement l'image
            $image->delete(); // Supprime l'entrée dans la base de données
        }

        // Enregistrer les nouvelles images
        foreach ($request->file('images') as $file) {
            $path = $file->store('uploads', 'public');
            images::create([
                'idPro' => $properties->id,
                'images' => $path,
            ]);
        }
    }

    return redirect()->route('properties.edit', $id)
        ->with('status', 'Article mis à jour avec succès.');
}

   
}
