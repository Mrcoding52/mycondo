<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class properties extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'statut',
        'type',
        'environnement',
        'nChambre',
        'nDouche',
        'nGarage',
        'nPicsine',
        'images',
        'adresse',
        'details'
    ];

    public function images()
    {
        return $this->hasMany(images::class, 'idPro');
    }
}
