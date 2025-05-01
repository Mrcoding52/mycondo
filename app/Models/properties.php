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
        'price',
        'nChambre',
        'nDouche',
        'telephone',
        'nGarage',
        'nPicsine',
        'adresse',
        'details'
    ];

    public function images()
    {
        return $this->hasMany(images::class, 'idPro');
    }

    public function statut()
{
    return $this->belongsTo(statuts::class);
}
}
