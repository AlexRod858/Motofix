<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problema extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
    ];


    public function soluciones()
    {
        return $this->hasMany(Solucion::class);
    }

}
