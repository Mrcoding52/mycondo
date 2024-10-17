<?php

namespace App\Http\Controllers;

use App\Models\properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class propertiesController extends Controller
{
    public function  index(){
        return view('index');
    }

    public function create(){
        return view('properties.create');
    }
    
    public function store(Request $request){

        $request->validate([
            'titre' => ['required', 'string', 'max:255'],
            'statut' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
            'environnement' => ['required', 'string', 'max:255'],
            'nChambre' => ['required', 'integer', 'min:0'],
            'nDouche' => ['required', 'integer', 'min:0'],
            'nGarage' => [ 'integer', 'min:0'],
            'nPicsine' => ['integer', 'min:0'],
            'images' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
            'adresse' => ['required', 'string', 'max:255'],
            'details' => ['required', 'text', 'min:500'],
        ], [
            // Messages personnalisés pour les champs
            'titre.required' => 'Le titre est requis.',
            'titre.max' => 'Le titre ne doit pas dépasser 255 caractères.',
            
            'statut.required' => 'Le statut est requis.',
            
            'type.required' => 'Le type est requis.',
            
            'environnement.required' => 'L\'environnement est requis.',
            
            'nChambre.required' => 'Le nombre de chambres est requis.',
            'nChambre.integer' => 'Le nombre de chambres doit être un nombre entier.',
            'nChambre.min' => 'Le nombre de chambres doit être au moins 0.',
        
            'nDouche.integer' => 'Le nombre de douches doit être un nombre entier.',
            'nDouche.min' => 'Le nombre de douches doit être au moins 0.',

            'nGarage.integer' => 'Le nombre de garages doit être un nombre entier.',
            'nGarage.min' => 'Le nombre de garages doit être au moins 0.',

            'nPicsine.integer' => 'Le nombre de piscines doit être un nombre entier.',
            'nPicsine.min' => 'Le nombre de piscines doit être au moins 0.',
        
            'images.required' => 'L\'image est requise.',
            'images.image' => 'Le fichier doit être une image.',
            'images.mimes' => 'Le fichier doit être au format jpg, jpeg ou png.',
            'images.max' => 'L\'image ne doit pas dépasser 1 Mo.',
        
            'adresse.required' => 'L\'adresse est requise.',
            
            'details.required' => 'Les détails sont requis.',
            'details.min' => 'Les détails doivent comporter minimum 500 caractères.',
        ]);
        

        $properties = new properties();
        $properties->idUser = Auth::id();
        $properties->titre = $request->titre;
        $properties->statut = $request->statut;
        $properties->type = $request->type;
        $properties->environnement = $request->environnement;
        $properties->nChambre = $request->nChambre;
        $properties->nDouche = $request->nDouche;
        $properties->nGarage = $request->nGarage;
        $properties->nPicsine = $request->nPicsine;
        $properties->images = $request->images;
        $properties->adresse = $request->adresse;
        $properties->details = $request->details;


        $properties->save();

        // creer un service de file upload pour eviter de repeter ce bout de code

        if ($request->hasFile('image')) {


            foreach ($request->file('image') as $file) {

                $path = $file->store('uploads','public');
                images::create([
                    'idPro'=> $produits->id,
                    'filename' => $path,
                ]);

            }
        }


        return redirect('/produits')->with('status', 'Article publié avec succès...');
    }
   
}
