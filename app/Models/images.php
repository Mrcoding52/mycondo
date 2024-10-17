<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    use HasFactory;

    protected $fillable = [
        'idPro',
        'filename',
    ];

    public function propertie()
    {
        return $this->belongsTo(properties::class, 'idPro');
    }
}
