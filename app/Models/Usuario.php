<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public function Contacto()
    {
        return $this->hasMany(
            Contacto::class, 
            'idUsuario';
        );

    }
}


