<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = [
        'nombre', 'apellidos', 'institucion', 'correo_e', 'telefono', 'descripcion', 'idUsuario'
    ];

    public function usuario(){
        return $this->belongsTo(User::class, 'idUsuario');
    }

}
