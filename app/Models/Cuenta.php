<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = [
        'nombre', 'apellidos',
    ];

    public function usuario(){
        return $this->belongsTo(Usuario::class, 'idUsuario');
    }

}
