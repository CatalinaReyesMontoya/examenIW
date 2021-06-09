<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    public function Usuario()
    {
        return $this->hasOne(
            Contacto::class,
            'idContacto';
        );
    }
}
