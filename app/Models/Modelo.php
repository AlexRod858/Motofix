<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_modelo',
    ];

    public function problemas()
    {
        return $this->hasMany(Problema::class);
    }
}
