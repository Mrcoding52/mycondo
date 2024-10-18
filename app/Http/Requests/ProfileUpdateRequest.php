<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules() : array
{
    return [
        'titre' => ['required', 'string', 'max:255'],
        'statut' => ['required', 'string', 'max:255'],
        'type' => ['required', 'string', 'max:255'],
        'environnement' => ['required', 'string', 'max:255'],
        'nChambre' => ['required', 'integer', 'min:0'],
        'nDouche' => ['required', 'integer', 'min:0'],
        'nGarage' => ['required', 'integer', 'min:0'],
        'nPicsine' => ['required', 'integer', 'min:0'],
        'images' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
        'adresse' => ['required', 'string', 'max:255'],
        'details' => ['required', 'string', 'max:500'],
    ];
}

public function messages() : array
{
    return [
        'titre.required' => 'Le titre est requis.',
        'titre.max' => 'Le titre ne doit pas dépasser 255 caractères.',
        'statut.required' => 'Le statut est requis.',
        'type.required' => 'Le type est requis.',
        'environnement.required' => 'L\'environnement est requis.',
        'nChambre.required' => 'Le nombre de chambres est requis.',
        'nChambre.integer' => 'Le nombre de chambres doit être un nombre entier.',
        'nChambre.min' => 'Le nombre de chambres doit être au moins 0.',
        'nDouche.required' => 'Le nombre de douches est requis.',
        'nDouche.integer' => 'Le nombre de douches doit être un nombre entier.',
        'nDouche.min' => 'Le nombre de douches doit être au moins 0.',
        'nGarage.required' => 'Le nombre de garages est requis.',
        'nGarage.integer' => 'Le nombre de garages doit être un nombre entier.',
        'nGarage.min' => 'Le nombre de garages doit être au moins 0.',
        'nPicsine.required' => 'Le nombre de piscines est requis.',
        'nPicsine.integer' => 'Le nombre de piscines doit être un nombre entier.',
        'nPicsine.min' => 'Le nombre de piscines doit être au moins 0.',
        'images.required' => 'L\'image est requise.',
        'images.image' => 'Le fichier doit être une image.',
        'images.mimes' => 'Le fichier doit être au format jpg, jpeg ou png.',
        'images.max' => 'L\'image ne doit pas dépasser 1 Mo.',
        'adresse.required' => 'L\'adresse est requise.',
        'details.required' => 'Les détails sont requis.',
        'details.max' => 'Les détails ne doivent pas dépasser 500 caractères.',
    ];
}

}
