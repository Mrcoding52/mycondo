<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;

    protected $table = 'departement';
    protected $primaryKey = 'id_dep';
    public $timestamps = false;

    public function communes()
    {
        return $this->hasMany(Commune::class, 'id_dep');
    }
}
