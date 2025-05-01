<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;

    protected $table = 'commune';
    protected $primaryKey = 'id_com';
    public $timestamps = false;

    public function arrondissements()
    {
        return $this->hasMany(Arrondissement::class, 'id_com');
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class, 'id_dep');
    }
}
