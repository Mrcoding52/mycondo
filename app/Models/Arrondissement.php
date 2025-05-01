<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arrondissement extends Model
{
    use HasFactory;

    protected $table = 'arrondissement';
    protected $primaryKey = 'id_arrond';
    public $timestamps = false;

    public function commune()
    {
        return $this->belongsTo(Commune::class, 'id_com');
    }
}
